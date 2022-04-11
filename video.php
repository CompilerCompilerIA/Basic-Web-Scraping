<!DOCTYPE html>
<?php
    $str = file_get_contents('scripts/youtube.json');
    $json = json_decode($str, true);
    $str2 = file_get_contents('scripts/links.json');
    $json2 = json_decode($str2, true);
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft hace compra millonaria de Activision Blizzard</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/videos.css">

</head>
<body> 
  <main>
    
    <section class="know">

    <?php for ($x = 0; $x <= 8; $x++): ?>
        <div class="know__paragraph">
        <span class="index vidInfo2" style="margin-top: -250px;"><?php echo $x+1;?></span>
            <a class="knowledge__picture" href=<?php echo $json2[$x]["href"];?>>
                <img style="width: 410px" src=<?php echo $json2[$x]["src"];?> >
            </a>
            <div class="vidInfo">
                <span style="padding-bottom: -50px;margin-bottom: -50px; font-size: 23px; font-weight:bolder" ><center><?php echo $json[$x]["title"];?></center></span>
                </br>
                <span style="font-size: 20px ; margin-left: 50px"><b> </b> <?php echo $json[$x]["channel"];?></span>
                </br>
                <span style="font-size: 20px ; margin-left: 50px" ><?php echo $json[$x]["views"];?></span>
                </br>
                <?php if (isset($json[$x]["dtAdded"])): ?>
                <span  style="font-size: 20px ; margin-left: 50px"><?php echo $json[$x]["dtAdded"];?></span>
                <?php elseif (isset($json[$x]["dtRAdded"])): ?>
                <span style="font-size: 20px ; margin-left: 70px"><?php echo $json[$x]["dtRAdded"];?></span>
                <?php endif; ?>
            </div>
        </div>
        
    <?php endfor; ?>
                
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

            <h3 class="footer__copyright">Derechos reservados &copy; CompilerCompiler</h3>
        </section>
    </footer>
</body>
</html>