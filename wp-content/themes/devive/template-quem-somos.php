<?php
// Template Name: Quem somos
get_header(); ?>
<main id="quem-somos">
    <section class="bg-blue secao1">
        <div class="d-lg-flex">
            <div class="col-lg-6">
                <h2 class="color-dark-blue"><?php the_field('titulo_secao_1'); ?></h2>
                <p class="color-dark-blue"><?php the_field('descricao_secao_1'); ?></p>
                <a href="#"><?php the_field('link_secao_1'); ?></a>
            </div>
            <div class="col-lg-6 my-lg-0 my-5">
                <?php $imagemSecao1 = get_field('imagem_secao_1'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="secao2">
        <div class="d-lg-flex flex-row-reverse">
            <div class="col-lg-6 p-5 d-flex flex-column justify-content-center">
                <h2 class="color-dark-blue"><?php the_field('titulo_secao_2'); ?></h2>
                <p class="color-dark-blue"><?php the_field('descricao_secao_2'); ?></p>
            </div>
            <div class="col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_secao_2'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
            </div>
        </div>
    </section>
    <section class="bg-yellow secao3 p-5">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_3'); ?></h2>
        </div>
        <div class="row">
            <?php
                $itens = get_field('repetidor_secao_3');
                foreach ($itens as $item) :
            ?>
                <div class="col-lg-6 px-5 d-flex flex-column justify-content-end my-lg-0 my-5">
                    <div class="d-flex justify-content-center">
                        <?php $icon = $item['icone']; ?>
                        <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="content-wrapper">
                            <h3 class="color-dark-blue"><?php echo $item['titulo'] ?></h3>
                            <p class="color-dark-blue"><?php echo $item['descricao'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <hr class="line">
        <div class="my-lg-0 my-5">
            <div class="d-flex justify-content-center">
                <?php $imagem = get_field('icone_secao_3'); ?>
                <?php echo wp_get_attachment_image($imagem['id'], 'full') ?>
            </div>
            <div class="content-wrapper-margin">
                <h3 class="color-dark-blue"><?php the_field('subtitulo_secao_3'); ?></h3>
                <p class="color-dark-blue"><?php the_field('subititulo_2'); ?></p>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around">
            <?php
            $count = 0;
            $itens = get_field('imagens_secao_3');
            foreach ($itens as $item) :
            ?>
                <div class="modal-card teste conselho-foto-pessoas position-relative" data-bs-toggle="modal" data-bs-target="#modal<?php echo $count ?>">
                    <figure class="h-100 w-100 overflow-hidden">
                        <?php $icon = $item['imagem']; ?>
                        <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                    </figure>
                    <div class="card-wrapper d-flex flex-column justify-content-between">
                        <h5><?php echo $item['nome']; ?></h5>
                        <div>
                            <div class="btn-card">Clique para saber mais</div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal<?php echo $count ?>" tabindex="-1" aria-labelledby="modal<?php echo $count ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $item['nome'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <?php echo wp_get_attachment_image(142, 'full') ?>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $item['cargo'] ?></p>
                                <span><?php echo $item['descricao'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $count++;
            endforeach;
            ?>
        </div>
    </section>
    <section class="secao4">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_4'); ?></h2>
        </div>
        <div class="d-flex flex-row justify-content-around">
            <?php
            $itens = get_field('imagens_secao_4');
            foreach ($itens as $item) :
            ?>
                <div class="modal-card position-relative m-5" data-bs-toggle="modal" data-bs-target="#modal<?php echo $count ?>">
                    <figure class="h-100 w-100 overflow-hidden">
                        <?php $icon = $item['imagem']; ?>
                        <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                    </figure>
                    <div class="card-wrapper d-flex flex-column justify-content-between">
                        <h5><?php echo $item['nome']; ?></h5>
                        <div>
                            <div class="btn-card">Clique para saber mais</div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal<?php echo $count ?>" tabindex="-1" aria-labelledby="modal<?php echo $count ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mb-5" id="exampleModalLabel"><?php echo $item['nome'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <?php echo wp_get_attachment_image(142, 'full') ?>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span><?php echo $item['descricao'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $count++;
            endforeach;
            ?>
        </div>
    </section>
    <section class="secao4 bg-blue">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_5'); ?></h2>
        </div>
        <div class="d-flex justify-content-center margin-container show-desktop-image">
            <?php $imagemSecao1 = get_field('imagem_secao_5'); ?>
            <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
        </div>
        <div class="d-flex justify-content-center margin-container show-mobile-image">
            <?php $imagemSecao1 = get_field('imagem_mobile'); ?>
            <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>