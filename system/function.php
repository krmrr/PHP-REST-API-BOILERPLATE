<?php

    // Proje Fonksiyonları

    /* Printing Message (MESSAGE AND STATUS) */
    function getMessage($message, $statu){
        $all_data = "";

        $post_data = array(
            'type' => $statu,
            'message' => $message,
        );

        $all_data = $post_data;
        $json = json_encode($all_data);
        echo $json;
    }

    /* Double encryption (password) */
    function passwordEncodeBase64($password){
        
        if(!empty($password)){
            $convert1 = base64_encode($password);
            $convert2 = base64_encode($convert1);
            return $convert2;
        }

        return null;
    }

    /* Double decryption (password) */
    function passwordDecodeBase64($password){
        
        if(!empty($password)){
            $convert1 = base64_decode($password);
            $convert2 = base64_decode($convert1);
            return $convert2;
        }
        return null;
    }

    /* How many values the sql query returns (query) */
    function sql_number($sql) {
        return mysqli_num_rows($sql);
    }

    /* Generating random code (length optional) */
    function generateKey($length = 15) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }




?>