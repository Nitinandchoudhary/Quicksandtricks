<html>
<head>
	<title>Course recommendation system</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container" style="margin-top: 5%;">
	<h2>I'll Help you in choosing course based on your interest</h2>
	<div style="margin-top: 100px">
		<div>
			<form method="POST">
				<p>What is your background degree/course</p>
				<select name="background" class="browser-default custom-select" required>
					<option value="" disabled selected>Select the course</option>
					<option value="commerce">PU Commerce</option>
					<option value="Arts">PU Arts</option>
					<option value="Science">PU Science</option>
					<option value="B.com">B.com</option>
					<option value="B.A">B.A</option>
					<option value="BBA">BBA</option>
					<option value="BBM">BBM</option>
					<option value="BMS">BMS</option>
					<option value="B.Sc">B.Sc</option>
					<option value="BCA">BCA</option>
					<option value="B.Tech">B.Tech</option>
					<option value="B.Design">Bachelor of Design</option>
				</select>

				<br><br>
				<p>And the percentage(Format(no % sign): 85)</p>
				<input type="text" class="form-control" name="percentage" required>

				<br><br>
				<p>What you want to study?</p>
				<select name="interest" class="browser-default custom-select" required>
					<option>Select the course</option>
					<option value="B.com">B.com</option>
					<option value="B.A">B.A</option>
					<option value="BBA">BBA</option>
					<option value="BBM">BBM</option>
					<option value="BMS">BMS</option>
					<option value="B.Sc">B.Sc</option>
					<option value="BCA">BCA</option>
					<option value="B.Tech">B.Tech</option>
					<option value="B.Design">Bachelor of Design</option>
					<option value="M.Sc(IT)">M.Sc(IT)</option>
					<option value="M.A">M.A</option>
					<option value="M.com">M.com</option>
					<option value="MBA">MBA</option>
					<option value="MMA">MMA</option>
					<option value="MCA">MCA</option>
					<option value="PGD">PGD</option>
					<option value="PGDIT">PGDIT</option>
					<option value="LLM">LLM</option>
					<option value="PGDM">PGDM</option>
					<option value="MBA PGD">MBA PGD</option>
					<option value="PGDM MBA">PGDM MBA</option>
					<option value="M.design">Master of Design</option>
					<option value="M.Tech">M.Tech</option>
				</select>
				<br>
				<br>
				<div align="center">
				<input class="btn btn-primary" type="submit" name="submit">
			    </div>
			</form>
		</div>
	</div>

	<!-- Result -->
	<div>
		<?php 
		if(isset($_POST['submit'])){
			// require 'dbconnection.php'; 
			$link = mysqli_connect("localhost", "root", "", "jain") or die(mysqli_connect_error());
			
			$background = mysqli_real_escape_string($link, $_POST['background']);
			$percentage = mysqli_real_escape_string($link, $_POST['percentage']);
			$interest = mysqli_real_escape_string($link, $_POST['interest']);

			// // $q = "select course_id from courses where course_id='$interest'";
			// // $r = mysqli_query($link, $q) or die(mysqli_error());
			// // $r2=mysqli_fetch_array($r)
			// // $B_id = $r2['course_id'];
			
			$JET = "";
			$comment = "";
			
			$q = "select course_id from courses where background_course='$interest'";
			$r = mysqli_query($link, $q) or die(mysqli_error($link));
			$r1 = mysqli_fetch_assoc($r);
			$I_id = $r1['course_id'];

			
			// $result = $link->query($q);
			// $followingdata = $result->fetch_assoc();
			// echo $followingdata['course_id'];

			$sql = "select * from recommends where course_id='$I_id'";
			$result = mysqli_query($link, $sql) or die(mysqli_error($link));

			
			// $criteria = $result['criteria'];
			if($r2=mysqli_fetch_assoc($result))
			{
				
				$JET = $r2['JET'];
				$bb = $r2['back_ids'];
				$comment = $r2['comment'];
					
			}
			else
			{
				// echo die(mysqli_error($result));
				echo "error";
			}
			
		?>

		<br><br>

		<h3>JET</h3> 
		<h5 style="color: grey"><i class="fa fa-check" style="color: green" aria-hidden="true"></i> <?php echo $JET; ?></h5>
		
		<br><br>

		<h3>Minimum Qualification</h3>
		<h5 style="color: grey"><?php echo $comment; ?></h5>
		<?php 
		}
		?>

	</div>
</div>


<!-- Scripts -->
<script type="text/javascript">
$(document).ready(function() {
$('.mdb-select').materialSelect();
});	
</script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>