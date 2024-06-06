<?php
// Template Name: Nosso Impacto
get_header(); ?>
<main id="nosso-impacto">
    <section class="section-img-left">
        <h1 class="color-dark-blue mb-5"><?php the_field('titulo_weimpact'); ?></h1>
        <div class="d-flex justify-content-between">
            <div class="image-wrapper col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_secao_1'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_secao_1'); ?></h2>
                <p><?php the_field('descricao_secao_1'); ?></p>
            </div>
        </div>
    </section>
    <section class="section-img-right bg-blue">
        <div class="d-flex justify-content-between">
            <div class="col-lg-6 align-content-center">
                <h2 class="color-dark-blue mb-5 "><?php the_field('titulo_secao_2'); ?></h2>
                <p><?php the_field('descricao_secao_2'); ?></p>
            </div>
            <div class="col-lg-6 p-5 image-wrapper">
                <?php $imagemSecao1 = get_field('imagem_secao_2'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="section-img-left bg-yellow">
        <div class="d-flex justify-content-between">
            <div class="image-wrapper col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_secao_3'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_secao_3'); ?></h2>
                <p><?php the_field('descricao_secao_3'); ?></p>
            </div>
        </div>
    </section>
    <section class="transparency-and-eficience">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue mb-5"><?php the_field('titulo_secao_4'); ?></h2>
        </div>
        <div class="container">
            <div class="cards">
                <?php
                $itens = get_field('cards_secao_4');
                foreach ($itens as $item) :
                ?>
                    <div class="bg-blue cards-wrapper d-flex flex-column align-items-center p-5">
                        <div class="icon mb-5">
                            <?php $icon = $item['icone']; ?>
                            <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                        </div>
                        <p class="color-dark-blue m-0"><?php echo $item['descricao'] ?></p>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>