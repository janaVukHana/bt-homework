<?php

include 'DB.php';

class Courts extends DB {
    
    public function get_all_courts() {
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

}

