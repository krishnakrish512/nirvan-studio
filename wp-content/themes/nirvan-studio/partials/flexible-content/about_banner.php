<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-0">
        <div class="content-wrap p-0">
            <?php while (have_rows('block')):

            the_row();

            $image = get_sub_field('image_url');
            $social = get_field('social', 'option');
            ?>

            <div class="mw-md container mb-5 wow fadeInUp " data-wow-duration="0.6s">
                <?php the_sub_field('heading'); ?>
            </div>

            <div class="clear"></div>

            <div class="section mb-0 p-0" style="background-color: #F4F4F4; overflow: visible;">
                <div class="d-flex justify-content-center position-relative">
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