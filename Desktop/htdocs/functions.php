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

function getOffcenceByOfidVeid($mysqli, $ofid, $veidm){

    $sql="select Owner_name, Offense_Date, Offense_Status, Offence_desc, Offense_Type, Challan_amount, 
      contact_phone , contact_email, Imageurl1,Offense_Place  from vehicle veh inner join offense off on veh.vehicle_id = off.vehicle_id
inner JOIN
challan cha on off.Challan_ID=cha.Challan_ID
      where off.offense_id= ?";
    /*
     *   $sql="select Owner_name, Offense_Date, Offense_Status, Offence_desc, Offense_Type, Challan_amount,
      contact_phone , contact_email, Imageurl1,Offense_Place  from vehicle veh inner join offense off on veh.vehicle_id = off.vehicle_id
inner JOIN
challan cha on off.Challan_ID=cha.Challan_ID
      where off.offense_id= ? and veh.vehicle_number= ?";
     */
    //echo $sql . $ofid . " " . $veidm;
    if ($stmt = $mysqli->prepare($sql)) {
        // $stmt->bind_param("is",$ofid, $veidm);
        $stmt->bind_param("i",$ofid);
		$stmt->execute();
		$stmt->bind_result($Owner_name, $Offense_Date, $Offense_Status, $Offence_desc, $Offence_Type, $Challan_amount,
            $contact_phone, $contact_email, $Imageurl1,$Offense_Place);
		$offenses = array();
		$stmt->store_result();
		while($stmt->fetch()){
            $offense = new Offence();
            $offense->setOffense_ID($ofid);
            $offense->setOwner_name($Owner_name);
			$offense->setOffense_Date($Offense_Date);
			$offense->setOffense_Status($Offense_Status);
            $offense->setOffence_desc($Offence_desc);
            $offense->setOffense_Type($Offence_Type);
            $offense->setChallan_amount($Challan_amount);
            $offense->setContact_phone($contact_phone);
            $offense->setContact_email($contact_email);
            $offense->setImageurl1($Imageurl1);
            $offense->setOffense_Place($Offense_Place);
			$offenses[] = $offense;
		}
		$stmt->close();
		return $offenses;
}
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

function savedispute($DBcon,$vid,$desc){



    $query = "INSERT INTO `dispute`(`di_offid`, `di_comments`) VALUES ($vid,'$desc')";
//echo $query;
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
	$officer_Rank=$ao->getOfficer_Rank();
	
	//echo $ofpass + " " +  $ofcpass;
	$query="insert into userdetails (username,password,email,mobile,Officer_Rank) values ('$ofname','$ofpass','$ofemail','$ofmobile','$officer_Rank')";
	
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
function getVehicleByVehicleNum($mysqli, $venum){


        $sql ="SELECT `Vehicle_Id`, `Vehicle_Number`, `Owner_Name`, `Contact_Address`, `Aadhar_Number`, `contact_phone`,
 `contact_email` FROM `vehicle` WHERE `Vehicle_Number` ='$venum'";

   // echo $sql;
    //die();


    $vehicles = array();
    if ($stmt = $mysqli->prepare($sql)) {
        // $stmt->bind_param("is",$ofid, $veidm);
        $stmt->execute();
        $stmt->bind_result($Vehicle_Id,$Vehicle_Number, $Owner_Name, $Contact_Address, $Aadhar_Number, $contact_phone, $contact_email);

        $stmt->store_result();
        while($stmt->fetch()){
            $vehicle = new Vehicle();
            echo $Vehicle_Number;
            $vehicle->setVehicle_id($Vehicle_Id);
            $vehicle->setVehicle_number($Vehicle_Number);
            $vehicle->setOwner_name($Owner_Name);
            $vehicle->setContact_address($Contact_Address);
            $vehicle->setAadhar_number($Aadhar_Number);
            $vehicle->setContact_phone($contact_phone);
            $vehicle->setContact_email($contact_email);
            $vehicles[] = $vehicle;
        }

        $stmt->close();
    }
    if(!empty($vehicles))
        return $vehicles[0];
    else{
        $vehicle = new Vehicle();
        $vehicle->setVehicle_id(0);
        return $vehicle;
    }


}
function getChallanAmount($otype){
    if($otype =="Over Speed")
        return 100;
    else if($otype =="Using your phone while driving")
        return 200;

    else if($otype =="Not wearing a seatbelt")
        return 100;

    else if($otype =="Failing to stop at a red light")
        return 200;

    else if($otype =="Dangerous driving")
        return 200;
    else
        return 100;
}
function createChallan($DBcon,$otype){
    $id=0;
    $amount = getChallanAmount($otype);
    $query="INSERT INTO `challan`(Challan_amount) VALUES 
      ($amount)";


    if (mysqli_query($DBcon,$query)) {
        $id = mysqli_insert_id($DBcon);
    } else {
        echo "Error: " . $query  . "" . mysqli_error($DBcon);
    }
    //$DBcon->close();
    echo "Challan Id". $id;
    return $id;
}

function addOffense($aoffense,$DBcon)
{
    $chid=0;
    //$aoffense = new Offence();
	$otype = $aoffense->getOffense_Type();
    $odate = $aoffense->getOffense_Date();
    $vehicle = new Vehicle();
    $vehicle = getVehicleByVehicleNum($DBcon,$aoffense->getVehicle_number());
    $veid =$vehicle->getVehicle_id();
    $odesc=$aoffense->getOffence_desc();
    $ostatus = "NOT PAID";
    $chid = createChallan($DBcon,$aoffense->getOffense_Type());
	$oplace= $aoffense->getOffense_Place();
	//$olocation=$aoffense->getOlocation();
	
	$query="insert into offense (Offense_Type,Offence_desc,	Offense_Date,Vehicle_ID,Offense_Status,Challan_ID,Offense_Place,Imageurl1) values (
      '$otype','$odesc','$odate','$veid','$ostatus',$chid,'$oplace','')";
	//echo $query;
		if (mysqli_query($DBcon,$query))
		{
			$last_id = $DBcon->insert_id;
			sendsms($vehicle->getContact_phone(),$last_id,$aoffense->getVehicle_number(),$otype);
			return $last_id;
		}else{
			return "Error: ". $query . " " . mysqli_error($DBcon);
		}
		$DBcon->close();
	}

	function markChallanInvalid($chid){

    }

function updateOffenceById($DBcon,$id,$aoffense)
{

   // $aoffense = new Offence();

    $otype = $aoffense->getOffense_Type();
    $odate = $aoffense->getOffense_Date();
    $vehicle = new Vehicle();
    $vehicle = getVehicleByVehicleNum($DBcon,$aoffense->getVehicle_number());
    $veid =$vehicle->getVehicle_id();
    $odesc=$aoffense->getOffence_desc();
    $ostatus = "NOT PAID";
    $chid = createChallan($DBcon,$aoffense->getOffense_Type()); //createChallan($DBcon,$aoffense->getOffense_Type());
    $oplace= $aoffense->getOffense_Place();
    //$olocation=$aoffense->getOlocation();

    $updateQuery ="UPDATE `offense` SET `Offense_Type`='" .$otype. "',`Offence_desc`='".$odesc ."',`Offense_Date`='".$odate."',
          `Vehicle_ID`='".$veid."',`Offense_Status`='".$ostatus."',`Challan_ID`='".$chid."'
          ,`Offense_Place`='".$oplace."' WHERE Offense_ID=". $id ;
    echo "<br/>".$updateQuery."</br/></br/>";
    //$query="insert into offense (Offense_Type,Offence_desc,	Offense_Date,Vehicle_ID,Offense_Status,Challan_ID,Offense_Place,Imageurl1) values (
      //'$otype','$odesc','$odate','$veid','$ostatus',$chid,'$oplace','')";
    //echo $query;
    if (mysqli_query($DBcon,$updateQuery))
    {
        return "Success";
    }else{
        return "Error: ". $updateQuery . " " . mysqli_error($DBcon);
    }
    $DBcon->close();
}

function searchUser($mysqli,$search,$searchType){
	//$search = strtolower($search);
	if($searchType == "name"){
		$sql = "select `User_ID`, `username`, `email`, `Officer_Rank`, `mobile`  from userdetails where lower(username) like '%".$search."%'";
	
	}else if($searchType == "email"){
		$sql ="select `User_ID`, `username`, `email`, `Officer_Rank`, `mobile`  from userdetails where lower(email) like '%".$search."%'";
	}
	//echo $sql;
	//die();
   $users = array();
     if ($stmt = $mysqli->prepare($sql)) {
       // $stmt->bind_param("is",$ofid, $veidm);
		$stmt->execute();
		$stmt->bind_result($User_ID, $username, $email, $Officer_Rank, $mobile);
		
		$stmt->store_result();
		while($stmt->fetch()){
            $user = new User();
			//echo $username;
            $user->setUser_id($User_ID);
            $user->setUsername($username);
			$user->setEmail($email);
            $user->setOfficer_rank($Officer_Rank);
            $user->setMobile($mobile);
			$users[] = $user;
		}
	 
		$stmt->close();
		}
		return $users;
	
}



function addCReport($creport,$DBcon)
{
    $chid=0;
    //$creport = new CReport();
	$otype = $creport->getRe_offencetype();
    $odate = $creport->getRe_date();
    $vehicle = new Vehicle();
    $vehicle = getVehicleByVehicleNum($DBcon,$creport->getRe_vehnum());
    $veid =$vehicle->getVehicle_id();
    $odesc=$creport->getRe_desc();
    $omobile=$creport->getRe_mobile();
    $ostatus = "Under Review";
    //$chid = createChallan($DBcon,$creport->getOffense_Type());
	$oplace= $creport->getRe_place();
	//$olocation=$aoffense->getOlocation();
	
	$query="INSERT INTO `creporting`(`re_place`,`re_offencetype`, 
        `re_date`, `re_status`, `re_mobile`, `re_vechid`, `re_desc`) VALUES
         ('$oplace','$otype','$odate','$ostatus','$omobile','$veid','$odesc')";
	echo $query;
		if (mysqli_query($DBcon,$query))
		{
			$last_id = $DBcon->insert_id;
			//sendsms($vehicle->getContact_phone(),$last_id,$creport->getVehicle_number(),$otype);
			return $last_id;
		}else{
			return "Error: ". $query . " " . mysqli_error($DBcon);
		}
		$DBcon->close();
	}


