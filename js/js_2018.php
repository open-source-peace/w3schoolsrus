<?php include '../include/head.php'; ?>

<title>JavaScript Версии. ECMAScript 2018. <?php include '../include/title.php'; ?></title>
<meta name='description' content='JavaScript Версии. ECMAScript 2018. Новые возможности. Асинхронная итерация. Promise.finally. Object Rest Свойства. новые функции RegExp. Браузерная поддержка. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../styles/browserref.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_js.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>ECMAScript 2018</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_2017.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_ie_edge.php">Next &#10095;</a>
    </div>

    <div class="w3-panel w3-info">
        <p>Соглашение об именовании JavaScript началось с ES1, ES2, ES3, ES5 и ES6.</p>
        <p>Но ECMAScript 2016 и 2017 не назывался ES7 и ES8.</p>
        <p>С 2016 года новые версии именуются по годам (ECMAScript 2016/2017/2018).</p>
    </div>

    <h2>Новые возможности ECMAScript 2018</h2>
    <p>В этой главе представлены новые функции в ECMAScript 2018:</p>
    <ul>
        <li><a href="#mark_async_iteration">Асинхронная итерация</a></li>
        <li><a href="#mark_promise_finally">Финальные промисы</a></li>
        <li><a href="#mark_obj_rest">Object Rest Свойства</a></li>
        <li><a href="#mark_regxp">Новые возможности RegExp</a></li>
    </ul>
    <hr>
    <a id="#mark_async_iteration"></a>

    <h2>JavaScript Асинхронная итерация</h2>
    <p>В ECMAScript 2018 добавлены асинхронные итераторы и итерации.</p>
    <p>С асинхронными итерациями мы можем использовать ключевое слово <code class="w3-codespan">await</code> в циклах <code class="w3-codespan">for/of</code>.

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            for await () {}
        </div>
    </div>
    <p>Firefox и Safari были первыми браузерами с поддержкой асинхронной итерации JavaScript:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 63</td>
                <td>Edge 79</td>
                <td>Firefox 57</td>
                <td>Safari 11</td>
                <td>Opera 50</td>
            </tr>
            <tr>
                <td>Dec 2017</td>
                <td>Jan 2020</td>
                <td>Nov 2017</td>
                <td>Sep 2017</td>
                <td>Jan 2018</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>
    <a id="mark_promise_finally"></a>
    <h2>JavaScript Promise.finally</h2>
    <p>ECMAScript 2018 завершает полную реализацию объекта Promise с <code class="w3-codespan">Promise.finally</code>:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let myPromise = new Promise();<br>
            <br>
            myPromise.then();<br>
            myPromise.catch();<br>
            myPromise.finally();<br>
        </div>
    </div>
    <p>Chrome и Firefox были первыми браузерами с поддержкой <code class="w3-codespan">Promise.finally</code>:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 63</td>
                <td>Edge 18</td>
                <td>Firefox 58</td>
                <td>Safari 11.1</td>
                <td>Opera 50</td>
            </tr>
            <tr>
                <td>Dec 2017</td>
                <td>Nov 2018</td>
                <td>Jan 2018</td>
                <td>Mar 2018</td>
                <td>Jan 2018</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_obj_rest"></a>
    <h2>JavaScript Object Rest Свойства</h2>
    <p>В ECMAScript 2018 добавлены rest свойства.</p>
    <p>Это позволяет разрушить объект и собрать остатки на новом объекте:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            let { x, y, ...z } = { x: 1, y: 2, a: 3, b: 4 };<br>
            x; // 1<br>
            y; // 2<br>
            z; // { a: 3, b: 4 }<br>
        </div>
    </div>
    <p>Chrome, Firefox и Opera были первыми браузерами с поддержкой object rest свойств:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 60</td>
                <td>Edge 79</td>
                <td>Firefox 55</td>
                <td>Safari 11.1</td>
                <td>Opera 47</td>
            </tr>
            <tr>
                <td>Jul 2017</td>
                <td>Jan 2020</td>
                <td>Aug 2017</td>
                <td>Mar 2018</td>
                <td>Aug 2017</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <a id="mark_regxp"></a>
    <h2>Новые возможности JavaScript RegExp</h2>
    <p>В ECMAScript 2018 добавлены 4 новые функции RegExp:</p>
    <ul>
        <li>Unicode Property Escapes (\p{...})</li>
        <li>Lookbehind Assertions (?&lt;= ) and (?&lt;! )</li>
        <li>Named Capture Groups</li>
        <li>s (dotAll) Flag</li>
    </ul>

    <p>Chrome и Firefox были первыми браузерами с поддержкой всех новых функций RegExp:</p>
    <div class="w3-responsive">
        <table class="browserref notranslate">
            <tbody><tr style="height:50px">
                <th style="width:16%;" class="bsChrome" title="Chrome"></th>
                <th style="width:16%;" class="bsEdge" title="Edge"></th>
                <th style="width:16%;" class="bsFirefox" title="Firefox"></th>
                <th style="width:16%;" class="bsSafari" title="Safari"></th>
                <th style="width:16%;" class="bsOpera" title="Opera"></th>
            </tr>
            <tr>
                <td>Chrome 64</td>
                <td>Edge 79</td>
                <td>Firefox 78</td>
                <td>Safari 12</td>
                <td>Opera 51</td>
            </tr>
            <tr>
                <td>Jan 2018</td>
                <td>Jan 2020</td>
                <td>Jun 2020</td>
                <td>Sep 2018</td>
                <td>Feb 2018</td>
            </tr>
            </tbody></table>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_2017.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_ie_edge.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>

<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>