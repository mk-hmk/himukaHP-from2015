<!doctype html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>株式会社ひむか流通ネットワーク</title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="Keywords" content="流通BMS,EDI,JCA,VAN,EDIセンター,自動発注システム,店舗システム,本部システム,食品スーパー,生鮮スーパー,ハンディ,EOB,クラウド,ASP,EOS,システム,ひむか流通" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,  maximum-scale=1">
<meta name="msvalidate.01" content="97924BB7B09E9DF7DF627851CC2ABFC9" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=0305">
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" />
<?php //wp_head(); ?>
</head>
<body>
<!--　header　▼▼-->
<div class="header cf">
		<div class="container">
				<h1><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社ひむか流通ネットワーク"></a>
<!--						<p>株式会社ひむか流通ネットワーク</p>-->
				</h1>
				<div class="header_right">
						<!-- <ul id="top" class="cf">
								<li><a href="<?php bloginfo('url'); ?>/employment_category">採用情報</a></li>
								<li><a href="<?php bloginfo('url'); ?>/about_securitypolicy">情報セキュリティ方針</a></li>
						</ul> -->
						<p id="tel"><a href="<?php echo home_url('/'); ?>guidance_edi/"><img src="<?php echo get_template_directory_uri(); ?>/images/bms_logo_top.png" alt="みんなつながる　流通BMS" class="topbms"></a><img src="<?php echo get_template_directory_uri(); ?>/images/header_tel.png" alt="TEL : 0985-64-1430" class="telimg"></p>
						<div id="bottom">

								<ul class="gnav cf">
										<li><a href="<?php bloginfo('url'); ?>/news">お知らせ</a></li>
										<li><a href="https://ownedmaker.com/hdnc/top/" target="_blank">採用情報</a></li>
										<li><a href="<?php bloginfo('url'); ?>/about_profile">企業情報</a></li>
										<li><a href="<?php bloginfo('url'); ?>/guidance">事業案内</a></li>
										<li><a href="<?php bloginfo('url'); ?>/import_results">導入実績</a></li>
										<li><a href="<?php bloginfo('url'); ?>/about_securitypolicy">情報セキュリティ方針</a></li>
										<li><a href="<?php bloginfo('url'); ?>/faq">よくある質問</a></li>
										<li><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
								</ul>
								<!-- <span></span> -->
						</div>
				</div>
				<div class="header_hinata cf">
					<p><a href="<?php bloginfo('url'); ?>/hinata_miyazaki"><img src="<?php echo get_template_directory_uri(); ?>/images/header_hinata.png" alt="日本のひなた宮崎県"></a></p>
				</div>
		</div>
</div>
<!-- <div class="h_news">
	<p>弊社は<a href="https://www.hdnc.jp/news/project/644/">IT導入補助金2024支援事業者</a>です。詳細は<a href="https://www.hdnc.jp/contact/">お問い合わせ</a>ください。</p>
</div> -->
<!-- header　▲▲-->
<div id="slider">
	<div><a href="<?php bloginfo('url'); ?>/guidance_marche"><img src="<?php echo get_template_directory_uri(); ?>/images/slide_hinata.jpg"></a></div>
		<div><a href="<?php bloginfo('url'); ?>/l-suite"><img src="<?php echo get_template_directory_uri(); ?>/images/slide08.jpg"></a></div>
		<div><a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/slide01.jpg"></a></div>
		<div><a href="<?php bloginfo('url'); ?>/ushiwaka"><img src="<?php echo get_template_directory_uri(); ?>/images/slide07.jpg"></a></div>
		<div><a href="<?php bloginfo('url'); ?>/guidance_edi"><img src="<?php echo get_template_directory_uri(); ?>/images/slide02.jpg"></a></div>
		<div><a href="<?php bloginfo('url'); ?>/guidance_retailing"><img src="<?php echo get_template_directory_uri(); ?>/images/slide03.jpg"></a></div>
		<div><a href="<?php bloginfo('url'); ?>/guidance_producer"><img src="<?php echo get_template_directory_uri(); ?>/images/slide04_01.jpg"></a></div>
</div>

