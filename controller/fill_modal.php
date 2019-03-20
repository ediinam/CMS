<?php 
include "../model/db.php";
include "../model/queryfunctions.php";
include "functions.php";

if(isset($_GET['izmijeni_blog_id'])){
    $id_reda = $_GET['izmijeni_blog_id'];
    $red = izaberiRedTabele('blog',$id_reda);
    $red['blog_glavni_tekst'] = str_replace( '&', '&amp;', $red['blog_glavni_tekst'] );
    $red['blog_glavni_tekst_en'] = str_replace( '&', '&amp;', $red['blog_glavni_tekst_en'] );
    $red['blog_tag'] = str_replace( '|', ',', $red['blog_tag'] );
    $red['blog_tag_en'] = str_replace( '|', ',', $red['blog_tag_en'] );
    $response = responseAsArray($red);
    echo $response;
}

if(isset($_GET['izmijeni_karijera_id'])){
    $id_reda = $_GET['izmijeni_karijera_id'];
    $red = izaberiRedTabele('karijera',$id_reda);
    $response = responseAsArray($red);
    echo $response;
}

if(isset($_GET['izmijeni_proizvodi_id'])){
    $id_reda = $_GET['izmijeni_proizvodi_id'];
    $red = izaberiRedTabele('proizvodi',$id_reda);
    $red['proizvodi_glavni_tekst'] = str_replace( '&', '&amp;', $red['proizvodi_glavni_tekst'] );
    $red['proizvodi_glavni_tekst_en'] = str_replace( '&', '&amp;', $red['proizvodi_glavni_tekst_en'] );
    $response = responseAsArray($red);
    echo $response;
}

?>