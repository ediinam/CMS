<?php 
 include "../model/db.php"; 
 include "../model/queryfunctions.php"; 
    $blog_naslov = $_POST['naslov'];
    $blog_naslov_en = $_POST['nasloven'];
    $blog_ime_prezime = $_POST['ime_prezime'];
    $blog_datum_kreiranja = $_POST['datum_kreiranja'];
    $blog_uvodni_tekst = $_POST['uvodni_tekst'];
    $blog_uvodni_tekst_en = $_POST['uvodni_teksten'];
    // $blog_glavni_tekst = $_POST['editor1'];
    // $vlog_glavni_tekst_en = $_POST['editor2'];
    // $blog_cover = $_POST['cover_fotografija'];
    $blog_alt = $_POST['alt'];
    $blog_alt_en = $_POST['alten'];
    $blog_tag = $_POST['tag'];
    $blog_tag_en = $_POST['tagen'];

    if(isset($_POST['blog_id']) && empty($_POST['blog_id'])){
        $array_blog = array("blog_naslov"=>"{$blog_naslov}","blog_naslov_en"=>"{$blog_naslov_en}","blog_ime_autora"=>"{$blog_ime_prezime}","blog_vrijeme"=>"{$blog_datum_kreiranja}","blog_uvodni_tekst"=>"{$blog_uvodni_tekst}","blog_uvodni_tekst_en"=>"{$blog_uvodni_tekst_en}","blog_glavni_tekst"=>"","blog_glavni_tekst_en"=>"","blog_cover"=>"","blog_alt"=>"{$blog_alt}","blog_alt_en"=>"{$blog_alt_en}","blog_tag"=>"{$blog_tag}","blog_tag_en"=>"{$blog_tag_en}","blog_datum_unosa"=>"","blog_status"=>"neaktivan");
        $red = dodajRedTabele('blog',$array_blog);
        echo $red;
    }else if(isset($_POST['blog_id']) && !empty($_POST['blog_id'])){
        $array_blog = array("blog_naslov"=>"{$blog_naslov}","blog_naslov_en"=>"{$blog_naslov_en}","blog_ime_autora"=>"{$blog_ime_prezime}","blog_vrijeme"=>"{$blog_datum_kreiranja}","blog_uvodni_tekst"=>"{$blog_uvodni_tekst}","blog_uvodni_tekst_en"=>"{$blog_uvodni_tekst_en}","blog_glavni_tekst"=>"","blog_glavni_tekst_en"=>"","blog_cover"=>"","blog_alt"=>"{$blog_alt}","blog_alt_en"=>"{$blog_alt_en}","blog_tag"=>"{$blog_tag}","blog_tag_en"=>"{$blog_tag_en}");
        $blog_id = $_POST['blog_id'];
        $red = promijeniRedTabele('blog',$blog_id,$array_blog);
        echo $red;
    } else {
        echo "Greška!";
    }
    
?>