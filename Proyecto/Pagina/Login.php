<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estiloB.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="Page.js" type="text/javascript"></script>
</head>



<body id="Login">
    <!-- navbar -->
    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">
                <li class="items_nav"><a href=index.html>Inicio</a></li>
                <li class="items_nav"><a href=AcercaDe.html>Acerca De</a></li>
                <li class="items_nav"><a href=Team.html>Equipo</a></li>
                <li class="items_nav"><a href=Contacto.html>Contacto</a></li>
                <li class="items_nav"><a href=Login.html>Ingresar</a></li>
            </ul>
        </nav>
    </header>
    <br><br><br>
    <!-------------------------------------------------Login------------------------------------------------------------->
    <form class="ss" action="App/Trabajo.php" onsubmit="return validar_login();">

        <b>
            <h2 id="Inicio1">Iniciar sesión en Desserts </h2>
        </b>

        <input class="aa" id="usuario" type="text" placeholder="&#128272; Usuario" name="Usuario" required>
        <input class="aa" id="contraseña" type="password" placeholder="&#128273; Contraseña" name="clave" required>
        <input class="BIngresar" type="submit" value="Ingresar">
        <input class="BRecuperar" type="submit" value="Recuperar Cuenta">
        <b><a href="Registro.html">
                <h7>Registrar en Desserts</h7>
            </a></b>
    </form>
    <script src="Page.js" type="text/javascript"></script>

</body>
<br><br><br><br><br><br><br><br><br><br>
<footer class="footer">
    E-mail: <b>btorres20612@universidadean.edu.co</b> and <b>Jsanche03060@universidadean.edu.co</b><br>
    Aviso de privacidad |Política de privacidad | Manual de Cookies u otras Tecnologías
</footer></html>
