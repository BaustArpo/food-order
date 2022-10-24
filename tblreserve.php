<?php include('.\partials-front\menu.php'); ?>



   
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your Reservation.</h2>

            <form action="" method="POST" class="order">
          
                
                <fieldset>
                    <legend>Reservation Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="name"  class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="customer_contact"  class="input-responsive" required>
                    <div class="order-label">Quantity</div>
                    <input type="tel" name="qty"  class="input-responsive" required>

                    
                    
                    

                    <div class="order-label">Address</div>
                    <textarea name="customer_adress" rows="10" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm reservation" class="btn btn-primary">
                </fieldset>

            </form>
         
            <?php
                if(isset($_POST['submit']))
                {
                   // $id=$_POST['id'];
                    $qty=$_POST['qty'];
                    $reserve_time=date("Y-m-d h:i:sa");
                    $status="ordered";
                    $name=$_POST['name'];
                    $customer_contact=$_POST['customer_contact'];
                   
                    $customer_adress=$_POST['customer_adress'];

                    
                    $sql2="INSERT INTO `tbl_table`(`name`, `qty`, 
                    `customer_contact`, `customer_adress`)
                     VALUES ('$name','$qty','$customer_contact','$customer_adress')
                    
                    ";


                   //echo $sql2; die();
                    $res2=mysqli_query($conn,$sql2);




                    if($res2){
                        $_SESSION['order']="Reservation   Successful";
                        header('location:'.SITEURL);
                    }else{
                        $_SESSION['order']="Order Unsuccessful";
                            header('location:'.SITEURL);

                    }


                   
                }
            ?>

        </div>
    </section>
    


</body>
</html>