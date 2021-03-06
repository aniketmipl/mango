
        <div style="width: 100%; max-width: 800px; margin: 0 auto;">

           

                <div class="js-result-container"></div>

                <form>
                    <div class="typeahead__container">
                        <div class="typeahead__field">
                            <div class="typeahead__query">
                                <input class="js-typeahead"
                                       name="q"
                                       autofocus
                                       autocomplete="off">
                            </div>
                            <div class="typeahead__button">
                                <button type="submit">
                                    <span class="typeahead__search-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.10.6/jquery.typeahead.min.js"></script>
        <!--script src="../dist/jquery.typeahead.min.js"></script-->
        <!-- <script src="jquery.typeahead.js"></script> -->
            <script>
                $(document).ready(function(){         
                    var url= "https://mantra.mangoholidays.in/Services/WebsiteData/WebsiteDataService.svc/GetProductListBySectorForWebsite?";
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
                        dataType: "json",
                        success:function(res){
                            var product = res.ProductList;
                            var count = product.length;
                            var arr = [];
                            for(i = 1; i <= count; i++){
                                var obj = {};
                                //obj.name = $("#author" + i).val();
                                obj.books = [];
                                $(res.ProductList.SectorName[i]).each(function(){
                                    var data = $(this).val();
                                    obj.books.push(data);
                                });

                                //sql = ("INSERT INTO table (author, book) VALUES ('obj.name', 'obj.books')");
                                //mysqli_query(sql);
                                arr.push(obj);
                            }
                            var data = {
                                // countries: [product.SectorName],
                                // capitals: [product.ProductList]
                                countries: ['Europe','Asia'],
                                capitals: ['East America','Bali']
                            }

                            // typeof $.typeahead === 'function' && $.typeahead({
                            //     input: ".js-typeahead",
                            //     minLength: 1,
                            //     order: "asc",
                            //     group: true,
                            //     maxItemPerGroup: 3,
                            //     groupOrder: function (node, query, result, resultCount, resultCountPerGroup) {

                            //         var scope = this,
                            //             sortGroup = [];

                            //         for (var i in result) {
                            //             sortGroup.push({
                            //                 group: i,
                            //                 length: result[i].length
                            //             });
                            //         }

                            //         sortGroup.sort(
                            //             scope.helper.sort(
                            //                 ["length"],
                            //                 false, // false = desc, the most results on top
                            //                 function (a) {
                            //                     return a.toString().toUpperCase()
                            //                 }
                            //             )
                            //         );

                            //         return $.map(sortGroup, function (val, i) {
                            //             return val.group
                            //         });
                            //     },
                            //     hint: true,
                            //     dropdownFilter: "All",
                            //     href: "https://en.wikipedia.org/?title={{display}}",
                            //     template: "{{display}}, <small><em>{{group}}</em></small>",
                            //     emptyTemplate: "no result for {{query}}",
                            //     source: {
                            //         country: {
                            //             data: data.countries
                            //         },
                            //         capital: {
                            //             data: data.capitals
                            //         }
                            //     },
                            //     callback: {
                            //         onClickAfter: function (node, a, item, event) {
                            //             event.preventDefault();

                            //             var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
                            //             if (r == true) {
                            //                 window.open(item.href);
                            //             }

                            //             $('.js-result-container').text('');

                            //         },
                            //         onResult: function (node, query, obj, objCount) {

                            //             console.log(objCount)

                            //             var text = "";
                            //             if (query !== "") {
                            //                 text = objCount + ' elements matching "' + query + '"';
                            //             }
                            //             $('.js-result-container').text(text);

                            //         }
                            //     },
                            //     debug: true
                            // });
                        } 
                     });           
                });
            </script>

        </div>
    </section>
    <!-- End Slider Section -->

    <!-- Strat Booking From -->
    <section class="booking-from-area">
            <div class="container p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="booking-from">
                           
                            <div class="tab-content">
                               
                                    <form class="form-inline" action="<?php echo base_url()?>Search/search_result" method="post">
                                        <div class="form-group col-md-10 col-sm-8">
                                            <!-- /*<label class="label">Find Holidays Destination  </label>*/ -->
                                            <input type="text" class="form-control" name="tour_name" placeholder="Holidays Destination: Rome, Paris, New York...">
                                        </div>
                                        <!-- <div class="form-group col-md-3 col-sm-6">
                                            <div class="input-group date margin-bottom-30" data-date-format="dd/mm/yyyy" style="width:100%;">
                                                <input type="text" name="travel_date" class="form-control" placeholder="Select Your Approx Date">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-6">
                                           <input type="text" class="form-control" name="travel_budget" placeholder="Budget (INR)" maxlength="7">
                                        </div>
                                        -->
                                       
                                        <div class="form-group col-md-2 col-sm-4">
                                            <button type="submit" class="btn btn-theme"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Booking From -->

    <!-- Strat Special Places -->
    <section class="spacial-place">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="sec-title text-center mb-5">
                        <h2><b>Upcoming</b> Tours</h2>
                        <p>
                            We share something in common, A passion for travel.<br/>  
                            Book your holidays & tour packages with Mango Holidays for an experience of a lifetime!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="tour-carousel" class="tour-carousel-ltr owl-carousel owl-theme">
                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/U1/incredible-america.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/incredible-america"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="#">Incredible America</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <!-- <h4><b>INR 3,47,205 /</b>  <small> 13 NIGHTS / 14 DAYS</small></h4> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        13 Nights / 14 Days  
                                        </small>
                                        <b style="float:right;">INR 371470/- </b> 
                                        </h4>
                                       
                                        <a class="read-btn" href="<?php echo base_url();?>tours/incredible-america">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/S1/best-of-south-africa.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/best-of-south-africa"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/best-of-south-africa">Best Of South Africa</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        8 Nights / 9 Days  
                                        </small>
                                        <b style="float:right;">INR 167472/- </b> 
                                        </h4>
                                        <a class="read-btn" href="<?php echo base_url();?>tours/best-of-south-africa">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/E1/exotic-europe.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/exotic-europe"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/exotic-europe">Exotic Europe</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <!-- <h4><b>INR 2,95,721 /</b>  <small> 17 NIGHTS / 18 DAYS</small></h4> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        17 Nights / 18 Days  
                                        </small>
                                        <b style="float:right;">INR 300698/- </b> 
                                        </h4>
                                        <a class="read-btn" href="<?php echo base_url();?>tours/exotic-europe">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/E7/scenic-scandinavia.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                            <li><a href="<?php echo base_url();?>tours/scenic-scandinavia"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/scenic-scandinavia">Scenic Scandinavia</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        8 Nights / 9 Days  
                                        </small>
                                        <b style="float:right;">INR 198232/- </b> 
                                        </h4>
                                        <a class="read-btn" href="<?php echo base_url();?>tours/scenic-scandinavia">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/E2/classic-europe.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/classical_europe"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/classical_europe">Classic Europe</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <!-- <h4><b>INR 2,64,731 /</b>  <small> 13 NIGHTS / 14 DAYS</small></h4> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        14 Nights / 15 Days  
                                        </small>
                                        <b style="float:right;">INR 261562/- </b> 
                                        </h4>
                                        <a class="read-btn" href="<?php echo base_url();?>tours/classical_europe">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/E62/eastern-europe.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/eastern-europe"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/eastern-europe">Eastern Europe</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        14 Nights / 15 Days  
                                        </small>
                                        <b style="float:right;">INR 216430/- </b> 
                                        </h4>
                                        <a class="read-btn" href="<?php echo base_url();?>tours/eastern-europe">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/D1/dazzling-dubai.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/dazzling-dubai"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/dazzling-dubai">Dazzling Dubai</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <!-- <h4><b>INR 3,47,205 /</b>  <small> 13 NIGHTS / 14 DAYS</small></h4> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        5 Nights / 6 Days  
                                        </small>
                                        <b style="float:right;">INR 79805/- </b> 
                                        </h4>
                                       
                                        <a class="read-btn" href="<?php echo base_url();?>tours/dazzling-dubai">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/VC/enchanting-vietnam-cambodia.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/enchanting-vietnam-cambodia"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/enchanting-vietnam-cambodia">Enchanting Vietnam Cambodia</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        8 Nights / 9 Days  
                                        </small>
                                        <b style="float:right;">INR 135269/- </b> 
                                        </h4>
                                        <a class="read-btn" href="<?php echo base_url();?>tours/enchanting-vietnam-cambodia">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="hover-box tour-hotel-box">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/git/J1/japan-cherry-blossom.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>tours/japan-cherry-blossom"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item hotel-item">
                                    <div class="blog-details">
                                        <h3><a href="<?php echo base_url();?>tours/japan-cherry-blossom">Japan Cherry Blossom</a></h3>
                                        <!-- <ul class="list-inline">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul> -->
                                        <h4>
                                        <small style="font-size: inherit; font-weight: 600; color: inherit;">
                                        5 Nights / 6 Days  
                                        </small>
                                        <b style="float:right;">INR 164000/- </b> 
                                        </h4>
                                        <a class="read-btn" href="<?php echo base_url();?>tours/japan-cherry-blossom">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End Special Places -->

    <!-- Strat Tour Video -->
    <!--<section class="tour-video parallax" data-parallax-bg-image="images/bg/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-content text-center">
                        <h2>Take a <b>Video</b> Tour</h2>
                        <p>Take a video tour of our satisfied clients.
                        </p>
                        <a href="https://youtu.be/SQg5bOPzEfQ" class="demo" id="play-button"><span><i class="icon icon-Play"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End Tour Video -->
    <!-- Strat Testimonal Section -->
   <!-- <section class="testimonal-area parallax" data-parallax-bg-image="images/bg/2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <div class="sec-title">
                            <h2>Tours <b>Reviews</b></h2>
                            <p style="font-size:25px;">#MANGOMOMENTS</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="testimonial-carousel">
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p><i class="fa fa-quote-left"></i>Your vast knowledge has really helped us to extend our information. We wish that we can travel to all destinations with Mango Holidays and we hope that you will show our grandfather all of Europe too. <i class="fa fa-quote-right"></i></p>
                                        <strong>Mr. Lunkad & Family</strong>
                                        <h6>Pune</h6>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                       
                                        <p><i class="fa fa-quote-left"></i>We are very pleased with the travel arrangements made for us through Mango Holidays. I just cant express how smoothly our dream holiday went without any hiccups. We are truly overjoyed with our experience. This will be a treasured memory for as long as we live. We wish Mango Holidays all the very best for future! <i class="fa fa-quote-right"></i></p>
                                        <strong>Mr & Mrs. Tambekar</strong>
                                        <h6> Ahmedabad</h6>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                       
                                        <p><i class="fa fa-quote-left"></i>Our Exotic Europe tour with Mango Holidays was a treasure of beautiful memories. Till date we have travelled with many tour operators, but Mango Holidays's Europe tour is by far the finest example of the best arrangements for sightseeing, food and premium hotels! <i class="fa fa-quote-right"></i></p>
                                        <strong>nkhade & Modani Family Pune & Mrs. Leela Shiurkar</strong>
                                        <h6> Nasik</h6>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End Testimonal Section -->

    <section>
    <div style="position: relative;
    display: block;
    clear: both;">  
    <div id="side-slide">
            <div class="panel-slide">
                    <section class="testimonal-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                    <div class="text-center">
                                        <div class="sec-title">
                                            <h2>Tours <b>Reviews</b></h2>
                                            <p style="font-size:25px;">#MANGOMOMENTS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="testimonial-carousel">
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <p><i class="fa fa-quote-left"></i>Your vast knowledge has really helped us to extend our information. We wish that we can travel to all destinations with Mango Holidays and we hope that you will show our grandfather all of Europe too. <i class="fa fa-quote-right"></i></p>
                                                        <strong>Mr. Lunkad & Family</strong>
                                                        <h6>Pune</h6>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                       
                                                        <p><i class="fa fa-quote-left"></i>We are very pleased with the travel arrangements made for us through Mango Holidays. I just cant express how smoothly our dream holiday went without any hiccups. We are truly overjoyed with our experience. This will be a treasured memory for as long as we live. We wish Mango Holidays all the very best for future! <i class="fa fa-quote-right"></i></p>
                                                        <strong>Mr & Mrs. Tambekar</strong>
                                                        <h6> Ahmedabad</h6>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                       
                                                        <p><i class="fa fa-quote-left"></i>Our Exotic Europe tour with Mango Holidays was a treasure of beautiful memories. Till date we have travelled with many tour operators, but Mango Holidays's Europe tour is by far the finest example of the best arrangements for sightseeing, food and premium hotels! <i class="fa fa-quote-right"></i></p>
                                                        <strong>nkhade & Modani Family Pune & Mrs. Leela Shiurkar</strong>
                                                        <h6> Nasik</h6>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>    
            </div>
            <div class="panel-heading-mango">
            <p>Tour Reviews <i class="fa fa-undo" aria-hidden="true"></i></p>    
            </div>
    </div>
    <div id="content-side">
            <section class="tour-video parallax" data-parallax-bg-image="images/bg/1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="video-content text-center">
                                <h2>Take a <b>Video</b> Tour</h2>
                                <p>Take a video tour of our satisfied clients.
                                </p>
                                <!-- <a href="https://youtu.be/SQg5bOPzEfQ" class="demo" id="play-button"><span><i class="icon icon-Play"></i></span></a> -->
                                <a href="<?php echo base_url();?>guest-testimonials-videos" class="demo" id="play-button"><span><i class="icon icon-Play"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
   </div>
