<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <LINK REL=StyleSheet HREF="css/skin_index.css"><!--enlace a css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
    <title>Contacto</title><!-- Titulo -->
</head>
<body>

    <?php include_once 'h.php';//conexion a Boostrap
    include_once 'LinkBDD/app.php';//conexion a BDD ?>

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

    <div class="container mt-4 pt-4"><!-- contenedor con escuesta -->
        <H1>Encuesta</H1><!-- titulo de formulario -->
        <form method="POST"><!-- formulario usando POST -->
            <br>
            <div class="form-group"><!-- datos para nombre y apellido -->
                <label for="formGroupExampleInput">Nombre y Apellido:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group"><!-- datos en opcion -->
                <label for="exampleFormControlSelect1">¿Que Categoria le Gusta Más?:</label>
                <select class="form-control" id="op" name="op">
                <option> </option>
                <option>Artesanias</option>
                <option>Arte Moderno</option>
                <option>Lugares Exoticos</option>
                <option>Cultura Urbana</option>
                <option>Heavy Metal</option>
                </select>
            </div>
            <div class="form-group"><!-- texto el cual el usuario quiera describir -->
                <label for="exampleFormControlTextarea1">¿Por Que?:</label>
                <textarea class="form-control" id="texta" name="texta" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Enviar</button><!-- boton para enviar con icono de fontawesome--> 
            <button type="reset" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</button><!-- boton para borrar datos con icono de fontawesome--> 
            <br><br>
        </form>
                
     </div>
   
    <?php
    include_once 'LinkBDD/app.php';//conexion a BDD
    if($_POST){//if con POST para evaluar el envio
        ?>
        <script>
        alert('¡Datos Enviados!');//alerta con aviso de envio realizado
        </script>
    <?php   
    
        $nom=$_POST['nom'];//Nombre y Apellido por POST
        $coment =$_POST['texta'];//Texto por POST
        $op=$_POST['op'];//Opcion por POST
        $agregar = 'INSERT INTO encuesta (nome,coment,op) VALUES (?,?,?)';//variable con sentencia selecionar de la tabla cuado tiene un id especifico
        $s_agregar = $mbd->prepare($agregar);//variable donde se prepara la variable anterior con la BDD
        $s_agregar->execute(array($nom,$coment,$op));//ejecutar la variable en un array el cual identifica un fila en espesifico
    }
    ?>
</body>
</html>