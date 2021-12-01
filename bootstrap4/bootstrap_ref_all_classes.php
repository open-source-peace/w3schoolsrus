<?php include '../include/head_bootstrap.php'; ?>
  <title>Bootstrap 4 Справочник. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Bootstrap 4. Полный справочник. Бесплатные уроки онлайн для начинающих. W3Schools на русском языке'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_bootstrap4.php'; ?>
<?php include '../include/before_content_bootstrap.php'; ?>

  <article>
    <h1>Bootstrap 4 <span class='color_h1'>Справочник</span> классов</h1>
    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='bootstrap_templates.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='bootstrap_ref_js_alert.php'>Next &#10095;</a>
    </div>
    <hr>
    <h2>Полный список всех классов Bootstrap 4</h2>
    <p>Полный список всех CSS-классов Bootstrap 4 с описанием и примерами:</p>

    <input class='w3-input w3-border w3-padding' type='text' placeholder='Поиск по имени класса..' id='myInput' onkeyup='myFunction()'>
    <div class='w3-responsive'>
      <table class='w3-table-all notranslate' id='myTable'>
        <thead>
        <tr class='w3-white'>
          <th style='width:25%;cursor:pointer;user-select:none;'>Класс <i class='fa fa-sort' style='font-size:13px;'></i></th>
          <th style='width:51%;' onclick='javascript:void(0)'>Описание</th>
          <th style='width:7%;' onclick='return false;'>Пример</th>
          <th style='width:17%;cursor:pointer;user-select:none;'>Категория <i class='fa fa-sort' style='font-size:13px;'></i></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td><code>.active</code></td>
          <td>Adds a white text color to the active link in a <strong>navbar</strong>.</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_color&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.active</code></td>
          <td>Adds a blue background color to the active <strong>list item</strong> in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Groups</a></td>
        </tr>
        <tr>
          <td><code>.active</code></td>
          <td>Adds a dark-blue background color to simulate a 'pressed' <strong>button</strong></td>
          <td>
            <a href='tryit.html?filename=trybs_button_active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.active</code></td>
          <td>Adds a blue background color to the active <strong>dropdown item</strong> in a dropdown</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.active</code></td>
          <td>Adds a blue background color to the active <strong>pagination</strong> link (to highlight the current page)</td>
          <td>
            <a href='tryit.html?filename=trybs_pagination_active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.active</code></td>
          <td>Displays/shows the current <strong>carousel</strong> item</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td>.<code>alert</code></td>
          <td>Creates an alert message box</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-danger</code></td>
          <td>Red alert. Indicates a dangerous or potentially negative action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-dark</code></td>
          <td>Dark alert. Dark grey alert box</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-dismissible</code></td>
          <td>Indicates a closable alert box. Together with the <code>.close</code> class, this class is used to   close the alert (adds extra padding)</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert_close2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-heading</code></td>
          <td>Adds <code>color:inherit</code> to the specified element</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert_heading&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-info</code></td>
          <td>Teal alert. Indicates a neutral informative change or action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-light</code></td>
          <td>Light alert. Light grey alert box</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-link</code></td>
          <td>Used on links inside alerts to provide matching colored links</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-primary</code></td>
          <td>Blue alert. Indicates an important action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-secondary</code></td>
          <td>Grey alert. Indicates a 'less' important action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-success</code></td>
          <td>Green alert. Indicates a successful or positive action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.alert-warning</code></td>
          <td>Yellow alert. Indicates caution should be taken with this action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_js_alert&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.align-baseline</code></td>
          <td>The element is aligned with the baseline of the parent. This is default</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_util_align&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.align-bottom</code></td>
          <td>The element is aligned with the lowest element on the line</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_util_align&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.align-middle</code></td>
          <td>	The element is placed in the middle of the parent element</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_util_align&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.align-top</code></td>
          <td>The element is aligned with the top of the tallest element on the line</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_util_align&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.align-text-top</code></td>
          <td>The element is aligned with the top of the parent element's font</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_util_align&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.align-text-bottom</code></td>
          <td>The element is aligned with the bottom of the parent element's font</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_util_align&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.align-content-around</code></td>
          <td>Align gathered items 'around'</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-*-around</code></td>
          <td>Align gathered items 'around' on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content-around-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-center</code></td>
          <td>Align gathered items in the center</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-*-center</code></td>
          <td>Align gathered items in the center on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content-center-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-end</code></td>
          <td>Align gathered items at the end</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-*-end</code></td>
          <td>Align gathered items at the end on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content-end-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-start</code></td>
          <td>Align gathered items from the start</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-*-start</code></td>
          <td>Align gathered items from the start on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content-start-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-stretch</code></td>
          <td>Stretch gathered items</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-content-*-stretch</code></td>
          <td>Stretch gathered items on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-content-stretch-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-start</code></td>
          <td>Align single rows of items from the start</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-*-start</code></td>
          <td>Align single rows of items from the start on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items-start-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-end</code></td>
          <td>Align single rows of items at the end</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-*-end</code></td>
          <td>Align single rows of items at the end on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items-end-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-center</code></td>
          <td>Align single rows of items in the center</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-*-center</code></td>
          <td>Align single rows of items in the center on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items-center-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-baseline</code></td>
          <td>Align single rows of items at the baseline</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-*-baseline</code></td>
          <td>Align single rows of items at the baseline on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items-baseline-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-stretch</code></td>
          <td>Stretch single rows of items</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-items-*-stretch</code></td>
          <td>Stretch single rows of items on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-items-stretch-responsive&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-start</code></td>
          <td>Align a flex item from the start</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-*-start</code></td>
          <td>Align a flex item from the start on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self-start-responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-end</code></td>
          <td>Align a flex item at the end</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-*-end</code></td>
          <td>Align a flex item at the end on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-end-start-responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-center</code></td>
          <td>Align a flex item in the center</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-*-center</code></td>
          <td>Align a flex item in the center on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self-center-responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-baseline</code></td>
          <td>Align a flex item at the baseline</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-*-baseline</code></td>
          <td>Align a flex item at the baseline on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self-baseline-responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-stretch</code></td>
          <td>Stretch a flex item</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.align-self-*-stretch</code></td>
          <td>Stretch a flex item on different screens</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_flex-align-self-stretch-responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.badge</code></td>
          <td>Creates a circular badge (grey circle - often used as a numerical indicator)</td>
          <td>
            <a href='tryit.html?filename=trybs_badges&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-danger</code></td>
          <td>Red badge. Indicates a dangerous or potentially negative action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-dark</code></td>
          <td>Dark badge. Dark grey alert box</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-info</code></td>
          <td>Teal badge. Indicates a neutral informative change or action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-light</code></td>
          <td>Light badge. Light grey alert box</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-pill</code></td>
          <td>Makes a badge more round</td>
          <td>
            <a href='tryit.html?filename=trybs_badges_pills&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-primary</code></td>
          <td>Blue badge. Indicates an important action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-secondary</code></td>
          <td>Grey badge. Indicates a 'less' important action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-success</code></td>
          <td>Green badge. Indicates a successful or positive action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.badge-warning</code></td>
          <td>Yellow badge. Indicates caution should be taken with this action</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_badges2&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_badges.php'>Badges</a></td>
        </tr>
        <tr>
          <td><code>.bg-danger</code></td>
          <td>Adds a red background color to an element. Represents danger or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.bg-dark</code></td>
          <td>Adds a dark grey background color to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.bg-info</code></td>
          <td>Adds a teal background color to an element. Represents some information</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.bg-light</code></td>
          <td>Adds a light grey background color to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.bg-primary</code></td>
          <td>Adds a blue background color to an element. Represents something important</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.bg-secondary</code></td>
          <td>Adds a grey background color to an element. Indicates a 'less' important action</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.bg-success</code></td>
          <td>Adds a green background color to an element. Indicates success or a positive action</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.bg-warning</code></td>
          <td>Adds a yellow/orange background color to an element. Represents a warning or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.blockquote</code></td>
          <td>Styles quoted blocks of content from another source (adds a larger font-size (1.25rem))</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_blockquote&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.blockquote-footer</code></td>
          <td>Styles the source title inside the blockquote (light grey text with indentation)</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_blockquote&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.border</code></td>
          <td>Adds a border to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-bottom-0</code></td>
          <td>Removes the bottom border from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-danger</code></td>
          <td>Adds a red border to an element (indicates danger)</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-dark</code></td>
          <td>Adds a dark border to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-info</code></td>
          <td>Adds a teal border to an element (indicates information)</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-left-0</code></td>
          <td>Removes the left border from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-light</code></td>
          <td>Adds a light grey border to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-primary</code></td>
          <td>Adds a blue border to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-right-0</code></td>
          <td>Removes the right border from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-top-0</code></td>
          <td>Removes the top border from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-secondary</code></td>
          <td>Adds a grey border to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-success</code></td>
          <td>Adds a green border to an element (indicates success)</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-warning</code></td>
          <td>Adds a orange border to an element (indicates warning)</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-white</code></td>
          <td>Adds a white border to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.border-0</code></td>
          <td>Removes all borders from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.breadcrumb</code></td>
          <td>A pagination. Indicates the current page's location within a navigational hierarchy</td>
          <td>
            <a href='tryit.html?filename=trybs_breadcrumbs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.breadcrumb-item</code></td>
          <td>Styles list items or links inside the breadcrumb</td>
          <td>
            <a href='tryit.html?filename=trybs_breadcrumbs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.btn</code></td>
          <td>Creates a basic button (gray background and rounded corners)</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-block</code></td>
          <td>Creates a block level button that spans the entire width of the parent element</td>
          <td>
            <a href='tryit.html?filename=trybs_button_block&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-dark</code></td>
          <td>Dark grey button</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-danger</code></td>
          <td>Red button. Indicates danger or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-group</code></td>
          <td>Groups buttons together on a single line</td>
          <td>
            <a href='tryit.html?filename=trybs_button_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_button_groups.php'>Button Groups</a></td>
        </tr>
        <tr>
          <td><code>.btn-group-lg</code></td>
          <td>Large button group (makes all buttons in a button group larger - increased font-size and padding)</td>
          <td>
            <a href='tryit.html?filename=trybs_button_group_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_button_groups.php'>Button Groups</a></td>
        </tr>
        <tr>
          <td><code>.btn-group-sm</code></td>
          <td>Small button group (makes all buttons in a button group smaller)</td>
          <td>
            <a href='tryit.html?filename=trybs_button_group_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_button_groups.php'>Button Groups</a></td>
        </tr>
        <tr>
          <td><code>.btn-group-vertical</code></td>
          <td>Makes a button group appear vertically stacked</td>
          <td>
            <a href='tryit.html?filename=trybs_button_group_v&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_button_groups.php'>Button Groups</a></td>
        </tr>
        <tr>
          <td><code>.btn-info</code></td>
          <td>Teal button. Represents a neutral informative change or action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-light</code></td>
          <td>Light grey button</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-link</code></td>
          <td>Makes a button look like a link (get button behavior)</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-lg</code></td>
          <td>Large button</td>
          <td>
            <a href='tryit.html?filename=trybs_button_sizes&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-outline-dark</code></td>
          <td>Dark grey bordered/outlined button</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-outline-danger</code></td>
          <td>Red bordered/outlined button. Indicates danger or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>

        <tr>
          <td><code>.btn-outline-info</code></td>
          <td>Teal bordered/outlined button. Represents a neutral informative change or action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-outline-light</code></td>
          <td>Light grey bordered/outlined button</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>

        <tr>
          <td><code>.btn-outline-primary</code></td>
          <td>Blue bordered/outlined button.</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>

        <tr>
          <td><code>.btn-outline-secondary</code></td>
          <td>Grey bordered/outlined button. Indicates a 'less' important action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-outline-success</code></td>
          <td>Green bordered/outlined button. Indicates success or a positive action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>

        <tr>
          <td><code>.btn-outline-warning</code></td>
          <td>Orange bordered/outlined button. Represents warning or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_outline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>

        <tr>
          <td><code>.btn-primary</code></td>
          <td>Blue button. Indicates a something important</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-sm</code></td>
          <td>Small button</td>
          <td>
            <a href='tryit.html?filename=trybs_button_sizes&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-secondary</code></td>
          <td>Grey button. Indicates a 'less' important action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-success</code></td>
          <td>Green button. Indicates success or a positive action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.btn-toolbar</code></td>
          <td>Combine sets of button groups into button toolbars for more complex components</td>
          <td>
            <a href='tryit.html?filename=trybs_button_toolbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_button_groups.php'>Button Groups</a></td>
        </tr>
        <tr>
          <td><code>.btn-warning</code></td>
          <td>Orange button. Represents warning or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.card</code></td>
          <td>Creates a card</td>
          <td>
            <a href='tryit.html?filename=trybs_card&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-body</code></td>
          <td>Container for card content</td>
          <td>
            <a href='tryit.html?filename=trybs_card&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-columns</code></td>
          <td>Container to create a masonry-like grid of cards</td>
          <td>
            <a href='tryit.html?filename=trybs_card_columns&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-danger</code></td>
          <td>Adds a red background color to the card. Represents danger or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-dark</code></td>
          <td>Adds a grey background color to the card</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-deck</code></td>
          <td>Container to create a grid of cards that are of equal height and width</td>
          <td>
            <a href='tryit.html?filename=trybs_card_deck&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-footer</code></td>
          <td>Card footer</td>
          <td>
            <a href='tryit.html?filename=trybs_card_header&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-group</code></td>
          <td>Container to create a grid of cards that are of equal height and width, <strong>without side margins</strong></td>
          <td>
            <a href='tryit.html?filename=trybs_card_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-header</code></td>
          <td>Card header</td>
          <td>
            <a href='tryit.html?filename=trybs_card_header&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-header-tabs</code></td>
          <td>Styles navigation tabs inside the card header</td>
          <td>
            <a href='tryit.html?filename=trybs_card_tabs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-header-pills</code></td>
          <td>Styles navigation pills inside the card header</td>
          <td>
            <a href='tryit.html?filename=trybs_card_pills&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-img-bottom</code></td>
          <td>Place the image at the bottom inside a card</td>
          <td>
            <a href='tryit.html?filename=trybs_card_image&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-img-overlay</code></td>
          <td>Turns an image into a card background. Often used to add text on top of the image</td>
          <td>
            <a href='tryit.html?filename=trybs_card_image_overlay&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-img-top</code></td>
          <td>Place the image at the top inside a card</td>
          <td>
            <a href='tryit.html?filename=trybs_card_image&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-info</code></td>
          <td>Adds a teal background color to the card. Represents some information</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-light</code></td>
          <td>Adds a light grey background color to the card</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-link</code></td>
          <td>Adds a blue color to any link and a hover effect inside the card</td>
          <td>
            <a href='tryit.html?filename=trybs_card_title&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-primary</code></td>
          <td>Adds a blue background color to the card. Represents something important</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-secondary</code></td>
          <td>Adds a grey background color to the card. Represents something 'less' important</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-subtitle</code></td>
          <td>The <code>.card-subtitle</code> is used after a <code>.card-title</code>, and adds the following to an element: <code>margin-top: -.375rem; margin-bottom: 0;</code></td>
          <td>
            <a href='tryit.html?filename=trybs_card_subtitle&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-success</code></td>
          <td>Adds a green background color to the card. Indicates success or a positive action</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-text</code></td>
          <td>Used to remove bottom margins for a p element if it is the last child (or the only one), inside <code>.card-body</code></td>
          <td>
            <a href='tryit.html?filename=trybs_card_title&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-title</code></td>
          <td>Adds a title to any heading element inside the card</td>
          <td>
            <a href='tryit.html?filename=trybs_card_title&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.card-warning</code></td>
          <td>Adds a yellow/orange background color to the card. Represents a warning or a negative action</td>
          <td>
            <a href='tryit.html?filename=trybs_card_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_cards.php'>Cards</a></td>
        </tr>
        <tr>
          <td><code>.carousel</code></td>
          <td>Creates a carousel (slideshow)</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-caption</code></td>
          <td>Creates a caption text for each slide in the carousel</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-control-next</code></td>
          <td>Container for 'next' carousel/item link</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-control-next-icon</code></td>
          <td>Used together with <code>.carousel-control-next</code> to create a 'next' icon/button (right-pointed arrow)</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-control-prev</code></td>
          <td>Container for 'previous' carousel/item link</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-control-prev-icon</code></td>
          <td>Used together with <code>.carousel-control-prev</code> to create a 'previous' icon/button (left-pointed arrow)</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-indicators</code></td>
          <td>Adds little dots/indicators at the bottom of each slide (which indicates how many slides there is in the carousel, and which slide the user are currently viewing)</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-inner</code></td>
          <td>Container for slide items</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.carousel-item</code></td>
          <td>Specifies the content of each slide</td>
          <td>
            <a href='tryit.html?filename=trybs_carousel2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
        </tr>
        <tr>
          <td><code>.clearfix</code></td>
          <td>Clears floats</td>
          <td>
            <a href='tryit.html?filename=trybs_util_float&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilites.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.close</code></td>
          <td>Styles a close icon. This is often used for alerts and modals. Often used together with the &amp;times; symbol to create the actual icon (a better looking 'x'). It floats right by default</td>
          <td>
            <a href='tryit.html?filename=trybs_util_close&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilites.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.col-auto</code></td>
          <td>Make form columns automatically size themselves based on their content</td>
          <td>
            <a href='tryit.html?filename=trybs_form_col_auto&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.col-*</code></td>
          <td>Creates a column layout for extra small devices (<strong>and up/all devices</strong>, if not combined with other column classes). The <code class='w3-codespan'>*</code> can be a number between 1 and 12</td>
          <td>
            <a href='tryit.html?filename=trybs_grid_xs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.col-sm-*</code></td>
          <td>Creates a column layout for small devices (<strong>and up</strong>, if not combined with other column classes). The <code class='w3-codespan'>*</code> can be a number between 1 and 12</td>
          <td>
            <a href='tryit.html?filename=trybs_grid_small&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.col-md-*</code></td>
          <td>Creates a column layout for medium devices (<strong>and up</strong>, if not combined with other column classes). The <code class='w3-codespan'>*</code> can be a number between 1 and 12</td>
          <td>
            <a href='tryit.html?filename=trybs_grid_medium&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.col-lg-*</code></td>
          <td>Creates a column layout for large devices (<strong>and up</strong>, if not combined with other column classes). The <code class='w3-codespan'>*</code> can be a number between 1 and 12</td>
          <td>
            <a href='tryit.html?filename=trybs_grid_large&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.col-xl-*</code></td>
          <td>Creates a column layout for extra large devices. The <code class='w3-codespan'>*</code> can be a number between 1 and 12</td>
          <td>
            <a href='tryit.html?filename=trybs_grid_xlarge&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.collapse</code></td>
          <td>Indicates collapsible content - which can be hidden or shown on demand</td>
          <td>
            <a href='tryit.html?filename=trybs_collapsible&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_collapse.php'>Collapse</a></td>
        </tr>
        <tr>
          <td><code>.collapse show</code></td>
          <td>Show the collapsible content by default</td>
          <td>
            <a href='tryit.html?filename=trybs_collapsible_in&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_collapse.php'>Collapse</a></td>
        </tr>
        <tr>
          <td><code>.container</code></td>
          <td>Fixed width container with widths determined by screen sites. Equal margin on the left and right.</td>
          <td>
            <a href='tryit.html?filename=trybs_gs_container2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_containers.php'>Containers</a></td>
        </tr>
        <tr>
          <td><code>.container-fluid</code></td>
          <td>A container that spans the full width of the screen</td>
          <td>
            <a href='tryit.html?filename=trybs_gs_container-fluid&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_containers.php'>Containers</a></td>
        </tr>
        <tr>
          <td><code>.container-*</code></td>
          <td>Responsive containers</td>
          <td>
            <a href='tryit.html?filename=trybs_container_resp&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_containers.php'>Containers</a></td>
        </tr>
        <tr>
          <td><code>.custom-checkbox</code></td>
          <td>A wrapper/container for custom checkboxes</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-control</code></td>
          <td>A wrapper/container for custom forms</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-control-input</code></td>
          <td>Customized form control</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-control-inline</code></td>
          <td>Inline (horizontally - side by side) customized form controls</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_inline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-control-label</code></td>
          <td>Customized label, when used together with a custom form control</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-file</code></td>
          <td>Customized file upload</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_file&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-file-input</code></td>
          <td>Customized file upload</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_file&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-file-label</code></td>
          <td>Customized file label</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_file&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-radio</code></td>
          <td>A wrapper/container for custom radio buttons</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_radio&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-range</code></td>
          <td>Customized range control</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_range&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-select</code></td>
          <td>Customized select menu</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_select&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-select-lg</code></td>
          <td>Large customized select menu</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_select_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-select-sm</code></td>
          <td>Small customized select menu</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_select_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.custom-switch</code></td>
          <td>Customized toggle switch</td>
          <td>
            <a href='tryit.html?filename=trybs_form_custom_switch&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_custom.php'>Custom Forms</a></td>
        </tr>
        <tr>
          <td><code>.disabled</code></td>
          <td>Disables a <strong>button</strong> (adds opacity and a 'no-parking-sign' icon on hover)</td>
          <td>
            <a href='tryit.html?filename=trybs_button_active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
        </tr>
        <tr>
          <td><code>.disabled</code></td>
          <td>Disables a <strong>dropdown</strong> item (adds a grey text color and a 'no-parking-sign' icon on hover)</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.disabled</code></td>
          <td>Disables a <strong>pagination</strong> link (cannot be clicked - adds a grey text color and a 'no-parking-sign' icon on hover)</td>
          <td>
            <a href='tryit.html?filename=trybs_pagination_disabled&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.disabled</code></td>
          <td>Disables a <strong>list</strong> item in a list group (cannot be clicked - adds a light grey color and removes the hover effect on list item links)</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_disabled&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Groups</a></td>
        </tr>
        <tr>
          <td><code>.dropdown</code></td>
          <td>Creates a toggleable menu that allows the user to choose one value from a predefined list</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-menu&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropdown-divider</code></td>
          <td>Used to separate links in the dropdown menu with a thin horizontal border</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-divider&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropdown-header</code></td>
          <td>Used to add headers inside the dropdown menu</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-header&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropdown-item</code></td>
          <td>Creates a dropdown item (added to links or buttons inside .dropdown-menu)</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-menu&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropdown-item-text</code></td>
          <td>Used to add plain text to a dropdown item, or used on links for default link styling</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-text&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropdown-menu</code></td>
          <td>Adds the default styles for the dropdown menu container</td><td>
            <a href='tryit.html?filename=trybs_dropdown-menu&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropdown-menu-right</code></td>
          <td>Right-aligns a dropdown menu</td><td>
            <a href='tryit.html?filename=trybs_dropdown-menu-right&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropdown-toggle</code></td>
          <td>Used on the button that should hide and show (toggle) the dropdown menu</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-menu&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropleft</code></td>
          <td>Left-aligns the dropdown</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropright</code></td>
          <td>Right-aligns the dropdown</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-right&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.dropup</code></td>
          <td>Indicates a dropup menu (upwards instead of downwards)</td>
          <td>
            <a href='tryit.html?filename=trybs_dropdown-menu-dropup&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
        </tr>
        <tr>
          <td><code>.d-block</code></td>
          <td>Creates a block element (adds <code>display:block</code>)</td>
          <td>
            <a href='tryit.html?filename=trybs_util_display-block&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-*-block</code></td>
          <td>Creates a block element on a specific screen width</td>
          <td>
            <a href='tryit.html?filename=trybs_util_display-block' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-inline</code></td>
          <td>Makes an element inline</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_inline&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-*-inline</code></td>
          <td>Makes an element inline on a specific screen size</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_inline_responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-inline-block</code></td>
          <td>Makes an element inline block</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_inline-block&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-*-inline-block</code></td>
          <td>Makes an element inline block on a specific screen size</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_inline-blockr'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-flex</code></td>
          <td>Creates a flexbox container and transforms direct children into flex items</td>
          <td>
            <a href='tryit.html?filename=trybs_flex&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.d-*-flex</code></td>
          <td>Creates a flexbox container on a specific screen size</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.d-inline-flex</code></td>
          <td>Creates an inline flexbox container</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-inline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.d-*-inline-flex</code></td>
          <td>Creates an inline flexbox container on a specific screen size</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-inline-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.d-none</code></td>
          <td>Hides an element</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_none&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-*-none</code></td>
          <td>Hides an element on a specific screen size</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_none_responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-table</code></td>
          <td>Makes an element display as a table</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_table&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-*-table</code></td>
          <td>Makes an element display as a table on a specific screen size</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_table_responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-table-cell</code></td>
          <td>Makes an element display as a table cell</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_table&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-*-table-cell</code></td>
          <td>Makes an element display as a table cell on a specific screen size</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_table_responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-table-row</code></td>
          <td>Makes an element display as a table row</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_table&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.d-*-table-row</code></td>
          <td>Makes an element display as a table row on a specific screen size</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_display_table_responsive'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.embed-responsive</code></td>
          <td>Container for embedded content. Makes videos or slideshows scale properly on any device</td>
          <td>
            <a href='tryit.html?filename=trybs_responsive_embed_4by3&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
        </tr>
        <tr>
          <td><code>.embed-responsive-16by9</code></td>
          <td>Container for embedded content. Creates an 16:9 aspect ratio embedded content</td>
          <td>
            <a href='tryit.html?filename=trybs_responsive_embed&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
        </tr>
        <tr>
          <td><code>.embed-responsive-3by4</code></td>
          <td>Container for embedded content. Creates an 3:4 aspect ratio embedded content</td>
          <td>
            <a href='tryit.html?filename=trybs_responsive_embed_3by4&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
        </tr>
        <tr>
          <td><code>.embed-responsive-item</code></td>
          <td>Used inside <code>.embed-responsive</code>. Scales the video nicely to the parent element</td>
          <td>
            <a href='tryit.html?filename=trybs_responsive_embed&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
        </tr>
        <tr>
          <td><code>.fade</code></td>
          <td>Adds a fading effect when closing an alert box</td>
          <td>
            <a href='tryit.html?filename=trybs_alerts_fade&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
        </tr>
        <tr>
          <td><code>.fade</code></td>
          <td>Adds a fading effect when showing tab/pill content</td>
          <td>
            <a href='tryit.html?filename=trybs_nav_tabs_toggleable&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navs.php'>Navs</a></td>
        </tr>
        <tr>
          <td><code>.fade</code></td>
          <td>Adds a fading effect when opening a modal</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_js_modal-fade&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modal</a></td>
        </tr>
        <tr>
          <td><code>.fixed-bottom</code></td>
          <td>Makes an element stay at the bottom of the screen (sticky/fixed)</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_fixed_bottom&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.fixed-top</code></td>
          <td>Makes an element stay at the top of the screen (sticky/fixed)</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_fixed&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.flex-column</code></td>
          <td>Display flex items vertically</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-direction-col&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-column</code></td>
          <td>Display flex items vertically on different screen sizes:</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-column-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-column-reverse</code></td>
          <td>Display flex items vertically, reversed</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-direction-col&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-column-reverse</code></td>
          <td>Display flex items vertically, reversed, on different screen sizes</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-column-reverse-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-fill</code></td>
          <td>Used on flex items to force it/them into equal width columns</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-fill&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-fill</code></td>
          <td>Force flex items into equal widths on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-fill-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-grow-0|1</code></td>
          <td>Used on a single flex item to take up the rest of the available space</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-grow&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-nowrap</code></td>
          <td>Don't wrap flex items</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-wrap' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-nowrap</code></td>
          <td>Don't wrap items on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-nowrap-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-shrink-0|1</code></td>
          <td>Used on a single flex item to shrink it if necessary</td>
          <td>
            &nbsp;
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-row</code></td>
          <td>Display flex items horizontally (side by side)</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-direction&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-row</code></td>
          <td>Display flex items horizontally on a specific screen size</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-row-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-row-reverse</code></td>
          <td>Display flex items right-aligned and horizontally</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-direction&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-row-reverse</code></td>
          <td>Display flex items right-aligned and horizontally on a specific screen size</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-row-reverse-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-wrap</code></td>
          <td>Wrap flex items</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-wrap' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-wrap</code></td>
          <td>Wrap items on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-wrap-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-wrap-reverse</code></td>
          <td>Wrap flex items, in reversed order</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-wrap' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.flex-*-wrap-reverse</code></td>
          <td>Wrap flex items, in reversed order on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-wrap-reverse-responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.float-left</code></td>
          <td>Floats an element to the left</td>
          <td>
            <a href='tryit.html?filename=trybs_util_float&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.float-*-left</code></td>
          <td>Floats an element to the left on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_util_float-left_resp&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.float-none</code></td>
          <td>Remove floats from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_float_resp&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.float-right</code></td>
          <td>Floats an element to the right</td>
          <td>
            <a href='tryit.html?filename=trybs_util_float&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.float-*-right</code></td>
          <td>Floats an element to the left on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_util_float_resp&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.font-italic</code></td>
          <td><i>Italic</i> text</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_font-weight&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.font-weight-bold</code></td>
          <td><span style='font-weight:bolder !important'>Bold</span> text</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_font-weight&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.font-weight-bolder</code></td>
          <td><b>Bolder</b> text  (font-weight:bolder)</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_font-weight&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.font-weight-light</code></td>
          <td><span class='font-weight-lighter'>Light weight text (font-weight:300) </span></td>
          <td>
            <a href='tryit.html?filename=trybs_txt_font-weight&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.font-weight-lighter</code></td>
          <td><span class='font-weight-lighter'>Lighter weight text (font-weight:lighter) </span></td>
          <td>
            <a href='tryit.html?filename=trybs_txt_font-weight&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.font-weight-normal</code></td>
          <td>Normal text (font-weight:400)</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_font-weight&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.form-check</code></td>
          <td>Container for checkboxes. Adds proper padding</td>
          <td>
            <a href='tryit.html?filename=trybs_form_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-check-inline</code></td>
          <td>Makes checkboxes appear on the same line (horizontally)</td>
          <td>
            <a href='tryit.html?filename=trybs_form_checkbox_inline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-check-input</code></td>
          <td>Styles checkboxes with proper margins</td>
          <td>
            <a href='tryit.html?filename=trybs_form_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-check-label</code></td>
          <td>Ensures proper margins for labels used together with checkboxes</td>
          <td>
            <a href='tryit.html?filename=trybs_form_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-control</code></td>
          <td>Used on input, textarea, and select elements to span the entire width of the page and make them responsive</td>
          <td>
            <a href='tryit.html?filename=trybs_form_basic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-control-file</code></td>
          <td>Adds <code class='w3-codespan'>display:block</code> and <code class='w3-codespan'>width:100%</code> to input filed with type='file'</td>
          <td>
            <a href='tryit.html?filename=trybs_form-control-range&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-control-lg</code></td>
          <td>Large form control</td>
          <td>
            <a href='tryit.html?filename=trybs_form-control-size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-control-plaintext</code></td>
          <td>Styles a form control as plain text</td>
          <td>
            <a href='tryit.html?filename=trybs_form-control-plaintext&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-control-range</code></td>
          <td>Adds <code class='w3-codespan'>display:block</code> and <code class='w3-codespan'>width:100%</code> to input filed with type='range'</td>
          <td>
            <a href='tryit.html?filename=trybs_form-control-range&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-control-sm</code></td>
          <td>Small form control</td>
          <td>
            <a href='tryit.html?filename=trybs_form-control-size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-group</code></td>
          <td>Container for form input and label</td>
          <td>
            <a href='tryit.html?filename=trybs_form_basic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-inline</code></td>
          <td>Makes a &lt;form&gt; left-aligned with inline-block controls (This only
            applies to forms within viewports that are at least 768px wide)</td>
          <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_form-inline&stacked=h'>Попробуй это</a></td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.form-row</code></td>
          <td>Container for responsive columns (less left and right margins than <code class='w3-codespan'>.row</code>/overrides default column gutters)</td>
          <td>
            <a href='tryit.html?filename=trybs_form_grid2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.h1 - .h6</code></td>
          <td>Makes an element look like a heading of the chosen class (h1-h6)</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_hn&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.h-25</code></td>
          <td>Sets the height of an element to 25%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_height&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.h-50</code></td>
          <td>Sets the height of an element to 50%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_height&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.h-75</code></td>
          <td>Sets the height of an element to 75%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_height&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.h-100</code></td>
          <td>Sets the height of an element to 100%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_height&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.img-fluid</code></td>
          <td>Responsive image (adds max-width:100% and height:auto)</td>
          <td>
            <a href='tryit.html?filename=trybs_img_responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
        </tr>
        <tr>
          <td><code>.img-thumbnail</code></td>
          <td>Shapes an image to a thumbnail (thin light grey borders)</td>
          <td>
            <a href='tryit.html?filename=trybs_img_thumbnail&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
        </tr>
        <tr>
          <td><code>.initialism</code></td>
          <td>Displays the text inside an <code>&lt;abbr&gt;</code> element in a slightly smaller font size</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_abbr2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.input-group</code></td>
          <td>Container to enhance an input by adding an icon, text or a button in front or behind the input field as a 'help text'</td>
          <td>
            <a href='tryit.html?filename=trybs_form_input_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_input_group.php'>Input Group</a></td>
        </tr>
        <tr>
          <td><code>.input-group-append</code></td>
          <td>Input group container for adding help text behind an input field</td>
          <td>
            <a href='tryit.html?filename=trybs_form_input_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_input_group.php'>Input Group</a></td>
        </tr>
        <tr>
          <td><code>.input-group-lg</code></td>
          <td>Large input group</td>
          <td>
            <a href='tryit.html?filename=trybs_form_input_group_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_input_group.php'>Input Group</a></td>
        </tr>
        <tr>
          <td><code>.input-group-prepend</code></td>
          <td>Input group container for adding help text in front of an input field</td>
          <td>
            <a href='tryit.html?filename=trybs_form_input_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_input_group.php'>Input Group</a></td>
        </tr>
        <tr>
          <td><code>.input-group-sm</code></td>
          <td>Small input group</td>
          <td>
            <a href='tryit.html?filename=trybs_form_input_group_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_input_group.php'>Input Group</a></td>
        </tr>
        <tr>
          <td><code>.input-group-text</code></td>
          <td>Styles the specified help text in an input group</td>
          <td>
            <a href='tryit.html?filename=trybs_form_input_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_input_group.php'>Input Group</a></td>
        </tr>
        <tr>
          <td><code>.input-lg</code></td>
          <td>Large input field</td>
          <td>
            <a href='tryit.html?filename=trybs_input_height&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_sizing.php'>Input Sizing</a></td>
        </tr>
        <tr>
          <td><code>.input-sm</code></td>
          <td>Small input field</td>
          <td>
            <a href='tryit.html?filename=trybs_input_height&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms_sizing.php'>Input Sizing</a></td>
        </tr>
        <tr>
          <td><code>.invalid-feedback</code></td>
          <td>Creates a custom validation message used in validated forms (red text color)</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_was&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.invalid-tooltip</code></td>
          <td>Creates a custom validation message used in validated forms (red tooltip)</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_tooltip&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.invisible</code></td>
          <td>Make an element invisible</td>
          <td>
            <a href='tryit.html?filename=trybs_util_visibility&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.is-invalid</code></td>
          <td>Validates a form element (adds a red border to input fields). Note: for server side</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_server&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.is-valid</code></td>
          <td>Validates a form element (adds a green border to input fields). Note: for server side</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_server&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.jumbotron</code></td>
          <td>Creates a padded grey heading/box with rounded corners that enlarges the font sizes of the text inside it. Used for calling extra attention to some special content or information</td>
          <td>
            <a href='tryit.html?filename=trybs_jumbotron&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_jumbotron.php'>Jumbotron</a></td>
        </tr>
        <tr>
          <td><code>.jumbotron-fluid</code></td>
          <td>Creates a full-width jumbotron (grey padded heading) without rounded borders</td>
          <td>
            <a href='tryit.html?filename=trybs_jumbotron2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_jumbotron.php'>Jumbotron</a></td>
        </tr>
        <tr>
          <td><code>.justify-content-*</code></td>
          <td>Aligns flex items from the <strong>start</strong>, at the <strong>end</strong>,
            <strong>centered</strong>, in <strong>between</strong> and '<strong>around</strong>'</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-justify&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.justify-content-*-around</code></td>
          <td>Aligns flex items 'around' on different screen sizes</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-justify-around-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.justify-content-*-between</code></td>
          <td>Aligns flex items in 'between' on different screen sizes</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-justify-between-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.justify-content-*-center</code></td>
          <td>Aligns flex items in the center on different screen sizes</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-justify-center-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.justify-content-*-end</code></td>
          <td>Aligns flex items at the end on different screen sizes</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-justify-end-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.justify-content-*-start</code></td>
          <td>Aligns flex items from the start on different screen sizes</td>
          <td>
            <a href='tryit.html?filename=trybs_flex-justify-start-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_flex.php'>Flex</a></td>
        </tr>
        <tr>
          <td><code>.lead</code></td>
          <td>Increase the font size and line height of a paragraph</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_lead&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.list-group</code></td>
          <td>Creates a bordered list group for <code>&lt;li&gt;</code> elements</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-flush</code></td>
          <td>Removes some borders and rounded corners from list items in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_flush&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-horizontal</code></td>
          <td>Display list items horizontally instead of vertically (side-by-side instead of on top of each other)</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_horizontal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-horizontal-*</code></td>
          <td>Display list items horizontally instead of vertically on different screen sizes</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_horizontal_responsive' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item</code></td>
          <td>Added to each <code>&lt;li&gt;</code> element in the list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-action</code></td>
          <td>Added to links inside the list group to make them stand out on hover (darker background)</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context_links&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-danger</code></td>
          <td>Red background color for a list item in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-dark</code></td>
          <td>Dark grey background color for a list item in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-info</code></td>
          <td>Light-blue background color for a list item in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-light</code></td>
          <td>Light grey background color for a list item in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-primary</code></td>
          <td>Blue background color for a list item in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-success</code></td>
          <td>Green background color for a list item in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-group-item-warning</code></td>
          <td>Yellow background color for a list item in a list group</td>
          <td>
            <a href='tryit.html?filename=trybs_list_group_context&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
        </tr>
        <tr>
          <td><code>.list-inline</code></td>
          <td>Places all list items on a single line (used together with
            <code>.list-inline-item</code> on each &lt;li&gt; elements)</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_list-inline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.list-inline-item</code></td>
          <td>Places all list items on a single line (used together with
            <code>.list-inline</code> on the parent &lt;ul&gt; element)</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_list-inline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.list-unstyled</code></td>
          <td>Removes all default list-style (bullets, left margin, etc.) styling from a <code>
              &lt;ul&gt;</code> or <code>&lt;ol&gt;</code> list</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_list-unstyled&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.mark</code></td>
          <td>Highlights text: <span class='mark'>Highlighted text</span></td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_mark&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.media</code></td>
          <td>Aligns media objects together with content (like images or videos - often used for comments in a blog post etc)</td>
          <td>
            <a href='tryit.html?filename=trybs_media' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_media_objects.php'>Media Objects</a></td>
        </tr>
        <tr>
          <td><code>.media-body</code></td>
          <td>Container for media content</td>
          <td>
            <a href='tryit.html?filename=trybs_media' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_media_objects.php'>Media Objects</a></td>
        </tr>
        <tr>
          <td><code>.modal</code></td>
          <td>Identifies the content as a modal and brings focus to it</td>
          <td>
            <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-body</code></td>
          <td>Defines the style for the body of the modal. Add any HTML markup here (p, img, etc)</td>
          <td>
            <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-content</code></td>
          <td>Styles the modal (border, background-color, etc). Inside this, add the modal's header, body and footer, if needed</td>
          <td>
            <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-dialog-centered</code></td>
          <td>Centers the modal vertically and horizontally within the page</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_js_modal-centered&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-dialog-scrollable</code></td>
          <td>Adds a scrollbar inside the modal</td>
          <td>
            <a href='tryit.html?filename=trybs_modal_scroll2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-footer</code></td>
          <td>The footer of the modal (often contains an action button and a close button)</td>
          <td>
            <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-header</code></td>
          <td>The header of the modal (often contains a title and a close button)</td>
          <td>
            <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-lg</code></td>
          <td>Large modal (wider than default)</td>
          <td>
            <a href='tryit.html?filename=trybs_modal_lg&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-sm</code></td>
          <td>Small modal (less width)</td>
          <td>
            <a href='tryit.html?filename=trybs_modal_sm&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.modal-xl</code></td>
          <td>Extra large modal</td>
          <td>
            <a href='tryit.html?filename=trybs_modal_xl&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
        </tr>
        <tr>
          <td><code>.m-# / m-*-#</code></td>
          <td>Responsive margin classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_spacing&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.mt-# / mt-*-#</code></td>
          <td>Responsive top margin classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_mt-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.mb-# / mb-*-#</code></td>
          <td>Responsive bottom margin classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_mb-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.ml-# / ml-*-#</code></td>
          <td>Responsive left margin classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_ml-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.mr-# / mr-*-#</code></td>
          <td>Responsive right margin classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_mr-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.mx-# / mx-*-#</code></td>
          <td>Responsive left and right margin auto (horizontal) classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_mx-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.my-# / my-*-#</code></td>
          <td>Responsive top and bottom margin auto (vertical) classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_my-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.mx-auto</code></td>
          <td>Centers an element horizontally</td>
          <td>
            <a href='tryit.html?filename=trybs_util_center&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.nav nav-tabs</code></td>
          <td>Creates a tabbed menu</td>
          <td>
            <a href='tryit.html?filename=trybs_nav_tabs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navs.php'>Tabs</a></td>
        </tr>
        <tr>
          <td><code>.nav nav-pills</code></td>
          <td>Creates a pill menu</td>
          <td>
            <a href='tryit.html?filename=trybs_nav_pills&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navs.php'>Tabs</a></td>
        </tr>
        <tr>
          <td><code>.nav-justified</code></td>
          <td>Justifies tab/pill links with an equal width</td>
          <td>
            <a href='tryit.html?filename=trybs_nav_justified&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navs.php'>Tabs</a></td>
        </tr>
        <tr>
          <td><code>.navbar</code></td>
          <td>Creates a navigation bar</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-nav</code></td>
          <td>Container for navigation links inside the .navbar container</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-brand</code></td>
          <td>Added to a link or a header element inside the navbar to represent a logo or a header</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_brand&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-collapse</code></td>
          <td>Collapses the navbar (hidden and replaced with a menu/hamburger icon on mobile phones and small tablets)</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_collapse&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-expand-*</code></td>
          <td>Responsive collapsible class - stacks the navbar vertically on small (sm), medium (md), large (lg) or extra large (xl) screens</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-dark</code></td>
          <td>Adds a white text color to all links in the navbar</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_color&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-light</code></td>
          <td>Adds a black text color to all links in the navbar</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_color&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-text</code></td>
          <td>Vertically align any elements inside the navbar that are not links (ensures proper padding)</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_text&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.navbar-toggler</code></td>
          <td>Styles the button that should open the navbar on small screens. Automatically styled as a hamburger/three bars</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_collapse&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.nav-link</code></td>
          <td>Used to style links/anchors inside the navbar</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.nav-item</code></td>
          <td>Used to style list items inside the navbar</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
        </tr>
        <tr>
          <td><code>.needs-validation</code></td>
          <td>Adds validation styles to a submitted form</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_needs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.no-gutters</code></td>
          <td>Remove gutters/extra space from columns</td>
          <td>
            <a href='tryit.html?filename=trybs_grid_nogutters&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.page-item</code></td>
          <td>Styles list items inside a pagination</td>
          <td>
            <a href='tryit.html?filename=trybs_pagination&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.page-link</code></td>
          <td>Styles links inside a pagination</td>
          <td>
            <a href='tryit.html?filename=trybs_pagination&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.pagination</code></td>
          <td>Creates a pagination (Useful when you have a web site with lots of pages</td>
          <td>
            <a href='tryit.html?filename=trybs_pagination&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.pagination-lg</code></td>
          <td>Large pagination (each pagination link gets a bigger font-size and more padding)</td>
          <td>
            <a href='tryit.html?filename=trybs_pagination_sizing&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.pagination-sm</code></td>
          <td>Small pagination (each pagination link gets a smaller font size and less padding)</td>
          <td>
            <a href='tryit.html?filename=trybs_pagination_sizing&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
        </tr>
        <tr>
          <td><code>.pre-scrollable</code></td>
          <td>Makes a <code>&lt;pre&gt;</code> element scrollable (<code>max-height</code> of 350px and provide a y-axis scrollbar)</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_pre&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
        </tr>
        <tr>
          <td><code>.progress</code></td>
          <td>Container for progress bars</td>
          <td>
            <a href='tryit.html?filename=trybs_progressbar1&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
        </tr>
        <tr>
          <td><code>.progress-bar</code></td>
          <td>Creates a progress bar</td>
          <td>
            <a href='tryit.html?filename=trybs_progressbar1&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
        </tr>
        <tr>
          <td><code>.progress-bar-animated</code></td>
          <td>Animates the progress bar (used together with stripes)</td>
          <td>
            <a href='tryit.html?filename=trybs_progressbar5&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
        </tr>
        <tr>
          <td><code>.progress-bar-striped</code></td>
          <td>Adds stripes to the progress bar</td>
          <td>
            <a href='tryit.html?filename=trybs_progressbar4&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
        </tr>
        <tr>
          <td><code>.p-# / p-*-#</code></td>
          <td>Responsive padding classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_p-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.pt-# / pt-*-#</code></td>
          <td>Responsive top padding classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_pt-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.pb-# / pb-*-#</code></td>
          <td>Responsive bottom padding classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_pb-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.pl-# / pl-*-#</code></td>
          <td>Responsive left padding classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_pl-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.pr-# / pr-*-#</code></td>
          <td>Responsive right padding classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_pr-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.py-# / py-*-#</code></td>
          <td>Responsive top and bottom padding classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_py-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.px-# / px-*-#</code></td>
          <td>Responsive left and right padding classes. * can be sm, md, lg or xl. # can be a number between 0 and 5</td>
          <td>
            <a href='tryit.html?filename=trybs_util_py-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.rounded</code></td>
          <td>Adds rounded corners to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.rounded-bottom</code></td>
          <td>Adds bottom rounded corners to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.rounded-circle</code></td>
          <td>Shapes an element to a circle (not supported in IE8 and earlier)</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.rounded-left</code></td>
          <td>Adds left rounded corners of an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.rounded-right</code></td>
          <td>Adds right rounded corners to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.rounded-top</code></td>
          <td>Adds top rounded corners to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.rounded-0</code></td>
          <td>Removes rounded corners from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_borders_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.row</code></td>
          <td>Container for responsive columns</td>
          <td>
            <a href='tryit.html?filename=trybs_grid_stacked_to_hor&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.row-cols-*</code></td>
          <td>Set the number of columns that should appear next to each other</td>
          <td>
            <a href='tryit.html?filename=trybs_row-cols&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_grid_system.php'>Grid System</a></td>
        </tr>
        <tr>
          <td><code>.shadow</code></td>
          <td>Adds a shadow to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_shadow&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.shadow-lg</code></td>
          <td>Adds a large shadow to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_shadow&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.shadow-none</code></td>
          <td>Removes shadows from an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_shadow&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.shadow-sm</code></td>
          <td>Adds a small shadow to an element</td>
          <td>
            <a href='tryit.html?filename=trybs_util_shadow&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.small</code></td>
          <td>Creates a lighter, secondary text in any heading</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_small&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.spinner-border</code></td>
          <td>Creates a spinner/loader</td>
          <td>
            <a href='tryit.html?filename=trybs_spinners&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_spinners.php'>Spinners</a></td>
        </tr>
        <tr>
          <td><code>.spinner-border-sm</code></td>
          <td>Creates a smaller spinner/loader</td>
          <td>
            <a href='tryit.html?filename=trybs_spinners_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_spinners.php'>Spinners</a></td>
        </tr>
        <tr>
          <td><code>.spinner-grow</code></td>
          <td>Creates a spinner/loader that 'grows'</td>
          <td>
            <a href='tryit.html?filename=trybs_spinners_grow&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_spinners.php'>Spinners</a></td>
        </tr>
        <tr>
          <td><code>.spinner-grow-sm</code></td>
          <td>Creates a smaller spinner/loader that 'grows'</td>
          <td>
            <a href='tryit.html?filename=trybs_spinners_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_spinners.php'>Spinners</a></td>
        </tr>
        <tr>
          <td><code>.sr-only</code></td>
          <td>Hides an element on all devices except for screen readers</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_hlp_sr-only&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.sr-only-focusable</code></td>
          <td>Hides an element on all devices except for screen readers</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_hlp_sr-only&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.sticky-top</code></td>
          <td>Makes an element stay sticky/fixed at the <strong>top</strong> of the page when you scroll <strong>past</strong> it</td>
          <td>
            <a href='tryit.html?filename=trybs_navbar_fixed_sticky&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.stretched-link</code></td>
          <td>Added to a link to make its containing block (parent) clickable (works only for parent elements with position:relative)</td>
          <td>
            <a href='tryit.html?filename=trybs_card_link&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.tab-content</code></td>
          <td>Used together with <code>.tab-pane</code> to creates toggleable/dynamic tabs/pills</td>
          <td>
            <a href='tryit.html?filename=trybs_nav_tabs_toggleable&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navs.php'>Tabs</a></td>
        </tr>
        <tr>
          <td><code>.tab-pane</code></td>
          <td>Used together with <code>.tab-content</code> to creates toggleable/dynamic tabs/pills</td>
          <td>
            <a href='tryit.html?filename=trybs_nav_tabs_toggleable&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_navs.php'>Tabs</a></td>
        </tr>
        <tr>
          <td><code>.table</code></td>
          <td>Adds basic styling to a table (padding, bottom borders, etc)</td>
          <td>
            <a href='tryit.html?filename=trybs_table&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-active</code></td>
          <td>Adds a grey background color to the <strong>table</strong> row (<code>&lt;tr&gt;</code> or table cell (<code>&lt;td&gt;</code>) (same color used on hover)</td>
          <td>
            <a href='tryit.html?filename=trybs_table_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-bordered</code></td>
          <td>Adds borders on all sides of the table and cells</td>
          <td>
            <a href='tryit.html?filename=trybs_table_bordered&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-borderless</code></td>
          <td>Remove borders from a table</td>
          <td>
            <a href='tryit.html?filename=trybs_table_borderless&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-condensed</code></td>
          <td>Makes a table more compact by cutting cell padding in half</td>
          <td>
            <a href='tryit.html?filename=trybs_table_condensed&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-dark</code></td>
          <td>Adds a black background with white text to the table</td>
          <td>
            <a href='tryit.html?filename=trybs_table_inverse&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-hover</code></td>
          <td>Creates a hoverable table (adds a grey background color on table rows on hover)</td>
          <td>
            <a href='tryit.html?filename=trybs_table_hover&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-responsive-*</code></td>
          <td>Makes a table responsive (adds a horizontal scrollbar when needed). By default, the scrollbar is added to the table on screens that are less than 992px wide (if needed). There's no difference when viewing anything lager than 992px wide. However, you can use sm|md|lg|xl to decide WHEN the table should get a scrollbar, depending on the screen width</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_table-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.table-striped</code></td>
          <td>Adds zebra-stripes to a table</td>
          <td>
            <a href='tryit.html?filename=trybs_table_striped&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.text-break</code></td>
          <td>Prevents long text from breaking layout</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-break' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-capitalize</code></td>
          <td>Indicates capitalized text</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-lowercase&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-center</code></td>
          <td>Center-aligns text</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-*-center</code></td>
          <td>Center-aligns text on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-center-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-danger</code></td>
          <td>Red text color. Indicates danger</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-dark</code></td>
          <td>Dark grey text color</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-decoration-none</code></td>
          <td>Removes the underline from a link</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_decoration&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-hide</code></td>
          <td>Hides text (helps replace an element's text content with a background image)</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_hlp_text-hide&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-info</code></td>
          <td>Light-blue text color. Indicates information</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-light</code></td>
          <td>Light grey text color</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-justify</code></td>
          <td>Indicates justified text</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-left</code></td>
          <td>Aligns the text to the left</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-*-left</code></td>
          <td>Left-aligns text on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-left-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-lowercase</code></td>
          <td>Changes text to lowercase</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-lowercase&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-muted</code></td>
          <td>Grey text color</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-nowrap</code></td>
          <td>Prevents the text from wrapping</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-primary</code></td>
          <td>Blue text color. Indicates something important</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-secondary</code></td>
          <td>Grey text color. Indicates something 'less' important</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-reset</code></td>
          <td>Resets the color of a text or a link (inherits the color from its parent)</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_txt_reset&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-right</code></td>
          <td>Aligns text to the right</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-*-right</code></td>
          <td>Right-aligns text on different screens</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-right-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-success</code></td>
          <td>Green text color. Indicates success</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-uppercase</code></td>
          <td>Makes text uppercase</td>
          <td>
            <a href='tryit.html?filename=trybs_ref_text-lowercase&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
        </tr>
        <tr>
          <td><code>.text-warning</code></td>
          <td>Yellow/orange text color. Indicates warning</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.text-white</code></td>
          <td>White text color</td>
          <td>
            <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_colors.php'>Colors</a></td>
        </tr>
        <tr>
          <td><code>.thead-dark</code></td>
          <td>Adds a black background color to table headers</td>
          <td>
            <a href='tryit.html?filename=trybs_table_head&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.thead-light</code></td>
          <td>Adds a grey background color to table headers</td>
          <td>
            <a href='tryit.html?filename=trybs_table_head&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
        </tr>
        <tr>
          <td><code>.toast</code></td>
          <td>Creates a toast (alert box that disappears after a few seconds)</td>
          <td>
            <a href='tryit.html?filename=trybs_toast&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_toast.php'>Toast</a></td>
        </tr>
        <tr>
          <td><code>.toast-body</code></td>
          <td>Toast body</td>
          <td>
            <a href='tryit.html?filename=trybs_toast&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_toast.php'>Toast</a></td>
        </tr>
        <tr>
          <td><code>.toast-header</code></td>
          <td>Toast header</td>
          <td>
            <a href='tryit.html?filename=trybs_toast&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_toast.php'>Toast</a></td>
        </tr>
        <tr>
          <td><code>.valid-feedback</code></td>
          <td>Creates a custom validation message used in validated forms (green text color)</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_was&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.valid-tooltip</code></td>
          <td>Creates a custom validation message used in validated forms (green tooltip)</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_tooltip&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.visible</code></td>
          <td>Make an element visible</td>
          <td>
            <a href='tryit.html?filename=trybs_util_visibility&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.was-validated</code></td>
          <td>Adds validation styles to a form element</td>
          <td>
            <a href='tryit.html?filename=trybs_form_validation_was&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
        </tr>
        <tr>
          <td><code>.w-25</code></td>
          <td>Sets the width of an element to 25%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_width&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.w-50</code></td>
          <td>Sets the width of an element to 50%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_width&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.w-75</code></td>
          <td>Sets the width of an element to 75%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_width&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        <tr>
          <td><code>.w-100</code></td>
          <td>Sets the width of an element to 100%</td>
          <td>
            <a href='tryit.html?filename=trybs_util_width&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
          </td>
          <td><a target='_blank' href='bootstrap_utilities.php'>Utilities</a></td>
        </tr>
        </tbody>
      </table>
    </div>

    <div class='w3-note w3-panel'>
      <p>В таблице выше показаны все доступные классы Bootstrap 4.</p>
      <p><strong>Совет:</strong> Чтобы увидеть полный список всех классов <strong>Bootstrap 3</strong> перейдите на наш <a href='/bootstrap/bootstrap_ref_all_classes.php'>Справочник по всем CSS классам Bootstrap 3</a>.</p>
    </div>
    <hr>

    <script>
        function sortTable(table, col, reverse) {
            var tb = table.tBodies[0],
                tr = Array.prototype.slice.call(tb.rows, 0),
                i;
            reverse = -((+reverse) || -1);
            tr = tr.sort(function (a, b) {
                return reverse
                    * (a.cells[col].textContent.trim().localeCompare(b.cells[col].textContent.trim()));
            });
            for(i = 0; i < tr.length; ++i) tb.appendChild(tr[i]);
        }

        function makeSortable(table) {
            var th = table.tHead, i;
            th && (th = th.rows[0]) && (th = th.cells);
            if (th) i = th.length;
            else return;
            while (--i >= 0) (function (i) {
                var dir = 1;
                th[i].addEventListener('click', function () {sortTable(table, i, (dir = 1 - dir))});
            }(i));
        }

        function makeAllSortable(parent) {
            parent = parent || document.body;
            var t = parent.getElementsByTagName('table'), i = t.length;
            while (--i >= 0) makeSortable(t[i]);
        }

        window.onload = function () {makeAllSortable();};
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            table = document.getElementById('myTable');
            tr = table.getElementsByTagName('tr');
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName('td')[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        }
    </script>

    <div class='w3-clear nextprev'>
      <a class='w3-left w3-btn' href='bootstrap_templates.php'>&#10094; Prev</a>
      <a class='w3-right w3-btn' href='bootstrap_ref_js_alert.php'>Next &#10095;</a>
    </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar_bootstrap.php'; ?>
<?php include '../include/footer.php'; ?>