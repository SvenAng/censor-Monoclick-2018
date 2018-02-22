<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('Quote.php');

	$quote = new Quote();
    $quote->quote_text = get_sub_field('quote_text');
    $quote->quote_image = get_sub_field('quote_image');



    if($quote->quote_image){

        $imageSource = $quote->quote_image['url'];

        $quote->setQuoteImage($imageSource);
    }





$quote->printHTML();