

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';

/** 
 * @param string matricule Matricule d'enregistrement à la compagnie de navigation.
 * @param string nom nom de famille, corse de préférence
 * @param string prenom Prénom
 * @return boolean Succès ou échec.
 * 
 * */
class LibAdmin
{
    //List user with email only
    static function getAdmin(string $username): ?array
    {
        $query = 'SELECT admin.username,admin.pass,admin.codeRole';
        $query .= ' FROM admin ';
        $query .= ' WHERE admin.username= :username';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':username', $username);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $admin = $statement->fetch(PDO::FETCH_ASSOC);
        // var_dump($admin);
        if ($admin == false) {
            $admin = null;
        };
        return $admin;
    }
}
