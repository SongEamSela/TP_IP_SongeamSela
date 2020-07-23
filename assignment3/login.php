<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logIn Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="style.js"></script>
    <style>
        .q-row {
            display: flex;
            flex-direction: row;
        }
        
        .jutify-betweeen {
            display: flex;
            justify-content: space-between;
        }
        
        p.tawesome {
            color: #4C4C4C;
            font-weight: bold;
            font-family: Calibri;
            font-size: 20
        }
        
        .item-center {
            display: flex;
            align-items: center;
        }
        
        span.tshop {
            color: #15ff00;
            font-weight: bold;
            font-family: Tahoma;
            font-size: 20
        }
        
        .jutify-betweeen {
            display: flex;
            justify-content: space-between;
        }
        
        .jutify-center {
            display: flex;
            justify-content: center;
            justify-items: center;
        }
        
        .item-center {
            display: flex;
            align-items: center;
        }
        
        .border-contain {
            border: 1px solid black;
            padding: 25px;
        }
        
        .q-col {
            display: flex;
            flex-direction: column;
        }
        .error-info {
            color: #FF0000;
            margin-left: 10px;
        }
    </style>


</head>

<body>
    <iframe src="../assignment2/includes/nav_bar.php" frameborder="0" style="width: 100%;"></iframe>

    <?php 
        if(isset($_SESSION["errorMessage"])) {
        ?>
        <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
        <?php 
        unset($_SESSION["errorMessage"]);
        } 
    ?>

    <div class="item-center full-height jutify-center">
        <form class="login-form" name="login-form" method="POST" action="login-action.php" onSubmit="return validate();">
            <div class="floatl border-contain q-col">
                <h3 class="jutify-center">Welcome Back</h3>
                <span class="jutify-center">Login with your email & password</span>

                <div style="margin: 10px; ">
                <div>
                        <label for="username">Username</label><span id="user_info" class="error-info"></span>
                </div>
                <input type="email" name="email" id="email" placeholder="email" style="width: 10cm;" required></div>
                <div class=usererr><?php if (! empty($username_error)) { echo $username_error; } ?></div>
                <div style="margin: 10px;">

                <div>
                        <label for="password">Password</label><span id="password_info" class="error-info"></span>
                </div>
                <input type="password" name="password" id="password" placeholder="password" style="width: 10cm;" required></div>
                <div class=pwderr><?php if (! empty($password_error)) { echo $password_error; } ?></div>

                <div><button type="submit" id="btnsubmit" name="submit" value="Login" style="margin: 10px;background-color: #f28482; color:white;width:10cm">Continue</button></div>
                <div class="jutify-center">Don't have any account? <span><a href="signup.php">Sign Up</a></span></div>

            </div>
        </form>
    </div>

    <!-- <script>
    function validate() {
        var $valid = true;
        document.getElementById("email").innerHTML = "";
        document.getElementById("password").innerHTML = "";
        
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if(email == "") 
        {
            document.getElementById("email").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script> -->

    <script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>



</body>

</html>