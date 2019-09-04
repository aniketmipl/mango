
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
            <img src="<?php echo base_url();?>assets/images/careers-banner.jpg" class="desktop-image" alt="slider_image">
			
			
</div>


<!-- Strat About Us -->
<section class="about-us">

<div class="container" >
	<div class="row">
	<div class="col-md-12">
                    <div class="contact-from career">
						
                            <h4 style="padding-bottom: 12px;">Careers with Mango Holidays </h4>
                            <div class="small-border"></div>
                            <p>We at Mango Holidays are a group of young, passionate, committed and like-minded individuals who are relentlessly contributing towards discovering innovative ways of making holidays cherished experiences for our customers.<br>
                            At Mango Holidays, we have witnessed exceptional progress since inception, and we owe that to our fantastic team of people, who we consider as our most valuable asset.</p>
                            <p>Our rapid growth demands highly energetic people who have a fire to learn, a passion to excel and an urge to contribute. We provide for an entrepreneurial environment, unlimited growth potential, and strong interpersonal relationships. We provide for a motivating and inspiring atmosphere so that each person’s true potential is brought out into the limelight.</p>
                            <p>If you have the passion towards travel, you have good communication skills, you want to work in an organization where people are treated with equality and dignity &amp; you believe in teamwork then we would be glad to have you on board!<br>
                            If you wish to make your career &amp; be a part of this exceptional growth story at Mango Holidays, please send in your CV to <strong><a href="mailto:careers@mangoholidays.in">careers@mangoholidays.in.</a></strong></p>
                            <p>We have following opening with us:</p>

                        <div class="accordion-style-one" style="padding:0;">
                                        <div class="column-margin">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <b>Virtual CFO – Senior Position </b>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>We are looking for a Virtual CFO a Senior Position (Visiting Twice a Week) to oversee all our Finance & Accounting.</p>
                                                            <p><b>Offer Package :</b> Rs.30,000/- Per Month.</p>
                                                            <p><b>Scope Of Work:</b></p>
                                                            <p>
                                                            <ul>
                                                            <li>Annual Budgeting, quarterly forecasting</li>
                                                            <li>Monthly MIS P&amp;L, branch wise profitability, balance sheet, Cash flow, receivable &amp; Inventory reporting</li>
                                                            <li>Risks &amp; opportunities</li>
                                                            <li>Advising on scope for cost control &amp; reduction based on top line trend vs. budget</li>
                                                            <li>Fixed cost, variable cost analysis and pricing of products using contribution.</li>
                                                            </ul>
                                                            </p>
                                                            <br/>
                                                            <p><strong>Approach, Break Even Point (BEP) analysis Statutory compliance:</strong></p>
                                                            <ul>
                                                            <li>Statutory audit preparation</li>
                                                            <li>GST, Income tax, TDS compliance</li>
                                                            </ul>
                                                            <br/>
                                                            <p><strong>Company law compliance Working capital management:</strong></p>
                                                            <ul>
                                                            <li>Fund management</li>
                                                            <li>Monitoring payments and collections</li>
                                                            <li>Preparing forecast cash flow F&amp;A Management</li>
                                                            <li>Guiding and supervising of account staff</li>
                                                            <li>Review of Payroll &amp; Salary accounting</li>
                                                            <li>CFO would visit Mango Holidays twice in a week to go through the Accounting and Reporting Requirements</li>
                                                            <li>CFO to understand the process followed by Mango holidays and develop a financial calendar in the first month</li>
                                                            <li>CFO constantly motivate the Accounting staff to make sure that information is captured in such a way that MIS and reporting is done to the management on timely basis</li>
                                                            <li>Governance meeting once a month to check the compliance with the financial calendar for that month.</li>
                                                            </ul>
                                                            <br/>
                                                            <p><strong>Engagement Type:</strong><br>
                                                            Duration : (June 2019 – May 2020)………16 productive hours assumed per work week.<br>
                                                            <!-- <a style="cursor:pointer;" data-toggle="modal" data-target="#enquiry-form-modal"">Apply Now</a> -->
                                                            <button style="margin-top: 2%; padding-top:10px;padding-bottom:10px;" class="btn btn-theme" data-toggle="modal" data-target="#enquiry-form-modal">Apply Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                        </div>

						<p>If your CV is shortlisted, you will be called for an interview with a prior appointment.<br/>
Thank you for your interest in Mango Holidays.</p>
					
                    </div>
                </div>
	</div>	
	<br/>
	<br/>
    
</div>
</section>



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
        

    function validateFileExtension(fld) {
    if (!/(\.bmp|\.gif|\.jpg|\.jpeg|\.txt|\.doc|\.docx|\.xls|\.xlsx|\.pdf|\.zip|\.rar)$/i.test(fld.value)) 
	{
        alert("Invalid file type.");
        //fld.form.reset();
		fld.value = "";
        fld.focus();
        return false;
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

<!--popup for "Send enquiry" with corresponding Tour name-->
<div id="enquiry-form-modal" class="modal fade career">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: #404241;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Submit Your Application </h4>
            </div>
            <form action="http://www.midsupport.com/php/TestResult_attach.php" onSubmit="return onSubmitNew()" method="post" name="EnquiryNew" id="EnquiryNew" enctype ="multipart/form-data">
            <div class="modal-body-enquiry-form">
            <input name="redirect" type="hidden">
                <input name="recipient" type="hidden" id="recipient" value="amita.manchekar@mipl.co.in">
                <input name="subject" type="hidden" id="subject" value="Career Application From Website">    
                <b><input name="post-applied-for" id="post-applied-for" value="Virtual CFO Senior Position" readonly></b>    
                    <input type="text" name="contact_person" id="contact_person" placeholder="Name">
                  <input type="email" name="from" id="from" placeholder="Email">
                  <input type="text" name="telNo" id="telNo" placeholder="Phone Number">
                  <textarea name="requirement_details" id="requirement_details" placeholder="Message here.."></textarea>
                  <label>Attach File :</label>
					<input type="file" style="display:inline-block;" name="file" id="file" onChange="return validateFileExtension(this)"  />
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>