<?php
session_start();
$_SESSION['matno'] = 'HA15/0556';

	$StudentID = $_SESSION['matno'];
	include "dbconnect.php";
	$sql = "SELECT * FROM register WHERE matno = '$StudentID'";
	$result = $conn->query($sql) or die("Failed");
	$rows = $result->fetch_assoc();
	
	$_SESSION["matno"] = $rows["matno"];
	
	 
	$name = $rows["name"];
	$matno = $rows["matno"];
?>

<?php 
if(isset($_REQUEST["payBtn"])){
    include "dbconnect.php";
    $Username = $_REQUEST["matno"];
         
    
  
    $sql="SELECT * FROM allocated WHERE matno ='$Username'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();
    
    $User=$rws["matno"];
     
    
    if($User==$Username){
		
     echo '<script>alert("You have done your hostel application already!!");';
        echo 'window.location= "index.php";</script>';    
    }
   
	else{
		header("refresh:0; url=https://paystack.com/pay/jr5yvpmez0");
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Kenpoly - Hostel Allocation</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header card-no-border fix-sidebar">
     <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Kenpoly</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <span>
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" width="70"/>
                        </span>
                    </a>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Hostels</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="show_hostel.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Print Statement</span></a></li>
						<li> <a class="waves-effect waves-dark" href="logout.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                </div>
                <div class="row">
                    <!-- Column -->
                <div class="col-lg-12 col-xlg-9 col-md-7">
                <div class="card">
                        <div class="card-body">
								<div class="card-body">
								<h6 class="card-subtitle"> 
								<center><img src="assets/images/logo-icon.png"  width="70"/><h2 class="card-title">Hostel Bedspace Allocation <?php echo date("Y");?>/<?php echo date("Y")+1;?></h2><br/></center>
								<p><h4 class="card-subtitle">Welcome dear student, to begin your hostel application you have to pay first.
								Click on the button to get started. Please follow the instructions accordingly.
								<br/>
								<br/>
								Thanks, Management
							</div>
						</div>
						<form action="" method="POST">
						<input type="hidden" name="matno" value="<?php echo $matno ?>">
						<center><div class="form-group col-md-6">
							<input name = "payBtn" type = "submit" class="btn btn-outline-secondary" value = " Proceed to Payment ">
						</div></center>
						</form>
                <!-- Column -->
                </div>
			</div>
            <footer class="footer">
                © 2017 Ken Saro Wiwa Polytechnic
            </footer>
        </div>
    </div>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>