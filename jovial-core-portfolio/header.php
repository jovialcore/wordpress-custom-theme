<!Doctype html>
<html lang="en">

<head>
    <!--Required meta tags always come first--->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" type="<?php bloginfo( 'stylesheet_url' ) ?>" href="">
    <title>
        <?php bloginfo('name'); ?>
     
    </title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?> >



    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <a class="navbar-brand" href="#"><?php bloginfo('favicon.png') ?> </a>

        
         <!--    the line of code below is suppose to do this: This will remove the div tag and the duplication of the ul tag for us, but it doesnt do that? who knows why it doesnt do that -->
    <?php wp_nav_menu( array(
         'menu' => 'Top Menu',
      'theme_location' => 'primary-menu',
      'depth' => 2,
      'container' => '',
        'menu_class' => 'navbar-nav ml-auto',
      'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
      'walker' => new WP_Bootstrap_Navwalker(),
      )); ?>

</nav>
   

<div class="container">
    <div class="row">

</div>

