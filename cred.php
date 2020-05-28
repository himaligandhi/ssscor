<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--Site Metas-->
    <meta name="description" content="A boutique non-bank financial services company specializing in providing growth solutions to small and medium-sized business" />
    <meta name="keywords" content="Financial, CorFinancial,Business, small business, medium business " />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '691197158357706'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=691197158357706&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->   
<script type="text/javascript">
_linkedin_partner_id = "1996148";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1996148&fmt=gif" />
</noscript>

    <script src="finance.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <title>CreditApplication</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/footer.css" />
</head>

<style>

.wizard-content-left {
  background-blend-mode: darken;
  background-color: rgba(0, 0, 0, 0.45);
  background-image: url("https://i.ibb.co/X292hJF/form-wizard-bg-2.jpg");
  background-position: center center;
  background-size: cover;
  height: 100vh;
  padding: 30px;
}
.wizard-content-left h1 {
  color: #ffffff;
  font-size: 38px;
  font-weight: 600;
  padding: 12px 20px;
  text-align: center;
}

.form-wizard {
  color: #888888;
  padding: 30px;
}
.form-wizard .wizard-form-radio {
  display: inline-block;
  margin-left: 5px;
  position: relative;
}
.form-wizard .wizard-form-radio input[type="radio"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  background-color: #dddddd;
  height: 25px;
  width: 25px;
  display: inline-block;
  vertical-align: middle;
  border-radius: 50%;
  position: relative;
  cursor: pointer;
}
.form-wizard .wizard-form-radio input[type="radio"]:focus {
  outline: 0;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked {
  background-color: #8B040B;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  display: inline-block;
  background-color: #ffffff;
  border-radius: 50%;
  left: 1px;
  right: 0;
  margin: 0 auto;
  top: 8px;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::after {
  content: "";
  display: inline-block;
  webkit-animation: click-radio-wave 0.65s;
  -moz-animation: click-radio-wave 0.65s;
  animation: click-radio-wave 0.65s;
  background: #000000;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
  border-radius: 50%;
}
.form-wizard .wizard-form-radio input[type="radio"] ~ label {
  padding-left: 10px;
  cursor: pointer;
}
.form-wizard .form-wizard-header {
  text-align: center;
}
.form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
    background: #8B040B;
    color: #ffffff;
    padding: 14px 20px;
    border-radius: 100px;
    overflow: hidden;
    border: none;
}
.form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
  color: #ffffff;
  opacity: 0.6;
  text-decoration: none;
}
.form-wizard .wizard-fieldset {
  display: none;
}
.form-wizard .wizard-fieldset.show {
  display: block;
}
.form-wizard .wizard-form-error {
  display: none;
  background-color: #840414;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 2px;
  width: 100%;
  color:red;
}
.form-wizard .form-wizard-previous-btn {
  background-color: #44444C;
}
.form-wizard .form-control {
  font-weight: 300;
  height: auto !important;
  padding: 15px;
  color: #44444C;
  background-color: #f1f1f1;
  border: none;
}
.form-wizard .form-control:focus {
  box-shadow: none;
}
.form-wizard .form-group {
  position: relative;
  margin: 25px 0;
}
.form-wizard .wizard-form-text-label {
  position: absolute;
  left: 10px;
  top: 16px;
  transition: 0.2s linear all;
}
.form-wizard .focus-input .wizard-form-text-label {
  color: #8B040B;
  top: -18px;
  transition: 0.2s linear all;
  font-size: 12px;
}
.form-wizard .form-wizard-steps {
  margin: 30px 0;
}
.form-wizard .form-wizard-steps li {
  width: 25%;
  float: left;
  position: relative;
}
.form-wizard .form-wizard-steps li::after {
  background-color: #f3f3f3;
  content: "";
  height: 5px;
  left: 0;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  border-bottom: 1px solid #dddddd;
  border-top: 1px solid #dddddd;
}
.form-wizard .form-wizard-steps li span {
  background-color: #dddddd;
  border-radius: 50%;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  position: relative;
  text-align: center;
  width: 40px;
  z-index: 1;
}
.form-wizard .form-wizard-steps li:last-child::after {
  width: 50%;
}
.form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
  background-color: #8B040B;
  color: #ffffff;
}
.form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
  background-color: #840414;
  left: 50%;
  width: 50%;
  border-color: #840414;
}
.form-wizard .form-wizard-steps li.activated::after {
  width: 100%;
  border-color: #d65470;
}
.form-wizard .form-wizard-steps li:last-child::after {
  left: 0;
}
.form-wizard .wizard-password-eye {
  position: absolute;
  right: 32px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}
