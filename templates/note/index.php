
<div class="registerh1">
    <h1> <?php echo $_SESSION['userName']?>, Noten Übersicht</h1>
</div> <br>

<article class="hreview open special">

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
                            <th><?= $note->fachID; ?></th>

                            <th><a title="Löschen" href="/Note/delete?id=<?= $note->id; ?>">Löschen</a></th>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <form action="/note/create" method="post">
                <button type="button" class="btn btn-success">Noten eintragen</button>
                <button type="button" class="btn btn-danger">Zurück</button>
            </form>

            </div>
        </div>

    <?php endif; ?>
</article>
