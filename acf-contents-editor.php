<?php
/*
Plugin Name: ACF Contents Editor
Plugin URI: https;//github.com
Description: コンテンツエディター
Version: 0.0.1
Author: Takashi Ishihara
Author URI: http://web-layman.com/
GitHub Plugin https;//github.com
GitHub Branch: master
*/

if ( ! defined( 'WPINC' ) ) {
	exit;
}

/**
 *  ACF Contents Editor
 * =====================================================
 * @package    ACF Contents Editor
 * @author     takashi ishihara
 * @license    GPLv2 or later
 * @link       https://github.com/1shiharaT/extend-theme-customizer
 * =====================================================
 */


add_action( 'init', 'acf_contents_editor_register', 99 );

function acf_contents_editor_register(){

	$plugin_slug = 'acf-contents-editor';

	if ( function_exists( 'acf_register_flexible_content_field' )
			 && function_exists( 'acf_register_repeater_field' )
			 && function_exists( 'register_field_group' ) ) {

		// Default "register_field_group"
		re_register_field_group( array (
			'id' => 'acf_contents_block',
			'title' => __( 'コンテンツ追加', $plugin_slug ),
			'fields' => array (
				array (
					'key' => 'field_53999dd291eac',
					'label' => __( 'サブタイトル', $plugin_slug ),
					'name' => 'post_sub_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5270697e7c69b',
					'label' => __( '本文', $plugin_slug ),
					'name' => 'post_content',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'full',
					'media_upload' => 'yes',
				),
				array (
					'key' => 'field_51dfded7fb270',
					'label' => __( 'コンテンツを自由に追加できます', $plugin_slug ),
					'name' => 'layout-block',
					'type' => 'flexible_content',
					'layouts' => array (
						array (
							'label' => __( 'タイトル大', $plugin_slug ),
							'name' => 'headding-large',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfdf56fb272',
									'label' => __( '見出し大', $plugin_slug ),
									'name' => 'hedding-large',
									'type' => 'text',
									'instructions' => __( 'タイトルを入力して下さい。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'formatting' => 'html',
									'maxlength' => '',
								),
							),
						),
						array (
							'label' => __( 'タイトル中', $plugin_slug ),
							'name' => 'headding-normal',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfdfb0fb273',
									'label' => __( '見出し中', $plugin_slug ),
									'name' => 'headding-normal',
									'type' => 'text',
									'instructions' => __( '見出し(中)を入力して下さい。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'formatting' => 'html',
									'maxlength' => '',
								),
							),
						),
						array (
							'label' => __( '左画像 : 右テキスト', $plugin_slug ),
							'name' => 'left-image-right-text',
							'display' => 'table',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfdffffb275',
									'label' => __( '左:画像', $plugin_slug ),
									'name' => 'left-image',
									'type' => 'image',
									'instructions' => __( '画像をアップロードして下さい。', $plugin_slug ),
									'column_width' => '',
									'save_format' => 'url',
									'preview_size' => 'thumbnail',
									'library' => 'all',
								),
								array (
									'key' => 'field_51dfe038fb276',
									'label' => __( '右:テキスト', $plugin_slug ),
									'name' => 'right-text',
									'type' => 'wysiwyg',
									'instructions' => __( 'テキストを入力して下さい。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'toolbar' => 'full',
									'media_upload' => 'yes',
								),
							),
						),
						array (
							'label' => __( '左テキスト : 右画像', $plugin_slug ),
							'name' => 'left-text-right-image',
							'display' => 'table',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfe0d5fb278',
									'label' => __( '[左]テキスト', $plugin_slug ),
									'name' => 'left-text',
									'type' => 'wysiwyg',
									'instructions' => __( '文章を入力して下さい。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'toolbar' => 'full',
									'media_upload' => 'yes',
								),
								array (
									'key' => 'field_51dfe0fafb279',
									'label' => __( '[右]画像', $plugin_slug ),
									'name' => 'right-image',
									'type' => 'image',
									'instructions' => __( '画像をアップロードして下さい。', $plugin_slug ),
									'column_width' => '',
									'save_format' => 'url',
									'preview_size' => 'thumbnail',
									'library' => 'all',
								),
							),
						),
						array (
							'label' => __( '上画像 : 下テキスト', $plugin_slug ),
							'name' => 'above-image-under-text',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfe2add6de5',
									'label' => __( '上画像', $plugin_slug ),
									'name' => 'above-image',
									'type' => 'image',
									'instructions' => __( '画像をアップロードしてください。', $plugin_slug ),
									'column_width' => '',
									'save_format' => 'url',
									'preview_size' => 'full',
									'library' => 'all',
								),
								array (
									'key' => 'field_51dfe2d8d6de6',
									'label' => __( '下テキスト', $plugin_slug ),
									'name' => 'under-text',
									'type' => 'wysiwyg',
									'instructions' => __( 'テキストを入力して下さい。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'toolbar' => 'full',
									'media_upload' => 'yes',
								),
							),
						),
						array (
							'label' => __( 'リンクボタン', $plugin_slug ),
							'name' => 'link-button',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfe8ff75cd1',
									'label' => __( 'リンク先URL', $plugin_slug ),
									'name' => 'link-url',
									'type' => 'text',
									'instructions' => __( 'リンク先のURLを入力して下さい。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'formatting' => 'html',
									'maxlength' => '',
								),
								array (
									'key' => 'field_51dfe93575cd2',
									'label' => __( 'ボタンテキスト', $plugin_slug ),
									'name' => 'button-text',
									'type' => 'text',
									'instructions' => __( 'ボタンのテキストを入力して下さい。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'formatting' => 'html',
									'maxlength' => '',
								),
								array (
									'key' => 'field_51dfe95f75cd3',
									'label' => __( 'ボタンの大きさ', $plugin_slug ),
									'name' => 'button-size',
									'type' => 'radio',
									'column_width' => '',
									'choices' => array (
										'btn-sm' => __( '小', $plugin_slug ),
										'btn' => __( '普通', $plugin_slug ),
										'btn-lg' => __( '大', $plugin_slug ),
									),
									'other_choice' => 0,
									'save_other_choice' => 0,
									'default_value' => 'btn',
									'layout' => 'horizontal',
								),
								array (
									'key' => 'field_51dfe9b075cd4',
									'label' => __( 'ボタンの位置', $plugin_slug ),
									'name' => 'button-align',
									'type' => 'radio',
									'instructions' => __( 'ボタンの位置を設定して下さい', $plugin_slug ),
									'column_width' => '',
									'choices' => array (
										'text-center' => __( 'センター', $plugin_slug ),
										'text-right' => __( '右', $plugin_slug ),
										'text-left' => __( '左', $plugin_slug ),
									),
									'other_choice' => 0,
									'save_other_choice' => 0,
									'default_value' => 'text-center',
									'layout' => 'vertical',
								),
								array (
									'key' => 'field_51dfeb4507f2c',
									'label' => __( 'ボタンカラー', $plugin_slug ),
									'name' => 'button-color',
									'type' => 'radio',
									'instructions' => __( 'ボタンのカラーを選択して下さい。', $plugin_slug ),
									'column_width' => '',
									'choices' => array (
										'btn-default' => __( '白', $plugin_slug ),
										'btn-primary' => __( '黄色', $plugin_slug ),
										'btn-warning' => __( 'オレンジ', $plugin_slug ),
										'btn-danger' => __( '紺色', $plugin_slug ),
										'btn-info' => __( '水色', $plugin_slug ),
										'btn-inverse' => __( '黒', $plugin_slug ),
									),
									'other_choice' => 0,
									'save_other_choice' => 0,
									'default_value' => 'btn-default',
									'layout' => 'horizontal',
								),
							),
						),
						array (
							'label' => __( 'テキストのみ', $plugin_slug ),
							'name' => 'text-only',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfececf40e8',
									'label' => __( 'テキスト', $plugin_slug ),
									'name' => 'text',
									'type' => 'wysiwyg',
									'instructions' => __( '文章を入力してください。', $plugin_slug ),
									'column_width' => '',
									'default_value' => '',
									'toolbar' => 'full',
									'media_upload' => 'yes',
								),
							),
						),
						array (
							'label' => __( '画像だけ', $plugin_slug ),
							'name' => 'image-only',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51dfed26f40eb',
									'label' => __( '画像', $plugin_slug ),
									'name' => 'image',
									'type' => 'image',
									'instructions' => __( '画像をアップロードしてください。', $plugin_slug ),
									'column_width' => '',
									'save_format' => 'url',
									'preview_size' => 'full',
									'library' => 'all',
								),
							),
						),
						array (
							'label' => __( '仕切り線', $plugin_slug ),
							'name' => 'divier',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
							),
						),
						array (
							'label' => __( '5対5ボックス(右 : 画像 左 : テキスト)', $plugin_slug ),
							'name' => 'fifty-fifty-box',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51ee5d86dac21',
									'label' => __( '右画像', $plugin_slug ),
									'name' => 'image',
									'type' => 'image',
									'instructions' => __( '画像をアップロードして下さい。', $plugin_slug ),
									'column_width' => '',
									'save_format' => 'url',
									'preview_size' => 'full',
									'library' => 'all',
								),
								array (
									'key' => 'field_51ee5da2dac22',
									'label' => __( 'コンテンツ', $plugin_slug ),
									'name' => 'contents',
									'type' => 'repeater',
									'column_width' => '',
									'sub_fields' => array (
										array (
											'key' => 'field_51ee5dbfdac23',
											'label' => __( 'タイトル', $plugin_slug ),
											'name' => 'sub-title',
											'type' => 'text',
											'instructions' => __( 'タイトルを入力', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array (
											'key' => 'field_51ee5dd6dac24',
											'label' => __( 'テキスト', $plugin_slug ),
											'name' => 'text',
											'type' => 'wysiwyg',
											'instructions' => __( 'テキストを入力', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'toolbar' => 'full',
											'media_upload' => 'yes',
										),
									),
									'row_min' => '',
									'row_limit' => '',
									'layout' => 'row',
									'button_label' => __( '行を追加する', $plugin_slug ),
								),
							),
						),
						array (
							'label' => __( '5対5ボックス(右 : テキスト 左 : テキスト)', $plugin_slug ),
							'name' => 'fifty-fifty-text-box',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_51f0a7d6b448d',
									'label' => __( 'コンテンツ1', $plugin_slug ),
									'name' => 'contents1',
									'type' => 'repeater',
									'column_width' => '',
									'sub_fields' => array (
										array (
											'key' => 'field_51f0a7d6b448e',
											'label' => __( 'タイトル', $plugin_slug ),
											'name' => 'sub-title',
											'type' => 'text',
											'instructions' => __( 'タイトルを入力', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array (
											'key' => 'field_51f0a7d6b448f',
											'label' => __( 'テキスト', $plugin_slug ),
											'name' => 'text',
											'type' => 'wysiwyg',
											'instructions' => __( 'テキストを入力', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'toolbar' => 'full',
											'media_upload' => 'yes',
										),
									),
									'row_min' => '',
									'row_limit' => '',
									'layout' => 'row',
									'button_label' => __( '行を追加する', $plugin_slug ),
								),
								array (
									'key' => 'field_51f0a8cd73885',
									'label' => __( 'コンテンツ2', $plugin_slug ),
									'name' => 'contents2',
									'type' => 'repeater',
									'column_width' => '',
									'sub_fields' => array (
										array (
											'key' => 'field_51f0a8cd73886',
											'label' => __( 'タイトル', $plugin_slug ),
											'name' => 'sub-title',
											'type' => 'text',
											'instructions' => __( 'タイトルを入力', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array (
											'key' => 'field_51f0a8cd73887',
											'label' => __( 'テキスト', $plugin_slug ),
											'name' => 'text',
											'type' => 'wysiwyg',
											'instructions' => __( 'テキストを入力', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'toolbar' => 'full',
											'media_upload' => 'yes',
										),
									),
									'row_min' => '',
									'row_limit' => '',
									'layout' => 'row',
									'button_label' => __( '行を追加する', $plugin_slug ),
								),
							),
						),
						array (
							'label' => __( '3カラムボックス', $plugin_slug ),
							'name' => 'three-box',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_52037279d551a',
									'label' => __( 'ボックス', $plugin_slug ),
									'name' => 'box',
									'type' => 'repeater',
									'instructions' => __( '3分割幅のボックスです。', $plugin_slug ),
									'column_width' => 30,
									'sub_fields' => array (
										array (
											'key' => 'field_520372d3d551c',
											'label' => __( 'タイトル', $plugin_slug ),
											'name' => 'title',
											'type' => 'text',
											'instructions' => __( 'タイトルを入力してください。', $plugin_slug ),
											'column_width' => 30,
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array (
											'key' => 'field_520372edd551d',
											'label' => __( '画像', $plugin_slug ),
											'name' => 'image',
											'type' => 'image',
											'instructions' => __( '画像をアップロードして下さい。', $plugin_slug ),
											'column_width' => 30,
											'save_format' => 'url',
											'preview_size' => 'full',
											'library' => 'all',
										),
										array (
											'key' => 'field_52037313d551e',
											'label' => __( 'コンテンツ', $plugin_slug ),
											'name' => 'contents',
											'type' => 'wysiwyg',
											'instructions' => __( 'コンテンツを入力してください。', $plugin_slug ),
											'column_width' => 30,
											'default_value' => '',
											'toolbar' => 'full',
											'media_upload' => 'yes',
										),
									),
									'row_min' => '',
									'row_limit' => '',
									'layout' => 'row',
									'button_label' => __( '行を追加する', $plugin_slug ),
								),
							),
						),
						array (
							'label' => __( 'タブボックス', $plugin_slug ),
							'name' => 'tab-box',
							'display' => 'row',
							'min' => '',
							'max' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_52043e407bc56',
									'label' => __( 'ボックス', $plugin_slug ),
									'name' => 'box',
									'type' => 'repeater',
									'instructions' => __( 'タブIDは他のタブIDと一致しないもの ( tab1,tab2,tab3 ) といった適当なものを入力してください。', $plugin_slug ),
									'column_width' => '',
									'sub_fields' => array (
										array (
											'key' => 'field_52043e867bc59',
											'label' => __( 'タブID', $plugin_slug ),
											'name' => 'id',
											'type' => 'text',
											'instructions' => __( 'タブのIDを入力してください。', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array (
											'key' => 'field_52043e4e7bc57',
											'label' => __( 'タブ - ラベル', $plugin_slug ),
											'name' => 'label',
											'type' => 'text',
											'column_width' => '',
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'formatting' => 'html',
											'maxlength' => '',
										),
										array (
											'key' => 'field_52043e5c7bc58',
											'label' => __( 'タブ - コンテンツ', $plugin_slug ),
											'name' => 'contents',
											'type' => 'wysiwyg',
											'instructions' => __( 'タブの内容を入力してください。', $plugin_slug ),
											'column_width' => '',
											'default_value' => '',
											'toolbar' => 'full',
											'media_upload' => 'yes',
										),
									),
									'row_min' => 1,
									'row_limit' => '',
									'layout' => 'row',
									'button_label' => __( 'タブを追加する', $plugin_slug ),
								),
							),
						),
					),
					'button_label' => __( 'コンテンツを追加', $plugin_slug ),
					'min' => '',
					'max' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
						'order_no' => 0,
						'group_no' => 1,
					),
				),
			),
			'options' => array (
				'position' => 'acf_after_title',
				'layout' => 'no_box',
				'hide_on_screen' => array (
					0 => 'the_content',
					1 => 'excerpt',
					2 => 'author',
					3 => 'format',
					4 => 'featured_image',
					5 => 'send-trackbacks',
				),
			),
			'menu_order' => 1,
		));
	}
}




