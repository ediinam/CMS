<?php 
include "../model/db.php";
include "../model/queryfunctions.php";
include "functions.php";
include "session_start.php";
if(isset($_SESSION['kor_id'])){
    $id_usera = $_SESSION['kor_id'];

    $lozinka=check_input($_POST['lozinka']);
    $profilna_fotografija_name=$_POST['profilna_fotografija'];

    $profilna_fotografija1 = $_FILES['profilnaslika']['name'];
    $profilna_fotografija1_tmp = $_FILES['profilnaslika']['tmp_name'];

    $profilna_fotografija2 = $_FILES['profilnaslikabtn']['name'];
    $profilna_fotografija2_tmp = $_FILES['profilnaslikabtn']['tmp_name'];

    if(empty($profilna_fotografija1) && !empty($profilna_fotografija2)){
        //echo "Dodali smo na button";
        move_uploaded_file($profilna_fotografija2_tmp, "../viewer/img/$profilna_fotografija2");
    }else if(!empty($profilna_fotografija1) && empty($profilna_fotografija2)){
        move_uploaded_file($profilna_fotografija1_tmp, "../viewer/img/$profilna_fotografija1");
        //echo "Dodali smo na drag n drop";
    }else if($profilna_fotografija1 == $profilna_fotografija_name){
        move_uploaded_file($profilna_fotografija1_tmp, "../viewer/img/$profilna_fotografija1");
        //echo "Od dvije slike, zadnja je dodata na drop";
    }else if($profilna_fotografija2 == $profilna_fotografija_name){
         move_uploaded_file($profilna_fotografija2_tmp, "../viewer/img/$profilna_fotografija2");
        //echo "Od dvije slike, zadnja je dodata na button";
    }else if(empty($profilna_fotografija1) && empty($profilna_fotografija2 && empty($profilna_fotografija_name))){
        //ostavljamo default
        $profilna_fotografija_name = "avatar.png";
    }

    $uloga = ulogaKorisnika($id_usera);
    if($uloga == 'korisnik'){
    $red=array("korisnici_lozinka"=>"{$lozinka}","korisnici_slika"=>"{$profilna_fotografija_name}");
    $message=promijeniRedTabele('korisnici',$id_usera,$red);
    echo $message;
    }else if($uloga == 'admin'){
    $ime_prezime=check_input($_POST['ime_prezime']);
    $pozicija=check_input($_POST['pozicija']);
    $korisnicko_ime=check_input($_POST['korisnicko_ime']);
    $red=array("korisnici_ime_prezime"=>"{$ime_prezime}","korisnici_pozicija"=>"{$pozicija}","korisnici_korisnicko_ime"=>"{$korisnicko_ime}","korisnici_lozinka"=>"{$lozinka}","korisnici_slika"=>"{$profilna_fotografija_name}");
    $message=promijeniRedTabele('korisnici',$id_usera,$red);
    echo $message;
    }else {
        echo "Greška!";
    }
}
?>