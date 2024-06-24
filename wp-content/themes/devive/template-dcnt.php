<?php
// Template Name: DCNT
get_header(); ?>
<main id="dcnt">
    <?php $banner = get_field('imagem') ?>
    <section class="banner d-flex align-items-center justify-content-center" style="background-image: url('<?php echo wp_get_attachment_image_url($banner['id'], 'full') ?>')">
        <h1><?php the_field('titulo_banner'); ?></h1>
    </section>
    <section class="section oquee">
        <div class="d-lg-flex justify-content-between">
            <div class="col-lg-6 p-lg-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('title_section_2'); ?></h2>
                <p class="color-dark-blue"><?php the_field('description_section_2'); ?></p>
            </div>
            <div class="image-wrapper my-5 my-lg-0 col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_section_2'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('texto_centralizado_section_2'); ?></h2>
        </div>
    </section>
    <section class="box">
        <div class="container bg-dark-blue box-wrapper w-75">
            <div class="d-lg-flex justify-content-around box-container">
                <?php
                $itens = get_field('box_items');
                foreach ($itens as $item) :
                ?>
                    <div class="row justify-content-center my-5 my-lg-0">
                        <h2 class="mb-4"><?php echo $item['numero'] ?></h2>
                        <p><?php echo $item['descricao'] ?></p>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>
    <section class="section bg-blue causas">
        <div class="d-lg-flex justify-content-between">
            <div class="col-lg-6 p-lg-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('title_section_3'); ?></h2>
                <p class="color-dark-blue"><?php the_field('descricao_section_3'); ?></p>
            </div>
            <div class="img-wrapper my-5 my-lg-0 col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_section_3'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="section bg-yellow desafios d-flex flex-column gap-lg-5">
        <div class="d-lg-flex flex-row-reverse gap-4">
            <div class="col-lg-6 px-lg-2 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_section_4'); ?></h2>
                <p class="color-dark-blue"><?php the_field('texto_direita_section_4'); ?></p>
            </div>
            <div class="image-wrapper col-lg-6 my-5 my-lg-0">
                <?php $imagemSecao1 = get_field('imagem_esquerda_section_4'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
        <div class="d-lg-flex justify-content-between gap-4">
            <div class="col-lg-6 px-2 align-content-center">
                <p class="color-dark-blue"><?php the_field('texto_esquerda_section_4'); ?></p>
            </div>
            <div class="col-lg-6 p-5 imagem-esquerda-container">
                <?php $imagemSecao1 = get_field('imagem_direita_section_4'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="section fatores-de-risco">
        <div class="fatores-risco-title-container d-lg-flex justify-content-center">
            <div class="col-lg-6 p-lg-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_1_secao_5'); ?></h2>
            </div>
        </div>
        <div class="cards d-flex flex-wrap flex-wrap-lg-reverse justify-content-center">
            <?php
            $itens = get_field('cards_section_5');
            $count1 = 0;
            foreach ($itens as $item) :
            ?>
                <div class="cards-wrapper bg-blue d-flex justify-content-center align-items-center p-5 card-<?php echo $count1; ?>">
                    <p class="color-dark-blue m-0"><?php echo $item['descricao'] ?></p>
                </div>
            <?php
                $count1++;
            endforeach;
            ?>
        </div>
        <div class="fatores-risco-title-container pt-5 d-flex justify-content-center">
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_2_secao_5'); ?></h2>
            </div>
        </div>
        <div class="cards2">
            <?php
            $itens = get_field('cards_2_secao_5');
            $count = 0;
            foreach ($itens as $item) :
            ?>
                <div class="cards-wrapper bg-dark-blue d-flex flex-column align-items-center py-5 card-<?php echo $count; ?>">
                    <p class="color-white m-0"><?php echo $item['descricao'] ?></p>
                </div>
            <?php
                $count++;
            endforeach;
            ?>
        </div>
        <div class="fatores-risco-title-container pt-5 d-flex justify-content-center">
            <div class="col-lg-6 align-content-center mt-5">
                <h2 class="color-dark-blue"><?php the_field('titulo_3_secao_5'); ?></h2>
            </div>
        </div>
        <div class="cards eobrasil-container d-flex flex-wrap-reverse justify-content-center">
            <?php
            $itens = get_field('cards_3_secao_5');
            foreach ($itens as $item) :
            ?>
                <div class="d-flex flex-column align-items-center p-5">
                    <h2 class="color-dark-blue mb-5"><?php echo $item['numero'] ?></h2>
                    <p class="color-dark-blue"><?php echo $item['descricao'] ?></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <div class="div-centralizada-container bg-yellow d-flex justify-content-center align-content-center p-5">
            <p class="m-lg-0"><?php the_field('texto_centralizado_secao_5'); ?></p>
        </div>
    </section>
    <section class="fonte">
        <div class="bg-blue d-flex flex-lg-row-reverse flex-column py-5 px-2">
            <div class="col-lg-6 d-flex justify-content-lg-center justify-content-end justify-content-sm-end image-wrapper">
                <?php $imagem = get_field('imagem_fonte_secao_6'); ?>
                <?php echo wp_get_attachment_image($imagem['id'], 'full') ?>
            </div>
            <div class="col-lg-6 section-6-text ps-4">
                <h2 class="color-dark-blue"><?php the_field('titulo_secao_6'); ?></h2>
                <span class="color-dark-blue"><?php the_field('descricao_fonte_secao_6'); ?></span>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>