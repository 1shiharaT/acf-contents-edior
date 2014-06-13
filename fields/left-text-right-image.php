<?php
// left-text-right-image.php
?>
<div class="artical-block block01">
	<div class="col-xs-12 col-lg-8">
		<?php echo wp_kses( get_sub_field( "left-text" ), wp_kses_allowed_html() ); ?></p>
	</div>
	<div class="col-xs-12 col-lg-4">
		<p><img src="<?php echo esc_url( get_sub_field('right-image') ); ?>" alt="イメージ画像" />
	</div>
</div>
