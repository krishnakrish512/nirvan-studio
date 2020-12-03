<div class="section bg-transparent py-5">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-4">
                <h3 class="font-weight-bolder h1 mb-4 wow fadeInUp" data-wow-duration="0.4s"
                    data-wow-delay="0.3s"><?php the_sub_field('title'); ?></h3>

                <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget mt-5 wow fadeInUp"
                     data-margin="0" data-items="1" data-pagi="true" data-nav="false" data-wow-duration="0.4s"
                     data-wow-delay="0.6s">
                    <?php while (have_rows('client_repeater')):
                        the_row();
                        ?>
                        <div class="oc-item">
                            <div class="testimonial border-0 shadow-none bg-transparent">
                                <div class="testi-content">
                                    <p><?php the_sub_field('paragraph'); ?></p>
                                    <div class="testi-meta d-flex align-items-center">
<!--                                                                                --><?php //$image = get_sub_field('client_image');
//                                                                                var_dump($image);
//                                                                                exit();

                                        ?>
                                        <img src="<?php the_sub_field('client_image') ?>" alt="Face" width="30">
                                        <div>
                                            <?php the_sub_field('client_name'); ?>
                                            <span class="pl-0"><?php the_sub_field('website'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
<!--                        --><?php //$image = get_sub_field('image_url');
//                        var_dump('$image');
//                        exit();
//                        ?>
            <div class="col-lg-6 wow fadeIn" data-wow-duration="0.4s" data-wow-delay="0.6s">
                <img src="<?php the_sub_field('image_url'); ?>" alt="">
            </div>
        </div>
    </div>
</div>

