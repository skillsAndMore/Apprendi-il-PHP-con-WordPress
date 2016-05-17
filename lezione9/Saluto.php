<?php
/**
 * Una classe per mostrare i saluti ai lettori
 *
 * @package lezione9/
 * @author Andrea Barghigiani
 */

 class Saluto{

   //Proprieta che contiene il nome
   var $nome = "";

   /**
    * Costruttore della classe Saluto
    *
    * Questo costruttore serve a impostare la proprieta' $nome specificata all'avvio della classe
    *
    * @param string $name Il nome della persona da salutare.
    *
    * @return void
    */
   function __construct( $name ){
     $this->nome = $name;
   }

   /**
    * Da il benvenuto all'utente appena arrivato
    *
    * Metodo che saluta il nuovo visitatore personalizzando la risposta
    *
    * @return string
    */
    function benvenuto(){
      return "Benvenuto nelle mie pagine, " . $this->nome . ".";
    }

    /**
     * Saluta l'utente alla sua uscita
     *
     * Metodo che mostra un messaggio di saluto al termine della nostra pagina
     *
     * @return string
     */
     function arrivederci(){
       return "Grazie per visitare le mie pagine " . $this->nome;
     }
 }