function searchViolationById($mysqli,$search){
    //$search = strtolower($search);

    
        $sql = "SELECT `Offense_ID`, `Offense_Type`, `Offence_desc`, `Offense_Date`, off.Vehicle_ID as ovid, veh.Vehicle_Number as venum,
 `Offense_Status`, off.`Challan_ID` as chid, cha.Challan_amount as chamt, `Offense_Place`, `Imageurl1` FROM `offense` off inner join vehicle veh
  on off.Vehicle_ID = veh.Vehicle_Id
  inner join challan cha on off.challan_id = cha.Challan_ID where off.Offense_ID=".$search;

    
   //echo $sql;
    //die();
    $violations = array();
    if ($stmt = $mysqli->prepare($sql)) {
        // $stmt->bind_param("is",$ofid, $veidm);
        $stmt->execute();
        $stmt->bind_result($Offense_ID, $Offense_Type, $Offence_desc, $Offense_Date, $ovid,$venum ,$Offense_Status , $chid,
            $chamt, $Offense_Place ,$Imageurl1 );

        $stmt->store_result();
        while($stmt->fetch()){
            $violation = new Offence();
            //echo $Offense_Type;
            $violation->setOffense_ID($Offense_ID);
            $violation->setOffense_Type($Offense_Type);
            $violation->setOffence_desc($Offence_desc);
            $violation->setOffense_Date($Offense_Date);
            $violation->setVehicle_ID($ovid);
            $violation->setVehicle_number($venum);
            $violation->setOffense_Status($Offense_Status);
            $violation->setChallan_ID($chid);
            $violation->setChallan_amount($chamt);
            $violation->setOffense_Place($Offense_Place);
            $violation->setImageurl1($Imageurl1);
            $violations[] = $violation;
        }

        $stmt->close();
    }
    return $violations;

}



