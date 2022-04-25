
<div class="registerh1">
    <h1> <?php echo $_SESSION['userName']?>, Noten Übersicht</h1>
</div> <br>

<article class="hreview open special">

    <form action="/logout" method="post">
        <input type="submit" value="logout">
    </form>
    <table class = "noteübersicht">
    <caption>Noten Übersicht</caption>

    <table class="table">
    <tr>
        <th>Noten</th>
        <th>Datum</th>
        <th>Fach Nummer</th>

    </tr>

    <?php if (empty($notes)): ?>

    <?php else: ?>
        <?php
        ?>


        <div class="panel panel-default">
            <div class="panel-heading">



                    <?php foreach ($notes as $note): ?>
                        <tr>

                            <th><?= $note->Note; ?></th>
                            <th><?= $note->Date; ?></th>
                            <th><?= $note->f_name; ?></th>

                            <th><a title="Löschen" href="/Note/delete?id=<?= $note->id; ?>">Löschen</a></th>
                        </tr>
                    <?php endforeach; ?>
                </table>


    <a href="/note/create" class="btn btn-success" role="button">Note eintragen</a> <a href="/login" class="btn btn-danger" role="button">Zurück</a>




            </div>
        </div>

    <?php endif; ?>
</article>
