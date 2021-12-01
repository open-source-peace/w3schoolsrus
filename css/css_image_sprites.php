<?php include '../include/head.php'; ?>

  <title>CSS Спрайты изображений. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Спрайты изображений. Как сделать спрайты изображений на сайте? Как увеличить скорость загрузки изображений на сайте? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Спрайты изображений</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_image_gallery.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_attribute_selectors.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое спрайты изображений?</h2>
    <p><strong>Спрайт изображений</strong> - это набор изображений, помещенных в одно изображение.</p>
    <p>Веб-страница с большим количеством изображений может долго загружаться и генерирует несколько запросов к серверу. </p>
    <p>Использование спрайтов изображений уменьшит количество запросов к серверу и сэкономит пропускную способность.</p>
    <hr>

    <h2>Спрайты изображений - простой пример</h2>
    <p>Вместо того, чтобы использовать три отдельных изображения, мы используем это одно изображение (&quot;img_navsprites.gif&quot;):</p>
    <p><img src="../images/img_navsprites.gif" alt="navigation images" /></p>
    <p>С помощью CSS мы можем показать только ту часть изображения, которая нам нужна.</p>
    <p>В следующем примере CSS указывает, какую часть изображения &quot;img_navsprites.gif&quot; необходимо показать:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #home
            {<br>
            &nbsp;
            width: 46px;<br>
            &nbsp;&nbsp;height: 44px;<br>
            &nbsp;
            background: url(img_navsprites.gif) 0 0;<br>
            }</div>
        <a target="_blank" href="../csstryit/trycss_sprites_img.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Объяснение примера:</b></p>
    <ul>
        <li><code class="w3-codespan">&lt;img id=&quot;home&quot; src=&quot;img_trans.gif&quot;&gt;</code> - Определяет только маленькое прозрачное изображение, потому что атрибут src не может быть пустым. Отображаемое изображение будет фоновым изображением, которое мы указываем в CSS</li>
        <li><code class="w3-codespan">width: 46px; height: 44px;</code> - Определяет часть изображения, которую мы хотим использовать</li>
        <li><code class="w3-codespan">background: url(img_navsprites.gif) 0 0;</code> - Определяет фоновое изображение и его положение (left 0px, top 0px)</li>
    </ul>
    <p>Это самый простой способ использовать спрайты изображений, теперь мы хотим расширить его, используя ссылки и эффекты наведения.</p>
    <hr>

    <h2>Спрайты изображений - создание списка навигации</h2>
    <p>Мы хотим использовать изображение спрайта (&quot;img_navsprites.gif&quot;) для создания списка навигации.</p>
    <p>Мы будем использовать список HTML, потому что он может быть ссылкой, а также поддерживает фоновое изображение:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #navlist {<br>&nbsp;&nbsp;position: relative;<br>}<br>
            <br>#navlist li {<br>&nbsp; margin: 0;<br>&nbsp; padding: 0;<br>&nbsp; list-style: none;<br>&nbsp; position: absolute;<br>
            &nbsp; top: 0;<br>}<br><br>
            #navlist li, #navlist a {<br>&nbsp; height: 44px;<br>&nbsp; display: block;<br>}<br>
            <br>
            #home {<br>&nbsp; left: 0px;<br>&nbsp; width: 46px;<br>&nbsp;&nbsp;background: url('img_navsprites.gif')
            0 0;<br>}<br>
            <br>#prev {<br>&nbsp; left: 63px;<br>&nbsp; width: 43px;<br>&nbsp;&nbsp;background: url('img_navsprites.gif') -47px 0;<br>}<br>
            <br>#next {<br>&nbsp; left: 129px;<br>&nbsp;&nbsp;width: 43px;<br>&nbsp;&nbsp;background: url('img_navsprites.gif')
            -91px 0;<br>}
        </div>
        <a target="_blank" href="../csstryit/trycss_sprites_nav.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p><b>Объяснение примера:</b></p>
    <ul>
        <li>#navlist {position:relative;} - положение установлено относительно, чтобы позволить абсолютное позиционирование внутри него</li>
        <li>#navlist li {margin:0;padding:0;list-style:none;position:absolute;top:0;} - margin и padding установлены 0, list-style удалён, и все элементы списка расположены в absolute</li>
        <li>#navlist li, #navlist a {height:44px;display:block;} - высота всех изображений 44px</li>
    </ul>
    <p>Теперь начинаем позиционировать и стилизовать каждую конкретную часть:</p>
    <ul>
        <li>#home {left:0px;width:46px;} - Расположен полностью слева, а ширина изображения составляет 46px</li>
        <li>#home {background:url(img_navsprites.gif) 0 0;} - Определяет фоновое изображение и его положение (left 0px, top 0px)</li>
        <li>#prev {left:63px;width:43px;} - Расположен 63px справа (#home из 46px + некоторое дополнительное пространство между элементами), и ширина 43px.</li>
        <li>#prev {background:url('img_navsprites.gif') -47px 0;} - Определяет фоновое изображение 47px справа (#home из 46px + 1px разделитель строк)</li>
        <li>#next {left:129px;width:43px;} - Расположен 129px справа (начало из #prev 63px + #prev из 43px +
            экстра пространство) и ширина 43px.</li>
        <li>#next {background:url('img_navsprites.gif') -91px 0;} - Определяет фоновое изображение 91px справа (#home из 46px + 1px разделитель строк + #prev ширина 43px + 1px разделитель строк)</li>
    </ul>
    <hr>

    <h2>Спрайты изображений - Эффект наведения</h2>
    <p>Теперь мы хотим добавить эффект наведения в наш список навигации.</p>
    <div class="w3-panel w3-note">
        <p><strong>Совет:</strong> Селектор <code class="w3-codespan">:hover</code> можно использовать для всех элементов, а не только для ссылок.</p>
    </div>

    <p>Наше новое изображение (&quot;img_navsprites_hover.gif&quot;) содержит три навигационных изображения и три изображения для использования при наведении:</p>
    <p><img src="../images/img_navsprites_hover.gif" alt="navigation images" /></p>
    <p>Поскольку это одно изображение, а не шесть отдельных файлов, <b>не будет задержки загрузки</b>, когда пользователь наводит курсор на изображение.</p>
    <p>Мы только добавляем три строки кода, чтобы добавить эффект наведения:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            #home a:hover {<br>&nbsp; background: url('img_navsprites_hover.gif') 0 -45px;<br>}<br>
            <br>#prev a:hover {<br>&nbsp;&nbsp;background: url('img_navsprites_hover.gif') -47px
            -45px;<br>}<br>
            <br>#next a:hover {<br>&nbsp;&nbsp;background: url('img_navsprites_hover.gif') -91px
            -45px;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_sprites_hover_nav.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Объяснение примера:</p>
    <ul>
        <li>#home a:hover {background: transparent url('../images/img_navsprites_hover.gif') 0 -45px;} - Для всех трех изображений при наведении мы указываем одну и ту же позицию фона, только на 45 пикселей ниже</li>
    </ul>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_image_gallery.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_attribute_selectors.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>