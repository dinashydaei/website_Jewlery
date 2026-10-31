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


//----------------------------------------------------
if(isset($_GET["username"]) && !empty($_GET["username"]) && isset($_GET["upassword"]) && !empty($_GET["upassword"]))
{
	$user=$_GET["username"];
	$pass=$_GET["upassword"];
}
else
echo("برخی از فیلدها خالی رها شد است");
//----------------------------------------------------------
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
	exit("ERROR:".mysqli_connect_error());
//-----------------------------------------------------------
$q="SELECT * FROM user WHERE username='$user' AND upassword='$pass'";

$query=mysqli_query($link,$q);


if($row=mysqli_fetch_array($query))
{
	echo("خوش آمدید :".$row["urealname"]);
	$_SESSION["login"]=true;
	$_SESSION["username"]=$row["username"];
	if($row['utype']==1)
		$_SESSION["type"]="admin";
	else if($row['utype']==0)
		$_SESSION["type"]="public";
}
else
{
	?>
	<script type="text/javascript">
        location.replace("register.php");

    </script>                                                                                                                 
    
    <p>ما ثبت نام نکردید  برای ثبت نام <a href="register.php">اینجا</a> کلیک کنید</p>
	
	<?php
	
}

?>