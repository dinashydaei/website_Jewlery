<br><br><br>
<br><br><br>
<br><br><br>

<?php 
include("header.php");
$con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
{
	echo("ERROR : ". mysqli_connect_error());
}
$email=0;
if(isset($_GET["email"]))
	$email=$_GET["email"];
///اسم اصلیشو میکشیم بیرون
$user="INSERT INTO  bashga VALUES('$email')";
if(mysqli_query($con,$user))
{
	?>
<script type="text/javascript">
alert("به باشگاه مشتریان خوش آمدید");
location.replace("index.php");
</script>
<?php
}
else
{
	?>
	<script type="text/javascript">
alert("hello");
location.replace("index.php");
</script>
<?php
}
include("footer.php");


?>