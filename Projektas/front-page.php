<?php
get_header();
?>

<?php

if (have_posts()) {

    while (have_posts()) {

        the_post();
        the_content();
    }
}

?>

<div class="hero">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="<?= get_template_directory_uri(); ?> /assets/images/Image.png" alt="">
            <div class="hero-content-one">
                <h1><span class="end">#EndViolence</span> For Every Woman</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
                <button class="donate-btn">Donate Now</button>
            </div>
        </div>
        <div class="item">
            <img src="<?= get_template_directory_uri(); ?> /assets/images/Image.png" alt="">
            <div class="hero-content-two">
                <h1><span class="help">#HelpTheOnes</span> In Need</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
                <button class="donate-btn">Donate Now</button>
            </div>
        </div>
        <div class="item">
            <img src="<?= get_template_directory_uri(); ?> /assets/images/Image.png" alt="">
            <div class="hero-content-three">
                <h1><span class="change">#BeTheChange</span> You Want To See</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
                <button class="donate-btn">Donate Now</button>
            </div>
        </div>
    </div>
</div>

<div class="cause">
    <div class="container">
        <div class="cause-content">
            <h1>We<span class="need"> Need</span> Your Help</h1>
            <div class="border-box">
                <div class="border-bottom"></div>
            </div>
            <p>
                Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <div class="cards">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'facetwp' => true,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part('template-parts/content', 'archive');
                    }
                }

                ?>
            </div>

            <div class="cause-button">
                <button class="cause-btn">See all cause</button>
            </div>
        </div>
    </div>
</div>

<div class="urgent-cause">
    <div class="container">
        <div class="very-urgent">
            <div class="urgent-cause-content">
                <h1><span class="urgent"> Urgent</span> Cause</h1>
                <div class="border-box">
                    <div class="border-bottom"></div>
                </div>
                <h1>
                    <span class="school">#School</span> for South Kampar's Students
                </h1>
                <p>
                    Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
                    natus error sit voluptatem accusantium dolore mque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo invent.
                </p>
                <div class="don-cont">
                    <h5><span class="donate">Donated</span> 80%</h5>
                </div>
                <div class="donate-bar">
                    <div class="donate-container-second">
                        <div class="donate-eighty-perc"></div>
                    </div>
                    <h5>
                        <span class="amount">$18,500 </span> Raised of
                        <span class="amount"> $25,000 </span> Goal
                    </h5>
                </div>
            </div>
            <div class="img-btn-continer">
                <?php $image_url = 'https://picsum.photos/570/436'; ?>
                <img src="<?= $image_url; ?>" />
                <button class="donate-btn">Donate Now</button>
            </div>
        </div>
    </div>
</div>

<div class="section-why">
    <div class="container">
        <div class="container-section">
            <img src="<?= get_template_directory_uri(); ?> /assets/images/Image-L.png" alt="">
            <div class="section-content">
                <h1>How to <span class="help">Help</span> Us</h1>
                <div class="border-box">
                    <div class="border-bottom"></div>
                </div>
                <p>
                    Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
                    natus error sit voluptatem accusantium dolore mque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo invent.
                </p>
                <div class="how-to">
                    <div class="donation">
                        <i class="fa-solid fa-gift"></i>
                        <h5>Send Donation</h5>
                        <div class="first">
                            <h1>01</h1>
                        </div>
                        <p>
                            Teritatis et quasi architecto. Sed ut perspiciatis unde omnis
                            iste natus error sit voluptatem accusantium dolore.
                        </p>
                    </div>
                    <div class="volunteer">
                        <i class="fa-solid fa-user-tie"></i>
                        <h5>Become Volunteer</h5>
                        <div class="second">
                            <h1>02</h1>
                        </div>
                        <p>
                            Teritatis et quasi architecto. Sed ut perspiciatis unde omnis
                            iste natus error sit voluptatem accusantium dolore.
                        </p>
                    </div>
                    <div class="media">
                        <i class="fa-solid fa-bullhorn"></i>
                        <h5>Become Volunteer</h5>
                        <div class="third">
                            <h1>03</h1>
                        </div>
                        <p>
                            Teritatis et quasi architecto. Sed ut perspiciatis unde omnis
                            iste natus error sit voluptatem accusantium dolore.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="we-help">
    <div class="container">
        <div class="we-help-content">
            <h1>We Help Many <span class="peepole">People</span></h1>
            <h5>Want to Become a Volunteer</h5>
            <p>
                Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
                natus error sit voluptatem accusantium dolore mque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis
                unde omnis iste natus error sit.
            </p>
            <button class="learn-more">Learn More</button>
            <button class="join-us">Join us now</button>
        </div>
    </div>
    <div class="help-image" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/images/path21630.png')"></div>
</div>

<div class="feedback">
    <div class="container">
        <div class="feedback-content">
            <h1>Our <span class="vol"> Volunteers</span> Say</h1>
            <div class="border-box">
                <div class="border-bottom"></div>
            </div>
            <p>
                Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="owl-carousel" id="carouseltwo">
            <?php
            $args1 = array(
                'post_type' => 'testimonials',
                'posts_per_page' => 4,
                'facetwp' => true,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $query1 = new WP_Query($args1);


            if ($query1->have_posts()) : while ($query1->have_posts()) : $query1->the_post(); ?>
                    <div class="item">
                        <div class="one-person">
                            <div class="image">
                                <i class="fa-solid fa-quote-left"></i>
                                <img src="<?= get_template_directory_uri(); ?> /assets/images/circle.png" alt="">
                            </div>
                            <div class="person-content">
                                <p>
                                    <?= the_content(); ?>
                                </p>
                                <h5><?= get_the_title(); ?></h5>
                                <p>Businessman</p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
        <div class="people-feedback">
            <?php
            $args2 = array(
                'post_type' => 'testimonials',
                'posts_per_page' => 4,
                'facetwp' => true,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $query2 = new WP_Query($args2);
            if ($query2->have_posts()) : while ($query2->have_posts()) : $query2->the_post(); ?>

                    <div class="one-person">
                        <div class="image">
                            <i class="fa-solid fa-quote-left"></i>
                            <img src="<?= get_template_directory_uri(); ?> /assets/images/circle.png" alt="">
                        </div>
                        <div class="person-content">
                            <p>
                                <?= the_content(); ?>
                            </p>
                            <h5><?= get_the_title(); ?></h5>
                            <p>Businessman</p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</div>
<div class="gallery">
    <div class="container">
        <div class="gallery-all">
            <div class="gallery-content">
                <h1>Our <span>Gallery</span></h1>
                <div class="border-box">
                    <div class="border-bottom"></div>
                </div>
                <p>
                    Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <?php
            $args3 = array(
                'post_type' => 'gallery',
                'posts_per_page' => 6,
                'facetwp' => true,
                'orderby' => 'date',
                'order' => 'ASC'
            );
            $query3 = new WP_Query($args3);
            if ($query2->have_posts()) : while ($query3->have_posts()) : $query3->the_post();
                    if (has_post_thumbnail()) {
                        the_post_thumbnail(); // Display the featured image
                    } ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>


    <?php
    get_footer();
    ?>