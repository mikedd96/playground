<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package startertheme
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
		
			<div class="home-content">
			<nav class="nav">
  <a href="#" class="nav-item is-active" active-color="orange">Home</a>
  <a href="#" class="nav-item" active-color="green">About</a>
  <a href="#" class="nav-item" active-color="blue">Testimonials</a>
  <a href="#" class="nav-item" active-color="red">Blog</a>
  <a href="#" class="nav-item" active-color="rebeccapurple">Contact</a>
  <span class="nav-indicator"></span>
</nav>


		</div>

	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
