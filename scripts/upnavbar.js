// Открытие и закрытие верхнего навбара со списком уроков
    function openLangTab(evtEd, codeName) {
    let indexEditor, proglanguage, progtablinks;
    proglanguage = document.getElementsByClassName("proglang");
    for (indexEditor = 0; indexEditor < proglanguage.length; indexEditor++) {
    proglanguage[indexEditor].style.display = "none";
}
    progtablinks = document.getElementsByClassName("codeeditorbr-tablink");
    for (indexEditor = 0; indexEditor < proglanguage.length; indexEditor++) {
    progtablinks[indexEditor].className = progtablinks[indexEditor].className.replace(" ws-grey", "");
}
    document.getElementById(codeName).style.display = "block";
    evtEd.currentTarget.className += " ws-grey";
}
    function w3_open() {
    let x = document.getElementById("myAccordion");
    if (x.style.display === 'none') {
    x.style.display = 'block';
    if (document.getElementById("navbtn_menu")) {
    document.getElementById("navbtn_menu").getElementsByTagName("i")[0].style.display = "none";
    document.getElementById("navbtn_menu").getElementsByTagName("i")[1].style.display = "inline";
}
} else {
    x.style.display = 'none';
    if (document.getElementById("navbtn_menu")) {
    document.getElementById("navbtn_menu").getElementsByTagName("i")[0].style.display = "inline";
    document.getElementById("navbtn_menu").getElementsByTagName("i")[1].style.display = "none";
}
}
}
    function w3_close() {
    document.getElementById("myAccordion").style.display = "none";
}
    function open_xs_menu(x) {
    if (document.getElementById("sectionxs_" + x).innerHTML == "") {
    document.getElementById("sectionxs_" + x).innerHTML = document.getElementById("nav_" + x).innerHTML;
} else {
    document.getElementById("sectionxs_" + x).innerHTML = "";
}
}
    function w3_open_nav(x) {
    if (document.getElementById("nav_" + x).style.display == "block") {
    w3_close_nav(x);
} else {
    w3_close_nav("tutorials");
    w3_close_nav("references");
    w3_close_nav("exercises");
    document.getElementById("nav_" + x).style.display = "block";
    if (document.getElementById("navbtn_" + x)) {
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
    document.getElementById("navbtn_" + x).classList.add("mystyle");
}
    if (x == "search") {
    if (document.getElementById("gsc-i-id1")) {document.getElementById("gsc-i-id1").focus(); }
}
}
}
    function w3_close_all_nav() {
    w3_close_nav("tutorials");
    w3_close_nav("references");
    w3_close_nav("exercises");
    w3_close();
}
    function w3_close_nav(x) {
    document.getElementById("nav_" + x).style.display = "none";
    if (document.getElementById("navbtn_" + x)) {
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "inline";
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "none";
    document.getElementById("navbtn_" + x).classList.remove("mystyle");
}
}

    function changecodetheme() {
    let cc = document.body.className;
    if (cc.indexOf("darktheme") > -1) {
    document.body.className = cc.replace("darktheme", "");
    localStorage.setItem("preferredmode", "light");
} else {
    document.body.className += " darktheme";
    localStorage.setItem("preferredmode", "dark");
}
}
    function open_translate(elmnt) {
    let a = document.getElementById("google_translate_element");
    if (a.style.display == "") {
    a.style.display = "none";
    elmnt.innerHTML = "<i class='fa'>&#xe801;</i>";
} else {
    a.style.display = "";
    if (window.innerWidth > 830) {
    a.style.width = "32%";
} else {
    a.style.width = "60%";
}
    elmnt.innerHTML = "<span style='font-size:17px;font-family:verdana sans-serif;font-weight:bold;display:inline-block;text-align:center;'>&times;</span>";
}
}
    function open_search(elmnt) {
    let a = document.getElementById("googleSearch");
    document.getElementById("navbtn_tutorials").style.visibility = "visible";
    if (a.style.display == "") {
    a.style.display = "none";
    elmnt.innerHTML = "<i class='fa'>&#xe802;</i>";
} else {
    a.style.display = "";
    if (window.innerWidth > 1000) {
    a.style.width = "50%";
} else if (window.innerWidth >768) {
    document.getElementById("navbtn_tutorials").style.visibility = "hidden";
    a.style.width = "80%";
} else {
    a.style.width = "80%";
}
    window.setTimeout(function () {
    if (document.getElementById("gsc-i-id1")) {
    document.getElementById("gsc-i-id1").focus();
}
}, 400);
}
}