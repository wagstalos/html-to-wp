<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes();  ?> >
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Minifolio - Bootstrap Responsive Resume, Personal Portfolio Template</title>
<?php wp_head(); ?>
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix">
       <a class="logo" href="#">
       <?php 
          $pc_custom_logo = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src(  $pc_custom_logo, 'full');

          if(has_custom_logo()) {
              echo '<img width="36px" src="' . esc_url($logo[0]) . '" alt="Imagem de uma cidade com um prédio grande no centro">';
          }else{
                  echo '<h5 class="m-0" >' . get_bloginfo('name') . '</h5>';
          }   
          ?>
      </a>
       
      <nav class="navigation" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' =>'', 'menu_class' => 'primary-nav' ) ); ?>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  --> 
  </header>
  
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
        <?php 
          if(is_active_sidebar( 'banner' )){
            dynamic_sidebar( 'banner' );
          }
        ?>
        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="aboutme" class="section descripton">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center"> 
      <?php 
        if(is_active_sidebar( 'about-me' )){
            dynamic_sidebar( 'about-me' );
        }
      ?>
    </div>
    <div class="col-md-10 col-md-offset-1 space">
    <?php 
        if(is_active_sidebar( 'about-me2' )){
            dynamic_sidebar( 'about-me2' );
        }
      ?>
    </div>
  </div>
</section>
<!-- description text section --> 
<!-- portfolio section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-1.jpg" class="work-box"> <img src="images/work-1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-2.jpg" class="work-box"> <img src="images/work-2.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-3.jpg" class="work-box"> <img src="images/work-3.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-4.jpg" class="work-box"> <img src="images/work-4.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Graphic Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-5.jpg" class="work-box"> <img src="images/work-5.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-6.jpg" class="work-box"> <img src="images/work-6.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-7.jpg" class="work-box"> <img src="images/work-7.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/work-8.jpg" class="work-box"> <img src="images/work-8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- portfolio section --> 
<!-- hire me section -->
<section id="hireme" class="section hireme">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
    <?php 
        if(is_active_sidebar( 'hire-me' )){
            dynamic_sidebar( 'hire-me' );
        }
      ?>
      <!-- <a href="#contact" class="btn btn-large">Hire me</a> </div> -->
  </div>
</section>
<!-- hire me section --> 

<section id="contact" class="section contact">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
    <?php 
        if(is_active_sidebar( 'contact' )){
            dynamic_sidebar( 'contact' );
        }
      ?>
    </div>
  </div>
</section>

<!-- footer -->
<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <?php wp_nav_menu( array( 'theme_location' => 'social', 'container' => '', 'menu_class' => 'footer-share' ) ); ?>
        </p>
        <p>© 2015 All rights reserved. All Rights Reserved<br>
          Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a><br>
          Resesigned by <a href="#">Marcelo Vieira</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 

<?php wp_footer(); ?>
</body>
</html>