<?php 
 include "../model/db.php"; 
 include "../model/queryfunctions.php"; 
    $proizvodi_naziv = $_POST['naziv'];
    $proizvodi_naziv_en = $_POST['naziven'];
    $proizvodi_opis = $_POST['opis'];
    $proizvodi_opis_en = $_POST['opisen'];
    $proizvodi_uvodni_tekst = $_POST['uvodni_tekst'];
    $proizvodi_uvodni_tekst_en = $_POST['uvodni_teksten'];
    // $proizvodi_glavni_tekst = $_POST['editor1'];
    // $proizvodi_glavni_tekst_en = $_POST['editor2'];
    // $proizvodi_cover = $_POST['upload_cover'];
    // $proizvodi_uvodna_foto = $_POST['upload_uvodna'];
    $proizvodi_alt = $_POST['alt'];
    $proizvodi_alt_en = $_POST['alten'];

    if(isset($_POST['proizvodi_id']) && empty($_POST['proizvodi_id'])){
        $array_proizvodi = array("proizvodi_naziv"=>"{$proizvodi_naziv}","proizvodi_naziv_en"=>"{$proizvodi_naziv_en}","proizvodi_opis"=>"{$proizvodi_opis}","proizvodi_opis_en"=>"{$proizvodi_opis_en}","proizvodi_uvodni_tekst"=>"{$proizvodi_uvodni_tekst}","proizvodi_uvodni_tekst_en"=>"{$proizvodi_uvodni_tekst_en}","proizvodi_glavni_tekst"=>"","proizvodi_glavni_tekst_en"=>"","proizvodi_cover"=>"","proizvodi_uvodna_foto"=>"","proizvodi_alt"=>"{$proizvodi_alt}","proizvodi_alt_en"=>"{$proizvodi_alt_en}","proizvodi_datum_unosa"=>"","proizvodi_status"=>"neaktivan");
        $red = dodajRedTabele('proizvodi',$array_proizvodi);
        echo $red;
    }else if(isset($_POST['proizvodi_id']) && !empty($_POST['proizvodi_id'])){
        $array_proizvodi = array("proizvodi_naziv"=>"{$proizvodi_naziv}","proizvodi_naziv_en"=>"{$proizvodi_naziv_en}","proizvodi_opis"=>"{$proizvodi_opis}","proizvodi_opis_en"=>"{$proizvodi_opis_en}","proizvodi_uvodni_tekst"=>"{$proizvodi_uvodni_tekst}","proizvodi_uvodni_tekst_en"=>"{$proizvodi_uvodni_tekst_en}","proizvodi_glavni_tekst"=>"","proizvodi_glavni_tekst_en"=>"","proizvodi_cover"=>"","proizvodi_uvodna_foto"=>"","proizvodi_alt"=>"{$proizvodi_alt}","proizvodi_alt_en"=>"{$proizvodi_alt_en}");
        $proizvodi_id = $_POST['proizvodi_id'];
        $red = promijeniRedTabele('proizvodi',$proizvodi_id,$array_proizvodi);
        echo $red;
    } else {
        echo "Greška!";
    }
    
?>