<!-- news -->
<div class="wrap_w">
		<div class="container cf">
				<div id="infomation_title">
						<p class="alc"><img src="<?php echo get_template_directory_uri(); ?>/images/infomaiton_title.png" alt="お知らせ"></p>
						<p class="btn"><a href="<?php bloginfo('url'); ?>/news">過去のお知らせ一覧</a></p>
				</div>

				<div class="cf">
					<?php query_posts('post_type=post&posts_per_page=4'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="newscotent">
						<?php
						$cats = get_the_category();
						$cats = $cats[0];
						?>
						<p class="<?php echo $cats->category_nicename;?>"><?php the_time('Y.n.j'); ?></p>
						<dl>
								<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
								<hr>
								<dd><?php echo cut_excerpt(); ?></dd>
						</dl>
					</div>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
				</div>
		</div>
</div>
<!-- news -->

<!--　content　▼▼-->
<div class="wrap">
		<div class="container">
				<p id="edi_platformtitle" class="alc">HDNCシステム</p>
				<ul id="edi_platform" class="cf">
						<li><a href="<?php bloginfo('url'); ?>/guidance_edi"><img src="<?php echo get_template_directory_uri(); ?>/images/edi_ediservice_icon.png" alt="EDIサービス"></a></li>
						<li><a href="<?php bloginfo('url'); ?>/guidance_retailing"><img src="<?php echo get_template_directory_uri(); ?>/images/edi_retailsystem_icon.png" alt="小売本部システム"></a></li>
						<li><a href="<?php bloginfo('url'); ?>/guidance_wholesale"><img src="<?php echo get_template_directory_uri(); ?>/images/edi_wholesalersystem_icon.png" alt="卸販売システム"></a></li>
						<li><a href="<?php bloginfo('url'); ?>/guidance_producer"><img src="<?php echo get_template_directory_uri(); ?>/images/edi_producersystem_icon.png" alt="生産者システム"></a></li>
				</ul>
				<div id="edi_caption">
						<p  class="alc sdWTxt">流通に特化したシステムの提案・開発・運営を行っており、<br>
						地域の小売店鋪様・卸売業者様・生産者様を支援いたします。</p>
				</div>
				<p class="btn1 alc"><a href="<?php bloginfo('url'); ?>/guidance">事業案内</a></p>
		</div>
</div>

<!-- バナー -->
<div class="banner_con">
	<a href="<?php bloginfo('url'); ?>/l-suite">
		<img src="<?php echo get_template_directory_uri(); ?>/images/Lsuite_banner.jpg">
	</a>
	<a href="https://syber-otasuke.com/">
		<img src="<?php echo get_template_directory_uri(); ?>/images/otasuke_banner.jpg">
	</a>
</div>


<!-- conent　▲▲-->
<!--　footer　▼▼-->
<div class="footer">
		<div class="container cf">
				<div class="left ml5">
						<p id="footer_logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/f_logo.png" alt="株式会社ひむか流通ネットワーク" /></a></p>
						<div class="adress mt10">
								<p>〒880-0941</p>
								<p>宮崎市北川内町下釘崎5539廣建設ビル1階</p>
								<p>TEL:0985-64-1430　FAX:0985-64-1450</p>
						</div>
						<p class="mt10"><a href="https://goo.gl/maps/6n50V" target="_BLANK"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_map.png" alt="アクセスマップを見る"></a></p>
				</div>
				<div class="right cf">
						<div class="footerbox">
								<ul>
										<li>企業情報
												<ul class="content">
														<li><a href="<?php bloginfo('url'); ?>/about_profile">会社概要</a></li>
														<li><a href="<?php bloginfo('url'); ?>/about_history">沿革</a></li>
														<li><a href="<?php bloginfo('url'); ?>/about_securitypolicy">情報セキュリティー方針</a></li>
														<li><a href="<?php bloginfo('url'); ?>/about_privacypolicy">個人情報保護方針</a></li>
												</ul>
										</li>
								</ul>
						</div>
	<div class="footerbox">
		<ul>
			<li>事業案内
				<ul class="content">
					<li><a href="<?php bloginfo('url'); ?>/guidance">事業案内</a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_edi">EDIサービス</a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_retailing">小売業支援サービス</a></li>
					<li class="FootTwo"><a href="<?php bloginfo('url'); ?>/automatic_ordering">自動発注サービス</a></li>
					<li class="FootTwo"><a href="<?php bloginfo('url'); ?>/mobile_catering">移動販売サービス</a></li>

					<li><a href="<?php bloginfo('url'); ?>/guidance_wholesale">卸売業支援サービス</a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_producer">生産者支援サービス</a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_web">Web制作・運用・管理事業</a></li>
				</ul>
			</li>
		</ul>
	</div>
						<div class="footerbox">
								<ul>
							<li>導入について
										<ul class="content">
														<li><a href="<?php bloginfo('url'); ?>/import_flow">導入フロー</a></li>
														<li><a href="<?php bloginfo('url'); ?>/import_results">導入実績</a></li>
												</ul>
										</li>
										<li><a href="https://ownedmaker.com/hdnc/top/" target="_blank">採用情報</a>
										<ul class="content">
														<!-- <li><a href="<?php bloginfo('url'); ?>/employment_category">募集職種一覧</a></li> -->
														<!--<li><a href="<?php bloginfo('url'); ?>/employment_voice">社員の声</a></li>-->
																</ul>
										</li>
								</ul>
						</div>
						<div class="footerbox">
								<ul>
										<li><a href="<?php bloginfo('url'); ?>/news">お知らせ</a></li>
										<li><a href="<?php bloginfo('url'); ?>/faq">よくある質問</a></li>
										<li><a href="<?php bloginfo('url'); ?>/about_profile#access">アクセスマップ</a></li>
										<li><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
								</ul>
								<p class="mt20"><img src="<?php echo get_template_directory_uri(); ?>/images/isms.png" alt="ISMS" width="110px"></p>
						</div>
				</div>
		</div>
</div>
<div class="footer_bottom">
<div class="container">
<p class="alr">&copy;2015 Himuka Distribution Network Co., Ltd.</p>
</div>
</div>
<!-- footer　▲▲-->
<?php //wp_footer(); ?>
<div id="pageTop">
	<a href="#">ページ先頭へ戻る</a>
</div>
<!-- /#pageTop -->

<!--[if lt IE 9]>
<![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>

<script>
$(function(){
	$('#slider').bxSlider({
		auto:true,
		speed:1000,
		mode: 'fade',
		captions: false
	});
});
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js?v=0317"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64752805-1', 'auto');
  ga('set', 'dimension1', <?php echo $_SERVER[‘REMOTE_ADDR’]; ?>);
  ga('send', 'pageview');
</script>

</body>
</html>
