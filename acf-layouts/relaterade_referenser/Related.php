
<?php

class Related extends ACFModule {
    public function template() {
        return 'related-template.php';
    }
    public function setRelatedReference($image) {
        $this->related_reference = $image ;
    }
    public function getRelatedReference(){
        return $this->related_reference;
    }
}