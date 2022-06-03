<?php

include ('connection.php');

class Colors {
    private $db;

    public function __construct () {
        $this->db = new Connection();
        $this->db = $this->db->dbConnect();
    }

    public function ShowColors($sort) {
            if($sort == 'ASC') {
                $st = $this->db->prepare("SELECT * FROM `colors` WHERE status=1 ORDER BY created_at ASC");
            } else {
                $st = $this->db->prepare("SELECT * FROM `colors` WHERE status=1 ORDER BY created_at DESC");
            }
           
            $st->execute();
        
        if ($st->rowCount() > 0) {
            // echo "There are some colors.";
            $colors_data = $st->fetchAll();
            foreach($colors_data as $key => $color){
                echo "Color name: {$color['name']}, HEX: {$color['hex_value']}, Date created: {$color['created_at']}.<br>";
            }
        } else {
            echo "No colors here.";
        }
    }

    public function GetThreeColors() {
        $st = $this->db->prepare("SELECT * FROM colors LIMIT 3");
        $st->execute();

        $three_colors = $st->fetchAll();
        foreach($three_colors as $key => $color) {
            echo $color['name'] . '<br>';
        }
    }

    public function DeleteLastUpdated() {
        $st = $this->db->prepare("DELETE FROM `colors` ORDER BY updated_at ASC LIMIT 1");
        $st->execute();
    }

    public function AddColor($color, $hex_value) {
        $st = $this->db->prepare("INSERT INTO `colors`(`name`, `hex_value`, `status`, `created_at`, `updated_at`) VALUES 
        (?,?,'1','2020-1-1 17:00:00','2020-1-1 17:17:00')");
            
        $st->bindParam(1, $color);
        $st->bindParam(2, $hex_value);

        $st->execute();
    }
}

?>