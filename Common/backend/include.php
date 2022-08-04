<?php

// check sql injection for input
function checkSqlInject($string){
    // return true for illegal string, false for legal string
    if(str_contains($string, "'")){
        return true;
    }
    if(str_contains($string, "\"")){
        return true;
    }
    return false;
}


// check username
function checkUsername($string){
    // must and just include number, uppercase and lowercase letter
    $success = true;
    $hasUpperCase = false;
    $hasLowerCase = false;
    for ($i=0; $i < strlen($string); $i++) { 
        if(!ctype_alnum($string[i])){
            $success = false;
        } else if(ctype_lower($string[i])){
            $hasLowerCase = true;
        } else if(ctype_upper($string[i])){
            $hasUpperCase = true;
        }
    }
    if(!$hasLowerCase || !$hasUpperCase){
        $success = false;
    }
    return $success;

}

