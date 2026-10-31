<?php include("header.php"); 
?>
<br><br><br><br><br>
<?php
if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true))
{
	?>
<style type="text/css">
	.main{
		
		margin-top: 200px;
		width: 100%;
		background-color: aqua;
	}
</style>
<div class="main">
<script type="application/javascript">
location.replace("index.php");
</script>
<?php
}

if(isset($_POST["procode"]) && !empty($_POST["procode"]) &&
  isset($_POST["count"]) && !empty($_POST["count"]) &&
   isset($_POST["proprice"]) && !empty($_POST["proprice"]) &&
   isset($_POST["totalprice"]) && !empty($_POST["totalprice"]) &&
   isset($_POST["tel"]) && !empty($_POST["tel"]) &&
   isset($_POST["addres"]) && !empty($_POST["addres"]))
 
{
$code=$_POST["procode"];
$count=$_POST["count"];
$price=$_POST["proprice"];
$total=$_POST["totalprice"];
$mobile=$_POST["tel"];
$address=$_POST["addres"];

$user=$_SESSION["username"];
$date=date("y-m-d");
}
else
{
	echo("cant find");
exit();
}
	


$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	exit(mysqli_connect_error());

$insert="INSERT INTO sefaresh(id,date,username,procode,proqty,proprice,mobile,address,state,trackcode)
VALUES('0','$date','$user','$code','$count','$price','$mobile','$address','0','000000000000000000000000')";
if(mysqli_query($link,$insert))
{
	echo("insert  ok");
	$qq="UPDATE product SET proqty=proqty-$count WHERE procode=$code";
	if(mysqli_query($link,$qq))
	{
		echo("yes up");
	}
	else
		echo("no update ");
}
else{
	echo("insert not ok");
}
?>
	</div>
