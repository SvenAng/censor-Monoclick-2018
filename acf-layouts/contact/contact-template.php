</div>
<div class="container">
    <div class="row">
        <div class="related-container">

        <?php if( have_rows('office') ): ?>
        <?php while(have_rows('office')): the_row();
        $image = get_sub_field('image');
        $information = get_sub_field('information');
        ?>
                    <div class="col-lg-4 ref contact">
                        <img class="related-image" src="<?=$image['url']?>">
                        <div class="contact"> <?=$information?></div>
                    </div>
            <?php endwhile; endif?>
    </div>
    </div>
</div>
