<?php

include 'includes/class-autoload.inc.php';

?>

<!DOCTYPE html>

    <?php
        include 'includes/header.php';
    ?>

  
    
        <div class="row container">
            <div class="col s12 m12 l12">
            <div class="card blue-grey darken-1 ">
                <div class="card-content white-text">
                <span class="card-title center">Student Registration</span>
                        <div class="row">
                            <form action="" method="post">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                        <i class="material-icons prefix">textsms</i>
                                        <input type="text" id="autocomplete-input" class="autocomplete" name="studName">
                                        <label for="autocomplete-input">Enter Student Name</label>
                                        </div>

                                        <div class="input-field col s12">
                                        <i class="material-icons prefix">call</i>
                                        <input type="text" id="autocomplete-input" class="autocomplete" name="contact">
                                        <label for="autocomplete-input">Enter student Contact number</label>
                                        </div>

                                        <div class ="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input type="text" id="datepicker-input" class="datepicker" name="dob">
                                        <label for="datepicker-input">Enter student birthdate</label>
                                        
                                        </div>

                                        <div class="input-field col s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="Password" type="text" class="validate" name="username">
                                        <label for="Password">Username </label>
                                        </div>

                                        <div class="input-field col s12">
                                        <i class="material-icons prefix">verified_user</i>
                                        <input id="Password" type="password" class="validate" name="password">
                                        <label for="Password">Password </label>
                                        </div>
 
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                            <i class="material-icons right">send</i>
                                        </button>

                                        <!-- <input type="submit"> -->

                                        
                                        

                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
                
                </div>
            </div>
            </div>
        </div>
        


    </header>
          
    <?php
       
       if(isset($_POST['action'])){
            $name   = $_POST['studName'];
            $contact= $_POST['contact'];
            $dob    = $_POST['dob'];
            $pwd    = $_POST['password'];
            $username = $_POST['username'];
            
            $studentObj = new StudentContr();
            
            $studentObj->createStudent($name,$dob,$contact,$pwd,$username);      
        
       }
    ?>





<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  

<script>
    $(document).ready(function(){
       $('.sidenav').sidenav();
    });

    $(document).ready(function(){
      $('.datepicker').datepicker();
    });

    $(document).ready(function() {
    M.updateTextFields();
  });
       
</script>       
    </body>
</html>