<?php
namespace Phppot;

use \Phppot\Register;
if (! empty($_POST["register-user"])) {
    
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    require_once ("Register.php");
    /* Form Required Field Validation */
    $member = new Register();
    $errorMessage = $member->validateMember($username, $email, $password);
    
    if (empty($errorMessage)) {
        $memberCount = $member->isMemberExists($username, $email);
        
        if ($memberCount == 0) {
            $insertId = $member->insertMemberRecord($username, $email, $password);
            if (! empty($insertId)) {
                header("Location: ../assignment1/index.php");
            }
        } else {
            $errorMessage[] = "User already exists.";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
     .btnRegister{
	    width: 400px;
	    height: 35px;
	    color: white;
	    background-color: #f28482;
	    border: 0px;
     }
     body {
    margin:50px 0; 
    padding:0;
    text-align:center;
    }
    input{
        width: 400px;
    }
    </style>
</head>
<body>
<iframe src="../assignment2/includes/nav_bar.php" frameborder="0" style="width: 100%;"></iframe>

<form name="frmRegistration" method="post" action="">
 <div>
     <h1 style=" color: green;"><b>Sign Up</b></h1>
     <p>By signing up, you agree to Awesome Shop's Term & Conditions</p>

     <?php
        if (! empty($errorMessage) && is_array($errorMessage)) {
            ?>	
                    <div class="error-message">
                    <?php 
                    foreach($errorMessage as $message) {
                        echo $message . "<br/>";
                    }
                    ?>
                    </div>
        <?php
        }
     ?>

     <input type="text" name="username" placeholder="name" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
     <br>
     <br>
     <input type="text" name="email" placeholder="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
     <br>
     <br>
     <input type="password" name="password" placeholder="password" value="">
     <br>
     <br>
     <input type="password" name="confirm_password" placeholder="confirm password" value="">
     <br>
     <br>
     <div>
        <input type="submit"
            name="register-user" value="register"
            class="btnRegister">
        </div>
     <br>
     <br>
     <p>Already have an account?<a href="" style=" color: green;">Sign In</a><br></p>
 </div>
    </form>

</body>
</html>