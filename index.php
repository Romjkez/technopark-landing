<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Детский технопарк</title>
    <meta name="description"
          content="Детский технопарк для школьников от Центра развития инжиниринга Московского Политеха">
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link href="assets/css/lib/bootstrap4_custom.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<header class="container-fluid headerWrapper">
    <div class="header col-12"><h1 class="text-center">Детский технопарк</h1></div>
</header>
<main class="container-fluid">
    <div class="row">
        <div class="about text-right col-sm-4 offset-sm-8 col-xl-3 offset-xl-8 col-xxl-2 offset-xxl-8 line-left"><p>О <span class="font-weight-bold">НАС</span></p></div>
    </div>
    <div class="row">
        <div class="childrenTechnopark col-xl-5 offset-xl-1 col-xxl-4 col-12 offset-xxl-2 offset-0"><h2 class="font-weight-bold">ДЕТСКИЙ <span>ТЕХНОПАРК</span> ЦРИ</h2>
            <p>- это инженерно-технологический комплекс, на базе которого
                проводятся углубленные технико-ориентированные курсы
                дополнительного образования для школьников.</p>
        </div>
    </div>
    <div class="row">
        <div class="photoGallery col-12 text-center">
            <a href="assets/img/4.jpg" data-fancybox="gallery" class="font-weight-bold">Фотогалерея ></a>
            <?php
            for($i=5;$i<41;$i++){
                echo '<a href="assets/img/' . $i . '.jpg" data-fancybox="gallery" hidden></a>';
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="whyUs col-sm-7 offset-sm-0 col-xl-5 offset-xl-1 col-xxl-4 offset-xxl-2 line-right"><p>ПОЧЕМУ <span class="font-weight-bold">НАС</span> ВЫБИРАЮТ</p></div>
    </div>
    <div class="row">
        <div class="sideImage col-sm-5 offset-sm-0 offset-xl-0 col-xl-5 offset-xxl-1 col-xxl-4">
            <div class="sideImage__content d-flex align-items-center justify-content-end"><img src="assets/img/sideImage.jpg" alt=""></div></div>
        <div class="description col-sm-6 offset-sm-0 col-xl-6 offset-xl-1 offset-xxl-1 col-xxl-4">
            <h2 class="font-weight-bold">ДЕТСКИЙ ТЕХНОПАРК</h2>
        <p>- помогает учащимся определиться с направлением
            будущей специальности;<br>
            - дает возможность создавать проекты для участия
            в конкурсах и олимпиадах, что поможет получить
            до 10 баллов к ЕГЭ при поступлении в ВУЗ
        </p></div>
    </div>
    <div class="row">
        <div class="groupsInfo col-12 text-center font-weight-bold">
            <p><span>Возраст обучающихся: 14-17 лет</span> Численность группы: 15 человек</p>
        </div>
    </div>
    <div class="row">
        <div class="activities text-right col-sm-7 offset-sm-5 col-xl-5 offset-xl-6 col-xxl-4 offset-xxl-6 line-left"><p>НАПРАВЛЕНИЯ <span class="font-weight-bold">ТЕХНОПАРКА</span></p></div>
    </div>
    <div class="row">
        <div class="activity offset-xl-0 col-xl-3 col-6 order-1 d-flex flex-column align-items-center">
            <div class="activityContent text-center">
                <img src="assets/img/activities1.jpg" alt="" draggable="false">
                <h5 class="font-weight-bold">Автоконструирование<br>и расчеты</h5>
                <button type="button" class="moreBtn" data-toggle="modal" data-target=".bd-modal-cars">Подробнее ></button>
            </div>
        </div>
        <div class="activity offset-xl-0 col-xl-3 col-6 order-0 order-md-1 d-flex flex-column align-items-center">
            <div class="activityContent text-center">
                <img src="assets/img/activities2.jpg" alt="" draggable="false">
                <h5 class="font-weight-bold">Беспилотная техника</h5>
                <button type="button" class="moreBtn" data-toggle="modal" data-target=".bd-modal-drones">Подробнее ></button>
            </div>
        </div>
        <div class="activity offset-xl-0 col-xl-3 col-6 order-0 order-md-2 d-flex flex-column align-items-center">
            <div class="activityContent text-center">
                <img src="assets/img/activities3.jpg" alt="" draggable="false">
                <h5 class="font-weight-bold">Транспортный дизайн</h5>
                <button type="button" class="moreBtn" data-toggle="modal" data-target=".bd-modal-design">Подробнее ></button>
            </div>
        </div>
        <div class="activity offset-xl-0 col-xl-3 col-6 order-1 order-md-3 d-flex flex-column align-items-center">
            <div class="activityContent text-center">
                <img src="assets/img/activities4.jpg" alt="" draggable="false">
                <h5 class="font-weight-bold">Аэрокосмическая<br>инженерия</h5>
                <button type="button" class="moreBtn" data-toggle="modal" data-target=".bd-modal-aerospace">Подробнее ></button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="requirements col-xl-10 offset-xl-1 col-xxl-8 offset-xxl-2 text-center">
            <h5 class="font-weight-bold">Курсы не требуют специальной подготовки, школьники всему обучаются в рамках программы.</h5>
        </div>
    </div>
    <div class="row">
        <div class="schedule col-sm-7 offset-sm-0 col-xl-5 offset-xl-1 col-xxl-4 offset-xxl-2 line-right"><p><span class="font-weight-bold">РАСПИСАНИЕ</span> ЗАНЯТИЙ</p></div>
    </div>
    <div class="row">
        <p class="scheduleInfo col-xl-9 offset-xl-1 offset-xxl-2 col-xxl-8">Занятия проводятся каждые ПОНЕДЕЛЬНИК и ПЯТНИЦУ.</p>
    </div>
    <div class="row">
        <div class="scheduleElem font-weight-bold col-12 col-sm-4 col-xl-2 offset-xl-1 col-xxl-2 offset-xxl-2">
            <div class="scheduleElemInner d-flex flex-column">
                <div class="scheduleElem__actType"><span>занятие</span></div>
                <div class="scheduleElem__time"><span>16:00-<br>17:30</span></div>
            </div>
        </div>
        <div class="scheduleElem font-weight-bold col-12 col-sm-4 col-xl-2 offset-xl-2 col-xxl-2 offset-xxl-1">
            <div class="scheduleElemInner d-flex flex-column">
                <div class="scheduleElem__actType"><span>перерыв</span></div>
                <div class="scheduleElem__time"><span>17:30-<br>17:45</span></div>
            </div>
        </div>
        <div class="scheduleElem font-weight-bold col-12 col-sm-4 col-xl-2 offset-xl-2 col-xxl-2 offset-xxl-1">
            <div class="scheduleElemInner d-flex flex-column">
                <div class="scheduleElem__actType"><span>занятие</span></div>
                <div class="scheduleElem__time"><span>17:45-<br>19:00</span></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="courseInfo col-lg-10 offset-lg-1 col-xl-10 offset-xl-1 col-xxl-6 offset-xxl-3 text-center">
            <h5 class="font-weight-bold">Продолжительность каждого курса: 36 часов (2,5 месяца)</h5>
            <br>
            <p class="text-left">- день открытых дверей мы проводим каждую среду,<br>
                - информацию обо всех интересных мероприятиях и мастер-классах ищите в социальных сетях!</p>
        </div>
    </div>
    <div class="row">
        <div class="courseCostHeader text-right col-sm-7 offset-sm-5 col-xl-4 offset-xl-7 col-xxl-3 offset-xxl-7 line-left"><p>СТОИМОСТЬ <span class="font-weight-bold">ОБУЧЕНИЯ</span></p></div>
    </div>
    <div class="row justify-content-center">
        <div class="courseType text-center" data-tooltip="Подготовит Вашего ребенка к олимпиадам и конкурсам, а также к поступлению в институт." >
            <div class="courseType__length">
                <h2 class="font-weight-bold"><span>72</span> часа</h2>
                <p>продвинутый курс</p>
            </div>
            <div class="courseType__cost">
                <h3>24 000 Р</h3>
            </div>
            <button href="#contacts" class="orderBtn">Заказать</button>
            <div id="hint"></div>
        </div>
        <div class="courseType text-center">
            <div class="courseType__length">
                <h2 class="font-weight-bold"><span>36</span> часов</h2>
                <p>углубленный курс</p>
            </div>
            <div class="courseType__cost">
                <h3>12 000 Р</h3>
            </div>
            <button href="#contacts" class="orderBtn">Заказать</button></div>
    </div>
    <?php
    // output banner
    if (strtotime('31 December 2017') > strtotime('now')) {
        echo '<div class="row"><div class="banner col-12 d-flex justify-content-center" data-toggle="modal" data-target=""></div></div>';
    }
    ?>
    <div class="row">
        <div class="contactsHeader col-sm-5 offset-sm-0 col-xl-3 offset-xl-1 col-xxl-2 offset-xxl-2 line-right font-weight-bold"><p>КОНТАКТЫ</p></div>
    </div>
    <div id="contacts" class="row">
        <div class="option col-12">Для заказа Вы можете выбрать любой удобный для Вас способ:</div>
    </div>
    <div class="row">
        <div class="contacts col-xl-4 offset-xl-1 col-xxl-3 offset-xxl-2 order-1 order-xl-0 d-flex flex-column">
            <div class="contacts__email">
                <img src="assets/img/mail.svg" alt="Email" draggable="false">
                <a href="mailto:dtech.edc@gmail.com">dtech.edc@gmail.com</a>
            </div>
            <div class="contacts__phone">
                <img src="assets/img/phone.svg" alt="Phone" draggable="false">
                <a href="tel:+79150027251">+7 (915) 002-72-51</a>
            </div>
        </div>
        <div class="peopleContacts col-xl-6 col-xxl-5 order-0 order-xl-1 d-flex justify-content-center align-items-center">
            <p>Администратор - Антонова Александра <span>+7 (926) 227-31-88</span><br>
                Маркетолог - Хлопцева Екатерина <span>+7 (968) 904-84-06</span><br><br>
                Время работы - с <span>9.30</span> до <span>20.00</span> Пн-Сб, Вс - выходной
            </p>
        </div>
    </div>
    <div class="row">
        <div class="locationInfo col-12 col-xl-8 offset-xl-1 col-xxl-7 offset-xxl-2 d-flex align-items-center">
            <img src="assets/img/mapMarker.svg" alt="Location" draggable="false">
            <p>м. Авиамоторная, Лефортовский Вал, 26 (трамвайная остановка Лефортовский вал)
                <br>трамваи - 24,37,40 от остановки м. Авиамоторная</p>
        </div>
    </div>
</main>
<footer class="container-fluid footer">
    <div class="locationMap row col-12">
        <iframe title="Расположение технопарка на карте" src="https://yandex.ru/map-widget/v1/-/CBBoI8Bj2D"
                frameborder="0" allowfullscreen="false"></iframe>
    </div>
    <div class="row">
        <div class="social col-12 col-sm-6 offset-sm-3 col-xl-4 offset-xl-4 col-xxl-3 offset-xxl-4 d-flex justify-content-around">
            <a href="https://vk.com/technoparkedc"><img src="assets/img/vk.svg" alt="VK"></a>
            <a href="https://www.instagram.com/technoparkedc"><img src="assets/img/instagram.svg" alt="Instagram"></a>
            <a href="https://www.facebook.com/TechnoparkEDC"><img src="assets/img/facebook.svg" alt="Facebook"></a>
        </div>
    </div>
</footer>
<!--Modal windows for "Подробнее" -->
<div class="modal fade bd-modal-cars" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body padding-lg">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" class="close btn-close font-weight-normal" data-dismiss="modal" aria-label="Close" data-target=".bd-modal-cars"></button>
                        <section class="col-12 col-lg-6 activityModalInfo">
                            <div class="activityModalInfo__header d-flex justify-content-between align-items-center">
                                <div></div>
                                <h5 class="font-weight-bold text-right">Автоконструирование и расчеты</h5>
                            </div>
                            <div class="activityModalInfo__content text-justify">
                                <p>Образовательная программа включает в себя изучение систем современного автомобиля. Ученики не только узнают о том, как эти системы устроены, но и самостоятельно смогут произвести установку и настройку компонентов транспортного средства на базе специально разработанного образовательного конструктора EDUCAR.</p>
                                <p>Теоретические знания подаются в интерактивной форме - их основой являются лекции, записанные в <span>формате виртуальной реальности</span>, обеспечивающие полное погружение слушателей в учебный процесс. Практическая часть обеспечивает закрепление полученных знаний посредством работы с <span>образовательным конструктором.</span></p>
                                <p class="lastP">В лаборатории используется современное оборудование: образовательный конструктор EDUCAR (имитирующий реальные детали автомобиля), образовательный VR-курс, 3D-принтер, станки с ЧПУ.</p>
                            </div>
                        </section>
                        <section class="col-12 col-lg-6 activityModalAdditional d-flex flex-column align-items-center">
                            <div class="activityModalAdditional__image d-flex justify-content-center w-100">
                                <img class="d-block" src="assets/img/activities1.jpg" alt="" draggable="false">
                            </div>
                            <div class="activityModalAdditional__list">
                                <ul>
                                    <li>Основы инженерии и инженерные процессы.</li>
                                    <li>Автомобильные системы: установка и настройка компонентов транспортного средства.</li>
                                    <li>Инженерия автоспорта, навигационные системы.</li>
                                    <li>Проведение испытаний различных конфигураций модели.</li>
                                </ul>
                            </div>
                            <div class="activityModalAdditional__partners">
                                <p>Образовательный партнер: ООО МИП «Сабер»,<br>
                                    Транспортный факультет Московского Политеха.<br>
                                    Индустриальный партнер: Ассоциация «Автонет»<br>
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-modal-drones" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body padding-lg">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" class="close btn-close font-weight-normal" data-dismiss="modal" aria-label="Close" data-target=".bd-modal-cars"></button>
                        <section class="col-12 col-lg-6 activityModalInfo">
                            <div class="activityModalInfo__header d-flex justify-content-between align-items-center">
                                <div></div>
                                <h5 class="font-weight-bold text-right">Беспилотная техника</h5>
                            </div>
                            <div class="activityModalInfo__content text-justify">
                                <p>В лаборатории «Беспилотная техника» мы предлагаем погрузиться в самую передовую область современной инженерии. Здесь нет никаких "детских" задач: применяются реальные программные и аппаратные инструменты, используемые для разработки беспилотного транспорта.</p>
                                <p>В рамках обучения учащиеся приобретут компетенции и практические навыки в области <span>беспилотного транспорта</span> и <span>инженерно-конструкторской деятельности</span> в целом. </p>
                                <p>Участники программы получают предметные компетенции, связанные с <span>программированием</span> и <span>конструированием</span>, одновременно с опытом работы в команде над сложной задачей.</p>
                                <p class="lastP">В лаборатории используется современное оборудование: станки с ЧПУ, 3D-принтер, высокопроизводительные ноутбуки,  специальное программное обеспечение, паяльные станции, конструктор AURORA, конструктор Maсhinecraft.Visio.</p>
                            </div>
                        </section>
                        <section class="col-12 col-lg-6 activityModalAdditional d-flex flex-column align-items-center">
                            <div class="activityModalAdditional__image d-flex justify-content-center w-100">
                                <img class="d-block" src="assets/img/activities2.jpg" alt="" draggable="false">
                            </div>
                            <div class="activityModalAdditional__list">
                                <ul>
                                    <li>Программирование и конструирование.</li>
                                    <li>Реализация алгоритмов начала движения, остановки, поворота.</li>
                                    <li>Работа с инфракрасными и ультразвуковыми датчиками.</li>
                                    <li>Алгоритмическое детектирование и  распознавание дорожных знаков.</li>
                                    <li>Детектирование участников движения.</li>
                                    <li>Распознавание дорожной разметки</li>
                                </ul>
                            </div>
                            <div class="activityModalAdditional__partners">
                                <p>Образовательный партнер: ООО «Аврора Техно»,<br>
                                    ООО «Образование будущего».<br>
                                    Индустриальный партнер: ООО «Аврора Техно».
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-modal-design" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body padding-lg">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" class="close btn-close font-weight-normal" data-dismiss="modal" aria-label="Close" data-target=".bd-modal-cars"></button>
                        <section class="col-12 col-lg-6 activityModalInfo">
                            <div class="activityModalInfo__header d-flex justify-content-between align-items-center">
                                <div></div>
                                <h5 class="font-weight-bold text-right">Транспортный дизайн</h5>
                            </div>
                            <div class="activityModalInfo__content text-justify">
                                <p>В данной лаборатории школьники могут познакомиться с основами <span>дизайна транспортных средств.</span></p>
                                <p>В рамках образовательной программы преподаватели кафедры «Дизайн» Московского Политеха научат основам автомобильного рисунка, макетирования, а также 3D-моделирования с помощью современного оборудования.</p>
                                <p class="lastP">В лаборатории используется современное оборудование: графические планшеты со специальным программным обеспечением, интерактивная доска, образовательный конструктор EDUVEL, 3D-принтер.</p>
                            </div>
                        </section>
                        <section class="col-12 col-lg-6 activityModalAdditional d-flex flex-column align-items-center">
                            <div class="activityModalAdditional__image d-flex justify-content-center w-100">
                                <img class="d-block" src="assets/img/activities3.jpg" alt="" draggable="false">
                            </div>
                            <div class="activityModalAdditional__list">
                                <ul>
                                    <li>Специальный и аналоговый рисунок (в том числе - изображение автомобиля).</li>
                                    <li>3D Моделирование.</li>
                                    <li>Макетирование с помощью различных материалов.</li>
                                    <li>Устройство автомобиля.</li>
                                </ul>
                            </div>
                            <div class="activityModalAdditional__partners">
                                <p>Образовательный партнер: ООО МИП «Сабер»,<br>
                                    кафедра «Дизайн» Московского Политеха.<br>
                                    Индустриальный партнер: People Design (People Design
                                    Srl, г. Болонья, Италия).
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-modal-aerospace" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body padding-lg">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" class="close btn-close font-weight-normal" data-dismiss="modal" aria-label="Close" data-target=".bd-modal-cars"></button>
                        <section class="col-12 col-lg-6 activityModalInfo">
                            <div class="activityModalInfo__header d-flex justify-content-between align-items-center">
                                <div></div>
                                <h5 class="font-weight-bold text-right">Аэрокосмическая инженерия</h5>
                            </div>
                            <div class="activityModalInfo__content text-justify">
                                <p>Данная программа предлагает ознакомиться с космической инженерией еще на этапе школы, что даст ученикам общее представление об инженерной деятельности, а также поможет определиться с выбором профессии в будущем.</p>
                                <p>Одной из отличительных черт этого направления является то, что деятельность учащихся охватывает широкий спектр направлений: от умения работать руками до уверенных навыков программирования и моделирования. Таким образом, учащийся сможет <span>попробовать</span> себя в любом деле и <span>определиться</span> с тем, что ему больше нравится.</p>
                                <p>Помимо этого, при переходе к проектной деятельности становится особенно важным <span>умение работать в команде</span>, так как одному человеку, как правило, не под силу решить разного рода задачи, которые лежат в основе проектирования космической техники.</p>
                                <p class="lastP">В лаборатории используется современное оборудование: Таблетсат – конструктор, испытательный стенд Таблетсат-Терра, Центр прием данных Вьюнок, наборы «РокетСтарт», «Спутники не падают на Землю», «Исполнительные устройства», «Электропитание спутника», «Датчики на спутнике», 3D-принтер, высокопроизводительные ноутбуки, специальное программное обеспечение.</p>
                            </div>
                        </section>
                        <section class="col-12 col-lg-6 activityModalAdditional d-flex flex-column align-items-center">
                            <div class="activityModalAdditional__image d-flex justify-content-center w-100">
                                <img class="d-block" src="assets/img/activities4.jpg" alt="" draggable="false">
                            </div>
                            <div class="activityModalAdditional__list">
                                <ul>
                                    <li>Основы космической инженерии.</li>
                                    <li>Космические аппараты и условия их пребывания на орбите.</li>
                                    <li>Программирование.</li>
                                    <li>Основы ракетостроения.</li>
                                    <li>Изучение воздействия магнитного поля.</li>
                                    <li>Моделирование работы спутника и сборка модели спутника.</li>
                                    <li>Прием данных с реальных спутников.</li>
                                </ul>
                            </div>
                            <div class="activityModalAdditional__partners">
                                <p>Образовательный партнер: ООО «Образование будущего».<br>
                                    Индустриальный партнер: ООО «СПУТНИКС».
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="assets/css/lib/jquery.fancybox.min.css" rel="stylesheet">
<script src="assets/js/jquery3.3.5.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    window.onload=function () {
    if(screen.width>768){
        $("[data-tooltip]").mousemove(function (eventObject) {
            $data_tooltip = $(this).attr("data-tooltip");
            $("#hint").text($data_tooltip).css({"top" : eventObject.pageY + 5, "left" : eventObject.pageX + 5,}).show();
        }).mouseout(function () {
            $("#hint").hide().text("").css({"top" : 0, "left" : 0});});
    }
        // smooth scroll to anchor
        $(function(){$("button[href^='#']").click(function(){var _href = $(this).attr("href");$("html, body").animate({scrollTop: $(_href).offset().top+"px"});return false;});});
    }
</script></body></html>