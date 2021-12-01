<?php include '../include/head.php'; ?>

  <title>AppML Архитектура. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='AppML Архитектура. AppML сочетает в себе самые современные техники и идеи современной веб-разработки. AppML ориентирован на скорость, простоту и низкую стоимость. Учебник по AppML. <?php include '../include/description.php'; ?>'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/appml/appml_architecture.html' />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_appml.php'; ?>
<?php include '../include/before_content_appml.php'; ?>

  <article>
    <h1><span class='color_h1'>AppML</span> Архитектура</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_ref_api.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_history.php'>Next &#10095;</a>
    </div>
    <hr>

    <h2>Современная веб-архитектура</h2>
    <p>AppML сочетает в себе самые современные техники и идеи современной веб-разработки.</p>
    <p>AppML ориентирован на скорость, простоту и низкую стоимость:</p>

    <ul style='list-style-type:square;'>
      <li>Низкая стоимость</li>
      <li>Быстрая и гибкая веб-разработка</li>
      <li>Оптимизирован для облачных вычислений</li>
      <li>Высокая скорость и низкое потребление полосы пропускания</li>
      <li>Архитектура MVC (Model Viev Controller)</li>
      <li>Полное отделение содержания от презентации</li>
      <li>Высокая масштабируемость и тестируемость</li>
      <li>Простая настройка и реконфигурация</li>
      <li>Изменение конфигурации во время работы приложений</li>
      <li>Интеллектуальная поддержка учетных записей и ролей пользователей</li>
    </ul>
    <hr>

    <table><tr>
        <td style="vertical-align:top">

          <h2>MVC Архитектура</h2>
          <p>&nbsp;</p>
          <p><strong>AppML использует MVC Архитектуру</strong>.</p>
          <p>MVC означает Model, View, Controller (Модель, Представление (Вид), Контроллер).</p>
          <p><strong>Model</strong> описывает ваше приложение.</p>
          <p><strong>View</strong> отображает ваши данные.</p>
          <p><strong>Controller</strong> контролирует ваше приложение (конечно же!).</p>

          <p><strong>Читать на Википедии:</strong>
            <a target="_blank" href="https://ru.wikipedia.org/wiki/Model-View-Controller">Model, View, Controller</a></p>

        </td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><img alt="MVC" src="../images/pic_mvc.jpg" style="width: 327px; height: 314px"></td>
      </tr></table>
    <hr>

    <h2>MODEL (Модель) - Просто JSON</h2>
    <p>Модель описывает приложение.</p>
    <p>Модель многоразового использования на различных аппаратных и программных платформах (Сервер, ПК, iPhone, планшеты и т.д.).</p>
    <p>Модель не связана с презентацией или пользовательским интерфейсом (UI).</p>
    <p>Модель написана в JSON:</p>
    <div class="w3-example">
      <h3>Модель</h3>
      <div class="w3-code notranslate jsHigh">
        {<br>
        &quot;rowsperpage&quot; : 10,<br>
        "database" : {<br>
        &nbsp;&nbsp;&nbsp; "connection" : "localmysql",<br>
        &nbsp;&nbsp;&nbsp; "sql" : "SELECT CustomerName, City, Country FROM Customers",<br>
        &nbsp;&nbsp;&nbsp; "orderby" : "CustomerName"<br>
        },<br>
        &quot;filteritems&quot; : [<br>
        &nbsp;&nbsp;&nbsp; {&quot;item&quot; : &quot;CustomerName&quot;, &quot;label&quot; : &quot;Customer&quot;},<br>
        &nbsp;&nbsp;&nbsp; {&quot;item&quot; : &quot;City&quot;},<br>
        &nbsp;&nbsp;&nbsp; {&quot;item&quot; : &quot;Country&quot;}<br>
        ],<br>
        &quot;sortitems&quot; : [<br>
        &nbsp;&nbsp;&nbsp; {&quot;item&quot; : &quot;CustomerName&quot;, &quot;label&quot; : &quot;Customer&quot;},<br>
        &nbsp;&nbsp;&nbsp; {&quot;item&quot; : &quot;City&quot;},<br>
        &nbsp;&nbsp;&nbsp; {&quot;item&quot; : &quot;Country&quot;}<br>
        ]<br>
        }
      </div>
    </div>
    <hr>

    <h2>VIEW (Представление) - просто HTML</h2>
    <p>Представление - это UI (пользовательский интерфейс) для отображения (и ввода) данных.</p>
    <p>Представление написано на HTML и CSS:</p>

    <div class="w3-example">
      <h3>HTML Представление</h3>
      <div class="w3-code notranslate htmlHigh">
        &lt;!DOCTYPE html&gt;<br>&lt;html lang="ru"&gt;<br>
        &lt;title&gt;Клиенты&lt;/title&gt;<br>
        &lt;link rel="stylesheet" href="../w3css/4/w3.css"&gt;<br>
        &lt;script src="2.0.3/appml.js"&gt;&lt;/script&gt;<br>
        &lt;body&gt;<br>
        <br>
        &lt;div class="w3-container" appml-data="local?model=model_customers"&gt;<br>
        &lt;h1&gt;Клиенты&lt;/h1&gt;<br>
        &lt;div appml-include-html="inc_listcommands.html"&gt;&lt;/div&gt;<br>
        &lt;div appml-include-html="inc_filter.html"&gt;&lt;/div&gt;<br>
        &lt;table class="w3-table-all"&gt;<br>
        &nbsp; &lt;tr&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Клиент&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Город&lt;/th&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;th&gt;Страна&lt;/th&gt;<br>
        &nbsp; &lt;/tr&gt;<br>
        &nbsp; &lt;tr appml-repeat="records"&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{CustomerName}}&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{City}}&lt;/td&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;td&gt;{{Country}}&lt;/td&gt;<br>
        &lt;/tr&gt;<br>
        &lt;/table&gt;<br>
        &lt;/div&gt;<br>
        <br>
        &lt;/body&gt;<br>
        &lt;/html&gt;</div>
      <a class="w3-btn w3-margin-bottom" href="tryappml_architecture_1.html" target="_blank">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>CONTROLLER - клиентские и/или серверные скрипты</h2>
    <p>Клиентский скрипт на веб-странице может управлять приложением:</p>
    <ul style='list-style-type:square;'>
      <li>AppML может отображать данные, как определено в модели</li>
      <li>AppML может отображать данные в соответствии с атрибутами HTML</li>
      <li>Приложения AppML могут работать независимо от HTML (скрытые)</li>
      <li>(Необязательно) AppML может запрашивать данные модели с веб-сервера (SQL-сервера)</li>
      <li>(Необязательно) пользователи AppML могут редактировать данные</li>
      <li>(Необязательно) AppML может отправлять данные на веб-сервер</li>
    </ul>

    <p>Серверный скрипт может управлять приложением с помощью:</p>
    <ul style='list-style-type:square;'>
      <li>Получение запросов от клиента (браузера)</li>
      <li>Возврат данных клиенту</li>
      <li>Получение данных от клиента</li>
      <li>Обновление данных на сервере</li>
      <li>Забота об аутентификации и безопасности</li>
    </ul>
    <hr>

    <h2>Искусство программирования</h2>
    <p>Уменьшение размера и сложности приложения - основная проблема всего программирования.</p>
    <p>Управление сложностью компьютерных приложений - настоящее искусство программирования.</p>
    <hr>

    <h2>Декларативное программирование</h2>
    <p>Разработка программного обеспечения часто нарушает сроки и бюджеты. Готовая программа часто полна ошибок кода. Это потому, что компьютерный код сложно разрабатывать, тестировать и поддерживать.</p>
    <p>Кодированию - <strong>Нет</strong>. Вы должны больше описывать <strong>Что</strong> делать, а не <strong>Как</strong> делать.</p>
    <p>С помощью AppML вы <strong>Объявляете</strong> своё приложение в <strong>Модели</strong> и в <strong>Представлении</strong>.</p>
    <p>С <span class="strong">AppML</span> получается <strong>меньше кода (иногда его отсутствие)</strong>.</p>
    <p><strong>Читать на Википедии:</strong> <a href="https://en.wikipedia.org/wiki/Declarative_language" target="_blank" rel="nofollow">Декларативное программирование</a></p>
    <hr>

    <h2>Быстрая и гибкая разработка приложений</h2>
    <p>Управление сложностью компьютерных приложений - настоящее искусство программирования.</p>
    <p>Сдерживание размера и сложности приложения под контролем - основная проблема всего программирования.</p>
    <p>RAD - это метод разработки программного обеспечения, использующий минимальное планирование в пользу быстрого прототипирования.</p>
    <p>AppML обеспечивает сверхбыстрое создание прототипов, до 100 раз быстрее, чем традиционные методы разработки.</p>
    <p>Прототипы приложений могут запускаться непосредственно из модели приложения без какого-либо программирования.</p>
    <p><strong>Читать на Википедии:</strong> <a target="_blank" href="https://en.wikipedia.org/wiki/Rapid_application_development">Быстрая разработка приложений</a></p>
    <p>Гибкая разработка программного обеспечения - это метод, основанный на пошаговой разработке, при котором решения создаются пользователями и разработчиками в сотрудничестве.</p>
    <p>С помощью AppML приложения можно писать шаг за шагом, небольшими приращениями, от прототипов до полных приложений.</p>
    <p><strong>Читать на Википедии:</strong> <a target="_blank" href="https://en.wikipedia.org/wiki/Agile_software_development">Гибкая разработка программного обеспечения</a></p>
    <hr>

    <h2>Сначала код</h2>
    <p>Веб-приложение можно разработать двумя способами:</p>
    <p>1. Сначала код: использование предварительно запрограммированного, предварительно протестированного кода, добавление только новых описаний приложений.</p>
    <p>2. Сначала контракт: Написание приложения с нуля с использованием полного описания требований приложения.</p>
    <p><span class="strong">AppML</span> использует наиболее рациональную концепцию: <strong>Сначала код</strong>.</p>
    <hr>

    <h2>Service Oriented Architecture (SOA) - Сервис-Ориентированная Архитектура</h2>
    <p><strong>Сервис-Ориентированная Архитектура (SOA)</strong> - это архитектура для создания веб-приложений.</p>
    <p><strong>SOA</strong> предлагает низкие затраты на разработку и высокую гибкость.</p>
    <p>С помощью <strong>SOA</strong>, приложения могут быть созданы с нуля или из существующей ИТ-инфраструктуры и использоваться различными приложениями на разном оборудовании и программном обеспечении.</p>
    <p><strong>SOA</strong> идеально подходит для <strong>MVC</strong> и <strong>декларативного программирования</strong>, где данные могут быть легко использованы, не беспокоясь о том, как это сделать.</p>
    <hr>

    <h2>Веб-сервисы (Веб-службы)</h2>
    <p><strong>Веб-служба</strong> - это интерфейс к данным, идентифицируемый URL-адресом, как веб-страница.</p>
    <p><strong>Веб-служба</strong> отличается от веб-страницы только способом передачи информации.</p>
    <p>Типичная <strong>веб-служба</strong> предоставляет данные только веб-странице.</p>
    <p>В AppML HTML - это пользовательский интерфейс, а <strong>веб-служба</strong> предоставляет данные.</p>
    <p><strong>Оригинальные веб-службы</strong> были разработаны для использования стандартов XML, таких как SOAP, WSDL и UDDI.</p>
    <p><strong>Современные веб-службы</strong> - такие, как AppML намного проще в использовании:</p>
    <ul>
      <li>Легче для понимания - могут быть прочитаны людьми</li>
      <li>Легковесность - без ненужного кода или разметки</li>
      <li>Простота реализации - инструменты разработки не требуются</li>
    </ul>
    <hr>

    <h2>Преимущества веб-служб</h2>

    <ul>
      <li>Веб-службы - это небольшие блоки кода</li>
      <li>Веб-службы предназначены для решения ограниченного набора задач</li>
      <li>Веб-службы используют протоколы связи на основе HTTP</li>
      <li>Веб-службы не зависят от операционных систем</li>
      <li>Веб-службы не зависят от языков программирования</li>
      <li>Веб-службы могут соединять различные приложения, системы и устройства</li>
      <li>Веб-службы упрощают распространение информации</li>
      <li>Веб-службы способствуют быстрой разработке приложений</li>
    </ul>
    <p>Пример: Небольшая программа, предназначенная для предоставления другим приложениям биржевых цен.</p>
    <p>Пример: Расписание рейсов и системы бронирования билетов.</p>
    <p>Поскольку веб-службы используют HTTP, они не зависят как от операционных систем, так и от языков программирования.</p>
    <hr>

    <h2>Облачные вычисления</h2>
    <p><strong>Облачные вычисления</strong> является расширением SOA: приложение как услуга, хранилище как услуга, данные как услуга.</p>

    <p>Для большинства людей облачные вычисления - это хранение данных в Интернете:</p>
    <ul style='list-style-type:square;'>
      <li>Электронная почта и календари</li>
      <li>Документы и таблицы</li>
      <li>Книги, заметки и списки дел</li>
      <li>Музыка, картинки и фильмы</li>
      <li>Базы данных и приложения</li>
    </ul>
    <p>Причины использования довольно очевидны:</p>
    <ul style='list-style-type:square;'>
      <li>Чтобы иметь доступ к данным отовсюду</li>
      <li>Чтобы поделиться моими данными с другими</li>
      <li>Чтобы выжить при изменении оборудования или сбоях</li>
    </ul>
    <p>С AppML очень легко размещать базы данных и приложения в облаке.</p>
    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-button w3-green' href='appml_ref_api.php'>&#10094; Prev</a>
      <a class='w3-right w3-button w3-green' href='appml_history.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>