<?php

   $DBhost = "localhost";
 
  $DBuser = "root";

  $DBpass = "";

  $DBname = "echallan";
  
  /*

  $DBhost = "echallan.db.11322258.6a3.hostedresource.net";
$DBuser = "echallan";
$DBname = "echallan";
$DBpass = "Echa!!an1";
*/

//These variable values need to be changed by you before deploying


  $DBcon = new mysqli($DBhost,$DBuser,$DBpass,$DBname);

 

    if ($DBcon->connect_errno) {
        
 die("ERROR : -> ".$DBcon->connect_error);

     
}
?>
