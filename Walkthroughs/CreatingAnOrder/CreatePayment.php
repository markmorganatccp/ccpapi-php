<?php include('../../includes/header.php'); ?>

<?php

include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['paymentWSDL'];

$invoiceId = 0; 

try
{
$options = array(
	'soap_version'=>SOAP_1_1, 
	'exceptions'=>true, 
	'trace'=>1, 
	'cache_wsdl'=>WSDL_CACHE_NONE 
);


$customerId = 0;
$invoiceId = 0;
$salesChannelId = 0;


$var = new RequestObjectOfAPIPaymentAddPaymentRequest;
$var->SecurityHash = $sHash;
$var->BrandID = $brandId ;
$var->Content = new APIPaymentAddPaymentRequest;
$var->Content->intBrandID = $brandId;
$var->Content->intCustomerID = $customerId;
$var->Content->dtPaymentDate = gmdate("Y-m-d"); 
$var->Content->intInvoiceID = $invoiceId;
$var->Content->strPaymentReference = 'PAY INVOICE ' . $invoiceId;
$var->Content->dbPaymentAmount = 7.49;
$var->Content->intProformaID = 0;
$var->Content->intSalesChannelID = $salesChannelId;
$var->Content->intBankAccountID = 0;
$var->Content->dbPaymentNetAmount = 7.49;
$var->Content->dbPaymentTaxAmount = 0;
$var->Content->dbGBPPaymentAmount = 7.49;
$var->Content->dbPostagePaymentAmount = 0;
$var->Content->dbPostageGBPPaymentAmount = 0;
$var->Content->TransactionTypeID = 'CardPayment';
$var->Content->GatewayType = 'PayPal';


	
$client = new SoapClient($apiUrl, $options); 
	
$results = $client->CreatePayment(array('request'=>array('BrandID' => $brandId, 'SecurityHash' => $hash, 'Content'=>$var->Content)));
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
