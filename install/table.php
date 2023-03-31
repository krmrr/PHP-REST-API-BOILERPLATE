<?php 

    include_once("../system/settings.php");
    include_once("../system/database.php");
    include_once("../system/function.php");

    $mysqli->query("CREATE TABLE `project`.`wallets` (`id` INT NOT NULL AUTO_INCREMENT , `address` VARCHAR(99) NOT NULL , `my_reference` VARCHAR(15) NOT NULL , `incoming_reference` VARCHAR(15) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");

    getMessage('Create tablest', 'SUCCESFULL');

?>