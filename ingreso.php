<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar</title><!-- Titulo -->
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
    
    <div class="formulario"><!-- formulario -->
        <div class="container mt-4 pt-4"><!-- contenedor de formulario -->
            <h1>Solo Administradores</h1><!-- Titulo de formulario -->
        <form method="POST"><!-- formulario enviando por POST-->
            <br>
            <div class="form-group"><!-- dato de correo -->
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" id="e" name="e" aria-describedby="emailHelp" placeholder="Baloo@Ejemplo.com" required>
                <small id="emailHelp" class="form-text text-muted">Solo Usuario Administrador</small>
            </div>
            <div class="form-group"><!-- dato de password -->
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass" >
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button><!-- boton para ingresar con icono de fontawesome--> 
            <button type="reset" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</button><!-- boton para borrar los datos con icono de fontawesome--> 
            <br><br><br>
        </form>
        </div>
    </div>

    <?php
    include_once 'LinkBDD/app.php';//conexion a BDD
    session_start();//conexion a la secion
    if ($_POST) {//if con POST para evaluar el envio
        
    $e=$_POST['e'];//Correo por POST
    $pass=$_POST['pass'];//Contraseña por POST

    $verificar='SELECT * FROM hola WHERE e = ?';//variable con sentencia selecionar de la tabla cuado tiene un id especifico
    $s_verificar = $mbd->prepare($verificar);//variable donde se prepara la variable anterior con la BDD
    $s_verificar->execute(array($e));//ejecutar la variable en un array el cual identifica un fila en espesifico
    $result_ve=$s_verificar->fetch();//guarda en un array los datos de la fila buscada
     
    if(!$result_ve){
        ?>
        <script>
        alert('¡Usuario No Registrado!');//alerta con aviso de usuario no registrado
        </script>
        <?php    
        die();//matar la operación
    }

    $verificar2='SELECT * FROM hola WHERE pass = ?';//variable con sentencia selecionar de la tabla cuado tiene un id especifico
    $p_verificar = $mbd->prepare($verificar);//variable donde se prepara la variable anterior con la BDD
    $p_verificar->execute(array($pass));//ejecutar la variable en un array el cual identifica un fila en espesifico
    $result_vp=$p_verificar->fetch();//guarda en un array los datos de la fila buscada

    if(!$result_ve){
        ?>
        <script>
        alert('¡Contraseña Erronea!');//alerta con aviso de contraseña invalida
        </script>
        <?php    
        die();//matar la operación
    }else{
        $_SESSION['admin'] = $result_ve['nome'];
        $_SESSION['id'] = $result_ve['idAmd'];
        header('Location: admin.php');
    }
    }
    ?>
    <br><br><br><br><br>
</body>
</html>