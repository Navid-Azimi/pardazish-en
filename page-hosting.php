<?php // Template Name: Web Hosting ?>
<?php get_header(); ?>
<div id="page-head" class="container-fluid inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title"><?php echo the_title();  ?></div>
                <div id="page-icon">
                    <div class="pricing-icon">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/service-icon1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="h-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text grey-text">Web hosting is a service that allows organizations and individuals to post a website or web page onto the Internet.</div>
            </div>
        </div>
    </div>
</div>
<div id="pricing" class="container-fluid">
    <div class="container">
        <div class="row">
            <?php
			$args  = array( 'post_type' => 'pack' );
			$query = new WP_Query( $args );
			//wp_custom_query( $query );
			while ( $query->have_posts() ): $query->the_post();
			if(get_field('recommended') == "No"):
			?>
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-box-simple pricing-color<?php  echo the_field('theme'); ?>">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title"><?php echo the_title(); ?></div>
                            <div class="pricing-features">
                                <?php  echo the_field('description');  ?>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#month_<?php echo the_ID(); ?>">Monthly</a></li>
                                    <li><a data-toggle="tab" href="#annualy_<?php echo the_ID(); ?>">Annualy</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="month_<?php echo the_ID(); ?>" class="tab-pane fade in active">
                                        <div class="pricing-price"><?php echo the_field('start_at_month');  ?></div>
                                        <div class="billing-cycle">per month</div>
                                    </div>
                                    <div id="annualy_<?php echo the_ID(); ?>" class="tab-pane fade">
                                        <div class="pricing-price"><?php echo the_field('start_at');  ?></div>
                                        <div class="billing-cycle">per year</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                           <?php echo the_field('content'); ?>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="https://t.me/rafiahadi">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                else: ?>
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-box-simple pricing-color<?php  echo the_field('theme'); ?> bestbuy">
                    <div class="pricing-content">
                        <div class="pricing-head">
                            <div class="pricing-title"><?php echo the_title(); ?></div>
                            <div class="pricing-features">
                                <?php  echo the_field('description');  ?>
                            </div>
                            <div class="pricing-options">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#month_<?php echo the_ID(); ?>">Monthly</a></li>
                                    <li><a data-toggle="tab" href="#annualy_<?php echo the_ID(); ?>">Annualy</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="month_<?php echo the_ID(); ?>" class="tab-pane fade in active">
                                        <div class="pricing-price"><?php echo the_field('start_at_month');  ?></div>
                                        <div class="billing-cycle">per month</div>
                                    </div>
                                    <div id="annualy_<?php echo the_ID(); ?>" class="tab-pane fade">
                                        <div class="pricing-price"><?php echo the_field('start_at');  ?></div>
                                        <div class="billing-cycle">per year</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <?php echo the_field('content'); ?>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="https://t.me/rafiahadi">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;  endwhile; ?>
        </div>
    </div>
</div>
<div id="apps" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/click-icon.png"></div>
                <div class="row-title">One-Click Apps</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="apps-holder">
                    <div class="apps-links-holder">
                        <div class="app-icon-holder app-icon-holder1 opened" data-id="1">
                            <div class="app-icon"><img class="grayscale" src="<?php echo get_bloginfo('template_directory'); ?>/images/wordpress.png" alt="wordpress"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder2" data-id="2">
                            <div class="app-icon"><img class="brightness" src="<?php echo get_bloginfo('template_directory'); ?>/images/joomla.png" alt="joomla"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder3" data-id="3">
                            <div class="app-icon"><img class="grayscale" src="<?php echo get_bloginfo('template_directory'); ?>/images/drupal.png" alt="drupal"></div>
                        </div>
                        <div class="app-icon-holder app-icon-holder4" data-id="4">
                            <div class="app-icon"><img class="brightness" src="<?php echo get_bloginfo('template_directory'); ?>/images/magento.png" alt="magento"></div>
                        </div>
                    </div>
                    <div class="apps-details-holder">
                        <div class="app-details">
                            <div class="app-details1 show-details">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/wordpress-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Wordpress Hosting</div>
                                    <div class="app-text">New feature from us to easily connect your site on best CMS platform (WordPress) just by ONE CLICK </div>
                                    <div class="app-link">
                                        <a href="https://t.me/rafiahadi" class="ybtn ybtn-white ybtn-shadow">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details2">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/joomla-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Joomla Hosting</div>
                                    <div class="app-text">For your variety we also give more optional options to be much comfortable and have more freedom</div>
                                    <div class="app-link">
                                        <a href="https://t.me/rafiahadi" class="ybtn ybtn-white ybtn-shadow">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details3">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/drupal-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Drupal Hosting</div>
                                    <div class="app-text">The newest CMS platform for our customers is available now so also for Drupal connecting , You can do it just by ONE CLICK</div>
                                    <div class="app-link">
                                        <a href="https://t.me/rafiahadi" class="ybtn ybtn-white ybtn-shadow">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-details4">
                                <div class="col-md-5">
                                    <div class="img-holder">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/magento-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="app-title">Magento Hosting</div>
                                    <div class="app-text">Also we add low usable CMS platform (Magento) for you to have freedom at your choices and test more services.</div>
                                    <div class="app-link">
                                        <a href="https://t.me/rafiahadi" class="ybtn ybtn-white ybtn-shadow">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

