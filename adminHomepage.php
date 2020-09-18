<?php

include 'includes/class-autoload.inc.php';

?>


<!DOCTYPE html>

   <html>

   <?php
      
      include 'includes/admin_header.php';

   ?>
               <nav class="blue-grey darken-3">
                
                <div class="nav-wrapper container">
              <a href="#!" class="brand-logo center">Dashboard</a>
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

        <main >

          



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