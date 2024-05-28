<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>

<body>

    <main>
        <h1><?php $pageTitle ?></h1>

        <table border="1">
            <!-- Entêtes de colonne écrites 'en dur' -->
            <thead>
                <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listMessage as $message) { ?>
                    <tr>
                        <td><?= $message['id'] ?></td>
                        <td><?= $message['fname'] ?></td>
                        <td><?= $message['lname']  ?></td>
                        <td><?= $message['phoneNumber']  ?></td>
                        <td><?= $message['email']  ?></td>
                        <td><?= $message['contactMsg'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </main>
    <footer>
    </footer>

</body>