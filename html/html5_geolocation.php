<?php include '../include/head.php'; ?>

  <title>HTML Геолокация. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='HTML5 Геолокация. Что такое геолокация на веб-сайте? Определение места нахождения пользователя. <?php include '../include/description.php'; ?>'>
  <link rel='stylesheet' href='../styles/browserref.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_html.php'; ?>
<?php include '../include/before_content_html.php'; ?>

  <article>
    <h1>HTML5 <span class='color_h1'>Геолокация</span></h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_youtube.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_draganddrop.php'>Next &#10095;</a>
    </div>
    <hr>
    <p class='intro' id='demo'>API геолокации HTML используется для места нахождения пользователя.</p>
    <p><button class='w3-btn w3-blue' onclick='getLocation()'>Попробуйте это</button></p>
    <div id='mapholder'></div>
    <script src='https://maps.google.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU'></script>
    <script>
        var x=document.getElementById('demo');
        function getLocation()
        {
            if (navigator.geolocation)
            {
                navigator.geolocation.getCurrentPosition(showPosition,showError);
            }
            else{x.innerHTML='Geolocation is not supported by this browser.';}
        }

        function showPosition(position)
        {
            var lat=position.coords.latitude;
            var lon=position.coords.longitude;
            var latlon=new google.maps.LatLng(lat, lon)
            var mapholder=document.getElementById('mapholder')
            mapholder.style.height='250px';
            mapholder.style.width='100%';

            var myOptions={
                center:latlon,zoom:14,
                mapTypeId:google.maps.MapTypeId.ROADMAP,
                mapTypeControl:false,
                navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
            };
            var map=new google.maps.Map(document.getElementById('mapholder'),myOptions);
            var marker=new google.maps.Marker({position:latlon,map:map,title:'You are here!'});
        }

        function showError(error)
        {
            switch(error.code)
            {
                case error.PERMISSION_DENIED:
                    x.innerHTML='User denied the request for Geolocation.'
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML='Location information is unavailable.'
                    break;
                case error.TIMEOUT:
                    x.innerHTML='The request to get user location timed out.'
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML='An unknown error occurred.'
                    break;
            }
        }
    </script>
    <hr>

    <h2>Найдите позицию пользователя</h2>
    <p>API геолокации HTML используется для получения географического положения пользователя.</p>
    <p>Поскольку это может нарушить конфиденциальность, позиция недоступна до тех пор, пока пользователь не согласиться с этим.</p>
    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong><b> </b>Геолокация является наиболее точной для устройств с GPS, таких как смартфон.</p>
    </div>
    <hr>
    <h2>Поддержка браузерами</h2>
    <p>Цифры в таблице определяют первую версию браузера, которая полностью поддерживает геолокацию.</p>
    <table class='browserref notranslate'>
      <tr>
        <th style='width:20%;font-size:16px;text-align:left;'>API</th>
        <th style='width:16%;' class='bsChrome' title='Chrome'></th>
        <th style='width:16%;' class='bsEdge' title='Internet Explorer / Edge'></th>
        <th style='width:16%;' class='bsFirefox' title='Firefox'></th>
        <th style='width:16%;' class='bsSafari' title='Safari'></th>
        <th style='width:16%;' class='bsOpera' title='Opera'></th>
      </tr>
      <tr>
        <td style='text-align:left;'>Geolocation</td>
        <td>5.0 - 49.0 (http)<br>50.0 (https)</td>
        <td>9.0</td>
        <td>3.5</td>
        <td>5.0</td>
        <td>16.0</td>
      </tr>
    </table>

    <div class='w3-panel w3-note'>
      <p><strong>Примечание:</strong> Начиная с Chrome 50, API Геолокация будет работать только при безопасном соединении, таком как HTTPS. Если ваш сайт размещён на незащищенном источнике (например, HTTP), запросы на получение местоположения пользователей больше не будут функционировать.</p>
    </div>
    <hr>

    <h2>Использование HTML Геолокации</h2>
    <p>Метод <code class='w3-codespan'>getCurrentPosition()</code> используется для возвращения позиции пользователя.</p>
    <p>Приведённый ниже пример возвращает широту и долготу позиции пользователя:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;script&gt;<br>var x = document.getElementById(&quot;demo&quot;);<br>function getLocation() {<br>&nbsp;&nbsp;if (navigator.geolocation) {<br>
        &nbsp;&nbsp;&nbsp; navigator.geolocation.getCurrentPosition(showPosition);<br>&nbsp;&nbsp;} else {<br>
        &nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Геолокация не поддерживается этим браузером.&quot;;<br>
        &nbsp;&nbsp;}<br>}<br><br>
        function showPosition(position) {<br>&nbsp; x.innerHTML = &quot;Latitude: &quot; + position.coords.latitude + <br>&nbsp;&nbsp;&quot;&lt;br&gt;Longitude: &quot; + position.coords.longitude; <br>
        }<br>&lt;/script&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit6329.html?filename=tryhtml5_geolocation' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Объяснение примера:</p>
    <ul>
      <li>Проверяем, поддерживается ли геолокация;</li>
      <li>Если поддерживается, запускаем метод getCurrentPosition(). Если нет, то отображаем сообщение пользователю;</li>
      <li>Если метод getCurrentPosition() успешен, он возвращает объект координат к функции, указанной в параметре (showPosition);</li>
      <li>Функция showPosition() выводит широту и долготу.</li>
    </ul>
    <p>Приведённый выше пример является очень простым базовым скриптом геолокации без обработки ошибок.</p>
    <hr>
    <h2>Обработка ошибок и отказов</h2>
    <p>Другой параметр метода <code class='w3-codespan'>getCurrentPosition()</code> используется для обработки ошибок. Он определяет функцию для запуска, если не удалось получить местонахождение пользователя:</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        function showError(error) {<br>&nbsp;&nbsp;switch(error.code) {<br>&nbsp;&nbsp;&nbsp; case error.PERMISSION_DENIED:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Пользователь отклонил запрос на геолокацию.&quot;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;<br>&nbsp;&nbsp;&nbsp;&nbsp;case error.POSITION_UNAVAILABLE:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Информация о местоположении недоступна.&quot;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;<br>&nbsp;&nbsp;&nbsp;&nbsp;case error.TIMEOUT:<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Запрос на получение тайм-аута пользователя.&quot;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; break;<br>&nbsp;&nbsp;&nbsp; case error.UNKNOWN_ERROR:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x.innerHTML = &quot;Произошла неизвестная ошибка.&quot;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
        &nbsp;&nbsp;}<br>
        }</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryitef87.html?filename=tryhtml5_geolocation_error' target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Отображение результата на карте</h2>
    <p>Чтобы отобразить результат на карте, нужен доступ к сервису карт, например, до Карт Google.</p>
    <p>В приведённом ниже примере возвращённая широта и долгота используются для отображения местонахождения на карте Google (с помощью статического изображения):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate jsHigh'>
        function showPosition(position) {<br>&nbsp;&nbsp;var latlon = position.coords.latitude + &quot;,&quot; + position.coords.longitude;<br><br>&nbsp;&nbsp;var img_url = &quot;https://maps.googleapis.com/maps/api/staticmap?center=<br>
        &nbsp;&nbsp;&quot;+latlon+&quot;&amp;zoom=14&amp;size=400x300&amp;sensor=false&amp;key=YOUR_KEY&quot;;<br><br>
        &nbsp;&nbsp;document.getElementById(&quot;mapholder&quot;).innerHTML = &quot;&lt;img src='&quot;+img_url+&quot;'&gt;&quot;;<br>
        }<br></div>
      <!--<a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit.asp?filename=tryhtml5_geolocation_map' target='_blank'>Попробуйте сами &raquo;</a>-->
    </div>
    <!--<p><a href='../htmltryit/tryit.asp?filename=tryhtml5_geolocation_map_script' target='_blank'>Google Map Script</a><br>
    Як показати інтерактивну карту Google за допомогою маркера, параметрів масштабування та перетягування.</p>-->
    <hr>

    <h2>Информация, которая касается местонахождения</h2>
    <p>На этой странице показано, как отобразить позицию пользователя на карте.</p>
    <p>Геолокация также очень полезна для конкретной информации о местонахождении, например:</p>
    <ul>
      <li>Актуальная местная информация;</li>
      <li>Отображение интересных мест возле пользователя;</li>
      <li>Пошаговая навигация (GPS).</li>
    </ul>
    <hr>

    <h2>Метод <i>getCurrentPosition()</i> - возвращение данных</h2>
    <p>Метод <code class='w3-codespan'>getCurrentPosition()</code> возвращает объект в случае успеха. Свойства широты, долготы и точности всегда возвращаются. Другие свойства возвращаются, если доступны:</p>
    <table class='w3-table-all notranslate'>
      <tr>
        <th style='width:150px'>Свойство</th>
        <th>Возвращение</th>
      </tr>
      <tr>
        <td>coords.latitude</td>
        <td>Широта как десятичное число (всегда возвращается)</td>
      </tr>
      <tr>
        <td>coords.longitude</td>
        <td>Долгота как десятичное число (всегда возвращается)</td>
      </tr>
      <tr>
        <td>coords.accuracy</td>
        <td>Точность позиции (всегда возвращается)</td>
      </tr>
      <tr>
        <td>coords.altitude</td>
        <td>Высота в метрах выше среднего уровня моря (возвращается, если есть)</td>
      </tr>
      <tr>
        <td>coords.altitudeAccuracy</td>
        <td>Точность позиции высоты (возвращается, если доступна)</td>
      </tr>
      <tr>
        <td>coords.heading</td>
        <td>Направление в градусах по часовой стрелке от Севера (возвращается, если доступно)</td>
      </tr>
      <tr>
        <td>coords.speed</td>
        <td>Скорость в метрах в секунду (возвращается, если доступно)</td>
      </tr>
      <tr>
        <td>timestamp</td>
        <td>Дата / время ответа (возвращается, если доступно)</td>
      </tr>
    </table>
    <hr>
    <h2>Объект геолокации - другие интересные методы</h2>
    <p>Объект геолокации - также другие интересные методы:</p>
    <ul>
      <li><code class='w3-codespan'>watchPosition()</code> - Возвращает текущую позицию пользователя и продолжает возвращать обновленную позицию, когда пользователь перемещается (например, GPS в автомобиле).</li>
      <li><code class='w3-codespan'>clearWatch()</code> - останавливает метод <code class='w3-codespan'>watchPosition()</code>.</li>
    </ul>
    <p>Приведенный ниже пример показывает метод <code class='w3-codespan'>watchPosition()</code>. Для тестирования требуется точное устройство GPS (например, смартфон):</p>
    <div class='w3-example'>
      <h3>Пример</h3>
      <div class='w3-code notranslate htmlHigh'>
        &lt;script&gt;<br>var x = document.getElementById(&quot;demo&quot;);<br>function getLocation() {<br>
        &nbsp; if (navigator.geolocation) {<br>&nbsp;&nbsp;&nbsp; navigator.geolocation.watchPosition(showPosition);<br>&nbsp;&nbsp;} else {<br>
        &nbsp;&nbsp;&nbsp; x.innerHTML = &quot;Геолокация не поддерживается этим браузером.&quot;;<br>
        &nbsp;&nbsp;}<br>}<br>
        function showPosition(position) {<br>&nbsp; x.innerHTML = &quot;Latitude: &quot; + position.coords.latitude + <br>&nbsp;&nbsp;&quot;&lt;br&gt;Longitude: &quot; + position.coords.longitude; <br>
        }<br>&lt;/script&gt;</div>
      <a class='w3-btn w3-margin-bottom' href='../htmltryit/tryit67d4.html?filename=tryhtml5_geolocation_watchposition' target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='html_youtube.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='html5_draganddrop.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>