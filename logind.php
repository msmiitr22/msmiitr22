<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="./notice/admin.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="./iconx.png">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
	<h1>LOGIN</h1>
	<form action="./logindaction.php" method="post" id="adminform">
		<div>
			<div>
				<div class="define">User ID/Enrollment Number</div><div class="box"><input type="text" name="heading" placeholder="Enrollment Number" required="yes" class="formi"></div>
		    </div>
		    <div>
		        <div class="define">PASSKEY</div><div class="box"><input type="password" name="psw" placeholder="Passkey" required="yes" class="formi"></div>
		    </div>
		    <div>
            <input type="submit" name="SUBMIT" class="submit">
        </div>
	</form>


</body>
</html>