function searchCIREOFF($mysqli,$search){
    //$search = strtolower($search);

    if($search == "Under Review"){
        $sql = "SELECT `creporting_id`, `re_place`, `re_image`, `re_offencetype`, `re_date`, `re_status`, `re_mobile`, 
`re_vechid`, veh.Vehicle_Number as venum, `re_offid`, `re_desc` FROM `creporting` inner join vehicle veh
  on re_vechid = veh.Vehicle_Id WHERE re_status='Under Review' ";

    }else if($search == "Approved"){
        $sql = "SELECT `creporting_id`, `re_place`, `re_image`, `re_offencetype`, `re_date`, `re_status`, `re_mobile`, 
`re_vechid`, veh.Vehicle_Number as venum, `re_offid`, `re_desc` FROM `creporting` inner join vehicle veh
  on re_vechid = veh.Vehicle_Id WHERE re_status='Approved' ";
    }
    else if($search == "Rejected"){
        $sql = "SELECT `creporting_id`, `re_place`, `re_image`, `re_offencetype`, `re_date`, `re_status`, `re_mobile`, 
`re_vechid`, veh.Vehicle_Number as venum, `re_offid`, `re_desc` FROM `creporting` inner join vehicle veh
  on re_vechid = veh.Vehicle_Id WHERE re_status='Rejected' ";
    }else{
        $sql= "SELECT `creporting_id`, `re_place`, `re_image`, `re_offencetype`, `re_date`, `re_status`, `re_mobile`, 
`re_vechid`, veh.Vehicle_Number as venum, `re_offid`, `re_desc` FROM `creporting` inner join vehicle veh
  on re_vechid = veh.Vehicle_Id";
    }
    echo $sql;
    //die();
    $disputes = array();
    if ($stmt = $mysqli->prepare($sql)) {
        // $stmt->bind_param("is",$ofid, $veidm);
        $stmt->execute();//Approved
        /*
        $stmt->bind_result($creporting_id,$re_place,$re_image,$re_offencetype,$re_date, $re_status, $re_mobile,
            $re_vechid, $venum ,$re_offid , $re_desc );
*/


          $stmt->bind_result($di_id,$di_offid,$di_comments,$di_status,$Offense_ID, $Offense_Type, $Offence_desc,
            $Offense_Date, $ovid,$venum ,$Offense_Status , $chid,
            $Offense_Place ,$Imageurl1 );


        $stmt->store_result();
        while($stmt->fetch()){
            $dispute = new Dispute();
            $dispute->setDi_id($di_id);
            $dispute->setDi_offid($di_offid);
            $dispute->setDi_comments($di_comments);
            $dispute->setDi_status($di_status);
            $violation = new Offence();
            echo $Offense_Type;
            $violation->setOffense_ID($Offense_ID);
            $violation->setOffense_Type($Offense_Type);
            $violation->setOffence_desc($Offence_desc);
            $violation->setOffense_Date($Offense_Date);
            $violation->setVehicle_ID($ovid);
            $violation->setVehicle_number($venum);
            $violation->setOffense_Status($Offense_Status);
            $violation->setChallan_ID($chid);
            $violation->setOffense_Place($Offense_Place);
            $violation->setImageurl1($Imageurl1);
            $dispute->setOffence($violation);
            $disputes[] = $dispute;
        }

        $stmt->close();
    }
    return $disputes;

}



