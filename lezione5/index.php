<?php

// $frutta = array(
//   "mela",
//   "banana",
//   "kiwi",
//   "arancia",
//   "ciliegia"
// );
//
// sort( $frutta );
//
// foreach ( $frutta as $frutto ){
//     echo "<p>$frutto</p>\n";
// }

// $frutta = array(
//   "succosa"     => "mela",
//   "zuccherosa"  => "banana",
//   "esotico"     => "kiwi",
//   "aspra"       => "arancia",
//   "nocciolo"    => "ciliegia"
// );
//
// sort( $frutta );
//
// foreach ( $frutta as $key => $value ){
//     echo("<p>$key - $value</p>\n");
// }

// $frutta = array(
//   "succosa"     => "mela",
//   "zuccherosa"  => "banana",
//   "esotico"     => "kiwi",
//   "aspra"       => "arancia",
//   "nocciolo"    => "ciliegia"
// );
//
// asort( $frutta );
//
// foreach ( $frutta as $key => $value ){
//     echo("<p>$key - $value</p>\n");
// }

// function nome( $parametro1, $parametro2 ){
//   //Corpo della funzione
//   return $valore;
// }

// function somma( $a, $b ){
//
//   //Controllo che entrambe le variabili siano numeriche
//   if( is_numeric($a) && is_numeric($b) ){
//     return $a + $b;
//   } else { //Mostro un messaggio di errore
//     return "Sto aspettando due valori numerici...";
//   }
//
// }
//
// $n1 = 43;
// $n2 = 12;
//
// $risultato = somma( $n1, $n2, $n3 );
// echo $risultato;

function media(){
  //Salvo i valori passati in un array
  $parametri = func_get_args();

  //variabile per la media
  $media = 0;
  $tot = 0;

  //Sommo i singoli parametri
  foreach( $parametri as $par ){
    if( is_numeric( $par ) )
      $tot += $par;
  }

  $media = $tot/count($parametri);

  return $media;

}

$mid = media( 1, 34, 54, 12, 34, "Andrea", 21 );
echo $mid;
