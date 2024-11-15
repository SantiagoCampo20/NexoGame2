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
    <title>Hollow Knight</title>
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
                <img src="imagen/Hollow_Knight.jpg" alt="Hollow Knight Image 1">
                <img src="imagen/Hollow_Knight2.jpg" alt="Hollow Knight Image 2">
                <img src="imagen/Hollow_Knight3.jpg" alt="Hollow Knight Image 3">
                <img src="imagen/Hollow_Knight4.jpg" alt="Hollow Knight Image 4">
            </div>
    
            <div class="game-info">
                <h1>Hollow Knight</h1>
                <p><strong> - Género:</strong> Acción, Aventura, Indie</p>
                <p><strong> - Desarrollador:</strong> Team Cherry</p>
                <p><strong> - Editor:</strong> Equipo Cherry</p>
                <p><strong> - Franquicia:</strong> Hollow Knight</p>
                <p><strong> - Fecha de lanzamiento:</strong> 24 de febrero de 2017</p>
                <p>"Hollow Knight: Explora un vasto y enigmático mundo subterráneo, donde la oscuridad se mezcla con una belleza melancólica. Descubre secretos ocultos, enfréntate a desafiantes enemigos y desvela la historia de un reino olvidado en esta épica aventura de plataformas y combate."</p>
            </div>
        </div>
        <h3 class="txt-plataformas">Disponible en las siguientes plataformas</h3>
        <div class="plataformas">
            <a href="https://store.steampowered.com/app/367520/Hollow_Knight/" target="_blank"><div class="plataforma steam">
                <img src="imagen/steam.jpg" alt="Steam Icon">
                <p>STEAM</p>
                <p>Precio: $37,500 pesos colombianos</p>
            </div></a>

            <a href="https://www.xbox.com/es-co/games/store/hollow-knight-edicion-corazon-vacio/9mw9469v91lm" target="_blank"><div class="plataforma xbox">
                <img src="imagen/xbox.jpg" alt="Xbox Icon">
                <p>XBOX GAME STUDIOS</p>
                <p>Precio: $45,900 pesos colombianos</p>
            </div></a>
        </div>
    
        <div class="requirements">
            <h3>Requisitos del sistema</h3>
            <div class="system-requirements">
                <div class="min-requirements">
                    <h4>MÍNIMO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 7 (64 bits)</p>
                    <p><strong> - Procesador:</strong> Intel Core 2 Duo E5200</p>
                    <p><strong> - Memoria:</strong> 4 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> GeForce 9800GTX+ (1 GB)</p>
                    <p><strong> - DirectX:</strong> Versión 10</p>
                    <p><strong> - Almacenamiento:</strong> 9 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> 1080p, se recomienda 16:9</p>
                </div>
    
                <div class="rec-requirements">
                    <h4>RECOMENDADO:</h4>
                    <p><strong> - Sis.Operativo:</strong> Windows 10 (64 bits)</p>
                    <p><strong> - Procesador:</strong> Intel Core i5</p>
                    <p><strong> - Memoria:</strong> 8 GB de RAM</p>
                    <p><strong> - Gráficos:</strong> GeForce GTX 560</p>
                    <p><strong> - DirectX:</strong> Versión 11</p>
                    <p><strong> - Almacenamiento:</strong> 9 GB de espacio disponible</p>
                    <p><strong> - Notas adicionales:</strong> 1080p, se recomienda 16:9</p>
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