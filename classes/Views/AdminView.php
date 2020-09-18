<?php

class AdminView extends Admin{

    public function showAdmin($password){
          
       $results = $this->getAdmin($password);

       
       return($results);
       

    }

}




?>