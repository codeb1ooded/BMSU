<?php
if(isset($_POST['save']))
{
	include 'new_prev.php';
	$con= mysqli_connect("localhost","root","","rti");
	if(!$con)
		die("Can not connect:" . mysql_error());
	session_start();
	$c=$_SESSION['oid'];
	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	$b=$_SESSION['uq'];
	
	while( $b!=0)
	{		
		$qno="q_no".$b;
		$ques="ques".$b;
		$map="map".$b;
		$ans="ans".$b;
		$date_s="date_s".$b;
		$date_r="date_r".$b;
		
		$qno1=$_POST[$qno];
		$ques1=$_POST[$ques];
		$map1=$_POST[$map];
		$ans1=$_POST[$ans];
		$date_s1=$_POST[$date_s];
		$date_r1=$_POST[$date_r];
		
		$d1=strtotime($_POST[$date_s]);
		$d2=strtotime($_POST[$date_r]);
		$d4=floor(abs($d2-$d1)/86400);
				
		$sql="INSERT INTO t2 (id,q_no,ques,map,ans,date_sent,date_received,days) 
		  VALUES('$c','$qno1','$ques1','$map1','$ans1','$date_s1','$date_r1','$d4')";
		
		mysqli_query($con,$sql);	
		$b--;
	}
	mysqli_close($con);
}
////////////////////////////////
if(isset($_POST['reply']))
{
	include 'logoff.html';
	$con= mysqli_connect("localhost","root","","rti");
	if(!$con)
	{
		die("Can not connect:" . mysql_error());
	}
	session_start();
	$c=$_SESSION['oid'];
	$data1="SELECT * FROM t2 WHERE id=".$c.";";
	$query=mysqli_query($con,$data1);
	$b=$_SESSION['uq'];
	while( $b!=0)
	{		
		$qno="q_no".$b;
		$ques="ques".$b;
		$map="map".$b;
		$ans="ans".$b;
		$date_s="date_s".$b;
		$date_r="date_r".$b;
		
		$qno1=$_POST[$qno];
		$ques1=$_POST[$ques];
		$map1=$_POST[$map];
		$ans1=$_POST[$ans];
		$date_s1=$_POST[$date_s];
		$date_r1=$_POST[$date_r];
		
		$d1=strtotime($_POST[$date_s]);
		$d2=strtotime($_POST[$date_r]);
		$d4=floor(abs($d2-$d1)/86400);
				
		$sql="INSERT INTO t2 (id,q_no,ques,map,ans,date_sent,date_received,days) 
		  VALUES('$c','$qno1','$ques1','$map1','$ans1','$date_s1','$date_r1','$d4')";
		
		mysqli_query($con,$sql);	
		$b--;
	}
	echo"The reply to the questions is furnished beneath as:";
	echo"<table width=100% border =2>";
	echo "<tr>
		<th>Question_num</th>
		<th>Question</th>
		<th>Reply</th>
	    </tr>";
	
	$query="SELECT * FROM t2 WHERE id = ".$c.";";
	$res=mysqli_query($con,$query);
	
	while($r=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>".$r['q_no']."</td>";
		echo "<td>".$r['ques']."</td>"; 
		echo "<td>".$r['ans']."</td>";
		echo "</tr>";
	}
	echo"</table>";
	echo "<a href='new_prev.php'><input type=submit value=Exit name='save' /></a>";
	mysqli_close($con);
}
session_destroy();
?>