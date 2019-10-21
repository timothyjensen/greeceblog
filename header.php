<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'background-gradient' ); ?>>
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url( site_url() ); ?>">NU19 Thesseloniki</a>
      <button class="navbar-toggler navbar-toggler-right background-gradient" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="main-navigation ml-auto">
          <div class="navbar-nav">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation'
            ));
          ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url(<?php echo esc_url( get_theme_file_uri('images/home-bg.jpg') ); ?>)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php echo get_option('blogname');?></h1>
            <span class="subheading"><?php echo get_option('blogdescription');?></span>
          </div>
        </div>
      </div>
    </div>
  </header>
