<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('Relaterad.php');

$relaterad = new relaterad();
$relaterad->related_headline= get_sub_field('related_headline');
$relaterad->related_country = get_sub_field('related_country');
$relaterad->related_text = get_sub_field('related_text');

var_dump("test");
var_dump($related_text);





$relaterad->printHTML();