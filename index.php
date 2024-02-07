<?php

// <!-- ESERCIZIO 1
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


$AllNumber = [5,10,15,20,25,30,35];
$el = 0;
$Sum = 0;

foreach ($AllNumber as $PareNumber) {
    
    if ($PareNumber % 2 == 0) {
        $el ++;
        $Sum = $Sum+$PareNumber;
    };
}

// echo $Sum/$el;

// ESERCIZIO 2
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere -->

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Anna', 'surname' => 'Merucci', 'gender' => 'F'],
    ['name' => 'Alessio', 'surname' => 'Marra', 'gender' => 'M'],
    ['name' => 'Marco', 'surname' => 'Marcello', 'gender' => 'M'],
];

foreach($users as $utente){
    switch ($utente['gender']){
        case 'M':
            // echo "Buongiorno Sig. ".$utente['name']." ". $utente['surname']. "\n";
            break;
            
            case 'F':
                // echo "Buongiorno Sig.ra ".$utente['name']." " .$utente['surname']. "\n";
                break;
                default:
                // echo "Buongiorno signor";
                break;
            };
        }
        // ESERCIZIO 3
        // Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


        for ($i = 0; $i <= 100 ; $i++) { 
            if ($i % 15 == 0){

                // echo "HACKADEMY \n";
                
            } elseif ($i % 5 == 0){

                // echo "JavaScript \n";
            } elseif ($i % 3 == 0){

                // echo "php \n";
            } else{
                // echo $i."\n";
            }    
        };