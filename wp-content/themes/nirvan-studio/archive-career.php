<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap py-0">
        <div class="section m-0 pb-0">
            <div class="container">
                <div class="row align-items-end justify-content-between mb-5">
                    <div class="col-lg-6 offset-lg-1">
                        <div>
                            <h3 class="font-weight-bolder display-4 mb-3 wow fadeInUp" data-wow-duration="0.6s">Join Our
                                <span class="gradient-text gradient-horizon">Team</span></h3>
                            <p class="lead mb-0 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.4s">Career</p>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

            </div>
            <div class="section m-0 bg-white ">
                <div class="container" style="max-width:950px">
                    <ul class="list-group">
                        <?php while(have_posts()):
                        the_post();
                        ?>
                        <li class="list-group-item border-left-0 border-right-0 ">
                            <a href="<?php the_permalink();?>" class="d-flex justify-content-between h5 mb-0"><?php the_title();?><i
                                        class="icon-line-arrow-right"></i></a>
                        </li>
<!--                        <li class="list-group-item border-left-0 border-right-0 ">-->
<!--                            <a href="career.html" class="d-flex justify-content-between h5 mb-0">WordPress Developer <i-->
<!--                                        class="icon-line-arrow-right"></i></a>-->
<!--                        </li>-->
                        <?php endwhile;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>

</section><!-- #content end -->


<?php get_footer() ?>
