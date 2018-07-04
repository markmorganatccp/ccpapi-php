<?php include('../../includes/header.php'); ?>
<?php
include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['customerWSDL'];
?>

<?php

$salesChannelId = 0; // your sales channel id

$func = "AddCustomer";

$client = new SoapClient(
	$apiUrl, 
	array('classmap' => array('RequestObjectOfAPICustomerAddCustomerRequest' => 'RequestObjectOfAPICustomerAddCustomerRequest'))
);

// create the Request Object
$var = new RequestObjectOfAPICustomerAddCustomerRequest;
// basic authentication details
$var->BrandID    = $brandId;
$var->SecurityHash = $hash;
// main body of the request
$customerDetails = new APICustomerAddCustomerRequest;
$customerDetails->intBrandID = $brandId;
$customerDetails->SalesChannelID = $salesChannelId;
$customerDetails->CompanyName = 'John Doe'; // customer's full name if it is not a trade customer
$customerDetails->TradingName = 'John Doe'; // customer's full name if it is not a trade customer
$customerDetails->FirstName = 'John';
$customerDetails->LastName = 'Doe';
$customerDetails->EmailAddress = 'jdoe@testing.com';
$customerDetails->TelNo = '01524 898989';
$customerDetails->MobNo = '07450888888';

// address
$customerDetails->Address1 = '1 Testing Street';
$customerDetails->Address2 = 'Testing House';
$customerDetails->TownCity = 'Lancaster';
$customerDetails->CountyRegion = 'Lancashire';
$customerDetails->Postcode = 'LA1 2BC';
$customerDetails->Country = 'United Kingdom';
$var->Content = $customerDetails;
$var->Content->intBrandID = $brandId;
$var->Content->SalesChannelID = $salesChannelId;
$var->Content->intCustomerType = 0;
$var->Content->intPaymentTerms = 0;

// call the add customer method
$namespace = 'http://tempuri.org/'; # Namespace of MessageHeader WSDL element
$objReq = new SoapVar($var, SOAP_ENC_OBJECT, 'RequestObjectOfAPICustomerAddCustomerRequest', $namespace);

try
{
$options = array(
	'soap_version'=>SOAP_1_1, 
	'exceptions'=>true, 
	'trace'=>1, 
	'cache_wsdl'=>WSDL_CACHE_NONE 
);
	
$client = new SoapClient($apiUrl, $options); 

$results = $client->AddCustomer(array('request'=>array('BrandID' => $brandId, 'SecurityHash' => $hash, 'Content'=> $var->Content)));

?>

<div <div class="panel panel-default">
<?php $utils->OutPutLastRequest($client); ?>
</div>

<div <div class="panel panel-default">
<?php $utils->OutPutLastResponse($client); ?>
</div>


<div <div class="panel panel-default">
<?php $utils->PrintData($results); ?>
</div>



<?php
}

catch(Exception $e)
{
	$utils->DisplayError($e);
}

?>

<?php include('../../includes/footer.php'); ?>