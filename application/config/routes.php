<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = 'Welcome';
$route['translate_uri_dashes'] = FALSE;


//menu links
$route['customized-holidays/india/andaman'] ='/CustomizedTours/customized_andaman';
$route['customized-holidays/india/gujarat'] ='CustomizedTours/customized_gujarat';
$route['customized-holidays/india/himachal-pradesh'] ='CustomizedTours/customized_himachal';
$route['customized-holidays/india/gujarat'] ='CustomizedTours/customized_gujarat';
$route['customized-holidays/india/karnataka-tour-packages'] ='CustomizedTours/customized_karnataka';
$route['customized-holidays/india/kashmir'] ='CustomizedTours/customized_kashmir';
$route['customized-holidays/india/kerala'] ='CustomizedTours/customized_kerala';
$route['customized-holidays/india/madhya-pradesh'] ='CustomizedTours/customized_madhya_pradesh';
$route['customized-holidays/india/kerala'] ='CustomizedTours/customized_kerala';
$route['customized-holidays/india/rajasthan'] ='CustomizedTours/customized_rajasthan';

//International customized tours
$route['customized-holidays/africa'] ='CustomizedTours/customized_africa';
$route['customized-holidays/australia-new-zealand'] ='CustomizedTours/customized_australiaandnewzealand';
$route['customized-holidays/dubai'] ='CustomizedTours/customized_dubai';
$route['customized-holidays/europe/'] ='CustomizedTours/customized_europe';
$route['customized-holidays/nepal'] ='CustomizedTours/customized_nepal';
$route['customized-holidays/russia'] ='CustomizedTours/customized_russia';
$route['customized-holidays/south-east-asia'] ='CustomizedTours/customized_asia';
$route['customized-holidays/south-east-asia'] ='CustomizedTours/customized_asia';



$route['tours/exotic-europe-group-tour'] ='tours/exotic_europe';
$route['tours/exotic-europe'] ='tours/exotic_europe';
$route['tours/glimpses-of-europe'] ='tours/glimpses_of_europe';
$route['tours/classic-europe'] ='tours/classical_europe';
$route['tours/grand-europe'] ='tours/grand_europe';
$route['tours/best-of-europe'] ='tours/best_of_europe';

$route['tours/incredible-america'] ='tours/incredible_america';
$route['tours/east-coast-of-america'] ='tours/east_coast_of_america';

$route['tours/east-coast-of-america-with-orlando'] ='tours/east_coast_of_america_with_orlando';
$route['tours/south-african-safari'] ='tours/south_african_safari';
$route['tours/west-coast-of-america'] ='tours/west_coast_of_america';
$route['tours/dazzling-dubai'] ='tours/dazzling_dubai';
$route['tours/mauritius-masti'] ='tours/mauritius_masti';
$route['tours/new-zealand-&-australia'] = 'tours/Australia_and_New_Zealand';
$route['tours/central-eastern-europe'] = 'tours/central_eastern_europe';
$route['tours/scenic-scandinavia'] = 'tours/scenic_scandinavia';
$route['tours/south-east-asia'] = 'tours/south_east_asia';
$route['tours/mesmerising-europe'] = 'tours/mesmerising_europe';
$route['tours/stunning-europe'] = 'tours/stunning_europe';
$route['tours/highlights-of-europe'] = 'tours/highlights_of_europe';

