<style>
/*.blog-box form{padding:15px 15px 15px 15px;background:#ecececfc;}*/
.contact-from .input-field input, .contact-from .input-field textarea{
    margin-bottom:10px;
}
</style>
<script type="text/javascript">

function onSubmit2(){
	
	if (document.Enquiry2.contact_person.value  == "")
	{
		alert("Please enter Contact Person Name .");
		document.Enquiry2.contact_person.focus()
		return false;
	}
	
	if (document.Enquiry2.telNo.value  == "")
	{
		alert("Please enter Telephone No .");
		document.Enquiry2.telNo.focus()
		return false;
	}
	if (document.Enquiry2.telNo.value!="")
	{
		var tel= parseInt(document.Enquiry2.telNo.value); 
			if (isNaN(tel)) 
				{  
				alert("Enter Telephone Number Correctly");
				document.Enquiry2.telNo.focus();
				return false
				} 
	}
		
	if (document.Enquiry2.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry2.from.focus()
		return false;
	}
	var tempEmail= document.Enquiry2.from.value;
	var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
	var check=/@[\w\-]+\./;
	var checkend=/\.[a-zA-Z]{2,3}$/;
	if (document.Enquiry2.from.value!="")
	{
	if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
	{
		alert("Can you check your Email Address again?");
		document.Enquiry2.from.focus();
		return false
	}
	}	
	if (document.Enquiry2.address.value  == "")
	{
		alert("Please enter address.");
		document.Enquiry2.address.focus()
		return false;
	}
    if (document.Enquiry2.profile.value  == "")
	{
		alert("Please enter your current profile .");
		document.Enquiry2.profile.focus()
		return false;
	}	
    if (document.Enquiry2.age.value  == "")
	{
		alert("Please enter your age .");
		document.Enquiry2.age.focus()
		return false;
	}	
    if (document.Enquiry2.premises.value  == "")
	{
		alert("Please enter your Premises details.");
		document.Enquiry2.premises.focus()
		return false;
	}		

	return  CheckData();
	// Validating
function CheckData()
{
with(document.Enquiry2)
{
if(q.value != randomnumber)
{
alert("Please Enter Correct Verification Number");
q.focus();
return false;
}
}
return true;
}
}

</script>
<?php
$mynumber= rand(673,62389);
//echo $mynumber."<br><br>";

$ilength=strlen($mynumber);
// echo $ilength."<br><br>";
for($i=0; $i<$ilength; $i++)
{
//print substr($mynumber, $i, 1).", ";
}
?>
<script type="text/javascript">
//defining variable and storinging in script
var randomnumber= <?= $mynumber?>;
// Validating
</script>

<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h1 class="entry-title">Mango Holidays Franchisee</h1>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a class="active" href="#">Franchisee</a></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<div class="page-header-container">
            <img src="<?php echo base_url();?>assets/images/franchisee-banner.jpg" class="desktop-image" alt="slider_image">
           
</div>

