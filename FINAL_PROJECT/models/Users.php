<?php
include 'DB.php';

class Users extends DB {
    
    /**
     * This function return is user logged or not (boolean value)
     * @param string $username
     * @param string $password
     * @return boolean
     */
    public function log_in(string $username, string $password):bool {
        $user_is_logged = false;
        $sql = "SELECT * FROM `login`";
        // $st = $stmt = statement
        $st = $this->connect()->query($sql);

        while($row = $st->fetch()) {
            // echo $row['username'] . '<br>';
            if($row['username'] == $username && $row['password'] == $password) {
                $user_is_logged = true;
            }
        }
        return $user_is_logged;
    }

    /**
     * This function return boolean value did user successufuly make registration
     * @param string $username
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function registration(string $username, string $email, string $password):bool {

        // $sql = "SELECT count(username) AS num FROM users Where username=?;";
        $sql = "SELECT count(username) AS num FROM `login` WHERE username=?";

        $pdo = new DB();
        $stmt= $pdo->connect()->prepare($sql);
        $stmt->execute([$username]);
        $row = $stmt->fetch();
        if($row['num']>0){
            // die('User already exists');
            // echo 'User already exists';
            return false;
        }
        
        // $passwordHash = password_hash($password,PASSWORD_BCRYPT, array("cost"=>12));
        $sql = "INSERT INTO `login` (username,email,password) VALUES(:username,:email,:password);";
        $stmt=$pdo->connect()->prepare($sql);
        $stmt->bindValue(':username',$username);
        // $stmt->bindValue(':password',$passwordHash);
        $stmt->bindValue(':password',$password);
        $stmt->bindValue(':email',$email);
        $result = $stmt->execute();
        if($result){
            return true;
        }
    }

    /**
     * This function return one user data
     * @param string $username
     * @return array
     */
    public function get_user(string $username): array {
        $sql = "SELECT * FROM `login` WHERE username LIKE :username;";
        $pdo = new DB();
        $st = $pdo->connect()->prepare($sql);
        $st->bindValue(':username', $username);
        $st->execute();

        $user = $st->fetch();
        return $user;
        
    }

    // public function addDog($name, $city, $state) {
    //     $sql = "INSERT INTO `labradors`(`name`, `city`, `state`) VALUES (?,?,?)";
    //     // $st = $this->connect()->query($sql);
    //     // prepare() koristimo kada nam sql nije definisan do kraja
    //     $st = $this->connect()->prepare($sql);
    //     // execute koristimo kada koristimo prepare()
    //     $st->execute([$name, $city, $state]);
    // }

    // public function deleteDog($name) {
    //     $sql = "DELETE FROM `labradors` WHERE `name` LIKE ?";
    //     $st = $this->connect()->prepare($sql);
    //     $st->execute([$name]);
    // }

    // public function updateDog($new_name, $name) {
    //     $sql = "UPDATE `labradors` SET `name`=? WHERE `name` LIKE ?";
    //     $st = $this->connect()->prepare($sql);
    //     $st->execute([$new_name, $name]);
    // }
}

// $users = new Users();
// $users->getUsers('ilija', 'ilija123');
