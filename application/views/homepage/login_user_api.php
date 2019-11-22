<?php
$email_id =$_POST['email_id'];
$password =$_POST['password']; 

$quoteUrl =$magentoURL.'index.php/rest/V1/integration/customer/token';

$data = array("username" =>$email_id, "password" =>$password);
$data_string = json_encode($data);
echo $data_string; 
$ch = curl_init($quoteUrl);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_HEADER,1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Content-Length: ".strlen($data_string)));
flush();
$decode_token = json_decode($token);
echo json_encode($decode_token);
if(isset($decode_token->message)){
	echo json_encode(array('status' =>500 ,'message'=>'Invalid Login'));
}else{
	$customer_url =$magentoURL.'index.php/rest/V1/customers/me';
	$chQuote = curl_init($customer_url);
	curl_setopt($chQuote, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer ".json_decode($token)));
	curl_setopt($chQuote, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($chQuote,CURLOPT_POST,1);
        curl_setopt($chQuote, CURLOPT_HEADER,1);
	$result = curl_exec($chQuote);
	$decode_result = json_decode($result);
        echo $result; 
	echo json_encode(array('status' =>200 ,'customer_id'=>$decode_result->id,'token'=>$decode_token,'email'=>$decode_result->email,'firstname'=>$decode_result->firstname,'lastname'=>$decode_result->lastname));
}
?>