@keyframes click-radio-wave {
  0% {
    width: 25px;
    height: 25px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    width: 60px;
    height: 60px;
    margin-left: -15px;
    margin-top: -15px;
    opacity: 0.0;
  }
}

.cuurency {
  padding-left:12px;
}

.currency-symbol {
  position:absolute;
  padding: 16px 5px;
}
@media screen and (max-width: 767px) {
  .wizard-content-left {
    height: auto;
  }
}
</style>
<body>
 <?php include('header.php') ;?>
<section class="wizard-section">
		<div class="row no-gutters">
			<!-- <div class="col-lg-6 col-md-6">
				<div class="wizard-content-left d-flex justify-content-center align-items-center">
					<h1>Create Your Bank Account</h1>
				</div>
            </div> -->
            <div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="form-wizard">
             
					<form action="credapp.php" method="post" role="form" id="creditapplicationform">
						<div class="form-wizard-header">
							<h1 style="text-align: center; color:#8B040B;"><u>FINANCE APPLICATION</u></h1>
							<ul class="list-unstyled form-wizard-steps clearfix">
								<li class="active"><span>1</span></li>
								<li><span>2</span></li>
								<li><span>3</span></li>
								<li><span>4</span></li>
							</ul>
						</div>
						<fieldset class="wizard-fieldset show" id="businessinfo">
							<h3 style="text-align: center; color:#8B040B;">Business Owner Info</h3>
							<div class="form-group">                 
                                <input type="text" class="form-control wizard-required" id="fname" name="fname">
                                <label for="fname" class="wizard-form-text-label">First Name*</label>
								<div class="wizard-form-error">This field is required</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="lname" name="lname">
								<label for="lname" class="wizard-form-text-label">Last Name*</label>
								<div class="wizard-form-error">This fields is required</div>
							</div>
							<div class="form-group">
                            <input type="text" class="form-control wizard-required" id="addln1" name="addln1">
								<label for="addln1" class="wizard-form-text-label">Address Line 1*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="addln2" name="addln2">
								<label for="addln2" class="wizard-form-text-label">Address Line 2</label>
								
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="city" name="city">
								<label for="city" class="wizard-form-text-label">City*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            Select your Province*
                            <select name="province" class="form-control wizard-required">
                                    <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="YT">Yukon</option>
                                </select>
                                <div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="postcode" maxlength="7" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" name="owner_psd">
								<label for="postcode" class="wizard-form-text-label">PostCode* </label><small>Format: A0A 0A0</small>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
						
                            <div class="form-group">
                           
                            <input type="text" class="form-control wizard-required" id="phonenumber" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" name="owner_phonenumber">
                            
                            <label for="phonenumber" class="wizard-form-text-label">Phone Number*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            <input type="email" class="form-control wizard-required" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="owner_email">
								<label for="email" class="wizard-form-text-label">Email*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="dl" name="dl">
								<label for="dl" class="wizard-form-text-label">Driver License</label>
								
                            </div>
                            <hr>
                            <div class="form-group">
								Property Status*
								<div class="wizard-form-radio">
									<input name="property" id="rent" type="radio">
									<label for="rent">Rent</label>
								</div>
								<div class="wizard-form-radio">
									<input name="property" id="own" type="radio">
									<label for="own">Own</label>
                                </div>
                                <div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control wizard-required" name="propertyamt" default="0" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"  id="currency-field" data-type="currency">
                            
								<label for="currency-field" class="wizard-form-text-label">How much is your rent/mortgage amount?*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            How long have you lived in your current address?*
                            <div class="form-group">
                            <input type="number" class="form-control wizard-required" id="years" min="0" name="owner_years">
								<label for="years" class="wizard-form-text-label">Years*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            <input type="number" class="form-control wizard-required" id="months" min="0" name="owner_months">
								<label for="months" class="wizard-form-text-label">Months*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                           
                            
                           
                            
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
                        </fieldset>
                        	
						<fieldset class="wizard-fieldset">
							<h3 style="color:#8B040B; text-align: center;">Company Information</h3>
							<div class="form-group">
								<input type="type" class="form-control wizard-required" id="lconame" name="lconame">
								<label for="lconame" class="wizard-form-text-label">Legal Company Name*</label>
								<div class="wizard-form-error">This field is required</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="opname" name="opname">
								<label for="opname" class="wizard-form-text-label">Operating Name*</label>
								<div class="wizard-form-error">This field is required</div>
							</div>
							<div class="form-group">
                            <textarea rows="4" cols="20"  name="shareholdername" class="form-control wizard-required"></textarea>
								<label for="shareholder" class="wizard-form-text-label">Shareholders (Ownership % for each shareholder)*</label>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="cn" name="cn">
								<label for="cn" class="wizard-form-text-label">Ontario Corporation Number (CN)*</label>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="bn" name="bn">
								<label for="bn" class="wizard-form-text-label">Ontario Registered Business Number (BN)*</label>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
                            Date Business Incorporated*
								<input type="date" class="form-control wizard-required" id="datebusinc" name="datebusinc">
								
								<div class="wizard-form-error">This field is required</div>
							</div>
                            <div class="form-group">
                            Business Type: *
                            <select name="businesstype" class="form-control wizard-required">
                                    <option value="sole">Sole Proprietorship</option>
                                    <option value="Cor">Corporation</option>
                                    <option value="partner">Partnership</option>
                                </select> 
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="busadd" name="busadd">
								<label for="busadd" class="wizard-form-text-label">Business Address*</label>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="buscity" name="buscity">
								<label for="buscity" class="wizard-form-text-label"> City*</label>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
                           Select Your Province *
                            <select name="busprov" class="form-control wizard-required">
                            <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="YT">Yukon</option>
                                </select> 
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="buspsd" maxlength="7" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" name="buspsd">
								<label for="buspsd" class="wizard-form-text-label">PostCode*</label><small>Format:A0A 0A0</small>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                           
                            <hr>
                            <div class="form-group">
								Property Status*
								<div class="wizard-form-radio">
									<input name="radio_bus" id="corent" type="radio">
									<label for="corent">Rent</label>
								</div>
								<div class="wizard-form-radio">
									<input name="radio_bus" id="coown" type="radio">
									<label for="coown">Own</label>
                                </div>
                                <div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control wizard-required" min="0" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"  id="currency-field" data-type="currency" name="coproperty">
                            
								<label for="currency-field" class="wizard-form-text-label">How much is your rent/mortgage amount?*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>  
                            How long have you have this place?*
                            <div class="form-group">
								<input type="number" class="form-control wizard-required" id="busyears" min="0" name="busyears">
								<label for="busyears" class="wizard-form-text-label">Years*</label>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required" id="busmonth" min="0" max="12" name="busmonth">
								<label for="busmonth" class="wizard-form-text-label">Month*</label>
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            
                            <div class="form-group">
								<input type="tel" class="form-control wizard-required" id="busphonenumber"   onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" name="busphonenumber">
								<label for="busphonenumber" class="wizard-form-text-label">Business Phone Number*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="url" class="form-control wizard-required" id="website" name="website">
								<label for="website" class="wizard-form-text-label">Website*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            
                            <div class="form-group">
                           Business Activites *
                            <select name="busact" class="form-control wizard-required">
                            <option value="ABS">Auto Brokerage Services</option>
                                    <option value="AS">Auto Sales/Service</option>
                                    <option value="CREM">Commercial Real-Estate Management</option>
                                    <option value="CSM">Construction Services/Management</option>
                                    <option value="CS">Consulting Services</option>
                                    <option value="FS">Financial Services</option>
                                    <option value="HS">Hospitality Services</option>
                                    <option value="IE">Importer/Exporter</option>
                                    <option value="Man">Manufacturing</option>
                                    <option value="OS">Online Sales</option>
                                    <option value="PS">Professional Services</option>
                                    <option value="REM">Real Estate Management</option>
                                    <option value="RPM">Rental Property Management</option>
                                    <option value="ResS">Restaurant Sales</option>
                                    <option value="RS">Retail Sales</option>
                                    <option value="Sal">Sales</option>
                                    <option value="SS">Shipping Services</option>
                                    <option value="TS">Tech Start-Up</option>
                                    <option value="WS">Warehouse Sales</option>
                                    <option value="WC">Web Consulting</option>
                                    <option value="WebD">Web Developement</option>
                                    <option value="WD">Wholesale Distribution</option>
                                </select> 
								<div class="wizard-form-error">This field is required</div>
                            </div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
            </fieldset>	
            
			
            <fieldset class="wizard-fieldset">
							<h3 style="color:#8B040B; text-align:center">Bank Information</h3>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="bname">
								<label for="bname" class="wizard-form-text-label">Bank Name*</label>
								<div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
							<input type="text" class="form-control wizard-required" id="bankadd">
								<label for="bankadd" class="wizard-form-text-label">Bank Address*</label>
								<div class="wizard-form-error">This fields is required</div>
                                </div> 
                                <div class="form-group">
								<input type="text" class="form-control wizard-required" id="bankcity">
								<label for="bankcity" class="wizard-form-text-label">City*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                           Select Your Province *
                            <select name="bankprov" class="form-control wizard-required">
                            <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="YT">Yukon</option>
                                </select> 
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="bankpsd"  pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" maxlength="6">
								<label for="bankpsd" class="wizard-form-text-label">PostCode*</label><small>Format: A0A 0A0</small>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <hr>
                           
                           <div class="form-group">
                               <input type="text" class="form-control" id="accmanger">
                               <label for="accmanger" class="wizard-form-text-label">Account Manager</label>
                               
                           </div>
                           
                           <div class="form-group">
								<input type="text" class="form-control" id="bankphonenumber"   onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);">
								<label for="bankphonenumber" class="wizard-form-text-label">Bank Phone Number</label>
								
                            </div>
							
							
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="acon">
								<label for="acon" class="wizard-form-text-label">Account Number*</label>
								<div class="wizard-form-error"></div>
                    
                            <div class="form-group">
								Account Type *
								<div class="wizard-form-radio">
									<input name="radio_acc" id="radio1" type="radio">
									<label for="radio1">Chequing</label>
								</div>
								<div class="wizard-form-radio">
									<input name="radio_acc" id="radio2" type="radio">
									<label for="radio2">Savings</label>
                                </div>
                                <div class="wizard-form-error">This fields is required</div>
							</div>
                            <h3>Financial Info</h3>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0" name="gsr">
								<label for="currency-field" class="wizard-form-text-label">Gross Sales Revenue*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0" name="gi">
								<label for="currency-field" class="wizard-form-text-label">Gross Income*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0" name="ni">
								<label for="currency-field" class="wizard-form-text-label">Net Income*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <!-- <div class="form-group">
								<input type="text" class="form-control wizard-required" id="clienttype" name="ct">
								<label for="clienttype" class="wizard-form-text-label">Customer/Client Type: *</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div> -->
                            <div class="form-group">
                           Customer/Client Type *
                            <select name="ct" class="form-control wizard-required">
                            <option value="AD">Auto Dealers</option>
                                    <option value="CD">Construction Developers</option>
                                    <option value="Dis">Distributors</option>
                                    <option value="HS">Hospitality Services</option>
                                    <option value="IE">Importers/Exporters</option>
                                    <option value="Man">Manufactures</option>
                                    <option value="OS">Oline Sellers</option>
                                    <option value="PC">Professional Corporations</option>
                                    <option value="PO">Property Owners</option>
                                    <option value="RED">Real Estate Developers</option>
                                    <option value="RPO">Rental Property Owners</option>
                                    <option value="RO">Restaurant Owners</option>
                                    <option value="Ret">Retailers</option>
                                    <option value="TC">Tech Corporations</option>
                                </select> 
								<div class="wizard-form-error">This field is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0" name="psr">
								<label for="currency-field" class="wizard-form-text-label">Projected Sales Revenue (12 Months) *</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0" name="pgi">
								<label for="currency-field" class="wizard-form-text-label">Projected Gross Income (12 Months) *</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <h3>Assets</h3>
                            <hr>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="cash"  min="0" name="cash">
								<label for="cash" class="wizard-form-text-label">Cash*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="accrec"  min="0" name="accrec">
								<label for="accrec" class="wizard-form-text-label">Accounts Receivable*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="inv"  min="0" name="inv">
								<label for="inv" class="wizard-form-text-label">Inventory*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="co_vech"  min="0" name="co_vech">
								<label for="co_vech" class="wizard-form-text-label">Company Vehicles*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="realestate"  min="0" name="realestate">
								<label for="realestate" class="wizard-form-text-label">Real Estate*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="refunds"  min="0" name="refunds">
								<label for="refunds" class="wizard-form-text-label">HST Refunds Owings:*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="other_Assets"  min="0" name="other_Assets">
								<label for="other_Assets" class="wizard-form-text-label">Other Assets:*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                              Total Assets*
								<input type="number" class="form-control wizard-required cuurency" id="tot_Assets"  min="0" name="tot_Assets" readonly>
							
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <h3>Liabilites</h3>
                            <hr>
                            
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="crcrd"  min="0" name="crcrd">
								<label for="crcrd" class="wizard-form-text-label">Credit Cards*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="bankloan"  min="0" name="bankloan">
								<label for="bankloan" class="wizard-form-text-label">Bank Loans*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="autoloan"  min="0" name="autoloan">
								<label for="autoloan" class="wizard-form-text-label">Auto Loans/Leases:*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="shareholder_loan"  min="0" name="shareholder_loan">
								<label for="shareholder_loan" class="wizard-form-text-label">Shareholders Loans*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="acc_pay"  min="0" name="acc_pay">
								<label for="acc_pay" class="wizard-form-text-label">Account Payables*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="owing"  min="0" name="owing">
								<label for="owing" class="wizard-form-text-label">HST/GST Owing*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="cor_tax"  min="0" name="cor_tax">
								<label for="cor_tax" class="wizard-form-text-label">Corporate Taxes*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="oth_lia"  min="0" name="oth_lia">
								<label for="oth_lia" class="wizard-form-text-label">Other Liabilities*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required cuurency" id="payroll_taxes"  min="0" name="payroll_taxes">
								<label for="payroll_taxes" class="wizard-form-text-label">All Payroll Taxes*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                              Liability Total*
								<input type="number" class="form-control wizard-required cuurency" id="liatot"  min="0" name="liatot" readonly>
								
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                        </fieldset>
                        <!-- //cOMPNAYINFO -->
                        <fieldset class="wizard-fieldset">
                            <h3 style="text-align: center; color:#8B040B;">Business/Trade References</h3>
                            <h3>Reference 1</h3>
                            <hr>

							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="coname" name="coname">
								<label for="coname" class="wizard-form-text-label">Company Name*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="fulladd" name="fulladd">
								<label for="fulladd" class="wizard-form-text-label">Full Address*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="refcontactname" name="refcontactname">
								<label for="refcontactname" class="wizard-form-text-label">Contact Name*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="refphonenumber"   onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" name="refphonenumber">
								<label for="refphonenumber" class="wizard-form-text-label">Phone Number*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required"  name="refhcg" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0">
								<label for="curreny-field" class="wizard-form-text-label">Highest Credit Granted*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required"  name="refbusinessyrs" id="refbusinessyrs">
								<label for="refbusinessyrs" class="wizard-form-text-label"># of Years Doing Business*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <h3>Reference 2</h3>
                            <hr>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="coname2" name="coname2">
								<label for="coname2" class="wizard-form-text-label">Company Name*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="fulladd2" name="fulladd2">
								<label for="fulladd2" class="wizard-form-text-label">Full Address*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="refcontactname2" name="refcontactname2">
								<label for="refcontactname2" class="wizard-form-text-label">Contact Name*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="refphonenumber2"   onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" name="refphonenumber2">
								<label for="refphonenumber2" class="wizard-form-text-label">Phone Number*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required"  name="refhcg2" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0">
								<label for="curreny-field" class="wizard-form-text-label">Highest Credit Granted*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="number" class="form-control wizard-required"  name="refbusinessyrs2" id="refbusinessyrs2">
								<label for="refbusinessyrs2" class="wizard-form-text-label"># of Years Doing Business*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <h3>Loan Requirements</h3>
                                <hr />
                                <div class="form-group">
                           Loan Type*
                            <select name="loantype" class="form-control wizard-required">
                            <option value="workcap"> Working Capital Financing</option>
                                    <option value="brgfinace">Bridging Loan Financing</option>
                                    <option value="accrec"> Accounts Receivable Financing</option>
                                    <option value="purorder"> Purchase Order Financing</option>
                                    <option value="equifinace"> Equipment Financing</option>
                                    <option value="comfinace">Commercial Real Estate Financing</option>
                                    <option value="landfinace">Land Development Financing</option>
                                    <option value="constfinace"> Construction Finacing</option>
                                    <option value="mezzfinace">Mezzanine Financing</option>
                                    <option value="dipfinace">Debtor In Possession Financing</option>                               
                                    <option value="autofinace"> Automotive Lease Portfolio Financing</option>
                                    <option value="techfinace">Tech Start-Up Financing</option>
                                </select>
                                <div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required"  name="loanamtreq" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" min="0">
								<label for="curreny-field" class="wizard-form-text-label">Loan Amount Requested*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                           Term*
                            <select name="term" class="form-control wizard-required">
                            <option value="1yr">1 Year</option>
                                    <option value="2yr">2 Year</option>
                                    <option value="3yr">3 Year</option>
                                    <option value="4yr">4 Year</option>
                                    <option value="5yr"> 5 Year</option>
                                </select>
                                <div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
                              Date Funds Required*
								<input type="date" class="form-control wizard-required" id="datefunds" name="datefunds">
								<!-- <label for="datefunds" class="wizard-form-text-label">Date Funds Required*</label> -->
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="securityloan" name="securityloan">
								<label for="securityloan" class="wizard-form-text-label">Security for the loan*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <h3>Authorization</h3>
                                <hr />
                                <div class="form-group">
								<p>I/We hereby certify that the information given above is true, accurate and complete as at the statement date. I/We fully understand that such information shall be used to determine the company’s and my/our credit worthiness. I/We understand that ALL INFORMATION WILL BE VERIFIED and any information that proves inaccurate may result in the application being terminated. I/We authorize CORfinancial Corp. or its assignees to obtain all the information they require and further authorize the disclosure of said information to other lenders, credit bureaus and other reporting agencies.</p>
								
                            </div>
                            <div class="form-group">
                              Date*
								<input type="date" class="form-control wizard-required" id="currentdate"name="currrentdate">
								<!-- <label for="currentdate" class="wizard-form-text-label">Date*</label> -->
								<div class="wizard-form-error">This fields is required</div>
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control wizard-required" id="signofname" name="signofname">
								<label for="signofname" class="wizard-form-text-label">Signature and Title(Print Name)*</label>
								<div class="wizard-form-error">This fields is required</div>
                            </div>
            
            
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                <a href="javascript:;" class="form-wizard-submit float-right">Submit</a> 
                <!-- <input type="submit" name="submit" value="submit"/> -->
							</div>
						</fieldset>	
					</form>
				</div>
			</div>
		</div>
    </section>
    <script>
        
        $('#cash, #accrec, #inv,#realestate, #refunds, #other_Assets, #co_vech').keyup(function(){
               var value1 = parseFloat($('#cash').val()) || 0;
               var value2 = parseFloat($('#accrec').val()) || 0;
               var value3 = parseFloat($('#inv').val()) || 0;
               var value4 = parseFloat($('#realestate').val()) || 0;
               var value5 = parseFloat($('#refunds').val()) || 0;
               var value6 = parseFloat($('#other_Assets').val()) || 0;
               var value7=parseFloat($('#co_vech').val())||0;
               $('#tot_Assets').val(value1 + value2+ value3+value4+value5+value6+value7);
});

