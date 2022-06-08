<?php

include 'db.php';

class User extends DB {

    public function addUser($name, $email, $password, $email_verified_at = null) {
        $sql = "INSERT INTO `users`(`name`, `email`, `password`, `email_verified_at`) VALUES 
        (?,?,?,?)";
        $st = $this->connect()->prepare($sql);
        $st->execute([$name, $email, $password, $email_verified_at]);
    }

}

try {
    $user_1 = new User();
    $user_1->addUser('John', 'john@gmail.com', '123', '2022-8-8 22:00:00');
    $user_2 = new User();
    $user_2->addUser('Steva', 'steva@gmail.com', '555');
    $user_3 = new User();
    $user_3->addUser('Sanja', 'sanja@gmail.com', '999'); 
    $user_4 = new User();
    $user_4->addUser('Greska', 'greska@gmail.com', 'w23454325', uouorewiu);
    $user_5 = new User();
    $user_5->addUser('Teodora', 'teodora@gmail.com', '000');
    $user_6 = new User();
    $user_6->addUser('Goca', 'goca@gmail.com', '000');
    $user_7 = new User();
    $user_7->addUser('Vlada', 'vlada@gmail.com', '000');
    $user_8 = new User();
    $user_8->addUser('Lazar', 'laza@gmail.com', '000');
    $user_9 = new User();
    $user_9->addUser('Dejan', 'deja@gmail.com', '000');
    $user_10 = new User();
    $user_10->addUser('Dragana', 'dragana@gmail.com', '000');
}  catch (\Throwable $exception) {
        echo "Nest nije dobro! ";
        echo 'Error on line ' . $exception->getLine();
}
