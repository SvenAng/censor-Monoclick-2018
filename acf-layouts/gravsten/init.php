<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('Gravsten.php');


    $gravsten = new Gravsten();

    $gravsten->logo = get_sub_field('company_logo');
    $gravsten->gravstensinformation = get_sub_field('gravstensinformation');
    $gravsten->popup_information = get_sub_field('popup_information');


    if($gravsten->logo){
        $imageSource = $gravsten->logo['url'];
        $gravsten->setGravstenLogo($imageSource);
    }




$gravsten->printHTML();