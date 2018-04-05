<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php if ( have_posts() ) { while ( have_posts() ) : the_post();?>
			
			<div class="col-md-4">
				<?php echo $image = get_the_post_thumbnail($post_id, 'custom-image-thumb'); ?>
				<?php the_content(); ?>
				<button type="button" class="btn btn-link">Link</button>
			</div>
	<?php
	$i++;
endwhile;
} 
?>
</div>
</div>
<?php get_footer(); ?>