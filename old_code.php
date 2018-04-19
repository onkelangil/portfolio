<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php if ( have_posts() ) { while ( have_posts() ) : the_post();?>
			
			<div class="col-md-4" >
				
				<div class="img-thumbnail img-fluid">
 					<a href="<?php the_permalink(); ?>" class="img-fluid img-responsive">
       					<?php the_post_thumbnail( 'image_size', array( 'class' => 'img-responsive img-fluid') ); ?>
					</a>
					<?php the_content(); ?>
					
			</div>
		</div>

	<?php
	$i++;
endwhile;
} 
?>
</div>
</div>

<?php get_footer(); ?>