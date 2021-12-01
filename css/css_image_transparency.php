<?php include '../include/head.php'; ?>

  <title>CSS Opacity / Transparency. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Opacity / Transparency. CSS Свойство Opacity / Transparency. Прозрачность и непрозрачность изображений. Как сделать элемент прозрачным или полупрозрачным? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        #klem1,#klem2{opacity:0.4;filter:alpha(opacity=40); /* For IE8 and earlier */}
        #klem1:hover,#klem2:hover {opacity:1.0;filter:alpha(opacity=100); /* For IE8 and earlier */}
        div.background {background: url(../images/klematis.jpg) repeat; border: 2px solid black;}
        div.transbox {margin: 30px;background-color: #fff;border: 1px solid black; /* for IE */ filter:alpha(opacity=60); /* CSS3 standard */ opacity:0.6; }
        div.transbox p {margin: 5%;font-weight: bold;color: #000;}
        .imgopac2 {opacity: 0.5;filter: alpha(opacity=50); /* For IE8 and earlier */}
        .imgopac2:hover {opacity: 1.0;filter: alpha(opacity=100); /* For IE8 and earlier */}
        .imgopac {opacity: 1.0;filter: alpha(opacity=100); /* For IE8 and earlier */}
        .imgopac:hover {opacity: 0.5;filter: alpha(opacity=50); /* For IE8 and earlier */}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Opacity / Transparency</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_pseudo_elements.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_navbar.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro"><strong>Свойство <code class="w3-codespan">opacity</code> определяет непрозрачность / прозрачность элемента</strong>.</p>
    <hr>

    <h2>Прозрачное изображение</h2>
    <p>Свойство <code class="w3-codespan">opacity</code> может принимать значение от 0,0 до 1,0. Чем ниже значение, тем прозрачнее:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-center">
            <img src="../images/img_forest.jpg" alt="Прозрачное изображение" style="width:100%;opacity:0.2;">
            <p>opacity 0.2</p>
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_forest.jpg" alt="Прозрачное изображение" style="width:100%;opacity:0.5">
            <p>opacity 0.5</p>
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_forest.jpg" alt="Прозрачное изображение" style="width:100%;">
            <p>opacity 1<br>(по умолчанию)</p>
        </div>

    </div>
    <p><strong>Примечание:</strong> IE8 и более ранние версии используют <code class="w3-codespan">filter:alpha(opacity=x)</code>. Значение x может принимать значение от 0 до 100. Более низкое значение делает элемент более прозрачным.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp;&nbsp;opacity: 0.5;<br>&nbsp;&nbsp;filter:
            alpha(opacity=50); /* Для IE8 и ранее */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_image_opacity.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Эффект прозрачности при наведении курсора</h2>
    <p>Свойство <code class="w3-codespan">opacity</code> часто используется вместе с селектором <code class="w3-codespan">:hover</code> для изменения непрозрачности при наведении курсора:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-center">
            <img src="../images/img_lights.jpg" alt="Эффект прозрачности" style="width:100%;" class="imgopac2">
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_mountains.jpg" alt="Эффект прозрачности" style="width:100%;" class="imgopac2">
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_5terre_css.jpg" alt="Эффект прозрачности" style="width:100%;" class="imgopac2">
        </div>

    </div>

    <div class="w3-example" style="margin-bottom:24px;">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; opacity: 0.5;<br>&nbsp; filter:
            alpha(opacity=50); /* Для IE8 и ранее */<br>}<br><br>img:hover {<br>&nbsp;&nbsp;opacity: 1.0;<br>
            &nbsp; filter: alpha(opacity=100); /* Для IE8 и ранее */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_image_transparency.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <h3>Объяснение примера</h3>
    <p>Первый блок CSS похож на код в Примере 1. Кроме того, мы добавили, что должно происходить, когда пользователь наводит курсор на одно из изображений. В этом случае мы хотим, чтобы изображение НЕ было прозрачным, когда пользователь наводит на него курсор. Значение в CSS для этого <code class="w3-codespan">opacity:1;</code>.</p>
    <p>Когда указатель мыши отходит от изображения, изображение снова становится прозрачным.</p>

    <p>Пример обратного эффекта при наведении курсора:</p>
    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-center">
            <img src="../images/img_lights.jpg" alt="Эффект при наведении курсора" style="width:100%;" class="imgopac">
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_mountains.jpg" alt="Эффект при наведении курсора" style="width:100%;" class="imgopac">
        </div>

        <div class="w3-third w3-center">
            <img src="../images/img_5terre_css.jpg" alt="Эффект при наведении курсора" style="width:100%;" class="imgopac">
        </div>

    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img:hover {<br>&nbsp;&nbsp;opacity: 0.5;<br>&nbsp; filter: alpha(opacity=50); /* Для IE8 и ранее */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_image_transparency2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Прозрачный блок</h2>
    <p>При использовании свойства <code class="w3-codespan">opacity</code> для добавления прозрачности на фон элемента все его дочерние элементы наследуют одинаковую прозрачность. Это может затруднить чтение текста внутри полностью прозрачного элемента:</p>
    <div class="w3-cell-row">
        <div class="w3-cell w3-mobile w3-center">
            <div style="background-color:#4CAF50;opacity:1;padding:50px;color:black"><p>opacity 1</p></div>
        </div>

        <div class="w3-cell w3-mobile w3-center">
            <div style="background-color:#4CAF50;opacity:0.6;padding:50px;color:black"><p>opacity 0.6</p></div>
        </div>

        <div class="w3-cell w3-mobile w3-center">
            <div style="background-color:#4CAF50;opacity:0.3;padding:50px;color:black"><p>opacity 0.3</p></div>
        </div>

        <div class="w3-cell w3-mobile w3-center">
            <div style="background-color:#4CAF50;opacity:0.1;padding:50px;color:black"><p>opacity 0.1</p></div>
        </div>

    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp;&nbsp;opacity: 0.3;<br>&nbsp;&nbsp;filter:
            alpha(opacity=30); /* Для IE8 и ранее */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_opacity_box.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Прозрачность с использованием RGBA</h2>
    <p>Если вы не хотите применять непрозрачность к дочерним элементам, как в нашем примере выше, используйте цветовые значения <strong>RGBA</strong>. В следующем примере задается прозрачность цвета фона, а не текста:</p>

    <div class="w3-cell-row">
        <div class="w3-cell w3-mobile w3-center">
            <div style="background:rgb(76, 175, 80);padding:50px;color:black"><p>100% opacity</p></div>
        </div>

        <div class="w3-cell w3-mobile w3-center">
            <div style="background:rgba(76, 175, 80,0.6);padding:50px;color:black"><p>60% opacity</p></div>
        </div>

        <div class="w3-cell w3-mobile w3-center">
            <div style="background:rgba(76, 175, 80,0.3);padding:50px;color:black"><p>30% opacity</p></div>
        </div>

        <div class="w3-cell w3-mobile w3-center">
            <div style="background:rgba(76, 175, 80,0.1);padding:50px;color:black"><p>10% opacity</p></div>
        </div>

    </div>
    <p>Из главы <a href="css_colors.php">Цвета CSS</a> вы узнали, что в качестве значения цвета можно использовать RGB. В дополнение к RGB можно использовать значение цвета RGB с альфа-каналом (RGBA), которое определяет непрозрачность для цвета.</p>
    <p>Значение цвета RGBA указывается с помощью: rgba (красный, зеленый, синий, <em>альфа</em>). Параметр <em>alpha</em> - это число от 0,0 (полностью прозрачное) до 1,0 (полностью непрозрачное).</p>
    <p><strong>Совет.</strong> Подробнее о цветах RGBA вы узнаете в разделе <a href="css3_colors.php">CSS Цвета</a> на нашем сайте <?php include '../include/w3schools.php'; ?>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; background: rgba(76, 175, 80, 0.3) /* Зеленый фон с 30% прозрачности */<br>}</div>
        <a target="_blank" href="../csstryit/trycss_opacity_box2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Текст в прозрачном поле</h2>
    <div class="background">
        <div class="transbox">
            <p>Это некоторый текст, который помещается в прозрачный блок.</p>
        </div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>
            &lt;head&gt;<br>
            &lt;style&gt;<br>
            div.background {<br>
            &nbsp; background: url(klematis.jpg) repeat;<br>
            &nbsp; border: 2px solid black;<br>
            }<br>
            <br>
            div.transbox {<br>
            &nbsp; margin: 30px;<br>
            &nbsp; background-color: #ffffff;<br>
            &nbsp; border: 1px solid black;<br>
            &nbsp;&nbsp;opacity: 0.6;<br>
            &nbsp;&nbsp;filter: alpha(opacity=60);&nbsp;/* Для IE8 и ранее */<br>
            }<br>
            <br>
            div.transbox p {<br>
            &nbsp;&nbsp;margin: 5%;<br>
            &nbsp;&nbsp;font-weight: bold;<br>
            &nbsp; color: #000000;<br>
            }<br>
            &lt;/style&gt;<br>
            &lt;/head&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;div class=&quot;background&quot;&gt;<br>
            &nbsp; &lt;div class=&quot;transbox&quot;&gt;<br>
            &nbsp;&nbsp;&nbsp; &lt;p&gt;Это некоторый текст, который помещается в прозрачный блок.&lt;/p&gt;<br>
            &nbsp; &lt;/div&gt;<br>
            &lt;/div&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" href="../csstryit/trycss_transparency.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <p>Сначала мы создаем элемент <code class="w3-codespan">&lt;div&gt;</code> (class=&quot;background&quot;) с фоновым изображением и границей. Затем мы создаем еще один <code class="w3-codespan">&lt;div&gt;</code> (class=&quot;transbox&quot;) внутри первого <code class="w3-codespan">&lt;div&gt;</code>. &lt;div class=&quot;transbox&quot;&gt; имеют цвет фона и границу - div прозрачен. Внутри прозрачного <code class="w3-codespan">&lt;div&gt;</code> мы добавляем текст внутри элемента <code class="w3-codespan">&lt;p&gt;</code>.</p>
    <hr>

    <div class="w3-container w3-dark-grey w3-padding">
        <h2 class="shadow-black-1">Проверьте себя с помощью упражнений!</h2>
        <div class="w3-bar w3-margin-bottom">
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_image_transparency1" target="_blank" rel="nofollow">Упражнение 1 &raquo;</a>
            <a class="w3-bar-item w3-btn" href="https://www.w3schools.com/css/exercise.asp?filename=exercise_image_transparency2" target="_blank" rel="nofollow">Упражнение 2 &raquo;</a>
        </div>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_pseudo_elements.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_navbar.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>