<br><br><br><br><br><br>
<?php  include("header.php"); 

///اتصال
$con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
{
	echo("ERROR : ". mysqli_connect_error());
}

$total=0;
if(isset($_GET["total"]))
{
	$total=$_GET["total"];
}
else
{
	?>
<script type="text/javascript">
	alert("قیمت دریافت نشد");

</script>
<?php

}
$username=$_SESSION["username"];
$name="SELECT * FROM user WHERE username='$username'";
$n=mysqli_query($con,$name);
if($nn=mysqli_fetch_array($n))
{
	$realname=$nn["urealname"];
}

if(isset($_POST["name"]) && !empty($_POST["name"]))
{
		$name=$_POST["name"];
		$tell=$_POST["tell"];
		$address=$_POST["address"];
		$postcode=$_POST["postcode"];
		$date=$_POST["date"];
	  
}
else
{
?>
<script type="text/javascript">
	alert("برخی از فیلد ها خالی هستند");
location.replace("order-pardakht.php");
</script>
<?php
}

$insert="INSERT INTO post(id,name,tell,address,postcode,date,price,codemain) VALUES('0','$name','$tell','$address','$postcode','$date','$total','2596713000000')";
if(mysqli_query($con,$insert))
{
	?>
<script type="text/javascript">
alert("عملیات پرداخت انجام شد");
	location.replace("index.php");
</script>
<?php
}
else{
	?>
<script type="text/javascript">
alert("عملیات پرداخت انجام شد");
		location.replace("index.php");

</script>

<?php
}
?>


<?php
include("footer.php");
?>