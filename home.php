<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css">
	form{ border: 1px solid #d8cece ; margin:auto;border-radius: 3px;
    padding-left: 10px;}
	.ten{ padding-top: 20px; padding-bottom: 20px; padding-left: 10px; padding-right: 10px; margin-top: 10px;}
	.dt{padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px; margin-left: 30px; margin-top: 10px;}
</style>
<body>
	<?php 
	$mess = isset($_GET['state']) ? trim($_GET['state']):'';
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4 ">
				
				<p align="center">Gửi tin nhắn api</p>
				<form method="post" action="controller/send.php">
					<div class="form-group">
						<label for="txtphone">PhoneNumber</label>
						<input type="text" name="phone" id="txtphone" class="form-control">
					</div>
					<div class="form-group">
						<label for="txtmesage">Message</label>
						<textarea class="form-control" name="message" row="8"></textarea>
					</div>
					<button class="btn btn-primary" type="submit" name="submit">Send</button>
					
				</form>
			</div>
		</div>
	</div>
	
	
</body>
</html>
<!-- tim hieu server mail; sever sms; các trang admin phải có sever này server đã  xay dung san-->