<?php  //Template Name: Home  ?>

<?php
echo get_header();
?>
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="main-slider">
                    <div class="slide">
                        <div class="noti-holder">
                            <a href="<?php echo get_home_url() ;?>/packages">
                                <div class="noti">
                                    <span class="badge">New</span><span class="text">Added new packages in cloud hosting.</span>
                                </div>
                            </a>
                        </div>
                        <div class="spacer"></div>
                        <div class="big-title">How big can you imagine?</div>
                        <p>Pardazish ICT Solutions Company has taken firm and solid steps in designing and programming technology service products and wants quality, ease and progress in the business of its subscribers.</p>
                        <div class="btn-holder">
                            <a href="<?php echo get_home_url() ;?>/about-us" class="ybtn ybtn-header-color">About Us</a><a href="<?php echo get_home_url() ;?>/contact-us" class="ybtn ybtn-white ybtn-shadow">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="header-graphic" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic1.png" alt="" />
            </div>
        </div>
    </div>
</div>
<div class="bg-animation">
    <div class="graphic-show">
        <img class="fix-size" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic1.png" alt="">
        <img class="img img1" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic1.png" alt="">
        <img class="img img2" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic2.png" alt="">
        <img class="img img3" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic3.png" alt="">
    </div>
</div>
</div>


<div id="pricing" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Web Hosting Plans</div>
                <div class="row-subtitle">Choose what's best</div>
            </div>
        </div>
        <div class="row">
            <?php
            $args  = array( 'post_type' => 'pack', 'posts_per_page' => 4);
            $query = new WP_Query( $args );
            //wp_custom_query( $query );
            while ( $query->have_posts() ): $query->the_post();
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-unity pricing-color<?php echo the_field('theme'); ?>">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/service-icon<?php echo the_field('theme'); ?>.svg" alt="">
                        </div>
                        <div class="pricing-title"><?php echo the_title(); ?></div>
                        <div class="price-title">Starting from</div>
                        <div class="pricing-price"><?php echo the_field('start_at_month'); ?></div>
                        <div class="pricing-details">
                            <p> Per Month</p>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="<?php echo get_home_url() ;?>/packages">View Details!</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Our Services</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row rtl-cols">
            <div class="col-sm-12 col-md-6">
                <div id="features-links-holder">
                    <div class="icons-axis">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-small-2.png" alt="">
                    </div>
                    <div class="feature-icon-holder feature-icon-holder1 opened" data-id="1">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-chart-bar fsize"></i></div>
                        <div class="feature-title">Accounting Software</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder2" data-id="2">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-server fsize"></i></div>
                        <div class="feature-title">Web hosting</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder3" data-id="3">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-code fsize"></i></div>
                        <div class="feature-title">Website design and development</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder4" data-id="4">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-search fsize"></i></div>
                        <div class="feature-title">SEO</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder5" data-id="5">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-bullhorn fsize"></i></div>
                        <div class="feature-title">Online marketing</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="features-holder">
                    <div class="feature-box feature-d1 show-details">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-chart-bar"></i></span>
                            <span class="feature-title">Accounting Software</span>
                        </div>
                        <div class="feature-details">
                            <p>Today, there are few areas of activity that have not undergone reorganization due to the introduction of automation solutions. The owners of companies got the opportunity to expand the scope of their business without the need to attract new human resources. In addition, the risk of human error has also decreased: unlike a person, a machine cannot mix up numbers or forget to fill in some details.</p>

                        </div>
                    </div>
                    <div class="feature-box feature-d2">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-server"></i></span>
                            <span class="feature-title">Web hosting</span>
                        </div>
                        <div class="feature-details">
                            <p>
Web hosting is a necessity for any website — it is the physical location of your website on the Internet, an online storage center that houses the information, images, video, and other content that comprises your website. Web hosting service providers maintain the server where the data associated with your website resides, and also manage the technology that makes your website connect to the Internet.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d3">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-code"></i></span>
                            <span class="feature-title">Website design and development</span>
                        </div>
                        <div class="feature-details">
                            <p>Nowdays every small or big brand needs to an accessible & update website To offer its services more widely & useful But this requires specialists, so trust us & enjoy your improves.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d4">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-search"></i></span>
                            <span class="feature-title">SEO</span>
                        </div>
                        <div class="feature-details">
                            <p>SEO is a marketing discipline focused on growing visibility in organic (non-paid) search engine results. SEO encompasses both the technical and creative elements required to improve rankings, drive traffic, and increase awareness in search engines. There are many aspects to SEO, from the words on your page to the way other sites link to you on the web. Sometimes SEO is simply a matter of making sure your site is structured in a way that search engines understand.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d5">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-bullhorn"></i></span>
                            <span class="feature-title">Online Marketing</span>
                        </div>
                        <div class="feature-details">
                            <p>Online Marketing is the way to communicate with the customers and get closer to the customers in order to transfer the value of service to them & Because it is online, it is cheaper, faster, easier, and more productive than traditional methods.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our Promise</div>
                <div class="row-subtitle">Your satisfaction is guaranteed. Indeed.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-trophy"></i>
                    </div>
                    <div class="mfeature-title">%99.9 Uptime</div>
                    <div class="mfeature-details">We are determined to deliver all our services to our customers 99.9% on time</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">Money Back Guarantee</div>
                    <div class="mfeature-details">We guarantee 100% service and adherence to our contracts</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">Best Support</div>
                    <div class="mfeature-details">Our support team is committed to solving service problems for you 100%</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
echo  get_footer();
?>
