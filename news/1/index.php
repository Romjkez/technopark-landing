<!DOCTYPE html>
<html lang="ru">
<?php
require_once '../../components/head.php';
getHead('Открыта запись на курс «АВТОКОНСТРУИРОВАНИЕ» | ', 2);
?>
<style>body {background: linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px, linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0, linear-gradient(27deg, #222 5px, transparent 5px) 0 10px, linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px, linear-gradient(90deg, #1b1b1b 10px, transparent 10px), linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);background-color: #131313;background-size: 20px 20px}
    .card img {max-height:450px;object-fit:cover}
    .card ul.list-unstyled li:before{content:'✔ ';color: #ed7b07}
    @media (max-width: 350px){h4.card-title{text-align: center;font-size: 1.22rem}li{margin-top:.5rem}}
    @media (max-width: 400px){h4.card-title {text-align: center;font-size: 1.35rem}li{margin-top:.4rem}}</style>
<body>
<main class="container">
    <div class="row align-items-center justify-content-center">
        <div class="card">
            <img src="../../assets/img/QLJI1VQ2J6E.jpg" class="card-img-top" alt="Фотография">
            <div class="card-body col-xl-10 offset-xl-1">
                <h4 class="card-title">Открыта запись на курс «АВТОКОНСТРУИРОВАНИЕ»</h4>
                <span class="card-text">КУРС «АВТОКОНСТРУИРОВАНИЕ» - это:</span>
                <ul class="list-unstyled">
                    <li>Основы инженерии и инженерные процессы</li>
                    <li>Изучение систем современного автомобиля;</li>
                    <li>Самостоятельная настройка компонентов транспортного средства</li>
                    <li>Специально разработанный преподавателями @mospolytech образовательный конструктор Educar</li>
                    <li>Теоретические знания - в VR-формате</li>
                    <li>Разработка концепции и реализация проекта</li>
                    <li>Проведение испытаний различных конфигураций модели</li>
                </ul>
                <p class="mt-3">В лаборатории используется современное оборудование: образовательный конструктор EDUCAR
                    (имитирующий
                    реальные детали автомобиля), образовательный VR-курс, 3D-принтер, станки с ЧПУ.</p>

                <h3 class="text-center my-4">СТАРТ курса - <span style="color:#ed7b07">26</span> августа</h3>

                <div class="btnBlock d-flex justify-content-center mb-3">
                    <button data-toggle="modal" data-target=".bd-modal-order">Записаться</button>
                </div>

                <h5>Наши образовательные и индустриальные партнеры:</h5>
                <ul>
                    <li>Образовательный партнер - ООО МИП «Сабер»;</li>
                    <li>Транспортный факультет Московского Политеха;</li>
                    <li>Индустриальный партнер - Ассоциация «Автонет», “Motul”.</li>
                </ul>

                <p class="card-text text-right"><small class="text-muted">14 августа 2019</small></p>
            </div>
        </div>
    </div>
</main>
<?php
require_once '../../components/order-modal.php';
require_once '../../components/scripts.php';
getOrderModal(2);
getScripts(2);
?>
<script>$("input[type='tel']").mask("+7(999) 999-9999")</script>
</body>
</html>

