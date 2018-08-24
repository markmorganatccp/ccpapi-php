# ccpapi-php

Sample Php Scripts for Cloud Commerce Pro Ltd API

  

**DISCLAIMER: These example scripts are meant for ILLUSTRATION PURPOSES ONLY and are not meant for Production Software**

  

### Support

  
  

Api Documentation: https://documenter.getpostman.com/view/4315995/cloud-commerce-pro-api/RW1gFd29

  

Please address any questions to support@cloudcommercepro.com

### Debugging

/[Lib](https://github.com/markmorganatccp/ccpapi-php/tree/master/Lib)/**ApiSoapClient.php** has a parameter in the constructor $print_request which by default is set to true. This will ouptut the raw SOAP Request to the screen. If you have any enquiries for support@cloudcommercepro.com please include this output in your email.

/[Lib](https://github.com/markmorganatccp/ccpapi-php/tree/master/Lib)/**Utils.php** contains methods for outputting raw SOAP Requests and Responses as well as outputting the data returned in a response.

### Installation

  

You can run these scripts on your local development environment e.g. http://localhost:8080/ccpApi/

  

You will need to update the /Lib/confg.php file with your specific $brandId and $hash.

  

## Walkthroughs

  

### Adding Product Variants

  

/Walkthroughs/AddingAProduct/index.php outlines the steps, in order, which need to be taken to add a Product Variant.

  

For these to run successfully you will need to set the following:

  

- getOptionValues.php $masterOptionId

- AddProduct.php
	- $productRangeId
	- $productName
	- $sku
	- $description
	- $optionId
	- $optionName
	- $optionValueId
	- $optionValueName
	
	
	
### Creating and Dispatching an Order

/Walkthroughs/CreatingAnOrder/index.php outlines the steps, in order, which need to be taken to add create and dispatch an order.



	
	