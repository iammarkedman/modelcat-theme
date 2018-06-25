<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <title><?php bloginfo('name'); ?></title>

	<meta name="description" content="<?php bloginfo('name'); echo ' &ndash; '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />

  <link rel="stylesheet/less" type="text/css" href="<?php bloginfo( 'template_url'); ?>/css/site.less?v=0.0.1" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js" ></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!-- responsive nav -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive-nav.css">
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/responsive-nav.min.js"></script>
</head>

<?php global $wp; ?>
<body <?php body_class(); ?> <?php if( $wp->request == "selected" ) { echo 'onunload=""'; } ?>>

  <div class="container hdr clearfix">
    <div class="logo">KATU AGENCY</div>
    <div class="logofix"></div>

    <nav class="nav-collapse">
      <?php
        wp_nav_menu( array(
          'menu' => 'main-nav',
          'container' => ''
        ));
        ?>
	  </nav>
  </div> <!-- .container -->

