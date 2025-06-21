<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact'] = 'Home/contact';
$route['about'] = 'Home/about';
$route['our-technology'] = 'Home/our_technology';
$route['benefits'] = 'Home/benefits';
$route['service'] = 'Home/service';
$route['solar_inverters'] = 'Home/solar_inverters';
$route['BOS_Materials'] = 'Home/BOS_Materials';

$route['case-study'] = 'Home/case_study';
$route['service-details-availability'] = 'Home/service_details_availability';
$route['service-details-support'] = 'Home/service_details_support';
$route['privacy-policy'] = 'Home/privacy_policy';
$route['terms-services'] = 'Home/terms_services';
$route['carbonization-mobile-unit'] = 'Home/carbonization_mobile_unit';
$route['consultation'] = 'Home/consultation';