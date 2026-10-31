<?php include("header.php"); ?>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
//دریافت متغییر 
$id=0;
if(isset($_GET["id"]))
	$id=$_GET["id"];
    $username=$_SESSION["username"];
//connect
$con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	echo("ERROR : ". mysqli_connect_error());

//کد حذف
$delete="DELETE  FROM sabad WHERE username='$username' AND procode='$id'";
if(mysqli_query($con,$delete))
{
	?>
<script type="text/javascript">
alert("حذف با موفقیت انجام شد ");
	location.replace("sabadshow.php");
</script>
<?php
}
else{
	?>
<script type="text/javascript">
alert("حذف نشد");
	location.replace("sabadshow.php");
</script>
<?php
}

?>
<?php include("footer.php"); ?>