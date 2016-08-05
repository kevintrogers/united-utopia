<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
		
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
		<script src='js/scripts.js'></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
<div id='action-call'>

  Get a free gift with every purchase!
 
</div>
<nav>
  <div class="nav-wrapper">

    <a href="#home" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="hide-on-med-and-down nav-left">
      <li><a href="#about">About</a></li>
      <li><a href="#specials">Specials</a></li>
    </ul>
    <a href="#" class="brand-logo center z-depth-4"><img src='http://u83341670@s605611687.onlinehome.us/img/utopia.jpg' alt='United Utopia Logo'></a>
    <ul class="hide-on-med-and-down nav-right">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Shop<i class="material-icons right">arrow_drop_down</i></li>
        <li><a href="mobile.html">Contact</a></li>
    </ul>

    <ul class="side-nav" id="mobile-demo">
      <li><a href="#about">About</a></li>
      <li><a href="#specials">Specials</a>
        
      <li><a href="#shop">Shop</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->

</nav>
			</header>
			<!-- /header -->
