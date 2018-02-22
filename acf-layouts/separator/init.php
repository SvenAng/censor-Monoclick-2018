<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('Separator.php');

$separator = new Separator();

$separator->avskiljare = get_sub_field('avskiljare');

$separator->printHTML();