
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--"Send Enquiry" form validation script & form code-->
<SCRIPT type="text/javascript">


function onSubmitNew(){
	
    if (document.EnquiryNew.contact_person.value  == "")
	{
		alert("Please enter Contact Person Name .");
		document.EnquiryNew.contact_person.focus()
		return false;
	}

  if (document.EnquiryNew.from.value  == "")
    {
        alert("Please enter Email Address.");
        document.EnquiryNew.from.focus()
        return false;
    }
    var tempEmail= document.EnquiryNew.from.value;
    var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
    var check=/@[\w\-]+\./;
    var checkend=/\.[a-zA-Z]{2,3}$/;
    if (document.EnquiryNew.from.value!="")
    {
    if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
    {
        alert("Can you check your Email Address again?");
        document.EnquiryNew.from.focus();
        return false
    }
    }   
    
    if (document.EnquiryNew.telNo.value  == "")
    {
        alert("Please enter Telephone No .");
        document.EnquiryNew.telNo.focus()
        return false;
    }
    if (document.EnquiryNew.telNo.value!="")
    {
        var tel= parseInt(document.EnquiryNew.telNo.value); 
            if (isNaN(tel)) 
                {  
                alert("Enter Telephone Number Correctly");
                document.EnquiryNew.telNo.focus();
                return false
                } 
    }
        
   
	return true;
}

    return  CheckData();

    // Validating
function CheckData()
{
with(document.EnquiryNew)
{
if(q.value != randomnumber_tour)
{
alert("Please Enter Correct Number");
q.focus();
return false;
}
}
return true;
}
}

</SCRIPT>


<?php
$mynumber_tour= rand(673,62389);
//echo $mynumber."<br><br>";

$ilength=strlen($mynumber_tour);
// echo $ilength."<br><br>";
for($i=0; $i<$ilength; $i++)
{
//print substr($mynumber, $i, 1).", ";
}
?>

<script type="text/javascript">
//defining variable and storinging in script
var randomnumber_tour= <?= $mynumber_tour?>;
// Validating
</script>
<!--end of "Send Enquiry" form validation script & form code-->

<style>
.melava .container{
    padding: 100px 0 100px  !important;
}

</style>


<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h1 class="entry-title">Melava Registration</h1>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li class="active">Melava Registration</li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<!-- <div class="page-header-container">
            <img src="<?php echo base_url();?>assets/images/careers-banner.jpg" class="desktop-image" alt="slider_image">
			
</div> -->


<!-- Strat About Us -->
<section class="about-us melava" style="background: url(./assets/images/popup/melava-reg-form.jpg); background-size:cover; background-repeat:no-repeat;">

<div class="container" >
	<div class="row">
	    <div class="col-md-12">
            <div class="">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!--popup for "Send enquiry" with corresponding Tour name-->
                    <div id="enquiry-form-modal" class="career">
                        <div class="">
                            <div class="modal-content" style="box-shadow: 1px 2px 20px 20px rgba(255, 255, 255, 0.72); background-color: rgba(255, 255, 255, 0.91);">
                                <div class="modal-header" style="background: #f37435;">
                                    <h3 class="modal-title" style="text-align:center;">Registration Form</h3>
                                </div>
                                <form action="https://www.midsupport.com/php/TestResult_attach.php" onSubmit="return onSubmitNew()" method="post" name="EnquiryNew" id="EnquiryNew" enctype ="multipart/form-data">
                                <div class="modal-body-enquiry-form">
                                    <input name="redirect" type="hidden">
                                      <input name="recipient" type="hidden" id="recipient" value="hr@mangoholidays.in, ranjan@mangoholidays.in, customercare@mangoholidays.in, info@mangoholidays.in">
                                      <input name="subject" type="hidden" id="subject" value="Melava Registration From Website">    
                                      <!-- <input type="hidden" name="melava_date" id="melava_date" value="South America - Margdarshan Melava on 25th Feb 2020"> -->
                                      <input type="text" name="contact_person" id="contact_person" placeholder="Your Name">
                                      <input type="email" name="from" id="from" placeholder="Email">
                                      <input type="text" name="telNo" id="telNo" placeholder="Phone Number">
                                      <textarea name="requirement_details" id="requirement_details" placeholder="Any Comments.."></textarea>
                                      <?php
                                            for($i=0; $i<$ilength; $i++)
                                            {
                                            $ipic= substr($mynumber_tour, $i, 1);
                                            $sFilePath = "";
                                            //if (file_exists(".$ipic.".gif"))
                                            $sFilePath = $ipic.".gif";
                                            ?>
                                            <img style="width:18px" src="https://mipl.co.in/nb/<?=$sFilePath ?>" />
                                            <?php 
                                            }
                                            ?>
                                            <input type="text" placeholder="Enter verifcation code" name="q">
                                        
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary btn-form-theme form-submit" style="background: #404241;">Submit</button>
                                    <button type="reset" name="reset" class="btn btn-default">Reset</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-md-3"></div>  
            </div>
        </div>
	</div>	
	<br/>
	<br/>
</div>
</section>





