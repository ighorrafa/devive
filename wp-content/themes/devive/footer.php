<footer id="colophon" class="site-footer py-5 bg-dark-blue">
	<div class="site-info">

		<div class="row gy-5 justify-content-lg-between">

			<div class="col-12 col-lg-2 text-center text-lg-start">
				<?php
				$logo = get_field('logo_footer', 'dados');
				echo wp_get_attachment_image($logo['id'], 'large') ?>
			</div>

			<div class="col-lg-3 d-flex justify-content-center gap-4">
				<?php
				$sociais = get_field('sociais', 'dados');
				foreach ($sociais as $item) : ?>
					<a href="<?php echo $item['url'] ?>" target="_blank">
						<?php echo wp_get_attachment_image($item['icon']['id'], 'full') ?>
					</a>
				<?php endforeach; ?>
			</div>

		</div>

		<div class="row mt-4">
			<div class="col-12 text-center text-lg-start">
				<?php wp_nav_menu([
					'theme_location' => 'footer-menu',
					'container' => '',
					'menu_class' => 'menu'
				]) ?>
			</div>
		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>