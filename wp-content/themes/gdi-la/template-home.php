<?php
/**
Template Name: GDILA Home
*
* This template is used to display the GDILA home page.
*
* @package Collective
* @since Collective 1.0
*
*/
get_header();

$post_id = get_the_ID();
$thumb = ( '' != get_the_post_thumbnail() ) ? wp_get_attachment_image_src( get_post_thumbnail_id(), 'collective-featured-large' ) : false; ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php echo $post_id; ?>">

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="feature-img page-banner" <?php if ( ! empty( $thumb ) ) { ?> style="background-image: url(<?php echo $thumb[0]; ?>);" <?php } ?>>
			<h1 id="new-h1" class="headline img-headline"><?php the_title(); ?> 
<!-- NEW: more content overlaid on image -->
		<br>
		<!--<?php $value = get_post_meta( $post_id,"banner-text",true);
		if( $value ) {echo $value;} 
		else {echo 'empty';} ?>*/-->
<!-- END NEW: more content overlaid on image -->
</h1>
<p class="new-sub">Empowering women of diverse backgrounds to achieve their technology goals and build confidence in their careers and every lives.</p>
			<?php the_post_thumbnail( 'collective-featured-large' ); ?>

		</div>
	<?php } else { ?>
		<h1 id="new-h1" class="headline page-headline text-center"><?php the_title(); ?></h1>
		<p class="new-sub">Empowering women of diverse backgrounds to achieve their technology goals and build confidence in their careers and every lives.</p>
	<?php } ?>

	<!-- BEGIN .email -->
	<div class="row new-email">
		<div id="mc_embed_signup">
					<form action="//gdila.us10.list-manage.com/subscribe/post?u=eaf08da442fc9264592085a62&amp;id=79ebd56ee2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
							<div class="mc-field-group">
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>
							<div style="position: absolute; left: -5000px;"><input type="text" name="b_eaf08da442fc9264592085a62_79ebd56ee2" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						</div>
					</form>
				</div>
	</div>
	<!-- BEGIN .row -->
	<div class="row">
	<!-- BEGIN .email -->

		<!-- BEGIN .content -->
		<div class="content">

			<?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>

				<!-- BEGIN .eleven columns -->
				<div class="eleven columns">

					<!-- BEGIN .postarea -->
					<div class="postarea">

						<!-- BEGIN .row -->
						<div class="row news-section" <?php if ( '' != get_theme_mod( 'news_background' ) ) { ?> style="background-image: url(<?php echo get_theme_mod('news_background') ?>); background-repeat: repeat;" <?php } ?>>

								<!-- BEGIN .featured-news -->
								<div class="featured-news">

									<h2>Recent News</h2>

									<?php get_template_part( 'content/home', 'news' ); ?>

								<!-- END .featured-news -->
								</div>

						<!-- END .row -->
						</div>

					<!-- END .postarea -->
					</div>

				<!-- END .eleven columns -->
				</div>

				<!-- BEGIN .five columns -->
				<div class="five columns">

					<?php get_sidebar(); ?>

				<!-- END .five columns -->
				</div>

			<?php else : ?>

				<!-- BEGIN .sixteen columns -->
				<div class="sixteen columns">

					<!-- BEGIN .postarea full -->
					<div class="postarea full">

						<?php get_template_part( 'loop', 'page' ); ?>

					<!-- END .postarea full -->
					</div>

				<!-- END .sixteen columns -->
				</div>

			<?php endif; ?>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .post class -->
</div>

<?php get_footer(); ?>