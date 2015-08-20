<?php
/*
1: Strict Type Hinting




<?php




$needProcessing = strlen($name);




doTheDeed($needsProcessing, $name);




function (bool $needsProcessing, string $name) 

{

    $returnValue = $name;

   if ($needsProcessing) {

     $retrunValue = strrev($name);

    }




    return $returnValue;

}




Ok, we’ve all written code like this where we assume a positive value is true and a 0 is false. However if strict type hinting is turned on, this will fail. This will trip people up. Nothing is auto-cast except for widening.




2: Return Type Hinting

It is NOT dependent on declare() statement. if you define it, it HAS to match, period.
*/
