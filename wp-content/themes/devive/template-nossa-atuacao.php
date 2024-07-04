<?php
// Template Name: Nossa atuação
get_header(); ?>
<main id="nossa-atuacao">
    <section id="causa" class="bg-yellow sec-01">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="color-dark-blue"><?php the_field('titulo_secao_1'); ?></h2>
                <p class="color-dark-blue"><?php the_field('descricao_secao_1'); ?></p>
                <a href="#"><?php the_field('link_secao_1'); ?></a>
            </div>
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <?php $imagemSecao1 = get_field('imagem_secao_1'); ?>
                    <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="dcnts" class="sec-02">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_2'); ?></h2>
        </div>
        <div class="row justify-content-lg-between justify-content-center">
            <?php
            $itens = get_field('repetidor_secao_2');
            foreach ($itens as $item) :
            ?>
                <div class="card">
                    <div>
                        <h3 class="color-dark-blue"><?php echo $item['titulo'] ?></h3>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php $icon = $item['icone']; ?>
                        <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                    </div>
                    <div>
                        <p class="color-dark-blue"><?php echo $item['descricao'] ?></p>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </section>
    <?php get_template_part('historia'); ?>
    <section id="parceiras" class="sec-04">
        <h2 class="color-dark-blue text-center"><?php the_field('titulo_secao_4'); ?></h2>
        <div class="grid-container">
            <?php
            $itens = get_field('imagens_secao_4');
            foreach ($itens as $item) :
            ?>
                <a target="_blank" href="<?php echo $item['link'] ?>" class="d-flex justify-content-center my-lg-0 my-5">
                    <div class="grid-item bg-yellow gy-4">
                        <?php $icon = $item['imagem']; ?>
                        <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                        <p><?php echo $item['descricao']; ?></p>
                    </div>
                </a>
            <?php
            endforeach;
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>