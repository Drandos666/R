<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cesion Cerrada</title><!-- Titulo -->
    <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=Index.php"> 
    <LINK REL=StyleSheet HREF="css/skin_index.css"><!--enlace a css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->

</head>
<body>
    <?php include_once 'h.php';//conexion a Boostrap?>

    <div class="container-fluid"><!-- contenedor para barra de navegacion -->
        <nav class="navbar navbar-light bg-light"><!-- barra de navegacion estandar de boostrap -->
            <a class="navbar-brand" href="index.php"><!-- redireccion a pag principal -->
                <img src="img/90.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Los 90s</a><!-- imagen de logo y texto-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        </nav>
        
    </div>    
    <div class="container mt-4 pt-4"> 
        <div class="row">
            <div class="col-mb-12 ">
            <h1> 
                Ha cerrado sección satisfactoriamente, en 5 segundos sera redireccionado a la
                pagina principal. Por favor espere.
            </h1>
            </div>
        </div>
    </div>
    
<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión.
session_destroy();

?>  

</body>
</html>