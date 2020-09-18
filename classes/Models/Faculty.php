


<?php

//This is the Model class of the MVC model.This is the class that has access to the database.
class Faculty extends Dbh{

  protected function getFaculty($ID){

    $sql = "SELECT * FROM Faculty WHERE fac_ID =?";
    $stmt = $this->connect()->prepare($sql);
    $stmt ->execute([$ID]);

    $results= $stmt ->fetchAll();
    return $results;
  }


  protected function setFaculty($fac_name, $dean_name, $build_name, $Programme_pID){
     
    $sql ="INSERT INTO Faculty(fac_name, dean_name, build_name, Programme_pID)VALUES(?,?,?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt ->execute([$fac_name, $dean_name, $build_name, $Programme_pID]);

  }

}


?>