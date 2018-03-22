<?php get_header(); ?>

<?php 
$i =0;
?>
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) { while ( have_posts() ) : the_post();?>
			<?php
			if (i == 3) {
				$i =0;
				?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
			}
			?>
			<div class="col-md-4">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>

	</div>
	<?php
	$i++;
endwhile;
} 
?>

</div>
<?php get_footer(); ?>