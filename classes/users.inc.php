<?php

class users extends dbh{

    public function getUsers(){
        $sql ='SELECT * FROM USERS';
        $stmt=$this->connect()->query($sql);
        while($row = $stmt->fetch()){
        
        }
    }
}
