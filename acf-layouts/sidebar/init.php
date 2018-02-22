<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('Sidebar.php');

	$sidebar = new Sidebar();

    $sidebar->sidebarImage = get_sub_field('sidebarImage');
    $sidebar->imageText = get_sub_field('sidebarText');
    $sidebar->sidebarImage2 = get_sub_field('sidebarImage2');
    $sidebar->imageText2 = get_sub_field('sidebarText2');
    $sidebar->sidebarImage3 = get_sub_field('sidebarImage3');
    $sidebar->imageText3 = get_sub_field('sidebarText3');



if($sidebar->sidebarImage){

        $imageSource = $sidebar->sidebarImage['url'];

        $sidebar->setSidebarImage($imageSource);
    }

if($sidebar->sidebarImage2){

    $imageSource = $sidebar->sidebarImage2['url'];

    $sidebar->setSidebarImage2($imageSource);
}

if($sidebar->sidebarImage3){

    $imageSource = $sidebar->sidebarImage3['url'];

    $sidebar->setSidebarImage3($imageSource);
}

	$sidebar->printHTML();