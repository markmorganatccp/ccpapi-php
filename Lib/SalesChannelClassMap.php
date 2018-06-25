<?php

return [
   'RequestObjectOfInt32' => 'RequestObjectOfInt32', 
	'APISalesChannel' => 'APISalesChannel', 
	'ArrayOfAPISalesChannel' => 'ArrayOfAPISalesChannel', 
	'ResponseObjectOfListOfAPISalesChannel' => 'ResponseObjectOfListOfAPISalesChannel',
	'getApiSalesChannelsResponse' => 'getApiSalesChannelsResponse'
    ];


class APISalesChannel
{
    public $ID;
    public $Name;
    public $Type;
    public $Country;
    public $ExternalShopID;
}


class ArrayOfAPISalesChannel
{
    public $APISalesChannel;
    
}


class ResponseObjectOfListOfAPISalesChannel
{
	public $Success;
	public $ErrorLevel;
	public $ErrorMessage;
	public $Content;
	public $Errors;
    
}


class getApiSalesChannelsResponse 
{
	public $getApiSalesChannelsResult;
}



?>