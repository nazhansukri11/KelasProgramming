<?php

$nama=isset($_GET['nama'])?$_GET['nama']:'';

switch($nama){
    case 'Ali':
        echo "Selamat Datang Ali";
        break;
    case 'Abu':
        echo "Selamat Datang Abu";
        break;
        default:
        echo "Saya saya";
        break;
    }


// if($nama=='Ali'){
//     echo "Selamat datang Ali";
// }
// elseif($nama=='Abu'){
//     echo "Selamat datang Abu";
// }
// else
// echo "Siapa awak?"
?>