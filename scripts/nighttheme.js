function nightmode(n) {
    if (document.body.className == "darktheme dark_" + n) {
        document.body.className = "darktheme";
    } else {
        document.body.className = "darktheme dark_" + n;
    }
}