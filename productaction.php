<?php
include("header.php");
?>
<br><br><br><br>
<?php
if(!(isset($_GET["action"]) && $_GET["action"]=="del"))
{
//----------------------------------------------
if(isset($_POST["code"]) && ! empty($_POST["code"]) && isset($_POST["name"]) && ! empty($_POST["name"]) && isset($_POST["qty"]) && ! empty($_POST["qty"]) && isset($_POST["price"]) && ! empty($_POST["price"]) && isset($_POST["detail"]) && !empty($_POST["detail"]))
{
	$code=$_POST["code"];
	$name=$_POST["name"];
	$qty=$_POST["qty"];
	$price=$_POST["price"];
	$proimg=$_FILES["proimg"]["name"];
	$proimg1=$_FILES["proimg2"]["name"];
	$proimg2=$_FILES["proimg3"]["name"];
	$detail=$_POST["detail"];
	$typee=$_POST["typee"];

}
else
{
	?>
<script type="text/javascript">
alert("برخی از فیلد ها خالی رها شده اند  ");
	location.replace("product.php");
</script>
<?php
	exit();
}
}
//----------------------------------------------
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	echo("ERROR : ". mysqli_connect_error());
//--------------------------------
if(isset($_GET["action"]))
{
	$id=$_GET["id"];
	switch($_GET["action"])
	{
			///,
		case 'edit':
			$query="UPDATE product SET 
			procode='$code',
			proname='$name',
			proqty='$qty',
		    proprice='$price',
			prodetail='$detail',
			typee='$typee'
			WHERE procode='$id'";
			if(mysqli_query($link,$query))
			{
				?>
<script type="text/javascript">
alert("ویرایش با موفقیت انجام شد ");
	location.replace("product.php");
</script>
<?php
			}
				
			else
				{
				?>
<script type="text/javascript">
alert("ویرایش با موفقیت انجام نشد ");
	location.replace("product.php");
</script>
<?php
			}
			break;
			
		case 'del':
			$q1="SELECT * FROM product WHERE procode='$id'";
			$query1=mysqli_query($link,$q1);
			$row=mysqli_fetch_array($query1);
			$proimage=$row["proimg"];
			$proimage2=$row["proimg2"];
			$proimage3=$row["proimg3"];
			
			$del="DELETE FROM product WHERE procode='$id'";
			if(mysqli_query($link,$del))
			{
				?>
<script type="text/javascript">
alert("عملیات حذف موفقیت آمیز بود");
	location.replace("product.php");
</script>
<?php
				unlink("images/$proimage");
				unlink("images/$proimage2");
				unlink("images/$proimage3");
			}
			else
			{
				?>
<script type="text/javascript">
alert("در عملیات حذف مشکلی رخ داده است ");
	location.replace("product.php");
</script>
<?php
			}
				
			break;
	}
	
	mysqli_close($link);
	include("footer.php");
	exit();
}
//--------------------------------
$dir="images/";
//------------------مسیر دائم می سازیم
$file=$dir.$_FILES["proimg"]["name"];
$file2=$dir.$_FILES["proimg2"]["name"];
$file3=$dir.$_FILES["proimg3"]["name"];
$flag=1;
$type=pathinfo($file,PATHINFO_EXTENSION);
//--------------تصویر بودن یا نبودن فایل

$check=getimagesize($_FILES["proimg"]["tmp_name"]);
if($check==false)
{
	$flag=0;
	?>
<script type="text/javascript">
alert("فایلی که اضافه کردید تصویر نیست ");
	location.replace("product.php");
</script>
<?php
}
if($_FILES["proimg"]["size"]>500*1024)
{
	$flag=0;
	?>
<script type="text/javascript">
alert("حجم فایل باید کمتر از 500 بایت باشد ");
	location.replace("product.php");
</script>
<?php
}
//-----------------پستوند باید پی ان جی - گیف - جی پی جی باشد
$type=strtolower($type);
if($type!="jpg" && $type !="gif" && $type != "png")
{
	$flag=0;
	?>
<script type="text/javascript">
alert("فرمت شامل  jpg , gif , png نمی باشد  ");
	location.replace("product.php");
</script>
<?php
}
//if(file_exists($file))
//{
//	$flag=0;
//	echo("نام فایل تکراری است"."<br>");
//}
if($flag==1)
{
	//-------------تصویر رو از مسیر موقت به مسیر دائم منتقل میدهد
	if(move_uploaded_file($_FILES["proimg"]["tmp_name"],$file) && move_uploaded_file($_FILES["proimg2"]["tmp_name"],$file2) &&move_uploaded_file($_FILES["proimg3"]["tmp_name"],$file3))
	{
		?>
<script type="text/javascript">
alert("آپلود با موفقیت صورت گرفت  ");
	location.replace("product.php");
</script>
<?php
	}
	else
		?>
<script type="text/javascript">
alert(" آپلود انجام نشد  ");
	location.replace("product.php");
</script>
<?php
}
else
{
	?>
<script type="text/javascript">
alert("آپلود مشکل دارد ");
	location.replace("product.php");
</script>
<?php
}
//--------------------------
if($flag==1)
{
	
	$q="INSERT INTO product(procode,proname,proprice,proqty,proimg,proimg2,proimg3,prodetail,typee) VALUES('$code','$name','$price','$qty','$proimg','$proimg1','$proimg2','$detail','$typee')";
	if(mysqli_query($link,$q))
	{
		?>
<script type="text/javascript">
alert("عملیات درج با موفقیت انجام شد  ");
	location.replace("product.php");
</script>
<?php
	}
	else
	{
		?>
<script type="text/javascript">
alert("در عملیات درج مشکلی رخ داده است ");
	location.replace("product.php");
</script>
<?php
}
}
include("footer.php");
?>