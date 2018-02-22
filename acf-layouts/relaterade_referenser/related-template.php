</div>
<div class="container">
<div class="row">
	<div class="relaterad-huvudrubrik">
		<h3><?= $this->sub_head ?></h3>
	</div>

<div class="related-container">
		<?php
		$posts = get_sub_field('referens');
		if( $posts ): ?>

			<?php foreach( $posts as $p ): ?>
				<?php
				$related_headline = get_field('related_headline', $p->ID);
				$related_country = get_field('related_country', $p->ID);
				$related_text = get_field('related_text', $p->ID);
				?>
				<?php $image = get_the_post_thumbnail($p);?>

				<div class="col-lg-4 ref">


					<a class="related-image" href="<?= get_permalink($p); ?>">
						<?=get_the_post_thumbnail($p)?>
					</a>
                    <div class="relaterad-info">
					<span id="related-headline">
						<?=$related_headline?>
					</span>
                    <div class="relaterade-infotext">
                    <img id="related-country"src="<?=$related_country['url']?>">
						<span id="related-text">
							<?=$related_text?>
						</span>
					</div>
                    </div>

				</div>
			<?php endforeach; ?>

		<?php endif; ?>
</div>
	</div>
</div>
