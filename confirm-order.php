<?php include('./config/constant.php'); ?>
<?php
if ($_GET) {
    $email = $_GET['user']; // print_r($_GET); //remember to add semicolon  
    //echo $email;
} else {
    echo "Url has no user";
}
?>
<style>
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
                align-self: right;

            }
            .th-1 {
                text-align: right;
            }

            .red {
                color: red;
            }
            .ad-1{
        
        border-radius: 50px;
        width:420px;
        height:325px ;
        }

        .invopic{
            height: 300px;
            width: 890px;
            border-radius: 50px;
        }

</style>
<div class="main-content" style="background-image: url(invo.png);" >
    <center>
    <div class="wrapper">
        
        <h1 style="color:#bbe4e9">Your Order</h1>

        <br><br>
        <table class="ad-1" style="background: radial-gradient(circle at 18.7% 37.8%, 
        rgb(250, 250, 250) 0%, rgb(225, 234, 238) 90%);">
            <tr>
                <th>sn</th>
                <th>food</th>
                <th>price</th>
                <th>qty</th>
                <th>total</th>
                <th>oder date</th>

                <th>customer name</th>

                <th>email</th>
                <th>address</th>
                <th>action</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tbl_oder WHERE customer_email='$email'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            $sn = 1;
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $order_date = $row['order_date'];
                    $status = $row['status'];
                    $customer_name = $row['customer_name'];
                    $customer_contact = $row['customer_contact'];
                    $customer_email = $row['customer_email'];
                    $customer_address = $row['customer_adress'];
            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $food; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $qty; ?></td>
                        <td><?php echo $total; ?></td>
                        <td><?php echo $order_date; ?></td>

                        <td><?php echo $customer_name; ?></td>

                        <td><?php echo $customer_email; ?></td>

                        <td><?php echo $customer_address; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>payment.php?email=<?php echo $customer_email;?>" class="btn-secondary">PAY</a>

                        </td>
                    </tr>


            <?php
                }
            } else {
                echo "Oder not available";
            }

            ?>

        </table>
    </div>

    </center>
    <br>

    <center>
        <div>
            <img src="adw2.png" alt="" class="invopic">
        </div>
    </center>
    



</div>