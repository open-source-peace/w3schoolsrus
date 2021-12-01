<?php include '../include/head.php'; ?>
<title>Про рекламу на сайте. <?php include '../include/title.php'; ?></title>
<meta name="description" content="Как разместить рекламу и объявления на сайте W3Schools на русском? Сколько стоит реклама? Как добавить объявление? Как купить ссылку на сайте. <?php include '../include/description.php'; ?>">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_about.php'; ?>
<?php include '../include/before_content_about.php'; ?>

      <article>
        <h1>Про рекламу на сайте W3Schools</h1>
        <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="about_privacy.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="about_w3schoolsrus.php">Next &#10095;</a>
        </div>
        <hr>
        <h2>*Цены на рекламу и другие вопросы:</h2>

        <div id="ad_form">
          <form>
            <div class="w3-input-group">
              <label for="ad_name">Имя:</label>
              <input type="text" id="ad_name" name="ad_name" class="w3-input w3-border"
                     placeholder="Ваше имя"/>
            </div>
            <div class="w3-input-group w3-margin-top">
              <label for="ad_company">Компания:</label>
              <input type="text" id="ad_company" name="ad_company" class="w3-input w3-border"
                     placeholder="Название вашей компании"/>
            </div>
            <div class="w3-input-group w3-margin-top">
              <label for="ad_email">Контактный E-mail:</label>
              <input type="email" id="ad_email" name="ad_email" class="w3-input w3-border"
                     placeholder="Ваш e-mail адрес"/>
            </div>
            <div class="w3-input-group w3-margin-top">
              <label for="ad_desc">Описание объявления / Предложение / Вопрос:</label>
              <textarea name="ad_desc" id="ad_desc"
                        style="width:100%;height:200px;resize:vertical"></textarea>
            </div>
            <div class="w3-input-group w3-margin-top">
              <input type="button" class="w3-button w3-dark-grey" value="Отправить"
                     onclick="sendAdform()"/>
            </div>
          </form>
        </div>
        <div class="container-fluid" id="ad_sent" style="display:none;">
          <div class="w3-note w3-panel">
            <h2>Благодарим за ваш интерес к нашей компании.</h2>
            <p>Мы свяжемся с вами как можно скорее.</p>
          </div>
        </div>
        <p><b>*Примечание.</b> Здесь форма показана для примера, но работает только на официальном сайте <a
              href="https://www.w3schools.com/" target="blank" rel="nofollow">w3schools.com</a>. Для заполнения формы
            перейдите на <a href="https://www.w3schools.com/about/about_advert.asp"
                                           target="blank" rel="nofollow">официальный сайт</a>.</p>
        <p>или отправьте электронное письмо по адресу:</p>
        <p><img src="../images/mail_billing.gif" alt="Mail to"/></p>
        <hr>
        <h1>Форматы объявлений:</h1>

        <h2>Top Banner (728 x 90 Leaderboard):</h2>
        <p>Top Banner имеет размер 728x90 пикселей и не должен превышать 35 Кб. Баннеры вращаются случайно в ротаторе баннеров и отражаются в заголовке каждой страницы.</p>
        <p>Баннеры не должны быть расширяемыми, мерцающими, громкими или тревожными.</p>
        <hr>
        <h2>Wide Skyscraper (160 х 600):</h2>
        <p>Wide Skyscraper баннеры имеют размер 160x600 пикселей и не должны превышать 35 Кб. Они вращаются случайно в ротаторе баннеров и отображаются в правой части каждой страницы учебника.</p>
        <p>Баннеры не должны быть расширяемыми, мерцающими, громкими или тревожными.</p>
        <hr>
        <h2>Создание ссылок</h2>
        <p>W3Schools не поддерживает платное построение ссылок или платную поисковую оптимизацию.</p>
        <p>Платные ссылки автоматически будут получать атрибут rel=nofollow в соответствие стандартным мерам поисковой системы Google.</p>
        <hr>
        <div class="w3-clear nextprev">
          <a class="w3-left w3-btn" href="about_privacy.php">&#10094; Prev</a>
          <a class="w3-right w3-btn" href="about_w3schoolsrus.php">Next &#10095;</a>
        </div>
      </article>
<?php include '../include/addown_content.php'; ?>
    </div>
    <?php include '../include/rightbar.php'; ?>
    <?php include '../include/footer.php'; ?>