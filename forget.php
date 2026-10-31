<div></div>
<br><br><br>
<br>
<?php
include("header.php");
if(isset($_GET["user"]))
	$user=$_GET["user"];
///----------
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	echo("error : ". mysqli_connect_error());
//----------
$q="SELECT * FROM user WHERE username='$user'";
//---------------------------------
$query=mysqli_query($link,$q);
if($row=mysqli_fetch_array($query))
{
	$pass=$row["upassword"];
	$email=$row["uemail"];
}
else
{	?>
<script type="text/javascript">
alert("شما قبلا ثبت نام انجام نداده اید ");
replace("register.php");

</script>
<?php
	exit();
}
?>
<center>
	<br>
<b>	
<a href="mailto:<?php echo($email);?> ? subject=ارسال ایمیل  & body= <?php echo($pass); ?>">ارسال رمز عبور  </a>
</b>
</center><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include("footer.php");
?>