<?php
  include 'functions.php';
  head(); 
?>
  <main class="education education-institutions">
    <?php breadcrumbs(); ?>
    <div class="row">
      <h2>Выбирайте место для учебы в лучших ВУЗах за рубежем</h2>
    </div>
    <form action="" class="education-form clearfix">
      <div class="row">
        <div class="input">
          <span>Страна для учебы</span>
          <select name="" id="" class="dropdown">
            <option value="">Великобритания</option>
            <option value="">Украина</option>
            <option value="">Франция</option>
            <option value="">Германия</option>
            <option value="">Китай</option>
            <option value="">Италия</option>
          </select>
        </div>
        <div class="input">
          <span>Цель обучения</span>
          <select name="" id="" class="dropdown">
            <option value="">Бакалаврат</option>
            <option value="">Магистратура</option>
          </select>
        </div>
        <div class="input">
          <span>Специализация</span>
          <select name="" id="" class="dropdown">
            <option value="">Медицина</option>
            <option value="">IT</option>
            <option value="">Строительство</option>
            <option value="">Философия</option>
            <option value="">История</option>
          </select>
        </div>
      </div>
    </form>
  <?php wide_dropdown(); ?>
    <div class="row">
      <div class="container">
        <div class="content">
          <?php education_institute_main_block(); ?>
          <?php education_institute_main_block(); ?>
          <?php education_institute_main_block(); ?>
          <div class="more">
            <button>Ещё предложения</button>
          </div>
        </div>
        <div class="right-bar">
          <div class="title">
            <i class="icons-check"></i>
            <h4>Гарантии поступления</h4>
          </div>
          <div class="text">
            <p>Наши специалисты сотрудничают с крупнейшими международными рекрутинговыми агентствами.</p>
          </div>
          <?php form_callback(); ?>
          <?php partners(); ?>
        </div>
      </div>
    </div>
    <?php trust_us(); ?>
  </main>
<?php footer(); ?>