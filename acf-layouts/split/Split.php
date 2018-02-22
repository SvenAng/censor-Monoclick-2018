<?php
	
	class Split extends ACFModule {
		public function template() {
			return 'split-template.php';
		}



        public function setSplitImage($image) {
            $this->module_image = $image ;
        }

        public function getSplitImage(){
            return $this->module_image;
        }

        public function setBackground($backgroundColor) {
            $this->background = $backgroundColor ;
        }

        public function getBackground(){
            return $this->background;
        }


        public function setFontColor($fontColor) {
            $this->font_color = $fontColor ;
        }

        public function getFontColor(){
            return $this->font_color;
        }


    }