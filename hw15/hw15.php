<?php
// ZADATAK 1

function isNameExists($dataArr, $name) {
    $nameExist = false;

    foreach($dataArr as $data) {
        if($data === $name) {
            $nameExist = true;
        }
    }

    return $nameExist;
}

// inicijalni niz
$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
print_r($hwArray);

// dodajem moje ime na kraj niza
if(!isNameExists($hwArray, 'Ilija')) {
    array_push($hwArray, "Ilija");
}
print_r($hwArray);

// dodajem ime rodjaka na trece mesto
if(!isNameExists($hwArray, 'Milica')) {
    array_splice($hwArray, 2, 0, 'MILICA');
}
print_r($hwArray);

// koliko ucenika ima u nizu
$broj_ucenika = count($hwArray);
echo "U nizu ima $broj_ucenika ucenika.";

//dodajem novog clana na pocetak niza
if(!isNameExists($hwArray, "Jana")) {
    array_unshift($hwArray, "Jana");
}
print_r($hwArray);

//izbrisati Danila iz niza
foreach($hwArray as $index => $name) {
    if($name === 'Danilo') {
        array_splice($hwArray, $index, 1);
    }
}
print_r($hwArray);

// skloniti duplirane clanove niza
$hwArray = array_unique($hwArray);
$hwArray = array_values($hwArray);
print_r($hwArray);




// ZADATAK 2
// Kreirati $data koja je niz asocijativnih nizova. Svaki asocijativni niz treba da ima strukturu:

$data = [
    [
        'name' => 'Pera',
        'last_name' => 'Peric',
        'age' => 22,
        'gender' => 'male',
        'avg_rating' => 7.7,
        'married' => false,
        'courses' => ['laravel', 'react', 'jQuery']
    ],
    [
        'name' => 'Natasa',
        'last_name' => 'Bekvalac',
        'age' => 34,
        'gender ' => 'female',
        'avg_rating' => 7.7,
        'married' => true,
        'courses' => ['hmtl', 'css', 'php']
    ],
    [
        'name' => 'Svetlana',
        'last_name' => 'Raznatovic',
        'age' => 55,
        'gender ' => 'female',
        'avg_rating' => 7.7,
        'married' => false,
        'courses' => ['js', 'react', 'angular']
    ],
    [
        'name' => 'Shaban',
        'last_name' => 'Shaulic',
        'age' => 77,
        'gender' => 'male',
        'avg_rating' => 6.5,
        'married' => true,
        'courses' => ['hmtl', 'node.js', 'sql']
    ],
    [
        'name' => 'Nikola',
        'last_name' => 'Jokic',
        'age' => 29,
        'gender' => 'male',
        'avg_rating' => 7.5,
        'married' => true,
        'courses' => ['hmtl', 'css', 'php']
    ]
    ];

foreach($data as $person) {
    
    $isMarried = $person['married'] ? 'jeste' : 'nije';
    $he_or_she = $person['gender'] == 'male' ? 'ozenjen' : 'udata';

    $full_name = $person['name'] . ' ' . $person['last_name'];
    $age = $person['age'];
    $ocena = $person['avg_rating'];
    $courses = implode(', ', $person['courses']);
   

    echo "$full_name ima $age godine i $isMarried $he_or_she. Ima prosecnu ocenu $ocena, a kurseve koje trenutno slusa su: $courses.";
}



