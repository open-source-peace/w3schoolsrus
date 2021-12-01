<?php include '../include/head.php'; ?>
<title>PHP ООП. Объектно-ориентированное программирование. <?php include '../include/title.php'; ?></title>
<meta name='description' content='PHP ООП. Что такое объектно-ориентированное программирование? Имеет несколько преимуществ по сравнению с процедурным программированием. Что такое классы и объекты? Класс - это шаблон для объектов, а объект - это экземпляр класса. Современный учебник по языку PHP. <?php include '../include/description.php'; ?>'>
<style>
        .flex-container {
            display: flex;
            flex-wrap: nowrap;
            background-color: DodgerBlue;
        }

        .flex-container .box {
            background-color: #f1f1f1;
            width: 50%;
            margin: 10px;
            text-align: center;
            line-height: 35px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_php.php'; ?>
<?php include '../include/before_content_php.php'; ?>

<article>
    <h1>PHP <span class="color_h1">- Что такое Объектно-ориентированное программирование (ООП)?</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_json.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_classes_objects.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Начиная с <strong>PHP5</strong>, вы также можете писать PHP код в объектно-ориентированном стиле.</p>
    <p class="intro"><strong>Объектно-ориентированное программирование</strong> выполняется быстрее и проще.</p>
    <hr>

    <h2>PHP Что такое ООП?</h2>
    <p><strong>ООП</strong> означает <strong>объектно-ориентированное программирование</strong>.</p>

    <p><strong>Процедурное программирование</strong> - это написание процедур или функций, которые выполняют операции с данными, а <strong>объектно-ориентированное программирование</strong> - это создание объектов, которые содержат как данные, так и функции.</p>
    <p>Объектно-ориентированное программирование имеет несколько преимуществ по сравнению с процедурным программированием:</p>
    <ul>
        <li>ООП быстрее и проще в исполнении</li>
        <li>ООП обеспечивает четкую структуру программ</li>
        <li>ООП помогает сохранить PHP код DRY - &quot;Don't Repeat Yourself&quot; (&quot;Не повторяющим себя&quot;), и облегчает поддержку, изменение и отладку кода</li>
        <li>ООП позволяет создавать полностью повторно используемые приложения с меньшим количеством кода и более коротким временем разработки</li>
    </ul>
    <p><b>Примечание:</b> Принцип &quot;Don't Repeat Yourself&quot; (DRY) - (&quot;Не повторяй себя&quot;) заключается в уменьшении повторения кода. Вы должны извлечь коды, которые являются общими для приложения, и разместить их в одном месте и использовать их повторно, а не постоянно повторять их.</p>
    <hr>

    <h2>PHP - Что такое классы и объекты?</h2>
    <p><strong>Классы</strong> и <strong>объекты</strong> являются двумя основными аспектами объектно-ориентированного программирования.</p>
    <p>Посмотрите на следующую иллюстрацию, чтобы увидеть разницу между классом и объектами:</p>

    <div class="flex-container">
        <div class="box">
            <h2>Класс</h2>
            <p>Фрукты</p>
        </div>
        <div class="box">
            <h2>Объекты</h2>
            <p>Apple</p>
            <p>Banana</p>
            <p>Mango</p>
        </div>
    </div>
    <p>Другой пример:</p>
    <div class="flex-container">
        <div class="box">
            <h2>Класс</h2>
            <p>Автомобили</p>
        </div>
        <div class="box">
            <h2>Объекты</h2>
            <p>Volvo</p>
            <p>Audi</p>
            <p>Toyota</p>
        </div>
    </div>

    <p>Таким образом, класс - это шаблон для объектов, а объект - это экземпляр класса.</p>
    <p>Когда отдельные объекты создаются, они наследуют все свойства и поведения класса, но каждый объект будет иметь разные значения для свойств.</p>
    <p>Посмотрите следующие разделы PHP учебника на нашем сайте <?php include '../include/w3schools.php'; ?>, чтобы узнать больше об объектно-ориентированном программировании.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="php_json.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="php_oop_classes_objects.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>