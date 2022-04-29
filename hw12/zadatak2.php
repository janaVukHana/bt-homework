<?php

// proveri da li je korisnik popunio sva polja
if($_GET['sirina_zida'] === '' || $_GET['duzina_zida'] === '' || $_GET['sirina_plocice'] === '' || $_GET['duzina_plocice'] === '') {
    $poruka = 'Popuni sva polja u formi.';
} else {
    $sirina_zida = $_GET['sirina_zida'];
    $duzina_zida = $_GET['duzina_zida'];
    $sirina_plocice = $_GET['sirina_plocice'];
    $duzina_plocice = $_GET['duzina_plocice'];

    // echo var_dump($sirina_zida);

    $povrsina_zida = $sirina_zida * $duzina_zida;
    $povrsina_plocice = $sirina_plocice * $duzina_plocice;

    $broj_plocica = $povrsina_zida / $povrsina_plocice;

    $poruka = "Da bi pokrio zid potrebno ti je $broj_plocica.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broj plocica</title>
</head>
<body>
    <div class="container">
        <h1>Broj plocica</h1>
        <p><?php echo $poruka;  ?></p>
    </div>
</body>
</html>