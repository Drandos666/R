<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mundo Express</title><!-- Titulo -->
    <LINK REL=StyleSheet HREF="css/skin_index.css"><!--enlace a css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
</head>
<body>
    <?php include_once 'h.php';//conexion a Boostrap ?>
    
    <div class="container-fluid"><!-- contenedor para barra de navegacion -->
        <nav class="navbar navbar-light bg-light"><!-- barra de navegacion estandar de boostrap -->
            <a class="navbar-brand" href="index.php"><!-- redireccion a pag principal -->
                <img src="img/90.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Los 90s</a><!-- imagen de logo y texto-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup"><!-- enlaces para barra de navegacion -->
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="ingreso.php"><i class="fas fa-list-alt"></i> Lista</a>  <!-- enlaces a lista completa con icono de fontawesome--> 
                <a class="nav-item nav-link" href="contacto.php"><i class="fas fa-poll"></i> Encuesta</a><!-- enlaces a encuesta con icono de fontawesome --> 
                <a class="nav-item nav-link" href="ingreso.php"><i class="fas fa-user-secret"></i> Ingresar(Adm)</a><!-- enlaces a ingresar con icono de fontawesome--> 
                </div>
            </div>
        </nav>
        </nav>
        
    </div>    

    <div class="container mt-4 pt-4"><h1>Lo Mas Destacado</h1></div><!-- titulo de cuerpo -->

    <div class="container mt-4 pt-4"><!-- cuerpo de 3 cartas -->
    <H2>Artesanías</H2><!-- titulo de el cuerpo -->
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/1.jpg" alt="Card image cap"><!-- imagen de carta  -->
                <div class="card-body"><!-- carta -->
                <h5 class="card-title">Artesanias Mexicanas</h5><!-- titulo de carta -->
                <p class="card-text">Chaqueta para hombre blanca de manga larga, jersey hippie baja
                de algodón con capucha y corbatas adjuntas, bolsillo inferior de canguro delantero 
                con -Hard Rock México- estampado en negro y morado.<br>
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/2.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Cinturón Rock hebilla doble perno</h5><!-- titulo de carta -->
                <p class="card-text">Cinturón de cuero de primera calidad con temática rockera. Hebilla 
                    metálica de doble perno. Cada ojal ha sido colocado a mano asegurando una calidad
                    final exclusiva.<br>
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/3.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Camisa Hippie</h5><!-- titulo de carta -->
                <p class="card-text">Camisa para hombre manga larga de algodón natural tejido
                    natural de fondo blanco para hombre con ribete de Pintuck en la parte delantera.
                    Botón en la parte delantera, mandarina, cuello alto, puños con cierre de botones,
                    sin bolsillos, dobladillo cuadrado.<br>
                </p><!-- texto de la carta -->
                </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-4 pt-4"><!-- cuerpo de 3 cartas -->
    <H2>Arte Moderno</H2><!-- titulo de el cuerpo -->
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/4.jpg" alt="Card image cap"><!-- imagen de carta -->
                <div class="card-body"><!-- carta -->
                <h5 class="card-title">Conjunto de Arte Moderno</h5><!-- titulo de carta -->
                <p class="card-text">Porcelana de 4 Platos-Axis Diseño Paris  .<br>
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/5.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Li Xianting Está Nadando</h5><!-- titulo de carta -->
                <p class="card-text">Autor: Fang Lijun .<br>
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

    <div class="card">
            <img class="card-img-top img-thumbnail" src="img/6.jpg" alt="Card image cap"><!-- imagen de carta -->
        <div class="card-body"><!-- carta -->
                <h5 class="card-title">Homenaje a Obregón</h5><!-- titulo de carta -->
                <p class="card-text">Mármol, pescado, laminilla de oro, 1992.<br>
                </p><!-- texto de la carta -->
                </div>
                <div class="card-footer"><!-- footer estetico  -->
                <br>
                </div>
        
        </div>
    </div>

    <div class="container mt-4 pt-4"><!-- cuerpo de 3 cartas -->
    <H2>Lugares Exóticos</H2><!-- titulo de el cuerpo -->
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/7.jpg" alt="Card image cap"><!-- imagen de carta -->
                <div class="card-body"><!-- carta -->
                <h5 class="card-title">Aldea Shirakawa-go</h5><!-- titulo de carta -->
                <p class="card-text">esta aldea fue declarada en el año 1995 Patrimonio de la Humanidad 
                    por la UNESCO. El lugar también se destaca por sus peculiares casas con un tejado de
                     paja gruesa bastante inclinado. Algunas de estas edificaciones construidas al estilo 
                     Gassho-zukuri tienen más de 250 años y hoy en día sirven de alojamientos, restaurantes
                     y museos. <br> </p>
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/8.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Dunas de arena de Tottori</h5><!-- titulo de carta -->
                <p class="card-text">Forman parte del Parque Nacional Sanin Kaigan. Son las segundas dunas más 
                    grandes de Japón ya que las primeras son las dunas de Sarugamori. Se extienden 16 km a lo 
                    largo de la costa, son un paisaje cambiante debido a la marea y el viento pero, en líneas
                     generales, pueden llegar a medir unos 50 metros de alto. 
                     Este lugar fue 
                     nombrado Patrimonio de la Humanidad por la UNESCO en 1995.<br> </p>
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

    <div class="card">
        <img class="card-img-top img-thumbnail" src="img/9.jpg" alt="Card image cap"><!-- imagen de carta -->
        <div class="card-body"><!-- carta -->
                <h5 class="card-title">Santuario Itsokushima</h5><!-- titulo de carta -->
                <p class="card-text">El santuario de Itsukushima está ubicado en una isla que homónima pero que
                     se le conoce como isla Miyajima, en la prefectura de Hiroshima. Se trata de un santuario 
                     sintoísta que consta de un Torii “flotante” porque se levanta sobre el agua. Este lugar fue 
                     nombrado Patrimonio de la Humanidad por la UNESCO en 1996.<br>
                </p><!-- texto de la carta -->
                </div>
                <div class="card-footer"><!-- footer estetico  -->
                <br>
                </div>
        </div>
    </div>

    <div class="container mt-4 pt-4"><!-- cuerpo de 3 cartas -->
    <H2>Cultura Urbana</H2><!-- titulo de el cuerpo -->
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/10.jpg" alt="Card image cap"><!-- imagen de carta -->
                <div class="card-body"><!-- carta -->
                <h5 class="card-title">Kogals</h5><!-- titulo de carta -->
                <p class="card-text">Nacen en el año  1993, como versión adolescente de las Juliana gals
                     (las veinteañeras que frecuentaban la discoteca Jiuliana's Tokyo).  A partir del  94,
                      se impuso la moda de las loose socks, una especie de medias blancas  abuchonadas a 
                      lo largo de la pantorrilla y el acortamiento de la falda del uniforme.<br>
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/11.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Bakalas</h5><!-- titulo de carta -->
                <p class="card-text">se identificaban con la cultura de discoteca, especialmente con estilos 
                    musicales como el techno, house, progressive, trance o hardcore, englobados en lo que genéricamente
                     se suele llamar “música electrónica” o bacalao.<br>
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/12.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Reggaetoneros</h5><!-- titulo de carta -->
                <p class="card-text">Como tribu urbana, están presentes principalmente en países de América 
                    Latina como Puerto Rico, República Dominicana, Colombia, Panamá y en parte también en 
                    España. El reggaetón actual se crea en Latinoamérica en los años 90, pero no se puso de moda 
                    hasta el año 2005<br>
                </p><!-- texto de la carta -->
                </div>
                <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>
        </div>
    </div>

    <div class="container mt-4 pt-4"><!-- cuerpo de 3 cartas -->
    <H2>Heavy Metal</H2><!-- titulo de el cuerpo -->
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/13.jpg" alt="Card image cap"><!-- imagen de carta -->
                <div class="card-body"><!-- carta -->
                <h5 class="card-title">Megadeth - Rust In Peace</h5><!-- titulo de carta -->
                <p class="card-text">El cuarto álbum de Megadeth es una obra maestra de thrash. Los riffs de Dave
                    Mustaine y Marty Friedman son sobresalientes, y también hay varios solos realmente buenos en 
                    todo el álbum.
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/14.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Slayer - Seasons In The Abyss</h5><!-- titulo de carta -->
                <p class="card-text">Este es el segundo mejor álbum de Slayer, después del clásico Reign In Blood.
                    Seasons In The Abyss combina la intensidad de ese álbum con un poco más de melodía. La banda
                    refinó su sonido, pero sin perder nada de su ira o agresión.
                </p><!-- texto de la carta -->
            </div>
            <div class="card-footer"><!-- footer estetico  -->
            <br>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top img-thumbnail" src="img/15.jpg" alt="Card image cap"><!-- imagen de carta -->
            <div class="card-body"><!-- carta -->
                <h5 class="card-title">Pantera - Cowboys From Hell</h5><!-- titulo de carta -->
                <p class="card-text">Después de varios lanzamientos independientes, esto marcó el cambio de Pantera
                    a un sello importante y su avance comercial y crítico. Dimebag Darrell, o Diamond Darrell, como 
                    lo llamaron en ese momento, brilla con sus riffs creativos y solos llenos de ampollas.
                </p><!-- texto de la carta -->
                </div>
                <div class="card-footer"><!-- footer estetico  -->
                <br>
                </div>
        </div>
        </div>
    </div>
    <br><br><br>
</body>
</html>

