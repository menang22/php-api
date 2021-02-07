<?php
// coded by Gabriel.S

$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, "https://api.myip.com" );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

$data = curl_exec( $ch ); 
curl_close( $ch ); 

echo $data; 
?>
