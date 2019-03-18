<?php 
include "../model/db.php";
include "../model/queryfunctions.php";
include "functions.php";
include "session_start.php";
if(isset($_SESSION['kor_id'])){
    $id_usera = $_SESSION['kor_id'];
    $stara_lozinka = izaberiRedTabele('korisnici',$id_usera)['korisnici_lozinka'];
    $trenutna_loz=check_input($_POST['trenutna_loz']);
    $nova_loz=check_input($_POST['nova_loz']);
    $potvr_loz=check_input($_POST['potvr_loz']);
    //echo $stara_lozinka;
    if($trenutna_loz != $stara_lozinka){
        echo "Greška! Lozinka nije tačna!";
    }else if($nova_loz != $potvr_loz){
        echo "Greška! Niste potvrdili novu lozinku!";
    }else{
        echo $nova_loz;
    }
}
?>