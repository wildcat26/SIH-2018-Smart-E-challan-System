<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Staff Recruitment Portal | Staff Recruitment Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
    <link href="../../css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Research Admissions @ IIT Palakkad</a>
            </div>
            <!-- /.navbar-header -->

			<?php include("pmenu.php"); ?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?php include("sidemenu.php"); ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-14">
                        <h1 class="page-header">Personal Details</h1>
						
						<div class="col-md-10 ">
						<small  class="form-text text-muted">Information entered here is to create your application form. Please ensure that the options provided here are correct. You can edit this form until the closure date. Items with a * symbol are compulsory.</small>
        
          <form class="needs-validation" action="/profile/pages/qualification.php" method="post">
            <br/>
			<div class="mb-3">
              <label for="fullname">Full Name *</label>
              <input type="text" class="form-control" id="fullname" name="fullname"  required>
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter your full name here.</small>
              </div>
            </div>

			 <div class="mb-3">
              <label for="datepicker">Date of Birth *</label>
			 				<input id="datepicker" width="270" size="16" type="text" name="dob" value="" readonly />
              <div class="invalid-feedback"><small  class="form-text text-muted">
                Please enter your Date of Birth.</small>
              </div>
            </div>
			
			
            <div classs="row">
              <div class="col-md-3 mb-3">
                <label for="country">Gender</label>
                <select class="form-control" id="country" >
                  <option value="">Male</option>
                  <option>Female</option>
                  <option>Transgender</option>
                </select>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                 Select the gender.
                </div></small>
              </div>
              <div class="col-md-4 mb-3">
                <label for="nationality">Nationality</label>
                <select class="form-control" id="nationality"  name="nationality">
                  <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ascension Island">Ascension Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cape Verde">Cape Verde</option><option value="Caribbean Netherlands">Caribbean Netherlands</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Ceuta and Melilla">Ceuta and Melilla</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo - Brazzaville">Congo - Brazzaville</option><option value="Congo - Kinshasa">Congo - Kinshasa</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Côte d’Ivoire">Côte d’Ivoire</option><option value="Denmark">Denmark</option><option value="Diego Garcia">Diego Garcia</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong SAR China">Hong Kong SAR China</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India" selected="selected">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau SAR China">Macau SAR China</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar [Burma]">Myanmar [Burma]</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="North Korea">North Korea</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Outlying Oceania">Outlying Oceania</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territories">Palestinian Territories</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Réunion">Réunion</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin">Saint Martin</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten">Sint Maarten</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Korea">South Korea</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="São Tomé and Príncipe">São Tomé and Príncipe</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tristan da Cunha">Tristan da Cunha</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="U.S. Outlying Islands">U.S. Outlying Islands</option><option value="U.S. Virgin Islands">U.S. Virgin Islands</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="Åland Islands">Åland Islands</option>
                </select>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Select the category of your nationality.
                </div></small>
              </div>
              <div class="col-md-5 mb-3">
                <label for="reservation">Category of Reservation</label>
                <select class="form-control" id="reservation" name="reservation">
				
                  <option value="ur" selected="selected">Unreserved</option><option value="obc">OBC-NCL</option><option value="scst">SC/ST</option><option value="pwd">People with disability</option>
                </select>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Category of Reservation.
                </div></small>
              </div>
            </div>
			
			<div class="form-group">
                                            <label>Current Employment Status</label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="currentempstatus" id="currentempstatus1" value="option1" checked>Student
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currentempstatus" id="currentempstatus2" value="option2">Employed
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currentempstatus" id="currentempstatus3" value="option3">Unemployed
                                            </label>
                                        </div>
										
										
			
			
			
			<div id="studdiv" class="row">

              <div class="col-md-4 mb-3">
                <label for="semyeastudy">Semester or Year of study</label>
                <input type="text" class="form-control" id="semyeastudy" name="semyeastudy" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Phone number is required.</small>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="institute">Name of the Institute</label>
                <input type="text" class="form-control" id="institute" name="institute" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
			  
              <div class="col-md-4 mb-3">
                <label for="studdoj">Date of Joining</label>
                <input id="studdoj" name="studdoj" width="270" size="16" type="text" value="" readonly />
				
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
            </div>
			
			
			<div id="empdiv" class="row">
              <div class="col-md-4 mb-3">
                <label for="firstName">Designation</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Phone number is required.</small>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="lastName">Name of the Company/Organisation</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
			  
              <div class="col-md-4 mb-3">
                <label for="lastName">Date of Joining</label>
                <input id="fdate" name="fdate" width="270" size="16" type="text" value="" readonly />
				
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
            </div>
			
			
            <h2><small>Contact Details</small></h2><hr>
			
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="primaryemail">Primary Email</label>
                <input type="text" class="form-control" id="primaryemail" name="primaryemail" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Phone number is required.</small>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="alternateemail">Alternate Email</label>
                <input type="text" class="form-control" id="alternateemail" name="alternateemail" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
            </div>
			
			
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="mobilephone">MobilePhone</label>
                <input type="text" class="form-control" id="mobilephone" name="mobilephone" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Phone number is required.</small>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="landline">Landline</label>
                <input type="text" class="form-control" id="landline" name="landline" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
            </div>
			
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="addressforcorrespondence">Address for Correspondence</label>
               <textarea class="form-control" id="addressforcorrespondence" name="addressforcorrespondence" rows="3"></textarea>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Address for communication. Give complete details including PIN code and Country.</small>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="permanentaddress">Permanent Address</label>
               <textarea class="form-control" id="permanentaddress" name="permanentaddress" rows="3"></textarea>
                <div class="invalid-feedback"><small  class="form-text text-muted">
                 Address for communication. Give complete details including PIN code and Country.</small>
                </div>
              </div>
            </div>
			
            <h2><small>Eligibility Criteria Satisfied</small></h2><hr>
			
			
			
			<div class="mb-3">
              
				<label for="email">Eligibility for Admission to Ph.D. Programme.</label>
