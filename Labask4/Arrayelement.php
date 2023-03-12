<?php

$numbers = array(10, 20, 30, 40, 50);
$searchElement = 40;

if(in_array($searchElement, $numbers)) 
    {
        echo $searchElement . " has been found in the array";
    }
     else
      {
         echo $searchElement . " has not been found in the array";
      }

?>