<?php include '../include/head.php'; ?>

  <title>HTML Формы. Типы ввода. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Формы. Типы ввода. Input type. Какие существуют типы ввода? Как создать форму на сайте? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class="color_h1">Типы ввода</span></h1>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="html_form_elements.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="html_form_attributes.php">Next &#10095;</a>
    </div>
    <hr>
    <p>В этой главе описываются различные <strong>типы ввода</strong> для элемента <code class="w3-codespan">&lt;input&gt;</code>.</p>
    <p>В переводе с анг. input - ввод (данных); type - тип (данных).</p>
    <hr>

    <h2>HTML Типы ввода</h2>
    <p>Здесь различные <strong>типы ввода</strong>, которые вы можете использовать в <strong>HTML</strong>:</p>
    <ul>
      <li><code class="w3-codespan">&lt;input type=&quot;button&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;checkbox&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;color&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;date&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;datetime-local&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;email&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;file&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;hidden&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;image&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;month&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;number&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;password&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;radio&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;range&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;reset&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;search&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;submit&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;tel&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;text&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;time&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;url&quot;&gt;</code></li>
      <li><code class="w3-codespan">&lt;input type=&quot;week&quot;&gt;</code></li>
    </ul>
    <hr>

    <h2>Input Type Text - Тип ввода Текст</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;text&quot;&gt;</code> определяет <strong>однострочное поле ввода текста</strong>:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>
        &nbsp;
        First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;firstname&quot;&gt;&lt;br&gt;<br>
        &nbsp;
        Last name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;lastname&quot;&gt;<br>
        &lt;/form&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8bdc.html?filename=tryhtml_input_text" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    First name:<br>
    <input type="text"><br>
    Last name:<br>
    <input type="text"><br>
    <hr>

    <h2>Input Type Password - Тип ввода Пароль</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;password&quot;&gt;</code> определяет <strong>поле пароля</strong>:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>
        &nbsp;
        User name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;username&quot;&gt;&lt;br&gt;<br>
        &nbsp;
        User password:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;password&quot; name=&quot;psw&quot;&gt;<br>
        &lt;/form&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit8a85.html?filename=tryhtml_input_password" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    User name:<br>
    <input type="text"><br>
    User password:<br>
    <input type="password">
    <div class="w3-panel w3-note">
      <p>Попробуйте заполнить поля! Символы в поле пароля маскируются (отображаются в виде звездочек или кружков).</p>
    </div>
    <hr>

    <h2>Input Type Submit - Тип ввода Отправить</h2>
    <p><code class="w3-codespan">&lt;input type="submit"&gt;</code> определяет кнопку для <strong> отправки</strong> данных формы в <strong>обработчик форм</strong>.</p>
    <p>Обработчик форм обычно представляет собой серверную страницу со скриптом для обработки входных данных.</p>
    <p>Обработчик формы указывается в атрибуте <code class="w3-codespan">action</code>:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot;
        name=&quot;firstname&quot; value=&quot;Mickey&quot;&gt;&lt;br&gt;<br>&nbsp; Last name:&lt;br&gt;<br>&nbsp; &lt;input
        type=&quot;text&quot; name=&quot;lastname&quot; value=&quot;Mouse&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;
        value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryite8d7.html?filename=tryhtml_input_submit" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <form action="https://www.w3schools.com/action_page.php" target="_blank">
      First name:<br>
      <input type="text" name="firstname" value="Mickey"><br>
      Last name:<br>
      <input type="text" name="lastname" value="Mouse">
      <br><br>
      <input type="submit" value="Submit">
    </form>
    <p>Если вы опустите атрибут значения кнопки отправки, кнопка получит текст по умолчанию:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot;
        name=&quot;firstname&quot; value=&quot;Mickey&quot;&gt;&lt;br&gt;<br>&nbsp; Last name:&lt;br&gt;<br>&nbsp; &lt;input
        type=&quot;text&quot; name=&quot;lastname&quot;
        value=&quot;Mouse&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot;&gt;<br>&lt;/form&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryite5a1.html?filename=tryhtml_input_submit_nn" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Reset - Тип ввода Сброс</h2>
    <p><code class="w3-codespan">&lt;input type="reset"&gt;</code> определяет <strong>кнопку сброса</strong>, которая сбросит все значения формы к их значениям по умолчанию:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form action=&quot;/action_page.php&quot;&gt;<br>&nbsp; First name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;firstname&quot; value=&quot;Mickey&quot;&gt;&lt;br&gt;<br>&nbsp; Last name:&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; name=&quot;lastname&quot; value=&quot;Mouse&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&nbsp; &lt;input type=&quot;reset&quot;&gt;<br>&lt;/form&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2274.html?filename=tryhtml_input_reset" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <form action="https://www.w3schools.com/action_page.php" target="_blank">
      First name:<br>
      <input type="text" name="firstname0" value="Mickey"><br>
      Last name:<br>
      <input type="text" name="lastname0" value="Mouse">
      <br><br>
      <input type="submit" value="Submit">
      <input type="reset">
    </form>
    <div class="w3-note w3-panel">
      <p>Если вы измените входные значения и затем нажмете кнопку «Сброс», данные формы будут сброшены к значениям по умолчанию.</p>
    </div>
    <hr>

    <h2>Input Type Radio - Тип ввода Радио</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;radio&quot;&gt;</code> определяет <strong>радио-кнопку</strong>.</p>
    <p>Переключатели (радио-кнопки) позволяют пользователю выбрать ТОЛЬКО ОДИН из ограниченного числа вариантов:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp; &lt;input type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;male&quot;
        checked&gt; Male&lt;br&gt;<br>&nbsp; &lt;input
        type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;female&quot;&gt; Female&lt;br&gt;<br>&nbsp; &lt;input
        type=&quot;radio&quot; name=&quot;gender&quot; value=&quot;other&quot;&gt; Other<br>&lt;/form&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitbeba.html?filename=tryhtml_input_radio" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <input type="radio" name="gender" value="V1" checked> Male<br>
    <input type="radio" name="gender" value="V2"> Female<br>
    <input type="radio" name="gender" value="V3"> Other
    <hr>

    <h2>Input Type Checkbox - Тип ввода Флажок</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;checkbox&quot;&gt;</code> определяет <strong>флажок</strong>.</p>
    <p>Флажки позволяют пользователю выбрать НОЛЬ или БОЛЬШЕ вариантов из ограниченного числа вариантов.</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp; &lt;input type=&quot;checkbox&quot; name=&quot;vehicle1&quot; value=&quot;Bike&quot;&gt; I have a bike&lt;br&gt;<br>
        &nbsp;
        &lt;input type=&quot;checkbox&quot; name=&quot;vehicle2&quot; value=&quot;Car&quot;&gt; I have a car <br>
        &lt;/form&gt;
      </div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit6096.html?filename=tryhtml_input_checkbox" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <input type="checkbox" name="vehicle1" value="Bike"> I have a bike
    <br>
    <input type="checkbox" name="vehicle2" value="Car"> I have a car
    <hr>

    <h2>Input Type Button - Тип ввода Кнопка</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;button&quot;&gt;</code> определяет <strong>кнопку</strong>:</p>
    <div class="w3-example">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;input type=&quot;button&quot; onclick=&quot;alert('Hello World!')&quot; value=&quot;Click Me!&quot;&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit1312.html?filename=tryhtml_input_button" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <p>Вот как HTML-код выше будет отображаться в браузере:</p>
    <input type="button" onclick="alert('Hello World!')" value="Click Me!">
    <hr>

    <h2>HTML5 Типы ввода</h2>
    <p>HTML5 добавил несколько новых типов ввода:</p>
    <ul>
      <li>color</li>
      <li>date</li>
      <li>datetime-local</li>
      <li>email</li>
      <li>month</li>
      <li>number</li>
      <li>range</li>
      <li>search</li>
      <li>tel</li>
      <li>time</li>
      <li>url</li>
      <li>week</li>
    </ul>
    <div class="w3-panel w3-note">
      <p>Новые типы ввода, которые не поддерживаются старыми веб-браузерами, будут вести себя как <code class="w3-codespan">&lt;input type=&quot;text&quot;&gt;</code>.</p>
    </div>
    <hr>

    <h2>Input Type Color - Тип ввода Цвет</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;color&quot;&gt;</code> используется для полей ввода, которые должны содержать цвет.</p>
    <p>В зависимости от поддержки браузера в поле ввода может отображаться палитра цветов.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20"
           height="20">

      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Select your favorite color:<br>&nbsp; &lt;input type=&quot;color&quot; name=&quot;favcolor&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryita532.html?filename=tryhtml_input_color" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Date - Тип ввода Дата</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;date&quot;&gt;</code> используется для полей ввода, которые должны содержать дату.</p>
    <p>В зависимости от поддержки браузера в поле ввода может отображаться средство выбора даты.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20"
           height="20">

      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Birthday:<br>&nbsp; &lt;input type=&quot;date&quot; name=&quot;bday&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit6025.html?filename=tryhtml_input_date" target="_blank">Попробуйте сами &raquo;</a>
    </div>

    <p>Вы также можете использовать атрибуты <code class="w3-codespan">min</code> и <code class="w3-codespan">max</code> чтобы добавить ограничения для даты:</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20"
           height="20">

      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp; Enter a date before 1980-01-01:<br>&nbsp; &lt;input type="date" name="bday" max="1979-12-31"&gt;&lt;br&gt;<br>&nbsp; Enter a date after 2000-01-01:<br>&nbsp; &lt;input type="date" name="bday" min="2000-01-02"&gt;&lt;br&gt;<br>&lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit5141.html?filename=tryhtml_input_date_max_min" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Datetime-local - Тип ввода Локальные дата/время</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;datetime-local&quot;&gt;</code> задает поле ввода даты и времени, без часового пояса.</p>
    <p>В зависимости от поддержки браузера в поле ввода может отображаться средство выбора даты.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Birthday (date and time):<br>&nbsp; &lt;input type=&quot;datetime-local&quot; name=&quot;bdaytime&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitc3bb.html?filename=tryhtml_input_datetime-local" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Email - Тип ввода Email</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;email&quot;&gt;</code> используется для полей ввода, которые должны содержать адрес электронной почты.</p>
    <p>В зависимости от поддержки браузера адрес электронной почты может автоматически проверяться при отправке.</p>
    <p>Некоторые смартфоны распознают тип электронной почты и добавляют &quot;.com&quot; к набору с клавиатуры, чтобы соответствовать вводу электронной почты</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        E-mail:<br>&nbsp; &lt;input type=&quot;email&quot; name=&quot;email&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitf295.html?filename=tryhtml_input_email" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type File - Тип ввода Файл</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;file&quot;&gt;</code> определяет поле выбора файла и кнопку &quot;Обзор&quot; для загрузки файла.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp; Select a file: &lt;input type=&quot;file&quot; name=&quot;myFile&quot;&gt;<br>&lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitce6a.html?filename=tryhtml_input_file" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>


    <h2>Input Type Month - Тип ввода Месяц</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;month&quot;&gt;</code> позволяет пользователю выбрать месяц и год.</p>
    <p>В зависимости от поддержки браузера в поле ввода может отображаться средство выбора даты.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Birthday (month and year):<br>&nbsp; &lt;input type=&quot;month&quot; name=&quot;bdaymonth&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryita992.html?filename=tryhtml_input_month" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Number - Тип ввода Число</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;number&quot;&gt;</code> определяет <strong>
        числовое</strong> поле ввода.</p>
    <p>Вы также можете установить ограничения на то, какие номера принимаются.</p>
    <p>В следующем примере показано числовое поле ввода, где вы можете ввести значение от 1 до 5:</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Quantity (between 1 and 5):<br>&nbsp; &lt;input type=&quot;number&quot; name=&quot;quantity&quot; min=&quot;1&quot; max=&quot;5&quot;&gt;<br>&lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit005b.html?filename=tryhtml_input_number" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Ограничения на ввод</h2>
    <p>Список некоторых общих ограничений ввода:</p>
    <table class="w3-table-all notranslate">
      <tr>
        <th style="width:20%">Атрибут</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>checked</td>
        <td>Указывает, что поле ввода должно быть предварительно выбрано при загрузке страницы (для type=&quot;checkbox&quot; или type=&quot;radio&quot;)</td>
      </tr>
      <tr>
        <td>disabled</td>
        <td>Указывает, что поле ввода должно быть отключено</td>
      </tr>
      <tr>
        <td>max</td>
        <td>Определяет максимальное значение для поля ввода</td>
      </tr>
      <tr>
        <td>maxlength</td>
        <td>Определяет максимальное количество символов для поля ввода</td>
      </tr>
      <tr>
        <td>min</td>
        <td>Определяет минимальное значение для поля ввода</td>
      </tr>
      <tr>
        <td>pattern</td>
        <td>Определяет регулярное выражение для проверки входного значения</td>
      </tr>
      <tr>
        <td>readonly</td>
        <td>Указывает, что поле ввода доступно только для чтения (не может быть изменено)</td>
      </tr>
      <tr>
        <td>required</td>
        <td>Указывает, что поле ввода является обязательным (должно быть заполнено)</td>
      </tr>
      <tr>
        <td>size</td>
        <td>Определяет ширину (в символах) поля ввода</td>
      </tr>
      <tr>
        <td>step</td>
        <td>Определяет допустимые интервалы номеров для поля ввода</td>
      </tr>
      <tr>
        <td>value</td>
        <td>Определяет значение по умолчанию для поля ввода</td>
      </tr>
    </table>
    <p>Вы узнаете больше об ограничениях ввода в следующей главе.</p>
    <p>В следующем примере показано числовое поле ввода, в котором вы можете ввести значение от 0 до 100 с шагом 10. Значение по умолчанию - 30:</p>

    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp; Quantity:<br>&nbsp;
        &lt;input type=&quot;number&quot; name=&quot;points&quot;
        min=&quot;0&quot; max=&quot;100&quot; step=&quot;10&quot; value=&quot;30&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2510.html?filename=tryhtml_input_number_step" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Range - Тип ввода Диапазон</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;range&quot;&gt;</code> определяет элемент управления для ввода числа, точное значение которого не имеет значения (например, элемент управления ползунка). Диапазон по умолчанию от 0 до 100. Однако вы можете установить ограничения на то, какие числа принимаются с атрибутами <code class="w3-codespan">min</code>, <code class="w3-codespan">max</code> и <code class="w3-codespan">step</code>:</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20"
           height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        &lt;input type=&quot;range&quot; name=&quot;points&quot; min=&quot;0&quot; max=&quot;10&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryite8a3.html?filename=tryhtml_input_range" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Search - Тип ввода Поиск</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;search&quot;&gt;</code> используется для полей поиска (поле поиска ведёт себя как обычное текстовое поле).</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Search Google:<br>&nbsp; &lt;input type=&quot;search&quot; name=&quot;googlesearch&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit2949.html?filename=tryhtml_input_search" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Tel - Тип ввода Телефон</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;tel&quot;&gt;</code> используется для полей ввода, которые должны содержать номер телефона.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp; Telephone:<br>&nbsp; &lt;input type=&quot;tel&quot; name=&quot;phone&quot;
        pattern=&quot;[0-9]{3}-[0-9]{2}-[0-9]{3}&quot;&gt;<br>&lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitd9c8.html?filename=tryhtml_input_tel" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Time - Тип ввода Время</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;time&quot;&gt;</code> позволяет пользователю выбрать время (без часового пояса).</p>
    <p>В зависимости от поддержки браузера в поле ввода может отображаться указатель времени.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Select a time:<br>&nbsp; &lt;input type=&quot;time&quot; name=&quot;usr_time&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit04de.html?filename=tryhtml_input_time" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Url - Тип ввода Url</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;url&quot;&gt;</code> используется для полей ввода, которые должны содержать URL адрес.</p>
    <p>В зависимости от поддержки браузера, поле URL может быть автоматически проверено при отправке.</p>
    <p>Некоторые смартфоны распознают тип URL и добавляют &quot;.com&quot; к вводу на клавиатуре, чтобы соответствовать вводу URL</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/compatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/compatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Add your homepage:<br>&nbsp; &lt;input type=&quot;url&quot; name=&quot;homepage&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryit28c7.html?filename=tryhtml_input_url" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Input Type Week - Тип ввода Неделя</h2>
    <p><code class="w3-codespan">&lt;input type=&quot;week&quot;&gt;</code> позволяет пользователю выбрать неделю и год.</p>
    <p>В зависимости от поддержки браузера в поле ввода может отображаться средство выбора даты.</p>
    <div class="w3-example">
      <img style="float:right;" src="../images/compatible_opera2020.gif" title="Opera" alt="Opera" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_safari2020.gif" title="Safari" alt="Safari" width="20" height="20">
      <img style="float:right;" src="../images/compatible_chrome2020.gif" title="Chrome" alt="Chrome" width="20" height="20">
      <img style="float:right;" src="../images/incompatible_firefox2020.gif" title="Firefox" alt="Firefox" width="20" height="20">
      <img style="float:right;" src="../images/compatible_edge2020.gif" title="Internet Explorer" alt="Internet Explorer" width="20" height="20">
      <h3>Пример</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;form&gt;<br>&nbsp;
        Select a week:<br>&nbsp; &lt;input type=&quot;week&quot; name=&quot;week_year&quot;&gt;<br>
        &lt;/form&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="../htmltryit/tryitfa07.html?filename=tryhtml_input_week" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <h2>HTML Упражнения</h2>
    <form autocomplete="off" id="w3-exerciseform" action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_form_input_types1" method="post" target="_blank">
      <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
      <div class="exercisewindow">
        <h2>Упражнение:</h2>
        <p>В приведенной ниже форме добавьте поле ввода для текста с именем "username".</p>
        <div class="exerciseprecontainer">
          &lt;form action="/action_page.php"&gt;
          <br>
          &lt;<input name="ex1" spellcheck="false" maxlength="33" style="width: 333px;">&gt;
          <br>
          &lt;/form&gt;
        </div>
        <br>
        <button type="submit" class="w3-btn w3-margin-bottom">Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>HTML атрибут Input Type</h2>
    <table class="w3-table-all notranslate">
      <tr>
        <th>Тег</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><a href="../tags/att_input_type.php">&lt;input type=&quot;&quot;&gt;</a></td>
        <td>Определяет тип ввода для отображения</td>
      </tr>
    </table>

    <hr>
    <div class="w3-clear nextprev">
      <a class="w3-left w3-btn" href="html_form_elements.php">&#10094; Prev</a>
      <a class="w3-right w3-btn" href="html_form_attributes.php">Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>