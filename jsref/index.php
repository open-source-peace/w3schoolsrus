<?php include '../include/head_js.php'; ?>

<title>JavaScript Справочник. Уроки для начинающих. W3Schools на русском</title>
<meta name="description"
      content="JavaScript Полный справочник. Уроки W3Schools на русском для начинающих, школьников и студентов">
<style>
    .smallbtn {
        background-color:#F1F1F1;
        border:1px solid #e3e3e3;
        padding:10px;
        padding-bottom:10px;
        text-align:center;
        color:#555555;
        font-size:14px;
        text-decoration:none !important;
        line-height:3.2;
        white-space:nowrap;
    }
    .smallbtn:hover {
        background-color:#555555;
        color:#ffffff !important;
        border:1px solid #555555;
    }
    .bigbtn {
        margin-bottom:5px;
        height:65px;
        width:24%;
        border:1px solid #e3e3e3;
        background-color:#F1F1F1;
        color:#555;
        font-size:16px;
        padding:20px 0;
        text-align: center;
        vertical-align: middle;
        display: inline-block;
        text-decoration:none !important;
    }
    .bigbtn2 {
        margin-bottom:5px;
        height:65px;
        width:24%;
        border:1px solid #e3e3e3;
        background-color:#F1F1F1;
        color:#555;
        font-size:16px;
        padding:20px 16px 20px 16px;
        text-align: center;
        vertical-align: middle;
        display: inline-block;
        text-decoration:none !important;
    }
    .bigbtn:hover, .bigbtn2:hover {
        background-color: #555;
        color: #ffffff !important;
        border: 1px solid #555;
    }
    @media screen and (max-width: 600px){
        .bigbtn, .bigbtn2 {
            display: block;
            width: 100%;
        }
    }
</style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jsref.php'; ?>
<?php include '../include/before_content_js.php'; ?>

