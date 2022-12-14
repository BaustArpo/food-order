<?php include('.\partials-front\menu.php'); ?>

<?php 
    if(isset($_GET['food_id']))
    {
        $food_id=$_GET['food_id'];

        $sql="SELECT * FROM tbl_food WHERE id=$food_id";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count==1)
        {
            $row=mysqli_fetch_assoc($res);
            $title=$row['title'];
            $price=$row['price'];
            $image_name=$row['image_name'];

        }
        else
        {
            header('location:'.SITEURL);
        }
    }
    else{
        header('location:'.SITEURL);
    }
?>

    <!-- order section -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <?php 
                            if($image_name=="")
                            {
                                echo "Image not Available";
                            }
                            else
                            {
                                ?>
                                 <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                <?php
                            }
                        ?>
                        
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <!-- <input type="hidden" name="food_id" value="<?php echo $f_id; ?>" > -->

                        <input type="hidden" name="food" value="<?php echo $title; ?>" >
                        <p class="food-price">tk<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name"  class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact"  class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email"  class="input-responsive" required>

                    <div class="order-label">You must check the Email is valid or not </div>
                    
                    

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                    

                </fieldset>

            </form>
         
            <?php
                if(isset($_POST['submit']))
                {
                    // $f_id=$_POST['food_id'];
                    $food=$_POST['food'];
                    $price=$_POST['price'];
                    $qty=$_POST['qty'];
                    $total=$price * $qty;
                    $order_date=date("Y-m-d h:i:sa");
                    $status="ordered";
                    $customer_name=$_POST['full-name'];
                    $customer_contact=$_POST['contact'];
                    $customer_email=$_POST['email'];
                    $customer_address=$_POST['address'];

                    
                    $sql2="INSERT INTO `tbl_oder`(`food`, `price`, `qty`, `total`,
                     `order_date`,
                     `status`, `customer_name`, `customer_contact`, `customer_email`,
                      `customer_adress`) 
                     VALUES ('$food','$price','$qty','$total','$order_date',
                     '$status','$customer_name','$customer_contact','$customer_email',
                     '$customer_address')
                    
                    ";


                   //echo $sql2; die();
                    $res2=mysqli_query($conn,$sql2);


                    $customer_email=$_POST['email'];
                    if(filter_var($customer_email,FILTER_VALIDATE_EMAIL)===false)
                    {
                        exit("Invalid format");
                    }
                    echo "Your email adress is valid";


                    if($res2){
                        $_SESSION['order']="Order Successful";
                        echo ("<script>location.href = 'confirm-order.php?user=$customer_email';</script>");
                        //header("location:http://localhost/food-oder/confirm-order.php?user=$customer_email");
                    }else{
                        $_SESSION['order']="Order Unsuccessful";
                            header('location:'.SITEURL);

                    }


                   
                }
            ?>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



</body>
</html>