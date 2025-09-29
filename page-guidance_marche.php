<?php get_header(); ?>

<!-- フェードイン -->
<script>
$(window).scroll(function (){
	$('.fadein').each(function(){
		var elemPos = $(this).offset().top,
		scroll = $(window).scrollTop(),
		windowHeight = $(window).height();

			if (scroll > elemPos - windowHeight + 150){
				$(this).addClass('scrollin');
			}
	});
});


</script>
<!--　content　▼▼-->
<!--
<h1 id="title_2f"><img src="<?php echo get_template_directory_uri(); ?>/images/guidance_title.jpg" alt="事業案内"></h1>
-->
<div class="sub_nav">
	<h3 class="title">クリックして開閉</h3>
	<ul class="cf guidance toggle">
		<li><a href="<?php bloginfo('url'); ?>/guidance_edi">EDIサービス</a></li>
		<li><a href="<?php bloginfo('url'); ?>/guidance_retailing">小売業支援サービス</a></li>
		<li><a href="<?php bloginfo('url'); ?>/guidance_wholesale">卸売業支援サービス</a></li>
		<li><a href="<?php bloginfo('url'); ?>/guidance_producer">生産者支援サービス</a></li>
		<li><a href="<?php bloginfo('url'); ?>/guidance_web">Web制作･運用･管理事業</a></li>
<!--		<li><a href="<?php bloginfo('url'); ?>/guidance_other">その他</a></li>-->
	</ul>
</div>
<script>
$(function(){
	$('.title').click(function(){
		$(this).next().slideToggle();
	});
});
</script>

