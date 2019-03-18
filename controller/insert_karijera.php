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
    // $karijera_cover = $_POST['cover_fotografija'];

    if(isset($_POST['karijera_id']) && empty($_POST['karijera_id'])){
        $array_karijera = array("karijera_naslov"=>"{$karijera_naslov}","karijera_naslov_en"=>"{$karijera_naslov_en}","karijera_pocetak"=>"{$karijera_pocetak}","karijera_kraj"=>"{$karijera_kraj}","karijera_opis"=>"{$karijera_opis}","karijera_opis_en"=>"{$karijera_opis_en}","karijera_cover"=>"","karijera_datum_unosa"=>"","karijera_status"=>"neaktivan");
        $red = dodajRedTabele('karijera',$array_karijera);
        echo $red;
    }else if(isset($_POST['karijera_id']) && !empty($_POST['karijera_id'])){
        $array_karijera = array("karijera_naslov"=>"{$karijera_naslov}","karijera_naslov_en"=>"{$karijera_naslov_en}","karijera_pocetak"=>"{$karijera_pocetak}","karijera_kraj"=>"{$karijera_kraj}","karijera_opis"=>"{$karijera_opis}","karijera_opis_en"=>"{$karijera_opis_en}","karijera_cover"=>"");
        $karijera_id = $_POST['karijera_id'];
        $red = promijeniRedTabele('karijera',$karijera_id,$array_karijera);
        echo $red;
    } else {
        echo "Greška!";
    }
    
?>