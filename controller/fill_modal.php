<?php 
include "../model/db.php";
include "../model/queryfunctions.php";
include "functions.php";

if(isset($_GET['izmijeni_blog_id'])){
    $id_reda = $_GET['izmijeni_blog_id'];
    $red = izaberiRedTabele('blog',$id_reda);
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
    $response = responseAsArray($red);
    echo $response;
}

?>