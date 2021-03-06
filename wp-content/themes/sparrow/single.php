<?php get_header(); ?>

    <?php if( have_posts() ) { while( have_posts() ){ the_post(); ?>

    <!-- Content
    ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" >

                <article class="post">

                    <div class="entry-header cf">

                        <h1><?php the_title(); ?></h1>

                        <p class="post-meta">

                            <time class="date"><?php the_time('F jS, Y') ?></time>
                            /
                            <span class="categories">

                                <?php the_category(' / ');?>

                            </span>

                        </p>

                    </div>

                    <div class="post-thumb">
                        <?php the_post_thumbnail();?>
                    </div>

                    <div class="post-content">

                        <?php the_content(); ?>

                    </div>

                </article> <!-- post end -->

            </div> <!-- Primary End-->



        </div>

    </div> <!-- Content End-->


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
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
                    <b><a href="#">2 Days Ago</a></b>
                </li>
                <!--
                <li>
                   <span>
                   This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                   Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                   <a href="#">http://t.co/CGIrdxIlI3</a>
                   </span>
                   <b><a href="#">3 Days Ago</a></b>
                </li>
                -->
            </ul>

            <p class="align-center"><a href="#" class="button">Follow us</a></p>

        </div>

    </section> <!-- Tweets Section End-->
    <?php } ?>
        <?php } ?>
    <!-- footer
    ================================================== -->
<?php get_footer(); ?>