$('#crcrd, #bankloan, #autoloan,#shareholder_loan, #officelease, #acc_pay,#owing,#cor_tax, #oth_lia,#payroll_taxes').keyup(function(){
               var value1 = parseFloat($('#crcrd').val()) || 0;
               var value2 = parseFloat($('#bankloan').val()) || 0;
               var value3 = parseFloat($('#autoloan').val()) || 0;
               var value4 = parseFloat($('#shareholder_loan').val()) || 0;
               var value5 = parseFloat($('#officelease').val()) || 0;
               var value6 = parseFloat($('#acc_pay').val()) || 0;
               var value7 = parseFloat($('#owing').val()) || 0;
               var value8 = parseFloat($('#cor_tax').val()) || 0;
               var value9 = parseFloat($('#oth_lia').val()) || 0;
               var value10=parseFloat($('#payroll_taxes').val())||0;
               $('#liatot').val(value1 + value2+ value3+value4+value5+value6+value7+value8+value9+value10);
});

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}


jQuery(document).ready(function() {
	// click on next button
	jQuery('.form-wizard-next-btn').click(function() {
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		var next = jQuery(this);
		var nextWizardStep = true;
		parentFieldset.find('.wizard-required').each(function(){
			var thisValue = jQuery(this).val();

			if( thisValue == "") {
				jQuery(this).siblings(".wizard-form-error").slideDown();
				nextWizardStep = false;
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
		if( nextWizardStep) {
			next.parents('.wizard-fieldset').removeClass("show","400");
			currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
			next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
			jQuery(document).find('.wizard-fieldset').each(function(){
				if(jQuery(this).hasClass('show')){
					var formAtrr = jQuery(this).attr('data-tab-content');
					jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
						if(jQuery(this).attr('data-attr') == formAtrr){
							jQuery(this).addClass('active');
							var innerWidth = jQuery(this).innerWidth();
							var position = jQuery(this).position();
							jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
						}else{
							jQuery(this).removeClass('active');
						}
					});
				}
			});
		}
	});
	//click on previous button
	jQuery('.form-wizard-previous-btn').click(function() {
		var counter = parseInt(jQuery(".wizard-counter").text());;
		var prev =jQuery(this);
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		prev.parents('.wizard-fieldset').removeClass("show","400");
		prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
		currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
		jQuery(document).find('.wizard-fieldset').each(function(){
			if(jQuery(this).hasClass('show')){
				var formAtrr = jQuery(this).attr('data-tab-content');
				jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
					if(jQuery(this).attr('data-attr') == formAtrr){
						jQuery(this).addClass('active');
						var innerWidth = jQuery(this).innerWidth();
						var position = jQuery(this).position();
						jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
					}else{
						jQuery(this).removeClass('active');
					}
				});
			}
		});
	});
	//click on form submit button
	jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		parentFieldset.find('.wizard-required').each(function() {
			var thisValue = jQuery(this).val();
			if( thisValue == "" ) {
				jQuery(this).siblings(".wizard-form-error").slideDown();
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
	});
	// focus on input field check empty or not
	jQuery(".form-control").on('focus', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().addClass("focus-input");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
		}
	}).on('blur', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().removeClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideDown("3000");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideUp("3000");
		}
	});


});


(function($) {
  $.fn.currencyInput = function() {
    this.each(function() {
      var wrapper = $("<div class='currency-input' />");
      $(this).wrap(wrapper);
      $(this).before("<span class='currency-symbol'>$</span>");
      $(this).change(function() {
        var min = parseFloat($(this).attr("min"));
        var max = parseFloat($(this).attr("max"));
        var value = this.valueAsNumber;
        if(value < min)
          value = min;
        else if(value > max)
          value = max;
        $(this).val(value.toFixed(2)); 
      });
    });
  };
})(jQuery);

$(document).ready(function() {
  $('input.cuurency').currencyInput();
});



</script>

</body>
</html>
