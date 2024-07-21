<?php
// Template Name: Relatórios
get_header(); ?>
<main id="relatorios">
    <?php $banner = get_field('banner') ?>
    <section class="banner d-flex align-items-center justify-content-center" style="background-image: url('<?php echo wp_get_attachment_image_url($banner['id'], 'full') ?>')">
        <h1><?php the_field('titulo_banner'); ?></h1>
    </section>
    <div class="container relatorios-wrapper">
        <h1 class="text-center">Selecione o ano:</h1>
        <div class="container py-5">
            <div class="cards-wrapper">
                <?php
                $anos = get_field('anos');
                foreach ($anos as $ano) : ?>
                    <div class="card" data-bs-toggle="modal" data-bs-target="#modal<?php echo $ano['ano'] ?>">
                        <div class="ano"><?php echo $ano['ano'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php foreach ($anos as $ano) : ?>
                <div class="modal fade" id="modal<?php echo $ano['ano'] ?>" tabindex="-1" aria-labelledby="modal<?php echo $ano['ano'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Relatórios e Auditorias realizados nesse ano</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <?php echo wp_get_attachment_image(142, 'full') ?>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Clique para fazer o download do documento</p>
                                <?php foreach ($ano['documentos'] as $file) : ?>
                                    <?php $doc = $file['documento']; ?>
                                    <a href="<?php echo $doc['url'] ?>" download>
                                        <span><?php echo $doc['filename']; ?></span>
                                        <?php echo wp_get_attachment_image(143, 'full') ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalForm" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <?php echo wp_get_attachment_image(142, 'full') ?>
                </button>
            </div>
            <div class="modal-body">
                <p>Agradecemos o interesse em nossas publicações.<br>
                    Para acessar, por favor faça seu cadastro ou login.</p>
                <?php echo do_shortcode('[contact-form-7 id="c837334" title="FormulárioRelatorios"]') ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        modal = $('#modalForm');

        modal.modal({
            backdrop: 'static',
            keyboard: false
        });

        // Verificar envio do formulário
        document.addEventListener('wpcf7mailsent', function(event) {
            modal.modal('hide');
            var date = new Date();
            date.setTime(date.getTime() + (7 * 24 * 60 * 60 * 1000)); // 7 dias em milissegundos
            var expires = "expires=" + date.toUTCString();
            document.cookie = "form_submitted=true; " + expires + "; path=/";
        }, false);

        window.onload = function() {
            if (document.cookie.indexOf('form_submitted=true') == -1) {
                modal.modal('show');
            }
        }
    });
</script>