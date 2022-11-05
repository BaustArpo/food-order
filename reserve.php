<?php include('.\partials-front\menu.php'); ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    /* CSS for Food Menu */
    .food-menu {
        background-color: #ececec;
        padding: 4% 0;
    }

    .food-menu-box {
        width: 43%;
        margin: 1%;
        padding: 2%;
        float: left;
        background-color: white;
        border-radius: 15px;
    }

    .food-menu-img {
        width: 20%;
        float: left;
    }

    .food-menu-desc {
        width: 70%;
        float: left;
        margin-left: 8%;
    }


    .food-detail {
        font-size: 1rem;
        color: #747d8c;
    }


    /* CSS for Social */


    /* for Order Section */
    .order {
        width: 50%;
        margin: 0 auto;
    }

    .input-responsive {
        width: 96%;
        padding: 1%;
        margin-bottom: 3%;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
    }

    .order-label {
        margin-bottom: 1%;
        font-weight: bold;
    }



    /* CSS for Mobile Size or Smaller Screen */

    @media only screen and (max-width:768px) {
        .logo {
            width: 80%;
            float: none;
            margin: 1% auto;
        }

        .menu ul {
            text-align: center;
        }

        .btn {
            width: 91%;
            padding: 2%;
        }

        h2 {
            margin-bottom: 10%;
        }

        .box-3 {
            width: 100%;
            margin: 4% auto;
        }

        .food-menu {
            padding: 20% 0;
        }

        .food-menu-box {
            width: 90%;
            padding: 5%;
            margin-bottom: 5%;
        }

        .social {
            padding: 5% 0;
        }

        .order {
            width: 100%;
        }
    }
</style>

<body style="background-color:#f8f398 ;">
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="clearfix"></div>
        </div>
    </section>




    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu" style="background: radial-gradient(circle at -8.9% 51.2%, rgb(255, 124, 0) 0%, rgb(255, 124, 0) 15.9%, rgb(255, 163, 77) 15.9%, rgb(255, 163, 77) 24.4%, rgb(19, 30, 37) 24.5%, rgb(19, 30, 37) 66%);">
        <div class="container">
            <h2 class="text-center" style="color:#ff847c ;">Reserve Table</h2>
        </div>
    </section>
    <section style="margin-top:15px">
    <div class="food-menu-box" style="background: radial-gradient(circle at 10% 20%, rgb(253, 239, 132) 0%, rgb(247, 198, 169) 54.2%, rgb(21, 186, 196) 100.3%);">
                <div class="food-menu-img">
                    <img src="images/t2.jpg" alt="Table for two person" class="img-responsive img-curve" style="height:100px ;"">
                </div>

                <div class=" food-menu-desc">
                    <h4>Table for 2 person</h4>
                    <p class="food-detail">
                        A Table for 2 person.
                    </p>
                    <br>

                    <a href="http://localhost/food-oder/tblreserve.php" class="btn btn-primary">Reserve Now</a>
                </div>
            </div>

            <div class="food-menu-box" style="background: radial-gradient(circle at 10% 20%, rgb(253, 239, 132) 0%, rgb(247, 198, 169) 54.2%, rgb(21, 186, 196) 100.3%);">
                <div class="food-menu-img">
                    <img src="images/table4.jpg" alt="table fpr four person" class="img-responsive img-curve" style="height:100px ;">
                </div>

                <div class="food-menu-desc">
                    <h4>table for 4 person</h4>

                    <p class="food-detail">
                        table for four person
                    </p>
                    <br>

                    <a href="http://localhost/food-oder/tblreserve.php" class="btn btn-primary">Reserve Now</a>
                </div>
            </div>
    </section>




</body>

</html