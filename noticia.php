<?php
    include_once("noticiasdb.php");
    $noticias = "SELECT * FROM noticias";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft hace compra millonaria de Activision Blizzard</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body> 
<!--  <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Virtual World, el mundo que siempre soñaste</h2>
            </div>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Visita y conoce el mundo de los videojuegos.</h1>
            <p class="hero__paragraph">En este lugar, podras estar al dia con el maravilloso mundo de los videojuegos 
            y compartir con gente que tiene amor por el mundo virtual tanto como tu.</p>
            <a href="#" class="cta">Comienza ahora</a>
        </section>
    </header> --> 

    <main>
    
    <section class="know">
        <div class="know__paragraph">
        <div class="know__container container">
                    <?php
                    $resultado = mysqli_query($conexion, $noticias);
                    while($row=mysqli_fetch_assoc($resultado)) { ?>
                        <h2 class="subtitle"><?php echo $row["titulo"];?></h2>
                        <p class="questions__copy"><?php echo $row["contenido"];?></p>
                    <?php  }?>
                </div>
                <figure class="knowledge__picture">
                    <img src="./images/microsoft.jpeg" class = "know__img">
                </figure>
        </div>
        </div>
    </section>
    </main>
    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">VirtualWorld</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="index.php" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>

            <form class="footer__form" action="registro.php" method="POST">
                <h2 class="footer__newsletter">Suscribete a la seccion de noticias</h2>
                <div class="footer__inputs">
                    <input type="text" placeholder="Nombre:" class="footer__input" name="nombre" required>
                    <input type="email" placeholder="Email:" class="footer__input" name="email" required>
                    <input type="password" placeholder="Contraseña:" class="footer__input" name="contraseña"required>
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Luciano Paniagua</h3>
        </section>
    </footer>
</body>
</html>