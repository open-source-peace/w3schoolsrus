<?php include '../include/head_html.php'; ?>

  <title>Онлайн редактор кода Tryit v.3.5. <?php include '../include/title_html.php'; ?></title>
  <meta name='description' content='Онлайн редактор кода для HTML, CSS, JavaScript. Попробуйте Tryit v.3.5. от сайта W3Schools на русском'>
  <link rel='canonical' href='https://w3schoolsrus.github.io/tryit/index.html' />
  <link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      .w3-sidebar {display:none !important}
      .w3-sidebar.w3-collapse {display:none !important}
      .w3-main {margin-left:0 !important}
      a.topnav-icons.fa-menu {display:none;}
      .editor-container {display: -ms-flexbox;display:flex;justify-content: space-between; margin-top:-16px; margin-bottom:-8px;}
      .editor-container .editor-child {width:49.6%; float:left;}
      .editor-container .editor-edit {margin-right:5px;}
      .editor-container .editor-view {color:white;font-family:Arial,sans-serif !important; text-align:center; background:black; margin:16px 0; margin-left:5px; padding:20px;}
      @media only screen and (max-width: 768px) {.editor-container {margin-bottom:0; display:block;}
          .editor-container .editor-child {margin:0; width:100%;}
          .editor-container .editor-view {margin-bottom:8px;}
      }
      .mq {border:1px solid #ddd;}
      @media only screen and (max-width: 600px) {
      .mq {border:none!important;}
      }
      .fa-home:before {content: '\e800'; }
      .fa-save:before {content: '\e804'; }
      .fa-rotate:before {content: '\e813'; }
      .fa-menu:before {content: '\f0c9'; }
      .w3-hover-none {cursor:default;}
      .containerm {position: relative;}
      .middlem {opacity: 0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); text-align: center;}
      .containerm:hover .middlem {opacity: 1;}
      .trytopnav {background-color: #f1f1f1;}
      body.darktheme .trytopnav {background-color: #616161;color: #dddddd;}
      .trytopnav a.w3-bar-item {color:#999999!important;}
      body.darktheme .trytopnav a.w3-bar-item {color: #dddddd!important;}
      .w3-border {border: 1px solid #ccc!important;}
      body.darktheme .w3-border {border: 1px solid #616161!important;}
  </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>W3Schools Онлайн редактор кода</h1>

    <p>С помощью онлайн-редактора кода W3Schools вы можете редактировать код HTML, CSS и JavaScript и просматривать результат в своем браузере.</p>
    <br class="w3-hide-large w3-hide-medium">
    <div class="mq">
      <div class="trytopnav" style="background-color:#f1f1f1;margin-left:-16px;margin-right:-16px;">
        <div class="w3-bar w3-hide-small" style="overflow:hidden;">
          <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-home w3-hover-none" style="font-size:28px!important;margin-right:4px;margin-bottom:-4px;"></a>
          <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-bars w3-hover-none" style="font-size:28px!important;margin-right:4px;margin-bottom:-4px;"></a>
          <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-save w3-hover-none" style="font-size:28px!important;margin-right:4px;margin-bottom:-4px;"></a>
          <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-rotate w3-hover-none" style="font-size:28px!important;margin-right:4px;margin-bottom:-4px;"></a>
          <a href="javascript:void(0);" class="w3-button w3-bar-item topnav-icons fa fa-adjust w3-hover-none" style="font-size:28px!important;margin-bottom:-4px;"></a>
          <a href="../htmltryit/tryitfb35.html?filename=tryhtml_default" class="w3-button w3-bar-item w3-green w3-hover-green" style="color:white!important;padding:16px 17px;margin-left:4px;margin-bottom:-4px;margin-top:-2px" target="_blank">Выполнить &raquo;</a>
          <span class="w3-right w3-hide-small" style="padding:12px 16px 10px 0;display:block;float:right;"><span id="framesize">Размер результата: <span></span></span></span>
        </div>
        <div class="editor-container w3-container">
          <div class="editor-child editor-edit">
            <h3 class="w3-hide-large w3-hide-medium">Пример</h3>
            <div class="xw3-white w3-padding notranslate htmlHigh w3-code w3-border" style="border-left:none">
              &lt;!DOCTYPE html&gt;<br>
              &lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;Заголовок страницы&lt;/title&gt;<br>&lt;style&gt;<br>body {<br>&nbsp;&nbsp;background-color:
              black;<br>&nbsp; text-align: center;<br>&nbsp;
              color: white;<br>}<br>&lt;/style&gt;<br>
              &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;Это заголовок&lt;/h1&gt;<br>&lt;p&gt;Это параграф.&lt;/p&gt;<br>
              &lt;img src=&quot;../images/avatar.png&quot; alt=&quot;Аватар&quot;
              style=&quot;width:200px&quot;&gt;<br>
              <br>&lt;/body&gt;<br>&lt;/html&gt;
            </div>
          </div>

          <div id="editorEdit" class="w3-container editor-child editor-view w3-border">
            <h1 style="font-family:Arial,sans-serif !important;">Это заголовок</h1>
            <p style="font-family:Arial,sans-serif !important;font-size:17px">Это параграф.</p>
            <img src="../images/avatar.png" alt="Аватар на W3Schools" style="width:100%;max-width:200px;margin-top:30px;margin-bottom:30px;">
          </div>
        </div>
        <a class="w3-btn" style="margin-left:16px;margin-top:8px;margin-bottom:16px" href="../htmltryit/tryitfb35.html?filename=tryhtml_default" target="_blank">Запустить редактор &raquo;</a>
      </div>
    </div>
    <p>Кликните на кнопку &quot;Запустить редактор&quot;, чтобы увидеть, как он работает.</p>
    <hr>

    <h1>Объяснение работы онлайн веб-редактора</h1>
    <p>Окно слева доступно для редактирования - отредактируйте код и нажмите кнопку "Выполнить", чтобы просмотреть результат в правом окне (отображение в браузере).</p>
    <p class="w3-hide-small">"Размер результата" возвращает ширину и высоту окна результатов в пикселях (даже при изменении размера окна браузера).</p>
    <p>Вы можете контролировать размер окна с помощью полосы между окнами (перетаскиваемый желоб).</p>
    <p>Иконки поясняются в таблице ниже:</p>
    <table class="w3-table-all">
      <tr>
        <th>Иконка</th>
        <th>Описание</th>
      </tr>
      <tr>
        <td><span class="fa fa-home w3-xlarge" style="color:#888"></span></td>
        <td>Перейти на главную страницу сайта</td>
      </tr>
      <tr>
        <td><span class="fa fa-bars w3-xlarge" style="color:#888"></span></td>
        <td>Кнопка меню для дополнительных опций</td>
      </tr>
      <tr>
        <td><span class="fa fa-save w3-xlarge" style="color:#888"></span></td>
        <td>Сохраните свой код (и поделитесь им с другими)</td>
      </tr>
      <tr>
        <td><span class="fa fa-rotate w3-xlarge" style="color:#888"></span></td>
        <td>Изменить ориентацию (горизонтально или вертикально)</td>
      </tr>
      <tr>
        <td><span class="fa fa-adjust w3-xlarge" style="color:#888"></span></td>
        <td>Сменить цветовую тему (темная или светлая)</td>
      </tr>
    </table>
    <hr>

    <h1>Научитесь кодировать</h1>
    <p>Если вы новичок в программировании, мы предлагаем вам начать с <strong>HTML</strong>, а затем перейти к <strong>CSS</strong> и <strong>JavaScript</strong> (для фронтэнд-разработчиков), а также к урокам по <strong>PHP</strong> и <strong>SQL</strong> (для бэкэнд-разработчиков):</p>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../html/index.php">HTML Учебник</a>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../css/index.php">CSS Учебник</a>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../js/index.php">JavaScript Учебник</a>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../php/index.php">PHP Учебник</a>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../sql/index.php">SQL Учебник</a>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../python/index.php">Python Учебник</a>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../jquery/index.php">jQuery Учебник</a>
    <a class='w3-btn w3-blue w3-margin-bottom' href="../bootstrap4/index.php">Bootstrap 4 Учебник</a>
    <hr>
  </article>
  </div>
<?php include '../include/rightbar_html.php'; ?>
<?php include '../include/footer.php'; ?>