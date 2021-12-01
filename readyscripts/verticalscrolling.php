<?php include '../include/head.php'; ?>

<title>Вертикальная прокрутка изображений с помощью JavaScript. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Как сделать вертикальную прокрутку изображений с помощью JavaScript? Скачать бесплатно готовые скрипты для сайта. Готовые решения. Эффекты на сайте. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_readyscripts.php'; ?>
<?php include '../include/before_content_readyscripts.php'; ?>

<article>
    <h1>Вертикальная прокрутка изображений</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="backgroundchange.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomimage.php" title="Следующая страница">Next &#10095;</a>
    </div>
    <hr>
    <h3>Вертикальная прокрутка изображений (скроллинг) на веб-странице с помощью JavaScript</h3>
    <p>При помощи данного скрипта можно сделать слайд-шоу в виде вертикальной прокрутки (скроллинга) изображений на веб-странице. Регулируется время задержки и количество слайдов. Можете скопировать данный код и вставить в нужное место на веб-странице.</p>
    <div class="w3-example">
        <h3>Пример</h3>
        <div class="w3-code notranslate jsHigh">
            &lt;script&gt;<br>
            var scrollerwidth='410px'<br>
            var scrollerheight='300px'<br>
            var pausebetweenimages=2000<br>
            //2000 miliseconds=2 seconds<br>
            <br>
            var slideimages=new Array()<br>
            slideimages[0]='&lt;a href="https://w3schoolsrus.github.io/" target=_"blank"&gt;&lt;img src="img01.jpg">&lt;/a&gt;'<br>
            slideimages[1]='&lt;a href="https://w3schoolsrus.github.io/" target=_"blank"&gt;&lt;img src="img02.jpg">&lt;/a&gt;'<br>
            slideimages[2]='&lt;a href="https://w3schoolsrus.github.io/" target=_"blank"&gt;&lt;img src="img03.jpg">&lt;/a&gt;'<br>
            slideimages[3]='&lt;a href="https://w3schoolsrus.github.io/" target=_"blank"&gt;&lt;img src="img04.jpg">&lt;/a&gt;'<br>
            slideimages[4]='&lt;a href="https://w3schoolsrus.github.io/" target=_"blank"&gt;&lt;img src="img05.jpg">&lt;/a&gt;'<br>
            <br>
            // Код ниже лучше не редактировать! //<br>
            <br>
            var ie=document.all<br>
            var dom=document.getElementById<br>
            <br>
            if (slideimages.length&gt;2)<br>
            i=2<br>
            else<br>
            i=0<br>
            <br>
            function move1(whichlayer){<br>
            tlayer=eval(whichlayer)<br>
            if (tlayer.top>0&&tlayer.top<=5){<br>
            tlayer.top=0<br>
            setTimeout("move1(tlayer)",pausebetweenimages)<br>
            setTimeout("move2(document.main.document.second)",pausebetweenimages)<br>
            return<br>
            }<br>
            if (tlayer.top>=tlayer.document.height*-1){<br>
            tlayer.top-=5<br>
            setTimeout("move1(tlayer)",50)<br>
            }<br>
            else{<br>
            tlayer.top=parseInt(scrollerheight)<br>
            tlayer.document.write(slideimages[i])<br>
            tlayer.document.close()<br>
            if (i==slideimages.length-1)<br>
            i=0<br>
            else<br>
            i++<br>
            }<br>
            }<br>
            <br>
            function move2(whichlayer){<br>
            tlayer2=eval(whichlayer)<br>
            if (tlayer2.top>0&&tlayer2.top<=5){<br>
            tlayer2.top=0<br>
            setTimeout("move2(tlayer2)",pausebetweenimages)<br>
            setTimeout("move1(document.main.document.first)",pausebetweenimages)<br>
            return<br>
            }<br>
            if (tlayer2.top>=tlayer2.document.height*-1){<br>
            tlayer2.top-=5<br>
            setTimeout("move2(tlayer2)",50)<br>
            }<br>
            else{<br>
            tlayer2.top=parseInt(scrollerheight)<br>
            tlayer2.document.write(slideimages[i])<br>
            tlayer2.document.close()<br>
            if (i==slideimages.length-1)<br>
            i=0<br>
            else<br>
            i++<br>
            }<br>
            }<br>
            <br>
            function move3(whichdiv){<br>
            tdiv=eval(whichdiv)<br>
            if (parseInt(tdiv.style.top)>0&&parseInt(tdiv.style.top)<=5){<br>
            tdiv.style.top=0+"px"<br>
            setTimeout("move3(tdiv)",pausebetweenimages)<br>
            setTimeout("move4(second2_obj)",pausebetweenimages)<br>
            return<br>
            }<br>
            if (parseInt(tdiv.style.top)>=tdiv.offsetHeight*-1){<br>
            tdiv.style.top=parseInt(tdiv.style.top)-5+"px"<br>
            setTimeout("move3(tdiv)",50)<br>
            }<br>
            else{<br>
            tdiv.style.top=scrollerheight<br>
            tdiv.innerhtml=slideimages[i]<br>
            if (i==slideimages.length-1)<br>
            i=0<br>
            else<br>
            i++<br>
            }<br>
            }<br>
            <br>
            function move4(whichdiv){<br>
            tdiv2=eval(whichdiv)<br>
            if (parseInt(tdiv2.style.top)>0&&parseInt(tdiv2.style.top)<=5){<br>
            tdiv2.style.top=0+"px"<br>
            setTimeout("move4(tdiv2)",pausebetweenimages)<br>
            setTimeout("move3(first2_obj)",pausebetweenimages)<br>
            return<br>
            }<br>
            if (parseInt(tdiv2.style.top)>=tdiv2.offsetHeight*-1){<br>
            tdiv2.style.top=parseInt(tdiv2.style.top)-5+"px"<br>
            setTimeout("move4(second2_obj)",50)<br>
            }<br>
            else{<br>
            tdiv2.style.top=scrollerheight<br>
            tdiv2.innerhtml=slideimages[i]<br>
            if (i==slideimages.length-1)<br>
            i=0<br>
            else<br>
            i++<br>
            }<br>
            }<br>
            <br>
            function startscroll(){<br>
            if (ie||dom){<br>
            first2_obj=ie? first2 : document.getElementById("first2")<br>
            second2_obj=ie? second2 : document.getElementById("second2")<br>
            move3(first2_obj)<br>
            second2_obj.style.top=scrollerheight<br>
            second2_obj.style.visibility='visible'<br>
            }<br>
            <br>
            else if (document.layers){<br>
            document.main.visibility='show'<br>
            move1(document.main.document.first)<br>
            document.main.document.second.top=parseInt(scrollerheight)+5<br>
            document.main.document.second.visibility='show'<br>
            }<br>
            }<br>
            window.onload=startscroll<br>
            &lt;/script&gt;<br>
            <br>
            &lt;ilayer id="main" width=&{scrollerwidth}; height=&{scrollerheight}; visibility=hide&gt;<br>
            &lt;layer id="first" left=0 top=1 width=&{scrollerwidth};&gt;<br>
            &lt;script&gt;<br>
            if (document.layers)<br>
            document.write(slideimages[0])<br>
            &lt;/script&gt;<br>
            &lt;/layer&gt;<br>
            &lt;layer id="second" left=0 top=0 width=&{scrollerwidth}; visibility=hide&gt;<br>
            &lt;script language="Javascript1.2"&gt;<br>
            if (document.layers)<br>
            document.write(slideimages[dyndetermine=(slideimages.length==1)? 0 : 1])<br>
            &lt;/script&gt;<br>
            &lt;/layer&gt;<br>
            &lt;/ilayer&gt;<br>
            <br>
            &lt;script&gt;<br>
            if (ie||dom){<br>
            document.writeln('&lt;div id="main2" style="position:relative;width:'+scrollerwidth+';height:'+scrollerheight+';overflow:hidden;"&gt;')<br>
            document.writeln('&lt;div style="position:absolute;width:'+scrollerwidth+';height:'+scrollerheight+';clip:rect(0 '+scrollerwidth+' '+scrollerheight+' 0);left:0px;top:0px"&gt;')<br>
            document.writeln('&lt;div id="first2" style="position:absolute;width:'+scrollerwidth+';left:0px;top:1px;"&gt;')<br>
            document.write(slideimages[0])<br>
            document.writeln('&lt;/div&gt;')<br>
            document.writeln('&lt;div id="second2" style="position:absolute;width:'+scrollerwidth+';left:0px;top:0px;visibility:hidden"&gt;')<br>
            document.write(slideimages[dyndetermine=(slideimages.length==1)? 0 : 1])<br>
            document.writeln('&lt;/div&gt;')<br>
            document.writeln('&lt;/div&gt;')<br>
            document.writeln('&lt;/div&gt;')<br>
            }<br>
            &lt;/script&gt;
        </div>
        <p>Вставьте данный скрипт на веб-страницу между тегами <code>&lt;body&gt;</code> и <code>&lt;/body&gt;</code>, а также укажите правильный путь к изображениям.</p>
    </div>
    <h3>Результат:</h3>
    <a href="verticalscrolling_ex.html" target="_blank">Посмотреть в отдельном окне.</a>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="backgroundchange.php" title="Предыдущая страница">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="randomimage.php" title="Следующая страница">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>