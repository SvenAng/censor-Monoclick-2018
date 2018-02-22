</div>
<?php $i = -1;
$j =-1?>

<div id="carouselControls" class="carousel carousel-fade" data-ride="carousel" data-interval="5000">
    <div class="carousel-inner" role="listbox">
        <?php if( have_rows('slide') ): ?>

        <?php while( have_rows('slide') ): the_row();
        $j ++;
        ?>


        <?php endwhile?>
        <?php endif;?>

    <!--<img class="slide-button display-left" src="<?= get_template_directory_uri(); ?>/assets/slider_pil.png" onclick="plusDivs(-1)">-->
  <?php if( have_rows('slide') ): ?>

    <?php while( have_rows('slide') ): the_row();
      // vars
      $slide_image = get_sub_field('slide_image');
      $slide_text = get_sub_field('slide_text');
      $slide_color = get_sub_field('color');
          $slide_left_arrow = get_sub_field('left_arrow');
          $slide_right_arrow = get_sub_field('right_arrow');
          $image_link = get_sub_field('image_link');
          $i++;
      ?>
          <?php if ($j == 0):?>
              <div class="carousel-item active">
               
                  <?php if($image_link): ?>
                    <a href="<?=$image_link?>"> 
                  <?php endif; ?>
                    <div class='d-block img-fluid' style='background: url(<?=$slide_image['url']?>);'></div>
                  <div class="carousel-caption d-flex d-md-flex     <?php

                  if($slide_color == 'blue'){
                      ?> blue-font <?php
                  }
                  else if($slide_color == 'dark_gray'){
                      ?> dark-gray-font <?php
                  }
                  else if($slide_color == 'gray'){
                      ?> gray-font <?php
                  }
                  else if($slide_color == 'very_light_gray'){
                      ?> very-light-gray-font <?php
                  }
                  else if($slide_color == 'light_gray'){
                      ?> light-gray-font <?php
                  }
                  else if($slide_color == 'black'){
                      ?> black-font <?php
                  }
                  else if($slide_color == 'white'){
                      ?> white-font <?php
                  }
                  ?>">
                      <span id="slide-caption"><?= $slide_text?> </span></div>
                     <?php if($image_link): ?>
                        </a>
                    <?php endif; ?>
              </div>

          <?php elseif($i < 1):?>
              <div class="carousel-item active absolute">
                  <?php if($image_link): ?>
                    <a href="<?=$image_link?>"> 
                  <?php endif; ?>
                    <div class='d-block img-fluid' style='background: url(<?=$slide_image['url']?>);'></div>
                  <div class="carousel-caption d-flex d-md-flex     <?php

                  if($slide_color == 'blue'){
                      ?> blue-font <?php
                  }
                  else if($slide_color == 'dark_gray'){
                      ?> dark-gray-font <?php
                  }
                  else if($slide_color == 'gray'){
                      ?> gray-font <?php
                  }
                  else if($slide_color == 'very_light_gray'){
                      ?> very-light-gray-font <?php
                  }
                  else if($slide_color == 'light_gray'){
                      ?> light-gray-font <?php
                  }
                  else if($slide_color == 'black'){
                      ?> black-font <?php
                  }
                  else if($slide_color == 'white'){
                      ?> white-font <?php
                  }
                  ?>">
                      <span id="slide-caption"><?= $slide_text?> </span></div>
                    <?php if($image_link): ?>
                        </a>
                    <?php endif; ?>
              </div>
              <?php elseif($i != $j): ?>

              <div class="carousel-item absolute">
                  <?php if($image_link): ?>
                    <a href="<?=$image_link?>"> 
                  <?php endif; ?>
                    <div class='d-block img-fluid' style='background: url(<?=$slide_image['url']?>);'></div>
                  <div class="carousel-caption d-flex d-md-flex     <?php


                  if($slide_color == 'blue'){
                      ?> blue-font <?php
                  }
                  else if($slide_color == 'dark_gray'){
                      ?> dark-gray-font <?php
                  }
                  else if($slide_color == 'gray'){
                      ?> gray-font <?php
                  }
                  else if($slide_color == 'very_light_gray'){
                      ?> very-light-gray-font <?php
                  }
                  else if($slide_color == 'light_gray'){
                      ?> light-gray-font <?php
                  }
                  else if($slide_color == 'black'){
                      ?> black-font <?php
                  }
                  else if($slide_color == 'white'){
                      ?> white-font <?php
                  }
                  ?>">
                      <span id="slide-caption"><?= $slide_text?> </span></div>
                    <?php if($image_link): ?>
                        </a>
                    <?php endif; ?>
              </div>


          <?php else : ?>
              <div class="carousel-item">
                  <?php if($image_link): ?>
                    <a href="<?=$image_link?>"> 
                  <?php endif; ?>
                    <div class='d-block img-fluid' style='background: url(<?=$slide_image['url']?>);'></div>
                  <div class="carousel-caption d-flex d-md-flex      <?php

                  if($slide_color == 'blue'){
                      ?> blue-font <?php
                  }
                  else if($slide_color == 'dark_gray'){
                      ?> dark-gray-font <?php
                  }
                  else if($slide_color == 'gray'){
                      ?> gray-font <?php
                  }
                  else if($slide_color == 'very_light_gray'){
                      ?> very-light-gray-font <?php
                  }
                  else if($slide_color == 'light_gray'){
                      ?> light-gray-font <?php
                  }
                  else if($slide_color == 'black'){
                      ?> black-font <?php
                  }
                  else if($slide_color == 'white'){
                      ?> white-font <?php
                  }
                  ?>">
                      <span id="slide-caption"><?= $slide_text?> </span></div>
                    <?php if($image_link): ?>
                        </a>
                    <?php endif; ?>
              </div>

              <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                  <img class="carousel-control-prev-icon slide-button" aria-hidden="true" src="<?=$slide_left_arrow['url']?>">
              </a>
              <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                  <img class="carousel-control-next-icon slide-button" aria-hidden="true" src="<?=$slide_right_arrow['url']?>">
              </a>
<?php endif;?>


      <?php endwhile; ?>
  <?php else : ?>
  <?php endif; wp_reset_query();?>
    </div>
    </div>

    <!-- Button to scroll to top of page -->
<div class="toTheTopWrapper toTheTopButton">
  <img src="<?= get_template_directory_uri(); ?>/assets/topTheTop.png" alt="Till toppen av sidan knapp">
</div>

<div class="container">


