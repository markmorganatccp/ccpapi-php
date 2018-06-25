<?php include('../../includes/header.php'); ?>
<?php

include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['productWSDL'];

try
{
$options = array(
	'soap_version'=>SOAP_1_1, 
	'exceptions'=>true, 
	'trace'=>1, 
	'cache_wsdl'=>WSDL_CACHE_NONE 
);
	
$client = new apiSoapClient($apiUrl, $options); 

$productRangeId = 0; // the Product Range you want to add to
$productName = ''; // your product name
$sku = ''; // your Stock Keeping Unit
$description = ''; // your product description
$optionId = 0; // your Product Option ID
$optionName = ''; // your Product Option Name
$optionValueId = 0; // your Option Value ID
$optionValueName = ''; // your Option Value Name


$SelectedProductRangeOptionValues = array();

$SelectedProductRangeOptionValues[] = array("BrandID" => $brandId, "OptionID" => $optionId, "OptionName" => $optionName, "ID" =>  $optionValueId, "OptionValue" => $optionValueName, 'OptionSortOrder' => 0  );

$results = $client->AddProduct(array('request'=>array('BrandID' => $brandId, 
														'SecurityHash' => $hash, 
														'Content' => array
														( 
														'ID' => 0,
														'BrandID' => $brandId,
														'ProductType' => 0,
														'ProductRangeID' => $productRangeId,
														'Name' => $productName,
														'ManufacturerSKU'  => $sku,
														'Description' => $description,
														'DateAdded' => 2018-06-20,
														 'BasePrice' => 1.99,
														'ChannelPrice' => 0,
														'VATRateID' => 0,
														 'AmazonVariationID' =>  0,
														 'EbayVariationID' =>  0,
														
														'PreOrder' => false,
														'EndOfLine' => false,
														'LengthMM' => false,
														'WidthMM' => 0,
														'HeightMM' => 0,
														'WeightGM' => 0,
														'LargeLetterCompatible' => false,
														
														'ProductVATRate' => 5,
														'StatusID' => 'Enabled',
														'AdditionalShippingLabel' => false,
														'StockLevel' => 0,
														'ChannelPseudoStockLevel' => 0,
														'PurchaseOrderMaxStock' => 0,
														'PurchaseOrderAtStockQuantity' => 0,
														'PurchaseOrderStockType' => 0,
														'PurchaseOrderBoxQuantity' => 0,
														'ProductStockType' => 0,														
														'DispatchIdentifierOption' => 0		,
														
														'SelectedProductRangeOptionValues' => $SelectedProductRangeOptionValues

														
														) 
														)));
														

?>


<div <div class="panel panel-default">
<?php $utils->outPutLastRequest($client); ?>
</div>

<div <div class="panel panel-default">
<?php $utils->outPutLastResponse($client); ?>
</div>


<div <div class="panel panel-default">
<?php $utils->PrintData($results); ?>
</div>

<div <div class="panel panel-default">>
<?php
}

catch(Exception $e)
{
	$utils->DisplayError($e);
}

?>
</div>

<?php include('../../includes/footer.php'); ?>

