
<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
            <h2 class="entry-title"><?php echo $sector_name;?> Tour</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="#">Group Tour</a></li>
            <li class="active"><?php echo $sector_name;?></li>
        </ul>
    </div>
</div>

<section class="hotel-offer tour-category">
        <div class="container">
            <div class="row">
                <div class="hottel-grid-offer" style="justify-content: left;">
                    <?php 
                    if(isset($api_result)){
                    foreach ($api_result as $key => $value) { 
                        if($value->TravelType == 'GIT'){
                        $page_name=strtolower(trim($value->ProductTitle));
                    ?>
                    <div class="col-md-4 col-sm-6 mb-20">
                        <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                        <img src="<?php echo base_url().$value->ProductImage; ?>" alt="">
                                        <div class="over-layer">
                                            <div class="links">
                                                <ul class="list-inline">
                                                    <li><a href="<?php echo base_url()."tours/".str_replace(' ','-', $page_name); ?>"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            <div class="tour-item hotel-item">
                                <div class="blog-details">
                                        <h3><a href="<?php echo base_url()."tours/".str_replace(' ','-', $page_name); ?>"><?php echo $value->ProductTitle?></a></h3>
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;"> <?php  echo $value->Days; ?> Days  / <?php echo $value->Nights; ?> Night </small>
                                        <?php 
                                        if(($value->LowestTwinSharingPrice) != ''){ 
                                        ?>
                                        <b style="float:right;"><?php  echo "INR ".$value->LowestTwinSharingPrice; ?> </b> 
                                        <?php } 
                                         ?>
                                        
                                        </h4>
                                    <a class="read-btn" href="<?php echo base_url()."tours/".str_replace(' ','-', $page_name); ?>">View Details <i class="ion-ios-arrow-thin-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }}} ?>
                </div>
            </div>
            
        </div>
    </section>