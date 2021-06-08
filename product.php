<!DOCTYPE html>
<html lang="en">

  <head>

    

  </head>

  <body style="background-color:#64B5F6 ">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

  <?php include("head.php") ?>
	  
<br><br><br><br><br><br><br><br><br>
  
	  <!-- Page Content -->
  <form method="post" enctype="multipart/form-data"> 
	  
 <section class="blog-posts ">
	  <div class="container">
        <div class="all-blog-posts">
          <div class="row">
	 <?php
	
	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db("sp",$con);
	
	  $id = $_GET['ids'];
	  $qry6 = "SELECT * FROM product WHERE cat_id='$id'";
	  $res1 = mysql_query($qry6);
		 
		 while($row = mysql_fetch_array($res1))
		 {
			 
		 
	 ?>
	  
     <a href="product-detail.php?id1=<?php echo $row['id']; ?>">
            <div class="col-md-4 col-sm-4">
              <div class="blog-post">
				  
                <div class="blog-thumb">
					
					<img style="height:200px; " src="<?php echo $row['PIC']; ?>" alt="image" >	
				  
				  </div>
				  
                <div class="down-content">
                    
					<span>  $<?php echo($row['Price']); ?> </span>
                 
					<a href="product-detail.php"><h4><?php echo($row['PName']); ?> </h4></a>
			    
					<div><input type="submit" name="b3" class="btn btn-danger btn-md" value="ADD To CART"></div>	
            
				  </div>
				  
				  
              </div>
            </div>
			  </a>
		
    
	
<?php } ?>
			  	  
          </div>
        </div>
      </div>
    </section>
	  
	  </form>
<?php include("button.php") ?>	
  <?php include("footer.php") ?>	

    

  </body>
</html>