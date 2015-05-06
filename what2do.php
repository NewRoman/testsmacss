<?php
  include 'functions.php';
  head(); 
?>
<main class="what2do">

  <?php breadcrumbs(); ?>

<div class="row large-collapse">
  <h2>Чем заняться</h2>
  <div class="small-2 columns reference">
    <h4>Исследования</h4>
    <a href="">Выставки</a><br>
    <a href="">Раздел 4</a><br>
    <a href="">Раздел 5</a>
    <a href="">Приключения</a>
  </div>
  <div class="small-10 columns">
    <?php what2do_block(); ?>
    <?php what2do_block(); ?>
    <?php what2do_block(); ?>
    <?php pagination(); ?>
  </div>

  <?php trust_us(); ?>
  <?php seo_block(); ?>
  </div>
</main>

<?php footer(); ?>