<?php

return [
    'RequestObjectOfString' => 'RequestObjectOfString',
    'RequestObjectOfInt32' => 'RequestObjectOfInt32',
    'RequestObjectOfListOfString' => 'RequestObjectOfListOfString',
    'ArrayOfString' => 'ArrayOfString',
    'ApiFault' => 'ApiFault'
    ];



class ApiFault {
    	public $RequestNodeIndex;
		public $ccpApiErrorCodeType;
		public $Detail;
		public $ElementName;
		public $ErrorCode;
		public $FaultType;
		public $Message;
}


class RequestObjectOfString
{
public $BrandID;
public $SecurityHash;
public $Content;	
}


class RequestObjectOfListOfString {
	public $BrandID;
	public $SecurityHash;
	public $Content;
}

class ArrayOfString {
	public $string;
}

class RequestObjectOfInt32
{
public $BrandID;
public $SecurityHash;
public $Content;	
}


?>