<style type="text/css">
        .footer_contact{
            line-height: 0.8;
        }     

</style>

<!--1st part - code to print itenary from api for Donload/Print Itenary PDF-->
<?php 
if(isset($complete_data->ProductItineraryByDay)){
        @$itenary_program ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        foreach($complete_data->ProductItineraryByDay as $itenary_key2){
            foreach ($itenary_key2->ProductItineraryByDayItem as $itenary_key) {
                $itenary_program .= "<h3 style='font-size:14px; font-weight:bold'> Day  ".@$itenary_key->DayNo." : ".@$itenary_key->DayTitle."</h3>";
                $itenary_program .= "<p>".mb_convert_encoding(@$itenary_key->DayProgram,'UTF-8')."</p>";
                $itenary_program .= "<p style='text-align:right; font-size:13px; border-bottom:1px solid #e8e8e8; padding-bottom:10px; margin-bottom:5px;'>";
                if(@$itenary_key->IsBreakfast == "true"){ 
                    $itenary_program .= "<img src='".base_url()."assets/images/icons/breakfast.png' style='width:17px; padding-left:5px; padding-right:5px; vertical-align:middle;'><span style='padding-right:5px;'>Breakfast</span> |";
                }
                if(@$itenary_key->IsLunch == "true"){ 
                    $itenary_program .= "<img src='".base_url()."assets/images/icons/lunch.png' style='width:17px; padding-left:5px; padding-right:5px; vertical-align:middle;'><span style='padding-right:5px;'>Lunch</span> |";
                }
                if(@$itenary_key->IsDinner == "true"){ 
                    $itenary_program .= "<img src='".base_url()."assets/images/icons/dinner.png' style='width:17px; padding-left:5px; padding-right:5px; vertical-align:middle;'><span style='padding-right:5px;'>Dinner</span> |";
                }
                $itenary_program .= "</p>";
    }}
            @$itenary_program .="</div>";
}



//Itenary By Stay
    if(isset($complete_data->ProductItineraryByStay)){
        @$itenary_bystay ="<div style='margin: 2%; padding: 2%; margin-top:0; padding-top:0;'>";
        @$itenary_bystay .="<table style='border:0; border-bottom:1px solid #000;' width='100%'>";
        @$itenary_bystay .="<thead><th style='padding:10px; border:1px solid black; border-bottom:0;border-right:0;'>City</th><th style='padding:10px; border:1px solid black; border-bottom:0;'>Nights</th>";
        foreach($complete_data->ProductItineraryByStay as $ProductItineraryByStay){
            foreach ($ProductItineraryByStay->ProductItineraryByStayItem as $ProductItineraryByStayItem) {

                $itenary_bystay .="<tr><td align='center' style='padding:10px;border:1px solid black; border-bottom:0; border-right:0;'>".$ProductItineraryByStayItem->CityName."</td><td align='center' style='padding:10px;border:1px solid black; border-bottom:0;'>".$ProductItineraryByStayItem->Nights."</td></tr>";
                // $itenary_bystay .="<p>Nights :".$ProductItineraryByStayItem->Nights."</p>";
    }}
            @$itenary_bystay .="</table></div>";
}



//INCLUSION
    if(isset($complete_data->Inclusions)){
        @$inclusion_program ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$inclusion_program .="<ul>";
        
        foreach($complete_data->Inclusions as $itenary_inclusion){
                $inclusion_program .= "<li>".mb_convert_encoding(@$itenary_inclusion->InclusionItem,'UTF-8')."</li>";
        }
        @$inclusion_program .="</ul></div>";
    }
        


//Excusion Item
    if(isset($complete_data->Exclusions)){
        @$exclusion_program ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$exclusion_program .="<ul>";
        foreach($complete_data->Exclusions as $itenary_exclusion){
                $exclusion_program .= "<li>".mb_convert_encoding(@$itenary_exclusion->ExclusionItem,'UTF-8')."</li>";
    }
    @$exclusion_program .="</ul></div>";
}


