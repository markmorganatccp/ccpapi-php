<?php

return [
    'RequestObjectOfAPIOrderCreateOrderRequest' => 'RequestObjectOfAPIOrderCreateOrderRequest',
	'APIOrderCreateOrderRequest' => 'APIOrderCreateOrderRequest',
	'CustomerOrder' => 'CustomerOrder',
	'APIOrderItem' => 'APIOrderItem',
	'ccpCustomerOrderItem' => 'ccpCustomerOrderItem',
	'ArrayOfCcpCustomerOrderItem' => 'ArrayOfCcpCustomerOrderItem',
	'Customer' => 'Customer',
	'OrderDetail' => 'OrderDetail',
	'ResponseObjectOfOrderDetail' => 'ResponseObjectOfOrderDetail',
	'SubmitOrderResponse' => 'SubmitOrderResponse',
	'APIOrderShippingAddress' => 'APIOrderShippingAddress'
    ];
    
    
    
    
class createOrder {
	public $RequestObjectOfAPIOrderCreateOrderRequest;
}

class RequestObjectOfAPIOrderCreateOrderRequest {
public 	$BrandID;
public 	$SecurityHash;
public 	$Content;
}

class APIOrderCreateOrderRequest {
public 	$nLoginID;
public 	$nOrderID;
public 	$nSendEmail;
public 	$strReference;
public 	$nPaymentTermID;
public 	$strDeliveryDate;
public 	$strPostageOverride;
public 	$NetCarriage;
public 	$VATCarriage;
public 	$decCarriageTotal;
public 	$intAddByLoginID;
public 	$intPaymentStatus;
public 	$intDaysOfCredit;
public 	$doTriggers;
public 	$ShippingService;
public 	$APIOrderShippingAddress;
public 	$nCustomerID;
public 	$nSeasonID;
public 	$intBrandID;
public 	$ShippingRuleID;
public 	$ExternalReference;
public 	$orderItems ;
}

class APIOrderShippingAddress {
 public    $ShippingContactFirstName;
public 	$ShippingContactLastName;

public     $ShippingTelephone;
public 	$ShippingMobile;

public 	$ShippingAddress1;
public 	$ShippingAddress2;
public 	$ShippingTown;
public 	$ShippingCounty;
public 	$ShippingPostCode;
public 	$ShippingCountry;
	
}

class ArrayOfAPIOrderItem {
public 	$APIOrderItem;
}

class APIOrderItem {
public 	$ID;
public 	$OrderID;
public 	$BarCode;
public 	$SKU;
public 	$ExternalProductId;
public 	$AdditionalBarCodes;
public 	$ProductID;
public 	$ProductName;
public 	$VatRateID;
public 	$Quantity;
public 	$Price;
public 	$Discount;
public 	$RowTotalGross;
public 	$RowTotalNet;
public 	$RowTotalVAT;
public 	$RowDiscountGross;
public 	$RowDiscountNet;
public 	$RowDiscountVAT;
public 	$UseNetPrice;
}




class SubmitOrderResponse 
{
public	$ResponseObjectOfOrderDetail;
}

class ResponseObjectOfOrderDetail 
{
    public 	$Success;
	public 	$ErrorLevel;
	public 	$ErrorMessage;
	public 	$Content;
	public 	$Errors;
}

class OrderDetail {
	public 	$customer;
	public 	$CustomerOrder;
	public 	$BrandCourierSelection;
	public 	$CourierServicesRules;
	public 	$Country;
}



class Customer 
{
	public 	$ID;
	public 	$CompanyName;
	public 	$TradingName;
	public 	$VATNumber;
	public 	$SageVATCode;
	public 	$CreditLimit;
	public 	$Email;
	public 	$AgentID;
	public 	$SageAccountID;
	public 	$SageStatus;
	public 	$SalesChannelID;
	public 	$PaymentTermID;
	public 	$BarCodeGenerator;
	public 	$LoginID;
	public 	$BrandID;
	public 	$ParentID;
	public 	$SystemStatus;
	public 	$Type;
	public 	$EcomID;
	public 	$SpecialDeliveryInstructions;
	public 	$SpecDelInstrNote;
	public 	$OnWatchList;
	public 	$WatchListReason;
	public 	$StatusID;
	public 	$StatusIDEnum;
	public 	$QuickBooksId;
}



