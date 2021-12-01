<?php include '../include/head.php'; ?>
<title>HTML Валидные DOCTYPE. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Элементы и валидные (действительные) DOCTYPE в HTML. Справочник. Какие существуют типы веб-документов? Курс по основам HTML5. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_tags.php'; ?>
<?php include '../include/before_content_tags.php'; ?>

<article>
  <h1>HTML &lt;!DOCTYPE&gt;</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_charactersets.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_urlencode.php'>Next &#10095;</a>
  </div>
  <hr>
  <h2>Тип документа HTML</h2>
  <p>Все документы HTML должны начинаться с объявления <code class='w3-codespan'><a href='tag_doctype.php'>&lt;!DOCTYPE&gt;</a></code>.</p>

  <p>Объявление не является тегом HTML. Это 'информация' для браузера о том, какой тип документа следует ожидать.</p>

  <p>В HTML5 объявление <code class='w3-codespan'>&lt;!DOCTYPE&gt;</code> простое:</p>
  <div class='w3-code w3-border w3-light-grey notranslate htmlHigh'>
  &lt;!DOCTYPE html&gt;
  </div>

  <p>В старых документах (HTML 4 или XHTML) объявление более сложное, поскольку объявление должно ссылаться на DTD (определение типа документа).</p>

  <div class='w3-code w3-border w3-light-grey notranslate htmlHigh'>
      &lt;!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'&gt;
  </div>

  <div class='w3-code w3-border w3-light-grey notranslate htmlHigh'>
      &lt;!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.1//EN' 'http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd'&gt;
  </div>
  <p>Вы можете узнать больше о типах документов в справочнике <a href='tag_doctype.php'>&lt;!DOCTYPE&gt;</a>.</p>
  <hr>

  <h2>Допустимые элементы HTML в разных DOCTYPE</h2>
  <p>В приведённой ниже таблице приведены все HTML элементы и показано, как каждый элемент отображается в разных <a href='tag_doctype.php'>!DOCTYPE</a>.</p>
  <table class='w3-table-all notranslate'>
    <tbody><tr>
      <th style='width:39%'>Тег</th>
      <th style='width:20%'>HTML 5</th>
      <th style='width:20%'>HTML 4</th>
      <th style='width:20%'>XHTML</th>
    </tr>
    <tr>
      <td><a href='tag_a.php'>&lt;a&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_abbr.php'>&lt;abbr&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_acronym.php'>&lt;acronym&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_address.php'>&lt;address&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_applet.php'>&lt;applet&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_area.php'>&lt;area&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_article.php'>&lt;article&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_aside.php'>&lt;aside&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_audio.php'>&lt;audio&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_b.php'>&lt;b&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_base.php'>&lt;base&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_basefont.php'>&lt;basefont&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_bdi.php'>&lt;bdi&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_bdo.php'>&lt;bdo&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_big.php'>&lt;big&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_blockquote.php'>&lt;blockquote&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_body.php'>&lt;body&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_br.php'>&lt;br&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_button.php'>&lt;button&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_canvas.php'>&lt;canvas&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_caption.php'>&lt;caption&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_center.php'>&lt;center&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_cite.php'>&lt;cite&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_code.php'>&lt;code&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_col.php'>&lt;col&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_colgroup.php'>&lt;colgroup&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_datalist.php'>&lt;datalist&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_dd.php'>&lt;dd&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_del.php'>&lt;del&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_details.php'>&lt;details&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_dfn.php'>&lt;dfn&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_dialog.php'>&lt;dialog&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_dir.php'>&lt;dir&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_div.php'>&lt;div&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_dl.php'>&lt;dl&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_dt.php'>&lt;dt&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_em.php'>&lt;em&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_embed.php'>&lt;embed&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_fieldset.php'>&lt;fieldset&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_figcaption.php'>&lt;figcaption&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_figure.php'>&lt;figure&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_font.php'>&lt;font&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_footer.php'>&lt;footer&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_form.php'>&lt;form&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_frame.php'>&lt;frame&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_frameset.php'>&lt;frameset&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_hn.php'>&lt;h1&gt; to &lt;h6&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_head.php'>&lt;head&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_header.php'>&lt;header&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_hr.php'>&lt;hr&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_html.php'>&lt;html&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_i.php'>&lt;i&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_iframe.php'>&lt;iframe&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_img.php'>&lt;img&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_input.php'>&lt;input&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_ins.php'>&lt;ins&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_kbd.php'>&lt;kbd&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_label.php'>&lt;label&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_legend.php'>&lt;legend&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_li.php'>&lt;li&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_link.php'>&lt;link&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_main.php'>&lt;main&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_map.php'>&lt;map&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_mark.php'>&lt;mark&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_meta.php'>&lt;meta&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_meter.php'>&lt;meter&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_nav.php'>&lt;nav&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_noframes.php'>&lt;noframes&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_noscript.php'>&lt;noscript&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_object.php'>&lt;object&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_ol.php'>&lt;ol&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_optgroup.php'>&lt;optgroup&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_option.php'>&lt;option&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_output.php'>&lt;output&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_p.php'>&lt;p&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_param.php'>&lt;param&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_pre.php'>&lt;pre&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_progress.php'>&lt;progress&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_q.php'>&lt;q&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_rp.php'>&lt;rp&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_rt.php'>&lt;rt&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_ruby.php'>&lt;ruby&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_s.php'>&lt;s&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_samp.php'>&lt;samp&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_script.php'>&lt;script&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_section.php'>&lt;section&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_select.php'>&lt;select&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_small.php'>&lt;small&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_source.php'>&lt;source&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_span.php'>&lt;span&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_strike.php'>&lt;strike&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_strong.php'>&lt;strong&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_style.php'>&lt;style&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_sub.php'>&lt;sub&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_summary.php'>&lt;summary&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_sup.php'>&lt;sup&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_table.php'>&lt;table&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_tbody.php'>&lt;tbody&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_td.php'>&lt;td&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_textarea.php'>&lt;textarea&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_tfoot.php'>&lt;tfoot&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_th.php'>&lt;th&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_thead.php'>&lt;thead&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_time.php'>&lt;time&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_title.php'>&lt;title&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_tr.php'>&lt;tr&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_track.php'>&lt;track&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_tt.php'>&lt;tt&gt;</a></td>
      <td><span class='marked'>No</span></td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_u.php'>&lt;u&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_ul.php'>&lt;ul&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_var.php'>&lt;var&gt;</a></td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td><a href='tag_video.php'>&lt;video&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    <tr>
      <td><a href='tag_wbr.php'>&lt;wbr&gt;</a></td>
      <td>Yes</td>
      <td><span class='marked'>No</span></td>
      <td><span class='marked'>No</span></td>
    </tr>
    </tbody></table>
  <br>

  <br>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='ref_charactersets.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='ref_urlencode.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>
