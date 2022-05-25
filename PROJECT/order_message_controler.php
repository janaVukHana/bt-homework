<?php
// echo htmlspecialchars();

require_once __DIR__ . '/models/m-products.php';

$systemErrors = [];

if(empty($_GET['f_name']) || strlen(trim($_GET['f_name'], ' ')) < 2) {
    $systemErrors['f_name'] = 'Ime nije validno.';
}

if(empty($_GET['l_name']) || strlen(trim($_GET['l_name'], ' ')) < 2) {
    $systemErrors['l_name'] = 'Prezime nije validno.';
}

if( empty($_GET['email']) || 
    strlen(trim($_GET['email'], ' ')) < 2 || 
    !str_contains($_GET['email'], '@') || 
    str_contains($_GET['email'], ' ')
    ) {
    $systemErrors['email'] = 'Email nije validan.';
    }

if(empty($_GET['city']) || strlen(trim($_GET['city'], ' ')) < 2) {
    $systemErrors['city'] = 'Grad nije validan.';
}

if( empty($_GET['phone']) || 
    strlen(trim($_GET['phone'], ' ')) < 9 || 
    strlen(trim($_GET['phone'], ' ')) > 11 ||
    !is_numeric($_GET['phone'])
    ) {
    $systemErrors['phone'] = 'Telefon nije validan.';
    }

if(empty($_GET['street_and_num']) || strlen(trim($_GET['street_and_num'], ' ')) < 2) {
    $systemErrors['street_and_num'] = 'Ulica nije validna.';
}

if(empty($_GET['zip']) || strlen(str_replace(' ', '', $_GET['zip'])) !== 5 ) {
    $systemErrors['zip'] = 'Zip kod mora da ima tacno 5 karaktera.';
}
 
if(empty($_GET['comment']) || strlen(trim($_GET['comment'], ' ')) < 10) {
    $systemErrors['comment'] = 'Komentar nije dovoljno dugacak. Upisati minimum 10 karaktera.';
}

if(empty($_GET['terms'])) {
    $systemErrors['terms'] = 'Morate cekirati polje za uslove i prava.';
}

$is_errors = count($systemErrors) > 0 ? false : true;

$name = $_GET['f_name'];
$last_name = $_GET['l_name'];
$title = $_GET['title'];

require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-order_message.php';

require __DIR__ . '/views/_layout/v-footer.php';