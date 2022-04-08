<?php
//mon premier test de Git !
//echo "coucou php5 et surtout amir";


/**
 * nouveau changement
 */
echo "encore un petit changement dans le code" ;
coucou_me_voila();

/**
 * coucou
 *
 * @return void
 */
function coucou_me_voila(){

    echo "coucou me voila !!!!";

}

//fonction qui affiche un message de bonjour à une promo spécifique
function bonjourPromo(string $name){
    echo "bonjour à tous les membres de la promo " . $name;
}

