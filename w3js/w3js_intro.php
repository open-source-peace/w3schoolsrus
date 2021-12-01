<?php include '../include/head.php'; ?>
    <script src="../lib/w3.js"></script>
<title>W3.JS Интро. <?php include '../include/title.php'; ?></title>
<meta name='description' content='W3.JS Интро.  <?php include '../include/description.php'; ?>'>
    <style>
        .x {
            background-color: #333;
            opacity:0.8;
            border: 4px solid #222 !important;
            padding: 16px;
            text-align:center;
            font-size:18px;
            color:white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .x h2 {
            font-size:40px;
        }
        #myInput2 {
            background-image: url('../images/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px; /* Предотвратить двойные границы */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            color: black;
            display: block;
            cursor:default;
        }
        #myUL li a.header {
            background-color: #e2e2e2;
            cursor: default;
        }
        .slides img {
            max-width:100%;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>W3.JS Введение</h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn ws-green" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn ws-green" href="w3js_selectors.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>HTML Слайдшоу</h2>
    <div class="slides"><img src="../images/img_snowtops.jpg" alt="Слайдшоу с помощью HTML и JavaScript"></div>
    <div class="slides"><img src="../images/img_mountains.jpg" alt="Слайдшоу с помощью HTML и JavaScript"></div>
    <div class="slides"><img src="../images/img_nature.jpg" alt="Слайдшоу с помощью HTML и JavaScript"></div>

    <script>
        w3.slideshow(".slides",2000);
    </script>
    <hr>

    <h2>Отображение данных в HTML</h2>
    <p>
        <button class="w3-btn w3-dark-grey" onclick="w3.displayObject('id01', myObject)">
            Нажмите, чтобы отобразить данные</button></p>

    <script>
        var myObject= {"customers":[
                {"CustomerName" : "Alfreds Futterkiste","City" : "Berlin","Country" : "Germany"},
                {"CustomerName" : "Berglunds snabbköp","City" : "Luleå","Country" : "Sweden"},
                {"CustomerName" : "Centro comercial Moctezuma","City" : "México D.F.","Country" : "Mexico"},
                {"CustomerName" : "Ernst Handel","City" : "Graz","Country" : "Austria"},
                {"CustomerName" : "FISSA Fabrica Inter. Salchichas S.A.","City" : "Madrid","Country" : "Spain"},
                {"CustomerName" : "Galería del gastrónomo","City" : "Barcelona","Country" : "Spain"},
                {"CustomerName" : "Island Trading","City" : "Cowes","Country" : "UK"},
                {"CustomerName" : "Königlich Essen","City" : "Brandenburg","Country" : "Germany"},
                {"CustomerName" : "Laughing Bacchus Wine Cellars","City" : "Vancouver","Country" : "Canada"},
                {"CustomerName" : "Magazzini Alimentari Riuniti","City" : "Bergamo","Country" : "Italy"},
                {"CustomerName" : "North/South","City" : "London","Country" : "UK"},
                {"CustomerName" : "Paris spécialités","City" : "Paris","Country" : "France"},
                {"CustomerName" : "Rattlesnake Canyon Grocery","City" : "Albuquerque","Country" : "USA"},
                {"CustomerName" : "Simons bistro","City" : "København","Country" : "Denmark"},
                {"CustomerName" : "The Big Cheese","City" : "Portland","Country" : "USA"},
                {"CustomerName" : "Vaffeljernet","City" : "Århus","Country" : "Denmark"},
                {"CustomerName" : "Wolski Zajazd","City" : "Warszawa","Country" : "Poland"}
            ]};
    </script>

    <ul id="id01" class="w3-ul w3-border myUl">
        <li style="font-weight:bold">Name</li>
        <li w3-repeat="customers">{{CustomerName}}, {{Country}}</li>
    </ul>
    <hr>

    <h2>Сортировка HTML элементов</h2>
    <p>Кликните заголовки таблицы, чтобы отсортировать таблицу соответствующим образом:</p>
    <table class="w3-table w3-bordered w3-border w3-margin-top" id="myTable">
        <tr>
            <th class="w3-dark-grey w3-hover-black w3-large" onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer;width:60%">
                Name &nbsp;&#8593;&#8595;</th>
            <th class="w3-dark-grey w3-hover-black w3-large" onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer">
                Country &nbsp;&#8593;&#8595;</th>
        </tr>
        <tr class="item">
            <td>Berglunds snabbköp</td>
            <td>Sweden</td>
        </tr>
        <tr class="item">
            <td>North/South</td>
            <td>UK</td>
        </tr>
        <tr class="item">
            <td>Alfreds Futterkiste</td>
            <td>Germany</td>
        </tr>
        <tr class="item">
            <td>Königlich Essen</td>
            <td>Germany</td>
        </tr>
        <tr class="item">
            <td>Magazzini Alimentari Riuniti</td>
            <td>Italy</td>
        </tr>
        <tr class="item">
            <td>Paris spécialités</td>
            <td>France</td>
        </tr>
        <tr class="item">
            <td>Island Trading</td>
            <td>UK</td>
        </tr>
        <tr class="item">
            <td>Laughing Bacchus Winecellars</td>
            <td>Canada</td>
        </tr>
    </table>
    <hr>

    <h2>Фильтр HTML-элементов</h2>
    <input type="text" id="myInput2" onkeyup="w3.filterHTML('#myUL', 'li', this.value)" placeholder="Искать имена.." title="Введите имя">

    <ul id="myUL" class="w3-ul">
        <li>Alfreds Futterkiste</li>
        <li>Berglunds snabbköp</li>
        <li>Centro comercial Moctezuma</li>
        <li>Ernst Handel</li>
        <li>FISSA Fabrica Inter. Salchichas S.A.</li>
        <li>Galería del gastrónomo</li>
        <li>Island Trading</li>
        <li>Königlich Essen</li>
        <li>Laughing Bacchus Wine Cellars</li>
        <li>Magazzini Alimentari Riuniti</li>
        <li>North/South</li>
        <li>Paris spécialités</li>
    </ul>
    <hr>

    <h2>Скрыть и показать HTML элементы</h2>
    <button class="w3-btn w3-dark-grey" onclick="w3.hide('.city')">Скрыть города</button>
    <button class="w3-btn w3-dark-grey" onclick="w3.show('.city')">Показать города</button>
    <button class="w3-btn w3-dark-grey" onclick="w3.toggleShow('.city')">Переключить Скрыть/Показать</button>

    <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-third">
            <div id="London" class="w3-panel w3-light-grey w3-border city">
                <h2>Лондон</h2>
                <p>Лондон, Великобритания.</p>
            </div>
        </div>
        <div class="w3-third">
            <div id="Paris" class="w3-panel w3-light-grey w3-border city">
                <h2>Париж</h2>
                <p>Париж, Франция.</p>
            </div>
        </div>
        <div class="w3-third">
            <div id="Tokyo" class="w3-panel w3-light-grey w3-border city">
                <h2>Токио</h2>
                <p>Токио, Япония.</p>
            </div>
        </div>
    </div>
    <hr>

    <h2>Добавить стиль к HTML-элементам</h2>
    <button class="w3-btn w3-dark-grey" onclick="w3.addStyle('.test','background-color','#f44336')">
        Изменить цвет фона</button>

    <div class="w3-panel test" style="background-color:#2196F3;color:white">
        <h2>Лондон</h2>
        <p>Лондон - это столица Великобритании.</p>
    </div>
    <hr>

    <h2>Переключить класс HTML элементов</h2>
    <button class="w3-btn w3-dark-grey" onclick="w3.addClass('.test2','x')">Добавить класс</button>
    <button class="w3-btn w3-dark-grey" onclick="w3.removeClass('.test2','x')">Удалить класс</button>
    <button class="w3-btn w3-dark-grey" onclick="w3.toggleClass('.test2','x')">Переключить класс</button>

    <div class="w3-row-padding" style="margin:0 16px">
        <div class="w3-half">
            <div class="w3-panel w3-border test2" style="margin-right: 1px">
                <h2>Лондон</h2>
                <p>Столица Великобритании.</p>
            </div>
        </div>

        <div class="w3-half">
            <div class="w3-panel w3-border test2" style="margin-left: 1px">
                <h2>Париж</h2>
                <p>Столица Франции.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn ws-green" href="index.php">&#10094; Prev</a>
        <a class="w3-right w3-btn ws-green" href="w3js_selectors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>