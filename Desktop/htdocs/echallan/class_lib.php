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

	class Officer {
		
		private $ofname;
		private $ofemail;
		private $ofpass;
		private $ofmobile;
		
		private $cofpass;
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




	

?>