<div class="wrap_w hinata_f">
	
	
	<!--　ここからスタート　-->
	<div class="hinata_container">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hinata_marche_02.png" alt="" id="hinata_logo">
		
		<div class="select_01">
			<div class="pc_menu">
				<ul>
					<li><a href="#hinata">ひなたマルシェとは？<p>HINATA Marché</p></a><span class="circle"></span></li>
					<li><a href="#Producer">生産者様<p>Producer</p></a><span class="circle"></span></li>
					<li><a href="#Retailing">小売店様<p>Retailing</p></a><span class="circle"></span></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche_pb/">PB<p>Private Brand</p></a><span class="circle"></span></li>
					<li><a href="#Follow">公式SNS<p>Follow me</p></a><span class="circle"></span></li>
					<li><a href="#Contact">お問合せ<p>Contact</p></a><span class="circle"></span></li>
				</ul>
			</div>
			<div class="Mobile_menu">
				<ul>
					<li class="Mobile_menu01"><a href="#hinata">ひなたマルシェとは？<p>HINATA Marché</p></a><span class="circle"></span></li>
					<li><a href="#Producer">生産者様<p>Producer</p></a></li>
					<li><a href="#Retailing">小売店様<p>Retailing</p></a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche_pb/">PB<p>Private Brand</p></a></li>
					<li><a href="#Follow">公式SNS<p>Follow me</p></a></li>
					<li><a href="#Contact">お問合せ<p>Contact</p></a></li>
					
				</ul>
			</div>
			
			<div class="hinata_con">
				<img src="<?php echo get_template_directory_uri(); ?>/images/main_img.jpg" alt="" class="fadein fadein-right">
				<div class="hinata_text fadein fadein-left">
					<p class="hinata_title" id="hinata">みやざきの美味しいを<span>届けます。</span></p>
					<p>はじめまして、ひなたマルシェと申します。

						私たちは、生産者様、小売店様とお客様を繋ぐ、
						宮崎県産品特化型卸売事業です。

						日本のひなた宮崎県の"おいしい"を
						たくさんのお客様にお届けするため、
						生産者様と小売店様を全力でサポート。

						お悩みやご要望をしっかりとお聞きした上で、
						安全にお取引が出来るように努めて参ります。</p>
					</div>
			
			</div>
		</div>
	</div> <!-- 足りない？？　-->
			<div class="nayami_con">
				<img src="<?php echo get_template_directory_uri(); ?>/images/onayami_title.svg" id="onayami_svg" class=" fadein fadein-bottom">
				
				<div class="nayami_area animate-wrap pc_nayami_img">
					<div class="nayami_left ">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/nayami_p.png" class="animate ">
						</div>
						<div class="huki">
							<img src="<?php echo get_template_directory_uri(); ?>/images/p01.png" class="animate p01">
							<img src="<?php echo get_template_directory_uri(); ?>/images/p02.png" class="animate p02">
							<img src="<?php echo get_template_directory_uri(); ?>/images/p03.png" class="animate p03">
						</div>
					
					</div>
					<div class="nayami_right">
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/images/nayami_r.png" class="animate">
						</div>
						<div class="huki">
							<img src="<?php echo get_template_directory_uri(); ?>/images/r01.png" class="animate">
							<img src="<?php echo get_template_directory_uri(); ?>/images/r02.png" class="animate">
							<img src="<?php echo get_template_directory_uri(); ?>/images/r03.png" class="animate">
						</div>
					</div>
				</div>
				<div class="mobile_nayami_img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/nayami_mobile.svg" class="fadein fadein-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/images/nayami_mobile2.svg" class="fadein fadein-bottom">
				</div>
				
				<script>
				$(function() {
				  $(window).on('scroll resize', function() {
					var setHeight = 100;
					var wHeight = $(window).height();
					var scrollTop = $(window).scrollTop();
					$('.animate').each(function() {
					  var targetPosition = $(this).offset().top;
					  if(scrollTop > targetPosition - wHeight + setHeight) {
						$(this).addClass('show');
					  }
					})
				  });
				});
				</script>
			</div>
	
	
	
	
	<section id="sec1">
		<div class="support">
			<div class="support_img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/support_01.svg" class="fadein fadein-bottom pc_su_br">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mobile_support_01.svg" class="fadein fadein-bottom mb_su_br">
				<img src="<?php echo get_template_directory_uri(); ?>/images/support_02.svg" class="fadein fadein-bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/images/support_03.svg" class="support_03 fadein fadein-bottom">
			</div>
			
			<div class="support_left">
				<div class="left_1 fadein fadein-left">
					<h2 class="pc_su_br"><img src="<?php echo get_template_directory_uri(); ?>/images/support_no_01.png"></h2>
					<h2 class="mb_su_br mb_su_h2"><img src="<?php echo get_template_directory_uri(); ?>/images/mb_support_no01.png"></h2>
					<h3>販路拡大・商品開拓</h3>
					<p class="main_text">宮崎県民の私たちが地元ならではの商品を開拓し、
						これまで繋がってきた全国の小売店様にご案内いたします。</p>
					<ul>
						<li class="s_li01">取引先</li>
						<li class="s_li02">
							<ul>
								<li><span>約</span><span class="li_nun">100</span>社以上</li>
								<li><span>約</span><span class="li_nun">500</span>店舗以上</li></li>
							</ul>
						<li class="s_li03">※2024年10月現在</li>
					</ul>
					<p class="main_text02">※弊社とのお取引は商品の販売をお約束するものではございません。
						商品の販売は小売店様のご意向となります。</p>
				</div>
				
				<div class="left_2 fadein fadein-right pc_su_br">
					<img src="<?php echo get_template_directory_uri(); ?>/images/support_no01.png">
				</div>
			</div>
		
		
		<div class="support_right">
			<div class="right_1 fadein fadein-left pc_su_br">
				<img src="<?php echo get_template_directory_uri(); ?>/images/support_no02.png">
			</div>
			<div class="right_2 fadein fadein-right">
				<h2 class="pc_su_br"><img src="<?php echo get_template_directory_uri(); ?>/images/support_no_02.png"></h2>
				<h2 class="mb_su_br mb_su_h2"><img src="<?php echo get_template_directory_uri(); ?>/images/mb_support_no02.png"></h2>
				<h3>企画・特集提案</h3>
				<p class="main_text">宮崎グルメに特化した企画や、季節・催事に合わせた特集をご提案いたします。</p>
			</div>
		</div>
		
		
			<div class="support_left">
				<div class="left_1 fadein fadein-left ">
					<h2 class="pc_su_br"><img src="<?php echo get_template_directory_uri(); ?>/images/support_no_03.png"></h2>
					<h2 class="mb_su_br mb_su_h2"><img src="<?php echo get_template_directory_uri(); ?>/images/mb_support_no03.png"></h2>
					<h3 class="left_h3_03">販促物作成</h3>
					<p class="main_text">ご要望に応じて、商品の魅力をPRする販促物を制作いたします。</p>
				</div>
				
				<div class="left_2 fadein fadein-right pc_su_br">
					<img src="<?php echo get_template_directory_uri(); ?>/images/support_no03.png">
				</div>
			</div>
		
		<div class="support_right">
			<div class="right_1 fadein fadein-left pc_su_br">
				<img src="<?php echo get_template_directory_uri(); ?>/images/support_no04.png">
			</div>
			<div class="right_2 fadein fadein-right">
				<h2 class="pc_su_br"><img src="<?php echo get_template_directory_uri(); ?>/images/support_no_04.png"></h2>
				<h2 class="mb_su_br mb_su_h2"><img src="<?php echo get_template_directory_uri(); ?>/images/mb_support_no04.png"></h2>
				<h3 class="left_h3_04">事務作業効率化</h3>
				<p class="main_text">取引先が多くなると煩雑になりがちな受発注や支払請求をひなたマルシェに集約することで事務作業の効率化に繋がります。</p>
			</div>
		</div>
		
		
		</div>
	</section>




	<div class="pro_re_con">
		<div class="pro_re_area  fadein fadein-up">
			<h1 id="Producer">生産者様<span>Producer</span></h1>
			<p>県内外の小売店様に御社商品をご提案し、<span>受発注から支払請求まで対応します。</span></p>
			<div class="pro_re_service">
				<h2>生産者様向けサービス</h2>
				<ul>
					<li class="service_li_title">販路拡大</li>
					<li>県内外の弊社取引先(小売店)のほか、スーパーをはじめ、書店・雑貨店・道の駅、空港など、全国の幅広い小売店様へ御社商品をご提案いたします。</li>
					<li class="service_li_title">販促物作成</li>
					<li>ご要望に応じて、商品の魅力をPRする販促物を制作いたします。</li>
					<li class="service_li_title">情報発信</li>
					<li>御社の魅力的な商品を、SNSなどでご紹介いたします。</li>
					<li class="service_li_title">受発注・支払請求管理</li>
					<li>小売店様からの受発注や支払請求を弊社が一元管理いたします。</li>
					<li class="service_li_img"><img src="<?php echo get_template_directory_uri(); ?>/images/service_img01.png"></li>
				</ul>
				<h2 class="pro_re_service_ftitle">お取引開始までの流れ</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/images/service_f01.svg" class=" pc_su_br">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mb_service_f01.svg" class=" mb_su_br">
				<p class="mb_service_te">弊社とのお取引は、商品の販売をお約束するものではございません。商品の販売は小売店様のご意向となります。
