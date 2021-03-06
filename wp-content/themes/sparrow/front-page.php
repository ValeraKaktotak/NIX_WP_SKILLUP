<?php get_header(); ?>

    <!-- Intro Section
	================================================== -->
    <section id="intro">

        <!-- Flexslider Start-->
        <div id="intro-slider" class="flexslider">

            <ul class="slides">

                <!-- Slide -->
                <li>
                    <div class="row">
                        <div class="twelve columns">
                            <div class="slider-text">
                                <h1><?php _e( 'Free amazing site template', 'sparrow' ); ?><span>.</span></h1>
                                <p><?php _e( 'Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                                enim tellus ultrices elit.', 'sparrow' ); ?></p>
                            </div>
                            <div class="slider-image">
                                <img src="images/sliders/home-slider-image-01.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Slide -->
                <li>
                    <div class="row">
                        <div class="twelve columns">
                            <div class="slider-text">
                                <h1><?php _e( 'Responsive + HTML5 + CSS3', 'sparrow' ); ?><span>.</span></h1>
                                <p><?php _e( 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                                deleniti eos et accusamus. amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis.
                                Aenean condimentum, lacus sit amet luctus.', 'sparrow' ); ?></p>
                            </div>
                            <div class="slider-image">
                                <img src="images/sliders/home-slider-image-02.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>

        </div> <!-- Flexslider End-->

    </section> <!-- Intro Section End-->

    <!-- Info Section
	================================================== -->
    <section id="info">

        <div class="row">

            <div class="bgrid-quarters s-bgrid-halves">

                <div class="columns">
                    <h2><?php _e( 'Clean & Modern.', 'sparrow' ); ?></h2>

                    <p><?php _e( 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
							'sparrow' ); ?>
                    </p>
                </div>

                <div class="columns">
                    <h2><?php _e( 'Responsive.', 'sparrow' ); ?></h2>

                    <p><?php _e( 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
							'sparrow' ); ?>
                    </p>
                </div>

                <div class="columns s-first">
                    <h2><?php _e( 'HTML5 + CSS3.', 'sparrow' ); ?></h2>

                    <p><?php _e( 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
							'sparrow' ); ?>
                    </p>
                </div>

                <div class="columns">
                    <h2><?php _e( 'Free of Charge.', 'sparrow' ); ?></h2>

                    <p><?php _e( 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
							'sparrow' ); ?>
                    </p>
                </div>

            </div>

        </div>

    </section> <!-- Info Section End-->

    <!-- Works Section
	================================================== -->
    <section id="works">

        <div class="row">

            <div class="twelve columns align-center">
                <h1><?php _e( 'Some of our recent works.', 'sparrow' ); ?></h1>
            </div>

            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

                <div class="columns portfolio-item">
                    <div class="item-wrap">
                        <a href="portfolio.html">
                            <img alt="" src="images/portfolio/geometrics.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Geometrics</a></h5>
                            <p>Illustration</p>
                        </div>
                    </div>
                </div>

                <div class="columns portfolio-item">
                    <div class="item-wrap">
                        <a href="portfolio.html">
                            <img alt="" src="images/portfolio/console.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Console</a></h5>
                            <p>Web Development</p>
                        </div>
                    </div>
                </div>

                <div class="columns portfolio-item s-first">
                    <div class="item-wrap">
                        <a href="portfolio.html">
                            <img alt="" src="images/portfolio/camera-man.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Camera Man</a></h5>
                            <p>Photography</p>
                        </div>
                    </div>
                </div>

                <div class="columns portfolio-item">
                    <div class="item-wrap">
                        <a href="portfolio.html">
                            <img alt="" src="images/portfolio/into-the-light.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Into The Light</a></h5>
                            <p>Branding</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section> <!-- Works Section End-->

    <!-- Journal Section
	================================================== -->
    <section id="journal">

        <div class="row">
            <div class="twelve columns align-center">
                <h1><?php _e( 'Our latest posts and rants.', 'sparrow' ); ?></h1>
            </div>
        </div>

        <div class="blog-entries">

            <!-- Entry -->

			<?php
			$args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) :$loop->the_post(); ?>

                <article class="row entry">

                    <div class="entry-header">

                        <div class="permalink">
                            <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                        </div>

                        <div class="ten columns entry-title pull-right">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>

                        <div class="two columns post-meta end">
                            <p>
                                <time datetime="2014-01-31" class="post-date"
                                      pubdate=""><?php the_time( 'F jS, Y' ) ?></time>
                            </p>
                        </div>

                    </div>

                    <div class="ten columns offset-2 post-content">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                            <a class="more-link" href="<?php the_permalink(); ?>"> <?php _e( 'Read More',
									'sparrow' ); ?><i class="fa fa-arrow-circle-o-right"></i></a></p>
                    </div>

                </article>

				<?php wp_reset_postdata(); ?>
			<?php endwhile;
			else :
				_e( 'Sorry, nothing else :(', 'sparrow' );
			endif; ?>

            <!-- Entry End -->

        </div> <!-- Entries End -->

    </section> <!-- Journal Section End-->

    <!-- Call-To-Action Section
	================================================== -->
    <section id="call-to-action">

        <div class="row">

            <div class="eight columns offset-1">

                <h1>
                    <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><?php _e( 'Host This Template on Dreamhost.',
							'sparrow' ); ?></a></h1>
                <p>
					<?php _e( 'Looking for an awesome and reliable web hosting? Try', 'sparrow' ); ?> <a
                            href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span><?php _e( 'DreamHost',
								'sparrow' ); ?></span></a>.
					<?php _e( 'Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>.',
						'sparrow' ); ?>
                </p>

            </div>

            <div class="three columns action">

                <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button"><?php _e( 'Sign Up Now',
						'sparrow' ); ?></a>

            </div>

        </div>

    </section> <!-- Call-To-Action Section End-->

    <!-- Tweets Section
	================================================== -->
    <section id="tweets">

        <div class="row">

            <div class="tweeter-icon align-center">
                <i class="fa fa-twitter"></i>
            </div>

            <ul id="twitter" class="align-center">
                <li>
               <span>
                   <?php _e( "This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum", 'sparrow' ); ?>
               </span>
                    <b><a href="#">2 Days Ago</a></b>
                </li>
            </ul>
            <div class="qwerty">

            </div>

            <p class="align-center"><a class="button follow_us" id="follow_us"><?php _e( 'Random posts',
						'sparrow' ); ?></a></p>
            <p class="align-center"><a class="button user_info" id="user_info"><?php _e( 'User info',
						'sparrow' ); ?></a></p>
            <p class="align-center"><a class="button security" id="security"><?php _e( 'User info -> security',
						'sparrow' ); ?></a></p>

        </div>

    </section> <!-- Tweet Section End-->

<?php get_footer(); ?>