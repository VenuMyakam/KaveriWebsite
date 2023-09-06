<?php get_header(); ?>

<section class="hero hero-overla d-flex align-items-md-end align-items-center text-md-start text-center" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/img-hero-banner.jpg) center center no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="hero-content">
                    <h1 class="hero-title text-white mb-5">The Legacy of Shaping the New!</h1>
                    <a href="" class="btn btn-primary btn-wide btn-brand-blue" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-video-thumb" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/img-acadamics-03.jpg') center center no-repeat; background-size: cover;">
        <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal" class="hero-video-play"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" alt=""></a>
    </div>
</section>

<?php if (have_rows('about_section')) : ?>

    <section class="info bg-brand-blue-light info-about-bg " style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/img-hero-about-banner.png);">
        <div class="container">
            <?php while (have_rows('about_section')) :
                the_row();
                // Get sub field values.
                $about_title_small = get_sub_field('about_title_small');
                $about_title = get_sub_field('about_title');
                $link = get_sub_field('about_banner');
                $about_content = get_sub_field('about_content');
            ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="info-heading">
                            <span class="text-brand-blue-light">
                                <?php echo $about_title_small; ?>
                            </span>
                            <h2 class="info-title text-dark">
                                <?php echo $about_title; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="info-content text-justify">
                            <div class="info-content-wrap">
                                <?php echo $about_content; ?>
                            </div>
                            <div class="text-end">
                                <a href="http://localhost/kaveri/know-us-better/" class="btn btn-primary btn-wide btn-brand-blue">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

<?php endif; ?>

<section class="info bg-white">
    <div class="container">
        <div class="row g-0 align-items-md-end align-items-start">
            <div class="col-md-4">
                <div class="info-message-item-img">
                    <img class="img-fluid info-data-img" src="" alt="">
                    <div class="info-message-arrows"></div>
                </div>
            </div>
            <div class="col-md-8 order-md-first">
                <div class="info-slider info-message-slider">
                    <?php $arguments = [
                        'post_type' => 'chancellors_msg',
                        'posts_per_page' => 4,
                        'order' => 'ASC',
                    ];
                    // $admission = get_posts($arguments);
                    $admission = new WP_Query($arguments);
                    // echo '<pre>';
                    // var_dump($admission);
                    // echo '</pre>';
                    // $count = 1;
                    if ($admission->have_posts()) :
                        while ($admission->have_posts()) :
                            $admission->the_post();
                            if (have_rows('chancellors_msg')) :
                                while (have_rows('chancellors_msg')) :
                                    the_row();
                                    $message_title = get_sub_field('message_title');
                                    $chancellor_name = get_sub_field('chancellor_name');
                                    $chancellor_designation = get_sub_field('chancellor_designation');
                                    $chancellor_message = get_sub_field('chancellor_message');
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>
                                    <div class="info-message-item bg-brand-blue p-4" data-img="<?php echo $featured_img_url; ?>">
                                        <h2 class="info-message-title mb-4"><?php echo $message_title; ?></h2>
                                        <div class="info-message text-justify">
                                            <?php echo the_excerpt(); ?>
                                        </div>
                                        <div class="text-start my-4">
                                            <a href="#" class="btn btn-sm btn-brand-red btn-wide btn-brand-blue">Read More</a>
                                        </div>
                                        <p class="h5 mb-1">
                                            <?php echo $chancellor_name; ?>
                                        </p>
                                        <p class="small">
                                            <?php echo $chancellor_designation; ?>
                                        </p>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info info-full pt-0 info-bg info-overlay info-overlay-light" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/img-info-banner.webp) top center no-repeat;  background-size: cover;">
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-auto">
                <div class="info-ribbon-wrap">
                    <div class="info-ribbon">
                        <div class="info-ribbon-content">
                            <h3 class="info-title text-white fw-bold text-uppercase">Vision</h3>
                            <p>Develop the next generation global leaders in science and technology through the novel confluence model of quality education, high-impact research and innovation for community wellbeing.</p>
                        </div>
                    </div>
                    <div class="info-ribbon-bottom"></div>
                </div>
            </div>
            <div class="col-auto">
                <div class="info-ribbon-wrap info-ribbon-brand-red">
                    <div class="info-ribbon">
                        <div class="info-ribbon-content">
                            <h3 class="info-title text-white fw-bold text-uppercase">Mission</h3>
                            <p>Preparing new-gen students to be globally relevant and responsible leaders.</p>
                            <p>Ensuring diversity and inclusivity in learning and opportunity.</p>
                            <p>Providing relevant curricula to foster students’ knowledge, skills, and dispositions for thoughtful and engaged citizenship.</p>
                            <p>Promoting impactful research for generating new knowledge and technologies to meet stakeholder needs.</p>
                            <p>Applying lifelong learning concept and catalyze building holistic, equitable societies and sustainable ecosystems.</p>
                        </div>
                    </div>
                    <div class="info-ribbon-bottom"></div>
                </div>
            </div>
            <div class="col-auto">
                <div class="info-ribbon-wrap">
                    <div class="info-ribbon">
                        <div class="info-ribbon-content">
                            <h3 class="info-title text-white fw-bold text-uppercase">Values</h3>
                            <p>Excellence, Innovation, Partnerships, Equity, Integrity and Environmental Sustainability</p>
                        </div>
                    </div>
                    <div class="info-ribbon-bottom"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (have_rows('academics_section')) :
    while (have_rows('academics_section')) :
        the_row();
        // Get sub field values.
        $academics_title = get_sub_field('academics_title');
        $academics_banner = get_sub_field('academics_banner');
        $academics_content = get_sub_field('academics_content');
