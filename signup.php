<!doctype html>
<html>
 <head>

   
	
	<script>
	/*1*/
		function fn()
		{
			var a;
			a = document.getElementById('t1').value;
			
			if(a=="")
				{
					document.getElementById('t1').style="border:solid 1px red";
					document.getElementById('s1').innerHTML="WRITE A NAME";
					document.getElementById('s1').style="color:red";
					document.f1.t1.focus();
					return false;
					
				}
				 else if(isNaN(a)==false)
				{
					document.getElementById('t1').style="border:solid 1px red";
					document.getElementById('s1').innerHTML="WRITE NAME IN ALPHABETS";
					document.getElementById('s1').style="color:red";
					
				}
				else 
				{
					document.getElementById('t1').style="border:solid 1px skyblue";
					document.getElementById('s1').innerHTML="";
					
				}
		}
		
		/*2*/
		function ln()
		{
			var b;
			b = document.getElementById('t2').value;
			
			if(b=="")
				{
					document.getElementById('t2').style="border:solid 1px red";
					document.getElementById('s2').innerHTML="WRITE A NAME";
					document.getElementById('s2').style="color:red";
					
					
				}
				 else if(isNaN(b)==false)
				{
					document.getElementById('t2').style="border:solid 1px red";
					document.getElementById('s2').innerHTML="WRITE NAME IN ALPHABETS";
					document.getElementById('s2').style="color:red";
					
				}
				else 
				{
					document.getElementById('t2').style="border:solid 1px skyblue";
					document.getElementById('s2').innerHTML="";
					
				}
		}
		
			/*3*/
		function eml()
		{
			var c;
			c = document.getElementById('t3').value;
			
			if(c=="")
				{
					document.getElementById('t3').style="border:solid 1px red";
					document.getElementById('s3').innerHTML="WRITE EMAIL";
					document.getElementById('s3').style="color:red";
					
					return false;
					
				}
				 else if(c.indexOf('@') <= 0)
				{
					document.getElementById('t3').style="border:solid 1px red";
					document.getElementById('s3').innerHTML="USE @ in EMAIl";
					document.getElementById('s3').style="color:red";
					
				}
				else 
				{
					document.getElementById('t3').style="border:solid 1px skyblue";
					document.getElementById('s3').innerHTML="";
					
				}
		}
		
		/*4*/
		function ps()
		{
			var d;
			d = document.getElementById('t4').value;
			
			if(d=="")
				{
					document.getElementById('t4').style="border:solid 1px red";
					document.getElementById('s4').innerHTML="WRITE PASS WORD";
					document.getElementById('s4').style="color:red";
					
					
				}
				 else if(d.length == true)
				{
					document.getElementById('t4').style="border:solid 1px red";
					document.getElementById('s4').innerHTML="USE MORE ";
					document.getElementById('s4').style="color:red";
					
				}
				else 
				{
					document.getElementById('t4').style="border:solid 1px skyblue";
					document.getElementById('s4').innerHTML="";
					
				}
		}

/*button*/
		function btn()
		{
			
			var a,b,c,d;
			a = document.getElementById('t1').value;
			b = document.getElementById('t2').value;
			c = document.getElementById('t3').value;
			d = document.getElementById('t4').value;
			
			if(a=="")
				{
					document.getElementById('t1').style="border:solid 1px red";
					document.getElementById('s1').innerHTML="WRITE A NAME";
					document.getElementById('s1').style="color:red";
					alert('fill the form');
					document.f1.t1.focus();
					return true;
					
				}
			else 
				{
					document.getElementById('t1').style="border:solid 1px skyblue";
					document.getElementById('s1').innerHTML="";
					
				}
			
			if(b=="")
				{
					document.getElementById('t2').style="border:solid 1px red";
					document.getElementById('s2').innerHTML="WRITE A NAME";
					document.getElementById('s2').style="color:red";
				
					document.f1.t2.focus();
					
					
				}
			else 
				{
					document.getElementById('t2').style="border:solid 1px skyblue";
					document.getElementById('s2').innerHTML="";
					
				}
			if(c=="")
				{
					document.getElementById('t3').style="border:solid 1px red";
					document.getElementById('s3').innerHTML="WRITE EMAIL";
					document.getElementById('s3').style="color:red";
					
					document.f1.t3.focus();
					
					
				}
			else 
				{
					document.getElementById('t3').style="border:solid 1px skyblue";
					document.getElementById('s3').innerHTML="";
					
				}
			if(d=="")
				{
					document.getElementById('t4').style="border:solid 1px red";
					document.getElementById('s4').innerHTML="WRITE PASS WORD";
					document.getElementById('s4').style="color:red";
					
					document.f1.t4.focus();
					
					
				}
			else 
				{
					document.getElementById('t4').style="border:solid 1px skyblue";
					document.getElementById('s4').innerHTML="";
					
				}
		}
	
		
		
		
	
	</script>

