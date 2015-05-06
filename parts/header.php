<!DOCTYPE html>
<html lang="ru">
  <head>
    <title></title>
    <meta charset="utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,600,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/bower_components/select2/select2.css">
    <link rel="stylesheet" href="/bower_components/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bower_components/easydropdown/themes/easydropdown.css">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/highslide-with-gallery.packed.js"></script>
    <script type="text/javascript" src="/js/highslide.config.js" charset="utf-8"></script>
  </head>
  <body>
  <!-- modal window -->
    <!-- Callback -->
    <div id="callback" class="reveal-modal modal_window hide_message header" data-reveal>
      <form action="">
        <div class="wrap_content">
          <a class="close-reveal-modal">&#215;</a>
          <h2>Заказать обратный звонок</h2>
          <input type="text" placeholder="Как Вас зовут?">
          <input class="phone" type="text" placeholder="Номер телефона">
        </div>
        <div class="small-12 columns footer">
          <button type="submit" data-reveal-id="success">Передзвонить</button>
        </div>
      </form>
    </div>
    <!-- Consultation -->
    <div id="consultation" class="reveal-modal modal_window hide_message header" data-reveal>
      <form action="">
        <div class="wrap_content">
          <a class="close-reveal-modal">&#215;</a>
          <h2>Желаете навести справку?</h2>
          <textarea name="" id="" placeholder="Задайте ваш вопрос"></textarea>
          <input type="email" placeholder="E-mail">
          <input type="text" placeholder="Как Вас зовут?">
          <input class="phone" type="text" placeholder="Телефон">
        </div>
        <div class="small-12 columns footer">
          <button type="submit" data-reveal-id="success">Отправить</button>
        </div>
      </form>
    </div>
    <!-- Success -->
    <div id="success" class="reveal-modal modal_window hide_message success_report header" data-reveal>
      <div class="wrap_content">
        <a class="close-reveal-modal">&#215;</a>
        <h2>Спасибо, все получилось!</h2>
        <p>Письмо отправлено просторами<br> широкого интернета</p>
        <p><i>...и если оно не затеряется<br> в папке спама, то мы Вам обязательно<br> передзвоним, наверное</i></p>
      </div>
      <div class="small-12 columns footer">
        <button type="submit" data-reveal-id="success_report">закрыть окно</button>
      </div>
    </div>
    <div class="wrapper">
      <header class="m-header">
        <div class="header-top clearfix">
          <div class="row">


            <div class="header-city">
              <select name=""  id="city" class="header-city-select" data-city="header">
                <option value="(044) 564-14-11">Киев</option>
                <option value="(045) 234-14-12">Одесса</option>
                <option value="(046) 236-14-13">Николаев</option>
                <option value="(047) 106-14-14">Днепропетровск</option>
              </select>
            </div>
            <div class="header-phone">
              <i class="icons-phone"></i>
              <span data-city-phone><i>(044)</i> <span>206-14-10</span></span>
            </div>



            <div class="header-call-back">
              <a href="" data-reveal-id="callback" >Обратный звонок</a>
            </div>
            <div class="header-consultation">
              <button data-reveal-id="consultation">Онлайн консультация</button>
            </div>
            <div class="header-look">
              <i class="icons-star"></i>
              <a href="">Вы смотрели (5)</a>
            </div>
            <div class="header-course">
              <span><i>1€</i>=25 грн</span>
              <span><i>1$</i>=20 грн</span>
              <span><i>1Р</i>=8 грн</span>
            </div>
          </div>
        </div>
        <div class="m-header-main clearfix">
          <div class="row">
            <div class="haeder-main-logo left">
              <a href="/index.php">
                <img src="images/logo.png" alt="">
              </a>
            </div>
            <div class="m-megamenu clearfix right"> <!--класс .to_right выравнивает меню по правому краю страницы-->
              <ul class="megamenu-button-group"> <!-- -->
                <li>
                  <a class="megamenu-item-nav" href="#">Туры</a>
                  <div class="megamenu-item-content">
                    <div>
                      <a href="" class="content-item-head">Страны</a>
                      <ul class="inline-list">
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Польша</a></li>
                        <li><a href="#">Испания</a></li>
                        <li><a href="#">Турция</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Туры</a>
                      <ul class="inline-list">
                        <li><a href="#">Туры</a></li>
                        <li><a href="#">Горящие</a></li>
                        <li><a href="#">по Украине</a></li>
                        <li><a href="#">Уикенд</a></li>
                        <li><a href="#">Драйв</a></li>
                        <li><a href="#">Романтические</a></li>
                        <li><a href="#">Горнолыжные</a></li>
                        <li><a href="#">другие туры</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Обучение</a>
                      <ul class="inline-list">
                        <li><a href="#">Языковые курсы</a></li>
                        <li><a href="#">Высшее образование</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Справка</a>
                      <ul class="inline-list">
                        <li><a href="#">Визы</a></li>
                        <li><a href="#">Посольства</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="megamenu-item-nav akcii_menu" href="#">Акции</a>
                  <div class="megamenu-item-content">
                    <div>
                      <a href="" class="content-item-head">Туры</a>
                      <ul class="inline-list">
                        <li><a href="#">Туры</a></li>
                        <li><a href="#">Горящие</a></li>
                        <li><a href="#">по Украине</a></li>
                        <li><a href="#">Уикенд</a></li>
                        <li><a href="#">Драйв</a></li>
                        <li><a href="#">Романтические</a></li>
                        <li><a href="#">Горнолыжные</a></li>
                        <li><a href="#">другие туры</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Обучение</a>
                      <ul class="inline-list">
                        <li><a href="#">Языковые курсы</a></li>
                        <li><a href="#">Высшее образование</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Справка</a>
                      <ul class="inline-list">
                        <li><a href="#">Визы</a></li>
                        <li><a href="#">Посольства</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="megamenu-item-nav" href="#">Чем заняться</a>
                  <div class="megamenu-item-content ">
                    <div>
                      <a href="" class="content-item-head">Страны</a>
                      <ul class="inline-list">
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Польша</a></li>
                        <li><a href="#">Испания</a></li>
                        <li><a href="#">Турция</a></li>
                      </ul>
                      <ul class="inline-list">
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Словакия</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Туры</a>
                      <ul class="inline-list">
                        <li><a href="#">Туры</a></li>
                        <li><a href="#">Горящие</a></li>
                        <li><a href="#">по Украине</a></li>
                        <li><a href="#">Уикенд</a></li>
                        <li><a href="#">Драйв</a></li>
                        <li><a href="#">Романтические</a></li>
                        <li><a href="#">Горнолыжные</a></li>
                        <li><a href="#">другие туры</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Обучение</a>
                      <ul class="inline-list">
                        <li><a href="#">Языковые курсы</a></li>
                        <li><a href="#">Высшее образование</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head act">Справка</a>
                      <ul class="inline-list">
                        <li><a href="#">Визы</a></li>
                        <li><a href="#">Посольства</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="megamenu-item-nav act" href="#">Luxury</a>
                  <div class="megamenu-item-content">
                    <div>
                      <a href="" class="content-item-head">Страны</a>
                      <ul class="inline-list">
                        <li><a href="#">Романтические</a></li>
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Польша</a></li>
                        <li><a href="#">Испания</a></li>
                        <li><a href="#">Турция</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="megamenu-item-nav act" href="#">Авиа билеты</a>
                  <div class="megamenu-item-content to_right">
                    <div>
                      <a href="" class="content-item-head">Туры</a>
                      <ul class="inline-list">
                        <li><a href="#">Туры</a></li>
                        <li><a href="#">Горящие</a></li>
                        <li><a href="#">по Украине</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Драйв</a></li>
                        <li><a href="#">Романтические</a></li>
                        <li><a href="#">Горнолыжные</a></li>
                        <li><a href="#">другие туры</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Обучение</a>
                      <ul class="inline-list">
                        <li><a href="#">Языковые курсы</a></li>
                        <li><a href="#">Высшее образование</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Справка</a>
                      <ul class="inline-list">
                        <li><a href="#">Визы</a></li>
                        <li><a href="#">Посольства</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="megamenu-item-nav" href="#">Бронирование</a>
                  <div class="megamenu-item-content to_right">
                    <div>
                      <a href="" class="content-item-head">Страны</a>
                      <ul class="inline-list">
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Польша</a></li>
                        <li><a href="#">Испания</a></li>
                        <li><a href="#">Драйв</a></li>
                      </ul>
                      <ul class="inline-list">
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Романтические</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Украина</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Туры</a>
                      <ul class="inline-list">
                        <li><a href="#">Туры</a></li>
                        <li><a href="#">Горящие</a></li>
                        <li><a href="#">по Украине</a></li>
                        <li><a href="#">Уикенд</a></li>
                        <li><a href="#">Турция</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Горнолыжные</a></li>
                        <li><a href="#">другие туры</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Обучение</a>
                      <ul class="inline-list">
                        <li><a href="#">Языковые курсы</a></li>
                        <li><a href="#">Высшее образование</a></li>
                      </ul>
                    </div>
                    <div>
                      <a href="" class="content-item-head">Справка</a>
                      <ul class="inline-list">
                        <li><a href="#">Визы</a></li>
                        <li><a href="#">Посольства</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="megamenu-item-nav" href="#">Услуги</a>
                  <div class="megamenu-item-content to_right">
                    <div>
                      <a href="" class="content-item-head">Страны</a>
                      <ul class="inline-list">
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Словакия</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Испания</a></li>
                        <li><a href="#">Турция</a></li>
                      </ul>
                      <ul class="inline-list">
                        <li><a href="#">Драйв</a></li>
                        <li><a href="#">Польша</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Украина</a></li>
                        <li><a href="#">Словакия</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
