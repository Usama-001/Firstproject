<!DOCTYPE html>
<html lang="en">

 

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
	
    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
	    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:500,d:1000,x:0,e:{x:6}}],
              [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
              [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
              [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
              [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
              [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
              [{b:600,d:1000,o:0.4}],
              [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
              [{b:800,d:1000,o:0.4}],
              [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
              [{b:0,d:1000,o:1,p:{o:{o:4}}}],
              [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else 
				{
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
	  </script>
	  
	   <style>
        /*jssor slider loading skin double-tail-spin css*/
        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 031 css*/
        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.8;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:1;stroke:#000;stroke-opacity:1;}
        .jssorb031 .iav .b {fill:#fff;stroke:#000;stroke-width:1600;fill-opacity:.6;}
        .jssorb031 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
  <body style="background-image:url(images/bg-registration-form-7.jpg) ">

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
	<!-------SERACH BAR-- START--->
	  <br><br><br><br><br>
	   <div class="container col-10 "  >
	  <div class="row">
		 
		   <p>
  
  <button  class="btn btn-info "  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">SEARCH&nbsp;<span class="fa fa-arrow-down"></span></button>
   
  
</p>
<div class="collapse col-12" id="collapseExample" >
  <div class="card card-body "  style="background-color:rgba(0,0,0,0.10) ;" >
	  
	  
	  <div class="input-group" >
  <input type="search" class="form-control rounded col-12" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" />
  <button type="button" class="btn btn-primary">search</button>
</div>
	  
  </div>
</div>
	
		  
		 </div>
	  </div>
<!-------SERACH BAR--END--->
	  <br>
    <!-- Page Content -->
    
<div class="container-fluid">
	  
<div class="row">
	
	<!-- Banner Starts Here -->
	  <div class="col-12">
	  <div id="jssor_1" class="col-12" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.5;" src="img/px-action-athlete-athletes-848618-image.jpg" />
                <div data-ts="flat" data-p="320" style="left:144px;top:80px;width:550px;height:90px;position:absolute;overflow:hidden;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="0" style="left:550px;top:0px;width:550px;height:90px;position:absolute;overflow:hidden;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="1" style="left:20px;top:18px;width:200px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;letter-spacing:0.1em;">SPORTS PRODUCTS</div>
                        <div data-to="50% 50%" data-ts="preserve-3d" data-arr="2" style="left:19px;top:36px;width:600px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;letter-spacing:0.05em;"><span style="font-weight:900;color:#e04338;">DON'T JUST</span> CHASE YOUR DREAMS...</div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/px-beach-daylight-fun-1430675-image.jpg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="3" style="left:400px;top:-30px;width:500px;height:400px;position:absolute;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="4" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                            <div data-to="50% 50%" data-ts="preserve-3d" data-t="5" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                                    <div data-to="50% 50%" data-t="7" style="left:-50px;top:175px;width:600px;height:38px;position:absolute;opacity:0.3;color:#00a186;font-size:32px;font-weight:700;line-height:1.2;text-align:center;">Create your kind of holiday<br> WITH <p style="color: rgba(221,196,108,1.00)">E_SHOP</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/px-fun-man-person-2361598-image.jpg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-arr="8" style="left:-2px;top:20px;width:1000px;height:20px;position:absolute;opacity:0;color:#0ff2f2;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:1.2;letter-spacing:1.3em;text-align:center;">CHAMPIONS ARE MADE WHEN NO ONE IS WATCHING</div>
                </div>
            </div>
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.5;" src="img/faded-monaco-scenery-evening-dark-picjumbo-com-image.jpg" />
                <div data-ts="flat" data-p="1800" data-po="50% -100%" style="left:120px;top:90px;width:600px;height:300px;position:absolute;">
                    <svg viewbox="0 0 200 200" width="200" height="200" data-t="10" style="left:66px;top:21px;display:block;position:absolute;opacity:0.6;overflow:visible;">
                        <path stroke-dasharray="0,700" fill="none" stroke="#ffffff" d="M0,100C0,44.77152 44.77152,0 100,0C155.22848,0 200,44.77152 200,100C200,155.22848 155.22848,200 100,200C44.77152,200 0,155.22848 0,100Z" data-t="9"></path>
                    </svg>
                    <svg viewbox="0 0 80 80" width="80" height="80" data-t="12" style="left:3px;top:124px;display:block;position:absolute;opacity:0.6;overflow:visible;">
                        <path stroke-dasharray="0,400" fill="none" stroke="#ffffff" shape-rendering="crispEdges" d="M80,80L0,80L0,0L80,0Z" data-t="11"></path>
                    </svg>
                    <svg viewbox="0 0 500 200" data-to="50% 50%" width="500" height="200" data-t="13" style="left:50px;top:50px;display:block;position:absolute;opacity:0;overflow:visible;">
                        <g>
                            <text fill="#ffffff" x="17" y="110" style="position:absolute;font-family:Montserrat,sans-serif;font-size:32px;font-weight:300;overflow:visible;">WE DELIVER
                            </text>
                            <text fill="#ffffff" x="188" y="110" style="position:absolute;font-family:Montserrat,sans-serif;font-size:32px;font-weight:500;letter-spacing:0.1em;overflow:visible;">&nbsp;ON DESTINATION
                            </text>
                            <text fill="#ff3700" x="218" y="130" style="position:absolute;font-family:Montserrat,sans-serif;font-size:16px;font-weight:900;letter-spacing:0.1em;overflow:visible;">EYE FOCUS
                            </text>
                            <text fill="#ff3700" x="333" y="130" style="position:absolute;opacity:0.8;font-family:Montserrat,sans-serif;font-size:16px;font-weight:700;letter-spacing:0.1em;overflow:visible;">MOTION TITLES
                            </text>
                        </g>
                    </svg>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/perfume.jpg" />
                <div data-ts="flat" data-p="500" style="left:160px;top:-30px;width:800px;height:200px;position:absolute;">
                    <div data-arr="14" style="left:0px;top:36px;width:800px;height:70px;position:absolute;opacity:0;color:#199494;font-family:'Roboto Condensed',sans-serif;font-size:32px;font-weight:400;line-height:1.2;letter-spacing:-0.05em;text-align:center;text-shadow:2px 1px #d9d99a;">ADDING&nbsp;&nbsp;<span style="font-size:2em;">PERFECTION</span>&nbsp; TO&nbsp; YOUR&nbsp;&nbsp;<span style="font-size:1.6em;">LAWN</span></div>
                    <div data-arr="15" style="left:0px;top:106px;width:800px;height:48px;position:absolute;opacity:0;color:#0d4d4d;font-family:'Roboto Condensed',sans-serif;font-size:20px;font-weight:400;line-height:1.2;letter-spacing:0.2em;text-align:center;text-shadow:1px 1px #d9d99a;">CREATING GREEN <span style="font-size:2em;">SPACES</span> FOR LIVING</div>
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:13px;height:13px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
		  
		  </div>
    
	  <script type="text/javascript">jssor_1_slider_init();
    </script>
	  
    <!-- Banner Ends Here -->
	
	
	</div>	    
</div>
	
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
	  $qry9 = "SELECT * FROM product WHERE Rank = 1";
	  $res4 = mysql_query($qry9);
	  
	  while($row2 = mysql_fetch_array($res4))
	  {
	  ?>
			  <a href="product-detail.php?id1=<?php echo $row2['id']; ?>">
            <div class="col-lg-4 col-md-4 col-sm-6  " >
				
              <div class="blog-post">
				  
				  
                <div class="blog-thumb">
                             <img style="height:250px; " src="<?php echo $row2['PIC'];  ?>" alt="image" >
                </div>
                <div class="down-content">
                  <span>  </span>
                  <a href="products.html"><h4 class="alert-dark" align="center"><?php echo $row2['PName'];  ?> </h4></a>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <input type="submit" name="b6" class="btn btn-danger btn-md" value="ADD To CART">
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
			
			<!------------------->
			
        </div>
      </div>
	  </section>
	  </form>

	 <!-------------------> 
	  <!---------------SMALL SLIDER---1 start------>
	  
	           <h2 class="text-center alert-dark" ><span class="fa fa-arrow-circle-down"></span>50% DISCOUNT&nbsp;&nbsp;<span class="fa fa-gift"></span></h2>
		<form>
	   <div class="main-banner header-text" align="center">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
			<?php
	         
	  $qry8 = "SELECT * FROM product";
	  $res2 = mysql_query($qry8);
	  
	  while($row2 = mysql_fetch_array($res2))
	  {
	  ?>
			<a href="product-detail.php?id1=<?php echo $row2['id']; ?>">
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
	  	  <!---------------SMALL SLIDER---1 end------>
	  <br>
	  
	  
	  
	  	  <!---------------SMALL SLIDER---2 start------>
	  
	  <h2 class="text-center alert-dark" ><span class="fa fa-arrow-circle-down"></span>SPECIAL OFFER"S</h2>
	 <form>
		<div class="main-banner header-text" align="center">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
			
          <?php
	      
	  $qry9 = "SELECT * FROM product ORDER BY Rank asc";
	  $res3 = mysql_query($qry9);
	  
	  while($row3 = mysql_fetch_array($res3))
	  {
	  ?>
			<a href="product-detail.php?id1=<?php echo $row3['id']; ?>">
          <div class="item">
            <img style="height:250px; " src="<?php echo $row3['PIC'];  ?>" alt="image" >
             
			  <div class="alert-info"><h3><?php echo $row3['Price'];  ?>$&nbsp;&nbsp;<input type="submit" class="btn btn-info btn-md" role="button" value="ADD TO CART"></h3> </div>
          </div>
			</a>
         
			
			<?php } ?>
			
         
			
      </div>
    </div>
	  
	  
	
</div> 
	  
	  </form>
  	  	  <!---------------SMALL SLIDER---2 end------>
	  
   
	  <!--------slider end------------->
	 
	 <!-- Banner Ends Here -->  
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>YOU CAN FIND A BETTER AND CHEAP PRODUCT FROM HERE</span>
                  <h4>THE BEST ECOMMERCE WEBSITE IN THE WORLD</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="contact.php">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-posts grid-system col-xs-10">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">OUR SPECIAL SERVICES</h2>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                  <img class="col-sm-8" src="img/del.png" alt="">
               
                <div class="down-content">
                  <a href="blog-details.html"><h4>DELIVER ON TIME</h4></a>
             
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                  <img  class="img-fluid"src="assets/images/cus.jpg" alt="">
                
                <div class="down-content">
                  <a href="blog-details.html"><h4>CUSTOMER CARE 24 H</h4></a>
                  
             
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="">
                  <img class="col-sm-8" src="img/refund.png" alt="">
             
                <div class="down-content">
                  <a href="blog-details.html"><h4>FULL REFUND</h4></a>
     
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
<?php include("button.php") ?>	
    <footer>
		
      <div class="container" style="opacity: 0.8">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#"><span style="font-size:40px; " class="fa fa-facebook-square"></span></a></li>
              <li><a href="#"><span style="font-size:40px; " class="fa fa-twitter-square"></span></a></li>
              <li><a href="#"><span style="font-size:40px; " class="	fa fa-google-plus-square"></span></a></li>
              <li><a href="#"><span style="font-size:40px; " class="		fa fa-instagram"></span></a></li>
            </ul>
			  
			  <script>//made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };</script>
	<h1 class=" col-lg-12 col-md-10 col-xs-8">
  <a href="" class="typewrite" data-period="2000" data-type='[ "SHARE.", "YOUR .", "SUGGESTION", "WE WILL RESPOND" ]'>
    <span class="wrap"></span>
  </a>
</h1>
			  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  
		<input align="center" type="submit" class="btn btn-outline-primary col-sm-1  " value="SUBMIT">
  </div>
		 </div>
			<br>	
		  
         	
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2020 Company Name
                | Template by: <a href="https://www.phpjabbers.com/">E_SHOP.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
   

  </body>
</html>