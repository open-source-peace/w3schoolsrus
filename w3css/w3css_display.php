<?php include '../include/head.php'; ?>
    <title>W3.CSS Учебник. Display. Отображение. <?php include '../include/title.php'; ?></title>
    <meta name='description' content='W3.CSS Display. Отображение. Классы отображения. Текст внутри изображения. При наведении. Плавающие классы / Float. Как скрыть и показать. Класс w3-mobile. <?php include '../include/description.php'; ?>'>
    <link rel="stylesheet" href="../cdn/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_w3css.php'; ?>
<?php include '../include/before_content_w3css.php'; ?>

<article>
    <h1>W3.CSS <span class="color_h1">Отображение / Display</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_margins.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_buttons.php">Next &#10095;</a>
    </div>
    <hr>
    <p>Классы отображения (display) позволяют отображать элементы HTML в определенных позициях внутри других элементов HTML:</p>
    <div class="w3-display-container w3-green" style="height:250px;">
        <div class="w3-display-topleft w3-padding">Top Left</div>
        <div class="w3-display-topright w3-padding">Top Right</div>
        <div class="w3-display-bottomleft w3-padding">Bottom Left</div>
        <div class="w3-display-bottomright w3-padding">Bottom Right</div>
        <div class="w3-display-left w3-padding">Left</div>
        <div class="w3-display-right w3-padding">Right</div>
        <div class="w3-display-middle w3-padding">Middle</div>
        <div class="w3-display-topmiddle w3-hide-small w3-padding">Top Middle</div>
        <div class="w3-display-bottommiddle w3-hide-small w3-padding">Bottom Middle</div>
    </div>
    <hr>

    <h2>W3.CSS Классы отображения</h2>
    <p>W3.CSS предоставляет следующие классы отображения:</p>
    <table class="w3-table-all">
        <tr>
            <th>Класс</th>
            <th>Определяет</th>
        </tr>
        <tr>
            <td>w3-display-container</td>
            <td>Контейнер для w3-display-<em>классов</em></td>
        </tr>
        <tr>
            <td>w3-display-topleft</td>
            <td>Отображает содержимое в верхнем левом углу w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-topright</td>
            <td>Отображает содержимое в верхнем правом углу w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-bottomleft</td>
            <td>Отображает содержимое в левом нижнем углу w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-bottomright</td>
            <td>Отображает содержимое в правом нижнем углу w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-left</td>
            <td>Отображает содержимое слева (посередине слева) w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-right</td>
            <td>Отображает содержимое справа (посередине справа) w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-middle</td>
            <td>Отображает содержимое в середине (в центре) w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-topmiddle</td>
            <td>Отображает содержимое в верхней середине w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-bottommiddle</td>
            <td>Отображает содержимое в нижней середине w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-position</td>
            <td>Отображает содержимое в указанной позиции в контейнере w3-display-container</td>
        </tr>
        <tr>
            <td>w3-display-hover</td>
            <td>Отображает содержимое при наведении курсора внутри w3-display-container</td>
        </tr>
        <tr>
            <td>w3-left</td>
            <td>Плавающий элемент влево (float: left)</td>
        </tr>
        <tr>
            <td>w3-right</td>
            <td>Плавающий элемент вправо (float: right)</td>
        </tr>
        <tr>
            <td>w3-show</td>
            <td>Показывает элемент (display: block)</td>
        </tr>
        <tr>
            <td>w3-hide</td>
            <td>Скрывает элемент (display: none)</td>
        </tr>
        <tr>
            <td>w3-mobile</td>
            <td>Добавляет адаптивность любых элементов в первую очередь для мобильных устройств.<br>Отображает элементы в виде блочных элементов на мобильных устройствах</td>
        </tr>
    </table>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Примеры</h2>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-display-container w3-green&quot; style=&quot;height:300px;&quot;&gt;<br>
            &nbsp; &lt;div class=&quot;w3-display-topleft&quot;&gt;Top Left&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-display-topright&quot;&gt;Top Right&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-display-bottomleft&quot;&gt;Bottom Left&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-display-bottomright&quot;&gt;Bottom Right&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-left&quot;&gt;Left&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-right&quot;&gt;Right&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-display-middle&quot;&gt;Middle&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-display-topmiddle&quot;&gt;Top Mid&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-display-bottommiddle&quot;&gt;Bottom Mid&lt;/div&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_div.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Тот же пример, что и выше, с добавленным внутренним отступом (padding):</p>
    <div class="w3-display-container w3-green" style="height:250px;">
        <div class="w3-padding w3-display-topleft">Top Left</div>
        <div class="w3-padding w3-display-topright">Top Right</div>
        <div class="w3-padding w3-display-bottomleft">Bottom Left</div>
        <div class="w3-padding w3-display-bottomright">Bottom Right</div>
        <div class="w3-padding w3-display-left">Left</div>
        <div class="w3-padding w3-display-right">Right</div>
        <div class="w3-padding w3-display-middle">Middle</div>
        <div class="w3-padding w3-display-topmiddle w3-hide-small">Top Middle</div>
        <div class="w3-padding w3-display-bottommiddle w3-hide-small">Bottom Middle</div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-display-container w3-green&quot; style=&quot;height:300px;&quot;&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-topleft&quot;&gt;Top Left&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-topright&quot;&gt;Top Right&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-bottomleft&quot;&gt;Bottom Left&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-bottomright&quot;&gt;Bottom Right&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-padding w3-display-left&quot;&gt;Left&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-padding w3-display-right&quot;&gt;Right&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-middle&quot;&gt;Middle&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-topmiddle&quot;&gt;Top Mid&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-bottommiddle&quot;&gt;Bottom Mid&lt;/div&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_padded.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <p>Отображение текста внутри изображения:</p>
    <div class="w3-display-container w3-text-white">
        <img src="../images/img_lights.jpg" alt="Lights" style="width:100%;max-height:400px">
        <div class="w3-padding w3-display-topleft">Top Left</div>
        <div class="w3-padding w3-display-topright">Top Right</div>
        <div class="w3-padding w3-display-bottomleft">Bottom Left</div>
        <div class="w3-padding w3-display-bottomright">Bottom Right</div>
        <div class="w3-padding w3-display-topmiddle">Top Mid</div>
        <div class="w3-padding w3-display-left">Left</div>
        <div class="w3-padding w3-display-right">Right</div>
        <div class="w3-padding w3-display-middle">Middle</div>
        <div class="w3-padding w3-display-bottommiddle">Bottom Mid</div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-display-container&quot;&gt;<br>
            &nbsp; &lt;img src=&quot;img_lights.jpg&quot; alt=&quot;Lights&quot; style=&quot;width:100%&quot;&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-topleft&quot;&gt;Top Left&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-topright&quot;&gt;Top Right&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-bottomleft&quot;&gt;Bottom Left&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-bottomright&quot;&gt;Bottom Right&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-topmiddle&quot;&gt;Top Mid&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-padding w3-display-left&quot;&gt;Left&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-padding w3-display-right&quot;&gt;Right&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-middle&quot;&gt;Middle&lt;/div&gt;<br>
            &nbsp; &lt;div class=&quot;w3-padding w3-display-bottommiddle&quot;&gt;Bottom Mid&lt;/div&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_image.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Отображение при наведении</h2>
    <p>Класс <strong>w3-display-hover</strong> отображает содержимое при наведении курсора внутри w3-display-container (переход от скрытого к показанному).</p>

    <div class="w3-display-container w3-light-grey" style="height:250px;">
        <div class="w3-display-topleft w3-display-hover">Top Left</div>
        <div class="w3-display-topright w3-display-hover">Top Right</div>
        <div class="w3-display-bottomleft w3-display-hover">Bottom Left</div>
        <div class="w3-display-bottomright w3-display-hover">Bottom Right</div>
        <div class="w3-display-left w3-display-hover">Left</div>
        <div class="w3-display-right w3-display-hover">Right</div>
        <div class="w3-display-middle">Наведите курсор мыши на этот блок!</div>
        <div class="w3-display-topmiddle w3-display-hover">Top Mid</div>
        <div class="w3-display-bottommiddle w3-display-hover">Bottom Mid</div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-display-container w3-light-grey&quot; style=&quot;height:300px;&quot;&gt;<br>&nbsp;
            &lt;div class=&quot;w3-display-topleft w3-display-hover&quot;&gt;Top Left&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;w3-display-topright w3-display-hover&quot;&gt;Top Right&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;w3-display-bottomleft w3-display-hover&quot;&gt;Bottom Left&lt;/div&gt;<br>&nbsp;
            &lt;div class=&quot;w3-display-bottomright w3-display-hover&quot;&gt;Bottom Right&lt;/div&gt;<br>&nbsp;
            &lt;div class=&quot;w3-display-left w3-display-hover&quot;&gt;Left&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;w3-display-right w3-display-hover&quot;&gt;Right&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;w3-display-middle&quot;&gt;Наведите курсор мыши на этот блок!&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;w3-display-topmiddle w3-display-hover&quot;&gt;Top Mid&lt;/div&gt;<br>&nbsp; &lt;div
            class=&quot;w3-display-bottommiddle w3-display-hover&quot;&gt;Bottom Mid&lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_hover.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Классы <strong>w3-display-hover</strong> можно комбинировать с классами <a href="w3css_effects.php">эффектов</a> и <a href="w3css_animate.php">анимации</a> для создания крутых эффектов при наведении:</p>

    <div class="w3-content" style="max-width:800px">
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
                <div class="w3-display-container w3-hover-opacity" style="width:100%">
                    <img src="../images/img_avatar3.png" alt="Avatar" style="width:100%">
                    <div class="w3-display-middle w3-display-hover w3-xlarge">
                        <button type="button" class="w3-button w3-black">John Doe</button>
                    </div>
                </div>
            </div>
            <div class="w3-half">
                <div class="w3-display-container w3-opacity-min w3-hover-opacity-off" style="transition:0.5s;width:100%">
                    <img src="../images/img_pants.jpg" alt="Pants" style="width:100%">
                    <div class="w3-display-topleft w3-display-hover w3-large">
                        <button type="button" class="w3-white w3-animate-opacity w3-btn w3-margin w3-round" title="Save"><i class="fa fa-heart w3-text-red"></i></button>
                    </div>
                    <div class="w3-display-topleft w3-display-hover w3-large" style="left:65px">
                        <button type="button" class="w3-white w3-animate-opacity w3-btn w3-margin w3-round" title="Share"><i class="fa fa-paper-plane w3-text-grey"></i></button>
                    </div>
                    <div class="w3-display-topright w3-display-hover w3-large">
                        <button type="button" class="w3-white w3-animate-opacity w3-btn w3-margin w3-round" title="Shopping Cart"><i class="fa fa-shopping-cart w3-text-grey"></i></button>
                    </div>
                    <div class="w3-display-bottomleft w3-display-hover w3-large w3-text-white">
                        <div class="w3-padding w3-animate-opacity">Khaki pants, $19.99</div>
                    </div>
                    <div class="w3-display-middle w3-display-hover w3-large">
                        <button type="button" class="w3-green w3-animate-opacity w3-btn w3-round">Отобразить сейчас</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &nbsp;&lt;div class=&quot;w3-display-container w3-hover-opacity&quot;&gt;<br>&nbsp; &lt;img src=&quot;img_avatar.png&quot;
            alt=&quot;Avatar&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-display-middle w3-display-hover&quot;&gt;<br>&nbsp;&nbsp;&nbsp; &lt;button class=&quot;w3-button
            w3-black&quot;&gt;John Doe&lt;/button&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_hover_effects.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <p>Вы узнаете больше об анимации и эффектах позже в этом учебнике.</p>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Отображение флага</h2>
    <p>Приложив немного воображения, w3-display-классы можно использовать для создания флага:</p>
    <div class="w3-display-container w3-card-4" style="height:200px;width:340px">
        <div class="w3-red w3-display-topleft" style="width:25%;height:40%"></div>
        <div class="w3-red w3-display-topright" style="width:60%;height:40%"></div>
        <div class="w3-red w3-display-bottomleft" style="width:25%;height:40%"></div>
        <div class="w3-red w3-display-bottomright" style="width:60%;height:40%"></div>
    </div>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-display-container w3-card-4&quot; style=&quot;height:200px;width:350px&quot;&gt;<br>
            &nbsp;
            &lt;div class=&quot;w3-red w3-display-topleft&quot; style=&quot;width:25%;height:40%&quot;&gt;&lt;/div&gt;<br>
            &nbsp;
            &lt;div class=&quot;w3-red w3-display-topright&quot; style=&quot;width:60%;height:40%&quot;&gt;&lt;/div&gt;<br>
            &nbsp;
            &lt;div class=&quot;w3-red w3-display-bottomleft&quot; style=&quot;width:25%;height:40%&quot;&gt;&lt;/div&gt;<br>
            &nbsp;
            &lt;div class=&quot;w3-red w3-display-bottomright&quot; style=&quot;width:60%;height:40%&quot;&gt;&lt;/div&gt;<br>
            &lt;/div&gt;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_flag.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Плавающие классы / Float</h2>
    <p>Класс <strong>w3-left</strong> перемещает элемент влево, класс <strong>w3-right</strong> перемещает элемент вправо:</p>
    <div class="w3-container w3-light-grey" style="padding:0">
        <div class="w3-left w3-red w3-padding">w3-left</div>
        <div class="w3-right w3-blue w3-padding">w3-right</div>
    </div>
    <div class="w3-clear"></div>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;div class=&quot;w3-bar w3-light-grey&quot;&gt;<br>&nbsp; &lt;div class=&quot;w3-left
            w3-red&quot;&gt;w3-left&lt;/div&gt;<br>&nbsp; &lt;div class=&quot;w3-right w3-blue&quot;&gt;w3-right&lt;/div&gt;<br>&lt;/div&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_float.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <div class="w3-panel w3-note">
        <p><strong>Примечание:</strong> Clear float происходит с помощью класса <strong>w3-clear</strong> или помещение их в контейнер <strong>w3-container</strong>, как в примере выше (очищает float автоматически).</p>
    </div>
    <hr>
    <?php include '../include/adinfeed.php'; ?>

    <h2>Скрыть и показать</h2>
    <p>Принудительное отображение или скрытие элемента с помощью класса <strong>w3-show</strong> или <strong>w3-hide</strong>.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;p class=&quot;w3-show&quot;&gt;Я отображаюсь (display: block).&lt;/p&gt;<br>&lt;p class=&quot;w3-hide&quot;&gt;Я скрываюсь (display: none).&lt;/p&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_display_show.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>

    <p>Эти классы часто используются для переключения между скрытием и отображением элементов:</p>

    <script>
        function myFunction() {
            var x = document.getElementById("Demo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-white w3-padding w3-padding-16">
            <button onclick="myFunction()" class="w3-btn w3-black" style="box-shadow: none;">Переключить скрыть и показать</button>
            <p id="Demo" class="w3-hide w3-red w3-padding">Hello!</p>
        </div>
        <a class="w3-btn w3-margin-bottom w3-margin-top" href="../w3csstryit/tryw3css_display_show_toggle.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Класс w3-mobile</h2>
    <p>Класс <strong>w3-mobile</strong> добавляет mobile-first адаптивность (сначала мобильность) любому элементу.</p>
    <p>Он добавляет <code>display: block</code> и <code>width: 100%</code> к элементу на экранах шириной менее 600 пикселей.</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;button class=&quot;w3-button w3-mobile&quot;&gt;Ссылка&lt;/button&gt;</div>
        <a class="w3-btn w3-margin-bottom" href="../w3csstryit/tryw3css_w3-mobile.html" target='_blank'>Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="w3css_margins.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="w3css_buttons.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>