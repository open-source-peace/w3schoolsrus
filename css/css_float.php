<?php include '../include/head.php'; ?>

  <title>CSS Макет. Float и clear. Clearfix. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Макет. Float и clear. Clearfix. Расположение элементом. Как сделать обтекание текста или картинки? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        .floatl:after {
            font-weight: bold;
            content: 'Float Left';
            color:white;
        }
        .floatr:after  {
            font-weight:bold;
            content: 'Float Right';
            color:white;
        }
        @media only screen and (max-width: 500px){
            .floatl:after  {
                content: 'Left';
            }
            .floatr:after  {
                content: 'Right';
            }
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS Макет<span class="color_h1"> - float и clear</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_overflow.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_float_clear.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">CSS свойство <code class="w3-codespan">float</code> определяет, как элемент должен располагаться (плавать) относительно других элементов.</p>
    <p class="intro">CSS свойство <code class="w3-codespan">clear</code> определяет, какие элементы могут плавать рядом с очищенным (clear) элементом и с какой стороны.</p>

    <div style="background-color:#2196F3;padding:16px;float:left;width:30%;opacity:0.85;text-align:center;">
        <span class="floatl"></span>
    </div>
    <div style="background-color:#F44336;padding:16px;float:right;width:30%;opacity:0.85;text-align:center;">
        <span class="floatr"></span>
    </div>
    <br><br>
    <hr style="clear:both;margin-bottom:15px;margin-top:32px">

    <h2>Свойство float</h2>
    <p>Свойство <code class="w3-codespan">float</code> используется для позиционирования и форматирования содержимого, например когда изображение располагается слева от текста в контейнере.</p>
    <p>Свойство <code class="w3-codespan">float</code> может иметь одно из следующих значений:</p>
    <ul>
        <li><code class="w3-codespan">left</code> - Элемент плавает слева от своего контейнера.</li>
        <li><code class="w3-codespan">right</code> - Элемент плавает справа от своего контейнера.</li>
        <li><code class="w3-codespan">none</code> - Элемент не плавает (будет отображаться именно там, где он встречается в тексте). Это по умолчанию</li>
        <li><code class="w3-codespan">inherit</code> - Элемент наследует float значение своего родителя</li>
    </ul>
    <p>В простейшем случае свойство <code class="w3-codespan">float</code> можно использовать для обтекания текстом изображений.</p>
    <hr>

    <h2>Пример - float: right;</h2>
    <p>В следующем примере показано, что изображение должно располагаться (плавать) от текста <strong>справа</strong>:</p>
    <div class="w3-clear w3-border w3-padding">
        <p><img src="../images/pineapple.jpg" alt="Свойство float. Обтекание справа" style="width:170px;height:170px;float:right;margin-left:15px;margin-bottom:10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. <span class="w3-hide-small">Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...</span></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; float: right;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_float.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пример - float: left;</h2>
    <p>В следующем примере показано, что изображение должно располагаться (плавать) от текста <strong>слева</strong>:</p>
    <div class="w3-clear w3-border w3-padding">
        <p><img src="../images/pineapple.jpg" alt="Pineapple" style="width:170px;height:170px;float:left;margin-right:15px;margin-bottom:10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. <span class="w3-hide-small">Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...</span></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; float: left;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_float2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пример - No float</h2>
    <p>В следующем примере изображение будет отображаться именно там, где оно встречается в тексте (float: none;):</p>
    <div class="w3-clear w3-border w3-padding">
        <p><img src="../images/pineapple.jpg" alt="Pineapple" style="max-width:185px;width:50%;float:none;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. <span class="w3-hide-small">Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac...</span></p>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; float: none;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_float_none.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Пример - Элементы располагаются рядом друг с другом</h2>
    <p>Обычно элементы div отображаются друг над другом. Однако, если применяется <code class="w3-codespan">float: left</code>, то элементы располагаются рядом друг с другом:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            div {<br>&nbsp; float: left;<br>&nbsp; padding: 15px; <br>}<br><br>.div1 {<br>&nbsp;
            background: red;<br>}<br><br>.div2 {<br>&nbsp; background: yellow;<br>}<br>
            <br>.div3 {<br>&nbsp; background: green;<br>}</div>
        <a target="_blank" href="../csstryit/trycss_layout_float3.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_overflow.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_float_clear.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>