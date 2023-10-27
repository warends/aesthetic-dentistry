<?php
    get_header();
?>


<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>404 Not Found</h1>
                <img src="<?php esc_url(get_template_directory_uri()); ?>/assets/img/404.jpg" alt="404">
                <button class="button-box">
                    <a href="<?php echo esc_url((home_url('/')))?>" class="btn btn-primary">Back To Home</a>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>