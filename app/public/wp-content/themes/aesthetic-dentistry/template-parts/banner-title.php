<?php 
    $blog_info = get_bloginfo('name');
    $description = get_bloginfo('description', 'display');
?>

<section class="title-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    if (is_page()) {
                        the_title('<h1 class="page-title>', '</h1>');
                    } else if (is_home()) {
                        if ($description) {
                            ?>
                                <p class="description" <?php echo esc_html($description)?>></p>
                        <?php
                        }
                        ?>
                    <?php
                    } else if (is_404()) {
                        ?>
                            <p>404 Error</p>
                            <h1><?php esc_html_e('Couldn\'t Be Found', 'aesthetic-dentistry') ?></h1>
                        <?php
                    }
                ?>
                <h1></h1>
            </div>
        </div>
    </div>
</section>