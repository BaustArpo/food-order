<html>
        <head>
            <title >Welcome to Admin Panel</title>
            <link rel="stylesheet" href="../css/admin.css">
        </head>
        <style>
            .main-content{
                background-color: #2D4030;
                height: 100%;
                width: 100%;
            }
            .col-4{
                border-radius: 25px;
                border: 2px solid #73AD21;
                padding: 20px;
                width: 200px;
                height: 150px;
            }
        </style>
        
    <body style="background: radial-gradient(circle at 10% 20%, rgb(255, 200, 124) 0%, rgb(252, 251, 121) 90%);">
        <?php include('partials/menu.php');?>

        <!--Main content start -->
        <div class="main-content" style="background-image:url(admin1.jpg) ;">
            
            <div class="wrapper" style="color: #2D4030;">

                <center>
                <h1 style="color:#dc2f2f ;">Welcome to Admin Panel</h1>
                </center>
                
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
        
             ?>
                <div class="whole">
                <div class="col-4 text-center" style="background: linear-gradient(-20deg, #d558c8 0%, #24d292 100%);">
                    <?php
                        $sql="SELECT * FROM tbl_catagory";
                        $res=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count; ?></h1>
                    <br/>
                    catagories
                </div>
                <div class="col-4 text-center" style="background: linear-gradient(to right, rgb(182, 244, 146), rgb(51, 139, 147));">
                   <?php
                        $sql2="SELECT * FROM tbl_food";
                        $res2=mysqli_query($conn,$sql2);
                        $count2=mysqli_num_rows($res2);
                    ?>
                    
                    <h1><?php echo $count2; ?></h1>
                    <br/>
                    Foods
                </div>
                <div class="col-4 text-center" style="background: radial-gradient(circle at 10% 20%, rgb(253, 239, 132) 0%, rgb(247, 198, 169) 54.2%, rgb(21, 186, 196) 100.3%);">
                 <?php
                        $sql3="SELECT * FROM tbl_oder";
                        $res3=mysqli_query($conn,$sql3);
                        $count3=mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                    <br/>
                    Total Oder
                </div>
                <div class="col-4 text-center" style="background: linear-gradient(96.2deg, rgb(255, 230, 112) 10.4%, rgb(255, 100, 100) 43.8%, rgb(0, 93, 219) 105.8%);">
                   <?php
                        $sql4="SELECT SUM(total) AS total FROM tbl_oder";
                        $res4=mysqli_query($conn,$sql4);
                        $row4=mysqli_fetch_assoc($res4);
                        $total_revenue=$row4['total'];
                        
                    ?>

                    <h1>TK<?php echo $total_revenue; ?></h1>
                    <br/>
                    Revenue
                </div>
                    <!-- <center>
                    <div>
                        <img src="admin1.jpg" alt="" style="width:1100px;" height="250px ">
                    </div>
                    </center>  -->
                    

                <div class="clear-fix"></div>
            </div>
        </div>
        </div>
        <!--Main content end -->
    
    </body> 
</html>
