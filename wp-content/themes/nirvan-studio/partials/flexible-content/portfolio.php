<div class="section m-0 bg-white ">
    <div class="container">
        <div id="portfolio" class="portfolio row grid-container gutter-30">
            <?php while (have_rows('portfolio_repeater')):
                the_row();
                ?>
                <article class="portfolio-item col-sm-4 col-12 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php while (have_rows('portfolio_type')):
                                the_row();
                                ?>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex"><i class="icon-line-check-circle mr-2"></i> <a
                                                href="<?php the_sub_field('portfolio_link'); ?>">
                                                <?php the_sub_field('portfolio_title'); ?></a>
                                    </li>
                                </ul>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div><!-- #portfolio end -->
    </div>
</div>
</div>

</div>

</section><!-- #content end -->

