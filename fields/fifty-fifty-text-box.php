<?php
// fifty-fifty-text-box.php
?>
<div class="artical-block row">
	<div class="col-xs-12 col-lg-6">
		<?php while( has_sub_field('contents1')): ?>
			<h4><?php echo esc_html( get_sub_field('sub-title') ); ?></h4>
			<p><?php echo get_sub_field('text'); ?></p>
		<?php endwhile; ?>
	</div>
	<div class="col-xs-12 col-lg-6">
		<?php while( has_sub_field( 'contents2' ) ): ?>
			<h4><?php echo esc_html( get_sub_field("sub-title") ); ?></h4>
			<p><?php the_sub_field("text"); ?></p>
		<?php endwhile; ?>
	</div>
</div>
