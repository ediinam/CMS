<?php ob_start();?>
<?php session_start();
if(isset($_SESSION['kor_id'])){
$korisnik_id = $_SESSION['kor_id'];
}else{
    header("Location: ../../index.php");
}
 ?>