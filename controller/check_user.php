<?php session_start(); 
 include "../model/db.php"; 
 include "../model/queryfunctions.php"; 

    global $connection;
    $korisnicko_ime=$_POST['korisnicko_ime'];
    $lozinka=$_POST['lozinka'];
    if ($korisnicko_ime === "" || $lozinka === "") {
        echo "Morate popuniti sva polja!";
    }else{  
$korisnik = izaberiRedTabeleKorisnici($korisnicko_ime,$lozinka);
    if(mysqli_num_rows($korisnik) == '1'){
        $korisnik=mysqli_fetch_assoc($korisnik);
        $_SESSION['kor_id']=$korisnik['korisnici_id'];
        echo "Uspješno ste se ulogovali!";
    }else{
        echo "Pogrešno ste unijeli korisničko ime ili lozinku! Molimo Vas da pokušate ponovo.";
    }

}

?>