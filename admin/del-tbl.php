<?php
    include('../config/constant.php');

    $customer_contact=$_GET['customer_contact'];

     //echo $name;

    $sql="DELETE FROM `tbl_table` WHERE `customer_contact` ='$customer_contact'";

    $res= mysqli_query($conn, $sql);

    if($res==true)
    {
        //echo "SUCSSESS";
        $_SESSION['delete']="Customer Seated";

        header('location:'.SITEURL.'admin/manage-table.php');
    }
    else{
        $_SESSION['delete']="failed.try again";

        header('location:'.SITEURL.'admin/manage-table.php');
    }
?>
