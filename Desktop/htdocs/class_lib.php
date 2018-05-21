<?php



	class ContactUS {
		
		private $uname;
		private $email;
		private $typeofquery;
		private $messagetext;

		function setUname($uname) { $this->uname = $uname; }
		function getUname() { return $this->uname; }
		function setEmail($email) { $this->email = $email; }
		function getEmail() { return $this->email; }
		function setTypeofquery($typeofquery) { $this->typeofquery = $typeofquery; }
		function getTypeofquery() { return $this->typeofquery; }
		function setMessagetext($messagetext) { $this->messagetext = $messagetext; }
		function getMessagetext() { return $this->messagetext; }

	}

	class Dispute{

        private $di_id;
        private $di_offid;
        private $di_comments;
        private $di_status;
        private $offence;

        function setDi_id($di_id) { $this->di_id = $di_id; }
        function getDi_id() { return $this->di_id; }
        function setDi_offid($di_offid) { $this->di_offid = $di_offid; }
        function getDi_offid() { return $this->di_offid; }
        function setDi_comments($di_comments) { $this->di_comments = $di_comments; }
        function getDi_comments() { return $this->di_comments; }
        function setDi_status($di_status) { $this->di_status = $di_status; }
        function getDi_status() { return $this->di_status; }
        function setOffence($offence) { $this->offence = $offence; }
        function getOffence() { return $this->offence; }


    }
	class CReport{
		
		private $creporting_id;
		private $re_place;
		private $re_image;
		private $re_offencetype;
		private $re_date;
		private $re_status;
		private $re_mobile;
        private $re_vechid;
		private $re_offid;
        private $re_vehnum;
        private $re_desc;

        function setRe_desc($re_desc) { $this->re_desc = $re_desc; }
        function getRe_desc() { return $this->re_desc; }
        function setRe_vehnum($re_vehnum) { $this->re_vehnum = $re_vehnum; }
        function getRe_vehnum() { return $this->re_vehnum; }
        function setCreporting_id($creporting_id) { $this->creporting_id = $creporting_id; }
		function getCreporting_id() { return $this->creporting_id; }
		function setRe_place($re_place) { $this->re_place = $re_place; }
		function getRe_place() { return $this->re_place; }
		function setRe_image($re_image) { $this->re_image = $re_image; }
		function getRe_image() { return $this->re_image; }
		function setRe_offencetype($re_offencetype) { $this->re_offencetype = $re_offencetype; }
		function getRe_offencetype() { return $this->re_offencetype; }
		function setRe_date($re_date) { $this->re_date = $re_date; }
		function getRe_date() { return $this->re_date; }
		function setRe_status($re_status) { $this->re_status = $re_status; }
		function getRe_status() { return $this->re_status; }
		function setRe_mobile($re_mobile) { $this->re_mobile = $re_mobile; }
		function getRe_mobile() { return $this->re_mobile; }
		function setRe_vechid($re_vechid) { $this->re_vechid = $re_vechid; }
		function getRe_vechid() { return $this->re_vechid; }
		function setRe_offid($re_offid) { $this->re_offid = $re_offid; }
		function getRe_offid() { return $this->re_offid; }

		
	}
	class Vehicle{
        private $vehicle_id;
        private $vehicle_number;
        private $owner_name;
        private $contact_address;
        private $aadhar_number;
        private $contact_phone;
        private $contact_email;

        function setVehicle_id($vehicle_id) { $this->vehicle_id = $vehicle_id; }
        function getVehicle_id() { return $this->vehicle_id; }
        function setVehicle_number($vehicle_number) { $this->vehicle_number = $vehicle_number; }
        function getVehicle_number() { return $this->vehicle_number; }
        function setOwner_name($owner_name) { $this->owner_name = $owner_name; }
        function getOwner_name() { return $this->owner_name; }
        function setContact_address($contact_address) { $this->contact_address = $contact_address; }
        function getContact_address() { return $this->contact_address; }
        function setAadhar_number($aadhar_number) { $this->aadhar_number = $aadhar_number; }
        function getAadhar_number() { return $this->aadhar_number; }
        function setContact_phone($contact_phone) { $this->contact_phone = $contact_phone; }
        function getContact_phone() { return $this->contact_phone; }
        function setContact_email($contact_email) { $this->contact_email = $contact_email; }
        function getContact_email() { return $this->contact_email; }

    }

	class Offence{

        private $Offense_ID;
        private $Offense_Type;
        private $Offence_desc;
        private $Offense_Date;
        private $Vehicle_ID;
        private $Offense_Status;
        private $Challan_ID;
        private $Offense_Place;
        private $Imageurl1;
        private $Imageurl2;
        private $owner_name;
        private $Challan_amount;
        private $contact_phone;
        private $contact_email;
        private $vehicle_number;


        function setVehicle_number($vehicle_number) { $this->vehicle_number = $vehicle_number; }
        function getVehicle_number() { return $this->vehicle_number; }
        function setContact_phone($contact_phone) { $this->contact_phone = $contact_phone; }
        function getContact_phone() { return $this->contact_phone; }
        function setContact_email($contact_email) { $this->contact_email = $contact_email; }
        function getContact_email() { return $this->contact_email; }
        function setChallan_amount($Challan_amount) { $this->Challan_amount = $Challan_amount; }
        function getChallan_amount() { return $this->Challan_amount; }
        function setOwner_name($owner_name) { $this->owner_name = $owner_name; }
        function getOwner_name() { return $this->owner_name; }
        function setOffense_ID($Offense_ID) { $this->Offense_ID = $Offense_ID; }
        function getOffense_ID() { return $this->Offense_ID; }
        function setOffense_Type($Offense_Type) { $this->Offense_Type = $Offense_Type; }
        function getOffense_Type() { return $this->Offense_Type; }
        function setOffence_desc($Offence_desc) { $this->Offence_desc = $Offence_desc; }
        function getOffence_desc() { return $this->Offence_desc; }
        function setOffense_Date($Offense_Date) { $this->Offense_Date = $Offense_Date; }
        function getOffense_Date() { return $this->Offense_Date; }
        function setVehicle_ID($Vehicle_ID) { $this->Vehicle_ID = $Vehicle_ID; }
        function getVehicle_ID() { return $this->Vehicle_ID; }
        function setOffense_Status($Offense_Status) { $this->Offense_Status = $Offense_Status; }
        function getOffense_Status() { return $this->Offense_Status; }
        function setChallan_ID($Challan_ID) { $this->Challan_ID = $Challan_ID; }
        function getChallan_ID() { return $this->Challan_ID; }
        function setOffense_Place($Offense_Place) { $this->Offense_Place = $Offense_Place; }
        function getOffense_Place() { return $this->Offense_Place; }
        function setImageurl1($Imageurl1) { $this->Imageurl1 = $Imageurl1; }
        function getImageurl1() { return $this->Imageurl1; }
        function setImageurl2($Imageurl2) { $this->Imageurl2 = $Imageurl2; }
        function getImageurl2() { return $this->Imageurl2; }

    }

	class Officer {
		
		private $ofname;
		private $ofemail;
		private $ofpass;
		private $ofmobile;		
		private $cofpass;
		private $Officer_Rank;

		function setOfficer_Rank($Officer_Rank) { $this->Officer_Rank = $Officer_Rank; }
		function getOfficer_Rank() { return $this->Officer_Rank; }

		function setCofpass($cofpass) { $this->cofpass = $cofpass; }
		function getCofpass() { return $this->cofpass; }


		function setOfname($ofname) { $this->ofname = $ofname; }
		function getOfname() { return $this->ofname; }
		function setOfemail($ofemail) { $this->ofemail = $ofemail; }
		function getOfemail() { return $this->ofemail; }
		function setOfpass($ofpass) { $this->ofpass = $ofpass; }
		function getOfpass() { return $this->ofpass; }
		function setOfmobile($ofmobile) { $this->ofmobile = $ofmobile; }
		function getOfmobile() { return $this->ofmobile; }
	}

