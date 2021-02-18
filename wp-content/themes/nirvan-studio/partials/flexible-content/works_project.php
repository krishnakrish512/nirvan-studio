<div class="clear"></div>

<div class="section m-0" id='works'>
    <div class="container">
        <div class="row align-items-end justify-content-between mb-5">
            <div class="col-lg-5 offset-lg-1">
                <div>
                    <h3 class="font-weight-bolder h1 mb-4 wow fadeInUp" data-wow-duration="0.4s"
                        data-wow-delay="0.2s"><?php the_sub_field('title'); ?></h3>
                    <p class="lead mb-0 wow fadeInUp" data-wow-duration="0.4s"
                       data-wow-delay="0.4s"><?php the_sub_field('paragraph'); ?> </p>
                </div>

            </div><!--col-->
            <?php if (!is_page('works')) { ?>
                <div class="col-auto wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <a href="<?php the_sub_field('button_url'); ?>"
                       class="button button-dark button-border rounded-pill">View
                        All Works <i class="icon-line-arrow-right"></i></a>
                </div><!--col-auto-->
            <?php } ?>
        </div><!-- End Row-->
        <div class="row justify-content-center col-mb-50 mb-5 ">

            <?php while (have_rows('works')):
                the_row();

                ?>

                <div class="col-lg-6 h-translatey-3 tf-ts  wow fadeInUp" data-wow-duration="0.4s"
                     data-wow-delay="0.5s">
                    <?php $image = get_sub_field('content_image');
                    //                                                                            var_dump($image);
                    //                                                                            exit();
                    ?>
                    <a href="<?php the_sub_field('content_url'); ?>" class="portfolio-item" target="_blank">
                        <div class="portfolio-image">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['title']); ?>">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                    <h3 class="mb-0 mt-1"><?php the_sub_field('content_title'); ?></h3>
                                    <h5><?php the_sub_field('content_type'); ?></h5>
                                </div>
                                <div class="d-none bg-overlay-content align-items-start justify-content-end p-4">
                                    <div class="overlay-trigger-icon bg-dark text-white"
                                         data-hover-animate="fadeInDownSmall"
                                         data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                        <i class="icon-line-link"></i></div>
                                </div>
                            </div>
                        </div>
                    </a><!--Portfolio-item-->
                </div><!--col-lg-->

            <?php endwhile; ?>
        </div><!-- Row -->
        <?php if (!is_front_page()) { ?>
            <div class="text-center wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <a href="<?php echo esc_url(get_permalink(get_page_by_title('works All'))); ?>"
                   class="button button-dark button-border rounded-pill">View
                    All Works <i class="icon-line-arrow-right"></i></a>
            </div>
        <?php } ?>


    </div><!--container-->
</div>
