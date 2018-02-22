<div class="row splash">
	<div class="col-md-8">
		<div class="headline"> <h1><?= $this->headline ?></h1></div>
		<div class="preamble"> <?= $this->preamble ?></div>
		<hr>
		<div class="text-field"><?= $this->text_field ?></div>
	</div>
	<div class="col-md-4 sidebar">
		<?php if( have_rows('sidebar') ): ?>
		<?php while( have_rows('sidebar') ): the_row();
		$image = get_sub_field('sidebarImage');
		$text = get_sub_field('sidebarText');
		$link = get_sub_field('link');
		?>

			<?php if($link != null):?>
        <a href ="<?=$link?>"><img class="sidebar-image" src="<?php echo $image['url']; ?>" /></a>
                    <div class="image-text"><?= $text?> </div>
                    <?php else:?>
                    <?php if($image != null):?>
                        <img class="sidebar-image" src="<?php echo $image['url']; ?>" />
                    <?php endif;?>
                    <div class="image-text"><?= $text?> </div>
                <?php endif;?>

		<?php endwhile; endif?>
	</div>
</div>
</div>

