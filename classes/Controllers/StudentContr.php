<?php 

//The StudenController class is responsible for performing user interactions such as Create, Update and Deletion functions.          

class StudentContr extends Student{

        public function createStudent($sName, $bDate, $contact,$pwd,$username){

                $this->setStudent( $sName, $bDate, $contact , $pwd , $username);

        }

        public function updateStudent($name,$dob,$contact,$c_ID,$ID,$pwd, $username ){

                $this->editStudent($name,$dob,$contact,$c_ID,$ID,$pwd,$username);

        }

}


?>