<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>

<!-- Header section -->
    <div class="banner" >
        <ul>
            <li id="name"><a href="http://localhost:8888/tp1_homepage/index.php " style = "text-decoration: none;color: #84a59d;">Awesome<span style= "color: #f28482;">Shop</span></a></li>
            <li class="rignt_nav"><button type="button" class="btn btn-light" style= "background-color: #f28482">Join</button></li>
            <li class="rignt_nav">
                <svg class="bi bi-question-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
                </svg>
                <a href="http://localhost:8888/tp1_homepage/index.php" id = "NH">Need Help</a>
            </li>
        </ul>

        <div class="center_header">
            <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size: 40px;">Shop your designer address</h1>
            <p>ready to wear deresss tollored for you from online. Hurry up while stock lasts</p>
            <div class="active-cyan-4 mb-4" id="search">
                <input class="form-control" type="text" placeholder=" &#xF002; Search your Product from here" aria-label="Search" style="font-family:Arial, FontAwesome">
            </div>
        </div>
    </div>

<!-- Promotion section -->

    <div class="wrapper_promotion">
        <div class="promotion" id="p1"> 
            <div class="div_row">
                <ul>
                    <li class="infoP" id="nameP1">
                        Coupon Saving
                    </li>
                    <li class="infoP">
                        Up to 60% off everday
                    </li>
                    <br>
                    <li class="infoP">
                        <button type="button" class="btn btn-light" style= "background-color: #f6bd60; border: none; color: white;">Shop Coupons</button>
                    </li>
                </ul>

            </div>
            <div class= "div_row" style=" padding-left: 20%;">
                <i class="fa fa-shopping-bag fa-4x" aria-hidden="true" style="color: #e27079"></i>
            </div>
        </div>
        <div class="promotion" id="p2">
            <div class="div_row">
                <ul>
                    <li class="infoP" id="nameP2">
                        Free Delivery
                    </li>
                    <li class="infoP">
                        with selected items
                    </li>
                    <br>
                    <li class="infoP">
                        <button type="button" class="btn btn-light" style= "background-color: #f28482; border: none; color: white;">Deliver Now</button>
                    </li>
                </ul>
            </div>
            <div class= "div_row" style=" padding-left: 20%;">
                <i class="fa fa-truck fa-4x" aria-hidden="true" style="color: #2a9d8f"></i>
            </div>
        </div>
        <div class="promotion" id="p3">
        <div class="div_row">
                <ul>
                    <li class="infoP" id="nameP3">
                        Gift Voucher
                    </li>
                    <li class="infoP">
                        with personal care items
                    </li>
                    <br>
                    <li class="infoP">
                        <button type="button" class="btn btn-light" style= "background-color: #36c3f3; border: none; color: white;">Gift Now</button>
                    </li>
                </ul>
            </div>
            <div class= "div_row" style=" padding-left: 20%;">
                <i class="fa fa-gift fa-4x" aria-hidden="true" style="color: #f4a261"></i>
            </div>
        </div>
    </div>

    <!-- body section -->
    <div>    
        <!-- Catagory section -->
        <div class="div_row" style="display: flex; flex-direction: row;">
            <div style="  margin-right: 100px;">
                <ul>
                    <li style="display: list-item;">
                        <i class="fa fa-laptop fa-3x" aria-hidden="true" style="margin: 10px;color: #e27079;"></i>
                        <a href="http://localhost:8888/tp1_homepage/index.php" style = "text-decoration: none;font-size: 20px; color: black;">Electronics</a>
                    </li>
                    <li style="display: list-item;">
                    <i class="fa fa-shopping-bag fa-3x" aria-hidden="true" style="margin: 10px;color: #f4a261"></i>
                        <a href="http://localhost:8888/tp1_homepage/index.php" style = "text-decoration: none;font-size: 20px; color: black;">Handbags</a>
                    </li>
                    <li style="display: list-item;">
                        <img src="https://cdn4.iconfinder.com/data/icons/loan-money-blue-line/64/128_purse-wallet-money-cash-512.png" alt="Wallet" width="50px" height="50px" style="margin: 10px;">
                        <a href="http://localhost:8888/tp1_homepage/index.php" style = "text-decoration: none;font-size: 20px;color: black;">Wallet</a>
                    </li>
                    <li style="display: list-item;">
                        <img src="https://iconsgalore.com/wp-content/uploads/2018/10/t-shirt-1-featured.png" alt="Clothes" width="50px" height="50px" style="margin: 10px;">
                        <a href="http://localhost:8888/tp1_homepage/index.php" style = "text-decoration: none;font-size: 20px;color: black;">Clothes</a>
                    </li>
                </ul>
            </div> 

            <!-- Product list section -->

            <!-- <div class="div_row" style=" background-color: #ecf8f8; margin-top: 50px; margin-left: 100px; padding: 10px; ">


                <div class="product" style="padding: 10px;background-color: white; margin: 20px; border: 2px solid black; width: 220px; height: 320px;">
                    
                    <div class="div_coulum" style=" float: right;">
                        <div style="background-color: #f77f00; width: 45px; height: 40px; padding-left: 5px; padding-top: 7px; border-radius: 5px;">
                            <p>20%</p>
                        </div>
                    </div>
                    <div class="div_coulum" >
                        <img src="https://www.peopletree.co.uk/productimages/women/dresses/stacie-maxi-dress--b922f56d0604.jpg" alt="Dress" style=" width: 150px; height: 150px;">
                    </div>

                    <div class="div_coulum">
                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, possimus magni minus.</p>
                    </div>

                    <div class="div_coulum">
                        <p style=" color: red;"><del>$15</del></p>
                    </div>

                    <div style="display: flex; flex-direction: row; align-items: center; position: relative;">
                        <p style=" color: green; position: absolute;">$12</p>
                        <button type="button" class="btn btn-light" style= "background-color: #f28482; margin-left: 90px; position: absolute;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</button>
                    </div>
                </div> -->
            <div class="div_coulum">

                 <div class='div_row' style=' background-color: #ecf8f8; margin-top: 50px; margin-right: 20px; padding: 10px; '>   

                    <?php
                        $count=0;
                    
                        $conn = new mysqli("localhost","root","root","tp_php");
                        if($conn->connect_error) {
                            die("Connection failed: ". $conn->connect_error);
                        }

                        $sql = "SELECT * FROM features LIMIT 8";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                if($count == 0){
                                    echo "<div class='div_coulum'>";
                                    
                                }
                                $count++;
                                
                                echo "<div class='div_row'>";
                            echo "<div class='product' style='padding: 10px;background-color: white; margin: 20px; border: 2px solid black; width: 220px; height: 320px;'>";
                        
                            echo " <div class='div_coulum' style=' float: right;'> ";
                                echo " <div style='background-color: #f77f00; width: 45px; height: 40px; padding-left: 5px; padding-top: 7px; border-radius: 5px;'>";
                                echo "        <p>20%</p> ";
                                echo "    </div>";
                                echo "</div>";
                                echo "<div class='div_coulum' >";
                                echo  "  <img src='".$row[image] ."' alt='Dress' style='width: 150px; height: 150px;'>";
                                echo "</div>";

                                echo "<div class='div_coulum'>";
                                echo "  <p style='font-size: 12px;'>".$row[description]."</p>";
                                    echo "</div>";

                                    echo "<div class='div_coulum'>";
                                    echo "<p style=' color: red;'><del>$15</del></p>";
                                    echo "</div>";

                                    echo "<div style='display: flex; flex-direction: row; align-items: center; position: relative;'>";
                                    echo   "<p style=' color: green; position: absolute;'>$12</p>";
                                    echo   "<button type='button' class='btn btn-light' style= 'background-color: #f28482; margin-left: 90px; position: absolute;'><i class='fa fa-shopping-cart' aria-hidden='true'></i> Cart</button>";
                                    echo "</div>";
                                    echo" </div>";
                                    echo" </div>";

                                if($count == 2){
                                    echo "</div>";
                                    $count = 0;
                                }
                            }
                        }
                        else{
                            echo "0 result.";
                        }

                        $conn->close();
                    ?>
                </div>
                <div style=" display: flex;justify-content: center;align-items: center; padding: 100px;">
                    <button type="button" class="btn btn-light" style= "background-color: #2a9d8f; width:200px; color: white; ">Loading More</button>
                </div>
            </div>
        </div>

    </div>

</body>
</html>