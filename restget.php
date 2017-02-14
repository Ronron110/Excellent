<?php

$ch=curl_init();
$URI='http://iwahi01-apig92:8181/rest/default/aovcd/v1/member_reservation_order?nometa=true&sysfilter=equal(userid:"kobta04@ca.com")';

curl_setopt($ch,CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
curl_setopt($ch,CURLOPT_USERPWD,"admin:Password1");
curl_setopt($ch,CURLOPT_URL,$URI);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$ret=curl_exec($ch);
$decoded=json_decode($ret,true);
var_dump($ret);
echo "<br />";
var_dump($decoded);
echo "<br />";
echo $decoded[0]["reservation"][0]["order"][0]["PURCHASE_DATE"];
echo "test";
echo "<br />";
curl_close($ch);

?>
