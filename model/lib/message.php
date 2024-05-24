

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';

/** 
 * @param string matricule Matricule d'enregistrement à la compagnie de navigation.
 * @param string nom nom de famille, corse de préférence
 * @param string prenom Prénom
 * @return boolean Succès ou échec.
 * 
 * */
class LibUser
{

    static function getMsg(string $email): array
    {
        $query = 'SELECT username.email, username.pass, role.id, role.code AS codeRole, role.label';
        $query .= ' FROM username ';
        $query .= ' JOIN role ON username.idRole = role.id';
        $query .= ' WHERE username.email= :email';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':email', $email);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $msg = $statement->fetch(PDO::FETCH_ASSOC);
   
        return $msg;
    }
}
