<?php
/*
Template Name: Members
*/
?>

<?php get_header(); ?>


<?php get_sidebar(); ?>

<div id="contentmap" class="group">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="memberwrapper">
<div class="memberstext">
<img src="<?php bloginfo('template_directory'); ?>/images/flagpart.jpg" title="CEEPUK" alt="CEEPUK" width="200px" height="121px">
"In the growing EU community, organisations can only achieve influence if they work together.  This is particularly true for public employers who can't match private sector campaigning resources.  CEEP, with its privileged status as a recognised social partner, bridges this gap and plays a vital part in helping public enterprises influence EU decision making."<br><br>Elizabeth Zanon<br>Director,<br>NHS European Office.
</div>
	<div class="members">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>



</div>

<div class="login">

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