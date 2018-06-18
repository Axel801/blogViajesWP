<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url( '/' )); ?>">
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          ?>
          <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Boton de expandir">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
          <?php
          wp_nav_menu( array(
            'theme_location'=>'header-menu',
            'container_class' => 'navbar-nav',
            'items_wrap'=> '%3$s',//Para quitar el ul
            'walker'=> new HeaderMenuWalker()
          ) );
          ?>

        </div>
      </div>
    </nav>
  </header>
