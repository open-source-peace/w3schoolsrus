<?php include '../include/head.php'; ?>

  <title>HTML Атрибуты формы. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Атрибуты формы. Данные формы отправляются на сервер. Как работают методы GET и POST. Примеры кода. Как создать сайт? <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Атрибуты формы</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_forms.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_form_elements.php'>Next &#10095;</a>
    </div>
    <hr>

    <p class='intro'>В этом разделе описываются различные атрибуты HTML элемента <code class='w3-codespan'>&lt;form&gt;</code>.</p>
    <hr>

    <h2>Атрибут Action</h2>
    <p>Атрибут <code class='w3-codespan'>action</code> определяет действие, которое должно быть выполнено при отправке формы.</p>
    <p>Обычно данные формы отправляются в файл на сервере, когда пользователь нажимает кнопку отправки.</p>
    <p>В приведенном ниже примере данные формы отправляются в файл с именем &quot;action_page.php&quot;. Этот файл содержит серверный скрипт (обычно на языке PHP), который обрабатывает данные формы:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>При отправке отправьте данные формы по адресу &quot;action_page.php&quot;:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php'&gt;<br>&nbsp; &lt;label for=&quot;fname&quot;&gt;First
        name:&lt;/label&gt;&lt;br&gt;<br>&nbsp; &lt;input type=&quot;text&quot; id=&quot;fname&quot; name=&quot;fname&quot;
        value=&quot;John&quot;&gt;&lt;br&gt;<br>&nbsp; &lt;label for=&quot;lname&quot;&gt;Last name:&lt;/label&gt;&lt;br&gt;<br>&nbsp;
        &lt;input type=&quot;text&quot; id=&quot;lname&quot; name=&quot;lname&quot; value=&quot;Doe&quot;&gt;&lt;br&gt;&lt;br&gt;<br>&nbsp;
        &lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;<br>&lt;/form&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitcff8.html?filename=tryhtml_form_submit' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p><strong>Примечание:</strong> Если атрибут <code class='w3-codespan'>action</code> опущен, action устанавливается на текущую страницу.</p>
    <hr>

    <h2>Атрибут Target</h2>
    <p>Атрибут <code class='w3-codespan'>target</code> указывает, где отображать ответ, полученный после отправки формы.</p>
    <p>Атрибут <code class='w3-codespan'>target</code> может иметь одно из следующих значений:</p>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:20%'>Значение</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td>_blank</td>
        <td>Ответ отображается в новом окне или вкладке</td>
      </tr>
      <tr>
        <td>_self</td>
        <td>Ответ отображается в текущем окне</td>
      </tr>
      <tr>
        <td>_parent</td>
        <td>Ответ отображается в родительском фрейме</td>
      </tr>
      <tr>
        <td>_top</td>
        <td>Ответ отображается во всем окне</td>
      </tr>
      <tr>
        <td><i>framename</i></td>
        <td>Ответ отображается в указанном iframe</td>
      </tr>
    </table>
    <p>Значение по умолчанию <code class='w3-codespan'>_self</code> что означает, что ответ откроется в текущем окне.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Здесь отправленный результат откроется в новой вкладке браузера:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php' target='_blank'&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitfb32.html?filename=tryhtml_form_target' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут Method</h2>
    <p>Атрибут <code class='w3-codespan'>method</code> определяет метод HTTP, который будет использоваться при отправке данных формы.</p>
    <p>Данные формы могут быть отправлены как переменные URL (с <code class='w3-codespan'>method=&quot;get&quot;</code>) или как HTTP post транзакция (с <code class='w3-codespan'>method=&quot;post&quot;</code>).</p>
    <p>Метод HTTP по умолчанию при отправке данных формы - GET.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере используется метод GET при отправке данных формы:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php' method='get'&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit6bc0.html?filename=tryhtml_form_get' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>В этом примере используется метод POST при отправке данных формы:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action='/action_page.php' method='post'&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit362c.html?filename=tryhtml_form_post' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p><b>Примечания к GET:</b> </p>
    <ul>
      <li>Добавляет данные формы к URL-адресу в парах имя/значение</li>
      <li>НИКОГДА не используйте GET для отправки конфиденциальных данных! (отправленные данные формы видны в URL!)</li>
      <li>Длина URL ограничена (2048 символов)</li>
      <li>Полезно для отправки форм, когда пользователь хочет добавить результат в закладки</li>
      <li>GET подходит для незащищенных данных, таких как строки запроса в Google</li>
    </ul>
    <p><b>Примечания к POST:</b> </p>
    <ul>
      <li>Добавляет данные формы в тело HTTP-запроса (отправленные данные формы не отображаются в URL-адресе)</li>
      <li>POST не имеет ограничений по размеру и может использоваться для отправки больших объемов данных.</li>
      <li>Отправленные формы с помощью POST нельзя пометить закладками</li>
    </ul>
    <div class='w3-panel w3-note'>
      <p><strong>Совет:</strong> Всегда используйте POST, если данные формы содержат конфиденциальную или личную информацию!</p>
    </div>
    <hr>

    <h2>Атрибут Autocomplete</h2>
    <p>Атрибут <code class='w3-codespan'>autocomplete</code> указывает, должна ли форма иметь автозаполнение или off (отключено).</p>
    <p>Когда автозаполнение включено, браузер автоматически заполняет значения на основе значений, которые пользователь ввел ранее.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Форма с автозаполнением на:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot; autocomplete=&quot;on&quot;&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryita9ce.html?filename=tryhtml_form_autocomplete' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Атрибут Novalidate</h2>
    <p>Атрибут <code class='w3-codespan'>novalidate</code> - это логический атрибут.</p>
    <p>Когда присутствует, он указывает, что данные формы (ввод) не должны проверяться при отправке.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <p>Форма с атрибутом novalidate:</p>
      <div class='w3-code notranslate htmlHigh'>
        &lt;form action=&quot;/action_page.php&quot; novalidate&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit56a8.html?filename=tryhtml_form_novalidate' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>HTML Упражнения</h2>
    <form autocomplete='off' id='w3-exerciseform' action='https://www.w3schools.com/html/exercise.asp?filename=exercise_html_forms_attributes1' method='post' target='_blank'>
      <h2 class="shadow-black-1">Проверьте себя с помощью упражнений</h2>
      <div class='exercisewindow'>
        <h2>Упражнение:</h2>
        <p>Добавьте кнопку отправки и укажите, что форма должна перейти в &quot;/action_page.php&quot;.</p>
        <div class='exerciseprecontainer'>
          &lt;form <input name='ex1' spellcheck='false' maxlength='6' style='width: 70px;'>='/action_page.php'&gt;
          <br>
          Name: &lt;input type='text' name='name'&gt;
          <br>
          &lt;<input name='ex2' spellcheck='false' maxlength='19' style='width: 198px;'>&gt;
          <br>
          &lt;/form&gt;
        </div>
        <br>
        <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
      </div>
    </form>
    <hr>

    <h2>Список всех атрибутов &lt;form&gt;</h2>
    <div class='w3-responsive'>
      <table class='w3-table-all'>
        <tr>
          <th>Атрибут</th>
          <th>Описание</th>
        </tr>
        <tr>
          <td><a href='../tags/att_form_accept_charset.php'>accept-charset</a></td>
          <td>Определяет кодировки символов, используемые для отправки формы</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_action.php'>action</a></td>
          <td>Определяет, куда отправлять данные формы при отправке формы</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_autocomplete.php'>autocomplete</a></td>
          <td>Определяет, должно ли автозаполнение формы включаться или выключаться</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_enctype.php'>enctype</a></td>
          <td>Определяет, как должны быть закодированы данные формы при их отправке на сервер (только для method=&quot;post&quot;)</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_method.php'>method</a></td>
          <td>Определяет метод HTTP для использования при отправке данных формы</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_name.php'>name</a></td>
          <td>Задает имя формы</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_novalidate.php'>novalidate</a></td>
          <td>Указывает, что форма не должна проверяться при отправке</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_rel.php'>rel</a></td>
          <td>Определяет связь между связанным ресурсом и текущим документом</td>
        </tr>
        <tr>
          <td><a href='../tags/att_form_target.php'>target</a></td>
          <td>Указывает, где отображать ответ, полученный после отправки формы</td>
        </tr>
      </table>
    </div>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_forms.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html_form_elements.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>