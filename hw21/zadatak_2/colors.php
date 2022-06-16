<?php

include ('connection.php');

class Colors {
    private $db;

    public function __construct () {
        $this->db = new Connection();
        $this->db = $this->db->dbConnect();
    }

    /**
     * This func echo all available colors from db in ASC or DESC order
     */
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
                echo "Color name: {$color['name']}, HEX: {$color['hex_value']}, Status: {$color['status']}, Date created: {$color['created_at']}.<br>";
            }
        } else {
            echo "No colors here.";
        }
    }

    /**
     * This func echo three colors from db
     */
    public function GetThreeColors() {
        $st = $this->db->prepare("SELECT * FROM colors LIMIT 3");
        $st->execute();

        $three_colors = $st->fetchAll();
        foreach($three_colors as $key => $color) {
            echo $color['name'] . '<br>';
        }
    }

    /**
     * This func delete last updated color from db
     */
    public function DeleteLastUpdated() {
        $st = $this->db->prepare("DELETE FROM `colors` ORDER BY updated_at ASC LIMIT 1");
        $st->execute();
    }

    /**
     * This func add new color to color db
     */
    public function AddColor($color, $hex_value, $status) {
        $st = $this->db->prepare("INSERT INTO `colors`(`name`, `hex_value`, `status`, `created_at`, `updated_at`) VALUES 
        (?,?,?,'2020-1-1 17:00:00','2020-1-1 17:17:00')");
            
        $st->bindParam(1, $color);
        $st->bindParam(2, $hex_value);
        $st->bindParam(3, $status);

        $st->execute();
    }

    /**
     * This func update unactive to active colors in db
     */
    public function UpdateColors() {
        $st = $this->db->prepare("UPDATE `colors` SET `status`='1' WHERE status=0");
        $st->execute();
    }
}

?>