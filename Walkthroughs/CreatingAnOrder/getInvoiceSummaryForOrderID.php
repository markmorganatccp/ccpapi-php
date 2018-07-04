<?php include('../../includes/header.php'); ?>

<?php

include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['orderWSDL'];


$orderId = 0; // the order Id you created via SubmitOrder.php

try
{
$options = array(
	'soap_version'=>SOAP_1_1, 
	'exceptions'=>true, 
	'trace'=>1, 
	'cache_wsdl'=>WSDL_CACHE_NONE 
);
	
$client = new SoapClient($apiUrl, $options); 
	
$results = $client->getInvoiceSummaryForOrderID(array('request'=>array('BrandID' => $brandId, 'SecurityHash' => $hash, 'Content'=>$orderId)));
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
