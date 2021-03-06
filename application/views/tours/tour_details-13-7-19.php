<style type="text/css">
        .footer_contact{
            line-height: 0.8;
        }

</style>

<!--1st part - code to print itenary from api for Donload/Print Itenary PDF-->
<?php 
        

    if(isset($itenary)){
        @$itenary_program ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        foreach($itenary as $itenary_key){

                $itenary_program .= "<h3 style='font-size:18px; font-weight:600'> Day  ".@$itenary_key->DayNo." : ".@$itenary_key->DayTitle."</h3>";
                $itenary_program .= "<p>".mb_convert_encoding(@$itenary_key->DayProgram,'UTF-8')."</p>";
    }}
        @$itenary_program .="</div>";
                
?>
<div id="tour_heading" style="display: none">
    <?php echo $ProductTitle;?>
</div>
<div id="tour_duration" style="display: none">
     <?php  echo $Days; ?> Days  / <?php echo $Nights; ?> Night 
</div>
<div id='PDFcontent' style="display: none">
    <h2 align="center" style="font-weight: bold; text-decoration:underline; padding-bottom:0; margin-bottom:0;"><?php echo $ProductTitle;?></h2>
    <h3 align="center" style="padding-bottom:0; margin-bottom:0;margin-top:5px; padding-top:0;">  <?php  echo $Days; ?> Days / <?php echo $Nights; ?> Night </h3>
    <h3 align="center" style="font-weight: bold; padding-bottom:0; margin-bottom:0;margin-top:15px; padding-top:0;">TOUR ITINERARY</h3>

    <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$itenary_program);?></p>
</div>

<div id='ignoreContent'  style="display: none">

<p>Only for display and not in pdf</p>

</div>
<!--end 1st part - code to print itenary from api for Donload/Print Itenary PDF-->

<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h2 class="entry-title"><?php echo @$ProductTitle;?></h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">Group Tour</a></li>
            <li><a href="<?php echo base_url().$sector_path;?>"><?php echo @$sector;?></a></li>
            <li class="active"><?php echo @$ProductTitle;?></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<!-- Start BLog Section -->
