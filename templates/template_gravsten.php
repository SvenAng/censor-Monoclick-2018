<?php
/*
Template Name: Gravstenar
*/
get_header();
ACFListener::fields('modules');
$i = 0;
$j = 0;

        $transactions = get_posts(array(
            'post_type' => 'transaktion',
            'posts_per_page' => -1,
            'tax_query' => array(
            )
        ));
?>
</div>
    <div class="container">
    <div class="row filtering">
        <li class="filtering" >
            <?php
                    $terms = get_terms('category');

                    if( $terms ){
                        foreach( $terms as $term ) {
                            ?>
                            <ul><span class="filter" onclick="filterTAX('<?=$term->slug?>')"><?=$term->name?></span></ul>
                            <?php
                            }

                }
            ?>
        </li>
        <hr class="full-width">
        </div>
    </div>
<div class="container">
    <div class="row" id="transaction">



        <?php
        foreach($transactions as $transaction) {
            $i++;
            $company_logo = get_field('company_logo', $transaction->ID);
            $company_logo2 = get_field('company_logo2', $transaction->ID);

            $transaction_information = get_field('gravstensinformation', $transaction->ID); //repeater for information in the "tombstone"
            $popup_information = get_field('popup-intro', $transaction->ID); //Wysiwig with information inside the modal
            //$terms = get_field('referens_category', $transaction->ID);
            $link = get_permalink($transaction->ID);
            $size = sizeof($transactions);
            $terms = get_the_category($transaction);
            $date = get_field('date', $transaction->ID);
            $popup_background = get_field('popup_background', $transaction->ID);
            $pre_settings = get_field('pre_settings', $transaction->ID);



            if($pre_settings != NULL){
                $small_category_logo = get_template_directory_uri() . '/assets/Censorikon_agarskifte.png';
            }
            else {
                $small_category_logo = get_field('gravsten_logo', $transaction->ID); //often blue logo used for "ägarskifte"
                $small_category_logo = $small_category_logo['url'];
            }


            include( TEMPLATEPATH . '/includes/templates/transaction.phtml');



        }?>


        <?php
/*
        $transactions = get_posts(array(
            'post_type' => 'transaktion',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'Uncategorized',
                ),
            )
        ));
        ?>


        <?php
        foreach($transactions as $transaction) {
            $i++;
            $company_logo = get_field('company_logo', $transaction->ID);
            $small_category_logo = get_field('gravsten_logo', $transaction->ID); //often blue logo used for "ägarskifte"
            $transaction_information = get_field('gravstensinformation', $transaction->ID); //repeater for information in the "tombstone"
            $popup_information = get_field('popup-intro', $transaction->ID); //Wysiwig with information inside the modal
            $terms = get_field('referens_category', $transaction->ID);
            $link = get_permalink($transaction->ID);
            $size = sizeof($transactions);
            //$taxonomy = get_the_category_by_id($transaction);
            $date = get_field('date', $transaction->ID);
            $popup_background = get_field('popup_background', $transaction->ID);

            include( TEMPLATEPATH . '/includes/templates/transaction.phtml');



        }?>



        <?php

        $transactions = get_posts(array(
            'post_type' => 'transaktion',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'TMT',
                ),
            )
        ));
        ?>


        <?php
        foreach($transactions as $transaction) {
            $i++;
            $company_logo = get_field('company_logo', $transaction->ID);
            $small_category_logo = get_field('gravsten_logo', $transaction->ID); //often blue logo used for "ägarskifte"
            $transaction_information = get_field('gravstensinformation', $transaction->ID); //repeater for information in the "tombstone"
            $popup_information = get_field('popup-intro', $transaction->ID); //Wysiwig with information inside the modal
            $terms = get_field('referens_category', $transaction->ID);
            $link = get_permalink($transaction->ID);
            $size = sizeof($transactions);
            $taxonomy = get_the_category($transaction);
            //var_dump($taxonomy[0]->name);

            $date = get_field('date', $transaction->ID);
            $popup_background = get_field('popup_background', $transaction->ID);

            include( TEMPLATEPATH . '/includes/templates/transaction.phtml');



        }*/?>


    </div>

</div>
<?php
get_footer(); ?>