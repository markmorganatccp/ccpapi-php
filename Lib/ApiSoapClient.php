<?php

class ApiSoapClient extends SoapClient
{
                public function __doRequest (  $request ,  $location ,  $action , $version , $one_way = NULL, $print_request = true )
                {     if($print_request)          
                     {
                                 highlight_string("<?php\n\$data =\n" . var_export($request, true) . ";\n?>");
                                }
                                return parent::__doRequest($request, $location, $action, $version, $one_way);
                }
}


?>