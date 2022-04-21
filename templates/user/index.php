
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="/public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="registerh1">
    <h1>Register</h1>

</div>

<div class="register">
    <form action="index.php" method="post">
        <label for="username"></label>
        <input type="text" name="username" placeholder="Username eingeben" id="username" required>
        <label for="password"></label>
        <input type="password" name="password" placeholder="Passwort eingeben" id="password" required>
        <input type="password" name="password" placeholder="Passwort nochmals eingeben" id="password2" required>
        <input type="submit" value="Register">

    </form>


</div>
</body>
</html>
<?php
 $DATABASE_HOST = '127.0.0.1';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'main';

    $con =mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if(mysqli_connect_error()){
        exit('Error connecting to database' . mysqli_connect_error());
    }

    if(!isset($_POST['username'], $_POST['password'])){
        exit('Empty Field(s)');
    }

    if(empty($_POST['username'] || empty ($_POST['password']))){
        exit('Values Empty');
    }

    if($stmt = $con->prepare('SELECT  id, password FROM users WHERE username = ?')){
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows>0){
            echo 'Username Already Exists. Try Again';
        }
        else{
            if($stmt = $con->prepare('INSERT INTO users(username, password)VALUES(?,?)')){
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $_POST['username'], $password);
                $stmt->execute();
                echo 'Successfully Refistered';
            }
            else{
                echo 'Error Occurred';
            }
        }
        $stmt->close();
    }
    else{
        echo 'Error Occurred';
    }
    $con->close();
    ?>