<section class="blog-single-pages portfolio tour-content">
        <div class="page-header-container">
            <img src="<?php echo base_url().'assets/'.$slider_image; ?>" class="desktop-image" alt="slider_image">
            <img src="<?php echo base_url().'assets/'.$slider_mobile_image; ?>" class="mobile-image" alt="slider_image">
          <div class="post-blog-item">

            <div class="date-mate">
                    <h6>Days<span><?php echo $Days; ?></span></h6>
                    <h6 class="nights">Nights<span><?php echo $Nights; ?></span></h6>
            </div>
            </div>
        </div>


      
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9">
                        <div class="post-blog-item tour-info">
                                <div class="post-blog-content">
                                       
                                    <!-- <h4 class="mb-20"><a href="#">Tour Details 1</a></h4> -->
                                    <section class="tabs-style-five verticle-tab">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                <div class="content-button">
                                                        <ul class="list-inline">
                                                            <?php $filename="file.pdf" ;
                                                            $data ="tt";
                                                            ?>
                                                                <li><i class="fa fa-envelope-o"></i> <a style="cursor:pointer;" id="element" class="show-modal"> Send Enquiry</a> &nbsp;| </li>
                                                               <!--  <li><i class="fa fa-print" aria-hidden="true"></i> <a style="cursor:pointer;" id="pdf_print"> Print</a>&nbsp; | </li> -->
                                                                <!-- <li><button onclick="generate()"><i class="fa fa-download" aria-hidden="true"></i>Download</button></li> -->
                                                                <li><i class="fa fa-download" aria-hidden="true"></i><a style="cursor:pointer;" id="pdf_download">Download / Print Itinerary  </a></li>
                                                            </ul>  
                                                </div> 
                                                </div>
                                              <div class="col-lg-12 column-margin">
                                                    <div>
                                                    <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#tab-item-one" aria-controls="tab-item-one" role="tab" data-toggle="tab"><i class="fa fa-anchor" aria-hidden="true"></i>Itinerary</a></li>
                                                            <li role="presentation"><a href="#tab-item-two" aria-controls="tab-item-two" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i>Highlights</a></li>
                                                            <li role="presentation"><a href="#tab-item-three" aria-controls="tab-item-three" role="tab" data-toggle="tab"><i class="fa fa-suitcase" aria-hidden="true"></i>Inclusions / Exclusions</a></li>
                                                            
                                                        </ul>
                                                    <!-- Tab panes -->
                                                    
                                                       <div class="tab-content">
                                                           
                                                            <div role="tabpanel" class="tab-pane fade in active" id="tab-item-one">
                                                                    <div class="row">
                                                                            <div class="col-lg-12">
                                                                                    <div class="tab-tour-info">
                                                                                <h4><b>Tour Itinerary</b></h4>
                                                                                        <div class="small-border"></div>
                                                                                    </div>
                                                                            <ul id='timeline1'>
                                                                                <?php 
                                                                                if(isset($itenary)){
                                                                                    foreach($itenary as $key){?>
                                                                                <li class='work'>
                                                                                    <div class="relative">
                                                                                       
                                                                                        <span class='date'>Day<?php echo $key->DayNo;?></span>
                                                                                        <span class='circle'></span>
                                                                                    </div>
                                                                                    <div class='content'>
                                                                                        <h5><?php echo $key->DayTitle;?></h5>
                                                                                        <p>
                                                                                            <?php echo $key->DayProgram;

                                                                                          
                                                                                            ?>
                                                                                                
                                                                                            </p>
                                                                                    </div>
                                                                                </li>
                                                                                <?php }} ?>
                                                                            </ul>
                                                                            </div>
                                                                        </div> 
                                                                </div>
                                                            <div role="tabpanel" class="tab-pane fade" id="tab-item-two">
                                                                <div class="row">
                                                                            <div class="col-lg-12">
                                                                                    <div class="tab-tour-info">
                                                                                <h4><b>Highlights</b></h4>
                                                                                        <div class="small-border"></div>
                                                                                        <ul>
                                                                                          <?php 
                                                                                          if(isset($ProductHighlights)){
                                                                                            foreach ($ProductHighlights as $ph_key ) { ?>
                                                                                            <li>
                                                                                              <?php echo $ph_key->HighlightItem;
                                                                                              }}
                                                                                            ?>
                                                                                            </li>
                                                                                        </ul> 
                                                                                    </div>
                                                                            
                                                                            </div>
                                                                        </div> 
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade" id="tab-item-three">
                                                                    <div class="tab-tour-info">
                                                                            <h4><b>Inclusions :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                              <?php 

                                                                                foreach ($Inclusions as $InclusionsItem ) { ?>
                                                                                <li>
                                                                                  <?php echo $InclusionsItem->InclusionItem;
                                                                                  }
                                                                                ?>
                                                                                </li>
                                                                            </ul> 
                                                                                    
                                                                                    <h4><b>Exclusions :</b></h4>
                                                                                    <div class="small-border"></div>
                                                                                    <ul>
                                                                                      <?php 

                                                             foreach ($Exclusions as $ExclusionsItem ) { ?>
                                                              <li>
                                                                <?php echo $ExclusionsItem->ExclusionItem;
                                                                   }
                                                                ?>
                                                              </li>        
                                                                                    </ul>
                                                                                            

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
                <div class="col-md-3 sidber clearfix">
                    <div class="widget bdr-pry-color">
                            <div class="wiget-title" style="margin-bottom:0;">
                                   
                                    <h4>Tour Dates & Availability</h4>
                                    <p style="color: #f60;letter-spacing: 0.5px;">(Click on tour to view details)</p>
                                </div>
                                <div class="table-style-three" style="padding-bottom: 0;">
                                            <div class="row"> 
                                                <div class="col-md-12"> 
                                                      
                                                    <div class="tour-table">
                                                       
                                                            <table class="table table-striped table-dark">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                        <th scope="col">Tour Code &<br>Departure Dates
                                                                          </th><th scope="col">Prices</th>
                                                                        </tr>
                                                                      </thead>
                                                                   
                                                                      <tbody>
                                                                        <?php 
                                                                            if(isset($UpcomingTours)){
                                                                                foreach ($UpcomingTours as $tours){
                                                                                foreach($tours->UpcomingTourPricingDetails as $pricedetails){
                                                                                    if(($tours->TourStatus)=='Open'){
                                                                        ?>
                                                                            <tr class="tour_info" data-tourcode="<?php echo $tours->TourCode; ?>" style="cursor: pointer;">
                                                                              <td><?php  echo $tours->TourCode; ?>
                                                                              <br/>
                                                                                <span class="hlights">
                                                                                  <?php  echo $tours->DepartureDate; ?>
                                                                                </span>
                                                                                    <br/>
                                                                                  <?php  echo $pricedetails->StartingLocation; 
                                                                                ?>  
                                                                              </td>
                                                                              <td>
                                                                                <span class="hlights">
                                                                                  INR <?php echo $pricedetails->TotalINRValue; ?>
                                                                                </span>
                                                                              </td>
                                                                            </tr>
                                                                          <?php }}}} ?>
                                                                        
                                                                      </tbody>
                                                                </table>
                                                </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                    </div>
                    <!-- // End Widget -->
                </div>
               

                        
                
            </div>

             <!--related tours started-->  
            
        <section class="hotel-offer tour-category">
        <div class="container" style="padding-bottom:0;">
            <div class="row">
                <div class="hottel-grid-offer related-tours" style="justify-content: left;">
                    <div class="col-md-12">
                        <h3 class="mb-20"><a>You may also like</a></h3>
                        <div class="small-border"></div>
                    </div>
                    <div class="related_tours col-md-12"> 
                       
                    </div>
                </div>
            </div>
            
        </div>
    </section>
              <!--related tours ended-->   
            
        </div>
    </section>

    <!--Popup for Tour Info with prices -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background: #FF6600;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="color:#fff;">Package Details</h4>
            </div>
            <!--<div class="modal-body">
              <p>This is a large modal.</p>
            </div>-->
            <div class="modal-body tour-body">
                <!-- Dynamic content goes here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>
      </div>
    </div>
