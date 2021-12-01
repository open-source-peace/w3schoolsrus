<?php include '../include/head_howto.php'; ?>
    <title>Учебник - Как сделать? - HTML, CSS, JavaScript. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Как сделать с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

    <article>
        <h1>W3Schools <span class="color_h1">Как сделать? Готовые решения (сниппеты) для сайтов</span></h1>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page5.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page7.php'>Next &#10095;</a>
        </div>
        <hr>
        <p class="intro"><strong>Сниппеты. Готовые решения для сайтов. Фрагменты кода HTML, CSS и JavaScript.</strong></p>
        <p>Вы можете использовать данные готовые решения (сниппеты) на своих сайтах. Это ускорит и облегчит вам написание кода веб-страниц. В данных примерах используются всего лишь три технологии: <strong>HTML + CSS + JavaScript</strong>. Вы можете изменять данный готовый код (например, стилизацию страниц с помощью CSS), приспосабливая его для своих веб-проектов.</p>
        <div id="testtest">
            <hr>
            <div class="howtocontainer">
                <div style="max-width:972px;margin:auto;">
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_dropdown_sidenav.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Выпадающее меню в боковой навигации</a></h2>
                        <iframe src="../howtotryit/tryhow_js_sidenav_dropdown_ifr.html" style="width:100%;border:3px solid #f1f1f1;height:330px;"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_js_dropdown_sidenav.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_timeline.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Таймлайн (лента новостей)</a></h2>
                        <div class="w3-light-grey">
                            <div style="margin:0 auto;max-width:400px;">
                                <a href="howto_css_timeline.php"><img src="../images/timeline.jpg" style="width:100%;" alt="timeline"></a>
                            </div>  </div>
                        <div class="howto-container">
                            <p><a href="howto_css_timeline.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_toggle_text.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Переключатель текста</a></h2>
                        <p><button onclick="mytgltextFunc()" class="w3-button w3-dark-grey">Переключить текст</button></p>
                        <div id="mytgltextDIV" style="width:100%;padding-top:20px;padding-bottom:20px;text-align:center;background-color: #f1f1f1;margin-top:20px;font-size:60px">Hello</div>
                        <script>
                            function mytgltextFunc() {
                                var x = document.getElementById("mytgltextDIV");
                                if (x.innerHTML === "Hello") {
                                    x.innerHTML = "Замененный текст!";
                                } else {
                                    x.innerHTML = "Hello";
                                }
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_toggle_text.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_toggle_like.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Переключатель Лайк/Дизлайк</a></h2>
                        <i onclick="mytoggleLikefunc(this)" class="fa fa-thumbs-up w3-hover-text-blue" style="font-size: 50px;cursor: pointer;user-select: none;"></i>
                        <script>
                            function mytoggleLikefunc(x) {
                                x.classList.toggle("fa-thumbs-down");
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_toggle_like.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_trigger_button_enter.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Триггер-кнопка Кликнуть на Enter</a></h2>
                        <p>Нажмите клавишу "Enter" внутри поля ввода, чтобы активировать кнопку:</p>
                        <input id="inputbuttonkey" value="Some text..">
                        <button id="myBtnonkey" onclick="javascript:alert('Hello World!')">Кнопка</button>
                        <script>
                            var x = document.getElementById("inputbuttonkey");
                            x.addEventListener("keyup", function() {
                                event.preventDefault();
                                if (event.keyCode === 13) {
                                    document.getElementById("myBtnonkey").click();
                                }
                            });
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_trigger_button_enter.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_active_element.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Добавить активный класс</a></h2>
                        <p>Выделите активную / текущую (нажатую) кнопку:</p>
                        <div id="myactDIV">
                            <button class="btnact">1</button>
                            <button class="btnact activehr">2</button>
                            <button class="btnact">3</button>
                            <button class="btnact">4</button>
                            <button class="btnact">5</button>
                        </div>
                        <script>
                            // Добавить активный класс к текущей кнопке (выделить его)
                            var headeract = document.getElementById("myactDIV");
                            var btnsact = headeract.getElementsByClassName("btnact");
                            for (var i = 0; i < btnsact.length; i++) {
                                btnsact[i].addEventListener("click", function(){
                                    var currentact = document.getElementsByClassName("activehr");
                                    currentact[0].className = currentact[0].className.replace(" activehr", "");
                                    this.className += " activehr";
                                });
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_active_element.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_custom_scrollbar.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Пользовательские полосы прокрутки</a></h2>
                        <iframe src="../howtotryit/tryhow_css_custom_scrollbar2_ifr.html" style="width:100%;border:5px solid #ddd" class="w3-hide-small"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_css_custom_scrollbar.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_thumbnail.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Миниатюры</a></h2>
                        <a target="_blank" href="../images/img_forest.jpg">
                            <img src="../images/img_forest.jpg" alt="Париж. Миниатюра" class="thumbimg">
                        </a>
                        <div class="howto-container">
                            <p><a href="howto_css_thumbnail.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_testimonials.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Отзывы</a></h2>
                        <div class="testicontainer">
                            <img src="../images/bandmember.jpg" alt="Avatar" style="width:90px">
                            <p><span>Chris Fox.</span> Генеральный директор PRNHub-Schools.</p>
                            <p>Sasha Grey - лучшая подруга дней моих суровых.</p>
                        </div>   <div class="howto-container">
                            <p><a href="howto_css_testimonials.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_split_screen.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Разделенный экран</a></h2>
                        <iframe src="../howtotryit/tryhow_css_split_screen_ifr.html" style="width:100%;height:300px;border:none"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_css_split_screen.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_image_responsive.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Адаптивное изображение</a></h2>
                        <img src="../images/img_nature_wide.jpg" alt="Адаптивное изображение" style="displaY:block;width:100%;height:auto">
                        <div class="howto-container">
                            <p><a href="howto_css_image_responsive.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_image_avatar.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Изображение аватара</a></h2>
                        <img src="../images/img_avatar.png" alt="Avatar" class="avatardef">
                        <img src="../images/img_avatar2.png" alt="Avatar" class="avatardef">
                        <img src="../images/img_avatar4.png" alt="Avatar" class="avatardef">
                        <img src="../images/img_avatar5.png" alt="Avatar" class="avatardef">
                        <div class="howto-container">
                            <p><a href="howto_css_image_avatar.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_image_center.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Изображение по центру</a></h2>
                        <div class="w3-black">
                            <img src="../images/img_paris.jpg" style="margin:auto;displaY:block;width:50%;">
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_image_center.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_center_website.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Центрирование веб-сайта</a></h2>
                        <div class="w3-black">
                            <div class="w3-content w3-dark-grey w3-padding" style="max-width:50%">
                                <h4>Эта страница центрирована по горизонтали.</h4>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_center_website.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_loading_buttons.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Кнопки загрузки</a></h2>
                        <button class="btnalert success w3-pink"><i class="fa fa-spinner fa-spin" style="margin-left:-2px;margin-right:8px;"></i>Загрузка</button>
                        <div class="howto-container">
                            <p><a href="howto_css_loading_buttons.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_popup_form.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Всплывающая форма</a></h2>
                        <div class="w3-light-grey">
                            <iframe src="../howtotryit/tryhow_js_popup_form_ifr.html" style="border:3px solid #ddd;overflow:hidden;height:430px;width:100%;"></iframe>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_js_popup_form.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_skill_bar.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Скилбары (полосы навыков)</a></h2>
                        <p style="margin-bottom:4px;">HTML</p>
                        <div id="progress">
                            <div id="bar" style="width:90%;line-height:32px;color:white;text-align:right;padding-right:20px">90%</div>
                        </div>
                        <p style="margin-bottom:4px;">CSS</p>
                        <div id="progress">
                            <div id="bar" class="w3-blue" style="width:80%;line-height:32px;text-align:right;padding-right:20px">80%</div>
                        </div>
                        <p style="margin-bottom:4px;">JavaSscript</p>
                        <div id="progress">
                            <div class="w3-red" id="bar" style="width:60%;line-height:32px;text-align:right;padding-right:20px">60%</div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_skill_bar.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_animate.php" class="h2-anchor"><?php include '../include/howto.php'; ?>JS Анимация</a></h2>
                        <p><button class="w3-button w3-green" onclick="animationMove()">Кликни меня</button></p>
                        <div id="container">
                            <div id="animate"></div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_js_animate.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                        <script>
                            function animationMove() {
                                var elem = document.getElementById("animate");
                                var pos = 0;
                                var id = setInterval(frame, 10);
                                function frame() {
                                    if (pos == 43) {
                                        clearInterval(id);
                                    } else {
                                        pos++;
                                        elem.style.top = elem.style.left = pos + '%';
                                    }
                                }
                            }
                        </script>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_image_sticky.php" class="h2-anchor"><?php include '../include/howto.php'; ?>Прикрепленное изображение</a></h2>
                        <iframe src="../howtotryit/tryhow_css_image_sticky_ifr2.html" class="w3-hide-small" style="width:100%;height:300px;border:4px solid #f1f1f1"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_css_image_sticky.html" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page5.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page7.php'>Next &#10095;</a>
        </div>
    </article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>