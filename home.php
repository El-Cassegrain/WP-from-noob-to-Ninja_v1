<?php get_header(); ?>

<main>

    <div class="container mb-5 pb-3 mb-sm-0 pb-sm-0" id="page-blog">

        <div class="row flex-column align-items-center mt-5 mt-md-3 mt-xl-4 pt-3">

            <div class="col-12 col-md-10 col-lg-8 hero-section px-4 px-md-2">
                <h1 class="text-uppercase h5 d-inline-flex align-items-center"><i
                        class="material-icons pe-1">article</i>Blog</h1>
                <h2 class="display-2 fw-bold pb-2">Des articles sur le monde du web</h2>
                <hr>
            </div>

            <div class="col-12 px-4 px-md-2 col-md-10 col-lg-8 col-xl-7 col-xxl-6 px-xl-3 pe-xl-0 ms-xl-1 ms-xxl-0">
                <div class="hero-text px-xl-4 pe-xl-0 my-4 ms-xl-1 pe-md-0 me-md-4">
                    <p class="lead">Au fil de mon apprentissage des métiers du web, je compose des articles que vous
                        pouvez retrouver ici.</p>
                </div>
            </div>


            <!-- Content -->
            <div
                class="col-12 ps-4 px-md-2 col-md-10 col-lg-8 col-xl-6 col-xxl-5 px-xl-1 ms-xl-1 ms-xxl-0 ps-xxl-0 mb-md-4">
                <h3 class="h5 fw-bold">Catégories :</h3>
                <?php   $categories = get_categories();
                        $output = '';
                        if($categories) {
                            $output = "<nav class='ps-0 d-flex category-list'>";
                            foreach($categories as $category) {
                                $output .= '<a href="'.get_category_link( $category->term_id ).'" class="badge rounded-pill bg-info mt-1 me-1" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>';
                            }
                            $output .= "</nav>";
                        }
                        echo $output;
                    ?>
            </div>

            <div
                class="mt-4 mt-md-2 article-link col-12 px-4 px-md-2 col-md-10 col-lg-8 col-xl-6 col-xxl-5 px-xl-1 ms-xl-1 ms-xxl-0 ps-xxl-0 mb-md-4">
                <h3 class="h5 fw-bold">Les trois derniers articles :</h3>
                <ul>
                    <?php
                    $args = ['numberposts' => 3,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC'
                    ];

                    $posts = get_posts($args);

                    foreach($posts as $post){ ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php } ?>
                </ul>
                </div>
            </div>

        </div>
    </main>

<?php get_footer(); ?>