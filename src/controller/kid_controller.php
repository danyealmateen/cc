<?php 

class kid_controller {
    
    // createNewKid()
    public static function createNewKid() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $create_kid_name = $_POST['create_kid_name'];
            $create_kid_current_belt = $_POST['create_kid_current_belt'];
            $create_kid_next_belt = $_POST['create_kid_next_belt'];

            if(!empty($create_kid_name) && !empty($create_kid_current_belt) && !empty($create_kid_next_belt)) {
                $kidCreate = Kid::createKid($create_kid_name, $create_kid_current_belt, $create_kid_next_belt);
            }

            if($kidCreate) {
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            } else {
                echo 'Could not create new kid.' . PHP_EOL;
            }
        } 
    }

}
