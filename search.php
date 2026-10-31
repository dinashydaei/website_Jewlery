<?php
include("header.php");
?>
<style type="text/css">
	.ss{
		transition: 0.5s all;
	}
	.ss:hover{
		color: #000;
		
	}
	
</style>

<center>
	 <section class="section" id="articles">
      <div class="section-title">
		  <br><br>
        <h2>محصولات </h2>
		 
		
      </div>
		

      <div class="section-center articles-center">
		  
		 
<table  width="100%" cellspacing="20" class="main">
	
	<tr>
		<?php
		if(isset($_POST["search"]) && !empty($_POST["search"]))
		{
			$s=$_POST["search"];
		}
$link=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
echo("ERROR : ". mysqli_connect_error());
		//----------------------
		$counter=0;
		$q="SELECT * FROM product";
		$search="SELECT * FROM `product` WHERE `proname` LIKE '%$s%'";
		$query=mysqli_query($link,$search);
		?>
		
		<?php
		
		while($row=mysqli_fetch_array($query))
		{
			$counter++;
			?>
<td >
	<div class="dina">
<article class="article-card">
          <div class="article-img-container">
            
			  <img class="article-img"  src="images/<?php echo($row["proimg"]); ?>" alt="article-img" >
            <p class="article-category">جدید</p>
          </div>
          <div class="article-info">
            <div class="article-title">
              <h4><?php echo($row["proname"]); ?></h4>
            </div>
            <p class="p-center">
              
            </p>
            <div class="article-footer">
              <p>
                <span>
                  <i class="bi bi-tag-fill"></i>
                  <?php echo($row["proprice"]); ?>
<!--
					<br>
					<i class="bi bi-pencil-square"></i>
                  تعداد  : <?php echo($row["proqty"]); ?>
-->
                </span>
              </p>
              <a class="ss" href="detail.php?id=<?php echo($row["procode"]); ?>">نمایش</a>
            </div>
          </div>
        </article>
		</div>
	</td>
		

		<?php
			if($counter%4==0)
			{
				echo("</tr><tr>");
			}
		}
		?> 

	</tr>
</table>
		  
  </div>
	</section>
</center>
<?php
include("footer.php");
?>

   