<?php
$email=$_GET['email'];
$url = 'https://odc.officeapps.live.com/odc/emailhrd/getidp?hm=0&emailAddress='.$email;
$header=array(
    "Host: odc.officeapps.live.com",
    "Accept: */*",
    "Cache-Control: max-age=0",
    "Accept-Encoding: gzip, deflate",
    "User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0",);
$send = curl_init();
curl_setopt($send, CURLOPT_URL, $url);
curl_setopt($send, CURLOPT_RETURNTRANSFER, true);
curl_setopt($send,CURLOPT_HTTPHEADER,$header);
$respon = curl_exec($send);
if ( $respon == "MSAccount") {echo '{"by telegram:@vv1ck" , status: True}';}
else {echo '{"by telegram:@vv1ck" , status: False}';}

?>
