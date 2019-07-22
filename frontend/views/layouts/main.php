<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\imformationWidget;
use frontend\widgets\loginWidget;
use frontend\widgets\registerWidget;
use frontend\models\CustomerSingup;
use frontend\widgets\experiencesWidget;
use frontend\widgets\contentWidget;
$model = new CustomerSingup();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="cd-bg-video-wrapper" data-video="video/bangkok-city">
            <!-- video element will be loaded using jQuery -->
        </div> <!-- .cd-bg-video-wrapper -->
        
        <!-- Content -->
        <div class="cd-hero">
       
            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <div class="container">
                    <nav class="navbar">
                        <div class="tm-navbar-bg">                            
                            <a class="navbar-brand text-uppercase" href="#">Jobs</a>
                            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                                &#9776;
                            </button>
                            <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item active selected">
                                        <a class="nav-link" href="#0" data-no="1">information <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="2">content</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="3">experience</a>    
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="4">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="5">register</a>
                                    </li>
                                  
                                      
                                   
                                </ul>
                            </div>                        
                        </div>
                    </nav>
                </div>                
            </div> 

            <ul class="cd-hero-slider">  <!-- autoplay -->

                <!-- Page 1 Home -->
                <li class="selected">
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-page-1 tm-section-margin-t-small" data-page-no="1">
                            <div class="row">                            
                                <div class="col-xs-12">
                                    <div class="tm-home-container-outer">
                                        <div class="tm-home-container">
                                            <div class="tm-home-title-container">
                                                <h2 class="tm-text-title text-xs-center tm-home-title">YOUR INFORMATION</h2>    
                                            </div>
                                            <div class="tm-home-description-container tm-bg-dark-blue">
                                            <?=imformationWidget::widget() ?>
                                            </div>    
                                        </div>
                                        <div class="tm-home-container-bg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cd-full-width -->
                </li>
                
                <!-- Page 2 About -->
                <li>
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-section-margin-t" data-page-no="2">
                        <div class="row">                            
                                <div class="col-xs-12">
                                    <div class="tm-home-container-outer">
                                        <div class="tm-home-container">
                                            <div class="tm-home-title-container">
                                                <h2 class="tm-text-title text-xs-center tm-home-title">YOUR INFORMATION</h2>    
                                            </div>
                                            <div class="tm-home-description-container tm-bg-dark-blue">
                                            <?=contentWidget::widget() ?>
                                            </div>    
                                        </div>
                                        <div class="tm-home-container-bg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                                
                    </div> <!-- .cd-full-width -->

                </li>
                <!-- Page 3 Gallery -->
                <li>
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-section-margin-t" data-page-no="2">
                        <div class="row">                            
                                <div class="col-xs-12">
                                    <div class="tm-home-container-outer">
                                        <div class="tm-home-container">
                                            <div class="tm-home-title-container">
                                                <h2 class="tm-text-title text-xs-center tm-home-title">YOUR INFORMATION</h2>    
                                            </div>
                                            <div class="tm-home-description-container tm-bg-dark-blue">

                                            <?=experiencesWidget::widget() ?>
                                            </div>    
                                        </div>
                                        <div class="tm-home-container-bg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>                                                
                    </div> <!-- .cd-full-width -->

                </li>
                
                <!-- Page 4 Contact -->
                <li>
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-section-margin-t-small" data-page-no="4">                            
                            <div class="tm-contact-page">
                                
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container tm-bg-dark-blue">                                
                                        <?=loginWidget::widget() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div> <!-- .cd-full-width -->
                </li>
                <li>
                    <div class="cd-full-width">
                        <div class="container js-tm-page-content tm-section-margin-t-small" data-page-no="5">                            
                            <div class="tm-contact-page">
                                
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container tm-bg-dark-blue">                                
                                        <?=registerWidget::widget() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div> <!-- .cd-full-width -->
                </li>
              
            </ul> <!-- .cd-hero-slider -->
            
            <footer class="tm-footer">            
                <p class="tm-copyright-text pull-xs-right">Copyright &copy; <span class="tm-current-year">2017</span> Your Company            
                | Design: Tooplate</p>
            </footer>                    
        </div> <!-- .cd-hero -->        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
       
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/tether.min.js"></script>                <!-- http://tether.io/ -->
        <script src="js/isInViewport.min.js"></script>          <!-- isInViewport js (https://github.com/zeusdeux/isInViewport) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var offset = 80;
                var pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height();

                if($(window).width() >= 992) { offset = 120; }
                else if($(window).width() < 480) { offset = 40; }
               
                // Get the page height
                var totalPageHeight = 335 + $('.cd-slider-nav').height()
                                        + pageContentHeight + offset
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            function uploadVideo() {

                var videoWrapper = $('.cd-bg-video-wrapper');
                if( videoWrapper.is(':visible') ) {
                    // if visible - we are not on a mobile device 
                    var videoUrl = videoWrapper.data('video'),
                        
                    video = $('<video autoplay loop><source src="'+videoUrl+'.mp4" type="video/mp4" /></video>');
                    video.appendTo(videoWrapper);

                    // play video if first slide
                    if(videoWrapper.parent('.cd-bg-video.selected').length > 0) video.get(0).play();                 
                }
            }

            // Everything is loaded including images.            
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                // Background Video
                if($( window ).width() > 800) {
                    uploadVideo();
                }

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-first').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Two pop up
                -----------------------------------------*/
                $('.gallery-second').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 3000);

                    if($( window ).width() > 800) {
                       uploadVideo();
                    }
                    
                });

                // Play video only when visible
                // https://stackoverflow.com/questions/21163756/html5-and-javascript-to-play-videos-only-when-visible
                $('video').each(function(){
                    if ($(this).is(":in-viewport")) {
                        $(this)[0].play();
                    } else {
                        $(this)[0].pause();
                    }
                })
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');
                $('.tm-current-year').text(new Date().getFullYear());
                           
            });

        </script>            

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
