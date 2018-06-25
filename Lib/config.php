<?php

// $brandId = 331;
// $hash = '189,99,120,125,47,205,242,90,166,123,99,86,88,42,164,150,151,248,157,126,72,247,16,211,154,39,69,104,169,249,23,209,204,24,203,56,138,202,43,206,35,101,190,61,125,60,212,60,195,127,38,186,175,57,140,197,102,240,142,48,126,12,46,85,198,184,62,215,204,64,231,30,117,229,163,96,103,90,30,190,69,145,122,187,116,89,178,232,44,58,189,159,47,96,163,203,0,227,91,38,95,128,209,253,158,226,62,32,49,195,94,41,236,159,6,65,168,206,141,69,167,176,25,124,51,70,135,117';

$brandId = 516;
$hash = '130,202,118,222,94,251,97,50,210,138,246,63,13,181,192,61,140,86,57,247,18,172,237,115,233,112,17,110,240,224,189,244,92,167,35,171,226,9,208,124,132,43,196,156,57,92,85,128,130,20,113,233,29,124,231,241,85,56,249,250,202,236,97,134,219,163,215,32,125,220,144,157,63,228,215,227,119,90,38,7,219,64,137,36,104,227,245,141,74,178,182,54,194,131,88,144,146,61,42,230,77,133,164,11,227,226,218,145,15,46,203,112,54,98,101,208,49,206,243,27,52,188,198,197,91,164,210,91';

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

