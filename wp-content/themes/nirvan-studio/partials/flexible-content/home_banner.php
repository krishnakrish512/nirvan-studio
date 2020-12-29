<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap p-0">
        <?php while (have_rows('block')):

            the_row();

            $image = get_sub_field('image_url');
            $social = get_field('social', 'option');
            ?>


            <div class="section mb-0 pt-3 pb-0"
                 style="background-color: #F4F4F4; margin-top: 150px; overflow: visible;">
                <div class="shape-divider" data-shape="wave" data-height="150" data-outside="true"
                     data-flip-vertical="true"
                     data-fill="#F4F4F4"></div>
                <div class="container">
                    <div class="row justify-content-center text-center mt-5 gradient-text-adjust">
                        <div class="col-lg-7">
                            <div class="">
                                <h3 class="font-weight-bolder h2 mb-4 wow fadeInUp mb-5" data-wow-duration="0.4s"
                                    data-wow-delay="0.2s"> <?php the_sub_field('heading'); ?>
<!--                                    Our experts have <span class="gradient-text gradient-horizon"> 10+ years</span>-->
<!--                                    of work experience in <span-->
<!--                                            class="gradient-text gradient-horizon"> Web Development</span>. We have been-->
<!--                                    able to provide <span class="gradient-text gradient-horizon"> 100% customer satisfaction. </span>-->
                                </h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center position-relative mt-4">
                    <div class="parallax min-vh-75"
                         style="background-image: url('<?php echo $image ?>'); background-size: cover; background-position: center center;"
                         data-bottom-top="width: 40vw" data-center-top="width: 100vw;">
                        <div class="row align-items-center justify-content-center h-100">
                            <div class="col-auto text-center">
                                <a href="<?= $social['linkedin']; ?>" target="_blank"
                                   class="display-4 font-weight-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#linkedin</u></a>
                                <a href="<?= $social['behance']; ?>" target="_blank"
                                   class="display-4 font-weight-bolder text-white d-inline-block mx-4 h-op-08 op-ts"><u>#behance</u></a>
                            </div>
                        </div>
                    </div>
                    <div class="shape-divider" data-shape="wave" data-position="bottom"></div>
                </div>
            </div>
        <?php endwhile; ?>
