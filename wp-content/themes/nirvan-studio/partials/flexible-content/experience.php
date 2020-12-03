<div class="container" style="max-width: 1000px">
    <div class="row col-mb-30 mt-5">
        <?php while (have_rows('repeater')):
            the_row();
            ?>
            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="counter counter-xlarge text-dark font-weight-bolder"><span data-from="1"
                                                                                           data-to="<?php the_sub_field('data_to'); ?>"
                                                                                           data-refresh-interval="15"
                                                                                           data-speed="1000"></span>
                    </div>
                    <?php the_sub_field('work_exper'); ?>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
    <div class="line line-sm mb-0"></div>
</div>

<div class="clear"></div>

