<?php

// include 'DB.php';

class Courts extends DB {
    
    /**
     * This function return all courts from db - first LAST added
     * @return array
     */
    public function get_all_courts(): array {
            $sql = "SELECT * FROM `courts` ORDER BY created_at DESC";
            $st = $this->connect()->query($sql);
    
            $rows= $st->fetchAll();
            return $rows;
    }

     /**
     * This function return all courts from db - first FIRST added
     * @return array
     */
    public function get_oldest_courts(): array {
        $sql = "SELECT * FROM `courts` ORDER BY created_at ASC";
        $st = $this->connect()->query($sql);

        $rows= $st->fetchAll();
        return $rows;
    }


    /**
     * This function return array of courts filtered by location
     * @param string $location
     * @return array
     */
    public function get_court_by_location(string $location): array {
        $sql = "SELECT * FROM `courts` WHERE `location` LIKE :location";
        $pdo = new DB();
        $st = $pdo->connect()->prepare($sql);
        $st->bindValue(':location', $location);
        $st->execute();
        $rows = $st->fetchAll();
        return $rows;
    }


    /**
     * This function return one court id
     * @param string $id
     * @return array array
     */
    public static function get_one_by_id(string $id): array {
        $sql = "SELECT * FROM `courts` WHERE id LIKE :id";
        $pdo = new DB();

        $st = $pdo->connect()->prepare($sql);
        $st->bindValue(':id', $id);
        $st->execute();

        $row = $st->fetch();
        return $row;
    }



    /**
     * This function return boolean value if everything is ok with inserting data in database
     * @param string $court_name
     * @param string $court_location
     * @param string $file_path
     * @param string $court_description
     * @return bool
     */
    public function add_court(string $court_name, string $court_location, string $file_path, string $court_description, string $post_creator): bool {
        $sql = "INSERT INTO `courts`(`name`, `location`, `file_path`, `description`, `creator`) VALUES 
        (:name, :location, :file_path, :description, :creator)";
        $st = $this->connect()->prepare($sql);
        $st->bindValue(':name',$court_name);
        $st->bindValue(':location',$court_location);
        $st->bindValue(':file_path',$file_path);
        $st->bindValue(':description',$court_description);
        $st->bindValue(':creator',$post_creator);
        
        $result = $st->execute();
        if($result){
            return true;
        } else {
            return false;
        }

    }

}

