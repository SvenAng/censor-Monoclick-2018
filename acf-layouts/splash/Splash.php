<?php
	
	class Splash extends ACFModule {
		public function template() {
			return 'splash-template.php';
		}

        public function setTextField($text) {
            $this->text_field = $text ;
        }

        public function getTextField(){
            return $this->text_field;
        }


        public function setSidebarImage($image) {
            $this->sidebarImage = $image ;
        }

        public function getSidebarImage(){
            return $this->sidebarImage;
        }

        public function setSidebarText($text) {
            $this->sidebarText = $text ;
        }

        public function getSidebarText(){
            return $this->sidebarText;
        }


    }