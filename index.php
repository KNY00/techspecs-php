<?php

require 'vendor/autoload.php';

use TechSpecsSDK\TechSpecsSDK as SDK;

// $class = new SDK('e2t2fcqhn624qcjz', 'l6Yg2jQwi52j6O1DxKAXT0YOJmOfYMXm');

// $responseSearch = $class->search('iphone', ['smartphone'], 'raw');

// $responseDetails = $class->productDetail('60d440bb8f19b751ae355cdf', 'raw');
// $responseBrands = $class->brands('pretty');
// $responseCategories = $class->categories('pretty');

// print_r($responseSearch);
// print_r($responseDetails);
// print_r($responseBrands);
// print_r($responseCategories);

$class = new SDK('19p7u0rsguq0qed0', 'l6Yg2jQwi52j6O1DxKAXT0YOJmOfYMXm');

$brand = ['Google'];
$category = ['tablet'];

$date_from = ''; $date_to = '';
$responseCategories = $class->products($brand, $category, $date_from, $date_to);

print_r($responseCategories);
