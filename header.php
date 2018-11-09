<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package art_theme_by_champ_V_2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" rel="stylesheet">
	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
	<link href="" rel="stylesheet">
	  <!-- development version, includes helpful console warnings -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<?php wp_head(); ?>
	
</head>

<body>
<header class="padded">
      <div class="container">
        <div class="row">
          <div class="one half">
			<?php
			 $custom_logo_id = get_theme_mod( 'custom_logo' );
			 $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			
			if ( is_front_page() && is_home() ) :
				?>
				<h2 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_parent"></a><a class="c_t" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h2>
				<?php
			else :
				?>
				<h2 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_parent"><?php  echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Portfolio champ">' ?></a><a class="c_t" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a></h2>
				<?php
			endif;
			$art_theme_by_champ_v_2_description = get_bloginfo( 'description', 'display' );
			if ( $art_theme_by_champ_v_2_description || is_customize_preview() ) :
				?>
				<p style="font-size:18px"><?php echo $art_theme_by_champ_v_2_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		   <div class="one half">
            <p class="small double-pad-top no-pad-small-tablet align-right align-left-small-tablet"><a href="https://github.com/champseo2017?tab=repositories" target="_parent">Github</a></p>
          </div>
        </div>
        <nav role="navigation" class="nav gap-top">
       <?php
      if ( has_nav_menu( 'menu-1' ) ) {
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'container' => 'ul',
          'role' => 'menubar',
        ) );
      }
    ?>
        </nav>
      </div>
	</header>
