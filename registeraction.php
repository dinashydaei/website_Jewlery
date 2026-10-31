
<br>
<br>
<br>
<br>

<?php
include("header.php");
?>
<div class="div" style="display: flex; justify-content: center;align-items: center;margin-top: 20rem;">
	<?php
//---------------------------------- کدهای اعتبارسنجی
if(isset($_GET["name"]) && !empty($_GET["name"]) && isset($_GET["user"]) && !empty($_GET["user"]) && isset($_GET["tel"]) && !empty($_GET["tel"]) && isset($_GET["pass"]) && !empty($_GET["pass"]) && isset($_GET["repass"]) && !empty($_GET["repass"]) && isset($_GET["email"]) && !empty($_GET["email"]))
{
	$name=$_GET["name"];
	$user=$_GET["user"];
	$tel=$_GET["tel"];
	$pass=$_GET["pass"];
	$repass=$_GET["repass"];
	$email=$_GET["email"];
}
else
{
	?>
	<script type="text/javascript">
	alert("فیلد  وجود ندارد و خالی است");
	location.replace("register.php");
	</script>
	<?php
	exit();
}
if($pass != $repass)
{
	?>
	<script type="text/javascript">
	alert("پستورد و تکرار آن مشابه نیست");
	location.replace("register.php");

	</script>
	<?php
	exit();
	
}
if(filter_var("$email",FILTER_VALIDATE_EMAIL)===false)
{
	?>
	<script type="text/javascript">
	alert("فرمت ایمیل صحیح نمی باشد");
	location.replace("register.php");

	</script>
	<?php
	exit();
}
//--------------------------------------------------اتصال به پایگاه داده

$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	exit("ERORR: ".mysqli_connect_error());

//------------------------------------------------کد درج اطلاعات
$q="INSERT INTO user VALUES('$user','$name','$pass','$email','0')";

//----------------------------------------اجرای کد
if(mysqli_query($link,$q))
{
	?>
	<script type="text/javascript">
	alert("دوست عزیز به باشگاه مشتریان خوش آمدید");
	location.replace("login.php");
	</script>
	<?php
}
	else{
		?>
	<script type="text/javascript">
	alert("دوباره امتحان کنید");
	location.replace("register.php");
	</script>
	<?php
	}
mysqli_close($link);
?>
</div>
<?php
include("footer.php");

?>
