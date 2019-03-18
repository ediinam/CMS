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
?>