//Customized tours
$route['tours/greece---athens-mykonos-santorini'] = 'tours/greece1';
$route['tours/new-zealand-discovery'] = 'tours/new_zealand_discovery';
$route['tours/south-africa-with-victoria-falls'] = 'tours/south_africa_with_victoria_falls';
$route['tours/beautiful-andaman'] = 'tours/beautiful_andaman';
$route['tours/classical-tour-of-egypt'] = 'tours/classical_tour_of_egypt';
$route['tours/stunning-andaman'] = 'tours/stunning_andaman';
$route['tours/splendors-of-madhya-pradesh'] = 'tours/splendors_of_madhya_pradesh';
$route['tours/historic-madhya-pradesh'] = 'tours/historic_madhya_pradesh';
$route['tours/marvellous-mauritius'] = 'tours/marvellous_mauritius';
$route['tours/mauritius-break'] = 'tours/mauritius_break';
$route['tours/blissful-bali'] = 'tours/blissful_bali';
$route['tours/best-of-china'] = 'tours/best_of_china';
$route['tours/stunning-singapore'] = 'tours/stunning_singapore';
$route['tours/discover-russia'] = 'tours/discover_russia';
$route['tours/best-of-russia'] = 'tours/best_of_russia';
$route['tours/amazing-china'] = 'tours/amazing_china';
$route['tours/scenic-madhyapradesh'] = 'tours/scenic_madhyapradesh';
$route['tours/amazing-new-zealand'] = 'tours/amazing_new_zealand';
$route['tours/seychelles-magic'] = 'tours/seychelles_magic';
$route['tours/spectacular-south-africa'] = 'tours/spectacular_south_africa';
$route['tours/kuala-lumpur'] = 'tours/kuala_lumpur';
$route['tours/best-of-thailand'] = 'tours/best_of_thailand';
$route['tours/bangkok-pattaya'] = 'tours/bangkok_pattaya';
$route['tours/mesmerising-nepal'] = 'tours/mesmerising_nepal';
$route['tours/scenic-nepal'] = 'tours/scenic_nepal';
$route['tours/temple-tour-of-nepal'] = 'tours/temple_tour_of_nepal';
$route['tours/beautiful-sri-lanka'] = 'tours/beautiful_srilanka';
$route['tours/scenic-sri-lanka'] = 'tours/scenic_srilanka';
$route['tours/short-break-kerala'] = 'tours/short_break_kerala';
$route['tours/scenic-kerala'] = 'tours/scenic_kerala';
$route['tours/attractive-kerala'] = 'tours/attractive_kerala';
$route['tours/enchanting-kerala-with-kanyakumari'] = 'tours/enchanting_kerala_with_kanyakumari';
$route['tours/maldives-fun-island'] = 'tours/maldives_fun_island';
$route['tours/maldives-paradise-island-resort'] = 'tours/maldives_paradise_island_resort';
$route['tours/maldives-olhuveli'] = 'tours/maldives_olhuveli';
$route['tours/glimpse-of-rajasthan'] = 'tours/glimpse_of_rajasthan';
$route['tours/best-of-rajasthan'] = 'tours/best_of_rajasthan';
$route['tours/gujarat-special-wildlife-and-pilgrimage'] = 'tours/gujarat_special_wildlife_and_pilgrimage';
$route['tours/best-of-turkey'] = 'tours/best_of_turkey';
$route['tours/turkish-delight'] = 'tours/turkish_delight';
$route['tours/azerbaijan-baku'] = 'tours/azerbaijan_baku';
$route['tours/swiss-paris'] = 'tours/swiss_paris';
$route['tours/greek-voyage'] = 'tours/greek_voyage';
$route['tours/hong-kong'] = 'tours/hong_kong';
$route['tours/dubai-abu-dhabi-luxury'] = 'tours/dubai_abu_dhabi_luxury';
$route['tours/heaven-on-earth'] = 'tours/heaven_on_earth';
$route['tours/singapore-fully-loaded'] = 'tours/singapore_fully_loaded';
$route['tours/basic-singapore'] = 'tours/basic_singapore';
$route['tours/basic-singapore-with-universal-studios'] = 'tours/basic_singapore_with_universal_studios';
$route['tours/best-of-dubai'] = 'tours/best_of_dubai';
$route['tours/blissful-bali-honeymoon-special'] = 'tours/blissful_bali_honeymoon_special';
$route['tours/best-of-bali'] = 'tours/best_of_bali';
$route['tours/best-of-sri-lanka'] = 'tours/best_of_sri_lanka';
$route['tours/egypt-jewels'] = 'tours/egypt_jewels';
$route['tours/spanish-delight'] = 'tours/spanish_delight';
$route['tours/best-of-spain'] = 'tours/best_of_spain';
$route['tours/british-columbia-canada'] = 'tours/british_columbia_canada';
$route['tours/canadian-rockies'] = 'tours/canadian_rockies';
$route['tours/eastern-canada'] = 'tours/eastern_canada';
$route['tours/gujarat-wildlife-and-pilgrimage'] = 'tours/gujarat_wildlife_and_pilgrimage';
$route['tours/hills-and-meadows'] = 'tours/hills_and_meadows';
$route['tours/kashmir-with-vaishnodevi'] = 'tours/kashmir_with_vaishnodevi';
$route['tours/mesmerizing-south-karnataka'] = 'tours/mesmerizing_south_karnataka';
$route['tours/mysore-ooty-kodai'] = 'tours/mysore_ooty_kodai';
$route['tours/quick-break-karnataka'] = 'tours/quick_break_karnataka';
$route['tours/classic-himachal'] = 'tours/classic_himachal';
$route['tours/devbhumi-himachal'] = 'tours/devbhumi_himachal';
$route['tours/scenic-madhya-pradesh'] = 'tours/scenic_madhya_pradesh';
$route['tours/highlights-of-tamil-nadu'] = 'tours/highlights_of_tamil_nadu';
$route['tours/darjeeling-pelling-gangtok'] = 'tours/darjeeling_pelling_gangtok';
$route['tours/hyderabad-with-ramoji'] = 'tours/hyderabad_with_ramoji';
$route['tours/hyderabad-with-srisailyam'] = 'tours/hyderabad_with_srisailyam';
$route['tours/unique-orissa'] = 'tours/unique_orissa';
$route['tours/eastern-europe'] = 'tours/eastern_europe';
$route['tours/eastern-europe-express'] = 'tours/eastern_europe_express';


//pages
$route['about-us'] = 'pages/about_us';
$route['contact-us'] = 'pages/contact_us';
$route['corporate-tours-package'] = 'pages/corporate_tours';
$route['media'] = 'pages/media';
$route['media_page2'] = 'pages/media_page2';//new page
$route['media_page3'] = 'pages/media_page3';//new page
$route['guest-testimonials-all'] = 'pages/guest_testimonials_all';
