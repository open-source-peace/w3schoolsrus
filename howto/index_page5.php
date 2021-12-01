<?php include '../include/head_howto.php'; ?>
    <title>Учебник - Как сделать? - HTML, CSS, JavaScript. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Как сделать с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

    <article>
        <h1>W3Schools <span class="color_h1">Как сделать? Готовые решения (сниппеты) для сайтов</span></h1>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page4.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page6.php'>Next &#10095;</a>
        </div>
        <hr>
        <p class="intro"><strong>Сниппеты. Готовые решения для сайтов. Фрагменты кода HTML, CSS и JavaScript.</strong></p>
        <p>Вы можете использовать данные готовые решения (сниппеты) на своих сайтах. Это ускорит и облегчит вам написание кода веб-страниц. В данных примерах используются всего лишь три технологии: <strong>HTML + CSS + JavaScript</strong>. Вы можете изменять данный готовый код (например, стилизацию страниц с помощью CSS), приспосабливая его для своих веб-проектов.</p>
        <div id="testtest">
            <hr>
            <div class="howtocontainer">
                <div style="max-width:972px;margin:auto;">
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_make_a_website.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Сделать сайт</a></h2>
                        <iframe src="../howtotryit/tryhow_make_a_website_ifr.html" class="w3-round" style="width:100%;border:4px solid #d3d3d3;height:600px"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_make_a_website.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <style>
                        .pill-nav a {
                            display: inline-block;
                            color: black;
                            text-align: center;
                            padding: 14px;
                            text-decoration: none;
                            font-size: 17px;
                            border-radius: 5px;
                        }
                        .pill-nav a:hover {
                            background-color: #ddd;
                            color: black;
                        }
                        .pill-nav a.active {
                            background-color: dodgerblue;
                            color: white;
                        }
                    </style>
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_pill_nav.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Таблетка навигации</a></h2>
                        <div class="pill-nav">
                            <a class="active" href="javascript:void(0)">Главная</a>
                            <a href="javascript:void(0)">Новости</a>
                            <a href="javascript:void(0)">Контакты</a>
                            <a href="javascript:void(0)">Про нас</a>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_pill_nav.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_image_transparent.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Прозрачный текст изображения</a></h2>
                        <div class="w3-light-grey">
                            <div class="transpcontainer">
                                <img src="../images/notebook.jpg" alt="Norway" style="width:100%;">
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_image_transparent.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_css_browser_window.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Окно браузера</a></h2>
                        </div>
                        <div style="padding:0px 8px;">
                            <iframe src="../howtotryit/tryhow_css_browser_window_ifr2.html" style="border:none;width:100%;height:180px;"></iframe>
                        </div>
                        <div class="w3-container w3-light-grey">
                            <p><a href="howto_css_browser_window.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container" >
                            <h2><a href="howto_css_rounded_images.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Закругленные изображения</a></h2>
                            <div class="w3-row-padding" style="margin-left:-8px;max-width:300px;">
                                <img src="../images/img_avatar.png" alt="Avatar" class="w3-col s6" style="border-radius:50%;">
                                <img src="../images/img_avatar2.png" alt="Avatar" class="w3-col s6" style="border-radius:50%;">
                            </div>
                            <div class="howto-container">
                                <p><a href="howto_css_rounded_images.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_contact_chips.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Контактные чипы</a></h2>
                        <div class="chip">
                            <img src="../images/img_avatar.png" alt="Персона" style="width: 96px; height: 96px">
                            John Doe
                            <span class="closechip" onclick="this.parentElement.style.display='none'">&times;</span>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_contact_chips.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_pagination.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Пагинация (переключение страниц)</a></h2>
                        <ul class="paginationw3">
                            <li><a href="javascript:void(0)">&laquo;</a></li>
                            <li><a href="javascript:void(0)">1</a></li>
                            <li><a class="w3-dark-grey" href="javascript:void(0)">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)">4</a></li>
                            <li><a href="javascript:void(0)">&raquo;</a></li>
                        </ul>
                        <div class="howto-container">
                            <p><a href="howto_css_pagination.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_breadcrumbs.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Хлебные крошки</a></h2>
                        <ul class="breadcrumbw3">
                            <li><a href="javascript:void(0)">Home</a></li>
                            <li><a href="javascript:void(0)">Pictures</a></li>
                            <li><a href="javascript:void(0)">Summer</a></li>
                            <li>Italy</li>
                        </ul>
                        <div class="howto-container">
                            <p><a href="howto_css_breadcrumbs.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_notes.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Примечания</a></h2>
                        <div class="w3-panel w3-warning">
                            <p><b>Опасность!</b> Какой-то текст...</p>
                        </div>

                        <div class="w3-panel w3-info">
                            <p><b>Успех!</b> Какой-то текст...</p>
                        </div>

                        <div class="w3-panel w3-success">
                            <p><b>Инфо!</b> Какой-то текст...</p>
                        </div>

                        <div class="w3-panel w3-note">
                            <p><b>Предупреждение!</b> Какой-то текст...</p>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_notes.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_labels.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Лейблы / Этикетки</a></h2>
                        <div style="margin:20px 0;">
                            <span class="labele esuccess">Успех</span>
                            <span class="labele einfo">Инфо</span>
                            <span class="labele ewarning">Предупреждение</span>
                            <span class="labele edanger">Опасность</span>
                            <span class="labele eother">Другое</span><br>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_labels.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_circles.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Круги</a></h2>
                        <div style="margin:20px 0;">
                            <span class="dotcircle"></span>
                            <span class="dotcircle"></span>
                            <span class="dotcircle"></span>
                            <span class="dotcircle"></span>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_circles.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_next_prev.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Next/previous (следующая/предыдущая) кнопки</a></h2>
                        <div class="w3-bar">
                            <button class="w3-button w3-light-grey">&laquo; Previous</button>
                            <button class="w3-button w3-green">Next &raquo;</button>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_next_prev.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_round_buttons.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Круглые кнопки</a></h2>
                        <button class="w3-button w3-dark-grey w3-round">!</button>
                        <button class="w3-button w3-dark-grey w3-round-large">!</button>
                        <button class="w3-button w3-circle w3-dark-grey">!</button>
                        <div class="howto-container">
                            <p><a href="howto_css_round_buttons.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>

                    <br>
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_equal_height.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Столбцы одинаковой высоты</a></h2>
                        <div class="w3-row-padding" style="margin:0 -16px">
                            <div class="w3-col s4">
                                <div style="height:100px" class="w3-green w3-opacity-min"></div>
                            </div>
                            <div class="w3-col s4">
                                <div style="height:100px" class="w3-blue w3-opacity-min"></div>
                            </div>
                            <div class="w3-col s4">
                                <div style="height:100px" class="w3-green w3-opacity-min"></div>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_equal_height.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_mega_menu.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Мега меню</a></h2>
                        <div style="padding:10px;border:3px solid #f1f1f1">
                            <iframe src="../howtotryit/tryhow_css_mega_menu_responsive_ifr.html" style="width:100%;border:none;height:300px;"></iframe>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_mega_menu.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_snackbar.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Снэкбары / Тосты</a></h2>
                        <button onclick="showSnack()" class="w3-button w3-black">Показать снэкбар</button>
                        <div id="myDIVsnack">Текст снэкбара, который будет длиться 3 секунды.</div>
                        <script>
                            function showSnack() {
                                var x = document.getElementById("myDIVsnack")
                                x.className = "showsnack";
                                setTimeout(function(){ x.className = x.className.replace("showsnack", ""); }, 3000);
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_snackbar.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_sidenav_buttons.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Кнопки боковой навигации</a></h2>
                        <iframe src="../howtotryit/tryhow_css_sidenav_buttons_ifr.html" class="w3-border" style="height:280px;width:100%;border:none"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_css_sidenav_buttons.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_copy_clipboard.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Копировать текст в буфер обмена</a></h2>
                        <p>Нажмите на кнопку, чтобы скопировать текст из текстового поля.</p>
                        <input type="text" value="Hello World" id="myclipboardInput" class="w3-input w3-border w3-left w3-margin-right" style="width:auto">
                        <div class="tooltipclip">
                            <button onclick="copyclipboardFunc()" onmouseout="outclipFunc()" class="w3-button w3-border w3-light-grey w3-left">
                                <span class="tooltiptextclip" id="myClipTooltip">Copy to clipboard</span> Копировать текст
                            </button>
                        </div>

                        <script>
                            function copyclipboardFunc() {
                                var copyText = document.getElementById("myclipboardInput");
                                copyText.select();
                                document.execCommand("Copy");
                                var cliptooltip= document.getElementById("myClipTooltip");
                                cliptooltip.innerHTML = "Copied: " + copyText.value;
                            }
                            function outclipFunc() {
                                var cliptooltip = document.getElementById("myClipTooltip");
                                cliptooltip.innerHTML = "Copy to clipboard";
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_copy_clipboard.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_html_clear_input.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Очистить поле ввода</a></h2>
                        <button onclick="document.getElementById('clearInputField').value = ''" class="w3-button w3-light-grey w3-left w3-border w3-margin-right">Очистить поле ввода</button>
                        <input type="text" value="Blabla" id="clearInputField" class="w3-input w3-border w3-left" style="width:auto">
                        <p style="clear:both"></p>
                        <div class="howto-container" style="margin-top:36px">
                            <p><a href="howto_html_clear_input.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_scrolldrawing.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Рисование при прокрутке</a></h2>
                        <iframe src="../howtotryit/tryhow_js_svg_scrolldrawing_ifr.html" style="height:300px;width:100%;border:none" class="w3-hide-small"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_js_scrolldrawing.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_star_rating.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Звездный рейтинг</a></h2>
                        <span class="fa fa-star w3-large" style="color:orange"></span>
                        <span class="fa fa-star w3-large" style="color:orange"></span>
                        <span class="fa fa-star w3-large" style="color:orange"></span>
                        <span class="fa fa-star w3-large"></span>
                        <span class="fa fa-star w3-large"></span>
                        <div class="howto-container">
                            <p><a href="howto_css_star_rating.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <br>
                        <iframe src="../howtotryit/tryhow_css_user_rating_ifr.html" style="height:280px;width:100%;border:3px solid #f1f1f1"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_css_user_rating.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_aspect_ratio.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Соотношение сторон</a></h2>
                        <img src="../images/aspect_ratio.png" style="max-width:100%;display:block;margin:auto">
                        <div class="howto-container">
                            <p><a href="howto_css_aspect_ratio.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page4.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page6.php'>Next &#10095;</a>
        </div>
    </article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>