<?php get_header() ?>


	<main>
		<div class="vmain">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="" class="pc-img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="" class="imgtext pc-img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="" class="sp-img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt=""
			class="imgtext sp-img">
		</div>

		<p class="words">進化し続ける「街」アメリカンビレッジマガジン</p>

		<div class="content">
			<h2 class="ctitle">Latest Articles</h2>

			<div class="post">
				<?php if (have_posts()); ?>
				  <?php while (have_posts()): the_post(); ?>
				<div class="post1 post-size unreade">
          <?php get_the_post_thumbnail(); ?> 
					<p class="date"><?php the_date("Y / n / j"); ?>
</p>
					<p class="come"><?php the_title(); ?>
</p>
					<p class="read"><a href="" class="under">READ MORE</a></p>
				</div>
				   <?php endwhile; ?>
				<?php endif; ?>

				<div class="post2 post-size unreade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post_img_2.png" alt="">
					<p class="date">2018 / 5 / 19</p>
					<p class="come">あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
					<p class="read"><a href="" class="under"></a>READ MORE</p>
				</div>
				<div class="post3 post-size unreade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post_img_3.png" alt="">
					<p class="date">2018 / 5 / 18</p>
					<p class="come">ラソナの社内はこんなのよ</p>
					<p class="read"><a href="" class="under"></a>READ MORE</p>
				</div>
			</div>
			<div class="post">
				<div class="post4 post-size unreade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post_img_4.png" alt="">
					<p class="date">2018 / 5 / 20</p>
					<p class="come">おしゃれカフェがありますよ</p>
					<p class="read"><a href="" class="under"></a>READ MORE</p>
				</div>
				<div class="post5 post-size unreade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post_img_5.png" alt="">
					<p class="date">2018 / 5 / 19</p>
					<p class="come">あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
					<p class="read"><a href="" class="under"></a>READ MORE</p>
				</div>
				<div class="post6 post-size unreade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post_img_6.png" alt="">
					<p class="date">2018 / 5 / 18</p>
					<p class="come">ラソナの社内はこんなのよ</p>
					<p class="read"><a href="" class="under"></a>READ MORE</p>
				</div>
			</div>


		</div>


	</main>

<?php get_footer() ?>
