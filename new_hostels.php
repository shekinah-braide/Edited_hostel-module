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
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" width="70"/>
                        </span>
                    </a>
                </div>
            </nav>
        </header>
        <div class="page-wrapper">
        <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Add New Bedspace</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                        <div class="card-body">
                                <h4 class="card-title">Bedspace Information</h4>
                                <h6 class="card-subtitle">
						<form action="add_hostel_process.php" method="POST">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="form1-name" class="col-form-label">Hostel Name</label>
                                    <select name="hostel" class="custom-select d-block col-md-3" id="form1-state" required>
                                        <option >E.g Liverpool Hostel <option>
                                        <option >Liverpool Hostel</option>
										<option >Annex Hostel</option>
										<option >ETF Hostel</option>
										<option >Diamond Hostel</option>
                                    </select>
								</div>
                                <div class="form-group col-md-6">
                                    <label for="form1-email" class="col-form-label">Hostel Wing</label>
                                    <select name="wing" class="custom-select d-block col-md-3" id="form1-state" required>
                                        <option >Choose Hostel Wing<option>
                                        <option >Wing A</option>
										<option >Wing B</option>
										<option >Wing C</option>
										<option >Wing D</option>
                                    </select>
								</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="form1-password">Room Number</label>
                                    <input type="text" name="room" class="form-control" id="form1-password" placeholder="eg Room A4" required>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="form1-state">Bedspace</label>
                                    <select name="bedspace" class="custom-select d-block col-md-3" id="form1-state" required>
                                        <option >Choose Bedspace<option>
                                        <option >Up</option>
										<option >Down</option>
                                    </select>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="form1-zip">Bed ID</label>
                                    <input  name="bedid"  type="text" class="form-control" id="form1-zip" value="HS/<?php echo rand(1,1000000);?>" readonly>
                                </div>
								<div class="col-md-3 mb-4">
                                    <label for="form1-zip"></label>
                                    <input  name="status"  type="hidden" class="form-control" id="form1-zip" value="Available" readonly>
                                </div>
                            </div>
							<button href="" type="submit" class="btn btn-outline-secondary" name="signupBtn"> Add Bedspace </button>
                        </form>

                            </div>
                        </div>

                    </div>
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