//Tour Information
    if(isset($complete_data->AirTravelInstructions)){
        @$airtravelinstruction ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$airtravelinstruction .="<ul>";
        
        foreach($complete_data->AirTravelInstructions as $airtravelinstructions){
                $airtravelinstruction .= "<li>".$airtravelinstructions->AirTravelInstructionItem."</li>";
        }
        @$airtravelinstruction .="</ul></div>";
    }

    if(isset($complete_data->VisaInstructions)){
        @$visainstruction ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$visainstruction .="<ul>";
        
        foreach($complete_data->VisaInstructions as $visainstructions){
                $visainstruction .= "<li>".$visainstructions->VisaInstructionItem."</li>";
        }
        @$visainstruction .="</ul></div>";
    }

    if(isset($complete_data->BookingInstructions)){
        @$bookinginstruction ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$bookinginstruction .="<ul>";
        
        foreach($complete_data->BookingInstructions as $bookinginstructions){
                $bookinginstruction .= "<li>".$bookinginstructions->BookingInstructionItem."</li>";
        }
        @$bookinginstruction .="</ul></div>";
    }

    if(isset($complete_data->ProductFeatures)){
        @$productfeature ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$productfeature .="<ul>";
        
        foreach($complete_data->ProductFeatures as $productfeatures){
                $productfeature .= "<li>".$productfeatures->FeatureItem."</li>";
        }
        @$productfeature .="</ul></div>";
    }

    if(isset($complete_data->Notes)){
        @$note ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$note .="<ul>";
        
        foreach($complete_data->Notes as $notes){
                $note .= "<li>".$notes->NoteItem."</li>";
        }
        @$note .="</ul></div>";
    
    }

    if(isset($complete_data->TermsConditions)){
        @$terms_condition ="<div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>";
        @$terms_condition .="<ul>";
        
        foreach($complete_data->TermsConditions as $terms_conditions){
                $terms_condition .= "<li>".$terms_conditions->TermConditionItem."</li>";
        }
        @$terms_condition .="</ul></div>";
    }

    

        
?>
<div id="tour_heading" style="display: none">
    <?php echo $complete_data->ProductTitle;?>
</div>
<div id="tour_duration" style="display: none">
     <?php  echo $complete_data->Days; ?> Days  / <?php echo $complete_data->Nights; ?> Nights
