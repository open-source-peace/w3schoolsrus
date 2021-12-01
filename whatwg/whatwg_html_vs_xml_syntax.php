<?php include '../include/head.php'; ?>
<title>HTML: Живой стандарт. Синтаксис HTML и XML. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML: Живой стандарт. Синтаксис HTML и XML. The Living Standard. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_whatwg.php'; ?>
<?php include '../include/before_content_whatwg.php'; ?>

<article>
    <h1>HTML: Живой стандарт. Синтаксис HTML и XML</h1>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='whatwg_design_notes.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='whatwg_structure_specification.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>HTML и XML Синтаксис</h2>
    <p>Эта спецификация определяет абстрактный язык для описания документов и приложений, а также некоторые API-интерфейсы для взаимодействия с представлениями ресурсов в памяти, которые используют этот язык.</p>
    <p>Представление в памяти известно как &quot;DOM HTML&quot; или для краткости &quot;DOM&quot;.</p>
    <p>Существуют различные конкретные синтаксисы, которые могут использоваться для передачи ресурсов, использующих этот абстрактный язык, два из которых определены в этой спецификации.</p>
    <p>Первый такой конкретный синтаксис - это синтаксис HTML. Это формат, рекомендуемый большинством авторов. Он совместим с большинством устаревших веб-браузеров. Если документ передается с <a href="https://mimesniff.spec.whatwg.org/#mime-type" target="_blank" rel="nofollow">MIME-типом</a> text/html, то он будет обработан веб-браузерами как HTML-документ. Эта спецификация определяет новейший синтаксис HTML, известный просто как &quot;HTML&quot;.</p>
    <?php include '../include/adinfeed.php'; ?>
    <p>Второй конкретный синтаксис - это XML. Когда документ передается с <a href="https://mimesniff.spec.whatwg.org/#xml-mime-type" target="_blank" rel="nofollow">типом XML MIME</a>, например application/xhtml+xml, тогда он обрабатывается веб-браузерами как XML-документ для анализа процессором XML. Напоминаем авторам, что обработка XML и HTML отличается; в частности, даже незначительные синтаксические ошибки не позволят полностью отобразить документ, помеченный как XML, тогда как они будут проигнорированы в синтаксисе HTML.</p>
    <div class="w3-note">Синтаксис XML для HTML раньше назывался &quot;XHTML&quot;, но в данной спецификации этот термин не используется (среди прочего, потому что такой термин не используется для синтаксисов HTML MathML и SVG).</div>
    <p>Модель DOM, синтаксис HTML и синтаксис XML не могут представлять одно и то же содержимое. Например, пространства имен не могут быть представлены с использованием синтаксиса HTML, но они поддерживаются в DOM и синтаксисе XML. Точно так же документы, использующие функцию
        <a href="https://html.spec.whatwg.org/dev/scripting.html#the-noscript-element" target="_blank" rel="nofollow">noscript</a>, могут быть представлены с использованием синтаксиса HTML, но не могут быть представлены с помощью DOM или синтаксиса XML. Комментарии, содержащие строку &quot;->&quot;, могут быть представлены только в модели DOM, но не в синтаксисах HTML и XML.</p>
    <hr>
    <div class='w3-clear nextprev'>
        <a class='w3-left w3-btn' href='whatwg_design_notes.php'>&#10094; Prev</a>
        <a class='w3-right w3-btn' href='whatwg_structure_specification.php'>Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
