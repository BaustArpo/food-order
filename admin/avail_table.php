<?php 
    include('./partials/menu.php');
?>
<style>
    .tbl-30 {
        width: 30%;
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
</style>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>
        <br><br>
        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
             

                <tr>
                    <td>description:</td>
                    <td>
                        <textarea name="description"  cols="30" rows="5"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>price:</td>
                   

                <tr>
                    <td>Select Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                   
                        

                            <option value="1">Food</option>
                            <option value="2">Snaks</option>
                        </select>
                    </td>
                </tr>
                <tr>
                  
                <tr>
                  
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add table"class="btn-secondary">
                    </td>
                </tr>
                

            </table>
        </form>

            <?php 
            if(isset($_POST['submit']))
            {
               echo "clicked";
               
               $description=$_POST['description'];
               
              
              

               if(isset($_FILES['image']['name']))
               {
                    $image_name= $_FILES['image']['name'];
                    if($image_name!="")
                    {
                        

                        $src=$_FILES['image']['tmp_name'];
                        $dst="../images/food/".$image_name;

                        $upload=move_uploaded_file($src,$dst);
                        if($upload==false)
                        {
                            $_SESSION['upload']="Failed to upload";
                            header('location:'.SITEURL.'admin/add-food.php');
                            die();
                        }
                    }
               }
               else
               {
                   $image_name="";
               }

               $sql2="INSERT INTO tbl_tableii SET
               
               description='$description',
               
               image_name='$image_name',

               
              
               
               ";
               $res2=mysqli_query($conn, $sql2);
               if($res2==true)
                  {
                    $_SESSION['add']="table added";
                    
                }
                else{
                   /// $_SESSION['add']="Error DXD";
                   /// header('location:'.SITEURL.'admin/add-food.php');
                   echo"ERROR";
                    }
            }
            ?>


    </div>
</div>