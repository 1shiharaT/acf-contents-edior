<?php
/**
 * =====================================================
 * @package
 * @subpackage 投稿ページ リピートコンテンツ
 * @author     GrowGroup
 * @license    GPLv2 or later
 * @link       http://grow-group.jp
 * @copyright  2014 GrowGroup.LLC
 * =====================================================
 */
?>

<section class="post-content clearfix" itemprop="articleBody">
<?php
// 本文
the_field( 'post_content' );

while( has_sub_field( 'layout-block' ) ) :

	include dirname( __FILE__ ) . '/fields/' . get_row_layout() . '.php';

endwhile; ?>
</section>
