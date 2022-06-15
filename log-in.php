<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Plataforma Ecoo's, renda extra é conosco! Venha participar deste novo mundo financeiro no mercado.">
    <meta name="author" content="Grupo Ecoo's">
    <meta name="robots" content="Ecoos, Plataforma Ecoos, Ecoos Bot, Plataforma Ecoo's, Ecoo's, Ecoo's Bot, Bot Ecoo's, Ganhar dinheiro Ecoo's, Como ganhar dinheiro na Ecoos, Como ganhar dinheiro na Ecoo's"/>
    <meta name="googlebot" content="Instagram, Ecoo's, Facebook Ecoos, Bot Ecoos, LinkedIn Ecoos"/>
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="Plataforma Ecoos"/> <!-- website name -->
	<meta property="og:site" content="Grupo Ecoos"/> <!-- website link -->
	<meta property="og:title" content="Plataforma Ecoos"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Plataforma Ecoo's, renda extra é conosco! Venha participar deste novo mundo financeiro no mercado."/> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="Ecoos"/> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="ecoos.com"/> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article"/>


    <!-- Website Title -->
    <title>Plataforma Ecoos</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index"></a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index"><img src="images/logo-central3.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index#features">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index#details">DETALHES</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">DETALHES</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMOS E CONDIÇÕES</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACIDADE E POLÍTICA</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index#pricing">MOEDA</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in">ENTRAR</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>ENTRAR</h1>
                   <p>Você não tem uma senha? Inscreva-se <a class="white" href="sign-up">Cadastrar</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form id="logInForm" action="php/log2" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="lemail" required name="email">
                                <label class="label-control" for="lemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="lpassword" required name="senha">
                                <label class="label-control" for="lpassword">Senha</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control-submit-button" value="ENTRAR"></input>
                            </div>
                            <div class="form-message">
                                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>