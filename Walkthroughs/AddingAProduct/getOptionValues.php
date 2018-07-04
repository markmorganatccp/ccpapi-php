<?php include('../../includes/header.php'); ?>

<?php

include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['productOptionWSDL'];

$masterOptionId = 0; // your master Product Option

try
{
$options = array(
	'soap_version'=>SOAP_1_1, 
	'exceptions'=>true, 
	'trace'=>1, 
	'cache_wsdl'=>WSDL_CACHE_NONE 
);
	
$client = new SoapClient($apiUrl, $options); 

// the Product Range Option Values you want for this Variation
// see {your ccp url}/Admin/ProductOptions.aspx
// example 
// set Option "Manufacturer" equal to Option Value "Converse"
$results = $client->getOptionValues(array('request'=>array('BrandID' => $brandId, 'SecurityHash' => $hash, 'Content'=>$masterOptionId)));
?>

<div class="panel panel-default">
<div class="panel-heading">Results</div>
<?php $utils->PrintData($results); ?>
</div>

<div class="panel panel-default">
<div class="panel-heading">SOAP Request</div>
<?php $utils->outPutLastRequest($client); ?>
</div>

<div class="panel panel-default">
<div class="panel-heading">SOAP Response</div>
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