<!doctype html>
<html>
<head>
	<title>EnterForm</title>
	<style>
		*{
			margin:0;
			padding:0;
			font-family:sans-serif;
			list-style:none;
			text-decoration:none;
			outline:none;
			color:#7892BB;
		}
		body{background:#4C4C4C;}
		#beautyForm{
			left:50%;
			margin-left:-120px;
			margin-top:170px;
			position:absolute;
			padding:40px 50px 50px 50px;
			border-radius:7px;
			border:2px solid #8B8B8B;
			box-shadow:0px 0px 100px -15px;
		}
		
		.inputs{
			background:#6E6E6E;
			border-radius:10px;
			border:none;
			position:relative;
			display:block;
			margin:0 auto 0 auto;
			padding:3px;
			padding-left:10px;
			color:#E8E8E8;
		}
		::placeholder{
			color:silver;
			opacity:0.6;
		}
		#beautyForm label{
			position:relative;
		}
		.button{
			padding:5px 20px 5px 20px;
			border-radius:20px;
			background:#8DC5FE;
			cursor:pointer;
			border:none;
			margin-top:50px;
			color:#2B2B2B;
			font-weight:bold;
			transition:0.2s ease;
		}
		.button:hover{ background:gold; }
		#atempts{
			position:absolute;
			left:50%;
			margin-left:-120px;
			top:720px;
			display:block;
			width:300px;
			height:100px;
		}
		#atemptText{color:#FF6363; display:none;}
		
	</style>
</head>
<body>
	<form method="post">
		<div id="beautyForm">
			<h1 align="center" style="padding-bottom:50px;">Register</h1>
			<label for="name" name="laname">Name:</label>
			<?php
			
			?>
			<input type="text" name="name" id="name" class="inputs" placeholder="Nikita"><br>
			
			<label for="lname">Last name:</label><input type="text" name="lname" id="lname" class="inputs" placeholder="Kravcenko"><br>
			
			<label for="login">Login:</label><input type="text" name="login" id="login" class="inputs" placeholder="some@mail.ru"><br>
			
			<label for="password">Password:</label><input type="password" name="password" id="password" class="inputs" placeholder="••••••••••"><br>
			
			<label for="repeatpassword">Repeat password:</label><input type="password" id="repeatpassword" name="repeatpassword" class="inputs" placeholder="••••••••••">
			
			<input type="submit" name="sent" value="Register" class="inputs button">
		</div>
	</form>
	<div id="atempts">
	<?php
		$username = $_POST["name"];
		$userlastname = $_POST["lname"];
		$login = $_POST["login"];
		$password = $_POST["password"];
		$repeatpassword = $_POST["repeatpassword"];
		$submit = $_POST["sent"];
		
		//first name
		if($submit && !preg_match("/^[A-Z][a-z]*$/", $username)){
			echo "<p id='atemptText' style='display:block;'>*",$username, " is a wrong name. Example: John</p>";
		}
		//last name
		if($submit && !preg_match("/^[A-Z][a-z]*$/", $userlastname)){
			echo "<p id='atemptText' style='display:block;'>*",$userlastname, " is a wrong last name. Example: Doe</p>";
		}
		//email
		if($submit && !preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $login)){
			echo "<p id='atemptText' style='display:block;'>*",$login, " is a wrong email. Example: anton@mail.ru</p>";
		}
		//password
		if($submit && !preg_match("/^[A-Za-z0-9]{6,}|[A-Za-z0-9][!@#\$%\^&\*]{6,}|[!@#\$%\^&\*][A-Za-z0-9]{6,}|[!@#\$%\^&\*][A-Z0-9]{6,}|[!@#\$%\^&\*][A-Za-z]{6,}|[!@#\$%\^&\*][a-z0-9]{6,}|[!@#\$%\^&\*][0-9]{6,}|[0-9][!@#\$%\^&\*]{6,}$/", $password)){
			echo "<p id='atemptText' style='display:block;'>*",$password, " is not a good password. Try: _aSdfj3*.'\9</p>";
		}
		//repeat password
		if($submit && $repeatpassword != $password){
			echo "<p id='atemptText' style='display:block;'>*passwords do not match</p>";
		}
	?>
	</div>
</body>
</html>

