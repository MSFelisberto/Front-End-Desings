<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress Theme</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- NavBar -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="/home" id="navbar__logo"><img src="./img/logo.png" alt=""></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="./sobre.php" class="navbar__links" id="sobre-page">Sobre</a>
                </li>
                <li class="navbar__item">
                    <a href="./contato.php" class="navbar__links" id="contato-page">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero" id="home">
        <div class="hero__container">
            <div class="hero__content">
                <h2 class='hero__heading'>Melhore a comunicação com seu time e clientes!</h2>
                <p class="hero__description">Consultoria especializada em startups, empresas e principalmente pessoas.</p>
                <button class="hero__btn"><a href="#" target="_blank">Ver Demonstração</a></button>
            </div>
            <div class="hero__img--container">
                <div class="hero__img--card">
                    <img src="./img/equipe.png" alt="" class="imagem">
                </div>
            </div>
        </div>
    </div>

    <!-- Seta para baixo -->
    <div class="circle">
        <i class="fas fa-angle-down"></i>
    </div>

    <!-- Clientes -->
    <section class="clientes">
        <div class="clientes__container">
            <img src="./img/amazon.png" alt="amazon" class="clientes__item">
            <img src="./img/costco.png" alt="costco" class="clientes__item">
            <img src="./img/dominos.png" alt="dominos" class="clientes__item">
            <img src="./img/uber.png" alt="uber" class="clientes__item">
            <img src="./img/walmart.png" alt="walmart" class="clientes__item">
        </div>
    </section>

    <!-- Diferenciais -->
    <section class="diferenciais" id="sobre">
        <h2>Contribuímos de ponta a ponta</h2>
        <div class="diferenciais__container">
            <div class="diferenciais__content">
                <img src="./img/ilustracao-01.png" alt="" class="ilustracao">
                <h3 class="ilustracao__heading ">Ambientes Mobile</h3>
                <p class="ilustracao__description">Garanta que toda a sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>
            <div class="diferenciais__content">
                <img src="./img/ilustracao-02.png" alt="" class="ilustracao">
                <h3 class="ilustracao__heading ">Ambientes Mobile</h3>
                <p class="ilustracao__description">Garanta que toda a sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>
            <div class="diferenciais__content">
                <img src="./img/ilustracao-03.png" alt="" class="ilustracao">
                <h3 class="ilustracao__heading ">Ambientes Mobile</h3>
                <p class="ilustracao__description">Garanta que toda a sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>
        </div>
    </section>

    <!-- Sobre o time -->
    <section class="sobre-time">
        <div class="sobre-time__container">
            <div class="sobre-time__content">
                <h2>Um time experiente, comunicador e coeso.</h2>
                <p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira familia.
                <br/>
                <br/>
                Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos the ajudar.
                </p>
            </div>
            <div class="sobre-time__img__container">
                <div class="sobre-time__img__card">
                    <img src="./img/ilustracao-04.png" alt="" class="time--img">
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section class="depoimentos">
        <div class="depoimentos__content">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimentos-single">
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam aliquid rem, voluptatum ducimus magnam nam assumenda et, veniam dignissimos sequi doloribus unde saepe adipisci facere ab earum, iste nobis maxime.</p>
                     <p>Aurélio Gonçalves</p>
                     <img src="./img/depoimento_1.jpg" alt="">
                </div>
                <div class="depoimentos-single">
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam aliquid rem, voluptatum ducimus magnam nam assumenda et, veniam dignissimos sequi doloribus unde saepe adipisci facere ab earum, iste nobis maxime.</p>
                     <p>Tadeu Silva</p>
                     <img src="./img/depoimento_1.jpg" alt="">
                </div>
                <div class="depoimentos-single">
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam aliquid rem, voluptatum ducimus magnam nam assumenda et, veniam dignissimos sequi doloribus unde saepe adipisci facere ab earum, iste nobis maxime.</p>
                     <p>Gustavo Costa</p>
                     <img src="./img/depoimento_1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Metodologia -->
    <section class="metodologia">
        <div class="metodologia__content">
            <h2>Conheça nossa Metodologia</h2>
            <p>O que acha de fazer o que mais gostamos de fazer? Conversar!<br /> Entre em contato por e-mail ou telefone.</p>
            <button class="metodologia__btn"><a href="/contato">Entrar em Contato</a></button>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Suporte</h2>
                    <a href="/">FAQ</a>
                    <a href="/">Carreiras</a>
                </div>
                <div class="footer__link--items">
                    <h2>Contato</h2>
                    <a href="/">Contate-nos</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Redes Sociais</h2>
                    <a href="/">Instagram</a>
                    <a href="/">Facebook</a>
                    <a href="/">Youtube</a>
                    <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo"><img src="./img/logo-dummy.png" alt=""></a>
                </div>
                <p class="website__rights">© ProductRunt 2020. Todos os direitos Reservados</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </section>
    </div>
    <!-- Scripts -->
    <script src="./js/app.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/slick.min.js"></script>
    <script type="text/javascript">
        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false,
            autoplay: true,
            autoplaySpeed: 3000
        });
    </script>
</body>
</html>