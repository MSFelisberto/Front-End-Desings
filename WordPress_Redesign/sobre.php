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
                    <a href="./index.php" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#sobre" class="navbar__links" id="sobre-page">Sobre</a>
                </li>
                <li class="navbar__item">
                    <a href="#contato" class="navbar__links" id="contato-page">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sobre Equipe -->
    <section class="sobre-equipe">
        <div class="sobre-equipe__container">
            <div class="sobre-equipe__content">
                <h2>Uma equipe estratégica para um trabalho incrível</h2>
                <p>Com foco permanente na geração de resulltados para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicações criativas, consistentes e adequadas às necessidades e caracteristicas de cada companhia.<br/> Para isso, trabalhamos sempre em parceria e colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os negócios de cada cliente</p>
            </div>
            <div class="sobre-equipe-img__container">
                <div class="sobre-equipe-img__card">
                    <img src="./img/foto-equipe-01.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section class="galeria">
        <div class="galeria__content">
            <div class="galeria-box">
                <div class="galeria-single">
                     <img src="./img/foto-1.png" alt="">
                </div>
                <div class="galeria-single">
                     <img src="./img/foto-2.png" alt="">
                </div>
                <div class="galeria-single">
                     <img src="./img/foto-3.png" alt="">
                </div>
                <div class="galeria-single">
                     <img src="./img/foto-4.png" alt="">
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

</body>
</html>