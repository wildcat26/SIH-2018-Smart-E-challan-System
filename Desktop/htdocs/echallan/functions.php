<?php

require_once("class_lib.php");

function loginCheck($useremail, $password,$DBcon){
	
	 $query="select * from userdetails where email ='$useremail' and password='$password'";

    $query_run=mysqli_query($DBcon,$query);
    if(mysqli_num_rows($query_run)>0)
    {
    	// valid 
	//	echo "TRUE";
    	return true;
    }
    else{
		//echo "FALSE";
    	return false;
    }
	
	//die();
	 $DBcon->close();
	
}



function saveMessages($contactusObj,$DBcon){
	
	$user = $contactusObj->getUname();
	$email= $contactusObj->getEmail();
	$querytype=$contactusObj->getTypeofquery();
    $message=$contactusObj->getMessagetext();
	
	$query = "insert into contact_us (Name,Email,QueryType,Message) values ('$user', '$email','$querytype','$message')";

            if (mysqli_query($DBcon,$query)) {
             return "Success";
            } else {
               return "Error: " . $query  . "" . mysqli_error($DBcon);
            }
           $DBcon->close();
    
   }
   
   
   
function addOfficer($ao,$DBcon)
{
	$ofname = $ao->getOfname();
	$ofemail= $ao->getOfemail();
	$ofpass=$ao->getOfpass();
    $ofmobile=$ao->getOfmobile();
	$ofcpass=$ao->getCofpass();
	
	echo $ofpass + " " +  $ofcpass;
	$query="insert into userdetails (username,password,email,mobile) values ('$ofname','$ofpass','$ofemail','$ofmobile')";
	
	if($ofpass == $ofcpass)
	{
	
	
	
		if (mysqli_query($DBcon,$query))
		{
			return"pass";
		}else{
			return "Error: ". $query . "" . mysqli_error($DBcon);
		}
		$DBcon->close();
	}
	else{
		
		return "password mismatch, enter it again";
	}
		
}	
?>