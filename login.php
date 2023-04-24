<?php
if(isset($_POST['submit']))
{

$h = "localhost";
$un =  "root";
$psw = "";
$db = "taxi";

$email =$_POST['Email'];
$ps =$_POST['pass'];

$con = mysqli_connect($h,$un,$psw,$db);

$sql = "SELECT * FROM registration WHERE Email='$email' AND ps='$ps'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1)

{
    header("location:home.php");
}

else {
    $error = "Incorrect username or password";
}

}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width", initial-scalr="0.1" />
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <script src="bootstrap/js/bootstrap.js"></script> 
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style>
        html,
        body{
            height:100%;
            background-color: #222d32;
            font-family: "Roboto", sans-serif;
        }

        .global-container{
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: darkorange;
        }

        form{
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30px;
        }

        .login-form{
            width: 380px;
            height: 450px;
            margin: 20px;
            background: #1a2226;
            border-radius: 10px;
        }

        input[type="email"],
        input[type="password"]{
            background: #1a2226;
            border: 2px solid darkorange;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border: none;
            background: #1a2226;
            margin: 0;
            color: #fff;
        }

        .card-title {
            font-weight: 900;
            padding-top: 20px;
        }

        .btn{
            background: darkorange;
            font-size: 14px;
            transform: translateY(10px);
            border-radius: 10px;
        }

        .signup {
            text-align: center;
            padding-top: 25px;
        }
        .error{
            color:#FF0000;
            margin-bottom:5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">Login</h1>
                <div class="card-text">
                    <form name="login" action="login.php" method="POST">
                        <div class="form-group">
                            <lable for="emaill">Email Address</lable>
                            <input type="email" name="Email" class="form-control form-control-sm" id="emaill">
                        </div>
                        <div class="form-group">
                            <lable for="password1">Password</lable>
                            <a href="#" style="float: right; font-size: 12px;">Forgot Password?</a>
                            <input type="password" name="pass" class="form-control form-control-sm" id="password1">
                        </div>
                        <div class="error"><?php if(isset($_POST['submit'])) {echo $error; } ?></div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>

                        <div class="signup">Dont have an account?<a href="registration_Form.php">Create One</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>