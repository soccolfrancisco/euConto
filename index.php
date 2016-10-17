<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EuConto</title>

    <meta name="description" content="Free download theme onepage, clean and modern responsive for all" />
    <meta name="keywords" content="responsive, html5, onepage, themes, template, clean layout, free web" />
    <meta name="author" content="Thomsoon.com" />

    <link rel="shortcut icon" href="img/favicon.png">

    <link rel="stylesheet" type="text/css" href="css/reset.css?date=<?php echo'datetime();'?>" />
    <link rel="stylesheet" type="text/css" href="css/style.css?date=<?php echo'datetime();'?>" />
    <link rel="stylesheet" type="text/css" href="css/style-responsive.css?date=<?php echo'datetime();'?>" />

    <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#filterOptions li a').click(function () {
                // buscar a classe do item clicado
                var ourClass = $(this).attr('class');

                // redefinir a classe ativa em todos os botões
                $('#filterOptions li a').removeClass('active');
                // atualizar o estado ativo em nosso botão clicado
                $(this).addClass('active');

                if (ourClass == 'all') {
                    $('#grid').children('li.all').show();
                } else { // ocultar todos os elementos que não compartilham nossa classe
                    $('#grid').children('li:not(.' + ourClass + ')').hide();
                    // mostrar todos os elementos que fazem compartilhar nossa classe
                    $('#grid').children('li.' + ourClass).show();
                }
                return false;
            });
        });
    </script>
</head>

<body>
    <div class="container">

        <!-- section start-page -->
        <section class="start-page parallax-background" id="home">
            <div class="opacity"></div>
            <div class="content">
                <div class="text">
                    <!--<h1>BEM VINDO<br/></h1>
                    <h2>AO NOSSO <span>SITE</span></h2>-->
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
                <div class="logo"></div>
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
                <div class="logo"><img src="img/logo.png"></div>
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
                <p>O projeto “Eu Conto” é uma organização sem fins lucrativos idealizada pelos universitários dos cursos de Engenharia e Computação do CEUNES/UFES em 2016.</br></br> Possui como proposta a disponibilização de histórias inspiradoras escritas e contadas pelos próprios voluntários do projeto.</br></br> As histórias têm como objetivo geral promover o conhecimento histórico e cultural do município de São Mateus, além de contar sobre a vida de cientistas, empreendedores e grandes personalidades do cenário mundial.</p>
            </div>

            <div class="column-two">
                <div class="circle-two"></div>
                <h2>MISSÃO</h2>
                <p>Como objetivos específicos, pode-se citar o envolvimento e o alcance de diversos alunos das escolas que participarão do projeto, bem como a busca pela motivação dos mesmos, de forma que esses possam ver nas histórias contadas uma realidade possível e inspiradora.</br></br>As narrativas são contadas de forma infantilizadas, podendo assim abranger todas as faixas etárias.</br></br> As histórias então são convertidas em vídeos e disponibilizadas nesta plataforma, sendo que essas também são apresentadas presencialmente em datas comemorativas nas escolas. </p>
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
                   <li><a href="#" class="active all">Todas as Histórias</a></li>
                   <!-- <li><a href="#" class="port01">Historia01</a></li>
                    <li><a href="#" class="port02">Historia02</a></li>
                    <li><a href="#" class="port03">Historia03</a></li>-->
                </ul>

                <ul class="grid" id="grid">
				

                    <li class="all port01">
                        <a id="myBtn1" href="#">
                            <img src="img/portfolio/10.jpeg" alt="" />
                            <div id="01" class="text">
                                <p>PORTO</p>
                                <p class="description">Clique para assistir o video.</p>

                            </div>
                        </a>
                    </li>

				<!--	<li class="all port02">
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

        <!-- Modals -->
        <div id="myModal1" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close"></span>
                </div>
                <div class="modal-body">
                    <video id="video1" width="800" controls>
                        <source src="videos/EuContoOficial.mp4" type="video/mp4">
                    </video>
                </div>
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
                    <a href="http://www.adapti.info" target="_blank"><img src="img/logos/adapti.png"></a>
                    <!--<a href="#"><img src="img/logos/archiq.png"></a>
                    <a href="#"><img src="img/logos/thomsoon.png"></a>
                    <a href="#"><img src="img/logos/alex2.png"></a>-->
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class="contact" id="contact">
            <h1>CONTATO</h1>
            <hr/>
            <div class="content">
                <div class="form">
                    <form action="#" method="post" enctype="text/plain">
                        <input name="your-name" id="your-name" placeholder="Digite seu nome completo" required />
                        <input name="your-email" id="your-email" placeholder="Digite seu e-email" required />
                        <textarea id="message" name="message" placeholder="Digite sua mensagem" required></textarea>
                        <button class="button" type="submit"><span>ENVIAR</span></button>
                    </form>
                </div>
                <div class="contact-text">
                    Para contactar-nos por favor utilize o formulário ao lado
                    <br/>
                    <br/> Para enviar anexos, utilize o e-mail abaixo
                    <br/></br>
                    <strong>Nome do responsavel</strong>
                    <br/>
                    <br/> e-mail: <strong>email@email.com</strong>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="margin">
                <div class="copyright">
                    © Eu Conto 2016. Todos os direitos reservados.</div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.parallax.js"></script>
    <!-- jQuery Parallax -->
    <script src="js/jquery.nicescroll.js"></script>
    <!-- jQuery NiceScroll -->
    <script src="js/jquery.sticky.js"></script>
    <!-- jQuery Stick Menu -->
    <script src="js/script.js"></script>
    <!-- All script -->
    <script src="js/script.modal.js"></script>
</body>

</html>