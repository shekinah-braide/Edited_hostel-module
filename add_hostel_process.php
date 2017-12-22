<?php
$con=mysqli_connect("localhost","root","stib");
mysqli_select_db ($con, "hostel");
if(isset($_POST['signupBtn'])) 
{   
		$hostel = $_POST['hostel'];
		$wing = $_POST['wing'];
		$room = $_POST['room'];
		$bedspace = $_POST['bedspace'];
		$bedid = $_POST['bedid'];
		$status = $_POST['status'];
        
				
		$q=mysqli_query($con,"insert into hostels(hostel,wing,room,bedspace,bedid,status)
		values('$hostel','$wing','$room','$bedspace','$bedid','$status')");
if($q)
		{
			echo '<script>alert("Thanks for adding a bedspace.");';
			echo 'window.location= "new_hostels.php";</script>';
			
		}
		else{
			
			echo '<script>alert("Something is wrong, check again.");';
			echo 'window.location= "add_hostel.php";</script>';
		}

}	
?>

