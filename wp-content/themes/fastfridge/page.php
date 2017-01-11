<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<?php
	get_header();

	if ( function_exists( 'ot_get_option' ) ) {
      $phone_number = ot_get_option( 'phone_number' );
      $location = ot_get_option( 'location' );
      $site_title = ot_get_option( 'site_title' );
	}
?>

<div class="site mm-page mm-slideout">
	<header class="site-header style-01" style="display:block;">
    <div class="container">
        <div class="row row-xs-center">
            <div class="col-xs-10 col-lg-2 site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?=get_template_directory_uri()?>/assets/images/logo.png" alt="Renovation" data-pagespeed-url-hash="2130387722" >
				</a>
            </div>
            <a id="menu-button" href="#primary-menu-mobile"><i id="open-left" class="fa fa-bars"></i></a>

            <div class="col-xs-12 col-sm-9 col-lg-8 extra-info">
                <div class="row">
                    <div class="col-sm-5">
                        <i class="fa fa-phone"></i>
                        <div class="phone">
                            <h3><?= $phone_number; ?></h3>
                            <span>CALL US TODAY</span>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <i class="fa fa-home"></i>
                        <div class="address">
                            <h3><?= $site_title; ?></h3>
                            <span><?= $location; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-lg-2 text-xs-center text-sm-right search-cart">
            </div>

        </div>
    </div>
    <div class="social-menu social-menu_right-arrow hidden-md-down">
        <ul class="menu">
            <li class="menu-item"><a href="https://www.facebook.com/">facebook</a>
            </li>
            <li class="menu-item"><a href="https://www.plus.google.com/">google+</a>
            </li>
            <li class="menu-item"><a href="https://www.twitter.com/">twitter</a>
            </li>
            <li class="menu-item"><a href="https://www.youtube.com/">youtube</a>
            </li>
        </ul>
    </div>
</header>

		<nav id="primary-menu" class="primary-menu_style-01 hidden-xs hidden-sm">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12">
				
		      		<?php
		      			$topmenu = array(
		      				'theme_location'  => 'top',
		      				'menu'            => '',
		      				'container'       => 'div',
		      				'container_class' => '',
		      				'container_id'    => '',
		      				'menu_class'      => 'menu',
		      				'menu_id'         => '',
		      				'echo'            => true,
		      				'fallback_cb'     => 'wp_page_menu',
		      				'before'          => '',
		      				'after'           => '',
		      				'link_before'     => '',
		      				'link_after'      => '',
		      				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		      				'depth'           => 0,
		      				'walker'          => ''
		      			);

		      			wp_nav_menu( $topmenu );
		      		?>
		        
		      </div>
		    </div>
		  </div>
		</nav>
		<!-- /.primary-menu -->

	<section class="big-title" style="margin-bottom:0;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php 
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								//$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>
						<h2 style="padding-bottom:0;"><?php the_title(); ?></h2>
						<p class="" style="padding-bottom:60px;">
							<?php the_field('subtitle'); ?>
						</p>
				    <?php
							endwhile;
						endif;
					?>
					
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container" style="min-height:300px;">
		    <div class="row">
		        <div class="col-sm-12">
		            <div class="content">

		            <?php 
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
					

								$post = get_field('test');
								$posts = get_post_meta($post->ID,'pageposts', true);

					?>

								<p>&nbsp;</p>
								<article id="post-1376" class="post-1376 page type-page status-publish hentry">

				                    <div class="entry-content">
				                        <div class="vc_row wpb_row row">
				                            <div class="wpb_column vc_column_container col-sm-12">
				                                <div class="vc_column-inner ">
				                                    <div class="wpb_wrapper">
				                                        <div class="wpb_text_column wpb_content_element  vc_custom_1439354077124">
				                                            <div class="wpb_wrapper">
				                                                <?php the_content(); ?>
				                                            </div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>

				                </article>
				                <!-- #post-## -->

					<?php


							endwhile;
						endif;
					?>



		            </div>
		        </div>
		    </div>
		</div>
	</section>



	</div>



<?php get_footer(); ?>
