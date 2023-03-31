<?php 


if($type === "add_referance") {

    if(!isset($_POST["address"]) and !isset($_POST["referance"])) {
        if(!isset($_POST["address"])) {
            getMessage('No address arguman', 'ERROR');
            http_response_code(400);
        } elseif(!isset($_POST["referance"])) {
            getMessage('No referance arguman', 'ERROR');
            http_response_code(400);
        } else {
            getMessage('No referance or address arguman', 'ERROR');
            http_response_code(400);
        }
    } else {

        $address = $_POST["address"];
        $wallet_db = $mysqli->query("SELECT * FROM wallets WHERE address='$address'");
        $referance = $_POST["referance"];

        if(sql_number($wallet_db) < 1) {
            getMessage('No wallet database', 'ERROR');
            http_response_code(400);
        } else {

            if(strlen($referance) !== 15){
                getMessage('Invalid referance', 'ERROR');
                http_response_code(400);
            } else {
                $mysqli->query("UPDATE wallets SET incoming_reference='$referance' WHERE address='$address' ");
                getMessage('Update Referance', 'SUCCESFULL');
                http_response_code(200);
            }
            
        }
     }

}

?>