function searchDisputes($mysqli,$search){
    //$search = strtolower($search);

    if($search == "RAISED"){
        $sql = "SELECT `di_id`, `di_offid`, `di_comments`, `di_status`, 
 `Offense_ID`, `Offense_Type`, `Offence_desc`, `Offense_Date`, off.Vehicle_ID as ovid, veh.Vehicle_Number as venum,
 `Offense_Status`, off.`Challan_ID` as chid,  `Offense_Place`, `Imageurl1` FROM `offense` off inner join vehicle veh
  on off.Vehicle_ID = veh.Vehicle_Id
  INNER join `dispute` di
    on di_offid = off.Offense_ID where di_status='RAISED'";

    }else if($search == "RESOLVED"){
        $sql = "SELECT `di_id`, `di_offid`, `di_comments`, `di_status`, 
 `Offense_ID`, `Offense_Type`, `Offence_desc`, `Offense_Date`, off.Vehicle_ID as ovid, veh.Vehicle_Number as venum,
 `Offense_Status`, off.`Challan_ID` as chid,  `Offense_Place`, `Imageurl1` FROM `offense` off inner join vehicle veh
  on off.Vehicle_ID = veh.Vehicle_Id
  INNER join `dispute` di
    on di_offid = off.Offense_ID where di_status='RESOLVED'";
    }else{
        $sql= "SELECT `di_id`, `di_offid`, `di_comments`, `di_status`, 
 `Offense_ID`, `Offense_Type`, `Offence_desc`, `Offense_Date`, off.Vehicle_ID as ovid, veh.Vehicle_Number as venum,
 `Offense_Status`, off.`Challan_ID` as chid,  `Offense_Place`, `Imageurl1` FROM `offense` off inner join vehicle veh
  on off.Vehicle_ID = veh.Vehicle_Id
  INNER join `dispute` di
    on di_offid = off.Offense_ID";
    }
    echo $sql;
    //die();
    $disputes = array();
    if ($stmt = $mysqli->prepare($sql)) {
        // $stmt->bind_param("is",$ofid, $veidm);
        $stmt->execute();
        $stmt->bind_result($di_id,$di_offid,$di_comments,$di_status,$Offense_ID, $Offense_Type, $Offence_desc,
            $Offense_Date, $ovid,$venum ,$Offense_Status , $chid,
            $Offense_Place ,$Imageurl1 );

        $stmt->store_result();
        while($stmt->fetch()){
            $dispute = new Dispute();
            $dispute->setDi_id($di_id);
            $dispute->setDi_offid($di_offid);
            $dispute->setDi_comments($di_comments);
            $dispute->setDi_status($di_status);
            $violation = new Offence();
            echo $Offense_Type;
            $violation->setOffense_ID($Offense_ID);
            $violation->setOffense_Type($Offense_Type);
            $violation->setOffence_desc($Offence_desc);
            $violation->setOffense_Date($Offense_Date);
            $violation->setVehicle_ID($ovid);
            $violation->setVehicle_number($venum);
            $violation->setOffense_Status($Offense_Status);
            $violation->setChallan_ID($chid);
            $violation->setOffense_Place($Offense_Place);
            $violation->setImageurl1($Imageurl1);
            $dispute->setOffence($violation);
            $disputes[] = $dispute;
        }

        $stmt->close();
    }
    return $disputes;

}


