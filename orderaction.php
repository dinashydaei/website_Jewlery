<br><br><br>
<br><br><br>
<br><br><br>

<?php
include("header.php");
//---------
if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true))
{
	?>
<style type="text/css">
	.d1{
		margin-top: 500px;
		width: 100%;
	}
</style>
<div class="d1">
<script type="text/javascript">
	location.replace("index.php");
</script>


</style>


<?php
}
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	echo("ERROR : ". mysqli_connect_error());

//----------------------دریافت اطلاعات فرم قبل
if(isset($_GET["procode"]) && !empty($_GET["procode"]))
{
$code=$_GET["procode"];
$count=$_GET["count"];
$price=$_GET["proprice"];
$total=$_GET["totalprice"];
$mobile=$_GET["tel"];
$address=$_GET["addres"];
$name=$_GET["name"];
$user=$_SESSION["username"];
$date=date("y-m-d");
$_SESSION["totalprice"]=$total;
$_SESSION["count"]=$count;
$_SESSION["procode"]=$code;

}
else{
	echo("file no");
}
//عنواین را در جلوی جدول قرار بده
//-----------------درج اطلاعات در جدول سفارش و ویرایش اطلاعات در جدول محصول
$r="INSERT INTO sefaresh VALUES('0','$date','$user','$code','$count','$price','$mobile','$address','0','000000000000000000000000')";
if(mysqli_query($link,$r))
{
	echo("<p style='color: green; direction;rtl;'> <br/><b>کاربر گرامی آقا / خانم $name </b> </p>");
	echo("<p style='color: blue; direction;rtl;'> <br/><b>محصول $code به تعداد $count با قیمت هر واحد $price ثبت شد. </b></p> ");
	echo("<p style='color: red; direction;rtl;'> <br/><b> مبلغ قابل پرداخت $total می باشد. </b></p>");
	echo("<p style='color: brown; direction;rtl;'> <br/><b> پس از بررسی سفارش شما و تایید آن به آدرس پستی شما ارسال خواهد گردید.");
	echo("<p style='color: brown; direction;rtl;'> <br/><b> برای افزودن به سبد خرید روی دکمه کلیک کنید");
	?>
	<a style="color: #c5930a;" href="sabad.php?id=<?php echo($row["procode"]); ?>" ><i class="bi bi-cart"></i></a> 
<?php
	$query="UPDATE product SET proqty=proqty-$count WHERE procode='$code'";
	if(mysqli_query($link,$query))
	{
		echo("ok.uuuu...........");
		


	}
	else
		echo(" not ok..uuuu..............");
	{
		


	}
}
else{
	echo("insert not ok");
	
}
?>
</div>

	<?php
																														
	//----------------------------------------
include("footer.php");
?>
