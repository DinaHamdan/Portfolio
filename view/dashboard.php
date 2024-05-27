<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="/asset/css/style.css">
</head>

<body>

    <main>

        <table border="1">


            <!-- Entêtes de colonne écrites 'en dur' -->
            <thead>
                <tr>
                    <th>id</th>
                    <th>numeroIMO</th>
                    <th>nom</th>
                    <th>idTypeNavire</th>
                    <th>action</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listMessages as $message) { ?>

                    <tr>
                        <td><a href="/ctrl/navire/navire.php?id=<?= $navire['id'] ?>"><?= $navire['id'] ?></a></td>
                        <td><?= $navire['numeroIMO'] ?></td>
                        <td><?= $navire['nom'] ?></td>
                        <td><?= $navire['idTypeNavire'] ?></td>
                        <td><a href="/ctrl/navire/remove.php?id=<?= $navire['id'] ?>" onclick="return confirm('are you sure you want to remove?');">Remove</a>
                        </td>
                        <td><a href="/ctrl/navire/update-display.php?id=<?= $navire['id'] ?>">Update</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </main>
    <footer>
    </footer>

</body>