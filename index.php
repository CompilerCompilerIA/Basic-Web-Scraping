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
    <title>VirtualWorld</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/css/normalize.css">
    <link rel="stylesheet" href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/css/estilos.css">

    <meta name="theme-color" content="#2091F9">

    <meta name="title" content="El mundo virtual en tus manos">
    <meta name="description" content="Al acceder a este mundo, estas arriesgando horas y horas de diversión e información acerca de videojuegos y contenido digital proporcionado por gente igual de fanática que tu.">

    
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://lucky1523.github.io">
    <meta property="og:title" content="El mundo virtual en tus manos">
    <meta property="og:description" content="Al acceder a este mundo, estas arriesgando horas y horas de diversión e información acerca de videojuegos y contenido digital proporcionado por gente igual de fanática que tu.">
    <meta property="og:image" content="http://lucky1523.github.io/images/gamersetup.jpg">

    
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://lucky1523.github.io">
    <meta property="twitter:title" content="El mundo virtual en tus manos">
    <meta property="twitter:description" content="Al acceder a este mundo, estas arriesgando horas y horas de diversión e información acerca de videojuegos y contenido digital proporcionado por gente igual de fanática que tu.">
    <meta property="twitter:image" content="http://lucky1523.github.io/images/gamersetup.jpg">
