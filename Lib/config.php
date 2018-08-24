<?php


$brandId = 345; // Your BrandID
$hash = '63,22,154,137,255,242,171,78,164,79,136,238,205,57,121,231,129,156,87,41,234,195,188,82,228,8,132,158,155,245,229,189,116,236,142,26,160,44,119,183,69,133,147,127,115,219,156,162,223,206,53,94,89,24,66,108,104,133,109,169,26,109,23,212,234,6,38,55,58,60,109,253,181,244,102,63,230,199,219,243,92,129,200,126,103,245,133,226,179,54,43,86,73,6,191,135,69,152,201,235,183,69,224,47,171,193,171,11,97,241,47,167,62,123,92,123,137,243,38,251,235,187,122,169,1,208,79,43'; // your Security Hash

$liveUrl = 'https://wcfccpservicesbase.cloudcommercepro.com/';
$sandboxUrl = 'https://devwcfccpservicesbase.cloudcommercepro.com/';


return [
   'productOptionWSDL' => $sandboxUrl  . 'CCPApiProductOptionService.svc?wsdl',
     'productRangeWSDL' => $sandboxUrl  . 'CCPApiProductRangeService.svc?wsdl',
    'productWSDL' => $sandboxUrl  . 'CCPApiProductsService.svc?wsdl',
     'salesChannelWSDL' => $sandboxUrl  . 'CCPApiSalesChannelService.svc?wsdl',
    'customerWSDL' => $sandboxUrl  . 'CCPApiCustomerService.svc?wsdl',
    'orderWSDL' => $sandboxUrl  . 'CCPApiOrderService.svc?wsdl',
    'paymentWSDL' => $sandboxUrl  . 'CCPApiPaymentService.svc?wsdl',
   'brandId' => $brandId,
    'hash' => $hash
];


?>

