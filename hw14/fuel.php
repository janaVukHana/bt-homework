<?php

function gorivo($ukupnoGorivo, $potrposnjaPoKamionu, $ostatakGorivaFlag = false) {

    $brojKamionaKojiMoguDaPredjuRutu = $ukupnoGorivo / $potrposnjaPoKamionu;
    $ostatakGoriva = $ukupnoGorivo % $potrposnjaPoKamionu;

    if($ostatakGorivaFlag) {
        return $ostatakGoriva;
    } else {
        return floor($brojKamionaKojiMoguDaPredjuRutu);
    }
}

echo gorivo(124, 25) . ' kamiona prelaze zadatu rutu.';
echo '<br>';
echo gorivo(12, 25, true) . ' litara goriva ostaje.';