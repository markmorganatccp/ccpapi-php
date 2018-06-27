<?php


$brandId = 0; // Your BrandID
$hash = ''; // your Security Hash

$liveUrl = 'https://wcfccpservicesbase.cloudcommercepro.com/';
$sandboxUrl = 'https://devwcfccpservicesbase.cloudcommercepro.com/';


return [
   'productOptionWSDL' => $localhost  . 'CCPApiProductOptionService.svc?wsdl',
     'productRangeWSDL' => $localhost  . 'CCPApiProductRangeService.svc?wsdl',
    'productWSDL' => $localhost  . 'CCPApiProductsService.svc?wsdl',
     'salesChannelWSDL' => $localhost  . 'CCPApiSalesChannelService.svc?wsdl',
    'customerWSDL' => $localhost  . 'CCPApiCustomerService.svc?wsdl',
    'orderWSDL' => $localhost  . 'CCPApiOrderService.svc?wsdl',
    'paymentWSDL' => $localhost  . 'CCPApiPaymentService.svc?wsdl',
   'brandId' => $brandId,
    'hash' => $hash
];


?>

