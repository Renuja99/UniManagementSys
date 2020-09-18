<?php
//This ia the student view class. This is responsible for diplaying records from the student database.
class StudentView extends Student{

  public function showStudent($ID){

    $results = $this->getStudent($ID);
    
    return ($results);
  }

}

?>