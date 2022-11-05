<html>

<head>
    <title>food-oder Website Homepage</title>
    <link rel="stylesheet" href="../../css/admin.css">

</head>
<style>
    .main-content {

        height: 100%;
        width: 100%;
    }

    .d-1 {
        border-radius: 25px;
        border: 2px solid #73AD21;
        padding: 20px;
        width: 200px;
        height: 150px;
    }

    H1 {
        text-align: center;
        font-weight: lighter;
    }

    table {
        border-top: 1px solid black;
        padding: 4%;
        border-bottom: 1px solid #ddd;
        align-items: center;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid red;
    }

    .btn-success {
        background-color: #FFB845;
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: green;
        cursor: pointer;
        display: inline-block;
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        line-height: 20px;
        list-style: none;
        margin: 0;
        outline: none;
        padding: 10px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: color 100ms;
        vertical-align: baseline;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .btn-secondary {
        background-color: #EA4C89;
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        line-height: 20px;
        list-style: none;
        margin: 0;
        outline: none;
        padding: 10px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: color 100ms;
        vertical-align: baseline;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;

    }

    .btn-danger {
        background-color: #EA4C89;
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        line-height: 20px;
        list-style: none;
        margin: 0;
        outline: none;
        padding: 10px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: color 100ms;
        vertical-align: baseline;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }
    .ad-1{
        
        border-radius: 50px;
        width:415px;
        
        height:325px ;

  
}
    
</style>


<body style="background: radial-gradient(290px at 8.6% 46.4%, rgb(255, 148, 148) 7.8%, rgb(255, 223, 155) 32.2%, rgb(255, 247, 177) 48.1%,
 rgb(216, 255, 177) 61%, rgb(177, 255, 253) 75.3%);">
    <?php include('./partials/menu.php'); ?>
    <!--Main content start -->
    <div class="main-content" style="background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, 
    rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);">
        <h1 style="color: #FF4136;">WELCOME TO ADMIN PANEL</h1>
        <div class="wrapper" style="display: flex;">
            <br>

            <?php
            if (isset($_SESSION['delete'])) {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if (isset($_SESSION['user-not-found'])) {
                echo $_SESSION['user-not-found'];
                unset($_SESSION['user-not-found']);
            }
            if (isset($_SESSION['pwd-not-match'])) {
                echo $_SESSION['pwd-not-match'];
                unset($_SESSION['pwd-not-match']);
            }
            ?>
            <br>
            <!-- ---------------------------------------------------------- -->
            <div style="margin:25px;margin-top:65px">
                <table class="d-1" style="background: radial-gradient(circle at 4.3% 10.7%, rgb(138, 118, 249) 13.6%, rgb(75, 252, 235) 100.7%);">
                    <tr>
                        <th>S.n</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM tbl_admin";
                    $res = mysqli_query($conn, $sql);
                    if ($res == TRUE) {
                        $count = mysqli_num_rows($res);

                        $sn = 1;

                        if ($count > 0) {
                            while ($rows = mysqli_fetch_assoc($res)) {
                                $id = $rows['id'];
                                $full_name = $rows['full_name'];
                                $username = $rows['username'];

                    ?>
                                <tr>
                                    <td><?php echo $sn++; ?> </td>
                                    <td><?php echo $full_name ?></td>
                                    <td><?php echo $username ?></td>
                                    <td>

                                        <a class="btn-secondary" href="<?php echo SITEURL; ?>admin/update-admin.php ? id=<?php echo $id; ?>">Update</a>
                                    </td>

                                    <td>
                                        <a class="btn-danger" href="<?php echo SITEURL; ?>admin/delete-admin.php ? id=<?php echo $id; ?>">Delete</a>

                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    } else {
                    }
                    ?>
                </table>
                <center>
                    <a class="btn-success" href="add-admin.php" style="margin-top:15px">Add admin <br></a>
                </center>
            </div >
            <!-- --------------------------------------- End of first div containg table -->
            <div  style="margin:25px;margin-top:65px">
              <img  class="ad-1"src="adw.png" alt="">
            </div>
        </div>
    </div>
    <!--Main content end -->

</body>

</html>