商品の製造中止等、納品の困難な取引に関する事項につきましては、ひむか流通ネットワークへ必ずご連絡をお願い致します。</p>
			</div>
		</div>
		
		
		<div class="pro_re_area  fadein fadein-up">
			<h1 class="pro_re_area_Rh1" id="Retailing">小売店様<span>Retailing</span></h1>
			<p>宮崎の魅力的な商品をご提案し、<span>受発注から支払請求まで対応します。</span></p>
			
			<div class="pro_re_service pro_re_service_R">
				<h2>小売店様向けサービス</h2>
				<ul>
					<li class="service_li_title">商品開拓支援</li>
					<li>地元ならではの最新・最旬を追求し、宮崎県の魅力ある商品をご紹介いたします。</li>
					<li class="service_li_title">販促物作成</li>
					<li>ご要望に応じて、商品の魅力をPRする販促物を制作いたします。</li>
					<li class="service_li_title">企画・特集提案</li>
					<li>宮崎グルメに特化した企画や<br>季節・催事に合わせた特集をご提案いたします。</li>
					<li class="service_li_title">受発注・支払請求管理</li>
					<li>受発注や支払請求を弊社が一元管理いたします。</li>
					<li class="service_li_img"><img src="<?php echo get_template_directory_uri(); ?>/images/service_img02.png"></li>
				</ul>
				<h2 class="pro_re_service_ftitle">お取引開始までの流れ</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/images/service_f02.svg" class=" pc_su_br">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mb_service_f02.svg" class=" mb_su_br service_R_mbimg">
				<p class="mb_service_te">弊社とのお取引は、商品の販売をお約束するものではございません。生産者によってはお取扱いただけない場合もございます。
