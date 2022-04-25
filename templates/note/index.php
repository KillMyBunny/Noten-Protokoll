<h2>Hallo <?php echo $_SESSION['userName']?> hier ist eine Übersicht aller Noten</h2>

<article class="hreview open special">
    <form action="/note/create" method="post"> <button name="noteEintragen" >Noten eintragen</button></form>

    <?php if (empty($notes)): ?>

    <?php else: ?>
        <?php
        ?>
        <caption>Noten Übersicht</caption>
        <table>

            <tr>
                <th>note</th>
                <th>Date</th>
                <th>button</th>
            </tr>

        <div class="panel panel-default">
            <div class="panel-heading">


                    <?php foreach ($notes as $note): ?>
                        <tr>

                            <th><?= $note->Note; ?></th>
                            <th><?= $note->Date; ?></th>

                            <th><a title="Löschen" href="/Note/delete?id=<?= $note->id; ?>">Löschen</a></th>
                        </tr>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>

    <?php endif; ?>
</article>
