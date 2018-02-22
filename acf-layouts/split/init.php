<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('Split.php');

	$split = new Split();
    $split->module_image = get_sub_field('module_image');
    $split->module_text = get_sub_field('module_text');
    $split->background = get_sub_field('background');
    $split->font_color = get_sub_field('font_color');
    $split->reverse_check = get_sub_field('reverse_check');


    if($split->font_color){
        $split->setFontColor($split->font_color);
    }

    if($split->background){
        $split->setBackground($split->background);
    }



    if($split->module_image){
        $imageSource = $split->module_image['url'];
        $split->setSplitImage($imageSource);
    }



$split->printHTML();