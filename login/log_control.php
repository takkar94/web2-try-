<?php 
    include './db.php';
    class control {
        public function entry($data){
            $userInput["user_name"] = $data['reg_name'];
            $userInput["user_pass"] = $data['password_reg'];
            $sql = "INSERT INTO user (email , password) 
            VALUES (:user_name, :user_pass )";
            $db = new database();
            $inserted = $db -> insertData($sql,$userInput);
            return inserted;
        }

    }

