<?php include '../include/head.php'; ?>
<title>PHP Заполнение формы. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP Пример полной формы PHP. Как правильно создать полную форму на PHP? Сохранение значений в форме. Обязательные поля ввода формы. Полный скрипт на PHP. Современный учебник по языку PHP. Справочник. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">Пример полной формы</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_url_email.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_date.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">В этой главе показано, как сохранить значения в полях ввода, когда пользователь нажимает кнопку отправки.</p>
    <hr>

    <h2>PHP - Сохраняйте значения в форме</h2>
    <p>Чтобы показать значения в полях ввода после того, как пользователь нажмет кнопку отправки, добавим небольшой PHP-скрипт в атрибут значения следующих полей ввода: name, email и website. В поле комментария textarea помещаем скрипт между тегами <code class="w3-codespan">&lt;textarea&gt;</code> и <code class="w3-codespan">&lt;/textarea&gt;</code>. Небольшой скрипт выводит значение переменных $name, $email, $website и $comment.</p>
    <p>Затем также нужно показать, какой переключатель был отмечен. Для этого необходимо манипулировать проверяемым атрибутом (а не атрибутом значения для переключателей):</p>
    <div class="w3-code w3-border notranslate htmlHigh"><div>
            Name: &lt;input type=&quot;text&quot; name=&quot;name&quot; value=&quot;&lt;?php echo $name;?&gt;&quot;&gt;<br><br>E-mail: &lt;input type=&quot;text&quot; name=&quot;email&quot; value=&quot;&lt;?php echo $email;?&gt;&quot;&gt;<br>
            <br>Website: &lt;input type=&quot;text&quot; name=&quot;website&quot; value=&quot;&lt;?php echo $website;?&gt;&quot;&gt;<br><br>Comment: &lt;textarea name=&quot;comment&quot; rows=&quot;5&quot; cols=&quot;40&quot;&gt;&lt;?php echo $comment;?&gt;&lt;/textarea&gt;<br>
            <br>Gender:<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot;<br>&lt;?php if (isset($gender) &amp;&amp; $gender==&quot;female&quot;) echo &quot;checked&quot;;?&gt;<br>value=&quot;female&quot;&gt;Female<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot;<br>&lt;?php if (isset($gender) &amp;&amp; $gender==&quot;male&quot;) echo &quot;checked&quot;;?&gt;<br>value=&quot;male&quot;&gt;Male<br>&lt;input type=&quot;radio&quot; name=&quot;gender&quot;<br>&lt;?php if (isset($gender) &amp;&amp; $gender==&quot;other&quot;) echo &quot;checked&quot;;?&gt;<br>value=&quot;other&quot;&gt;Other</div>
    </div>
    <hr>

    <h2>PHP - Пример полной формы</h2>
    <p>Вот полный код примера проверки PHP формы:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate">
            <iframe src="https://tryphp.w3schools.com/demo/demo_form_validation_complete.php" style="width:100%;height:600px;border:none"></iframe>
        </div>
        <a class="w3-btn w3-margin-bottom" href="https://tryphp.w3schools.com/showphp.php?filename=demo_form_validation_complete" target="_blank" rel="nofollow">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_form_url_email.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_date.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>