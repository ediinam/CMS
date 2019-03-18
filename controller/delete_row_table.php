<?php
include "../model/db.php";
include "../model/queryfunctions.php";
if(isset($_GET['delete_karijera'])){
   $karijera_id=$_GET['delete_karijera'];
    $karijera = izbrisiRedTabele('karijera',$karijera_id);
    echo $karijera;
}
if(isset($_GET['delete_blog'])){
    $blog_id=$_GET['delete_blog'];
     $blog = izbrisiRedTabele('blog',$blog_id);
     echo $blog;
 }
 if(isset($_GET['delete_proizvodi'])){
    $proizvodi_id=$_GET['delete_proizvodi'];
     $proizvodi = izbrisiRedTabele('proizvodi',$proizvodi_id);
     echo $proizvodi;
 }
?>