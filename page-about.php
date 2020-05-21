<?php // Template Name: About ?>
<?php get_header(); ?>
<div id="page-head" class="container-fluid inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="icons-animation-holder">
                    <div class="aicon aicon1"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/aicon1.png" alt=""></div>
                    <div class="aicon aicon2"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/aicon2.png" alt=""></div>
                    <div class="aicon aicon3"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/aicon3.png" alt=""></div>
                    <div class="aicon aicon4"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/aicon4.png" alt=""></div>
                    <div class="aicon aicon-main">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 134 38" width="124px" height="35px" class="logo">
                            <text kerning="auto" font-family="Rubik" fill="rgb(255, 255, 255)" transform="matrix( 11.051445195489, 0, 0, 11.0388026563729,0.08427829227281, 28.538802656373)" font-size="2.5px">Pardazish</text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6 company-info-holder">
                <h4>About Pardazish ICT Solutions Company</h4>
                <div class="info-slider">
                    <div>
                        <div class="details-holder">
                            <p>Pardazish Technology Services Company has started its expertise by
                                relying on several years of experience in foreign and domestic 
                                markets as well as scientific and practical experiences of its 
                                specialists which is registered by the Ministry of Commerce and
                                eIndustries of the Islamic Republic of Afghanistan.</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <p>The company has so far been able to respond to the problems and needs of customer service in a timely manner, recognizing the importance of support and has always prioritized customer satisfaction.</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <p>Pardazish ICT Company is ready to provide services with the goal of expanding the technology along with customers expectation </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="ifeatures" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">What makes us special?</div>
                <div class="row-subtitle"></div>
            </div>
        </div>  
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/feature1.png" alt="">
                    </div>
                    <div class="feature-title">24/7 Support</div>
                    <div class="feature-details">We are easily accessible to you and we enjoy sharing personal contact with clients</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/feature2.png" alt="">
                    </div>
                    <div class="feature-title">Work Speed</div>
                    <div class="feature-details">The obvious benefit to working quickly is that you’ll finish more stuff per unit time</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/feature3.png" alt="">
                    </div>
                    <div class="feature-title">Security First</div>
                    <div class="feature-details">Ensuring your cyber security and privacy is our priority in anytime in best way.
</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/feature4.png" alt="">
                    </div>
                    <div class="feature-title">Trusted 100%</div>
                    <div class="feature-details">Being trustworthy makes us more different and gives us superiority over others
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="more-info" class="container-fluid">
    <div class="bg-custom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="links-holder">
                    <ul>
                        <li><div class="info-link opened" data-id="1">Our Mission</div></li>
                        <li><div class="info-link" data-id="2">Our Vision</div></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="info-details-holder">
                    <div class="info-details info-d1 show-details">
                        <h1>Creating a space<br>
                            for creatives.</h1>
                        <p>The main goal is to provide services and technology strategies that have long-term business benefits and the efficiency of these strategies has economic, efficient, durable and flexible effects that provide the ability to respond quickly to market and customer needs.</p>
                    </div>
                    <div class="info-details info-d2">
                        <h1>Pardazish always<br>
                            make you feel comfort.</h1>
                        <p>Pardazish strives to synchronize its goals with the growth of business and customer needs and to meet the needs of the market and customers to achieve its services effectively.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div id="team" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Our support. our team</div>
                <div class="row-subtitle"></div>
            </div>
            <?php
                $args  = array( 'post_type' => 'Team' );
                $query = new WP_Query( $args );
                //wp_custom_query( $query );
                while ( $query->have_posts() ): $query->the_post();
            ?>
            <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <img src="<?php echo the_field('image'); ?>">
                <div class="team-content">
                    <h3 class="title"><?php echo ucfirst(the_title()); ?></h3>
                    <span class="post"><?php echo ucfirst(the_field('specialty')); ?></span>
                    <ul class="social">
                        <li><a href="<?php echo the_field('fb'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo the_field('telegram'); ?>"><i class="fab fa-telegram"></i></a></li>
                        <li><a href="mailto:<?php echo the_field('email'); ?>"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
