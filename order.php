<?php
if(isset($_POST['submit']))
{
try{
$h = "localhost";
$un =  "root";
$psw = "";
$db = "taxi";

$name=$_POST['name'];
$email=$_POST['Email'];
$ps =$_POST['pssanger'];
$pickupadd =$_POST['pickupadd'];
$dropadd=$_POST['dropadd'];
$date=$_POST['date'];
$time=$_POST['time'];
$type=$_POST['cartype'];

if($name=="")
{
    $error = "Name cannot be Empty!";
}
else if(!preg_match("/^[a-zA-Z ]*$/",$name))
{
    $error = "Name cannot be containtn Numbers and special caractor";
}
else if($email=="")
{
    $error = "Email cannot be Empty!";
}
else if($type=="0"||$type=="")
{
    $error = "Please select the vehicle type";
}
else if($type=="suv"&&$ps>3)
{
        $error="Too much pasenger please select other vehicle";
}
else if($type=="sedan"&&$ps>3)
{
        $error="Too much pasenger please select other vehicle";
}
else if($type=="luxery"&&$ps>3)
{
        $error="Too much pasenger please select other vehicle";
}
else if($type=="bus"&&$ps>54)
{
        $error="Too much pasenger please select other vehicle";
}
else if($type=="van"&&$ps>12)
{
        $error="Too much pasenger please select other vehicle";
}
else if($type=="mini_van"&&$ps>6)
{
        $error="Too much pasenger please select other vehicle";
}
else if($pickupadd=="")
{
    $error = "Pick up Address cannot be Empty!";
}
else if($dropadd =="")
{
    $error = "Drop Address cannot be Empty!";
}
else if($date=="")
{
    $errpr="Date cannot Be Empty!";
}
else if($time=="")
{
    $error="Time Cannot Be Empty!";
}
else
{
$con = mysqli_connect($h,$un,$psw,$db);

$sql = "INSERT INTO orderr (name, email, passeng, picadd, dropadd, datee, timee, v_type) VALUES ('$name', '$email', '$ps', '$pickupadd', '$dropadd', '$date', '$time', '$type')";

$con-> query($sql);

if($con-> connect_error)
{
    $error = "Somthing went Wrong!! check again";
}
else 
{
    echo "<script>
alert('You Sucessfully Order please wait our cab on the way!! Thank-you to choose Us.  have a Good Day!! ');
window.location.href='orderhistory.php';
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

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap/fonts/icomoon/style.css">

    <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">

    <link rel="stylesheet" href="bootstrap/css/animate.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Poppins:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <style>
        .container .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}
body{
    background-color: black;
}
#orh4{
    color: white; 
    font-weight: bold;  
}
#orh1{
    color: white;
    font-weight: bold;
    font-size: 50px;
}
#orp{
    color: white;
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
    .error{
            color:#FF0000;
            margin-bottom:5px;
            text-align: center;
        }

    </style>
</head>
<body>

    <div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar">
  <img src="img/yan taxi.jpg" alt="Picture Not Found" class="navbar-brand">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav m-auto" id="navv">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php/#vehiheder">Vehicle</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="order.php">Order now</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orderhistory.php">Order History</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About us</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="services.html">Services</a>
      </li>
    </ul>
  </div>
</nav>

  </div>



    <div class="content">
    
        <div class="site-blocks-cover">
          <div class="img-wrap">
            <div class="owl-carousel slide-one-item hero-slider">
              <div class="slide">
                <img src="img/1.jpg" alt="Image not Found">  
              </div>
              <div class="slide">
                <img src="img/2.jpg" alt="Image not Found">  
              </div>
              <div class="slide">
                <img src="img/3.jpg" alt="Image not Found">  
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-6 ml-auto align-self-center">
                <div class="intro">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <div class="container" style="margin-top:50px;" id="orderr">
        <div class="row">
            <div class="col-4">
                <br><br>
                <h4 id="orh4">Loking For Taxi?</h4>
                <h1 id="orh1">Make your</h1>
                <h1 id="orh1">booking</h1>
                <p id="orp">Our taxis commit to make your trips unique</p>
                <p id="orp">by best answering your needs</p>
            </div>
            <div class="col-8">
<form name="order" action="order.php" method="POST">
    <div class="row">
        <div class="col">
    <div class="form-group">
        <input type="text" name="name" class="form-control item" id="name" placeholder="Your Name">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <input type="email" name="Email" class="form-control item" id="emaill" placeholder="Email Address">
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col">
    <div class="form-group">
    <select class="form-control item" name="cartype" id="exampleFormControlSelect1">
      <option value="0">-select vehicle-</option>
      <option value="suv">Suv</option>
      <option value="sedan">Sedan</option>
      <option value="luxery">luxery</option>
      <option value="bus">Bus</option>
      <option value="van">Van</option>
      <option value="mini_van">Mini Van</option>
    </select>
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <input type="text" name="pickupadd" class="form-control item" id="pickup" placeholder="Pick up address">
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col">
    <div class="form-group">
        <input type="text" name="dropadd" class="form-control item" id="dropadd" placeholder="Drop off address">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
        <input type="date" name="date" class="form-control item" id="date" placeholder="Select date">
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col">
    <div class="form-group">
        <input type="time" name="time" class="form-control item" id="time" placeholder="Select Time">
    </div>
    </div>
    <div class="col">
    <div class="form-group">
    <input type="number" name="pssanger" class="form-control item" id="passenger" placeholder="Passengers #">
    </div>
    </div>
    <div class="error"><?php if(isset($_POST['submit'])) {echo $error; } ?></div>
    <button type="submit" name="submit" class="btn btn-primary btn-block item">Order</button>
    </div>
</form>
</div>
</div>
    </div>
    <br><br>
    <footer>
        <img src="img/fotter.png" alt="picture not found" class="fotterimg">
      </footer>

    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/owl.carousel.min.js"></script>
    <script src="bootstrap/js/main.js"></script>
    <script>
        $(document).ready(function(){
  $(window).scroll(function(){
  if($(window).scrollTop() > 60 ){
  $('.my-navbar').addClass('navbar-scroll');
  }
  else{
  $('.my-navbar').removeClass('navbar-scroll');
  }
  });
  });
      </script>

</body>
</html>