<!--end of Popup for Tour Info with prices -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 
 <script type="text/javascript">


  //function for Related Tour section 
  $(function(){

 related_tour();



    function related_tour(){
        var curent_sector = "<?php echo trim($sector); ?>";
        var relative_tours="http://203.112.144.254:8888/WebsiteData/WebsiteDataService.svc/getProductListBySectorForWebsite?SectorName="+curent_sector;
        var current_tour = "<?php echo @$ProductTitle;?>";

        $.ajax({
          url:relative_tours,
          type:'GET',
          headers:
          {
            'UserName':'mhwebsite',
            'Password':'mango'
          },
          username:'mhwebsite',
          password:'mango',
          success:function(res){

            var rtr = JSON.parse(JSON.stringify(res));

            var related_tours_array = rtr.ProductList;
            // console.log(related_tours_array);
            if(related_tours_array !=  null){
                var array_length = related_tours_array.length;
                // console.log("Related tour length "+array_length);
                if(array_length > 5){
                    array_length = 5
                }
                // console.log(array_length);
                var related_tour_div='';
                if(array_length > 1){
                    var i;
                    for (i = 0; i < array_length; i++) { 
                        if(related_tours_array[i].ProductTitle != current_tour){
                            var ProductTitle = related_tours_array[i].ProductTitle;
                            var related_tour_view ='<div class="col-md-3 col-sm-4 mb-20">'+
                            '<div class="hover-box tour-hotel-box">'+
                                    '<div class="tour-img image">'+
                                            '<img src="<?php echo base_url();?>assets/images/tours/'+curent_sector.replace(new RegExp(" ","g"),"-").toLowerCase()+'/'+ProductTitle.replace(new RegExp(" ","g"),"-").toLowerCase()+'.jpg" alt="">'+

                                            '<div class="over-layer">'+
                                                '<div class="links">'+
                                                    '<ul class="list-inline">'+
                                                        '<li><a href="<?php echo base_url();?>tours/'+ProductTitle.replace(new RegExp(" ","g"),"-").toLowerCase()+'"><i class="fa fa-link" aria-hidden="true"></i></a></li>'+
                                                    '</ul>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                '<div class="tour-item hotel-item">'+
                                '<div class="blog-details">'+
                                    '<a href="<?php echo base_url();?>tours/'+ProductTitle.replace(new RegExp(" ","g"),"-").toLowerCase()+'">'+
                                        '<h4>'+related_tours_array[i].ProductTitle+'</h4>'+
                                        '<p>'+related_tours_array[i].Days+' Days / '+related_tours_array[i].Nights+' Nights</p>'+
                                    '</a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                                related_tour_div +=related_tour_view;
                        }
                    }
                            $(".related_tours").append(related_tour_div);
                            

                            // console.log("Tour Title "+related_tours_array[i].ProductTitle);
                }else{
                    $(".tour-category").css('display','none');
                }
            }else{
                $(".tour-category").css('display','none');
            }
            
          }
      });
    }
//end of function for Related Tour section
   
//function for popup display with prices on click of tour code & fectching data from API    
    $(".tour_info").click(function(){
      var tour_code = $(this).attr('data-tourcode');

      
      var url= "http://203.112.144.254:8888/WebsiteData/WebsiteDataService.svc/GetTourPricingDetailForWebsite?TourCode="+tour_code;

      $.ajax({
          url:url,
          type:'GET',
          headers:
          {
            'UserName':'mhwebsite',
            'Password':'mango'
          },
          username:'mhwebsite',
          password:'mango',
          success:function(res){
                var result = JSON.parse(JSON.stringify(res));
                var main_body = '<h4 style="text-align: center; text-transform: none;">Tour Price & Dates Availablity</h4><h3 style="color:#FF6600;">Tour Code: '+res.TourCode+'</h3>';
                // console.log(result.TourPricingHeaders[0].TourPricingDetails.length);
                var body_content = '<div class="table-responsive">'+
                '<table class="table table-striped table-bordered">'+
                '<thead>'+
                '<tr>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">CURRENCY</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">TWIN SHARING</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">TRIPLE SHARING</th>'+
                '<th rowspan="1" colspan="1" style="width: 150px;">SINGLE OCCUPANCY</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">CHILD WITH BED</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">CHILD NO BED</th>'+
                '<th rowspan="1" colspan="1" style="width: 120px;">INFANT</th>'+
                '</tr>'+
                '</thead>'+
                '<tbody>'+
                '<tr>'+
                '<td>'+
                '</td>'+
                '<td>(12 yrs &amp; above)</td>'+
                '<td>(12 yrs &amp; above)</td>'+
                '<td>(12 yrs &amp; above)</td>'+
                '<td>(2 to 11 yrs)</td>'+
                '<td>(2 to 11 yrs)</td>'+
                '<td>(0 to 2 yrs)</td>'+
                '</tr>'+
                '<tr>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[0].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[2].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[3].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[5].Amount1+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[4].Amount1+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[0].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[2].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[3].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[5].Amount2+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[4].Amount2+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>TOTAL IN INR</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[0].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[2].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[3].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[5].TotalINRValue+'</td>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[4].TotalINRValue+'</td>'+
                '</tr>'+
                '</tbody>'+
                '</table>'+
                '</div>'+
                '<br/>'+
                '<p>Tour price is calculated at '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1SellingRate+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2+'='+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2SellingRate+'/-.</p>'+
                '<p> Tour price variations are expected depending on the prevailing conversion rate. Payment in '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2 +' to be calculated on the prevailing rate of exchange of '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2 +' -> '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' on the day of actual payment to Mango Holidays.</p>'+
                '<p>Tour Price Starting From : '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' '+ result.TourPricingHeaders[0].TourPricingDetails[0].TotalINRValue+'/- per adult on twin sharing basis!</p>'+
                '<p><b>**Prices increase as seats get filled.**</b></p>';
                $(".tour-body").html("");
                $(".tour-body").html(main_body+body_content);
                $("#myModal").modal('show');

          }
      });
    });
//end function for popup display on click of tour code & fectching data from API

    //<!--2nd part - code to print itenary from api for Donload/Print Itenary PDF-->    
    $("#pdf_download").click(function(){
        var pdf_download = "<?php echo base_url()?>tours/mpdf";
        var content = $('#PDFcontent').html();
        var sector ="<?php echo @$sector ;?>";

        $.ajax({    
                url:pdf_download,
                type:'POST',
                data : {'data':content,'sector':sector},
                success:function(res){                   
                   // window.location.href="<?php echo base_url()?>"+res;
                   window.open("<?php echo base_url()?>"+res,
                          '_blank' // <- This is what makes it open in a new window.
                        );
                }
        })
    })

    $("#pdf_print").click(function(){
        var pdf_download = "<?php echo base_url()?>tours/mpdf";
        var content = $('#PDFcontent').html();
        var sector ="<?php echo @$sector ;?>";

        $.ajax({    
                url:pdf_download,
                type:'POST',
                data : {'data':content,'sector':sector},
                success:function(res){                   
                   // window.location.href="<?php echo base_url()?>"+res;
                   window.open("<?php echo base_url()?>"+res,
                          '_blank' // <- This is what makes it open in a new window.
                        ).print();
                  
                }
        })
    })
    //<!--end 2nd part - code to print itenary from api for Donload/Print Itenary PDF-->

  });

 </script>


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
                <h4 class="modal-title">Send Enquiry for <?php echo @$ProductTitle;?> </h4>
            </div>
            <form action="http://www.midsupport.com/php/TestResult_attach.php" method="post" name="EnquiryNew" onSubmit="return onSubmitNew()"  enctype ="multipart/form-data">
            <div class="modal-body-enquiry-form">
            <input name="redirect" type="hidden">
                <input name="recipient" type="hidden" value="amita.manchekar@mipl.co.in">
                  <input name="subject" type="hidden" value="Tour Enquiry From Website">    
                  <input name="tour-name" type="hidden" value="<?php echo @$ProductTitle;?>">    
            <input type="text" name="contact_person" placeholder="Name">
                  <input type="email" name="from" placeholder="Email">
                  <input type="text" name="telNo" placeholder="Phone Number">
                  <textarea name="requirement_details" placeholder="Message here.."></textarea>
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
                <button type="submit" name="submit" class="btn btn-primary btn-form-theme">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  // var show_btn=$('.show-modal');
  // var show_btn=$('.show-modal');
  // //$("#enquiry-form-modal").modal('show');
  
  //   show_btn.click(function(){
  //     $("#enquiry-form-modal").modal('show');
  // })
});

$(function() {
        $('#element').on('click', function( e ) {
            $("#enquiry-form-modal").modal('show');
            // Custombox.open({
            //     target: '#testmodal-1',
            //     effect: 'fadein'
            // });
            // e.preventDefault();
        });
    });
</script>

<!--popup for "Send enquiry" with corresponding Tour name-->