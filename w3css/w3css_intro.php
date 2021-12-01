<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Интро. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Фреймворк W3.CSS. Полный курс. Примеры кода. Как быстро создать сайт? <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <style>
        .picture {display:none}
        .w3-btn {
            box-shadow: none;
        }
        .cursor {
            cursor:pointer
        }
        .w3-tangerine {
            font-family: 'Tangerine', serif;
            font-size: 64px;
        }
        .w3-lobster {
            font-family: 'Lobster', serif;
            font-size: 48px;
        }
        .mySlides {display:none}
        .testbtn {background-color:#f1f1f1;color:black}
        hr:not(.firsthr) {margin:30px 0;}
        .w3-section .w3-btn {margin-bottom:5px;}
        .noselection {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .w3-large .w3-left, .w3-large .w3-right, .demodots {cursor:pointer}
        .demodots {height:13px;width:13px;padding:0;background-color:transparent}
        .w3-text-grey {color:#9d9d9d !important;}
        @media screen and (max-width: 650px) {
            .modimgresp {
                width:40% !important;
            }
        }
        @media screen and (max-width: 601px) {
            .margtest {
                margin-bottom:10px;
            }
            .margtest2 {
                margin-bottom:30px;
            }
            .intronav li a {
                display:block;
            }
        }
        .animTest{font-size:40px;padding:64px 0;color:red;margin:0 50px}
        @media screen and (max-width: 401px) {
            .animTest{font-size:25px;padding:32px 0 16px 0}
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

    <article>
        <h1>W3.CSS <span class="color_h1">Введение</span>. Общее представление</h1>

        <div class="w3-clear nextprev">
            <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
            <a class="w3-right w3-btn" href="w3css_colors.php">Next &#10095;</a>
        </div>

        <hr>
        <h2>W3.CSS Цвета</h2>
        <p>Классы <a href="w3css_colors.php"><strong>w3-color</strong></a> основаны на современных цветах, используемыми в маркетинге, дорожными знаками и заметками:</p>
        <div class="w3-row">
            <div class="w3-quarter">
                <div class="w3-container w3-purple w3-center w3-padding-16"><p>&nbsp;</p></div>
                <div class="w3-container w3-green w3-center w3-padding-16"><p>&nbsp;</p></div>
            </div>
            <div class="w3-quarter">
                <div class="w3-container w3-pink w3-center w3-padding-16"><p>&nbsp;</p></div>
                <div class="w3-container w3-teal w3-center w3-padding-16"><p>&nbsp;</p></div>
            </div>
            <div class="w3-quarter w3-hide-small">
                <div class="w3-container w3-orange w3-text-whie w3-center w3-padding-16"><p>&nbsp;</p></div>
                <div class="w3-container w3-cyan w3-text-white w3-center w3-padding-16"><p>&nbsp;</p></div>
            </div>
            <div class="w3-quarter w3-hide-small">
                <div class="w3-container w3-yellow w3-center w3-padding-16"><p>&nbsp;</p></div>
                <div class="w3-container w3-lime w3-center w3-padding-16"><p>&nbsp;</p></div>
            </div>
        </div>
        <hr>

        <h2>W3.CSS Контейнеры</h2>
        <p>Класс <strong><a href="w3css_containers.php">w3-container</a></strong> является наиболее важным из классов W3.CSS. Это обеспечивает равенство, как:</p>
        <ul>
            <li>Общие поля (margin)</li>
            <li>Общие отступы (padding)</li>
            <li>Общие вертикальные выравнивания</li>
            <li>Общие горизонтальные выравнивания</li>
            <li>Общие шрифты</li>
            <li>Общие цвета</li>
        </ul>

        <p>Класс w3-container обычно используется с элементами HTML-контейнера, например:</p>
        <p>&lt;div&gt;, &lt;header&gt;, &lt;footer&gt;, &lt;article&gt;, &lt;section&gt;, &lt;blockquote&gt;, &lt;form&gt; и др.</p>

        <div class="w3-container w3-dark-grey">
            <h2>Это заголовок</h2>
        </div>
        <div class="w3-container w3-light-grey w3-text-brown">
            <p>
                Эта статья светло-серая, а текст коричневый.
                Эта статья светло-серая, а текст коричневый.
                Эта статья светло-серая, а текст коричневый.
                Эта статья светло-серая, а текст коричневый.
                Эта статья светло-серая, а текст коричневый.
            </p>
        </div>
        <div class="w3-container w3-dark-grey">
            <p class="w3-opacity">Это нижний колонтитул.</p>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Панели, заметки и цитаты</h2>
        <p>Класс <strong><a href="w3css_panels.php">w3-panel</a></strong> может отображать любые заметки и цитаты:</p>

        <div class="w3-container w3-round w3-border">
            <p>JavaScript — это мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили. Является реализацией стандарта ECMAScript (стандарт ECMA-262).</p>
        </div>
        <br>
        <div class="w3-container w3-light-grey w3-border">
            <p>Python — это высокоуровневый язык программирования общего назначения, ориентированный на повышение производительности разработчика и читаемости кода.</p>
        </div>
        <br>
        <div class="w3-container w3-pale-red w3-leftbar w3-border-red">
            <p>Java — строго типизированный объектно-ориентированный язык программирования, разработанный компанией Sun Microsystems (в последующем приобретённой компанией Oracle).</p>
        </div>
        <br>
        <div class="w3-container w3-pale-green w3-bottombar w3-border-green w3-border">
            <p>C++ (читается си-плюс-плюс) — компилируемый, статически типизированный язык программирования общего назначения.</p>
        </div>
        <br>
        <div class="w3-container w3-leftbar w3-sand">
            <p><i class="w3-xlarge w3-serif">"Помните — времени мало. Не тратьте его, чтобы жить чьей-то чужой жизнью. Не слушайте никого. Шум чужих мнений не должен заглушать ваш внутренний голос. Слушайте только свое Сердце и интуицию. Они откуда-то точно знают, кем вам быть и что делать.<br> А все остальное — не важно, просто не важно…"</i></p>
            <p>Стив Джобс</p>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Оповещения</h2>
        <p>Класс <strong><a href="w3css_alerts.php">w3-panel</a></strong> также может быть использован для всех видов оповещений:</p>
        <div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <h3>Опасность!</h3>
            <p>Красный цвет часто указывает на опасную или негативную ситуацию.</p>
        </div>

        <div class="w3-panel w3-yellow w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-yellow w3-large w3-display-topright">&times;</span>
            <h3>Предупреждение!</h3>
            <p>Желтый часто указывает на предупреждение, которое может потребовать внимания.</p>
        </div>

        <div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <h3>Успех!</h3>
            <p>Зеленый часто указывает на что-то успешное или положительное.</p>
        </div>

        <div class="w3-panel w3-blue w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-blue w3-large w3-display-topright">&times;</span>
            <h3>Информация!</h3>
            <p>Синий часто указывает на нейтральное информативное изменение или действие.</p>
        </div>

        <div class="w3-example">
            <h3>Пример</h3>
            <div class="w3-code notranslate htmlHigh">
                &lt;div class=&quot;w3-panel w3-yellow&quot;&gt;<br>
                &nbsp; &lt;h3&gt;Предупреждение!&lt;/h3&gt;<br>
                &nbsp; &lt;p&gt;Желтый часто указывает на предупреждение, которое может потребовать внимания.&lt;/p&gt;<br>
                &lt;/div&gt;
            </div>
            <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_alerts_warning.html" target="_blank">Попробуйте сами &raquo;</a>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Открытки</h2>
        <p>Классы <strong><a href="w3css_cards.php">w3-card</a></strong> подходят как для изображений, так и для заметок:</p>

        <div class="w3-cell-row">
            <div class="w3-cell w3-cell-top w3-card-4" style="width:60%">
                <header class="w3-container w3-blue">
                    <h1>Автомобиль</h1>
                </header>
                <div class="w3-container">
                    <p>Автомобиль - это самоходное транспортное средство на колесах, используемое для перевозки.
                        В большинстве определений этого термина указывается, что автомобили предназначены для движения в основном по дорогам, для размещения от одного до восьми человек и, как правило, для четырех колес.
                        <br><br>(Википедия)</p>
                </div>
            </div>
            <div class="w3-cell" style="width:16px"></div>
            <div class="w3-cell w3-cell-top w3-card-4">
                <div class="w3-container">
                    <h2>Потрясающе!</h2>
                </div>
                <img src="../images/img_snowtops.jpg" alt="Открытка" style="width:100%">
                <div class="w3-container">
                    <p>Французские Альпы</p>
                </div>
            </div>
        </div>
        <div class="w3-example">
            <h3>Пример</h3>
            <div class="w3-code notranslate htmlHigh">
                &lt;div class="w3-card-4"&gt;<br>&nbsp; &lt;img src="img_snowtops.jpg" alt="Alps"&gt;<br>
                &nbsp; &lt;div class=&quot;w3-container w3-center&quot;&gt;<br>
                &nbsp;&nbsp;&nbsp;&lt;p&gt;Французские Альпы&lt;/p&gt;<br>
                &nbsp; &lt;/div&gt;<br>&lt;/div&gt;
            </div>
            <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_cards_photo.html" target="_blank">Попробуйте сами &raquo;</a>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Таблицы</h2>
        <p>Классы <strong><a href="w3css_tables.php">w3-table</a></strong> могут обрабатывать все виды таблиц:</p>

        <table class="w3-table w3-striped w3-border w3-table-responsive">
            <thead class="w3-light-grey">
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Размер головы</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
            </tr>
            <tr>
                <td>Adam</td>
                <td>Johnson</td>
                <td>67</td>
            </tr>
            <tr>
                <td>Anja</td>
                <td>Bore</td>
                <td>100</td>
            </tr>
            </tbody>
        </table>
        <div class="w3-example">
            <h3>Пример</h3>
            <div class="w3-code notranslate htmlHigh">
                &lt;table class="w3-table w3-striped w3-border"&gt;
            </div>
            <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_tables_border.html" target="_blank">Попробуйте сами &raquo;</a>
        </div>

        <hr>

        <h2>W3.CSS Списки</h2>
        <p>Класс <strong><a href="w3css_lists.php">w3-ul</a></strong> может обрабатывать все виды списков:</p>

        <ul class="w3-ul w3-card-4">
            <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
                <img src="../images/img_avatar2.png" alt="Списки" class="w3-left w3-circle w3-margin-right" style="width:50px">
                <span class="w3-large">Mike</span><br>
                <span>Веб-дизайнер</span>
            </li>
            <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
                <img src="../images/img_avatar5.png" alt="Списки" class="w3-left w3-circle w3-margin-right" style="width:50px">
                <span class="w3-large">Jill</span><br>
                <span>Служба поддержки</span>
            </li>
            <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
                <img src="../images/img_avatar6.png" alt="Списки" class="w3-left w3-circle w3-margin-right" style="width:50px">
                <span class="w3-large">Jane</span><br>
                <span>Бухгалтер</span>
            </li>
            <li class="w3-padding-16 w3-hover-light-grey">
    <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-white w3-xlarge w3-right w3-hover-red">&times;</span>
                <img src="../images/img_avatar3.png" alt="Списки" class="w3-left w3-circle w3-margin-right" style="width:50px">
                <span class="w3-large">Jack</span><br>
                <span>Помощник</span>
            </li>
        </ul>
        <div class="w3-example">
            <h3>Пример</h3>
            <div class="w3-code notranslate htmlHigh">
                &lt;ul class=&quot;w3-ul w3-border&quot;&gt;<br>&nbsp; &lt;li&gt;&lt;h2&gt;Names&lt;/h2&gt;&lt;/li&gt;<br>&nbsp; &lt;li&gt;Jill&lt;/li&gt;<br>&nbsp; &lt;li&gt;Eve&lt;/li&gt;<br>&nbsp;
                &lt;li&gt;Adam&lt;/li&gt;<br>&lt;/ul&gt;<br>
            </div>
            <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_lists_header.html" target="_blank">
                Попробуйте сами &raquo;</a>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Кнопки</h2>
        <p>Класс <a href="w3css_buttons.php"><strong>w3-button</strong> и <strong>w3-btn</strong></a> предоставляет кнопки всех размеров и типов.</p>
        <div class="w3-section">
            <button class="w3-button w3-ripple w3-red w3-padding">Кнопка</button>
            <button class="w3-button w3-ripple w3-blue w3-padding">Кнопка</button>
            <button class="w3-button w3-ripple w3-green w3-padding">Кнопка</button>
            <button class="w3-button w3-ripple w3-teal w3-padding">Кнопка</button>
            <button class="w3-button w3-ripple w3-black w3-padding">Кнопка</button>
            <button class="w3-button w3-ripple w3-light-grey w3-padding">Кнопка</button>
            <button class="w3-button w3-black w3-disabled w3-padding">Отключено</button>
        </div>
        <div class="w3-section">
            <button class="w3-btn w3-white w3-border">Кнопка</button>
            <button class="w3-btn w3-light-grey w3-round">Кнопка</button>
            <button class="w3-btn w3-white w3-border w3-border-blue w3-round">Кнопка</button>
            <button class="w3-btn w3-white w3-border w3-border-red w3-text-red w3-round-large">Кнопка</button>
            <button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge">Кнопка</button>
            <button class="w3-btn w3-black w3-padding-large w3-hover-red">Кнопка</button>
        </div>

        <p>Широкие кнопки:</p>

        <div class="w3-section">
            <button class="w3-button w3-block w3-border">Кнопка</button>
        </div>

        <div class="w3-section">
            <button class="w3-button w3-block w3-teal">Кнопка</button>
        </div>

        <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" style="width:33.3%">Один</button>
            <button class="w3-bar-item w3-button" style="width:33.3%">Два</button>
            <button class="w3-bar-item w3-button" style="width:33.4%">Три</button>
        </div>

        <p>Круглые или квадратные кнопки:</p>
        <p>
            <a class="w3-button w3-xlarge w3-circle w3-ripple w3-black">+</a>
            <a class="w3-button w3-xlarge w3-circle w3-ripple w3-teal">+</a>
            <a class="w3-button w3-xlarge w3-circle w3-ripple w3-red w3-card-4">+</a>
        </p>
        <p>
            <a class="w3-button w3-xlarge w3-ripple w3-black">+</a>
            <a class="w3-button w3-xlarge w3-ripple w3-teal">+</a>
            <a class="w3-button w3-xlarge w3-ripple w3-red w3-card-4">+</a>
        </p>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS ярлыки, этикетки, значки и знаки</h2>
        <p>Классы <a href="w3css_tags.php"><strong>w3-tag</strong></a> и <a href="w3css_badges.php"><strong>w3-badge</strong></a> способны отображать все виды ярлыков, этикеток, значков и знаков:</p>
        <p><span class="w3-badge w3-dark-grey">2</span>
            <span class="w3-badge w3-teal">8</span>
            <span class="w3-badge w3-red">A</span>
            <span class="w3-badge w3-orange w3-text-white">B</span></p>

        <p><span class="w3-tag w3-dark-grey">Новый</span>
            <span class="w3-tag w3-orange w3-text-white">Предупреждение</span>
            <span class="w3-tag w3-red">Опасность</span>
            <span class="w3-tag w3-blue">Инфо</span>
        </p>

        <div class="w3-row">
            <div class="w3-half">
                <div class="w3-tag w3-round w3-green" style="padding:3px 3px">
                    <div class="w3-tag w3-round w3-green" style="border:1px solid white">Falcon Ridge Parkway</div>
                </div>

                <div class="w3-tag w3-jumbo w3-red">S</div>
                <div class="w3-tag w3-jumbo">A</div>
                <div class="w3-tag w3-jumbo w3-yellow">L</div>
                <div class="w3-tag w3-jumbo">E</div>

            </div>
            <div class="w3-half">
                <div class="w3-tag w3-xlarge w3-padding-large w3-round-large w3-red w3-center">НЕ<br>ДЫШАТЬ<br>ПОД ВОДОЙ</div>
            </div>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Адаптивный</h2>
        <p>Классы <a href="w3css_responsive.php"><strong>адаптивной сетки</strong></a> обеспечивают адаптивность для всех типов устройств: ПК, ноутбуков, планшетов и мобильных устройств.</p>
        <!-- First row -->
        <div class="w3-row-padding" style="margin:0 -16px 20px">

            <div class="w3-col m4 margtest">
                <div class="w3-col s6 w3-green w3-center">
                    <p>1/2</p>
                </div>
                <div class="w3-col s6 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/2</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col s4 w3-green w3-center">
                    <p>1/3</p>
                </div>
                <div class="w3-col s4 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/3</p>
                </div>
                <div class="w3-col s4 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/3</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col s4 w3-dark-grey w3-center">
                    <p>1/3</p>
                </div>
                <div class="w3-col s8 w3-green w3-center w3-text-light-grey">
                    <p>2/3</p>
                </div>
            </div>

        </div>

        <!-- Second row -->
        <div class="w3-row-padding" style="margin:0 -16px 20px">

            <div class="w3-col m4 margtest">
                <div class="w3-col s3 w3-green w3-center">
                    <p>1/4</p>
                </div>
                <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/4</p>
                </div>
                <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/4</p>
                </div>
                <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/4</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col s6 w3-green w3-center">
                    <p>1/2</p>
                </div>
                <div class="w3-col s3 w3-dark-grey w3-center">
                    <p>1/4</p>
                </div>
                <div class="w3-col s3 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/4</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col s8 w3-green w3-center">
                    <p>2/3</p>
                </div>
                <div class="w3-col s4 w3-dark-grey w3-center w3-text-light-grey">
                    <p>1/3</p>
                </div>
            </div>

        </div>

        <!-- Third row -->
        <div class="w3-row-padding" style="margin:0 -16px 20px">

            <div class="w3-col m4 margtest">
                <div class="w3-col s12 w3-green w3-center w3-text-light-grey">
                    <p>1/1</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col s3 w3-dark-grey w3-center">
                    <p>1/4</p>
                </div>
                <div class="w3-col s3 w3-dark-grey w3-center">
                    <p>1/4</p>
                </div>
                <div class="w3-col s6 w3-green w3-center">
                    <p>1/2</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col s3 w3-dark-grey w3-center">
                    <p>1/4</p>
                </div>
                <div class="w3-col s6 w3-green w3-center">
                    <p>1/2</p>
                </div>
                <div class="w3-col s3 w3-dark-grey w3-center">
                    <p>1/4</p>
                </div>
            </div>

        </div>

        <!-- Fourth row -->
        <div class="w3-row-padding" style="margin:0 -16px 20px">

            <div class="w3-col m4 margtest">
                <div class="w3-col w3-center w3-dark-grey w3-text-light-grey" style="width:50px">
                    <p>50px</p>
                </div>
                <div class="w3-rest w3-green w3-center w3-text-light-grey">
                    <p>остаток</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col s3 w3-dark-grey w3-center">
                    <p>1/4</p>
                </div>
                <div class="w3-rest w3-green w3-center w3-text-light-grey">
                    <p>остаток</p>
                </div>
            </div>

            <div class="w3-col m4 margtest">
                <div class="w3-col w3-center w3-dark-grey w3-text-light-grey w3-left" style="width:100px">
                    <p>100px</p>
                </div>
                <div class="w3-col w3-center w3-dark-grey w3-text-light-grey w3-right" style="width:45px">
                    <p>45px</p>
                </div>
                <div class="w3-rest w3-green w3-center w3-text-light-grey">
                    <p>остаток</p>
                </div>
            </div>

        </div>

        <!-- Grid Layout examples -->
        <div class="w3-row-padding" style="margin:0 -16px 20px">

            <div class="w3-col m4 margtest2">

                <div class="w3-col s6">
                    <div class="w3-col s12 w3-orange" style="width:92%;height:125px;margin-right:10px"></div>
                </div>

                <div class="w3-col s6">
                    <div class="w3-col s12 w3-green" style="height:75px;margin-bottom:10px"></div>
                    <div class="w3-col s6 w3-green" style="height:40px;"></div>
                    <div class="w3-col s6 w3-dark-grey" style="height:40px"></div>
                </div>
            </div>

            <div class="w3-col m4 margtest2">
                <div class="w3-col s3">
                    <div class="w3-col s12 w3-orange" style="width:85%;height:126px;margin-right:20px"></div>
                </div>

                <div class="w3-col s6">
                    <div class="w3-col s12 w3-green" style="height:50px;margin-bottom:10px"></div>
                    <div class="w3-col s6 w3-green" style="height:31px;"></div>
                    <div class="w3-col s6 w3-dark-grey" style="height:31px;margin-bottom:10px"></div>

                    <div class="w3-col s4 w3-green" style="height:25px;"></div>
                    <div class="w3-col s4 w3-dark-grey" style="height:25px"></div>
                    <div class="w3-col s4 w3-green" style="height:25px"></div>
                </div>

                <div class="w3-col s3">
                    <div class="w3-col s12 w3-orange" style="width:85%;height:126px;margin-left:10px"></div>
                </div>
            </div>

            <div class="w3-col m4 margtest2">
                <div class="w3-col s12">
                    <div class="w3-col s12 w3-orange" style="height:36px;margin-bottom:10px"></div>
                </div>
                <div class="w3-col s12">
                    <div class="w3-col s12 w3-green" style="height:26.5px;margin-bottom:10px"></div>
                    <div class="w3-col s8 w3-green" style="height:18px;"></div>
                    <div class="w3-col s4 w3-dark-grey" style="height:18px;margin-bottom:10px"></div>
                    <div class="w3-col s3 w3-green" style="height:15px;"></div>
                    <div class="w3-col s3 w3-dark-grey" style="height:15px"></div>
                    <div class="w3-col s3 w3-green" style="height:15px"></div>
                    <div class="w3-col s3 w3-dark-grey" style="height:15px"></div>
                </div>

            </div>

        </div>

        <p>W3.CSS также поддерживает <a href="w3css_grid.php" style="font-weight: 700">12 колонную подвижную резиновую сетку</a> с помощью классов small, medium и large.</p>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Отображение</h2>
        <p>Классы <a href="w3css_display.php"><strong>w3-display</strong></a> позволяют отображать элементы HTML в определенных позициях:</p>
        <div class="w3-row-padding" style="margin:0 -16px">

            <div class="w3-half">
                <div class="w3-display-container w3-green" style="height:250px;">
                    <div class="w3-display-topleft w3-padding">Вверху слева</div>
                    <div class="w3-display-topright w3-padding">Вверху справа</div>
                    <div class="w3-display-bottomleft w3-padding">Внизу слева</div>
                    <div class="w3-display-bottomright w3-padding">Внизу справа</div>
                    <div class="w3-display-left w3-padding">Слева</div>
                    <div class="w3-display-right w3-padding">Справа</div>
                    <div class="w3-display-middle w3-padding">Посередине</div>
                    <div class="w3-display-topmiddle w3-hide-small w3-padding">Вверху посередине</div>
                    <div class="w3-display-bottommiddle w3-hide-small w3-padding">Внизу посередине</div>
                </div>
            </div>
            <div class="w3-half">
                <p class="w3-margin-top w3-hide-medium w3-hide-large">
                <div class="w3-display-container w3-green">
                    <img src="../images/img_lights.jpg" alt="Pants" style="width:100%;height:250px">
                    <div class="w3-display-topleft w3-padding">Вверху слева</div>
                    <div class="w3-display-topright w3-padding">Вверху справа</div>
                    <div class="w3-display-bottomleft w3-padding">Внизу слева</div>
                    <div class="w3-display-bottomright w3-padding">Внизу справа</div>
                    <div class="w3-display-left w3-padding">Слева</div>
                    <div class="w3-display-right w3-padding">Справа</div>
                    <div class="w3-display-middle w3-padding">Посередине</div>
                    <div class="w3-display-topmiddle w3-hide-small w3-padding">Вверху посередине</div>
                    <div class="w3-display-bottommiddle w3-hide-small w3-padding">Внизу посередине</div>
                </div>
            </div>

        </div>
        <hr>

        <h2>W3.CSS Модальные окна</h2>
        <p>Класс <a href="w3css_modal.php"><strong>w3-modal</strong></a> обеспечивает модальный диалог в чистом HTML:</p>
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-dark-grey w3-hover-black w3-padding-16">Нажмите, чтобы открыть модальный диалог</button>

        <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-top w3-display-container">
                <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-button w3-large w3-teal w3-display-topright">&times;</span>
                    <h2>Header</h2>
                </header>
                <div class="w3-container">
                    <p>Какой-то текст. Какой-то текст. Какой-то текст.</p>
                    <p>Какой-то текст. Какой-то текст. Какой-то текст.</p>
                </div>
                <footer class="w3-container w3-teal">
                    <p>Footer</p>
                </footer>
            </div>
        </div>
        <br><br>
        <p>Модальное изображение:</p>
        <img class="w3-hover-opacity modimgresp" src="../images/img_nature.jpg" alt="Nature" onclick="document.getElementById('img01').style.display='block'"
             style="width:22%;cursor:pointer">

        <div id="img01" class="w3-modal" onclick="document.getElementById('img01').style.display='none'">
            <span class="w3-button w3-hover-red w3-xxlarge w3-display-topright" style="top:43px;">&times;</span>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom">
                <img src="../images/img_nature_wide.jpg" alt="Природа" style="width:100%">
            </div>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Прогресс-бары</h2>
        <p>Узнайте больше про <a href="w3css_progressbar.php"><strong>W3.CSS Прогресс-бары</strong></a>

        <div class="w3-dark-grey">
            <div class="w3-container w3-green w3-center w3-padding" style="width:25%">25%</div>
        </div><br>

        <div class="w3-light-grey">
            <div class="w3-container w3-red w3-center w3-padding" style="width:50%">50%</div>
        </div><br>

        <div class="w3-light-grey">
            <div id="myBar" class="w3-container w3-padding w3-green" style="width:5%">0</div>
        </div><br>

        <button class="w3-button w3-dark-grey" onclick="move()">Нажми меня!</button>
        <hr>

        <h2>W3.CSS Выпадающие</h2>
        <p>Классы <a href="w3css_dropdowns.php"><strong>w3-dropdown</strong></a> предоставляют выпадающие эффекты:</p>
        <div class="w3-row">
            <div class="w3-col s6">
                <div class="w3-dropdown-hover">
                    <button class="w3-button w3-dark-grey">Наведи на меня мышку!</button>
                    <div class="w3-dropdown-content w3-bar-block w3-border">
                        <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 1</a>
                        <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 2</a>
                        <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 3</a>
                    </div>

                </div>
            </div>
            <div class="w3-col s6">
                <div class="w3-dropdown-click">
                    <button onclick="myDropFunc()" class="w3-button w3-dark-grey">Нажми меня!</button>
                    <div id="Demodrop" class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 1</a>
                        <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 2</a>
                        <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 3</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Аккордеоны</h2>
        <p>Узнать больше можно в разделе <a href="w3css_accordions.php"><strong>W3.CSS Аккордеоны</strong></a></p>

        <button onclick="myAccFunc('Demo1')" class="w3-hover-dark-grey w3-light-grey w3-button w3-block w3-left-align">Открыть раздел 1</button>
        <div id="Demo1" class="w3-hide">
            <div class="w3-container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <button onclick="myAccFunc('Demo2')" class="w3-hover-dark-grey w3-light-grey w3-button w3-block w3-left-align">Открыть раздел 2</button>
        <div id="Demo2" class="w3-hide w3-bar-block">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">Ссылка 3</a>
        </div>
        <button onclick="myAccFunc('Demo3')" class="w3-hover-dark-grey w3-light-grey w3-button w3-block w3-left-align">Открыть раздел 3</button>
        <div id="Demo3" class="w3-hide w3-black">
            <div class="w3-container">
                <p>Аккордеон с изображениями:</p>
                <img src="../images/img_snowtops.jpg" alt="Аккордеон с изображениями" style="width:30%;" class="w3-animate-zoom">
                <p>French Alps</p>
            </div>
        </div>
        <hr>

        <h2>W3.CSS Вкладки</h2>
        <p><a href="w3css_tabulators.php"><strong>Вкладки</strong></a> идеально подходят для одностраничных веб-приложений или для веб-страниц, способных отображать различные темы.</p>
        <div class="w3-border">
            <div class="w3-bar w3-light-grey intronav">
                <a href="javascript:void(0)" class="w3-bar-item w3-button testbtn" onclick="openCity(event, 'London')">Лондон</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button testbtn" onclick="openCity(event, 'Paris')">Париж</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button testbtn" onclick="openCity(event, 'Tokyo')">Токио</a>
            </div>

            <div id="London" class="w3-container city w3-animate-opacity w3-red">
                <h2>Лондон</h2>
                <p>Лондон - это столица Англии.</p>
                <p>Это самый густонаселенный город в Соединенном Королевстве, с населением более 9 миллионов человек.</p>
            </div>

            <div id="Paris" class="w3-container city w3-animate-opacity w3-red">
                <h2>Париж</h2>
                <p>Париж - это столица Франции.</p>
                <p>Агломерация Парижа является одним из крупнейших населенных пунктов в Европе с населением более 12 миллионов человек.</p>
            </div>

            <div id="Tokyo" class="w3-container city w3-animate-opacity w3-red">
                <h2>Токио</h2>
                <p>Токио - это столица Японии.</p>
                <p>Это центр Большого Токио и самый густонаселенный мегаполис в мире.</p>
            </div>
        </div>
        <br>

        <p>Галерея изображений со вкладками (нажмите на одну из картинок):</p>

        <div class="w3-row-padding w3-margin-top" style="margin:0 -16px">
            <div class="w3-col s3 w3-container">
                <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
                    <img src="../images/nature.jpg" alt="Nature" style="width:100%">
                </a>
            </div>
            <div class="w3-col s3 w3-container">
                <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
                    <img src="../images/img_snowtops.jpg" alt="Fjords" style="width:100%">
                </a>
            </div>
            <div class="w3-col s3 w3-container">
                <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Mountains');">
                    <img src="../images/mountains.jpg" alt="Mountains" style="width:100%">
                </a>
            </div>
            <div class="w3-col s3 w3-container">
                <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
                    <img src="../images/img_lights.jpg" alt="Lights" style="width:100%">
                </a>
            </div>
        </div>
        <br>
        <div id="Nature" class="picture w3-display-container">
            <img src="../images/img_nature_wide.jpg" alt="Nature" style="width:100%">
            <span onclick="this.parentElement.style.display='none'"
                  class="w3-display-topright w3-button w3-xlarge w3-transparent w3-text-white">&times;</span>
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Nature</div>
        </div>

        <div id="Snow" class="picture w3-display-container">
            <img src="../images/img_snow_wide.jpg" alt="Snow" style="width:100%">
            <span onclick="this.parentElement.style.display='none'"
                  class="w3-display-topright w3-button w3-xlarge w3-transparent w3-text-white">&times;</span>
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Snow</div>
        </div>

        <div id="Mountains" class="picture w3-display-container">
            <img src="../images/img_mountains_wide.jpg" alt="Mountains" style="width:100%">
            <span onclick="this.parentElement.style.display='none'"
                  class="w3-display-topright w3-button w3-xlarge w3-transparent">&times;</span>
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Mountains</div>
        </div>

        <div id="Lights" class="picture w3-display-container">
            <img src="../images/img_lights_wide.jpg" alt="Lights" style="width:100%">
            <span onclick="this.parentElement.style.display='none'"
                  class="w3-display-topright w3-button w3-xlarge w3-transparent w3-text-white">&times;</span>
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Northern Lights</div>
        </div>

        <script>
            function openImg(imgName) {
                var i, x;
                x = document.getElementsByClassName("picture");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(imgName).style.display = "block";
            }
        </script>
        <hr>

        <h2>W3.CSS Навигация</h2>
        <p>Класс <a href="w3css_navigation.php"><strong>w3-bar</strong></a> можно использовать для создания панели навигации:</p>

        <div class="w3-bar w3-black">
            <a href="javascript:void(0)" class="w3-bar-item w3-button">Главная</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 1</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button">Ссылка 2</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-hide-small">Ссылка 3</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
        </div>

        <p>Панель навигации с вводом:</p>
        <div class="w3-bar w3-light-grey w3-border">
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-green w3-mobile">Главная</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Ссылка 1</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Ссылка 2</a>
            <input type="text" class="w3-bar-item w3-input w3-white w3-mobile" placeholder="Search..">
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-black w3-mobile">Go</a>
        </div>

        <p>Панель навигации с выпадающим эффектом (Dropdown):</p>
        <div class="w3-bar w3-light-grey">
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Главная</a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-mobile">Ссылка 1</a>
            <div class="w3-dropdown-hover w3-mobile">
                <button class="w3-button">Dropdown <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a class="w3-bar-item w3-button w3-text-black" href="javascript:void(0)">Ссылка 1</a>
                    <a class="w3-bar-item w3-button w3-text-black" href="javascript:void(0)">Ссылка 2</a>
                    <a class="w3-bar-item w3-button w3-text-black" href="javascript:void(0)">Ссылка 3</a>
                </div>
            </div>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-mobile"><i class="fa fa-search"></i></a>
        </div>
        <div class="w3-hide-small">
            <p>Пользовательские бары:</p>

            <div class="w3-bar w3-dark-grey">
                <a class="w3-bar-item w3-button w3-mobile w3-green" style="width:33%" href="javascript:void(0)">Главная</a>
                <a class="w3-bar-item w3-button w3-mobile" style="width:34%" href="javascript:void(0)">Ссылка 1</a>
                <a class="w3-bar-item w3-button w3-mobile" style="width:33%" href="javascript:void(0)">Ссылка 2</a>
            </div>

            <br>

            <div class="w3-bar w3-black intronav">
                <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-text-grey w3-hover-text-white" href="javascript:void(0)">Главная</a>
                <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-bottombar w3-border-red" href="javascript:void(0)">Ссылка 1</a>
                <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-text-grey w3-hover-text-white" href="javascript:void(0)">Ссылка 2</a>
                <a class="w3-bar-item w3-button w3-hover-black w3-padding-16 w3-text-grey w3-hover-text-white" href="javascript:void(0)">Ссылка 3</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-black w3-text-grey w3-hover-text-white"><i class="fa fa-search"></i></a>
            </div>
        </div>
        <hr>

        <p>Класс <a href="w3css_sidebar.php"><strong>w3-sidebar</strong></a> создает боковую навигацию:</p>

        <iframe src="demo_ifr_sidebar.html" style="height:350px;width:100%;border:none;" class="w3-border" id="I2" name="I2"></iframe>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Пагинация</h2>
        <p>W3.CSS предоставляет простые способы <a href="w3css_pagination.php"><strong>пагинации страниц</strong></a>.</p>

        <div class="w3-bar">
            <a class="w3-bar-item w3-button" href="javascript:void(0)">&laquo;</a>
            <a class="w3-bar-item w3-button w3-black" href="javascript:void(0)">1</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">2</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">3</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">4</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">5</a>
            <a class="w3-bar-item w3-button" href="javascript:void(0)">&raquo;</a>
        </div>
        <br>
        <div class="w3-bar w3-border w3-round">
            <a href="javascript:void(0)" class="w3-button">&#10094; Prev</a>
            <a href="javascript:void(0)" class="w3-button w3-right">Next &#10095;</a>
        </div>
        <br>
        <div class="w3-center">
            <div class="w3-bar">
                <a href="javascript:void(0)" class="w3-button w3-border">&#10094;</a>
                <a href="javascript:void(0)" class="w3-button w3-border">&#10095;</a>
            </div>
        </div>
        <hr>

        <h2>Слайдшоу</h2>
        <p>W3.CSS предоставляет <a href="w3css_slideshow.php"><strong>слайдшоу</strong></a> для просмотра изображений или другого контента:</p>

        <div class="w3-content w3-display-container noselection" style="max-width:1000px">
            <div class="w3-display-container mySlides">
                <img src="../images/img_nature_wide.jpg" alt="Слайдшоу" style="width:100%">
                <div class="w3-display-topleft w3-padding w3-text-white w3-small">
                    1 / 3
                </div>
                <div class="w3-display-topright w3-text-white w3-padding w3-hide-small">
                    Beautiful Nature
                </div>
            </div>
            <div class="w3-display-container mySlides">
                <img  src="../images/img_snow_wide.jpg" alt="Слайдшоу" style="width:100%">
                <div class="w3-display-topleft w3-text-white w3-padding w3-small">
                    2 / 3
                </div>
                <div class="w3-display-topright w3-text-white w3-padding w3-hide-small">
                    French Alps
                </div>
            </div>
            <div class="w3-display-container mySlides">
                <img  src="../images/img_mountains_wide.jpg" alt="Слайдшоу" style="width:100%">
                <div class="w3-display-topleft w3-text-white w3-padding w3-small">
                    3 / 3
                </div>
                <div class="w3-display-topright w3-text-black w3-padding w3-hide-small">
                    Mountains
                </div>
            </div>
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
                <div class="w3-left w3-hover-text-khaki w3-large" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki w3-large" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demodots w3-border w3-hover-white" onclick="currentDiv(1)"></span>
                <span class="w3-badge demodots w3-border w3-hover-white" onclick="currentDiv(2)"></span>
                <span class="w3-badge demodots w3-border w3-hover-white" onclick="currentDiv(3)"></span>
            </div>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>Лайтбокс / Lightbox</h2>
        <p>Объедините <a href="w3css_modal.php">Модалы</a> и <a href="w3css_slideshow.php">Слайдшоу</a> для создания лайтбокса (галерея модальных изображений):</p>
        <div id="myModalLight" class="w3-modal w3-black">
            <span class="w3-text-white w3-xxlarge w3-hover-text-grey w3-container w3-display-topright cursor" title="Close Lightbox" onclick="closeModalLight()">&times;</span>
            <div class="w3-modal-content">

                <div class="w3-content" style="max-width:1200px">
                    <img class="mySlidesLight" alt="Лайтбокс" src="../images/img_nature_wide.jpg" style="width:100%">
                    <img class="mySlidesLight" alt="Лайтбокс" src="../images/img_snow_wide.jpg" style="width:100%">
                    <img class="mySlidesLight" alt="Лайтбокс" src="../images/img_mountains_wide.jpg" style="width:100%">
                    <div class="w3-row w3-black w3-center">
                        <div class="w3-container w3-display-container">
                            <p id="captionLight"></p>
                            <span class="w3-display-middle w3-hover-text-grey w3-large cursor noselection" style="left:2%" onclick="plusDivsLight(-1)" title="Previous image">&#10094;</span>
                            <span class="w3-display-middle w3-hover-text-grey w3-large cursor noselection" style="left:98%" onclick="plusDivsLight(1)" title="Next image">&#10095;</span>
                        </div>

                        <div class="w3-col s4">
                            <img class="demoLight w3-opacity w3-hover-opacity-off cursor" src="../images/img_nature_wide.jpg" style="width:100%" onclick="currentDivLight(1)" alt="Природа и восход">
                        </div>
                        <div class="w3-col s4">
                            <img class="demoLight w3-opacity w3-hover-opacity-off cursor" src="../images/img_snow_wide.jpg" style="width:100%" onclick="currentDivLight(2)" alt="Французские Альпы">
                        </div>
                        <div class="w3-col s4">
                            <img class="demoLight w3-opacity w3-hover-opacity-off cursor" src="../images/img_mountains_wide.jpg" style="width:100%" onclick="currentDivLight(3)" alt="Горы и фьорды">
                        </div>
                    </div> <!-- End row -->
                </div> <!-- End w3-content -->

            </div> <!-- End modal content -->
        </div> <!-- End modal -->


        <div class="w3-row-padding" style="margin:16px -16px 0 -16px">
            <div class="w3-col s4">
                <img src="../images/img_nature_wide.jpg" alt="Природа" style="width:100%;cursor:pointer"
                     onclick="openModalLight();currentDivLight(1)" class="w3-hover-shadow cursor">
            </div>
            <div class="w3-col s4">
                <img src="../images/img_snow_wide.jpg" alt="Снег" style="width:100%;cursor:pointer"
                     onclick="openModalLight();currentDivLight(2)" class="w3-hover-shadow cursor">
            </div>
            <div class="w3-col s4">
                <img src="../images/img_mountains_wide.jpg" alt="Горы" style="width:100%;cursor:pointer"
                     onclick="openModalLight();currentDivLight(3)" class="w3-hover-shadow cursor">
            </div>
        </div>
        <hr>

        <h2>W3.CSS Анимации</h2>
        <p>Классы <strong><a href="w3css_animate.php">w3-animate</a></strong> обеспечивают простой способ скольжения и исчезновения в элементах:</p>
        <br>
        <div class="w3-center">
            <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="startAnim('Top')">Вверху</button>
            <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="startAnim('Bottom')">Снизу</button>
            <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="startAnim('Left')">Слева</button>
            <button class="w3-button w3-margin-bottom w3-green" style="width:90px" onclick="startAnim('Right')">Справа</button>
            <button class="w3-button w3-margin-bottom w3-green" style="width:130px" onclick="startAnim('Fade')">Исчезновение</button>
            <button class="w3-button w3-margin-bottom w3-green" style="width:120px" onclick="startAnim('Zoom')">Увеличение</button>
            <button class="w3-button w3-margin-bottom w3-green" style="width:110px" onclick="startAnim('Spin')">Вращение</button>
        </div>
        <div class="w3-center">
            <div id="Top" class="animTest w3-animate-top">Анимация это весело!</div>
            <div id="Bottom" class="animTest w3-animate-bottom">Анимация это весело!</div>
            <div id="Left" class="animTest w3-animate-left">Анимация это весело!</div>
            <div id="Right" class="animTest w3-animate-right">Анимация это весело!</div>
            <div id="Fade" class="animTest w3-animate-opacity">Анимация это весело!</div>
            <div id="Zoom" class="animTest w3-animate-zoom">Анимация это весело!</div>
            <div id="Spin" class="animTest w3-spin">Анимация это весело!</div>
            <div id="Normal" class="animTest ">Анимация это весело!</div>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>W3.CSS Изображения</h2>
        <p>Стилизовать <a href="w3css_images.php">изображения</a> в W3CSS - это легко:</p>

        <div class="w3-row-padding" style="margin-left:-16px;margin-right:-16px;">
            <div class="w3-col m3 s4">
                <img src="../images/img_lights.jpg" class="w3-round testsm" alt="Northern Lights" style="width:85%">
            </div>
            <div class="w3-col m3 s4">
                <img src="../images/img_forest.jpg" class="w3-circle testsm" alt="Forest" style="width:85%">
            </div>
            <div class="w3-col m3 s4">
                <img src="../images/img_mountains.jpg" class="testsm w3-hover-opacity w3-border" alt="Mountains" style="padding:4px;width:85%">
            </div>
            <div class="w3-col m3 w3-hide-small">
                <div class="w3-display-container">
                    <img src="../images/img_nature.jpg" alt="Nature" style="width:85%" class="w3-card-4 testsm">
                    <div class="w3-display-bottomleft w3-text-white w3-container w3-padding" style="width:85%">Nature</div>
                </div>
            </div>

        </div>
        <div style="clear:both;margin-bottom:28px;"></div>
        <hr>

        <h2>W3.CSS Эффекты</h2>
        <p>Добавьте специальные <a href="w3css_effects.php">эффекты</a> к любому элементу:</p>
        <div class="w3-row-padding w3-center" style="margin:0 -16px">

            <div class="w3-col m3 w3-hide-small">
                <img src="../images/img_workshop.jpg" alt="Эффекты" style="width:100%">
                <div class="w3-red w3-container">
                    <p>Обычно</p>
                </div>
            </div>

            <div class="w3-col m3 s4 w3-opacity">
                <img src="../images/img_workshop.jpg" alt="Эффекты" style="width:100%;">
                <div class="w3-red w3-container">
                    <p>Прозрачно</p>
                </div>
            </div>

            <div class="w3-col m3 s4 w3-grayscale">
                <img src="../images/img_workshop.jpg" alt="Эффекты" style="width:100%;">
                <div class="w3-red w3-container">
                    <p>Оттенки серого</p>
                </div>
            </div>

            <div class="w3-col m3 s4 w3-sepia">
                <img src="../images/img_workshop.jpg" alt="Эффекты" style="width:100%;">
                <div class="w3-red w3-container">
                    <p>Сепиа<p>
                </div>
            </div>

        </div>
        <hr>

        <h2>W3.CSS Формы ввода</h2>
        <p>Классы <strong><a href="w3css_input.php">w3-input</a></strong> для форм ввода:</p>

        <input class="w3-input w3-border w3-light-grey" type="text" placeholder="Name">
        <br>
        <input class="w3-input w3-border w3-border-blue" type="text" placeholder="Country">
        <br>
        <div class="w3-row-padding w3-margin-bottom" style="margin:0 -16px">
            <div class="w3-third">
                <input class="w3-input" type="text" placeholder="One">
            </div>
            <div class="w3-third">
                <input class="w3-input" type="text" placeholder="Two">
            </div>
            <div class="w3-third">
                <input class="w3-input" type="text" placeholder="Three">
            </div>
        </div>

        <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%;" placeholder="Click on me!">

        <div class="w3-row-padding w3-margin-top" style="margin:0 -16px">

            <div class="w3-half">
                <div class="w3-card-4">
                    <div class="w3-container w3-blue">
                        <h2>Форма ввода</h2>
                    </div>
                    <form class="w3-container">
                        <p>
                            <input class="w3-input" type="text" style="width:90%" required>
                            <label>Имя</label></p>
                        <p>
                            <input class="w3-input" type="email" style="width:90%" required>
                            <label>Email</label></p>
                        <p>
                            <textarea class="w3-input" style="width:90%;resize: vertical;" cols="20" name="S3" rows="1"></textarea>
                            <label>Субъект</label></p>
                        <br>
                        <p>
                            <input id="milk" class="w3-check" type="checkbox" checked="checked">
                            <label>Молоко</label></p>
                        <p>
                            <input id="sugar" class="w3-check" type="checkbox">
                            <label>Сахар</label></p>
                        <p>
                            <input id="lemon" class="w3-check" type="checkbox" disabled>
                            <label>Лимон (Отключено)</label></p>
                    </form>
                </div>
            </div>

            <div class="w3-half">
                <div class="w3-card-4">
                    <div class="w3-container w3-red">
                        <h2>Форма ввода</h2>
                    </div>
                    <form class="w3-container">
                        <p>
                            <input class="w3-input" type="text" style="width:90%" required>
                            <label>Имя</label></p>
                        <p>
                            <input class="w3-input" type="email" style="width:90%" required>
                            <label>Email</label></p>
                        <p>
                            <textarea class="w3-input" style="width:90%;resize: vertical;" cols="20" name="S4" rows="1"></textarea>
                            <label>Субъект</label></p>
                        <br>
                        <p>
                            <input class="w3-radio" type="radio" name="gender" value="male" checked>
                            <label>Мужчина</label></p>
                        <p>
                            <input class="w3-radio" type="radio" name="gender" value="female">
                            <label>Женщина</label></p>
                        <p>
                            <input class="w3-radio" type="radio" name="gender" value="" disabled>
                            <label>Не знаю (Отключено)</label></p></form>
                </div>
            </div>
        </div>
        <hr>
        <?php include '../include/adinfeed.php'; ?>

        <h2>W3.CSS Фильтры</h2>
        <p>Используйте <a href="w3css_filters.php">W3.CSS Filters</a> для поиска определенного элемента в списке, таблице, раскрывающемся списке и т.д.:</p>
        <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction2()">

        <table class="w3-table w3-striped w3-bordered w3-border w3-margin-top" id="myTable">
            <tr>
                <th style="width:60%;">Имя</th>
                <th style="width:40%;">Страна</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Berglunds snabbkop</td>
                <td>Sweden</td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>UK</td>
            </tr>
            <tr>
                <td>Koniglich Essen</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>Canada</td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>Italy</td>
            </tr>
            <tr>
                <td>North/South</td>
                <td>UK</td>
            </tr>
            <tr>
                <td>Paris specialites</td>
                <td>France</td>
            </tr>
        </table>

        <script>
            function myFunction2() {
                var input, filter, table, tr, td, i;
                input = document.getElementById('myInput');
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName('tr');
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName('td')[0];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = '';
                        } else {
                            tr[i].style.display = 'none';
                        }
                    }
                }
            }
        </script>
        <hr>

        <h2>W3.CSS Шрифты</h2>
        <p>С W3.CSS чрезвычайно легко добавить <a href="w3css_fonts.php"><strong>шрифты</strong></a> на веб-страницу:</p>

        <div class="w3-tangerine">
            Making the web beautiful!
        </div>

        <div class="w3-lobster">
            Создание сети!
        </div>
        <hr>

        <h2>W3.CSS Всплывающие подсказки</h2>
        <p>Класс <strong><a href="w3css_tooltips.php">w3-tooltip</a></strong> может отображать все виды подсказок:</p>

        <p class="w3-tooltip">Наведите курсор на этот текст!
            <span class="w3-text w3-tag">Содержание всплывающей подсказки</span></p>
        <p class="w3-tooltip">Наведите курсор на этот текст!
            <span class="w3-text w3-tag w3-theme w3-animate-opacity w3-round-large">Содержание всплывающей подсказки</span></p>
        <hr>
        <?php include '../include/adinfeed.php'; ?>
        <h2>Цветовые темы</h2>
        <p>Цветовые темы можно легко добавить в любое веб-приложение:</p>

        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <div class="w3-card">
                    <div class="w3-container w3-indigo">
                        <h3>Тема Индиго</h3>
                    </div>
                    <div class="w3-container w3-text-indigo"><h4>Фильмы 2014</h4></div>
                    <ul class="w3-ul">
                        <li>
                            <h4>Замороженный</h4>
                            <p>Реакция на анимацию была нелепой</p>
                        </li>
                        <li>
                            <h4>Виноваты звезды</h4>
                            <p>Трогательный, захватывающий и действительно хорошо сделанный</p>
                        </li>
                        <li>
                            <h4>Мстители</h4>
                            <p>Огромный успех для Marvel и Disney</p>
                        </li>
                    </ul>

                    <div class="w3-container w3-indigo w3-xlarge">&laquo;<span class="w3-right">&raquo;</span></div>
                </div>
            </div>

            <div class="w3-half">
                <div class="w3-card">
                    <div class="w3-container w3-teal">
                        <h3>Тема Бирюзовая</h3>
                    </div>
                    <div class="w3-container w3-text-teal"><h4>Фильмы 2014</h4></div>
                    <ul class="w3-ul">
                        <li>
                            <h4>Замороженный</h4>
                            <p>Реакция на анимацию была нелепой</p>
                        </li>
                        <li>
                            <h4>Виноваты звезды</h4>
                            <p>Трогательный, захватывающий и действительно хорошо сделанный</p>
                        </li>
                        <li>
                            <h4>Мстители</h4>
                            <p>Огромный успех для Marvel и Disney</p>
                        </li>
                    </ul>
                    <div class="w3-container w3-teal w3-xlarge">&laquo;<span class="w3-right">&raquo;</span></div></div>
            </div>
        </div>

        <div class="w3-panel w3-note">
            <p>Цветовые темы идеально подходят для мобильных приложений.</p>
        </div>
        <p>Подробнее обо всех возможностях фреймворка W3.CSS вы сможете узнать в уроках на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

        <hr>
        <div class="w3-clear nextprev">
            <a class="w3-left w3-btn" href="index.php">&#10094; Prev</a>
            <a class="w3-right w3-btn" href="w3css_colors.php">Next &#10095;</a>
        </div>

        <script>
            // Slideshows
            var slideIndex = 1;

            function plusDivs(n) {
                slideIndex = slideIndex + n;
                showDivs(slideIndex);
            }

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demodots");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length} ;
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-white", "");
                }
                x[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " w3-white";
            }

            showDivs(1);

            // Lightbox (Modal and Slideshow)

            function openModalLight() {
                document.getElementById('myModalLight').style.display = "block";
            }

            function closeModalLight() {
                document.getElementById('myModalLight').style.display = "none";
            }


            var slideIndexLight = 1;
            showDivsLight(slideIndexLight);

            function plusDivsLight(n) {
                showDivsLight(slideIndexLight += n);
            }


            function currentDivLight(n) {
                showDivsLight(slideIndexLight = n);
            }

            function showDivsLight(n) {
                var i;
                var x = document.getElementsByClassName("mySlidesLight");
                var dots = document.getElementsByClassName("demoLight");
                var captionText = document.getElementById("captionLight");
                if (n > x.length) {slideIndexLight = 1}
                if (n < 1) {slideIndexLight = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");

                }
                x[slideIndexLight-1].style.display = "block";
                dots[slideIndexLight-1].className += " w3-opacity-off";
                captionText.innerHTML = dots[slideIndexLight-1].alt;
            }

            // Dropdown
            function myDropFunc() {
                var x = document.getElementById("Demodrop");
                if (x.classList) {
                    x.classList.toggle("w3-show");
                } else {
                    // Fallback for IE9
                    if (x.className.indexOf("w3-show") == -1)
                        x.className += " w3-show";
                    else
                        x.className = x.className.replace(" w3-show", "");
                }
            }

            // Progress Bars
            function move() {
                var elem = document.getElementById("myBar");
                var width = 1;
                var id = setInterval(frame, 10);
                function frame() {
                    if (width == 100) {
                        clearInterval(id);
                    } else {
                        width++;
                        elem.style.width = width + '%';
                        elem.innerHTML = width * 1  + '%';
                    }
                }
            }

            // Tabs
            function openCity(evt, cityName) {
                var i;
                var x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                var activebtn = document.getElementsByClassName("testbtn");
                for (i = 0; i < x.length; i++) {
                    activebtn[i].className = activebtn[i].className.replace(" w3-red", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " w3-red";
            }

            // Accordions
            function myAccFunc(id) {
                var x = document.getElementById(id);
                if (x.classList) {
                    x.classList.toggle("w3-show");
                    x.previousElementSibling.classList.toggle("w3-dark-grey");
                } else {
                    // Fallback for IE9 and earlier
                    if (x.className.indexOf("w3-show") == -1)
                        x.className += " w3-show";
                    else
                        x.className = x.className.replace(" w3-show", "");
                }
            }
            startAnim("Normal")
            function startAnim(animName) {
                var i;
                var x = document.getElementsByClassName("animTest");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(animName).style.display = "block";
            }
        </script>

        <script>
            // Click on a tab on load
            var mybtn = document.getElementsByClassName("testbtn")[0];
            mybtn.click();
        </script>
    </article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>