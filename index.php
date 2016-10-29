<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EuConto</title>

    <meta name="description" content="Free download theme onepage, clean and modern responsive for all" />
    <meta name="keywords" content="responsive, html5, onepage, themes, template, clean layout, free web" />
    <meta name="author" content="Thomsoon.com" />

    <link rel="shortcut icon" href="img/logo/favicon.png">

    <link rel="stylesheet" type="text/css" href="css/reset.css?date=<?php echo'datetime();'?>" />
    <link rel="stylesheet" type="text/css" href="css/style.css?date=<?php echo'datetime();'?>" />
    <link rel="stylesheet" type="text/css" href="css/style-responsive.css?date=<?php echo'datetime();'?>" />

    <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</head>

<body>
    <div class="container">

        <!-- section start-page -->
        <section class="start-page parallax-background" id="home">
            <div class="opacity"></div>
            <div class="content">
                <div class="text">
                    <a href="#about-us">
                        <div class="read-more">Conheça-nos</div>
                    </a>
                </div>
                <div class="arrow-down"></div>
            </div>
        </section>

        <!-- section menu mobile -->
        <section class="menu-media">
            <div class="menu-content">
                <div class="logo"><img src="img/logo/logo.png" width="100%" /></div>
                <div class="icon">
                    <a href="#"><img src="img/icons/menu-media.png" /></a>
                </div>
            </div>
        </section>

        <ul class="menu-click">
            <a href="#home">
                <li href="#home">HOME</li>
            </a>
            <a href="#about-us">
                <li href="#about-us">QUEM SOMOS</li>
            </a>
            <a href="#portfolio">
                <li href="#portfolio">PORTIFOLIO</li>
            </a>
            <a href="#contact">
                <li href="#contact">CONTATO</li>
            </a>

        </ul>

        <!-- section menu -->
        <section id="barra-menu" class="menu">
            <div class="menu-content">
                <div class="logo"><img src="img/logo/logo.png"></div>
                <ul id="menu">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about-us">QUEM SOMOS</a></li>
                    <li><a href="#portfolio">PORTIFOLIO</a></li>
                    <li><a href="#contact">CONTATO</a></li>
                </ul>
            </div>
        </section>

        <!-- section about us -->
        <section class="about-us" id="about-us">
            <h1>QUEM SOMOS</h1>
            <hr/>
            <div class="column-one">
                <div class="circle-one"></div>
                <h2>O PROJETO</h2>
                <p>O Projeto "Eu Conto" é uma organização sem fins lucrativos idealizado por universitários de Engenharias e Ciências da Computação do CEUNES/UFES. Nasceu em 2016 e possui como proposta principal a disponibilização de histórias inspiradoras escritas e contadas pelos membros da empresa júnior Adapti.
                    <br/>
                    <br/> Todas as histórias têm como objetivo promover o conhecimento histórico e cultural do município de São Mateus e região, além de contar histórias inspiradoras de cientistas, empreendedores e grandes personagens do cenário mundial. As histórias são convertidas em vídeos e disponibilizadas nesta plataforma.</p>
            </div>

            <div class="column-two">
                <div class="circle-two"></div>
                <h2>MISSÃO</h2>
                <p>Envolver e fomentar diversos estudantes a participarem do projeto tornando um meio de aproximação cultural e social. As narrativas são contadas de forma única e infantilizada abordando diversos temas como forma de abranger todas as faixas etárias e desenvolver uma sociedade mais consciente e inspiradora.</p>
            </div>
        </section>

        <div class="clear"></div>

        <!-- portoflio-->
        <section class="portfolio" id="portfolio">
            <div class="portfolio-margin">
                <h1>PORTIFOLIO</h1>
                <hr/>

                <!-- 1 item portoflio-->
                <ul class="filterOptions" id="filterOptions">
                    <li><a class="active all">Todas as Histórias</a></li>
                </ul>

                <ul class="grid" id="grid">

                    <li>
                        <a id="myBtn1" href="#">
                            <img src="img/portfolio/10.jpeg" alt="" />
                            <div id="01" class="text">
                                <p>PORTO</p>
                                <p class="description">Clique para assistir o video.</p>

                            </div>
                        </a>
                    </li>

                    <!--<li class="all port02">
                        <a id="myBtn2" href="#">
                            <img src="img/portfolio/1.png" alt="" />
                            <div id="02" class="text">
                                <p>Em Breve</p>
                                <p class="description"></p>

                            </div>
                        </a>
                    </li>-->

                    <!--	<li class="all port03">
                        <a id="myBtn3" href="#">
                            <img src="img/portfolio/3.png" alt="" />
                            <div id="03" class="text">
                                <p>Em Breve</p>
                                <p class="description"></p>

                            </div>
                        </a>
                    </li>-->
                </ul>
            </div>
        </section>

        <div class="clear"></div>

        <!-- Modals -->
        <div id="myModal1" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close"></span>
                </div>
                <video id="video1" controls class="modal-body">

                    <source src="videos/EuContoOficial.mp4" type="video/mp4" allowfullscreen>
                </video>

            </div>
        </div>

        <!-- <div id="myModal2" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close"></span>
                </div>
                <div class="modal-body">
                    <video id="video2" width="800" controls>
                        <source src="videos/Red%20Hot%20Chili%20Peppers%20-%20Scar%20Tissue%20%5BOfficial%20Music%20Video%5D.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div id="myModal3" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close"></span>
                </div>
                <div class="modal-body">
                    <video id="video3" width="800" controls>
                        <source src="videos/Underworld-%20Blood%20Wars%20Official%20Trailer%201%20(2017)%20-%20Kate%20Beckinsale%20Movie.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>-->

        <div class="clear"></div>

        <!-- partners-->
        <section class="partners parallax-background-partners" id="partners">
            <div class="opacity"></div>
            <div class="content">
                <h2>PARCEIROS</h2>
                <div class="logo">
                    <a href="http://www.adapti.info" target="_blank"><img src="img/parceiros/adapti.png"></a>
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class="contact" id="contact">
            <h1>CONTATO</h1>
            <hr/>
            <div class="content">
                <div class="form">
                    <form action="enviar.php" method="POST">
                        <input type="text" name="nome" placeholder="Digite seu nome completo" required />
                        <input type="email" name="email" placeholder="Digite seu e-email" required />
                        <textarea type="text" name="mensagem" placeholder="Digite sua mensagem" required></textarea>
                        <button class="button" type="submit"><span>ENVIAR</span></button>
                    </form>
                </div>
                <div class="contact-text">
                    Você tem uma história/sugestão que mereça ser contada?
                    <br/>
                    <br/> Utilize o formulário ao lado ou envie para <strong>projetoeuconto@gmail.com</strong>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="margin">
                <div class="copyright">Copyright © 2016<a href="http://www.adapti.info" target="_blank"> Adapti</a> - Todos os direitos reservados.</div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.parallax.js?date=<?php echo'datetime();'?>"></script>
    <!-- jQuery Parallax -->
    <script src="js/jquery.nicescroll.js?date=<?php echo'datetime();'?>"></script>
    <!-- jQuery NiceScroll -->
    <script src="js/jquery.sticky.js?date=<?php echo'datetime();'?>"></script>
    <!-- jQuery Stick Menu -->
    <script src="js/script.js?date=<?php echo'datetime();'?>"></script>
    <!-- All script -->
    <script src="js/script.modal.js?date=<?php echo'datetime();'?>"></script>
</body>

</html>