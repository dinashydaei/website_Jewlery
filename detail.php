<style type="text/css">
	*{
		font-family: parastoo;
	}
</style>
<?php
include("header.php");
?>
  <style>
    *,
    ::after,
    ::before {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    :root {
      --clr--primary-1: #354e41;
      --clr--primary-2: #3b5a41;
      --clr--primary-3: #588157;
      --clr--primary-4: #ffff;
      --clr--primary-5: #e3ffe2;
		--clr--primary-6:#CCD5AE;
      --clr--begin-1: #f9edcd;
      --clr--begin-2: #d4a473;
      --clr--gray: rgb(254, 251, 251);
      --clr--black: black;
      --clr--white: white;
      --clr--light-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      --clr--dark-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      --transition: all 0.3s linear;
      --radius: 0.5rem;
      --radius--big: 50%;
      --font--primary: "parastoo";
    }
    .underline {
      width: 10rem;
      height: 0.25rem;
      background-color: var(--clr--begin-2);
      margin: 0 auto;
    }
    .section-title {
      text-align: center;
      margin-bottom: 2rem;
    }
    .section-title h1 {
      color: var(--clr--primary-2);
      font-family: var(--font--primary);
      font-size: 3rem;
    }
    .section-center {
      max-width: 1170px;
      width: 90vw;
      margin: 0 auto;
    }
    .btn {
      display: inline-block;
      padding: 0.5rem 1.25rem;
      background-color: var(--clr--primary-3);
      border-radius: var(--radius);
      cursor: pointer;
      color: var(--clr--white);
      outline: 3px solid var(--clr--primary-4);
      outline-offset: 0.25rem;
      transition: var(--transition);
      margin: 1rem;
      font-size: 1rem;
		font-family: var(--font--primary);
		border-color: transparent;
    }
    .btn:hover {
      background-color: var(--clr--primary-4);
      color: var(--clr--primary-1);
    }
    a {
      text-decoration: none;
    }
  
/**************************************************  رنگ زمینهههههههههههههههههههههههههههههههههههههههههههههههههههههههههههههههههههههههه*/  
	 body{
		 background-color:#fff;
	  }
	  .product-detail{
		 
/*
		 display: grid;
		  grid-template-rows: 1fr 1fr 1fr;
		  align-content: center;
		  justify-content: center;
*/
		  padding-top: 3rem; 
		
	  }
	  .detail {
      padding: 1rem;
      max-width: 25rem;
      border-radius: var(--radius);
    }
    .detail-img {
      padding: 2rem;
      margin-bottom: 0.5rem;
		padding-top: 3rem; 
    }
    .slider-wrap {
      position: relative;
      max-width: 35rem;
      
    }
    .slider {
      display: flex;
      aspect-ratio: 5/4;
      overflow-x: hidden;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      box-shadow: 0 1.5rem -0.75rem hsl(0, 0%, 0%, 0.25);
      border-radius: var(--radius);
    }
    .slider img {
      flex: 1 0 100%;
      scroll-snap-align:start;
      object-fit: cover;
    }
    .slider-nav {
      display: flex;
      column-gap: 1rem;
      position: absolute;
      bottom: 1.5rem;
      left: 50%;
      z-index: 1;
      transform: translateX(-50%);
    }
    .slider-nav a {
      width: 0.7rem;
      height: 0.7rem;
      border-radius: var(--radius--big);
/*      background-color: var(--clr--white);*/
     
      transition: opacity ease 250ms;
    }

    .detail-info p,
    h2,
    a {
      font-family: var(--font--primary);
    }
    .detail-info span {
      margin-left: 0.25rem;
      color: var(--clr--primary-2);
      font-size: 1rem;
      margin-right: 0 ;
    }
    .detail-info {
      padding: 2rem;
      text-align: center;
     max-width:40rem;
		width: 25rem;
		height: 35rem;
      margin: 0 auto;
      border: solid var(--clr--primary-2);
      border-radius: var(--radius);
		
    }
    .detail h2 {
      font-size: 1.5rem;
      color: var(--clr--primary-1);
      margin-bottom: 2rem;
    }
    .detail p {
      font-size: 1rem;
      text-align: right;
		margin-bottom: 0.5rem;
    }
    .btn-detail {
		padding: 0.5rem 2rem;
		font-size: 1.25rem;
		border-radius: 1rem;
		background-color: var(--clr--primary-1);
		color: var(--clr--white);
		margin: 1.5rem 0 1rem 0;
		transition: var(--transition);
		border-color: transparent;
    }
	  .btn-detail i{
		  padding: 0.25rem;
	  }
	  .btn-detail:hover{
		  color:  var(--clr--primary-1);
		  background-color: var(--clr--begin-2)
	  }
	  .btn-back {
		background-color: var(--clr--begin-1);
		padding: 0.5rem 1rem;
		font-size: 0.75rem;
		color: var(--clr--primary-3);
		transition: var(--transition);
		  width: 7rem;
		  height: 2.5rem;
		  border-radius: 1rem;
		  align-content: center;
	  }
	  .btn-back i{
		   padding-right: 0.25rem;
	  }
	  .btn-back:hover{
		  background-color: var(--clr--begin-2);
		  color: var(--clr--white);
	  }
	  .detail-btns{
		 display: grid;
		  grid-template-rows: 1fr  ;
		  grid-template-columns: 1fr 1fr ;
		 place-items:center;
	  }
	  .btn-sabad{
		  background-color: var(--clr--begin-1);
		padding: 0.5rem 1rem;
		font-size: 0.75rem;
		color: var(--clr--primary-3);
		transition: var(--transition);
		  width: 9rem;
		  height: 2.5rem;
		  border-radius: 1rem;
		  align-content: center;
	  }
	  .btn-sabad:hover{
		   background-color: var(--clr--begin-2);
		  color: var(--clr--white);
	  }
	   .btn-sabad i{
		   padding-right: 0.25rem;
	  }
/*----------------------------------------------- ایجاد کامنت*/
      .comment-section {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .comments {
/*        background-color: var(--clr--primary-1);*/
		  margin-top:2rem;
		  
      }
      .input-comment {
        display: grid;
        grid-template-rows: 1fr 1fr;
        margin-bottom: 1rem;
      }

      .input-comment input::placeholder {
        font-family: var(--font--primary);
      }
      .input-comment textarea::placeholder {
        font-family: var(--font--primary);
      }
      .input-comment {
        margin-bottom: 1rem;
      }
	  .input-comment label{
font-family: var(--font--primary);
	  }
      .input-comment input {
        outline: none;
        font-family: var(--font--primary);
        padding: 0.5rem 1rem;
        border-radius: var(--radius);
        border-color: transparent;
        max-width: 30rem;
      }
      .input-comment textarea {
        outline: none;
        padding: 0.5rem 1rem;
        border-radius: var(--radius);
        border-color: transparent;
        max-width: 30rem;
        font-family: var(--font--primary);
      }
      .form-comment {
        padding: 1rem;
        border-radius: var(--radius);
		  background-color: var(--clr--primary-2);
        border: solid var(--clr--begin-2) 0.2rem;
		  color: var(--clr--white);
      }
      .btn-comment {
        outline: 0;
        margin: 1.5rem;
        width: 20rem;
		  background-color: var(--clr--begin-2);
		  color: var(--clr--white);
      }
	  
      .comment-title {
        text-align: center;
        margin-bottom: 2rem;
		  font-family: var(--font--primary);
		  font-size: 1.5rem;
      }
      .comment-title h3 {
        color: var(--clr--white);
		
      }
/*-----------------------------------------------  کامنت کاربران */
	  
	       .allcomments {
        display: grid;
        grid-template-rows: 1fr;
		margin-bottom: 2rem;
			   	 max-height:29rem;
		  overflow-y: scroll;
      }
      .showallcomments {
        background-color: var(--clr--primary-6);
	
		  margin-top: 3rem;
		  display: grid;
		 grid-template-rows: 1fr;
		  grid-template-columns: 1fr;
      }
      .comment-show:nth-child(odd) {
        clip-path: polygon(
          0% 0%,
          100% 0%,
          100% 75%,
          75% 75%,
          75% 100%,
          50% 75%,
          0% 75%
        );
        justify-self: start;
        background-color: var(--clr--primary-4);
        padding: 1rem;
        max-width: 15rem;
        height: 10rem;
		   margin-bottom: 0.2rem;
        color: var(--clr--black);
      }
	  .comment-show:nth-child(1){
		   margin-top: 0.5rem;
          }
      .comment-show:nth-child(even) {
        justify-self: end;
		  margin-top: 0.2rem;
        clip-path: polygon(
          0% 0%,
          100% 0%,
          100% 75%,
          47% 75%,
          18% 100%,
          18% 75%,
          0% 75%
        );
        padding: 1rem;
		   margin-bottom: 0.2rem;
        background-color: var(--clr--white);
        max-width: 15rem;
        height: 10rem;
        color: var(--clr--black);
      }
	  .comment-show p{
		  font-size: 1rem;
	  }
      .comment-user {
        display: flex;
        justify-content: start;
        align-items: baseline;
        color: var(--clr--black);
        margin-bottom: 1rem;
      }
      .comment-user span {
        color: var(--clr--black);
        font-size: 1rem;
        padding-left: 0.5rem;
      }
      .section-title h2 {
        color: var(--clr--white);
		 font-size: 2rem;
      }
	  .comment-show-title {
		  margin-bottom: 0.3rem;
	  }
	   @media screen and (min-width:800px)
	   {
	.allcomments {
      max-width:1000px;
      width: 90vw;
      margin: 0 auto;
    }
	  }
	   @media screen and (min-width:800px) {
        .section-comment{
            display: flex;
            justify-content: space-around;
			      gap:0 3rem;
        }
		   .detail {
        display: flex;
        align-items: center;
        max-width: 75rem;
        justify-content: space-between;
		    gap:0 5rem;
      }
		 .product-detail {
      display: grid;
     grid-template-rows: 1fr 1fr;
		align-content: center;
     
    }
		   .allcomments{
			   width: 18rem;
		   }
    }
	  @media screen and (min-width:1000px){
		  .allcomments{
			   width: 25rem;
		   }
	  }
	  
/*-----------------------------------------------  سبد خرید */
	  .form-sabad{
		  text-align: right;
		  display: grid;
		  grid-template-rows: 1fr 1fr 1fr;

	  }
	  .form-sabad input{
		 outline: none;
        font-family: var(--font--primary);
        padding: 0.25rem 0.5rem;
        border-radius: var(--radius);
        border-color: transparent;
		  width: 20rem;
		  margin-top: 0.5rem;
	  }
	  .select-size{
		  margin-top: 0.5rem;
	  }
	  .select-size {
		 outline: none;
		  padding: 0.25rem ;
        border-radius: var(--radius);
        border-color: transparent;
	  }


  </style>  
<style type="text/css">
	.img1{
		margin:50px;
		width: 350px;
		height: 350px;
		border-radius:20px;
		border: 20px #C59208;	
		background: #E982FB;
		margin-right: 150px;
		
		
	}
	@media screen and max-width(700px){
		
	}
	.detaill{
		display: flex;
		flex-wrap: wrap;
		padding: 50px;
		margin: 20px 50px;
		border-radius: 5px;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.7);	
		transform: scale(0.8);
	}
	.text{
		width: 50%;
/*		background-color:rgba(0,0,0,0.19);*/
		padding: 80px 80px;
		border-radius:  10px ;
/*		border: 2px solid #c5930a;*/
		position: relative;
		

	}
	.img{
		width: 50%;
/*		background: rgb(00,00,00,0.5);*/
		border-radius:  0px 5px 5px 0px;
		padding-top: 15px;
	}
	.button{
		background:rgba(0,0,0,0.00);
		border: 3px solid #c5930a;
		width:100px;
		height: 40px;
		
		text-align: center;
		padding-top: 8px;
		transition: 0.5s all;
		border-radius: 5px;
		font-family: parastoo;
	}

	.button:hover{	
		color: #000;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
	}
	
	.c{
		transform: scale(1.3);
	}
	.b{
		color: #c5930a;
	}
	.tedadi{
		width: 80px;
		border: 2px solid #c5930a;
		border-radius: 5px;
		text-align: center;
		margin-bottom: 5px;
	}
	.nonborder{
		border: 1px solid #fff;
		width: 100px;
	}
	.bottunn{
		color: #fff;
		background-color: #c5930a;
		height: 30px;
		width: 150px;
		font-family: parastoo;
		border-radius: 5px;
		font-size: bold;
		border: 0px;
		transition: 0.5s all;
	}
	.bottunn:hover{
		color: #c5930a;
		background:rgba(231,231,231,1.00);
	}
	.body{
		background: #fff;
	}
	.text form{
		padding-top: 30px;
		padding-bottom: 40px;
		padding-right: 20px;
/*		background: rgba(223,209,152,1.00);*/
		border: 2px solid #c5930a;
		border-radius: 5px;
		position: absolute;
		top: 12%;
	}
	
</style>
<style type="text/css">
	*{
		font-family: parastoo;
	}
</style>
<br><br>


<div class="div"></div>
	<?php
$ids=0;
if(isset($_GET["id"]))
	$ids=$_GET["id"];
//-------------------------------
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	echo("ERROR : ". mysqli_connect_error());
//-------------------------------
$q="SELECT * FROM product WHERE procode='$ids'";
$query=mysqli_query($link,$q);
if($row=mysqli_fetch_array($query))
{
	?>

<div class="detaill">
	
<!--	img-->
<div class="img">
<div class="detail-img ">
        <div class="slider-wrap">
          <div class="slider">
            <img src="images/<?php echo($row["proimg"]); ?>" alt="" id="slide1" />
            <img src="images/<?php echo($row["proimg2"]); ?>" alt="" id="slide2" />
            <img src="images/<?php echo($row["proimg3"]); ?>" alt="" id="slide3"  />
          </div>
          <div class="slider-nav" style="color: black; background: rgba(255,255,255,0.80);border-radius: 10px; padding: 1px 5px; padding-top: 4px; ">
          <b><a href="#slide1"><i class="bi bi-1-circle"></i></a></b>  
            <b><a href="#slide2"><i class="bi bi-2-circle"></i></a></b>
            <b><a href="#slide3"><i class="bi bi-3-circle"></i></a></b>
          </div>
        </div>
       </div>
	</div>
	<br>
<!--	text-->
	<div class="text">
		<form action="sabad.php?id=<?php echo($row["procode"]); ?>" method="post">
			
	     		<b class="b">کد : </b><b> <?php echo($row["procode"]); ?></b><br>
			<?php  $_SESSION["procode"]=$row["procode"];
			?>
            	<b class="b">نام : </b><b><?php echo($row["proname"]); ?></b><br>
		        <b class="b">قیمت : </b><b><?php echo($row["proprice"]); ?></b> تومان<br>
				<b class="b">موجودی محصول : </b><b><?php echo($row["proqty"]); ?> </b>عدد<br>
	            <b class="b">توضیحات : </b><b> <?php echo($row["prodetail"]); ?></b><br><br>
			    <b class="b">رنگ طلا   : </b><b><select class="tedadi"><option>زرد</option><option>سفید</option></select></b><br>
		        <b class="b">تعداد &nbsp;&nbsp;&nbsp;&nbsp;: </b><b><input type="number" name="tedad" id="tedad" class="tedadi" onChange="cal();" ></b><br>
			<script type="text/javascript">
					function cal()
					{
						var proqty=<?php echo($row["proqty"]);?>;
						var tedad=document.getElementById("tedad").value;
						var price=<?php echo($row["proprice"]); ?>;
						var total;
						if(tedad>proqty)
							{
								alert("تعداد سفارش از موجودی بیشتر است");
								document.getElementById("tedad").value=0;
								tedad=0;
							}
						if(tedad==" " || tedad==0)
							total=0;
						else
							total=price*tedad;
						document.getElementById("totalprice").value=total;
					}
				</script>
				<b class="b">قیمت کل : <input  type="text" class="nonborder"  name="totalprice" id="totalprice" value="0" readonly></b><br><br>
		
			
				
	
			<button type="submit" class="bottunn"><b><i class="bi bi-basket2-fill"></i>  خرید کنید  </b></button>
<!--			<input type="submit">رفتن به سبد خرید </input>-->
			<input type="text" style="visibility: hidden;" id="procodee" name="procodee" value="<?php echo($row["procode"]); ?>">
			
			</form>	
	  </div>
	
	</div>
</div>

			
		<?php
}
include("footer.php");
?>
<style type="text/css">
	*{
		font-family: parastoo;
	}
</style>