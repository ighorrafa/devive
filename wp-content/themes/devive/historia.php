<section id="historia" class="bg-blue">
    <h1 class="color-dark-blue"><?php the_field('title'); ?></h1>
    <div class="d-flex align-items-start justify-content-between">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php
            $historia = get_field('historia');
            $firstTab = true;
            foreach ($historia as $ano) : ?>
                <button class="nav-link <?php echo $firstTab ? 'active' : ''; ?>" id="v-pills-<?php echo $ano['ano']; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo $ano['ano']; ?>" type="button" role="tab" aria-controls="v-pills-<?php echo $ano['ano']; ?>" aria-selected="true"><?php echo $ano['ano']; ?></button>
                <?php $firstTab = false; ?>
            <?php endforeach; ?>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <?php
            $firstContent = true;
            foreach ($historia as $ano) : ?>
                <div class="tab-pane fade show <?php echo $firstContent ? 'active' : ''; ?>" id="v-pills-<?php echo $ano['ano']; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $ano['ano']; ?>-tab">
                    <?php echo wp_get_attachment_image($ano['image']['id'], 'full'); ?>
                </div>
                <?php $firstContent = false; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>