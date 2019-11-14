 
<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
            <!-- <h2 class="entry-title">Search Result <?php echo $tour_name;?></h2> -->
        </div>
        
    </div>
</div>

<section class="hotel-offer tour-category">
        <div class="container">
            <div class="row">
                <div class="hottel-grid-offer" style="justify-content: left;">
                    <?php
                    $tour_name= trim(str_replace('%20', ' ', $tour_name));
                    //echo $tour_name;
                    if(isset($api_result)){                
                           foreach ($api_result as $key => $value) { 
                                $sectorname = strtolower($value->SectorName);
                                $producttitle = strtolower($value->ProductTitle);
                                if($sectorname == $tour_name){
                                $page_name=strtolower(trim($value->ProductTitle));
                            ?>
                            <div class="col-md-4 col-sm-6 mb-20">
                                <div class="hover-box tour-hotel-box">
                                    <div class="tour-img image">
                                     <?php 
                                        $product_image = $value->ProductImage;
                                        if(file_exists($product_image)){
                                           $ProductImage = base_url().$value->ProductImage;
                                        }else{
                                            $ProductImage = base_url().'assets/images/default-tour.jpg';
                                        } ?>
                                        <img class=""  src="<?php echo $ProductImage; ?>" alt="">
                                        <!-- <img src="<?php //echo base_url().$value->ProductImage; ?>" alt=""> -->
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
                                            <small style="font-size: inherit; font-weight: 600; color: inherit;"><?php echo $value->Nights; ?> Nights / <?php  echo $value->Days; ?> Days  </small>
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
                        <?php
                        }
                        //else if($tour_name==$producttitle){
                        else{
                          echo "Mangoholidays";
                        }
                     }  
                }?>
                </div>
            </div>
                <h4 style="text-align:center;">.... End of search result ....</h4>
        </div>
    </section>