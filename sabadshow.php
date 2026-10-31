
<br>
<br>
<br>
<br>
<br>
<br>

<style type="text/css">
	.main{
		width: 100%;
		padding: 2px;
		margin: 2px;
		
	}
	.img{
		width: 100px;
		height: 100px;
		text-align: right;
		position: absolute;
		top: 15%;
		right: 40%;
	}
	.kala{
		width: 60%;
		height: 150px;
		background-color: #fff;
		display: flex;
/*		justify-content:space-between;*/
		padding: 5px;
		margin-bottom: 10px;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);	
	}
	.pic{
		text-align: center;
/*		background: rgba(241,26,30,1.00);*/
		width: 40%;
		position:relative;
		
		
	}
	
	.text{
		width: 50%;
/*		background: rgba(105,228,138,1.00);*/
		text-align: right;
		position:relative;
	}
	.text p{
		position: absolute;
		top: 25%;
		
	}
	.delete{
		width: 10%;
/*		background:rgba(129,44,232,1.00);*/
		text-align: justify center;
		position:relative;
	}
	.delete i{
		font-size: 30;
		position: absolute;
		top: 40%;
		right: 20%;
	}
	i:hover{
		
	}
	.totalbox{
		width: 60%;
		height: 150px;
		background-color: #fff;
		display: flex;
		flex-direction: column;
	    margin-bottom: 10px;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);
		padding: 0px;
		position: relative;
	}
		.button{
		width: 20%;
		height: 40px;
		font-family: parastoo;
		background-color: #c5930a;
		border-radius: 5px;
		border: 0px;
		position: absolute;
		top: 60%;
		right: 70%;
		
			font-size: 18;
	}
	
	.button:hover{
		background-color: rgba(218,218,218,1.00);
	}
	.pricee div{
		font-size: 17;
	}
/*	ریسپانسیو */
	@media screen and (max-width:936px)
	{
		.kala{
			transform: scale(0.7);
			width: 100%;
		}
		
		.img{
			right: 5%;
		}
		.pricee div{
			font-size:12;
		}
		.button{
			font-size: 10;
			transform: scale(0.8);
			right: 75%;
		}
	}

</style>
<?php
include("header.php");

if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true))
{
    ?>
    <script>location.replace("login.php");</script>
    <?php
}
$con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
{
	echo("ERROR : ". mysqli_connect_error());
}
///اسم اصلیشو میکشیم بیرون
$user="SELECT * FROM user WHERE username='{$_SESSION["username"]}'";
$queryu=mysqli_query($con,$user);
$roww=mysqli_fetch_array($queryu);
?>
<center>
<div class="main">
	
	<h3>سبد خرید کاربر : <?php echo($roww["urealname"]);?></h3>
	<br>
	<span style="text-align: center"></span>
	<?php
	///اطلاعات در سبد 
	$q="SELECT * FROM sabad WHERE username='{$_SESSION["username"]}'";
	$query=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($query))
	{
///اطلاعات محصول مثل اسم و عکسشو میکشیم بیرون 
		$procode=$row["procode"];
		$q1="SELECT * FROM product WHERE procode='$procode'";
		$query2=mysqli_query($con,$q1);
		while($row2=mysqli_fetch_array($query2))
		{
			$img=$row2["proimg"];
			$proname=$row2["proname"];
		}
	
		?>
<!--	باکس نمایش محصول-->
		<div class="kala">
			<div class="pic"><img class="img" src="images/<?php echo($img); ?>"></div>
			<div class="text"><p><b><?php echo($proname); ?><br><?php echo($row["count"]); ?></b>عدد<b><br><?php echo($row["proprice"]); ?></b> تومان  </p></div>
			<div class="delete"><a href="sabaddelete.php?id=<?php echo($row["procode"]);?>"><i class="bi bi-trash3"></i></a></div>
	    </div>
		
		

	    
	<?php
	}
		///جمع کل فاکتور
		$p="SELECT * FROM sabad WHERE username='{$_SESSION["username"]}'";
		$pr=mysqli_query($con,$p);
	    $total=0;
		while($pro=mysqli_fetch_array($pr))
		{
			$total+=$pro["proprice"];
		}
	?>
	
<div class="totalbox">
	<div style=" width: 100%; background: #c5930a; height: 30px;">
		<b>محاسبه قیمت کل </b><br>
	</div>
	
	<div class="pricee" style="text-align: right; margin-right: 20px; margin-top: 20px;">
		<div><b> تخفیف کل  :</b> 0  تومان
		</div><br>
		<div><b>مبلغ کل :</b> <?php echo($total); ?></b>  تومان 
		</div>
		
	</div>
<a href="order-pardakht.php?total=<?php echo($total); ?>"><button type="button" class="button"><b>ثبت نهایی</b></button></a>
	</div>
	
<!--<a href="order.php"> ثبت محصولات</a>-->
	</div>
	</center>
<?php
include("footer.php");
	
?>
