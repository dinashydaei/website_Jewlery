<br>
<br>
<br>
<br>
<br>

<?php

include("header.php");
if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true))
{
    ?>
    <script>location.replace("login.php");</script>
    <?php
}
///دریافت مقادیر
if(isset($_POST["tedad"]) && !empty($_POST["tedad"]))
{
	$tedad=$_POST["tedad"];
	$procode=$_POST["procodee"];
	$price=$_POST["totalprice"];
}
else
	echo("مقادیر دریافت نشد");
///اتصال
$con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
{
	echo("ERROR : ". mysqli_connect_error());
}

$ids=0;
if(isset($_GET["id"]))
	$ids=$_GET["id"];

$q="SELECT * FROM product WHERE procode='$ids'";
$query=mysqli_query($con,$q);
if($row=mysqli_fetch_array($query))
{
    $code=$row["procode"];

}
//$code=$_SESSION["procode"];
//$count=$_SESSION["count"];
	
   
$username=$_SESSION["username"];

$insert="INSERT INTO sabad VALUES('0','$ids','$tedad','$price','$username')";
if(mysqli_query($con,$insert))
{
	$query1="UPDATE product SET proqty=proqty-$tedad WHERE procode='$code'";
	if(mysqli_query($con,$query1))
	{
		?>
<script type="text/javascript">
alert("در سبد خرید درج شد");
location.replace("sabadshow.php");
</script>
<?php
		
	}
	else{echo("آپدیت صورت نگرفت");}
	
		?>
<script type="text/javascript">
alert("محصول به سبد خرید اضاف شد ");
location.replace("sabadshow.php");
</script>
<?php
    echo("محصول با موفقیت به سبد خریدافزوده شد ");
}
else
echo("محصولات به سبد خرید افزوده نشد");

include("footer.php");
?>