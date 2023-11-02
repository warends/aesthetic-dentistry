<?php
    get_header();
?>


<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><?php the_title()?></h1>
                <?php
                    the_content();
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>