</div>
<div id='PDFcontent' style="display: none">
<div style="border:1px solid #ccc; border-top:0; border-bottom:0; margin-bottom:0; padding-bottom:10px;">
    <h2 align="center" style="font-weight: bold; text-decoration:underline; padding-bottom:0; margin-bottom:0;"><?php echo $complete_data->ProductTitle;?></h2>
    <h3 align="center" style="padding-bottom:0; margin-bottom:0;margin-top:5px; padding-top:0;">  <?php  echo $complete_data->Days; ?> Days / <?php echo $complete_data->Nights; ?> Nights </h3>
    
    <?php  if(isset($itenary_program)){ ?>
    <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:0;margin-top:15px; padding-top:10px; background-color:#f2dbdb;">TOUR ITINERARY</h3>
        <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$itenary_program);?></p>
    <?php }?>


    <?php  if(isset($itenary_bystay)){ ?>
        <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:0;margin-top:15px; padding-top:10px; background-color:#f2dbdb;">CITIES WITH NO. OF NIGHTS</h3>
        <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$itenary_bystay);?></p>
    <?php }?>
    
    <!-- <?php  if(isset($complete_data->ProductItineraryByStay[0]->ValidFromDateStr)){ ?>
    <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:0;margin-top:15px; padding-top:10px; background-color:#f2dbdb;">TOUR VALIDITY</h3>
        <p style="margin-top:0px; padding-top:0;"><div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>Tour Valid From : <b><?php echo @$complete_data->ProductItineraryByStay[0]->ValidFromDateStr; ?></b></div><div style='margin: 2%;padding: 2%; margin-top:0; padding-top:0;'>Tour Valid Till : <b><?php echo @$complete_data->ProductItineraryByStay[0]->ValidToDateStr; ?></b></div></p>
    <?php } ?> -->
    
    <?php  if(isset($complete_data->ProductItineraryByStay[0]->ValidFromDateStr)){ ?>
    <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:0;margin-top:15px; padding-top:10px; background-color:#f2dbdb;">TOUR PRICE & VALIDITY</h3>
        <p style="margin-top:0px; padding-top:40px; padding-left: 4%;">
            Tour Price :<b> INR <?php echo $complete_data->LowestTwinSharingPrice; ?></b>
        </p>
       
        <div style='margin: 0;padding-left: 4%; margin-top:0; padding-top:0; display:inline; float:left; text-align:left; width:46%;'>
        Price Valid till : <b><?php echo date('d/m/Y'); ?></b>
        </div>
        <!-- <div style='margin: 0;padding-right: 4%; margin-top:0; padding-top:0; display:inline; float:right; text-align:right; width:46%;'>
        Tour Valid Till : <b><?php echo @$complete_data->ProductItineraryByStay[0]->ValidToDateStr; ?></b>
        </div> -->
        <p style="padding-bottom:10px;"></p>
    <?php } ?>

    <?php  if(isset($inclusion_program)){ ?>
    <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:0;margin-top:15px; padding-top:10px; background-color:#f2dbdb;">PACKAGE COST INCLUDES</h3>
        <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$inclusion_program);?></p>
    <?php } ?>

    <?php  if(isset($exclusion_program)){ ?>
    <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:0;margin-top:15px; padding-top:10px; background-color:#f2dbdb;">PACKAGE COST EXCLUDES</h3>
    <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$exclusion_program);?></p>
    <?php }  ?>


    <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:20px; margin-top:15px; padding-top:10px; background-color:#f2dbdb;">TOUR INFORMATION</h3>
    <?php if(isset($productfeatures)){ ?>    
    <h4 align="left" style="margin-bottom:0px; padding-bottom:0; margin-top:0px; padding-top:0; font-weight: bold;margin-left:15px;"> Product Features :</h4>
    <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$productfeature);?></p>
    <?php }  ?>
    <?php if(isset($bookinginstructions)){ ?>    
    <h4 align="left" style="margin-bottom:0px; padding-bottom:0; margin-top:0px; padding-top:0; font-weight: bold;margin-left:15px;"> Booking Instructions :</h4>
    <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$bookinginstruction);?></p>
    <?php }  ?>
    <?php if(isset($airtravelinstructions)){ ?>    
    <h4 align="left" style="margin-bottom:0px; padding-bottom:0; margin-top:0px; padding-top:0; font-weight: bold;margin-left:15px;"> Air Travel Instructions :</h4>
    <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$airtravelinstruction);?></p>
    <?php }  ?>
    <?php if(isset($visainstructions)){ ?>    
    <h4 align="left" style="margin-bottom:0px; padding-bottom:0; margin-top:0px; padding-top:0; font-weight: bold;margin-left:15px;"> Visa Instructions :</h4>
    <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$visainstruction);?></p>
    <?php }  ?>
    <?php if(isset($notes)){ ?>    
    <h4 align="left" style="margin-bottom:0px; padding-bottom:0; margin-top:0px; padding-top:0; font-weight: bold;margin-left:15px;">Notes :</h4>
    <p style="margin-top:0px; padding-top:0;"><?php echo str_replace('"'," ",$note);?></p>
    <?php }  ?>
    <?php if(isset($terms_condition)){ ?>
    <h4 align="left" style="margin-bottom:0px; padding-bottom:0; margin-top:0px; padding-top:0; font-weight: bold;margin-left:15px;">Terms Conditions :</h4>
    <p style="margin-top:10px; padding-top:0;"><?php echo str_replace('"'," ",$terms_condition);?></p>
    <?php }  ?>


    <h3 align="center" style="font-weight: bold; padding-bottom:10px; margin-bottom:0;margin-top:15px; padding-top:10px; background-color:#f2dbdb;">THANK YOU !</h3>
</div>
    </div>

<div id='ignoreContent' style="display: none">

<p>Only for display and not in pdf</p>

</div>
<!--end 1st part - code to print itenary from api for Donload/Print Itenary PDF-->

