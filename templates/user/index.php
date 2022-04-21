
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="register">
    <h1>Register</h1>
    <form action="index.php" method="post">
        <label for="username"></label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password"></label>
        <input type="text" name="password" placeholder="Passwort eingeben" id="password" required>
        <input type="submit" value="Register">
    </form>
    <?php
    $DATABASE_HOST = 'p';
    ?>
</div>
</body>
</html>

