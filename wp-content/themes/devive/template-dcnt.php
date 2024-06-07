<?php
// Template Name: DCNT
get_header(); ?>
<main id="dcnt">
    <?php $banner = get_field('banner') ?>
    <section class="banner d-flex align-items-center justify-content-center" style="background-image: url('<?php echo wp_get_attachment_image_url($banner['id'], 'full') ?>')">
        <h1><?php the_field('titulo_banner'); ?></h1>
    </section>
    <section class="section">
        <div class="d-flex justify-content-between">
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('title_section_2'); ?></h2>
                <p class="color-dark-blue"><?php the_field('description_section_2'); ?></p>
            </div>
            <div class="image-wrapper col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_section_2'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="section bg-blue">
        <div class="d-flex justify-content-between">
            <div class="image-wrapper col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_section_3'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('title_section_3'); ?></h2>
                <p class="color-dark-blue"><?php the_field('descricao_section_3'); ?></p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>