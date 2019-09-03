
<script type="text/javascript">

function onSubmit_Feedback(){
	
	if (document.Enquiry_Feedback.contact_cerson.value  == "")
	{
		alert("Please enter Contact Person Name .");
		document.Enquiry_Feedback.contact_person.focus()
		return false;
	}
	
	if (document.Enquiry_Feedback.telNo.value  == "")
	{
		alert("Please enter Telephone No .");
		document.Enquiry_Feedback.telNo.focus()
		return false;
	}
	if (document.Enquiry_Feedback.telNo.value!="")
	{
		var tel= parseInt(document.Enquiry_Feedback.telNo.value); 
			if (isNaN(tel)) 
				{  
				alert("Enter Telephone Number Correctly");
				document.Enquiry_Feedback.telNo.focus();
				return false
				} 
	}
		
	if (document.Enquiry_Feedback.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry_Feedback.from.focus()
		return false;
	}
    if (document.Enquiry_Feedback.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry_Feedback.from.focus()
		return false;
	}
	var tempEmail= document.Enquiry_Feedback.from.value;
	var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
	var check=/@[\w\-]+\./;
	var checkend=/\.[a-zA-Z]{2,3}$/;
	if (document.Enquiry_Feedback.from.value!="")
	{
	if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
	{
		alert("Can you check your Email Address again?");
		document.Enquiry_Feedback.from.focus();
		return false
	}
	}

    if (document.Enquiry_Feedback.Tour_Name.value  == "")
	{
		alert("Please enter Tour Name.");
		document.Enquiry_Feedback.Tour_Name.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Tour_Manager.value  == "")
	{
		alert("Please enter Tour Manager.");
		document.Enquiry_Feedback.Tour_Manager.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Sales_Executive_Who_Booked_Tour.value  == "")
	{
		alert("Please enter Sales Executive Who Booked Tour.");
		document.Enquiry_Feedback.Sales_Executive_Who_Booked_Tour.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Tour_Date.value  == "")
	{
		alert("Please enter Tour Date.");
		document.Enquiry_Feedback.Tour_Date.focus()
		return false;
	}
    if (document.Enquiry_Feedback.Tour_Booked_At.value  == "")
	{
		alert("Please enter Tour Booked At.");
		document.Enquiry_Feedback.Tour_Booked_At.focus()
		return false;
	}

	if (document.Enquiry_Feedback.requirement_details.value  == "")
	{
		alert("Please enter Requirement Details .");
		document.Enquiry_Feedback.requirement_details.focus()
		return false;
	}		

	return  CheckData_Feedback();
	// Validating
function CheckData_Feedback()
{
with(document.Enquiry_Feedback)
{
if(q.value != randomnumber_Feedback)
{
alert("Please Enter Correct Number");
q.focus();
return false;
}
}
return true;
}
}

</script>
<?php
$mynumber_Feedback= rand(673,62389);
//echo $mynumber."<br><br>";

$ilength=strlen($mynumber_Feedback);
// echo $ilength."<br><br>";
for($i=0; $i<$ilength; $i++)
{
//print substr($mynumber, $i, 1).", ";
}
?>
<script type="text/javascript">
//defining variable and storinging in script
var randomnumber_Feedback= <?= $mynumber_Feedback?>;
// Validating
</script>

<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h2 class="entry-title">Guest Feedback Form</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="#">Guest Corner</a></li>
            <li class="active">Guest Feedback Form</li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<div class="page-header-container">
            <img src="<?php echo base_url();?>assets/images/contact-banner.jpg" class="desktop-image" alt="slider_image">
			
			
</div>

<!-- Strat About Us -->
<section class="about-us">

