<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('Related.php');
$related = new related();
$related->related_reference = get_sub_field('related_references');
$related->sub_head = get_sub_field('sub_head');
if ($related->related_reference){
    $related->setRelatedReference($related->related_reference);
}
$related->printHTML();