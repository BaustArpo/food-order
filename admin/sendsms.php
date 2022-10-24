<?php include('partials/menu.php');?>
<?php 
if(isset($_POST["submit"]))
{
	echo "redireact before";
    header('location:' . SITEURL . 'admin/manage-oder.php');
	echo "redireact after";
}


?>

<html>
    <head>
        <title>SMS Page</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <style>
        
        * {padding: 0; margin: 0;}

body {
	background-color: #eaeaea;
	font-family: sans-serif;
    
}

.container {
	width: 430px;
	height: 733px;
	margin: auto;
	background-image: url(bg.svg);
	margin-top: 20px;
	box-shadow: 0 0 20px 0 #aeaeae;
	border-radius: 25px;
}

.c {padding-top: 70px;}

.header {
	width: 215px;
	border-radius: 50%;
	background-color: #70c6ff;
	padding-bottom: 80px;
	padding-top: 80px;
	margin-left: 25%;
	margin-bottom: 100px;
}

.header h1 {
	text-align: center;
	color: white;
	font-size: 35px;
}

.inputan {text-align: center;}
.inputan textarea {
	width: 310px;
	height: 42px;
	margin-bottom: 50px;
	border:2px solid #70c6ff;
	border-radius: 25px;
	padding-left: 15px;
	outline: none;
	background-color: #def2ff;
}

.inputan input {
	width: 310px;
	height: 42px;
	margin-bottom: 50px;
	border:2px solid #70c6ff;
	border-radius: 25px;
	padding-left: 15px;
	outline: none;
	background-color: #def2ff;
}

.inputan input:focus {
	width: 335px;
	transition: .2s;
}

.inputan button{
	width: 180px;
	height: 45px;
	font-size: 17px;
	border:none;
	margin-bottom: 50px;
	margin-top: 20px;	border-radius: 25px;
	padding-left: 15px;
	outline: none;
	background-color: #70c6ff;
	font-weight: bold;
	color: white;
}

.inputan button:hover{
	background-color: #a7dcff;
}

    </style>
    <body>
    <div class="container">
		<div class="c"></div>
		<div class="header">
			<h1>Send SMS</h1>
		</div>
		<div class="inputan" action="" method="POST">
			<form class="form" action="http://api.greenweb.com.bd/api.php" method="POST">
			<td>Token: <br></td> 
			<input type="text" name="token" placeholder="token" /><br>
			<td> number: <br></td>
			<input type="text" name="to" placeholder="+8801xxxxxxxxx" />
			<br>
			<td> Messege: <br></td>
			<textarea class="span11" name="message" id="message" placeholder="write your sms" ></textarea>
			<button type="submit" name="submit" class="btn btn-success btn-large">Send Message</button>
			</form>
		</div>
	</div>  

    </body>
</html>