<?php
if(isset($_POST['submit']))
{
try{
$h = "localhost";
$un =  "root";
$psw = "";
$db = "taxi";

$name=$_POST['name'];
$add=$_POST['add'];
$email =$_POST['Email'];
$ps =$_POST['psw'];
$cps=$_POST['copsw'];
$gen=$_POST['gender'];

if($name=="")
{
    $error = "Name cannot be Empty!";
}
else if(!preg_match("/^[a-zA-Z ]*$/",$name))
{
    $error = "Name cannot be containtn Numbers and special caractor";
}
else if($add=="")
{
    $error = "Address cannot be Empty!";
}
else if($email=="")
{
    $error = "Email cannot be Empty!";
}
else if($ps=="")
{
    $error = "Password cannot be Empty!";
}
else if($cps=="")
{
    $error = "confirm password cannot be Empty!";
}
else if($ps!=$cps)
{
    $error = "password & confirm password not same";
}
else if($gen =="")
{
    $error = "please select Gender";
}
else
{

$con = mysqli_connect($h,$un,$psw,$db);

$sql = "INSERT INTO registration VALUES ('$name', '$add', '$email', '$ps', '$cps', '$gen')";

$con-> query($sql);

if($con-> connect_error)
{
    $error = "Somthing went Wrong!! check again";
}
else 
{
    echo "<script>
alert('You Sucessfully registed please log in ');
window.location.href='login.php';
</script>";
}
}
}
catch(Exception $e){
    $error = "Somthing went Wrong!! check again " .$e->getMessage();
}
}

?>


<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <script src="bootstrap/js/bootstrap.js"></script> 
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-image: url(img/first.jpg);
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Times New Roman', Times, serif;

        }
        .error{
            color:#FF0000;
            margin-bottom:5px;
            text-align: center;
        }
        .menu{
  position:relative;
  width:90%;
  z-index:9999;
  }

  #navv{
    right: 0px;
  }
  .my-navbar{
  width:100%;
  padding:20px 20px;
  background-color: #FB8A02;
  position:absolute;
  top:20px;
  left:0;
  z-index:999;
  box-shadow:0px 2px 10px rgba(0,0,0,0.2);
  }
  
  .nav-item .nav-link{
  font-family:'Oswald', sans-serif;
  font-size:15px;
  font-weight:300;
  text-transform:uppercase;
  margin:0px 10px;
  position:relative;
  color:black;
  }
  
  .nav-item .nav-link:before{
  position:absolute;
  left:0;
  content:"";
  bottom:0;
  width:100%;
  height:2px;
  transform:scaleX(0);
  transform-origin:left;
  background-color:brown;
  transition:0.5s;
  }
  
  
    .nav-item .nav-link:hover:before{
	  transform:scaleX(1);
  transform-origin:right;
	}
	.navbar-brand{
	text-transform:capitalize;
	color:#2f3542;
	font-style:italic;
	font-family:'Oswald', sans-serif;
	font-weight:bold;
    width: 190px;
    height: 80px;
	}
	
	.navbar-scroll{
	position:fixed;
	top:0;
	left:0;
	width:100%;
	background-color:rgba(255,138,0,1);
	padding:5px 20px;
	transition:0.5s;
	animation:scroll 0.6s 1;
	}
	
	@keyframes scroll{
	0%{transform:translateY(-100%);}
	100%{transform:translateY(0%);}
	}
        h1{
            font-size: 40px;
            color: white;
            margin-top: 250px;
        }
        p{
            font-size: 17px;
            color: white;
        }
        h3{
            font-size: 25px;
            color: white;
        }
        .col-md-5{
            margin-top: 200px;
            margin-left: 400px;
            box-shadow: -1px 1px 60px 10px black;
            background: rgb(0,0,0,0.4);
        }
        .lable{
            font-weight: normal;
            margin-top: 15px;
            color: white;
            font-size: 19px;
        }
        .form-control{
            background: transparent;
            border-radius: 0px;
            border: 0px;
            border-bottom: 1px solid white;
            font-size: 18px;
            margin-top: 15px;
            height: 40px;
            color: white;
        }
        input[type="checkbox"]{
            margin-top: 15px;
            width: 15px;
            height: 15px;
        }
        small{
            font-size: 18px;
            color: white;
        }
        input[type="radio"]{
            margin-top: 22px;
        }/*
        .btn-info{
            margin-top: 20px;
            font-size: 18px;
            width: 120px;
            margin-left: 80px;
            margin-bottom: 20px;
        }
        .btn-warning{
            margin-top: 20px;
            font-size: 18px;
            width: 120px;
            margin-left: 80px;
            margin-bottom: 20px;
        }*/
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
           
            <div class="col-md-5">
            <form name="registration" action="registration_Form.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left">Registration Form</h3>
                    </div>
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </div>
                    <hr>
                    <div class="row">
                        <label class="lable col-md-2 control-lable">Name</label>
                        <div class="col-md-10">
                            <input type="name" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="row">
                        <label class="lable col-md-2 control-lable">Address</label>
                        <div class="col-md-10">
                            <input type="address" class="form-control" name="add" placeholder="Address">
                        </div>
                    </div>
                    <div class="row">
                        <label class="lable col-md-2 control-lable">E-mail</label>
                        <div class="col-md-10">
                            <input type="Email" class="form-control" name="Email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <label class="lable col-md-2 control-lable">Password</label>
                        <div class="col-md-10">
                            <input type="Password" class="form-control" name="psw" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <label class="lable col-md-2 control-lable">confirm password</label>
                        <div class="col-md-10">
                            <input type="Password" class="form-control" name="copsw" placeholder="Confirm Password">
                            <input type="checkbox"> <small>Remember me</small>
                        </div>
                    </div>
                    <div class="row">
                        <label class="lable col-md-2 control-lable">Gender</label>
                        <div class="col-md-10">
                            <input type="radio" name="gender" value="male"> <small>Male</small>
                            <input type="radio" name="gender" value="female"> <small>Female</small>
                            <br><br>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                    <input class="btn btn-dark" type="reset" value="Reset">
                    <a class="btn btn-warning" href="login.php" role="button">Cancel</a>
                    <div class="error"><?php if(isset($_POST['submit'])) {echo $error; } ?></div>
                </div>
    </form>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <br><br><br><br>
    <footer>
        <img src="img/fotter.png" alt="picture not found" class="fotterimg">
      </footer> 
</body>
</html>