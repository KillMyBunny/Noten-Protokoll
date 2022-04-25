
<div class="registerh1">
    <h1> <?php echo $_SESSION['userName']?>, Noten Übersicht</h1>
</div> <br>

<article class="hreview open special">

    <form action="/logout" method="post">
        <input type="submit" value="logout">
    </form>
    <table class = "noteübersicht">
    <table class="table">
    <tr>
        <th>Noten</th>
        <th>Datum</th>
        <th>Fach Nummer</th>

    </tr>

    <?php if (empty($notes)): ?>
    <h2>Sie haben noch kein Note</h2>
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
            </table>

        </div>

    <?php endif; ?>
</article>
<a href="/note/create" class="btn btn-success" role="button">Note eintragen</a>