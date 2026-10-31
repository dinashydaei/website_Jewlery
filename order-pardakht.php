<?php  include("header.php"); 

///اتصال
$con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
{
	echo("ERROR : ". mysqli_connect_error());
}

$total=0;
if(isset($_GET["total"]))
	$total=$_GET["total"];

$username=$_SESSION["username"];
$name="SELECT * FROM user WHERE username='$username'";
$n=mysqli_query($con,$name);
if($nn=mysqli_fetch_array($n))
{
	$realname=$nn["urealname"];
}
?>
<style type="text/css">
	.main{
		position: relative;
		height: 800px;
		width: 100%;
		display: flex;
		flex-direction: row;
		font-family: parastoo;
	}
	
	.order{
    position: absolute;
    top: 20%;
    height: 450px;
    width: 40%;
    right: 10%;
/*    background: rgba(67,99,61,1.00);*/
    font-size: 1em;
		padding-top: 30px;
	}
	.pardakht{
		position: absolute;
		top: 20%;
		height:450px;
		width: 30%;
		right: 60%;
		background:rgba(214,222,231,1.00);
        border-radius: 0px 25px 0px 25px;
        direction: rtl;
		font:bold;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
		padding-right: 20px;
		padding-left: 20px;
	}
	.button1{
		font-family: parastoo;
		width: 100%;
		background: #c5930a;
		border-radius: 5px;
		border: 0px;
		height: 30px;
		text-align: center;
		padding:  0px 5px;
	}
	.button1:hover{
		background:rgba(201,212,223,1.00);

	}
	.main button{
		font-family: parastoo;
			
	}
	.main input{
		height: 25px;
		
	}
	#pardakht{
		padding: 5px 20px;;
	}
	.price{
		text-align: center;
		font-family: parastoo;
		margin: auto;
		
	}
	.cvv2{
		width: 45%;
		text-align: center;
		border-radius: 3px;
		border: 1px rgba(32,44,56,1.00);
	}
	.poya{
		border: 1px solid #c5930a;;
		border-radius: 3px 0px 0px 3px;
		background: #c5930a;
		width: 30%;
	}
	.poya:hover{
		background:rgba(201,212,223,1.00);
		border: 1px solid rgba(214,222,231,1.00);
	}
	.numcard{
		width: 100%;
		text-align: center;
		border-radius: 3px;
		border: 1px rgba(32,44,56,1.00);
	}
	.end{
		text-align: center;
		border-radius: 0px 3px 3px 0px  ;
		border: 1px rgba(32,44,56,1.00);
		width: 70%;
	}
	.order{
		direction: rtl;
		
	}
	.input{
		margin-right: 30px;
		height: 40px;
		width: 80%;
		text-align: center;
		border-radius: 3px;
/*		border: 1px solid black;*/
		border: 0px;
		background:rgba(214,222,231,1.00);
	}
	.order label{
		margin-right: 30px;
		font: bold;
	}
	.orderform{
		margin-top: 60px;
	}
	.title{
		background:rgba(214,222,231,1.00);
		width: 100%;
	    height: 30px;
			
	}
</style>
<!--<br><br><br><br><br>-->

<div class="main">
<div class="order">
<!--	<div class="title">پنل پرداخت</div>-->
	<form name="pardakht" id="pardakht" method="post" action="pardakhtaction.php?total=<?php echo($total); ?>" >
<b><label>نام و نام خانوادگی :</label> </b>  <br> 
	<input name="name" id="name" type="text" class="input" value="<?php echo($realname); ?>" readonly><br><br>
<b><label>شماره موبایل  :</label></b>  <br>
	<input name="tell" id="tell" type="text" class="input"><br><br>
<b><label>آدرس کامل  :</label></b> <br>
	<input name="address" id="address" type="text" class="input"><br><br>
<b><label>  کد پستی :</label></b>  <br>
	<input name="postcode" id="postcode" type="text" class="input"><br><br>
<b><label>تاریخ ارسال :</label></b> <br>
	<input name="date" type="date" class="input"><br>
	
</div>
<!--	قسمت پرداخت-->
<div class="pardakht">
	<div class="price"><br>مبلغ تراکنش  <br><h3><?php echo($total); ?>  </h3> <hr></div>
	
	    شماره کارت <br><input id="cardnum" class="numcard" type="text" placeholder="**** **** **** ****"><br><br>
		CVV2 
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  تاریخ انقضا
		<br>
		<input id="cvv2" class="cvv2" type="text" placeholder="****">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input id="carddate" class="cvv2" type="text" placeholder="**/**"><br><br>
		  کدامنیتی <br>
		<input id="security" class="cvv2" type="text" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="cvv2" type="text" placeholder="043287" readonly> <br><br>
		  رمز امنیتی <br><input id="poya" class="end" type="text" placeholder="_ _ _ _ _ _ "><button class="poya">درخواست رمز پویا</button><br><br>
		<center><button class="button1" type="submit" onClick="check();"><b>پرداخت</b> </button></center>
	</form></div>
</div>
<script type="text/javascript">
function check(){
	
	var tell=document.getElementById("tell").value;
	var address=document.getElementById("address").value;
	var postcode=document.getElementById("postcode").value;
	var date=document.getElementById("date").value;
	var cardnum=document.getElementById("cardnum").value;
	var cvv2=document.getElementById("cvv2").value;
	var carddate=document.getElementById("carddate").value;
	var poya=document.getElementById("poya").value;
	var f=true;
	if(tell.length!=11)
		{
			alert("شماره تماس باید 11 کاراکتر باشد ");
			f=false;
		}
	if(address.length=0 || postcode.length=0 || date.length=0 || cardnum.length=0 || cvv2.length=0 ||carddate.length=0 || poya.length=0 )
		{
			alert("   پر کردن تمام فیلد ها اجباری است   ");
			f=false;
		}
	if(cardnum.length!=16)
		{
			alert("   شماره کارت نامعتبر است  باید 16 رقم باشد   ");
			f=false;
		}
	if(cvv2.length!=4 || carddate.length!=4)
		{
			alert("   cvv2 یا تاریخ کارت نامعتبر است    ");
			f=false;
		}
	if(poya.length!=6)
		{
			alert("   رمز پویا نامعتبر است    ");
			f=false;
		}
	if(f==true)
		{
			document.pardakht.submit();
		}
	else alert("   bbbbbbb    ");
		
}
</script>


<?php include("footer.php"); ?>