<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <?php

        $conn = new mysqli("localhost","root","root","tp_php");
        if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error);
        }

        $sql = "SELECT * FROM features";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                if($row[id] == 1){
                    echo'
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="'.$row[image].'" alt="First slide">
                        <div class="carousel-caption">
                        <div class="center_header">
                        <h1 style="font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;font-size: 40px;">Shop your designer address</h1>
                        <p>ready to wear deresss tollored for you from online. Hurry up while stock lasts</p>
                        <div class="active-cyan-4 mb-4" id="search">
                            <input class="form-control" type="text" placeholder=" &#xF002; Search your Product from here" aria-label="Search" style="font-family:Arial, FontAwesome">
                        </div>
                        </div>
                        </div>
                        </div>
                    ';
                }
                else{
                    echo'
                        <div class="carousel-item">
                        <img class="d-block w-100" src="'.$row[image].'" alt="Second slide">
                        <div class="carousel-caption">
                        <div class="center_header">
                        <h1 style="font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;font-size: 40px;">Shop your designer address</h1>
                        <p>ready to wear deresss tollored for you from online. Hurry up while stock lasts</p>
                        <div class="active-cyan-4 mb-4" id="search">
                            <input class="form-control" type="text" placeholder=" &#xF002; Search your Product from here" aria-label="Search" style="font-family:Arial, FontAwesome">
                        </div>
                        </div>
                        </div>
                        </div>
                    ';
                }
            }
        }

    ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>