<article>
    <h1>JavaScript и HTML DOM <span class="color_h1">Справочник</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="jsref_reference.php">Next &#10095;</a>
    </div>
    <hr>
    <p class="intro">Этот раздел содержит полную справочную документацию по JavaScript.</p>
    <hr>

    <h2>JavaScript Справочник</h2>
    <p>Справочники описывают свойства и методы всех объектов JavaScript вместе с примерами.</p>

    <div class="refcont">
        <a class="bigbtn" href="jsref_obj_array.php">Array</a>
        <a class="bigbtn" href="jsref_obj_boolean.php">Boolean</a>
        <a class="bigbtn" href="jsref_classes.php">Classes</a>
        <a class="bigbtn" href="jsref_obj_date.php">Date</a>
        <a class="bigbtn" href="jsref_obj_error.php">Error</a>
        <a class="bigbtn" href="jsref_obj_global.php">Global</a>
        <a class="bigbtn" href="jsref_obj_json.php">JSON</a>
        <a class="bigbtn" href="jsref_obj_math.php">Math</a>
        <a class="bigbtn" href="jsref_obj_number.php">Number</a>
        <a class="bigbtn" href="jsref_operators.php">Operators</a>
        <a class="bigbtn" href="jsref_obj_regexp.php">RegExp</a>
        <a class="bigbtn" href="jsref_statements.php">Statements</a>
        <a class="bigbtn" href="jsref_obj_string.php">String</a>
    </div>

    <h2 style="margin-top:20px;">HTML DOM Справочник</h2>
    <p>Справочники описывают свойства и методы каждого объекта DOM вместе с примерами.</p>

    <div class="refcont">
        <a class="bigbtn" href="dom_obj_attributes.php">Attributes</a>
        <a class="bigbtn" href="dom_obj_document.php">Document</a>
        <a class="bigbtn" href="dom_obj_all.php">Element</a>
        <a class="bigbtn" href="dom_obj_event.php">Events</a>
        <a class="bigbtn" href="obj_events.php">Event Objects</a>
        <a class="bigbtn" href="dom_obj_htmlcollection.php">HTMLCollection</a>
        <a class="bigbtn" href="obj_location.php">Location</a>
        <a class="bigbtn" href="obj_navigator.php">Navigator</a>
        <a class="bigbtn" href="obj_screen.php">Screen</a>
        <a class="bigbtn" href="dom_obj_style.php">Style</a>
        <a class="bigbtn" href="obj_window.php">Window</a>
    </div>

    <h2 style="margin-top:20px;">Web APIs</h2>
    <p>В этих справочниках описаны наиболее распространенные веб-API и приведены примеры.</p>

    <div class="refcont">
        <a class="bigbtn" href="api_console.php">Console</a>
        <a class="bigbtn" href="api_geolocation.php">Geolocation</a>
        <a class="bigbtn" href="api_history.php">History</a>
        <a class="bigbtn" href="api_storage.php">Storage</a>
    </div>

    <h2 style="margin-top:20px;">HTML Справочник по объектам элемента</h2>
    <p>В справочниках описаны свойства и методы каждого объекта HTML вместе с примерами.</p>

    <div style="width:100%;text-align:justify">
        <a class="smallbtn" href="dom_obj_anchor.php">a</a>
        <a class="smallbtn" href="dom_obj_abbr.php">abbr</a>
        <a class="smallbtn" href="dom_obj_address.php">address</a>
        <a class="smallbtn" href="dom_obj_area.php">area</a>
        <a class="smallbtn" href="dom_obj_article.php">article</a>
        <a class="smallbtn" href="dom_obj_aside.php">aside</a>
        <a class="smallbtn" href="dom_obj_audio.php">audio</a>
        <a class="smallbtn" href="dom_obj_b.php">b</a>
        <a class="smallbtn" href="dom_obj_base.php">base</a>
        <a class="smallbtn" href="dom_obj_bdo.php">bdo</a>
        <a class="smallbtn" href="dom_obj_blockquote.php">blockquote</a>
        <a class="smallbtn" href="dom_obj_body.php">body</a>
        <a class="smallbtn" href="dom_obj_br.php">br</a>
        <a class="smallbtn" href="dom_obj_pushbutton.php">button</a>
        <a class="smallbtn" href="dom_obj_canvas.php">canvas</a>
        <a class="smallbtn" href="dom_obj_caption.php">caption</a>
        <a class="smallbtn" href="dom_obj_cite.php">cite</a>
        <a class="smallbtn" href="dom_obj_code.php">code</a>
        <a class="smallbtn" href="dom_obj_col.php">col</a>
        <a class="smallbtn" href="dom_obj_colgroup.php">colgroup</a>
        <a class="smallbtn" href="dom_obj_datalist.php">datalist</a>
        <a class="smallbtn" href="dom_obj_dd.php">dd</a>
        <a class="smallbtn" href="dom_obj_del.php">del</a>
        <a class="smallbtn" href="dom_obj_details.php">details</a>
        <a class="smallbtn" href="dom_obj_dfn.php">dfn</a>
        <a class="smallbtn" href="dom_obj_dialog.php">dialog</a>
        <a class="smallbtn" href="dom_obj_div.php">div</a>
        <a class="smallbtn" href="dom_obj_dl.php">dl</a>
        <a class="smallbtn" href="dom_obj_dt.php">dt</a>
        <a class="smallbtn" href="dom_obj_em.php">em</a>
        <a class="smallbtn" href="dom_obj_embed.php">embed</a>
        <a class="smallbtn" href="dom_obj_fieldset.php">fieldset</a>
        <a class="smallbtn" href="dom_obj_figcaption.php">figcaption</a>
        <a class="smallbtn" href="dom_obj_figure.php">figure</a>
        <a class="smallbtn" href="dom_obj_footer.php">footer</a>
        <a class="smallbtn" href="dom_obj_form.php">form</a>
        <a class="smallbtn" href="dom_obj_head.php">head</a>
        <a class="smallbtn" href="dom_obj_header.php">header</a>
        <a class="smallbtn" href="dom_obj_heading.php">h1 - h6</a>
        <a class="smallbtn" href="dom_obj_hr.php">hr</a>
        <a class="smallbtn" href="dom_obj_html.php">html</a>
        <a class="smallbtn" href="dom_obj_i.php">i</a>
        <a class="smallbtn" href="dom_obj_frame.php">iframe</a>
        <a class="smallbtn" href="dom_obj_image.php">img</a>
        <a class="smallbtn" href="dom_obj_ins.php">ins</a>
        <a class="smallbtn" href="dom_obj_button.php">input button</a>
        <a class="smallbtn" href="dom_obj_checkbox.php">input checkbox</a>
        <a class="smallbtn" href="dom_obj_color.php">input color</a>
        <a class="smallbtn" href="dom_obj_date.php">input date</a>
        <a class="smallbtn" href="dom_obj_datetime.php">input datetime</a>
        <a class="smallbtn" href="dom_obj_datetime-local.php">input datetime-local</a>
        <a class="smallbtn" href="dom_obj_email.php">input email</a>
        <a class="smallbtn" href="dom_obj_fileupload.php">input file</a>
        <a class="smallbtn" href="dom_obj_hidden.php">input hidden</a>
        <a class="smallbtn" href="dom_obj_input_image.php">input image</a>
        <a class="smallbtn" href="dom_obj_month.php">input month</a>
        <a class="smallbtn" href="dom_obj_number.php">input number</a>
        <a class="smallbtn" href="dom_obj_password.php">input password</a>
        <a class="smallbtn" href="dom_obj_radio.php">input radio</a>
        <a class="smallbtn" href="dom_obj_range.php">input range</a>
        <a class="smallbtn" href="dom_obj_reset.php">input reset</a>
        <a class="smallbtn" href="dom_obj_search.php">input search</a>
        <a class="smallbtn" href="dom_obj_submit.php">input submit</a>
        <a class="smallbtn" href="dom_obj_text.php">input text</a>
        <a class="smallbtn" href="dom_obj_input_time.php">input time</a>
        <a class="smallbtn" href="dom_obj_url.php">input url</a>
        <a class="smallbtn" href="dom_obj_week.php">input week</a>
        <a class="smallbtn" href="dom_obj_kbd.php">kbd</a>
        <a class="smallbtn" href="dom_obj_label.php">label</a>
        <a class="smallbtn" href="dom_obj_legend.php">legend</a>
        <a class="smallbtn" href="dom_obj_li.php">li</a>
        <a class="smallbtn" href="dom_obj_link.php">link</a>
        <a class="smallbtn" href="dom_obj_map.php">map</a>
        <a class="smallbtn" href="dom_obj_mark.php">mark</a>
        <a class="smallbtn" href="dom_obj_menu.php">menu</a>
        <a class="smallbtn" href="dom_obj_menuitem.php">menuitem</a>
        <a class="smallbtn" href="dom_obj_meta.php">meta</a>
        <a class="smallbtn" href="dom_obj_meter.php">meter</a>
        <a class="smallbtn" href="dom_obj_nav.php">nav</a>
        <a class="smallbtn" href="dom_obj_object.php">object</a>
        <a class="smallbtn" href="dom_obj_ol.php">ol</a>
        <a class="smallbtn" href="dom_obj_optgroup.php">optgroup</a>
        <a class="smallbtn" href="dom_obj_option.php">option</a>
        <a class="smallbtn" href="dom_obj_output.php">output</a>
        <a class="smallbtn" href="dom_obj_paragraph.php">p</a>
        <a class="smallbtn" href="dom_obj_param.php">param</a>
        <a class="smallbtn" href="dom_obj_pre.php">pre</a>
        <a class="smallbtn" href="dom_obj_progress.php">progress</a>
        <a class="smallbtn" href="dom_obj_quote.php">q</a>
        <a class="smallbtn" href="dom_obj_s.php">s</a>
        <a class="smallbtn" href="dom_obj_samp.php">samp</a>
        <a class="smallbtn" href="dom_obj_script.php">script</a>
        <a class="smallbtn" href="dom_obj_section.php">section</a>
        <a class="smallbtn" href="dom_obj_select.php">select</a>
        <a class="smallbtn" href="dom_obj_small.php">small</a>
        <a class="smallbtn" href="dom_obj_source.php">source</a>
        <a class="smallbtn" href="dom_obj_span.php">span</a>
        <a class="smallbtn" href="dom_obj_strong.php">strong</a>
        <a class="smallbtn" href="dom_obj_style.php">style</a>
        <a class="smallbtn" href="dom_obj_sub.php">sub</a>
        <a class="smallbtn" href="dom_obj_summary.php">summary</a>
        <a class="smallbtn" href="dom_obj_sup.php">sup</a>
        <a class="smallbtn" href="dom_obj_table.php">table</a>
        <a class="smallbtn" href="dom_obj_tbody.php">tbody</a>
        <a class="smallbtn" href="dom_obj_tabledata.php">td</a>
        <a class="smallbtn" href="dom_obj_tfoot.php">tfoot</a>
        <a class="smallbtn" href="dom_obj_tablehead.php">th</a>
        <a class="smallbtn" href="dom_obj_thead.php">thead</a>
        <a class="smallbtn" href="dom_obj_tablerow.php">tr</a>
        <a class="smallbtn" href="dom_obj_textarea.php">textarea</a>
        <a class="smallbtn" href="dom_obj_time.php">time</a>
        <a class="smallbtn" href="dom_obj_title.php">title</a>
        <a class="smallbtn" href="dom_obj_track.php">track</a>
        <a class="smallbtn" href="dom_obj_u.php">u</a>
        <a class="smallbtn" href="dom_obj_ul.php">ul</a>
        <a class="smallbtn" href="dom_obj_var.php">var</a>
        <a class="smallbtn" href="dom_obj_video.php">video</a>
    </div>
    <p style="clear:both;"></p>

    <h2 style="margin-top:20px;">Другие</h2>
    <div class="refcont">
        <a class="bigbtn w3-mobile" style="width:49%" href="obj_cssstyledeclaration.php">CSSStyleDeclaration</a>
        <a class="bigbtn w3-mobile" style="width:49%" href="jsref_type_conversion.php">JS Conversion</a>
    </div>
    <br>
    <hr>
    <h2>JavaScript Учебник</h2>
    <p><a class="w3-button w3-green w3-margin-bottom" href="/js/index.php">Посетите JavaScript Учебник &raquo;</a></p>
    <hr>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="../index.php">&#10094; Home</a>
        <a class="w3-right w3-btn" href="jsref_reference.php">Next &#10095;</a>
    </div>
</article>

</div>

<?php include '../include/rightbar_js.php'; ?>
<?php include '../include/footer.php'; ?>