<!-- Strat Agent Section -->
<section class="blog-single-pages">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="blog-box mb-3">
                            
                        <div class="blog-contant">
                            <!--<h3 class="mb-20">Mango Holidays Franchisee</h3>
                            <div class="small-border"></div>
                            <br/>-->   
                            <div class="widget clearfix">
                                <div class="sideber-title">
                                    <h4>The journey of Mango Holidays (India) Pvt.Ltd.</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul>
                                      <li>The journey of Mango Holidays (India) Private Limited began on January 1st, 2008. Since inception, the growth has been phenomenal. In a short span of time, we have opened offices in prime locations in Mumbai, Pune, Thane & Nagpur and Franchisees at Nanded and Pimpri- Chinchwad ( Pune Suburbs )
						    	    </li>

                                    </ul>
                                </div>
                                <br/>
                                <div class="sideber-title">
                                <h4>Our mission</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul>
                                        <li> 
                                        Our mission at Mango Holidays is to focus on values over volumes and quality over quantity with absolutely honest and ethical interactions at each stage.  <br>
						    	    	Come, partner our Fast growing organisation and let us achieve greater heights together.
                                        </li>

                                    </ul>
                                </div>
                                <br/>
                                <div class="sideber-title">
                                <h4>Why Mango Holidays?</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul>
                                        <li> <i class="fa fa-angle-right"></i> Opportunity to align with a fast Growing and Vibrant Organisation. </li>
						    	    	<li> <i class="fa fa-angle-right"></i> Being part of a Brand which is Unique in terms of Products and services. </li>

						    	    	<li> <i class="fa fa-angle-right"></i> Clear, precise and honest policies enable a healthy and smooth collaboration. </li>

						    	    	<li> <i class="fa fa-angle-right"></i> A strong and solid reputation developed over a short span of time. </li>

						    	    	<li> <i class="fa fa-angle-right"></i> A company with ong term plans and vision which ensures alignment.</li>

                                    </ul>
                                </div>
                                <br/>
                                <div class="sideber-title">
                                    <h4>Basic Requirements</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul>
                                        <li> <i class="fa fa-angle-right"></i> 
                                       Fully Furnished Retail Premises with a minimum area of 350 sq feet and able to renovate premises as per Mango Holidays specifications with a provision of a visible signboard</li>

						    	    	<li> <i class="fa fa-angle-right"></i>  A minimum of two experienced and trained employees who will be able to handle sales and visa operations.</li>

						    	    	<li> <i class="fa fa-angle-right"></i> Office will need to be equipped with basic infrastructure like washroom, internet, Telephone, Tea / Coffee, computer, Printer / photocopy machine, basic stationery etc.</li>

						    	    	<li> <i class="fa fa-angle-right"></i>  An Entrepreneurial Spirit, A passion for Travel, and fully committed to Mango Holidays Mission, vision and Core values.</li>

						    	    	<li> <i class="fa fa-angle-right"></i> A good presence in Local clubs and organisations and socially well connected.</li>


                                    </ul>
                                </div>
                                <br/>
                                <div class="sideber-title">
                                    <h4>Support offered</h4>
                                </div>
                                <div class="sideber-content">
                                    <ul>
                                        <li> <i class="fa fa-angle-right"></i> 
                                        Full access to our Intranet system wherein Franchisee owner and staff can go through the tour position, availability and all other details.</li>

						    	    	<li> <i class="fa fa-angle-right"></i>  Complete training to the Franchisee owner and staff regarding our Product Portfolio and standard operating procedure.</li>

						    	    	<li> <i class="fa fa-angle-right"></i>  Back up and assistance offered for large groups and special requirements.</li>

						    	    	<li> <i class="fa fa-angle-right"></i>  Signboard, posters and all other branding/marketing material ( soft copy ).</li>

						    	    	<li> <i class="fa fa-angle-right"></i>  Presence on our Website, Adverts and other promotional material ( Area wise ).</li>
                                        </li>
                                    </ul>
                                </div>
                                <br/>
                                <div class="">
                                <div class="col-md-8 col-sm-12 no-padding">
                                    <div class="contact-from">
    
							            <h4 style="padding-bottom: 12px; font-weight:600;">Franchisee Application Form </h4>
							            <div class="small-border"></div>
    
						                <form action="https://www.midsupport.com/php/TestResult_attach.php" method="post" name="Enquiry2" onSubmit="return onSubmit2()"  enctype ="multipart/form-data"  class="contact-form form contact-validation-active row">
						                	<?php
				                                $ip_address=$_SERVER['REMOTE_ADDR'];
                                        
				                                /*Get user ip address details with geoplugin.net*/
				                                $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
				                                $addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
                                        
				                                /*Get City name by return array*/
				                                $city = $addrDetailsArr['geoplugin_city']; 
				                            ?>
                                                    <input name="redirect" type="hidden">
              			                			<input name="recipient" type="hidden" value="ranjan@mangoholidays.in, info@mangoholidays.in">
              			                			<input name="subject" type="hidden" value="<?php echo "Franchisee Request (".$city.")"; ?>">
                                            <div class="input-field col-sm-12">
                                                <input class="set-input validate" name="contact_person" placeholder="Your Name *" id="contact_person" type="text">
                                            </div>
                                            <div class="input-field col-sm-12">
                                                <input class="set-input validate" name="telNo" placeholder="Phone *" id="telNo" type="text">
                                            </div>
                                            <div class="input-field col-sm-12">
                                                <input class="set-input validate" name="from" placeholder="Email *" id="from" type="text">
                                            </div>
                                            <div class="input-field col-sm-12">
                                                <textarea class="set-input-textarea" id="address" name="address" placeholder="Address *" rows="3"></textarea>
						                	</div>
                                            <div class="input-field col-sm-12">
                                                <label>Current Profile (Business / Service) :</label>
                                                <input class="set-input validate" name="profile" placeholder="Current Profile *" id="profile" type="text">
                                            </div>
                                            <div class="input-field col-sm-12">
                                                <input class="set-input validate" name="age" placeholder="Age *" id="age" type="text">
                                            </div>
                                            <div class="input-field col-sm-12">
                                            <label>Premises (Owned / Rented) :</label>
                                            <input class="set-input validate" name="premises" placeholder="Premises  *" id="premises" type="text">
						                	</div>
						                	<div class="input-field col-sm-12">
						                	    <?php
                                                for($i=0; $i<$ilength; $i++)
                                                {
                                                $ipic= substr($mynumber, $i, 1);
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
						                	<div class="input-field col-sm-12">
                                                <button style="margin-top: 2%; padding-top:10px;padding-bottom:10px;" class="btn btn-theme" id="send">Send Message</button>
						                	</div>
                                        </form>
                                    </div>
                                </div>    
                                </div>
						         <!-- <div class="row">
						        	<div class="col-md-8">
						                <h3>Application Form</h3><br>
                                            <form action="">
						                  <div class="form-group">
						                	<label for="name">Name :</label>
						                	<input type="name" class="form-control" id="name">
						                  </div>

						                  <div class="form-group">
						                	<label for="Contact Details">Contact Details:</label>
						                	<input type="Contact Details" class="form-control" id="Contact_Details">
						                  </div>
						                  <div class="form-group">
						                	<label for="address">Address:</label>
						                	<input type="address" class="form-control" id="Address" >
						                  </div>
						                  <div class="form-group">
						                	<label for="Current_Profile">Current Profile ( Business /  Service ):</label>
						                	<input type="Current Profile" class="form-control" id="Current_Profile" >
						                  </div>

						                   <div class="form-group">
						                	<label for="Age">Age :</label>
						                	<input type="Age" class="form-control" id="Age" >
						                  </div>
						                  <div class="form-group">
						                	<label for="Premises">Premises  ( Owned / Rented ) :</label>
						                	<input type="Premises" class="form-control" id="Premises" >
						                  </div>
						                  <button type="submit" class="btn btn-default">Submit</button>
						                </form> 

						            </div>
						        </div>	-->				   
                            </div><!--end of widget-->
                        </div><!--end of blog-contant-->
                        </div><!--end of blog-box-->
                    </div>
                    
                </div>
                
            </div>
           
        </div>
    </div>
</section>
<!-- End Agent Section -->

	

	