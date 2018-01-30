<!DOCTYPE html>
<html lang="ru-RU" id="ng-app" data-ng-app="app">

<head>
    <meta charset="UTF-8">
    <!--    <meta name="viewport" content="width=1280">-->
    <meta name="csrf-token" content="">
    <title>Sportvilla</title>
    <meta property="og:type" content="article" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="title" content="">
    <meta property="og:title" content="" />
    <meta name="twitter:title" content="">
    <meta name="description" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:image" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="/pack/images/fav/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/pack/images/fav/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/pack/images/fav/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/pack/images/fav/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/pack/images/fav/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/pack/images/fav/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/pack/images/fav/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/pack/images/fav/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/pack/images/fav/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/pack/images/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/pack/images/fav/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/pack/images/fav/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/pack/images/fav/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="/pack/images/fav/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/pack/images/fav/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="@yield('bodyClass', 'main-index')" data-ng-class="{'blockBody':blockBody, 'notBlockBody':!blockBody}">
    <div class="page">
        <nav>
            <div class="wrap">
                <!--            <div class="city">-->
                <!--                <div class="city-toggle">Казань</div>-->
                <!--            </div>-->
                <a href="" class="phone">+7 (XXX) XXX-XX-XX</a>
                <ul class="menu">
                    <li class="item-0 ">
                        <a href="/price" class="three-d">
                            <span class="hidden">Услуги и цены</span>
                            <span aria-hidden="true" class="three-d-box">
                                <span class="front">Услуги и цены</span>
                                <span class="back">Услуги и цены</span>
                            </span>
                        </a>
                    </li>
                    <!-- <li class="item-1 ">
                        <a href="/card" class="three-d">
                            <span class="hidden">Клубные карты</span>
                            <span aria-hidden="true" class="three-d-box">
                                <span class="front">Клубные карты</span>
                                <span class="back">Клубные карты</span>
                            </span>
                        </a>
                    </li> -->
                    <li class="item-2 ">
                        <a href="/timeline" class="three-d">
                            <span class="hidden">Расписание</span>
                            <span aria-hidden="true" class="three-d-box">
                                <span class="front">Расписание</span>
                                <span class="back">Расписание</span>
                            </span>
                        </a>
                    </li>
                    <li class="item-3 ">
                        <a href="/news" class="three-d">
                            <span class="hidden">Новости</span>
                            <span aria-hidden="true" class="three-d-box">
                                <span class="front">Новости</span>
                                <span class="back">Новости</span>
                            </span>
                        </a>
                    </li>
                    
                    <li class="logo">
                        <a href="/">
                            <span class="logo__top"></span>
                            <span class="logo__bottom"></span>
                        </a>
                    </li>
                    
                    <li class="item-4 ">
                        <a href="/blog" class="three-d">
                            <span class="hidden">Блог</span>
                            <span aria-hidden="true" class="three-d-box">
                                <span class="front">Блог</span>
                                <span class="back">Блог</span>
                            </span>
                        </a>
                    </li>
                    <li class="item-5 ">
                        <a href="/gallery" class="three-d">
                            <span class="hidden">Фото / видео</span>
                            <span aria-hidden="true" class="three-d-box">
                                <span class="front">Фото / видео</span>
                                <span class="back">Фото / видео</span>
                            </span>
                        </a>
                    </li>
                    <li class="item-6 ">
                        <a href="/contacts" class="three-d">
                            <span class="hidden">Контакты</span>
                            <span aria-hidden="true" class="three-d-box">
                                <span class="front">Контакты</span>
                                <span class="back">Контакты</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
            @yield('content')
        </div>


        <div class="contact-form">
            <div class="contact-form-title">Связаться с нами</div>
            <div class="contact-form-success hide">
                <div class="contact-form-success-title">Спасибо за обращение!</div>
                <div class="contact-form-success-text">
                    Мы свяжемся с вами в ближайшее время.
                </div>
            </div>
            <form id="contact-form" action="/main/contact" method="post" autocomplete="off">
                <input type="hidden" name="_csrf" value="OXVON24tTnBVAiZmH3UFQF9NfwAJYDgkciQnQj14LB1zF3tYC312PQ==">
                <div class="row">
                    <div class="col">
                        <div class="form-group field-contactform-name required">
                            <input type="text" id="contactform-name" class="form-control" name="ContactForm[name]" placeholder="Ваше имя*">
                            <p class="help-block help-block-error"></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group field-contactform-phone required">
                            <input type="text" id="contactform-phone" class="form-control" name="ContactForm[phone]" placeholder="Ваш телефон*">
                            <p class="help-block help-block-error"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group field-contactform-body">
                    <textarea id="contactform-body" class="form-control" name="ContactForm[body]" placeholder="Комментарий"></textarea>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-contactform-verifycode">
                    <div class="row">
                        <div class="col">
                            <div class="image"><img id="contactform-verifycode-image" src="/main/captcha?v=5a6362d0bff7b" alt=""></div>
                        </div>
                        <div class="col">
                            <input type="text" id="contactform-verifycode" name="ContactForm[verifyCode]" placeholder="Проверочный код*">
                        </div>
                    </div>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="hint">
                    * - поля обязательные для заполнения
                </div>
                <div class="form-group buttons">
                    <button type="submit" class="btn_line" name="contact-button"><span class="first"></span><span class="last"></span>Отправить</button>
                </div>
            </form>
        </div>
    </div>
    <footer data-ng-controller="FooterCtrl">
        <div class="wrap">
            <div class="row">
                <div class="col">
                    <div class="footer-label">Меню</div>
                    <ul>
                        <li><a href="/price">Услуги и цены</a></li>
                        <!-- <li><a href="/card">Клубные карты</a></li> -->
                        <li><a href="/timeline">Расписание тренировок</a></li>
                        <li><a href="/news">Новости</a></li>
                        <li><a href="/gallery">Фото / видео</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="col second">
                    <div class="footer-label">Меню 2</div>
                    <ul>
                        <li><a href="">Подменю 1</a></li>
                        <li><a href="">Подменю 2</a></li>
                        <li><a href="">Подменю 3</a></li>
                        <li><a href="">Подменю 4</a></li>
                        <li><a href="">Подменю 5</a></li>
                    </ul>
                </div>
                <div class="col last">
                    <div class="footer-label">Мы в социальных сетях</div>
                    <div class="social-bottom">
                        <a href="" target="_blank"><i class="fa fa-vk"></i></a>
                        <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                    <ul>
                        <li class="orange i-star"><a href="/access">Правила допуска</a></li>
                        <li class="orange i-list"><a href="/note">Записка от родителей</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-boot">
                <div class="copyright">© 2018 Спортивно-развлекательный центр "Sportvilla"
                    <br />г. Шымкент, адрес </br>
                </div>
            </a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/pack/app.js') }}"></script>
    <script src="{{ asset('js/pack/yii.js') }}"></script>
    <script src="{{ asset('js/pack/yii.validation.js') }}"></script>
    <script src="{{ asset('js/pack/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('js/pack/yii.captcha.js') }}"></script>
    <script src="{{ asset('js/pack/yii.activeForm.js') }}"></script>

    <script type="text/javascript">
    jQuery(document).ready(function() {
        var inputmask_e8a63036 = { "mask": "+7 (999) 999 99 99" };
        $("#contactform-phone").inputmask(inputmask_e8a63036);
        jQuery('#contactform-verifycode-image').yiiCaptcha({ "refreshUrl": "\/main\/captcha?refresh=1", "hashKey": "yiiCaptcha\/main\/captcha" });
        jQuery('#contact-form').yiiActiveForm([{ "id": "contactform-name", "name": "name", "container": ".field-contactform-name", "input": "#contactform-name", "error": ".help-block.help-block-error", "validate": function(attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Необходимо заполнить «Имя»." }); } }, { "id": "contactform-phone", "name": "phone", "container": ".field-contactform-phone", "input": "#contactform-phone", "error": ".help-block.help-block-error", "validate": function(attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Необходимо заполнить «Телефон»." }); } }, { "id": "contactform-verifycode", "name": "verifyCode", "container": ".field-contactform-verifycode", "input": "#contactform-verifycode", "error": ".help-block.help-block-error", "validate": function(attribute, value, messages, deferred, $form) { yii.validation.captcha(value, messages, { "hash": 647, "hashKey": "yiiCaptcha/main/captcha", "caseSensitive": false, "message": "Неправильный проверочный код." }); } }], []);

        $('#contact-form').on('beforeSubmit', function() {

            $(this).addClass('processForm');

            $.post($(this).attr('action'), $(this).serialize())
                .success(function(res) {
                    if (res == 'success') {
                        $('.contact-form-success').show();
                        $('#contact-form').hide();
                        $('#contact-form')[0].reset();
                        $('#contact-form').removeClass('processForm');
                    }
                })
                .error(function() {
                    $('#contact-form').removeClass('processForm');
                    alert('Произошла ошибка при отправке!');
                });

            return false;
        });

    });
    </script>
</body>

</html>