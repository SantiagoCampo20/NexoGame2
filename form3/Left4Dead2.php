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
    <title>Left 4 Dead 2</title>
    <link rel="stylesheet" href="styles.css">
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


        
    
        <div class="game-details">
            <div class="game-images">
                <img src="imagen/left4dead2-1.jpg" alt="Left 4 Dead 2 Image 1">
                <img src="imagen/left4dead2-2.jpg" alt="Left 4 Dead 2 Image 2">
                <img src="imagen/left4dead2-3.jpg" alt="Left 4 Dead 2 Image 3">
            </div>
    
            <div class="game-info">
                <h1>Left 4 Dead 2</h1>
                <p><strong> - Género:</strong> Disparos, Survival horror</p>
                <p><strong> - Desarrollador:</strong> Valve Corporation</p>
                <p><strong> - Franquicia:</strong>  Left 4 Dead</p>
                <p><strong> - Fecha de lanzamiento:</strong> 17 de noviembre de 2009 </p>
                <p>"Ambientado en el apocalipsis zombi, Left 4 Dead 2 (L4D2) es la esperadísima secuela del galardonado Left 4 Dead, el juego cooperativo número 1 de 2008. Este FPS cooperativo de acción y terror os llevará a ti y a tus amigos por las ciudades, pantanos y cementerios del Sur Profundo, desde Savannah hasta Nueva Orleans, a lo largo de cinco extensas campañas."</p>
            </div>
        </div>
        <h3 class="txt-plataformas">Disponible en las siguientes plataformas</h3>
        <div class="plataformas">
            <a href="https://store.steampowered.com/app/550/Left_4_Dead_2/?l=spanish" target="_blank"><div class="plataforma steam">
                <img src="imagen/steam.jpg" alt="Steam Icon">
                <p>STEAM</p>
                <p>Precio: $26,000 pesos colombianos</p>
            </div></a>
        </div>
    
        <div class="requirements">
            <h3>Requisitos del sistema</h3>
            <div class="system-requirements">
                <div class="min-requirements">
                    <h4>MÍNIMO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows® 7 32/64-bit / Vista 32/64 / XP</p>
                    <p><strong> - Procesador:</strong> Pentium 4 3.0GHz</p>
                    <p><strong> - Memoria:</strong> 2 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> Video card with 128 MB, Shader model 2.0. ATI X800</p>
                    <p><strong> - DirectX:</strong> Versión 9.0c</p>
                    <p><strong> - Almacenamiento:</strong> 13 GB de espacio disponible</p>
                    <p><strong> - Tarjeta de sonido::</strong> DirectX 9.0c compatible sound card</p>
                </div>
    
                <div class="rec-requirements">
                    <h4>RECOMENDADO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows® 7 32/64-bit / Vista 32/64 / XP</p>
                    <p><strong> - Procesador:</strong> Intel core 2 duo 2.4GHz</p>
                    <p><strong> - Memoria:</strong> 2 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> Video Card Shader model 3.0. NVidia 7600</p>
                    <p><strong> - DirectX:</strong> Versión 9.0c</p>
                    <p><strong> - Almacenamiento:</strong> 13 GB de espacio disponible</p>
                    <p><strong> - Tarjeta de sonido:</strong> DirectX 9.0c compatible sound card</p>
                </div>
            </div>
        </div>



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