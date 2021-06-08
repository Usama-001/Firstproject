<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>ONLINE WEB STORE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

	<script>
	/*3*/
		function em1()
		{
			var a;
			a = document.getElementById('t8').value;
			
			if(a=="")
				{
					document.getElementById('t8').style="border:solid 1px red";
					document.getElementById('s8').innerHTML="WRITE EMAIL";
					document.getElementById('s8').style="color:red";
				
					document.f2.t8.focus();
					return false;
					
					
				}
				 else if(a.indexOf('@') <= 0)
				{
					document.getElementById('t8').style="border:solid 1px red";
					document.getElementById('s8').innerHTML="USE @ in EMAIl";
					document.getElementById('s8').style="color:red";
					document.f2.t3.focus();
					
				}
				else 
				{
					document.getElementById('t8').style="border:solid 1px skyblue";
					document.getElementById('s8').innerHTML="";
					
				}
		}
	
		/*4*/
		function ps1()
		{
			var a;
			a = document.getElementById('t9').value;
			
			if(a=="")
				{
					document.getElementById('t9').style="border:solid 1px red";
					document.getElementById('s9').innerHTML="WRITE PASS WORD";
					document.getElementById('s9').style="color:red";
					
					document.f2.t9.focus();
					
				}
				
				else 
				{
					document.getElementById('t9').style="border:solid 1px skyblue";
					document.getElementById('s9').innerHTML="";
					
				}
		}
		
	
	</script>
	<style>
	
		.head1
		{
			background-image: linear-gradient(skyblue,white);
			color: white;
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		}
		
		li
		{
			font-size:20px; 
		}
	</style>
	
   

   

    <!-- Header -->
    <header style="background-image: linear-gradient(white,skyblue,rgba(42,99,176,1.00)); ">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a  class="navbar-brand" href="main.php"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div  class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" >
              <li class="nav-item ">
                <a class="nav-link " href="main.php" >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
				
				
              <li class="nav-item dropdown ">
				  
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">PRODUCT</a>
				
				  <div class="dropdown-menu">
				  <?php 		  
                 $con = mysql_connect("localhost","root","");
                 $db = mysql_select_db("sp",$con);
				  
				  $qry7 = "SELECT * FROM catagori WHERE status = 1 ORDER BY sorting asc";
				  $res2 = mysql_query($qry7);
				  
				  while($row1 = mysql_fetch_array($res2) )
				  {
				  
				  ?>
                    <a class="dropdown-item" href="product.php?ids=<?php echo $row1['id']; ?>"><?php echo $row1['Catagory']?></a>
					  
				  <?php }?>
					   
					  <a class="dropdown-toggle dropdown-item   " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#" style="color:black " style="float:left">MORE</a> 
				<div class="dropdown-menu pull-right">	  
					  <?php 		  
                
				  
				  $qry10 = "SELECT * FROM sub_cat ";
				  $res5 = mysql_query($qry10);
				  
				  while($row5 = mysql_fetch_array($res5) )
				  {
				  
				  ?>
				   
					  <a class="dropdown-item" href="product.php?ids=<?php echo $row5['id']; ?>"><?php echo $row5['Catagory1']?></a>
					  
					
					    <?php }?>
				  </div>
				  
                  </div>
				  
				  
              </li>
				
				

              <li class="nav-item">
                <a class="nav-link" href="catagori.php">CATAGORIES</a>
              </li>

              <li class="nav-item ">
                  <a class="nav-link "  href="about.php" >ABOUT-us</a>
                  
                  
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT-US</a>
              </li>
				
				<!----------------->
				
              <li class="nav-item dropdown">
 <a href="#" class="fa fa-shopping-cart nav-link  "  style="font-size:40px;"></a>
				
              </li>
				
          <!------------------------->
				
              <li class="nav-item">
                        

<!-- Button trigger modal -->
				  
				 
				  <?php 
				  if(isset( $_SESSION['SESS-ID']))
				  {
					  ?>
				  
				  <a class="alert-info" href="logout.php"> LOGOUT </a>
				  
				  <?php			  	  
				  }
				  else
				  {
				?>
				  <input style=" font-size:15px;  " type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" value="LOGIN/SIGN-UP">
				  
				  <?php
					  
				  }
				  ?>
				  
  
				  
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
<a  class="navbar-brand" href="index.html"><h2>E_SHOP<em>&nbsp;<span  class="fa fa-envelope"></span></em></h2></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" align="center">
       <!---------------LOGIN FORM---->
		  <p class="alert-info col-12">LOGIN&nbsp;&nbsp;<span class="fa fa-arrow-down"></span></p>
<div class="container">
  <form name="f2">
   
	  <div class="form-group">
      <div class="col-sm-10">
		 
		        <label >Email:</label> 
        <input type="email" class="form-control" placeholder="Enter email" name="email" id="t8" onBlur="em1();" required>
		  <span id="s8"></span>
      </div>
    </div>
    <div class="form-group">
      <label>Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"  placeholder="Enter password" name="pass" id="t9" onBlur="ps1();" required >
    <span id="s9"></span>
		</div>
    </div>
    
    <div class="form-group">        
      <div class=" col-lg-10">
        <input type="submit" class="btn btn-primary col-12" name="b2" value="LOGIN" onClick=" em1(); ps1(); ">
      </div>
    </div>
  </form>
	
</div>
		  
		  <?php

		  
		  
		  if(isset($_REQUEST['b2']))
		  {
			 
		     $a1 =$_REQUEST['email'];
		     $a2 = $_REQUEST['pass'];
			  
			  $qry3 = "SELECT * FROM signup WHERE Email='$a1' AND Password='$a2'";
			  $res= mysql_query($qry3);
			  $row = mysql_fetch_assoc($res);
			  if(mysql_num_rows($res)>0)
			  {
				  session_regenerate_id();
			    $_SESSION['SESS-ID'] = $row ['id'];
				$_SESSION['SESS-EMAIL'] = $row['Email'];
				  session_write_close();
				  
		echo ("<script>alert('login SUCCEFUL')</script>");
				  
			  }
			  else
				  
			  {
				  
		echo ("<script>alert('LOGIN FAILED')</script>");
			  }
		  }
		  
		  
		  ?>
<!-------------LOGIN FORM END--------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-info"><a href="signup.php">SIGN_UP</a></button>
      </div>
    </div>
  </div>
</div>
	
</li>
		  <!------------------------->
				
            </ul>
          </div>
        </div>
      </nav>
    </header>
	  
	
   
  

	
		  
		 </div>
	  </div>

			 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>