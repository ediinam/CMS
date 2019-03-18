<?php
include "../model/db.php";
include "../model/queryfunctions.php";
if(isset($_GET['karijera_id'])){
    $karijera_id = $_GET['karijera_id'];
    $karijera = izaberiRedTabele('karijera',$karijera_id);
    print_r($karijera);
}
if(isset($_GET['blog_id'])){
    $karijera_id = $_GET['karijera_id'];
    $karijera = izaberiRedTabele('karijera',$karijera_id);
    print_r($karijera);
}
if(isset($_GET['proizvodi_id'])){
    $karijera_id = $_GET['karijera_id'];
    $karijera = izaberiRedTabele('karijera',$karijera_id);
    print_r($karijera);
}
    ?>
