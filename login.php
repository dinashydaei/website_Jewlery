
<style>
   .kk{
      color:#1C584C;

   }
	.bb{
		background-color: #1c584c;
		color: #fff;
		border: 1px solid #1c584c;
        height: 40px;		
		font-family: parastoo;
	}
	.bb:hover{
		background-color:#c5930a;
		transition: all 0.5s;
	}
</style>

<?php
 include("headerlogin.php");
 if(isset($_SESSION["login"]) && $_SESSION["login"]===true )
 {
	 ?>
	 <script type="text/javascript">
            location.replace("index.php");
     </script>
	 <?php
 }

?>
<h1>ورود</h1>
<form name="login" id="login" action="loginaction.php" method="get">
            <label for="username">ورود نام کاربری : </label>
            <input type="text" id="username"  name="username" />
            <label for="upassword">ورود رمز عبور :</label>
            <input type="password" id="upassword" name="upassword"/>
<!--            <button class="login-btn">Login</button>-->
	    <input type="submit" value="ورود" class="bb">
          <input  class="bb" type="button" value="رمز عبور را فراموش کردم  " onClick="forget();"> 
<center>
           آیا هنوز عضو نشده اید؟ <b><a href="register.php" class="kk">ثبت نام کنید </a></b>
</center>

            <script type="text/javascript">
	     function forget()
	     {
		var user=document.getElementById("username").value;
	   location.replace("forget.php?user="+user);
		 }
	</script>
          </form>
<?php
include("footerlogin.php");
?>