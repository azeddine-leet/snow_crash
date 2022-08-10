#!/usr/bin/php
<?php

function y($m) {
    $m = preg_replace("/\./", " x ", $m); // replace '.' ==> ' x '
    $m = preg_replace("/@/", " y", $m);   // replace '@' ==> ' y'
    return $m; 
}

function x($y, $z) {
    
    $a = file_get_contents($y);
    
    $a = preg_replace("/ (\[x (.*)\]) /e", "y(\"\\2\")", $a); // '/e' at the end tells preg_replace to treat the 2nd arg as php code 
    //https://stackoverflow.com/questions/2082207/calling-function-inside-preg-replace-thats-inside-a-function
    
    $a = preg_replace("/\[/", "(", $a); // simple : replace '[' ==> '('
    
    $a = preg_replace("/\]/", ")", $a);  // simple : replace ']' ==> ')'
    
    return $a; 
}

$r = x($argv[1], $argv[2]); // fuction takes two parameters (argv[1] ==> should be a file), argv[2] not used.

print $r; // print result .

?>


[x <?php phpinfo(); ?> ]