class User{

	private $user_id;
	private $username;
	private $email;
	private $password;
	private $officer_rank;
	private $mobile;

	function setUser_id($user_id) { $this->user_id = $user_id; }
	function getUser_id() { return $this->user_id; }
	function setUsername($username) { $this->username = $username; }
	function getUsername() { return $this->username; }
	function setEmail($email) { $this->email = $email; }
	function getEmail() { return $this->email; }
	function setPassword($password) { $this->password = $password; }
	function getPassword() { return $this->password; }
	function setOfficer_rank($officer_rank) { $this->officer_rank = $officer_rank; }
	function getOfficer_rank() { return $this->officer_rank; }
	function setMobile($mobile) { $this->mobile = $mobile; }
	function getMobile() { return $this->mobile; }

}

// Declare the class
class GoogleUrlApi {
	
	// Constructor
	function GoogleURLAPI($key,$apiURL = 'https://www.googleapis.com/urlshortener/v1/url') {
		// Keep the API Url
		$this->apiURL = $apiURL.'?key='.$key;
	}
	
	// Shorten a URL
	function shorten($url) {
		// Send information along
		$response = $this->send($url);
		// Return the result
		return isset($response['id']) ? $response['id'] : false;
	}
	
	// Expand a URL
	function expand($url) {
		// Send information along
		$response = $this->send($url,false);
		// Return the result
		return isset($response['longUrl']) ? $response['longUrl'] : false;
	}
	
	// Send information to Google
	function send($url,$shorten = true) {
		// Create cURL
		$ch = curl_init();
		// If we're shortening a URL...
		if($shorten) {
			curl_setopt($ch,CURLOPT_URL,$this->apiURL);
			curl_setopt($ch,CURLOPT_POST,1);
			curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode(array("longUrl"=>$url)));
			curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-Type: application/json"));
		}
		else {
			curl_setopt($ch,CURLOPT_URL,$this->apiURL.'&shortUrl='.$url);
		}
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		// Execute the post
		$result = curl_exec($ch);
		// Close the connection
		curl_close($ch);
		// Return the result
		return json_decode($result,true);
	}		
}

	

?>