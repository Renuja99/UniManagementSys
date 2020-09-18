<?php
//This is the Student Model class.This is the class with access to the Student database.

class Student extends Dbh{

    protected function getStudent($ID){

            $sql = "SELECT * FROM Student WHERE s_ID =?";
            $stmt = $this->connect()->prepare($sql);
            $stmt ->execute([$ID]);

            $results= $stmt ->fetchAll();
            return $results;
    }

    protected function setStudent($sName, $bDate, $contact, $pwd , $username){
        
            $sql ="INSERT INTO Student(sName,bDate,contact,stud_password,stud_username)VALUES(?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt ->execute([$sName, $bDate, $contact,$pwd,$username]);

        
    }

   protected function editStudent($name,$dob,$contact,$c_ID,$ID ,$pwd,$username){

            $sql = "UPDATE Student SET sName =?,bDate=?,contact=?,Course_cID=?,stud_password=?,stud_username=? WHERE s_ID=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt ->execute([$name,$dob,$contact,$c_ID,$pwd,$username,$ID]);
    }


}


?>