<?php include('../../includes/header.php'); ?>
<?php

include('../../Lib/CcpPhp.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];
$apiUrl = $config['orderWSDL'];

?>


<?php

$client = new SoapClient(
	$apiUrl, 
	array('classmap' => array('RequestObjectOfAPIOrderCreateOrderRequest' => 'RequestObjectOfAPIOrderCreateOrderRequest'), 'trace' => 1)
);

$var = new RequestObjectOfAPIOrderCreateOrderRequest;
// basic authentication details
$var->BrandID = $brandId;
$var->SecurityHash = $sHash;

$var->Content = new APIOrderCreateOrderRequest;

// (int) Must be a valid CCP Customer ID belonging to your brand
$var->Content->nCustomerID = 15928318; // created / saved when you ran the AddCustomer.php script

// (int) your Brand ID
$var->Content->intBrandID = $brandId;

// optional internal use only
$var->Content->nLoginID = 0;

// order isn't created yet so should not have an ID
$var->Content->nOrderID = 0;

// (int) 1 = true , 0 = false  (legacy design issue)
$var->Content->nSendEmail = 0;

// (int) Optional ,  Internal Use only 
$var->Content->nPaymentTermID = 0; 

// (datetime) earliest date this can be delivered (optional) , defaults to current date time
$var->Content->ShipByDate = gmdate("Y-m-d"); 

// (datetime) latest date this can be delivered (optional) ,, defaults to current date time 
$var->Content->strDeliveryDate = gmdate("Y-m-d");

// (decimal) Net shipping charge
$var->Content->NetCarriage = 0; 
// (decimal) tax element of shipping charge
$var->Content->VATCarriage = 0;
// (decimal) shipping amount tax inclusive
$var->Content->decCarriageTotal = 0;

// (int) optional - internal use only
$var->Content->intAddByLoginID = 0;

// (int) optional - internal use only
$var->Content->intPaymentStatus = 0;

// optional - internal use only
$var->Content->intDaysOfCredit = 0;

// whether or not to perform Triggers e.g. Email Dispatch Note
// (see {your ccp address}/Admin/TriggersEditor.aspx )
$var->Content->doTriggers = false; 

// Relates to the Seasons set up in /Admin/SeasonList.aspx
$var->Content->nSeasonID = 0; 

// (int) optional - if ommitted or set to 0 then the shipping rule for the order will default to the Manual Dispatch 
// see {your ccp url}/Admin/Configuration.aspx - Options - Shipping - Rules
// to Get a list of available shipping rules you can call the GetShippingRules() method at /CCPApiOrderService.svc?wsdl
$var->Content->ShippingRuleID = 0; 

//(string) Optional, this only really applies to Amazon and Ebay Sales Channels
// Matches between Shipping Service Names and Shipping Rule IDs are configured here /Admin/Configuration.aspx
//$var->Content->ShippingService = '';  

// (string) Optional, your Order Reference
$var->Content->strReference = null;
// (string) Optional, can, for example, be an order id from an external system
$var->Content->ExternalReference = '';

// (string) No Longer in use, legacy feature
//$var->Content->strPostageOverride  = null;


$var->Content->APIOrderShippingAddress = new  APIOrderShippingAddress;

// (string) Optional, business name of delivery address.
$var->APIOrderShippingAddress->ShippingAddressCompanyName = 'ACME WIDGETS LTD'; 

$var->Content->APIOrderShippingAddress->ShippingContactFirstName = 'John';
$var->Content->APIOrderShippingAddress->ShippingContactLastName = 'Doe';
$var->Content->APIOrderShippingAddress->ShippingAddress1 = '15' ;          
$var->Content->APIOrderShippingAddress->ShippingAddress2 = "St. Peter's Close";  
$var->Content->APIOrderShippingAddress->ShippingTown = 'Lancaster';                
$var->Content->APIOrderShippingAddress->ShippingCounty = 'Lancashire'; 
$var->Content->APIOrderShippingAddress->ShippingPostCode = 'LA1 UP2' ;
$var->Content->APIOrderShippingAddress->ShippingCountry = 'United Kingdom' ; 
$var->Content->APIOrderShippingAddress->ShippingTelephone = '0100 000000' ;           

$var->Content->APIOrderShippingAddress->ShippingMobile = '078906 000 000' ; 

$items = array();
$item1 = new APIOrderItem;
// (int) Optional, Unique identifier for Order Line Item
$item1->ID = 0; 
// (int) Optional, irreleveant until the order has been created
$item1->OrderID = 0; 

// Product can be identified by 
// ID (CCP System Unique Identifier for Product) 
// or ExternalProductId (Product Identifier in your system)
// or BarCode
// or SKU
// (string) Optional, unique identifier for product in your external system 
//$item1->ExternalProductId =  '';
// (string) Optional, barcode for product
$item1->BarCode = ''; 
// (string) Optional, stock keeping unit
$item1->SKU = ""; 
// (string) Optional, alternative barcodes configured in CCP at {your ccp url}/Admin/Product.aspx?ProdRangeID={0}&ProductID={0}&ChannelID=0
//$item1->AdditionalBarCodes = '';
// (int) Unique Identifier in CCP for your Product
//  No Product exists with that ID in CCP
$item1->ProductID = 0; 

// (string) Optional, Name of your Product in CCP
//$item1->ProductName =  null;

// (int) Tax Rate Identifier 
// 0 = Vat Exempt
// 1 = Zero Rated
// 5 = 20%
$item1->VatRateID = 5;

// (int) No of Items Ordered
$item1->Quantity = 1;

// (decimal) Price per item
$item1->Price = 6.24; 

// if set to true then tax will be added at the rate specified
$item1->UseNetPrice = true;  

// if UseNetPrice set to true then this will be the total line item discount excluding tax
$item1->Discount = 0;

// (decimal) No longer in use,legacy
$item1->RowDiscountNet = 0;
$item1->RowDiscountVAT = 0;
$item1->RowDiscountGross = 0;

// (bool) if true then Price is treated as having discount applied, 
// if false then discount will be added to the price
$item1->DiscountCalculatedInPrice = false;

// (decimal) No longer in use,legacy
$item1->RowTotalNet = 0 ;
$item1->RowTotalVAT = 0;
$item1->RowTotalGross = 0.00;

$items[] = $item1;

$var->Content->orderItems = $items;

// call the createOrder method
$func = 'SubmitOrder';
$namespace = 'http://tempuri.org/'; # Namespace of MessageHeader WSDL element
$objReq = new SoapVar($var, SOAP_ENC_OBJECT, 'RequestObjectOfAPIOrderCreateOrderRequest', $namespace);


try{

$results = $client->__soapCall($func, array('parameters' => array('request' => $objReq)));

}

catch(Exception $e)
{
	$utils->DisplayError($e);
}

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


<?php include('../../includes/footer.php'); ?>