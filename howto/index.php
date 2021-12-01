<?php include '../include/head_howto.php'; ?>
<title>Учебник - Как сделать? - HTML, CSS, JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

<article>
    <h1>W3Schools <span class="color_h1">Как сделать? Готовые решения (сниппеты) для сайтов</span></h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='index_page2.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Сниппеты. Готовые решения для сайтов. Фрагменты кода HTML, CSS и JavaScript.</strong></p>
    <p>Вы можете использовать данные готовые решения (сниппеты) на своих сайтах. Это ускорит и облегчит вам написание кода веб-страниц. В данных примерах используются всего лишь три технологии: <strong>HTML + CSS + JavaScript</strong>. Вы можете изменять данный готовый код (например, стилизацию страниц с помощью CSS), приспосабливая его для своих веб-проектов.</p>
    <div id="testtest">
        <hr>
        <div class="howtocontainer">
            <div style="max-width:1000px;margin:auto;">
                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_slideshow.php" class="h2-anchor">Слайдшоу</a></h2>
                    <div style="position:relative">
                        <div class="mySlides slfade">
                            <div class="numbertext">1 / 4</div>
                            <img src="../images/img_nature_wide.jpg" style="width:100%;min-height:100px;" alt="Слайдшоу">
                            <div class="sltext">Текст заголовка</div>
                        </div>

                        <div class="mySlides slfade">
                            <div class="numbertext">2 / 4</div>
                            <img src="../images/img_snow_wide.jpg" style="width:100%;min-height:100px;" alt="Слайдшоу">
                            <div class="sltext">Второй заголовок</div>
                        </div>

                        <div class="mySlides slfade">
                            <div class="numbertext">3 / 4</div>
                            <img src="../images/img_mountains_wide.jpg" style="width:100%;min-height:100px;" alt="Слайдшоу">
                            <div class="sltext">Третий заголовок</div>
                        </div>

                        <div class="mySlides slfade">
                            <div class="numbertext">4 / 4</div>
                            <img src="../images/img_lights_wide.jpg" style="width:100%;min-height:100px;" alt="Слайдшоу">
                            <div class="sltext">Четвертый заголовок</div>
                        </div>
                        <a class="slprev" onclick="plusSlides(-1)" style="z-index:0">&#10094;</a>
                        <a class="slnext" onclick="plusSlides(1)" style="z-index:0">&#10095;</a>
                    </div>
                    <br>

                    <div style="text-align:center">
                        <a href="javascript:void(0)" class="sldot" onclick="currentSlide(1)" title="slide 1"></a>
                        <a href="javascript:void(0)" class="sldot" onclick="currentSlide(2)" title="slide 2"></a>
                        <a href="javascript:void(0)" class="sldot" onclick="currentSlide(3)" title="slide 3"></a>
                        <a href="javascript:void(0)" class="sldot" onclick="currentSlide(4)" title="slide 4"></a>
                    </div>
                    <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);

                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }
                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("sldot");
                            if (n > slides.length) {slideIndex = 1}
                            if (n < 1) {slideIndex = slides.length} ;
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].classList.remove("slideractive");
                            }
                            slides[slideIndex-1].style.display = "block";
                            dots[slideIndex-1].classList.add("slideractive");
                        }
                    </script>
                    <div class="howto-container">
                        <p><a href="howto_js_slideshow.php" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_login_form.php" class="h2-anchor">Форма входа</a></h2>
                    <button onclick="document.getElementById('loginModal').style.display='block'" class="w3-button w3-blue" style="font-size:17px;width:150px">Войти</button>
                    <div id="loginModal" class="w3-modal" style="cursor:pointer;">
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;cursor:auto">
                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('loginModal').style.display='none'" title="Close Modal"
                                      class="w3-button w3-hover-text-grey w3-container w3-display-topright w3-xxlarge">&times;</span>
                                <img src="img_avatar2.png" alt="Аватар" style="width:40%" class="w3-circle w3-margin-top">
                            </div>
                            <div class="w3-container">
                                <div class="w3-section">
                                    <label><b>Имя пользователя</b></label>
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Введите имя">
                                    <label><b>Пароль</b></label>
                                    <input class="w3-input w3-border" type="password" placeholder="Введите пароль">
                                    <button class="w3-button w3-block w3-green w3-section w3-padding" onclick="document.getElementById('loginModal').style.display='none'">Войти</button>
                                    <input type="checkbox" checked="checked"> Запомнить меня
                                </div>
                            </div>
                            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                <button onclick="document.getElementById('loginModal').style.display='none'" type="button" class="w3-btn w3-red">Отменить</button>
                                <span class="w3-right w3-padding w3-hide-small">Забыли <a href="javascript:void(0)" onclick="document.getElementById('loginModal').style.display='none'">пароль?</a></span>
                            </div>

                        </div>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_css_login_form.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                    <script>
                        // Get the modal
                        var loginMod = document.getElementById('loginModal');

                        // Когда пользователь кликает где-нибудь за пределами модального окна, закройте его.
                        window.onclick = function(event) {
                            if (event.target == loginMod) {
                                loginMod.style.display = "none";
                            }
                        }
                    </script>
                </div>
                <br>

                <div class="w3-card-4">
                    <div class="w3-container">
                        <h2><a href="howto_js_accordion.php" class="h2-anchor">Аккордеон</a></h2>
                        <button class="accordion" id="myfirstAcc">Раздел 1</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">Раздел 2</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <button class="accordion">Раздел 3</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_js_accordion.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                        <script>
                            var acc = document.getElementsByClassName("accordion");
                            var i;

                            for (i = 0; i < acc.length; i++) {
                                acc[i].onclick = function(){
                                    this.classList.toggle("activeacc");
                                    this.nextElementSibling.classList.toggle("showpanel");
                                }
                            }
                        </script>
                        <script>
                            var myaccbtn = document.getElementById("myfirstAcc");
                            myaccbtn.click();
                        </script>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_dropdown.php" class="h2-anchor">Выпадающие списки при наведении</a></h2>
                    <div class="dropdown dropdown2">
                        <button class="dropbtn" style="background-color:#f4511e;">Навести</button>
                        <div class="dropdown-content">
                            <a href="javascript:void(0)">Ссылка 1</a>
                            <a href="javascript:void(0)">Ссылка 2</a>
                            <a href="javascript:void(0)">Ссылка 3</a>
                        </div>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_css_dropdown.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <?php include '../include/addown_content.php'; ?>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_dropdown.php" class="h2-anchor">Выпадающие списки при клике</a></h2>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn" style="cursor:pointer">Кликнуть</button>
                        <div id="myDropdown" class="dropdown-content" >
                            <a href="javascript:void(0)">Ссылка 1</a>
                            <a href="javascript:void(0)">Ссылка 2</a>
                            <a href="javascript:void(0)">Ссылка 3</a>
                        </div>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_js_dropdown.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                    <script>
                        /* Когда пользователь нажимает кнопку, переключаться между скрытием и отображением раскрывающегося содержимого */
                        function myFunction() {
                            document.getElementById("myDropdown").classList.toggle("show");
                        }
                        function myFunction2() {
                            document.getElementById("myDropdown2").style.right = "0";
                            document.getElementById("myDropdown2").classList.toggle("show");
                        }
                        // Закройте раскрывающийся список, если пользователь кликнет за его пределами
                        window.onclick = function(e) {
                            if (!e.target.matches('.dropbtn')) {

                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                for (var d = 0; d < dropdowns.length; d++) {
                                    var openDropdown = dropdowns[d];
                                    if (openDropdown.classList.contains('show')) {
                                        openDropdown.classList.remove('show');
                                    }
                                }
                            }
                        }
                    </script>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_sidenav.php" class="h2-anchor">Боковая навигация</a></h2>
                    <div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()"></div>
                    <div id="myOffcanvas" class="offcanvas">
                        <a href="javascript:void(0)" class="closeOffcanvas" onclick="closeOffcanvas()">&times;</a>
                        <a href="javascript:void(0)">Про сайт</a>
                        <a href="javascript:void(0)">Сервисы</a>
                        <a href="javascript:void(0)">Клиенты</a>
                        <a href="javascript:void(0)">Контакты</a>
                    </div>
                    <button class="w3-button w3-black w3-padding w3-margin-bottom" onclick="openOffcanvas1()">Наложение бокового навбара</button><br>
                    <button class="w3-button w3-black w3-padding w3-margin-bottom" onclick="openOffcanvas();">Выталкивание бокового навбара</button><br>
                    <button class="w3-button w3-black w3-padding" onclick="openNav3();openOffcanvas();">Выталкивание бокового навбара с непрозрачностью</button>
                    <div class="howto-container">
                        <p><a href="howto_js_sidenav.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                    <script>
                        // Боковая навигация
                        function openNav() {
                            document.getElementById("myNav").style.width = "100%";
                        }
                        function closeNav() {
                            document.getElementById("myNav").style.width = "0%";
                        }
                        function openNav2() {
                            document.getElementById("myNav2").style.height = "100%";
                        }
                        function closeNav2() {
                            document.getElementById("myNav2").style.height = "0%";
                        }
                        function openNav3() {
                            document.getElementById("myCanvasNav").style.width = "100%";
                            document.getElementById("myCanvasNav").style.opacity = "0.8";
                        }
                        function openOffcanvas1() {
                            document.getElementById("myOffcanvas").style.width = "250px";
                        }
                        function openOffcanvas() {
                            document.getElementById("myOffcanvas").style.width = "250px";
                            document.getElementById("testtest").style.marginLeft = "50px";
                        }
                        function closeOffcanvas() {
                            document.getElementsByClassName("overlay3")[0].style.opacity = "0";
                            document.getElementById("myOffcanvas").style.width = "0%";
                            document.getElementById("testtest").style.marginLeft= "0%";
                            document.getElementById("myCanvasNav").style.width = "0%";
                        }
                    </script>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_fixed_sidebar.php" class="h2-anchor">Фиксированный сайдбар</a></h2>
                    <div class="w3-row-padding" style="margin:0 -16px 16px -16px">
                        <div class="w3-col m6 s12">
                            <iframe src="../howtotryit/tryhow_css_sidenav_ifr.html" style="width:100%;border:5px solid #ddd;height:300px"></iframe>
                        </div>
                        <div class="w3-col m6 w3-hide-small">
                            <iframe src="../howtotryit/tryhow_css_sidenav_ifr2.html" style="width:100%;border:5px solid #ddd;height:300px"></iframe>
                        </div>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_css_fixed_sidebar.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_modals.php" class="h2-anchor">Модал бокс</a></h2>
                    <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal w3-large w3-padding-large">Открыть модал</button></p>

                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                            <header class="w3-container w3-teal w3-display-container">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="font-size:33px !important">&times;</span>
                                <h2>Модал header</h2>
                            </header>
                            <div class="w3-container">
                                <p>Hello World!</p>
                                <p>Модалы классные!</p>
                                <p>Вернуться к <a href="index_page1.php" class="w3-button w3-teal">W3 Как сделать</a> Примерам</p>
                            </div>
                            <footer class="w3-container w3-teal">
                                <p>Модал footer</p>
                            </footer>
                        </div>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_css_modals.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_modal_images.php" class="h2-anchor">Модал изображение</a></h2>
                    <div class="imgmod">
                        <img id="eh" src="../images/img_snow_modal.jpg" alt="Модальное изображение" style="width: 300px; height:200px">
                    </div>

                    <div id="myModal2" class="modal2">
                        <span class="closeimg" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>
                        <img alt="Модальное изображение" id="img02" class="modal-content2">
                        <div id="caption"></div>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_css_modal_images.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                    <script>
                        // Получить модал
                        var modal = document.getElementById('myModal2');
                        var images = document.getElementById('eh');
                        var modalImg = document.getElementById("img02");
                        var captionText = document.getElementById("caption");
                        images.onclick = function(){
                            modal.style.display = "block";
                            modalImg.src = images.src;
                            modalImg.alt = images.alt;
                            captionText.innerHTML = images.alt;
                        }
                    </script>
                </div>
                <?php include '../include/addown_content.php'; ?>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_lightbox.php" class="h2-anchor">Лайтбокс</a></h2>
                    <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-col s4">
                            <img src="../images/img_nature.jpg" style="width:100%;cursor:pointer"
                                 onclick="openLightboxModal();currentDivLightbox(1)" class="w3-hover-shadow cursor" alt="Лайтбокс">
                        </div>
                        <div class="w3-col s4">
                            <img src="../images/img_snow_modal.jpg" style="width:100%;cursor:pointer"
                                 onclick="openLightboxModal();currentDivLightbox(2)" class="w3-hover-shadow cursor" alt="Лайтбокс">
                        </div>
                        <div class="w3-col s4">
                            <img src="../images/img_mountains.jpg" style="width:100%;cursor:pointer"
                                 onclick="openLightboxModal();currentDivLightbox(3)" class="w3-hover-shadow cursor" alt="Лайтбокс">
                        </div>
                    </div>

                    <div id="myModalLightbox" class="w3-modal w3-black">
                        <span class="w3-text-white w3-xxxlarge w3-hover-text-grey w3-container w3-display-topright cursor" style="top:-12px" onclick="closeLightboxModal()">&times;</span>
                        <div class="w3-modal-content">
                            <div class="w3-content" style="max-width:1200px">
                                <img class="myLightbox" src="../images/img_nature_wide.jpg" style="width:100%" alt="Лайтбокс">
                                <img class="myLightbox" src="../images/img_snow_wide.jpg" style="width:100%" alt="Лайтбокс">
                                <img class="myLightbox" src="../images/img_mountains_wide.jpg" style="width:100%" alt="Лайтбокс">
                                <div class="w3-row w3-black w3-center">
                                    <div class="w3-container w3-display-container">
                                        <p id="lightboxCaption"></p>
                                        <span class="w3-display-middle w3-hover-text-grey w3-large cursor" style="left:2%" onclick="plusDivsLightbox(-1)">&#10094;</span>
                                        <span class="w3-display-middle w3-hover-text-grey w3-large cursor" style="left:98%" onclick="plusDivsLightbox(1)">&#10095;</span>
                                    </div>
                                    <div class="w3-col s4">
                                        <img class="demolightbox w3-opacity w3-hover-opacity-off cursor" src="../images/img_nature_wide.jpg" style="width:100%" onclick="currentDivLightbox(1)" alt="Модалы на веб-страницах">
                                    </div>
                                    <div class="w3-col s4">
                                        <img class="demolightbox w3-opacity w3-hover-opacity-off cursor" src="../images/img_snow_wide.jpg" style="width:100%" onclick="currentDivLightbox(2)" alt="Модальное изображение">
                                    </div>
                                    <div class="w3-col s4">
                                        <img class="demolightbox w3-opacity w3-hover-opacity-off cursor" src="../images/img_mountains_wide.jpg" style="width:100%" onclick="currentDivLightbox(3)" alt="Модальное окно на веб-странице">
                                    </div>
                                </div> <!-- Конец row -->
                            </div> <!-- Конец w3-content -->
                        </div> <!-- Конец modal content -->
                    </div> <!-- Конец modal -->

                    <script>
                        function openLightboxModal() {
                            document.getElementById('myModalLightbox').style.display = "block";
                        }
                        function closeLightboxModal() {
                            document.getElementById('myModalLightbox').style.display = "none";
                        }
                        var slideIndexLightbox = 1;
                        showDivsLightbox(slideIndexLightbox);
                        function plusDivsLightbox(n) {
                            showDivsLightbox(slideIndexLightbox += n);
                        }
                        function currentDivLightbox(n) {
                            showDivsLightbox(slideIndexLightbox = n);
                        }
                        function showDivsLightbox(n) {
                            var i;
                            var x = document.getElementsByClassName("myLightbox");
                            var dots = document.getElementsByClassName("demolightbox");
                            var captionText = document.getElementById("lightboxCaption");
                            if (n > x.length) {slideIndexLightbox = 1}
                            if (n < 1) {slideIndexLightbox = x.length}
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                            }
                            x[slideIndexLightbox -1].style.display = "block";
                            dots[slideIndexLightbox -1].className += " w3-opacity-off";
                            captionText.innerHTML = dots[slideIndexLightbox -1].alt;
                        }
                    </script>
                    <div class="howto-container">
                        <p><a href="howto_js_lightbox.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_slideshow_gallery.php" class="h2-anchor">Галлерея слайдшоу</a></h2>
                    <div style="max-width:1000px;min-width:200px;position:relative;margin:auto;">
                        <div class="slgcontainer">
                            <div class="slgmySlides">
                                <div class="slgnumbertext">1 / 6</div>
                                <img src="../images/img_woods_wide.jpg" style="width:100%;margin-bottom:-6px" alt="Галлерея слайдшоу">
                            </div>
                            <div class="slgmySlides">
                                <div class="slgnumbertext">2 / 6</div>
                                <img src="../images/img_5terre_wide.jpg" style="width:100%;margin-bottom:-6px" alt="Галлерея слайдшоу">
                            </div>
                            <div class="slgmySlides">
                                <div class="slgnumbertext">3 / 6</div>
                                <img src="../images/img_mountains_wide.jpg" style="width:100%;margin-bottom:-6px" alt="Галлерея слайдшоу">
                            </div>
                            <div class="slgmySlides">
                                <div class="slgnumbertext">4 / 6</div>
                                <img src="../images/img_lights_wide.jpg" style="width:100%;margin-bottom:-6px" alt="Галлерея слайдшоу">
                            </div>
                            <div class="slgmySlides">
                                <div class="slgnumbertext">5 / 6</div>
                                <img src="../images/img_nature_wide.jpg" style="width:100%;margin-bottom:-6px" alt="Галлерея слайдшоу">
                            </div>
                            <div class="slgmySlides">
                                <div class="slgnumbertext">6 / 6</div>
                                <img src="../images/img_snow_wide.jpg" style="width:100%;margin-bottom:-6px" alt="Галлерея слайдшоу">
                            </div>
                            <a class="slgprev w3-text-white" onclick="slgplusSlides(-1)">&#10094;</a>
                            <a class="slgnext w3-text-white" onclick="slgplusSlides(1)">&#10095;</a>
                            <div class="slgcaption-container">
                                <p id="slgcaption"></p>
                            </div>
                            <div class="slgrow">
                                <div class="slgcolumn">
                                    <img class="slgdemo cursor" src="../images/img_woods_howto.jpg" style="width:100%" onclick="slgcurrentSlide(1)" alt="The Woods">
                                </div>
                                <div class="slgcolumn">
                                    <img class="slgdemo cursor" src="../images/img_5terre_howto.jpg" style="width:100%" onclick="slgcurrentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="slgcolumn">
                                    <img class="slgdemo cursor" src="../images/img_mountains.jpg" style="width:100%" onclick="slgcurrentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="slgcolumn">
                                    <img class="slgdemo cursor" src="../images/img_lights.jpg" style="width:100%" onclick="slgcurrentSlide(4)" alt="Northern Lights">
                                </div>
                                <div class="slgcolumn">
                                    <img class="slgdemo cursor" src="../images/img_nature.jpg" style="width:100%" onclick="slgcurrentSlide(5)" alt="Nature and sunrise">
                                </div>
                                <div class="slgcolumn">
                                    <img class="slgdemo cursor" src="../images/img_snow_howto.jpg" style="width:100%" onclick="slgcurrentSlide(6)" alt="Snowy Mountains">
                                </div>
                            </div>
                        </div>
                        <script>
                            var slgslideIndex = 1;
                            slgshowSlides(slgslideIndex);

                            function slgplusSlides(slgn) {
                                slgshowSlides(slgslideIndex += slgn);
                            }
                            function slgcurrentSlide(slgn) {
                                slgshowSlides(slgslideIndex = slgn);
                            }
                            function slgshowSlides(slgn) {
                                var slgi;
                                var slgslides = document.getElementsByClassName("slgmySlides");
                                var slgdots = document.getElementsByClassName("slgdemo");
                                var slgcaptionText = document.getElementById("slgcaption");
                                if (slgn > slgslides.length) {slgslideIndex = 1}
                                if (slgn < 1) {slgslideIndex = slgslides.length}
                                for (slgi = 0; slgi < slgslides.length; slgi++) {
                                    slgslides[slgi].style.display = "none";
                                }
                                for (slgi = 0; slgi < slgdots.length; slgi++) {
                                    slgdots[slgi].className = slgdots[slgi].className.replace(" slgactive", "");
                                }
                                slgslides[slgslideIndex-1].style.display = "block";
                                slgdots[slgslideIndex-1].className += " slgactive";
                                slgcaptionText.innerHTML = slgdots[slgslideIndex-1].alt;
                            }
                        </script>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_js_slideshow_gallery.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4">
                    <div class="w3-container">
                        <h2><a href="howto_css_image_overlay.php" class="h2-anchor">Изображение при наведении</a></h2>
                        <div class="w3-light-grey">
                            <div class="containerslidetop" style="margin:0 auto;max-width:400px">
                                <img src="../images/img_avatar3.png" alt="Аватар" class="imageslidetop">
                                <div class="overlayslidetop">
                                    <div class="textslidetop">Hello World</div>
                                </div>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_image_overlay.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <br>

                <div class="w3-card-4">
                    <div class="w3-container">
                        <h2><a href="howto_js_tabs.php" class="h2-anchor">Вкладки</a></h2>
                        <ul class="tab">
                            <li><a href="javascript:void(0)" class="tablinks" onclick="openCity('London', event)">Лондон</a></li>
                            <li><a href="javascript:void(0)" class="tablinks" onclick="openCity('Paris', event)">Париж</a></li>
                            <li><a href="javascript:void(0)" class="tablinks tokyotab" onclick="openCity('Tokyo', event)">Токио</a></li>
                        </ul>
                        <div style="border:1px solid #eee;border-top:none;">
                            <div id="London" class="tabcontent">
                                <h3>Лондон</h3>
                                <p>Лондон - это столица Англии.</p>
                            </div>
                            <div id="Paris" class="tabcontent">
                                <h3>Париж</h3>
                                <p>Париж - это столица Франции.</p>
                            </div>
                            <div id="Tokyo" class="tabcontent tokyotab">
                                <h3>Токио</h3>
                                <p>Токио - это столица Японии.</p>
                            </div>
                        </div>
                        <script>
                            openCity("London")
                            function openCity(cityName, evt) {
                                var i, tabcontent, tablinks;
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }
                                tablinks = document.getElementsByClassName("tablinks");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tablinks[i].classList.remove("tabactive");
                                }
                                document.getElementById(cityName).style.display = "block";
                                if (evt) {evt.currentTarget.classList.add("tabactive");}
                            }
                        </script>
                        <script>
                            var mybtn = document.getElementsByClassName("tablinks")[0];
                            mybtn.click();
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_tabs.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-hide-small">
                    <div class="w3-container">
                        <h2><a href="howto_js_vertical_tabs.php" class="h2-anchor">Вертикальные вкладки</a></h2>
                        <iframe src="../howtotryit/tryhow_js_vertical_tabs_ifr.html" style="width:100%;height:350px;border:none;margin:0 -8px"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_js_vertical_tabs.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <?php include '../include/addown_content.php'; ?>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_tab_img_gallery.php" class="h2-anchor">Вкладка Галереи изображений</a></h2>
                    <div class="w3-row-padding" style="margin:0 -16px">
                        <div class="w3-col s4 w3-container">
                            <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
                                <img src="../images/img_nature.jpg" alt="Вкладка" style="width:100%">
                            </a>
                        </div>
                        <div class="w3-col s4 w3-container">
                            <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
                                <img src="../images/img_snow_howto.jpg" alt="Галерея изображений" style="width:100%">
                            </a>
                        </div>
                        <div class="w3-col s4 w3-container">
                            <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
                                <img src="../images/img_lights.jpg" alt="Вкладка" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div id="Nature" class="picture w3-display-container w3-margin-top">
                        <img src="../images/img_nature_wide.jpg" alt="Nature" style="width:100%">
                        <span onclick="this.parentElement.style.display='none'"
                              class="w3-display-topright w3-button w3-transparent w3-text-white w3-xlarge">&times;</span>
                        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white w3-large">Горы</div>
                    </div>
                    <div id="Snow" class="picture w3-display-container w3-margin-top" style="display:none">
                        <img src="../images/img_snow_wide.jpg" alt="Галерея изображений" style="width:100%">
                        <span onclick="this.parentElement.style.display='none'"
                              class="w3-display-topright w3-button w3-transparent w3-text-white w3-xlarge">&times;</span>
                        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white w3-large">Снег</div>
                    </div>
                    <div id="Lights" class="picture w3-display-container w3-margin-top" style="display:none">
                        <img src="../images/img_lights_wide.jpg" alt="Lights" style="width:100%">
                        <span onclick="this.parentElement.style.display='none'"
                              class="w3-display-topright w3-button w3-transparent w3-text-white w3-xlarge">&times;</span>
                        <div class="w3-display-bottomleft w3-container w3-padding w3-text-white w3-large">Северное сияние</div>
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
                    <div class="howto-container">
                        <p><a href="howto_js_tab_img_gallery.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_alert_buttons.php" class="h2-anchor">Кнопки оповещения</a></h2>
                    <button class="btnalert success">Успех</button>
                    <button class="btnalert info">Инфо</button>
                    <button class="btnalert warning">Предупреждение</button>
                    <button class="btnalert danger">Опасность</button>
                    <button class="btnalert default">По умолчанию</button>
                    <div class="howto-container">
                        <p><a href="howto_css_alert_buttons.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_outline_buttons.php" class="h2-anchor">Кнопки с контуром</a></h2>
                    <button class="btnout outsuccess">Успех</button>
                    <button class="btnout outinfo">Инфо</button>
                    <button class="btnout outwarning">Предупреждение</button>
                    <button class="btnout outdanger">Опасность</button>
                    <button class="btnout outdefault">По умолчанию</button>
                    <div class="howto-container">
                        <p><a href="howto_css_outline_buttons.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_topnav.php" class="h2-anchor">Верхняя навигация</a></h2>
                    <div class="w3-bar w3-black">
                        <a class="w3-bar-item w3-button w3-padding-16 w3-green w3-hover-green" href="javascript:void(0)">Главная</a>
                        <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Новости</a>
                        <a class="w3-bar-item w3-button w3-padding-16" href="javascript:void(0)">Контакты</a>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_js_topnav.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_topnav_responsive.php" class="h2-anchor">Адаптивная верхняя навигация</a></h2>
                    <p>Измените размер окна браузера, чтобы увидеть эффект:</p>
                    <p><iframe src="../howtotryit/tryhow_js_topnav_iframe.html" style="width:100%;border:none;height:215px;overflow:hidden;"></iframe></p>
                    <div class="howto-container">
                        <p><a href="howto_js_topnav_responsive.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_js_fullscreen_overlay.php" class="h2-anchor">Полноэкранная навигация</a></h2>
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtnOverlay" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <a href="javascript:void(0)">Про сайт</a>
                            <a href="javascript:void(0)">Сервисы</a>
                            <a href="javascript:void(0)">Клиенты</a>
                            <a href="javascript:void(0)">Контакты</a>
                        </div>
                    </div>
                    <div id="myNav2" class="overlay2">
                        <a href="javascript:void(0)" class="closebtnOverlay" onclick="closeNav2()">&times;</a>
                        <div class="overlay-content">
                            <a href="javascript:void(0)">Про сайт</a>
                            <a href="javascript:void(0)">Сервисы</a>
                            <a href="javascript:void(0)">Клиенты</a>
                            <a href="javascript:void(0)">Контакты</a>
                        </div>
                    </div>
                    <button class="w3-button w3-black w3-padding" onclick="openNav()">Сдвинуть вправо</button>
                    <button class="w3-button w3-black w3-padding" onclick="openNav2()">Сдвинуть вниз</button>
                    <div class="howto-container">
                        <p><a href="howto_js_fullscreen_overlay.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <style>
                    .topnav3 {
                        overflow: hidden;
                        background-color: #e9e9e9;
                    }
                    .topnav3 a {
                        float: left;
                        display: block;
                        color: black;
                        text-align: center;
                        padding: 14px 16px;
                        text-decoration: none;
                        font-size: 17px;
                    }
                    .topnav3 a:hover {
                        background-color: #ddd;
                        color: black;
                    }
                    .topnav3 a.active {
                        background-color: #2196F3;
                        color: white;
                    }
                    .topnav3 .login-container {
                        float: right;
                    }
                    .topnav3 input[type=text] {
                        padding: 6px;
                        margin-top: 8px;
                        font-size: 17px;
                        border: none;
                        width:174px;
                    }
                    .topnav3 .login-container button {
                        float: right;
                        padding: 6px 10px;
                        margin-top: 8px;
                        margin-right: 16px;
                        background-color: #555;
                        color: white;
                        font-size: 17px;
                        border: none;
                        cursor: pointer;
                    }
                    .topnav3 .login-container button:hover {
                        background-color: green;
                    }
                    @media screen and (max-width: 600px) {
                        .topnav3 .login-container {
                            float: none;
                        }
                        .topnav3 a, .topnav3 input[type=text], .topnav3 .login-container button {
                            float: none;
                            display: block;
                            text-align: left;
                            width: 100%;
                            margin: 0;
                            padding: 14px;
                        }
                        .topnav3 input[type=text] {
                            border: 1px solid #ccc;
                        }
                    }
                </style>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_login_form_navbar.php" class="h2-anchor">Форма входа в навбаре</a></h2>
                    <div class="topnav3">
                        <a class="active" href="javascript:void(0)">Главная</a>
                        <a href="javascript:void(0)">Про сайт</a>
                        <a href="javascript:void(0)">Контакты</a>
                        <div class="login-container">
                            <input type="text" placeholder="Имя пользователя" name="username">
                            <input type="text" placeholder="Пароль" name="psw">
                            <button type="button">Вход</button>
                        </div>
                    </div>
                    <div class="howto-container">
                        <p><a href="howto_css_login_form_navbar.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>
                <br>

                <div class="w3-card-4 w3-container">
                    <h2><a href="howto_css_bg_change_scroll.php" class="h2-anchor">Изменить фон при прокрутке</a></h2>
                    <iframe src="../howtotryit/tryhow_css_bg_change_scroll.html" style="width:100%;border:2px solid #f1f1f1;height:500px;"></iframe>
                    <div class="howto-container">
                        <p><a href="howto_css_bg_change_scroll.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                    </div>
                </div>

                <!-- END INNER -->
            </div>
        </div>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
        <a class='w3-right w3-btn' href='index_page2.php'>Next &#10095;</a>
    </div>

</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>