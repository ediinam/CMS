<?php
include "../model/db.php";
include "../model/queryfunctions.php";
if(isset($_GET['karijera_id'])){
    $karijera_id = $_GET['karijera_id'];
    $karijera = statusRedaTabele('karijera',$karijera_id);
    echo $karijera;
}

if(isset($_GET['blog_id'])){
    $blog_id = $_GET['blog_id'];
    $blog = statusRedaTabele('blog',$blog_id);
    echo $blog;
}

if(isset($_GET['proizvodi_id'])){
    $proizvodi_id = $_GET['proizvodi_id'];
    $proizvodi = statusRedaTabele('proizvodi',$proizvodi_id);
    echo $proizvodi;
}

?>