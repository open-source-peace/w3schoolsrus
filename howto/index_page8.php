<?php include '../include/head_howto.php'; ?>
    <title>Учебник - Как сделать? - HTML, CSS, JavaScript. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Как сделать с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Примеры кода. <?php include '../include/description.php'; ?>'>
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

    <article>
        <h1>W3Schools <span class="color_h1">Как сделать? Готовые решения (сниппеты) для сайтов</span></h1>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page7.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index.php'>Next &#10095;</a>
        </div>
        <hr>
        <p class="intro"><strong>Сниппеты. Готовые решения для сайтов. Фрагменты кода HTML, CSS и JavaScript.</strong></p>
        <p>Вы можете использовать данные готовые решения (сниппеты) на своих сайтах. Это ускорит и облегчит вам написание кода веб-страниц. В данных примерах используются всего лишь три технологии: <strong>HTML + CSS + JavaScript</strong>. Вы можете изменять данный готовый код (например, стилизацию страниц с помощью CSS), приспосабливая его для своих веб-проектов.</p>
        <div id="testtest">
            <hr>
            <div class="howtocontainer">
                <div style="max-width:972px;margin:auto;">
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_fullscreen_video.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Полноэкранное видео фона</a></h2>
                        <iframe src="../howtotryit/tryhow_css_fullscreen_video_ifr.html" style="border:11px solid #f1f1f1;border-radius:5px;width:100%;height:700px"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_fullscreen_video.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_calendar.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Календарь</a></h2>
                        <div class="month">
                            <ul>
                                <li class="prev">&#10094;</li>
                                <li class="next">&#10095;</li>
                                <li style="text-align:center">
                                    August<br>
                                    <span style="font-size:18px">2021</span>
                                </li>
                            </ul>
                        </div>

                        <ul class="weekdays">
                            <li>Mo</li>
                            <li>Tu</li>
                            <li>We</li>
                            <li>Th</li>
                            <li>Fr</li>
                            <li>Sa</li>
                            <li>Su</li>
                        </ul>

                        <ul class="days">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li><span class="active">10</span></li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li>19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li>25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                        </ul>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_calendar.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        #myifr {height:200px;}
                        @media screen and (max-width: 711px) {
                            #myifr {height:500px;}
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_responsive_navbar_dropdown.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Адаптивная навигационная панель с раскрывающимся списком</a></h2>
                        <iframe src="../howtotryit/tryhow_js_responsive_navbar_dropdown_ifr.html" class="w3-border" style="width:100%;" id="myifr"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_js_responsive_navbar_dropdown.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        .splitbtn {
                            background-color: #2196F3;
                            color: white;
                            padding: 16px;
                            font-size: 16px;
                            border: none;
                        }
                        .splitdropdown {
                            position: absolute;
                            display: inline-block;
                        }
                        .splitdropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #f1f1f1;
                            min-width: 160px;
                            z-index: 1;
                        }
                        .splitdropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }
                        .splitdropdown-content a:hover {background-color: #ddd}

                        .splitdropdown:hover .splitdropdown-content {
                            display: block;
                        }
                        .splitbtn:hover, .splitdropdown:hover .splitbtn {
                            background-color: #0b7dda;
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_button_split.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Разделитель кнопок</a></h2>
                        <button class="splitbtn">Кнопка</button>
                        <div class="splitdropdown">
                            <button class="splitbtn" style="border-left:1px solid #0d8bf2"><i class="fa fa-caret-down"></i></button>
                            <div class="splitdropdown-content">
                                <a href="javascript:void(0)">Ссылка 1</a>
                                <a href="javascript:void(0)">Ссылка 2</a>
                                <a href="javascript:void(0)">Ссылка 3</a>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_button_split.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_website_bootstrap4.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Сделать веб-сайт с помощью Bootstrap</a></h2>
                        <iframe src="../howtotryit/tryhow_website_bootstrap4_ifr.html" class="w3-round" style="width:100%;border:4px solid #d3d3d3;height:600px"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_website_bootstrap4.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_navbar_hide_scroll.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Скрыть меню при прокрутке</a></h2>
                        <iframe src="../howtotryit/tryhow_js_navbar_hide_scroll.html" class="w3-round w3-hide-small" style="width:100%;border:4px solid #d3d3d3;height:300px"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_js_navbar_hide_scroll.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_navbar_shrink_scroll.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Сжать меню при прокрутке </a></h2>
                        <iframe src="../howtotryit/tryhow_js_navbar_shrink_scroll_ifr.html" class="w3-round w3-hide-small" style="width:100%;border:4px solid #d3d3d3;height:410px"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_js_navbar_shrink_scroll.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_sticky_social_bar.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Липкая социальная панель</a></h2>
                        <iframe src="../howtotryit/tryhow_css_sticky_social_bar_ifr.html" class="w3-round w3-hide-small" style="width:100%;border:4px solid #d3d3d3;height:280px"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_sticky_social_bar.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        .x{
                            width: 100%;
                            padding: 12px;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            box-sizing: border-box;
                            resize: vertical;
                        }
                        .label {
                            padding: 12px 12px 12px 0;
                            display: inline-block;
                        }
                        .sub {
                            background-color: #2196F3;
                            color: white;
                            padding: 12px 20px;
                            border: none;
                            border-radius: 4px;
                            cursor: pointer;
                            float: right;
                        }
                        .sub:hover {
                            background-color: #0a6fc2;
                        }
                        .xcontainer {
                            border-radius: 5px;
                            background-color: #f2f2f2;
                            padding: 20px;
                        }
                        .col-25 {
                            float: left;
                            width: 25%;
                            margin-top: 6px;
                        }
                        .col-75 {
                            float: left;
                            width: 75%;
                            margin-top: 6px;
                        }
                        /* Clear floats after the columns */
                        .row:after {
                            content: "";
                            display: table;
                            clear: both;
                        }
                        @media (max-width: 992px) {
                            .col-25, .col-75, input[type=submit] {
                                width: 100%;
                                margin-top: 0;
                            }
                        }

                    </style>
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_responsive_form.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Адаптивная форма</a></h2>
                        <div class="xcontainer">
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname" class="label">Имя</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" class="x" id="fname" name="firstname" placeholder="Ваше имя..">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="lname" class="label">Фамилия</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" class="x"  id="lname" name="lastname" placeholder="Ваша фамилия..">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="country" class="label">Страна</label>
                                </div>
                                <div class="col-75">
                                    <select id="country" name="country" class="x" >
                                        <option value="australia">Австралия</option>
                                        <option value="canada">Канада</option>
                                        <option value="usa">США</option>
                                        <option value="usa">Украина</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="subject" class="label">Тема</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="subject"  class="x" name="subject" placeholder="Напишите сообщение.." style="height:200px"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input type="button"  class="sub" value="Submit">
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_responsive_form.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <style>
                        .chrow {
                            display: -ms-flexbox; /* IE10 */
                            display: flex;
                            -ms-flex-wrap: wrap; /* IE10 */
                            flex-wrap: wrap;
                            margin: 0 -16px;
                        }
                        .chcol-25 {
                            -ms-flex: 25%; /* IE10 */
                            flex: 25%;
                        }
                        .chcol-50 {
                            -ms-flex: 50%; /* IE10 */
                            flex: 50%;
                        }
                        .chcol-75 {
                            -ms-flex: 75%; /* IE10 */
                            flex: 75%;
                        }
                        .chcol-25,
                        .chcol-50,
                        .chcol-75 {
                            padding: 0 16px;
                        }
                        .chcontainer {
                            background-color: #f2f2f2;
                            padding: 5px 20px 15px 20px;
                            border: 1px solid lightgrey;
                            border-radius: 3px;
                        }
                        .chrow input[type=text] {
                            width: 100%;
                            margin-bottom: 20px;
                            padding: 12px;
                            border: 1px solid #ccc;
                            border-radius: 3px;
                        }
                        .chrow label {
                            margin-bottom: 10px;
                            display: block;
                        }
                        .icon-container {
                            margin-bottom: 20px;
                            padding: 6px 0;
                            font-size: 24px;
                        }
                        .btnx {
                            background-color: #555;
                            color: white;
                            padding: 12px;
                            margin: 10px 0;
                            border: none;
                            width: 100%;
                            border-radius: 3px;
                            cursor: pointer;
                            font-size: 17px;
                        }
                        .btnx:hover {
                            background-color: #777;
                        }
                        a.linkr {
                            color: #2196F3;
                        }
                        .hr {
                            border: 1px solid lightgrey;
                        }
                        span.price {
                            float: right;
                            color: grey;
                        }
                        /* Адаптивный макет - при ширине экрана менее 800 пикселей расположите два столбца друг над другом, а не рядом друг с другом (также измените направление - установите столбец "тележка" вверху) */
                        @media (max-width: 800px) {
                            .chrow {
                                flex-direction: column-reverse;
                            }
                            .chcol-25 {
                                margin-bottom:20px;
                            }
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_checkout_form.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Форма оформления заказа</a></h2>
                        <div class="chrow">
                            <div class="chcol-75">
                                <div class="chcontainer">
                                    <div class="chrow">
                                        <div class="chcol-50">
                                            <h3>Платежный адрес</h3><br>
                                            <label for="fname"><i class="fa fa-user"></i> Полное имя</label>
                                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                            <input type="text" id="email" name="email" placeholder="john@example.com">
                                            <label for="adr"><i class="fa fa-address-card-o"></i> Адрес</label>
                                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                            <label for="city"><i class="fa fa-institution"></i> Город</label>
                                            <input type="text" id="city" name="city" placeholder="New York">
                                            <div class="chrow">
                                                <div class="chcol-50">
                                                    <label for="state">State</label>
                                                    <input type="text" id="state" name="state" placeholder="NY">
                                                </div>
                                                <div class="chcol-50">
                                                    <label for="zip">Zip</label>
                                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chcol-50">
                                            <h3>Оплата</h3><br>
                                            <label for="fname">Принимаемые карты</label>
                                            <div class="icon-container">
                                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                                            </div>
                                            <label for="cname">Имя на карте</label>
                                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                            <label for="ccnum">Номер кредитной карты</label>
                                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                            <label for="expmonth">Месяц</label>
                                            <input type="text" id="expmonth" name="expmonth" placeholder="August">
                                            <div class="chrow">
                                                <div class="chcol-50">
                                                    <label for="expyear">Год</label>
                                                    <input type="text" id="expyear" name="expyear" placeholder="2021">
                                                </div>
                                                <div class="chcol-50">
                                                    <label for="cvv">CVV</label>
                                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label>
                                        <input type="checkbox" checked="checked" name="sameadr"> Адрес доставки такой же, как и для выставления счета
                                    </label>
                                    <button class="btnx">Продолжить оформление заказа</button>
                                </div>
                            </div>
                            <div class="chcol-25">
                                <div class="chcontainer">
                                    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                                    <p><a class="linkr" href="javascript:void(0)" style="text-decoration:none">Пункт 1</a> <span class="price">$15</span></p>
                                    <p><a class="linkr" href="javascript:void(0)" style="text-decoration:none">Пункт 2</a> <span class="price">$5</span></p>
                                    <p><a class="linkr" href="javascript:void(0)" style="text-decoration:none">Пункт 3</a> <span class="price">$8</span></p>
                                    <p><a class="linkr" href="javascript:void(0)" style="text-decoration:none">Пункт 4</a> <span class="price">$2</span></p>
                                    <hr class="hr">
                                    <p>Итого: <span class="price" style="color:black"><b>$30</b></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_checkout_form.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        .comp {
                            border-collapse: collapse;
                            border-spacing: 0;
                            width: 100%;
                            border: 1px solid #ddd;
                        }
                        .comp th,.comp td {
                            text-align: center;
                            padding: 16px;
                        }
                        .comp th:first-child,.comp td:first-child {
                            text-align: left;
                        }
                        .comp tr:nth-child(even) {
                            background-color: #f2f2f2
                        }
                        .comp .fa-check {
                            color: green;
                        }
                        .comp .fa-remove {
                            color: red;
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_comparison_table.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Сравнительная таблица</a></h2>
                        <table class="comp">
                            <tr>
                                <th style="width:50%">Характеристики</th>
                                <th>Основные</th>
                                <th>Профессиональные</th>
                            </tr>
                            <tr>
                                <td>Пример текста</td>
                                <td><i class="fa fa-remove"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Пример текста</td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Пример текста</td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Пример текста</td>
                                <td><i class="fa fa-remove"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>SПример текста</td>
                                <td><i class="fa fa-check"></i></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                        </table>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_comparison_table.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <style>
                        img.filtergray {
                            -webkit-filter: grayscale(100%); /* Chrome, Safari, Opera */
                            filter: grayscale(100%);
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_image_bw.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Черно-белое изображение</a></h2>
                        <div class="w3-content" style="max-width:1000px">
                            <div class="w3-row-padding" style="margin:-16px -16px 24px -16px">
                                <div class="w3-half">
                                    <p>Оригинальное изображение</p>
                                    <img src="../images/pineapple.jpg" alt="Pineapple" class="w3-image" style="width:100%;">
                                </div>
                                <div class="w3-half">
                                    <p>Черное & Белое</p>
                                    <img class="w3-image filtergray" src="../images/pineapple.jpg" alt="Pineapple" style="width:100%;">
                                </div>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_image_bw.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        .x:focus {
                            background-color: #ddd!important;
                            outline: none;
                        }
                    </style>
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_register_form.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Регистрационная форма</a></h2>
                        <div style="border:4px solid #f1f1f1;font-family: Arial, Helvetica, sans-serif;font-size:17px;">
                            <div class="w3-container">
                                <h1><b>Регистрация</b></h1>
                                <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
                                <hr style="border: 1px solid #f1f1f1;margin-bottom: 25px;">

                                <div class="w3-section">
                                    <label><b>Email</b></label>
                                    <input class="w3-input w3-light-grey w3-margin-bottom x" style="border:0;padding:12px" type="text" placeholder="Введите email">
                                </div>
                                <div class="w3-section">
                                    <label><b>Пароль</b></label>
                                    <input class="w3-input w3-light-grey w3-margin-bottom x" type="text" style="border:0;padding:12px" placeholder="Введите пароль">
                                </div>
                                <div class="w3-section">
                                    <label><b>Повторите пароль</b></label>
                                    <input class="w3-input  w3-light-grey w3-margin-bottom x" style="border:0;padding:12px" type="text" placeholder="Повторите пароль">
                                    <p>Создавая учетную запись, вы соглашаетесь с нашими <a href="javascript:void(0)" style="color:dodgerblue">Условиями и конфиденциальностью</a>.</p>
                                </div>
                                <button class="w3-button w3-block w3-green w3-padding-16 w3-hover-green w3-opacity-min w3-hover-opacity-off">Зарегистрироваться</button></div>
                            <div class="w3-container w3-center w3-light-grey" style="margin-top:30px">
                                <p>Уже есть аккаунт? <a href="javascript:void(0)" style="color:dodgerblue">Войти</a></p>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_register_form.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        .mqifr2 {width:100%;padding:5px;height:384px;border:3px solid #f1f1f1}
                        /* Адаптивный макет - при ширине экрана менее 650 пикселей расположите два столбца друг над другом, а не рядом друг с другом */
                        @media screen and (max-width: 719px) {
                            .mqifr2 {
                                height:640px;
                            }
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_social_login.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Вход через социальные сети</a></h2>
                        <iframe class="mqifr2" src="../howtotryit/tryhow_css_social_login_ifr.html"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_social_login.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        .icn-input-container {
                            display: flex;
                            width: 100%;
                            margin-bottom: 15px;
                        }

                        .icn-icon {
                            white-space: nowrap;
                            background: dodgerblue;
                            padding:15px;
                            color: white;
                            min-width: 50px;
                            text-align: center;
                            vertical-align:bottom;
                        }

                        .icn-input-field {
                            width: 100%;
                            padding: 10px;
                            outline: none;
                        }

                        .icn-input-field:focus {
                            border: 2px solid dodgerblue;
                        }

                        /* Set a style for the submit button */
                        .icn-btn {
                            background-color: dodgerblue;
                            color: white;
                            padding: 12px 18px;
                            border: none;
                            cursor: pointer;
                            width: 100%;
                            opacity: 0.9;
                        }

                        .icn-btn:hover {
                            opacity: 1;
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_form_icon.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Форма с иконками</a></h2>
                        <div style="border:3px solid #ddd;font-family: Arial, Helvetica, sans-serif;font-size:17px;padding:10px 25px 25px 25px;">
                            <h2>Регистрация</h2>
                            <div class="icn-input-container">
                                <i class="fa fa-user icn-icon"></i>
                                <input class="icn-input-field" type="text" placeholder="Имя пользователя" name="usrnm">
                            </div>

                            <div class="icn-input-container">
                                <i class="fa fa-envelope icn-icon"></i>
                                <input class="icn-input-field" type="text" placeholder="Email" name="email">
                            </div>

                            <div class="icn-input-container">
                                <i class="fa fa-key icn-icon"></i>
                                <input class="icn-input-field" type="password" placeholder="Пароль" name="psw">
                            </div>

                            <button type="button" class="icn-btn">Зарегистрироваться</button>
                        </div>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_form_icon.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_blurred_background.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Размытое фоновое изображение</a></h2>
                        <iframe src="../howtotryit/tryhow_css_blurred_bg_ifr.html" style="width:100%;border:2px solid #f1f1f1;height:400px;"></iframe>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_css_blurred_background.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <style>
                        #more {display: none;}
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_read_more.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Читать больше Читать меньше</a></h2>
                        <div class="w3-light-grey" style="padding:8px 8px 20px 16px">
                            <h2>Пример текста</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
                            </p>
                            <button onclick="myreadMoreFunction()" id="myReadBtn" class="w3-button w3-dark-grey">Читать больше</button>
                            <script>
                                function myreadMoreFunction() {
                                    var dots = document.getElementById("dots");
                                    var moreText = document.getElementById("more");
                                    var btnText = document.getElementById("myReadBtn");

                                    if (dots.style.display === "none") {
                                        dots.style.display = "inline";
                                        btnText.innerHTML = "Читать больше";
                                        moreText.style.display = "none";
                                    } else {
                                        dots.style.display = "none";
                                        btnText.innerHTML = "Читать меньше";
                                        moreText.style.display = "inline";
                                    }
                                }</script>
                        </div>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_js_read_more.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_list_grid_view.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Список в виде сетки</a></h2>
                        <div id="myBtnContainer">
                            <button class="btnr" onclick="listView()"><i class="fa fa-bars"></i> Список</button>
                            <button class="btnr as" onclick="gridView()"><i class="fa fa-th-large"></i> Сетка</button>
                        </div>
                        <br>

                        <style>
                            /* Create three equal columns that floats next to each other */
                            .listcolumn {
                                float: left;
                                width: 50%;
                                padding: 10px;
                            }
                            /* Clear floats after the columns */
                            .listrow:after {
                                content: "";
                                display: table;
                                clear: both;
                            }
                            /* Style the buttons */
                            .btnr {
                                border: none;
                                outline: none;
                                padding: 12px 16px;
                                background-color: #f1f1f1;
                                cursor: pointer;
                            }
                            /* Add a gray background color to the active button */
                            .btnr:hover {
                                background-color: #ddd;
                            }
                            .btnr.as {
                                background-color: #666;
                                color:white;
                            }
                        </style>

                        <div class="listrow">
                            <div class="listcolumn" style="background-color:#aaa;">
                                <h2>Столбец 1</h2>
                                <p>Какой-то текст..</p>
                            </div>
                            <div class="listcolumn" style="background-color:#bbb;">
                                <h2>Столбец 2</h2>
                                <p>Какой-то текст..</p>
                            </div>
                        </div>
                        <div class="listrow">
                            <div class="listcolumn" style="background-color:#ccc;">
                                <h2>Столбец 3</h2>
                                <p>Какой-то текст..</p>
                            </div>
                            <div class="listcolumn" style="background-color:#ddd;">
                                <h2>Столбец 4</h2>
                                <p>Какой-то текст..</p>
                            </div>
                        </div>

                        <script>
                            // Get the elements with class="column"
                            var elements = document.getElementsByClassName("listcolumn");

                            // Declare a loop variable
                            var i;

                            // Four images side by side
                            function listView() {
                                for (i = 0; i < elements.length; i++) {
                                    elements[i].style.width = "100%";
                                }
                            }

                            // Two images side by side
                            function gridView() {
                                for (i = 0; i < elements.length; i++) {
                                    elements[i].style.width = "50%";
                                }
                            }
                            // Add active class to the current button (highlight it)
                            var btnContainer = document.getElementById("myBtnContainer");
                            var btnss = btnContainer.getElementsByClassName("btnr");
                            for (var j = 0; j < btnss.length; j++) {
                                btnss[j].addEventListener("click", function(){
                                    var current = document.getElementsByClassName("as");
                                    current[0].className = current[0].className.replace(" as", "");
                                    this.className += " as";
                                });
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="../howtotryit/howto_js_list_grid_view.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
        <hr>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page7.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index.php'>Next &#10095;</a>
        </div>
    </article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>