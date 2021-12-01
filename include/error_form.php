<!--Блок Сообщить о проблеме-->
<div id="err_form" class="w3-modal" style="z-index:4">
    <div class="w3-modal-content w3-display-container">
        <span onclick="document.getElementById('err_form').style.display='none'" class="w3-button w3-display-topright w3-text-white w3-padding w3-green" style="font-weight:bold;">&times;</span>
        <div class="w3-container w3-green">
            <h2>Сообщить о проблеме:</h2>
        </div>
        <form class="w3-container">
            <p><label for="err_email">Ваш E-mail:</label>
                <input class="w3-input w3-border" type="text" style="width:100%" id="err_email" name="err_email">
            </p>
            <p>
                <label for="err_email">Адрес страницы:</label>
                <input class="w3-input w3-border" type="text" style="width:100%" id="err_url" name="err_url" disabled="disabled">
            </p>
            <p>
                <label for="err_email">Описание:</label>
                <textarea rows="10" class="w3-input w3-border" id="err_desc" name="err_desc" style="width:100%;resize:vertical"></textarea>
            </p>
            <button class="w3-btn w3-right w3-green w3-margin-bottom" type="button" onclick="sendErr()">Отправить</button>
        </form>
    </div>
</div>
<!--/Блок Сообщить о проблеме-->