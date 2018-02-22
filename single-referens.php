<?php
if(have_posts()): the_post();

    $information = get_field('gravsten');
    $logo = get_sub_field('logo');
    $logo = $logo['url'];
    $popup_information = get_sub_field('popup_information');

    endif; ?>

<?php printf('<img src="%s">', $logo);

ACFListener::fields('referenser');
