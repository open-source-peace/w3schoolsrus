function init_pagination() {
  var pagescount, i, txt = "", activePage, fromPos, toPos, x, prevPage, nextPage, able = "";
  pagescount = 8;
  activePage = window.location.pathname;
  if (activePage.indexOf(".html") == -1) {activePage = "index.html";}
  if (activePage.indexOf("index.html") > -1) {
    activePage = 1;
  } else {
    fromPos = activePage.indexOf("index_page") + 12;
    toPos = activePage.indexOf(".html");
    activePage = activePage.substring(fromPos, toPos);
  }
  if (activePage == 1) {
    able = " pagdisabled"
    prevPage = "index.html"
  } else if (activePage == 2) {
    prevPage = "index.html";
  } else {
    prevPage = "index_page" + (activePage - 1) + ".html";
  }
  if (activePage == pagescount) {
    nextPage = "index.html";
  } else {
    nextPage = "index_page" + (parseInt(activePage) + 1) + ".html";
  }
  for (i = 1; i <= pagescount; i++) {
    defPage = "index_page" + i + ".html";
    if (i == 1) {
      txt += "<a class='howtopag_item" + able + "' href='" + prevPage + "'>&#10094;</a>";
      defPage = "index.html";
    }
    txt += "<a class='howtopag_item' href='" + defPage + "'>" + i + "</a>";
    if (i == pagescount) {
      txt += "<a class='howtopag_item' href='" + nextPage + "'>&#10095;</a>";
    }
  }
  x = document.getElementsByClassName("howtopag");
  for (i = 0; i < x.length; i++) {
    x[i].innerHTML = txt;
    x[i].getElementsByClassName("howtopag_item")[activePage].classList.add("pagactive");
  }  
}

