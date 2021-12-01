<?php include '../include/head.php'; ?>

<title>HTML Карты изображений. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Карты изображений. С помощью карт изображений HTML можно создавать зоны, на которые можно кликать. Как создать карту изображений? Что такое карта изображений на веб-сайте? <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

<article>
    <h1>HTML <span class="color_h1">Карты изображений</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images_background.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">С помощью карт изображений HTML можно создавать зоны, на которые можно кликать.</p>
    <hr>
    <div class="sum">
        <h4>В этой теме:</h4>
        <ul>
            <li><a href="#c1"><em>Карты изображений</em></a></li>
            <li><a href="#c2"><em>Как это работает?</em></a></li>
            <li><a href="#c3"><em>Изображения</em></a></li>
            <li><a href="#c4"><em>Создать карту изображений</em></a></li>
            <li><a href="#c5"><em>Кликабельные области</em></a></li>
            <li><a href="#c6"><em>Карта изображений и JavaScript</em></a></li>
        </ul>
    </div>
    <hr>

    <h2 id="c1">Карты изображений</h2>
    <p>HTML тег <code class="w3-codespan">&lt;map&gt;</code> определяет карту изображения. Карта изображений - это изображение из кликабельными областями. Области определяются одним или несколькими тегами <code class="w3-codespan">&lt;area&gt;</code>.</p>
    <p>Попробуйте кликнуть на компьютере, телефоне или чашке кофе на изображении ниже:</p>
    <img src="../images/workplace.jpg" alt="Карта зображень" usemap="#workmap">
    <map name="workmap">
        <area shape="rect" coords="34,44,270,350" alt="Sun" href="computer.html" target="_blank">
        <area shape="rect" coords="290,172,333,250" alt="Mercury" href="phone.html" target="_blank">
        <area shape="circle" coords="337,300,44" alt="Venus" href="coffee.html" target="_blank">
    </map>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Вот исходный HTML код для карты изображений выше:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;workplace.jpg&quot; alt=&quot;Workplace&quot; usemap=&quot;#workmap&quot;&gt;<br>
            <br>&lt;map name=&quot;workmap&quot;&gt;<br>&nbsp; &lt;area shape=&quot;rect&quot; coords=&quot;34,44,270,350&quot;
            alt=&quot;Computer&quot; href=&quot;computer.html&quot;&gt;<br>&nbsp; &lt;area shape=&quot;rect&quot; coords=&quot;290,172,333,250&quot;
            alt=&quot;Phone&quot; href=&quot;phone.html&quot;&gt;<br>&nbsp; &lt;area shape=&quot;circle&quot; coords=&quot;337,300,44&quot;
            alt=&quot;Coffee&quot; href=&quot;coffee.html&quot;&gt;<br>&lt;/map&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8b5b.html?filename=tryhtml_images_map2" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2 id="c2">Как это работает?</h2>
    <p>Идея карты изображений заключается в том, что вы должны иметь возможность выполнять различные действия в зависимости от того, где на картинке вы кликаете.</p>
    <p>Для создания карты изображений вам нужно изображение и некоторый HTML-код, который описывает области, на которые можно кликнуть.</p>
    <hr>

    <h2 id="c3">Изображения</h2>
    <p>Изображение вставляется с помощью тега <code class="w3-codespan">&lt;img&gt;</code> Единственное отличие от других изображений заключается в том, что вы должны добавить атрибут <code class="w3-codespan">usemap</code>:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;img src=&quot;workplace.jpg&quot; alt=&quot;Workplace&quot; usemap=&quot;#workmap&quot;&gt;
        </div>
    </div>
    <p>Значение <code class="w3-codespan">usemap</code> начинается с хеш-тега <code class="w3-codespan">#</code>, за которым следует имя карты изображений и используется, чтобы создать взаимосвязь между изображением и картой изображений.</p>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Вы можете использовать любое изображение для карты изображений!</p>
    </div>
    <hr>

    <h2 id="c4">Создать карту изображений</h2>
    <p>Потом добавьте элемент <code class="w3-codespan">&lt;map&gt;</code>.</p>
    <p>Элемент <code class="w3-codespan">&lt;map&gt;</code> используется для создания карты изображений и связывается с изображением с помощью необходимого атрибута <code class="w3-codespan">name</code>:</p>
    <div class="w3-example">
        <div class="w3-code notranslate htmlHigh">
            &lt;map name=&quot;workmap&quot;&gt;
        </div>
    </div>
    <p>Атрибут <code class="w3-codespan">name</code> должен иметь то самое значение, что и атрибут <code class="w3-codespan">&lt;img&gt;</code> <code class="w3-codespan">usemap</code>.</p>
    <hr>

    <h2 id="c5">Кликабельные области</h2>
    <p>Потом добавьте кликабельные области.</p>
    <p>Область, на которую можно кликнуть, определяется с помощью элемента <code class="w3-codespan">&lt;area&gt;</code>.</p>
    <hr>

    <h3>Форма кликабельной области</h3>
    <p>Вы должны определить форму области, на которую можно кликнуть, и вы можете выбрать одно из этих значений:</p>
    <ul>
        <li><code class="w3-codespan">rect</code> - определяет прямоугольную область</li>
        <li><code class="w3-codespan">circle</code> - определяет круговую область</li>
        <li><code class="w3-codespan">poly</code> - определяет полигональную область</li>
        <li><code class="w3-codespan">default</code> - определяет всю область</li>
    </ul>
    <p>Вы также должны определить некоторые координаты, чтобы можно было разместить область, на которую можно нажать на изображении.</p>
    <hr>

    <h3>Shape=&quot;rect&quot;</h3>
    <p>Координаты для <code class="w3-codespan">shape=&quot;rect&quot;</code> состоят попарно, одна для оси x, и одна для оси y.</p>
    <p>Т.о., координаты <code class="w3-codespan">34,44</code> расположены на 34 пикселей от левого поля и 44 пикселей от верхнего:</p>

    <div style="position:relative">
        <div style="position:absolute;width:2px;height:379px;left:34px;background-color:GreenYellow ;opacity:0.8"></div>
        <div style="position:absolute;width:400px;height:2px;top:44px;background-color:GreenYellow ;opacity:0.8"></div>
        <div style="border:2px solid red;border-radius:50%;position:absolute;width:20px;height:20px;left:25px;top:35px;background-color:transparent;opacity:0.8"></div>
    </div>
    <img src="../images/workplace.jpg" alt="Карта зображень">
    <p>Координаты <code class="w3-codespan">270,350</code> расположены в 270 пикселей от левого поля и 350 пикселей от верхнего:</p>

    <div style="position:relative">
        <div style="position:absolute;width:2px;height:379px;left:270px;background-color:GreenYellow ;opacity:0.8"></div>
        <div style="position:absolute;width:400px;height:2px;top:350px;background-color:GreenYellow ;opacity:0.8"></div>
        <div style="border:2px solid red;border-radius:50%;position:absolute;width:20px;height:20px;left:261px;top:341px;background-color:transparent;opacity:0.8"></div>
    </div>
    <img src="../images/workplace.jpg" alt="Карта зображень">

    <p>Теперь у нас есть достаточно данных, чтобы создать прямоугольную область, на которую можно нажать:<br></p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;area shape=&quot;rect&quot; coords=&quot;34, 44, 270, 350&quot; href=&quot;computer.html&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitc190.html?filename=tryhtml_images_map3" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Это область, которая становится интерактивной и направляет пользователя на страницу &quot;computer.html&quot;:</p>
    <div style="position:relative">
        <div style="position:absolute;width:236px;height:306px;left:34px;top:44px;background-color:dodgerblue;opacity:0.8"></div>
    </div>
    <img src="../images/workplace.jpg" alt="Карта зображень">
    <hr>

    <h3>Shape=&quot;circle&quot;</h3>
    <p>Чтобы добавить область круга, сначала найдите координаты центра окружности:</p>
    <p><code class="w3-codespan">337,300</code></p>
    <div style="position:relative">
        <div style="position:absolute;width:2px;height:379px;left:337px;background-color:GreenYellow ;opacity:0.8"></div>
        <div style="position:absolute;width:400px;height:2px;top:300px;background-color:GreenYellow ;opacity:0.8"></div>
        <div style="border:2px solid red;border-radius:50%;position:absolute;width:20px;height:20px;left:328px;top:291px;background-color:transparent;opacity:0.8"></div>
    </div>
    <img src="../images/workplace.jpg" alt="Карта зображень">

    <p>Затем укажите радиус окружности:</p>
    <p><code class="w3-codespan">44</code> pixels</p>
    <div style="position:relative">
        <div style="position:absolute;width:44px;height:2px;left:337px;top:300px;background-color:GreenYellow ;opacity:0.8"></div>
        <div style="border:2px solid red;border-radius:50%;position:absolute;width:88px;height:88px;left:293px;top:256px;background-color:transparent;opacity:0.8"></div>
    </div>
    <img src="../images/workplace.jpg" alt="Карта зображень">

    <p>Теперь у вас есть достаточно данных для создания интерактивной круговой области:<br></p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;area shape=&quot;circle&quot; coords=&quot;337, 300, 44&quot; href=&quot;coffee.html&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit38bc.html?filename=tryhtml_images_map4" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Это область, которая становится интерактивной и направляет пользователя на страницу &quot;coffee.html&quot;:</p>
    <div style="position:relative">
        <div style="border-radius:50%;position:absolute;width:88px;height:88px;left:293px;top:256px;background-color:dodgerblue;opacity:0.8"></div>
    </div>
    <img src="../images/workplace.jpg" alt="Карта зображень">
    <hr>

    <h3>Shape=&quot;poly&quot;</h3>
    <p><code class="w3-codespan">shape=&quot;poly&quot;</code> содержит несколько координатных точек, создает фигуру, образованную прямыми линиями (многоугольник).</p>
    <p>Это можно использовать для создания любой фигуры.</p>
    <p>Как, возможно, форма круассана!</p>
    <p>Как мы можем сделать так, чтобы круассан на картинке ниже стал ссылкой, которую можно кликнуть?</p>
    <img src="../images/frenchfood.jpg" alt="Французская еда">
    <p>Мы должны найти координаты x и y для всех краев круассана:</p>
    <img src="../images/frenchfood4.jpg" alt="Французька їжа">
    <p>Координаты подаются попарно, одна для оси x и одна для оси y:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;area shape=&quot;poly&quot; coords=&quot;140,121,181,116,204,160,204,222,191,270,140,329,85,355,58,352,37,322,40,259,103,161,128,147&quot; href=&quot;croissant.html&quot;&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitab63.html?filename=tryhtml_images_map_croissant" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Это область, которая становится интерактивной и направляет пользователя на страницу &quot;croissant.html&quot;:</p>
    <img src="../images/frenchfood3.jpg" alt="Французская еда">
    <hr>

    <h2 id="c6">Карта изображений и JavaScript</h2>
    <p>Интерактивная область может также вызвать функцию JavaScript.</p>

    <p>Добаьте событие <code class="w3-codespan">click</code> к элементу <code class="w3-codespan">&lt;area&gt;</code> для выполнения функции JavaScript:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Здесь мы используем атрибут onclick для выполнения функции JavaScript при нажатии на область:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;map name=&quot;workmap&quot;&gt;<br>&nbsp;
            &lt;area shape=&quot;circle&quot; coords=&quot;337,300,44&quot;
            onclick=&quot;myFunction()&quot;&gt;<br>&lt;/map&gt;<br><br>&lt;script&gt;<br>function
            myFunction() {<br>&nbsp; alert(&quot;Вы кликнули на чашке кофе!&quot;);<br>}<br>
            &lt;/script&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitab62.html?filename=tryhtml_images_map5" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Резюме</h2>
    <ul>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;map&gt;</code> чтобы определить карту изображений</li>
        <li>Используйте HTML элемент <code class="w3-codespan">&lt;area&gt;</code> чтобы определить кликабельные области на карте изображений</li>
        <li>Используйте HTML атрибут <code class="w3-codespan">usemap</code> элемента <code class="w3-codespan">&lt;img&gt;</code> для указания на карту изображений</li>
    </ul>
    <hr>

    <h2>HTML Теги изображения</h2>
    <table class="w3-table-all notranslate">
        <tr>
            <th>Тег</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../tags/tag_img.php">&lt;img&gt;</a></td>
            <td>Определяет изображение</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_map.php">&lt;map&gt;</a></td>
            <td>Определяет карту изображений</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_area.php">&lt;area&gt;</a></td>
            <td>Определяет кликабельную область внутри карты изображений</td>
        </tr>
        <tr>
            <td><a href="../tags/tag_picture.php">&lt;picture&gt;</a></td>
            <td>Определяет контейнер для нескольких ресурсов изображений</td>
        </tr>
    </table>
    <div class="w3-note w3-panel">
        <p>Для ознакомления с полным списком всех доступных HTML тегов посетите <a href="../tags/index.php">HTML Справочник тегов</a> на нашем сайте.</p>
    </div>
    <hr>
    <div class="quest">
        <h3>Вопросы для самоконтроля</h3>
        <ul>
            <li><em>Что такое карта изображений на веб-странице?</em></li>
            <li><em>Для чего нужны карты изображений на HTML-странице?</em></li>
            <li><em>Какой тег определяет карту изображений?</em></li>
            <li><em>С помощью какого тега определяются кликабельные области на изображении?</em></li>
            <li><em>Какой атрибут нужно добавить к изображению, чтобы установить взаимосвязь между изображением и картой изображений?</em></li>
            <li><em>Какой тег определяет карту изображений на стороне клиента?</em></li>
            <li><em>С помощью какого атрибута карта изображений связывается с изображением?</em></li>
            <li><em>Какой тег определяет кликабельную область внутри карты изображений?</em></li>
            <li><em>Какое значение определяет прямоугольную кликабельную область на изображении?</em></li>
            <li><em>Какое значение определяет круговую кликабельную область на изображении?</em></li>
            <li><em>Какое значение определяет полигональную кликабельную область на изображении?</em></li>
            <li><em>Какое значение делает кликабельным всё изображение?</em></li>
            <li><em>Какой атрибут используется для выполнения JavaScript-функции onclick при нажатии на кликабельную область изображения?</em></li>
            <li><em>К какому элементу необходимо добавить событие click для выполнения JavaScript-функции onclick?</em></li>
        </ul>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="html_images.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="html_images_background.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
