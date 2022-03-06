<?php 
    //declare variable and assign a string 
    $str = "Hello";  
 
    //count length of string using php count function
    $count = strlen($str);  
 
    //Declare a variable in which you have stored a reverse string
    $revStr = '';
    for ($i=($count-1) ; $i >= 0 ; $i--)   
    {  
      // stored a string    
      $revStr .= $str[$i]; 
    }
 
    // print $revStr variable, it will return reverse string  
    print_r($revStr);
?> 