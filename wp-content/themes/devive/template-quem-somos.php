<?php
// Template Name: Quem somos
get_header(); ?>
<main id="quem-somos">
    <section class="bg-blue secao1">
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
       <div class="d-flex">
           <div class="col-lg-6">
                <?php $imagemSecao1 = get_field('imagem_secao_2'); ?>
                <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
           </div>
           <div class="col-lg-6 p-5">
               <h2 class="color-dark-blue"><?php the_field('titulo_secao_2'); ?></h2>
               <p class="color-dark-blue"><?php the_field('descricao_secao_2'); ?></p>
           </div>
       </div>
    </section>
    <section class="bg-yellow secao3 p-5">
       <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_3'); ?></h2>
       </div>
       <div>
           <?php
                $itens = get_field('repetidor_secao_3');
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
        <div class="d-flex flex-row justify-content-around">
            <?php
                $itens = get_field('imagens_secao_3');
                foreach ($itens as $item) :
            ?>
                <div>
                    <?php $icon = $item['imagem']; ?>
                    <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                </div>
            <?php
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
                <div class="m-5">
                    <?php $icon = $item['imagem']; ?>
                    <?php echo wp_get_attachment_image($icon['id'], 'full') ?>
                </div>
            <?php
                endforeach;
            ?>
        </div>
    </section>
    <section class="secao4 bg-blue">
        <div class="d-flex justify-content-center">
            <h2 class="color-dark-blue"><?php the_field('titulo_secao_5'); ?></h2>
        </div>
        <div class="d-flex justify-content-center margin-container">
            <?php $imagemSecao1 = get_field('imagem_secao_5'); ?>
            <?php echo wp_get_attachment_image($imagemSecao1['id'], 'full') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>