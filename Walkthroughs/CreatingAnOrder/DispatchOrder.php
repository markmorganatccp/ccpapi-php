<?php include('../../includes/header.php'); ?>

<?php

include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['orderWSDL'];

$orderId = 0;

try
{
$options = array(
	'soap_version'=>SOAP_1_1, 
	'exceptions'=>true, 
	'trace'=>1, 
	'cache_wsdl'=>WSDL_CACHE_NONE 
);


$var = new RequestObjectOfAPIDispatchOrderRequest;
$var->Content = new APIDispatchOrderRequest;
$var->Content->OrderId = $orderId;
$var->Content->DispatchType = 'Full';
$var->Content->ConsignmentReferenceNumber = uniqid();
$var->Content->TrackingNumber = uniqid();

$var->Content->DispatchOptions = new ccpApiDispatchOptions;
// Notify External e.g. Amazon 
$var->Content->DispatchOptions->UpdateChannel = true;
// create Dispatch and Shipment
$var->Content->DispatchOptions->UpdateCCP = true;
// Do not restrict labels
$var->Content->DispatchOptions->RestrictLabels = false;
// Mark as Picked
$var->Content->DispatchOptions->MarkAsPicked = true;

$var->Content->DispatchOptions->UseShippingRuleMaxWeight = false;

$var->Content->DispatchOptions->OverwriteOrderNotes = false;

$var->Content->DispatchOptions->OrderNote =  uniqid();

$var->Content->DispatchOptions->CreditNote = false;

$var->Content->DispatchOptions->Reference =  uniqid();


$var->Content->DispatchOptions->DispatchDate = gmdate("Y-m-d");

// Is it a Refund 0 False, 1 = true
$var->Content->DispatchOptions->Refund = 0;



$var->Content->DispatchOptions->MarkPicksAsDone = true;

$var->Content->DispatchOptions->PackagingOption = 0;

$var->Content->DispatchOptions->CourierId = 0;
$var->Content->DispatchOptions->CourierServiceRulesId = 0;


// You must populate this in order to be able to dispatch the Order
// you can get Shipping Rule IDs by calling the GetShippingRules method
$var->Content->DispatchOptions->BCSID = 0;

$var->Content->DispatchOptions->AllowPickReset = false;
$var->Content->DispatchOptions->OverwriteOrderNoteType = 'None';

//var_dump($var->Content->DispatchOptions);

$dispatchItem =  new ccpApiDispatchItem;
$dispatchItem->OrderItemId = 0;
$dispatchItem->QuantityToDispatch = 1;
$dispatchItem->ProductId = 0;

$var->Content->ccpApiDispatchItems[] = $dispatchItem;


	
$client = new SoapClient($apiUrl, $options); 
	
$results = $client->DispatchOrder(array('request'=>array('BrandID' => $brandId, 'SecurityHash' => $hash, 'Content'=>$var->Content)));
?>

<div>
<?php $utils->PrintData($results); ?>
</div>

<div>
<?php $utils->outPutLastRequest($client); ?>
</div>

<div>
<?php $utils->outPutLastResponse($client); ?>
</div>

<?php
}

catch(Exception $e)
{
	$utils->DisplayError($e);
}

?>

<?php include('../../includes/footer.php'); ?>
