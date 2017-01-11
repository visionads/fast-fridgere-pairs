<!DOCTYPE html>
<html>
	<head>
		<?php
			include('plugin.php');
		?>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php
			if ( function_exists( 'ot_get_option' ) ) {
			  $backgroundimage = ot_get_option( 'backgroundimage' );
			  $banner_text = ot_get_option( 'banner_text' );
              $menu_bottom_text = ot_get_option( 'top_menu_bottom_text' );
              $menu_bottom_image = ot_get_option( 'top_menu_bottom_background' );
              $services_heading = ot_get_option( 'services_heading' );
              $services = ot_get_option( 'service' );
              $we_can_help_with = ot_get_option( 'we_can_help_with' );
              $we_can_help_with_items = ot_get_option( 'we_can_help_with_items' );
              $we_can_help_with_items = ot_get_option( 'we_can_help_with_items' );
              $clients_say = ot_get_option( 'clients_say' );
              $footer_text = ot_get_option( 'global_footer_text' );
			}
		?>
		<div class="site">
			
			<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="background-image:url('<?=$backgroundimage?>')" >

                <div class="banner_overlay">
                    <div class="container height_100p pos_relative">
                        <div class="row height_100p">
                            
                            <div class="mobile_menu">
                                <a id="menu-button" href="#primary-menu-mobile"><i id="open-left" class="fa fa-bars"></i></a>
                                <nav id="primary-menu-mobile">
                                  <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Residential Fridge repairs</a>
                                    </li>
                                    <li>
                                        <a href="#">Commercial Refrigeration Repairs</a>
                                    </li>
                                    <li>
                                        <a href="#">Coolroom</a>
                                        <ul>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Installation</a>
                                            </li>
                                            <li>
                                                <a href="#">Repairs &amp; Maintenance</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Brand we service</a>
                                    </li>
                                    <li>
                                        <a href="#">contact</a>
                                    </li>
                                  </ul>
                                </nav>
                            </div>

                            <div class="col-md-7 banner_top_left">
                                <div class="row">
                                    <div class="logo">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                          <img src="<?=get_template_directory_uri()?>/assets/images/logo.png" alt="Renovation" width="250">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <?=$banner_text?>                        
                                </div>
                                    

                                <img src="<?=get_template_directory_uri()?>/assets/images/quality.png" class="quality" width="180">
                            </div>

                            <div class="col-md-5 col-sm-12 height_100p banner_top_right">
                                <div class="row height_100p">
                                    <div class="banner_form height_100p">
                                        <div class="container-fluid">
                                            <p class="mb0">&nbsp;</p>
                                            <div class="call-us_phone row">
                                              <div class="col-sm-12">
                                                <div class="phone top_banner_phone text-center">
                                                  <p>CALL US TODAY</p>
                                                  <h4><i class="fa fa-phone"></i> 0405 972 558</h4>
                                                </div>
                                              </div>
                                            </div>

                                            <h3 class="text-center">RESPONSE WITHIN THE HOUR</h3>
                                            
                                            <div class="banner_ul">
                                                <ul class="banner_right_list">
                                                    <li><span class="pe-7s-check"></span> FAST</li>
                                                    <li><span class="pe-7s-check"></span> QUALITY</li>
                                                    <li><span class="pe-7s-check"></span> COST EFFECTIVE</li>
                                                </ul>
                                            </div>
            								
            								<?php
            									echo do_shortcode('[contact-form-7 id="8" title="Contact form 1" html_class="bannr_form" ]');
            								?>

                                        </div>
                                    </div>
                                </div>

                                <img src="<?=get_template_directory_uri()?>/assets/images/100.png" class="satisfaction" width="90">
                            </div>
                        </div>
                    </div>
                </div>
              
            </div><!-- END REVOLUTION SLIDER -->



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

            <section class="we-are we-are-layout1" data-parallax="scroll" data-image-src="<?= $menu_bottom_image; ?>">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-lg-6">
                        <?= $menu_bottom_text; ?>
                  </div>
                </div>
              </div>
            </section>
            <!-- /.we-are-layout1 -->

            <section class="big-title"  style="margin-bottom:0;">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <?= $services_heading; ?>
                  </div>
                </div>
              </div>
            </section>


            <section class="features-style-1">
              <div class="container">
                <div class="row">

                    <div class="col-sm-12" >
                        <?php
                            if(!empty($services)){
                                foreach ($services as $key => $value) {
                                    /*echo '<pre>';
                                    var_dump($value);*/
                        ?>
                            <div class="col-sm-4" >
                                <div class="feature-item">
                                    <div class="feature-item-wrapper service_min_height">
                                        <h3 class="feature-item_title"><?= $value['title']; ?></h3>
                                        <p><?= $value['description']; ?></p>
                                        <i class="" style="margin-top: -50px;"><img src="<?= $value['image']; ?>" ></i>
                                    </div>
                                </div>
                            </div>
                        <?php
                                }
                            }
                        ?>
                        
                        
                    </div>

                </div>
              </div>
            </section>
            <!-- /.features-style-1 -->


            <section class="services services-style-01">
              <div class="service-heading">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                        <?= $we_can_help_with; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="service-content my_service">
                <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                        <?php
                            if(!empty($we_can_help_with_items)){
                                foreach ($we_can_help_with_items as $key => $value) {
                        ?>
                            <div class="col-sm-6 col-md-3">
                                <div class="row">
                                    <div class="service-item">
                                        <div class="service-item_img">
                                            <img src="<?= $value['image'];?>" alt="service-renovation">
                                        </div>
                                        <a class="service-item_link" href="<?= $value['link'];?>">
                                            <?= $value['description'];?>
                                            <?= $value['title'];?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                                }
                            }
                        ?>

                        
                      </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- /.services-style-01 -->

			
			<?php
			
			    $query = new WP_Query();
        		$query->query('post_type=Brands&orderby=menu_order&order=ASC&posts_per_page=20');
        		
			?>

            <section class="brand">
              <h2 class="hidden">Brand</h2>
              <div class="container">
                <ul class="brand-owl owl-carousel">
                    <?php
                        while ($query->have_posts()) : $query->the_post();
                        
                            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                        <li class="brand-item">
                            <img src="<?= $feat_image; ?>" alt="Client">
                            <div class="brand-item-overlay"></div>
                            <div class="brand-item-element">
                              <?php the_title(); ?>
                            </div>
                        </li>
                    <?php
                            
                            
                            //the_permalink();
                        endwhile;
                    ?>

                </ul>
              </div>
            </section>
            <!-- .brand -->
			

            <section class="big-title" style="margin-bottom:0;">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <?= $clients_say; ?>
                  </div>
                </div>
              </div>
            </section>


            <?php
            
                $query2 = new WP_Query();
                $query2->query('post_type=testimonial&orderby=menu_order&order=ASC&posts_per_page=20');
                
            ?>
            <section class="testimonial">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="testi-owl owl-carousel">
                      
                        <?php
                            while ($query2->have_posts()) : $query2->the_post();
                            
                        ?>
                            <div class="quote">
                                <blockquote>
                                  <p><?php the_content(); ?></p>
                                </blockquote>
                                <cite class="author">
                                  <span class="author-name"><?php the_title(); ?></span>
                                </cite>
                            </div>
                        <?php
                            endwhile;
                        ?>


                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- /.testimonial -->



            <footer class="footer">
              
              <div class="social-menu social-menu_right-arrow">
                <ul class="menu">
                  <li class="menu-item"><a href="https://www.facebook.com/">facebook</a></li>
                  <li class="menu-item"><a href="https://www.plus.google.com/">google+</a></li>
                  <li class="menu-item"><a href="https://www.twitter.com/">twitter</a></li>
                  <li class="menu-item"><a href="https://www.youtube.com/">youtube</a></li>
                </ul>
              </div>
            </footer>
            <!-- /.footer -->

            <div class="copyright">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                        <?= $footer_text; ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.copyright -->


			
		</div>
	
	<?php wp_footer();?>
	</body>
</html>

