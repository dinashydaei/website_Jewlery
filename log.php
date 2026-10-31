
<?php
include("header.php");
?>
<style type="text/css">
    .s1{
        padding-top:100px;
    }
    .s2{
        
        height: 300px;
        width: 280px;
        border:1px solid #c5930a;
        padding: 5px;
        background-color:#c5930a;

    }
    img{
        height: 50px;
        width: 50px;
    }
</style>
<center>
<div class="s1"></div>
<div  class="s2">
    
    <img src="images/logg.png" >
<form name="login" id="login" action="loginaction.php" method="get">
            <label for="username">ورود نام کاربری : </label>
            <input type="text" id="username" name="username" /><br>
            <label for="upassword">ورود رمز عبور :</label>
            <input type="password" id="upassword" name="upassword" /><be>
            <button class="login-btn">Login</button><br>
            <input class="login-btn"
            type="button" value="forget password" onClick="forget();">

            <script type="text/javascript">
	     function forget()
	     {
		var user=document.getElementById("username").value;
	   location.replace("forget.php?user="+user);
		 }
	</script>
          </form>
</div>
</center>

          <?php
include("header.php");
?>