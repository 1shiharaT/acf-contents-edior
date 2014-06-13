<?php
// link-button.php
?>
<div class="artical-block <?php echo esc_attr( get_sub_field( 'button-align' ) ); ?> ">
	<a href="<?php echo esc_url( get_sub_field( 'link-url' ) ); ?>" class="btn <?php echo esc_attr( get_sub_field( 'button-size' ) ); ?> <?php echo esc_attr( get_sub_field( 'button-color' ) ); ?>">
		<?php echo esc_attr( get_sub_field( 'button-text' ) ); ?>
	</a>
</div>
