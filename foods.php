<?php include('.\partials-front\menu.php'); ?>
<style>
    .food-menu-box{
        background: radial-gradient(circle at 7.5% 24%, 
        rgb(237, 161, 193) 0%, rgb(250, 178, 172) 25.5%, rgb(190, 228, 210) 62.3%, rgb(215, 248, 247) 93.8%);
    }    
</style>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="http://localhost/food-oder/food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <section style="margin-top:15px">
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu" style="background-image: url(adw2.png);">
        <div class="container" >
    
         
            <h2 class="text-center">Food Menu</h2>
    </section>  
    </section> 
    <section >


<?php
    $sql="SELECT * FROM tbl_food WHERE active='Yes'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $id=$row['id'];
            $title=$row['title'];
            $description=$row['description'];
            $price=$row['price'];
            $image_name=$row['image_name'];
            ?>
                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <?php
                            if($image_name=="")
                            {
                                echo "image not found";
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
                        <h4><?php echo $title; ?></h4>
                        <p class="food-price">tk<?php echo $price; ?></p>
                        <p class="food-detail">
                            <?php echo $description; ?>
                        </p>
                        <br>

                        <a href="<?php echo SITEURL; ?>order.php ? food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            <?php

        }
    }
    else
    {
        echo "Food not Found";
    }
?>
            </div>
     

            

            
    </section>
    <!-- fOOD Menu Section Ends Here -->

</body>
</html>