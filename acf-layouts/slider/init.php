<?php
require_once('Slider.php');
    $slider = new Slider;
    $slider->slidshow = get_sub_field('slide');
$slider->printHTMl();
