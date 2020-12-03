<div class="clear"></div>

<div class="section m-0" id='works'>
    <div class="container">
        <div class="row align-items-end justify-content-between mb-5">
            <div class="col-lg-5 offset-lg-1">
                <div>
                    <h3 class="font-weight-bolder h1 mb-4 wow fadeInUp" data-wow-duration="0.4s"
                        data-wow-delay="0.2s"><?php the_sub_field('title');?></h3>
                    <p class="lead mb-0 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s"><?php the_sub_field('paragraph');?> </p>
                </div>
            </div>
            <div class="col-auto wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <a href="<?php the_sub_field('button_url');?>" class="button button-dark button-border rounded-pill">View All Works <i
                            class="icon-line-arrow-right"></i></a>
            </div>
        </div>

        <div class="row justify-content-center col-mb-50 ">
            <?php while (have_rows('works')):
            the_row();
            ?>
            <div class="col-lg-6 h-translatey-3 tf-ts  wow fadeInUp" data-wow-duration="0.4s"
                 data-wow-delay="0.5s">
                <a href="https://happyshoppe.com.np/" class="portfolio-item" target="_blank">
                    <div class="portfolio-image">
                        <img src="assets/images/happy-shoppe.jpg" alt="Portfoio Item">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">
                                <h3 class="mb-0 mt-1">Happy Shoppe </h3>
                                <h5>E-commerce</h5>
                            </div>
                            <div class="bg-overlay-content align-items-start justify-content-end p-4">
                                <div class="overlay-trigger-icon bg-dark text-white"
                                     data-hover-animate="fadeInDownSmall"
                                     data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i
                                            class="icon-line-link"></i></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile;?>

<!--            <div class="col-lg-6 h-translatey-3 tf- wow fadeInUp" data-wow-duration="0.4s"-->
<!--                 data-wow-delay="0.6s">-->
<!--                <a href="http://utkhpl.org.np/" class="portfolio-item" target="_blank">-->
<!--                    <div class="portfolio-image">-->
<!--                        <img src="assets/images/Upper-Tamakoshi-Hydropower-Limited.jpg" alt="Portfoio Item">-->
<!--                        <div class="bg-overlay">-->
<!--                            <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">-->
<!--                                <h3 class="mb-0 mt-1">Upper Tamakoshi Hydropower Limited</h3>-->
<!--                                <h5>Hydro</h5>-->
<!--                            </div>-->
<!--                            <div class="bg-overlay-content align-items-start justify-content-end p-4">-->
<!--                                <div class="overlay-trigger-icon bg-dark text-white"-->
<!--                                     data-hover-animate="fadeInDownSmall"-->
<!--                                     data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i-->
<!--                                            class="icon-line-link"></i></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->

<!--            <div class="col-lg-6 h-translatey-3 tf-ts  wow fadeInUp" data-wow-duration="0.4s"-->
<!--                 data-wow-delay="0.5s">-->
<!--                <a href="http://hotelgreenvalley.com.np/" class="portfolio-item" target="_blank">-->
<!--                    <div class="portfolio-image">-->
<!--                        <img src="assets/images/Hotel-Green-Valley.jpg" alt="Portfoio Item">-->
<!--                        <div class="bg-overlay">-->
<!--                            <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">-->
<!--                                <h3 class="mb-0 mt-1">Hotel Green Valley</h3>-->
<!--                                <h5>Hotel</h5>-->
<!--                            </div>-->
<!--                            <div class="bg-overlay-content align-items-start justify-content-end p-4">-->
<!--                                <div class="overlay-trigger-icon bg-dark text-white"-->
<!--                                     data-hover-animate="fadeInDownSmall"-->
<!--                                     data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i-->
<!--                                            class="icon-line-link"></i></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-6 h-translatey-3 tf-ts wow fadeInUp" data-wow-duration="0.4s"-->
<!--                 data-wow-delay="0.8s">-->
<!--                <a href="http://nkfmh.org.np/" class="portfolio-item" target="_blank">-->
<!--                    <div class="portfolio-image">-->
<!--                        <img src="assets/images/korena-hospital.jpg" alt="Portfoio Item">-->
<!--                        <div class="bg-overlay">-->
<!--                            <div class="bg-overlay-content align-items-start justify-content-start flex-column px-5 py-4">-->
<!--                                <h3 class="mb-0 mt-1">Nepal Korea Friendship Municipality Hospital </h3>-->
<!--                                <h5>Hospital</h5>-->
<!--                            </div>-->
<!--                            <div class="bg-overlay-content align-items-start justify-content-end p-4">-->
<!--                                <div class="overlay-trigger-icon bg-dark text-white"-->
<!--                                     data-hover-animate="fadeInDownSmall"-->
<!--                                     data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i-->
<!--                                            class="icon-line-link"></i></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
        </div>

    </div>
</div>
