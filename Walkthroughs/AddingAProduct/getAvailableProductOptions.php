

<?php

include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['productOptionWSDL'];

try
{
$options = array(
	'soap_version'=>SOAP_1_1, 
	'exceptions'=>true, 
	'trace'=>1, 
	'cache_wsdl'=>WSDL_CACHE_NONE 
);
	
$client = new SoapClient($apiUrl, $options); 	
$results = $client->getAvailableProductOptions(array('request'=>array('BrandID' => $brandId, 'SecurityHash' => $hash, 'Content'=>$brandId)));
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


