<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Para Administrador</title><!-- Titulo -->
    <LINK REL=StyleSheet HREF="css/skin_index.css"><!--enlace a css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
</head>
<body>       
    <?php include_once 'LinkBDD/app.php';//conexion a BDD?>
    <?php include_once 'h.php';//conexion a Boostrap?>


    <div class="container-float mt-5">  <!-- cuerpo de formulario -->
        <form method="POST"><!-- formulario enviado por post -->
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre y Apellido</label><!-- datos de usuario-->
                <input type="text" class="form-control" id="nom" name="nom"  required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label><!-- correo -->
                <input type="email" class="form-control" id="e" name="e" aria-describedby="emailHelp" placeholder="Baloo@Ejemplo.com" required>
                <small id="emailHelp" class="form-text text-muted">Solo Usuario Administrador</small><!-- texto de leyenda-->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label><!-- captar la contraseña -->
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button><!-- boton para registrar con icono de fontawesome--> 
            <button type="reset" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</button><!-- boton para borrar datos con icono de fontawesome--> 
        </form>      
    </div>
</body>
</html>

<?php
    include_once 'LinkBDD/app.php';//conexion a BDD
    if ($_POST) {
        ?>
            <script>
            alert('¡Inscripción Realizada!');//alerta con aviso de envio realizado
            </script>
        <?php
            $nom=$_POST['nom'];//Nombre y Apellido por POST
            $e=$_POST['e'];//Correo por POST
            $pass=$_POST['pass'];//Password por POST
            $agregar = 'INSERT INTO hola (nome,e,pass) VALUES (?,?,?)';//variable con sentencia selecionar de la tabla cuado tiene un id especifico
            $s_agregar = $mbd->prepare($agregar);//variable donde se prepara la variable anterior con la BDD
            $s_agregar->execute(array($nom,$e,$pass));//ejecutar la variable en un array el cual identifica un fila en espesifico
    }