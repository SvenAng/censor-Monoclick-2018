<?php
	
	class Sidebar extends ACFModule {
		public function template() {
			return 'sidebar-template.php';
		}


        public function setSidebarImage($image) {
            $this->sidebarImage = $image ;
        }

        public function getSidebarImage(){
            return $this->sidebarImage;
        }

        public function setSidebarImage2($image) {
            $this->sidebarImage2 = $image ;
        }

        public function getSidebarImage2(){
            return $this->sidebarImage2;
        }

        public function setSidebarImage3($image) {
            $this->sidebarImage3 = $image ;
        }

        public function getSidebarImage3(){
            return $this->sidebarImage3;
        }


        public function setImageText($text) {
            $this->imageText = $text ;
        }

        public function getImageText(){
            return $this->imageText;
        }

    }