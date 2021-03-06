<!-- Footer
============================================= -->
<footer id="footer" class="border-0" style="background-color: #C9D6CF;padding-top: 140px;margin-top:0;">

    <?php $contact = get_field('contact', 'option'); ?>
    <?php $social = get_field('social', 'option'); ?>
    <?php $form = get_field('contact_form', 'option'); ?>

    <div class="shape-divider" data-shape="wave-4" data-height="150" id="shape-divider-6017">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none">
            <path class="shape-divider-fill" fill="#F8F7F2"
                  d="M0 51.76c36.21-2.25 77.57-3.58 126.42-3.58 320 0 320 57 640 57 271.15 0 312.58-40.91 513.58-53.4V0H0z"
                  opacity="0.3"></path>
            <path class="shape-divider-fill"
                  d="M0 24.31c43.46-5.69 94.56-9.25 158.42-9.25 320 0 320 89.24 640 89.24 256.13 0 307.28-57.16 481.58-80V0H0z"
                  opacity="0.5"></path>
            <path class="shape-divider-fill"
                  d="M0 0v3.4C28.2 1.6 59.4.59 94.42.59c320 0 320 84.3 640 84.3 285 0 316.17-66.85 545.58-81.49V0z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="footer-widgets-wrap  m-0">

            <div class="row justify-content-between">

                <div class="col-md-5">
                    <div class="widget">

                        <h3 class="h1 mb-5 wow fadeInUp" data-wow-duration="0.4s">Got a Project?<br>Let's Talk!</h3>
                        <span class="text-black-50 wow fadeInUp mb-5 d-block" data-wow-duration="0.4s"
                              data-wow-delay="0.1s"><?= $contact['description']; ?></span>
                        <ul class="list-unstyled mb-0">
                            <li class="text-black-50 mb-2"><strong class="h5 text-dark"> Nirvan Studio</strong> <br>
                                <?= $contact['address']; ?>
                            </li>
                            <li class="mb-2"><a href="tel:+977 9851085859" class="text-black-50"><?= $contact['phone_number']; ?></a>
                            </li>
                            <li class="mb-2"><a href="<?= $contact['websiteurl']; ?>" class="text-black-50">www.nirvanstudio.com</a>
                            </li>
                        </ul>
                        <a href="mailto:info@nirvanstudio.com" class="h4 text-dark mt-5 mb-4 d-block wow fadeInUp"
                           data-wow-duration="0.4s" data-wow-delay="0.2s"><u><?= $contact['email']; ?></u> <i
                                    class="icon-line-arrow-right position-relative ml-2" style="top: 3px"></i></a>
                        <div class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                            <a href="<?= $social['facebook']; ?>" target="_blank"
                               class="social-icon si-small si-colored si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="<?= $social['linkedin']; ?>" target="_blank"
                               class="social-icon si-small si-colored si-delicious">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                            <a href="<?= $social['behance']; ?>" target="_blank"
                               class="social-icon si-small si-colored si-paypal">
                                <i class="icon-behance"></i>
                                <i class="icon-behance"></i>
                            </a>
                            <a href="<?= $social['instagram']; ?>" target="_blank"
                               class="social-icon si-small si-colored si-flattr">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
                        </div>

                    </div>
                </div>


               <div class="col-md-5 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.1s">
                    <h3 class="h1 mb-5"><?= $form['title']; ?></h3>

                    <div class="form-widget" data-loader="button" data-alert-type="inline">

                        <div class="form-result"></div>

                        <?php echo do_shortcode("[contact-form-7 id='" .  $form['form'] . "']") ?>

                            <input type="hidden" name="prefix" value="landing-enquiry-">

                    </div>
                </div>

            </div>

        </div>
    </div>

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-double-angle-up bg-white text-dark rounded-circle shadow"></div>

<?php wp_footer(); ?>



</body>
</html>
