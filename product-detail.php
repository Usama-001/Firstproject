<?php include("head.php") ?>
<br>
<br>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	.rating-header {
    margin-top: -10px;
    margin-bottom: 10px;
}

	</style>
	<script>
		jQuery(document).ready(function($){
	    
	$(".btnrating").on('click',(function(e) {
	
	var previous_value = $("#selected_rating").val();
	
	var selected_value = $(this).attr("data-attr");
	$("#selected_rating").val(selected_value);
	
	$(".selected-rating").empty();
	$(".selected-rating").html(selected_value);
	
	for (i = 1; i <= selected_value; ++i) {
	$("#rating-star-"+i).toggleClass('btn-warning');
	$("#rating-star-"+i).toggleClass('btn-default');
	}
	
	for (ix = 1; ix <= previous_value; ++ix) {
	$("#rating-star-"+ix).toggleClass('btn-warning');
	$("#rating-star-"+ix).toggleClass('btn-default');
	}
	
	}));
	
		
});

	</script>
</head>

<body>
	<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
	
	<br>
	<form>
	<?php

	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db("sp",$con);

    $id = $_GET['id1'];

    $qry13 = "SELECT * FROM product WHERE id='$id'";
    $res15 = mysql_query($qry13);
   
    $row13 = mysql_fetch_array($res15); 

	?>
 <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="<?php echo $row13['PIC']; ?>" alt="image" class="img-fluid wc-image">
            </div>

            <br>

            <div class="row">
				
              <div class="col-sm-4 col-6">
                <div>
                  <img src="<?php echo $row13['PIC']; ?>" alt="image" class="img-fluid">
                </div>
                <br>
              </div>
				
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h2><?php echo $row13['PName']; ?> : Info</h2>
              </div>

              <div class="content">
                <p>em ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum! Alias, dicta. Minima repudiandae sequi iste, nostrum! Neque temporibus officiis harum esse aperiam voluptate? Quibusdam.</p>
              </div>
            </div>

            <br>
            <br>
          
            <div class="contact-us">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h2>PRICE :$<?php echo $row13['Price']; ?> </h2>
                </div>

                <div class="content">
                  
                   
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <label for="">Quantity</label>
                          <input type="text" value="1" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <input type="submit"  class="btn-md btn-info text-white" value="Add to Cart" name="b6">
                        </fieldset>
                      </div>
                    </div>
                  
                </div>
              </div>
            </div>

            <br>
          </div>
			
			<div class="col-sm-10">
			<h3>DESCRIPTION</h3>
			<p>em ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum! Alias, dicta. Minima repudiandae sequi iste, nostrum! Neque temporibus officiis harum esse aperiam voluptate? Quibusdam.</p>
			<p>em ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum! Alias, dicta. Minima repudiandae sequi iste, nostrum! Neque temporibus officiis harum esse aperiam voluptate? Quibusdam.</p>
			</div>
			<div class="col-sm-6">
			<h3>Review's</h3>
				
			<div class="col-xs-6">
		<div class="form-group" id="rating-ability-wrapper">
	    <label class="control-label" for="rating">
	    <span class="field-label-header">GIVE US RATE</span><br>
	    <span class="field-label-info"></span>
	    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
	    </label>
	    <h2 class="bold rating-header" style="">
	    <span class="selected-rating">0</span><small> / 5</small>
	    </h2>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	</div>
	
			</div>
			
			
        </div>
      </div>
    </section>

		
	</form>
	
</body>
</html>