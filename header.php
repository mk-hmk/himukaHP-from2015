<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php //wp_head(); ?>

<?php if ( $post->my_description ): //meta descriptionの設定 ?>
<meta name="description" content="<?php echo esc_attr( $post->my_description ); ?>" />
<?php else: ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php endif; ?>
<?php if ( $post->my_keyword ): //meta keywordsの設定 ?>
<meta name="keywords" content="<?php echo esc_attr( $post->my_keyword ); ?>" />
<?php else: ?>
<meta name="keywords" content="クラウド,ASP,EDI,EDIサービス,EOS,店舗システム,システム,開発,運用,宮崎,スーパー,食品スーパー,ハンディ,PDA,W-ZERO3,ISO27001,ひむか流通,流通ネットワーク,POS,ホームページ制作,web制作,ホームページ,Web,作成,HDN,HDNC" />
<?php endif; ?>
<?php if ( $post->my_title ): //titleタグの設定 ?>
<title><?php echo esc_html( $post->my_title ); ?></title>
<?php else: ?>
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<?php endif; ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,  maximum-scale=1">
<meta name="msvalidate.01" content="97924BB7B09E9DF7DF627851CC2ABFC9" />

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=0315">
<link href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<!-- Adobeフォント -->
	<script>
  (function(d) {
    var config = {
      kitId: 'mid3ktv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
	
	
	<!--fontawesome-->
	<script src="https://kit.fontawesome.com/1aa7194adc.js" crossorigin="anonymous"></script>
	
</head>

<body>
<!--　header　▼▼-->
<div class="header cf">
		<div class="container">
				<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社ひむか流通ネットワーク"></a>
<!--						<p>株式会社ひむか流通ネットワーク</p>-->
				</h1>
				<div class="header_right">
						<ul id="top" class="cf">
								<li><a href="<?php bloginfo('url'); ?>/employment_category">採用情報</a></li>
								<li><a href="<?php bloginfo('url'); ?>/about_securitypolicy">情報セキュリティ方針</a></li>
						</ul>
						<p id="tel"><a href="<?php echo home_url('/'); ?>guidance_edi/"><img src="<?php echo get_template_directory_uri(); ?>/images/bms_logo_top.png" alt="みんなつながる　流通BMS" class="topbms"></a><img src="<?php echo get_template_directory_uri(); ?>/images/header_tel.png" alt="TEL : 0985-64-1430" class="telimg"></p>
						<div id="bottom">

								<ul class="gnav cf">
										<li><a href="<?php bloginfo('url'); ?>/news">お知らせ</a></li>
										<li><a href="<?php bloginfo('url'); ?>/about_profile">企業情報</a></li>
										<li><a href="<?php bloginfo('url'); ?>/guidance">事業案内</a></li>
										<li><a href="<?php bloginfo('url'); ?>/import_results">導入実績</a></li>
										<li><a href="<?php bloginfo('url'); ?>/faq">よくある質問</a></li>
										<li><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
								</ul>
								<span></span>
						</div>
				</div>
				<div class="header_hinata cf">
					<p><a href="<?php bloginfo('url'); ?>/hinata_miyazaki"><img src="<?php echo get_template_directory_uri(); ?>/images/header_hinata.png" alt="日本のひなた宮崎県"></a></p>
				</div>

			</div>
			
</div>
<div class="h_news">
	<p>弊社は<a href="http://web-dev-2015.hdnc.jp/news/project/371/">IT導入補助金2022支援事業者</a>です。詳細は<a href="https://www.hdnc.jp/contact/">お問い合わせ</a>ください。</p>
</div>
<!-- header　▲▲-->
