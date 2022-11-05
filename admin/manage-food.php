<?php include('partials/menu.php');?>
<style>
    H1{
        text-align: center;
        font-weight: lighter;
    }
    table{
        border-top: 1px solid black;
        padding: 4%;
        border-bottom: 1px solid #ddd;
        align-items: center;
    }
    th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid red;
}
    .btn-success{
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
  align-self: right;

    }
    .btn-danger{
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
    .th-1{
        text-align: right;
    }
    .red{
        color: red;
    }
    .d-1 {
        border-radius: 25px;
        border: 2px solid #73AD21;
        padding: 20px;
        width: 200px;
        height: 150px;
    }
</style>
<div class="main-content" style="background-image:url(mngfood.png) ;">
    <div class="wrapper">
        <h1 style="color:#ffebbb ;">manage food</h1>
        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            
        
        ?>
        
        <br>
        
            
        <center>
        <table class="d-1" style="background: radial-gradient(328px at 2.9% 15%, rgb(191, 224, 251) 0%, rgb(232, 233, 251) 25.8%, rgb(252, 239, 250) 50.8%,
         rgb(234, 251, 251) 77.6%, rgb(240, 251, 244) 100.7%);">
                <tr>
                   <th >S.n</th>
                    <th >Title</th>
                    <th >price</th>
                    <th>image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th >Actions</th>
                </tr>

                <?php
                    $sql="SELECT * FROM tbl_food";
                    $res=mysqli_query($conn,$sql);
                    $count=mysqli_num_rows($res);
                    $sn=1;
                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id=$row['id'];
                            $title=$row['title'];
                            $price=$row['price'];
                            $image_name=$row['image_name'];
                            $featured=$row['featured'];
                            $active=$row['active'];
                            ?>
                                <tr>
                                     <td ><?php $sn++;?></td>
                                     <td ><?php echo $title; ?></td>
                                     <td ><?php echo $price; ?></td>
                                     <td>
                                         <?php 
                                            if($image_name=="")
                                            {
                                                echo "Errorr Accured";
                                            }
                                            else
                                            {
                                                ?>
                                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>"width="100px" >
                                                <?php
                                            }
                                         ?>
                                     </td>
                                     <td><?php echo $featured; ?></td>
                                     <td><?php echo $active; ?></td>
                                        <td >
                                            
                                            <a class="btn-danger" href="<?php echo SITEURL; ?>admin/delete-food.php ? id=<?php echo $id; ?>">Delete</a>
                                            
                                        </td>
                                </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "<tr><td clospan='7'>Food not added</tr></td>";
                    }
                ?>

              
            </table>
        </center>
        <center>
        <a class="btn-success" href="/food-oder/admin/add-food.php">Add food <br></a>
        </center>
    </div>
    
</div>