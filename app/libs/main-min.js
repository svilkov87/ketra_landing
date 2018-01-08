$(document).ready(function(){

    //loader
    $(window).load(function() {
       $("#object").fadeOut();
       $("#loading").delay(100).fadeOut("slow");
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

    $(".product_wrapp").click(function () {
        var bg = $(this).next(".b_bg").toggleClass('down');
        bg.find(".big_desc").toggleClass('down');
    });

    //показать хар-ки продукта в акциях
    $(".act_item").click(function () {
        var bg = $(this).next(".act_bg").toggleClass('down');
        var descAct = bg.find(".big_desc").toggleClass('down');

        var closeDecsWindow = $('.fa_cl_act');
        closeDecsWindow.click(function () {
            bg.removeClass('down');
            descAct.removeClass('down');
        });

        var closeDesc = descAct.children('.act_call').click(function () {
            bg.removeClass('down');
            descAct.removeClass('down');
            var popUpAct = $(".call_act").addClass('show');
            var descBlock = $(this).children('.popup_act');

            var closePopup = $('#close_act');
            closePopup.click(function () {
                popUpAct.removeClass('show');
            });
        });
    });

    $('.fa_times').click(function () {
        var popup = $(this).parent('.big_desc').removeClass('down');
        popup.parent('.b_bg').toggleClass('down');
    });

    $('#close_product').click(function () {
        $('.bg_phone').removeClass('show');
    });

    //показать модал продукт
    $(".bg_call").click(function () {
        var wrapp = $(this).parent('.big_desc');
        $('.b_bg').removeClass('down');
        $('.big_desc').removeClass('down');

        $('.bg_phone').addClass('show');
    });

    //показать модал продукт
    $(".q_button").click(function () {
        $('.bg_phone').addClass('show');
    });

    $(".link-btn_act").click(function () {
        $('.bg_phone').addClass('show');
    });

    $('#q_close' ).click(function () {
        var q_del = $(this).parent('.q_modal_wr').removeClass('show');
        q_del.parent('.q_del_m').removeClass('show');
    });

    //показать форму доставка
    $(".link-btn").click(function () {
        $('.bg_del').toggleClass('show');
        $("#close_del").click(function () {
            $('.bg_del').removeClass('show');
        });
    });

    // форма отправки заказа
    $('.btn_modal').click(function(e){
        e.preventDefault();
        var phone = $('#phone_number').val();

        if(phone == ""){
            $('.err_block').css("display" , "block");
        }
        else {
            $('.err_block').css("display" , "none");
            $('#my_form').css("display" , "none");
            $('.cssload-thecube').css("display" , "block");
            $.ajax({
                url: "../../ajax/product_order.php",
                type: "POST",
                data: $('#my_form').serialize(),
                dataType: "html"
            }).done(function(){
                // $('#myModlal').css("display" , "none");
                $('#my_form').css("display" , "none");
                $('.modal_confirm').css("display" , "block");
                $('.cssload-thecube').fadeOut(2000);
                // alert('data');
            });
        }
        $('#name, #s_name, #modal_field').focus(function(){
            $('.err_block').css("display" , "none");
        });
    });

    // форма заявки на траспортировку
    $('.btn_del').click(function(e){
        e.preventDefault();
        var del_name = $('#user_name').val(),
        del_phone = $('#del_phone').val(),
        local = $('#del_local').val(),
        count = $('#del_count').val();

        if( del_phone == ""){
            $('.err_block_del').css("display" , "block");
        }
        else {
            $('.err_block_del').css("display" , "none");
            $('#del_form').css("display" , "none");
            $('.cssload-thecube').css("display" , "block");
            $.ajax({
                url: "../../ajax/delivery_order.php",
                type: "POST",
                data: $('#del_form').serialize(),
                dataType: "html"
            }).done(function(){
                $('#del_form').css("display" , "none");
                $('.modal_confirm_del').css("display" , "block");
                $('.cssload-thecube').fadeOut(2000);
            });
        }
        $('#user_name, #del_phone, #del_local, #del_count').focus(function(){
            $('.err_block').css("display" , "none");
        });
    });

    // форма заявки на акции
    $('.btn_act').click(function(e){
        e.preventDefault();
        var act_name = $('#act_name').val(),
        act_phone = $('#act_phone').val();

        if(act_phone == ""){
            // alert('fuck');
            $('.err_block_act').css("display" , "block");
        }
        else {
            $('.err_block_act').css("display" , "none");
            $('#act_form').css("display" , "none");
            $('.cssload-thecube').css("display" , "block");
            $.ajax({
                url: "../../ajax/actions_order.php",
                type: "POST",
                data: $('#act_form').serialize(),
                dataType: "html"
            }).done(function(){
                $('#act_form').css("display" , "none");
                $('.modal_confirm_act').css("display" , "block");
                $('.cssload-thecube').fadeOut(2000);
            });
        }
        $('#act_name, #act_phone').focus(function(){
            $('.err_block_act').css("display" , "none");
        });
    });

    //Плавный скролл до блока .div по клику на .scroll
    //Документация: https://github.com/flesler/jquery.scrollTo
    $(".go").click(function() {
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
            $('header').addClass("nav_bottom");
        }
        else{
            $('header').removeClass("nav_bottom");
        }
    });

    //дисклеймер
    var $checkBoxPolitic = $('.modal_forms').find('.b-disclamer__checkbox'),
        $buttonPolitic   = $('.modal_forms').find('.btn_modal');

    $checkBoxPolitic.on('change', function(){
        if ($(this).is(':checked')) {
                $buttonPolitic.prop('disabled', false).removeClass('hidden_btn');
                console.log('checked');
            }
            else{
                $buttonPolitic.prop('disabled', true).addClass('hidden_btn');
            }

            // if($('#check1').is(':disabled')) {
            //     $('#check1').addClass('hidden');
            // }
            // else{
            //     $('#check1').removeClass('hidden');
            // }
    });


    //дисклеймер доставка
    var $checkBoxPoliticDel = $('.modal_forms').find('.b-disclamer-del__checkbox'),
        $buttonPoliticDel   = $('.modal_forms').find('.btn_del');

    $checkBoxPoliticDel.on('change', function(){
        if ($(this).is(':checked')) {
                $buttonPoliticDel.prop('disabled', false).removeClass('hidden_btn');
                console.log('checked');
            }
        else{
            $buttonPoliticDel.prop('disabled', true).addClass('hidden_btn');
        }
    });

    //дисклеймер акции
    var $checkBoxPoliticAct = $('.modal_forms').find('.b-disclamer-act__checkbox'),
        $buttonPoliticAct   = $('.modal_forms').find('.btn_act');

    $checkBoxPoliticAct.on('change', function(){
        if ($(this).is(':checked')) {
                $buttonPoliticAct.prop('disabled', false).removeClass('hidden_btn');
                console.log('checked');
            }
        else{
            $buttonPoliticAct.prop('disabled', true).addClass('hidden_btn');
        }
    });
});

