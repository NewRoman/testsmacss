<div class="wrapper-ticket">
  <div id="manager_info" class="row book-ticket">
    <h4>Привет, Стамбул! 3 дня без скуки</h4>
    <div class="small-2 columns bp">
      <p class="book-price">Без пересадок</p><br/>
      <span class="bk-price">€600</span>
    </div>

    <div class="small-4 columns next-sortie">
       <p class="">Ближайший тур:</p>
       <form>
        <div class="choose_date_one">
          <select name="" id="" class="dropdown">
            <option value="01.01.15">01.01.15</option>
            <option value="02.01.15">05.01.15</option>
            <option value="03.01.15">05.01.15</option>
            <option value="04.01.15">05.01.15</option>
            <option value="05.01.15">05.01.15</option>
          </select>

          <button  data-reveal-id="order_tour_ticket" type="submit">
            Забронировать
          </button>
        </div>
      </form>
      <div class="adition">
        <span><i>50</i> просмотров</span>
        <span><i>15</i> заказов</span>
      </div>
    </div>
    <div class="small-4 columns manager show" data-info-manager="1">
      <img src="images/manager.png"/>
      <div>
          <p>ваш менеджер: </p>
          <span class="city-active">в Киеве</span>
          <a data-open="2" href="javascript: void(0)">Одессе</a>
          <a data-open="3" href="javascript: void(0)">Николаеве</a>
        <a class="manager_name" href="#">Иван Игнатьев</a> (095) 777-77-77
        <a class="ask-question" href="#">Задавайте вопросы</a>
      </div>
    </div>
    <div class="small-4 columns manager hide" data-info-manager="2">
      <img src="http://cs9811.vk.me/u84857342/a_068ae6c8.jpg"/>
      <div>
          <p>ваш менеджер: </p>
          <span class="city-active">в Одесса</span>
          <a data-open="1" href="javascript: void(0)">Киеве</a>
          <a data-open="3" href="javascript: void(0)">Николаеве</a>
        <a class="manager_name" href="#">Вася Пупкин</a> (095) 888-88-88
        <a class="ask-question" href="#">Задавайте вопросы</a>
      </div>
    </div>
    <div class="small-4 columns manager hide" data-info-manager="3">
      <img src="http://cs624116.vk.me/v624116077/a3b2/x6iQQu5srK0.jpg"/>
      <div>
          <p>ваш менеджер: </p>
          <span class="city-active">в Николаеве</span>
          <a data-open="1" href="javascript: void(0)">Киев</a>
          <a data-open="2" href="javascript: void(0)">Одессе</a>
        <a class="manager_name" href="#">Федор Кузькин</a> (095) 779-67-45
        <a class="ask-question" href="#">Задавайте вопросы</a>
      </div>
    </div>
    <div class="small-2 columns social">
      <p>Поделиться: </p>
      <div>
        <script type="text/javascript">(function() {
        if (window.pluso)if (typeof window.pluso.start == "function") return;
        if (window.ifpluso==undefined) { window.ifpluso = 1;
          var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
          s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
          s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
          var h=d[g]('body')[0];
          h.appendChild(s);
        }})();</script>
        <div class="pluso" data-background="#f7e8d5" data-options="small,round,line,horizontal,nocounter,theme=03" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir"></div>
      </div>
    </div>

  </div>
</div>

<div id="order_tour_ticket" class="reveal-modal modal_window individual_tour" data-reveal>
  <form action="">
    <div class="wrap_content">
      <h3>Подбор индивидуального тура</h3>
      <a class="close-reveal-modal">&#215;</a>

      <div class="small-6 columns user_message">
        <textarea name="" id="" cols="30" rows="10" placeholder="Опишите максимально ваши предпочтения по отдыху.  Укажите особенности здоровья, питания (если есть).  Возможно желаете какие-либо активности."></textarea>
      </div>

      <div class="small-6 columns user_data">
        <select name="" id="" class="dropdown">
          <option value="1 взрослых">1 взрослых</option>
          <option value="2 взрослых">2 взрослых</option>
          <option value="3 взрослых">3 взрослых</option>
          <option value="4 взрослых">4 взрослых</option>
          <option value="5 взрослых">5 взрослых</option>
        </select> 
        <input type="text" placeholder="Как Вас зовут?">
        <input type="text" placeholder="Телефон">
        <input type="text" placeholder="Эл. почта">
        <span>Для подтверждения бронирования</span>
      </div>
    </div>

    <div class="small-12 columns footer">
      <button type="submit" data-reveal-id="success_report">Отправить запрос по туру</button>
    </div>
  </form>
</div>
<!-- end order_tour_ticket -->

<div id="success_report" class="reveal-modal modal_window success_report" data-reveal>
    <div class="wrap_content">
      <a class="close-reveal-modal">&#215;</a>
      <h3>Ваш перелёт успешно забронирован!</h3>
      <p>Большое спасибо, желаем счастливого перелёта!</p>
    </div>
    <div class="small-12 columns footer">
      <button type="submit">Закрыть окно</button>
    </div>

</div>
<!-- end order_tour -->