<?php get_header(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) { while ( have_posts() ) : the_post();?>
			
			<div class="col-md-4" >

				<div class="card">
 					<a href="<?php the_permalink(); ?>" class="card-img-top">
       					<?php the_post_thumbnail( 'image_size', array( 'class' => 'img-responsive img-fluid') ); ?>
					</a>
					<div class="card-body">
    					<p class="card-text"><?php the_content(); ?></p>
  					</div>
					
					
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