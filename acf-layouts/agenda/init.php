<?php
/*
    This file will be included when a module with the name 'example' is found by ACFListener.
    All the modules fields will be available in 'get_sub_field'

*/
require_once('Agenda.php');

$agenda = new Agenda();

$agenda->agaraganda = get_sub_field('agenda');



$agenda->printHTML();