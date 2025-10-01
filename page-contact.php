<?php get_header(); ?>
<!--　content　▼▼-->

<h1 id="title_2f"><img src="<?php echo get_template_directory_uri(); ?>/images/contact_title.jpg" alt="お問合せ"></h1>
<div class="wrap_w">
	<div class="container cf">
	<h2 id="type01" style="width:260px;"><p>お問い合わせ先</p></h2>
	<h4 id="type03">お電話でのお問い合わせ</h4>
	<p>0985-64-1430 へお願いいたします。<br>
	受付時間：午前9：00から午後18：00</p>
<br>
	<h4 id="type03">FAXでのお問合せ</h4>
	<p>0985-64-1450へお願いいたします。</p>
<?php if (have_posts()):while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<p>記事がありません</p>
<?php endif; ?>
	</div>
</div>
<!-- conent　▲▲-->
<?php get_footer(); ?>
