<?php 
 include "../model/db.php"; 
 include "../model/queryfunctions.php";
 include "functions.php"; 
    $blog_naslov = check_input($_POST['naslov']);
    $blog_naslov_en = check_input($_POST['nasloven']);
    $blog_ime_prezime = check_input($_POST['ime_prezime']);
    $blog_datum_kreiranja = $_POST['datum_kreiranja'];
    $blog_uvodni_tekst = check_input($_POST['uvodni_tekst']);
    $blog_uvodni_tekst_en = check_input($_POST['uvodni_teksten']);
    $blog_glavni_tekst = $_POST['editor1'];
    $blog_glavni_tekst_en = $_POST['editor2'];
    $blog_datum = date("Y-m-d");

    $blog_cover_name = $_POST['cover_fotografija'];

    $blog_cover1 = $_FILES['coverslika']['name'];
    $blog_cover1_tmp = $_FILES['coverslika']['tmp_name'];

    $blog_cover2 = $_FILES['coverslikabtn']['name'];
    $blog_cover2_tmp = $_FILES['coverslikabtn']['tmp_name'];

    if(empty($blog_cover1) && !empty($blog_cover2)){
        //echo "Dodali smo na button";
        move_uploaded_file($blog_cover2_tmp, "../viewer/img/$blog_cover2");
    }else if(!empty($blog_cover1) && empty($blog_cover2)){
        move_uploaded_file($blog_cover1_tmp, "../viewer/img/$blog_cover1");
        //echo "Dodali smo na drag n drop";
    }else if($blog_cover1 == $blog_cover_name){
        move_uploaded_file($blog_cover1_tmp, "../viewer/img/$blog_cover1");
        //echo "Od dvije slike, zadnja je dodata na drop";
    }else if($blog_cover2 == $blog_cover_name){
         move_uploaded_file($blog_cover2_tmp, "../viewer/img/$blog_cover2");
        //echo "Od dvije slike, zadnja je dodata na button";
    }else if(empty($blog_cover1) && empty($blog_cover2)){
        //ostavljamo name
    }


    $blog_alt = check_input($_POST['alt']);
    $blog_alt_en = check_input($_POST['alten']);
    $blog_tag = check_input($_POST['tag']);
    $blog_tag_en = check_input($_POST['tagen']);

    if(isset($_POST['blog_id']) && empty($_POST['blog_id'])){
        $array_blog = array("blog_naslov"=>"{$blog_naslov}","blog_naslov_en"=>"{$blog_naslov_en}","blog_ime_autora"=>"{$blog_ime_prezime}","blog_vrijeme"=>"{$blog_datum_kreiranja}","blog_uvodni_tekst"=>"{$blog_uvodni_tekst}","blog_uvodni_tekst_en"=>"{$blog_uvodni_tekst_en}","blog_glavni_tekst"=>"{$blog_glavni_tekst}","blog_glavni_tekst_en"=>"{$blog_glavni_tekst_en}","blog_cover"=>"{$blog_cover_name}","blog_alt"=>"{$blog_alt}","blog_alt_en"=>"{$blog_alt_en}","blog_tag"=>"{$blog_tag}","blog_tag_en"=>"{$blog_tag_en}","blog_datum_unosa"=>"{$blog_datum}","blog_status"=>"neaktivan");
        $red = dodajRedTabele('blog',$array_blog);
        echo $red;
    }else if(isset($_POST['blog_id']) && !empty($_POST['blog_id'])){
        $array_blog = array("blog_naslov"=>"{$blog_naslov}","blog_naslov_en"=>"{$blog_naslov_en}","blog_ime_autora"=>"{$blog_ime_prezime}","blog_vrijeme"=>"{$blog_datum_kreiranja}","blog_uvodni_tekst"=>"{$blog_uvodni_tekst}","blog_uvodni_tekst_en"=>"{$blog_uvodni_tekst_en}","blog_glavni_tekst"=>"{$blog_glavni_tekst}","blog_glavni_tekst_en"=>"{$blog_glavni_tekst_en}","blog_cover"=>"{$blog_cover_name}","blog_alt"=>"{$blog_alt}","blog_alt_en"=>"{$blog_alt_en}","blog_tag"=>"{$blog_tag}","blog_tag_en"=>"{$blog_tag_en}");
        $blog_id = $_POST['blog_id'];
        $red = promijeniRedTabele('blog',$blog_id,$array_blog);
        echo $red;
    } else {
        echo "Greška!";
    }
    
?>