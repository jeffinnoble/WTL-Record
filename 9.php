<?php
// PHP program to count number
// of word in a string 
    
// Function to count the words
function get_num_of_words($string) {
    $str = trim($string);
      while (substr_count($str, "  ") > 0) {
        $str = str_replace("  ", " ", $str);
    }
      return substr_count($str, " ")+1;
}
  
$str = "  All is well "; 
   
// Function call 
$len = get_num_of_words($str);
  
// Printing the result
echo $len; 
?>