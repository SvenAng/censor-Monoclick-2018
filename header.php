<?php
/**
 * The template for displaying the header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

    <!-- Google Tag Manager --> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-NZMQJRQ');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZMQJRQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) !-->

    <style type="text/css">
        .no-fouc {display: none;}
    </style>
    <script type="text/javascript">
        document.documentElement.className = 'no-fouc';
    </script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>

<div class="header" data-toggle="affix" id="header"><a id="header-logo" href="/"><div class="headerlogo-container"><img class="header-logo" src="<?= get_template_directory_uri(); ?>/assets/Censor_logo.png"></a>
    <a href="javascript:void(0);" id="icon" href="#icon" onclick="burgerFunction()" class="fa fa-bars affix"></a></div>


		<?php
		$args = array(
			'theme_location'  => 'primary',
			'container_id'    => '',
            'after' => '<span class="no-transform" onclick="menuShow(this)" id="clickableAwesomeFont"><i class="fa fa-angle-right" aria-hidden="true"></i></span>'
		);

		wp_nav_menu( $args );
		?>


</div>

<div class="container">

<?php
