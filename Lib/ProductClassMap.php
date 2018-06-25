<?php


return [
 'APIProduct' => 'APIProduct',
 'RequestObjectOfAPIProduct' => 'RequestObjectOfAPIProduct',
  'RequestObjectOfAPIProductGetProductListRequest' => 'RequestObjectOfAPIProductGetProductListRequest',
 'APIProductGetProductListRequest' => 'APIProductGetProductListRequest',
 'GetStockLevelsBySKUList' => 'GetStockLevelsBySKUList',
 'GetStockLevelsBySKUListResponse' => 'GetStockLevelsBySKUListResponse',
 'ResponseObjectOfListOfAPIProductStockLevel' => 'ResponseObjectOfListOfAPIProductStockLevel',
 'ArrayOfAPIProductStockLevel' => 'ArrayOfAPIProductStockLevel',
 'APIProductStockLevel' => 'APIProductStockLevel'
    ];
    

	
	
class RequestObjectOfAPIProduct
{
	 public $BrandID;
    public $SecurityHash;
    public $Content;	
	
}

class RequestObjectOfAPIProductGetProductListRequest{
    public $BrandID;
    public $SecurityHash;
    public $Content;	
}


class APIProductGetProductListRequest {
	public $Start;
	public $End;
	public $SalesChannelID;
}



class APIProduct {
    public $ASIN;
	public $AdditionalBarCodes;
	public $AdditionalShippingLabel;
	public $AmazonVariationID;
	public $AmazonVariations;
	public $BarCodeNumber;
	public $BasePrice;
	public $BrandID;
	public $ChannelPrice;
	public $ChannelPseudoStockLevel;
	public $DateAdded;
	public $Description;
	public $EbayVariationID;
	public $EbayVariations;
	public $EndOfLine;
	public $HeightMM;
	public $ID;
	public $LargeLetterCompatible;
	public $LengthMM;
    public $ManufacturerSKU;
	public $MatchOptions;
	public $Name;
    public $PreOrder;
	public $ProductVATRate;
	public $SalesChannelLinks;
	public $SearchText;
	public $SelectedProductRangeOptionValues;
	public $StatusID;
	public $StockLevel;
	public $SupplierProductLinks;
	public $Thumbs200x200;
	public $Thumbs75x75;
	public $WeightGM;
	public $WidthMM;
	public $imageB64Strings;
	public $images;
	public $packItems;


}



class GetStockLevelsBySKUList {
	public $RequestObjectOfListOfString;
}


class GetStockLevelsBySKUListResponse {
	public $ResponseObjectOfListOfAPIProductStockLevel;
}

class ResponseObjectOfListOfAPIProductStockLevel {
	public $Success;
	public $ErrorLevel;
	public $ErrorMessage;
	public $ArrayOfAPIProductStockLevel;
	public $Errors;
}

class ArrayOfAPIProductStockLevel {
	public $APIProductStockLevel;
}


class APIProductStockLevel {
	public $ProductID;
	public $SKU;
	public $ProductName;
	public $StockLevel;
}





class RequestObjectOfAPIProductStockTransaction {
	public $BrandID;
	public $SecurityHash;
	public $Content;
}

class APIProductStockTransaction {
	public $ProductID;
	public $SKU;
	public $ProductCode;
	public $Quantity;
	public $Reason;
}


?>