<!-- From MD -->
<footer id="md-footer" class="d-none d-md-block">
        <small>Created with ❤️</small>
    </footer>

    <!-- Until MD -->
    <footer id="tab-nav" class="fixed-bottom d-md-none sidenav-opened">
        <nav>
            <a href="index.html" title="Accueil" class="active"><i class="material-icons">home</i></a>
            <a href="blog.html" title="Blog"><i class="material-icons">article</i></a>
            <a href="portfolio.html" title="Portolio"><i class="material-icons">brush</i></a>
            <a href="contact.html" title="Contact"><i class="material-icons">mail</i></a>
            <a title="Engager" type="button" data-bs-toggle="modal" data-bs-target="#engageModal"><i class="material-icons">work</i></a>
        </nav>
    </footer>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="engageModal" tabindex="-1" aria-labelledby="engageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title d-inline-flex align-items-center" id="engageModalLabel">Travaillons ensemble</h5>
            <button type="button" class="btn close-btn d-flex justify-content-center align-items-center" data-bs-dismiss="modal" aria-label="Close"><i class="material-icons">close</i></button>
            <div class="text-center pt-1"><small>Vous ne serez pas déçus</small></div>
        </div>
        <div class="modal-body px-5 pb-0">
            <?php echo do_shortcode('[contact-form-7 id="23" title="Engage"]'); ?>
        </div>
        <div class="modal-footer pt-0">
            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Fermer</button>
        </div>
        </div>
    </div>
    </div>

    
    <?php wp_footer(); ?>
</body>

</html>