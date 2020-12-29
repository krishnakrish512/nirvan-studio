<div class="clear"></div>

<div class="section py-5 bg-transparent ">
    <div class="container">
        <div class="row align-items-end justify-content-between mb-5">
            <div class="col-lg-5 offset-lg-1">
                <h3 class="font-weight-bolder h1 wow fadeInUp" data-wow-duration="0.4s"
                    data-wow-delay="0.2s"><?php the_sub_field('title'); ?></h3>
                <p class="wow fadeInUp" data-wow-duration="0.4s"
                data-wow-delay="0.4s"><?php the_sub_field('paragraph'); ?></p>
            </div>
            <?php if (!is_page('services')) { ?>
            <div class="col-auto wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <a href="<?php the_sub_field('button_url'); ?>" class="button button-dark button-border rounded-pill">View
                    All Services
                    <i class="icon-line-arrow-right"></i></a>
            </div>
            <?php }?>
        </div>
        <div class="row gutter-50  align-items-stretch service-card">
                <?php while (have_rows('service_reapeter')):
                    the_row();
                    ?>
                    <div class="col-md-4 wow fadeInUp " data-wow-duration="0.4s">
                        <div class="card d-flex align-items-end flex-column border-0 p-4">
                            <div class="mt-5"></div>
                            <div class="mt-auto">
                                <?php $image = get_sub_field('image_url');
                                //                                                                                    var_dump($image);
                                //                                                                                    exit();
                                ?>
                                <div class="card-body">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['title']); ?>" class="mb-4" height="50">
                                    <h3 class="card-title font-weight-bolder"><?php the_sub_field('service_title'); ?></h3>
                                    <p class="card-text mb-0 mt-2 font-weight-light"><?php the_sub_field('service_paragraph'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
    </div><!--container -->
    
</div>

<div class="clear"></div>

</div>

</section><!-- #content end -->

