<?php
  include 'functions.php';
  head(); 
?>
  <main class="l-whatdo">
    <div class="row">
      <div class="m-with-breadcrumbs">
        <?php breadcrumbs(); ?>

        <h2 class="title-with-breadcrumbs">Выбирайте место для учебы в лучших ВУЗах за рубежем</h2>          
      </div>
    </div>

    <section class="l-search-options">
      <form action="" class="clearfix">
        <div class="row">
          <div class="m-search-option">
            <span class="search-option-title">Страна для учебы</span>
            <select name="" id="" class="search-select">
              <option value="">Великобритания</option>
              <option value="">Украина</option>
              <option value="">Франция</option>
              <option value="">Германия</option>
              <option value="">Китай</option>
              <option value="">Италия</option>
            </select>
          </div>
          <div class="m-search-option">
            <span class="search-option-title">Цель обучения</span>
            <select name="" id="" class="search-select">
              <option value="">Бакалаврат</option>
              <option value="">Магистратура</option>
            </select>
          </div>
          <div class="m-search-option">
            <span class="search-option-title">Специализация</span>
            <select name="" id="" class="search-select">
              <option value="">Медицина</option>
              <option value="">IT</option>
              <option value="">Строительство</option>
              <option value="">Философия</option>
              <option value="">История</option>
            </select>
          </div>
        </div>
      </form>
    </section>
    
    <div class="row">
      <div class="l-articles-wrapper right">
        <?php what2do_block(); ?>
        <?php what2do_block(); ?>
        <?php what2do_block(); ?>
        <?php pagination(); ?>
      </div>

      <div class="l-sidebar left">
        <div class="m-partners">
          <h4 class="m-partners-title">Партнёры</h4>
          <ul class="m-partners-list">
            <li class="m-partners-list-item"><a href="#">Курсы IELTS, TOEFL</a></li>
            <li class="m-partners-list-item"><a href="#">Перевод документов</a></li>
            <li class="m-partners-list-item"><a href="#">Подготовка к собеседованию</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="row">
      <?php trust_us(); ?>
    </div>

  </main>
<?php footer(); ?>