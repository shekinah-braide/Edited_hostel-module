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
	if(isset($_REQUEST['SortBtn'])){
		$hostel = $_POST['hostel'];
		$session = $_POST['session'];
	}
	
?>
<?php 
$con=mysqli_connect("localhost","root","stib");
mysqli_select_db ($con, "hostel");
if(isset($_POST["testBtn"]))
{
$sql = "UPDATE hostels SET status = 'Taken' WHERE bedid='$_POST[bedid]'";
	if(mysqli_query($con,$sql)) 
	header("refresh:0;");
}
?>
<?php
$con=mysqli_connect("localhost","root","stib");
mysqli_select_db ($con, "hostel");
if(isset($_POST['testBtn'])) 
{
	    $matno = $_POST['matno'];
		$name = $_POST['name'];
		$session = $_POST['session'];
		$bedid = $_POST['bedid'];
				
		$q=mysqli_query($con,"insert into allocated(matno,name,session,bedid) values('$matno','$name','$session','$bedid')");
		if($q)
		{
			echo '<script>alert("Thanks for choosing a bedspace! Print your statement later.");';
			echo 'window.location= "index.php";</script>';
			
		}
		else{
			
			echo '<script>alert("Something is wrong, check again.");';
			echo 'window.location= "register.php";</script>';
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
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Hostel Specification</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                <div class="col-lg-6 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
								<div class="card-body">
									<h4 class="card-title">Personal Information</h4>
									<h6 class="card-subtitle"> 
								<form action="" method="POST">
										<div class="row">
											<div class="form-group col-md-6">
												<label for="form1-name" class="col-form-label">Name</label>
												<input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="form1-name" required placeholder="E-Pin ">
											</div>
											<div class="form-group col-md-6">
												<label for="form1-name" class="col-form-label">Matriculation Number</label>
												<input type="text" name="matno" value="<?php echo $matno ?>" class="form-control" id="form1-name" required placeholder="Matric Number ">
											</div>
											<div class="form-group col-md-6">
												<label for="form1-name" class="col-form-label">Fee Status</label>
												<input type="text"  class="form-control" value = "Paid" id="form1-name" readonly ">
											</div>
											<div class="form-group col-md-6">
												<label for="form1-name" class="col-form-label">Session</label>
												<select name = "session" class="custom-select d-block col-md-3" id="form1-state">
													<option value=""><?php echo date("Y");?>/<?php echo date("Y")+1;?> </option>
												</select>
											</div>
										</div>
								</div>
							</div>
						</div>
                <!-- Column -->
                </div>
				<div class="col-lg-6 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
							<div class="card-body">
                                <h4 class="card-title">Bedspace Information</h4>
                                <h6 class="card-subtitle">Step 1: See available Bedspace 
								
									<div class="row">
										<div class="form-group col-md-9">
											<select name = "hostel" class="custom-select d-block col-md-3" id="form1-state">
												<option>Search For available Bedspace</option>
												<option <?php if(isset($_REQUEST['SortBtn'])){if($hostel == 'Liverpool Hostel')echo 'selected';}?>>Liverpool Hostel</option>
												<option <?php if(isset($_REQUEST['SortBtn'])){if($hostel == 'Annex Hostel')echo 'selected';}?>>Annex Hostel</option>
												<option <?php if(isset($_REQUEST['SortBtn'])){if($hostel == 'ETF Hostel')echo 'selected';}?>>ETF Hostel</option>
												<option <?php if(isset($_REQUEST['SortBtn'])){if($hostel == 'Diamond Hostel')echo 'selected';}?>>Diamond Hostel</option>
											</select>
										</div>
										<div class="form-group col-md-3">
											<input name = "SortBtn" type = "submit" class="btn btn-outline-secondary" value = " Search ">
										</div>
										<div class="form-group col-md-12">
										<h6 class="card-subtitle">Step 2: Choose your Bedspace 
										<label for="form1-name" class="col-form-label"></label>
										<select name="bedid" class="custom-select d-block col-md-3" required>
										<option>Choose your Bedspace</option>
											<?php
											if($stmt=$conn->query("SELECT * FROM hostels WHERE status = 'Available' AND hostel = '$hostel'"))
											{
												while($row=$stmt->fetch_assoc())
												echo "<option value = '$row[bedid]' required>".$row['hostel'].": ".$row['wing']." / ".$row['room']." /Bedspace [ ".$row['bedspace']." ]</option>";?>      
											
											<?php   }   ?>
											
										</select>
										</div>
										<div class="form-group col-md-6">
											<input name = "testBtn" type = "submit" class="btn btn-outline-secondary" value = " Choose Bedspace ">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
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