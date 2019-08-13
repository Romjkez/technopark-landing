<?php
function getOrderModal($level){
  $lvl = '';
  for ($i = 0; $i < $level; $i++) {
    $lvl .= '../';
  }
  echo '<div class="modal fade bd-modal-order" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body padding-lg">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" class="close btn-close font-weight-normal" data-dismiss="modal"
                                aria-label="Close" data-target=".bd-modal-bannerInfo"></button>
                        <div class="col-12 col-lg-5">
                            <img class="d-block w-100" src="'.$lvl.'assets/img/modalOrderPhoto.jpg"
                                 srcset="'.$lvl.'assets/img/modalOrderPhoto.jpg 1x,'.$lvl.'assets/img/modalOrderPhoto@2x.jpg 2x"
                                 alt="Фотография">
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1">
                            <h3 class="my-3">Записаться на курс</h3>
                            <div class="modalOrderInfo d-flex flex-wrap">
                                <div class="modalOrderInfo__telTitle w-25">Телефон:</div>
                                <div class="modalOrderInfo__telContent w-75">
                                    <a href="tel:+79150027251">+7 (915) 002-72-51</a><br>
                                    <a href="tel:+79262273188">+7 (926) 227-31-88</a>
                                </div>
                                <div class="modalOrderInfo__addressTitle w-25">Адрес:</div>
                                <div class="modalOrderInfo__addressContent w-75">ул. Лефортовский Вал, 26 Москва</div>
                                <div class="modalOrderInfo__emailTitle w-25">Email:</div>
                                <div class="modalOrderInfo__emailContent w-75"><a href="mailto:dtech.edc@gmail.com">dtech.edc@gmail.com</a>
                                </div>
                                <div class="modalOrderInfo__warning w-100"><b>*</b> - обязательные для заполнения поля
                                </div>
                            </div>

                            <form method="post"
                                  action="http://test.std-247.ist.mospolytech.ru/libs/mailer/technoparkOrder.php"
                                  id="orderForm">
                                <div class="form-group"><input class="form-control" type="text" placeholder="Имя *"
                                                               name="name" title="Как к вам обращаться?" required></div>
                                <div class="form-group"><input class="form-control" type="email" placeholder="Email *"
                                                               name="email"
                                                               title="Ваш контактный email, на него мы ответим вам"
                                                               required></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Телефон *"
                                                               name="phone" title="Контактный телефон для быстрой связи"
                                                               required></div>
                                <div class="form-group">
                                    <select class="form-control" title="Выберите интересующее направление" name="choice"
                                            required>
                                        <option value="Автоконструирование">Автоконструирование</option>
                                        <option value="Космос">Космос</option>
                                        <option value="Беспилотники">Беспилотники</option>
                                        <option value="Дизайн">Дизайн</option>
                                        <option value="Дизайн предметов среды. Витраж">Дизайн предметов среды. Витраж
                                        </option>
                                        <option value="Дизайн предметов среды. Мозаика">Дизайн предметов среды.
                                            Мозаика
                                        </option>
                                        <option value="3D-моделирование">3D-моделирование</option>
                                        <option value="Программирование на Python">Программирование на Python</option>
                                    </select></div>
                                <div class="form-group"><textarea class="form-control" name="message"
                                                                  placeholder="Сообщение"></textarea></div>
                                <div class="form-group d-flex justify-content-end">
                                    <button type="submit" class="btn" name="submit">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}
