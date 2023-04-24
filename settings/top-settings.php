<?php
//トップページ設定追加
add_action( 'admin_menu', 'add_site_settings_menu' );
function add_site_settings_menu() {
	add_menu_page( 'トップページ設定', 'トップページ設定', 'manage_options', 'site_settings', 'site_settings_page', '' );
	add_action( 'admin_init', 'register_custom_setting' );
}
function site_settings_page() {
?>
<div class="wrap">
<h2>トップページ設定</h2>
<?php
  if (isset($_GET['settings-updated'])) :
    if (true == $_GET['settings-updated']) :
      echo '<div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました。</strong></p></div>';
    endif;
  endif;
  ?>
<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
<?php
settings_fields('top-settigns');
do_settings_sections('top-settigns');
submit_button();
?>
<table class="form-table setting-table">
	<tr>
		<th><label for="top_fv_text">キャッチコピー</label></th>
		<td colspan="2"><input name="top_fv_text" type="text" id="top_fv_text" value="<?php form_option( 'top_fv_text' ); ?>" class="regular-text" /></td>
	</tr>
	<!-- 
	<tr>
		<th scope="row"><label for="theme_option_head_script">head内にスクリプトを挿入する</label></th>
		<td><p><label><input name="theme_option_head_script" type="checkbox" id="theme_option_head_script" value="1" <?php checked( 1, get_option( 'theme_option_head_script' ) ); ?> />する</label></p>
			<textarea name="theme_option_head_script_source" id="theme_option_head_script_source" class="large-text code" rows="12"><?php echo esc_textarea( get_option( 'theme_option_head_script_source' ) ); ?></textarea></td>
	</tr> -->
	<tr>
		<th scope="row"><label for="top_fv_image1">トップ画像</label></th>
		<td><?php generate_upload_image_tag('top_fv_image1', get_option('top_fv_image1'));?></td>
	</tr>
  <tr>
		<th><label for="top_message_en">メッセージ英語</label></th>
		<td colspan="2"><input name="top_message_en" type="text" id="top_message_en" value="<?php form_option('top_message_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_message_title">メッセージタイトル</label></th>
		<td colspan="2"><input name="top_message_title" type="text" id="top_message_title" value="<?php form_option('top_message_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_message_text">メッセージテキスト</label></th>
		<td colspan="2">
    <?php            
      $content = get_option('top_message_text');
      $editor_id = 'top_message_text';
      $settings = array(
        'textarea_rows'	=> 5,
        'wpautop' => false
      );
      wp_editor( $content, $editor_id, $settings );
    ?> 
    </td>
	</tr>
  <tr>
		<th><label for="top_service_en">サービス英語</label></th>
		<td colspan="2"><input name="top_service_en" type="text" id="top_service_en" value="<?php form_option('top_service_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_service_title">サービスタイトル</label></th>
		<td colspan="2"><input name="top_service_title" type="text" id="top_service_title" value="<?php form_option('top_service_title'); ?>" class="regular-text" /></td>
	</tr>
  <?php for($i=0; $i < 3; $i++): ?>
  <tr>
    <th><label for="top_service[<?= $i;?>][title]">サービス<?= $i+1;?> タイトル</label></th>
    <td colspan="2"><input name="top_service[<?= $i;?>][title]" type="text" id="top_service[<?= $i;?>][title]" value="<?= get_option('top_service')[$i]['title']; ?>" class="regular-text" /></td>
  </tr>
  <tr>
    <th><label for="top_service<?= $i;?>_text">サービス<?= $i+1;?> テキスト</label></th>
    <td colspan="2">
      <?php            
        $content = get_option('top_service')[$i]['text'];
        $editor_id = 'top_service'.$i.'_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false,
          'textarea_name' => 'top_service['.$i.'][text]'
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
  </tr>
  <tr>
    <th scope="row"><label for="top_service[<?= $i;?>][image]">サービス<?= $i+1;?> 画像</label></th>
    <td><?php generate_upload_image_tag('top_service['.$i.'][image]', get_option('top_service')[$i]['image']);?></td>
  </tr>
  <tr>
    <th><label for="top_service[<?= $i;?>][link]">サービス<?= $i+1;?> URL</label></th>
    <td colspan="2"><input name="top_service[<?= $i;?>][link]" type="text" id="top_service[<?= $i;?>][link]" value="<?= get_option('top_service')[$i]['link']; ?>" class="regular-text" /></td>
  </tr>
  <tr>
    <th><label for="top_service[<?= $i;?>][link_text]">サービス<?= $i+1;?> リンクテキスト</label></th>
    <td colspan="2"><input name="top_service[<?= $i;?>][link_text]" type="text" id="top_service[<?= $i;?>][link_text]" value="<?= get_option('top_service')[$i]['link_text']; ?>" class="regular-text" /></td>
  </tr>
  <?php endfor; ?>
  <tr>
		<th><label for="top_goods[en]">日用雑貨英語</label></th>
		<td colspan="2"><input name="top_goods[en]" type="text" id="top_goods[en]" value="<?php form_option('top_goods')['en']; ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_goods[title]">日用雑貨タイトル</label></th>
		<td colspan="2"><input name="top_goods[title]" type="text" id="top_goods[title]" value="<?php form_option('top_goods')['title']; ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_goods_text">日用雑貨テキスト</label></th>
		<td colspan="2">
      <?php            
        $content = get_option('top_goods')['text'];
        $editor_id = 'top_goods_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false,
          'textarea_name' => 'top_service[text]'
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
	</tr>
  <tr>
		<th><label for="top_item[link]">日用雑貨リンク</label></th>
		<td colspan="2"><input name="top_item[link]" type="text" id="top_item[link]" value="<?php form_option('top_item')['link']; ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_item_linktext">日用雑貨リンクテキスト</label></th>
		<td colspan="2"><input name="top_item_linktext" type="text" id="top_item_linktext" value="<?php form_option('top_item_linktext'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_item_en">エステ英語</label></th>
		<td colspan="2"><input name="top_item_en" type="text" id="top_item_en" value="<?php form_option('top_item_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_item_title">エステタイトル</label></th>
		<td colspan="2"><input name="top_item_title" type="text" id="top_item_title" value="<?php form_option('top_item_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_item_text">エステテキスト</label></th>
		<td colspan="2">
      <?php            
        $content = get_option('top_item_text');
        $editor_id = 'top_item_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
	</tr>
  <tr>
		<th><label for="top_item_link">エステリンク</label></th>
		<td colspan="2"><input name="top_item_link" type="text" id="top_item_link" value="<?php form_option('top_item_link'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_item_linktext">エステリンクテキスト</label></th>
		<td colspan="2"><input name="top_item_linktext" type="text" id="top_item_linktext" value="<?php form_option('top_item_linktext'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_news_en">ニュース英語</label></th>
		<td colspan="2"><input name="top_news_en" type="text" id="top_news_en" value="<?php form_option('top_news_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_news_title">ニュースタイトル</label></th>
		<td colspan="2"><input name="top_news_title" type="text" id="top_news_title" value="<?php form_option('top_news_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_company_en">会社情報英語</label></th>
		<td colspan="2"><input name="top_company_en" type="text" id="top_company_en" value="<?php form_option('top_company_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_company_title">会社情報タイトル</label></th>
		<td colspan="2"><input name="top_company_title" type="text" id="top_company_title" value="<?php form_option('top_company_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_contact_en">お問い合わせ英語</label></th>
		<td colspan="2"><input name="top_contact_en" type="text" id="top_contact_en" value="<?php form_option('top_contact_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_contact_title">お問い合わせタイトル</label></th>
		<td colspan="2"><input name="top_contact_title" type="text" id="top_contact_title" value="<?php form_option('top_contact_title'); ?>" class="regular-text" /></td>
	</tr>
</table>
<?php submit_button(); ?>
</form>
</div>
<?php
}
function register_custom_setting() {
	register_setting('top-settigns', 'top_fv_text');
	register_setting('top-settigns', 'top_fv_image1');
	register_setting('top-settigns', 'top_message_en');
	register_setting('top-settigns', 'top_message_title');
	register_setting('top-settigns', 'top_message_text');
	register_setting('top-settigns', 'top_service_en');
	register_setting('top-settigns', 'top_service_title');
	register_setting('top-settigns', 'top_service');
  register_setting('top-settigns', 'top_goods_en');
	register_setting('top-settigns', 'top_goods_title');
	register_setting('top-settigns', 'top_goods_text');
	register_setting('top-settigns', 'top_goods_link');
	register_setting('top-settigns', 'top_goods_linktext');
}
