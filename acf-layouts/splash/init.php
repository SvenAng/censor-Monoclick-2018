<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('Splash.php');

	$splash = new Splash();

    $splash->text_field = get_sub_field('text_field');
    $splash->headline = get_sub_field('headline');
    $splash->preamble = get_sub_field('preamble');

    $splash->sidebar = get_sub_field('sidebar');


    $splash->printHTML();
