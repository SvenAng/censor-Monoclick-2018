<?php

class Relaterad extends ACFModule {
    public function template() {
        return 'relaterad-template.php';
    }

    public function setRelateradReference($image) {
        $this->relaterad_reference = $image ;
    }

    public function getRelateradReference(){
        return $this->relaterad_reference;
    }


}