<div class="container" style="padding-top:30px;">
	<div class="row">
	<div class="col-md-12">
                    <div class="contact-from feedback-form" style="box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.15), 0 4px 15px 0 rgba(0, 0, 0, 0.15);">
                        <h4>Dear Guest,</h4>
                        <p>
                        Thank you for giving us the opportunity to serve you. We request you to spare some of your valuable time to share your experience with us. Your feedback will go a long way in helping us serve you better. Looking forward to having you holiday with us again.
                        </p>
                        <h4>
                           Thank you,<br/>
                        Mango Holidays
                        </h4>
                        
                        <hr/>
                        <br/>
						
						<form action="http://www.midsupport.com/php/TestResult_attach.php" method="post" name="Enquiry_Feedback" onSubmit="return onSubmit_Feedback()"  enctype ="multipart/form-data"  class="contact-form form contact-validation-active row">
						
                            <input name="redirect" type="hidden">
              				<input name="recipient" type="hidden" value="amita.manchekar@mipl.co.in">
                            <input name="subject" type="hidden" value="Guest Feedback From Website">
                            
                            <div class="col-sm-12">
                                <h4 style="padding-bottom: 6px;">Personal Details </h4>
                                <div class="small-border" style="margin-bottom:20px;"></div>
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="contact_person" placeholder="Your Name *" id="contact_person" type="text">
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="telNo" placeholder="Phone *" id="telNo" type="text">
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="from" placeholder="Email *" id="from" type="text">
                            </div>

                            <div class="col-md-12"><hr/></div>

                            <div class="col-md-12">
                                <h4 style="padding-bottom: 6px;">Tour Details </h4>
                                <div class="small-border" style="margin-bottom:20px;"></div>
                            </div>
                            <div class="input-field col-sm-12 col-md-6">
                                <input class="set-input validate" name="Tour_Name" placeholder="Tour Name *" id="Tour_Name" type="text">
                                <input class="set-input validate" name="Tour_Manager" placeholder="Tour Manager *" id="Tour_Manager" type="text">
                                <input class="set-input validate" name="Sales_Executive_Who_Booked_Tour" placeholder="Sales Executive Who Booked Tour *" id="Sales_Executive_Who_Booked_Tour" type="text">
                            </div>
                            <div class="input-field col-sm-12 col-md-6">
                                <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding-xs">
                                    <p>Tour Date* : </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <div class="input-group date margin-bottom-30" data-date-format="dd.mm.yyyy" >
                                        <input type="text" class="form-control" name="Tour_Date" id="Tour_Date" placeholder="Select Tour Date" style="margin-bottom:0; width:200px !important;">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding-xs">
                                    <p>Tour Booked At* : </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <select class="form-control" name="Tour_Booked_At" id="Tour_Booked_At" style="width:200px !important;">
                                        <option value="0" disabled="" selected="">Select Place</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Nagpur">Nagpur</option>
                                        <option value="Thane">Thane</option>
                                        
                                    </select>
                                </div>
                                </div>

                                
                            </div>

                            <div class="col-md-12"><hr/></div>
                            <div class="input-field col-sm-4">
                                <textarea class="set-input-textarea" id="requirement_details" name="requirement_details" placeholder="Write Your Message *" rows="3"></textarea>
							</div>
							<div class="input-field col-sm-4">
							<?php
                        for($i=0; $i<$ilength; $i++)
                        {
                        $ipic= substr($mynumber_Feedback, $i, 1);
                        $sFilePath = "";
                        //if (file_exists(".$ipic.".gif"))
                        $sFilePath = $ipic.".gif";
                        ?>
                        <img style="width:20px;" src="https://mipl.co.in/nb/<?=$sFilePath ?>" />
                        <?php 
                        }
                        ?>
                        <input class="set-input validate" type="text" placeholder="Enter verifcation code *" name="q">
							</div>
							<div class="input-field col-sm-4">
                                <button style="margin-top: 6%; padding-top:10px;padding-bottom:10px;" class="btn btn-theme" id="send">Send Message</button>
							</div>
					
                        </form>
                    </div>
                </div>
	</div>	
	<br/>
	<br/>
    
</div>
</section>
