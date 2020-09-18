<?php

class Admin extends Dbh{

        protected function getAdmin($password){

            $sql ="SELECT * FROM Adminis WHERE  pwd=?";
            $stmt=$this->connect()->prepare($sql);
            $stmt ->execute([$password]);

            $results =$stmt->fetchAll();
            return $results;
        }


    }


?>