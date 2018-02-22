<?php
get_header();
?>
<?php
$ID = get_the_ID();
$link = get_the_permalink();

$client = get_field('client', $ID);
$client = $client->post_title;
$case_title = get_the_title();
$casetitle = get_field('case_title', $ID);
$image = get_field('image', $ID);
$image = _cloud($image[0]);
$images = get_field('image', $ID);
$background = get_field('background', $ID);
$solution = get_field('solution', $ID);
$desc = get_field('case_desc', $ID);
$company_link = get_field('foretagslank', $ID);
?>
    <div class="content">
        <div <?php _cloud_bg($image, array('dpr' => '2.0')); ?> style="background-size: cover; height: 25em; margin: -4em -2em 4em -2em; text-align: center; color: #ffffff;position: relative;">
            <div style="position: absolute; top: 0; left: 0;right: 0;bottom: 0;background-color: #000000;opacity: 0.5;"></div>
            <div style="position: absolute;bottom: 0; top: 40% ;left: 0;right: 0;padding: 0 1em 1em 1em;">
                <h1><?php echo $casetitle; ?></h1>
                <h5 style="line-height: 4em;"><?php echo $client; ?></h5>
                <span>test</span>
            </div>
            <div style="width: 2em; height: 2em; margin-left:-1em; left:50%; background-color: #f7bed2; position: absolute; bottom: -1em; border-radius: 3em; font-size: 1.2em; color: #ffffff; line-height: 2em;">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
        </div>

        <div class="desc">
            <?php echo $desc; ?>
        </div>

        <div class="post-tags">
            <h5 style="text-align: center; margin-bottom: 4em; margin-top: 1.5em;">
                <?php
                $tags = get_the_terms($ID, 'portfolio_filter');
                if(is_array($tags)) {
                    foreach($tags as $tag):
                        printf('<a style="color:#f7bed2;" href="%s"><span>#</span>%s</a> ', get_term_link($tag->term_id, 'portfolio_filter'), str_replace(' ', '', strtolower($tag->name)));
                    endforeach;
                }
                ?>
            </h5>
        </div>
        <style>
            .post-share {
                text-align: center;
            }
            .desc {
                max-width: 55em;
                margin: 0 auto;
            }
            .desc::first-letter {
                float: left;
                color: #f7bed2;
                font-size: 3.5em;
                line-height: .8em;
                padding-top: 4px;
                padding-right: 8px;
                padding-left: 3px;
                font-family: Georgia;
            }
        </style>
        <div class="post-share">
            <h5>Dela caset</h5>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>" target="_window">
                <span class="fa fa-facebook"></span>
            </a><a href="https://twitter.com/intent/tweet?url=<?php echo $link; ?>" target="_window">
                <span class="fa fa-twitter"></span>
            </a><a href="https://www.linkedin.com/cws/share?url=<?php echo $link; ?>" target="_window">
                <span class="fa fa-linkedin"></span>
            </a>
        </div>
    </div>

    </div>
<?php get_footer() ?>