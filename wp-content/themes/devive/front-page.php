<?php get_header(); ?>
<main id="front-page">
    <section class="banner bg-yellow">
        <div class="d-flex align-items-center justify-content-between">
            <div class="content-wrapper">
                <h1 class="color-dark-blue mb-5"><?php the_field('titulo'); ?></h1>
                <a class="btn bg-blue" href="<?php the_field('link') ?>"><?php the_field('label') ?></a>
            </div>
            <div class="d-flex justify-content-end">
                <?php $banner = get_field('imagem'); ?>
                <?php echo wp_get_attachment_image($banner['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="dcnt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="color-dark-blue mb-5"><?php the_field('titulo_dcnt'); ?></h1>
                    <p><?php the_field('descricao_dcnt'); ?></p>
                    <a class="btn bg-blue" href="<?php the_field('link') ?>"><?php the_field('label') ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>