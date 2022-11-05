<?php include('./partials/menu.php'); ?>
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
}.btn-success{
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
    .d-1{
                border-radius: 25px;
                border: 2px solid #73AD21;
                padding: 20px;
                width: 200px;
                height: 150px;
            }
</style>
<body style="background: radial-gradient(circle at 7.5% 24%, rgb(237, 161, 193) 0%, 
rgb(250, 178, 172) 25.5%, rgb(190, 228, 210) 62.3%, rgb(215, 248, 247) 93.8%);" >
<div class="main-content" style="background-image: url(adw3.png);">
    <div class="wrapper">
        <h1 style="color: #c81912;">Manage Catagory</h1>
        <br>
        <?php 
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if(isset($_SESSION['delete']))
{
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
?>
<br>

       
        <center>
        <table class="d-1" style="background: linear-gradient(179.4deg, rgb(253, 240, 233) 2.2%,
         rgb(255, 194, 203) 96.2%);">
            <tr>
                <th >S.n</th>
                <th >title</th>
                <th >image</th>
                <th >featured</th>
                <th >active</th>
                <th  colspan="2">Actions</th>
            </tr>
            <?php 
            $sql="SELECT * FROM tbl_catagory";
            $res=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
            $sn=1;
            if($count>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    $id=$row['id'];
                    $title=$row['title'];
                    $image_name=$row['image_name'];
                    $featured=$row['featured'];
                    $active=$row['active'];
                    ?>
             <tr>
                <td ><?php echo $sn++; ?></td>
                <td ><?php echo $title; ?></td>
                <td >
                    <?php 
                            if($image_name!="")
                            {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/<?php echo $image_name; ?>" width="100px">
                                <?php

                            }
                            else
                            {
                                echo "Image Not Available";
                            }
                    ?>
                </td>
                <td ><?php echo $featured; ?></td>
                <td><?php echo $active; ?></td>
                
                <td >
                    
                    <a class="btn-danger" href="<?php echo SITEURL; ?>admin/delete-catagory.php ? id=<?php echo $id; ?>">Delete</a>

                </td>
            </tr>

                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                    <div aria-colspan="6" class="red">No catagory added</div>
                </tr>
                <?php
            }
            ?>

          
        </table>
        </center>
        <center>
        <a class="btn-success" href="/food-oder/admin/add-catagory.php">Add catagory <br></a>
        </center>
    </div>


</div>    

</body>