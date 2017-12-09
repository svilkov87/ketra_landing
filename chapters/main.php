<?php
include("include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$time = time() - 20;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>КЕТРА</title>
    <meta name="description" content="cv" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="app/img/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="app/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="app/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/css/animate.css">
    <script src="app/libs/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="app/libs/jQuery-slimScroll-1.3.8/jQuery-slimScroll-1.3.8/jquery.slimscroll.min.js"></script>
    <link rel="stylesheet" href="app/css/libs.min.css?<?php echo $time;?>">
    <script src="app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <!--[if lt IE 9]-->
    <script src="app/libs/html5shiv/es5-shim.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv.min.js"></script>
    <script src="app/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="app/libs/respond/respond.min.js"></script>
    <!--[endif]-->
    <!-- <script src="app/libs/scrollto/jquery.scrollTo.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
    <script src="app/libs/main-min.js?<?php echo $time;?>"></script>
    <script type="text/javascript" src="app/libs/wow.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.content_desc').slimScroll({
                height: '450px'
            });
        });
    </script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $('.bx_slider').bxSlider({
                mode: 'fade',           // тип перехода между слайдами может быть 'horizontal', 'vertical', 'fade'
                captions: false,         // отображение title
                easing: 'easeInOutQuad', // анимация слайда
                controls: false,         // отображение стрелки - вперед, назад
                startSlide: 0,          // Показ начнется с заданного слайда
                infiniteLoop: true,     // показывать первый слайд за последним
                auto: true,
                responsive: true,  // сделать автоматический переход
                pager: true,
                pause: 4000,            // время между сменой слайдов в м-сек
                speed: 500,          // длительность перехода слайда в м-сек
                useCSS: true           // CSS переходы
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.bg_main').bxSlider({
                mode: 'fade',           // тип перехода между слайдами может быть 'horizontal', 'vertical', 'fade'
                captions: false,         // отображение title
                easing: 'easeInOutQuad', // анимация слайда
                controls: false,         // отображение стрелки - вперед, назад
                startSlide: 0,          // Показ начнется с заданного слайда
                infiniteLoop: true,     // показывать первый слайд за последним
                auto: true,
                responsive: true,  // сделать автоматический переход
                pager: true,
                pause: 4000,            // время между сменой слайдов в м-сек
                speed: 500,          // длительность перехода слайда в м-сек
                useCSS: true           // CSS переходы
            });
        });
    </script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap,
                myPlacemark;

        function init(){
            myMap = new ymaps.Map("map", {
                center: [56.330241, 43.996186
                ],
                zoom: 16
            });

            myPlacemark = new ymaps.Placemark([56.330241, 43.996186], {
                hintContent: 'Москва!',
                balloonContent: 'Столица России'
            });

            myMap.geoObjects.add(myPlacemark);
        }
    </script>
    <link href="app/libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">

