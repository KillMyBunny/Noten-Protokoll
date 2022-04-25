
<div class="registerh1">
    <h1> <?php echo $_SESSION['userName']?>, Noten Übersicht</h1>
</div> <br>

<article class="hreview open special">

    <form action="/logout" method="post">
        <input type="submit" value="logout">
    </form>
<<<<<<< HEAD



=======
    <table class = "noteübersicht">
>>>>>>> 462c0226683fe36311176a8b3f5daf3fd5966c3f
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
                            <th><a title="Edit" href="/Note/update?id=<?= $note->id; ?>">Edit</a></th>
                        </tr>
                    <?php endforeach; ?>
                </table>
<<<<<<< HEAD

=======
            </table>
>>>>>>> 462c0226683fe36311176a8b3f5daf3fd5966c3f

        </div>

    <?php endif; ?>
</article>
<<<<<<< HEAD
<a href="/note/create" class="btn btn-success" role="button">Note eintragen</a> <a href="/login" class="btn btn-danger" role="button">Logout</a>
=======
<a href="/note/create" class="btn btn-success" role="button">Note eintragen</a>
>>>>>>> 462c0226683fe36311176a8b3f5daf3fd5966c3f
