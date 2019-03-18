<?php 
 include "../model/db.php"; 
 include "../model/queryfunctions.php";
 include "functions.php"; 
    $proizvodi_naziv = check_input($_POST['naziv']);
    $proizvodi_naziv_en = check_input($_POST['naziven']);
    $proizvodi_opis = check_input($_POST['opis']);
    $proizvodi_opis_en = check_input($_POST['opisen']);
    $proizvodi_uvodni_tekst = check_input($_POST['uvodni_tekst']);
    $proizvodi_uvodni_tekst_en = check_input($_POST['uvodni_teksten']);
    // $proizvodi_glavni_tekst = $_POST['editor1'];
    // $proizvodi_glavni_tekst_en = $_POST['editor2'];
    $proizvodi_alt = check_input($_POST['alt']);
    $proizvodi_alt_en = check_input($_POST['alten']);

    $proizvodi_cover_name = $_POST['upload_cover'];

    $proizvodi_cover1 = $_FILES['coverslika']['name'];
    $proizvodi_cover1_tmp = $_FILES['coverslika']['tmp_name'];

    $proizvodi_cover2 = $_FILES['coverslikabtn']['name'];
    $proizvodi_cover2_tmp = $_FILES['coverslikabtn']['tmp_name'];

    if(empty($proizvodi_cover1) && !empty($proizvodi_cover2)){
        //echo "Dodali smo na button";
        move_uploaded_file($proizvodi_cover2_tmp, "../viewer/img/$proizvodi_cover2");
    }else if(!empty($proizvodi_cover1) && empty($proizvodi_cover2)){
        move_uploaded_file($proizvodi_cover1_tmp, "../viewer/img/$proizvodi_cover1");
        //echo "Dodali smo na drag n drop";
    }else if($proizvodi_cover1 == $proizvodi_cover_name){
        move_uploaded_file($proizvodi_cover1_tmp, "../viewer/img/$prizvodi_cover1");
        //echo "Od dvije slike, zadnja je dodata na drop";
    }else if($proizvodi_cover2 == $proizvodi_cover_name){
         move_uploaded_file($proizvodi_cover2_tmp, "../viewer/img/$proizvodi_cover2");
        //echo "Od dvije slike, zadnja je dodata na button";
    }else if(empty($proizvodi_cover1) && empty($proizvodi_cover2)){
        //ostavljamo name
    }
    
    $proizvodi_upload_name = $_POST['upload_uvodna'];

    $proizvodi_upload1 = $_FILES['uploadslika']['name'];
    $proizvodi_upload1_tmp = $_FILES['uploadslika']['tmp_name'];

    $proizvodi_upload2 = $_FILES['uploadslikabtn']['name'];
    $proizvodi_upload2_tmp = $_FILES['uploadslikabtn']['tmp_name'];

    if(empty($proizvodi_upload1) && !empty($proizvodi_upload2)){
        //echo "Dodali smo na button";
        move_uploaded_file($proizvodi_upload2_tmp, "../viewer/img/$proizvodi_upload2");
    }else if(!empty($proizvodi_upload1) && empty($proizvodi_upload2)){
        move_uploaded_file($proizvodi_upload1_tmp, "../viewer/img/$proizvodi_upload1");
        //echo "Dodali smo na drag n drop";
    }else if($proizvodi_upload1 == $proizvodi_upload_name){
        move_uploaded_file($proizvodi_upload1_tmp, "../viewer/img/$prizvodi_upload1");
        //echo "Od dvije slike, zadnja je dodata na drop";
    }else if($proizvodi_upload2 == $proizvodi_upload_name){
         move_uploaded_file($proizvodi_upload2_tmp, "../viewer/img/$proizvodi_upload2");
        //echo "Od dvije slike, zadnja je dodata na button";
    }else if(empty($proizvodi_upload1) && empty($proizvodi_upload2)){
        //ostavljamo name
    }



    if(isset($_POST['proizvodi_id']) && empty($_POST['proizvodi_id'])){
        $array_proizvodi = array("proizvodi_naziv"=>"{$proizvodi_naziv}","proizvodi_naziv_en"=>"{$proizvodi_naziv_en}","proizvodi_opis"=>"{$proizvodi_opis}","proizvodi_opis_en"=>"{$proizvodi_opis_en}","proizvodi_uvodni_tekst"=>"{$proizvodi_uvodni_tekst}","proizvodi_uvodni_tekst_en"=>"{$proizvodi_uvodni_tekst_en}","proizvodi_glavni_tekst"=>"","proizvodi_glavni_tekst_en"=>"","proizvodi_cover"=>"{$proizvodi_cover_name}","proizvodi_uvodna_foto"=>"{$proizvodi_upload_name}","proizvodi_alt"=>"{$proizvodi_alt}","proizvodi_alt_en"=>"{$proizvodi_alt_en}","proizvodi_datum_unosa"=>"","proizvodi_status"=>"neaktivan");
        $red = dodajRedTabele('proizvodi',$array_proizvodi);
        echo $red;
    }else if(isset($_POST['proizvodi_id']) && !empty($_POST['proizvodi_id'])){
        $array_proizvodi = array("proizvodi_naziv"=>"{$proizvodi_naziv}","proizvodi_naziv_en"=>"{$proizvodi_naziv_en}","proizvodi_opis"=>"{$proizvodi_opis}","proizvodi_opis_en"=>"{$proizvodi_opis_en}","proizvodi_uvodni_tekst"=>"{$proizvodi_uvodni_tekst}","proizvodi_uvodni_tekst_en"=>"{$proizvodi_uvodni_tekst_en}","proizvodi_glavni_tekst"=>"","proizvodi_glavni_tekst_en"=>"","proizvodi_cover"=>"{$proizvodi_cover_name}","proizvodi_uvodna_foto"=>"{$proizvodi_upload_name}","proizvodi_alt"=>"{$proizvodi_alt}","proizvodi_alt_en"=>"{$proizvodi_alt_en}");
        $proizvodi_id = $_POST['proizvodi_id'];
        $red = promijeniRedTabele('proizvodi',$proizvodi_id,$array_proizvodi);
        echo $red;
    } else {
        echo "Greška!";
    }
    
?>