</head>
<body>
<div class="main">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <i class="fa fa-chevron-up" aria-hidden="true" id="top"></i>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="row">
                    <div class="nav_left">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <span>8(831) 4-206-306</span>

                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span> BRR.RK52@GMAIL.COM</span>
                    </div>
                    <div class="nav_right">
                        <i class="fa fa-align-justify" aria-hidden="true"></i>
                        <ul class="ul_right">
                            <li class="li_right"><a href="#main" class="active">Главная</a></li>
                            <li class="li_right"><a href="#products">Продукция</a></li>
                            <li class="li_right"><a href="#delivery">Доставка</a></li>
                            <li class="li_right"><a href="#actions">Акции</a></li>
                            <li class="li_right"><a href="#contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="cv_sections" id="main">
        <div class="container">
            <div class="row">
                <div class="head_top">
                    <h1 class="wow fadeInDown" data-wow-delay=".7s">Керамические блоки КЕТРА</h1>
                    <span class="span_ht wow fadeInLeft" data-wow-delay=".7s">Высокий стандарт строительства</span>
                </div>
                <div class="go wow fadeInRight" data-wow-delay=".7s">Узнать больше</div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="products">
        <div class="container">
            <div class="row">
                <div class="before_content wow fadeIn" data-wow-delay=".7s">
                    <div class="pr_header">
                        <h2>Сегодня "КЕТРА" это:</h2>
                    </div>
                    <div class="slider_area">
                        <ul class="bx_slider">
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Тепло и звукоизоляция</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Возведение стен без использования дополнительных утепляющих
                                            материалов</p>
                                        <p class="sp_adv">Экономия отопления</p>
                                        <p class="sp_adv">Исключение расходов на звукоизоляцию помещения</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Высокая скорость строительства</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Однорядная кладка, в которой длина камня соотвествует толщине
                                            стены</p>
                                        <p class="sp_adv">Скорость кладки 1м2 стены из блоков в 10 раз быстрее, чем из
                                            малоформатного кирпича</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Экологичность</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Основной материал - глина</p>
                                        <p class="sp_adv">Не содержит вредных примесей</p>
                                        <p class="sp_adv">Идеальный влаго- и теплообмен. Ваши стены "дышат"</p>
                                        <p class="sp_adv">Предотвращение образования плесени и грибков</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <div class="inf_header">
                                        <h3>Экономия ресурсов</h3>
                                    </div>
                                    <div class="inf_body">
                                        <p class="sp_adv">Сокращение расхода раствора за счет отсутсвия швов</p>
                                        <p class="sp_adv">Уменьшение использования рабочей силы</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_content">
            <!--modal-->
            <div class="bg_phone">
                <div class="phone">
                    <i class="fa fa-times" id="close_product" aria-hidden="true"></i>
                    <div class="header">Оставить заявку</div>
                    <div class="modal_forms">
                        <div class="err_block">
                            Не все поля заполнены!
                        </div>
                        <div class="modal_confirm">
                            Спасибо, мы свяжемся с Вами в ближайшее время!
                        </div>
                        <div class="cssload-thecube">
                            <div class="cssload-cube cssload-c1"></div>
                            <div class="cssload-cube cssload-c2"></div>
                            <div class="cssload-cube cssload-c4"></div>
                            <div class="cssload-cube cssload-c3"></div>
                        </div>
                        <form action="" method="post" id="my_form">
                            <div class="form_line">
                                <label>Введите имя *</label>
                                <input type="text" name="name" class="form_style" id="name" placeholder="Ваше имя">
                            </div>
                            <div class="form_line">
                                <label>Укажите контактный телефон *</label>
                                <input type="text" name="phone" class="form_style" id="phone_number" placeholder="Телефон">
                            </div>
                            <button type="submit" name="enter" class="btn_modal">Заказать звонок</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInLeft" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <span class="ribbon"><span class="ribbon1">Акция</span></span>
                            <div class="img_top">
                                <img src="app/img/product_img/K-51.jpg" alt="ketra51" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 51</h3>
                                <p class="price">117 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 51</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">14.4 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">57,2 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">53,3%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,144 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">0.16</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">21.6 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">510</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">40шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">17.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">36</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">880</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <span class="ribbon"><span class="ribbon1">Акция</span></span>
                            <div class="img_top">
                                <img src="app/img/product_img/K-44.jpg" alt="ketra44" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 44</h3>
                                <p class="price">104  руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 44</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">12.4 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">57,1 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">51%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,139 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">15.4</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">19 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">440</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">40шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">17.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">39.5</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">880</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <span class="ribbon"><span class="ribbon1">Акция</span></span>
                            <div class="img_top">
                                <img src="app/img/product_img/K-38.jpg" alt="ketra__38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 38</h3>
                                <p class="price">90 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 38</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">10.7 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">58,2 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">52,5%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0.149 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">16.4</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">17 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">380</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">60шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">17.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">45.8</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1260</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <span class="ribbon"><span class="ribbon1">Акция</span></span>
                            <div class="img_top">
                                <img src="app/img/product_img/1450870562_ketra-blok-38-2.jpg" alt="ketra_38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 38 Климаблок</h3>
                                <p class="price">94 руб /1 шт.</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 38 Климаблок</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">10.7 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">58,2 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">52,5%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,11 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">20</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">15,1 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">380</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">60шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">17.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">45.8</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1320</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <span class="ribbon"><span class="ribbon1">Акция</span></span>
                            <div class="img_top">
                                <img src="app/img/product_img/K-25.jpg" alt="ketra_38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 25</h3>
                                <p class="price">91,5  руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 25</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой,перегородочный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">11.2 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">61 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">52,5%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0.200 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">19.6</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">17 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">398</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">60шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">10.7</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">43.5</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1260</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInLeft" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/K-2_1.jpg" alt="ketra_38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 2.1</h3>
                                <p class="price">17 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 2.1</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">2.1 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">220 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">51%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,157 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">16.4</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">3.2 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">250</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">120</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">140</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">308шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">26</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">200</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">6160</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInDown" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/K-20.jpg" alt="ketra_20" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 20</h3>
                                <p class="price">73  руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 20</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Стеновой</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">9 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">57,2 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">45%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">0,149 Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">16.1</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">16 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">400</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">200</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">72шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">11.4</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">54.3</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1368</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/K-12.jpg" alt="ketra_38" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 12</h3>
                                <p class="price">56 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 12</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Перегородочный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">6.9 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">66 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">47.8%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">- Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">16.1</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">11.5 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">120</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">510</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">80шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">8.6</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">-</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">1760</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/K-10.jpg" alt="ketra10" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">КЕТРА 10</h3>
                                <p class="price">47 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>КЕТРА 10</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Перегородочный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">5.7 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">66 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">47%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">- Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">16.1</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">10.4 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">100</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">510</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">96шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">8.6</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">-</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">2016</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".7s">
                        <div class="product_wrapp">
                            <div class="img_top">
                                <img src="app/img/product_img/KB-8.png" alt="8" class="img_preview">
                            </div>
                            <div class="desc">
                                <h3 class="title">Кетра блок 8</h3>
                                <p class="price">37 руб/ шт</p>
                            </div>
                            <div class="hover_wrapp">
                                <p class="look">описание</p>
                                <div class="font_wr">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="b_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_times" aria-hidden="true"></i>
                                <div class="bg_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>Кетра блок 8</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Применение</p>
                                                    <p class="sp_r">Перегородочный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Красный</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер (Тип)</p>
                                                    <p class="sp_r">4,5 NF</p>
                                                </div>
                                                <div class="item_content rashod">
                                                    <p class="sp_l">Расход раствора</p>
                                                    <p class="sp_r">66 л/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Пустотность</p>
                                                    <p class="sp_r">47%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Поверхность</p>
                                                    <p class="sp_r">Гладкая</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Фаска</p>
                                                    <p class="sp_r">Нет</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Марка прочности</p>
                                                    <p class="sp_r">М-100</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">ГОСТ</p>
                                                    <p class="sp_r">530-2012</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">- Вт/м°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Влагопоглощение</p>
                                                    <p class="sp_r">16.1</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">9.2кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="main_sizes">
                                            <div class="sizes_h">Размеры</div>
                                            <div class="sizes_content">
                                                <div class="item_size">
                                                    <p class="p_l">Длина</p>
                                                    <p class="pr">80</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Ширина</p>
                                                    <p class="pr">510</p>
                                                </div>
                                                <div class="item_size">
                                                    <p class="p_l">Высота</p>
                                                    <p class="pr">219</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="transporting">
                                            <div class="trans_h">Транспортировка</div>
                                            <div class="trans_content">
                                                <div class="item_trans">
                                                    <p class="p_l">Упаковка</p>
                                                    <p class="p_r">термопленка</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Поддоны</p>
                                                    <p class="p_r">Невозвращаемые</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Кол-во на поддоне</p>
                                                    <p class="p_r">112шт</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м2</p>
                                                    <p class="p_r">8.6</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Количество в 1 м3</p>
                                                    <p class="p_r">-</p>
                                                </div>
                                                <div class="item_trans">
                                                    <p class="p_l">Норма загрузки шт. а/м 20 тонн.</p>
                                                    <p class="p_r">2464</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="q_product">
        <div class="q_header">
            <div class="q_wrapp">
                <h3 class="wow fadeInDown" data-wow-delay=".7s">Закажите звонок и мы с Вами свяжемся</h3>
                <div class="q_button wow fadeInUp" data-wow-delay=".7s">Связаться с нами</div>
                <div class="q_del_m">
                    <div class="q_modal_wr">
                        <i class="fa fa-times" id="q_close" aria-hidden="true"></i>
                        <div class="q_m_header">
                            <span>Заказать расчет стоимости доставки</span>
                        </div>
                        <div class="modal_forms">
                            <form action="" method="post">
                                <div class="form_line">
                                    <input type="text" name="name" class="form_style"  placeholder="Укажите Ваше имя или компанию">
                                </div>
                                <div class="form_line">
                                    <input type="text" name="s_name" class="form_style"  placeholder="Ваш телефон">
                                </div>
                                <button type="submit" name="enter" class="btn_modal">Написать мне</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="delivery">
        <div class="del_header">
            <h3 class="wow fadeInDown" data-wow-delay="1.2s">Организация доставки "Под ключ"</h3>
        </div>
        <div class="del_content">
            <div class="col-md-6">
                <div class="del_items wow fadeInLeft" data-wow-delay="1.2s">
                    <div class="item">
                        <h4>Tранспорт</h4>
                        <ul class="ul_del">
                            <li class="li_del">Мы сторудничаем с надежными партнерами по траспорту</li>
                            <li class="li_del">Полное соблюдение сроков</li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Доставка по всей России</h4>
                        <ul class="ul_del">
                            <li class="li_del">Индивидуальный расчет доставки</li>
                            <li class="li_del">Удобный для Вас вид транспорта</li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Своевременная доставка</h4>
                        <ul class="ul_del">
                            <li class="li_del">Точное соблюдение сроков поставки</li>
                            <li class="li_del">Отслежование местонахождения Вашего товара</li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Отложенная доставка</h4>
                        <ul class="ul_del">
                            <li class="li_del">Вы можете заранее забронировать необходимый объем продукции</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg_truck wow fadeInRight" data-wow-delay="1.2s"></div>
            </div>
        </div>
    </section>
    <div class="caption-section">
        <div class="bg_del">
            <div class="phone_del">
                <i class="fa fa-times" id="close_del" aria-hidden="true"></i>
                <div class="header">Оставить заявку</div>
                <div class="modal_forms">
                    <div class="err_block_del">
                        Не все поля заполнены!
                    </div>
                    <div class="modal_confirm_del">
                        Спасибо!
                    </div>
                    <div class="cssload-thecube">
                        <div class="cssload-cube cssload-c1"></div>
                        <div class="cssload-cube cssload-c2"></div>
                        <div class="cssload-cube cssload-c4"></div>
                        <div class="cssload-cube cssload-c3"></div>
                    </div>
                    <form action="" method="post" id="del_form">
                        <div class="form_line">
                            <label>Введите имя *</label>
                            <input type="text" name="name" class="form_style" id="user_name" placeholder="Ваше имя">
                        </div>
                        <div class="form_line">
                            <label>Укажите контактный телефон *</label>
                            <input type="text" name="phone" class="form_style" id="del_phone" placeholder="+ 7 900 800 00 00">
                        </div>
                        <div class="form_line">
                            <label>Населенный пункт *</label>
                            <input type="text" name="local" class="form_style" id="del_local" placeholder="...">
                        </div>
                        <div class="form_line">
                            <label>Количество блоков *</label>
                            <input type="text" name="count_blocks" class="form_style" id="del_count" placeholder="20">
                        </div>
                        <button type="submit" name="enter" class="btn_del">Заказать звонок</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="container text-center">
            <h3 class="wow fadeInDown" data-wow-delay=".7s">Рассчитать
                <span>стоимость доставки</span>
            </h3>
