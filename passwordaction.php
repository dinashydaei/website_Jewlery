<?php
include("header.php");
if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true))
{
	?>
<script type="text/javascript">
	location.replace("index.php");
</script>
<?php
}
/////-----اعتبار سنجی
if(isset($_POST["oldpass"]) && ! empty($_POST["oldpass"]) && isset($_POST["pass"]) && ! empty($_POST["pass"]) && isset($_POST["repass"]) && ! empty($_POST["repass"]))
{
	$oldpass=$_POST["oldpass"];
	$pass=$_POST["pass"];
	$repass=$_POST["repass"];
	$user=$_SESSION["user"];
}
else
{
	exit("برخی فیلدها خالی رها شده است");
	include("footer.php");
}
$link=mysqli_connect("localhost","root","","work");
if(mysqli_connect_errno())
	echo("ERROR : ". mysqli_connect_error());
$r="SELECT * FROM user WHERE username='$user'";
$query=mysqli_query($link,$r);
if($row=mysqli_fetch_array($query))
{
	if($oldpass==$row["password"])
	{
		if($pass==$repass)
		{
			$s="UPDATE user SET password='$pass' WHERE username='$user'";
			if(mysqli_query($link,$s))
				echo("تغییر پسورد با موفقیت انجام شد");
			else
				echo("تغییر پسورد با موفقیت انجام نشد");
		}
		else
			echo("رمز عبور و تکرار آن مشابه هم نیستند");
	}
	else
		echo("رمز عبور به درستی وارد نشده است");
}
include("footer.php");
?>
