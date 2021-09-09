<?php get_header(); ?>

<main>
    <div class="container mb-5 pb-3 mb-sm-0 pb-sm-0" id="page-category">

        <div class="row flex-column align-items-center mt-5 mt-md-3 mt-xl-4 pt-3">

            <div class="col-12 col-md-10 col-lg-8 hero-section px-4 px-md-2">
                <h1 class="text-uppercase h5 d-inline-flex align-items-center">Blog /<span class="text-info ps-2"><?php single_cat_title(); ?></span></h1>
                <h2 class="display-2 fw-bold pb-2">Ici mettre un champ ACF</h2>
                <hr>
            </div>

            <div class="col-12 px-4 px-md-2 col-md-10 col-lg-8 col-xl-7 col-xxl-6 px-xl-3 pe-xl-0 ms-xl-1 ms-xxl-0">
                <div class="hero-text px-xl-4 pe-xl-0 my-4 ms-xl-1 pe-md-0 me-md-4">
                    <?= category_description(); ?>
                </div>
            </div>


            <!-- Content -->
            <div
                class="col-12 px-4 ps-md-2 col-md-10 col-lg-8 col-xl-6 col-xxl-5 px-xl-1 ms-xl-1 ms-xxl-0 ps-xxl-0 mb-md-4">
                <div class="row">
                    <?php if(have_posts()):while(have_posts()):the_post(); ?>

                        <div class="col-12 my-2">
                            <div class="card">
                                <div class="card-header">
                                   <?php the_title(); ?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Mettre un champ ACF</h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

    </div>
</main>

<?php

get_footer();

?>