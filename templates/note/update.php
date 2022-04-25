<div>

    <div class="registerh1">
        <h1>Noten bearbeiten</h1>

    </div>
    <div class="register">
        <form action="/note/doUpdate" method="post">

            <label for="note"><b>Note: </b></label>
            <input id="titel" type="number" value="<?= $note->note ?>" name="titel" min="1.0" max="6.0" step="0.25" required>

            <label for="psw"><b>Date: </b></label>
            <input id="datum" type="date" name="datum"  value="<?= $note->datum ?>" required>


            <a href="/note/index" class="btn btn-danger" role="button">Zurück</a>
            <input type="submit" value="Bestätigen">
        </form>
    </div>
</div>