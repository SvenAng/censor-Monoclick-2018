<div class="row">
  <?php if( have_rows('agenda') ): ?>
    <?php while( have_rows('agenda') ): the_row();
    $text = get_sub_field('text');
    $pdf = get_sub_field('pdf');
    $link = get_sub_field('link');
    ?>
  <div class="col-md-3 agenda">
    <a target ="_blank" href="<?=$link?>"><img src="<?= $pdf['url']?>"></a>
  </div>
  <div class="col-md-9 agenda">
    <div class="agenda-text"><?= $text ?></div>
  </div>
  <hr class="full-width">
  <?php endwhile; endif?>
</div>
