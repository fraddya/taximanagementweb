<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <style>
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
    </style>

</head>
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
  <br><br><br>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Order History</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> Invoice ID </td>
                                <td> Name </td>
                                <td> Email </td>
                                <td> passenger </td>
                                <td> pickup address </td>
                                <td> Drop address </td>
                                <td> Date </td>
                                <td> Time </td>
                                <td> Vehicle Type </td>
                                <td> edit </td>
                                
                            </tr>
                            <tr>
                                <?php
                                $h = "localhost";
                                $un =  "root";
                                $psw = "";
                                $db = "taxi";
                                
                                $con = new mysqli($h,$un,$psw,$db);
                                
                                if ($con->connect_error){
                                    die("Connection faild: " . $con->connect_error);
                                }

                                $sql = "SELECT * FROM orderr";
                                $result = $con->query($sql);

                                if(!$result){
                                    die("Invalid queary: " . $con->error);
                                }

                                while($row = $result->fetch_assoc())
                                {
                                    echo"
                                    <tr>
                                    <td>$row[Invoice_id]</td>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[passeng]</td>
                                    <td>$row[picadd]</td>
                                    <td>$row[dropadd]</td>
                                    <td>$row[datee]</td>
                                    <td>$row[timee]</td>
                                    <td>$row[v_type]</td>
                                    <td>
                                    <a class='btn btn-primary btn-sm' href='cancelorder.php?Invoice_id=$row[Invoice_id]'>Cancel Order</a></td>
                                    </tr>
                                    ";
                                }
                                    ?>
                                
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>