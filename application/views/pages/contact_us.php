
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
	if (document.Enquiry2.requirement_details.value  == "")
	{
		alert("Please enter Requirement Details .");
		document.Enquiry2.requirement_details.focus()
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
          <h2 class="entry-title">Contact Us</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<div class="page-header-container">
            <img src="<?php echo base_url();?>assets/images/contact-banner.jpg" class="desktop-image" alt="slider_image">
			
			
</div>
<section style="background-color:#f1f0f0;">
<div class="container" style="padding:20px 0;">	
			<div class="row">
      <!-- <div class="col-md-3 col-lg-3 col-sm-6 col-12 helpLine">
        <h6 class="smallHeadingGray">Landline Number</h6>
        <div class="infoText pt-1">020 2544 4415</div>
      </div>
      <div class="col-md-3 col-lg-4 col-sm-6 col-12 infoNumbers">
        <h6 class="smallHeadingGray">InfoSale Number</h6>
        <div class="infoText pt-1">+91 8380039503 / 4 / 5 / 7<br></div>
      </div> -->
	  <div class="col-md-5 col-lg-6 col-sm-12 col-12 infoNumbers">
        <h6 class="smallHeadingGray">InfoSale Number</h6>
        <div class="infoText pt-1">+91 8380039499 / 8380039503 / 8380039505 <br></div>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-6 col-12">
        <h6 class="smallHeadingGray">Email Address</h6>
        <div class="infoText pt-1"><a href="#"> info@mangoholidays.in</a></div>
      </div>
      <div class="col-md-3 col-lg-2 col-sm-6 col-12">
        <h6 class="smallHeadingGray">Social Media Network</h6>
		<div class="infoText pt-1">
			<a href="https://www.facebook.com/MangoHolidays/" target="_blank"><i class="fa fa-facebook"></i><span></span></a>&nbsp;&nbsp;
            <a href="https://www.instagram.com/mangoholidays/" target="_blank"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
            <a href="https://twitter.com/mangoholidays" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
            <a href="https://www.youtube.com/channel/UCUl_GfhPaCEidqnHeff0njQ" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
			<!-- <a href="#"><i class="fa fa-facebook"></i><span></span></a> &nbsp;&nbsp;
			<a href="#"><i class="fa fa-google-plus"></i></a> &nbsp;&nbsp;
            <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;&nbsp;
            <a href="#"><i class="fa fa-dribbble"></i></a> &nbsp;&nbsp;
            <a href="#"><i class="fa fa-pinterest"></i></a></div> -->
      </div>
</div>
	</div>
</section>

<!-- Strat About Us -->
<section class="about-us">

<div class="container" style="padding-top:30px;">
	<div class="row">
	<div class="col-md-12">
                    <div class="contact-from">
						
							<h4 style="padding-bottom: 12px;">Send Your Enquiry / Requirement </h4>
							<div class="small-border"></div>
						
						<form action="http://www.midsupport.com/php/TestResult_attach.php" method="post" name="Enquiry2" onSubmit="return onSubmit2()"  enctype ="multipart/form-data"  class="contact-form form contact-validation-active row">
						
                                    <input name="redirect" type="hidden">
              						<input name="recipient" type="hidden" value="amita.manchekar@mipl.co.in">
              						<input name="subject" type="hidden" value="Enquiry From Website">
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="contact_person" placeholder="Your Name *" id="contact_person" type="text">
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="telNo" placeholder="Phone *" id="telNo" type="text">
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="from" placeholder="Email *" id="from" type="text">
                            </div>
                            <div class="input-field col-sm-4">
                                <textarea class="set-input-textarea" id="requirement_details" name="requirement_details" placeholder="Write Your Message *" rows="3"></textarea>
							</div>
							<div class="input-field col-sm-4">
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
							<div class="input-field col-sm-4">
                                <button style="margin-top: 6%; padding-top:10px;padding-bottom:10px;" class="btn btn-theme" id="send">Send Message</button>
							</div>
					
                        </form>
                    </div>
                </div>
	</div>	
	<br/>
	<br/>
    <div class="row">
	<div class="col-sm-6 col-md-4">
                    <div class="contact-address">
                        <div class="address">
						<h4>Pune</h4>
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-map-marker"></i> <p>302, Swojas Capital, Above Tata Motors,
Near Film Institute, Law College Road,
Pune. Maharashtra 411004.</p></li>
                                <li><i class="fa-li fa fa-phone"></i>+91 20 25444415</li>
                                <li><i class="fa-li fa fa-mobile"></i>+91 8380039499 / 8380039505</li>
                                <li><i class="fa-li fa fa-envelope-o"></i>info@mangoholidays.in</li>
                                
							</ul>
							<br/>
							<iframe style="border: 1; overflow: hidden;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7566.816939941997!2d73.82737473988576!3d18.51043464934967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c07fe44ebeff%3A0x3debf28396a0b78!2sMango+Holidays+India+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1524044261043" width="100%" height="200" frameborder="1" allowfullscreen="allowfullscreen"></iframe>
							
                        </div>
                    </div>
	</div>
							

	<div class="col-sm-6 col-md-4">
                    <div class="contact-address">
                        <div class="address">
						<h4>Dadar</h4>
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-map-marker"></i> <p> 5, Adi House, Gokhale Road North,<br/>
Near Portuguese Church,<br/>
Dadar (W) –400 028,<br/> Maharashtra.</p></li>
                                <li><i class="fa-li fa fa-mobile"></i>+91 22 24335500 / 11 / 22</li>
                                <li><i class="fa-li fa fa-envelope-o"></i>info@mangoholidays.in</li>
                                
							</ul>
							<br/>
							<iframe style="border: 0; margin-bottom: 4%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15087.995730531897!2d72.8360824!3d19.0197687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb9fb984ed8286f5!2sMango+Holidays!5e0!3m2!1sen!2sin!4v1524131540546" width="100%" height="200" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
	</div>
	<div class="col-sm-6 col-md-4">
                    <div class="contact-address">
                        <div class="address">
						<h4>Thane</h4>
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-map-marker"></i> <p>3702, 7th Floor, Tulsee Chambers,<br/>
Pachpakhadi, Opp. Teen Petrol Pump,<br/>
Thane (W) – 400 602,<br/> Maharashtra.</p></li>
                                
                                <li><i class="fa-li fa fa-mobile"></i> +91 8380039503</li>
                                <li><i class="fa-li fa fa-envelope-o"></i>info@mangoholidays.in</li>
                                
							</ul>
							<br/>
							<iframe style="border: 0; margin-bottom: 4%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15072.179604612527!2d72.9700949!3d19.1932411!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd487399a35fd49a2!2sMango+Holidays+India+Pvt+Ltd+-+Top+Travel+Agents+in+Thane+West!5e0!3m2!1sen!2sin!4v1524131673191" width="100%" height="200" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
	</div>
	
	<div class="col-sm-6 col-md-4">
                    <div class="contact-address">
                        <div class="address">
						<h4>Nagpur </h4>
                            <ul class="fa-ul">
                                <li><i class="fa-li fa fa-map-marker"></i> <p>302, 3rd Floor, Pathak House,
Near VNIT College, Abhyankar Nagar,<br/>
Nagpur – 440010,<br/> Maharashtra.</p></li>
                                
                                <!-- <li><i class="fa-li fa fa-mobile"></i>+91 712 – 2244557 / 8 / 9</li> -->
                                <li><i class="fa-li fa fa-envelope-o"></i>info@mangoholidays.in</li>
                                
							</ul>
							<br/>
							<br/>
							<iframe style="border: 0; margin-bottom: 4%;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7443.352698220215!2d79.05598628147585!3d21.12546571845012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x490b691a72e99296!2sMango+Holidays+Nagpur+Office+-+Best+Tour+and+Travel+Agency+in+Nagpur%2C+World+Tour+Packages!5e0!3m2!1sen!2sin!4v1529663015249" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
	</div>
		
	</div>
</div>
</section>
