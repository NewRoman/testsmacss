<div class="booking-info">
  <div class="row booking">
    <div class="small-5 columns">
      <h2 class="book-price">€ 600</h2>
      <span>7 дней / 8 ночей</span>
    </div>
    <div class="small-7 columns">
      <button data-reveal-id="order_tour">Забронировать</button>
    </div>
  </div>

  <div class="row info">
    <div class="small-5 columns">
      <p class="next-air">Ближайший вылет:</p>
      <a href="#">12.12.12</a>
    </div>
    <div class="small-7 columns">
      <div class="adition">
        <span>50 просмотров</span>
        <span>15 заказов</span>
      </div>
      <p>
        Цена действительна<br/>
        до 26.07.15
      </p>
    </div>
  </div>
</div>


<div id="order_tour" class="reveal-modal modal_window hide_message" data-reveal>
  <form action="">
    <div class="wrap_content">
      <h3>Привет, Стамбул! 3 дня без скуки</h3>
      <span>7 дней / 8 ночей</span>
      <span class="price">€ 600</span>
      <a class="close-reveal-modal">&#215;</a>
      <div class="small-6 columns user_data">
        <div class="choose_date_one">
          <div class="wrap_date_to">
            <input  class="calendar_date"type="text">
            <div  class="calendar_to calendar" ></div>
          </div>
        </div>
        <div class="count_person">
          <select name="" id="" class="dropdown">
            <option value="1 человек в одноместном номере">1 человек в одноместном номере</option>
            <option value="2 человек в одноместном номере">2 человек в одноместном номере</option>
            <option value="3 человек в одноместном номере">3 человек в одноместном номере</option>
            <option value="4 человек в одноместном номере">4 человек в одноместном номере</option>
            <option value="5 человек в одноместном номере">5 человек в одноместном номере</option>
          </select>
          <input type="number">
          <select name="" id="" class="dropdown">
            <option value="взрослый">взрослый</option>
            <option value="детский">детский</option>
          </select>
          <span class="tickets">билет</span>
        </div>
        <input type="text" placeholder="Как Вас зовут?">
        <input type="text" placeholder="Телефон">
        <input type="text" placeholder="Эл. почта">
        <span>Для подтверждения бронирования</span>
        <a href="#" id="open_message">Добавить дополнительные пожелания</a>
      </div>
      <div class="small-6 columns user_message">
        <textarea name="" id="" cols="30" rows="10" placeholder="Дополнительные пожелания"></textarea>
        <a href="#">Скрыть дополнительные пожелания</a>
      </div>
      
      <div class="small-12 columns bottom">
        <span>Я в</span>
        <select name="" class="dropdown">
          <option value="Киев">Киев</option>
          <option value="Винница">Винница </option>
          <option value="Харьков">Харьков</option>
        </select>
      </div>
    </div>

    <div class="small-12 columns footer">
      <button type="submit" data-reveal-id="success_report">Забронировать тур</button>
    </div>
  </form>
</div>
<!-- end order_tour -->

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