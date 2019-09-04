
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
          <h2 class="entry-title">Careers</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Careers</li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<div class="page-header-container">
            <img src="<?php echo base_url();?>assets/images/contact-banner.jpg" class="desktop-image" alt="slider_image">
			
			
</div>


<!-- Strat About Us -->
<section class="about-us">

<div class="container" >
	<div class="row">
	<div class="col-md-12">
                    <div class="contact-from">
						
							<h4 style="padding-bottom: 12px;">Careers with Mango Holidays </h4>
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
    
</div>
</section>
