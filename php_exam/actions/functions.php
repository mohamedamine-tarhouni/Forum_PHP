<?php

function verify_valid_characters($str):bool{
for ($i=0; $i<strlen($str); $i++){
    if ((strtoupper($str[$i])<'A'||strtoupper($str[$i])>'Z')
    &&($str[$i]<'0'||$str[$i]>'9')
    &&($str[$i]!=='-')&&($str[$i]!=='_')){
        return false;
    }
}
return true;
}
function verify_data_length($str,$MIN_LENGTH):bool{
    return strlen($str)>=$MIN_LENGTH;
}
function User_exists($data,$strdata){
    $mysql = new PDO('mysql:host=localhost;dbname=php_exam_db;charset=utf8;','root','');
    $req_User_Exists = $mysql->prepare("SELECT $strdata FROM users WHERE $strdata= ?");
    $req_User_Exists->execute(array($data));
    return $req_User_Exists;
}
// echo strlen("$2y$10$9PjpgvEr76xn3A97uqTiAuaQi2kRa5iUAGG2.eVrRM98sbc2NKQr.");
// echo strlen("$2y$10pyWDqWoYQ5iguGN82dcmTouZOFKF3O7.fOPp48rK2NvrCi68YqvC8W");
// echo verify_data_length("hello",4) ? 'true':'false';
// echo verify_data_length("hello",3) ? 'true':'false';
// echo verify_data_length("hello",5) ? 'true':'false';
// echo verify_data_length("hello",7) ? 'true':'false';
?>