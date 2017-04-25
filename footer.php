<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hyphen
 */

?>

</div><!-- #content -->

<footer class="container c-black-dark p-top t-centered" style="margin-bottom: 130px;">
	<div class="container">
		<section class="g-1_4">
			<h3 class="t-white">About Mortified</h3>
			<ul class="list-unset m-bottom">
				<li><a href="/about" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">About</a></li>
				<li><a href="/faq" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">FAQ</a></li>
				<li><a href="/newsletter" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Newsletter</a></li>
				<li><a href="/contact" class="t-dark-grey block t-small">Contact</a></li>
			</ul>
		</section>
		<section class="g-1_4">
			<h3 class="t-white">Team Up With Us</h3>
			<ul class="list-unset m-bottom">
				<li><a href="/participate" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Participate</a></li>
				<li><a href="/start-a-chapter" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Start a Chapter</a></li>
				<li><a href="/about/opp" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Opportunities &amp; Internships</a></li>
			</ul>
		</section>
		<section class="g-1_4">
			<h3 class="t-white">Other Stuff</h3>
			<ul class="list-unset m-bottom">
				<li><a href="/muse" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Art Inspired by the Podcast</a></li>
				<li><a href="http://www.chopshopstore.com/products/mortified-id-tee?variant=15336608643%20target=" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">T-Shirts</a></li>
				<li><a href="/dry-hump-etiquette" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Dry Hump Etiquette</a></li>
			</ul>
		</section>
		<section class="g-1_4">
			<h3 class="t-white">Languages</h3>
			<ul class="list-unset m-bottom">
				<li><a href="/france" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">French</a></li>
				<li><a href="/norway" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Norweigien</a></li>
				<li><a href="http://www.skambyran.se/" class="t-dark-grey block p-bottom-smaller m-bottom-small t-small">Swedish</a></li>
				<li><a href="/netherlands" class="t-dark-grey block t-small">Dutch</a></li>
			</ul>
		</section>

	</div>
</footer>

<?php require get_template_directory() . '/inc/podcast-player.php'; ?>

<?php wp_footer(); ?>

</body>
</html>
