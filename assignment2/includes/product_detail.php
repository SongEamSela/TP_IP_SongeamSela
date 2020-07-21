<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        .price_box {
        background-origin: padding-box;
        border: solid black 2px;
        width: 800px;
        height: 400px;
        grid-template-columns: auto auto auto;
        display: grid;
        }
        .dis_small_img {
        display: inline-flex; 
        margin-top: 7cm; 
        margin-left: -8cm;
        }
        .small_img {
        width: 70px;
        height: 70px;
        }
        .cloth {
        width: 150px;
        height: 130px;
        margin-top: 30px;
        margin-left: 150px;
        }
        .discount {
        background-color: rgb(238, 184, 84);
        border-radius: 10px;
        width: 50px;
        height: 30px;
        border: none;
        margin-top: 7px;
        margin-left: 8cm;
        }
    </style>
</head>
<body>
<div>
    <div class="price_box">
        <div>
            <input type="button" class="discount" value="20%"><br><br>
            <img src="sh1.jpg" alt="" class="cloth">
        </div>
        <div class="dis_small_img">
            <img src="sh1.jpg" alt="" class="small_img">
            <img src="sh1.jpg" alt="" class="small_img">
            <img src="sh1.jpg" alt="" class="small_img">
        </div>
        <div style="margin-left: 2cm;">
            <p>Black T-Shirt - Nike<span style="color: red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<del>$15</del></span> <span style="color: green;">$12</span></p>
            <p>Nike Womens Pink Half Zip Lightweight Hooded Shirt Top Athletio <br>Stretch Size M</p>
            <div style="margin-top: 4.5cm;">
                <button style="border: 2px; box-shadow: 2px 3px black;"><i class="fas fa-shopping-cart"></i> Card</button>
            </div>
            <div style="display: grid; margin-top: 0.5cm; grid-template-columns: auto auto;">
                <div>
                    <input type="button" value="Male T-Shirt" style="border: none; background-color: lightgray; border-radius: 10px; height: 30px;">
                </div>
                <div>
                    <input type="button" value="Single Color" style="border: none; background-color: lightgray; border-radius: 10px; height: 30px;">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>