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
                <div class="col-lg-6 text-center">
                    <h1 class="color-dark-blue mb-5"><?php the_field('titulo_dcnt'); ?></h1>
                    <p><?php the_field('descricao_dcnt'); ?></p>
                    <div class="mb-5"></div>
                    <a class="btn bg-blue" href="<?php the_field('link') ?>"><?php the_field('label') ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="box">
        <div class="container bg-dark-blue box-wrapper w-75">
            <div class="d-flex justify-content-around">
                <?php
                    $itens = get_field('itens');
                    foreach($itens as $item):
                ?>
                <div>
                    <div class="row justify-content-center">
                        <h2 class="mb-2"><?php echo $item['titulo'] ?></h2>
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
    <section class="talktous bg-blue">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <?php $talktous = get_field('imagem_talktous'); ?>
                    <?php echo wp_get_attachment_image($talktous['id'], 'full') ?>
                </div>
                <div class="col-lg-6">
                    <h3 class="color-dark-blue mb-5"><?php the_field('titulo_talktous'); ?></h3>
                    <p class="color-dark-blue"><?php the_field('descricao_talktous'); ?></p>
                    <div class="mb-5"></div>
                    <a class="btn dark" href="<?php the_field('link_taltous') ?>"><?php the_field('label_talktous') ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>