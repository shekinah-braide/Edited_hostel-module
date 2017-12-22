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
	$con=mysqli_connect("localhost","root","stib");
	mysqli_select_db ($con, "hostel");
	$sql = "SELECT * FROM hostels INNER JOIN allocated WHERE hostels.bedid = allocated.bedid AND matno = '".$_SESSION['matno']."'";
	$result = mysqli_query($con, $sql);
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
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Hostels</span></a></li>
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
							<center><img src="assets/images/logo-icon.png"  width="70"/><h2 class="card-title">Hostel Bedspace Allocation <?php echo date("Y");?>/<?php echo date("Y")+1;?></h2><br/></center>
									<p><h4 class="card-subtitle">
									<?php
	
										$con=mysqli_connect("localhost","root","stib");
										mysqli_select_db ($con, "hostel");
										$sql = "SELECT * FROM hostels INNER JOIN allocated WHERE hostels.bedid = allocated.bedid AND matno = '".$_SESSION['matno']."'";
										$result = mysqli_query($con, $sql);
											if($result->num_rows > 0){
												while($row = $result->fetch_assoc())
												{
													
													$output .= "
													This is to certify that <b>".$row["hostel"].": ".$row["wing"]." / ".$row["room"]." [Bedspace: ".$row["bedspace"]."]</b>, has been assigned to the student bearing the Matriculation Number, 
															<b>$matno</b>. He/She is granted the right to stay in the school hostel till the session closes.
															<br/>
															<br/>
															NOTE:<br/>
															1. You are not permitted to allow any student to squart in your bed space<br/>
															2. You are not to damage any property of the school during your stay in the hostel<br/>
															3. Always report to the porter ifyou notice any activity that goes against school conducts<br/>
															<br/>
															<br/>
															<br/>
															Thanks<br/>
															Management</p> 	
															<br/>
													<div class='form-group col-md-6'>
													<input name = 'SortBtn' type = 'submit' class='btn btn-outline-secondary' value = ' Print Statement '>";
													
												}
											}else{
												$output = "<center><h4 class='card-title'>You have not paid your hostel fees
												or completed your application.<br/><br/> <a href=index.php> Pay Now </a> or <a href=hostel_specification.php>Continue </a></h4></center>";
											}
										?>
									
									<?php echo $output; ?>
						</div>
						
                <!-- Column -->
                </div>
			</div>
            
        </div>
		<footer class="footer">
                © 2017 Ken Saro Wiwa Polytechnic
            </footer>
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