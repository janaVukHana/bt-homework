<?php

/**
 * This function filter users
 * 
 *  @param array $users 
 *  @param string $searchContent
 *  @return array
 */

function search_users(array $users, string $searchContent = ''): array {
    $filteredUsers = [];
    
    foreach($users as $user) {
        $f_name = $user['f_name'];
        $l_name = $user['l_name'];

        if(str_contains($f_name, $searchContent) || str_contains($l_name, $searchContent)) {
            $filteredUsers[] = $user;
        }
    }
    return $filteredUsers;
}

$users = [
        [
            "id" => 1,
            "f_name" => 'Ilija',
            "l_name" => 'Radovanovic',
            "email" => "ilija009@gmail.com"
        ],
        [
            "id" => 2,
            "f_name" => 'Radovan',
            "l_name" => 'Markovic',
            "email" => "marko@gmail.com"
        ],
        [
            "id" => 3,
            "f_name" => 'Jovan',
            "l_name" => 'Memedovic',
            "email" => "joca@gmail.com"
        ],
        [
            "id" => 4,
            "f_name" => 'Goran',
            "l_name" => 'Jovanovic',
            "email" => "goran@gmail.com"
        ]
    ];


    // print_r(search_users($users, 'Jov'));
    // print_r(search_users($users, 'Rad'));
    // print_r(search_users($users, 'gdkjdfkljg'));
    // print_r(search_users($users));



    

  
    
    