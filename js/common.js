// общие функции
$(document).foundation({
  orbit: {
    animation: 'slide',
    timer_speed: 2500,
    pause_on_hover: false,
    animation_speed: 1000,
    navigation_arrows: false,
    slide_number: false,
    bullets: true,
  },

  dropdown: {
    active_class: 'open',
    is_hover: true
  }
});

$( document ).ready(function() {
  var wide_dropdown, gallery, choose_date;

  $('select#city, select#city-footer').each(function(index, elem){
    elem = $(elem);
    block_phone = $(elem.attr('data-city')+' [data-city-phone]');
    return (function(elem, block_phone){
      elem.easyDropDown({
        onChange: function(selected){
          var phone_number = selected.value.split(')');
          block_phone.html("<i>"+phone_number[0]+")</i>"+phone_number[1]);
        }
      });
    })(elem, block_phone);

  }); 




  // Иницализация fancybox по классу
  $(".fancybox").on('mousedown').fancybox({
    openEffect  : 'elastic',
    closeEffect : 'elastic',
    helpers : {
      title : {
        type : 'inside'
      }
    }

  });

  var manager_info = $("#manager_info");
  if(manager_info[0]){
    var active_manager;
    manager_info.on('click', function(event){
      
      if(event.target.nodeName === "A"){
        var attr = $(event.target).attr('data-open');
        console.log(manager_info);
        active_manager ? active_manager.addClass('hide') : manager_info.find('.show').addClass('hide');
        active_manager = manager_info.find('[data-info-manager= '+ attr +']');
        active_manager.removeClass('hide');
      }
    });
  }
  // $elements = $('.wrap-service .service-cell');
  // $elements.click(function(){
  //   $(this).addClass('active');
  //   $elements.each(function(){
  //     if ($(this).hasClass('active') == false) {
  //       $(this).find('img').animate({'opacity': '1'});
  //       $(this).find('.before-s-name').css('top', '100%')
  //     }
  //   });
  // });
  // service-cell

  // Для затемнения блоков 
  var list_services = $("#list_services");
  if(list_services[0]){
    
    var service_cell = list_services.find('.service-cell'),
      shadow_list = list_services.find('.shadow');

    service_cell.mouseenter(function(){
      shadow_list.css('opacity', 1);
      
      $(this).find('.shadow').css('opacity', 0)
    });
    service_cell.mouseleave(function(){
      shadow_list.css('opacity', 0);
    });
  }


  // Для затемнения субкатегорий 
  var list_services = $("#subcat_cells");
  if(list_services[0]){
    
    var service_cell = list_services.find('.subcat_cell'),
      shadow_list = list_services.find('.shadow');

    service_cell.mouseenter(function(){
      shadow_list.css('opacity', 1);
      
      $(this).find('.shadow').css('opacity', 0)
    });
    service_cell.mouseleave(function(){
      shadow_list.css('opacity', 0);
    });
  }

  //Используется в модальных окнах для отображения дополнительного пожелания
  $('#open_message').on('click', function(){
    $(this).hide();
    $('#order_tour').removeClass('hide_message');
  });

  // Календарь с двумя input
  // Проверка или существует элемент
  choose_date = $('#choose_date');
  if(choose_date[0]){
    $('#choose_date').on('click', function(){
      return false;
    });
    var calendar_to = $("#calendar_to"),
      calendar_from = $("#calendar_from"),
      date_to = $('#date_to'),
      date_from = $('#date_from'),
      to, from;

      date_to.on("click", function(event){
        calendar_to.fadeToggle();
        calendar_from.fadeOut();

        event.preventDefault();
      });

      date_from.on("click", function(event){
        calendar_from.fadeToggle();
        calendar_to.fadeOut();

        event.preventDefault();
      });

      $(document).on('click', function(event){
        calendar_from.fadeOut();
        calendar_to.fadeOut();
      });



    // Иницализация календарей
    calendar_to.ionCalendar({
        lang: "ru",                     // language
        sundayFirst: false,             // first week day
        years: "2015-2016",                    // years diapason
        format: "",           // date format
        hideArrows: false,
        onClick: function(date){        // click on day returns date
          to = date;
          if(from){
            if(validation(to, from)){
              date_to.val(moment(from).format('DD.MM.YYYY'));
              to = from;
              return false;
            }
          }
          date_to.val(moment(date).format('DD.MM.YYYY'));
          return false;
        },
        onReady: function(date){
          date_to.val(moment(date).format('DD.MM.YYYY'));

          calendar_to.find('select').easyDropDown({
              wrapperClass: 'dropdown'
          });
        }
    });

     calendar_from.ionCalendar({
        lang: "ru",                     // language
        sundayFirst: false,             // first week day
        years: "2015-2016",                    // years diapason
        format: "",           // date format
        hideArrows: false,
        onClick: function(date){        // click on day returns date
          from = date;
          if(to){
            if(validation(to, from)){
              date_from.val(moment(to).format('DD.MM.YYYY'));
              from = to;
              return false;
            }
          }
          date_from.val(moment(date).format('DD.MM.YYYY'));
          return false;
        },
        onReady: function(date){
  
          date_from.val(moment(date).format('DD.MM.YYYY'));

          calendar_from.find('select').easyDropDown({
              wrapperClass: 'dropdown'
          });
        }
    });

     function validation(to, from) {
      var dateB = moment(from),
        dateC = moment(to);
      return dateB.diff(dateC, 'days') <= 0;
     }

  }
  // Иницализация календарей
  $('#calendar-event').ionCalendar({
      lang: "ru",                     // language
      sundayFirst: false,             // first week day
      years: "2015-2016",                    // years diapason
      format: "",           // date format
      hideArrows: false,
      onClick: function(date){        // click on day returns date
        from = date;
        if(to){
          if(validation(to, from)){
            date_from.val(moment(to).format('DD.MM.YYYY'));
            from = to;
            return false;
          }
        }
        date_from.val(moment(date).format('DD.MM.YYYY'));
        return false;
      },
      onReady: function(){
        $('#calendar-event').find('select').easyDropDown({
            wrapperClass: 'dropdown'
        });
      }
  });


  //Проверка или есть gallery
  gallery = $('[data-gallery]');
  // Иницализация 
  if(gallery[0]){
    gallery.each(init_gallery);
  }

  function init_gallery(index, gallery) {
    // Объект который попадает в замыкание для каждой галерее свой объект
    var gallery_obj = {
      link: $(gallery),
      app_img: $(gallery).find('img[data-app-img]'),
      old_photo: $(gallery).find('.list_img>img').first()
    };

    // Если нету фото в галерее прикращаем работу
    if(!gallery_obj.old_photo[0]){
      return false;
    }


    gallery_obj.link.find('.list_img').on('click', gallery_obj, chage_slide);

    function chage_slide(event){

      if(event.target.nodeName !== "IMG"){
        return false;
      }

      gallery_obj = event.data
      

      $this = $(event.target);

      // Операции по смене слайда
      gallery_obj.old_photo.removeClass('active');

      gallery_obj.old_photo = $this;
      
      gallery_obj.app_img.attr('src', $this.attr('data-src'));

      $this.addClass('active');


    }
  }





  // Календарь с одним input
  choose_date_one = $('.choose_date_one');
  if(choose_date_one[0]){
    choose_date_one.on('click', function(){
        return false;
    });



    choose_date_one.each(init_calendar_one);

    function init_calendar_one(index, choose_date_one){
      choose_date_one = $(choose_date_one);

      var calendar = choose_date_one.find(".calendar"),
        calendar_date = choose_date_one.find('.calendar_date');

      calendar_date.on("click", function(){
        calendar.fadeToggle();
      });

      $(document).on('click', function(){
        calendar.fadeOut();
      });

      // Иницализация календарей
      calendar.ionCalendar({
          lang: "ru",                     // language
          sundayFirst: false,             // first week day
          years: "2015-2016",                    // years diapason
          format: "DD.MM.YYYY",           // date format
          hideArrows: false,
          onClick: function(date){        // click on day returns date
            calendar_date.val(date);
            return false;
          },
          onReady: function(date){
            calendar_date.val(date);
            calendar.find('select').easyDropDown({
                wrapperClass: 'dropdown'
            });
          }
      });
    }
  }

  // Для отображение количества картинок в шаблонах education
  var education = $(".education_gallery");
  if(education[0]){
    education.each(function(indx, elem){
      $this = $(this);

      var list_a = $this.find('a.fancybox_gallery');

      list_a.fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers: {
          title : { type : 'inside' },
          buttons : {}
        },
      });

      if($this.hasClass('photo_all')){
        list_a.length > 5 && $this.find("b.count_img").text('+' + ($this.find('img').length - 6));
        return false;
      }
      $this.find("b.count_img").text($this.find('img').length);
    });
  }

  // Для страницы "Посольства"
  var embassy_block = $('.country'),open,close;

  if(embassy_block[0]){
    embassy_block.each(function(index, elem){
      $(elem).on('click', (function(){
        var check = false,
          button;

        return function(event){

          elem = event.target;
          if(elem.localName === "a"){
            return;
          }

          !button  && (button = $(this).find('button'));
          
          if(check){
            if(elem.localName === "button"){
              $(this).toggleClass('active');
              button.text('Раcкрыть');
              check = false;
            }
            
          }else {
            button.text('Закрыть');
            check = true;
            $(this).toggleClass('active');
          }
        }
      })())
    });
  }


  var gallery_title = $('#gallery_title');

  if(gallery_title[0]){
    setTimeout(function(){
      var height_mini_img = 60,
          mini_img = gallery_title.find('.photo_all a'),
          count_mini_img = mini_img.length,
          app_img = gallery_title.find('.photo_app img'),
          height_app_img = app_img.height(),
          hide_count_mini_img = 0,
          offset_result = height_mini_img * count_mini_img - height_app_img,
          hide_elem;

        if(offset_result){
          gallery_title.css('height', height_app_img);
          hide_count_mini_img = Math.ceil(offset_result/60);
          for(var i = hide_count_mini_img; i;){
            hide_elem = hide_elem ? hide_elem.prev() : mini_img.last();
            hide_elem.css('visibility', 'hidden');
            --i;
          }
          hide_count_mini_img && gallery_title.find('b.count_img').css('top', height_app_img - 30).text('+' + hide_count_mini_img);
        }
    }, 1000);
  }


});


$(document).ready(function () {
    $(".fancybox")
        .attr('rel', 'gallery')
        .fancybox({
        beforeLoad: function () {
            var el, id = $(this.element).data('title-id');

            if (id) {
                el = $('#' + id);

                if (el.length) {
                    this.title = el.html();
                }
            }
        },
        helpers: {
            title: {
                type: "inside"
            }
        }
    });
});


