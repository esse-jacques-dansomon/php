<?php 
session_start();
foreach($_SESSION as $key => $user)
{
    
    if($key !="array_error"){
        var_dump($user);
    }
    
}
