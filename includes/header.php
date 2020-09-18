<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Stafford univerisity management system</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <style>

        header{

            background: url(img/staffordshire.jpg);
            background-size: cover;
            background-position:center;
            min-height: 850px;
        }

        header .short-text{
            display: none;
        }

      

        @media screen and (max-width: 670px){
            header{
                min-height: 750px;
            }

            
        }

        @media screen and (max-width: 690px){
            
            header .short-text { display: inline-block; }
            header .full-text { display: none; }
            

            
        }

        .datepicker-day-button{
            color:black;
        }

     </style>
    </head>
    <body>
      
     
    <header>
        
            <nav class="transparent">
                    <div class="nav-wrapper container">
                    <a href="#!" class="brand-logo"><span class="full-text">University of Stafford</span>
                    <span class="short-text">Stafford</span></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="index.php">About</a></li>
                            <li><a href="sign_in.php">Sign in</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
            </nav>
       

        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">About</a></li>
            <li><a href="sign_in.php">Sign in</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>