<?php
/*
Template Name: Utvalda affärer
*/
get_header();
ACFListener::fields('modules');
$i = 0;
$utvalda_referenser = get_posts(array(
    'post_type' => 'utvald_referens',
    'posts_per_page' => -1,
));
?>
</div>
    <div class="related">
        <div class="container">
    <div class="row">
    <div class="related-container">
        <?php
        foreach($utvalda_referenser as $utvald_referens) {
            $related_headline = get_field('related_headline', $utvald_referens->ID);
            $related_country = get_field('related_country', $utvald_referens->ID);
            $related_text = get_field('related_text', $utvald_referens->ID);
            $image = get_the_post_thumbnail($utvald_referens);?>

            <div class="col-lg-4 ref">
                <a class="related-image" href="<?= get_permalink($utvald_referens); ?>">
                    <?=get_the_post_thumbnail($utvald_referens)?>
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



        <?php }  ?>

                </div>
            </div>
        </div>
    </div>



<?php
get_footer(); ?>