function searchViolations($mysqli,$search,$searchType){
    //$search = strtolower($search);

    if($searchType == "id"){
        $sql = "SELECT `Offense_ID`, `Offense_Type`, `Offence_desc`, `Offense_Date`, off.Vehicle_ID as ovid, veh.Vehicle_Number as venum,
 `Offense_Status`, off.`Challan_ID` as chid, cha.Challan_amount as chamt, `Offense_Place`, `Imageurl1` FROM `offense` off inner join vehicle veh
  on off.Vehicle_ID = veh.Vehicle_Id
  inner join challan cha on off.challan_id = cha.Challan_ID where off.Offense_ID=".$search;

    }else if($searchType == "vehnum"){
        $sql = "SELECT `Offense_ID`, `Offense_Type`, `Offence_desc`, `Offense_Date`, off.Vehicle_ID as ovid, veh.Vehicle_Number as venum,
 `Offense_Status`, off.`Challan_ID` as chid, cha.Challan_amount as chamt, `Offense_Place`, `Imageurl1` FROM `offense` off inner join vehicle veh
  on off.Vehicle_ID = veh.Vehicle_Id
  inner join challan cha  on off.challan_id = cha.Challan_ID where veh.Vehicle_Number ='".$search."'";
    }
   echo $sql;
    //die();
    $violations = array();
    if ($stmt = $mysqli->prepare($sql)) {
        // $stmt->bind_param("is",$ofid, $veidm);
        $stmt->execute();
        $stmt->bind_result($Offense_ID, $Offense_Type, $Offence_desc, $Offense_Date, $ovid,$venum ,$Offense_Status , $chid,
            $chamt, $Offense_Place ,$Imageurl1 );

        $stmt->store_result();
        while($stmt->fetch()){
            $violation = new Offence();
            echo $Offense_Type;
            $violation->setOffense_ID($Offense_ID);
            $violation->setOffense_Type($Offense_Type);
            $violation->setOffence_desc($Offence_desc);
            $violation->setOffense_Date($Offense_Date);
            $violation->setVehicle_ID($ovid);
            $violation->setVehicle_number($venum);
            $violation->setOffense_Status($Offense_Status);
            $violation->setChallan_ID($chid);
            $violation->setChallan_amount($chamt);
            $violation->setOffense_Place($Offense_Place);
            $violation->setImageurl1($Imageurl1);
            $violations[] = $violation;
        }

        $stmt->close();
    }
    return $violations;

}


