<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        <?php wp_head(); ?>
    </head>
	<body>
	  <div id="wrapper"><div id="wrap1"><div id="wrap2">
		<div id="header">
			<div id="logo"><a href="<? echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" /></a></div>
			<div id="loginout"><?php wp_loginout();?></div>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'navigation-menu', 'container_class' => 'navi', 'menu_id' => 'primary-menu' ) ); ?>
		<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="block"><div>
      <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
         <?php the_content(); ?>
    </div></div>
   <?php endwhile; ?>
 
   <?php endif; ?>
		</div>
		<div style="clear: left;"></div>
		<div id="footer"><div>
			&copy; 2007-2018 Land Baden-Württemberg | Paul-Hindemith-Schule Freiburg | <a href="<? echo home_url(); ?>/kontakt">Kontakt</a> | <a href="<? echo home_url(); ?>/datenschutzerklaerung">Datenschutzerklärung</a> | <a href="<? echo home_url(); ?>/impressum">Impressum</a>
		</div></div>
	  </div></div></div>
		<?php wp_footer(); ?>
	</body>
</html>