<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h1 class="entry-title"><?php echo @$complete_data->ProductTitle;?></h1>
        </div>
        <ul class="breadcrumbs pull-right">
            <li>
                <a href="#"><?php if($complete_data->TravelType == 'GIT'){echo "Group Tour Packages";}else{ echo "Customized Tour Packages";}?></a>
            </li>
            <li>
                <a href="<?php if($complete_data->TravelType == 'GIT'){
                    echo base_url()."GroupTours/group_".trim(strtolower(str_replace(' ','',$complete_data->SectorName)));
                }else{
                    echo base_url()."CustomizedTours/custom_".trim(strtolower(str_replace(' ','',$complete_data->SectorName)));
                } ?>"><?php echo @$complete_data->SectorName;?></a>
            </li>
           <!--  <li>
                <a href="<?php  //echo base_url().$sector_path;?>"><?php// echo @$complete_data->SectorName;?></a>
            </li> -->
            <li class="active"><?php echo @$complete_data->ProductTitle;?></li>
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
                    <h6>Days<span><?php echo $complete_data->Days; ?></span></h6>
                    <h6 class="nights">Nights<span><?php echo $complete_data->Nights; ?></span></h6>
            </div>
            </div>
        </div>


      
        <div class="container">
            <div class="row">
            <div class="col-12 col-md-12 col-lg-9">
				    <!-- <h2 class="notetext"><?php echo @$complete_data->ProductTitle;?> trip from Thane, Pune, Nagpur, Mumbai.</h2> -->
				</div>
                <div class="col-12 col-md-12 col-lg-9">
                        <div class="post-blog-item tour-info">
                                <div class="post-blog-content">
                                       
                                    <!-- <h4 class="mb-20"><a href="#">Tour Details 1</a></h4> -->
                                    <section class="tabs-style-five verticle-tab">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                <div class="content-button">
                                                        <ul class="list-inline">
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
                                                            <li role="presentation"><a href="#tab-item-two" aria-controls="tab-item-two" role="tab" data-toggle="tab"><i class="fa fa-star" aria-hidden="true"></i>Highlights</a></li>
                                                            <li role="presentation"><a href="#tab-item-three" aria-controls="tab-item-three" role="tab" data-toggle="tab"><i class="fa fa-suitcase" aria-hidden="true"></i>Inclusions / Exclusions</a></li>
                                                            <li role="presentation"><a href="#tab-item-four" aria-controls="tab-item-four" role="tab" data-toggle="tab"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Tour Information</a></li>
                                                            
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
                                                                                if(isset($complete_data->ProductItineraryByDay)){
                                                                                    foreach($complete_data->ProductItineraryByDay as $ProductItineraryByDay){
                                                                                        foreach ($ProductItineraryByDay->ProductItineraryByDayItem as $key ) {
                                                                                        ?>
                                                                                <li class='work'>
                                                                                    <div class="relative">
                                                                                       
                                                                                        <span class='date'>Day<?php echo $key->DayNo;?></span>
                                                                                        <span class='circle'></span>
                                                                                    </div>
                                                                                    <div class='content'>
                                                                                        <h5><?php echo $key->DayTitle;?></h5>
                                                                                        <p>
                                                                                            <?php echo $key->DayProgram; ?>
                                                                                        </p>
                                                                                        <p style="font-size: 13px; font-weight: 600; text-align: right; color: #2d3e52;">
                                                                                            <?php if($key->IsBreakfast == "true"){?>
                                                                                                     <img src="<?php echo base_url()?>assets/images/icons/breakfast.png" style="width:35px; padding-left:5px; padding-right:5px;">  
                                                                                                    <span style="padding-right:5px;">Breakfast</span> |
                                                                                              <?php }  if($key->IsLunch == "true"){ ?>
                                                                                               <img src="<?php echo base_url()?>assets/images/icons/lunch.png" style="width:35px; padding-left:5px; padding-right:5px;">
                                                                                              <span style="padding-right:5px; ">Lunch</span> |
                                                                                            <?php } if($key->IsDinner == "true"){ ?>
                                                                                                    <img src="<?php echo base_url()?>assets/images/icons/dinner.png" style="width:35px; padding-left:5px; padding-right:5px;">
                                                                                                    <span style="padding-right:5px;">Dinner</span> |
                                                                                            <?php } ?>  
                                                                                            </p>    
                                                                                    </div>
                                                                                </li>
                                                                                <?php }}} ?>
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
                                                                                          if(isset($complete_data->ProductHighlights)){
                                                                                            foreach ($complete_data->ProductHighlights as $ph_key ) { ?>
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
                                                                                if(($complete_data->Inclusions) != ''){
                                                                                foreach ($complete_data->Inclusions as $InclusionsItem ) { ?>
                                                                                <li>
                                                                                  <?php 

                                                                                  echo @$InclusionsItem->InclusionItem;
                                                                                  }}
                                                                                ?>
                                                                                </li>
                                                                            </ul> 
                                                                                    
                                                                                    <h4><b>Exclusions :</b></h4>
                                                                                    <div class="small-border"></div>
                                                                                    <ul>
                                                                                      <?php 
                                                            if(($complete_data->Exclusions) != ''){
                                                             foreach ($complete_data->Exclusions as $ExclusionsItem ) { ?>
                                                              <li>
                                                                <?php echo $ExclusionsItem->ExclusionItem;
                                                                   }}
                                                                ?>
                                                              </li>        
                                                                                    </ul>
                                                                                            

                                                                    </div>    
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade" id="tab-item-four">
                                                            <div class="tab-tour-info">
                                                                            <!-- <h4><b>Tour Information :</b></h4> -->

                                                                            <?php 
                                                                            if(isset($complete_data->ProductFeatures)){ ?>
                                                                            <h4><b>Product Features :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                            <?php foreach ($complete_data->ProductFeatures as $ProductFeatures) {?>
                                                                                <li> <?php echo  $ProductFeatures->FeatureItem?>
                                                                                    
                                                                                </li>
                                                                            <?php }} ?>
                                                                            </ul>

                                                                            <?php 
                                                                            if(isset($complete_data->BookingInstructions)){ ?>
                                                                            <h4><b>Booking Instructions :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                            <?php foreach ($complete_data->BookingInstructions as $BookingInstructions) {?>
                                                                                <li> <?php echo  $BookingInstructions->BookingInstructionItem?></li>
                                                                            <?php }} ?>
                                                                            </ul>

                                                                            <?php 
                                                                            if(isset($complete_data->AirTravelInstructions)){ ?>
                                                                            <h4><b>Air Travel Instructions :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                            <?php foreach ($complete_data->AirTravelInstructions as $AirTravelInstructions) {?>
                                                                                <li> <?php echo  $AirTravelInstructions->AirTravelInstructionItem?>
                                                                                    
                                                                                </li>
                                                                            <?php }} ?>
                                                                            </ul>

                                                                            <?php 
                                                                            if(isset($complete_data->VisaInstructions)){ ?>
                                                                            <h4><b>Visa Instructions :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                            <?php foreach ($complete_data->VisaInstructions as $VisaInstructions) {?>
                                                                                <li> <?php echo  $VisaInstructions->VisaInstructionItem?>
                                                                                    
                                                                                </li>
                                                                            <?php }} ?>
                                                                            </ul>


                                                                            

                                                                             <?php 
                                                                            if(isset($complete_data->Notes)){ ?>
                                                                            <h4><b>Notes :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                            <?php foreach ($complete_data->Notes as $Notes) {?>
                                                                                <li> <?php echo  $Notes->NoteItem?></li>
                                                                            <?php }} ?>
                                                                            </ul>

                                                                            <?php 
                                                                            if(isset($complete_data->TermsConditions)){ ?>
                                                                            <h4><b>Terms & Conditions :</b></h4>
                                                                            <div class="small-border"></div>
                                                                            <ul>
                                                                            <?php foreach ($complete_data->TermsConditions as $TermsConditions) {?>
                                                                                <li> <?php echo  $TermsConditions->TermConditionItem?></li>
                                                                            <?php }} ?>
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
                                <!-- <h2 class="notetext"><?php echo @$complete_data->ProductTitle;?> trip from Thane, Pune, Nagpur, Mumbai.</h2>        -->
                </div>
                <div class="col-md-3 sidber clearfix">
                    <div class="widget bdr-pry-color">
                            <div class="wiget-title" style="margin-bottom:0;">
                            <div class="row"> 
                                    <div class="col-md-12"> 
                                    <h4>Tour Dates & Availability</h4>
                                    <p style="color: #f60;letter-spacing: 0.5px;">(Click on tour to view details)</p>
                                    </div>
                               </div>
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
                                                                            if(isset($complete_data->UpcomingTours)){
                                                                                foreach ($complete_data->UpcomingTours as $tours){
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
                                                                                  INR <?php echo round($pricedetails->TotalINRValue); ?>
                                                                                </span>
                                                                              </td>
                                                                            </tr>
                                                                          <?php }
                                                                                else if(($tours->TourStatus)=='Full'){ ?>
                                                                                      <tr class="tour_info_full" data-tourcode="<?php echo $tours->TourCode; ?>" style="cursor: pointer;">
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
                                                                                          INR <?php echo round($pricedetails->TotalINRValue); ?>
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
               

                        
                
            

             <!--related tours started-->  
        <?php if(isset($complete_data->RelatedProducts)){?>
        <!-- <section class="hotel-offer tour-category" >
        <div class="container" style="padding-bottom:0;"> -->
            <div class="">
                <div class="spacial-place related-tours">
                    <div class="col-md-12">
                        <h3 class="mb-20"><a>More holidays you may like : </a></h3>
                        <div class="small-border"></div>
                    </div>
                    <div class="related_tours col-md-12"> 
                       <div id="tour-carousel" class="tour-carousel-related owl-carousel owl-theme">
                        <?php foreach($complete_data->RelatedProducts as $RelatedProducts){ 
                            $product_image = $RelatedProducts->ProductImage;
                            if(file_exists($product_image)){
                               $ProductImage = base_url().$RelatedProducts->ProductImage;
                            }else{
                                $ProductImage = base_url().'assets/images/default-tour.jpg';
                            }
                             $page_name=strtolower(trim($RelatedProducts->ProductTitle));
                        ?>
                       
                            <div class="item">
                           
                                <div class="hover-box tour-hotel-box">
                                    <div class="tour-img image"  style="position:relative;">
                                        <img src="<?php echo $ProductImage; ?>" alt="Tour Image">
                                        <div class="over-layer">
                                            <div class="links">
                                                <ul class="list-inline">
                                                        <li><a href="<?php echo base_url()."tours/".str_replace(' ','-', $page_name); ?>"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="rate" style="position:absolute; right:0; top:0; ">
                                            <p> 
                                            <?php 
                                            if(($RelatedProducts->LowestTwinSharingPrice) != ''){ 
                                            ?>
                                            <b><?php  echo "INR &nbsp;&nbsp;".$RelatedProducts->LowestTwinSharingPrice; ?> /-</b>
                                            <?php } 
                                            ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tour-item hotel-item">
                                        <div class="tour-details">
                                        <!-- <a href="tour-details.html"> -->
                                            <a href="<?php echo base_url()."tours/".str_replace(' ','-', $page_name); ?>">
                                            <p class="price"><?php echo $RelatedProducts->ProductTitle; ?></p>
                                           
                                           
                                            <p>
                                            <?php echo $RelatedProducts->Days; ?>  Days / <?php echo $RelatedProducts->Nights; ?> Nights 
                                            </p>
                                         
                                            
                                        
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <?php }?>
                        </div>

                    </div>
                </div>
            </div>
            
        <!-- </div>
    </section> -->
        <?php } ?>
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

    $(".tour_info_full").click(function(){
        alert("THIS DEPARTURE IS SOLD OUT");
    });
   
//function for popup display with prices on click of tour code & fectching data from API    
    $(".tour_info").click(function(){
      var tour_code = $(this).attr('data-tourcode');

      
      var url= "https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/GetTourPricingDetailForWebsite?TourCode="+tour_code;

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
                
                var currencyCode1_data = result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1;
                var currencyCode2_data = result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2;                
                var CurrencyCode1SellingRate = result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1SellingRate;
                var CurrencyCode2SellingRate = result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2SellingRate;

                var res = result.TourPricingHeaders[0].TourPricingDetails;
                var count_price = res.length;
                var body_content = '<div class="table-responsive">'+
                '<table class="table table-striped table-bordered">'+
                '<thead>'+
                '<tr>'+
                '<th rowspan="1" colspan="1" style="width: 120px;text-transform:uppercase; vertical-align:middle;">CURRENCY</th>';
                for(var i=0; i<(count_price); i++){
                    var roomOccupancyCode = res[i].RoomOccupancyCode;
                    body_content += '<th rowspan="1" colspan="1" style="width: 120px; text-transform:uppercase; vertical-align:middle;">'+roomOccupancyCode+"</th>"
                }
                body_content += '</tr>'+
                '</thead>'+
                '<tbody>'+
                '<tr>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+'</td>';
                for(var i=0; i<(count_price); i++){
                    var amount1 = res[i].Amount1;
                    if(amount1 == null){
                        body_content += '<td> - </td>'
                    }else{
                        body_content += '<td>'+amount1+'</td>'
                    }
                }
                body_content += '</tr>'+
                '<tr>'+
                '<td>'+result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2+'</td>';
                for(var i=0; i<(count_price); i++){
                    var amount2 = res[i].Amount2;
                    if(amount2 == null){
                        body_content += '<td> - </td>'
                    }else{
                        body_content += '<td>'+amount2+'</td>'
                    }
                }
                body_content +='</tr>'+
                '<tr>'+
                '<td>TOTAL IN INR</td>';
                for(var i=0; i<(count_price); i++){
                    var totalINRValue = res[i].TotalINRValue;
                    if(totalINRValue == null){
                        body_content += '<td> - </td>'
                    }else{
                        body_content += '<td>'+totalINRValue.toFixed()+'</td>'
                    }
                }
                body_content +='</tr>'+
                '</tbody>'+
                '</table>'+
                '</div>'+
                '<br/>';
                if((currencyCode1_data != null) && (currencyCode2_data != null) && (CurrencyCode1SellingRate != null) && (CurrencyCode2SellingRate != null)){
                    var currencyCode1 = currencyCode1_data;
                    var currencyCode2 = currencyCode2_data;
                
                    body_content +='<p>Tour price is calculated at '+CurrencyCode1SellingRate+' '+currencyCode2+'='+currencyCode1+' '+CurrencyCode2SellingRate+'/-.</p>'
                 }
                body_content +='<p> Tour price variations are expected depending on the prevailing conversion rate. Payment in '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2 +' to be calculated on the prevailing rate of exchange of '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode2 +' -> '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' on the day of actual payment to Mango Holidays.</p>'+
                '<p>Tour Price Starting From : '+ result.TourPricingHeaders[0].TourPricingDetails[1].CurrencyCode1+' '+ result.TourPricingHeaders[0].TourPricingDetails[0].TotalINRValue.toFixed()+'/- per adult on twin sharing basis!</p>'+
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
        var sector ="<?php echo @$complete_data->SectorName ;?>";

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
        var sector ="<?php echo @$complete_data->SectorName ;?>";

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
                <h4 class="modal-title">Send Enquiry for <?php echo @$complete_data->ProductTitle;?> </h4>
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
                  <input name="subject" type="hidden" id="subject" value="<?php echo "Tour Enquiry From Website (".$city.")"; ?>">     

                <!-- <input name="recipient" type="hidden" id="recipient" value="ranjan@mangoholidays.in, info@mangoholidays.in"> -->
                  <!-- <input name="subject" type="hidden" id="subject" value="Tour Enquiry From Website for <?php echo @$complete_data->ProductTitle;?>"> -->
                  <input name="tour-name" type="hidden" id="tour-name" value="<?php echo @$complete_data->ProductTitle;?>">    
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
    var tour_type ="<?php echo $complete_data->TravelType?>";

    if(tour_type == 'GIT'){
        $(".group_tour").addClass('active');
    }else if(tour_type == 'FIT'){
        $(".customized_tour").addClass('active');
    }
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