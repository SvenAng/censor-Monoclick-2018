<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('Textfield.php');


$textfield = new Textfield();

    $textfield->open_text = get_sub_field('open_text');
    $textfield->width = get_sub_field('width');
    $textfield->printHTML();