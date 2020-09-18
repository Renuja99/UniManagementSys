<?php

include 'includes/class-autoload.inc.php';

?>

<!DOCTYPE html>
   <?php
        include 'includes/header.php';
   ?>
    <div class="row">

    <div class="col s12 m12 l12">
    </div>
    </div>
    <div class="row">
        <div class="col s0 m0 l4"></div>
        <div class="col s12 m12 l4">
        <div class="card white">
        
            <div class="card-content black-text">
            <span class="card-title center">Sign in</span>
            
            <form action="" method="post">
             <div class="input-field">
             <input placeholder="Enter username" id="user-name" type="text" class="validate" name="username">
             <label for="user-name">Username </label>
             </div>

             <div class="input-field">
             <input placeholder="Enter password" id="Password" type="password" class="validate" name="password">
             <label for="Password">Password </label>
             </div>

                <p>
                <label>
                    <input name="user" type="radio" value="Administrator" />
                    <span>Administrator</span>
                </label>
                </p>
                <p>
                <label>
                    <input name="user" type="radio" value="Student" />
                    <span>Student</span>
                </label>
                </p>
                <p>
                <label>
                    <input name="user" type="radio" value="Lecturer" />
                    <span>Lecturer</span>
                </label>
                </p>

                <br>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>

                <div class="card-action">
                <a href="Student_reg.php">Click here to sign-up if not registered</a>
                
                </div>

            </form>
            </div>
        </div>
        </div>
        <div class="col s0 m0 l4"></div>
        <?php

                
                    if(isset($_POST['action'])){
                       
                       $user ="Administrator";

                       if($user==$_POST['user']){
                       
                        $username   = $_POST['username'];
                        $password= $_POST['password'];
                        
                        
                        $adminObj = new AdminView();
                        
                        $results = $adminObj->showAdmin($password);  
                        
                        if(strcmp($password, $results[0]['pwd']) == 0){
                        
                            ?>
                                
                                <script type="text/javascript">
                                window.location = "http://localhost/Stafford_university_management_system/manageStudents_admin.php";
                                </script>

                                <?php
                            }

                            else{
                                echo "admin not found";
                            }
                            
                        } 
                        
                    }
                    ?>
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  

<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script> 
    
</body>
</html>


