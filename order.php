<br>
<br>
<br>
<br>

<?php
///session_start error
include("header.php");
?>
<style type="text/css">

.er
	{
		margin-top: 100px;
		background-color:  #303030;
		margin-bottom: 200px;
		width: 80%;
		position:center;
		border-radius:10px;
		margin-right:170px;
		text-align:center;
		color:white;
	}
.
	
</style>
<?php
//----------------------
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	echo("ERROR : ". mysqli_connect_error());
?>
<div class="main" >
<?php
//----------------------بررسی لاگین کاربر
if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true))
{
	?>
<div class="er">
<b>برای خرید محصول وارد سایت شوید</b>
<br><br>
در صورتی که عضو فروشگاه هستید
<a href="login.php" style="color: red">اینجا</a>
کلیک کنید
<br><br>
در صورتی که عضو فروشگاه نیستید
<a href="register.php" style="color: red">اینجا</a>
کلیک کنید
<br><br>
</div>
<?php
	exit();
}
//------- دریافت شناسه کد محصول از نوار ادرس
$ids=0;
if(isset($_GET["id"]))
	$ids=$_GET["id"];
//----------
$r="SELECT * FROM product WHERE procode='$ids'";
$query=mysqli_query($link,$r);
if($row=mysqli_fetch_array($query))
{
	?>
	<div class="tab">
<!--
<table border="2" width="100%" height="600px" dir="rtl">
	<tr>
		<td width="70%"  dir="rtl">
-->
		<div class="formm">
			<form name="order" id="order" method="get" action="orderaction.php">
				کد کالا : <input type="text" name="procode" id="procode" value="<?php echo($ids); ?>" style="background-color: gray;" readonly><br><br>
			    قیمت کالا  :<input type="text" name="proprice" id="proprice" value="<?php echo($row['proprice']); ?>" style="background-color: gray;" readonly><br><br>
			    تعداد  : <input type="text" name="count" id="count" onChange="cal();"><br><br>
				<script type="text/javascript">
					function cal()
					{
						var proqty=<?php echo($row["proqty"]);?>;
						var count=document.getElementById("count").value;
						var price=document.getElementById("proprice").value;
						var total;
						if(count>proqty)
							{
								alert("تعداد سفارش از موجودی بیشتر است");
								document.getElementById("count").value=0;
								count=0;
							}
						if(count==" " || count==0)
							total=0;
						else
							total=price*count;
						document.getElementById("totalprice").value=total;
					}
				</script>
				قیمت کل : <input type="text" name="totalprice" id="totalprice" value="0" style="background-color: gray;" readonly><br><br>
				<?php
	//-------------------------
$user=$_SESSION["username"];
$r1="SELECT * FROM user WHERE username='$user'";
$query1=mysqli_query($link,$r1);
$row1=mysqli_fetch_array($query1);
	?>
				نام و نام خانوادگی  :  <input type="text" name="name" id="name" value="<?php echo($row1['urealname']); ?>" style="background-color: gray;" readonly><br><br>
				تلفن : <input type="tel" id="tel" name="tel"><br><br>
				آدرس : <textarea id="addres" name="addres"></textarea><br><br>
			<button type="button" name="button" id="button" onClick="check();">ثبت</button>
			
				
				<script type="text/javascript">
					function check()
					{
						
						var r=confirm("آیا از صحت ورود اطلاعات مطمئن هستید؟");
						if(r==true)
						{
						var validate = true;
						var count = document.getElementById("count").value;
						var tel=document.getElementById("tel").value;
						var add=document.getElementById("addres").value;
							
						if(count==" " || count==0)
							{
								alert("تعداد سفارش نباید خالی باشد");
								validate=false;
							}
						if(tel.length!=11)
							{
								alert("تلفن باید 11 رقمی باشد");
								validate=false;
							}
						if(add.length<15)
							{
								alert("آدرس باید بیش از 15 کاراکتر باشد");
								validate=false;
							}
						if(validate==true)
							{
								document.order.submit();
							}
						else
							alert("برخی فیلد ها پر نشده است");
						}
					}
				</script>
			</form>
			</div>
<!--
 		</td>
		<td width="30%" align="center">
-->
		<div class="detail">
				<h2><p style="color: red;"><?php echo($row["proname"]); ?></p></h2><br>
				<img src="images/<?php echo($row["proimg"]); ?>" width="100" height="100"><br><br>
				فیمت : <p><?php echo($row["proprice"]); ?></p><br>
				تعداد : <p><?php echo($row["proqty"]); ?></p><br>
				توضیحات : <?php echo(substr($row["prodetail"],0,(int)(strlen($row["prodetail"])/4))); ?><br>
			</div>
<!--
		</td>
	</tr>
</table>
-->
	</div>
<?php
}
include("footer.php");
?>