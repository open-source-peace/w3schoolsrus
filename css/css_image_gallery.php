<?php include '../include/head.php'; ?>

  <title>CSS Галлерея изображений. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='CSS Галлерея изображений. Как сделать галлерею изображений на сайте? Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        div.img {
            border: 1px solid #ccc;
        }

        div.img:hover {
            border: 1px solid #777;
        }
        div.img img {
            width: 100%;
            height: auto;
        }
        div.desc {
            padding: 15px;
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }
        @media only screen and (max-width: 700px){
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }
        @media only screen and (max-width: 500px){
            .responsive {
                width: 100%;
            }
        }
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>CSS <span class="color_h1">Галерея изображений</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_dropdowns.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_image_sprites.php">Next &#10095;</a>
    </div>
    <hr>
    <div class="w3-clear">
        <p class="intro">CSS можно использовать для создания галереи изображений.</p>

        <div class="responsive">
            <div class="img">
                <a target="_blank" href="../images/img_5terre_css.jpg" style="width: 300px;height: 200px">
                    <img src="../images/img_5terre_css.jpg" alt="Адаптивная галерея изображений">
                </a>
                <div class="desc">Добавьте описание изображения здесь</div>
            </div>
        </div>

        <div class="responsive">
            <div class="img">
                <a target="_blank" href="../images/img_forest.jpg" style="width: 300px;height: 200px">
                    <img src="../images/img_forest.jpg" alt="Адаптивная галерея изображений">
                </a>
                <div class="desc">Добавьте описание изображения здесь</div>
            </div>
        </div>

        <div class="responsive">
            <div class="img">
                <a target="_blank" href="../images/img_lights.jpg" style="width: 300px;height: 200px">
                    <img src="../images/img_lights.jpg" alt="Адаптивная галерея изображений">
                </a>
                <div class="desc">Добавьте описание изображения здесь</div>
            </div>
        </div>

        <div class="responsive">
            <div class="img">
                <a target="_blank" href="../images/img_mountains.jpg" style="width: 300px;height: 200px">
                    <img src="../images/img_mountains.jpg" alt="Адаптивная галерея изображений">
                </a>
                <div class="desc">Добавьте описание изображения здесь</div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
    <hr>

    <h2>Галерея изображений</h2>
    <p>Следующая галерея изображений создана с помощью CSS:</p>

    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate htmlHigh">
            &lt;html&gt;<br>
            &lt;head&gt;<br>
            &lt;style&gt;<br>
            div.gallery {<br>
            &nbsp;&nbsp;margin: 5px;<br>
            &nbsp; border: 1px solid #ccc;<br>
            &nbsp;&nbsp;float: left;<br>
            &nbsp;&nbsp;width: 180px;<br>
            }<br>
            <br>
            div.gallery:hover {<br>
            &nbsp;&nbsp;border: 1px solid #777;<br>
            }<br>
            <br>
            div.gallery img {<br>
            &nbsp;&nbsp;width: 100%;<br>
            &nbsp;&nbsp;height: auto;<br>
            }<br>
            <br>
            div.desc {<br>
            &nbsp; padding: 15px;<br>
            &nbsp; text-align: center;<br>
            }<br>
            &lt;/style&gt;<br>
            &lt;/head&gt;<br>
            &lt;body&gt;<br>
            <br>
            &lt;div class=&quot;gallery&quot;&gt;<br>&nbsp; &lt;a target=&quot;_blank&quot; href=&quot;../images/img_5terre.jpg&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;img src=&quot;../images/img_5terre.jpg&quot; alt=&quot;Cinque Terre&quot; width=&quot;600&quot; height=&quot;400&quot;&gt;<br>&nbsp;
            &lt;/a&gt;<br>&nbsp; &lt;div class=&quot;desc&quot;&gt;Добавьте описание изображения здесь&lt;/div&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class=&quot;gallery&quot;&gt;<br>&nbsp; &lt;a target=&quot;_blank&quot; href=&quot;../images/img_forest.jpg&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;img src=&quot;../images/img_forest.jpg&quot; alt=&quot;Forest&quot; width=&quot;600&quot; height=&quot;400&quot;&gt;<br>&nbsp;
            &lt;/a&gt;<br>&nbsp; &lt;div class=&quot;desc&quot;&gt;Добавьте описание изображения здесь&lt;/div&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class=&quot;gallery&quot;&gt;<br>&nbsp; &lt;a target=&quot;_blank&quot; href=&quot;../images/img_lights.jpg&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;img src=&quot;../images/img_lights.jpg&quot; alt=&quot;Northern Lights&quot; width=&quot;600&quot; height=&quot;400&quot;&gt;<br>&nbsp;
            &lt;/a&gt;<br>&nbsp; &lt;div class=&quot;desc&quot;&gt;Добавьте описание изображения здесь&lt;/div&gt;<br>
            &lt;/div&gt;<br><br>&lt;div class=&quot;gallery&quot;&gt;<br>&nbsp; &lt;a target=&quot;_blank&quot; href=&quot;../images/img_mountains.jpg&quot;&gt;<br>&nbsp;&nbsp;&nbsp;
            &lt;img src=&quot;../images/img_mountains.jpg&quot; alt=&quot;Mountains&quot; width=&quot;600&quot; height=&quot;400&quot;&gt;<br>&nbsp;
            &lt;/a&gt;<br>&nbsp; &lt;div class=&quot;desc&quot;&gt;Добавьте описание изображения здесь&lt;/div&gt;<br>
            &lt;/div&gt;<br>
            <br>
            &lt;/body&gt;<br>
            &lt;/html&gt;
        </div>
        <a target="_blank" href="../csstryit/trycss_image_gallery.html" class="w3-btn w3-margin-bottom">Попробуйте сами &raquo;</a>
    </div>
    <hr>

    <h2>Больше примеров</h2>
    <div class="w3-example">
        <h3>Адаптивная галерея изображений</h3>
        <p>Как использовать медиа-запросы CSS для создания отзывчивой галереи изображений, которая будет хорошо смотреться на настольных компьютерах, планшетах и смартфонах.</p>
        <div class="w3-white">
            <img src="../images/responsiveImgGallery.jpg" style="width:100%" alt="Адаптивная галерея изображений">
        </div>
        <a target="_blank" class="w3-btn w3-margin-top w3-margin-bottom" href="../csstryit/trycss_image_gallery_responsive.html">Попробуйте сами &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_dropdowns.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_image_sprites.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>