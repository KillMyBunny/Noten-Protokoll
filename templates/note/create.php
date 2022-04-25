<?php
?>
<div>

    <div class="registerh1">
        <h1>Noten eintragen</h1>

    </div>
    <div class="register">
        <form action="/note/doCreate" method="post">

            <label for="note"><b>Note: </b></label>
            <input type="number" placeholder="Note eingeben" name="noteInput" min="1.0" max="6.0" step="0.25" required>

            <label for="psw"><b>Date: </b></label>
            <input type="date" placeholder="Enter Date" name="dateInput" required>


            <button name="noteabbruch">abbruch</button>
            <input type="submit" value="bestätigen">
        </form>
    </div>
</div>