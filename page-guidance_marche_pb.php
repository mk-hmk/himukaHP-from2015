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
<!--　content　▼▼-->
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
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/">ひなたこねくととは？<p>HINATA Connect</p></a><span class="circle"></span></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Producer">生産者様<p>Producer</p></a><span class="circle"></span></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Retailing">小売店様<p>Retailing</p></a><span class="circle"></span></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche_pb/">PB<p>Private Brand</p></a><span class="circle"></span></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Follow">公式SNS<p>Follow me</p></a><span class="circle"></span></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Contact">お問合せ<p>Contact</p></a><span class="circle"></span></li>
				</ul>
			</div>
			<div class="Mobile_menu">
				<ul>
					<li class="Mobile_menu01"><a href="<?php echo get_template_directory_uri(); ?>/guidance_marche/">ひなたこねくととは？<p>HINATA Marché</p></a><span class="circle"></span></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Producer">生産者様<p>Producer</p></a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Retailing">小売店様<p>Retailing</p></a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche_pb/">PB<p>Private Brand</p></a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Follow">公式SNS<p>Follow me</p></a></li>
					<li><a href="<?php bloginfo('url'); ?>/guidance_marche/#Contact">お問合せ<p>Contact</p></a></li>
				</ul>
			</div>

			<div class="pb_intro_con">
				<div class="pb_intro_text intro_myzksenbei">
					<img src="<?php echo get_template_directory_uri(); ?>/images/hinatapb_logo.png" alt="みやざきせんべいロゴ" class="myzksnbi_logo fadein fadein-up">
					<p class="fadein fadein-up">
						今日のおやつやお土産などにもぴったりな「みやざきせんべい」が出来ました。<br><br>
						製造は、宮崎の老舗菓子店・中田製菓さん。<br>
						宮崎県産素材を使って作ったおせんべいに、宮崎らしい絵柄の焼印を1つ1つ手作業で押しました。<br><br>
						子どもから大人まで楽しめる、どこか懐かしい味わい。<br>
						絵柄を見ながら、おせんべいを味わいながら、楽しいひとときをお過ごしください。
					</p>
				</div>
			</div>

			<div class="pb_illust_intro illust_intro_con">
				<div class="illust_intro_title fadein fadein-up">
					<h1>絵柄紹介</h1>
					<p>おせんべいを押すと、絵柄の紹介をご覧いただけます。</p>
				</div>
				<div class="illust_modal_area">
					<div class="modal-inner fadein fadein-up">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ikoma.png" alt="絵柄_生駒高原" class="openModal style_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/obi-castle.png" alt="絵柄_飫肥城" class="openModal style_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/saitobaru-kohun.png" alt="絵柄_西都原古墳群" class="openModal style_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/sekinoo.png" alt="絵柄_関之尾滝" class="openModal style_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/takachiho-kyo.png" alt="絵柄_高千穂峡" class="openModal style_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/toimisaki.png" alt="絵柄_都井岬" class="openModal style_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/hyuga-misaki.png" alt="絵柄_日向岬" class="openModal style_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/horikiri-touge.png" alt="絵柄_堀切峠" class="openModal style_img">
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/ikoma01.jpg" alt="生駒高原画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>生駒高原<span class="txt_space">Ikoma Plateau</span></h1>
									<p>小林市</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/SRKuLbw5UCHWHWmFA" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/obijo01.jpg" alt="飫肥城画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>飫肥城<span class="txt_space">Obi Castle</span></h1>
									<p>日南市</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/cJW4SVS6sEcFgHqu7" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/saitobaru01.jpg" alt="西都原古墳群画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>西都原古墳群<span class="txt_space">Saitobaru Burial Mounds</span></h1>
									<p>西都市</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/SRKuLbw5UCHWHWmFA" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/sekinoo01.jpg" alt="関之尾滝画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>関之尾滝<span class="txt_space">Sekinoo Falls</span></h1>
									<p>都城市</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/JCfsyRqVuvT85qzW7" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/takatihokyou01.jpg" alt="高千穂峡画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>高千穂峡<span class="txt_space">Takachiho Gorge</span></h1>
									<p>高千穂町</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/xdFfj3eoZR3NhzQo8" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/toimisaki01.jpg" alt="都井岬画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>都井岬<span class="txt_space">Cape Toi</span></h1>
									<p>串間市</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/uFZaecxXBPTStm9k9" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hyugamisaki01.jpg" alt="日向岬画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>日向岬<span class="txt_space">Cape Hyuga</span></h1>
									<p>日向市</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/CHvenw6SKNKkL2bc6" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modalArea">
					<div class="modalBg"></div>
					<div class="modalWrapper">
						<div class="modalContents" id="modal-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/horikiri01.jpg" alt="堀切峠画像" class="poi_image">
							<div class="poi_intro_con">
								<div class="poi_title">
									<h1>堀切峠<span class="txt_space">Horikiri Pass</span></h1>
									<p>宮崎市</p>
								</div>
								<div class="poi_intro_text">
									<a href="https://maps.app.goo.gl/pABgLM7rpzKUmwdp8" target="_blank" class="map_link">この場所をマップで確認する</a>
									<div class="poi_intro_text">
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
										テキストが入ります。テキストが入ります。テキストが入ります。
									</div>
									<button class="closeModal back_to_list">一覧へもどる</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="pro_re_area sns_area  fadein fadein-up">
				<h1 id="Follow">公式SNS<span>Follow me</span></h1>
				<div class="sns_con">
					<img src="<?php echo get_template_directory_uri(); ?>/images/inst_img.png" class=" pc_su_br">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mb_inst_img.png" class=" mb_su_br">
				</div>
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
						<p>お問い合わせ区分「ひなたこねくとについて」にチェックをいれていただくと<br>直接弊社担当者よりご連絡いたします。</p>
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


<!-- conent　▲▲--> 
<?php get_footer(); ?>