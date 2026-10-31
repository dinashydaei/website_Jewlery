<?php
include("header.php");
?>
<br>
<?php
if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true && $_SESSION["type"]=="admin"))
{
	?>
<script type="text/javascript">
	location.replace("index.php");
</script>
<?php  
}
//----------------------------------------------
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	echo("ERROR : ". mysqli_connect_error());
//--------------------------------
$url=$procode=$proname=$proqty=$proprice=$proimg=$proimg1=$proimg2=$prodetail=$typee="";
$btn_caption="افزودن";
$title="اطلاعات کالای جدید را اضافه کنید ";
if(isset($_GET["action"]) && $_GET["action"]=="edit")
{
	$ids=$_GET["id"];
	$q="SELECT * FROM product WHERE procode='$ids'";
	$query=mysqli_query($link,$q);
	if($row=mysqli_fetch_array($query))
	{
		$procode=$row["procode"];
		$proname=$row["proname"];
		$proqty=$row["proqty"];
		$proprice=$row["proprice"];
		$proimg=$row["proimg"];
		$proimg2=$row["proimg2"];
		$proimg3=$row["proimg3"];
		$prodetail=$row["prodetail"];
		$typee=$row["typee"];
		$url="?id=$procode&action=edit";
		$btn_caption="ویرایش";
		$title="اطلاعات کالا را ویرایش کنید";
	}
}
?>
<style type="text/css">
	.main{
		padding: 20px;
		background: ##c5930a;
		color: #fff;
	
		
	}
	
	.main a{
		color: aliceblue;
		justify-content: center;
	}
	.main a:hover{
		color:#c5930a;

	}
	.formm{
		
		background:#c5930a;
		height:950px;
		width: 70%;
		padding: 50px;
		margin: 0px 50px;
		margin-bottom: 50px;
		border: 2px solid #fff;
	    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);

margin: auto;
		margin-top: 80px;
	
	}
	.tablee{
		
		background: #fff;
		margin: 0px 100px;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);

	}
	table{
		
	}
	.t{
		direction: rtl;
		text-align: center;
		width: 100%;
		border: 2px solid #fff;
		margin-top: 20px;
		
	}
	.imgg{
		margin: 2px;
		width:60px;
		height:60px;
		
	}
	.o{
		background:#c5930a;
	}
	.bsub{
		width: 20%;
		font-family: Parastoo;
		
		
	}
	.bsub:hover{
		
		border: 2px solid #c5930a;
		background: #c5930a;
		color: #fff;
		font-size: bold;
		cursor:grab;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        transform: scale(1.02);
	}
	.gg{
		display: inline;
		width: 50px;
		height: 50px;
	}
	.in{
		width: 200px;;
	}
	
</style>

<div class="main">
<!--	<center>-->
	<div class="formm">

<form id="product" name="product" method="post" action="productaction.php<?php if(! empty($url)) echo($url); ?>" enctype="multipart/form-data">
	<h3><?php  echo($title);?></h3>
	<hr><br>
	کد :<br> <input type="text" class="in" id="code" name="code" value="<?php echo($procode); ?>"><br>
	نام :<br> <input type="text" class="in" id="name" name="name" value="<?php echo($proname); ?>"><br>
	تعداد : <br><input type="number" class="in" id="qty" name="qty" value="<?php echo($proqty); ?>"><br>
	قیمت :<br> <input type="number"class="in" id="price" name="price" value="<?php echo($proprice); ?>"><br>
	تصویر1 :<br> <input type="file"  class="in"id="proimg" name="proimg">
	<?php
	if(! empty($proimg))
		echo("<img src='images/$proimg' class='gg'>");
	?>
	<br>
	تصویر2 :<br> <input type="file"  class="in" id="proimg2" name="proimg2">
	<?php
	if(! empty($proimg))
		echo("<img src='images/$proimg2' class='gg'>");
	?>
	<br>
	تصویر3 :<br> <input type="file"  class="in" id="proimg3" name="proimg3">
	<?php
	if(! empty($proimg))
		echo("<img src='images/$proimg3' class='gg'>");
	?>
	<br><br>
	نوع  :<br> <input type="text" class="in" id="typee" name="typee" value="<?php echo($typee); ?>"><br>
	<i class="bi bi-1-square"></i>گوشواره  &nbsp;  <i class="bi bi-2-square"></i>انگشتر &nbsp; <i class="bi bi-3-square"></i>گردنبند  &nbsp;  <i class="bi bi-4-square"></i>دستبند 
<br><br>	توضیحات :<br> <textarea name="detail" class="in" id="detail" rows="5" cols="30"><?php echo($prodetail); ?></textarea><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="<?php echo($btn_caption); ?>" class="bsub">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="جدید"  class="bsub"><br><br><br><br>
</form>
	</div>

	<div class="tablee">
<table border="1" align="center" class="t" >
	<tr class="o" align="center" valign="middle" style="text-align: center">
		<td>کد </td>
		<td>نام </td>
		<td>موجودی </td>
		<td>قیمت </td>
		<td align="center" valign="middle">تصویر </td>
		<td>حذف</td>
		<td>ویرایش</td>
	</tr>
<?php
$query1="SELECT * FROM product";
$r=mysqli_query($link,$query1);
while($row1=mysqli_fetch_array($r))
{
	?>
	<tr>
		<td><?php echo($row1["procode"]); ?></td>
		<td><?php echo($row1["proname"]); ?></td>
		<td><?php echo($row1["proqty"]); ?></td>
		<td width="100px" height="100px"><?php echo($row1["proprice"]); ?></td>
		<td align="center" valign="middle"><img src="images/<?php echo($row1["proimg"]); ?>"  class="imgg"></td>
		<td><a style="color: black;" href="productaction.php?id=<?php echo($row1["procode"]);?>&action=del">حذف</a></td>
		<td><a  style="color: black;" href="product.php?id=<?php echo($row1["procode"]);?>&action=edit">ویرایش</a></td>	
	</tr>
	<?php
}
?>
</table>
		</div>
<!--				</center>-->
	</div>
<?php
include("footer.php");
?>