<?php
/**
 * Template Name: Attend
 *
 */


get_header(); ?>

	<div id="primary" class="container c-white p-larger">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
					the_title( '<h1 class="page-title t-centered">', '</h1>' );
			the_content();
			endwhile; ?>

			<h3 id="upcoming-events">Upcoming events</h3>

			<table class="m-bottom t-small">
				<tbody>
					<?php
					$current_date = date('Ymd', strtotime("now"));
					$the_future = date('Ymd', strtotime("+24 months"));
					$args = array( 'post_type' => 'event', 'posts_per_page' => 5, 'meta_key' => 'event_date', 'meta_compare' => 'BETWEEN', 'meta_value' => array($current_date, $the_future), order=> 'ASC' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<tr>
							<td><i class="fa fa-calendar"></i>  <?php $date = get_field('event_date', false, false); $date = new DateTime($date); echo $date->format('D M j'); ?></td>
							<td style="width: 25%"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></td>
							<td><i class="fa fa-map-marker"></i> <?php the_field('event_city'); ?>, <?php the_field('event_state'); ?></td>
							<td><i class="fa fa-clock-o"></i> <?php the_field('event_time'); ?></td>
							<td><a href="<?php the_field('event_tickets'); ?>">Attend</a></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>


		</main>
	</div>

<?php
get_footer();
