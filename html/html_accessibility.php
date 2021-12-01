<?php include '../include/head.php'; ?>

  <title>HTML Доступность <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML Доступность. Семантический код. Заголовки. Альтернативный текст. Объявление языка. Названия ссылок. <?php include '../include/description.php'; ?>'>
  <style>
      @media (min-width: 1200px) {.w3-col.x {width: 50%;}
      }
      @media (max-width: 805px) {.w3-col.x {width:100%;}
      }
      .noshadow a {box-shadow: 0 0 0 0 !important;}
  </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML <span class='color_h1'>Доступность</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_summary.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='../tags/index.php'>HTML Справочник &#10095;</a>
    </div>
    <hr>

    <h2>HTML Доступность</h2>
    <p>Пишите <strong>HTML</strong> с учетом <strong>доступности</strong>. Предоставьте пользователю хороший способ навигации и взаимодействия с вашим сайтом. Сделайте ваш HTML код как можно более <strong>семантичным</strong>, чтобы его было легко понять как посетителям, так и считывателям экрана (скринридерам).</p>
    <hr>

    <h2>Семантический HTML</h2>
    <p><strong>Семантический HTML</strong> означает максимально возможное использование правильных элементов HTML для их правильного назначения. Семантические элементы являются элементами со значением; если вам необходима кнопка, используйте элемент <code class='w3-codespan'>&lt;button&gt;</code> (а не <code class='w3-codespan'>&lt;div&gt;</code>).</p>

    <div class='w3-row-padding' style='margin:-16px'>
      <div class='w3-half'>
        <div class='w3-example'>
          <h3>Семантический</h3>
          <div class='w3-code notranslate htmlHigh'>
            &lt;button&gt;Нажми меня&lt;/button&gt;</div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit6047.html?filename=tryhtml_accessibility_button' target='_blank'>Попробуйте сами &raquo;</a>
        </div>

      </div>
      <div class='w3-half'>
        <div class='w3-example'>
          <h3>Не семантический</h3>
          <div class='w3-code notranslate htmlHigh' style='border-color:red;'>
            &lt;div&gt;Нажми меня&lt;/div&gt;</div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit6047.html?filename=tryhtml_accessibility_button' target='_blank'>Попробуйте сами &raquo;</a>
        </div>
      </div>
    </div>

    <p>Семантический HTML дает контекст для скринридеров, которые читают содержимое веб-страницы вслух.</p>
    <p>С примером кнопки ввиду:</p>
    <ul>
      <li>По умолчанию кнопки имеют более соответствующий стиль</li>
      <li>Скринридер идентифицирует его как кнопку</li>
      <li>Фокусированы</li>
      <li>Кликабельны</li>
    </ul>
    <p>Кнопка также доступна для людей, которые полагаются на навигацию с помощью клавиатуры; на неё можно нажимать как мышкой, так и клавишами на клавиатуре, а также можно вводить вкладки между ними (с помощью клавиши табуляции на клавиатуре).</p>
    <p>Примеры <strong>не семантических</strong> элементов: <code class='w3-codespan'>&lt;div&gt;</code> и <code class='w3-codespan'>&lt;span&gt;</code> - ничего не рассказывают о своём содержании.</p>
    <p>Примеры <strong>семантических</strong> элементов: <code class='w3-codespan'>&lt;form&gt;</code>, <code class='w3-codespan'>&lt;table&gt;</code> и <code class='w3-codespan'>&lt;article&gt;</code> - чётко определяют своё содержание.</p>
    <hr>

    <h2>Заголовки важны</h2>
    <p>Заголовки определяются с помощью тегов от <code class='w3-codespan'>&lt;h1&gt;</code> до <code class='w3-codespan'>&lt;h6&gt;</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;h1&gt;Heading 1&lt;/h1&gt;<br>
        &lt;h2&gt;Heading 2&lt;/h2&gt;<br>
        &lt;h3&gt;Heading 3&lt;/h3&gt;<br>&lt;h4&gt;Heading 4&lt;/h4&gt;<br>&lt;h5&gt;Heading 5&lt;/h5&gt;<br>&lt;h6&gt;Heading 6&lt;/h6&gt;</div>
      <a target='_blank' href='../htmltryit/tryitbe80.html?filename=tryhtml_headings' class='w3-btn w3-margin-bottom'>Попробуйте сами &raquo;</a>
    </div>

    <p>Поисковые системы используют заголовки для индексирования структуры и содержания ваших веб-страниц.</p>
    <p>Пользователи просматривают ваши страницы с заголовками. Важно использовать заголовки, чтобы показать структуру документов и связь между различными разделами.</p>
    <p><code class='w3-codespan'>&lt;h1&gt;</code> заголовки следует использовать для основных заголовков, после чего следует использовать <code class='w3-codespan'>&lt;h2&gt;</code> заголовки, далее менее важные <code class='w3-codespan'>&lt;h3&gt;</code> и так далее.</p>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Используйте заголовки HTML лишь для заголовков. Не используйте заголовки просто для создания текста <strong>БОЛЬШИМ</strong> или <strong>жирным</strong>.</p>
    </div>
    <hr>

    <h2>Альтернативный текст</h2>
    <p>Атрибут <code class='w3-codespan'>alt</code> предоставляет альтернативный текст для изображения, если пользователь по какой-то причине не может его посмотреть (из-за медленного Интернет-соединения, ошибки в атрибуте <code class='w3-codespan'>src</code> или если пользователь использует скринридер).</p>
    <p>Значение атрибута <code class='w3-codespan'>alt</code> должно описывать изображение:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;img src=&quot;img_chania.jpg&quot; alt=&quot;Flowers in Chania&quot;&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit0aa4.html?filename=tryhtml_images_alt_chania' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Если браузер не может найти изображение, он отобразит значение атрибута <code class='w3-codespan'>alt</code>:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;img src=&quot;wrongname.gif&quot; alt=&quot;Flowers in Chania&quot;&gt;
      </div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit8e07.html?filename=tryhtml_images_wrongname' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Объявление языка</h2>
    <p>Объявление языка является важным для скринридеров и поисковых систем, и объявляется атрибутом <code class='w3-codespan'>lang</code>. Используйте приведённый ниже код для отображения веб-страницы на русском языке:</p>
    <div class='w3-example'>
      <div class='w3-code notranslate htmlHigh'>
        &lt;!DOCTYPE html&gt;<br>&lt;html lang=&quot;ru&quot;&gt;<br>&lt;body&gt;<br><br>
        ...<br><br>&lt;/body&gt;<br>&lt;/html&gt;
      </div>
    </div>
    <hr>

    <h2>Используйте &quot;чистый&quot; язык</h2>
    <p>Используйте &quot;чистый язык&quot;, который легко понять, и старайтесь избегать символов, которые невозможно прочитать чётко с помощью программы для чтения с экрана (скринридером). Например:</p>
    <ul>
      <li>Сделайте предложения как-можно более короткими.</li>
      <li>Избегайте тире там, где возможно. Вместо того, чтобы писать 1-3, запишите так: от 1 до 3</li>
      <li>Избегайте сокращений там, где возможно. Вместо того, чтобы писать Feb, пишите February</li>
      <li>Избегайте сленговых слов</li>
    </ul>
    <hr>

    <h2>Пишите хорошие ссылки</h2>
    <p>Ссылка должна чётко объяснять, какую информацию читатель получит, нажав на эту ссылку.</p>
    <p>Примеры хороших и плохих ссылок:</p>
    <div class='w3-row-padding' style='margin:-16px'>
      <div class='w3-col x l12 m6'>
        <div class='w3-example'>
          <h3>Хорошо</h3>
          <div class='w3-code notranslate htmlHigh noshadow' style='font-family: Verdana;font-size:15px'>
            <p><a href='javascript:void(0)'>Узнать больше о языке HTML</a></p>
            <p>Узнать больше о том, <a href='javascript:void(0)'>как правильно изучать HTML</a></p>
            <p><a href='javascript:void(0)'>Приобрести билеты на Марс здесь</a></p>
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit006f.html?filename=tryhtml_accessibility_links' target='_blank'>Попробуйте сами &raquo;</a>
        </div>

      </div>
      <div class='w3-col x l12 m6'>
        <div class='w3-example'>
          <h3>Плохо</h3>
          <div class='w3-code notranslate htmlHigh noshadow' style='border-color:red;font-family: Verdana;font-size:15px'>
            <p><a href='javascript:void(0)'>Нажми здесь</a></p>
            <p><a href='javascript:void(0)'>Узнать больше..</a></p>
            <p>Купить билеты на Марс <a href='javascript:void(0)'>здесь</a></p>
          </div>
          <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit006f.html?filename=tryhtml_accessibility_links' target='_blank'>Попробуйте сами &raquo;</a>
        </div>
      </div>
    </div>

    <hr>
    <h2>Названия ссылок</h2>
    <p>Атрибут <code class='w3-codespan'>title</code> определяет дополнительную информацию об элементе. Эта информация наиболее часто отображается как текст подсказки, когда мышка находится над элементом.</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;a href=&quot;https://www.w3schools.com/html/&quot; title=&quot;Перейти на W3Schools HTML раздел&quot;&gt;Посетите наш HTML Учебник&lt;/a&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryite836.html?filename=tryhtml_links_title' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_summary.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='../tags/index.php'>HTML Справочник &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>