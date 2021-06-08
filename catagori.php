<!DOCTYPE html>
<html lang="en">

  


<body style="background-image: url(images/bg-registration-form-7.jpg)">
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
	
	
	
	
	
	<div class="container"  style="background-color:rgba(27,27,27,0.37) ;">
	<div class="row">
	<form>
		<section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts" align="center">
          <h2 class="text-center alert-dark" >OUR CATAGORIES</h2>
          <br>
          <div class="row">
			  <?php
	         $con = mysql_connect("localhost","root","");
           	$db = mysql_select_db("sp",$con);
	  $qry9 = "SELECT * FROM product WHERE Rank = 2";
	  $res4 = mysql_query($qry9);
	  
	  while($row2 = mysql_fetch_array($res4))
	  {
	  ?>
			  <a href="product-detail.php?id1=<?php echo $row2['id']?>">
            <div class="col-lg-4 col-md-4 col-sm-6  " >
				
              <div class="blog-post">
				  
				  
                <div class="blog-thumb">
                             <img style="height:250px; " src="<?php echo $row2['PIC'];  ?>" alt="image" >
                </div>
                <div class="down-content">
                  <span>  </span>
                  <a ><h4 class="alert-dark" align="center"><?php echo $row2['PName'];  ?> </h4></a>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <input type="submit" name="b4" class="btn btn-danger btn-md" value="ADD To CART">
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
				
				
				
            </div>
			  		</a>	  <?php } ?>
           
          </div>
			
			<!------------------->
			
        </div>
      </div>
		</section>
</form>
		
		
		<!------------------section 2----->
			<form>
		<section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts" align="center" >
          <h2 class="text-center alert-dark" >OUR FOOD PRODUCTS</h2>
          <br>
          <div class="row">
           <?php
	        
	  $qry10 = "SELECT * FROM product WHERE Cat_id=8";
	  $res7 = mysql_query($qry10);
	  
	  while($row7 = mysql_fetch_array($res7))
	  {
	  ?>
			  <a href="product-detail.php?id1=<?php echo $row7['id'] ?>">
            <div class="col-lg-4 col-md-4 col-sm-6  " >
				
              <div class="blog-post">
				  
				  
                <div class="blog-thumb">
                             <img style="height:250px; " src="<?php echo $row7['PIC'];  ?>" alt="image" >
                </div>
                <div class="down-content">
                  <span>  </span>
                  <a ><h4 class="alert-dark" align="center"><?php echo $row7['PName'];  ?> </h4></a>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <input type="submit" name="b5" class="btn btn-danger btn-md" value="ADD To CART">
                        </ul>
                      </div>
                    </div>
                  </div>
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

		
	</div>
	</div>
	
	
	<!-------MODAL COLLAPSE START-------------1------>
	
	 <br><br> <br><br> 
	<div   class="container" >
	  <div class="row">
		
		   <p >&nbsp;&nbsp;&nbsp;
  <button  class="btn btn-info btn-lg "   type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">MEN's&nbsp;<span class="fa fa-arrow-down"></span></button>
   </p>
		  
		  
<div class="collapse col-12" id="collapse1" >
  <div class="card card-body "  style="background-color:rgba(0,0,0,0.10) ;" >
	  
	  
	   <h2 class="text-center alert-info" ><span class="fa fa-arrow-circle-down"></span>MEN"S</h2>
	  <form>
	  <div class="main-banner header-text" align="center">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
		<?php
	         
	  $qry8 = "SELECT * FROM product WHERE Cat_id=5";
	  $res2 = mysql_query($qry8);
	  
	  while($row2 = mysql_fetch_array($res2))
	  {
	  ?>
			<a href="product-detail.php?id1=<?php echo $row2['id'] ?>">
          <div class="item">
            <img style="height:250px; " src="<?php echo $row2['PIC'];  ?>" alt="image" >
             
			  <div class="alert-info"><h3><?php echo $row2['Price'];  ?>$&nbsp;&nbsp;<input type="submit" class="btn btn-info btn-md" role="button" value="ADD TO CART"></h3> </div>
          </div>
			</a>
         
			
			<?php } ?>
			
      </div>
    </div>
	  
	  
	
</div>
	  </form>
</div>
		  
</div>	
</div>
	<!-----------------2--------->
	 <br>
	<div   class="container" >
	  <div class="row">
		
		   <p >
  <button  class="btn btn-info btn-lg "   type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">WOMEN's&nbsp;<span class="fa fa-arrow-down"></span></button>
   </p>
		  
		  
<div class="collapse col-12" id="collapse2" >
  <div class="card card-body "  style="background-color:rgba(0,0,0,0.10) ;" >
	  
	   <h2 class="text-center alert-info" ><span class="fa fa-arrow-circle-down"></span>WOMENS</h2>
	  <form> 
	  <div class="main-banner header-text" align="center">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
			
          <?php
	         
	  $qry12 = "SELECT * FROM product WHERE Cat_id=6";
	  $res9 = mysql_query($qry12);
	  
	  while($row9 = mysql_fetch_array($res9))
	  {
	  ?>
			<a href="product-detail.php?id1=<?php echo $row9['id'] ?>">
          <div class="item">
            <img style="height:250px; " src="<?php echo $row9['PIC'];  ?>" alt="image" >
             
			  <div class="alert-info"><h3><?php echo $row9['Price'];  ?>$&nbsp;&nbsp;<input type="submit" class="btn btn-info btn-md" role="button" value="ADD TO CART"></h3> </div>
          </div>
			</a>
         
			
			<?php } ?>
		
			
      </div>
    </div>
	  
	  
	
</div>   
</form>	  
	  
	
</div>  
</div>
		  
</div>	
</div>
	<!------------3-------------->
	 <br>
	<div   class="container" >
	  <div class="row">
		
		   <p >
  <button  class="btn btn-info btn-lg"   type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">KIDS's&nbsp;<span class="fa fa-arrow-down"></span></button>
   </p>
		  
		  
<div class="collapse col-12" id="collapse3" >
  <div class="card card-body "  style="background-color:rgba(0,0,0,0.10) ;" >
	  
	   <h2 class="text-center alert-dark" ><span class="fa fa-arrow-circle-down"></span>KID"S</h2>
	  <form>
	<div class="main-banner header-text" align="center">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
			
          <?php
	         
	  $qry12 = "SELECT * FROM product WHERE Cat_id=7";
	  $res9 = mysql_query($qry12);
	  
	  while($row9 = mysql_fetch_array($res9))
	  {
	  ?>
			<a href="product-detail.php?id1=<?php echo $row9['id'] ?>">
          <div class="item">
            <img style="height:250px; " src="<?php echo $row9['PIC'];  ?>" alt="image" >
             
			  <div class="alert-info"><h3><?php echo $row9['Price'];  ?>$&nbsp;&nbsp;<input type="submit" class="btn btn-info btn-md" role="button" value="ADD TO CART"></h3> </div>
          </div>
			</a>
         
			
			<?php } ?>
			
      </div>
    </div>
	  
	  
	
</div>   
	  
	</form>  
	
</div>  
</div>
		  
</div>	
</div>
</div>
	
	<!--------------------modal--collapse end--->
	
<?php include("button.php") ?>	
	<?php include("footer.php") ?>	

	
	
</body>
</html>