<?php 
require '../lib/Twilio/autoload.php';
		// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
// nhan du lieu tu form cilent gui len

if(isset($_POST['submit']))
{
	 $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
	 //echo $phone;
	 $mess =  isset($_POST['message']) ? trim($_POST['message']) : '';
	 //echo $mess;
	 // kiểm tra tinh hơp lệ của dữ liệu
	 $phone = strip_tags($phone);
	 $mess = strip_tags($mess);
	 if(empty($phone) OR empty($mess))
	 {
	 	header('Location:../home.php?state=fail');

	 }
	 else
	 {
	 	$send = mySend($phone, $mess);
	 	if($send)
	 	{
	 		header('Location:../home.php?state=sucess');

	 	}
	 	else
	 	{
	 		header('Location:../home.php?state=error');
	 	}
	 }
}
// đinh nghĩa hàm php 
function mySend( $phone, $mess)
{

		// Your Account SID and Auth Token from twilio.com/console
		$sid = 'AC92a1a2888699c1658841adc88e91fcdf';
		$token = '3fe58b965a01fb412f08f671f60b5c35';// bắt buộc phải có token
		$client = new Client($sid, $token);

		// Use the client to do fun stuff like send text messages!
		$result = $client->messages->create(
		    // the number you'd like to send the message to
		    '+84'.$phone,
		    array(
		        // A Twilio phone number you purchased at twilio.com/console
		        'from' => '+17072291075',
		        // the body of the text message you'd like to send
		        'body' => $mess
		    )
		);
		if($result)
		{
			return TRUE;
		}
		return FALSE;
}



?>