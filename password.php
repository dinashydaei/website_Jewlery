<?php
include("header.php");
if(!(isset($_SESSION["login"]) && $_SESSION["login"]===true))
{
	?>
<script type="text/javascript">
	location.replace("index.php");
</script>
<?php
}
?>
<form name="password" id="password" action="passwordaction.php" method="post">
	old password:<input type="text" name="oldpass" id="oldpass"><br><br>
	password:<input type="password" name="pass" id="pass"><br><br>
	confirm password:<input type="password" name="repass" id="repass"><br><br>
	<input type="submit" value="login">
</form>
<?php
include("footer.php");
?>