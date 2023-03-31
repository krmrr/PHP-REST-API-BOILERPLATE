<?php 

    if($type === "wallet") {

        if(!isset($_GET["address"])) {

            getMessage('No address arguman', 'ERROR');
            http_response_code(400);
    
        } else { 

            $address = $_GET["address"];
            $wallet_res = $mysqli->query("SELECT * FROM wallets WHERE address='$address'");

            if(sql_number($wallet_res) < 1) {
                getMessage('No address system', 'ERROR');
                http_response_code(400);
            } else {
                http_response_code(200);
                $req = $wallet_res->fetch_assoc();
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