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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

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

//pages
$route['about-us'] = 'pages/about_us';
$route['contact-us'] = 'pages/contact_us';
$route['corporate-tours-package'] = 'pages/corporate_tours';
$route['media'] = 'pages/media';
$route['media_page2'] = 'pages/media_page2';//new page
$route['media_page3'] = 'pages/media_page3';//new page
