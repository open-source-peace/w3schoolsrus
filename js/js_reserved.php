<?php include '../include/head.php'; ?>

<title>JavaScript Зарезервированные слова. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Зарезервированные слова. Удаленные слова. Объекты, свойства и методы JavaScript. Зарезервированные слова Java. Обработчики событий HTML. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript <span class="color_h1">Зарезервированные слова</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_performance.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_versions.php">Next &#10095;</a>
    </div>
    <hr>
    <p>В JavaScript вы не можете использовать эти <strong>зарезервированные слова</strong> в качестве переменных, меток или имён функций:</p>

    <div class="w3-responsive notranslate">
        <table class="ws-table-all">
            <tr>
                <td>abstract</td>
                <td>arguments</td>
                <td>await*</td>
                <td>boolean</td>
            </tr>
            <tr>
                <td>break</td>
                <td>byte</td>
                <td>case</td>
                <td>catch</td>
            </tr>
            <tr>
                <td>char</td>
                <td>class*</td>
                <td>const</td>
                <td>continue</td>
            </tr>
            <tr>
                <td>debugger</td>
                <td>default</td>
                <td>delete</td>
                <td>do</td>
            </tr>
            <tr>
                <td>double</td>
                <td>else</td>
                <td>enum*</td>
                <td>eval</td>
            </tr>
            <tr>
                <td>export*</td>
                <td>extends*</td>
                <td>false</td>
                <td>final</td>
            </tr>
            <tr>
                <td>finally</td>
                <td>float</td>
                <td>for</td>
                <td>function</td>
            </tr>
            <tr>
                <td>goto</td>
                <td>if</td>
                <td>implements</td>
                <td>import*</td>
            </tr>
            <tr>
                <td>in</td>
                <td>instanceof</td>
                <td>int</td>
                <td>interface</td>
            </tr>
            <tr>
                <td>let*</td>
                <td>long</td>
                <td>native</td>
                <td>new</td>
            </tr>
            <tr>
                <td>null</td>
                <td>package</td>
                <td>private</td>
                <td>protected</td>
            </tr>
            <tr>
                <td>public</td>
                <td>return</td>
                <td>short</td>
                <td>static</td>
            </tr>
            <tr>
                <td>super*</td>
                <td>switch</td>
                <td>synchronized</td>
                <td>this</td>
            </tr>
            <tr>
                <td>throw</td>
                <td>throws</td>
                <td>transient</td>
                <td>true</td>
            </tr>
            <tr>
                <td>try</td>
                <td>typeof</td>
                <td>var</td>
                <td>void</td>
            </tr>
            <tr>
                <td>volatile</td>
                <td>while</td>
                <td>with</td>
                <td>yield</td>
            </tr>
        </table>
    </div>
    <p>Слова, отмеченные *, являются новыми в ECMAScript 5 и 6.</p>
    <div class="w3-panel w3-note">
        <p>Вы можете узнать больше о различных версиях JavaScript в главе <a href="js_versions.php">JS Версии</a>.</p>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Удаленные зарезервированные слова </h2>
    <p>Следующие зарезервированные слова были удалены из стандарта ECMAScript 5/6:</p>

    <div class="w3-responsive notranslate">
        <table class="ws-table-all">
            <tr>
                <td>abstract</td>
                <td>boolean</td>
                <td>byte</td>
                <td>char</td>
            </tr>
            <tr>
                <td>double</td>
                <td>final</td>
                <td>float</td>
                <td>goto</td>
            </tr>
            <tr>
                <td>int</td>
                <td>long</td>
                <td>native</td>
                <td>short</td>
            </tr>
            <tr>
                <td>synchronized</td>
                <td>throws</td>
                <td>transient</td>
                <td>volatile</td>
            </tr>
        </table>
    </div>

    <div class="w3-container w3-note"><p>Не используйте эти слова как переменные. ECMAScript 5/6 ещё не имеет полной поддержки во всех браузерах.</p></div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Объекты, свойства и методы JavaScript</h2>
    <p>Вам также следует избегать использования имен встроенных объектов, свойств и методов JavaScript:</p>
    <div class="w3-responsive notranslate">
        <table class="ws-table-all">
            <tr>
                <td>Array</td>
                <td>Date</td>
                <td>eval</td>
                <td>function</td>
            </tr>
            <tr>
                <td>hasOwnProperty</td>
                <td>Infinity</td>
                <td>isFinite</td>
                <td>isNaN</td>
            </tr>
            <tr>
                <td>isPrototypeOf</td>
                <td>length</td>
                <td>Math</td>
                <td>NaN</td>
            </tr>
            <tr>
                <td>name</td>
                <td>Number</td>
                <td>Object</td>
                <td>prototype</td>
            </tr>
            <tr>
                <td>String</td>
                <td>toString</td>
                <td>undefined</td>
                <td>valueOf</td>
            </tr>
        </table>
    </div>
    <hr>

    <h2>Зарезервированные слова Java</h2>
    <p>JavaScript часто используется вместе с Java. Вам следует избегать использования некоторых объектов и свойств Java в качестве идентификаторов JavaScript:</p>
    <div class="w3-responsive notranslate">
        <table class="ws-table-all">
            <tr>
                <td>getClass</td>
                <td>java</td>
                <td>JavaArray</td>
                <td>javaClass</td>
            </tr>
            <tr>
                <td>JavaObject</td>
                <td>JavaPackage</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <hr>
    <?php include '../include/addown_content.php'; ?>

    <h2>Другие зарезервированные слова</h2>
    <p>JavaScript можно использовать в качестве языка программирования во многих приложениях.</p>
    <p>Также следует избегать использования HTML и Window имён объектов и свойств:</p>
    <div class="w3-responsive notranslate">
        <table class="ws-table-all">
            <tr>
                <td>alert</td>
                <td>all</td>
                <td>anchor</td>
                <td>anchors</td>
            </tr>
            <tr>
                <td>area</td>
                <td>assign</td>
                <td>blur</td>
                <td>button</td>
            </tr>
            <tr>
                <td>checkbox</td>
                <td>clearInterval</td>
                <td>clearTimeout</td>
                <td>clientInformation</td>
            </tr>
            <tr>
                <td>close</td>
                <td>closed</td>
                <td>confirm</td>
                <td>constructor</td>
            </tr>
            <tr>
                <td>crypto</td>
                <td>decodeURI</td>
                <td>decodeURIComponent</td>
                <td>defaultStatus</td>
            </tr>
            <tr>
                <td>document</td>
                <td>element</td>
                <td>elements</td>
                <td>embed</td>
            </tr>
            <tr>
                <td>embeds</td>
                <td>encodeURI</td>
                <td>encodeURIComponent</td>
                <td>escape</td>
            </tr>
            <tr>
                <td>event</td>
                <td>fileUpload</td>
                <td>focus</td>
                <td>form</td>
            </tr>
            <tr>
                <td>forms</td>
                <td>frame</td>
                <td>innerHeight</td>
                <td>innerWidth</td>
            </tr>
            <tr>
                <td>layer</td>
                <td>layers</td>
                <td>link</td>
                <td>location</td>
            </tr>
            <tr>
                <td>mimeTypes</td>
                <td>navigate</td>
                <td>navigator</td>
                <td>frames</td>
            </tr>
            <tr>
                <td>frameRate</td>
                <td>hidden</td>
                <td>history</td>
                <td>image</td>
            </tr>
            <tr>
                <td>images</td>
                <td>offscreenBuffering</td>
                <td>open</td>
                <td>opener</td>
            </tr>
            <tr>
                <td>option</td>
                <td>outerHeight</td>
                <td>outerWidth</td>
                <td>packages</td>
            </tr>
            <tr>
                <td>pageXOffset</td>
                <td>pageYOffset</td>
                <td>parent</td>
                <td>parseFloat</td>
            </tr>
            <tr>
                <td>parseInt</td>
                <td>password</td>
                <td>pkcs11</td>
                <td>plugin</td>
            </tr>
            <tr>
                <td>prompt</td>
                <td>propertyIsEnum</td>
                <td>radio</td>
                <td>reset</td>
            </tr>
            <tr>
                <td>screenX</td>
                <td>screenY</td>
                <td>scroll</td>
                <td>secure</td>
            </tr>
            <tr>
                <td>select</td>
                <td>self</td>
                <td>setInterval</td>
                <td>setTimeout</td>
            </tr>
            <tr>
                <td>status</td>
                <td>submit</td>
                <td>taint</td>
                <td>text</td>
            </tr>
            <tr>
                <td>textarea</td>
                <td>top</td>
                <td>unescape</td>
                <td>untaint</td>
            </tr>
            <tr>
                <td>window</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Обработчики событий HTML</h2>
    <p>Кроме того, вам следует избегать использования имен всех обработчиков событий HTML.</p>
    <p>Примеры:</p>

    <div class="w3-responsive notranslate">
        <table class="ws-table-all">
            <tr>
                <td>onblur</td>
                <td>onclick</td>
                <td>onerror</td>
                <td>onfocus</td>
            </tr>
            <tr>
                <td>onkeydown</td>
                <td>onkeypress</td>
                <td>onkeyup</td>
                <td>onmouseover</td>
            </tr>
            <tr>
                <td>onload</td>
                <td>onmouseup</td>
                <td>onmousedown</td>
                <td>onsubmit</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_performance.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_versions.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>