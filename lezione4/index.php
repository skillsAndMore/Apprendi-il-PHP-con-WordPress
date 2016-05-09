<?php

    $var = "asd";

    // $bool = $var != "Ciao";
    //
    // $one = 2;
    //
    // if( $one <= 0 ){
    //     echo "&Egrave; vero. <br>";
    //     echo "Utente";
    // } elseif ( $one == 1 ) {
    //     echo "&Egrave; uguale a Ciao";
    // } else {
    //     echo "non trovo corrispondenze";
    // }

    // switch( $var ){
    // 	case "C":
    // 		echo '$var uguale a C';
    // 		break;
    // 	case "Ci":
    // 		echo '$var uguale a Ci';
    // 		break;
    //     case "Cia":
    //     	echo '$var uguale a Cia';
    //     	break;
    //     default:
    //     	echo '$var non risulta uguale a 1, 2 o 3.';
    // }

    // if( 1 == 2 && 1 == 2 && 2 == 3 ){
    //     echo "Tutte le condizioni sono vere";
    // }

    // if( 1 == 2 || 2 == 2 ){
    //     echo "Viene mostrata grazie alla prima condizione";
    // }

    // for( $i = 1; $i <= 10; $i++ ){
    //     echo "numero $i <br>";
    // }

    $colors = array(
        "rosso",  //indice 0
        "giallo", //indice 1
        "verde",  //indice 2
        "blue",   //indice 3
        "viola",  //indice 4
        "bianco", //indice 5
        "nero"    //indice 6
    );

    // for( $i = 0; $i < count( $colors ); $i++ ){
    //     echo "In posizione $i trovo $colors[$i]<br>";
    // }


    // foreach( $colors as $color ){
    //     echo "Il colore $color si trova nell'array.<br>";
    // }

    // foreach( $colors as $key => $value ){
    //     echo "Il colore $value si trova nell'array nella posizione $key.<br>";
    // }

    // $post = array(
    //     'post_title' => "Il titolo del mio articolo",
    //     'post_content' => "Questo &egrave; il contenuto del mio articolo",
    //     'guid' => "http://miosito.it/mio-articolo"
    // );

    // foreach( $post as $key => $value ){
    //   echo "Il valore in posizione '$key' risulta $value.<br>";
    // }

    $posts = array(
      //indice 0
      array(
        'post_title' => "Titolo1",
        'post_content' => "Contenuto1",
        'guid' => "Link1"
      ),
      //indice 1
      array(
        'post_title' => "Titolo2",
        'post_content' => "Contenuto2",
        'guid' => "Link2"
      ),
      //indice 2
      array(
        'post_title' => "Titolo3",
        'post_content' => "Contenuto3",
        'guid' => "Link3"
      ),
    );

    $titolo = array();

    foreach( $posts as $key => $value ){
      $titolo[$key] = $value['post_title'];
    }

    
