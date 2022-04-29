<!-- Puz se penje uz drvo odredjenom brzinom (recimo da predje 3cm da dan). 
Drvo svaki dan poraste za 1 cm. 
Za zadatu brzinu puza (u centrimetrima po danu) 
i zadatu pocetnu visinu drveta (u centimetrima), 
izracunati koliko je dana potrebno puzu da se popne na vrh drveta.

Napraviti presek svakog dana, dakle program treba da izbaci sledece poruke (za brzinu puza 3 i visinu drveta 100) :
Dan 1: Puz je presao 3cm, visina drveta 100cm
Dan 2: Puz je presao 6cm, visina drveta 101cm
...
Na kraju treba da se ispise poruka na primer: 
Puz se popeo na drvo za 8 dana. Smatrati da drvo svakog dana raste fiksno 1cm. -->
<?php

$brzina_puza = 3;
$visina_drveta = 100;
$dan = 0;

for($brzina_puza = 3; $brzina_puza < $visina_drveta; $brzina_puza += 3) {
    $dan++;
    echo "Dan $dan: Puz je presao $brzina_puza cm, visina drveta je $visina_drveta cm. <br>";
    $visina_drveta++;
}

$dan++;

echo "Puz se popeo na drvo za $dan dana.";

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 4</title>
</head>
<body>
    <div class="container">
        <h1>Zadatak br.4</h1>

    </div>
</body>
</html> -->