<!DOCTYPE html>
<html lang="ru">
<?php
require_once '../../components/head.php';
getHead('Запуск всех курсов со 2 сентября | ', 2);
?>
<style>body {background: linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px, linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0, linear-gradient(27deg, #222 5px, transparent 5px) 0 10px, linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px, linear-gradient(90deg, #1b1b1b 10px, transparent 10px), linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);background-color: #131313;background-size: 20px 20px}
    .card img {max-height:450px;object-fit:cover}
    .card ul.list-unstyled li:before {content:'- ';color:#ed7b07}
    @media (max-width:350px){h4.card-title {text-align: center;font-size:1.22rem}li{margin-top:.5rem}}
    @media (max-width:400px){h4.card-title {text-align: center;font-size:1.35rem}li{margin-top:.4rem}}</style>
<body>
<main class="container">
    <div class="row align-items-center justify-content-center">
        <div class="card">
            <img src="../../assets/img/2ZMagiVNTOQ.jpg" class="card-img-top" alt="Фотография">
            <div class="card-body col-xl-10 offset-xl-1">
                <h4 class="card-title">Со 2 сентября (понедельник) мы запускаем ВСЕ наши направления! </h4>
                <ul class="list-unstyled">
                    <li>Транспортный дизайн 🚘</li>
                    <li>Photoshop🖍</li>
                    <li>Лентикулярис🛸</li>
                    <li>Беспилотный транспорт🚄</li>
                    <li>Введение в автомобилестроение⚙</li>
                    <li>Современная космонавтика 👩‍🚀</li>
                    <li>3D-моделирование 🌐</li>
                    <li>Программирование Python и С++🔣</li>
                    <li>Дизайн предметов среды. Мозаика 9+ 🖼</li>
                    <li>Дизайн предметов среды. Витраж 9+ 🌅</li>
                </ul>
                <h5 class="mt-4 text-center">Занятия будут проходить с 16:00-19:00</h5>
                <h5 class="text-center">Курс - 36 или 72 часа.</h5>

                <div class="btnBlock d-flex justify-content-center my-3">
                    <button data-toggle="modal" data-target=".bd-modal-order">Записаться</button>
                </div>
                <p class="card-text text-right"><small class="text-muted">11 августа 2019</small></p>
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
