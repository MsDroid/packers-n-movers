<?php 
/*Message Sending NEW Function*/
function _SEND_MESSAGE_NEW( $phone = "7004286568", $msg = "Hii, Test Message", $template_id = "1207161761199657681" ){
$api_key = '4606EA01F14FA4';
$contacts = $phone;
$from = 'CYBSMS';
$template_id = $template_id;
$sms_text = urlencode($msg);

//Submit to server
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "http://sms.kutility.com/app/smsapi/index.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&campaign=11291&routeid=7&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text."&template_id=".$template_id);
$response = curl_exec($ch);
curl_close($ch);
return $response;
}
/*Function ends*/






$contact = $_POST['contact'];
$id = $_POST['id'];


$link = "https://safenfast.in/bill/view_bills.php?id=$id";

// 9955797111
 _SEND_MESSAGE_NEW($contact, "New Enquiry, Name: ".substr($name, 0, 30).", Number: ".substr($number, 0, 30).", From: ".substr($from_place, 0, 30).", To: ".substr($to_place, 0, 30).", Type: ".substr($shipment_type, 0, 30)." -SafeNfast.in", "1207163376916408460");

?>