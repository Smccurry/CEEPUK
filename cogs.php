<?php
/*
Template Name: Cogs
*/
?>

<?php get_header(); ?>


<?php get_sidebar(); ?>

<div id="contentcogs" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



	<div class="maincogs">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


</div>



<?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<div class="warning">
	<p>Sorry, but you are looking for something that isn't here.</p>
</div>
<?php endif; ?>
<div class="navigation group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

</div>

<div class="mainwrapper">
</div>


</div> 






</div>


<div id="footerhome" class="group">

    <div id="top"><a href="#content">Back to top</a></div>
	<p><a href="<?php bloginfo('url'); ?>/">&copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?></a></p>

</div>

<?php do_action('wp_footer', ''); ?>
<!--//based on a  template by Lucian E. Marin href="http://lucianmarin.com//-->
</body>
</html>

