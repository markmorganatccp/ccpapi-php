<?php


$brandId = 0; // Your BrandID
$hash = ''; // your Security Hash


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

