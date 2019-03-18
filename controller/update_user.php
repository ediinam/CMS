<?php 
include "../model/db.php";
include "../model/queryfunctions.php";
include "session_start.php";
if(isset($_SESSION['kor_id'])){
    $id_usera = $_SESSION['kor_id'];

    $ime_prezime=$_POST['ime_prezime'];
    $pozicija=$_POST['pozicija'];
    $korisnicko_ime=$_POST['korisnicko_ime'];
    $lozinka=$_POST['lozinka'];
    $profilna_fotografija=$_POST['profilna_fotografija'];
    $red=array("korisnici_ime_prezime"=>"{$ime_prezime}","korisnici_pozicija"=>"{$pozicija}","korisnici_korisnicko_ime"=>"{$korisnicko_ime}","korisnici_lozinka"=>"{$lozinka}","korisnici_slika"=>"{$profilna_fotografija}");
    $message=promijeniRedTabele('korisnici',$id_usera,$red);
    //echo $stara_lozinka;
    // if($trenutna_loz != $stara_lozinka){
    //     echo "Greška! Lozinka nije tačna!";
    // }else if($nova_loz != $potvr_loz){
    //     echo "Greška! Niste potvrdili novu lozinku!";
    // }else{
    //     echo $nova_loz;
    // }
    echo $message;
}
?>