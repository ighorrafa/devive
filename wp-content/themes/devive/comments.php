<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area my-5">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">Comentários</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

	endif;

	comment_form();
	?>

</div><!-- #comments -->
