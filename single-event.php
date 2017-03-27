<?php
/**
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hyphen
 */

get_header(); ?>
	<div id="primary" class="container c-white p-larger">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<a href="/attend#upcoming-events">&laquo; More upcoming events</a></p>
			<h1 class="m-bottom-none"><?php the_title(); ?></h1>
			<div class="clearfix m-bottom-large">
				<div class="g-1_2">
					<p class="m-bottom-none"><?php $date = get_field('event_date', false, false); $date = new DateTime($date); echo $date->format('D M j'); ?> @ <?php the_field('event_time'); ?></p>
					<p class="m-bottom-none"><?php the_field('event_city'); ?>, <?php the_field('event_state'); ?>, <?php the_field('event_country'); ?></p>
					<p class="m-bottom-none"><?php the_field('event_venue'); ?></p>
					<p class="m-bottom-none"><?php the_field('event_address'); ?></p>
				</div>
				<div class="g-1_2">
					<p class="m-bottom-none"><?php the_field('event_cost'); ?></p>
					<p class="m-bottom-none"><?php the_field('event_ages'); ?></p>
					<p class="m-bottom-none"><?php the_field('event_seating'); ?></p>
					<p class="m-bottom-none"><?php the_field('event_notes'); ?></p>
				</div>
			</div>
			<p><a href="<?php the_field('event_tickets'); ?>" class="btn t-large">Attend</a><br/>
		<?php endwhile ?>
		</main>
	</div>

<?php get_footer();
