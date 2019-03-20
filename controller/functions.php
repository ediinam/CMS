<?php 
//funkcija kojom provjeravamo podatke prije unosa u tabelu
function check_input($inp) {
    global $connection;
    $inp=trim(mysqli_real_escape_string($connection,htmlspecialchars($inp)));
    return $inp;
  }
//Pretvara u asocijativni niz
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

function statusKarijera($pocetak, $kraj)
{
    $trenutni_dat = strtotime(date("Y-m-d"));
    $pocetak = strtotime($pocetak);
    $kraj = strtotime($kraj);
  
  if(($trenutni_dat >= $pocetak) && ($trenutni_dat <= $kraj)){
      return "1";
  }else{
      return "0";
  };
}
?>