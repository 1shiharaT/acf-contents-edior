<?php
// left-image-right-text.php
?>
<div class="artical-block block01 row">
	<div class="col-xs-12 col-lg-4">
		<img src="<?php echo esc_url( get_sub_field( 'left-image' ) ); ?>" alt="イメージ画像" />
	</div>
	<div class="col-xs-12 col-lg-8">
		<p><?php echo get_sub_field( 'right-text' ); ?></p>
	</div>
</div>
