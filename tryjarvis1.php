<!DOCTYPE html>
<html> 
<head>
	<title>TryJarvis</title>
</head>
<body>
	<h1>TryJarvis is working!</h1>

	<?php

	$botToken = "943426745:AAHOnwra1uIj57NTQ2yjcQvN2Xh1JSCvTsc";
	$website = "https://api.telegram.org/bot".$botToken;


	$update = file_get_contents($website."/getupdates");
//$update = file_get_contents("php://input");


//print_r($update);

	$updateArray = json_decode($update, TRUE);

//	print_r($updateArray);

	$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

//print_r($chatId);
//	file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");
	$a = -1001384560859;
	file_get_contents($website."/sendmessage?chat_id=".$a."&text=test");



	?>
	<form action="<?php echo $website.'/sendMessage'?>" method="get" enctype="multipart/form-data">

		<input type="text" name="chat_id" value="<?php echo htmlspecialchars($a); ?>"/>
		<input type="text" name="text"/>
		<input type="submit" value="send"/>
	</form>

</body>
</html>


