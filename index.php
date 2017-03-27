<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hyphen
 */


get_header(); ?>

<div id="primary" class="container c-white p-larger">
	<main id="main" class="site-main" role="main">
		<img src="img/hero.jpg" class="m-bottom" width="100%" />
		<div class="clearfix m-bottom-large">
			<section class="g-1_3">
				<p class="t-large"><span class="drop-cap">W</span>itness adults sharing their most embarrassing childhood artifacts (journals, letters, poems, lyrics, plays, home movies, art) with others, in order to reveal stories about their lives.</p>
			</section>
			<section id="homepage-event-list" class="g-2_3 p-left-large">
				<div class="clearfix">
					<h2 class="h3 u-left">Upcoming Events</h2>
					<a href="/attend"><img src="http://getmortified.com/wp-content/uploads/2015/05/seemore4-1.png" class="u-right" width="150px"></a>
				</div>
				<table class="m-bottom t-small">
				test
					<tbody>
						<?php
						$current_date = date('Ymd', strtotime("now"));
						$the_future = date('Ymd', strtotime("+24 months"));
						$args = array( 'post_type' => 'event', 'posts_per_page' => 5, 'meta_key' => 'event_date', 'meta_compare' => 'BETWEEN', 'meta_value' => array($current_date, $the_future), order=> 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						?>
							<tr>
								<td><i class="fa fa-calendar"></i> <?php $date = get_field('event_date', false, false); $date = new DateTime($date); echo $date->format('D M j'); ?></td>
								<td style="width: 25%"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></td>
								<td><i class="fa fa-map-marker"></i> <?php the_field('event_city'); ?>, <?php the_field('event_state'); ?></td>
								<td><i class="fa fa-clock-o"></i> <?php the_field('event_time'); ?></td>
								<td><a href="<?php the_field('event_tickets'); ?>">Attend</a></td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</section>
		</div>
		<div class="clearfix m-bottom-large">
			<div class="g-1_2">
				<section class="slider js-slick-slider">
					<?php
						$args = array( 'post_type' => 'slider' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" class="js-slick-slide t-white">
							<?php the_post_thumbnail(); ?>
							<div class="slider__caption p-small">
								<p class="t-cursive m-bottom-none"><?php the_title(); ?></p>
								<p class="t-small t-italic m-none"><?php echo(get_the_excerpt()); ?></p>
							</div>
						</a>
					<?php endwhile; ?>
				</section>
			</div>
			<div class="g-1_2">

				<?php require get_template_directory() . '/inc/subscribe.php'; ?>

				<div class="social t-centered p-top-small p-left t-centered">
					<h3 class="inline-block m-right m-bottom-none t-larger" style="font-family: Pointy;">Follow Mortified</h3>
					<a href="https://twitter.com/mortified"><i class="t-dark-grey fa fa-2x fa-twitter m-right"></i></a>
					<a href="https://www.facebook.com/mortifiedshow"><i class="t-dark-grey fa fa-2x fa-facebook m-right"></i></a>
					<a href="https://www.instagram.com/mortifiedshow/"><i class="t-dark-grey fa fa-2x fa-instagram m-right"></i></a>
				</div>
			</div>
		</div>
		<div class="m-bottom-none t-centered" id="quotes">
			<div class="">
				<p class="g-1_3 m-bottom-none"><span class="t-cursive t-black t-bold">“A cultural phenomenon!”</span> <span class="u-block t-italic">– Newsweek</span></p>
				<p class="g-1_3 m-bottom-none"><span class="t-cursive t-black t-bold">“Funny, touching, and intensely relatable”</span> <span class="u-block t-italic">– Wired</span></p>
				<p class="g-1_3 m-bottom-none"><span class="t-cursive t-black t-bold">Hilarious</span> <span class="u-block t-italic">– The Atlantic</span></p>
			</div>
		</div>
</div>

<?php get_footer(); ?>

</body>
</html>

