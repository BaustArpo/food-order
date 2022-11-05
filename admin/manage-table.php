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
        background-color: #2596be;
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
                width: 1000px;
                height: 150px;
            }
     .main-content{
        height: 100%;
        width: 100%;
    background-image: url("tables.jpg");
     }  
     .t-1{
        font-weight: bold;
       
     }     
 
</style>
<div class="main-content">

    <div class="wrapper">
   
        <h1 style="color:#422057FF ;" class="t-1">Manage Table</h1>
        <?php 
            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
          
            
        
        ?>
        <br><br>
        <center>
        <table class="d-1" style="background: linear-gradient(111.5deg, rgb(228, 247, 255) 21.9%,
         rgb(255, 216, 194) 92.2%);">
            <tr>
                <th>sn</th>
                <th>name</th>
                <th>qty</th>
                
                <th>customer contact</th>
                <th>address</th>
                <th>action</th>
            </tr>
            <?php
                $sql="SELECT * FROM tbl_table";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                $sn=1;
                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $name=$row['name'];
                       
                        $qty=$row['qty'];
                        
                        $customer_contact=$row['customer_contact'];
                       
                       $customer_address=$row['customer_adress'];
                        ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td><?php echo $name; ?></td>
                                    
                                    <td><?php echo $qty; ?></td>
                                    
                                   
                                    <td><?php echo $customer_contact; ?></td>
                                
                                    <td><?php echo $customer_address; ?></td>
                                    <td>
                                    <a href="<?php echo SITEURL; ?>admin/del-tbl.php ? customer_contact=<?php echo $customer_contact; ?>" class="btn-secondary">Customer Seated</a>
                                
                                        <a href="<?php echo SITEURL; ?>admin/sendsms.php" class="btn-secondary">SMS</a>
                                    </td>
                                </tr>   

             
                        <?php
                    }
                }
                else
                {
                    echo "No Reservation";
                }
            
            ?>
        
        </table>
        </center>
    </div>
    

</div>