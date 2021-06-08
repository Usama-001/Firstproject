<!doctype html>
<html>
<head>

<title>Untitled Document</title>
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
	
	
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	
	<script>
	function em()
		{
			var a;
			a = document.getElementById('t3').value;
			
			if(a=="")
				{
					document.getElementById('t3').style="border:solid 1px red";
					document.getElementById('s3').innerHTML="WRITE EMAIL";
					document.getElementById('s3').style="color:red";
					
				}
				 else if(a.indexOf('@') <= 0)
				{
					document.getElementById('t3').style="border:solid 1px red";
					document.getElementById('s3').innerHTML="use @";
					document.getElementById('s3').style="color:red";
					
				}
				else 
				{
					document.getElementById('t3').style="border:solid 1px lightgray";
					document.getElementById('s3').innerHTML="";
					
				}
		}
	</script>
</head>

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
    </header>
	
	<!--------------->
	
    <br><br> <br><br> <br><br> 
  <div class="container" style="background-image: linear-gradient(skyblue,white,skyblue); border:solid 4px darkblue">
  
          <h3 style="color: aliceblue">Contact Us</h3><br>
    
          <p>YOU CAN EASILY CONTACT WITH US <h4></h4></p><br><br>
  <div class="row">
  
    
    <div class=" col-md-6 col-xs-6" >
      
		
		<?php  
		$con1 = mysql_connect("localhost","root","");
	    $db1  = mysql_select_db("sp",$con1);
	
	if(isset($_REQUEST['b3']))
	{
		
		$z1 = $_REQUEST['name'];
		$z2 = $_REQUEST['mail'];
		$z3 = $_REQUEST['msg'];
		$qry4 = "INSERT INTO contact(id,Name,Email,Message) VALUE(NULL,'$z1','$z2','$z3')";
		mysql_query($qry4);
	}
	
		
		?>
      
        <form >
          <label class="form-group">
            <input  type="text" class="form-control "  required name="name">
            <span>&nbsp; Name</span>
          
          </label><br>
          <label class="form-group">
            <input type="text" class="form-control"  required  name="mail" id="t3" onBlur="em();">
            <span for="" >&nbsp; Mail</span>
			 </label> <span  id="s3"></span><br>
          <label class="form-group" >
             <input type="text" class="form-control"  required  name="msg">
            <span for="" >&nbsp;Message</span>
            
          </label>
          <br>
    <input type="submit" class="col-12 btn btn-info " value="submit"  name="b3">
        </form>
    </div>
   
	  <br><br>
    <div class="col-ms-6 col-xs-6 " align="center" >
    <ul class="social-icons" >
              <li><a href="#"><span style="font-size: 30px;" class="fa fa-phone">+111222333</span></a></li>
          <br><br>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 30px;" class="fa fa-envelope-square">Eshop@gmail.com</span></a></li>
      <br><br>
      <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 30px;" class="fa fa-street-view">SAHIWAL-FAREED TOWN</span></a></li>
        <br><br>  
      <li><a href="#"><span style="font-size: 30px;" class="fa fa-location-arrow">TELEGRAM</span></a></li>
        
      </ul>
		 <br><br><br>
    </div>
	 <br><br><br>
           
    
  </div>

  </div>
    
  
    <br>
    <!----------map-------->
  <div class="col-lg-12">
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
  
<?php include("button.php") ?>	
  
   <?php include("footer.php")?>

	
	
	
	<!-------------->
	

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