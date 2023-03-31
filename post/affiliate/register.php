<?php 

if($type === "affiliate_wallet") {
    

    if(!isset($_POST["address"])) {

        getMessage('No address arguman', 'ERROR');
        http_response_code(400);

    } else {
        
        $address = $_POST["address"];
        $res = $mysqli->query("SELECT * FROM wallets WHERE address='$address'");
        $createCode = generateKey();

        if(sql_number($res) < 1){
            
            $sql = "INSERT INTO wallets (address,my_reference";

            if(isset($_POST["incoming"])) {
                $incoming = $_POST["incoming"];

                $sql.= ",incoming_reference)";
                $sql.= " VALUES ('$address','$createCode','$incoming')";

            } else {
                $sql.= ")";
                $sql.= " VALUES ('$address','$createCode')";
            } 

            $mysqli->query($sql);
            $database = $mysqli->query("SELECT * FROM wallets WHERE address='$address'");

             if(sql_number($database) > 0) {

                $request = $database->fetch_assoc();
                
                if(isset($_POST["incoming"])) { 
                    $coming_res = $mysqli->query("SELECT * FROM wallets WHERE my_reference='$incoming'");
                    $coming_req = $coming_res->fetch_assoc();

                    $affilliate = Array(
                        'referance_code' => $coming_req['my_reference'],
                        'referance_wallet' => $coming_req['address']
                    );
                } else {
                    $affilliate = array(
                        'referance_code' => NULL,
                        'referance_wallet' => NULL,
                    );  
                } 

                $data = array(
                    'id' => $request['id'],
                    'address' => $request['address'],
                    'referance' => $request['my_reference'],
                    'affilliate' => $affilliate
                );   

                $json = json_encode($data);   
                echo $json;

                http_response_code(200);
                
             }


        } else {
            $req = $res->fetch_assoc();

            if($req["incoming_reference"] != NULL) { 

                $incoming = $req["incoming_reference"];

                $coming_res = $mysqli->query("SELECT * FROM wallets WHERE my_reference='$incoming'");
                $coming_req = $coming_res->fetch_assoc();

                $affilliate = Array(
                    'referance_code' => $coming_req['my_reference'],
                    'referance_wallet' => $coming_req['address']
                );

            } else {
                $affilliate = array(
                    'referance_code' => NULL,
                    'referance_wallet' => NULL,
                );  
            } 

            $data = array(
                'id' => $req['id'],
                'address' => $req['address'],
                'referance' => $req['my_reference'],
                'affilliate' => $affilliate
            );   

            $json = json_encode($data);   
            echo $json;

        }

    }

}

?>