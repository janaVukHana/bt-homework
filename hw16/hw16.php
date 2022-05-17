<?php

// 1.Zadatak 
// Kreirati funkciju koja filtrira niz emailova i vraca samo emailove 
// (za email smatrati da je ispravan ako sadrzi @).
$email_arr = ['ilija009@gmail.com', 'notEmail', 'itbootcamp@gmail.com','someString'];
// print_r($email_arr);

function isEmailValid($emailsList) {
    $validEmails = [];
    foreach($emailsList as $email) {
        if(str_contains($email, '@')) {
            array_push($validEmails, $email);
        }
    }
    return $validEmails;
}

$filteredEmails = isEmailValid($email_arr);
// print_r($filteredEmails);


// 2.Zadatak 
// Kreirati funkciju koja vrsi racunske operacije svih elemenata prosledjenog niza. 
// Funkcija prima 2 parametra: niz (podrazumevati da je niz brojeva) nad kojim se vrse operacije 
// i karakter za operaciju koji je po defaultu = “+”;
$num_arr = [10, 2, 2];

function mathOperations($numbers, $opr = '+') {
    // check if first argument is array 
    if(!is_array($numbers)) {
        echo 'You need to give me array.';
        return;
    }

    // check if user entered math operation sign
    if($opr !== '+' && $opr !== '-' && $opr !== '*' && $opr !== '/') {
        echo 'You need to pass me +,-,* or / sign.';
        return;
    }

    if($opr == '+' || $opr == '-') {
        $result = 0;
    } else {
        $result = 1;
    }

    foreach($numbers as $number) {
        if($opr == '+') {
            $result += $number;
        } else if($opr == '-') {
            $result -= $number;
        } else if($opr == '*') {
            $result *= $number;
        } else {
            $result /= $number;
        }
    }

    return $result;

}

echo mathOperations($num_arr, '+') . '<br>';
echo mathOperations($num_arr, '-') . '<br>';
echo mathOperations($num_arr, '*') . '<br>';
echo mathOperations($num_arr, '/') . '<br>';
echo mathOperations($num_arr, 'A') . '<br>';
echo mathOperations($num_arr) . '<br>';
echo mathOperations('ilija', '-') . '<br>';


// 3.Zadatak 
// Kreirati funkciju koja proverava da li u datom 
// asocijativnom nizu postoji odredjeni kljuc. != array_key
$asocijativni_niz = [
    'grad' => 'Novi Sad',
    'drzava' => 'Srbija',
    'kontinent' => 'Evropa'
];

function is_key_valid($locations, $someKey) {
    $key_is_valid = false;
    foreach($locations as $key => $location) {
        if($someKey === $key) {
            $key_is_valid = true;
        }
    }
    return $key_is_valid;
}

// echo is_key_valid($asocijativni_niz, 'grad') ? 'KEY IS VALID<br>' : 'key is NOT valid<br>';
// echo is_key_valid($asocijativni_niz, 'pivo') ? 'KEY IS VALID<br>' : 'key is NOT valid<br>';
// echo is_key_valid($asocijativni_niz, 'drzava') ? 'KEY IS VALID<br>' : 'key is NOT valid<br>';
// echo is_key_valid($asocijativni_niz, 'rakija') ? 'KEY IS VALID<br>' : 'key is NOT valid<br>';



