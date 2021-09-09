<?php get_header(); ?>
<main>
        <div class="container">

            <!-- On small scrrens -->
            <div class="row d-md-none justify-content-center mt-5">
                <div class="col-12 text-center">
                    <svg width="102.28" height="102.28" viewBox="0 0 102.28 102.28">
                        <path id="logo-sm-screens"
                            d="M51.7.563a51.14,51.14,0,1,0,51.14,51.14A51.2,51.2,0,0,0,51.7.563ZM5.718,51.7A45.663,45.663,0,0,1,9.7,33L31.638,93.088A46.019,46.019,0,0,1,5.718,51.7ZM51.7,97.687A45.8,45.8,0,0,1,38.711,95.81l13.8-40.087L66.632,94.449a6.214,6.214,0,0,0,.33.639A46.035,46.035,0,0,1,51.7,97.687Zm6.331-67.533c2.763-.144,5.258-.433,5.258-.433A1.9,1.9,0,0,0,63,25.926s-7.444.577-12.249.577c-4.516,0-12.1-.577-12.1-.577-2.475-.144-2.763,3.65-.289,3.794,0,0,2.351.289,4.825.433l7.155,19.631L40.278,79.953l-16.744-49.8c2.763-.144,5.258-.433,5.258-.433a1.9,1.9,0,0,0-.289-3.794s-7.444.577-12.249.577c-.866,0-1.877-.021-2.969-.062a45.984,45.984,0,0,1,69.472-8.661,5.826,5.826,0,0,0-.6-.041c-4.516,0-7.712,3.939-7.712,8.166,0,3.794,2.186,6.99,4.516,10.785a24.132,24.132,0,0,1,3.794,12.682c0,3.939-1.505,8.5-3.506,14.868L74.674,79.561,58.033,30.153ZM74.818,91.439l14.043-40.6A43.494,43.494,0,0,0,92.367,34.36a33.843,33.843,0,0,0-.309-4.722,45.987,45.987,0,0,1-17.239,61.8Z"
                            transform="translate(-0.563 -0.563)" fill="#0a1313" />
                    </svg>
                </div>
            </div>

            <div class="row flex-column align-items-center">

                <!-- On small screens -->
                <div class="col-12 text-center d-md-none">
                    <h1 class="pt-3 mb-0 fw-bold">WordPress</h1>
                    <p class="h2">From noob to Ninja</p>
                </div>

                <!-- From MD-->
                <div class="col-10 col-lg-8 hero-section mt-5 mt-md-3 mt-xl-4 pt-3 d-none d-md-block pe-5">
                    <h3 class="text-uppercase h5">Bonjour à tous</h3>
                    <h2 class="display-2 fw-bold pb-2">Cette semaine nous voyons WordPress !</h2>
                    <hr>
                </div>

                <div class="col-12 px-3 px-md-2 col-md-10 col-lg-8 col-xl-7 col-xxl-6 px-xl-3 pe-xl-0 ms-xl-1 ms-xxl-0">
                    <div class="hero-text px-3 px-md-1 px-xl-4 pe-xl-0 my-4 ms-xl-1 pe-md-0 me-md-4">
                        <p class="lead">Ceci est la front page du thème. Si vous êtes arrivé jusqu'ici, BRAVO !</p>
                        <p><strong>Les thèmes from scratch, c'est l'éclat' !</strong></p>
                    </div>
                </div>


                <!-- CTA -->
                <div class="col-12 px-3 px-md-2 col-md-10 col-lg-8 col-xl-6 col-xxl-5 px-xl-1 ms-xl-1 ms-xxl-0 ps-xxl-0 mb-md-4">
                    <div class="cta-wrapper d-flex flex-column align-items-center flex-md-row">
                        <a href="<?= bloginfo('url') . '/portfolio'; ?>" class="btn btn-primary btn-lg mb-2 mb-md-0 me-md-4 ms-md-1 ms-xxl-0">Portfolio</a>
                        <a title="Engager" type="button" data-bs-toggle="modal" data-bs-target="#engageModal" class="btn">Engager</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php get_footer(); ?>