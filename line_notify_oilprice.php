<?php


//echo phpinfo();


$cv = curl_init();

curl_setopt($cv, CURLOPT_URL, "https://sdr-nodejs.herokuapp.com/api/bcpoilprice");
 
//header (‘Content-type: text/html; charset=utf-8’);

curl_setopt($cv, CURLOPT_RETURNTRANSFER, 1);

 $output = curl_exec($cv);
 
 $js_array=json_decode($output, true);
 //echo $js_array['postDate'];
 echo #output;
/* 
 

 $notifyURL = "https://notify-api.line.me/api/notify";
$accToken = "WWgojH0PlQInXPJaj53WspD8PuuguBtIsAV7bpB2hzs";
$headers = array(
 'Content-Type: application/x-www-form-urlencoded',
 'Authorization: Bearer '.$accToken
);



$data = array(
 'message' => '
แจ้งปรับราคาน้ำมัน
วันที่ประกาศ : '.$js_array['postDate'].'
วันที่มีผล : '.$js_array['effectiveDate'].' 
ชนิดน้ำมัน | '.$js_array['unit'].' | ส่วนต่าง'
);


$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $notifyURL);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2); 
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 1); 
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec( $ch );
curl_close( $ch );
 
var_dump($result);
$result = json_decode($result,TRUE);
*/