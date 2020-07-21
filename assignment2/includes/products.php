<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
<div class="div_coulum">

<div class='div_row' style=' background-color: #ecf8f8; margin-top: 50px; margin-right: 20px; padding: 10px; '>   

   <?php
       $count=0;
   
       $conn = new mysqli("localhost","root","root","tp_php");
       if($conn->connect_error) {
           die("Connection failed: ". $conn->connect_error);
       }

       $sql = "SELECT resource_path,discount,description,price FROM assets JOIN products WHERE assets.product_id = products.id  LIMIT 8";
       $result = $conn->query($sql);

     

       if($result->num_rows > 0 ){
           while($row = $result->fetch_assoc() ){
               if($count == 0 ){
                   echo "<div class='div_coulum'>";
                   
               }
               $count++;
               
               echo "<div class='div_row'>";
               echo "<div class='product' style='padding: 10px;background-color: white; margin: 20px; border: 2px solid black; width: 220px; height: 320px;'>";
       
               echo " <div class='div_coulum' style=' float: right;'> ";
               echo " <div style='background-color: #f77f00; width: 45px; height: 40px; padding-left: 5px; padding-top: 7px; border-radius: 5px;'>";
               echo "        <p>".$row[discount]."%</p> ";
               echo "    </div>";
               echo "</div>";
               echo "<div class='div_coulum' >";
               echo  "  <img src='".$row[resource_path] ."' alt='Dress' style='width: 150px; height: 150px;'>";
               echo "</div>";

               echo "<div class='div_coulum'>";
               echo "  <p style='font-size: 12px;'>".$row[description]."</p>";
                   echo "</div>";

                   echo "<div class='div_coulum'>";
                   echo "<p style=' color: red;'><del>$".$row[price]."</del></p>";
                   echo "</div>";

                   echo "<div style='display: flex; flex-direction: row; align-items: center; position: relative;'>";
                   echo   "<p style=' color: green; position: absolute;'>$".($row[price]-(($row[price]*1.0)*($row[discount]*1.0)%100.0))."</p>";
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
</body>
</html>