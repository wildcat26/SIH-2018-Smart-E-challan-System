<?php

 
  $DBhost = "localhost";
 
  $DBuser = "root";

  $DBpass = "";

  $DBname = "echallan";


  $DBcon = new mysqli($DBhost,$DBuser,$DBpass,$DBname);

 

    if ($DBcon->connect_errno) {
        
 die("ERROR : -> ".$DBcon->connect_error);

     
}else{
	echo "Connected.";
}
?>
