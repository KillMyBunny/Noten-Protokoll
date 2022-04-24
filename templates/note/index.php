<h2>Hallo <?php echo $_SESSION['userName']?> hier ist eine Übersicht aller Fächer</h2>

<article class="hreview open special">
    <?php if (empty($notes)): ?>
        <div class="dhd">
            <h2 class="item title">Hoopla! Keine User gefunden.</h2>
        </div>

    <?php else: ?>
        <?php
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <table>
                    <tr>
                        <th>note</th>
                        <th>Date</th>
                        <th>button</th>
                    </tr>
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
<div>
    <form action="/note/doCreate" method="post">
        <label for="email"><b>Note</b></label>
        <input type="number" placeholder="Enter note" name="noteInput" min="1.0" max="6.0" required>

        <label for="psw"><b>Date</b></label>
        <input type="date" placeholder="Enter Date" name="dateInput" required>

        <button name="noteSave">save</button>
    </form>
</div>