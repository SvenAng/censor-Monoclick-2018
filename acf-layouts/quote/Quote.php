<?php
	
	class Quote extends ACFModule {
		public function template() {
			return 'quote-template.php';
		}



        public function setQuoteImage($image) {
            $this->quote_image = $image ;
        }

        public function getQuoteImage(){
            return $this->quote_image;
        }


    }