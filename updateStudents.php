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
              <a href="#!" class="brand-logo center">Update</a>
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
        <div class="card-panel white">
        


                <div class="row">
                    <form action="manageStudents_admin.php" method ="post">  
                        <div class="input-field col s6 ">
                            <input value="<?php $ID =(int)$_POST['ID'];$studentObj = new StudentView();$results = $studentObj -> showStudent($ID) ;echo $results[0]['s_ID'];?>"
                            id="id" type="text" class="validate" name="s_ID">
                            <label class="active" for="id">Student ID</label>
                        </div>
                        
                        <div class="input-field col s6">
                        <input value="<?php echo $results[0]['sName'];?>"
                        id="name" type="text" class="validate" name="studName">
                        <label class="active" for="name">Student name</label>
                        </div>
                        
                        <div class="input-field col s6">
                        <input value="<?php echo $results[0]['bDate'];?>"
                        id="bd" type="text" class="validate" name="bDate">
                        <label class="active" for="bd">birth date</label>
                        </div>

                        <div class="input-field col s6">
                        <input value="<?php echo $results[0]['contact'];?>"
                        id="first_name2" type="text" class="validate" name="contact">
                        <label class="active" for="first_name2">Contact</label>
                        </div>

                        <div class="input-field col s6">
                        <input value="<?php echo $results[0]['Course_cID'];?>"
                        id="first_name2" type="text" class="validate" name="c_ID">
                        <label class="active" for="first_name2">Course ID</label>
                        </div>

                        <div class="input-field col s6">
                        <input value="<?php echo $results[0]['stud_username'];?>"
                        id="first_name2" type="text" class="validate" name="username">
                        <label class="active" for="first_name2">Username</label>
                        </div>


                        <div class="input-field col s6">
                        <input value="<?php echo $results[0]['stud_password'];?>"
                        id="first_name2" type="text" class="validate" name="pwd">
                        <label class="active" for="first_name2">Password</label>
                        </div>


                        <button class="btn waves-effect waves-light" type="submit" name="action">Edit info
                            <i class="material-icons right">edit</i>
                        </button>

                    </form>
                </div>
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

