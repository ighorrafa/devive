<?php
// Template Name: Políticas
get_header();
?>
<main id="politicas" class="d-flex align-items-center" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
    <div class="row align-items-center h-100">
        <div class="col-lg-5">
            <div class="ps-4 color-dark-blue">
                <h1 class="mb-5"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>