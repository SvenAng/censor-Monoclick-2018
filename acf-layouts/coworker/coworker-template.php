</div>
<div class="container">
<div class="row justify-content-md-center" id="<?= $this->id?>">
    <?php if($this->id != "no"){?>
  <div class="intro">
    <a class="medarbetare" href="#coworker">Medarbetare</a>
    <a class="konsulter" href="#senior">SENIOR ADVISORS</a>
  </div>
  <hr class="full-width">
    <?php }?>
    <?php $a = 1; ?>
  <?php if( have_rows('person') ): ?>
    <?php while(have_rows('person')): the_row();
      $personalImage = get_sub_field('personImage');
      $name = get_sub_field('name');
      $job_type = get_sub_field('job_type');
      $information = get_sub_field('information');
      $link = get_sub_field('link');
      // $a++;
    ?>
    
      <div class="col-md-5 col-sm-12"> 
        
          <div class="coworker-r1">
            <a href="<?=$link?>"><img src="<?= $personalImage['url']?>"></a>
          </div>
          <div class="coworker-r2">
            <li id="coworker-name"><h2><?= $name ?></h2></li>
            <li id="typ"><?= $job_type?></li>
            <li id="personal-text"><?= $information ?></li>
          </div>
        
      </div>
  
  <?php endwhile; endif?>
</div>