<div class="invalid-feedback"><small  class="form-text text-muted">
                A candidate should meet at least one of the following criteria so as to be eligible for admission to the Ph.D. programme of IIT Palakkad. Select the criterion/criteria that you satisfy.</small>
              </div>
				<div class="form-group">
                                         
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="eligRadios" id="eligRadios1" value="option1" checked>E1. A Master's degree in Engineering/Technology or a Master''s degree by Research in Engineering/Technology with a good academic record.
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="eligRadios" id="eligRadios2" value="option2">E2. A Master's degree in Eligible Discipline with a good academic record and having a valid GATE score or UGC/CSIR-NET/NBHM or equivalent qualification tenable for the current year in the relevant area.
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="eligRadios" id="eligRadios3" value="option3">E3. Bachelor's degree in Engineering/Technology from a Centrally Funded Technical Institute (CFTI) with an exceptionally good academic record in an eligible discipline with a minimum CGPA of 8/10 (7.5 for OBC- NCL and 7.0 for SC/ST/PwD on a 10.0 point scale).
                                                </label>
                                            </div>
											 <div class="radio">
                                                <label>
                                                    <input type="radio" name="eligRadios" id="eligRadios3" value="option3">E4. IIT Palakkad staff members with a Master's degree in Eligible Discipline with a good academic record.
                                                </label>
                                            </div>
                                        </div>
            </div>
			
			<div id="typeofpostgraduatedegree" class="form-group">
                                            <label>Type of post-graduate degree</label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="currentempstatus" id="currentempstatus1" value="option1" checked>Masters in Engineering/Technology
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="currentempstatus" id="currentempstatus2" value="option2">Masters in Science, Arts or Applications
                                            </label></br>
                                            <label class="radio-inline">
                                                <input type="radio" name="currentempstatus" id="currentempstatus3" value="option3">Integrated Masters in Engineering/Technology
                                            </label>
											 <label class="radio-inline">
                                                <input type="radio" name="currentempstatus" id="currentempstatus3" value="option3">Integrated Masters in Science, Arts or Applications
                                            </label>
                                        </div>
			
			
			<div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">7) I am Ex. Serviceman</label>
			  
            </div>
			 <small  class="form-text text-muted">.</small>
			
			<div ><label for="credit">8) Are you working in Central/State /Semi-Govt./PSU/Autonomous bodies of the Governement *</label>
              <div class="custom-control custom-radio">
                <input id="credit" name="empgovt" type="radio" checked="checked" class="custom-control-input"  required>
                <label class="custom-control-label" for="credit">Yes</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="empgovt" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">No</label>
              </div>
             <small  class="form-text text-muted">If yes, The application should be forwarded through the current employer or NOC from the current employer is to be enclosed.</small>
            </div>
			
			
			
			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">9) Phone number</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Phone number is required.</small>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">10) Mobile number *</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" >
                <div class="invalid-feedback"><small  class="form-text text-muted">
                  Valid Mobile number is required.</small>
                </div>
              </div>
            </div>
			
			
			
            

               <div class="mb-3">
              <label for="email">12) Alternate email *</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback"><small  class="form-text text-muted">
                Alternate email address to reach you.</small>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="email">13) Name of Father/Husband *</label>
              <input type="text" class="form-control" id="userfhname" required>
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter Father/Husband Name.</small>
              </div>
            </div>
			
			
			 <div class="mb-3">
              
				<label for="email">14) Permanent Home Address</label>
				<textarea class="form-control" id="phaddress" rows="3"></textarea>
			 
              <div class="invalid-feedback"><small  class="form-text text-muted">
                Permanet Address. Give complete details including PIN code and Country.</small>
              </div>
            </div>
			
			<div class="mb-3">
              <label for="address2">15) Phone number </label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Permanent Home phone number complete with ISD/STD dialing code.</small>
              </div>
            </div>

			<div class="mb-3">
              <label for="address2">16) Time required to join (in Months) </label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Time required to join if offfered the post.</small>
              </div>
            </div>

			
			
			
            <div class="mb-3">
              
				<label for="email">17) Any other relevant information if any</label>
				<textarea class="form-control" id="phaddress" rows="3"></textarea>
			 
              <div class="invalid-feedback"><small  class="form-text text-muted">
               Other inofrmation cant exceed maximun of 250 character.</small>
              </div>
            </div>
			
			
			<div class="mb-3">
              <label for="address2">18) Place</label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Enter your Place.</small>
              </div>
            </div>

			
			<!--

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
			   <div class="invalid-feedback"><small  class="form-text text-muted">
               Other inofrmation cant exceed maximun of 250 character.</small>
              </div>
            </div>

			
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
			-->
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Save and Continue</button>
          </form>
        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

	  <script src="../../js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
		
        $('#fdate').datepicker({
            uiLibrary: 'bootstrap'
        });
		
        $('#studdoj').datepicker({
            uiLibrary: 'bootstrap'
        });		
		
    </script>  
</body>

</html>