class CustomerOrder {
	public 	$_items;
	public 	$SalesChannelType;
	public 	$Customer;
	public 	$SalesChannel;
	public 	$OrderType;
	public 	$DeliveryAddress;
	public 	$TotalValue;
	public 	$PostageValue;
	public 	$ItemValue;
	public 	$roupedOrder;
	public 	$CourierType;
	public 	$IsInternational;
	public 	$ID;
	public 	$BrandID;
	public 	$Date;
	public 	$Reference;
	public 	$ExternalOrderRef;
	public 	$DeliveryDate;
	public 	$DispatchDate;
	public 	$SeasonID;
	public 	$StatusDescription;
	public 	$SalesChannelID;
	public 	$CustomerID;
	public 	$Payment;
	public 	$PartOrderID;
	public 	$PickTicketSent;
	public 	$EcomOrderID;
	public 	$BarCodeReader;
	public 	$ShippingType;
	public 	$PostageNet;
	public 	$PostageVAT;
	public 	$Postage;
	public 	$PostageNetGBP;
	public 	$PostageVATGBP;
	public 	$GBPPost;
	public 	$TotalGross;
	public 	$TotalGrossGBP;
	public 	$TotalNet;
	public 	$TotalNetGBP;
	public 	$TotalVAT;
	public 	$TotalVATGBP;
	public 	$DiscountGross;
	public 	$DiscountGrossGBP;
	public 	$DiscountNet;
	public 	$DiscountNetGBP;
	public 	$DiscountVAT;
    public 	$DiscountVATGBP;
	public 	$CountryID;
	public 	$ExchangeRate;
	public 	$CurrencyCode;
	public 	$PickListPrinted;
	public 	$Note;
	public 	$PreDispatchTrackingNumber;
	public 	$PreDispatchTrackingUrl;
	public 	$Priority;
	public 	$DefaultCSRuleID;
	public 	$DefaultCSRuleCost;
	public 	$DefaultCSRuleCostGBP;
	public 	$DefaultBCSID;
	public 	$ShippingServiceName;
	public 	$PickStatus;
	public 	$LockPickUntil;
	public 	$LoyaltyPayment;
	public 	$LoyaltyPointsAvailable;
	public 	$LoyaltyPointsSpent;
	public 	$LoyaltyPointsEarned;
	public 	$IsFBA;
	public 	$TotalFactoryCost;
	public 	$TotalFactoryCostGBP;
	public 	$TotalExtraCost;
	public 	$TotalExtraCostGBP;
	public 	$TotalCost;
	public 	$TotalCostGBP;
	public 	$TotalProfit;
	public 	$TotalProfitGBP;
	public 	$DeliveryAddressID;
	public 	$BillingAddressID;
	public 	$StatusID;
	public 	$IsExported;
	public 	$ExportedDate;
	public 	$CreationDate;
    public 	$HideUntilDate;
	public 	$AssignedToWarehouseId;
	public 	$ExternalOrderType;
}

class  ArrayOfCcpCustomerOrderItem {
	public 	$ccpCustomerOrderItem;
}

class ccpCustomerOrderItem {

	public 	$ID;
	public 	$Quantity;
	public 	$Dispatched;
	public 	$PendingDispatch;
	public 	$Returns;
	public 	$Price;
	public 	$Vat;
	public 	$PriceGross;
	public 	$Discount;
	public 	$RowDiscountReason;
	public 	$RowTotalGross;
	public 	$RowTotalGrossGBP;
	public 	$RowTotalNet;
	public 	$RowTotalNetGBP;
	public 	$RowTotalVAT;
	public 	$RowTotalVATGBP;
	public 	$ItemDiscountGross;
	public 	$ItemDiscountGrossGBP;
	public 	$RowDiscountGross;
	public 	$RowDiscountGrossGBP;
	public 	$ItemDiscountNet;
	public 	$ItemDiscountNetGBP;
	public 	$RowDiscountNet;
	public 	$RowDiscountNetGBP;
	public 	$ItemDiscountVAT;
	public 	$ItemDiscountVATGBP;
	public 	$RowDiscountVAT;
	public 	$RowDiscountVATGBP;
	public 	$Refund;
	public 	$SageUniqueNumber;
	public 	$CustomerOrderID;
	public 	$ProductID;
	public 	$ProductName;
	public 	$ProductInfo;
	public 	$ProductShortName;
	public 	$ProductDescription;
	public 	$BoxNo;
	public 	$VATRateID;
	public 	$VATRate;
	public 	$SaleOrderItemID;
	public 	$PartOfPack;
	public 	$CustomerID;
	public 	$CompanyName;
	public 	$TradingName;
	public 	$StockCode;
	public 	$ProductOptionValues;
	public 	$ProductRangeID;
	public 	$ProductRangeName;
	public 	$AllocatedDate;
	public 	$AllocatedQuantity;
	public 	$AllocatedReason;
	public 	$ImageURL;
	public 	$AmountSentToChannel;
	public 	$ParentProductID;
	public 	$ParentProductName;
	public 	$OrderItemProductType;
    public 	$GiftMessage;
	public 	$ParentProductQuantity;
	public 	$SupplierSKU;
	public 	$Product;
	public 	$PickFromWarehouseBayId;
	public 	$PickFromWarehouseId;
	public 	$CurrencySymbol;
	public 	$StatusID;
	public 	$WidthMM;
	public 	$LengthMM;
	public 	$HeightMM;
}


class RequestObjectOfAPIDispatchOrderRequest
{
public $BrandID; 
public $SecurityHash; 
public $Content;
}


class APIDispatchOrderRequest
{ 
	public $ccpApiDispatchItems; 
	public $OrderId; 
	public $DispatchOptions; 
	public $DispatchType; 
	public $ConsignmentReferenceNumber; 
	public $TrackingNumber; 
}


class ArrayOfCcpApiDispatchItem 
{ 
	public $ccpApiDispatchItem; 
}

class ccpApiDispatchItem 
{ 
	public $OrderItemId; 
	public $QuantityToDispatch; 
	public $ProductId; 

}


class ccpApiDispatchOptions 
{ 
	public $UpdateChannel; 
	public $UpdateCCP; 
	public $RestrictLabels; 
	public $MarkAsPicked; 
	public $AllowPickReset; 
	public $UseShippingRuleMaxWeight; 
	public $OverwriteOrderNotes; 
	public $OverwriteOrderNoteType; 
	public $OrderNote; 
	public $CreditNote; 
	public $Reference; 
	public $DispatchDate; 
	public $overrides; 
	public $Refund; 
	public $CourierId; 
	public $CourierServiceRulesId; 
	public $BCSID; 
	public $MarkPicksAsDone; 
	public $PackagingOption; 

}





?>