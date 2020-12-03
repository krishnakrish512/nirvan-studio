<div class="section text-center m-0 bg-white">
    <div class="mw-xs mx-auto ">
        <h3 class="display-4 font-weight-bolder text-uppercase wow fadeInUp"
            data-wow-duration="0.6s"><?php the_sub_field('title'); ?></h3>
        <p class="mt-4 wow fadeInUp" data-wow-duration="0.6s"
           data-wow-delay="0.1s"><?php the_sub_field('paragraph'); ?></p>

        <div class="clear"></div>

        <div class="row justify-content-center align-items-center mt-4 col-mb-30">
            <?php while (have_rows('our_partner')):
                the_row();
                ?>
                <?php $image = get_sub_field('client_image');
                ?>
                <div class="col-md-4 col-6 center wow fadeInUp" data-wow-duration="0.6s"
                     data-wow-delay="<?php the_sub_field('data_delay'); ?>">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['title']); ?>"
                         title="<?php the_sub_field('alt_text'); ?>">
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</div>
</div>

</section><!-- #content end -->

