<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom-style-tour2.css">

<section class="blog-single-pages portfolio tour-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 main-heading">
                <div class="sidber">
                <div class="widget">
                    <div class="page-title-box">
                            <h2><?php echo @$ProductTitle;?></h2>
                       <!--  <p><a href="index.html">Group Tour</a> <i class="fa fa-angle-double-right"></i> <a href="#">International</a> <i class="fa fa-angle-double-right"></i>  <a href="#">Europe</a> </p> -->
                    </div>
                </div>
                </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                        <div class="post-blog-item">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                    </ol>
                    
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                    
                                      <div class="item active">
                                        <img src="<?php echo base_url().'assets/'.$slider_image; ?>"  alt="slider_image">
                                      </div>
                    
                                  
                                      <div class="date-mate">
                                            <h6>Days<span><?php echo $Days; ?></span></h6>
                                            <h6 class="nights">Nights<span><?php echo $Nights; ?></span></h6>
                                        </div>
                                        
                                    </div>
                    
                                    <!-- Left and right controls -->
                                    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                    </a> -->
                                </div>
                            </div>
                </div>
                <div class="col-md-4 sidber clearfix">
                    <div class="widget bdr-pry-color">
                            <div class="wiget-title" style="margin-bottom:0;">
                                    <!-- <span><?php echo $Nights; ?> Nights / <?php echo $Days;?> Days </span> -->
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
                                                            <th scope="col">Tour Code</th>    
                                                              <th scope="col">Departure Dates<br/>
                                                                    Place</th>
                                                              <th scope="col">Prices</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <?php 

                                                              foreach ($UpcomingTours as $tours){
                                                                foreach($tours->UpcomingTourPricingDetails as $pricedetails){
                                                                  if(($tours->TourStatus)=='Open'){
                                                              ?>
                                                            <tr class="tour_info" data-tourcode="<?php echo $tours->TourCode; ?>" style="cursor: pointer;">
                                                              <td><?php  echo $tours->TourCode; ?></td>
                                                              <td>
                                                                <?php  echo $tours->DepartureDate; 
                                                                ?>
                                                                    <br/>
                                                                  <?php  echo $pricedetails->StartingLocation; 
                                                                ?>  
                                                              </td>
                                                              <td>
                                                                INR <?php echo $pricedetails->TotalINRValue; ?>
                                                              </td>
                                                            </tr>
                                                          <?php }}} ?>
                                                          </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                    </div>
                    <!-- // End Widget -->
                </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="post-blog-item">
                                
                                <div class="post-blog-content">
                                  <h4 class="mb-20"><a href="#">Tour Details</a></h4>
                          <section class="tabs-style-four">
                               
                                    <div class="row">
                                        <div class="col-lg-12">
                                                <div>
                                                <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#one-item" aria-controls="one-item" role="tab" data-toggle="tab">Itinerary</a></li>
                                                        <li role="presentation"><a href="#two-item" aria-controls="two-item" role="tab" data-toggle="tab">Highlights</a></li>
                                                        <li role="presentation"><a href="#three-item" aria-controls="three-item" role="tab" data-toggle="tab">Inclusion/Exclusion</a></li>
                                                    </ul>
                                                <!-- Tab panes -->
                                                   <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane fade in active" id="one-item">
                                                                <div class="row">
                                                                        <div class="col-lg-12">
                                                                          <?php foreach($itenary as $key){?>
                                                                            <ul id='timeline1'>
                                                                                <li class='work'>
                                                                                    <div class="relative">
                                                                                       
                                                                                        <span class='date'>Day <?php echo $key->DayNo; ?></span>
                                                                                        <span class='circle'></span>
                                                                                    </div>
                                                                                    <div class='content'>
                                                                                        <h5><?php echo $key->DayTitle;?></h5>
                                                                                        <p><?php echo $key->DayProgram;?></p>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                          <?php } ?>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane fade" id="two-item"></div>
                                                        <div role="tabpanel" class="tab-pane fade" id="three-item">
                                                          
                                                            <h3>Inclusions</h3>
                                                            <ol>
                                                            <?php 

                                                             foreach ($Inclusions as $InclusionsItem ) { ?>
                                                              <li>
                                                                <?php echo $InclusionsItem->InclusionItem;
                                                                   }
                                                                ?>
                                                              </li>
                                                            </ol>
                                                              <h3>Exclusions</h3>
                                                              <ol>
                                                              <?php 

                                                             foreach ($Exclusions as $ExclusionsItem ) { ?>
                                                              <li>
                                                                <?php echo $ExclusionsItem->ExclusionItem;
                                                                   }
                                                                ?>
                                                              </li>
                                                          </ol>
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
                <h5 style="text-align: center">Tour Price & Dates Availablity</h5>
                <h4 style="color:#FF6600;">Tour Code: E1020419</h4>
                <table class="table-striped table-bordered">
                    <thead>
                    <tr class="row-1 odd" role="row"><th class="column-1 sorting_disabled" rowspan="1" colspan="1" style="width: 116px;">CURRENCY</th><th class="column-2 sorting_disabled" rowspan="1" colspan="1" style="width: 119px;">TWIN SHARING</th><th class="column-3 sorting_disabled" rowspan="1" colspan="1" style="width: 129px;">TRIPLE SHARING</th><th class="column-4 sorting_disabled" rowspan="1" colspan="1" style="width: 153px;">SINGLE OCCUPANCY</th><th class="column-5 sorting_disabled" rowspan="1" colspan="1" style="width: 130px;">CHILD WITH BED</th><th class="column-6 sorting_disabled" rowspan="1" colspan="1" style="width: 110px;">CHILD NO BED</th><th class="column-7 sorting_disabled" rowspan="1" colspan="1" style="width: 84px;">INFANT</th></tr>
                    </thead>
                    <tbody class="row-hover">
                    
                    
                    
                    
                    <tr>
                    <td>FIRST 10 SEATS</td>
                    <td>(12 yrs &amp; above)</td>
                    <td>(12 yrs &amp; above)</td>
                    <td class="column-4">(12 yrs &amp; above)</td>
                    <td class="column-5">(2 to 11 yrs)</td><td class="column-6">(2 to 11 yrs)</td><td class="column-7">(0 to 2 yrs)</td>
                    </tr><tr class="row-3 odd" role="row">
                    <td class="column-1">INR</td><td class="column-2">75000</td><td class="column-3">75000</td><td class="column-4">75000</td><td class="column-5">71250</td><td class="column-6">71250</td><td class="column-7">22500</td>
                    </tr><tr class="row-4 even" role="row">
                    <td class="column-1">EURO</td><td class="column-2">2678</td><td class="column-3">2658</td><td class="column-4">3733</td><td class="column-5">2150</td><td class="column-6">1755</td><td class="column-7">436</td>
                    </tr><tr class="row-5 odd" role="row">
                    <td class="column-1">TOTAL IN INR</td><td class="column-2">295721</td><td class="column-3">294072</td><td class="column-4">382674</td><td class="column-5">248453</td><td class="column-6">215897</td><td class="column-7">58435</td>
                    </tr></tbody>
                    </table>
                    <br/>
                    <p>
                        Tour price is calculated at 1 Euro = INR 82.42/-. Tour price variations are expected depending on the prevailing conversion rate. Payment in Euros to be calculated on the prevailing rate of exchange of Euros -> INR on the day of actual payment to Mango Holidays.<br/>
                        Tour Price STARTING FROM: Rs.2,95,721/-* per adult on twin sharing basis!<br/>
                        <br/>
                        **Prices increase as seats get filled.**
                        <br/>
                    </p>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
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
                var main_body = 'TOUR PRICE & DATES AVAILABLITY<br><h4 style="color:#FF6600;">Tour Code:'+res.TourCode+'</h4>';
                var body_content = '<div id="tablepress-361-scroll-wrapper" class="tablepress-scroll-wrapper" style="overflow-x:scroll;"><div id="tablepress-361_wrapper" class="dataTables_wrapper no-footer"><table id="tablepress-361" class="table-striped table-bordered" role="grid"><thead><tr class="row-1 odd" role="row"><th class="column-1 sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">CURRENCY</th><th class="column-2 sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">TWIN SHARING</th><th class="column-3 sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">TRIPLE SHARING</th><th class="column-4 sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">SINGLE OCCUPANCY</th><th class="column-5 sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">CHILD WITH BED</th><th class="column-6 sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">CHILD NO BED</th><th class="column-7 sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">INFANT</th></tr></thead><tbody class="row-hover"><tr class="row-2 even" role="row"><td class="column-1">FIRST 10 SEATS</td><td class="column-2">(12 yrs &amp; above)</td><td class="column-3">(12 yrs &amp; above)</td><td class="column-4">(12 yrs &amp; above)</td><td class="column-5">(2 to 11 yrs)</td><td class="column-6">(2 to 11 yrs)</td><td class="column-7">(0 to 2 yrs)</td></tr><tr class="row-3 odd" role="row"><td class="column-1">INR</td><td class="column-2">'+result.TourPricingHeaders[0].TourPricingDetails[0].Amount1+'</td><td class="column-3">'+result.TourPricingHeaders[0].TourPricingDetails[1].Amount1+'</td><td class="column-4">'+result.TourPricingHeaders[0].TourPricingDetails[2].Amount1+'</td><td class="column-5">'+result.TourPricingHeaders[0].TourPricingDetails[3].Amount1+'</td><td class="column-6">'+result.TourPricingHeaders[0].TourPricingDetails[4].Amount1+'</td><td class="column-7">'+result.TourPricingHeaders[0].TourPricingDetails[5].Amount1+'</td></tr><tr class="row-4 even" role="row"><td class="column-1">EURO</td><td class="column-2">'+result.TourPricingHeaders[0].TourPricingDetails[0].Amount2+'</td><td class="column-3">'+result.TourPricingHeaders[0].TourPricingDetails[1].Amount2+'</td><td class="column-4">'+result.TourPricingHeaders[0].TourPricingDetails[2].Amount2+'</td><td class="column-5">'+result.TourPricingHeaders[0].TourPricingDetails[3].Amount2+'</td><td class="column-6">'+result.TourPricingHeaders[0].TourPricingDetails[4].Amount2+'</td><td class="column-7">'+result.TourPricingHeaders[0].TourPricingDetails[5].Amount2+'</td></tr><tr class="row-5 odd" role="row"><td class="column-1">TOTAL IN INR</td><td class="column-2">'+result.TourPricingHeaders[0].TourPricingDetails[0].TotalINRValue+'</td><td class="column-3">'+result.TourPricingHeaders[0].TourPricingDetails[1].TotalINRValue+'</td><td class="column-4">'+result.TourPricingHeaders[0].TourPricingDetails[2].TotalINRValue+'</td><td class="column-5">'+result.TourPricingHeaders[0].TourPricingDetails[3].TotalINRValue+'</td><td class="column-6">'+result.TourPricingHeaders[0].TourPricingDetails[4].TotalINRValue+'</td><td class="column-7">'+result.TourPricingHeaders[0].TourPricingDetails[5].TotalINRValue+'</td></tr></tbody></table></div><span class="tablepress-table-description tablepress-table-description-id-361"><p>Tour price is calculated at '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1SellingRate+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2+'='+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' '+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2SellingRate+'/-.</p><h6>**Prices increase as seats get filled.**</h6></span></div>';
                $(".modal-body").html("");
                $(".modal-body").html(main_body+"<br><br>"+body_content);
                $("#myModal").modal('show');

          }
      });
    });

  });
 </script>