?>
        <section class="info info-bg info-overlay" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/img-hero-academics-banner.jpg) top center no-repeat;  background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md">
                        <div class="info-content">
                            <h2 class="info-title text-white mb-0">
                                <?php echo $academics_title; ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="info bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-auto">
                        <div class="ribbon">
                            <ul class="ribbon-nav nav flex-md-column flex-row nav-pills" id="pills-tab" role="tablist">
                                <?php
                                // Get list of all taxonomy terms  -- In simple categories title
                                $args = array(
                                    'taxonomy' => 'academics_categories',
                                    'orderby' => 'name',
                                    'hide_empty' => FALSE,
                                    'order' => 'ASC'
                                );
                                $cats = get_categories($args);
                                // print_r($cats);
                                ?>
                                <?php $counter = 1;
                                foreach ($cats as $cat) {
                                    $taxonomy = $cat->taxonomy;
                                    $term_id = $cat->term_id;
                                    $slug = $taxonomy . '_' . $term_id;
                                    $img = get_field('category_img', $slug);
                                ?>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link  <?php if ($counter == 1) : echo 'active'; endif; echo '';?>" data-filter="<?php echo $cat->slug ?>" id="pills-<?php echo $cat->slug ?>-tab" data-bs-toggle="pill"   data-bs-target="#pills-<?php echo $cat->slug ?>" type="button" role="tab" href="#" aria-controls="pills-<?php echo $cat->slug ?>" aria-selected="<?php if ($counter == 1) : echo 'true';  echo'false'; endif; ?>">
                                            <?php if (sizeof($img)) { ?>
                                                <img class="nav-link-icon img-fluid" src="<?php echo $img['url'] ?>" alt="">
                                            <?php } ?>
                                            <?php echo $cat->name ?>
                                        </a>
                                    </li>
                                <?php $counter++;
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="tab-content" id="pills-tabContent">
                            <!-- kaveri-advantage -->
                            <div class="tab-pane fade show active" id="pills-kaveri-advantage" role="tabpanel" aria-labelledby="pills-kaveri-advantage-tab">
                                <div class="info-content mb-md-4 mb-3">
                                    <h3 class="info-tab-title h4 fw-bold text-brand-blue text-uppercase header-line">The Kaveri Advantage</h3>
                                </div>
                                <div class="row info-slider info-slider-row info-advantage-slider info-three-slider">

                                    <?php $arguments = [
                                        'post_type' => 'academics',
                                        'posts_per_page' => -1,
                                        'order' => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'academics_categories', // Taxonomy, in my case I need default post categories
                                                'field'    => 'slug',
                                                'terms'    => 'kaveri-advantage', // Your category slug (I have a category 'interior')
                                            )
                                        )
                                    ];
                                    // $admission = get_posts($arguments);
                                    $admission = new WP_Query($arguments);
                                    // echo '<pre>';
                                    // var_dump($admission);
                                    // echo '</pre>';
                                    // $count = 1;
                                    if ($admission->have_posts()) :
                                        while ($admission->have_posts()) :
                                            $admission->the_post();
                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                            get_template_part('template-parts/kaveri-advantage-card');
                                        endwhile;
                                        wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- culture -->
                            <div class="tab-pane fade" id="pills-art-culture" role="tabpanel" aria-labelledby="pills-art-culture-tab">
                                <div class="info-content mb-md-4 mb-3">
                                    <h3 class="info-tab-title h4 fw-bold text-brand-blue text-uppercase header-line">Art Culture</h3>
                                </div>
                                <div class="row info-slider info-slider-row info-culture-slider info-three-slider">

                                    <?php $arguments = [
                                        'post_type' => 'academics',
                                        'posts_per_page' => -1,
                                        'order' => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'academics_categories', // Taxonomy, in my case I need default post categories
                                                'field'    => 'slug',
                                                'terms'    => 'art-culture', // Your category slug (I have a category 'interior')
                                            )
                                        )
                                    ];

                                    // $admission = get_posts($arguments);
                                    $admission = new WP_Query($arguments);
                                    // echo '<pre>';
                                    // var_dump($admission);
                                    // echo '</pre>';
                                    // $count = 1;
                                    if ($admission->have_posts()) :
                                        while ($admission->have_posts()) :
                                            $admission->the_post();
                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                            get_template_part('template-parts/acadamics-card');
                                        endwhile;
                                        wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- programmes -->
                            <div class="tab-pane fade" id="pills-programmes" role="tabpanel" aria-labelledby="pills-programmes-tab">
                                <div class="info-content mb-md-4 mb-3">
                                <h3 class="info-tab-title h4 fw-bold text-brand-blue text-uppercase header-line mb-3">Programmes</h3>
                                    <?php echo $academics_content; ?>
                                </div>
                                <div class="row info-slider info-slider-row info-academics-slider info-three-slider">

                                    <?php $arguments = [
                                        'post_type' => 'academics',
                                        'posts_per_page' => -1,
                                        'order' => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'academics_categories', // Taxonomy, in my case I need default post categories
                                                'field'    => 'slug',
                                                'terms'    => 'programmes', // Your category slug (I have a category 'interior')
                                            )
                                        )
                                    ];
                                    // $admission = get_posts($arguments);
                                    $admission = new WP_Query($arguments);
                                    // echo '<pre>';
                                    // var_dump($admission);
                                    // echo '</pre>';
                                    // $count = 1;
                                    if ($admission->have_posts()) :
                                        while ($admission->have_posts()) :
                                            $admission->the_post();
                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                            get_template_part('template-parts/acadamics-card');
                                        endwhile;
                                        wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    endwhile;
