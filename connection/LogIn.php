<script>
<?php
    session_start();
    unset($_SESSION['nombre']);
?>
</script>
<html>
    <head>
        <title>Login</title>
        <meta charset=“UTF-8”>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
        <link rel="stylesheet" href = "../assets/css/login.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>

       <div class="login" id = "Login">
           <div class="icon">
                <i class="fas fa-user fa-3x"></i>
           </div>
            <form class="form" method="POST" action="VerificaLogin.php">
                <input class="form__input" type=“text” placeholder="Usuario*" name=“txtusr” />
                <input class="form__input" type="password" placeholder="Contraseña*" name=“txtpwd” />
                <input class="button-save" value="Ingresar" type="submit" />
            </form>
       </div>
    </body>
</html>
