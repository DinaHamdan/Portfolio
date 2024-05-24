-- - Supprime la base de données si elle existe déjà
-- - Crée la base de données
-- - Mentionne le nom de la base de données à utiliser pour exécuter les commandes SQL qui suivent
DROP DATABASE IF EXISTS `message-portfolio-DHA`;
CREATE DATABASE IF NOT EXISTS `message-portfolio-DHA`;
USE `message-portfolio-DHA`;

-- -------------
-- TABLES
-- -------------

CREATE TABLE message(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
 ,fname varchar(50) NOT NULL
 ,lname varchar(50) NOT NULL
 ,email varchar(50) NOT NULL
 ,phoneNumber bigint(20) NOT NULL
)
;

CREATE TABLE user (
   id bigint(100) NOT NULL AUTO_INCREMENT PRIMARY KEY
 ,fname varchar(50) NOT NULL
 ,lname varchar(50) NOT NULL
 ,email varchar(50) NOT NULL
 ,phoneNumber bigint(20) NOT NULL
)
;


-- -- -------------
-- -- CONTRAINTES
-- -- -------------

-- ALTER TABLE user
--    ADD CONSTRAINT `u_user_email` UNIQUE(email)
--    ,ADD CONSTRAINT `fk_role_user` FOREIGN KEY(idRole) REFERENCES role(id)
-- ;

-- ALTER TABLE role
--    ADD CONSTRAINT `u_role_code` UNIQUE(code)
  
-- ;