function searchViolationsReport($mysqli,$search,$searchType,$fdate,$ldate,$paidtype){
    //$search = strtolower($search);



    $sql = "SELECT `Offense_ID`, `Offense_Type`, `Offence_desc`, `Offense_Date`, off.Vehicle_ID as ovid, veh.Vehicle_Number as venum,
 `Offense_Status`, off.`Challan_ID` as chid, cha.Challan_amount as chamt, `Offense_Place`, `Imageurl1` FROM `offense` off inner join vehicle veh
  on off.Vehicle_ID = veh.Vehicle_Id
  inner join challan cha on off.challan_id = cha.Challan_ID where ";
    $where ="";
    if(!($searchType=="All")) {
        if ($searchType == "id") {
            $where =" off.Offense_ID=" . $search;

        } else if ($searchType == "vehnum") {
            $where = " veh.Vehicle_Number ='" . $search . "'";
        }
    }

    if(!($paidtype=="all")) {
        if(strlen($where)>0)
            $where = $where . " and ";

        if ($paidtype == "np") {
            $where =" off.Offense_Status='NOT PAID'";

        } else if ($paidtype == "pa") {
            $where =" off.Offense_Status='PAID'";
        }
    }


    if((strlen($fdate)>0)&&(strlen($ldate)>0)){
        $fdate = date("Y-m-d", strtotime($fdate));
        $ldate = date("Y-m-d", strtotime($ldate));
        if(strlen($where)>0)
            $where = $where . " and ";

        $where = $where . " Offense_Date >= CAST('" .$fdate. "' AS DATE) AND Offense_Date <= CAST('" . $ldate . "' AS DATE) ";

    }

    $sql = $sql . $where;
    echo $sql;
    //die();
    $violations = array();
    if ($stmt = $mysqli->prepare($sql)) {
        // $stmt->bind_param("is",$ofid, $veidm);
        $stmt->execute();
        $stmt->bind_result($Offense_ID, $Offense_Type, $Offence_desc, $Offense_Date, $ovid,$venum ,$Offense_Status , $chid,
            $chamt, $Offense_Place ,$Imageurl1 );

        $stmt->store_result();
        while($stmt->fetch()){
            $violation = new Offence();
            //echo $Offense_Type;
            $violation->setOffense_ID($Offense_ID);
            $violation->setOffense_Type($Offense_Type);
            $violation->setOffence_desc($Offence_desc);
            $violation->setOffense_Date($Offense_Date);
            $violation->setVehicle_ID($ovid);
            $violation->setVehicle_number($venum);
            $violation->setOffense_Status($Offense_Status);
            $violation->setChallan_ID($chid);
            $violation->setChallan_amount($chamt);
            $violation->setOffense_Place($Offense_Place);
            $violation->setImageurl1($Imageurl1);
            $violations[] = $violation;
        }

        $stmt->close();
    }
    return $violations;

}


function removeOffence($DBcon,$id){

    $sql ="DELETE FROM `offense` WHERE `Offense_ID`= ".$id;
    echo "remove " . $sql;
    if (mysqli_query($DBcon, $sql)) {
        return "Success";
    } else {
        return "Error updating record: " . mysqli_error($DBcon);
    }
}



function updateImageUrl($DBcon,$id,$pathvalue){

    $sql ="UPDATE `offense` SET Imageurl1='".$pathvalue."' WHERE `Offense_ID` = ".$id;
	//echo "imageurl " . $sql;
    if (mysqli_query($DBcon, $sql)) {
        echo "updated";
    } else {
        echo "Error updating record: " . mysqli_error($DBcon);
    }

}


function updateCImageUrl($DBcon,$id,$pathvalue){

    $sql ="UPDATE `creporting` SET re_image='".$pathvalue."' WHERE `creporting_id` = ".$id;
    echo "imageurl " . $sql;
    if (mysqli_query($DBcon, $sql)) {
        echo "updated";
    } else {
        echo "Error updating record: " . mysqli_error($DBcon);
    }

}

function resolveDisputes($DBcon,$disputies){

    $idList='';
    for ($i = 0; $i < count($disputies); $i++) {
       $idList= $idList.$disputies[$i].',';
    }
    $idList = substr($idList,0,-1);

    echo $idList;
    $sql ="UPDATE `dispute` SET `di_status`='RESOLVED' WHERE `di_id` in ($idList)";
    echo  $sql;
    if (mysqli_query($DBcon, $sql)) {
        return "Success";
    } else {
        return "Error updating record: " . mysqli_error($DBcon);
    }

}

