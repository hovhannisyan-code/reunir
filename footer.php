<!-- footer section begin -->
<footer class="footer-section">
    <div class="overlay">

        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave waveTop"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"></div>
            </div>
        </div>

        <div class="footer-content">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="social-icon">
                            <?php if( have_rows('icons_11') ): $i=0;?>
                            <ul class="icon-area">
                                <?php while( have_rows('icons_11') ): the_row(); 
                                    $icon = get_sub_field('icon');
                                    $link = get_sub_field('link'); ?>
                                    <li class="social-nav">
                                        <a href="<?php echo $link; ?>"><?php echo $icon; ?></a>
                                    </li>
                                <?php $i++; endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <div class="footer-text">
                            <h5 class="footer-title"><?php echo get_field('before_heading_12'); ?></h5>
                            <h2 class="footer-subtitle"><?php echo get_field('heading_12'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        <div class="subscribe">
                            <?php echo do_shortcode('[contact-form-7 id="230" title="Subscribe"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 col-md-12 d-flex justify-content-start reunir-content-center">
                            <div class="footer-bottom-left">
                                <p><?php echo get_field('copyright_text'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 d-flex justify-content-end reunir-content-center">
                            <div class="footer-bottom-right">
                                <ul>
                                    <li>
                                        <a href="index.html#">Privacy & Policy</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Term Of Service</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Affilate</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->
<?php wp_footer(); ?>
</body>
</html>