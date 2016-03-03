<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
    <div class="container">
      <div class="blog-header">
        <!-- <div class="pull-right">

        </div> -->
        <a href="/"><img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/header.jpg" alt="header"/></a>
        <div class="navbar">
    			<ul class="nav navbar-nav">
    				<li><a href="/index.php?cat=2">Pequeno Almoço</a></li>
            <li><a href="/index.php?cat=1">Refeições</a></li>
            <li><a href="/index.php?cat=3">Lanches</a></li>
            <li><a href="/index.php?cat=4">Sopas</a></li>
            <li><a href="/index.php?cat=5">Curiosidades</a></li>
    			</ul>
        </div>
      </div>
