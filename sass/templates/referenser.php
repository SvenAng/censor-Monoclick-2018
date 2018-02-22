<?php
	$name = $member->post_title;
	$ID = $member->ID;
	$position = get_field('position', $ID);
	$image = _cloud(get_field('image', $ID));
?><div itemscope itemtype="http://schema.org/Person" class="grid family-member">
	<meta itemprop="worksFor" content="HandelsMarketing">
	<meta itemprop="image" content="<?= _cloud_src($image, array('width' => 2000)); ?>">
	<div class="grid__image" <?php _cloud_bg($image, array('dpr' => '2.0')); ?>></div>
	<div class="grid__overlay"></div>
	<div class="grid__text">
		<h3 class="grid__title" itemprop="name"><?php echo $name;?></h3>
		<span class="grid__position" itemprop="jobTitle"><?php echo $position; ?></span>
		<?php
			if(have_rows('contact', $ID)):
				while(have_rows('contact', $ID)):
					the_row();
					if( get_row_layout() == 'lbl_phone'): ?>
						<br><a href="tel:<?php echo get_sub_field('phone'); ?>" itemprop="telephone"><?php echo get_sub_field('phone'); ?></a>
					<?php elseif( get_row_layout() == 'lbl_email'): ?>
						<br><a href="mailto:<?php echo get_sub_field('e-mail'); ?>" itemprop="email"><?php echo get_sub_field('e-mail'); ?></a>
					<?php elseif( get_row_layout() == 'lbl_linkedin'): ?>
						<br><a href="<?php echo get_sub_field('linkedin'); ?>" itemprop="sameAs"><?php echo get_sub_field('linkedin'); ?></a>
					<?php elseif( get_row_layout() == 'lbl_facebook'): ?>
						<br><a href="<?php echo get_sub_field('facebook'); ?>" itemprop="sameAs"><?php echo get_sub_field('facebook'); ?></a>
					<?php elseif( get_row_layout() == 'lbl_twitter'): ?>
						<br><a href="<?php echo get_sub_field('twitter'); ?>" itemprop="sameAs"><?php echo get_sub_field('twitter'); ?></a>
					<?php elseif( get_row_layout() == 'lbl_instagram'): ?>
						<br><a href="<?php echo get_sub_field('instagram'); ?>" itemprop="sameAs"><?php echo get_sub_field('instagram'); ?></a>
					<?php endif;

				endwhile;
			endif;
		?>
	</div>
</div>