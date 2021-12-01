<?php include '../include/head.php'; ?>

<title>CSS Свойство object-position. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Свойство object-position. Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
<link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Свойство object-position</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_object-fit.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_buttons.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">CSS свойство <code class="w3-codespan">object-position</code> используется для указания того, как &lt;img&gt; или &lt;video&gt; должен быть помещен в свой контейнер.</p>
    <hr>
    <h2>Изображение</h2>
    <p>Посмотрите на следующее изображение из Парижа, оно составляет 400x300 пикселей:</p>
    <img src="../images/paris.jpg" alt="Paris" style="width:400px;height:300px">
    <p>Затем мы используем <code class="w3-codespan">object-fit: cover;</code>, чтобы сохранить соотношение сторон и заполнить заданное измерение. Однако изображение будет обрезано по размеру, как здесь:</p>
    <img src="../images/paris.jpg" alt="Paris" style="width:200px;height:300px;object-fit:cover;">
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; width: 200px;<br>&nbsp; height: 300px;<br>&nbsp; object-fit: cover;<br>}</div>
        <a target="_blank" href="../csstryit/trycss3_object-fit.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Использование свойства object-position</h2>
    <p>Допустим, часть изображения, которая показывается, расположена не так, как мы хотим. Чтобы разместить изображение, мы будем использовать свойство <code class="w3-codespan">object-position</code>.</p>
    <p>Здесь мы будем использовать свойство <code class="w3-codespan">object-position</code>, чтобы расположить изображение так, чтобы большое старое здание было в центре:</p>

    <img src="../images/paris.jpg" alt="Париж" style="width:200px;height:300px;object-fit:cover;object-position:80% 100%">
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; width: 200px;<br>&nbsp;&nbsp;height:
            300px;<br>&nbsp;&nbsp;object-fit: cover;<br>&nbsp; object-position: 80% 100%;<br>}</div>
        <a target="_blank" href="../csstryit/trycss3_object-position.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <p>Здесь мы будем использовать свойство <code class="w3-codespan">object-position</code>, чтобы расположить изображение так, чтобы знаменитая Эйфелева башня была в центре:</p>

    <img src="../images/paris.jpg" alt="Париж" style="width:200px;height:300px;object-fit:cover;object-position:15% 100%">
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate cssHigh">
            img {<br>&nbsp; width: 200px;<br>&nbsp;&nbsp;height: 300px;<br>&nbsp;&nbsp;object-fit: cover;<br>&nbsp; object-position: 15% 100%;<br>}</div>
        <a target="_blank" href="../csstryit/trycss3_object-position2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CSS Свойства Object-* </h2>
    <p>В следующей таблице перечислены CSS свойства object-* :</p>
    <table class="w3-table-all notranslate">
        <tr>
            <th style="width:25%">Свойство</th>
            <th>Описание</th>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_object-fit.php">object-fit</a></td>
            <td>Определяет, как &lt;img&gt; или &lt;video&gt; должен быть изменен, чтобы соответствовать его контейнеру</td>
        </tr>
        <tr>
            <td><a href="../cssref/css3_pr_object-position.php">object-posititon</a></td>
            <td>Определяет, как &lt;img&gt; или &lt;video&gt; должен располагаться с координатами x/y внутри &quot;собственного поля содержимого&quot;.</td>
        </tr>
    </table>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css3_object-fit.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css3_buttons.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>