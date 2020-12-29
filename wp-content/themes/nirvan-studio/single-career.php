<?php get_header(); ?>
    <!-- Content
    ============================================= -->
    <section id="content">
        <?php while (have_posts()):
            the_post();
            $form = get_field('contact_form', 'option');
            ?>
            <div class="content-wrap py-0">

                <div class="section m-0 pb-0">
                    <div class="container">
                        <div class="row align-items-end justify-content-between mb-5">
                            <div class="col-lg-6 offset-lg-1">
                                <div>
                                    <h3 class="font-weight-bolder display-4 mb-3 wow fadeInUp"
                                        data-wow-duration="0.6s"><span
                                                class="gradient-text gradient-horizon"><?php the_title(); ?></span></h3>
                                    <p class="lead mb-0 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.4s"><?php the_content();?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>
                    <div class="section m-0 bg-white pb-5 ">
                        <div class="container">
                            <h3>Responsiblities</h3>
                            <ul class="iconlist iconlist-color mb-0">
                                <?php while (have_rows('responsiblities')):
                                    the_row(); ?>
                                    <li><i class="icon-ok"></i><?php the_sub_field('responsiblities_list'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="section m-0 bg-white pb-5 pt-0 ">
                        <div class="container">
                            <h3>Qualification</h3>
                            <ul class="iconlist iconlist-color mb-0">
                                <?php while (have_rows('qualification')):
                                    the_row(); ?>
                                    <li><i class="icon-ok"></i><?php the_sub_field('qualification_list'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="section my-0 pt-0 bg-white">
                        <?php echo do_shortcode("[contact-form-7 id='" .  $form['career_form'] . "']") ?>

                    </div>
                </div>
            </div>

            </div>
        <?php endwhile; ?>
    </section><!-- #content end -->
<?php get_footer(); ?>