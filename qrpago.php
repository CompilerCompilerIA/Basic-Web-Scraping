<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripcion</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body> 

    <main>
    
    <section class="know">
        
        <div class="know__container container">
                    
                <figure class="know2__picture">
                    <img src="./images/qr.jpeg" class = "know2__img">
                </figure>
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