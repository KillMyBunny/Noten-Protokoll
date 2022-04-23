
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
            <form action="/user/doCreate" method="post">
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