function getTotalOffenceCount($DBCon){
	$text=0;
	$sql="SELECT count(1) as tcount FROM `offense`";
if ($result=mysqli_query($DBCon,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    $text = $row[0]; 
    }
  mysqli_free_result($result);
}
return $text;
}

function getPaidOffenceCount($DBCon){
	$text=0;
	$sql="SELECT count(1) as tcount FROM `offense` where `Offense_Status` = 'PAID'";
if ($result=mysqli_query($DBCon,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    $text = $row[0]; 
    }
  mysqli_free_result($result);
}
return $text;
}


function getUnpaidOffenceCount($DBCon){
	$text=0;
	$sql="SELECT count(1) as tcount FROM `offense` where `Offense_Status` <> 'PAID'";
if ($result=mysqli_query($DBCon,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    $text = $row[0]; 
    }
  mysqli_free_result($result);
}
return $text;
}


function getUserDisputeCount($DBCon){
	$text=0;
	$sql="SELECT count(1) as tcount FROM `dispute` WHERE `di_status` <> 'RESOLVED'";
if ($result=mysqli_query($DBCon,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    $text = $row[0]; 
    }
  mysqli_free_result($result);
}
return $text;
}




function challanpaid($DBcon,$id){

    $sql ="UPDATE `challan` SET `Challan_status` ='PAID' WHERE `Challan_ID` = ".$id;
	
	    if (mysqli_query($DBcon, $sql)) {
        return "Success";
    } else {
        return "Error updating record: " . mysqli_error($DBcon);
    }

}

function vailationpaid($DBcon,$id){

    $sql ="UPDATE `offense` SET `Offense_Status` ='PAID' WHERE `Offense_ID` = ".$id;
	//echo $sql;
	    if (mysqli_query($DBcon, $sql)) {
        return "Success";
    } else {
        return "Error updating record: " . mysqli_error($DBcon);
    }

}
function getshortenurl($id,$vnum){

$url="http://localhost/echallan.php?violationid=". $id. "&vehicleid=" .$vnum;
$key = 'AIzaSyAewjaypKFoXRW64-mMbNs50h82xOaBNuc';
$googer = new GoogleURLAPI($key);

$shortDWName = $googer->shorten($url);
return $shortDWName; 
}

function sendsms($mobile,$id,$vnum,$otype){
	
	//return;
// Account details
//$apiKey = urlencode('PzUNO0p+hAU-TOtW4wsisqNcYmamYnSuesOdy3pisb');//sumesh
$apiKey = urlencode('bSwstUPouJA-711iX26rEj4WSmeWuvVPOE0rIgUvQF');
//
// Message details
$numbers = array();
$numbers[] = "91".$mobile;
print_r($numbers);
$sender = urlencode('TXTLCL');
$messageText=$otype.". Traffic Violation ID ".$id." Vehicle ".$vnum." Pay at ".getshortenurl($id,$vnum);
$message = rawurlencode($messageText);
echo $message;
$numbers = implode(',', $numbers);

// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" =>
$sender, "message" => $message);

// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Process your response here
echo $response;
}

function exportViolationsCSV($mysqli,$search,$searchType,$fdate,$ldate){
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=Violation_Report.csv');

// create a file pointer connected to the output stream
    $output = fopen('php://output', 'w');



// output the column headings
    fputcsv($output, array('Violation ID', 'Date', 'Vehicle Number', 'Offence Type', 'Offence Place', 'Offence Description', 'Amount', 'Status'));

// fetch the data
    $violations = searchViolationsReport($mysqli,$search,$searchType,$fdate,$ldate);


    foreach($violations as $violation){
        //$violation= new Offence();
        $row =  $violation->getOffense_ID() .',' . $violation->getOffense_Date() .','. $violation->getVehicle_number()
            . ',' . $violation->getOffense_Type() . ',' . $violation->getOffense_Place() . ',' . $violation->getOffence_desc()
            . ',' .  $violation->getChallan_amount() . ',' . $violation->getOffense_Status() ;
        fputcsv($output, explode(',', $row));

    }
}


?>