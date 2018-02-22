<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('News.php');

$news = new News();
$news->new = get_sub_field('new');
$news->logga = get_sub_field('logga');



if($news->logga){

    $imageSource = $news->logga['url'];

    $news->setNewsImage($imageSource);
}





$news->printHTML();