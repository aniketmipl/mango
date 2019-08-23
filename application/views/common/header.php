<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">
    <?php
    $controller = $this->uri->segment(1); // get current controller

    if(isset($title)){?>
        <title><?php echo @$title;?></title>
    <?php } else { ?>
        <title>Mango Holidays | Experience of a lifetime</title>
    <?php } ?>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Service",
      "serviceType": "",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Mango Holiday's Tour and Travel",
        "image": "https://mangoholidays.in/wp-content/uploads/2017/07/Mango-Holidays.png",
       "address": {
        "@type": "PostalAddress",
        "addressLocality": "5, Adi House, Gokhale Road North, Near Portuguese Church, Dadar",
        "addressRegion": "Mumbai, Maharashtra",
        "postalCode": "400028"
      },
        
        "telephone":"+91 8380039503"
      },
      "aggregateRating":{
    "@type":"AggregateRating",
    "ratingValue":"4.9",
    "reviewCount":"3792"}
    },
       
      "areaServed": {
        "@type": "State",
        "name": "Maharashtra"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "Tour and Travel Agency",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Europe Group Tour"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Tour Operator"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Mauritius International Tour"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "International Honeymoon Tour"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Domestic Tour operator"
                }
              },
                        }
            ]
          }
          
        ]
      }
    }
    </script>



    <meta property="og:type" content="business.business" />
    <meta property="og:title" content="Mango Holiday's Tour and Travel" />
    <meta property="og:url" content="https://mangoholidays.in" />
    <meta property="og:image" content="https://mangoholidays.in/wp-content/uploads/2017/07/Mango-Holidays.png" />
    <meta property="business:contact_data:street_address" content="5, Adi House, Gokhale Road North, Near Portuguese Church, Dadar" />
    <meta property="business:contact_data:locality" content="Mumbai" />
    <meta property="business:contact_data:region" content="Maharashtra" />
    <meta property="business:contact_data:postal_code" content="400028" />
    <meta property="business:contact_data:country_name" content="India" /> 
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <!-- Import Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

    <!-- Import Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

    <!-- Import Responsive stylesheet  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">

     <!-- custome stylesheet  -->
         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom-style.css">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom-style-tour2.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>

    <!-- Start Main Header -->
     <header class="main-herader">

        <!-- Header top start -->
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="pull-left">
                        <div class="header-topbar-col center767">
                            <ul class="list-inline" style="font-size:1.1em;">
                                <li><i class="fa fa-phone"></i> <a href="#">+91 8380039499 / 8380039503 / 8380039505 </a></li>
                                <li>&nbsp;| &nbsp</li>
                                <li> <i class="fa fa-envelope-o"></i> <a href="#">info@mangoholidays.in</a></li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="pull-right">
                        <div class="header-topbar-col">
                            <ul class="social-icon list-inline">
                                <li><a href="https://www.facebook.com/MangoHolidays/" target="_blank"><i class="fa fa-facebook"></i><span></span></a></li>
                                <li><a href="https://www.instagram.com/mangoholidays/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/mangoholidays" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="yt-tpcon"><a href="#" target="_blank"><i class="fa fa-youtube-play fa-lg"></i></a></li>
                                <!-- <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="pull-right" style="margin-right:12px;">
                            <ul>
                                <li><a href="<?php echo base_url()?>assets/Document/E-brochure.pdf" target="_blank" class="e-brochure"><i class="fa fa-download" aria-hidden="true"></i> &nbsp;E-Brochure</a></li>
                            </ul>
                    </div>
                    <a class="top-link" href="#">Careers</a>  -->
                    <span class="top-link">
                    <!-- <a href="#">Careers </a> &nbsp;|&nbsp; -->
                    <a href="<?php echo base_url()?>assets/Document/E-brochure.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> &nbsp;E-Brochure </a> 
                    </span>
                </div>
            </div>
        </div>
        <!-- Header top end -->

        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav" id="navbar-main">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container container-big p-0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->
            <div class="container container-big p-0">
                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/Mango-Holidays-logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInUp" data-out="fadeOutDown">
                        <li class="<?php echo ($controller =='')?'active':''?>">
                            <a href="<?php echo base_url();?>">Home</a>
                        </li>
                       
                        <li class="dropdown group_tour <?php echo ($controller =='GroupTours')?'active':'' ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Group Tours </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url()?>GroupTours/group_africa">Africa</a></li>
                                <li><a href="<?php echo base_url()?>GroupTours/group_america">America</a></li>
                                <li><a href="<?php echo base_url()?>GroupTours/group_australiaandnewzealand">Australia & New Zealand</a></li>
                                <li><a href="<?php echo base_url()?>GroupTours/group_dubai">Dubai</a></li>
                                <li><a href="<?php echo base_url()?>GroupTours/group_europe">Europe</a></li>
                                <li><a href="<?php echo base_url()?>GroupTours/group_japan">Japan</a></li>
                                <!-- <li><a href="<?php echo base_url()?>GroupTours/group_mauritius">Mauritius</a></li> -->
                                <li><a href="<?php echo base_url()?>GroupTours/group_asia">South East Asia</a></li>
                                <li><a href="<?php echo base_url()?>GroupTours/group_eastern_europe">Eastern Europe</a></li>
                                <li><a href="<?php echo base_url()?>GroupTours/group_scandinavia">Scandinavia</a></li>
                            </ul>
                        </li>    
                        <li class="dropdown megamenu-fw customized_tour <?php echo ($controller =='CustomizedTours')?'active':'' ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customized Tours </a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-6 col-sm-12">
                                                <h5><b>India</b></h5>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <div class="col-md-6 col-sm-12">
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_andaman">Andaman</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_gujarat">Gujarat</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_hyderabad">Hyderabad</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_kashmir">Kashmir</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_kerala">Kerala</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_karnataka">Karnataka</a></li> 
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_himachal">Himachal</a></li>

                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_madhya_pradesh">Madhya Pradesh</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_rajasthan">Rajasthan</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_tamil_nadu">Tamil Nadu</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_goa">Goa</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_north_east">North East</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_andhra_pradesh">Andhra Pradesh</a></li>
                                                            <li><a href="<?php echo base_url()?>CustomizedTours/customized_orissa">Orissa</a></li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-6 -->
                                            <div class="col-menu col-md-6  col-sm-12">
                                                <h5><b>International</b></h5>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                      <div class="col-md-6 col-sm-12">
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_asia">Asia</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_africa">Africa</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_australiaandnewzealand">Australia & New Zealand</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_dubai">Dubai</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_europe">Europe</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_bali">Bali</a></li>
                                                      </div>
                                                      <div class="col-md-6 col-sm-12">
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_japan">Japan</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_mauritius">Mauritius</a></li>
                                                        <!-- <li><a href="<?php echo base_url()?>CustomizedTours/customized_scandinavia">Scandinavia</a></li> -->
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_maldives">Maldives</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_nepal">Nepal</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_srilanka">Sri Lanka</a></li>
                                                        <li><a href="<?php echo base_url()?>CustomizedTours/customized_egypt">Egypt</a></li>
                                                      </div>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end col-6 -->
                                          
                                           
                                        </div>
                                        <!-- end row -->
                                    </li>
                                </ul>
                        </li>
                        
                        <li class="<?php echo ($controller =='corporate-tours-package')?'active':''?>">
                            <a href="<?php echo base_url()?>corporate-tours-package">Corporate Tours</a>
                        </li>
                        <li class="<?php echo ($controller =='about-us')?'active':''?>">
                            <a href="<?php echo base_url()?>about-us">About Us</a>
                        </li>
                        <!-- <li>
                            <a href="tour-details.html">Media</a>
                        </li> -->
                        <li class="dropdown <?php echo ($controller =='media')?'active':''?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url()?>media">Blogs / Advertorials</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Advertorials</a></li> -->
                                <li><a class="dropdown-item" href="#">Destination Videos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guest Corner </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Guest Feedback Form</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url()?>guest-testimonials-all">Testimonials</a></li>
                                    <li><a class="dropdown-item" href="#">Testimonials Video's</a></li>
                                </ul>
                        </li>
                        <li class="<?php echo ($controller =='contact-us')?'active':''?>">
                            <a href="<?php echo base_url()?>contact-us">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    
