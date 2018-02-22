<?php

class Gravsten extends ACFModule {
    public function template() {
        return 'gravsten-template.php';
    }


    public function setGravstenLogo($image) {
        $this->logo = $image ;
    }

    public function getGravstenLogo(){
        return $this->logo;
    }



}