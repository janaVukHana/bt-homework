<?php

include 'DB.php';

class Courts extends DB {
    
    /**
     * This function return all courts from db
     * @return array
     */
    public function get_all_courts(): array {
            $sql = "SELECT * FROM `courts`";
            $st = $this->connect()->query($sql);
    
            // while($row = $st->fetch()) {
            //     echo $row['id'];
            //     echo $row['name'];
            //     echo $row['location'];
            //     echo $row['file_path'];
            // }
            $rows= $st->fetchAll();
            return $rows;
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

