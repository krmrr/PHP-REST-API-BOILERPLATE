<?php 

/*
    'settings.php' - Api çıktısı için gerekli ayarlar
    'database.php' - Database bağlantısı
    'function.php' - Proje Fonksiyonları
    'install/table.php' - Tablo oluşturma 

    Tarayıcıya bilgi gönderme
    http_response_code(200);

    / ? 
        " + " => ALIR VEYA ALMAZ
        " * " => ZORUNLU
    ? /


    Affilliate 


    KAYIT YAPMAK IÇIN => {{BASE_URL}}/post.php
    ISTEK => POST
    ARGUMANS => type*,address*,incoming+ ~~~ ('affiliate_wallet','CUZDAN','KOD')
    TYPE => {
        "id": string | number,
        "address": string,
        "referance": string,
        "affilliate": {
            "referance_code": string | undefined,
            "referance_wallet": string | undefined
        }
    }


    BIR CUZDAN ADRESININ BILGILERINI ALMAK ICIN => {{BASE_URL}}/select.php?{{PARAMETRELER}}
    ISTEK => GET
    ARGUMANS => type*,address* ~~~ ('wallet','CUZDAN')
    TYPE => {
        "id": string | number,
        "address": string,
        "referance": string,
        "affilliate": {
            "referance_code": string | undefined,
            "referance_wallet": string | undefined
        }
    }



*/

?>