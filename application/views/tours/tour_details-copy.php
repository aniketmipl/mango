<style type="text/css">
        .footer_contact{
            line-height: 0.8;
        }

</style>
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
<!-- Start BLog Section -->
<section class="blog-single-pages portfolio tour-content">
        <div class="page-header-container">
            <img src="<?php echo base_url().'assets/'.$slider_image; ?>"  alt="slider_image">
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
                                                                <li><i class="fa fa-envelope-o"></i> <a href="#"> Send Enquiry</a> &nbsp;| </li>
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
                                                            <li role="presentation"><a href="#tab-item-three" aria-controls="tab-item-three" role="tab" data-toggle="tab"><i class="fa fa-suitcase" aria-hidden="true"></i>Inclusion / Exclusion</a></li>
                                                            
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
                                                                
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade" id="tab-item-three">
                                                                    <div class="tab-tour-info">
                                                                            <h4><b>Inclusion :</b></h4>
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
                                                                                    
                                                                                    <h4><b>Exclusion :</b></h4>
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
                                    <p>(Click on tour to view details)</p>
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
             <div class="row">
                <div class="spacial-place related-tours">
                    <div class="col-md-12">
                            <h3 class="mb-20"><a href="#">You may also like</a></h3>
                        <div id="tour-carousel" class="tour-carousel owl-carousel owl-theme">
                            <div class="item">
                                <div class="hover-box">
                                    <div class="tour-img image">
                                        <img src="<?php echo base_url()?>assets/images/tours/europe/classic-europe.jpg" alt="">
                                        <div class="over-layer">
                                            <div class="links">
                                                <h4><a href="#">Classic Europe</a></h4>
                                                <h6>15 Days / 14 Nights</h6>
                                                <div class="rating">
                                                    <ul class="rating-btn">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                    <br/> 
                                                    <a class="view-btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-item">
                                        <div class="tour-details">
                                        <a href="tour-details.html">
                                            <p> 15 Days / 14 Nights </p>
                                            <p class="price">Classic Europe</p>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-box">
                                    <div class="tour-img image">
                                        <img src="<?php echo base_url()?>assets/images/tours/europe/glimpses-of-europe.jpg" alt="">
                                        <div class="over-layer">
                                            <div class="links">
                                                <h4><a href="#">Glimpses of Europe</a></h4>
                                                <h6>15 Days / 14 Nights</h6>
                                                
                                                <div class="rating">
                                                    <ul class="rating-btn">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                    <br/>
                                                    <a class="view-btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-item">
                                        <div class="tour-details">
                                        <a href="tour-details.html">
                                            <p> 15 Days / 14 Nights </p>
                                            <p class="price">Glimpses of Europe</p>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-box">
                                    <div class="tour-img image">
                                        <img src="<?php echo base_url()?>assets/images/tours/europe/best-of-europe.jpg" alt="">
                                        <div class="over-layer">
                                            <div class="links">
                                                <h4><a href="#">Best Of Europe</a></h4>
                                                <h6>15 Days / 14 Nights</h6>
                                                
                                                <div class="rating">
                                                    <ul class="rating-btn">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                    <br/>
                                                    <a class="view-btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-item">
                                        <div class="tour-details">
                                        <a href="tour-details.html">
                                            <p> 15 Days / 14 Nights </p>
                                            <p class="price">Best Of Europe</p>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-box">
                                    <div class="tour-img image">
                                        <img src="<?php echo base_url()?>assets/images/tours/europe/grand-europe.jpg" alt="">
                                        <div class="over-layer">
                                            <div class="links">
                                                <h4><a href="#">Grand Europe</a></h4>
                                                <h6>15 Days / 14 Nights</h6>
                                                
                                                <div class="rating">
                                                    <ul class="rating-btn">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                    <br/>
                                                    <a class="view-btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-item">
                                        <div class="tour-details">
                                        <a href="tour-details.html">
                                            <p> 15 Days / 14 Nights </p>
                                            <p class="price">Grand Europe</p>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-box">
                                    <div class="tour-img image">
                                        <img src="<?php echo base_url()?>assets/images/tours/europe/exotic-eurpoe.jpg" alt="">
                                        <div class="over-layer">
                                            <div class="links">
                                                <h4><a href="#">Exotic Europe</a></h4>
                                                <h6>15 Days / 14 Nights</h6>
                                                
                                                <div class="rating">
                                                    <ul class="rating-btn">
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                    <br/>
                                                    <a class="view-btn" href="tour-details.html">view more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-item">
                                        <div class="tour-details">
                                        <a href="tour-details.html">
                                            <p> 15 Days / 14 Nights </p>
                                            <p class="price">Exotic Europe</p>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
              <!--related tours ended-->   
            
        </div>
    </section>
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
            <div class="modal-body">
                <!-- Dynamic content goes here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>
      </div>
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

 <script type="text/javascript">
   
  $(function(){
      
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
                console.log(result);
                var main_body = '<h4 style="text-align: center; text-transform: none;">Tour Price & Dates Availablity</h4><h3 style="color:#FF6600;">Tour Code: '+res.TourCode+'</h3>';
                var body_content = '<table class="table-striped table-bordered">'+
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
                '<br/>'+
                '<p>Tour price is calculated at '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1SellingRate+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2+'='+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2SellingRate+'/-.</p>'+
                '<p> Tour price variations are expected depending on the prevailing conversion rate. Payment in Euros to be calculated on the prevailing rate of exchange of Euros -> INR on the day of actual payment to Mango Holidays.</p>'+
                '<p>Tour Price STARTING FROM: '+result.TourPricingHeaders[0].TourPricingDetails[0].TotalINRValue+' per adult on twin sharing basis!</p>'+
                '<p><b>**Prices increase as seats get filled.**</b></p>';
                $(".modal-body").html("");
                $(".modal-body").html(main_body+body_content);
                $("#myModal").modal('show');

          }
      });
    });
    

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

    

  });
 </script>
