<?php
// do this
// https://www.codecademy.com/courses/web-beginner-en-ZQQ64/0/1
// add Examples and Tests for Each Method in each Endpoint
// create Code Repo here:
//https://bitbucket.org/product/pricing?tab=host-in-the-cloud

class Utils{

// api endpoint url 
var $apiUrl;


// Output Request
function OutPutLastRequest($client)
{

$xml = $client->__getLastRequest();
$dom = new DOMDocument;
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml);
echo '<textarea class="soap_text" id="txtRequest" wrap="on" cols="150" rows="25">';
echo  $dom->saveXML();
echo '</textarea>';    
}

// Output Response
function OutPutLastResponse($client)
{
  $xml = $client->__getLastResponse();
  $dom = new DOMDocument;
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml);

echo '<textarea class="soap_text" wrap="on" cols="150" rows="25" id="txtResponse">';
echo $dom->saveXML();
echo '</textarea>';
  
  
}

function PrintData($data)
{
highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");	
}

// get List of Methods
function OutputMethods($apiUrl)
{

$client = new SoapClient($apiUrl, array('trace' => 1 ));
    
// get list of functions
$funcs = $client->__getFunctions();
// print list
echo '<pre>';
echo '<h2>Functions:</h2>';

//echo '<pre>' . var_export($funcs, true) . '</pre>';
foreach($funcs as $f)
{
$f = preg_replace(
array('/(\w+) ([a-zA-Z0-9]+)/', '/\n /'),
array('<font color="green">${1}</font> <font color="blue">${2}</font>', "\n\t"),
$f
);


echo $f;
echo "\n\n";

}

echo '</pre>';

}


// get List of Object Types
function OutputTypes($apiUrl)
{
$client = new SoapClient($apiUrl);
// get list of object types
$objTypes = $client->__getTypes();

echo '<pre>';
echo '<h2>Object Types:</h2>';
foreach ($objTypes as $type) {
$type = preg_replace(
array('/(\w+) ([a-zA-Z0-9]+)/', '/\n /'),
array('<font color="green">${1}</font> <font color="blue">${2}</font>', "\n\t"),
$type
);
echo $type;
echo "\n\n";
}
echo '</pre>';

}


function DisplayError($e)
{
	 echo "<h2>Exception Error!</h2>"; 
     echo $e->getMessage(); 	
	
}

}

?>