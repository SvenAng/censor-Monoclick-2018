</div>
<div class="container">
<div class="row">
    <?php if ($this->width == 1){
        ?>
    <div class="col-md-12 open-text" id="full-width">
        <?=$this->open_text; ?>
    </div>
    <?php
        }
    else{
        ?>
        <div class="col-md-12 open-text" id="half-width">
<?php
echo$this->open_text;
?></div>
    <?php
        }
        ?>

</div>