// Add settings link on plugin page
function acf_php_recovery_settings_link( $links )
{
	$nonce = wp_create_nonce( plugin_basename( __FILE__ ) );
	$settings_link = '<a href="' . admin_url() . '?recover-acf-fields=1&_wp_nonce=' . $nonce . '">設定をインポート</a>';
	array_unshift( $links, $settings_link );
	return $links;
}

$plugin = plugin_basename( __FILE__ );

add_filter( "plugin_action_links_$plugin", 'acf_php_recovery_settings_link' );

/**
 * Re Register Field Group
 * @param  [type] $fields [description]
 * @return [type]         [description]
 */
function re_register_field_group( $fields )
{

	$check_nonce = wp_verify_nonce( $_GET['_wp_nonce'], plugin_basename( __FILE__ ) );

	if ( '1' !== $_GET['recover-acf-fields']
			 || 1 !== $check_nonce ) {
		return;
	}
	$acf_post = array(
		'post_type' => 'acf',
		'post_title' => $fields['title'] . apply_filters( 'acf/import/title_suffix', ' (recover)' ),
		'menu_order'  => $fields['menu_order'],
		'post_status' => apply_filters( 'acf/import/post_status', 'draft' ),
	);
	$post_id = wp_insert_post( $acf_post );

	$i = -1;

	foreach ( $fields['fields'] as $key => $field ){
		$i++;
		$field['order_no'] = $i;
		do_action( 'acf/update_field', $field, $post_id );
	}

	$fields['location'] = array_values( $fields['location'] );

	foreach ( $fields['location'] as $group_id => $group ){
		if ( is_array( $group ) ) {
			$group = array_values( $group );
			foreach ( $group as $rule_id => $rule ) {
				$rule['order_no'] = $rule_id;
				$rule['group_no'] = $group_id;
				add_post_meta( $post_id, 'rule', $rule );
			}
		}
	}


	update_post_meta( $post_id, 'position', $fields['options']['position'] );
	update_post_meta( $post_id, 'layout', $fields['options']['layout'] );
	update_post_meta( $post_id, 'hide_on_screen', $fields['options']['hide_on_screen'] );

	echo "<li><strong>{$fields['title']}</strong>( ID: <strong>{$post_id}</strong> ) を追加しました。</li>\n";

}
