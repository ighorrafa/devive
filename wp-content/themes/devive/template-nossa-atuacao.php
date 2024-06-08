<?php
// Template Name: Nossa atuação
get_header(); ?>
<main id="nossa-atuacao">
    <section class="bg-yellow secao1">
       <div class="d-flex">
           <div class="col-lg-6">
               <h2 class="color-dark-blue"><?php the_field('titulo_secao_1'); ?></h2>
               <p class="color-dark-blue"><?php the_field('descricao_secao_1'); ?></p>
               <a href="#"><?php the_field('link_secao_1'); ?></a>
           </div>
           <div class="col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_secao_1'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
           </div>
       </div>
    </section>
    <section class="secao2">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_2'); ?></h2>
        </div>
        <div>
        <?php
            $itens = get_field('repeditor_secao_2');
            foreach ($itens as $item) :
        ?>
            <div>
                <div>
                    <?php $icon = $item['icone']; ?>
                    <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                </div>
                <div>
                    <h3 class="color-dark-blue m-0"><?php echo $item['titulo'] ?></h3>
                    <p class="color-dark-blue m-0"><?php echo $item['descricao'] ?></p>
                </div>
            </div>
        <?php
            endforeach;
        ?>
       </div>
    </section>
    <section class="bg-blue">
       teste
    </section>
    <section class="secao4">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_4'); ?></h2>
        </div>
        <div class="grid-container">
            <?php
                $itens = get_field('imagens_secao_4');
                foreach ($itens as $item) :
            ?>
                <div class="grid-item bg-yellow">
                    <?php $icon = $item['imagem']; ?>
                    <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                </div>
            <?php
                endforeach;
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>