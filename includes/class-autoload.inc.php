<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    
    $path = 'classes/Controllers/';
    $extension = '.php';
    $fileName = $path. $className . $extension;

    if(file_exists($fileName)){ 
        
        include_once $fileName;
    }

    else {
        $path = 'classes/Models/';
        $extension = '.php';
        $fileName = $path. $className . $extension;

        if(file_exists($fileName)){ 
        
            include_once $fileName;
        }

        else{
            $path = 'classes/Views/';
            $extension = '.php';
            $fileName = $path. $className . $extension;
    
            if(file_exists($fileName)){ 
            
                include_once $fileName;
            }

        }
    }

    
}


?>