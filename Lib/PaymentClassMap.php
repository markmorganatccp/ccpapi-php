<?php

return [
    'RequestObjectOfAPIPaymentAddPaymentRequest' => 'RequestObjectOfAPIPaymentAddPaymentRequest',
	'APIPaymentAddPaymentRequest' => 'APIPaymentAddPaymentRequest'
    ];


class CreatePayment {
	public $request;
}

class RequestObjectOfAPIPaymentAddPaymentRequest {
	public $BrandID;
	public $SecurityHash;
	public  $Content;
}



class APIPaymentAddPaymentRequest {
    
    public $intBrandID;
	public $intSalesChannelID;
	public $intCustomerID;
	public $dtPaymentDate;
	
	public $intInvoiceID;
	
	public $strPaymentReference;
	
	public $intProformaID;
	
    public $dbPaymentAmount;
	public $TransactionTypeID;


}
  


?>