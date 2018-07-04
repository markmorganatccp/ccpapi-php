<?php
return [

    'SearchResponse' => 'SearchResponse',
    'ResponseObjectOfAPICustomerList' => 'ResponseObjectOfAPICustomerList',
    'APICustomerList' => 'APICustomerList',
    'ArrayOfAPICustomer' => 'ArrayOfAPICustomer',
    'APICustomer' => 'APICustomer'
    ];
    
    
    
class SearchResponse
{
public $Content;
}


class ResponseObjectOfAPICustomerList {
	public $Success;
	public $ErrorLevel;
	public $ErrorMessage;
	public $Content;
	public $Errors;
}

class APICustomerList {
		public $customers;
}

class ArrayOfAPICustomer {
		public $APICustomer;
}


class APICustomer {
		public $UserName;
		public $Password;
		public $VATNumber;
		public $ID;
		public $CustomerType;
		public $BrandID;
		public $SalesChannelID;
		public $FirstName;
		public $LastName;
		public $EmailAddress;
		public $CompanyName;
		public $TradingName;
		public $PaymentTerms;
		public $TelNo;
		public $FaxNo;
		public $MobNo;
		public $Address1;
		public $Address2;
		public $TownCity;
		public $CountyRegion;
		public $Postcode;
		public $Country;
		public $LoginID;
}


class RequestObjectOfAPICustomerAddCustomerRequest {
	public $BrandID;
	public $SecurityHash;
	public $APICustomerAddCustomerRequest;
}

class APICustomerAddCustomerRequest {
	public $intBrandID;
	public $SalesChannelID;
	public $CompanyName;
	public $TradingName;
	public $FirstName;
	public $LastName;
	public $EmailAddress;
	public $intCustomerType;
	public $intPaymentTerms;
	public $VATNumber;
	public $Address1;
	public $Address2;
	public $Postcode;
	public $TownCity;
	public $CountyRegion;
	public $Country;
	public $TelNo;
	public $FaxNo;
	public $MobNo;
	public $LoginID;
	public $AgentID;
	public $CreditLimit;
}

    

?>