endif;
?>
<?php if (have_rows('admission_section')) : ?>
    <section class="info" style="background: #fff url(<?php echo get_template_directory_uri(); ?>/assets/img/img-hero-admissions-banner.jpg) bottom center no-repeat; background-size: cover; background-attachment:scroll">
        <div class="container">
            <!-- <div class="row justify-content-end">
                <div class="col-md-11"> -->
            <?php
            while (have_rows('admission_section')) :
                the_row();
                // Get sub field values.
                $admission_title = get_sub_field('admission_title');
                $link = get_sub_field('admission_banner');
                $admission_content = get_sub_field('admission_content');
                $admission_page = get_sub_field('admission_page_link');
            ?>
                <h2 class="info-title info-title-strip text-brand-blue"><?php echo $admission_title; ?></h2>
                <div class="info-content">
                    <?php echo $admission_content; ?>
                </div>
                <div class="info-content mt-4">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php $arguments = [
                            'post_type' => 'admission',
                            'posts_per_page' => -1,
                            'order' => 'ASC',
                        ];
                        $admission = get_posts($arguments);
                        // echo '<pre>';
                        // var_dump($admission);
                        // echo '</pre>';
                        $count = 1;
                        foreach ($admission as $post) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading<?php echo $post->ID ?>">
                                    <button class="accordion-button <?php if ($count > 1) {
                                                                        echo 'collapsed';
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $post->ID ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $post->ID ?>">
                                        <?php echo $post->post_title ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?php echo $post->ID ?>" class="accordion-collapse collapse <?php if ($count <= 1) {
                                                                                                                        echo 'show';
                                                                                                                    } ?>" aria-labelledby="flush-heading<?php echo $post->ID ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php echo $post->post_content; ?>
                                    </div>
                                </div>
                            </div>
                        <?php $count++;
                        } ?>
                    </div>
                    <div class="text-start mt-5 d-grid gap-3 d-md-block">
                        <a href="<?php echo $admission_page; ?>" class="btn btn-primary btn-wide btn-brand-blue col-md-3">Read More</a>
                        <a href="<?php echo $admission_page; ?>" class="btn col-md-3 btn-primary btn-wide btn-brand-blue">Download Brochure</a>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- </div>
            </div> -->
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>