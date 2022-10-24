<?php 
include('../config/constant.php');
?>

<html>
    <head>
        <title>LOGIN PAGE</title>
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
			<h1>LOGIN</h1>
            
        <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            if(isset($_SESSION['no-login-massage']))
            {
                echo $_SESSION['no-login-massage'];
                unset($_SESSION['no-login-massage']);
            }
        
        ?>
		</div>
		<div class="inputan" action="" method="POST">
        <form class="form" action="" method="POST">
           <td>username: <br></td> 
            <input type="text" name="username"><br>
           <td> password: <br></td>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
        </form>
		</div>
	</div>  

    </body>
</html>

<?php 
    if(isset($_POST['submit']))
    {
       echo $username=$_POST['username'];
       echo $password=$_POST['password'];

       $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

       $res=mysqli_query($conn, $sql);

       $count=mysqli_num_rows($res);

       if($count==1)
       {
           $_SESSION['login']="Login Successful";
           $_SESSION['user']=$username;
           header('location:'.SITEURL.'admin/');
       }
       else
       {
        $_SESSION['login']="Login UNSuccessful";
        header('location:'.SITEURL.'admin/login.php');

       }

    }


?>