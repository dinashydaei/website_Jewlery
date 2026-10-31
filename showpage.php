<?php
include("header.php");
?>
<div class="main">
	<style type="text/css">
		.main{
		background:#D4DAE6;
		margin-top: 100px;
		padding: 20px;
		display: flex;
		flex-wrap: wrap;
/*		flex-direction: row;*/
		justify-content:flex-start;


		
		
	}
		.se{
			display:block;
			width: 100%;
			background:#fff;
			margin: 10px 0px;
            padding-right: 30px;			

		}
		#s{
			width: 250px;
			height: 30px;
			background:#fff;
			border: 3px solid #B69E19;
			border-radius: 10px;
			color: black; 
			font: bold ;
			
		}
		#b{
            height: 25px;
			width: 20px;
			border: 1px solid #fff;
			background:#BD8E21;
			padding: 0px 2px;
			border-radius: 5px;
			color: #fff;
			transition: 0.5s all;
		
		}
		
		#b:hover{
			background: #fff;
			border: 1px solid #A78325;
			height: 26px;
			width: 50px;
			color: #D08D2B;
		}
		
	</style>
	
		<?php
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
echo("ERROR : ". mysqli_connect_error());
		//----------------------
		$counter=0;
		$q="SELECT * FROM product";
		$query=mysqli_query($link,$q);
		?>
	<div class="se">
	<form name="search" class="se">
	<input type="search" id="s" name="s" placeholder="  جستوجو ...">
		<button id="b"><i class="bi bi-search"></i></button>
	
	</form>
	</div>
		<br>
	<br>
	<style type="text/css">
	
	.child{
		
/*		border: solid  2px #957509;*/
		width:150px;
		height: 200px;
		margin:2px;
		border-radius: 20px;
		direction: rtl;
	    box-shadow: 2px 2px 5px 5px black inset ;
		margin: 0px auto;
        margin-bottom: 20px;
		background: black;
		position: relative;
		transition: all 0.3s;
		
		


	}
	.info{
		position: absolute;
		top: 50%;
		left: 50%;
		color: white;
		transform: translate(-50%,-50%);
		transition: all 0.3s;
		opacity: 0;
		width: 100%;
		
	}
	.child:hover .info{
		opacity: 1 ;
	}
	.child:hover .img1{
		opacity: 0.3 ;
	}
/*
	.img1:hover{
		opacity: 0.8 ;
	}
*/
	.img1{
		width: 100%;
		height: 100%;
		border-radius: 19px ;
		transition: all 0.5s;
	
	}
	.bot{
		background: #c5930a;
		padding-left: 5px;
		padding-right: 5px;
		border-radius: 5px;
		color:  #fff;
		transition: all 0.3s;
	}
	.bot:hover{
		background: #fff;
		color:  #c5930a;
	}
	
</style>

		<?php
		while($row=mysqli_fetch_array($query))
		{
			?>
	<a class="div-1">
		<div class="child">
			<img src="images/<?php echo($row["proimg"]); ?>" class="img1">

			<div class="info">
				<center>
 <b style="color: #fff;">نام کالا  :<?php echo($row["proname"]); ?></b> <br>
				 <b style="color: #fff;">قیمت  :  <?php echo($row["proprice"]); ?></b><br>
<!--		 <p style="color:black">	توضیحات :<?php echo(substr($row["prodetail"],0,(int)(strlen($row["prodetail"])/4))); ?></p>-->
			<br><b><a class="bot" href="detail.php?id=<?php echo($row["procode"]); ?>" > نمایش </a></b>
					</center>
             </div>  
		</div>
	</a> 
		
		
		<?php
			
		}
		?>
	
</div>
<?php
include("footer.php");
?>