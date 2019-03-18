<?php 
include "../model/db.php";
include "../model/queryfunctions.php";
include "session_start.php";
if(isset($_SESSION['kor_id'])){
    $id_usera = $_SESSION['kor_id'];

    $lozinka=$_POST['lozinka'];
    $profilna_fotografija=$_POST['profilna_fotografija'];

    $uloga = ulogaKorisnika($id_usera);
    if($uloga == 'korisnik'){
    $red=array("korisnici_lozinka"=>"{$lozinka}","korisnici_slika"=>"{$profilna_fotografija}");
    $message=promijeniRedTabele('korisnici',$id_usera,$red);
    echo $message;
    }else if($uloga == 'admin'){
    $ime_prezime=$_POST['ime_prezime'];
    $pozicija=$_POST['pozicija'];
    $korisnicko_ime=$_POST['korisnicko_ime'];
    $red=array("korisnici_ime_prezime"=>"{$ime_prezime}","korisnici_pozicija"=>"{$pozicija}","korisnici_korisnicko_ime"=>"{$korisnicko_ime}","korisnici_lozinka"=>"{$lozinka}","korisnici_slika"=>"{$profilna_fotografija}");
    $message=promijeniRedTabele('korisnici',$id_usera,$red);
    echo $message;
    }else {
        echo "Greška!";
    }
}
?>