$(document).ready(function(){

    //loader
     $(window).load(function() {
     $("#object").fadeOut();
     $("#loading").delay(100).fadeOut("slow");
     });

    //протфолио показать подробности
    $(".sb_more").click(function() {
        $(this).toggleClass('burger');
        $(this).prev(".second_blcok").toggleClass('active');
    });

    //скролл side главная страница
    $(window).scroll(function () {
        var $sections = $('.cv_sections');
        $sections.each(function (i, el) {
            var top = $(el).offset().top - 100;
            var bottom = top + $(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');
            if (scroll > top && scroll < bottom) {
                $('a.active').removeClass('active');
                $('a[href="#' + id + '"]').addClass('active');

            }
        })
    });

    var sScroll = $(".ul_side");
    $(this).on("click", "a", function (event) {
        // исключаем стандартную реакцию браузера
        event.preventDefault();

        // получем идентификатор блока из атрибута href
        var id = $(this).attr('href'),

        // находим высоту, на которой расположен блок
            top = $(id).offset().top;

        // анимируем переход к блоку, время: 800 мс
        $('body,html').animate({scrollTop: top}, 800);
    });





// выпадающее меню
  $(".fa-align-justify").click(function(){
    $(".ul_right").fadeToggle(500);
  });


    //написать мне
    $(".write_me").click(function () {
        $(".main").addClass('back');
    });

    $(".product_wrapp").click(function () {
        var bg = $(this).next(".b_bg").toggleClass('down');
        bg.find(".big_desc").toggleClass('down');
    });

    $('.fa_times').click(function () {
        var popup = $(this).parent('.big_desc').removeClass('down');
        popup.parent('.b_bg').toggleClass('down');
    });


    $(".bg_call").click(function () {
        $(this).toggleClass('back');
        $(this).nextAll('.content_desc').toggleClass('content_hide');
        $(this).nextAll('.phone').toggleClass('phone_show');
    });



    // форма отправки заказа
    $('.btn_modal').click(function(e){
        e.preventDefault();
        var name = $('#name').val(),
            s_name = $('#s_name').val(),
            field = $('#modal_field').val();

        if( name == "" || s_name == "" || field == ""){
            $('.err_block').css("display" , "block");
        }
        else {
            $('.err_block').css("display" , "none");
            $.ajax({
                url: "../../ajax/upload.php",
                type: "POST",
                data: $('#my_form').serialize(),
                dataType: "html"
            }).done(function(){
                // $('#myModlal').css("display" , "none");
                $('.modal_forms').css("display" , "none");
                $('.modal_confirm').css("display" , "block");
                // alert('data');
            });
        }
        $('#name, #s_name, #modal_field').focus(function(){
            $('.err_block').css("display" , "none");
        });
    });

    //Плавный скролл до блока .div по клику на .scroll
  //Документация: https://github.com/flesler/jquery.scrollTo
  $(".button_go").click(function() {
    $.scrollTo($("#products"), 800, {
      offset: 0
    });
  });



  // показать кнопку наверх
  $(window).scroll(function() {
    if ($(this).scrollTop() > 250){
      $('#top').fadeIn(100);
    }
    else{
      $('#top').fadeOut(100);
    }
  });



  //Кнопка "Наверх"
  //Документация:
  //http://api.jquery.com/scrolltop/
  //http://api.jquery.com/animate/
  $("#top").click(function () {
    $("body, html").animate({
      scrollTop: 0
    }, 800);
    return false;
  });

    //фиксированный нав
    $(window).scroll(function() {
        if ($(this).scrollTop() > 5){
            $('.navbar').addClass("nav_bottom");
        }
        else{
            $('.navbar').removeClass("nav_bottom");
        }
    });


    //показать меню слева
    $("#menu_toggle").click(function() {
        $(this).toggleClass('mleft');
        $('.side_menu').toggleClass('sleft');
        $('.main').toggleClass('on');
    });
});

//tabs
window.onload = (function () {
    document.querySelector('.tabs-header').addEventListener('click', fTabs);


    function fTabs(event) { //передаем в ф-ю событие - event
        console.log(event);
        if(event.target.className == 'tab-h' ){

            //номер вкладки, кот нужно отобразить
            var dataTab = event.target.getAttribute('data-tab');
            //откл класс active
            var tabH = document.getElementsByClassName('tab-h');

            for(var i = 0; i < tabH.length; i++){
                tabH[i].classList.remove('active');
            }

            event.target.classList.add('active');

            //все табы
            var tabBody = document.getElementsByClassName('tab-b');
            for(var i = 0; i < tabBody.length; i++){
                if(dataTab == i){
                    tabBody[i].style.display = 'block';
                }else {
                    tabBody[i].style.display = 'none';
                }
            }
        }
    }

});