<body>
			<?php include("head.php") ?>
	<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
	
	<h1> <a href="main.php"><span class="fa fa-arrow-circle-left">BACK</span></a></h1>
	<h1 class="text-info" align="center">REGISTER HERE <span class="fa fa-pencil"></span></h1>
	<br><br>
	&nbsp;&nbsp;&nbsp;<h1 class="text-dark">YOUR PRIVACY OUR PIRORITY<span class="fa fa-arrow-circle-o-down"></span></h1>
		<br><br>
	
	
	
	<!---------------PHP-->
	
	<?php
	
	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db("sp",$con);
	
	if(isset($_REQUEST['b1']))
	{
		$v1 = $_REQUEST['name'];
		$v2 = $_REQUEST['lname'];
		$v3 = $_REQUEST['email'];
		$v4 = $_REQUEST['pass'];
		$v5 = $_REQUEST['city'];
		$v6 = $_REQUEST['stat'];
		$v7 = $_REQUEST['zcode'];
		$v8 = $_REQUEST['pnum'];
		$v9 = $_REQUEST['rad'];
	
	$qry = "SELECT * FROM signup WHERE  Email='$v3' ";
	$qry1 = mysql_query($qry);
	if(mysql_num_rows($qry1))
	{
		echo ("<script>alert('THIS EMAIl IS ALREADY EXIST')</script>");
	}
		
		else
		
		{
		
			$qry2 = "INSERT INTO signup(id,Name,LNAME,Email,Password,City,State,ZCode,Phone,Gender)
			VALUES(NULL,'$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9')";
			mysql_query($qry2);
			header("location:main.php");
		}
		
		
	}
	
	?>
	<!---------------PHP-->
	
	<div class="container-fluid"  style="border:rgba(210,229,231,1.00) solid 10px ">
	
		
		<div class="row"  >
		
		
			<div class="col-lg-12" align="center">
			
			
				<form name="f1">
				<br>
	<div class="form-row">
    <div class="form-group col-md-6">
   
      <input type="text" class="form-control"  placeholder="FIRST NAME" name="name" id="t1" onBlur="fn();" required>
		<span id="s1" ></span>
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control"  placeholder="Last Name" name="lname" id="t2" onBlur="ln();" required>
		<span id="s2" ></span>
    </div>
  </div>
					
					
	
			<h2  class="text-black-50 ">EMAIL&nbsp;&nbsp;&nbsp;</h2>
  <div class="form-row">
    <div class="form-group col-md-6">
   
      <input type="email" class="form-control"  placeholder="EMAIL" name="email" id="t3" onBlur="eml();" required >
		<span id="s3"></span>
    </div>
    <div class="form-group col-md-6">
      <input type="password" class="form-control"  placeholder="PASSWORD" name="pass" id="t4" onBlur="ps();"  required >
		<span id="s4"></span>
    </div>
  </div>				
		
					
					
					<div class="form-group" align="left">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I AM 18 YEAR OLDER
      </label>
    </div>
    </div>
				<h4 align="center">MAILING ADDRESS...<span class="fa fa-envelope"></span></h4>						
					
				
					
							
  <div class="form-row" align="center">
    <div class="form-group col-md-6" >
      <label >City</label>
      <input type="text" class="form-control" name="city" id="t5">
	
		<label >SELECT-STATE</label>
		<select  class="form-control" name="stat">
        <option >Choose...</option>
        <option>PUNJAB</option>
		<option>SINDH</option>
		<option>BALOCHISTAN</option>
		<option>KPK</option>	
      </select>
		</div>
	  
		 <div class="form-group col-md-6" >
			
		<label >ZIP-CODE</label>
      <input type="text" class="form-control" name="zcode" id="t6">
		
		
			
		<label >PHONE NUMBER<span class="fa fa-phone-square"></span></label>
      <input type="text" class="form-control" name="pnum" id="t7">
    </div>
  </div>
  
 

  
		<div class="form-row">
					
		<div class="form-group col-md-12">
			
			<div class="radio "  name="radio">
			
  <input   type="radio" name="rad" checked value="MALE"><label>MALE</label>&nbsp;&nbsp;<span style="font-size:30px; " class="fa fa-male text-info"></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="rad" checked value="Female"><label>FEMALE</label>&nbsp;&nbsp;<span  style="font-size:30px; " class="fa fa-female text-danger"></span>
	
			
			
	</div>
			
			</div>
		</div>
	
					
			 <div class="form-group col-md-10" align="center">
			&nbsp;	&nbsp;	&nbsp;	&nbsp;<input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I AGREE WITH TERM AND CONDITION
      </label>
				 </div>
			
			
    <div class="form-group col-md-10" align="center">
  <input align="left" type="submit" class="btn btn-info col-lg-10" value="sign_in" name="b1" onClick="btn();">
			
  </div>
	
	
					
					
				</form>
				
			</div>
			
			
		</div>
	
	</div>
	
	
	
<?php include("button.php") ?>	
	<?php include("footer.php") ?>	
</body>
</html>
	
	