<SCRIPT type=text/javascript>

function onSubmit(){
	
	if (document.Enquiry.contact_person.value  == "")
	{
		alert("Please enter Contact Person Name .");
		document.Enquiry.contact_person.focus()
		return false;
	}

  if (document.Enquiry.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry.from.focus()
		return false;
	}
	var tempEmail= document.Enquiry.from.value;
	var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
	var check=/@[\w\-]+\./;
	var checkend=/\.[a-zA-Z]{2,3}$/;
	if (document.Enquiry.from.value!="")
	{
	if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
	{
		alert("Can you check your Email Address again?");
		document.Enquiry.from.focus();
		return false
	}
	}	
	
	if (document.Enquiry.telNo.value  == "")
	{
		alert("Please enter Telephone No .");
		document.Enquiry.telNo.focus()
		return false;
	}
	if (document.Enquiry.telNo.value!="")
	{
		var tel= parseInt(document.Enquiry.telNo.value); 
			if (isNaN(tel)) 
				{  
				alert("Enter Telephone Number Correctly");
				document.Enquiry.telNo.focus();
				return false
				} 
	}
		

	if (document.Enquiry.requirement_details.value  == "")
	{
		alert("Please enter Requirement Details .");
		document.Enquiry.requirement_details.focus()
		return false;
	}		

	return  CheckData();
	// Validating
function CheckData()
{
with(document.Enquiry)
{
if(q.value != randomnumber)
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
$mynumber= rand(673,62389);
//echo $mynumber."<br><br>";

$ilength=strlen($mynumber);
// echo $ilength."<br><br>";
for($i=0; $i<$ilength; $i++)
{
//print substr($mynumber, $i, 1).", ";
}
?>
<script type="text/javascript">
//defining variable and storinging in script
var randomnumber= <?= $mynumber?>;
// Validating
</script>

    <!-- End Main Header -->
    <div class="sidebar-contact">
                <div class="toggle"><span class="hd-mobile">QUICK ENQUIRY</span></div>
                <h4>Send Enquiry</h4>
                <div class="scroll">
                <form action="http://www.midsupport.com/php/TestResult_attach.php" method="post" name="Enquiry" onSubmit="return onSubmit()"  enctype ="multipart/form-data">
                  <input name="redirect" type="hidden">
              						<input name="recipient" type="hidden" value="amita.manchekar@mipl.co.in">
              						<input name="subject" type="hidden" value="Quick Enquiry From Website">
                  <input type="text" name="contact_person" placeholder="Name">
                  <input type="email" name="from" placeholder="Email">
                  <input type="rel" name="telNo" placeholder="Phone Number">
                  <textarea name="requirement_details" placeholder="Message here.."></textarea>
                  <?php
                        for($i=0; $i<$ilength; $i++)
                        {
                        $ipic= substr($mynumber, $i, 1);
                        $sFilePath = "";
                        //if (file_exists(".$ipic.".gif"))
                        $sFilePath = $ipic.".gif";
                        ?>
                        <img style="width:18px" src="https://mipl.co.in/nb/<?=$sFilePath ?>" />
                        <?php 
                        }
                        ?>
                        <input type="text" placeholder="Enter verifcation code" name="q">
                  <input type="submit" name="" value="send">
                </form>
                </div>
              </div>
              <script>
                   $(document).ready(function(){
                      $('.toggle').click(function(){
                        $('.sidebar-contact').toggleClass('active')
                        $('.toggle').toggleClass('active')
                      })
                    })
            </script>

