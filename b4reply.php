<!-- After reply-->
<!doctype html>
<html>
<head>
	<title>Before Reply Form</title>
	<link rel="stylesheet" href="css/background.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jQuery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php
	$Id = $_GET['id'];
	echo "<br><h3>Add Details of RTI with Id: ".$Id."</h3>";
?>
	<h4><strong>(IV)Reference u/s 7 of RTI Act (where applicable):</strong></h4>
	<form action='replysection4.php' method=post>
		<table class="table table-bordered">
			<tr>
				<th> Date of intimation given to appelant regarding fee u/s</br> 7(1) chargeable  and his right to review</th>
				<th><input type="text" style="height:32px" name="info_fee_date" id="Name" value="" placeholder="YYYY-MM-DD"></th>
			</tr>
			
			<tr>
				<th>Quantum of<br>(a) Fee & (b) Further fee indicated to be charged</th>
				<th><input type="text" style="height:32px" name="info_fee" id="Name" value="" class="name" placeholder=""></th>
			</tr>
			
			<tr>
				<th>(vi)Date of depositing fees by petitioner as demanded by CPIO </br>(indicate mode of depositing fee too)</th>
				<th><input type="text" style="height:32px" name="fee_submit_date" id="Name" value="" class="name" placeholder="YYYY-MM-DD"></th>
			</tr>
			
			<tr>
				<th>(vii)Date of furnishing information </th>
				<th><input type="text" style="height:32px" name="given_info_date" id="Name" value="" class="name" placeholder="YYYY-MM-DD"></th>
			</tr>
		</table>
	
<?php
	echo "<input type='submit' value ='Save and Exit' class=btn name='submitSection4'>" ;
	echo "&nbsp&nbsp<a class='btn' href='previd.php?id=".$Id."''>Back</a>" ;
?>
</form>
</div>
</body>
</html>