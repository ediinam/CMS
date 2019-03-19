<?php 
 include "../model/db.php"; 
 include "../model/queryfunctions.php"; 
 include "functions.php";
    $karijera_naslov = check_input($_POST['naslov']);
    $karijera_naslov_en = check_input($_POST['nasloven']);
    $karijera_pocetak = $_POST['datum_pocetka'];
    $karijera_kraj = $_POST['datum_zavrsetka'];
    $karijera_opis = check_input($_POST['opis']);
    $karijera_opis_en = check_input($_POST['opisen']);

    $karijera_cover_name = $_POST['cover_fotografija'];

    $karijera_cover1 = $_FILES['coverslika']['name'];
    $karijera_cover1_tmp = $_FILES['coverslika']['tmp_name'];

    $karijera_cover2 = $_FILES['coverslikabtn']['name'];
    $karijera_cover2_tmp = $_FILES['coverslikabtn']['tmp_name'];

    if(empty($karijera_cover1) && !empty($karijera_cover2)){
        //echo "Dodali smo na button";
        move_uploaded_file($karijera_cover2_tmp, "../viewer/img/$karijera_cover2");
    }else if(!empty($karijera_cover1) && empty($karijera_cover2)){
        move_uploaded_file($karijera_cover1_tmp, "../viewer/img/$karijera_cover1");
        //echo "Dodali smo na drag n drop";
    }else if($karijera_cover1 == $karijera_cover_name){
        move_uploaded_file($karijera_cover1_tmp, "../viewer/img/$karijera_cover1");
        //echo "Od dvije slike, zadnja je dodata na drop";
    }else if($karijera_cover2 == $karijera_cover_name){
         move_uploaded_file($karijera_cover2_tmp, "../viewer/img/$karijera_cover2");
        //echo "Od dvije slike, zadnja je dodata na button";
    }else if(empty($karijera_cover1) && empty($karijera_cover2)){
        //ostavljamo name
    }


    if(isset($_POST['karijera_id']) && empty($_POST['karijera_id'])){
        $array_karijera = array("karijera_naslov"=>"{$karijera_naslov}","karijera_naslov_en"=>"{$karijera_naslov_en}","karijera_pocetak"=>"{$karijera_pocetak}","karijera_kraj"=>"{$karijera_kraj}","karijera_opis"=>"{$karijera_opis}","karijera_opis_en"=>"{$karijera_opis_en}","karijera_cover"=>"{$karijera_cover_name}","karijera_datum_unosa"=>"","karijera_status"=>"neaktivan");
        $red = dodajRedTabele('karijera',$array_karijera);
        echo $red;
    }else if(isset($_POST['karijera_id']) && !empty($_POST['karijera_id'])){
        $array_karijera = array("karijera_naslov"=>"{$karijera_naslov}","karijera_naslov_en"=>"{$karijera_naslov_en}","karijera_pocetak"=>"{$karijera_pocetak}","karijera_kraj"=>"{$karijera_kraj}","karijera_opis"=>"{$karijera_opis}","karijera_opis_en"=>"{$karijera_opis_en}","karijera_cover"=>"{$karijera_cover_name}");
        $karijera_id = $_POST['karijera_id'];
        $red = promijeniRedTabele('karijera',$karijera_id,$array_karijera);
        echo $red;
    } else {
        echo "Greška!";
    }
    
?>