<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicons -->
    <link rel="favicon" href="<?= get_template_directory_uri() . '/favicon.ico'; ?>">
    <link rel="icon" href="<?= get_template_directory_uri() . '/favicon.ico'; ?>">
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri() . '/apple-touch-icon.png'; ?>">

    <?php wp_head(); ?>
</head>

<body>
    <div id="main-bg-container"></div>
    <div class="container-fluid g-0">

        <!-- Aside -->
        <aside>

            <div class="row g-0 mt-3">
                <button class="btn" type="button" id="close-btn"><i class="material-icons">close</i></button>
                <button class="btn" type="button" id="open-btn" hidden><i class="material-icons">menu</i></button>
                <div class="col-12 g-0 d-flex flex-column align-items-center">
                    <div id="svg-wrapper" class="svg-wrapper mt-5">
                        <svg width="102.28" height="102.28" viewBox="0 0 102.28 102.28">
                            <path id="logo-wp-white" data-name="Icon awesome-wordpress-simple"
                                d="M51.7.563a51.14,51.14,0,1,0,51.14,51.14A51.2,51.2,0,0,0,51.7.563ZM5.718,51.7A45.663,45.663,0,0,1,9.7,33L31.638,93.088A46.019,46.019,0,0,1,5.718,51.7ZM51.7,97.687A45.8,45.8,0,0,1,38.711,95.81l13.8-40.087L66.632,94.449a6.214,6.214,0,0,0,.33.639A46.035,46.035,0,0,1,51.7,97.687Zm6.331-67.533c2.763-.144,5.258-.433,5.258-.433A1.9,1.9,0,0,0,63,25.926s-7.444.577-12.249.577c-4.516,0-12.1-.577-12.1-.577-2.475-.144-2.763,3.65-.289,3.794,0,0,2.351.289,4.825.433l7.155,19.631L40.278,79.953l-16.744-49.8c2.763-.144,5.258-.433,5.258-.433a1.9,1.9,0,0,0-.289-3.794s-7.444.577-12.249.577c-.866,0-1.877-.021-2.969-.062a45.984,45.984,0,0,1,69.472-8.661,5.826,5.826,0,0,0-.6-.041c-4.516,0-7.712,3.939-7.712,8.166,0,3.794,2.186,6.99,4.516,10.785a24.132,24.132,0,0,1,3.794,12.682c0,3.939-1.505,8.5-3.506,14.868L74.674,79.561,58.033,30.153ZM74.818,91.439l14.043-40.6A43.494,43.494,0,0,0,92.367,34.36a33.843,33.843,0,0,0-.309-4.722,45.987,45.987,0,0,1-17.239,61.8Z"
                                transform="translate(-0.563 -0.563)" fill="#ebebeb" />
                        </svg>
                    </div>

                    <div class="logo-wrapper text-light-gray">
                        <!-- Title -->
                        <h1 class="text-center pt-3 mb-0"><?= bloginfo('name'); ?></h1>
                        <p id="slogan" class="text-center fw-light"><?= bloginfo('description'); ?></p>
                        <hr class="my-4">
                    </div>
                    <div id="helper-link-wrapper">
                        <a id="link1" target="_blank" href="https://codex.wordpress.org/fr:Accueil"
                            class="d-block btn btn-primary text-center my-4 fw-bold">Documentation WP</a>
                        <a id="link2" target="_blank"
                            href="https://paris.wordcamp.org/2018/session/developper-son-premier-theme-wordpress-a-partir-dune-maquette-html-css/"
                            class="d-block btn btn-outline-secondary text-center my-4">Créer un thème</a>
                        <a id="link3" target="_blank" href="https://grafikart.fr/formations/creer-theme-wordpress"
                            class="d-block btn btn-outline-secondary text-center my-4">Grafikart vous montre</a>
                        <a id="link4" target="_blank" href="https://grafikart.fr/formations/wordpress-avance"
                            class="d-block btn btn-outline-secondary text-center my-4">Formation avancée</a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Nav -->
        <header class="overflow-hidden" id="main-header">
            <div class="container">
                <!-- on MD screens -->
                <div class="row d-none d-md-flex my-3 px-3">
                    <div class="col-12 d-flex justify-content-end">
                        <nav class="d-inline-flex">
                            <?php wp_nav_menu([
                                'theme_location' => 'header',
                                'container' => false,
                                'menu_class' => 'nav'
                            ]);
                            ?>
                            <button type="button" class="btn btn-outline-primary d-inline-flex align-items-center ms-3" title="Engager" data-bs-toggle="modal" data-bs-target="#engageModal"><i class="material-icons pe-1">work</i>Engager</button>
                        </nav>

                    </div>
                </div>
            </div>


        </header>

    </div>