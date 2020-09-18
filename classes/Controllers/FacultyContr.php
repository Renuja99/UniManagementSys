<?php 

class FacultyContr extends Faculty{

   public function createFaculty($fac_name, $dean_name, $build_name, $Programme_pID){

     $this->setFaculty( $fac_name, $dean_name, $build_name, $Programme_pID);

   }



}


?>