<?php include "db.php"; ?>
<?php include "queryfunctions.php"; ?>
<?php
function prikaziTabeluKarijera(){
  $karijera=izaberiSveIzTabele('karijera');

  foreach($karijera as $row){
    $karijera_id = $row['karijera_id'];
    $karijera_naslov = $row['karijera_naslov'];
    $karijera_pocetak = $row['karijera_pocetak'];
    $karijera_kraj = $row['karijera_kraj'];
    $karijera_status = $row['karijera_status'];
    if($karijera_status == "aktivan"){
      $status = "Deaktiviraj";
      $bgr_class="bgr-success";
    }else if($karijera_status == "neaktivan"){
      $status = "Aktiviraj";
      $bgr_class="bgr-fail";
    }


    echo "<tr>";
    echo "<td>{$karijera_id}</td>";
    echo "<td>{$karijera_naslov}</td>";
    echo "<td>{$karijera_pocetak}</td>";
    echo "<td>{$karijera_kraj}</td>";
    echo "<td class='deaktivirajtd {$bgr_class}'>{$karijera_status}</td>";
    echo "<td><button class='izmijenikarijera bgr-light-blue table-btn' name='{$karijera_id}'>Izmijeni</button></td>";
    echo "<td><button class='deaktivirajkarijera logo-bgr-dark table-btn' name='{$karijera_id}' value='$status'>$status</button></td>";
    echo "<td><button class='izbrisikarijera bgr-warning table-btn' name='{$karijera_id}'>Izbriši</button></td>";
    echo "</tr>";
  }
}
?>

<?php
function prikaziTabeluBlog(){
  $blog=izaberiSveIzTabele('blog');

  foreach($blog as $row){
    $blog_id = $row['blog_id'];
    $blog_naslov = $row['blog_naslov'];
    $blog_datum_unosa = $row['blog_datum_unosa'];
    $blog_ime_autora = $row['blog_ime_autora'];
    $blog_status=$row['blog_status'];
    if($blog_status == "aktivan"){
      $status = "Deaktiviraj";
    }else if($blog_status == "neaktivan"){
      $status = "Aktiviraj";
    }

    echo "<tr>";
    echo "<td>{$blog_id}</td>";
    echo "<td>{$blog_naslov}</td>";
    echo "<td data-order='{$blog_datum_unosa}'>{$blog_datum_unosa}</td>";
    echo "<td>{$blog_ime_autora}</td>";
    echo "<td><button class='izmijeniblog bgr-light-blue table-btn' name='{$blog_id}'>Izmijeni</button></td>";
    echo "<td><button class='deaktivirajblog logo-bgr-dark table-btn' name='{$blog_id}'>$status</button></td>";
    echo "<td><button class='izbrisiblog bgr-warning table-btn' name='{$blog_id}'>Izbriši</button></td>";
    echo "</tr>";
  }
}
?>

<?php
function prikaziTabeluProizvodi(){
  $proizvodi=izaberiSveIzTabele('proizvodi');

  foreach($proizvodi as $row){
    $proizvodi_id = $row['proizvodi_id'];
    $proizvodi_naziv = $row['proizvodi_naziv'];
    $proizvodi_datum_unosa = $row['proizvodi_datum_unosa'];
    $proizvodi_status=$row['proizvodi_status'];
    if($proizvodi_status == "aktivan"){
      $status = "Deaktiviraj";
    }else if($proizvodi_status == "neaktivan"){
      $status = "Aktiviraj";
    }

    echo "<tr>";
    echo "<td>{$proizvodi_id}</td>";
    echo "<td>{$proizvodi_naziv}</td>";
    echo "<td data-order='{$proizvodi_datum_unosa}'>{$proizvodi_datum_unosa}</td>";
    echo "<td><button class='izmijeniproizvodi bgr-light-blue table-btn' name='{$proizvodi_id}'>Izmijeni</button></td>";
    echo "<td><button class='deaktivirajproizvodi logo-bgr-dark table-btn' name='{$proizvodi_id}'>$status</button></td>";
    echo "<td><button class='izbrisiproizvodi bgr-warning table-btn' name='{$proizvodi_id}'>Izbriši</button></td>";
    echo "</tr>";
  }
}
?>


  <?php
  function prikaziProfil(){
    global $connection;
    global $korisnici_ime_prezime;
    global $korisnici_korisnicko_ime;
    global $korisnici_lozinka;
    global $korisnici_pozicija;
    global $korisnici_slika;
    global $korisnici_uloga;
  
    $korisnik_id = $_SESSION['kor_id'];

    //uzimamo samo red u tabeli sa id-jem kor_id
    $korisnici = izaberiRedTabele('korisnici',$korisnik_id);

    $korisnici_ime_prezime=$korisnici['korisnici_ime_prezime'];
    $korisnici_korisnicko_ime=$korisnici['korisnici_korisnicko_ime'];
    $korisnici_lozinka=$korisnici['korisnici_lozinka'];
    $korisnici_pozicija=$korisnici['korisnici_pozicija'];
    $korisnici_slika=$korisnici['korisnici_slika'];
    $korisnici_uloga=$korisnici['korisnici_uloga'];

    if($korisnici_slika == ''){
      $korisnici_slika = 'avatar.png';
    }
  
    return $connection;
    return $korisnici_ime_prezime;
    return $korisnici_korisnicko_ime;
    return $korisnici_lozinka;
    return $korisnici_pozicija;
    return $korisnici_slika;
    return $korisnici_uloga;
  
  }
  ?>