<!--            <p class="wow fadeInLeft" data-wow-delay=".7s">Рассчитать стоимость доставки</p>-->
            <div class="link-btn wow fadeInDown" data-wow-delay=".7s">Оставить заявку</div>
        </div>
    </div>
    <section class="cv_sections" id="actions">
        <div class="act_header">
            <h3>Текущие акции компании</h3>
        </div>
        <div class="act_body">
            <div class="container">
                <div class="row">
                    <!--modal-->
                    <div class="call_act">
                        <div class="popup_act">
                            <i class="fa fa-times" id="close_act" aria-hidden="true"></i>
                            <div class="header">Оставить заявку</div>
                            <div class="modal_forms">
                                <div class="err_block_act">
                                    Не все поля заполнены!
                                </div>
                                <div class="modal_confirm_act">
                                    Спасибо,Мы свяжемся с Вами в скором времени!
                                </div>
                                <div class="cssload-thecube">
                                    <div class="cssload-cube cssload-c1"></div>
                                    <div class="cssload-cube cssload-c2"></div>
                                    <div class="cssload-cube cssload-c4"></div>
                                    <div class="cssload-cube cssload-c3"></div>
                                </div>
                                <form action="" method="post" id="act_form">
                                    <div class="form_line">
                                        <label>Введите имя *</label>
                                        <input type="text" name="name" class="form_style" id="act_name" placeholder="Ваше имя">
                                    </div>
                                    <div class="form_line">
                                        <label>Укажите контактный телефон *</label>
                                        <input type="text" name="phone" class="form_style" id="act_phone" placeholder="+ 7 900 800 00 00">
                                    </div>
                                    <button type="submit" name="enter" class="btn_act">Заказать звонок</button>
                                </form>
                            </div>
                        </div>
                    </div>
