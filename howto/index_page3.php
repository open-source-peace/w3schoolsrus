<?php include '../include/head_howto.php'; ?>
    <title>Учебник - Как сделать? - HTML, CSS, JavaScript. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='Как сделать с помощью HTML, CSS, JavaScript? Готовые решения для сайта. Сниппеты. Примеры кода. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_howto.php'; ?>
<?php include '../include/before_content_howto.php'; ?>

    <article>
        <h1>W3Schools <span class="color_h1">Как сделать? Готовые решения (сниппеты) для сайтов</span></h1>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page2.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page4.php'>Next &#10095;</a>
        </div>
        <hr>
        <p class="intro"><strong>Сниппеты. Готовые решения для сайтов. Фрагменты кода HTML, CSS и JavaScript.</strong></p>
        <p>Вы можете использовать данные готовые решения (сниппеты) на своих сайтах. Это ускорит и облегчит вам написание кода веб-страниц. В данных примерах используются всего лишь три технологии: <strong>HTML + CSS + JavaScript</strong>. Вы можете изменять данный готовый код (например, стилизацию страниц с помощью CSS), приспосабливая его для своих веб-проектов.</p>
        <div id="testtest">
            <hr>
            <div class="howtocontainer">
                <div style="max-width:972px;margin:auto;">
                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_switch.php" class="h2-anchor">Переключатель</a></h2>
                        <div class="w3-padding-16">
                            <label class="switch w3-margin-right">
                                <input type="checkbox" class="inputdemo">
                                <div class="slider"></div>
                            </label>
                            <label class="switch">
                                <input type="checkbox" checked class="inputdemo">
                                <div class="slider"></div>
                            </label>
                            <br><br>
                            <label class="switch w3-margin-right">
                                <input type="checkbox" class="inputdemo">
                                <div class="slider round"></div>
                            </label>
                            <label class="switch">
                                <input type="checkbox" checked class="inputdemo">
                                <div class="slider round"></div>
                            </label>
                        </div>
                        <div class="howto-container" style="clear:both">
                            <p><a href="howto_css_switch.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_custom_checkbox.php" class="h2-anchor">Пользовательский флажок</a></h2>
                        <div class="w3-row" style="padding:10px;border:4px solid #f1f1f1;">
                            <div class="w3-col s6">
                                <p><strong>Флажок:</strong></p>
                                <label class="checkcontainer">Один
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkcontainer">Два
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkcontainer">Три
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkcontainer">Четыре
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w3-col s6">
                                <p><strong>Радио кнопка:</strong></p>
                                <label class="checkcontainer">Один
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="checkcontainer">Два
                                    <input type="radio" name="radio">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="checkcontainer">Три
                                    <input type="radio" name="radio">
                                    <span class="radiobtn"></span>
                                </label>
                                <label class="checkcontainer">Четыре
                                    <input type="radio" name="radio">
                                    <span class="radiobtn"></span>
                                </label>
                            </div>
                        </div>
                        <div class="howto-container" style="clear:both">
                            <p><a href="howto_css_custom_checkbox.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_custom_select.php" class="h2-anchor">Пользовательский выбор</a></h2>
                        <!--окружите поле выбора элементом DIV «настраиваемый выбор». Не забудьте установить ширину-->
                        <div class="custom-select" style="width:200px;">
                            <select>
                                <option value="0">Выбрать автомобиль:</option>
                                <option value="1">Audi</option>
                                <option value="2">BMW</option>
                                <option value="3">Citroen</option>
                                <option value="4">Ford</option>
                                <option value="5">Honda</option>
                                <option value="6">Jaguar</option>
                                <option value="7">Land Rover</option>
                                <option value="8">Mercedes</option>
                                <option value="9">Mini</option>
                                <option value="10">Nissan</option>
                                <option value="11">Toyota</option>
                                <option value="12">Volvo</option>
                            </select>
                        </div>
                        <div class="howto-container" style="clear:both">
                            <p><a href="howto_custom_select.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                        <script>
                            var x, i, options;
                            /*искать любые элементы с классом "custom-select":*/
                            x = document.getElementsByClassName("custom-select");
                            for (i = 0; i < x.length; i++) {
                                /*для каждого элемента создайте новый DIV, который будет действовать как выбранный элемент:*/
                                selElmnt = x[i].getElementsByTagName("select")[0];
                                a = document.createElement("DIV");
                                a.setAttribute("class", "select-selected");
                                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                                x[i].appendChild(a);
                                /*для каждого элемента создайте новый DIV, который будет содержать список опций:*/
                                b = document.createElement("DIV");
                                b.setAttribute("class", "select-items select-hide");
                                for (j = 1; j < selElmnt.length; j++) {
                                    /*для каждой опции в исходном элементе select создайте новый DIV, который будет действовать как элемент option:*/
                                    c = document.createElement("DIV");
                                    c.innerHTML = selElmnt.options[j].innerHTML;
                                    c.addEventListener("click", function(e) {
                                        /*при клике по элементу обновите исходное поле выбора и выбранный элемент:*/
                                        var i, s, h;
                                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                                        h = this.parentNode.previousSibling;
                                        for (i = 0; i < s.length; i++) {
                                            if (s.options[i].innerHTML == this.innerHTML) {
                                                s.selectedIndex = i;
                                                h.innerHTML = this.innerHTML;
                                                break;
                                            }
                                        }
                                        h.click();
                                    });
                                    b.appendChild(c);
                                }
                                x[i].appendChild(b);
                                a.addEventListener("click", function(e) {
                                    /*при щелчке по полю выбора закройте все остальные поля выбора и откройте / закройте текущее окно выбора:*/
                                    e.stopPropagation();
                                    closeAllSelect(this);
                                    this.nextSibling.classList.toggle("select-hide");
                                    this.classList.toggle("select-arrow-active");
                                });
                            }
                            function closeAllSelect(elmnt) {
                                /*функция, которая закроет все поля выбора в документе, кроме текущего поля выбора:*/
                                var x, y, i, arrNo = [];
                                x = document.getElementsByClassName("select-items");
                                y = document.getElementsByClassName("select-selected");
                                for (i = 0; i < y.length; i++) {
                                    if (elmnt == y[i]) {
                                        arrNo.push(i)
                                    } else {
                                        y[i].classList.remove("select-arrow-active");
                                    }
                                }
                                for (i = 0; i < x.length; i++) {
                                    if (arrNo.indexOf(i)) {
                                        x[i].classList.add("select-hide");
                                    }
                                }
                            }
                            /*если пользователь кликает где-нибудь за пределами поля выбора, то закройте все поля выбора:*/
                            document.addEventListener("click", closeAllSelect);
                        </script>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_tab_header.php" class="h2-anchor">Заголовки вкладок</a></h2>
                        <iframe scrolling="no" src="../howtotryit/tryhow_js_tab_header_ifr.html" style="width:100%;border:none;overflow:hidden;height:305px"></iframe>
                        <div class="howto-container">
                            <p><a href="howto_js_tab_header.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_countdown.php" class="h2-anchor">Таймер обратного отсчета</a></h2>
                        <iframe scrolling="no" src="../howtotryit/tryhow_js_countdown.html" style="width:100%;border:none;height:120px;overflow:hidden" class="mycountdowntimer"></iframe>
                        <div class="howto-container" style="clear:both">
                            <p><a href="howto_js_countdown.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <hr>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_social_media_buttons.php" class="h2-anchor">Кнопки социальных сетей</a></h2>
                        <div class="socialmediaicons">
                            <a href="javascript:void(0)" class="fa fa-facebook"></a>
                            <a href="javascript:void(0)" class="fa fa-twitter"></a>
                            <a href="javascript:void(0)" class="fa fa-linkedin"></a>
                            <a href="javascript:void(0)" class="fa fa-youtube"></a>
                        </div>
                        <div class="howto-container">
                            <p><a href="howto_css_social_media_buttons.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_filter_lists.php" class="h2-anchor">Списки фильтров</a></h2>
                        <input type="text" id="myFilterListInput" onkeyup="myFilterListFunction()" placeholder="Искать имена.." title="Введите имя">
                        <ul id="myFilterListUL">
                            <li><a href="javascript:void(0)">Петя</a></li>
                            <li><a href="javascript:void(0)">Вася</a></li>
                            <li><a href="javascript:void(0)">Коля</a></li>
                            <li><a href="javascript:void(0)">Вова</a></li>
                            <li><a href="javascript:void(0)">Саша</a></li>
                            <li><a href="javascript:void(0)">Витя</a></li>
                        </ul>
                        <script>
                            function myFilterListFunction() {
                                var input, filter, ul, li, a, i;
                                input = document.getElementById('myFilterListInput');
                                filter = input.value.toUpperCase();
                                ul = document.getElementById("myFilterListUL");
                                li = ul.getElementsByTagName('li');
                                for (i = 0; i < li.length; i++) {
                                    a = li[i].getElementsByTagName('a')[0];
                                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                        li[i].style.display = '';
                                    } else {
                                        li[i].style.display = 'none';
                                    }
                                }
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_filter_lists.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_filter_table.php" class="h2-anchor">Таблицы фильтров</a></h2>
                        <input type="text" id="myInputTableSearch" onkeyup="myTableSearchFunction()" placeholder="Искать имена.." title="Введите имя">
                        <table id="myTableSearch">
                            <tr class="w3-light-grey">
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
                            function myTableSearchFunction() {
                                var input, filter, table, tr, td, i;
                                input = document.getElementById('myInputTableSearch');
                                filter = input.value.toUpperCase();
                                table = document.getElementById("myTableSearch");
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
                        <div class="howto-container">
                            <p><a href="howto_js_filter_table.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_filter_elements.php" class="h2-anchor">Фильтр элементов</a></h2>
                        <div id="mycontainerclass">
                            <button class="filterbtn w3-button w3-light-grey w3-padding" id="myBtnFilter" onclick="activeFunction();filterSelection('all')">Все</button>
                            <button class="filterbtn w3-button w3-light-grey w3-padding" onclick="activeFunction();filterSelection('cars')">Авто</button>
                            <button class="filterbtn w3-button w3-light-grey w3-padding" onclick="activeFunction();filterSelection('animals')">Животные</button>
                        </div>
                        <div style="overflow:auto">
                            <div class="fdiv cars">Audi</div>
                            <div class="fdiv cars">BMW</div>
                            <div class="fdiv cars">Volvo</div>
                            <div class="fdiv animals">Кошка</div>
                            <div class="fdiv animals">Собака</div>
                        </div>

                        <script>
                            document.getElementById("myBtnFilter").click();
                            function activeFunction() {
                                var x = document.getElementById("mycontainerclass");
                                var y = x.getElementsByClassName("filterbtn");
                                var i;
                                for (i = 0; i < y.length; i++) {
                                    y[i].classList.remove("activeLink");
                                }
                            }
                            function filterSelection(c) {
                                var x, i;
                                x = document.getElementsByClassName("fdiv");
                                if (c == "all") c = "";
                                for (i = 0; i < x.length; i++) {
                                    w3RemoveClass(x[i], "showr");
                                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "showr");
                                }
                            }
                            function w3AddClass(element, name) {
                                var i, arr1, arr2;
                                arr1 = element.className.split(" ");
                                arr2 = name.split(" ");
                                for (i = 0; i < arr2.length; i++) {
                                    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                                }
                            }
                            function w3RemoveClass(element, name) {
                                var i, arr1, arr2;
                                arr1 = element.className.split(" ");
                                arr2 = name.split(" ");
                                for (i = 0; i < arr2.length; i++) {
                                    while (arr1.indexOf(arr2[i]) > -1) {
                                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                                    }
                                }
                                element.className = arr1.join(" ");
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_filter_elements.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_sort_list.php" class="h2-anchor">Сортировать списки</a></h2>
                        <p>Нажмите кнопку, чтобы отсортировать список по алфавиту:</p>
                        <button class="w3-button w3-black" onclick="sortListDir()">Сортировать список</button>
                        <ul id="id02" class="w3-ul w3-margin-top w3-border">
                            <li>Осло</li>
                            <li>Стокгольм</li>
                            <li>Хельсинки</li>
                            <li>Берлин</li>
                            <li>Рим</li>
                            <li>Мадрид</li>
                            <li>Киев</li>
                            <li>Токио</li>
                            <li>Пекин</li>
                        </ul>
                        <script>
                            function sortListDir() {
                                var list, i, switching, b, shouldSwitch, dir, switchcount = 0;
                                list = document.getElementById("id02");
                                switching = true;
                                //Установите направление сортировки по возрастанию:
                                dir = "asc";
                                //Сделайте цикл, который будет продолжаться, пока не будет выполнено переключение:
                                while (switching) {
                                    //начните с того, что: переключение не производится:
                                    switching = false;
                                    b = list.getElementsByTagName("LI");
                                    //Перебрать все элементы списка:
                                    for (i = 0; i < (b.length - 1); i++) {
                                        //начнем с того, что не должно быть переключения:
                                        shouldSwitch = false;
                                        //проверьте, должен ли следующий элемент поменяться местами с текущим элементом в зависимости от направления сортировки (asc или desc):
                                        if (dir == "asc") {
                                            if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
                                                //если следующий элемент в алфавитном порядке ниже этого элемента, отметьте его как переключатель и прервите цикл:
                                                shouldSwitch= true;
                                                break;
                                            }
                                        } else if (dir == "desc") {
                                            if (b[i].innerHTML.toLowerCase() < b[i + 1].innerHTML.toLowerCase()) {
                                                //если следующий элемент в алфавитном порядке выше этого элемента, отметьте его как переключатель и прервите цикл:
                                                shouldSwitch= true;
                                                break;
                                            }
                                        }
                                    }
                                    if (shouldSwitch) {
                                        //Если переключатель был помечен, сделайте переключатель и отметьте, что переключение было выполнено:
                                        b[i].parentNode.insertBefore(b[i + 1], b[i]);
                                        switching = true;
                                        //Каждый раз, когда выполняется переключение, увеличивайте это значение на 1:
                                        switchcount ++;
                                    } else {
                                        //Если переключение не было выполнено AND направление - «asc», установите направление «desc» и снова запустите цикл while.
                                        if (switchcount == 0 && dir == "asc") {
                                            dir = "desc";
                                            switching = true;
                                        }
                                    }
                                }
                            }
                        </script>
                        <div class="howto-container">
                            <p><a href="howto_js_sort_list.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <?php include '../include/addown_content.php'; ?>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_js_scroll_to_top.php" class="h2-anchor">Кнопка прокрутки вверх</a></h2>
                            <iframe src="../howtotryit/tryhow_js_scroll_to_top.html" style="border:none;width:100%;height:200px;overflow:hidden;" class="w3-hide-small"></iframe>
                            <div class="howto-container">
                                <p><a href="howto_js_scroll_to_top.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container">
                            <h2><a href="howto_css_image_effects.php" class="h2-anchor">Эффекты изображения</a></h2>
                            <div class="w3-light-grey">
                                <div style="max-width:400px;margin:auto;">
                                    <img src="../images/rock_howto.jpg" style="width:100%;height:auto">
                                </div></div>
                            <div class="howto-container">
                                <p><a href="howto_css_image_effects.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_html_include.php" class="h2-anchor">HTML Включения</a></h2>
                        <p>Включение HTML сниппетов в HTML.</p>
                        <div class="howto-container">
                            <p><a href="howto_html_include.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <iframe src="../howtotryit/tryhow_css_portfolio_gallery_ifr.html" style="width:100%;border:1px solid #ddd;height:450px"></iframe>
                        <div class="w3-container">
                            <p><a href="howto_js_portfolio_filter.php" class='ws-btn'>Узнать, как сделать</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_navbar_sticky.php" class="h2-anchor">Липкий навбар</a></h2>
                        <p><iframe src="../howtotryit/tryhow_js_navbar_sticky.html" style="width:100%;border:1px solid #ddd;;height:287px;overflow:hidden;" class="w3-hide-small"></iframe></p>
                        <div class="howto-container">
                            <p><a href="howto_js_navbar_sticky.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_fixed_menu.php" class="h2-anchor">Фиксированное меню</a></h2>
                        <p><iframe src="../howtotryit/tryhow_css_fixed_menu.html" style="width:100%;border:1px solid #ddd;;height:200px;overflow:hidden;" class="w3-hide-small"></iframe></p>
                        <div class="howto-container">
                            <p><a href="howto_css_fixed_menu.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_js_navbar_slide.php" class="h2-anchor">Слайд-навбар при прокрутке</a></h2>
                        <p><iframe src="../howtotryit/tryhow_js_navbar_slide.html" style="width:100%;border:1px solid #ddd;;height:200px;overflow:hidden;" class="w3-hide-small"></iframe></p>
                        <div class="howto-container">
                            <p><a href="howto_js_navbar_slide.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_fixed_footer.php" class="h2-anchor">Фиксированный нижний колонтитул</a></h2>
                        <p><iframe src="../howtotryit/tryhow_css_fixed_footer.html" style="width:100%;border:1px solid #ddd;;height:250px;overflow:hidden;" class="w3-hide-small"></iframe></p>
                        <div class="howto-container">
                            <p><a href="howto_css_fixed_footer.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4 w3-container">
                        <h2><a href="howto_css_animated_search.php" class="h2-anchor">Анимированная форма поиска</a></h2>
                        <input id="myInp" type="text" name="search" placeholder="Поиск..">
                        <div class="howto-container">
                            <p><a href="howto_css_animated_search.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                        </div>
                    </div>
                    <br>

                    <div class="w3-card-4">
                        <div class="w3-container" >
                            <h2><a href="howto_css_overlay.php" class="h2-anchor">Эффект наложения</a></h2>
                            <div id="overlayeff" onclick="overlayoff()" title="Нажмите, чтобы отключить эффект наложения">
                                <div class="overlaytext">Наложение</div>
                                <div class="overlaytext"><br>
                                    <br><span style="font-size:20px;" class="w3-black w3-padding w3-hide-medium w3-hide-small">Кликните в любом месте, чтобы отключить эффект наложения</span></div>
                            </div>
                            <button onclick="overlayon()" class="w3-button w3-dark-grey" style="margin-bottom:5px">Включите эффект наложения</button>
                            <div class="howto-container">
                                <p><a href="howto_css_overlay.php" class='ws-btn'>Узнать, как сделать &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <script>
                        function overlayon() {
                            document.getElementById("overlayeff").style.display = "block";
                        }
                        function overlayoff() {
                            document.getElementById("overlayeff").style.display = "none";
                        }
                    </script>
                </div>
            </div>
        </div>
        <hr>
        <div class='w3-clear nextprev'>
            <a class='w3-left w3-btn' href='index_page2.php'>&#10094; Prev</a>
            <a class='w3-right w3-btn' href='index_page4.php'>Next &#10095;</a>
        </div>
    </article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>