<?php
class Slider extends ACFModule {
    public function template() {
        return 'slider-template.php';
    }
    public function setFontColor($fontColor) {
        $this->font_color = $fontColor ;
    }
    public function getFontColor(){
        return $this->font_color;
    }
}
