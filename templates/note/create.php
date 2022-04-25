<?php
?>
<div>
    <caption>Noten eintragen</caption>
    <form action="/note/doCreate" method="post">

        <label for="note"><b>Note</b></label>
        <input type="number" placeholder="Enter note" name="noteInput" min="1.0" max="6.0" step="0.25" required>

        <label for="psw"><b>Date</b></label>
        <input type="date" placeholder="Enter Date" name="dateInput" required>

        <button name="noteSave">save</button>
    </form>
</div>