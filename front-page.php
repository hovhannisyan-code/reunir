<?php get_header(); ?>




<!-- banner top begin -->
<section class="banner-section">
    <div class="overlay" style="background-image: url(<?php echo SKYR_ASSETS_DIR_URI; ?>/img/header-bg.jpg)">
        <div class="container">
            <div class="total-slide">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="banner-text">
                            <h1><?php echo get_field( "heading" ) ? get_field( "heading" ) : ''; ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="banner-bottom-text"><?php echo get_field( "short_description" );?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <?php
                        $start_button = get_field('start_button'); 
                        if ($start_button) { ?>
                            <div class="get-start">
                                <a href="<?php echo $start_button['link']; ?>"><?php echo $start_button['text']; ?></a>
                            </div>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="statics-section">
            <div class="container">
                <div class="row justify-content-center">
                    <?php if( have_rows('icons') ): $i=0;?>
                        <?php while( have_rows('icons') ): the_row(); 
                            $image = get_sub_field('image');
                            $icon = get_sub_field('icon');
                            $counter = get_sub_field('counter');
                            $text = get_sub_field('text'); ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                <div class="single-statics <?php echo $i==0 ? 'no-border' : ''; ?>">
                                    <div class="icon-box">
                                        <?php
                                        if ($image) { ?>
                                                <img width="55" height="55" src="<?php echo esc_url( $image ); ?>">
                                            <?php
                                        } else { ?>
                                            <?php
                                            echo $icon;
                                        }
                                        ?>
                                    </div>
                                    <div class="text-box">
                                        <span class="counter"><?php echo $counter; ?></span>
                                        <h4><?php echo $text; ?></h4>
                                    </div>
                                </div>
                            </div>
                        <?php $i++; endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner top end -->



<!-- about section begin -->
<section class="about-section navigation" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-left">
                    <div class="about-text">
                        <?php
                            if (get_field('before_heading_2')) { ?>
                                <h5 class="about-title"><?php echo get_field('before_heading_2'); ?></h5>
                                <?php
                            }
                        ?>
                        <?php
                            if (get_field('heading_2')) { ?>
                                <h2 class="about-subtitle"><?php echo get_field('heading_2'); ?></h2>
                                <?php
                            }
                        ?>
                        <?php
                            if (get_field('after_heading_2')) { ?>
                                <h2 class="about-details"><?php echo get_field('after_heading_2'); ?></h2>
                                <?php
                            }
                        ?>
                        <?php
                            if (get_field('description_2')) { ?>
                                <p class="about-description"><?php echo get_field('description_2'); ?></p>
                                <?php
                            }
                        ?>
                    </div>

                    <?php if( have_rows('icons_2') ): $i=0;
                        $classes = array(
                            'bg-eff',
                            'bg-ex',
                            'bg-security',
                            'bg-trans',
                            'bg-simple',
                            'bg-com'
                        );
                        ?>
                    <div class="about-box">
                        <div class="row text-center">
                            <?php while( have_rows('icons_2') ): the_row(); 
                                if ($i == 6) {
                                    $i = 0;
                                }
                                $image = get_sub_field('image');
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title'); ?>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="single-about-box">
                                        <div class="icon-box-outer <?php echo $classes[$i]; ?>">
                                            <div class="icon-box">
                                                <?php
                                                if ($image) { ?>
                                                        <img width="42" height="47" src="<?php echo esc_url( $image ); ?>">
                                                    <?php
                                                } else { ?>
                                                    <?php
                                                    echo $icon;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <h3><?php echo $title; ?></h3>
                                        <div class="hover-box hover-left">
                                            <a href="#">READ MORE<i class="ren-arrowright"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++; endwhile; ?>                            
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-right">
                    <div class="video-box">
                        <?php
                            if (get_field('background_2')) { ?>
                                 <img src="<?php echo get_field('background_2'); ?>" alt="#">
                                <?php
                            }
                        ?>
                        <div class="icon-box">
                            <?php
                            if (get_field('video_url_2')) { ?>
                                 <a href="<?php echo get_field('video_url_2'); ?>" class="video-play-btn popup-video"><i class="ren-playicon"></i></a>
                                <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- choose section begin -->
<section class="choose-section">
    <div class="overlay">
        <div class="container-fruit text-center">
            <div class="row mr-0 ml-0 d-flex justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <div class="choose-text">
                        <h5 class="choose-title"><?php echo get_field('before_heading_3'); ?></h5>
                        <h2 class="choose-subtitle"><?php echo get_field('heading_3'); ?></h2>
                        <p class="choose-title-describe"><?php echo get_field('description_3'); ?></p>
                    </div>
                </div>
            </div>
            <?php if( have_rows('slider_3') ): $i=0; ?>
            <div class="choose-section-carousel">
                <?php 
                while( have_rows('slider_3') ): the_row(); 
                    $image = get_sub_field('image');
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description'); ?>
                    <div class="col">
                        <div class="single-item">
                            <div class="icon-box">
                                <?php
                                if ($image) { ?>
                                        <img src="<?php echo esc_url( $image ); ?>">
                                    <?php
                                } else { ?>
                                    <?php
                                    echo $icon;
                                }
                                ?>
                            </div>
                            <div class="text-box">
                                <h2 class="single-item-title"><?php echo $title; ?></h2>
                                <h3 class="single-item-description"><?php echo $description; ?></h3>
                            </div>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- choose section end -->

<!-- invest section begin -->
<section class="invest-section">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="invest-text">
                        <h5 class="invest-title"><?php echo get_field('before_heading_4'); ?></h5>
                        <h2 class="invest-subtitle"><?php echo get_field('heading_4'); ?></h2>
                        <p class="invest-title-describe"><?php echo get_field('description_4'); ?></p>
                    </div>
                </div>
            </div>
            <?php if( have_rows('steps') ): $i=0; ?>
            <div class="row">
                <?php 
                while( have_rows('steps') ): the_row(); 
                    $image = get_sub_field('image');
                    $icon = get_sub_field('icon');
                    $link = get_sub_field('link');
                    $step = get_sub_field('step');
                    $title = get_sub_field('title'); ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center reunir-content-center">
                        <div class="single-box location-left">
                            <div class="img-box">
                                <div class="font-side">
                                    <?php
                                    if ($image) { ?>
                                            <img src="<?php echo esc_url( $image ); ?>">
                                        <?php
                                    } else { ?>
                                        <?php
                                        echo $icon;
                                    }
                                    ?>
                                </div>
                                <div class="back-side">
                                    <?php
                                    if ($image) { ?>
                                            <img src="<?php echo esc_url( $image ); ?>">
                                        <?php
                                    } else { ?>
                                        <?php
                                        echo $icon;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="text-box">
                                <a href="<?php echo esc_url( $link ); ?>"><?php echo $step; ?><i class="ren-arrowright"></i></a>
                                <h3><?php echo $title; ?></h3>
                            </div>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- invest section end -->

<!-- advantage section begin -->

<section class="advantage-section">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="advantage-text">
                        <h5 class="advantage-title"><?php echo get_field('before_heading_5'); ?></h5>
                        <h2 class="advantage-subtitle"><?php echo get_field('heading_5'); ?></h2>
                    </div>
                </div>
            </div>
            <?php if( have_rows('steps_5') ): $i=0; ?>
            <div class="row">
                <?php 
                while( have_rows('steps_5') ): the_row(); 
                    $image = get_sub_field('image');
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title'); ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                        <div class="single-box">
                            <div class="icon-box">
                                <?php
                                if ($image) { ?>
                                        <img src="<?php echo esc_url( $image ); ?>">
                                    <?php
                                } else { ?>
                                    <?php
                                    echo $icon;
                                }
                                ?>
                            </div>
                            <div class="text-box">
                                <h2><?php echo $title; ?></h2>
                            </div>
                        </div>
                    </div>
                <?php $i++; endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- advantage section end -->

<!-- investment section end -->

<!-- affiliate section begin -->
<section class="affiliate-section" id="affiliate-section">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="affiliate-text">
                        <h5 class="affiliate-title"><?php echo get_field('before_heading_6'); ?></h5>
                        <h2 class="affiliate-subtitle"><?php echo get_field('heading_6'); ?></h2>
                        <p class="affiliate-title-describe"><?php echo get_field('description_6'); ?></p>
                    </div>
                </div>
            </div>
            <?php
            $start_button_6 = get_field('start_button_6'); 
            if ($start_button_6) { ?>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="part-cart">
                            <a href="<?php echo $start_button_6['link']; ?>"><?php echo $start_button_6['text']; ?></a>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
            
        </div>
    </div>
</section>
<!-- affiliate section end -->

<!-- referral section begin -->
<section class="referral-section">
    <div class="container">
        <div class="row referral-section-item">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="referral-img">
                    <img src="<?php echo SKYR_ASSETS_DIR_URI; ?>/img/referral-img.png" alt="#">
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="referral-section-right">
                    <div class="referral-text">
                        <h5 class="referral-title"><?php echo get_field('before_heading_ref'); ?></h5>
                        <h2 class="referral-subtitle"><?php echo get_field('heading_ref'); ?></h2>
                        <p class="referral-title-describe"><?php echo get_field('after_heading_ref'); ?></p>
                    </div>
                    <?php if( have_rows('icons_6') ): $i=0; ?>
                    <div class="row">
                        <div class="col-lg-11 col-sm-12">
                            <div class="row">
                                <?php 
                                while( have_rows('icons_6') ): the_row(); 
                                    $image = get_sub_field('image');
                                    $icon = get_sub_field('icon');
                                    $procent = get_sub_field('procent');
                                    $title = get_sub_field('title'); ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="referral-single-item">
                                            <div class="icon-box">
                                                <?php
                                                if ($image) { ?>
                                                        <img src="<?php echo esc_url( $image ); ?>">
                                                    <?php
                                                } else { ?>
                                                    <?php
                                                    echo $icon;
                                                }
                                                ?>
                                            </div>
                                            <div class="text-box">
                                                <span class="percentage"><?php echo $procent; ?></span>
                                                <h4 class="item-text"><?php echo $title; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php $i++; endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- referral section end -->



<!-- testimonial section begin -->
<section class="testimonial-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="testimonial-text text-center">
                    <h5 class="testimonial-title"><?php echo get_field('before_heading_7'); ?></h5>
                    <h2 class="testimonial-subtitle"><?php echo get_field('heading_7'); ?></h2>
                    <p class="testimonial-title-describe"><?php echo get_field('description_7'); ?></p>
                </div>
            </div>
        </div>
        <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'testimonials'
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) { ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">


                    <div class="testimonial-carousel">
                        <?php
                        while ( $query->have_posts() ) {
                            $query->the_post(); ?>
                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <p class="client-describe"><?php the_content(); ?></p>
                                    <h2 class="client-name"><?php the_title(); ?></h2>
                                    <h4 class="client-date"><?php echo get_field('subtitle'); ?></h4>
                                </div>
                                <div class="carousel-img">
                                    <div class="img-outline">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <?php
        } ?>
    </div>
</section>
<!-- testimonial section end -->

<!-- questions section begin -->
<div class="questions-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="questions-text">
                    <h5 class="questions-title"><?php echo get_field('before_heading_8'); ?></h5>
                    <h2 class="questions-subtitle"><?php echo get_field('heading_8'); ?></h2>
                 </div>
            </div>
        </div>
        <?php if( have_rows('feedbacks') ): $i=1; ?>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="tab-content questions-tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active questions-tab-pane" id="pills-basic" role="tabpanel" aria-labelledby="questions-pills-basic-tab">
                        <div class="questions-accordion" id="withdrawal-accordion">
                            <?php 
                            while( have_rows('feedbacks') ): the_row(); 
                                $question = get_sub_field('question');
                                $answer = get_sub_field('answer'); ?>
                                <div class="card questions-card">
                                    <div class="card-header questions-card-header" id="withdrawal-heading<?php echo $i; ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link questions-btn-link <?php echo $i == 1 ? '' : 'collapsed'; ?>" data-toggle="collapse" data-target="#withdrawal-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="questions-pills-basic-tab">
                                                <?php echo $question;  ?>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="withdrawal-collapse<?php echo $i; ?>" class="collapse questions-show <?php echo $i == 1 ? 'show' : ''; ?>" aria-labelledby="withdrawal-heading<?php echo $i; ?>" data-parent="#withdrawal-accordion">
                                        <div class="card-body questions-card-body">
                                            <?php echo $answer; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++; endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- questions section end -->

<!-- signup section begin -->
<section class="signup-section">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="signup-text">
                        <h5 class="signup-title"><?php echo get_field('before_heading_9'); ?></h5>
                        <h2 class="signup-subtitle"><?php echo get_field('heading_9'); ?></h2>
                        <p class="signup-title-describe"><?php echo get_field('description_9'); ?></p>
                    </div>
                </div>
                <?php
                $start_button_9 = get_field('start_button_9'); 
                if ($start_button_9) { ?>
                    <div class="col-lg-6 col-md-4 d-flex justify-content-end align-items-center reunir-content-center">
                        <div class="signup-right-text">
                            <a href="<?php echo $start_button_9['link']; ?>"><?php echo $start_button_9['text']; ?><i class="ren-arrowright"></i></a>
                        </div>
                    </div>
                    <?php
                } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup section end -->

<!-- contact-us section begin -->
<section class="contact-us-section" id="contact-us-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="contact-us-text">
                    <h5 class="contact-us-title"><?php echo get_field('before_heading_10'); ?></h5>
                    <h2 class="contact-us-subtitle"><?php echo get_field('heading_10'); ?></h2>
                    <p class="contact-us-title-describe"><?php echo get_field('description_10'); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-img">
                    <img src="<?php echo get_field('background_10'); ?>" alt="<?php echo get_field('heading_10'); ?>">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                     <?php echo do_shortcode('[contact-form-7 id="228" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-us section end -->


		
<?php get_footer(); ?>