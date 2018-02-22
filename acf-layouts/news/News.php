<?php

class News extends ACFModule {
    public function template() {
        return 'news-template.php';
    }



    public function setNewsImage($image) {
        $this->logga = $image ;
    }

    public function getNewsImage(){
        return $this->logga;
    }


}