<?php
//
class FacultyView extends Faculty{

  public function showFaculty($name){

    $results = $this->getFaculty($name);

    echo "Faculty ID:" . $results[0]['fac_ID'] . "<br>";
    echo "Faculty Name:" . $results[0]['fac_name']."<br>"; 
    echo "dean Name:" . $results[0]['dean_Name']."<br>"; 
    echo "Faculty Name:" . $results[0]['build_name']."<br>"; 
    echo "Faculty Name:" . $results[0]['Programme_pID']."<br>"; 


    //print_r($results);
  }

}