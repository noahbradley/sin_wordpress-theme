<?php get_header(); ?>
<section id="topbar">
<div class="container">
	<div class="row">
		<h1 class="eight columns offset-by-two"><a href="https://thesinofman.com"><img src="https://thesinofman.com/images/The-Sin-of-Man_logo_transparent_small.png" width="100%" /><span style="display:none;">The Sin of Man</span></a></h1>
	</div>
</div>
</section>

<section id="leadin">
	<div class="container">
		<div class="row">
			<div class="eight columns offset-by-two">
				<p>I'm <a href="https://noahbradley.com">Noah Bradley</a> and <strong>The Sin of Man</strong> is a world that I am creating, designing, painting, and writing. It is a primal fantasy world, full of somber mystery, faceless giants, and wandering nomads.</p>
			</div>
		</div>
	</div>
</section>

<section id="archive" role="main">
<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	?>

	<img src="<?php the_post_thumbnail_url( 'large' ); ?>" width="100%" id="feature" />

	<?php
	} 
	?>
		<div id="post-<?php the_ID(); ?>" class="ten columns offset-by-one">
		<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
		<h6>By <?php the_author_link(); ?>, published on <?php the_time( get_option( 'date_format' ) ); ?><br/><?php echo get_field( "word_count" ); ?> words. Estimated reading time: <?php echo get_field( "reading_time" ); ?>.</h6>
		</div>
	</div>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
</section>
<div class="container">
<?php get_template_part( 'footer', 'list' ); ?>
</div>
<?php get_footer(); ?>