    <?php include_once 'h.php'; //conexion a Boostrap
    session_start();//secion iniciada
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK REL=StyleSheet HREF="css/skin_index.css"><!--enlace a css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
    <title>Usuario Admin</title><!-- Titulo --><!-- Titulo -->>
</head>
    <div class="container-fluid"><!-- contenedor para barra de navegacion -->
            <nav class="navbar navbar-light bg-light"><!-- barra de navegacion estandar de boostrap -->
                <a class="navbar-brand" href="#">
                    <img src="img/90.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Los 90s</a><!-- imagen de logo y texto-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup"><!-- enlaces para barra de navegacion -->
                    <div class="navbar-nav">
                    <a href="javascript:if (confirm('¿Seguro que quiere Cerrar Secion?')) {parent.location='fin_ing.php';};"><i class="fas fa-door-open"></i> Cerrar Sección</a><!-- enlaces a cerrar secion con icono de fontawesome--> 
                    </div>
                </div>
            </nav>
            </nav>
            
    </div>         
<body>
        <div class="container mt-4"><!-- contenedor con nombre de administrador -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-mb-12 ">
                    <h1><br>Admin <strong><?php echo $_SESSION['admin'] ?></strong> <br></h1>
                </div>
            </div>
        </div>

    










        
</body>
</html>
