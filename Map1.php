<?php
/*
Template Name: Map1
*/
?>

<?php get_header(); ?>


<?php get_sidebar(); ?>

<div id="contentmap" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="mapwrapper">

	<div class="map1">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


</div>

</div>

<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>


</div>




</div> 






<?php get_footer(); ?>