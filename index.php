<?php include('.\partials-front\menu.php'); ?>
    <!-- Navbar Section Ends Here -->
    <style>
       .categories{
        background-image: url("cata.png");
        background-size:100%;
  width: 100%;
  height: 100%; 
       }
       .food-menu{
        background-image: url("menu.png");
       }
       .food-menu-box{
        background: radial-gradient(circle at 10% 20%, rgb(166, 226, 229) 0%, rgb(198, 232, 221) 100.2%);
       }
       .food-menu-img{
        width: 80%;
       }
       .men{
        writing-mode: vertical-rl;
        margin-right: 30px;
        font-size: 100px;
       }
       .sec-m{
        height: 400px;
  width: 100%;
       }
    </style>

    <!-- fOOD search Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="http://localhost/food-oder/food-search.php"  method="POST">
                <input type="search" placeholder="search for foods" name="search">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD search Section Ends Here -->

    <?php 
      if(isset($_SESSION['order']))
      {
          echo $_SESSION['order'];
          unset($_SESSION['order']);
      }
    ?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php 
                $sql="SELECT * FROM tbl_catagory WHERE active='Yes'LIMIT 3";
                $res=mysqli_query($conn,$sql);

                $count=mysqli_num_rows($res);
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        ?>
                        <a href="<?php echo SITEURL; ?>catagory-foods.php ? catagory_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    if($image_name=="")
                                    {
                                        echo "image not avilabe";
                                    }
                                    else
                                    {
                                        ?>
                                            <img src="<?php echo SITEURL; ?>images/catagory/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a> 
                        <?php
                    }
                }
                else
                {
                    echo "catagory not available";
                }
            ?>
            

            

           

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->

    <section class="food-menu">
        <div class="container" >
            <div class="sec-m" style="display: flex;">
            <center>
            <h2 class="men" style="color:#fdffcd ;">Food Menu</h2>
            </center>

            <?php 
                $sql2="SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";
                $res2=mysqli_query($conn,$sql2);
                $count2=mysqli_num_rows($res2);
                if($count2>0)
                {
                    while($row=mysqli_fetch_assoc($res2))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $price=$row['price'];
                        $description=$row['description'];
                        $image_name=$row['image_name'];
                        ?>
                             <div class="food-menu-box">
                                    <div class="food-menu-img">
                                        <?php
                                            if($image_name=="")
                                            {
                                                echo "Not FOUND!!";
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
                                        <p class="food-price"><?php echo $price; ?>tk</p>
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
                    echo "Food not available";
                }
            ?>

           

            




            <div class="clearfix"></div>

            </div>
            

        </div>

        
    </section>
    <!-- fOOD Menu Section Ends Here -->
</body>
</html>