</section>
 

    


<!-- Streat Counter Section--> 
<!--<section class="counter-area parallax" data-parallax-bg-image="images/bg/2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col text-center">
                    <div class="count">
                        <i class="flaticon-destination"></i>
                        <div class="start-count">500</div>
                    </div>
                    <h4>Tours Place</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col text-center">
                    <div class="count">
                        <i class="flaticon-customer-service"></i>
                        <div class="start-count">5000</div>
                    </div>
                    <h4>Customers</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col text-center">
                    <div class="count">
                        <i class="flaticon-island"></i>
                        <div class="start-count">500</div>
                    </div>
                    <h4>Destination</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="counter-col text-center">
                    <div class="count">
                        <i class="flaticon-mountain-1"></i>
                        <div class="start-count border-none">650</div>
                    </div>
                    <h4>Tour Types</h4>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- End Counter Section -->
   


    <!-- Strat Blog Section -->
    <section class="spacial-place blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="sec-title text-center mb-5">
                            <h2>Our<b> Blogs</b></h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div id="tour-carousel" class="tour-carousel-ltr owl-carousel owl-theme">
                        <div class="item">
                        <div class="hover-box tour-blog-box blog-item-1">
                            <div class="tour-img image">
                                <img src="<?php echo base_url();?>assets/images/blog/lokrang-9-12-18.jpg" alt="">
                                <div class="over-layer">
                                    <div class="links">
                                        <ul class="list-inline">
                                            <li><a href="<?php echo base_url();?>assets/images/blog/D-000-MGHD-Lokrang-Tumhi-Turist-Aahat-ki...Travler-09-12-18-05.pdf" target="_blank"><i class="ion-ios-search-strong"></i></a></li>
                                            <li><a href="<?php echo base_url();?>assets/images/blog/D-000-MGHD-Lokrang-Tumhi-Turist-Aahat-ki...Travler-09-12-18-05.pdf" download><i class="fa fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-item blog-item">
                                <div class="blog-details">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="ion-person"></i> मिलिंद बाबर</a></li>
                                        <li><a href="#"><i class="ion-ios-calendar"></i> 9 डिसेंबर २०१८ </a></li>
                                        <li><a href="#"><i class="ion-chatbubble-working"></i>  लोकरंग</a></li>
                                    </ul>
                                    <h4><a href="#">तुम्ही टुरिस्ट आहात कि ट्रॅव्हलर ???</a></h4>
                                    <a class="read-btn" href="<?php echo base_url();?>assets/images/blog/D-000-MGHD-Lokrang-Tumhi-Turist-Aahat-ki...Travler-09-12-18-05.pdf" target="_blank">Download / View <i class="ion-ios-arrow-thin-right"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="item">
                            <div class="hover-box tour-blog-box blog-item-1">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-5.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-5.pdf" target="_blank"><i class="ion-ios-search-strong"></i></a></li>
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-5.pdf" download><i class="fa fa-download"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item blog-item">
                                    <div class="blog-details">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="ion-person"></i> मिलिंद बाबर</a></li>
                                            <li><a href="#"><i class="ion-ios-calendar"></i> १ डिसेंबर २०१८ </a></li>
                                            <li><a href="#"><i class="ion-chatbubble-working"></i>  लोकरंग</a></li>
                                        </ul>
                                        <h4><a href="#">युरोप …….काय काळजी घ्याल? भाग क्र. 5</a></h4>
                                        <a class="read-btn" href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-5.pdf" target="_blank">Download / View <i class="ion-ios-arrow-thin-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-box tour-blog-box blog-item-1">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-4.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-4.pdf" target="_blank"><i class="ion-ios-search-strong"></i></a></li>
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-4.pdf" download><i class="fa fa-download"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item blog-item">
                                    <div class="blog-details">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="ion-person"></i> मिलिंद बाबर</a></li>
                                            <li><a href="#"><i class="ion-ios-calendar"></i> २५ नोंव्हेंबर २०१८ </a></li>
                                            <li><a href="#"><i class="ion-chatbubble-working"></i>  लोकरंग</a></li>
                                        </ul>
                                        <h4><a href="#">युरोप …….काय काळजी घ्याल? भाग क्र. 4</a></h4>
                                        <a class="read-btn" href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-4.pdf" target="_blank">Download / View <i class="ion-ios-arrow-thin-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-box tour-blog-box blog-item-1">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-3.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-3.pdf" target="_blank"><i class="ion-ios-search-strong"></i></a></li>
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-3.pdf" download><i class="fa fa-download"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item blog-item">
                                    <div class="blog-details">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="ion-person"></i> मिलिंद बाबर</a></li>
                                            <li><a href="#"><i class="ion-ios-calendar"></i> १८ नोंव्हेंबर २०१८ </a></li>
                                            <li><a href="#"><i class="ion-chatbubble-working"></i>  लोकरंग</a></li>
                                        </ul>
                                        <h4><a href="#">युरोप …….काय काळजी घ्याल? भाग क्र. 3</a></h4>
                                        <a class="read-btn" href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-3.pdf" target="_blank">Download / View <i class="ion-ios-arrow-thin-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-box tour-blog-box blog-item-1">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-2.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-2.pdf" target="_blank"><i class="ion-ios-search-strong"></i></a></li>
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-2.pdf" download><i class="fa fa-download"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item blog-item">
                                    <div class="blog-details">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="ion-person"></i> मिलिंद बाबर</a></li>
                                            <li><a href="#"><i class="ion-ios-calendar"></i> ११ नोंव्हेंबर २०१८ </a></li>
                                            <li><a href="#"><i class="ion-chatbubble-working"></i>  लोकरंग</a></li>
                                        </ul>
                                        <h4><a href="#">युरोप …….काय काळजी घ्याल? भाग क्र. 2</a></h4>
                                        <a class="read-btn" href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-2.pdf" target="_blank">Download / View <i class="ion-ios-arrow-thin-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hover-box tour-blog-box blog-item-1">
                                <div class="tour-img image">
                                    <img src="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-1.jpg" alt="">
                                    <div class="over-layer">
                                        <div class="links">
                                            <ul class="list-inline">
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-1.pdf" target="_blank"><i class="ion-ios-search-strong"></i></a></li>
                                                <li><a href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-1.pdf" download><i class="fa fa-download"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-item blog-item">
                                    <div class="blog-details">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="ion-person"></i> मिलिंद बाबर</a></li>
                                            <li><a href="#"><i class="ion-ios-calendar"></i> ४ नोंव्हेंबर २०१८ </a></li>
                                            <li><a href="#"><i class="ion-chatbubble-working"></i>  लोकरंग</a></li>
                                        </ul>
                                        <h4><a href="#">युरोप …….काय काळजी घ्याल? भाग क्र. 1</a></h4>
                                        <a class="read-btn" href="<?php echo base_url();?>assets/images/blog/europe-kai-kalaji-ghyal-bhag-1.pdf" target="_blank">Download / View <i class="ion-ios-arrow-thin-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div style="display: block;text-align: center;">
                    <a class="btn btn-primary" href="<?php echo base_url();?>blogs">View More</a> 
                </div>
            </div>
                
            </div>
        </section>
        <!-- End Blog Section -->
    
        

    <!-- Strat Portfolio Section -->
    
  
    <section class="photo-area parallax" data-parallax-bg-image="images/bg/4.jpg" style="background: url(./assets/images/bg/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                    <div class="sec-title text-center">
                        <h2>Photo <b>Gallery</b></h2>
                        <p>Our aim at Mango Holidays is to create for our guests; an Experience of a Lifetime!!<br/>
                        Take a tour of our happy clients.                       
                        </p>
                        <a href="<?php echo base_url();?>galleries/photo-gallery"><span class="demo"><i class="icon icon-Play"></i></span>
                        <!-- <br/> [ Explore Gallery ]--> </a> 
                    </div>
                </div>
            </div>
            
             <!--<div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="video-content text-center">
                                <h2>Photo <b>Gallery</b></h2>
                                <p>Our aim at Mango Holidays is to create for our guests; an Experience of a Lifetime!!
                        </p>
                                <a href="#expe1" class="demo"><span><i class="icon ion-ios-camera-outline"></i></span></a>
                            </div>
                        </div>
            </div> -->
        </div>
    </section>
    <!-- End Portfolio Section -->

      <!--Promo Box Style One -->
      <!--<section class="promo-box-style-one"> 
        <div class="container">
            <div class="row promo-box-one"> 
                <div class="col-sm-8">
                    <div class="promo-area-one center-767">
                       
                          
                            <div class="sec-title">
                                <h2>Media <b>Tour</b></h2>
                                
                            </div>
                        
                        <h4>READ OUR INTERESTING ADVERTORIAL !!!!</h4>
                    </div>  
                </div>
                <div class="col-sm-4">
                    <div class="promo-area-one text-right center-767">
                        <a class="btn btn-default custom-btn-one my-btn-lg" href="#" role="button">Go To Media</a>
                    </div>  
                </div>
            </div>
        </div>
    </section>-->


   <div id="popupModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Holiday Bazaar - 29th Sept</h4>
      </div>-->
      <button type="button" class="close" data-dismiss="modal">&times;</button>
     <div class="modal-body text-center">
      <img src="<?php echo base_url();?>assets/images/popup/margdarshan-melava.jpg" alt="">
       
      </div>
      <div class="modal-footer">
        <!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <!-- <a class="pre-order-btn" href="<?php echo base_url();?>contact-us">Contact Us</a> -->
    </div>
    </div>

  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--to enable popup uncomment below code-->
<script>
$(document).ready(function(){       
   $('#popupModal').modal('show');
    }); 

</script>

