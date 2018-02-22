<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('Services.php');

    $services = new Services();

    $services->intro = get_sub_field('intro');
    $services->logo = get_sub_field('logo');
    $services->text = get_sub_field('text');
    $services->url = get_sub_field('url');




$services->printHTML();
