<?php
// カスタム投稿タイプを作成
/* ★採用情報ここから★ */
add_action('init', 'employment_custom_post_type');
function employment_custom_post_type()
{
register_post_type(
'employment',
  array(
  'label' => '採用情報',
  'hierarchical' => false,
  'public' => true,
  'query_var' => false,
  'rewrite' => true,
  'menu_position' => 5,
  'has_archive' => true,
  'supports' => array('title','editor')
  )
);

  /* カスタムタクソノミーを定義 */
  register_taxonomy(
    'employment_cat',
    'employment',
    array(
    'label' => 'カテゴリー',
    'hierarchical' => true,
    'rewrite' => array('slug' => 'employment')
    )
  );
  /* カスタムタクソノミーを定義ここまで */

  /* 管理画面一覧にカテゴリを表示 */
  function manage_employment_columns($columns) {
    $columns['employment_category'] = "カテゴリー";
    return $columns;
  }
  function add_employment_column($column_name, $post_id){
    if( $column_name == 'employment_category' ) {
    //カテゴリー名取得
    if( 'employment_category' == $column_name ) {
        $doctor_category = get_the_term_list($post_id, 'employment_cat', '', ', ', '' );
    }
    //該当カテゴリーがない場合「なし」を表示
    if ( isset($employment_category) && $employment_category ) {
        echo $employment_category;
    } else {
        echo __('None');
    }
    }
  }
  add_filter('manage_edit-employment_columns', 'manage_employment_columns');
  add_action('manage_posts_custom_column',  'add_employment_column', 10, 2);
  /* 管理画面一覧にカテゴリを表示ここまで */
}



//ビジュアルエディターとテーマ表示のスタイルを合わせる
add_editor_style();



function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
    $args['checked_ontop'] = false;
    return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );

function my_custom_logo() {
echo '<style type="text/css">
#header-logo { background-image: url('.get_bloginfo('template_directory').'/images/custom-logo.gif) !important; }
</style>';
}
add_action('admin_head', 'my_custom_logo');

function remove_footer_admin () {
  echo 'お問い合わせは<a href="http://www.tna.co.jp/" target="_blank">TNA</a>まで';
}
add_filter('admin_footer_text', 'remove_footer_admin');

//ログイン画像差しかえ
function custom_login_logo() { ?>
	<style>
		.login #login h1 a {
			width: 322px;
			height: 111px;
			background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/custom-login-logo.png) no-repeat 0 0;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );
function custom_login_logo_url() {
	return 'http://www.tna.co.jp/';
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );
//ロゴtitle属性変更
function custom_login_logo_title() {
	return get_option( 'blogname' );
}
add_filter( 'login_headertitle', 'custom_login_logo_title' );
//ログインエラー分
add_filter( 'login_errors', create_function('$a', "return '<strong>エラー:</strong> ログインできませんでした';") );


remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
//絵文字コードを無効化 added 160128 mtd
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


///Contact Form 7に確認用メールアドレスを追加
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );

function wpcf7_text_validation_filter_extend( $result, $tag ) {
global $my_email_confirm;
	$tag = new WPCF7_Shortcode( $tag );
	$name = $tag->name;
	$value = isset( $_POST[$name] )
		? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
		: '';

//ひとつ目のメールアドレス項目の名称（ここでは'your-email'）を$nameに代入。
	if ($name == "your-email"){
		$my_email_confirm=$value;
		}

//ふたつ目のメールアドレス項目の名称（ここでは'your-email_confirm'）を$nameに代入。
	if ($name == "your-emailcon" && $my_email_confirm != $value){
		$result->invalidate( $tag,"※メールアドレスが一致していません");
		}

	return $result;
}

//記事を省略　現在60文字で省略 added 150826 mtd
function cut_excerpt() {
	global $post;
	$content = mb_substr(strip_tags( $post -> post_content), 0, 60);
	if(mb_strlen($content, 'utf-8') > '59'){
		$content .= '…';
	}
	return $content;
}

?>