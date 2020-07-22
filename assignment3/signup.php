<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
     button{
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

<form action="sign up">
 <div>
     <h1 style=" color: green;"><b>Sign Up</b></h1>
     <p>By signing up, you agree to Awesome Shop's Term & Conditions</p>
     <input type="text" name="username" placeholder="name">
     <br>
     <br>
     <input type="text" name="email" placeholder="email">
     <br>
     <br>
     <input type="password" name="password" placeholder="password">
     <br>
     <br>
     <input type="password" name="verify_pwd" placeholder="confirm password">
     <br>
     <br>
     <button type= "submit">Continue</button>
     <br>
     <br>
     <p>Already have an account?<a href="" style=" color: green;">Sign In</a><br></p>
 </div>
    </form>
</body>
</html>