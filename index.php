<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php if ( have_posts() ) { while ( have_posts() ) : the_post();?>
			
			<div class="col-md-4">

					<a class="img-thumbnail" href="<?php the_permalink(); ?>" alt="Lights" style="width: 100%">
        			<?php the_post_thumbnail(); ?>
					</a>
					<?php the_content(); ?>
				</div>
					

	<?php
	$i++;
endwhile;
} 
?>
</div>
</div>
<?php get_footer(); ?>