<!--                    /modal-->
                    <div class="col-md-4">
                        <div class="act_item">
                            <div class="act_head">
                                <img src="app/img/osnovit1.jpg" alt="no">
                            </div>
                            <div class="act_desc">
                                <div class="desc_head">КЛАДОЧНЫЙ РАСТВОР ОСНОВИТ</div>
                                <p>Cкидка на раствор основит</p>
                                <div class="strike"><strike>329р</strike> - <span>289р</span></div>
                            </div>
                        </div>
                        <div class="act_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_cl_act" aria-hidden="true"></i>
                                <div class="act_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>Основит</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Цвет</p>
                                                    <p class="sp_r">Серый</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Прочность на сжатие</p>
                                                    <p class="sp_r">≥5 МПа</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Прочность на изгиб</p>
                                                    <p class="sp_r">≥1,5 МПа</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Водоуд. способность</p>
                                                    <p class="sp_r">≥75%</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Расход воды на 1кг</p>
                                                    <p class="sp_r">0,35 – 0,40 л</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Выход готового раствора</p>
                                                    <p class="sp_r">21-23 литра</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Жизненный цикл</p>
                                                    <p class="sp_r">2 часа</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">50 циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Температура окружающей среды и основания при нанесении</p>
                                                    <p class="sp_r">+5°С…+30°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Температура эксплуатации</p>
                                                    <p class="sp_r">-50°С…+65°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Коэффициент теплопроводности</p>
                                                    <p class="sp_r">0,21-0,23 Вт/м•ºК</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Плотность</p>
                                                    <p class="sp_r"><1000 кг/м³</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Срок годности</p>
                                                    <p class="sp_r">12 мес</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="act_item">
                            <div class="act_head">
                                <img src="app/img/lm.jpg" alt="no">
                            </div>
                            <div class="act_desc">
                                <div class="desc_head">Кладочный раствор с перлитом</div>
                                <p>Cкидка на расвтор LM - 10%</p>
                                <div class="strike"><span>Успей купить!</span></div>
                            </div>
                        </div>
                        <div class="act_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_cl_act" aria-hidden="true"></i>
                                <div class="act_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                        <h3>Раствор LM</h3>
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <div class="col-md-12">
                                        <div class="main_desc">
                                            <div class="main_desc_h">Основные характеристики</div>
                                            <div class="main_content">
                                                <div class="item_content">
                                                    <p class="sp_l">Категория</p>
                                                    <p class="sp_r">M5</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Плотность</p>
                                                    <p class="sp_r">< 1000 кг/м3</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Теплопроводность</p>
                                                    <p class="sp_r">≤ 0,21 Вт/(м⋅К)</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Прочность</p>
                                                    <p class="sp_r">≥ 5 МПа</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Размер заполнителя</p>
                                                    <p class="sp_r">0-1 мм</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">T° применения</p>
                                                    <p class="sp_r">от +5°С до +30°С</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Время использования</p>
                                                    <p class="sp_r">~ 2 часа</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F75</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Морозостойкость</p>
                                                    <p class="sp_r">F50 Циклов</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Кол-во воды</p>
                                                    <p class="sp_r">~ 13,0-14,0 л на 20 кг</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Выход</p>
                                                    <p class="sp_r">~ 30-32 л из 20 кг сухой смеси</p>
                                                </div>
                                                <div class="item_content">
                                                    <p class="sp_l">Вес</p>
                                                    <p class="sp_r">20 кг</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="act_item">
                            <div class="act_head">
                                <img src="app/img/action_img/summer_action.jpg" alt="no">
                            </div>
                            <div class="act_desc">
                                <div class="desc_head">«Зимнее хранение»</div>
                                <p>Посмотреть условия</p>
                            </div>
                        </div>
                        <div class="act_bg">
                            <div class="big_desc">
                                <i class="fa fa-times fa_cl_act" aria-hidden="true"></i>
                                <div class="act_call">Заказть звонок</div>
                                <div class="desc_head">
                                    <div class="desc_title">
                                    </div>
                                </div>
                                <div class="content_desc">
                                    <!-- <img class="gift_take" src="img/action_img/summer_action_banner.jpg" alt="alt"> -->
                                    <ul class="ul-terms">
                                        <li class="li-terms">Срок действия акции: с 01.11.2017 по 31.05.2018 года</li>
                                        <li class="li-terms">Оплаченный Вами кирпич будет бесплатно храниться на нашем складе</li>
                                        <li class="li-terms">Поставка осуществляется по Вашему запросу до 31 мая 2017г. 
                                        Для этого необходимо проинформировать нас о дате поставки заранее</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-btn_act">Оставить заявку</div>
                </div>
            </div>
        </div>
    </section>
    <section class="cv_sections" id="contacts">
        <div id="map" style="width: 100%; height: 350px"></div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="footer_item">
                            <div class="footer_nav">
                                <ul class="ul_right">
                                    <p class="ul">Меню</p>
                                    <li class="li_right"><a href="#main">Главная</a></li>
                                    <li class="li_right"><a href="#products">Продукция</a></li>
                                    <li class="li_right"><a href="#delivery">Доставка</a></li>
                                    <li class="li_right"><a href="#actions">Акции</a></li>
                                    <li class="li_right"><a href="#contacts">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="footer_item">
                            <div class="adress">
                                <p class="ad_p color"><b>Нижний Новгород</b></p>
                                <p class="ad_p">Рождественская ул, дом N 11-13/7</p>
                                <p class="ad_p">Помещение П2, офис 210</p>
                                <p class="ad_p">brr.rk52@gmail.com</p>
                                <p class="ad_p">+7(831) 21-41-900</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="footer_item">
                            <p class="p_ht wow fadeInUp" data-wow-delay=".7s">Официальный дилер завода строительной керамики КЕТРА в Нижнем Новгороде, ООО "Русский Кирпич"</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="hr wow fadeIn" data-wow-delay=".7s">
                        <p>© 2017 Все права защищены.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
