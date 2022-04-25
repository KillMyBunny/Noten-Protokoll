
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
                <input type="text" name="username" placeholder="Username eingeben" id="username" required >
                <label for="password"></label>
                <input type="password" name="password" placeholder="Passwort eingeben" id="password1" required >
                <input type="password" name="password" placeholder="Passwort nochmals eingeben" id="password2" >
                <script type="text/javascript">



                    $("[name='DAFORM']").on('submit', checkPasswords);

                    function checkPasswords()
                    {
                        var password1 = document.getElementById("Passwort").value;
                        var password2 = document.getElementById("Passwort_bestaetigen").value;

                        if (password1 != password2)
                        {
                            alert("Passwörter müssen gleich sein!")
                            document.getElementById("Passwort").focus();
                            return false;
                        }

                        return true;
                    }
                </script>
                <input type="submit" value="registrieren">
            </form>
        </div>
    </body>
</html>
