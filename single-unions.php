<?php 

	addCount();
	global $title;
	$title = array(
		'h2',
		__('Förening', 'hhgs')
	);
get_header(); ?>
<?php
	if(have_posts()): the_post();

		$title = get_the_title();
		$intro = get_field('intro');


		$logo = get_field('logo');
		$logo = $logo['sizes']['medium'];

		$contact_image = get_field('contact_image');
		$contact_image = $contact_image['sizes']['medium'];
?>
	<div class="width--medium">
		<?php
			printf('<h1 class="post-title">%s</h1>', get_the_title());
		?>
		<div class="post-content post-content--big">
			<?php
				echo $intro;
			?>
		</div>
	</div><div class="background-blue">
		<div class="width--large">
			<div class="col-container">
				<div class="col--3">
					<?php printf('<img src="%s">', $logo); ?>
				</div><div class="col--3">
					<?php printf('<h3>%s</h3>', get_field('contact_title')); ?>
					<?php printf('<div>%s</div>', get_field('contact_text')); ?>
				</div><div class="col--3">
					<?php printf('<img src="%s">', $contact_image); ?>
				</div>
			</div>
		</div>
	</div><?php
			$paragraphs = get_field('paragraphs');
			if(have_rows('paragraphs')):
				echo '<div class="width--large">';
				echo '<div class="col-container">';
				while(have_rows('paragraphs')): the_row();
					echo '<div class="col--3">';
					printf('<h4>%s</h4>', get_sub_field('title'));
					printf('<div>%s</div>', get_sub_field('text'));
					echo '</div>';
				endwhile;
				echo '</div>';
				echo '</div>';
			endif;
		?>
	</div>
<?php
	endif;
?>

<?php get_footer(); ?>