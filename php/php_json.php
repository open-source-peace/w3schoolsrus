<?php include '../include/head.php'; ?>
<title>PHP и JSON. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP и JSON. Что такое JSON? - означает JavaScript Object Notation (обозначение объектов JavaScript) и является синтаксисом для хранения и обмена данными. PHP имеет несколько встроенных функций для обработки JSON, например json_encode(), json_decode(). Доступ к декодированным значениям. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1><span class="color_h1">PHP и </span>JSON</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_filter_advanced.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_exceptions.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое JSON?</h2>
    <p><strong>JSON</strong> означает <em>JavaScript Object Notation</em> (обозначение объектов JavaScript) и является синтаксисом для хранения и обмена данными.</p>
    <p>Поскольку формат JSON представляет собой текстовый формат, его можно легко отправлять на сервер и с сервера и использовать в качестве формата данных на любом языке программирования.</p>
    <hr>

    <h2>PHP и JSON</h2>
    <p>PHP имеет несколько встроенных функций для обработки JSON.</p>
    <p>Сначала мы рассмотрим следующие две функции:</p>
    <ul>
        <li>
            <span class="w3-codespan">json_encode()</span></li>
        <li>
            <span class="w3-codespan">json_decode()</span> </li>
    </ul>
    <hr>

    <h2>PHP - json_encode()</h2>
    <p>Функция <span class="w3-codespan">json_encode()</span> используется для кодирования значения в формате JSON.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано, как кодировать ассоциативный массив в объект JSON:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$age = array(&quot;Peter&quot;=&gt;35, &quot;Ben&quot;=&gt;37, &quot;Joe&quot;=&gt;43);<br>
            <br>echo json_encode($age);<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_encode1.html">Запустить пример &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано, как кодировать индексированный массив в массив JSON:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$cars = array(&quot;Volvo&quot;, &quot;BMW&quot;, &quot;Toyota&quot;);<br><br>echo json_encode($cars);<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_encode2.html">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>PHP - json_decode()</h2>
    <p>Функция <span class="w3-codespan">json_decode()</span> используется для декодирования объекта JSON в объект PHP или ассоциативный массив.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>Этот пример декодирует данные JSON в объект PHP:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$jsonobj = '{&quot;Peter&quot;:35,&quot;Ben&quot;:37,&quot;Joe&quot;:43}';<br><br>var_dump(json_decode($jsonobj));<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_decode1.html">Запустить пример &raquo;</a>
    </div>

    <p>Функция <span class="w3-codespan">json_decode()</span> возвращает объект по умолчанию. Функция <span class="w3-codespan">json_decode()</span> имеет второй параметр, и при значении true объекты JSON декодируются в ассоциативные массивы.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>Этот пример декодирует данные JSON в ассоциативный массив PHP:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$jsonobj = '{&quot;Peter&quot;:35,&quot;Ben&quot;:37,&quot;Joe&quot;:43}';<br><br>var_dump(json_decode($jsonobj,
            true));<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_decode2.html">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Доступ к декодированным значениям</h2>
    <p>Вот два примера того, как получить доступ к декодированным значениям из объекта и из ассоциативного массива:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано, как получить доступ к значениям из объекта PHP:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$jsonobj = '{&quot;Peter&quot;:35,&quot;Ben&quot;:37,&quot;Joe&quot;:43}';<br><br>
            $obj = json_decode($jsonobj);<br><br>echo $obj-&gt;Peter;<br>echo $obj-&gt;Ben;<br>
            echo $obj-&gt;Joe;<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_decode3.html">Запустить пример &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано, как получить доступ к значениям из ассоциативного массива PHP:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$jsonobj = '{&quot;Peter&quot;:35,&quot;Ben&quot;:37,&quot;Joe&quot;:43}';<br><br>
            $arr = json_decode($jsonobj, true);<br><br>echo $arr[&quot;Peter&quot;];<br>echo $arr[&quot;Ben&quot;];<br>
            echo $arr[&quot;Joe&quot;];<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_decode4.html">Запустить пример &raquo;</a>
    </div>
    <hr>

    <h2>PHP - Перебирание значений</h2>
    <p>Вы также можете перебирать значения с помощью цикла <span class="w3-codespan">foreach()</span>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано, как перебрать значения объекта PHP:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$jsonobj = '{&quot;Peter&quot;:35,&quot;Ben&quot;:37,&quot;Joe&quot;:43}';<br><br>
            $obj = json_decode($jsonobj);<br><br>foreach($obj
            as $key =&gt; $value) {<br>&nbsp; echo $key . &quot; =&gt; &quot; . $value . &quot;&lt;br&gt;&quot;;<br>}<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_decode5.html">Запустить пример &raquo;</a>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <p>В этом примере показано, как перебрать значения ассоциативного массива PHP:</p>
        <div class="w3-code notranslate htmlHigh">
            &lt;?php<br>$jsonobj = '{&quot;Peter&quot;:35,&quot;Ben&quot;:37,&quot;Joe&quot;:43}';<br><br>
            $arr = json_decode($jsonobj, true);<br><br>foreach($arr as $key =&gt; $value) {<br>&nbsp; echo $key . &quot; =&gt; &quot; . $value
            . &quot;&lt;br&gt;&quot;;<br>}<br>?&gt;<br></div>
        <a target="_blank" class="w3-btn w3-margin-bottom" href="../phptryit/demo_json_decode6.html">Запустить пример &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_filter_advanced.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_exceptions.php">Next &#10095;</a>
    </div>    
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>