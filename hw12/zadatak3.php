<?php

$num = 5;

$zbir_n_brojeva = 0;

for($i = 0; $i <= $num; $i++) {
    $zbir_n_brojeva += $i;
}

$message = "Zbir prva $num prirodna broja je $zbir_n_brojeva.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>
<body>
    <div class="container">
        <h1>Zadatak 3</h1>
        <h2>Izracunaj zbir prvih x brojeva</h2>
        <p><?php echo $message ?></p>
    </div>
</body>
</html>