<?php
/**
* Template Name: Contact Page Template
*
*
* @package Crystal Meth
* @since Crystal Meth 0.1
*/
get_header(); ?>
<div id="contact" class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<?php if ( have_posts() ) : while( have_posts() ) : the_post();
		     the_content();
		endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>