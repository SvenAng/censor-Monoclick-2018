<?php

    require_once('Coworker.php');

    $coworker = new Coworker();

    $coworker->co_headline = get_sub_field('co_headline');
    $coworker->id = get_sub_field('id');
    $coworker->personal = get_sub_field('personal');



    $coworker->printHTML();