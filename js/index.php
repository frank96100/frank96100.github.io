<?php

$data = array ('foo' => 'bar');
$data = http_build_query($data);
 
$opts = array (
'https' => array (
'method' => 'GET',
'header'=> "Content-type: application/x-www-form-urlencodedrn" .
"Content-Length: " . strlen($data) . "rn"."User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:80.0) Gecko/20100101 Firefox/80.0",
'content' => $data
)
);
 
$context = stream_context_create($opts);
$html = @file_get_contents('https://floral-boat-dbc1.frank96100.workers.dev', false, $context);
 var_dump($http_response_header); 

?>