臨時休業、長期休み（ＧＷ，年末年始等）の場合は、弊社へ事前に休業日の連絡をお願い致します。</p>
			</div>
		</div>
	</div>







	<div class="select_01">
		<div class="pro_re_area sns_area  fadein fadein-up">
			<h1 id="Follow">公式SNS<span>Follow me</span></h1>
			<div class="sns_con">
				<img src="<?php echo get_template_directory_uri(); ?>/images/inst_img.png" class=" pc_su_br">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mb_inst_img.png" class=" mb_su_br">
			</div>
		</div>
	</div>


	<div class="pro_re_con">
		<div class="pro_re_area contact_area  fadein fadein-up">
			<h1 id="Contact">お問い合わせ<span>Contact</span></h1>
			<div class="pro_re_service contact_con">
				<div class="contact_flex01">
					<ul>
						<li class="contact_circle"><span>オンラインで<br>全国対応</span></li>
						<li class="contact_circle"><span>担当者が<br>直接ヒアリング</span></li>
					</ul>
					<p>Web会議も対応可能ですので、
						ご相談やご質問など<span class="contact_span">お気軽にお問い合わせください。</span></p>
				</div>
				
				<div class="contact_flex02">
					<div class="contact_flex02_div">
						<span class="mb_su_br">メールでのお問い合わせ</span>
						<a href="" class="mail_area">メールでお問い合わせ</a>
						<p>お問い合わせ区分「ひなたマルシェについて」にチェックをいれていただくと<br>直接弊社担当者よりご連絡いたします。</p>
					</div>
					<div>
						<span class="mb_su_br">お電話でのお問い合わせ</span>
						<a href="tel:0985-64-1430" class="phone_area">0985-64-1430</a>
						<p class="uketuke">受付時間　平日9:00～18:00</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	

	
	
	
	</div>


	
	
	
	
	
	<!--
	
	<div class="container cf">
		<h2 id="type03">
			<p><img src="<?php echo get_template_directory_uri(); ?>/images/marchais_icon.png" alt="" id="producer">みやざきマルシェ</p>
		</h2>
		<p class="alc">宮崎県産品の取り扱いを始めて、“美味しいものは沢山あるけれど、手にとって食べてみなければ誰も知らない”ということを目の当たりにし、<br />
		なんとか宮崎県の良いものをより多くの人へお届けできるか試行錯誤し<strong>【みやざきマルシェ】</strong>という名前でプロジェクトを立ち上げました。</p>
		<p class="alc">スーパーの購買層である20代から60代の女性に向けて、数ある県産品の中から女性の目線で選び、女性の目線でレシピなどを交えて商品をアピールします。</p>
		<p class="alc">さらに、多くの方に宮崎の美味しい県産品を知って頂けるように、Facebookやブログなどのツールも利用し、情報発信を行います。</p>
		<p class="alc">みやざきマルシェでは、各小売店様や生産者様に合わせ、卸販売・委託販売・ネットショップの3形態をご提案致します。</p>
		<ul id="marchaisbtn" class="mt20 cf">
			<li><a href="#01"><img src="<?php echo get_template_directory_uri(); ?>/images/marchais_btn01.png" alt="卸販売" /></a></li>
			<li><a href="#02"><img src="<?php echo get_template_directory_uri(); ?>/images/marchais_btn02.png" alt="委託販売" /></a></li>
			<li><a href="#03"><img src="<?php echo get_template_directory_uri(); ?>/images/marchais_btn03.png" alt="バイヤー様向けネットショップ" /></a></li>
			<li><a href="#04"><img src="<?php echo get_template_directory_uri(); ?>/images/marchais_btn04.png" alt="導入先一例" /></a></li>
		</ul>
	</div>
</div>
<div class="wrap_g">
	<div class="container cf">
		<h4 id="type01">沿革</h4>
		<dl id="marchais_history">
			<dt>2008年</dt>
			<dd>「宮崎地場食産品マーケティングサポート（宮崎県商工会連合会）」に参画。</dd>
			<dt>2010年</dt>
			<dd>同上、「みやざきビジネスサポートセンター事業」に名称変更。</dd>
			<dt>2012年3月</dt>
			<dd>宮崎県商工会連合会の「みやざきビジネスサポートセンター事業」を引き継ぐ。</dd>
			<dt>2012年4月</dt>
			<dd>県外（大阪・京都）のスーパー様への運用を開始。</dd>
			<dt>2012年7月</dt>
			<dd>新規取引先として大分・福岡県内のスーパー3店舗へ県産品販売の委託事業を開始。</dd>
			<dt>2013年7月</dt>
			<dd>既存事業を拡大し「みやざきマルシェ」を開始。</dd>
		</dl>
	</div>
