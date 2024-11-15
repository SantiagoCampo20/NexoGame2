<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes somos?</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="imagen/logo2.jpg">
</head>
<body>
    <header>
        <img src="imagen/logo.jpg" alt="Logo NexoGame">
        <nav class="navtop">
            <ul class="nav-left">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="Juegos.php">Juegos</a></li>
                <li><a href="QuienesSomos.php">Quiénes somos?</a></li>
            </ul>
            <div class="separator"></div>
            <div class="login">
                <a href="perfil.php"><i class="fas fa-user-circle"></i>Usuario: <?= $_SESSION['name'] ?></a>
                <a href="cerrar-sesion.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
            </div>
        </nav>
    </header>

    <main>
    <h1 class="titu">Quiénes somos?</h1>
        <section class="Descripcion">
            <div class="texto">
                <p>Bienvenido a NexoGame, tu plataforma integral para explorar, comparar y descubrir videojuegos. Nuestra misión es facilitar a los jugadores una experiencia fluida al buscar información sobre sus títulos favoritos, ver imágenes de juegos, encontrar opciones de plataformas, precios y acceder a enlaces directos para cada plataforma. NexoGame fue creado para ofrecer una ventana confiable y detallada al mundo de los videojuegos, donde cada usuario pueda conocer desde los aspectos técnicos hasta las reseñas y calificaciones de la comunidad gamer.
                   <br><br> En esta página, nos esforzamos por reunir la información esencial de los videojuegos de manera accesible e intuitiva. Además, conectamos a los usuarios con las redes sociales, como Instagram, para que puedan mantenerse al tanto de nuestras novedades y recomendaciones en tiempo real.</p>
            </div>
            <div class="imagen">
                <img src="imagen/logoGrande.jpg" alt="Logo NexoGame">
            </div>
        </section>
    <h1 class="titu">Redes sociales</h1>
<!--Muestra Instagram-->
<h1 id="TituInsta">Instagram</h1>
    <section id="feed-contenedor">
        <div class="main-galery">
            
        <!--Galeria-->
            <div class="contenedor-galery">
                <div class="galery">
                    <!--<div class="image overflow">
                    <img loading="lazy" src="img/AboutMe.jpg" alt="">
                    <div class="opacity-hover">
                        <a href="/" class="caption">
                            <p>
                        
                            </p>
                        </a>
                        </div>
                    </div>-->
                </div>
            </div> 


        </div>
    </section>

<!--    <section class="instagram-feed">
        <h2>Instagram</h2>
        <div id="insta-photos" class="photos-grid"></div>
    </section>  -->

    </main>
    <script src="api.js"></script>
    
    <footer class="footer">
        <div class="contacto">
            <div class="contact-item">
                <img src="imagen/correo.jpg" alt="Email Icon">
                <a href="mailto:nexogame99@gmail.com" target="_blank">nexogame99@gmail.com</a>            </div>
            <div class="contact-item">
                <img src="imagen/instagram.jpg" alt="Instagram Icon">
                <a href="https://www.instagram.com/nexogame3/" target="_blank">@nexogame3</a>
            </div>
            <div class="contact-item">
                <img src="imagen/facebook.jpg" alt="Facebook Icon">
                <a href="https://www.facebook.com/profile.php?id=61568473888321" target="_blank">Nexo GameScch</a>
            </div>
        </div>
        <div class="logo">
            <h2>NexoGame</h2>
            <img src="imagen/logo2.jpg" alt="Controller Logo">
        </div>
    </footer>
    
</body>
</html>