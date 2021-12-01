<?php include '../include/head.php'; ?>
  <title>Bootstrap 3 Справочник. <?php include '../include/title.php'; ?></title>
  <meta name='description' content='Bootstrap 3. Полный справочник. Бесплатные уроки онлайн для начинающих. <?php include '../include/description.php'; ?>'>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_bootstrap3.php'; ?>
<?php include '../include/before_content_bootstrap.php'; ?>

  <article>
      <h1>Bootstrap 3 <span class='color_h1'>Справочник</span> классов</h1>
      <div class='w3-clear nextprev'>
          <a class='w3-left w3-btn' href='bootstrap_exam.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='bootstrap_ref_css_text.php'>Next &#10095;</a>
      </div>
      <hr>
      <h2>Полный список всех классов <strong>Bootstrap 3</strong></h2>
      <p>Полный список всех классов <strong>Bootstrap 3</strong> с описанием и примерами:</p>

      <input class='w3-input w3-border w3-padding' autocomplete='off' type='text' placeholder='Поиск по имени класса...' id='myInput' onkeyup='myFunction()'>
      <div class='w3-responsive'>
          <table class='w3-table-all notranslate' id='myTable'>
              <thead>
              <tr class='w3-white'>
                  <th style='width:22%;cursor:pointer;user-select:none;'>Класс <i class='fa fa-sort' style='font-size:13px;'></i></th>
                  <th style='width:54%;' onclick='javascript:void(0)'>Описание</th>
                  <th style='width:8%;' onclick='return false;'>Пример</th>
                  <th style='width:16%;cursor:pointer;user-select:none;'>Категория <i class='fa fa-sort' style='font-size:13px;'></i></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td><code>.active</code></td>
                  <td>Adds a grey background color to the <strong>table</strong> row (<code>&lt;tr&gt;</code> or table cell (<code>&lt;td&gt;</code>) (same color used on hover)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_table_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
              </tr>
              <tr>
                  <td><code>.active</code></td>
                  <td>Adds a gray background color to the active link in a default <strong>
                          navbar.</strong> Adds a black background and a white color to the current link inside an inverted navbar.</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td>Adds a blue background color to simulate a 'pressed' <strong>button</strong></td>
                  <td>
                      <a href='tryit.html?filename=trybs_button_active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
              </tr>
              <tr>
                  <td><code>.active</code></td>
                  <td>Animates a striped <strong>progress bar</strong></td>
                  <td>
                      <a href='tryit.html?filename=trybs_progressbar5&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
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
                  <td><code>.affix</code></td>
                  <td>The Affix plugin allows an element to become affixed (locked/sticky) to an area on the page. It toggles <code>position:fixed</code> on and off</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_js_affix_nav&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_affix.php' class='w3-center'>Affix</a></td>
              </tr>
              <tr>
                  <td><code>.alert</code></td>
                  <td>Creates an alert message box</td>
                  <td>
                      <a href='tryit.html?filename=trybs_alerts&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
              </tr>
              <tr>
                  <td><code>.alert-danger</code></td>
                  <td>Red alert box. Indicates a dangerous or potentially negative action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_alerts&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
              </tr>
              <tr>
                  <td><code>.alert-dismissible</code></td>
                  <td>Together with the <code>.close</code> class, this class is used to
                      close the alert</td>
                  <td>
                      <a href='tryit.html?filename=trybs_alerts_dismissible&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
              </tr>
              <tr>
                  <td><code>.alert-info</code></td>
                  <td>Light-blue alert box. Indicates some information</td>
                  <td>
                      <a href='tryit.html?filename=trybs_alerts&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
              </tr>
              <tr>
                  <td><code>.alert-link</code></td>
                  <td>Used on links inside alerts to add matching colored links</td>
                  <td>
                      <a href='tryit.html?filename=trybs_alerts_link&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
              </tr>
              <tr>
                  <td><code>.alert-success</code></td>
                  <td>Green alert box. Indicates a successful or positive action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_alerts&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
              </tr>
              <tr>
                  <td><code>.alert-warning</code></td>
                  <td>Yellow alert box. Indicates caution should be taken with this action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_alerts&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_alerts.php'>Alerts</a></td>
              </tr>
              <tr>
                  <td><code>.badge</code></td>
                  <td>Creates a circular badge (grey circle - often used as a numerical indicator)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_badges&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_badges_labels.php'>Badges</a></td>
              </tr>
              <tr>
                  <td><code>.bg-danger</code></td>
                  <td>Adds a red background color to an element. Represents danger or a negative action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.bg-info</code></td>
                  <td>Adds a light-blue background color to an element. Represents some information</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.bg-primary</code></td>
                  <td>Adds a blue background color to an element. Represents something important</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.bg-success</code></td>
                  <td>Adds a green background color to an element. Indicates success or a positive action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.bg-warning</code></td>
                  <td>Adds a yellow background color to an element. Represents a warning or a negative action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_bgcolors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
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
                  <td><code>.btn</code></td>
                  <td>Creates a basic button (gray background and rounded corners)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_button_btn&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.btn-danger</code></td>
                  <td>Red button. Indicates danger or a negative action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
              </tr>
              <tr>
                  <td><code>.btn-default</code></td>
                  <td>Default button. White background and grey border</td>
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
                  <td><code>.btn-group-justified</code></td>
                  <td>Makes a group of buttons span the entire width of the screen</td>
                  <td>
                      <a href='tryit.html?filename=trybs_button_group_justified&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.btn-group-xs</code></td>
                  <td>Extra small button group (makes all buttons in a button group extra small)</td>
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
                  <td>Light-blue button. Represents information</td>
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
                  <td><code>.btn-primary</code></td>
                  <td>Blue button.</td>
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
                  <td><code>.btn-success</code></td>
                  <td>Green button. Indicates success or a positive action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
              </tr>
              <tr>
                  <td><code>.btn-warning</code></td>
                  <td>Yellow button. Represents warning or a negative action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_button_styles&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
              </tr>
              <tr>
                  <td><code>.btn-xs</code></td>
                  <td>Extra small button</td>
                  <td>
                      <a href='tryit.html?filename=trybs_button_sizes&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_buttons.php'>Buttons</a></td>
              </tr>
              <tr>
                  <td><code>.caption</code></td>
                  <td>Adds a caption text inside a <code>.thumbnail</code></td>
                  <td>
                      <a href='tryit.html?filename=trybs_img_thumbnail2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
              </tr>
              <tr>
                  <td><code>.caret</code></td>
                  <td>Creates a caret arrow icon <span class='caret'></span>, which indicates that the button is a dropdown</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_caret&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
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
                  <td><code>.carousel-control</code></td>
                  <td>Container for next and previous links</td>
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
                  <td><code>.center-block</code></td>
                  <td>Centers any element (Sets an element to <code>display:block</code> with <code>margin-right:auto</code> and <code>margin-left:auto</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_center-block&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.checkbox</code></td>
                  <td>Container for checkboxes</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_checkbox&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs.php'>Inputs</a></td>
              </tr>
              <tr>
                  <td><code>.checkbox-inline</code></td>
                  <td>Makes multiple checkboxes appear on the same line</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_checkbox_inline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs.php'>Inputs</a></td>
              </tr>
              <tr>
                  <td><code>.clearfix</code></td>
                  <td>Clears floats</td>
                  <td>
                      <a href='tryit.html?filename=trybs_grid_ex7&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.close</code></td>
                  <td>Indicates a close icon</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_close&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.col-*-*</code></td>
                  <td>Responsive grid (span 1-12 column). Extra small devices Phones (&lt; 768px), Small devices Tablets (&#8805;768px), Medium devices Desktops (&#8805;992px), Large devices Desktops (&#8805;1200px). Column values can be 1-12.</td>
                  <td>
                      <a href='tryit.html?filename=trybs_grid_large&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_grid_system.php'>Grid</a></td>
              </tr>
              <tr>
                  <td><code>.col-*-offset-*</code></td>
                  <td>Move columns to the right. These classes increase the left margin of a column by * columns</td>
                  <td>
                      <a href='tryit.html?filename=trybs_grid_ex8&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_grid_system.php'>Grid</a></td>
              </tr>
              <tr>
                  <td><code>.col-*-pull-*</code></td>
                  <td>Changes the order of the grid columns</td>
                  <td>
                      <a href='tryit.html?filename=trybs_grid_ex9&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_grid_system.php'>Grid</a></td>
              </tr>
              <tr>
                  <td><code>.col-*-push-*</code></td>
                  <td>Changes the order of the grid columns</td>
                  <td>
                      <a href='tryit.html?filename=trybs_grid_ex9&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_grid_system.php'>Grid</a></td>
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
                  <td><code>.collapse in</code></td>
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
                      <a href='tryit.html?filename=trybs_gs_container&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_get_started.php'>Containers</a></td>
              </tr>
              <tr>
                  <td><code>.container-fluid</code></td>
                  <td>A container that spans the full width of the screen</td>
                  <td>
                      <a href='tryit.html?filename=trybs_gs_container-fluid&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_get_started.php'>Containers</a></td>
              </tr>
              <tr>
                  <td><code>.control-label</code></td>
                  <td>Allows a label to be used for form validation</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_horizontal_static&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
              </tr>
              <tr>
                  <td><code>.danger</code></td>
                  <td>Adds a red background to the table row (<code>&lt;tr&gt;</code> or table cell (<code>&lt;td&gt;</code>). Indicates a dangerous or potentially negative action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_table_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
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
                  <td>Disables a <strong>list</strong> item in a list group (cannot be clicked - adds a grey background color and a 'no-parking-sign' icon on hover)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_list_group_active&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_list_groups.php'>List Groups</a></td>
              </tr>
              <tr>
                  <td><code>.divider</code></td>
                  <td>Used to separate links in the dropdown menu with a thin horizontal border</td>
                  <td>
                      <a href='tryit.html?filename=trybs_dropdown-divider&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
              </tr>
              <tr>
                  <td><code>.dl-horizontal</code></td>
                  <td>Lines up the terms <code>&lt;dt&gt;</code> and descriptions <code>&lt;dd&gt;</code> in <code>&lt;dl&gt;</code> elements side-by-side. Starts off like default
                      <code>&lt;dl&gt;</code>s, but when the browser window expands, it will line up side-by-side</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_txt_dl-horizontal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
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
                  <td><code>.dropdown-header</code></td>
                  <td>Used to add headers inside the dropdown menu</td>
                  <td>
                      <a href='tryit.html?filename=trybs_dropdown-header&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.dropup</code></td>
                  <td>Indicates a dropup menu (upwards instead of downwards)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_dropdown-menu-dropup&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_dropdowns.php'>Dropdowns</a></td>
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
                  <td><code>.embed-responsive-4by3</code></td>
                  <td>Container for embedded content. Creates an 4:3 aspect ratio embedded content</td>
                  <td>
                      <a href='tryit.html?filename=trybs_responsive_embed_4by3&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.form-control</code></td>
                  <td>Used on input, textarea, and select elements to span the entire width of the page and make them responsive</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_basic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
              </tr>
              <tr>
                  <td><code>.form-control-feedback</code></td>
                  <td>Form validation class</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_horizontal_all&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs2.php'>Inputs 2</a></td>
              </tr>
              <tr>
                  <td><code>.form-control-static</code></td>
                  <td>Adds plain text next to a form label within a horizontal form</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_horizontal_static&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs2.php'>Inputs 2</a></td>
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
                  <td><code>.form-horizontal</code></td>
                  <td>Aligns labels and groups of form controls in a horizontal layout</td>
                  <td><a target='_blank' class='w3-btn' href='tryit.html?filename=trybs_ref_form-horizontal&stacked=h'>Попробуй это</a></td>
                  <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
              </tr>
              <tr>
                  <td><code>.glyphicon</code></td>
                  <td>Creates an icon. Bootstrap provides 260 free glyphicons from the <a target='_blank' href='bootstrap_glyphicons.php'>Glyphicons</a> Halflings set</td>
                  <td>
                      <a href='tryit.html?filename=trybs_glyphs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_glyphicons.php'>Glyphicons</a></td>
              </tr>
              <tr>
                  <td><code>.has-danger</code></td>
                  <td>Adds a red color to the label and a red border to the input, as well as an error icon inside the input (used together with <code>.has-feedback</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_horizontal_all&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
              </tr>
              <tr>
                  <td><code>.has-feedback</code></td>
                  <td>Adds feedback icons for inputs (checkmark, warning and error signs)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_horizontal_all&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
              </tr>
              <tr>
                  <td><code>.has-success</code></td>
                  <td>Adds a green color to the label and a green border to the input, as well as a checkmark icon inside the input (used together with <code>.has-feedback</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_horizontal_all&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
              </tr>
              <tr>
                  <td><code>.has-warning</code></td>
                  <td>Adds a yellow/orange color to the label and a yellow/orange border to the input, as well as a checkmark icon inside the input (used together with <code>.has-feedback</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_horizontal_all&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms.php'>Forms</a></td>
              </tr>
              <tr>
                  <td><code>.help-block</code></td>
                  <td>A block of help text that breaks onto a new line and may extend beyond one line.</td>
                  <td>
                      <a href='tryit.html?filename=trybs_input_help-block&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_sizing.php'>Input Sizing</a></td>
              </tr>
              <tr>
                  <td><code>.hidden</code></td>
                  <td>Forces an element to be hidden (<code>display:none</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_hidden&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.hidden-*</code></td>
                  <td>Hides content depending on screen size</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_text-hidden&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.hide</code></td>
                  <td><span class='marked'>Deprecated.</span> Use <code>.hidden</code> instead</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_hidden&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.h1 - .h6</code></td>
                  <td>Makes an element look like a heading of the chosen class (h1-h6)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_txt_hn&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
              </tr>
              <tr>
                  <td><code>.icon-bar</code></td>
                  <td>Used in the navbar to create a hamburger menu (three horizontal bars)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_collapse&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.icon-next</code></td>
                  <td>Unicode icon (arrow pointing right), used in carousels. This is often replaced with a glyphicon</td>
                  <td>
                      <a href='tryit.html?filename=trybs_carousel_icon&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
              </tr>
              <tr>
                  <td><code>.icon-prev</code></td>
                  <td>Unicode icon (arrow pointing left), used in carousels. This is often replaced with a glyphicon</td>
                  <td>
                      <a href='tryit.html?filename=trybs_carousel_icon&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
              </tr>
              <tr>
                  <td><code>.img-circle</code></td>
                  <td>Shapes an image to a circle (not supported in IE8 and earlier)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_img_circle&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
              </tr>
              <tr>
                  <td><code>.img-responsive</code></td>
                  <td>Makes an image responsive</td>
                  <td>
                      <a href='tryit.html?filename=trybs_img_responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
              </tr>
              <tr>
                  <td><code>.img-rounded</code></td>
                  <td>Adds rounded corners to an image</td>
                  <td>
                      <a href='tryit.html?filename=trybs_img_rounded&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
              </tr>
              <tr>
                  <td><code>.img-thumbnail</code></td>
                  <td>Shapes an image to a thumbnail (borders)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_img_thumbnail&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
              </tr>
              <tr>
                  <td><code>.in</code></td>
                  <td>Fades in tabs</td>
                  <td>
                      <a href='tryit.html?filename=trybs_tabs_dynamic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
              </tr>
              <tr>
                  <td><code>.info</code></td>
                  <td>Adds a light-blue background to the table row (<code>&lt;tr&gt;</code> or table cell (<code>&lt;td&gt;</code>). Indicates a neutral informative change or action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_table_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
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
                  <td>Container to enhance an input by adding an icon, text or a button in front or behind it as a 'help text'</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_input_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs2.php'>Inputs</a></td>
              </tr>
              <tr>
                  <td><code>.input-group-lg</code></td>
                  <td>Large input group</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_input_group_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs2.php'>Inputs</a></td>
              </tr>
              <tr>
                  <td><code>.input-group-sm</code></td>
                  <td>Small input group</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_input_group_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs2.php'>Inputs</a></td>
              </tr>
              <tr>
                  <td><code>.input-group-addon</code></td>
                  <td>Together with the <code>.input-group</code> class, this class makes it possible to add an icon or help text next to the input field</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_input_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs2.php'>Inputs</a></td>
              </tr>
              <tr>
                  <td><code>.input-group-btn</code></td>
                  <td>Together with the <code>.input-group</code> class, this class attaches a button next to an input. Often used as a search bar</td>
                  <td>
                      <a href='tryit.html?filename=trybs_form_input_group_btn&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_forms_inputs2.php'>Inputs</a></td>
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
                  <td><code>.invisible</code></td>
                  <td>Makes an element invisible (<code>visibility:hidden</code>). <strong>Note:</strong> Even though the element is invisible, it will take up space on the page</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_hidden&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.item</code></td>
                  <td>Class added to each carousel item. May be text or images</td>
                  <td>
                      <a href='tryit.html?filename=trybs_carousel&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
              </tr>
              <tr>
                  <td><code>.jumbotron</code></td>
                  <td>Creates a padded grey box with rounded corners that enlarges the font sizes of the text inside it. Creates a big box for calling extra attention to some special content or information</td>
                  <td>
                      <a href='tryit.html?filename=trybs_jumbotron&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_jumbotron_header.php'>Jumbotron</a></td>
              </tr>
              <tr>
                  <td><code>.label</code></td>
                  <td>Adds a grey rounded box to an element. Provides additional information about something (e.g. 'New')</td>
                  <td>
                      <a href='tryit.html?filename=trybs_labels&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_badges_labels.php'>Labels</a></td>
              </tr>
              <tr>
                  <td><code>.label-danger</code></td>
                  <td>Red label</td>
                  <td>
                      <a href='tryit.html?filename=trybs_labels2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_badges_labels.php'>Labels</a></td>
              </tr>
              <tr>
                  <td><code>.label-info</code></td>
                  <td>Light-blue label</td>
                  <td>
                      <a href='tryit.html?filename=trybs_labels2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_badges_labels.php'>Labels</a></td>
              </tr>
              <tr>
                  <td><code>.label-success</code></td>
                  <td>Green label</td>
                  <td>
                      <a href='tryit.html?filename=trybs_labels2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_badges_labels.php'>Labels</a></td>
              </tr>
              <tr>
                  <td><code>.label-warning</code></td>
                  <td>Yellow label</td>
                  <td>
                      <a href='tryit.html?filename=trybs_labels2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_badges_labels.php'>Labels</a></td>
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
                  <td><code>.left</code></td>
                  <td>Used to identify the left carousel control</td>
                  <td>
                      <a href='tryit.html?filename=trybs_carousel&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
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
                  <td><code>.list-group-item</code></td>
                  <td>Added to each <code>&lt;li&gt;</code> element in the list group</td>
                  <td>
                      <a href='tryit.html?filename=trybs_list_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
              </tr>
              <tr>
                  <td><code>.list-group-item-heading</code></td>
                  <td>Creates a list group heading (used on other elements besides <code>&lt;li&gt;</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_list_group_custom&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_list_groups.php'>List Group</a></td>
              </tr>
              <tr>
                  <td><code>.list-group-item-text</code></td>
                  <td>Used for item text inside the list group (used on other elements besides
                      <code>&lt;li&gt;</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_list_group_custom&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.list-group-item-info</code></td>
                  <td>Light-blue background color for a list item in a list group</td>
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
                  <td>Places all list items on a single line (horizontal menu)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_menu_list-inline&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
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
                  <td>Aligns media objects (like images or videos - often used for comments in a blog post etc)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_media_left_right' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_media_objects.php'>Media Objects</a></td>
              </tr>
              <tr>
                  <td><code>.media-body</code></td>
                  <td>Text that should appear next to a media object</td>
                  <td>
                      <a href='tryit.html?filename=trybs_media_left_right' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_media_objects.php'>Media Objects</a></td>
              </tr>
              <tr>
                  <td><code>.media-heading</code></td>
                  <td>Creates a heading inside the media object</td>
                  <td>
                      <a href='tryit.html?filename=trybs_media_left_right' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_media_objects.php'>Media Objects</a></td>
              </tr>
              <tr>
                  <td><code>.media-list</code></td>
                  <td>Nested media lists</td>
                  <td>
                      <a href='tryit.html?filename=trybs_media_list' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_media_objects.php'>Media Objects</a></td>
              </tr>
              <tr>
                  <td><code>.media-object</code></td>
                  <td>Indicates a media object (image or video)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_media_left_right' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.modal-dialog</code></td>
                  <td>Sets the proper width and margin of the modal</td>
                  <td>
                      <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.modal-open</code></td>
                  <td>Used on the <code>&lt;body&gt;</code> element to prevent page scrolling (<code>overflow:hidden</code>)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.modal-title</code></td>
                  <td>The title of the modal</td>
                  <td>
                      <a href='tryit.html?filename=trybs_modal&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_modal.php'>Modals</a></td>
              </tr>
              <tr>
                  <td><code>.nav nav-tabs</code></td>
                  <td>Indicates a tabbed menu</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_comp_nav-tabs&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
              </tr>
              <tr>
                  <td><code>.nav nav-pills</code></td>
                  <td>Indicates a pill menu</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pills&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
              </tr>
              <tr>
                  <td><code>.nav .navbar-nav</code></td>
                  <td>Used on a <code>&lt;ul&gt;</code> container that contains the list items with links inside a navigation bar</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.nav-justified</code></td>
                  <td>Centers tabs/pills. Note that on screens smaller than 768px the items are stacked (content will remain centered)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_comp_nav-justified&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
              </tr>
              <tr>
                  <td><code>.nav-stacked</code></td>
                  <td>Vertically stack tabs or pills</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pills_vertical&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
              </tr>
              <tr>
                  <td><code>.nav-tabs</code></td>
                  <td>Creates a tabbed menu</td>
                  <td>
                      <a href='tryit.html?filename=trybs_tabs_dynamic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
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
                  <td><code>.navbar-brand</code></td>
                  <td>Added to a link or a header element inside the navbar to represent a logo or a header</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-btn</code></td>
                  <td>Vertically aligns a button inside a navbar</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_btn&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.navbar-default</code></td>
                  <td>Creates a default navigation bar (light-grey background color)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-fixed-bottom</code></td>
                  <td>Makes the navbar stay at the bottom of the screen (sticky/fixed)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_fixed_bottom&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-fixed-top</code></td>
                  <td>Makes the navbar stay at the top of the screen (sticky/fixed)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_fixed&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-form</code></td>
                  <td>Added to form elements inside the navbar to vertically center them (proper padding)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_form&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-header</code></td>
                  <td>Added to a container element that contains the link/element that represent a logo or a header</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-inverse</code></td>
                  <td>Creates a black navigation bar (instead of light-grey)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_inverse&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-left</code></td>
                  <td>Aligns nav links, forms, buttons, or text, in the navbar to the left</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_form&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-link</code></td>
                  <td>Styles an element to look like a link inside the navbar (anchors get proper padding and an underline on hover, while other elements like p or span gets a default hover effect - white color in an inversed navbar and a black color in a default navbar)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_link&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-nav</code></td>
                  <td>Used on a <code>&lt;ul&gt;</code> container that contains the list items with links inside a navigation bar</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-right</code></td>
                  <td>Aligns nav links, forms, buttons, or text in the navbar to the right.</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_right&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-static-top</code></td>
                  <td>Removes left, top and right borders (rounded corners) from the navbar (default navbar has a gray border and a 4px border-radius by default)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_static-top&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-text</code></td>
                  <td>Vertical align any elements inside the navbar that are not links (ensures proper padding)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_text&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.navbar-toggle</code></td>
                  <td>Styles the button that should open the navbar on small screens. Often used together with three <code>.icon-bar</code> classes to indicate a toggleable menu icon (hamburger/bars)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_navbar_collapse&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_navbar.php'>Navbar</a></td>
              </tr>
              <tr>
                  <td><code>.next</code></td>
                  <td>Used in the carousel control to identity the next control</td>
                  <td>
                      <a href='tryit.html?filename=trybs_carousel&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
              </tr>
              <tr>
                  <td><code>.next</code></td>
                  <td>Used to align pager buttons to the right side of the page (next button)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pager_prev&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_pager.php'>Pager</a></td>
              </tr>
              <tr>
                  <td><code>.page-header</code></td>
                  <td>Adds a horizontal line under the heading (+ adds some extra space around the element)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_page-header&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_jumbotron_header.php'>Page Header</a></td>
              </tr>
              <tr>
                  <td><code>.pager</code></td>
                  <td>Creates previous/next buttons (used on <code>&lt;ul&gt;</code> elements)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pager&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_pager.php'>Pager</a></td>
              </tr>
              <tr>
                  <td><code>.pagination</code></td>
                  <td>Creates a pagination (Useful when you have a web site with lots of pages. Used on <code>&lt;ul&gt;</code> elements)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pagination&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
              </tr>
              <tr>
                  <td><code>.pagination-lg</code></td>
                  <td>Large pagination (each pagination link gets a font-size of 18px. Default is 14px)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pagination_sizing&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
              </tr>
              <tr>
                  <td><code>.pagination-sm</code></td>
                  <td>Small pagination (each pagination link gets a font-size of 12px. Default is 14px)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pagination_sizing&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_pagination.php'>Pagination</a></td>
              </tr>
              <tr>
                  <td><code>.panel</code></td>
                  <td>Creates a bordered box with some padding around its content</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-body</code></td>
                  <td>Container for content inside the panel</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_heading&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-collapse</code></td>
                  <td>Collapsible panel (toggle between hiding and showing panel(s))</td>
                  <td>
                      <a href='tryit.html?filename=trybs_collapsible_panel&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_collapse.php'>Collapse</a></td>
              </tr>
              <tr>
                  <td><code>.panel-danger</code></td>
                  <td>Red panel. Indicates danger</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-info</code></td>
                  <td>Light-blue panel. Indicates information</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-success</code></td>
                  <td>Green panel. Indicates success</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-warning</code></td>
                  <td>Yellow panel. Indicates warning</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-footer</code></td>
                  <td>Creates a panel footer (light background color)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_footer&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-group</code></td>
                  <td> Used to group many panels together. This removes the bottom margin below each panel</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_group&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-heading</code></td>
                  <td>Creates a panel header (light background color)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels_footer&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.panel-title</code></td>
                  <td>Used inside a <code>.panel-heading</code> to adjust the styling of the text (removes margins and adds a font-size of 16px)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_panels-title&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_panels.php'>Panels</a></td>
              </tr>
              <tr>
                  <td><code>.popover</code></td>
                  <td>Popup-box that appears when the user clicks on an element</td>
                  <td>
                      <a href='tryit.html?filename=trybs_popover&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_popover.php'>Popover</a></td>
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
                  <td><code>.prev</code></td>
                  <td>Used in carousels to indicate a 'previous' link</td>
                  <td>
                      <a href='tryit.html?filename=trybs_carousel&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
              </tr>
              <tr>
                  <td><code>.previous</code></td>
                  <td>Used to align pager buttons to the left side of the page (previous button)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_pager&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_pager.php'>Pager</a></td>
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
                  <td><code>.progress-bar-danger</code></td>
                  <td>Red progress bar. Indicates danger</td>
                  <td>
                      <a href='tryit.html?filename=trybs_progressbar3&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
              </tr>
              <tr>
                  <td><code>.progress-bar-info</code></td>
                  <td>Light-blue progress bar. Indicates information</td>
                  <td>
                      <a href='tryit.html?filename=trybs_progressbar3&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
              </tr>
              <tr>
                  <td><code>.progress-bar-striped</code></td>
                  <td>Creates a striped progress bar</td>
                  <td>
                      <a href='tryit.html?filename=trybs_progressbar4&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
              </tr>
              <tr>
                  <td><code>.progress-bar-success</code></td>
                  <td>Green progress bar. Indicates success</td>
                  <td>
                      <a href='tryit.html?filename=trybs_progressbar3&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
              </tr>
              <tr>
                  <td><code>.progress-bar-warning</code></td>
                  <td>Yellow progress bar. Indicates warning</td>
                  <td>
                      <a href='tryit.html?filename=trybs_progressbar3&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_progressbars.php'>Progress Bars</a></td>
              </tr>
              <tr>
                  <td><code>.pull-left</code></td>
                  <td>Float an element to the left</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_pull-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.pull-right</code></td>
                  <td>Float an element to the right</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_pull-left&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.right</code></td>
                  <td>Used to identify the right carousel control</td>
                  <td>
                      <a href='tryit.html?filename=trybs_carousel&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_carousel.php'>Carousel</a></td>
              </tr>
              <tr>
                  <td><code>.row</code></td>
                  <td>Container for responsive columns</td>
                  <td>
                      <a href='tryit.html?filename=trybs_grid_stacked_to_hor&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_grid_system.php'>Grid</a></td>
              </tr>
              <tr>
                  <td><code>.row-no-gutters</code></td>
                  <td>Removes the gutters from a row and its columns</td>
                  <td>
                      <a href='tryit.html?filename=trybs_grid_no-gutters&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_grid_system.php'>Grid</a></td>
              </tr>
              <tr>
                  <td><code>.show</code></td>
                  <td>Shows an element (<code>display:block)</code></td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_hidden&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
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
                  <td><code>.sr-only</code></td>
                  <td>Hides an element on all devices except for screen readers</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_sr-only&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.sr-only-focusable</code></td>
                  <td>Hides an element on all devices except for screen readers</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_sr-only&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.success</code></td>
                  <td>Adds a green background color to a table row (<code>&lt;tr&gt;</code> or table cell (<code>&lt;td&gt;</code>). Indicates success or a positive action</td>
                  <td>
                      <a href='tryit.html?filename=trybs_table_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
              </tr>
              <tr>
                  <td><code>.tab-content</code></td>
                  <td>Used together with <code>.tab-pane</code> to creates toggleable/dynamic tabs/pills</td>
                  <td>
                      <a href='tryit.html?filename=trybs_tabs_dynamic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
              </tr>
              <tr>
                  <td><code>.tab-pane</code></td>
                  <td>Used together with <code>.tab-content</code> to creates toggleable/dynamic tabs/pills</td>
                  <td>
                      <a href='tryit.html?filename=trybs_tabs_dynamic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tabs_pills.php'>Tabs</a></td>
              </tr>
              <tr>
                  <td><code>.table</code></td>
                  <td>Adds basic styling to a table (padding, bottom borders, etc)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_table_basic&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.table-condensed</code></td>
                  <td>Makes a table more compact by cutting cell padding in half</td>
                  <td>
                      <a href='tryit.html?filename=trybs_table_condensed&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.table-responsive</code></td>
                  <td>Makes a table responsive (adds a horizontal scrollbar when needed)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_table-responsive&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
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
                  <td><code>.text-danger</code></td>
                  <td>Red text color. Indicates danger</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
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
                  <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
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
                  <td>Blue text color</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
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
                  <td><code>.text-success</code></td>
                  <td>Green text color. Indicates success</td>
                  <td>
                      <a href='tryit.html?filename=trybs_txt_colors&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
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
                  <td><a target='_blank' href='bootstrap_typography.php'>Typography</a></td>
              </tr>
              <tr>
                  <td><code>.thumbnail</code></td>
                  <td>Adds a border around an element (often images or videos) to make it look like a thumbnail</td>
                  <td>
                      <a href='tryit.html?filename=trybs_img_thumbnail2&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_images.php'>Images</a></td>
              </tr>
              <tr>
                  <td><code>.tooltip</code></td>
                  <td>Popup-box that appears when the user moves the mouse pointer over an element</td>
                  <td>
                      <a href='tryit.html?filename=trybs_tooltip&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tooltip.php'>Tooltip</a></td>
              </tr>
              <tr>
                  <td><code>.visible-*</code></td>
                  <td><span class='marked'>Deprecated as of v3.2.0.</span> Used to show and/or hide content by device. <strong>Note:</strong> Use <code>.hidden-*</code> instead</td>
                  <td>
                      <a href='tryit.html?filename=trybs_ref_hlp_text-visible&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.visible-print-block</code></td>
                  <td>Displays the element (<code>display:block</code>) in print (pre)view</td>
                  <td>
                      &nbsp;
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.visible-print-inline</code></td>
                  <td>Displays the element (<code>display:inline</code>) in print (pre)view</td>
                  <td>
                      &nbsp;
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.visible-print-inline-block</code></td>
                  <td>Displays the element (<code>display:inline-block</code>) in print (pre)view</td>
                  <td>
                      &nbsp;
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.hidden-print</code></td>
                  <td>Hides the element (<code>display:none</code>) in print (pre)view</td>
                  <td>
                      &nbsp;
                  </td>
                  <td><a target='_blank' href='bootstrap_ref_css_helpers.php'>Helpers</a></td>
              </tr>
              <tr>
                  <td><code>.warning</code></td>
                  <td>Adds a yellow background color to the table row (<code>&lt;tr&gt;</code> or table cell (<code>&lt;td&gt;</code>). Indicates a warning</td>
                  <td>
                      <a href='tryit.html?filename=trybs_table_contextual&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_tables.php'>Tables</a></td>
              </tr>
              <tr>
                  <td><code>.well</code></td>
                  <td>Adds a rounded border around an element with a gray background color and some padding</td>
                  <td>
                      <a href='tryit.html?filename=trybs_well&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_wells.php'>Wells</a></td>
              </tr>
              <tr>
                  <td><code>.well-lg</code></td>
                  <td>Large well (more padding)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_well_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_wells.php'>Wells</a></td>
              </tr>
              <tr>
                  <td><code>.well-sm</code></td>
                  <td>Small well (less padding)</td>
                  <td>
                      <a href='tryit.html?filename=trybs_well_size&stacked=h' class='w3-btn' target='_blank'>Попробуй это</a>
                  </td>
                  <td><a target='_blank' href='bootstrap_wells.php'>Wells</a></td>
              </tr>
              </tbody>
          </table>
      </div>

      <div class='w3-note w3-panel'>
          <p>В таблице выше показаны все доступные классы <strong>Bootstrap 3</strong>.</p>
          <p><strong>Совет:</strong> Чтобы увидеть полный список всех классов <strong>Bootstrap 4</strong>, перейдите на наш <a href='../bootstrap4/bootstrap_ref_all_classes.php'>Справочник всех CSS классов Bootstrap 4</a>.</p>
      </div>
      <br>

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
          <a class='w3-left w3-btn' href='bootstrap_exam.php'>&#10094; Prev</a>
          <a class='w3-right w3-btn' href='bootstrap_ref_css_text.php'>Next &#10095;</a>
      </div>
  </article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>