<?php
//parametar uzima ime tabele i biraju se svi redovi iz tabele kao niz
function izaberiSveIzTabele($ime_tabele){
  global $connection;
  $query = "SELECT * FROM $ime_tabele ";
  $send_query = mysqli_query($connection, $query);
  if(!$send_query){
    die("Greška! Ne moze se ostvariti query izaberi sve iz tabele!").mysqli_error($connection);
  }
  $rezultat=array();
  if(mysqli_num_rows($send_query)>0){
    while($row=mysqli_fetch_assoc($send_query)){
      $rezultat[]=$row;
    }
  }
  return $rezultat;
}
//parametri su ime tabele i id reda koji uzimamo, vraca asocijativni niz
function izaberiRedTabele($ime_tabele,$id_reda){
  global $connection;
  $ime_tabele_id=$ime_tabele."_id";
  $query = "SELECT * FROM $ime_tabele WHERE $ime_tabele_id = {$id_reda} ";
  $send_query = mysqli_query($connection, $query);
  if(!$send_query){
    die("Greška! Ne moze se ostvariti query izaberi red tabele!").mysqli_error($connection);
  }
  $rezultat=mysqli_fetch_assoc($send_query);
  return $rezultat;
}
//za login
function izaberiRedTabeleKorisnici($korisnicko_ime,$lozinka){
  global $connection;
  $query = "SELECT * FROM korisnici WHERE korisnici_korisnicko_ime = '$korisnicko_ime' AND korisnici_lozinka = '$lozinka' ";
  $send_query = mysqli_query($connection, $query);
  if(!$send_query){
    die("Greška! Ne moze se ostvariti query izaberi red tabele korisnici!").mysqli_error($connection);
  }
  return $send_query;
}
//parametri su ime tabele i id reda koji zelimo da izbrisemo
function izbrisiRedTabele($ime_tabele,$id_reda){
  global $connection;
  $ime_tabele_id=$ime_tabele."_id";
  $query = "DELETE FROM $ime_tabele WHERE $ime_tabele_id = {$id_reda} ";
  $izbrisi_red = mysqli_query($connection, $query);
  if(!$izbrisi_red){
    die("Greška! Ne moze se ostvariti query izbrisi red tabele!").mysqli_error($connection);
  }else{
    echo "Uspješno izbrisano!";
  }
}
//parametri su ime tabele, id reda i asocijativni niz sa elementima koji se unose u tabelu
function promijeniRedTabele($ime_tabele,$id_reda,$kolone_tabele){
  global $connection;
  $message;
  $ime_tabele_id=$ime_tabele."_id";
  $query = "UPDATE $ime_tabele SET ";
  $i=0;
  foreach($kolone_tabele as $key => $value){
    if(++$i === count($kolone_tabele)) {
    $query.= "$key='{$value}' ";
  }else
    $query.= "$key='{$value}', ";
  }
  $query.=" WHERE $ime_tabele_id = $id_reda ";
  $promijeni_red = mysqli_query($connection, $query);
  if(!$promijeni_red){
     die("Greška! Ne moze se ostvariti query promijeni red tabele!").mysqli_error($connection);
   }else{
     $message= 'Uspješno promijenjeno!';
   }
   return $message;
}
//parametri su ime tabele i asocijativni niz sa vrijednostima koje se unose
function dodajRedTabele($ime_tabele,$red_tabele){
  global $connection;
  //$message;
  $query = "INSERT INTO $ime_tabele( ";
  $i=0;
  $j=0;
  foreach($red_tabele as $key => $value){
    if(++$i === count($red_tabele)) {
    $query.= $key.")";
  }else{
    $query.= $key.",";
  }
}
  $query.=" VALUES(";
  foreach($red_tabele as $key => $value){
    if(++$j === count($red_tabele)) {
    $query.= "'{$value}')";
  }else{
    $query.= "'{$value}',";
  }
}
  $dodaj_red = mysqli_query($connection, $query);
  if(!$dodaj_red){
     die("Greška! Ne moze se ostvariti query dodaj red tabele!").mysqli_error($connection);
   }else{
     $message= 'Uspješno uneseno!';
   }
   return $message;
}
// function vrijednostRedaTabele($ime_tabele,$id_reda,$vrijednost_kolone){
//   global $connection;
//   $ime_tabele_id=$ime_tabele."_id";
//   $ime_tabele_vrijednost=$ime_tabele."_".$vrijednost_kolone;
//   $query = "SELECT * FROM $ime_tabele WHERE $ime_tabele_id = {$id_reda} ";
//   $send_query = mysqli_query($connection, $query);
//   if(!$send_query){
//     die("Greška! Ne moze se ostvariti query!").mysqli_error($connection);
//   }
//   $rezultat=mysqli_fetch_assoc($send_query);
//   return $rezultat[$ime_tabele_vrijednost];
//   //return $send_query;
// }

function statusRedaTabele($ime_tabele,$id_reda){
  global $connection;
  $ime_tabele_id=$ime_tabele."_id";
  $ime_tabele_status=$ime_tabele."_status";
  $rezultat = izaberiRedTabele($ime_tabele,$id_reda)[$ime_tabele_status];
  
  if($rezultat == 'aktivan'){
    $rezultat = 'neaktivan';
  }else if($rezultat == 'neaktivan'){
    $rezultat = 'aktivan';
  }
  
$query_change = "UPDATE $ime_tabele SET $ime_tabele_status = '$rezultat' WHERE $ime_tabele_id = {$id_reda} ";
$send_query_change = mysqli_query($connection, $query_change);
if(!$send_query_change){
  die("Greška! Ne moze se ostvariti query status reda tabele!").mysqli_error($connection);
}
  return $send_query_change;
}

function ulogaKorisnika($id_reda){
  global $connection;
  $rezultat = izaberiRedTabele('korisnici',$id_reda)['korisnici_uloga'];
  return $rezultat;
}

function promijeniLozinku($id_reda,$nova_lozinka){
  global $connection;
  $message;
  $query = "UPDATE korisnici SET korisnici_lozinka = '$nova_lozinka' WHERE korisnici_id = $id_reda ";
  $promijeni_red = mysqli_query($connection, $query);
  if(!$promijeni_red){
     die("Greška! Ne može se ostvariti query!Ne može se promijeniti lozinka!").mysqli_error($connection);
   }else{
     $message= 'Lozinka promijenjena!Nova lozinka je "'.$nova_lozinka.'".';
   }
   return $message;
}


 ?>
