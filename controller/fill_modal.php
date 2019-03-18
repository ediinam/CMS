<?php 
include "../model/db.php";
include "../model/queryfunctions.php";

function responseAsArray($el){
    $i=0;
    $response='{';
    foreach($el as $key => $value){
        if(++$i === count($el)){
        $response.= '"'.$key.'":"'.$value.'"';
    } else {
        $response.= '"'.$key.'":"'.$value.'",';
    }
    }
    $response.='}';
    return $response;
}

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