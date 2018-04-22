	<?php get_header(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) { while ( have_posts() ) : the_post();?>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4" >
					<div class="view zoom">					
						<a href="<?php the_permalink(); ?>" >
						<?php the_post_thumbnail('custom-image-thumb', array('class' => 'img-responsive img-fluid' ) ); ?>
						<div class="mask flex-center">
							
						</div>
					</a>
					</div>

					<caption>
						<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
					</caption>

				</div>

				<?php
				$i++;
			endwhile;
		} 
		?>
	</div>
</div>

<?php get_footer(); ?>