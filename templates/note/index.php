<h2>Hallo <?php echo $_SESSION['userName']?> hier ist eine Übersicht aller Noten</h2>

<article class="hreview open special">

    <table class = "noteübersicht">
    <caption>Noten Übersicht</caption>
    <tr>
        <th>note</th>
        <th>Date</th>

    </tr>

    <?php if (empty($notes)): ?>

    <?php else: ?>
        <?php
        ?>


        <div class="panel panel-default">
            <div class="panel-heading">
<<<<<<< HEAD
                <table>
                    <caption>Noten Übersicht</caption>
                    <tr>
                        <th>note</th>
                        <th>Date</th>
                        <th>Fach</th>
                        <th></th>
                    </tr>
=======


>>>>>>> 8827825e8886970c124ac35e92cd3c46b9c70e57
                    <?php foreach ($notes as $note): ?>
                        <tr>

                            <th><?= $note->Note; ?></th>
                            <th><?= $note->Date; ?></th>
                            <th><?= $note->fachID; ?></th>

                            <th><a title="Löschen" href="/Note/delete?id=<?= $note->id; ?>">Löschen</a></th>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>

    <?php endif; ?>
</article>
<form action="/note/create" method="post"> <button name="noteEintragen" >Noten eintragen</button></form>