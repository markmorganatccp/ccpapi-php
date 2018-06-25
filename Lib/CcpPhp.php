<?php

$config = include('config.php');
$brandId = $config['brandId'];
$sHash = $config['hash'];

$apiUrlProductOption = $config['productOptionWSDL'];
$apiUrlProductRange = $config['productRangeWSDL'];
$apiUrlProduct = $config['productWSDL'];
$apiUrlSalesChannel = $config['salesChannelWSDL'];
$apiUrlCustomer = $config['customerWSDL'];
$apiUrlOrder = $config['orderWSDL'];
$apiUrlPayment = $config['paymentWSDL'];

$commonObjects = include('CommonClassMap.php');

$productOptionObjects = include('ProductOptionClassMap.php');
$productRangeObjects = include('ProductRangeClassMap.php');
$productObjects = include('ProductClassMap.php');

$salesChannelObjects = include('SalesChannelClassMap.php');
$orderObjects = include('OrderClassMap.php');
$customerObjects = include('CustomerClassMap.php');
$paymentObjects = include('PaymentClassMap.php');

$apiSoapClient = include('ApiSoapClient.php');

include('Utils.php');
$utils = new Utils();


?>