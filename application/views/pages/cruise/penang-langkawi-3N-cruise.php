
<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h1 class="entry-title">Penang - Langkawi Cruise</h1>
          <?php $cruise_name = 'Penang - Langkawi Cruise';?>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url()?>cruise">Cruise</a></li>
            <li class="active">Penang - Langkawi Cruise</li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>

<!-- Start BLog Section -->
<section class="blog-single-pages portfolio tour-content cruise-content">
        <div class="page-header-container">
            <img src="<?php echo base_url()?>assets/images/cruise-banner.jpg" />
            <div class="post-blog-item">

            <div class="date-mate">
                   
                    <h6 class="nights">Nights<span>3</span></h6>
                    <?php $cruise_nights = '3 Nights';?>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                        <div class="post-blog-item tour-info">
                                <div class="post-blog-content">
                                       
                                    
                                    <section class="tabs-style-five verticle-tab">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                <div class="content-button">
                                                        <ul class="list-inline">
                                                                <li><i class="fa fa-envelope-o"></i> <a style="cursor:pointer;" id="element" class="show-modal"> Send Enquiry</a> &nbsp;| </li>
                                                                
                                                                <li><i class="fa fa-download" aria-hidden="true"></i> <a href="<?php echo base_url()?>assets/Document/GDR_Ship-brochure.pdf" target="_new"> Download Catalogue</a></li>
                                                            </ul>  
                                                </div> 
                                                </div>
                                            <div class="col-lg-12 column-margin">
                                                    <div>
                                                    <!-- Nav tabs -->
                                                        <!-- <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#tab-item-one" aria-controls="tab-item-one" role="tab" data-toggle="tab"><i class="fa fa-anchor cruise-anchor" aria-hidden="true"></i>Cruise Details</a></li>
                                                            
                                                        </ul> -->
                                                    <!-- Tab panes -->
                                                    
                                                       <div class="tab-content">
                                                           
                                                            <div role="tabpanel" class="tab-pane fade in active" id="tab-item-one">
                                                                    <div class="row">
                                                                            <div class="col-lg-12">
                                                                                    <div class="tab-tour-info">
                                                                                <h4><b>Cruise Details</b> </h4>
                                                                                        <div class="small-border"></div>
                                                                                    </div>
                                                                                    <p><b>Visa Requirements: Multiple Entry Singapore Visa, Single Entry Malaysia Visa</b></p>
                                                                                    <div class="cruise-table">
                                                                                    <table class="table table-bordered">
                                                                                    <tr class="cruise-table-heading">
                                                                                    <th colspan="5">
                                                                                    Penang - Langkawi / 3 NIGHTS CRUISE (Sunday Departure)
                                                                                    </th>
                                                                                    </tr>
                                                                                    
                                                                                    <tr>
                                                                                        <th>Day</th>
                                                                                        <th>Port</th>
                                                                                        <th>ETA</th>
                                                                                        <th>ETD</th>
                                                                                        <th>Sailing Dates</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Sun</td>
                                                                                        <td>Singapore</td>
                                                                                        <td>-</td>
                                                                                        <td>1700</td>
                                                                                        <td>Apr 19, 2020</td>
                                                                                    </tr>    
                                                                                    <tr>  
                                                                                        <td>Mon</td>
                                                                                        <td>Penang</td>
                                                                                        <td>1330</td>
                                                                                        <td>2230</td>
                                                                                        <td>May 17, 2020</td>
                                                                                    </tr> 
                                                                                    <tr>  
                                                                                        <td>Tue</td>
                                                                                        <td>Langkawi</td>
                                                                                        <td>0700</td>
                                                                                        <td>1500</td>
                                                                                        <td>July 19, 2020</td>
                                                                                    </tr> 
                                                                                    <tr>  
                                                                                        <td rowspan="4">Wed</td>
                                                                                        <td rowspan="4">Singapore</td>
                                                                                        <td rowspan="4">1400</td>
                                                                                        <td rowspan="4">-</td>
                                                                                        <td>Aug 16, 2020</td>
                                                                                    </tr>
                                                                                    <tr>  
                                                                                        <td>Sep 20, 2020</td>
                                                                                    </tr>
                                                                                    <tr>  
                                                                                        <td>Oct 11, 2020</td>
                                                                                    </tr>
                                                                                    <tr>  
                                                                                        <td>Nov 15, 2020</td>
                                                                                    </tr>

                                                                                       
                                                                                    </table>
                                                                                    </div>

                                                                                
                                                                            </div>
                                                                        </div> 
                                                                </div>
                                                            
                                                           
                                                            
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                </section>
                                </div> 
                                </div>  
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- End BLog Section -->
   

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

    // if (document.EnquiryNew.location.value  == "")
    // {
    //     alert("Please enter your city");
    //     document.EnquiryNew.telNo.focus()
    //     return false;
    // }      

    if (document.EnquiryNew.requirement_details.value  == "")
    {
        alert("Please enter Requirement Details .");
        document.EnquiryNew.requirement_details.focus()
        return false;
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
<div id="enquiry-form-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Send Enquiry for <?php echo $cruise_name;?></h4>
            </div>
            <form  method="post" name="EnquiryNew" id="EnquiryNew" enctype ="multipart/form-data">
                <?php
                $ip_address=$_SERVER['REMOTE_ADDR'];

                /*Get user ip address details with geoplugin.net*/
                $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
                $addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 

                /*Get City name by return array*/
                $city = $addrDetailsArr['geoplugin_city']; 
                ?>
            <div class="modal-body-enquiry-form">
            <input name="redirect" type="hidden">

                 <input name="recipient" type="hidden" id="recipient" value="ranjan@mangoholidays.in, customercare@mangoholidays.in, info@mangoholidays.in">
                <!-- <input name="recipient" type="hidden" id="recipient" value="antara.patil@mipl.co.in, amita.manchekar@mipl.co.in"> -->
                  <input name="subject" type="hidden" id="subject" value="<?php echo "Cruise Enquiry From Website (".$city.")"; ?>">     

                
                  <input name="cruise-name" type="hidden" id="cruise-name" value="<?php echo $cruise_name ?>">    
                <input type="text" name="contact_person" id="contact_person" placeholder="Name">
                  <input type="email" name="from" id="from" placeholder="Email">
                  <input type="text" name="telNo" id="telNo" placeholder="Phone Number">
                  <!-- <input type="text" name="location" id="location" placeholder="Your City">                   -->
                  <textarea name="requirement_details" id="requirement_details" placeholder="Message here.."></textarea>
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
                <button type="submit" name="submit" class="btn btn-primary btn-form-theme form-submit">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function() {
    
        $('#element').on('click', function( e ) {
            $("#enquiry-form-modal").modal('show');
            // Custombox.open({
            //     target: '#testmodal-1',
            //     effect: 'fadein'
            // });
            // e.preventDefault();
        });
        $(".form-submit").click(function(e){

            e.preventDefault();
            var validation = onSubmitNew();
            if(validation != false){

                var submit_url = "https://www.midsupport.com/php/TestResult_attach-mango.php";

                $.ajax({
                    url: submit_url,
                    type: 'post',
                    dataType: 'json',
                    data: $('form#EnquiryNew').serialize(),
                    complete:function(res){
                        $("#enquiry-form-modal").modal('hide');
                        alert("Thank you for enquiry");
                    }
                });
            }

        })

    });

</script>

<!--popup for "Send enquiry" with corresponding Tour name-->
