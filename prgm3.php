<?php 
$arr1 = array(0,0,1,1,0,0,1,1,0,0,1,1,1,0); 
$arr= array(1,0,0,0,0,1,0,0,0,1); 
$n = sizeof($arr) / sizeof($arr[0]); 

function Getonce($arr, $n) 
{ 
     $count = 0;  
    $outcome = 0;  
  
    for ($i = 0; $i < $n; $i++) 
    {   
        if ($arr[$i] == 0) 
		{
            $count = 0;
		}			
          else
        { 
            $count++; 
            $outcome = max($outcome, $count); 
        } 
    } 
  
    return $outcome; 
} 
echo "max num of consective 1's is ". Getonce($arr, $n) ; 
?>