</div>
<div class="split-container <?php

	if($this->getBackground() == 'blue'){
		?> blue-container <?php
	}

	else if($this->getBackground() == 'dark_gray'){
		?> dark-gray-container <?php
	}

	else if($this->getBackground() == 'gray'){
		?> gray-container <?php
	}

	else if($this->getBackground() == 'light_gray'){
		?> light-gray-container <?php
	}

	else if($this->getBackground() == 'very_light_gray'){
		?> very-light-gray-container <?php
	}

	else if($this->getBackground() == 'black'){
		?> black-container <?php
	}
	else if($this->getBackground() == 'white'){
		?> white-container <?php
	}
	?>">

	<div class="container">
        <?php if($this->reverse_check != NULL):?>
        <div class="row split">
            <?php else:?>
            <div id="reverse" class="row split">
                <?php endif;?>
			<div class="col-lg-4 split">
				<img class="split-image" src="<?= $this->getSplitImage() ?>" >
			</div>
			<div class="col-lg-8 split">
				<div class="split-text
				<?php

				if($this->getFontColor() == 'blue'){
					?> blue-font <?php
				}

				else if($this->getFontColor() == 'dark_gray'){
					?> dark-gray-font <?php
				}

				else if($this->getFontColor() == 'gray'){
					?> gray-font <?php
				}

				else if($this->getFontColor() == 'very_light_gray'){
					?> very-light-gray-font <?php
				}


				else if($this->getFontColor() == 'light_gray'){
					?> light-gray-font <?php
				}

				else if($this->getFontColor() == 'black'){
					?> black-font <?php
				}

				else if($this->getFontColor() == 'white'){
					?> white-font <?php
				}

				?>">
					<?= $this->module_text ?></div>
			</div>
		</div>
	</div>
</div>

<div class="container">
