<?php include '../include/head_howto.php'; ?>
    <title>Учебник - Как сделать? - HTML, CSS, JavaScript. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Как сделать с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

    <article>
        <h1>W3Schools <span class="color_h1">Как сделать? Готовые решения (сниппеты) для сайтов</span></h1>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page3.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page5.php'>Next &#10095;</a>
        </div>
        <hr>
        <p class="intro"><strong>Сниппеты. Готовые решения для сайтов. Фрагменты кода HTML, CSS и JavaScript.</strong></p>
        <p>Вы можете использовать данные готовые решения (сниппеты) на своих сайтах. Это ускорит и облегчит вам написание кода веб-страниц. В данных примерах используются всего лишь три технологии: <strong>HTML + CSS + JavaScript</strong>. Вы можете изменять данный готовый код (например, стилизацию страниц с помощью CSS), приспосабливая его для своих веб-проектов.</p>
        <div id="testtest">
            <hr>
            <div class="howtocontainer">
                <div style="max-width:972px;margin:auto;">
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_alert.php" class="h2-anchor">Оповещения</a></h2>
                        <div class="alert">
                            <span class="closebtnalert">&times;</span>
                            <strong>Опасность!</strong></div>
                        <div class="alert success">
                            <span class="closebtnalert">&times;</span>
                            <strong>Успех!</strong>
                        </div>

                        <div class="alert info">
                            <span class="closebtnalert">&times;</span>
                            <strong>Инфо!</strong></div>
                        <div class="alert warning">
                            <span class="closebtnalert">&times;</span>
                            <strong>Предупреждение!</strong>
                        </div>
                        <script>
                            var closealert = document.getElementsByClassName("closebtnalert");
                            var i;

                            for (i = 0; i < closealert.length; i++) {
                                closealert[i].onclick = function(){
                                    var div = this.parentElement;
                                    div.style.opacity = "0";
                                    setTimeout(function(){ div.style.display = "none"; }, 500);
                                }
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_alert.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_form_steps.php" class="h2-anchor">Многоступенчатая форма</a></h2>
                        <div class="multistepsform">
                            <form id="regForm" action="">
                                <h1 style="text-align:center;font-family:Raleway sans-serif;">Регистрация:</h1>
                                <!-- One "tab" for each step in the form: -->
                                <div class="msftab">Имя:
                                    <p><input placeholder="First name..." oninput="this.className = ''" class="msf"></p>
                                    <p><input placeholder="Last name..." oninput="this.className = ''" class="msf"></p>
                                </div>
                                <div class="msftab">Контакты:
                                    <p><input placeholder="E-mail..." oninput="this.className = ''" class="msf"></p>
                                    <p><input placeholder="Phone..." oninput="this.className = ''" class="msf"></p>
                                </div>
                                <div class="msftab">День рождения:
                                    <p><input placeholder="dd" oninput="this.className = ''" class="msf"></p>
                                    <p><input placeholder="mm" oninput="this.className = ''" class="msf"></p>
                                    <p><input placeholder="yyyy" oninput="this.className = ''" class="msf"></p>
                                </div>
                                <div class="msftab">Информация для входа:
                                    <p><input placeholder="Имя пользователя..." oninput="this.className = ''" class="msf"></p>
                                    <p><input placeholder="Пароль..." oninput="this.className = ''" class="msf"></p>
                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" id="msfprevBtn" onclick="nextPrev(-1)" class="msf">Prev</button>
                                        <button type="button" id="msfnextBtn" onclick="nextPrev(1)" class="msf">Next</button>
                                    </div>
                                </div>
                                <!-- Круги, обозначающие шаги формы: -->
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="msfdot"></span>
                                    <span class="msfdot"></span>
                                    <span class="msfdot"></span>
                                    <span class="msfdot"></span>
                                </div>
                            </form>
                            <div class="howto-container">
                                <p><a href="howto_js_form_steps.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                        <script>
                            var currentTab = 0; // Текущая вкладка устанавливается первой вкладкой (0)
                            showTab(currentTab); // Запустите функцию, которая отобразит указанный шаг

                            function showTab(n) {
                                // Эта функция отобразит указанный шаг формы ...
                                var x = document.getElementsByClassName("msftab");
                                x[n].style.display = "block";
                                // ... и зафиксируем кнопки Назад / Далее:
                                if (n == 0) {
                                    document.getElementById("msfprevBtn").style.display = "none";
                                } else {
                                    document.getElementById("msfprevBtn").style.display = "inline";
                                }
                                if (n == (x.length - 1)) {
                                    document.getElementById("msfnextBtn").innerHTML = "Submit";
                                } else {
                                    document.getElementById("msfnextBtn").innerHTML = "Next";
                                }
                                // ... и запустите функцию, которая будет отображать правильный индикатор шага:
                                fixDots(n)
                            }

                            function nextPrev(n) {
                                // Эта функция определит, какой шаг вы должны увидеть следующим...
                                var x = document.getElementsByClassName("msftab");
                                // ... но только если текущий шаг подтверждает:
                                if (n == 1 && !validateForm()) return false;
                                // ... hide the current step:
                                x[currentTab].style.display = "none";
                                // увеличить или уменьшить текущую вкладку на 1 ... :
                                currentTab = currentTab + n;
                                // если вы дошли до конца формы ... :
                                if (currentTab >= x.length) {
                                    // ... форма отправляется:
                                    document.getElementById("regForm").submit();
                                    return false;
                                }
                                // ... и отображается этот шаг:
                                showTab(currentTab);
                            }

                            function validateForm() {
                                // Эта функция занимается проверкой полей формы
                                var x, y, i, valid = true;
                                x = document.getElementsByClassName("msftab");
                                y = x[currentTab].getElementsByClassName("msf");
                                // Цикл, который проверяет каждое поле ввода на текущем шаге:
                                for (i = 0; i < y.length; i++) {
                                    // Если поле пустое, добавьте к нему "недопустимый" класс:
                                    if (y[i].value == "") {
                                        y[i].className += " invalid";
                                        // установить текущий действительный статус на false
                                        valid = false;
                                    }
                                }
                                // Если действительный статус - true, отметьте шаг как завершенный и действительный:
                                if (valid) document.getElementsByClassName("msfdot")[currentTab].className += " finish"
                                return valid; // return the valid status
                            }

                            function fixDots(n) {
                                // Эта функция удаляет "активный" класс из всех "точек" ... :
                                var i, x = document.getElementsByClassName("msfdot");
                                for (i = 0; i < x.length; i++) {
                                    x[i].className = x[i].className.replace(" active", "");
                                }
                                // ... и добавляет "активный" класс на текущем шаге:
                                x[n].className += " active"
                            }
                        </script>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_three_columns.php" class="h2-anchor">Макет сетки</a></h2>
                        <div class="w3-row w3-center">
                            <div class="w3-col s4" style="height:120px;padding:20px;background-color:#bbb">
                                <h2>1</h2>
                            </div>
                            <div class="w3-col s4" style="height:120px;padding:20px;background-color:#ccc">
                                <h2>2</h2>
                            </div>
                            <div class="w3-col s4" style="height:120px;padding:20px;background-color:#ddd">
                                <h2>3</h2>
                            </div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_three_columns.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <style>
                            * {
                                box-sizing: border-box;
                            }
                            .autocomplete {
                                /*контейнер должен быть расположен относительно:*/
                                position: relative;
                                display: inline-block;
                            }
                            .autocomplete-form {
                                font: 16px Verdana;
                            }
                            .autocomplete-form input,.autocomplete-form .autocompletebtn {
                                border: 1px solid transparent;
                                background-color: #f1f1f1;
                                padding: 10px;
                                font-size: 16px;
                            }
                            .autocomplete-form input[type=text] {
                                background-color: #f1f1f1;
                                width: 100%;
                            }
                            .autocomplete-form .autocompletebtn {
                                background-color: DodgerBlue;
                                color: #fff;
                                cursor: pointer;
                            }
                            .autocomplete-form .autocompletebtn:hover {
                                background-color: #0080ff;
                            }
                            .autocomplete-items {
                                position: absolute;
                                border: 1px solid #d4d4d4;
                                border-bottom: none;
                                border-top: none;
                                z-index: 99;
                                /*расположите элементы автозаполнения такой же ширины, как и контейнер:*/
                                top: 100%;
                                left: 0;
                                right: 0;
                            }
                            .autocomplete-items div {
                                padding: 10px;
                                cursor: pointer;
                                background-color: #fff;
                                border-bottom: 1px solid #d4d4d4;
                            }
                            .autocomplete-items div:hover {
                                /*when hovering an item:*/
                                background-color: #e9e9e9;
                            }
                            .autocomplete-active {
                                /*при навигации по элементам с помощью клавиш со стрелками:*/
                                background-color: DodgerBlue !important;
                                color: #fff;
                            }
                        </style>
                        <h2><a href="howto_js_autocomplete.php" class="h2-anchor">Автозаполнение</a></h2>
                        <p>Начните печатать (название страны на английском):</p>

                        <!--Убедитесь, что в форме отключена функция автозаполнения:-->
                        <form autocomplete="off" action="../action_page.html" class="autocomplete-form">
                            <div class="autocomplete" style="width:300px;">
                                <input id="myInput" type="text" name="myCountry" placeholder="Країна">
                            </div>
                            <button type="button" class="autocompletebtn">Отправить</button>
                        </form>
                        <script>
                            function autocomplete(inp, arr) {
                                /*функция автозаполнения принимает два аргумента,
                                 элемент текстового поля и массив возможных автозаполненных значений:*/
                                var currentFocus;
                                /*выполнить функцию, когда кто-то пишет в текстовом поле:*/
                                inp.addEventListener("input", function(e) {
                                    var a, b, i, val = this.value;
                                    /*закрыть все уже открытые списки автозаполненных значений*/
                                    closeAllLists();
                                    if (!val) { return false;}
                                    currentFocus = -1;
                                    /*создать элемент DIV, который будет содержать элементы (значения):*/
                                    a = document.createElement("DIV");
                                    a.setAttribute("id", this.id + "autocomplete-list");
                                    a.setAttribute("class", "autocomplete-items");
                                    /*добавить элемент DIV как дочерний элемент контейнера автозаполнения:*/
                                    this.parentNode.appendChild(a);
                                    /*для каждого элемента в массиве...*/
                                    for (i = 0; i < arr.length; i++) {
                                        /*проверьте, начинается ли элемент с тех же букв, что и значение текстового поля:*/
                                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                                            /*создать элемент DIV для каждого совпадающего элемента:*/
                                            b = document.createElement("DIV");
                                            /*выделите соответствующие буквы жирным шрифтом:*/
                                            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                            b.innerHTML += arr[i].substr(val.length);
                                            /*вставить поле ввода, которое будет содержать значение текущего элемента массива:*/
                                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                                            /*выполнять функцию, когда кто-то нажимает на значение элемента (элемент DIV):*/
                                            b.addEventListener("click", function(e) {
                                                /*вставить значение для текстового поля автозаполнения:*/
                                                inp.value = this.getElementsByTagName("input")[0].value;
                                                /*закрыть список значений автозаполнения (или любые другие открытые списки значений автозаполнения:*/
                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                        }
                                    }
                                });
                                /*выполнить функцию, нажимает клавишу на клавиатуре:*/
                                inp.addEventListener("keydown", function(e) {
                                    var x = document.getElementById(this.id + "autocomplete-list");
                                    if (x) x = x.getElementsByTagName("div");
                                    if (e.keyCode == 40) {
                                        /*Если нажата клавиша со стрелкой ВНИЗ,
                                         увеличить переменную currentFocus:*/
                                        currentFocus++;
                                        /*и сделать текущий элемент более видимым:*/
                                        addActive(x);
                                    } else if (e.keyCode == 38) { //up
                                        /*Если нажата клавиша со стрелкой ВВЕРХ,
                                         уменьшить переменную currentFocus:*/
                                        currentFocus--;
                                        /*и сделать текущий элемент более видимым:*/
                                        addActive(x);
                                    } else if (e.keyCode == 13) {
                                        /*Если нажата клавиша ENTER, запретить отправку формы,*/
                                        e.preventDefault();
                                        if (currentFocus > -1) {
                                            /*и имитируйте щелчок по "активному" элементу:*/
                                            if (x) x[currentFocus].click();
                                        }
                                    }
                                });
                                function addActive(x) {
                                    /*функция для классификации элемента как "active":*/
                                    if (!x) return false;
                                    /*начните с удаления "активного" класса для всех элементов:*/
                                    removeActive(x);
                                    if (currentFocus >= x.length) currentFocus = 0;
                                    if (currentFocus < 0) currentFocus = (x.length - 1);
                                    /*добавить класс "autocomplete-active":*/
                                    x[currentFocus].classList.add("autocomplete-active");
                                }
                                function removeActive(x) {
                                    /*функция для удаления "активного" класса из всех элементов автозаполнения:*/
                                    for (var i = 0; i < x.length; i++) {
                                        x[i].classList.remove("autocomplete-active");
                                    }
                                }
                                function closeAllLists(elmnt) {
                                    /*закрыть все списки автозаполнения в документе,
                                     кроме переданного в качестве аргумента:*/
                                    var x = document.getElementsByClassName("autocomplete-items");
                                    for (var i = 0; i < x.length; i++) {
                                        if (elmnt != x[i] && elmnt != inp) {
                                            x[i].parentNode.removeChild(x[i]);
                                        }
                                    }
                                }
                                /*выполнять функцию, когда кто-то щелкает по документу:*/
                                document.addEventListener("click", function (e) {
                                    closeAllLists(e.target);
                                });
                            }

                            /*Массив, содержащий названия всех стран мира:*/
                            var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

                            /*инициировать функцию автозаполнения для элемента "myInput" и передать массив стран в качестве возможных значений автозаполнения:*/
                            autocomplete(document.getElementById("myInput"), countries);
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_autocomplete.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_scroll_indicator.php" class="h2-anchor">Индикатор прокрутки</a></h2>
                        <p><iframe src="../howtotryit/tryhow_js_scroll_indicator_ifr.html" style="width:100%;border:3px solid #e9e9e9;height:395px;overflow:hidden;" class="w3-hide-small"></iframe></p>
                        <div class="howto-container">
                            <p><a href="howto_js_scroll_indicator.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_fullscreen_search.php" class="h2-anchor">Полноэкранный поиск</a></h2>
                        <div>
                            <iframe src="../howtotryit/tryhow_js_fullscreen_search_ifr.html" style="width:100%;border:8px solid #f1f1f1;height:300px;padding:0"></iframe>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_fullscreen_search.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_search_button.php" class="h2-anchor">Кнопка поиска</a></h2>
                        <div class="w3-clear">
                            <input type="text" placeholder="Поиск.." name="search" class="searchrr">
                            <button type="button" class="searchrr"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_search_button.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_css_table_zebra.php" class="h2-anchor">Таблица в полоску зебры</a></h2>
                            <table class="ws-table-all">
                                <tr>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Баллы</th>
                                </tr>
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
                            </table>
                            <div class="howto-container">
                                <p><a href="howto_css_table_zebra.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <style>
                        .img-zoom-container {
                            position:relative;
                        }
                        .img-zoom-lens {
                            position:absolute;
                            border:1px solid #d4d4d4;
                            /*Set the size of the lens:*/
                            width:40px;
                            height:40px;
                        }
                        .img-zoom-result {
                            border:1px solid #d4d4d4;
                            /*Установите размер результирующего div:*/
                            width:250px;
                            height:250px;
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_image_zoom.php" class="h2-anchor">Масштаб изображения</a></h2>
                        <p>Наведите указатель мыши на изображение:</p>
                        <div class="img-zoom-container">
                            <img id="zoomimage" src="../images/img_parallax.jpg" style="width: 250px; height: 200px" alt="Масштабирование изображения на сайте">
                            <p>Предварительный просмотр:</p>
                            <div id="zoomresult" class="img-zoom-result"></div>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_js_image_zoom.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                        <script>
                            function imageZoom(imgID, resultID) {
                                var img, lens, result, cx, cy;
                                img = document.getElementById(imgID);
                                lens = document.createElement("DIV");
                                lens.setAttribute("class", "img-zoom-lens");
                                img.parentElement.insertBefore(lens, img);
                                result = document.getElementById(resultID);
                                cx = result.offsetWidth / lens.offsetWidth;
                                cy = result.offsetHeight / lens.offsetHeight;
                                result.style.backgroundImage = "url('" + img.src + "')";
                                result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
                                lens.addEventListener("mousemove", moveLens);
                                img.addEventListener("mousemove", moveLens);
                                lens.addEventListener("touchmove", moveLens);
                                img.addEventListener("touchmove", moveLens);
                                function moveLens(e) {
                                    var pos, x, y;
                                    e.preventDefault();
                                    pos = getCursorPos(e);
                                    x = pos.x - (lens.offsetWidth / 2);
                                    y = pos.y - (lens.offsetHeight / 2);
                                    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
                                    if (x < 0) {x = 0;}
                                    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
                                    if (y < 0) {y = 0;}
                                    lens.style.left = x + "px";
                                    lens.style.top = y + "px";
                                    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
                                }
                                function getCursorPos(e) {
                                    var a, x = 0, y = 0;
                                    e = e || window.event;
                                    a = img.getBoundingClientRect();
                                    x = e.pageX - a.left - window.pageXOffset;
                                    y = e.pageY - a.top - window.pageYOffset;
                                    return {x : x, y : y};
                                }
                            }
                            imageZoom("zoomimage", "zoomresult");
                        </script>
                    </div>
                    <br>

                    <style>
                        .img-magnifier-container {
                            position:relative;
                        }
                        .img-magnifier-glass {
                            position: absolute;
                            border: 3px solid #000;
                            border-radius: 50%;
                            cursor: none;
                            /*Установите размер увеличительного стекла:*/
                            width: 100px;
                            height: 100px;
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_image_magnifier_glass.php" class="h2-anchor">Изображение увеличительного стекла</a></h2>
                        <div class="img-magnifier-container">
                            <img id="mymagnifyimage" src="../images/img_snow.jpg" style="width: 250px; height: 200px" alt="Изображение увеличительного стекла">
                        </div>
                        <br>
                        <script>
                            function magnify(imgID, zoom) {
                                var img, glass, w, h, bw;
                                img = document.getElementById(imgID);
                                /*создать увеличительное стекло:*/
                                glass = document.createElement("DIV");
                                glass.setAttribute("class", "img-magnifier-glass");
                                /*вставить увеличительное стекло:*/
                                img.parentElement.insertBefore(glass, img);
                                /*установить свойства фона для увеличительного стекла:*/
                                glass.style.backgroundImage = "url('" + img.src + "')";
                                glass.style.backgroundRepeat = "no-repeat";
                                glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
                                bw = 3;
                                w = glass.offsetWidth / 2;
                                h = glass.offsetHeight / 2;
                                /*выполнять функцию, когда кто-то перемещает лупу по изображению:*/
                                glass.addEventListener("mousemove", moveMagnifier);
                                img.addEventListener("mousemove", moveMagnifier);
                                /*а также для сенсорных экранов:*/
                                glass.addEventListener("touchmove", moveMagnifier);
                                img.addEventListener("touchmove", moveMagnifier);
                                function moveMagnifier(e) {
                                    var pos, x, y;
                                    /*предотвратить любые другие действия, которые могут произойти при перемещении по изображению*/
                                    e.preventDefault();
                                    /*получить позиции курсора по x и y:*/
                                    pos = getCursorPos(e);
                                    x = pos.x;
                                    y = pos.y;
                                    /*не допускайте расположения лупы за пределами изображения:*/
                                    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
                                    if (x < w / zoom) {x = w / zoom;}
                                    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
                                    if (y < h / zoom) {y = h / zoom;}
                                    /*установить положение лупы:*/
                                    glass.style.left = (x - w) + "px";
                                    glass.style.top = (y - h) + "px";
                                    /*показать то, что видит лупа:*/
                                    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
                                }
                                function getCursorPos(e) {
                                    var a, x = 0, y = 0;
                                    e = e || window.event;
                                    /*получить координаты x и y изображения:*/
                                    a = img.getBoundingClientRect();
                                    /*вычислить координаты курсора x и y относительно изображения:*/
                                    x = e.pageX - a.left;
                                    y = e.pageY - a.top;
                                    /*рассмотрите любую прокрутку страницы:*/
                                    x = x - window.pageXOffset;
                                    y = y - window.pageYOffset;
                                    return {x : x, y : y};
                                }
                            }
                            magnify("mymagnifyimage", 3);
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_image_magnifier_glass.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>
                    <style>
                        .img-comp-container {
                            position: relative;
                            height: 200px; /*должен быть той же высоты, что и изображения*/
                        }
                        .img-comp-img {
                            position: absolute;
                            width: auto;
                            height: auto;
                            overflow:hidden;
                        }
                        .img-comp-img img {
                            display:block;
                            vertical-align:middle;
                        }
                        .img-comp-slider {
                            position: absolute;
                            z-index:9;
                            cursor: ew-resize;
                            /*установить внешний вид ползунка:*/
                            width: 40px;
                            height: 40px;
                            background-color: #2196F3;
                            opacity: 0.7;
                            border-radius: 50%;
                        }
                    </style>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_image_comparison.php" class="h2-anchor">Ползунок сравнения изображений</a></h2>
                        <div class="img-comp-container">
                            <div class="img-comp-img">
                                <img src="../images/img_snow.jpg" style="width: 300px; height: 200px" alt="Ползунок сравнения изображений">
                            </div>
                            <div class="img-comp-img img-comp-overlay">
                                <img src="../images/img_forest.jpg" style="width: 300px; height: 200px" alt="Как сделать. Ползунок сравнения изображений">
                            </div>
                        </div>
                        <script>
                            function initComparisons() {
                                var x, i;
                                /*найти все элементы с классом "overlay":*/
                                x = document.getElementsByClassName("img-comp-overlay");
                                for (i = 0; i < x.length; i++) {
                                    /*один раз для каждого элемента "overlay":
                                    передать элемент "overlay" в качестве параметра при выполнении функции compareImages:*/
                                    compareImages(x[i]);
                                }
                                function compareImages(img) {
                                    var slider, img, clicked = 0, w, h;
                                    /*получить ширину и высоту элемента img*/
                                    w = img.offsetWidth;
                                    h = img.offsetHeight;
                                    /*set the width of the img element to 50%:*/
                                    img.style.width = (w / 2) + "px";
                                    /*create slider:*/
                                    slider = document.createElement("DIV");
                                    slider.setAttribute("class", "img-comp-slider");
                                    /*insert slider*/
                                    img.parentElement.insertBefore(slider, img);
                                    /*position the slider in the middle:*/
                                    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
                                    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
                                    /*execute a function when the mouse button is pressed:*/
                                    slider.addEventListener("mousedown", slideReady);
                                    /*and another function when the mouse button is released:*/
                                    window.addEventListener("mouseup", slideFinish);
                                    /*or touched (for touch screens:*/
                                    slider.addEventListener("touchstart", slideReady);
                                    /*and released (for touch screens:*/
                                    window.addEventListener("touchstop", slideFinish);
                                    function slideReady(e) {
                                        /*prevent any other actions that may occur when moving over the image:*/
                                        e.preventDefault();
                                        /*the slider is now clicked and ready to move:*/
                                        clicked = 1;
                                        /*execute a function when the slider is moved:*/
                                        window.addEventListener("mousemove", slideMove);
                                        window.addEventListener("touchmove", slideMove);
                                    }
                                    function slideFinish() {
                                        /*the slider is no longer clicked:*/
                                        clicked = 0;
                                    }
                                    function slideMove(e) {
                                        var pos;
                                        /*if the slider is no longer clicked, exit this function:*/
                                        if (clicked == 0) return false;
                                        /*get the cursor's x position:*/
                                        pos = getCursorPos(e)
                                        /*prevent the slider from being positioned outside the image:*/
                                        if (pos < 0) pos = 0;
                                        if (pos > w) pos = w;
                                        /*execute a function that will resize the overlay image according to the cursor:*/
                                        slide(pos);
                                    }
                                    function getCursorPos(e) {
                                        var a, x = 0;
                                        e = e || window.event;
                                        /*get the x positions of the image:*/
                                        a = img.getBoundingClientRect();
                                        /*calculate the cursor's x coordinate, relative to the image:*/
                                        x = e.pageX - a.left;
                                        /*consider any page scrolling:*/
                                        x = x - window.pageXOffset;
                                        return x;
                                    }
                                    function slide(x) {
                                        /*resize the image:*/
                                        img.style.width = x + "px";
                                        /*position the slider:*/
                                        slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
                                    }
                                }
                            }
                            initComparisons();
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_image_comparison.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_cards.php" class="h2-anchor">Карточки</a></h2>
                        <div class="w3-row">
                            <div class="w3-col s6">
                                <div class="w3-card-2 w3-hover-shadow" style="width:95%;max-width:300px;">
                                    <img src="../images/img_avatar.png" alt="Avatar" style="width:100%;opacity:0.85">
                                    <div class="w3-container">
                                        <h5><b>John Doe</b></h5>
                                        <p>Architect &amp; Engineer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w3-col s6">
                                <div class="w3-card-2 w3-hover-shadow w3-right" style="width:95%;max-width:300px;border-radius:5px">
                                    <img src="../images/img_avatar2.png" alt="Avatar" style="width:100%;opacity:0.85;border-radius:5px 5px 0 0">
                                    <div class="w3-container">
                                        <h5><b>Jane Doe</b></h5>
                                        <p>Interior Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="howto-container" style="margin-top:20px;">
                            <p><a href="howto_css_cards.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_table_responsive.php" class="h2-anchor">Адаптивные таблицы</a></h2>
                        <div style="overflow-x:auto;">
                            <table class="responsivetest">
                                <tr>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                    <th>Баллы</th>
                                </tr>
                                <tr>
                                    <td>Jill</td>
                                    <td>Smith</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Eve</td>
                                    <td>Jackson</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <td>Adam</td>
                                    <td>Johnson</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                    <td>67</td>
                                </tr>
                            </table>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_table_responsive.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_todolist.php" class="h2-anchor">Список дел</a></h2>
                        <iframe src="../howtotryit/tryhow_js_todo_ifr.html" style="border:none;width:100%;height:450px;overflow:hidden;"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_js_todolist.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_css_flip_image.php" class="h2-anchor">Перевернуть изображение</a></h2>
                            <div class="w3-light-grey">
                                <div style="max-width:400px;margin:0 auto;">
                                    <img src="../images/img_paris.jpg" style="width:100%" alt="Перевернуть изображение при наведении мыши" class="flipimg">
                                </div>
                            </div>
                            <div class="howto-container">
                                <p><a href="howto_css_flip_image.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_css_shake_image.php" class="h2-anchor">Встряхнуть изображение</a></h2>
                            <div class="w3-light-grey">
                                <div style="max-width:400px;margin:0 auto;">
                                    <img src="../images/pineapple.jpg" style="width:100%" alt="Встряхнуть изображение при наведении мыши" class="shakeimg">
                                </div>
                            </div>
                            <div class="howto-container">
                                <p><a href="howto_css_shake_image.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_css_hero_image.php" class="h2-anchor">Изображение героя</a></h2>
                            <iframe src="../howtotryit/tryhow_css_hero_image_ifr.html" style="border:none;width:100%;height:450px;overflow:hidden;"></iframe>
                            <div class="howto-container">
                                <p><a href="howto_css_hero_image.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_css_devices.php" class="h2-anchor">Внешний вид устройства</a></h2>
                            <iframe src="../howtotryit/tryhow_css_phone_tablet_laptop2_ifr.html" style="width:100%;border:5px solid #ddd;height:220px;"></iframe>
                            <div class="howto-container">
                                <p><a href="howto_css_devices.html" class="ws-btn">Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page3.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page5.php'>Next &#10095;</a>
        </div>
    </article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>