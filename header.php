<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="google-site-verification" content="GpXW3bF85yskYqiuECaU6YWAlSi0GxGjyVQI8Dad_t4" />  
        <meta name="description" content="Design de qualidade acessível e descomplicado para micro e pequenas empresas" />
        <meta name="keywords" content="Estúdio de Design, Design," />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="Daniel André" />

        <link rel="icon" href="images/logo-invert.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="images/logo-invert.ico" type="image/x-icon" />        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style-large.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-1.4.3.js"></script>
        

        <script type="text/javascript">
            $(document).ready(function() {
                function filterPath(string) {
                    return string
                    .replace(/^\//,'')
                    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
                    .replace(/\/$/,'');
                }
                $('a[href*=#]').each(function() {
                if ( filterPath(location.pathname) == filterPath(this.pathname)
                    && location.hostname == this.hostname
                    && this.hash.replace(/#/,'') ) {
                        var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
                        var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
                        if ($target) {
                        var targetOffset = $target.offset().top;
                        $(this).click(function() {
                        $('html, body').animate({scrollTop: targetOffset}, 500);
                        return false;
                        });
                        }
                }
                });

                // jQuery(document).ready(function($) { 
                //     $(".scrollSuave").click(function(event){        
                //         event.preventDefault();
                //         $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
                //    });
                // });

                // $('.dropdown-toggle').dropdown()
                               
            })

        // $(document).ready(function () {
        //     $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active", imageCrossfade: true, loadingIcon: "http://www.elevateweb.co.uk/spinner.gif"}); 

        //     $("#zoom_03").bind("click", function(e) {  
        //       var ez =   $('#zoom_03').data('elevateZoom');
        //       ez.closeAll(); //NEW: This function force hides the lens, tint and window 
        //         $.fancybox(ez.getGalleryList());
        //       return false;
        //     }); 

        // }); 

// ]]></script>

<!--         <link rel="stylesheet" href="dnk-gallery/css/jquery.donkeyGallery.css">
        <link rel="stylesheet" href="dnk-gallery/css/jquery.fancybox.css"> -->

<!--         <script type="text/javascript">
            
            //initiate the plugin and pass the id of the div containing gallery images
            $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

            //pass the images to Fancybox
            $("#zoom_03").bind("click", function(e) {  
              var ez =   $('#zoom_03').data('elevateZoom'); 
                $.fancybox(ez.getGalleryList());
              return false;
            });

        </script> -->

        <!-- <script type="text/javascript" src="js/funcoes.js"></script> -->
        <title>nós vós elas - Estúdio de Design</title>
    </head>
 
    <body>

        <!-- Início Conatainer (Engloba o site inteiro)-->
        <div class="container-fluid">
        
        	<!-- Início Header (Conteúdos de cabeçalho) -->
                <header id="header">                    
                    <!-- <div class="container"> -->
                        <!-- <div class="row"> -->
                            <nav class="nav-menu">
                            <figure><a href="?pg=home"><img src="images/logo.png" class="logo-header seletor" /></a></figure>
                                
                                <ul>
                                    <!-- <div class="col-3"> -->
                                        <!-- <li></li> -->
                                    <!-- </div> -->
                                    
                                    <!-- <div class="col-9"> -->
                                        <li><a href="?pg=home" id="botao" class="seletor">HOME</a></li>
                                        <li><a href="?pg=home#pg2" id="botao-grande" class="seletor">QUEM SOMOS</a></li>
                                        <li><a href="?pg=home#pg3"  id="botao-grande" class="seletor">PORTFOLIO</a></li>
                                        <li><a href="#footer" id="botao" class="seletor">CONTATO</a></li>
                                    <!-- </div> -->

                                  <!--   <li><a href="?pg=home"><img src="images/logo.png" class="logo-header seletor" /></a></li>
                                    <li><a href="?pg=home" id="botao">HOME</a></li>
                                    <li><a href="?pg=home#pg2" id="botao-grande">QUEM SOMOS</a></li>
                                    <li><a href="?pg=home#pg3"  id="botao-grande">PORTFOLIO</a></li>
                                    <li><a href="#footer" id="botao">CONTATO</a></li> -->

                           <!--          <li>
                                        <div class="dropdown d-flex justify-content-sm-end">

                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-bars"></i>
                                                <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <li><a href="?pg=home">HOME</a></li>
                                                <li><a href="?pg=home#pg2">QUEM SOMOS</a></li>
                                                <li><a href="?pg=home#pg3">PORTFÓLIO</a></li>
                                                <li><a href="#footer">CONTATO</a></li>
                                            </ul>

                                        </div>
                                    </li> -->

                                </ul>

                                <div class="dropdown d-flex justify-content-sm-end">

                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-bars"></i>
                                                <span class="caret"></span>
                                            </button>
                                           <!--  <button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button> -->

                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                <!-- <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li> -->
                                                <li><a href="?pg=home">HOME</a></li>
                                                <li><a href="?pg=home#pg2">QUEM SOMOS</a></li>
                                                <li><a href="?pg=home#pg3">PORTFÓLIO</a></li>
                                                <li><a href="#footer">CONTATO</a></li>
                                            </ul>

                                </div>

                                <!-- <div class="dropdown">

                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Dropdown
                                                <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>

                                </div> -->
                            </nav>
                        <!-- </div> -->

                        <script type="text/javascript">
                            
                            // $('.dropdown-toggle').dropdown()
                            $('.dropdown-toggle').open()

                        </script>
                     
                    <!-- </div> -->
                </header>

            <!-- <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                        </button>
                        <a href="#pg1" class="navbar-brand"><img src="images/logo.png" class="logo-header seletor" /></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="page-scroll">
                                <a href="#page-top">HOME</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#portfolio">QUEM SOMOS</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#about">PORTFOLIO</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#contact">CONTATO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->

            <!-- Fim Header (Conteúdos de cabeçalho) -->
                
                <!-- Início Content (Conteúdo central do site) -->
                <div id="content">