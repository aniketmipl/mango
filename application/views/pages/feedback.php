
<!-- validation js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/guest-feedback-form-validation.js"></script>

<div class="page-title-container">
    <div class="container-tour-heading">
        <div class="page-title pull-left">
          <h2 class="entry-title">Guest Feedback Form</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="#">Guest Corner</a></li>
            <li class="active">Guest Feedback Form</li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<div class="page-header-container">
            <img src="<?php echo base_url();?>assets/images/feedback-banner.jpg" class="desktop-image" alt="slider_image">
			
			
</div>

<!-- Strat About Us -->
<section class="about-us">

<div class="container" style="padding-top:60px;">
	<div class="row">
	<div class="col-md-12">
                    <div class="contact-from feedback-form" style="box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.15), 0 4px 15px 0 rgba(0, 0, 0, 0.15); padding: 3% 2% 5% 2%;">
                        <h4 style="margin-bottom:2%;">Dear Guest,</h4>
                        
                        <p>
                        Thank you for giving us the opportunity to serve you. We request you to spare some of your valuable time to share your experience with us. Your feedback will go a long way in helping us serve you better. Looking forward to having you holiday with us again.
                        </p>
                        <br/>
                        <h4>
                           Thank you,<br/>
                        Mango Holidays
                        </h4>
                        
                        <hr/>
                        <br/>
						
						<form action="http://www.midsupport.com/php/TestResult_attach.php" method="post" name="Enquiry_Feedback" onSubmit="return onSubmit_Feedback()"  enctype ="multipart/form-data"  class="contact-form form contact-validation-active row">
						
                            <input name="redirect" type="hidden">
                            <input name="recipient" type="hidden" value="hr@mangoholidays.in, careers@mangoholidays.in, customercare@mangoholidays.in, tapasyab@mangoholidays.in, tapasya@mangoholidays.in, info@mangoholidays.in">
                            <input name="subject" type="hidden" value="Guest Feedback From Website">
                            
                            <div class="col-sm-12">
                                <h4 style="padding-bottom: 6px;">Personal Details </h4>
                                <div class="small-border" style="margin-bottom:20px;"></div>
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="contact_person" placeholder="Your Name *" id="contact_person" type="text">
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="telNo" placeholder="Phone *" id="telNo" type="text">
                            </div>
                            <div class="input-field col-sm-4">
                                <input class="set-input validate" name="from" placeholder="Email *" id="from" type="text">
                            </div>

                            <div class="col-md-12"><hr/></div>

                            <div class="col-md-12">
                                <h4 style="padding-bottom: 6px;">Tour Details </h4>
                                <div class="small-border" style="margin-bottom:20px;"></div>
                            </div>

                            <div class="input-field col-sm-12 col-md-6">
                                <input class="set-input validate" name="Tour_Name" placeholder="Tour Name *" id="Tour_Name" type="text">
                                <input class="set-input validate" name="Tour_Manager" placeholder="Tour Manager *" id="Tour_Manager" type="text">
                                <input class="set-input validate" name="Sales_Executive_Who_Booked_Tour" placeholder="Sales Executive Who Booked Tour *" id="Sales_Executive_Who_Booked_Tour" type="text">
                            </div>
                            <div class="input-field col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12 no-padding-xs">
                                        <p>Tour Date* : </p> 
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                        <div class="input-group date margin-bottom-30" data-date-format="dd.mm.yyyy" >
                                            <input type="text" class="form-control" name="Tour_Date" id="Tour_Date" placeholder="Select Tour Date" style="margin-bottom:0; width:200px !important;">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12 no-padding-xs">
                                        <p>Tour Booked At* : </p> 
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                        <select class="form-control" name="Tour_Booked_At" id="Tour_Booked_At" style="width:200px !important;">
                                            <option value="0" disabled="" selected="">Select Place</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Mumbai">Mumbai</option>
                                            <option value="Nagpur">Nagpur</option>
                                            <option value="Thane">Thane</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p><b>How did you hear about Mango Holidays? (Tick all applicable)</b> </p>
                                <input name="How_did_you_hear_about_Mango_Holidays" type="hidden">
                                <div class="col-sm-3 col-xs-12 no-padding-xs">
                                    <input type="checkbox" name="Type1" value="Newspaper Advertisement"> <span class="valueformat">Newspaper Advertisement</span><br>
                                    <input type="checkbox" name="Type2" value="Magazine"> <span class="valueformat">Magazine</span><br>
                                    
                                </div>
                                <div class="col-sm-3 col-xs-12 no-padding-xs">
                                    <input type="checkbox" name="Type4" value="TV"> <span class="valueformat">TV</span><br>
                                    <input type="checkbox" name="Type5" value="Radio"> <span class="valueformat">Radio</span><br>
                                </div>
                                <div class="col-sm-3 col-xs-12 no-padding-xs">
                                    <input type="checkbox" name="Type6" value="Melawa"> <span class="valueformat">Melawa</span><br>
                                    <input type="checkbox" name="Type7" value="Facebook"> <span class="valueformat">Facebook</span><br>
                                </div>
                                <div class="col-sm-3 col-xs-12 no-padding-xs">
                                    <input type="checkbox" name="Type3" value="Hoarding"> <span class="valueformat">Hoarding</span><br>
                                </div>

                                <div class="input-field col-md-12 no-padding">
                                    <br/>
                                    <input class="set-input validate" name="Other_Type" placeholder="If any other specify the same......" id="Other_Type" type="text">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p><b>How was your experience?</b>  </p>
                                <input name="How_was_your_experience" type="hidden">
                                <!--1--->
                                <p><b>1. At the sales counter </b></p>
                                <!-- <input name="1_At_the_sales_counter" type="hidden"> -->
                                <!-- <p>Friendliness / Courteousness - 
                                    &nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness" value="Good"> Good
                                    &nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness" value="Could be better"> Could be better
                                </p>
                                <p>Tour information given - 
                                    &nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness" value="Good"> Good
                                    &nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness" value="Could be better"> Could be better
                                </p> -->
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Friendliness / Courteousness - </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Friendliness_Courteousness_At_the_sales_counter" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness_At_the_sales_counter" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness_At_the_sales_counter" value="Could be better"> Could be better
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Tour information given -  </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Tour_information_given_At_the_sales_counter" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tour_information_given_At_the_sales_counter" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Tour_information_given_At_the_sales_counter" value="Could be better"> Could be better
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Promptness of service -  </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Promptness_of_service_At_the_sales_counter" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Promptness_of_service_At_the_sales_counter" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Promptness_of_service_At_the_sales_counter" value="Could be better"> Could be better
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Visa services -  </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Visa_services_At_the_sales_counter" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Visa_services_At_the_sales_counter" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Visa_services_At_the_sales_counter" value="Could be better"> Could be better
                                    </p>
                                </div>
                                 <!----->
                                 <div class="col-md-12 mt-20"></div>

                                 <!--2--->
                                <p><b>2. With your Tour Manager</b> </p>
                                <!-- <input name="2_With_your_Tour_Manager" type="hidden"> -->
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Grooming - </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Grooming_With_your_Tour_Manager" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Grooming_With_your_Tour_Manager" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Grooming_With_your_Tour_Manager" value="Could be better"> Could be better
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Knowledge - </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Knowledge_With_your_Tour_Manager" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Knowledge_With_your_Tour_Manager" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Knowledge_With_your_Tour_Manager" value="Could be better"> Could be better
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Friendliness / Courteousness - </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Friendliness_Courteousness_with_your_Manager" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness_with_your_Manager" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Friendliness_Courteousness_with_your_Manager" value="Could be better"> Could be better
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                        <p>Overall services - </p> 
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Overall_services_With_your_Tour_Manager" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Overall_services_With_your_Tour_Manager" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Overall_services_With_your_Tour_Manager" value="Could be better"> Could be better
                                    </p>
                                </div>
                                 <!----->
                                 <div class="col-md-12 mt-20"></div>
                                <!--3--->
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                <p><b>3. Hotels</b> </p>
                                <!-- <input name="3_Hotels" type="hidden"> -->
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Hotels" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Hotels" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Hotels" value="Could be better"> Could be better
                                    </p>
                                </div>
                                 <!----->
                                 <!--4--->
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                <p><b>4. Coach</b> </p>
                                <!-- <input name="4_Coach" type="hidden"> -->
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Coach" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Coach" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Coach" value="Could be better"> Could be better
                                    </p>
                                </div>
                                 <!----->
                                  <!--5--->
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                <p><b>5. Restaurants</b> </p>
                                <!-- <input name="5_Restaurants" type="hidden"> -->
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Restaurants" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Restaurants" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Restaurants" value="Could be better"> Could be better
                                    </p>
                                </div>
                                 <!----->
                                   <!--6--->
                                <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
                                <p><b>6. Overall rating of your tour with Mango Holidays</b> </p>
                                <!-- <input name="6_Overall_rating_of_your_tour_with_Mango_Holidays" type="hidden"> -->
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Overall_rating_of_your_tour_with_Mango_Holidays" value="Excellent" checked="checked"> Excellent 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Overall_rating_of_your_tour_with_Mango_Holidays" value="Good"> Good
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Overall_rating_of_your_tour_with_Mango_Holidays" value="Could be better"> Could be better
                                    </p>
                                </div>
                                <!----->
                                <div class="col-md-12 mt-20"></div>
                                <div class="input-field col-sm-12 no-padding">
                                  <textarea class="set-input-textarea" id="Suggestions_Comments" name="Suggestions_Comments" placeholder="Any Suggestions / Comments..... " rows="3"></textarea>
                                </div>
                                <!----->
                                <div class="col-md-12 mt-10"></div>
                                <p><b>Please name any 2 memorable experience on your tour :</b></p>
                                <div class="input-field col-sm-6 col-xs-12 no-padding">
                                  <textarea class="set-input-textarea" id="memorable_experience_1" name="memorable_experience_1" placeholder="..... " rows="3"></textarea>
                                </div>
                                <div class="input-field col-sm-6 col-xs-12  no-padding-xs">
                                  <textarea class="set-input-textarea" id="memorable_experience_2" name="memorable_experience_2" placeholder="..... " rows="3"></textarea>
                                </div>
                                <!----->
                                <div class="col-md-12 mt-10"></div>
                                <p><b>Where and when do you plan to take your next holiday? </b></p>
                                <div class="input-field col-sm-6 col-xs-12 no-padding">
                                <input class="set-input validate" name="Next_Destination_Plan" placeholder="Destination" id="Next_Destination_Plan" type="text">  
                                </div>
                                <div class="input-field col-sm-6 col-xs-12 no-padding-xs">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12 no-padding-xs">
                                        <p>Tour Date : </p> 
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12 no-padding-xs">
                                        <div class="input-group date margin-bottom-30" data-date-format="dd.mm.yyyy" >
                                            <input type="text" class="form-control" name="Next_Destination_Plan_Date" id="Next_Destination_Plan_Date" placeholder="Select Tour Date" style="margin-bottom:0; width:200px !important;">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!----->
                                <div class="col-md-12 mt-20"></div>
                                <div class="col-md-5 col-sm-7 col-xs-12 no-padding">
                                <p><b>Would you recommend Mango Holidays to others?</b> </p>
                                </div>
                                <div class="col-md-7 col-sm-5 col-xs-12 no-padding">
                                    <p>
                                                            <input type="radio" name="Would_you_recommend_Mango_Holidays_to_others" value="Yes" checked="checked"> Yes 
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Would_you_recommend_Mango_Holidays_to_others" value="No"> No
                                    </p>
                                </div>
                                <!----->
                                <div class="col-md-12 mt-20"></div>
                                <p><b>If yes, then kindly share the names of 2 persons you would like to recommend Mango Holidays to:</b> </p>
                                <div class="input-field col-sm-6 col-xs-12 no-padding">
                                    <p>1.</p>
                                    <input class="set-input validate" name="Contact_Person_Reference_1" placeholder="Name" id="Contact_Person_Reference_1" type="text">
                                    <input class="set-input validate" name="TelNo_Reference_1" placeholder="Phone" id="TelNo_Reference_1" type="text">
                                    <input class="set-input validate" name="Email_Reference_1" placeholder="Email" id="Email_Reference_1" type="text">
                                </div>
                                <div class="input-field col-sm-6 col-xs-12  no-padding-xs">
                                    <p>2.</p>
                                    <input class="set-input validate" name="Contact_Person_Reference_2" placeholder="Name" id="Contact_Person_Reference_2" type="text">
                                    <input class="set-input validate" name="TelNo_Reference_2" placeholder="Phone" id="TelNo_Reference_2" type="text">
                                    <input class="set-input validate" name="Email_Reference_2" placeholder="Email" id="Email_Reference_2" type="text">
                                </div>
                                <!----->
                                <div class="col-md-12 mt-20"></div>
                                <div class="input-field col-md-12 no-padding">
                                   
                                    <p><b>If No, Please specify the reason:</b></p>
                                    <input class="set-input validate" name="Reason_For_No_Recommendation_to_others" placeholder="......" id="Reason_For_No_Recommendation_to_others" type="text">
                                </div>
                            </div>

							<div class="input-field col-sm-4">
                                <button style="margin-top: 6%; padding-top:10px;padding-bottom:10px;" class="btn btn-theme" id="send">Send Message</button>
							</div>
					
                        </form>
                    </div>
                </div>
	</div>	
	<br/>
	<br/>
    
</div>
</section>