</head>
<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Virtual World, el mundo que siempre soñaste</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Videos</a>
                </li>
                <li class="nav__items">
                    <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Blog</a>
                </li>

                <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Visita y conoce el mundo de los videojuegos.</h1>
            <p class="hero__paragraph">En este lugar, podras estar al dia con el maravilloso mundo de los videojuegos 
            y compartir con gente que tiene amor por el mundo virtual tanto como tu.</p>
            <a href="#QueEsVW" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 id="QueEsVW"class="subtitle">¿Qué es Virtual World?</h2>
            <p class="about__paragraph">Virtual World es una pagina diseñada por y para fanaticos del mundo virtual,
                es decir que aqui podras formar parte de una gran comunidad de gamers, donde podras informarte de todo lo nuevo,
                conocer gente con tus mismos gustos y hasta acceder a ofertas de contenido descargable!
            </p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/shapes.svg" class="about__icon">
                    <h3 class="about__title">Todo lo nuevo!</h3>
                    <p class="about__paragrah">Podras conocer antes 
                        que nadie todos los estrenos, novedades y exclusivas del mundo 
                        gamer.
                    </p>
                </article>

                <article class="about__icons">
                    <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/paint.svg" class="about__icon">
                    <h3 class="about__title">Nuestra comunidad</h3>
                    <p class="about__paragrah">Asi como tu, alla afuera hay millones de personas 
                        con tus mismos gustos (como el creador de esta pagina) que esperan a compartir contigo 
                    </p>
                </article>

                <article class="about__icons">
                    <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/code.svg" class="about__icon">
                    <h3 class="about__title">Ofertas imperdibles</h3>
                    <p class="about__paragrah">Premiamos y agradecemos tu fidelidad, y con tu suscripcion, te iran 
                        apareciendo ofertas y regalos de parte de nuestro equipo
                    </p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <?php  $resultado = mysqli_query($conexion, $noticias);
                    while($row=mysqli_fetch_assoc($resultado)) { ?>
                        <h2 class="subtitle"><?php echo $row["titulo"];?></h2>
                        <p class="knowledge__paragraph"><?php echo $row["descripcion"];?></p>
                        <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/noticia.php" class="cta">Leer noticia completa</a>
                    <?php  }?>
                </div>

                <figure class="knowledge__picture">
                    <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/macbook.png" class="knowledge__img">
                </figure>
            </div>
        </section>

        <section class="price container">
            <h2 id="Precio"class="subtitle">Obten el plan perfecto para ti</h2>

            <div class="price__table">
                <div class="price__element">
                    <p class="price__name">Básico</p>
                    <h3 class="price__price">Free</h3>

                    <div class="price__items">
                        <p class="price__features">Noticias dentro la página</p>
                        <p class="price__features">Chat general</p>
                    </div>

                    <a href="#footer" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element price__element--best">
                    <p class="price__name">Estándar</p>
                    <h3 class="price__price">$20/mes</h3>

                    <div class="price__items">
                        <p class="price__features">Paquete Free incluido</p>
                        <p class="price__features">Noticias personalizadas según tus gustos</p>
                        <p class="price__features">Ofertas mensuales</p>
                    </div>

                    <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/qrpago.php" class="price__cta">Empieza ahora</a>
                </div>


                <div class="price__element">
                    <p class="price__name">Premium</p>
                    <h3 class="price__price">$30/mes</h3>

                    <div class="price__items">
                        <p class="price__features">Paquete Free y Estándar incluidos</p>
                        <p class="price__features">Ofertas semanales</p>
                        <p class="price__features">Posibilidad de publicar tu contenido en Virtual World</p>
                    </div>

                    <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/qrpago.php" class="price__cta">Empieza ahora</a>
                </div>


            </div>
        </section>

        <section class="testimony">
            <div class="testimony__container container">
                <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Luciano Paniagua, <span class="testimony__course">creador de Virtual World</span></h2>
                        <p class="testimony__review">Soy un estudiante de ingenieria en sistemas de la Universidad Privada Boliviana
                            y decidi crear Virtual World porque, asi como muchos jovenes hoy en dia, me encanta todo lo 
                            relacionado a los videojuegos y el gigantezco mundo que es ese, entonces pude observar que 
                            no existe alguna opción donde un gamer pueda conocer a su comunidad, hasta ahora...
                        </p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/face.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Rodrigo Viladegut, <span class="testimony__course">suscpritor de Virtual World</span></h2>
                        <p class="testimony__review">Conocí Virtual World gracias al creador de la página, ya que compartimos
                            algunos gustos, y la verdad me sirvio bastante ya que podiamos discutir y debatir de las mismas
                            novedades acerca de las grandes empresas y sus nuevas adquisiciones
                        </p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/face2.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Ignacio Avila, <span class="testimony__course">suscpritor de Virtual World</span></h2>
                        <p class="testimony__review">Mi profesión es la de piloto comercial, y desde niño tengo cierto gusto
                            por los videojuegos, pero estuve desactualizado debido a mi empleo, pero desde que conoci esta página
                            puedo estar viendo lo mas nuevo de este mundo desde mi celular cuando tengo tiempo libre
                        </p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/face3.jpg" class="testimony__img">
                    </figure>
                </section>
                <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Porque sabemos que aún tienes dudas, aqui algunas de las más usuales</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Por qué deberia suscribirme a Virtual World?
                            <span class="questions__arrow">
                                <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Así como tu, nuestro equipo es igual de cuidadoso con 
                            sus decisiones, por lo que te recomendamos suscribirte por el gigante mundo 
                            de los videojuegos que sabemos te encanta, pero todavía desconoces a profundidad. Y 
                            eso no es todo, como pudiste leer, le damos cariño a nuestros suscriptores, por lo que 
                            disfrutaras de exclusivas ofertas constantes.
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Que tipo de  ofertas recibiré?
                            <span class="questions__arrow">
                                <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Para cada sección de Virtual World, pensamos cuidadosamente 
                            que es lo que le gustaria a personas como nosotros, y que mejor que ofertas y descuentos 
                            en contenido digital. Estas varían entre descuentos para Steam, Epic Games, Discord Nitro y 
                            demás plataformas similares.
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿La página estara en constante actualización?
                            <span class="questions__arrow">
                                <img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Totalmente, nuestro objetivo principal es hacer de 
                            esta comunidad cada vez mas grande, y mantenernos informados, activos y pendientes 
                            a cualquier novedad en la industria del videojuego. Es por esto que dia a dia, salen 
                            decenas de noticias que, como fanaticos de esta industria, debemos conocer, y Virtual 
                            World te lo hace mucho mas sencillo y cómodo
                        </p>
                    </div>
                </article>
            </section>

            <section class="questions__offer">
                <h2 class="subtitle">¿Estas listo para vivir un mundo virtual?</h2>
                <p class="questions__copy">"No se trata de cambiar el mundo. Se trata de hacer nuestro mejor
                     esfuerzo antes de partir de éste mundo… tal y como es. Se trata de respetar la voluntad de
                      los demás, y creer en la tuya." (The Boss - Metal Gear Solid III)</p>
                <p class="questions__copy">Y así como The Boss, nuestra voluntad es formar una 
                    comunidad gigante de gamers como nosotros!
                </p>
                <a href="#Precio" class="cta">Quiero suscribirme!</a>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 id ="footer" class="footer__title">VirtualWorld</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>

            <form class="footer__form" action="registro.php" method="POST">
                <h2 class="footer__newsletter">Suscribete a la seccion de noticias</h2>
                <div class="footer__inputs">
                    <input type="text" placeholder="Nombre:" class="footer__input" name="nombre" required>
                    <input type="email" placeholder="Email:" class="footer__input" name="email" required>
                    <input type="password" placeholder="Contrasena:" class="footer__input" name="contrasena"required>
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/facebook.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/twitter.svg" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Luciano Paniagua</h3>
        </section>
    </footer>

    <script src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/js/slider.js"></script>
    <script src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/js/questions.js"></script>
    <script src="https://skynet.lp.upb.edu/~lpaniagua19/Proyecto/js/menu.js"></script>
</html> 