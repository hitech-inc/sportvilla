@extends('frontend.layouts.master')


@section('content')

<div id="loader"></div>
<div class="home-slides" id="swipe" data-ng-controller="HomeCtrl">
    <canvas></canvas>
    <script>
    var canvas = document.querySelector("canvas");
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    var ctx = canvas.getContext("2d");
    ctx.fillStyle = "#191f24";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fill();
    </script>
    <button type="button" class="scroll-next" data-ng-class="{'hide':!blockBody, 'disable':hideContent}" data-ng-click="next()"></button>
    <pages>
        <page name="Главная">
            <!-- <video id="video-0" loop>
                <source src="/uploads/c9a9a057762e38ee29a411924157ab4422ccee86.mp4" type="video/mp4">
                <source src="/uploads/2f6540704a258462c6494303cde85e74958dbe07.webm" type="video/webm">
                <source src="/uploads/d379f428a6b2b2d23d05ac39adcda8bc98a99df9.ogv" type="video/ogg">
            </video>
            <div class="overlay-video" data-ng-class="{'disable':hideContent}"></div> -->
            <div class="home-content" data-ng-class="{'disable':hideContent}">
                <h1>Спортивно-развлекательный центр</h1>
                <div class="animate-block">
                    <div class="item" data-ng-click="showAnimate($event)">
                        <div class="item-content">
                            <div class="img animated">
                                <img class="first" src="/uploads/6e6d29a98996e2b9a5f0b94dc454e4592f5e302b.png" alt="Category">
                                <img class="second" src="/uploads/37c69ac414aa57c97ca0dc0a223149a9c1082c70.png" alt="Category">
                            </div>
                            <div class="text">
                                <div class="text-close" data-ng-click="hideAnimate($event); $event.stopPropagation();"></div>
                                <div class="text-title">Зона 1</div>
                                <div class="text-desc">
                                    <p>Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании направлений прогрессивного развития. Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации модели развития. </p>
                                </div>
                            </div>
                        </div>
                        <div class="title">Зона 1</div>
                    </div>
                    <div class="item" data-ng-click="showAnimate($event)">
                        <div class="item-content">
                            <div class="img animated">
                                <img class="first" src="/uploads/9004bcd08c59cdb8e90420b53ecf72542f09e8cb.png" alt="Category">
                                <img class="second" src="/uploads/aa45768a1c8ea34a6afa0f369a46b124f2d9afc9.png" alt="Category">
                            </div>
                            <div class="text">
                                <div class="text-close" data-ng-click="hideAnimate($event); $event.stopPropagation();"></div>
                                <div class="text-title">Зона 2</div>
                                <div class="text-desc">
                                    <p>Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании направлений прогрессивного развития. Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации модели развития. </p>
                                </div>
                            </div>
                        </div>
                        <div class="title">Зона 2</div>
                    </div>
                    <div class="item" data-ng-click="showAnimate($event)">
                        <div class="item-content">
                            <div class="img animated">
                                <img class="first" src="/uploads/023e63e4ac3b787573f0f4681f6aa07b987a9e20.png" alt="Category">
                                <img class="second" src="/uploads/a22cd5faa0969e956f0cdbceed190feee8b45a1f.png" alt="Category">
                            </div>
                            <div class="text">
                                <div class="text-close" data-ng-click="hideAnimate($event); $event.stopPropagation();"></div>
                                <div class="text-title">Зона 3</div>
                                <div class="text-desc">
                                    <p>Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании направлений прогрессивного развития. Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации модели развития. </p>
                                </div>
                            </div>
                        </div>
                        <div class="title">Зона 3</div>
                    </div>
                </div>
                <div class="animate-block">
                    <div class="item" data-ng-click="showAnimate($event)">
                        <div class="item-content">
                            <div class="img animated">
                                <img class="first" src="/uploads/6e6d29a98996e2b9a5f0b94dc454e4592f5e302b.png" alt="Category">
                                <img class="second" src="/uploads/37c69ac414aa57c97ca0dc0a223149a9c1082c70.png" alt="Category">
                            </div>
                            <div class="text">
                                <div class="text-close" data-ng-click="hideAnimate($event); $event.stopPropagation();"></div>
                                <div class="text-title">Зона 4</div>
                                <div class="text-desc">
                                    <p>Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании направлений прогрессивного развития. Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации модели развития. </p>
                                </div>
                            </div>
                        </div>
                        <div class="title">Зона 4</div>
                    </div>
                    <div class="item" data-ng-click="showAnimate($event)">
                        <div class="item-content">
                            <div class="img animated">
                                <img class="first" src="/uploads/9004bcd08c59cdb8e90420b53ecf72542f09e8cb.png" alt="Category">
                                <img class="second" src="/uploads/aa45768a1c8ea34a6afa0f369a46b124f2d9afc9.png" alt="Category">
                            </div>
                            <div class="text">
                                <div class="text-close" data-ng-click="hideAnimate($event); $event.stopPropagation();"></div>
                                <div class="text-title">Зона 5</div>
                                <div class="text-desc">
                                    <p>Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании направлений прогрессивного развития. Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации модели развития. </p>
                                </div>
                            </div>
                        </div>
                        <div class="title">Зона 5</div>
                    </div>
                    <div class="item" data-ng-click="showAnimate($event)">
                        <div class="item-content">
                            <div class="img animated">
                                <img class="first" src="/uploads/023e63e4ac3b787573f0f4681f6aa07b987a9e20.png" alt="Category">
                                <img class="second" src="/uploads/a22cd5faa0969e956f0cdbceed190feee8b45a1f.png" alt="Category">
                            </div>
                            <div class="text">
                                <div class="text-close" data-ng-click="hideAnimate($event); $event.stopPropagation();"></div>
                                <div class="text-title">Зона 6</div>
                                <div class="text-desc">
                                    <p>Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании направлений прогрессивного развития. Задача организации, в особенности же рамки и место обучения кадров способствует подготовки и реализации модели развития. </p>
                                </div>
                            </div>
                        </div>
                        <div class="title">Зона 6</div>
                    </div>
                </div>
            </div>
        </page>
        <page name="Свободное посещение">
            <img src="/uploads/94be2bc6469304c8f839ddaa94f62b4712cd4ed2.jpg" alt="Home" class="video">
            <div class="overlay-video"></div>
            <div class="home-content">
                <h2>Наш парк открыт для всех желающих</h2>
                <div class="home-content-desc">
                    <p>Вы профессиональный спортсмен, который хочет разучить сложный трюк на батуте?
                        <br /> Вы танцор и хотите разнообразить репетиции, отрепетировать сложную поддержку?&nbsp;
                        <br /> Может вы никогда в жизни не прыгали на батуте, но хотите попробовать? Не проблема!
                        <br /> Любой желающий может посетить наш зал в формате свободного посещения ежедневно с 10:00 до 23:00,
                        <br /> без предварительной записи!</p>
                </div>
                <div class="links">
                    <div class="group">
                        <a href=""><span>Экскурсия по залу</span></a>
                        <a href=""><span>Вопросы и ответы</span></a>
                        <a href="/price"><span>Цены</span></a>
                    </div>
                    <a href="" class="big-animate" data-ng-click="select(5)">
            <span>Акции</span>
        </a>
                </div>
            </div>
        </page>
        <page name="Фристайл школа">
            <img src="/uploads/e5f2fe3cb79d27430640157d9fbe0db0a1011194.jpg" alt="Home" class="video">
            <div class="overlay-video blue" data-ng-class="{'disable':hideContent}"></div>
            <div class="home-content" data-ng-class="{'disable':hideContent}">
                <h2>Фристайл школа</h2>
                <div class="home-content-desc">
                    <p>В нашем парке вы можете провести любое мероприятие.
                        <br /> Это могут быть дни рождения, корпоративные праздники и программы,
                        <br /> спортивные чемпионаты и тд.</p>
                </div>
                <div class="links">
                    <div class="group">
                        <a href="">
                            <span>Тренировки<br>в зале</span>
                        </a>
                        <a href="">
                            <span>Тренировки<br>в сноупарке</span>
                        </a>
                        <a href="">
                            <span>Участие<br>в соревнованиях</span>
                        </a>
                    </div>
                    <a href="/timeline" class="big-animate">
                        <span>Расписание тренировок и запись</span>
                    </a>
                </div>
            </div>
        </page>
        <page name="Тренировки">
            <img src="/uploads/ccb497c7c8c47655a602b2bbd4eb1ce81a6b8007.jpg" alt="Home" class="video slide-3">
            <div class="overlay-video darkblue" data-ng-class="{'disable':hideContent}"></div>
            <div class="home-content" data-ng-class="{'disable':hideContent}">
                <h2>Тренировки</h2>
                <div class="home-content-desc">
                    <p>Один из менее распространённых, но стремительно набирающим популярность видом занятий являются тренировки на батутах. Несмотря на их новизну, такие занятия способны превзойти даже самые интенсивные кардиотренировки, а также помогут задействовать те группы мышц, которые сложно тренировать при обычных условиях. Прыжки на батуте всегда воспринимались как детское развлечение, так почему бы не порадовать себя и не вернуться в детство, принося при этом пользу своему организму, совмещая полезное с приятным.&nbsp;</p>
                </div>
                <div class="links">
                    <div class="group">
                        <a href="">
                            <span>Групповые и индивидуальные<br>тренировки</span>
                        </a>
                        <a href="">
                            <span>Детские<br>тренировки</span>
                        </a>
                        <a href="">
                            <span>Тренерский<br>состав</span>
                        </a>
                    </div>
                    <a href="/timeline" class="big-animate">
                        <span>Расписание тренировок и запись</span>
                    </a>
                </div>
            </div>
        </page>
        <page name="Праздники и корпоративы">
            <img src="/uploads/f52678ee07bb6088e7a91d2d5c90ebb1f0d44443.jpg" alt="Home" class="video">
            <div class="overlay-video red" data-ng-class="{'disable':hideContent}"></div>
            <div class="home-content" data-ng-class="{'disable':hideContent}">
                <h2>Проведи праздник весело и активно</h2>
                <div class="home-content-desc">
                    <p>В нашем парке вы можете провести любое мероприятие.
                        <br /> Это могут быть дни рождения, корпоративные праздники и программы,
                        <br /> спортивные чемпионаты и тд.
                    </p>
                </div>
                <div class="links">
                    <div class="group">
                        <a href="">
                            <span>День рождения</span>
                        </a>
                        <a href="">
                            <span>Корпоратив</span>
                        </a>
                        <a href="">
                            <span>Цены на проведение мероприятий</span>
                        </a>
                    </div>
                    <a href="" class="big-animate">
                        <span>Забронировать мероприятие</span>
                    </a>
                </div>
            </div>
        </page>
        <page name="Акции">
            <img src="/uploads/51b97c0bc8c87c5298d88552c36bd72493575039.jpg" alt="Home" class="video">
            <div class="overlay-video green"></div>
            <div class="home-content" data-ng-class="{'disable':hideContent}">
                <h2>Акции</h2>
                <div class="home-content-desc">
                    <div class="action-list">
                        <div class="list">
                            <a href="" class="action-item item-1">
                                <div class="action-title">ДЕТЯМ ДО 7 ЛЕТ БЕСПЛАТНО</div>
                                <div class="action-desc">
                                    <span>По билету взрослого (старше 18 лет) проход бесплатно (скидка 100%)</span>
                                </div>
                            </a>
                        </div>
                        <div class="list">
                            <a href="" class="action-item item-2">
                                <div class="action-title">ДЛЯ МНОГОДЕТНЫХ СЕМЕЙ</div>
                                <div class="action-desc">
                                    <span>Скидка на семью 20% при наличии удостоверении</span>
                                </div>
                            </a>
                            <a href="" class="action-item item-3">
                                <div class="action-title">ЛЮДЯМ С ДОПОЛНИТЕЛЬНЫМИ ПОТРЕБНОСТЯМИ</div>
                                <div class="action-desc">
                                    <span>Скидка на одного 20%, при наличии удостоверения</span>
                                </div>
                            </a>
                        </div>
                        <div class="list">
                            <a href="" class="action-item item-4">
                                <div class="action-title">БЕЗЛИМИТ ЗА РЕПОСТ</div>
                                <div class="action-desc">
                                    <span>С 20.00 и до закрытия - 300 руб. (во все дни, кроме субботы)</span>
                                </div>
                            </a>
                            <a href="" class="action-item item-5">
                                <div class="action-title">СКИДКА ВСЕМ ПОСЕТИТЕЛЯМ В ДЕНЬ РОЖДЕНИЯ</div>
                                <div class="action-desc">
                                    <span>В день рождения, за 3 дня до и после имениннику и его гостям скидка 20%!</span>
                                </div>
                            </a>
                            <a href="" class="action-item item-6">
                                <div class="action-title">НОЧЬ ПРЫЖКОВ</div>
                                <div class="action-desc">
                                    <span>В ночь с субботы на воскресенье, с 23:00 до 5:00 утра!</span>
                                </div>
                            </a>
                        </div>
                        <div class="list">
                        </div>
                    </div>
                </div>
            </div>
        </page>
    </pages>
</div>


@endsection