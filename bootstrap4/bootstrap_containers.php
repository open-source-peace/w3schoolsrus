<?php include '../include/head.php'; ?>
<title>Bootstrap 4 Контейнеры. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Bootstrap 4 Контейнеры используются для заполнения содержимого внутри них. Класс .container предоставляет адаптивный контейнер фиксированной ширины. Класс .container-fluid предоставляет контейнер полной ширины, охватывающий всю ширину области просмотра.  <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_bootstrap4.php'; ?>
<?php include '../include/before_content_bootstrap.php'; ?>

<article>
    <h1>Bootstrap 4 <span class="color_h1">Контейнеры</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="bootstrap_get_started.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="bootstrap_grid_basic.php">Next &#10095;</a>
    </div>
    <hr>

    <h2>Контейнеры</h2>
    <p>Из предыдущей главы вы узнали, что Bootstrap требует содержащего элемента для переноса содержимого сайта.</p>
    <p>Контейнеры используются для заполнения содержимого внутри них, и доступны два класса контейнеров:</p>
    <ol>
        <li>Класс <code class="w3-codespan">.container</code> предоставляет адаптивный <strong>контейнер фиксированной ширины</strong></li>
        <li>Класс <code class="w3-codespan">.container-fluid</code> предоставляет <strong>контейнер полной ширины</strong>, охватывающий всю ширину области просмотра</li>
    </ol>

    <div class="w3-row-padding" style="margin:16px -16px 0 -16px">
        <div class="w3-half">
            <div class="w3-padding w3-padding-16" style="border:4px solid #f1f1f1">
                <div style="height:100px;width:80%;margin:auto;background:#d9d9d9" class="w3-display-container"><span class="w3-display-middle">.container</span></div>
            </div>
        </div>
        <div class="w3-half">
            <div class="w3-padding-16" style="border:4px solid #f1f1f1">
                <div style="height:100px;width:100%;background:#d9d9d9" class="w3-center w3-display-container"><span class="w3-display-middle">.container-fluid</span></div>
            </div>
        </div>
    </div>
    <hr>

    <h2>Фиксированный контейнер</h2>
    <p>Используйте класс <code class="w3-codespan">.container</code> для создания адаптивного контейнера фиксированной ширины.</p>
    <p>Обратите внимание, что его ширина (<code class="w3-codespan">max-width</code>) будет меняться на разных размерах экрана:</p>

    <div class="w3-responsive" style="margin:-16px 0">
        <table class="w3-table w3-table-all">
            <thead>
            <tr>
                <th></th>
                <th>
                    Extra small<br>
                    &lt;576px
                </th>
                <th>
                    Small<br>
                    &#8805;576px
                </th>
                <th>
                    Medium<br>
                    &#8805;768px
                </th>
                <th>
                    Large<br>
                    &#8805;992px
                </th>
                <th>
                    Extra large<br>
                    &#8805;1200px
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>max-width</td>
                <td>100%</td>
                <td>540px</td>
                <td>720px</td>
                <td>960px</td>
                <td>1140px</td>
            </tr>
            </tbody>
        </table>
    </div>
    <p>Откройте пример ниже и измените размер окна браузера, чтобы увидеть, что ширина контейнера будет меняться в разных брекпоинтах (точках останова):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;container&quot;&gt;<br>&nbsp; &lt;h1&gt;Моя первая Bootstrap страница&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Здесь какой-то текст.&lt;/p&gt; <br>&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_gs_container2.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Жидкий контейнер (fluid)</h2>
    <p>Используйте класс <code class="w3-codespan">.container-fluid</code> для создания контейнера полной ширины, который всегда будет охватывать всю ширину экрана (<code class="w3-codespan">width</code> и всегда является <code class="w3-codespan">100%</code>):</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;container-fluid&quot;&gt;<br>&nbsp; &lt;h1&gt;Моя первая Bootstrap страница&lt;/h1&gt;<br>&nbsp; &lt;p&gt;Здесь какой-то текст.&lt;/p&gt; <br>&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_gs_container-fluid.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Отступы контейнера (padding)</h2>
    <p>По умолчанию контейнеры имеют отступы 15px слева и справа, без верхнего или нижнего отступа. Поэтому мы часто используем <strong>интервальные утилиты</strong>, такие как дополнительные отступы и поля, чтобы они выглядели еще лучше. Например, <code class="w3-codespan">.pt-3</code> означает "добавить верхний отступ 16px":</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;container pt-3&quot;&gt;&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_container_padding.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Вы узнаете намного больше об интервальных утилитах в разделе <a href="bootstrap_utilities.php">BS4 Утилиты</a>.</p>
    </div>
    <hr>

    <h2>Контейнер границы и цвета</h2>
    <p>Другие утилиты, такие как границы и цвета, также часто используются вместе с контейнерами:</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-white w3-padding">
            <div class="container p-3 my-3 border">
                <h1>Моя первая Bootstrap страница</h1>
                <p>Этот контейнер имеет границу и некоторые дополнительные отступы и поля.</p>
            </div>

            <div class="container p-3 my-3 bg-dark text-white">
                <h1>Моя первая Bootstrap страница</h1>
                <p>Этот контейнер имеет темный цвет фона и белый текст, а также некоторые дополнительные отступы и поля.</p>
            </div>

            <div class="container p-3 my-3 bg-primary text-white">
                <h1>Моя первая Bootstrap страница</h1>
                <p>Этот контейнер имеет синий цвет фона и белый текст, а также некоторые дополнительные отступы и поля.</p>
            </div>
        </div>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;container p-3 my-3 border&quot;&gt;&lt;/div&gt;<br><br>&lt;div class=&quot;container
            p-3 my-3 bg-dark text-white&quot;&gt;&lt;/div&gt;<br><br>&lt;div class=&quot;container p-3 my-3 bg-primary
            text-white&quot;&gt;&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_container_color.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-note w3-panel">
        <p>Вы узнаете намного больше о цветах и утилитах границ, в разделах <a href="bootstrap_colors.php">BS4 Цвета</a> и <a href="bootstrap_utilities.php">BS4 Утилиты</a> на нашем сайте.</p>
    </div>
    <hr>

    <h2>Адаптивные (отзывчивые) контейнеры</h2>
    <p>Также можно использовать классы <code class="w3-codespan">.container-sm|md|lg|xl</code> для создания адаптивных контейнеров.</p>
    <p>Ширина контейнера будет меняться на разных размерах экрана / областях просмотра:</p>

    <div class="w3-responsive" style="margin:-16px 0">
        <table class="w3-table w3-table-all">
            <thead>
            <tr>
                <th>Класс</th>
                <th>
                    Extra small<br>
                    &lt;576px
                </th>
                <th>
                    Small<br>
                    &#8805;576px
                </th>
                <th>
                    Medium<br>
                    &#8805;768px
                </th>
                <th>
                    Large<br>
                    &#8805;992px
                </th>
                <th>
                    Extra large<br>
                    &#8805;1200px
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><code class="w3-codespan">.container-sm</code></td>
                <td>100%</td>
                <td>540px</td>
                <td>720px</td>
                <td>960px</td>
                <td>1140px</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">.container-md</code></td>
                <td>100%</td>
                <td>100%</td>
                <td>720px</td>
                <td>960px</td>
                <td>1140px</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">.container-lg</code></td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
                <td>960px</td>
                <td>1140px</td>
            </tr>
            <tr>
                <td><code class="w3-codespan">.container-xl</code></td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
                <td>1140px</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;container-sm&quot;&gt;.container-sm&lt;/div&gt;<br>&lt;div
            class=&quot;container-md&quot;&gt;.container-md&lt;/div&gt;<br>&lt;div
            class=&quot;container-lg&quot;&gt;.container-lg&lt;/div&gt;<br>&lt;div
            class=&quot;container-xl&quot;&gt;.container-xl&lt;/div&gt;</div>
        <a target="_blank" href="../bootstrap4tryit/trybs_container_resp.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="bootstrap_get_started.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="bootstrap_grid_basic.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>