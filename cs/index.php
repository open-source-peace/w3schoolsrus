<?php include '../include/head_cs.php'; ?>

<title>C# Учебник. <?php include '../include/title.php'; ?></title>
<meta name='description' content='C# Учебник. Что такое язык программирования C# (Си шарп)? Уроки для начинающих. W3Schools на русском'>
    <link rel="canonical" href="https://w3schoolsrus.github.io/cs/index.php" />
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cs.php'; ?>
<?php include '../include/before_content_cs.php'; ?>

 <article>
     <h1>C# <span class='color_h1'>Учебник</span></h1>
     <div class='w3-clear nextprev'>
         <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
         <a class='w3-right w3-btn' href='cs_intro.php'>Next &#10095;</a>
     </div>

     <div class='w3-panel w3-info intro'>
         <p><strong>C# (C-Sharp)</strong> - это язык программирования, разработанный Microsoft и работающий на .NET Framework.</p>
         <p><strong>C#</strong> используется для разработки веб-приложений, настольных приложений, мобильных приложений, игр и многого другого.</p>
         <a class='w3-btn w3-margin-bottom shadow-black-1' href='cs_intro.php'>Начать изучение C# немедленно &raquo;</a>
     </div>
     <hr>

     <h2>Примеры в каждой главе</h2>
     <p>Наш редактор <span style='color:darkblue'><b>&quot;Попробуйте сами&quot;</b></span> упрощает изучение C#. Вы можете редактировать код C# и просматривать результат в своём браузере.</p>

     <div class='w3-example'>
         <h3>Пример</h3>
         <pre class='language-csharp w3-white'><code>using System;

namespace HelloWorld
{
  class Program
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Hello World!");
    }
  }
}</code></pre>
         <p>
             <a target='_blank' class='w3-btn' href='trycs.html?filename=demo_helloworld'>Попробуйте сами &raquo;</a>
         </p>
     </div>

     <p><b>Кликните на кнпоку &quot;Выполнить пример&quot; чтобы увидеть, как она работает.</b></p>
     <div class='w3-panel w3-note'>
         <p>Мы рекомендуем изучать темы этого учебника в последовательности, указанной в левом меню (или открыв меню бургер, если вы пользуетесь мобильными гаджетами).</p>
     </div>
     <hr>
     <div>
         <h2>C# Упражнения</h2>
         <form autocomplete='off' spellcheck='false' id='w3-exerciseform' action='https://www.w3schools.com/cs/exercise.asp?filename=exercise_syntax1' method='post' target='_blank'>
             <h2 class='shadow-black-1'>Проверьте себя с помощью упражнений</h2>
             <div class='exercisewindow'>
                 <h2>Упражнение:</h2>
                 <p>Вставьте недостающую часть кода ниже, чтобы вывести "Hello World!".</p>
                 <div class='exerciseprecontainer'>
<pre style='overflow: auto;'>
static void <input name='ex1' maxlength='4' style='width: 45px;'>(string[] args)
{
  <input name='ex2' maxlength='7' style='width: 75px;'>.<input name='ex3' maxlength='9' style='width: 93px;'>("Hello World!");
}
</pre>
                 </div>
                 <br>
                 <button type='submit' class='w3-btn w3-margin-bottom'>Отправить ответ &raquo;</button>
             </div>
         </form>
     </div>
     <hr>

     <h2>Учиться на примерах</h2>
     <p>Учитесь на примерах! Этот учебник дополняет все пояснения поясняющими примерами.</p>
     <p><a href='cs_examples.php' class='w3-button w3-light-grey'>Смотреть все C# Примеры</a></p>
     <hr>

     <h2>C# Викторина</h2>
     <p>Учитесь, пройдя викторину! Викторина даст вам сигнал о том, насколько хорошо вы знаете или не знаете C#.</p>
     <p><a href='cs_quiz.php' class='w3-button w3-blue shadow-black-1'>Начать C# Викторину</a></p>
     <hr>
     <div class='w3-clear nextprev'>
         <a class='w3-left w3-btn' href='../index.php'>&#10094; Home</a>
         <a class='w3-right w3-btn' href='cs_intro.php'>Next &#10095;</a>
     </div>
 </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar_cs.php'; ?>
<?php include '../include/footer.php'; ?>