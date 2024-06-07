<?php
// Template Name: DCNT
get_header(); ?>
<main id="dcnt">
    <?php $banner = get_field('imagem') ?>
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
        <div class="d-flex justify-content-center">
            <h2><?php the_field('texto_centralizado_section_2'); ?></h2>
        </div>
    </section>
    <section class="box">
        <div class="container bg-dark-blue box-wrapper w-75">
            <div class="d-flex justify-content-around">
                <?php
                    $itens = get_field('box_items');
                    foreach($itens as $item):
                ?>
                <div>
                    <div class="row justify-content-center">
                        <h2 class="mb-2"><?php echo $item['numero'] ?></h2>
                        <p><?php echo $item['descricao'] ?></p>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn dark d-inline mx-auto" href="<?php the_field('link_box') ?>"><?php the_field('label_box') ?></a>
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
    <section class="section bg-yellow py-2">
        <div class="d-flex justify-content-between">
            <div class="image-wrapper col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_esquerda_section_4'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
            <div class="col-lg-6 px-2 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_section_4'); ?></h2>
                <p class="color-dark-blue"><?php the_field('texto_direita_section_4'); ?></p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="col-lg-6 px-2 align-content-center">
                <p class="color-dark-blue"><?php the_field('texto_esquerda_section_4'); ?></p>
            </div>
            <div class="col-lg-6 p-5 imagem-esquerda-container">
                <?php $imagemSecao1 = get_field('imagem_direita_section_4'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="fatores-risco-title-container d-flex justify-content-center">
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_1_secao_5'); ?></h2>
            </div>
        </div>
        <div class="cards d-flex flex-wrap-reverse justify-content-center gap-2">
            <?php
            $itens = get_field('cards_section_5');
            foreach ($itens as $item) :
            ?>
                <div class="cards-wrapper bg-blue d-flex flex-column align-items-center p-5">
                    <p class="color-dark-blue m-0"><?php echo $item['descricao'] ?></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <div class="fatores-risco-title-container d-flex justify-content-center">
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_2_secao_5'); ?></h2>
            </div>
        </div>
        <div class="cards d-flex flex-wrap-reverse justify-content-center gap-2">
            <?php
                $itens = get_field('cards_2_secao_5');
                foreach ($itens as $item) :
            ?>
                <div class="cards-wrapper bg-blue d-flex flex-column align-items-center p-5">
                    <p class="color-dark-blue m-0"><?php echo $item['descricao'] ?></p>
                </div>
            <?php
                endforeach;
            ?>
        </div>
        <div class="fatores-risco-title-container d-flex justify-content-center">
            <div class="col-lg-6 p-5 align-content-center">
                <h2 class="color-dark-blue mb-5"><?php the_field('titulo_3_secao_5'); ?></h2>
            </div>
        </div>
        <div class="cards eobrasil-container d-flex flex-wrap-reverse justify-content-center gap-2">
            <?php
                $itens = get_field('cards_3_secao_5');
                foreach ($itens as $item) :
            ?>
                <div class="cards-wrapper d-flex flex-column align-items-center p-5">
                    <h2 class="color-dark-blue mb-5"><?php echo $item['numero'] ?></h2>
                    <p class="color-dark-blue"><?php echo $item['descricao'] ?></p>
                </div>
            <?php
                endforeach;
            ?>
        </div>
        <div class="div-centralizada-container bg-yellow d-flex justify-content-center align-content-center">
            <p><?php the_field('texto_centralizado_secao_5'); ?></p>
        </div>
    </section>
    <section>
        <div class="bg-blue d-flex py-5 px-2">
            <div class="col-lg-6 section-6-text">
                <h2 class="color-dark-blue"><?php the_field('titulo_secao_6'); ?></h2>
                <span class="color-dark-blue"><?php the_field('descricao_fonte_secao_6'); ?></span>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <?php $imagem = get_field('imagem_fonte_secao_6'); ?>
                <?php echo wp_get_attachment_image($imagem['id'], 'full') ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>