</div>
<div class="wrap_w">
	<div class="container cf" id="01">
		<h4 id="type01">卸販売</h4>
		<p class="alc mt20">買い取りでの販売方式になります。</p>
		<p class="alc">生産者様の販路拡大・促進、生産に関する諸作業（請求他）を代行しております。</p>
		<p class="alc mt20 mb20"><img src="<?php echo get_template_directory_uri(); ?>/images/ｍarche_img01.png" alt=""></p>
		<div class="cf wholesale_merit">
			<div class="left cf">
				<p class="title">小売店様メリット</p>
			
					<ul class="disc">
						<li>まとめて注文</li>
						<li>商品開拓が容易</li>
						<li>納品書：伝票発行</li>
						<li>支払い：請求管理</li>
					</ul>
			</div>
			<div class="right">
				<p class="title">生産者様メリット</p>
					<ul class="disc">
						<li>納品書発行</li>
						<li>販促支援</li>
						<li>支払い：請求管理</li>
					</ul>
			</div>
		</div>
		<h3>サービスフロー</h3>
		<p class="alc mb30"><img src="<?php echo get_template_directory_uri(); ?>/images/ｍarche_img02.png" alt=""></p>
		</div>
		</div>
		
		
		<div class="wrap_g">
	<div class="container cf" id="02">
		<h4 id="type01">委託販売</h4>
		<p class="alc mt20">委託販売とは、小売店様店内に<strong>【宮崎県産品棚】</strong>を設置、または棚をお借りして商品を置き、売上に準じてお支払いすることです。</p>
		<p class="alc">みやざきマルシェでは、小売店様・生産者様の負担にならないよう、<strong>【小ロット納品】</strong>に対応しております(委託のみ)</p>
		<p class="alc mt20 mb20"><img src="<?php echo get_template_directory_uri(); ?>/images/ｍarche_img03.png" alt=""></p>
		<div class="cf merit">
			<div class="left w48 cf">
				<p class="title">小売店様メリット</p>
				<div class="left w48">
					<ul class="disc">
						<li>商品開拓が容易</li>
						<li>販促支援</li>
						<li>代行発注</li>
					</ul>
				</div>
				<div class="left">
					<ul class="disc">
						<li>小ロット納品</li>
						<li>納品書：伝票発行</li>
						<li>支払い：請求管理</li>
					</ul>
				</div>
			</div>
			<div class="right w48">
				<p class="title">生産者様メリット</p>
				<div class="left w48">
					<ul class="disc">
						<li>販促拡大支援</li>
						<li>棚札作成</li>
						<li>POP支援</li>
						<li>賞味期限管理</li>
						<li>在庫/売上管理</li>
					</ul>
				</div>
				<div class="left">
					<ul class="disc">
						<li>情報発信(Facebookブログ)</li>
						<li>納品書発行</li>
						<li>支払い：請求管理</li>
					</ul>
				</div>
			</div>
		</div>
		<h3>サービスフロー</h3>
		<p class="alc mb20"><img src="<?php echo get_template_directory_uri(); ?>/images/ｍarche_img04.png" alt=""></p>
		</div>
		</div>
		
		<div class="wrap_w">
	<div class="container cf" id="03">
		<h4 id="type02">バイヤー様向けネットショップ(BtoB)</h4>
		<p class="alc mt20">宮崎県産品を取り扱うことを前提にした、会員制のBtoBスマートフォンサイトです。</p>
		<p class="alc">小売店様の売場と生産者様をつなぐ、新しい販路開拓支援です。</p>
		<p class="alc mt20 mb20"><img src="<?php echo get_template_directory_uri(); ?>/images/ｍarche_img05.png" alt=""></p>

	<p class="alc"><img src="<?php echo get_template_directory_uri(); ?>/images/ｍarche_img06.png" alt=""></p>
	</div>
	</div>
	
	<div class="wrap_g">
	<div class="container cf" id="04">
		<h4 id="type01">導入先一例</h4>
	<p class="alc mt20">県内外(日南・青島・大阪・兵庫・京都・福岡・大分)のスーパー様や直売所。</p>
	</div>
	</div>
-->
<!-- conent　▲▲--> 
<?php get_footer(); ?>