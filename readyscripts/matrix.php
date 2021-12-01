<?php include '../include/head.php'; ?>

<title>Буквы из Матрицы на веб-странице с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать буквы из Матрицы на веб-странице с помощью JavaScript? Ваш компьютер заражен коронавирусом (COVID-19) и будет уничтожен. Стилизация с применением CSS. Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Бегущие буквы из Матрицы</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="horrorstory.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="buttonmore.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <a href="img/matrixletters.gif"><img src="img/matrixletters.gif" alt="Бегущие буквы из фильма Матрица на веб-странице" class="w3-right" width="75"></a>
    <h3>Бегущие буквы из фильма &quot;Матрица&quot; с помощью JavaScript</h3>
    <p>С помощью данного скрипта можно выводить на экран <strong>бегущие вертикальные буквы, идентичные буквам</strong> из фильма <strong>Матрица</strong>. Скопируйте данный код и вставьте в нужном месте на веб-странице между тегами <code class="w3-codespan">&lt;body&gt;</code> и <code class="w3-codespan">&lt;/body&gt;</code>.</p>
    <div class="w3-example">
        <h3>Пример кода</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var glyphs=['img/p1.gif','img/p2.gif','img/p3.gif','img/p4.gif','img/p5.gif','img/p6.gif','img/p7.gif','img/p8.gif','img/p9.gif','img/p10.gif'];<br>
            var glyphs_b=['img/p1b.gif','img/p2b.gif','img/p3b.gif','img/p4b.gif','img/p5b.gif','img/p6b.gif','img/p7b.gif','img/p8b.gif','img/p9b.gif','img/p10b.gif'];<br>
            <br>
            var glyphCount=400;      // Общее число глифов<br>
            var scrollSpeed=200;      // Скорость анимации. Чем меньше число - тем быстрее<br>
            var glyphD=25;           // Ширина и высота изображения глифа<br>
            var disableColors=false; // Установите в true, чтобы отключить «яркие» изображения (лучшая производительность). Установите в false, чтобы включить их.<br>
            <br>
            //*** НЕ РЕДАКТИРУЙТЕ ТО, ЧТО НИЖЕ ***\\<br>
            var w3c=(document.getElementById)?true:false;<br>
            var ns4=(document.layers)?true:false;<br>
            var ie4=(document.all && !w3c)?true:false;<br>
            var ie5=(document.all && w3c)?true:false;<br>
            var ns6=(w3c && navigator.appName.indexOf("Netscape")>=0)?true:false;<br>
            var ids=new Array();<br>
            var wWidth, wHeight, colHeight;<br>
            var t='';<br>
            var counter=0;<br>
            var gx=new Array();<br>
            var ga=new Array();<br>
            <br>
            for(i=0;i&lt;glyphCount;i++){<br>
            gx[i]=Math.floor(Math.random()*glyphs.length);<br>
            t+=(ns4)?'&lt;layer name="glyph'+i+'" top="-'+glyphD+'" left="0" width="'+glyphD+'" height="'+glyphD+'" z-index="1">':'&lt;div id="glyph'+i+'" style="position:absolute; top:-'+glyphD+'px; left:0px; width:'+glyphD+'px; height:'+glyphD+'px; z-index:1"&gt;';<br>
            t+='&lt;img src="'+glyphs[gx[i]]+'" width='+glyphD+' height='+glyphD+' name="g'+i+'"&gt;';<br>
            t+=(ns4)?'&lt;/layer>':'&lt;/div&gt;';<br>
            }<br>
            document.write(t);<br>
            <br>
            for(i=0;i&lt;glyphs.length;i++){<br>
            ga[i]=new Image();<br>
            ga[i].src=glyphs_b[i];<br>
            }<br>
            <br>
            function matrixInit(){<br>
            getWindowDims();<br>
            for(i=0;i&lt;glyphCount;i++){<br>
            ids[i]=(ns4)?document.layers['glyph'+i]:(ie4)?document.all['glyph'+i]:document.getElementById('glyph'+i);<br>
            ids[i].gx=gx[i];<br>
            }<br>
            gx='';<br>
            //setInterval('scrollGlyphs()',10*scrollSpeed);<br>
            scrollGlyphs();<br>
            }<br>
            <br>
            function brighten(idnum,b){<br>
            if(ns4) ids[idnum].document.images['g'+idnum].src=(b)?glyphs_b[ids[idnum].gx]:glyphs[ids[idnum].gx];<br>
            else document.images['g'+idnum].src=(b)?glyphs_b[ids[idnum].gx]:glyphs[ids[idnum].gx];<br>
            }<br>
            <br>
            function moveID(idnum,x,y){<br>
            var id=ids[idnum];<br>
            if(ns4)id.moveTo(x,y);<br>
            else{<br>
            id.style.left=x+'px';<br>
            id.style.top=y+'px';<br>
            }<br>
            if(!disableColors){<br>
            brighten(idnum,true);<br>
            setTimeout('brighten('+idnum+',false)',scrollSpeed*2);//1.3);<br>
            }}<br>
            <br>
            function getWindowDims(){<br>
            //wWidth=(ie4||ie5)? document.body.clientWidth:window.innerWidth;<br>
            wHeight=(ie4||ie5)? document.body.clientHeight:window.innerHeight;<br>
            wHeight-=30;<br>
            wWidth=230;<br>
            //wHeight=200;<br>
            colHeight=Math.floor(Math.random()*Math.min(Math.floor(wHeight/1.8/glyphD)-1,25)+20)-7;//-2;<br>
            //colHeight=25;<br>
            }<br>
            <br>
            function scrollGlyphs(){<br>
            //var sx=(ie4||ie5)? document.body.scrollLeft:window.pageXOffset;<br>
            var sy=(ie4||ie5)? document.body.scrollTop:window.pageYOffset;<br>
            <br>
            var pixx=Math.floor(Math.random()*wWidth/(glyphD+1))*glyphD;//+sx;<br>
            //var pixx=10;<br>
            var pixy=Math.floor(Math.random()*(wHeight-(colHeight*glyphD)))+sy;//+100;<br>
            //var pixy=100;<br>
            <br>
            for(i=0; i&lt;colHeight; i++){<br>
            setTimeout('moveID('+counter+','+pixx+','+(pixy+glyphD*i)+')', scrollSpeed*i);<br>
            counter=((counter+colHeight)&gt;glyphCount)?Math.floor(glyphCount/2):counter+1;//0:counter+1;<br>
            }<br>
            //setTimeout('scrollGlyphs()', scrollSpeed*colHeight/2);<br>
            //<br>
            //colHeight=Math.floor(Math.random()*Math.min(Math.floor(wHeight/1.3/glyphD)-1,25));<br>
            //<br>
            setTimeout('scrollGlyphs()', scrollSpeed*50);<br>
            }<br>
            <br>
            window.onload=matrixInit;<br>
            window.onresize=getWindowDims;<br>
            &lt;/script&gt;
        </div>
    </div>
    <p>Также установите цвет фона страницы <b>черный</b> с помощью кода:</p>
    <div class="w3-code notranslate htmlHigh">&lt;body style="background-color:#000;"&gt;</div>
    <hr>
    <h3>Результат работы скрипта</h3>
    <p>Результат работы данного скрипта можно посмотреть в <a href="matrix_ex.html" target="_blank">отдельном окне</a>.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="horrorstory.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="buttonmore.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>