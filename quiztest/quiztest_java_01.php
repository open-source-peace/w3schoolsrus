<?php include '../include/head_quiztest.php'; ?>

<title>Java Викторина. Проверочные тесты. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Java Викторина. Проверочные тесты. Оценка знаний по Java. W3Schools на русском'>
<link rel='stylesheet' href='../styles/quiztest.css'>
<link rel='stylesheet' href='../styles/bigbtn.css'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_quiztest.php'; ?>
<?php include '../include/before_content_quiztest.php'; ?>

  <article>
      <h1>Java Викторина</h1>
      <div id="quizmain">
          <div id="quizcontainer">
              <script src="../scripts/quiztest.js"></script>
              <h3>Вопрос 1 из 25:</h3>
              <p id="qtext"><strong>Каков правильный синтаксис для вывода "Hello World" в Java?</strong></p>
              <form role="form" id="quizform" name="quizform" action='https://www.w3schools.com/quiztest/quiztest.asp?qtest=JAVA' method='post'>
                  <input type="hidden" name="starttime" value="01/01/2021 00:00:00 AM">
                  <input type="hidden" name="answers" value="0000000000000000000000000">
                  <input type="hidden" name="nextnumber">
                  <input type="hidden" name="prevnumber" value="1">
                  <div style="position:relative;width:100%;">
                      <div id="altcontainer" class="notranslate">
                          <label class="radiocontainer" id="label2"> print ("Hello World");<input type="radio" name="quiz" id="2" onclick="clickRadio(this)" value="2"><span class="checkmark"></span></label><label class="radiocontainer" id="label3"> Console.WriteLine("Hello World");<input type="radio" name="quiz" id="3" onclick="clickRadio(this)" value="3"><span class="checkmark"></span></label><label class="radiocontainer" id="label1"> System.out.println("Hello World");<input type="radio" name="quiz" id="1" onclick="clickRadio(this)" value="1"><span class="checkmark"></span></label><label class="radiocontainer" id="label4"> echo("Hello World");<input type="radio" name="quiz" id="4" onclick="clickRadio(this)" value="4"><span class="checkmark"></span></label>
                      </div>
                  </div>
                  <div id="answerbuttoncontainer">
                      <button class="answerbutton w3-btn" type="submit" onclick="clickNextButton(1)">Далее &#10095;</button>
                      <input type="text" readonly id="timespent" value="0:00">
                  </div>
              </form>
              <hr>
              <p><b>Примечание.</b> Здесь представлено только начало Викторины. Продолжение на сайте W3Schools.com.</p>
              <div class="w3-panel w3-note linktotutdiv">
                  <h4>Изучите язык программирования Java с помощью <a href="../java/index.php">Java Учебника</a> на нашем сайте <strong>W3Schools на русском</strong>.</h4>
              </div>
          </div>
      </div>
    <?php include '../include/addown_content.php'; ?>
    <?php include '../include/footer_cert.php'; ?>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar_quiztest.php'; ?>
<?php include '../include/footer.php'; ?>