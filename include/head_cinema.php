<!DOCTYPE html>
<html lang='ru'>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<link rel='icon' href='../favicon.ico' type='image/x-icon'>
<link rel='stylesheet' href='../styles/w3.css'>
<link rel='stylesheet' href='../styles/external.css'>
<script src="../scripts/howto.js"></script>
<style>
    .searchinput {
        background-image: url('../images/searchicon.png');
        background-position: 8px 6px;
        background-repeat: no-repeat;
        width: 91%;
        font-size: 14px;
        padding: 6px 6px 6px 40px;
        border: 1px solid #ddd;
        margin: 0 0 20px 10px;
    }
</style>
<script>
    function filterContent(elmnt) {
        var x, i, val, show, showh2, showbr;
        val = elmnt.value;
        x = document.getElementById("leftmenuinnerinner").getElementsByTagName("*");
        for (i = 1; i < x.length; i++) {
            if (x[i].tagName == "H2") {
                if (showh2) {
                    if (show == false) {
                        showh2.style.display = "none";
                    } else {
                        showh2.style.display = "block";
                    }
                }
                show = false;
                showh2 = x[i];
            }
            if (x[i].tagName == "BR") {
                if (showbr) {
                    if (show == false) {
                        showbr.style.display = "none";
                    } else {
                        showbr.style.display = "block";
                    }
                }
                showbr = x[i];
            }
            if (x[i].tagName == "A") {
                if (x[i].innerHTML.toUpperCase().indexOf(val.toUpperCase()) == -1) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "block";
                    show = true;
                }
            }
            if (showh2) {
                if (show == false) {
                    showh2.style.display = "none";
                } else {
                    showh2.style.display = "block";
                }
            }
        }
    }
</script>