<?php

include 'includes/class-autoload.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
    <?php
       include 'includes/admin_header.php';
    ?>
            <nav class="blue-grey darken-3">
                
                <div class="nav-wrapper container">
              <a href="#!" class="brand-logo center">Students</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            
          </nav>
        <ul id="mobile-demo" class="sidenav sidenav-fixed">

        <li>
            <div class="container">
                <img src="img/5.png">
                <div class="bottom-left">Admin</div>
                <div class="centered"><a href="#"><img class="circle" src="img/viking.jpg"></a></div>  

            </div>
    
        </li>
        <li><a href="adminHomepage.php">Dashboard</a></li>
        <li><a href="manageStudents_admin.php">Manage Students</a></li>
        <li><a href="#!">Manage Lecturers</a></li>
        <li><a href="#!">Manage Courses</a></li>
        <li><a href="index.php">Homepage</a></li>
      </ul>

      

    </header>
        
       <main>
       <div class="row container">
           <div class="col s12 m12 l12">
           </div>
       </div>
        <div class="row container">
            <div class="col s12 m12 l12">
                <div class="card-panel teal center">
                <span class="white-text">The administrator only has the ability to update the students, lecturers or courses registered. After registration of a course, student or lecturer other users only can view their details.
                    In order to update any record of a student first enter the ID and submit.
                    After that the details of student gets filled in the forms automatically.
                </span>
                </div>
            </div>
        </div>
        <div class="row container">
            <div class="col s12 m12 l12">
            <div class="card-panel white">
                 
                <form action="updateStudents.php" method="post" >
                    <label for="first_name">Student ID</label>
                    <input placeholder="Enter student ID" id="first_name" type="text" name="ID">
                    
                    <button class="btn waves-effect waves-light" type="submit" name="action" >Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
            </div>
        </div>




       

            
     
       </main>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 

        <script>
            $(document).ready(function(){
            $('.sidenav').sidenav();
            });


        </script>
    </body>
</html>

<?php
       
       if(isset($_POST['action'])){
            
            $name   = $_POST['studName'];
            $dob    = $_POST['bDate'];
            $contact= $_POST['contact'];
            $c_ID    = $_POST['c_ID'];
            $ID     = $_POST['s_ID'];
            $pwd    =$_POST['pwd'];
            $username    =$_POST['username'];

            $studentObj2 = new StudentContr();
            
            $studentObj2->updateStudent($name,$dob,$contact,$c_ID,$ID,$pwd,$username );      
       } 

     
 ?>