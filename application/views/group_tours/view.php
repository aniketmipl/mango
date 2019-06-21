<section class="hotel-offer tour-category">
        <div class="container">
            <div class="row">
                <div class="hottel-grid-offer">
                    <?php foreach ($api_result as $key => $value) { 
                        if($value->TravelType == 'GIT'){
                        $page_name=strtolower(trim($value->ProductTitle));
                    ?>
                    <div class="col-md-4 col-sm-6 mb-20">
                        <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                        <img src="<?php echo base_url();?>assets/img/tours/exotic-eurpoe.jpg" alt="">
                                        <div class="over-layer">
                                            <div class="links">
                                                <ul class="list-inline">
                                                    <li><a href="tour-details.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            <div class="tour-item hotel-item">
                                <div class="blog-details">
                                        <h3><a href="<?php echo base_url()."tours/".str_replace(' ','-', $page_name); ?>"><?php echo $value->ProductTitle?></a></h3>
                                        <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul>
                                    <a class="read-btn" href="<?php echo base_url()."tours/".str_replace(' ','-', $page_name); ?>">View Details <i class="ion-ios-arrow-thin-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }} ?>
                </div>
            </div>
            
        </div>
    </section>