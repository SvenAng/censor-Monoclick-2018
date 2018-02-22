
<div class="row">

  <!-- Intro text -->
  <div class="col-md-12 services-intro">
      <?= $this->intro?>
  </div>
    <div class="services-container">


    <!-- Services -->
    <?php $i = 0?>
    <?php if( have_rows('services') ): ?>
    <?php
    while( have_rows('services') ): the_row();
    $i++;
    $image = get_sub_field('logo');
    $text = get_sub_field('text');
    $url = get_sub_field('url');
    ?>
    <?php if ($i < 4): ?>
    <div class="col-md-3 services">
      <a href="<?= $url; ?>">
        <div class="services-text">
        <img class="services-logo" src="<?= $image['url']; ?>" />
        <p><?=$text?></p>
        </div>
      </a>
    </div>

  <?php elseif ($i > 3):?>
    <div class="col-md-3 services" id="no-border">
      <a href="<?= $url; ?>">
        <div class="services-text">
          <img class="services-logo" src="<?= $image['url']; ?>" />
          <p><?=$text?></p>
        </div>
      </a>
    </div>

    <?php endif?>
    <?php endwhile; endif?>
    </div>
</div>

