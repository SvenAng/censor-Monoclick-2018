<?php
/*
Template Name: Nyheter
*/
get_header();
ACFListener::fields('modules');
$i = 0;
?>

    <div class="row news">

        <?php
        $nyheter = get_posts(array(
            'post_type' => 'nyheter',
            'posts_per_page' => -1,
        ));



        foreach($nyheter as $nyhet) {
            $logo = get_field('logo', $nyhet->ID);
            $new = get_field('new', $nyhet->ID);
            $i++;
            $date = date("Y-m-d", strtotime($nyhet->post_date));
            ?>

            <?php if ($i <= 10):?>
                <div class="news-container">
                    <div class="col-md-12 date"><span class="news-date"><?=$date?></span></div>
                        <div class="col-md-7 news">
                        <div class="news-text"><?= $new ?></div>
                    </div>
                    <div class="col-md-5 news">
                        <img src="<?= $logo['url'] ?>">
                    </div>
                    <hr class="full-width">

                </div>

            <?php elseif ($i > 10):?>
                <div class="news-container hidden">
                    <div class="col-md-12 date"><span class="news-date"><?=$date?></span></div>

                    <div class="col-md-7 news">
                        <div class="news-text"><?= $new ?></div>
                    </div>
                    <div class="col-md-5 news">
                        <img src="<?= $logo['url'] ?>">
                    </div>
                    <hr class="full-width">

                </div>
            <?php endif;
        }?>
        <?php if(get_locale()=='sv_SE'): ?>
            <button class="contact-button" id="more-news" onclick="readMore()">&#62; Visa alla</button> 
        <?php else: ?>
            <button class="contact-button" id="more-news" onclick="readMore()">&#62; Show all</button>
        <?php endif; ?>
    </div>
    </div>


<?php
get_footer();

