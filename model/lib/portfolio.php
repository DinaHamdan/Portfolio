

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
    //Create message
    static function createMessage(string $fname, string $lname, string $email, string $phoneNumber, string $contactMsg): bool
    {
        $query = 'INSERT INTO message( fname, lname, email, phoneNumber, contactMsg) VALUES (:fname, :lname, :email, :phoneNumber, :contactMsg)';

        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':fname', $fname);
        $statement->bindParam(':lname', $lname);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':phoneNumber', $phoneNumber);
        $statement->bindParam(':contactMsg', $contactMsg);

        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
    //List messages
    static function getAllMessages(): array
    {
        $query = 'SELECT message.id, message.fname, message.lname, message.email, message.phoneNumber, message.contactMsg';
        $query .= ' FROM message';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $message = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $message;
    }
}
