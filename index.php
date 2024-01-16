<!doctype html>

<html lang="en">

<head>


    <title>Novamantic Technology</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />

     <link rel="shortcut icon" href="../favicon.ico">

		<link rel="stylesheet" type="text/css" href="css/component.css" />
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>


    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/owl.carousel.min.js"></script>


    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>


    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link href="Hover-master/Hover-master/css/hover-min.css" rel="stylesheet" type="text/css" />
    <link href="Hover-master/Hover-master/css/hover.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/modernizr.custom.js"></script>

<script type="text/javascript">

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
		  $(".navbar").addClass("fixednavbar");
    } else
	{
	   $(".navbar").removeClass("fixednavbar");
	}

}); //missing );


</script>
<script>
			(function ( $ ) {
				$.fn.CustomMap = function( options ) {

					var posLatitude = $('#map').data('position-latitude'),
					posLongitude = $('#map').data('position-longitude');

					var settings = $.extend({
						home: { latitude: posLatitude, longitude: posLongitude },
						text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
						icon_url: $('#map').data('marker-img'),
						zoom: 15
					}, options );

					var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

					return this.each(function() {
						var element = $(this);

						var options = {
							zoom: settings.zoom,
							center: coords,
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							mapTypeControl: false,
							scaleControl: false,
							streetViewControl: false,
							panControl: true,
							disableDefaultUI: true,
							zoomControlOptions: {
								style: google.maps.ZoomControlStyle.DEFAULT
							},
							overviewMapControl: true,
						};

						var map = new google.maps.Map(element[0], options);

						var icon = {
							url: settings.icon_url,
							origin: new google.maps.Point(0, 0)
						};

						var marker = new google.maps.Marker({
							position: coords,
							map: map,
							icon: icon,
							draggable: false
						});

						var info = new google.maps.InfoWindow({
							content: settings.text
						});

						google.maps.event.addListener(marker, 'click', function() {
							info.open(map, marker);
						});

						var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];

						map.setOptions({styles: styles});
					});

};
}( jQuery ));

jQuery(document).ready(function() {
	jQuery('#map').CustomMap();

  $('.nav a').on('click', function(){
    $('.btn-navbar').click(); //bootstrap 2.x
    $('.navbar-toggle').click() //bootstrap 3.x by Richard
});
});
</script>



    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


<style>
  .navbar-default .navbar-nav {
    padding: 15px 0;
    background: rgb(255, 255, 255);
}
 

  .footer-message
  {
  color: #eede2b !important;
  font-weight: 600!important;

  }

  .clearfix{clear: both;}


  /*-- banner-bottom --*/
  .testimonials{
  padding:5em 0;
  }

  /*-- testimonials --*/
  .phpkida_testimonials_grids{
  width:80%;
  margin:3em auto 0;
  margin-top:0px !important;
  }
  .pk_testimonial_grid{
  padding: 0px;
  background: #fff;
  text-align: center;
  position: relative;
  margin: 5em 1.2em 0;
  }
  .pk_testimonial_grid:focus,.agileits_testimonial_grid:focus{
  outline:none;
  }
  .pk_testimonial_grid_pos{
  position:absolute;
  width:100%;
  text-align:center;
  top:-25%;
  left:0%;
  }
  .pk_testimonial_grid_pos img{
  margin:0 auto;
  }
  .pk_testimonial_grid p{
  color:#999;
  line-height:2em;
  position:relative;
  padding-left:2em;
  }
  .pk_testimonial_grid p:before{
  content:"\f10d";
  font-size:2em;
  color:#ec9114;
  font-family:FontAwesome;
  position:absolute;
  top:0%;
  left:0%;
  }
  .agileits_testimonial_grid h4{
  font-size:1.1em;
  color:#212121;
  margin:1em 0 0.5em;
  }
  .agileits_testimonial_grid h5{
  font-size:.8em;
  color:#ec9114;
  }
  /* Slider */
  .slick-slider
  {
  position: relative;

  display: block;

  -moz-box-sizing: border-box;
  box-sizing: border-box;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  -webkit-touch-callout: none;
  -khtml-user-select: none;
  -ms-touch-action: pan-y;
  touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
  }

  .slick-list
  {
  position: relative;

  display: block;
  overflow: hidden;

  margin: 0;
  padding: 0;
  }
  .slick-list:focus
  {
  outline: none;
  }
  .slick-list.dragging
  {
  cursor: pointer;
  cursor: hand;
  }

  .slick-slider .slick-track,
  .slick-slider .slick-list
  {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  }

  .slick-track
  {
  position: relative;
  top: 0;
  left: 0;

  display: block;
  }
  .slick-track:before,
  .slick-track:after
  {
  display: table;

  content: '';
  }
  .slick-track:after
  {
  clear: both;
  }
  .slick-loading .slick-track
  {
  visibility: hidden;
  }

  .slick-slide
  {
  display: none;
  float: left;

  height: 100%;
  min-height: 1px;
  }
  [dir='rtl'] .slick-slide
  {
  float: right;
  }
  .slick-slide img
  {
  display: block;

  }
  .slick-slide.slick-loading img
  {
  display: none;
  }
  .slick-slide.dragging img
  {
  pointer-events: none;
  }
  .slick-initialized .slick-slide
  {
  display: block;
  }
  .slick-loading .slick-slide
  {
  visibility: hidden;
  }
  .slick-vertical .slick-slide
  {
  display: block;

  height: auto;

  border: 1px solid transparent;
  }
  .slick-arrow.slick-hidden {
  display: none;
  }
  /* Arrows */
  .slick-prev,
  .slick-next
  {
  line-height: 0;
  position: absolute;
  top: 60%;
  display: block;
  width: 50px;
  height: 40px;
  margin-top: 0;
  padding: 0;
  cursor: pointer;
  color: #fff;
  border: none;
  font-size: 1em;
  outline: none;
  background: #333;
  z-index: 9;
  }
  .slick-prev:hover,
  .slick-prev:focus,
  .slick-next:hover,
  .slick-next:focus
  {
  outline: none;
  }
  .slick-prev:hover:before,
  .slick-prev:focus:before,
  .slick-next:hover:before,
  .slick-next:focus:before
  {
  opacity: 1;
  }
  .slick-prev.slick-disabled:before,
  .slick-next.slick-disabled:before
  {
  opacity: .25;
  }

  .slick-prev:before,
  .slick-next:before
  {
  font-family: 'FontAwesome';
  line-height: 1;

  opacity: .75;
  color: white;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  }
  .slick-prev:before
  {
  content:"\f177";
  }
  [dir='rtl'] .slick-prev:before
  {
  content: "\f177";
  }

  .slick-next,[dir='rtl'] .slick-prev
  {
  right:-6.5%;
  }
  [dir='rtl'] .slick-next,.slick-prev
  {
  right: auto;
  left:-6.5%;
  }
  .slick-next:before
  {
  content: "\f178";
  }
  [dir='rtl'] .slick-next:before
  {
  content: "\f178";
  }

  /* Dots */
  .slick-slider
  {
  margin-bottom: 30px;
  }

  .slick-dots
  {
  position: absolute;
  bottom: -45px;

  display: block;

  width: 100%;
  padding: 0;

  list-style: none;

  text-align: center;
  }
  .slick-dots li
  {
  position: relative;

  display: inline-block;

  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;

  cursor: pointer;
  }
  .slick-dots li button
  {
  font-size: 0;
  line-height: 0;

  display: block;

  width: 20px;
  height: 20px;
  padding: 5px;

  cursor: pointer;

  color: #212121;
  border: 0;
  outline: none;
  background:transparent;
  }
  .slick-dots li button:hover,
  .slick-dots li button:focus
  {
  outline: none;
  }
  .slick-dots li button:hover:before,
  .slick-dots li button:focus:before
  {
  opacity: 1;
  }
  .slick-dots li button:before
  {
  font-family: 'FontAwesome';
  font-size: 13px;
  line-height: 20px;
  position: absolute;
  top: 0;
  left: 0;
  width: 20px;
  height: 20px;
  content: "\f111";
  text-align: center;
  opacity: .25;
  color: #808080;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  }
  .slick-dots li.slick-active button:before
  {
  opacity: .75;
  color: black;
  }
  /*-- //testimonials --*/


  /*-- //icons --*/
  /*--Typography--*/

  @media (max-width: 991px){
  .pk_testimonial_grid {
  padding:3em 2.7em 2em;
  margin: 5em 0.5em 0;
  }
  .pk_testimonial_grid p:before {
  font-size: 1.5em;
  }
  .pk_testimonial_grid p {
  padding-left: 1em;
  }
  }

@media (max-width: 1200px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
  }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
    margin-top: 7.5px;
  }
  .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
      display:block !important;
  }
}

  @media (max-width: 736px){
  .slick-list {
  padding: 0 !important;
  }
  .slick-prev, .slick-next {
  width: 40px;
  }
  }

  @media (max-width: 640px){
  .pk_testimonial_grid {
  padding: 3em 2em 2em;
  }
  }
  @media (max-width: 600px){
  .agileits_testimonial_grid h4 {
  font-size: 1em;
  }
  .pk_testimonial_grid {
  padding: 3em 1.5em 2em;
  margin: 4em 0.5em 0;
  }
  }

  @media (max-width: 480px){
  .pk_testimonial_grid {
  padding:2em 1em 1.5em;
  margin:3em 0.2em 0;
  }
  .pk_testimonial_grid p:before {
  font-size: 1em;
  }
  .pk_testimonial_grid_pos {
  top: -19%;
  }
  .slick-slide img {
  width: 100%;
  }
  }

  @media (max-width: 384px){
  .pk_testimonial_grid_pos {
  top: -9%;
  }
  .pk_testimonial_grid {
  margin: 3em 0.2em 0;
  }
  }

  @media (max-width: 320px){
  .pk_testimonial_grid_pos {
  top: -19%;
  }
  }


  radio-group{
  position: relative;
  }

  .radio{
  display: inline-block;
  width: 25px;
  height: 25px;
  line-height: 25px;
  text-align: center;
  color:White;
  background:#343353;
  cursor: pointer;
  margin: 2px 0;
  font-size: 12px;

  }



  .radio.selected
  {
  background: #11d318;

  color:White;
  font-size: 12px;
  }



</style>


</head>

<body>

    <!-- Full Body Container -->
    <div id="container">


        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <header class="clearfix">

            <!-- Start Top Bar -->
            <!-- .top-bar -->
            <!-- End Top Bar -->


            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.php">

                            <img alt="" src="images/compnay_logo.png" class="mt-6-up">
                              <div id="tag_line_div"> <span class="tag-line"> Secure Assessment Solutions
                                  </span>
                              </div>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Stat Search -->

                        <!-- End Search -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a  href="#about"  id="btn-1">Who we are</a>

                            </li>
                            <li>
                                <a href="#value">Our Beliefs & Values</a>

                            </li>

                            <li>
                                <a href="#services">Our Valued Services</a>

                            </li>
                            <li>
                              
  <a href="#features">Features</a>
                            </li>
                              <li><a href="#contact">Contact Us</a>
                            </li>
                              <li id="coffee_tab"><a href="#" data-toggle="modal" data-target="#myModal" style="    background: #31bb31;
    color: white;"><i class="fa fa-coffee" style="    position: absolute;
    display: block;
    margin-top: -16px;
    margin-left: 38px;"></i>Coffee With us</a>
                            </li>



                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->

        </header>
        <!-- End Header Section -->


        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog coffee-modal-box">

      <!-- Modal content-->
      <div class="modal-content coffee-modal-content  " >





        <div class="modal-body  coffee-modal-body no-padding">

         <div >

         <div class="col-md-5  coffee-modal-content">

         <div class="form-heading">Your Information
         <p class="service-quote" style="">Give us an opportunity to make a presentation and detailed demonstration of our solutions for your organisation.</p>
        <hr class="modal-hr" />
         </div>

         <form>
         <div class="modal-form">
         <label>Name</label>
         <i class="fa fa-user"></i>
         <input type="text" placeholder="Enter Your Name"/>
          <label>Email</label>
         <i class="fa fa-envelope"></i>
         <input type="text"  placeholder="Enter Your Email" />
          <label>Company Name</label>
         <i class="fa fa-building" ></i>
         <input type="text" placeholder="Enter Company Name"  />
          <label>Phone</label>
         <i class="fa fa-phone"></i>
         <input type="text" placeholder="Enter Phone Number" />
         </div>

         </form>
         </div>
           <div class="col-md-7">
           <div class="modal-service-area">
           <img src="images/coffee-img.gif" />
           <div class="service-tag">Select Services</div>
           <div class="radio-group ">
           <div class="radio-group ">
<div class="">


  <div class="row">


  <div class="col-md-6">
  <ul>
  <li><div class='radio ' id='ravi' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">Online/Offline Application  </span></li>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">Computer Based Assessment</span></li>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">OMR Based Assessment</span></li>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">Test Center Management</span></li>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">Question Paper  Management</span></li>
  </ul>

  </div>

    <div class="col-md-6">
  <ul>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">Examination Audit Services</span></li>

  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">OMR Sheet Scanning</span></li>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">Result Generation Process</span></li>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">Recruitment Consultant</span></li>
  <li><div class='radio ' data-value="Two"><i class="fa fa-check"></i></div><span class="service-name">OMR Sheet Design & Printing  </span></li>

  </ul>

  </div>


  </div>
 <br />
 <label ><i class="fa fa-smile-o"></i>&nbsp;&nbsp;Your Message</label>
<textarea placeholder="write here"></textarea>

    <button class="modal-send-btn">Send Now</button>
  </div>






  </div>
           </div>
           </div>

         </div>



        </div>

      </div>

    </div>
  </div>

</div>

  <!-- Modal -->


        <!-- Start Home Page Slider -->
        <section id="home">
            <!-- Carousel -->
            <div id="main-slide" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators" style="display:none">
                    <li data-target="#main-slide" data-slide-to="" class="active"></li>
                    <li data-target="#main-slide" data-slide-to="1"></li>
                    <li data-target="#main-slide" data-slide-to="2"></li>
                    <li data-target="#main-slide" data-slide-to="3"></li>
                </ol>
                <!--/ Indicators end-->

                <!-- Carousel inner -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="images/slider/bg1.jpg" alt="slider" data-animation="animated fadeInDown">
                        <div class="slider-content ">
                            <div class="col-md-12 shift-text " style="margin-left: 5%;">
                                <h2 class="animated2" style="display:none">
                        		  <span>Conduct Exam Gets  <span style="color:#33cc33;">Better & Better</span> </span>
                        	    </h2>

                                <h3 class="animated3" style=" margin-top:  146px;" >
                            		
                            	</h3>

                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->
                    <div class="item">
                        <img class="img-responsive" src="images/slider/bg2.jpg" alt="slider" data-animation="animated fadeInDown" >
                        <div class="slider-content  " >
                            <div class="col-md-12 shift-text " style="margin-left: 5%;">
                               <h2 class="animated2" style="display:none">
                        		  <span>Conduct Exam Gets <span style="color:#33cc33;">Better & Better</span> </span>
                        	    </h2>

                                <h3 class="animated3" style=" margin-top:  146px;" >
                            	
                            	</h3>

                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->

                    <!--/ Carousel item end -->
                </div>
                <!-- Carousel inner end-->

                <!-- Controls -->
                <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <!-- /carousel -->
        </section>
        <!-- End Home Page Slider -->


        <!-- Start Services Section -->




</div>

<div >








<div class="light-bg"  >
<span id="about" style="
    margin-top: 27%;
    position: absolute;
    bottom: 0px;
    top: 0px;
"></span>
<div class="container"  >
          <div class="center-heading"><span class="no-bold">Who We </span> are?

             <div><img src="images/title-border.png" /></div>


  <p><i class="fa fa-quote-left"></i>Novamantic Technology is a specialised company focusing exclusively on testing and assessment services. We provide services to leading Educational Institutions, Government organizations, Corporate entities, individual customers and international clients. Our in-dept research in the industry initiated development of innovative solutions that help meet our customers' requirements.<i class="fa fa-quote-right"></i>
</p>

  <p id="demo" class="collapse">


   Novamantic’s forte lies in managing and effectively controlling all processes involved in online/offline assessments with the best choice for single window outsourced assessment and other associated services.

<br /></br>

Our assessment processes are ISO 27001: 2013 & 9001:2015, certified, ensuring highest levels of quality and security of services that we offers.
<br /></br>
Leveraging our rich experience and robust technology framework, Novamantic has streamlined the examination process for a number of Leading Government bodies, Educational Institutions, Examination Boards, Universities, and Corporates.

<br /><br />
With a wide range of best examination service offerings, Novamantic has successfully helped organisations automate the examination processes – from application form processing to test administration, including candidate authentication and digital evaluation of answer scripts.
  </p>
<div id="value" tabindex="-1" style="   
    margin-top: 50%;
    position: absolute;
    bottom: 0px;
    top: 0px;"></div>
  <button type="button" class="btn  read-more-button" id="read" onclick="convert()" data-toggle="collapse" data-target="#demo">Read More</button>


             <div></div>
          </div>

          </div>

          </div>
         
          <div class="container"    >

          <div class="center-heading" ><span class="no-bold">Our Beliefs &</span> Values

             <div><img src="images/title-border.png" /></div>

          </div>

          <div class="row">


                    <div class="col-md-6 service-box service-center animated fadeIn delay-01" data-animation="fadeIn" data-animation-delay="01">

                    <div  class="value-box ">
                    <div>
                        <div class="service-icon">
                          <img src="/corporate_misson.png" style="
    max-width: 16%;
">
                        </div>
                        <div class="service-content">
                            <h4>Corporate Mission</h4>
                            <div class="seprator"></div>
                            <p>In the era of digitalisation, redefining the long and lengthy process of testing and assessment to quick, secured, reliable and cost effective.</p>

                        </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-6 service-box service-center animated fadeIn delay-02" data-animation="fadeIn" data-animation-delay="02">
                     <div  class="value-box">
                        <div class="service-icon">
                          <img src="/corporate_vision.png" style="
    max-width: 16%;
">
                        </div>
                        <div class="service-content">
                            <h4>Corporate Vision</h4>
                            <div class="seprator"></div>
                            <p>To be a global leader in providing various Pre and Post testing and assessment solutions for educational institutions, government organisations, vocational institutes, corporate entities and international clients.</p>
                        </div>
                         </div>
                    </div>





                </div>

          </div>



        <!-- End Services Section -->


        <!-- Start Purchase Section -->





        <div class="section purchase" id="usp">
            <div class="container">

                 <div class="center-heading"><span class="no-bold">Sector</span> We cater

             <div><img src="images/title-border.png" /></div>

          </div>
                <!-- Start Video Section Content -->
                <div class="parallax-text-container-1">

                  <div class="parallax-text-item">




                  <ul class="grid cs-style-4">
                  	<li>
					<figure>
						<div><img src="images/usp/2.png" alt="img02"></div>
				  <figcaption>
							<h3>For Government</h3>
							<span style="font-size: 11px;">Facilitating recruitment for Central and State Governments.</span>
											</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/usp/5.png" alt="img05"></div>
				  <figcaption>
							<h3>For Academic</h3>
							<span style="font-size: 11px;">Turnkey Assessment Solutions to cater all examination needs.</span>
												</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/usp/6.png" alt="img06"></div>
				  <figcaption>
							<h3>For Corporate</h3>
							<span style="font-size: 11px;">Assessments to help Corporate find the best candidates.</span>
												</figcaption>
					</figure>
				</li>

				<li>
					<figure>
						<div><img src="images/usp/3.png" alt="img04"></div>
				  <figcaption>
							<h3>For Professional Association</h3>
							<span style="font-size: 11px;">Assessment services for Vocational Institutes to promote diversified learning.</span>
													</figcaption>
					</figure>
				</li>

                <li>
					<figure>
						<div><img src="images/usp/7.png" alt="img04"></div>
				  <figcaption>
							<h3>For Individual & International clientele </h3>
							<span style="font-size: 11px;">Providing various Assessment services to global and individual clients.</span>
													</figcaption>
					</figure>
				</li>

			</ul>

              </div>
            </div>
            <div id="services" tabindex="-1" style="
     
    margin-top: 24%;
    position: absolute;
    bottom: 0px;
    top: 0px;
"></div>
                <!-- End Section Content -->

            </div><!-- .container -->
        </div>


     
          <div class="center-heading" ><span class="no-bold">Services</span> we Offer

                     <div><img src="images/title-border.png"></div>




                  </div>


        <div class="container">


         <div class="services-section social">


        <div class="row ">
        <div class="col-md-2 service-item-2"> <div class="hvr-float-shadow">

            <img src="images/services_icons_color/Application-01.png">



        <div class="service-title">Online/Offline <br>Application Process</div>
        </div></div>
        <div class="col-md-2  service-item-2">


        <div class="hvr-float-shadow"> <img src="images/services_icons_color/computer-01.png"><div class="service-title">Computer Based <br>Assessment</div></div></div>
        <div class="col-md-2 service-item-2"><div class="hvr-float-shadow"> <img src="images/services_icons_color/Exam-01.png"><div class="service-title">OMR Based <br>Assessment</div></div></div>
        <div class="col-md-2 service-item-2"><div class="hvr-float-shadow"> <img src="images/services_icons_color/center-01.png"><div class="service-title">Test Center <br>Management</div></div></div>
        <div class="col-md-2 service-item-2"><div class="hvr-float-shadow"><img src="images/services_icons_color/Question-paper-01.png"><div class="service-title">Question Paper <br>Management</div></div></div>
          <div class="col-md-2 service-item-2">
        <div class="hvr-float-shadow"><img src="images/services_icons_color/OMR-01.png">

        <div class="service-title">OMR Sheet <br>Designing &amp; Printing</div></div>
        </div>

        </div>
        <div class="row ">

        <div class="col-md-2 service-item-2"><div class="hvr-float-shadow">
            <img src="images/services_icons_color/scan-01.png"><div class="service-title">OMR Sheet <br>Scanning</div></div></div>
        <div class="col-md-2 service-item-2"><div class="hvr-float-shadow"><img src="images/services_icons_color/result-01.png"><div class="service-title">Result Generation<br> Process</div></div></div>
        <div class="col-md-2 service-item-2"><div class="hvr-float-shadow"> <img src="images/services_icons_color/consult-01.png"><div class="service-title">Recruitment <br>Consultant</div></div></div>
        <div class="col-md-2 service-item-2"><div class="hvr-float-shadow"><img src="images/services_icons_color/audit-01.png"><div class="service-title">Examination <br>Auditing Services</div></div></div><div class="col-md-2 service-item-2"><div class="hvr-float-shadow"><img src="images/services_icons_color/exam_mangement-01.png"><div class="service-title">
            Document <br>Management System
          </div></div></div>
        <div class="col-md-2 service-item-2" ><div class="hvr-float-shadow"><img src="images/services_icons_color/election.png"><div class="service-title">Election Polls <br> &amp; Surveys
        </div></div>
 

        </div>
        </div>

        </div>


        </div>



       






<div class="section purchase-3 testimonial-area" id="Div1">


<section id="carousel">
	<div class="container">
    <div class="center-heading">


    <span class="no-bold">Current</span> Openings

             <div><img src="images/title-border.png"></div>

          </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="opening-main-text" style="display:none;">
            Willingness to travel across <div class="responsive-inline">PAN India</div>
          </div>

          <div class="opening-description">We offer ample opportunity to the creative minds and invite applications from aspiring, young and experienced candidates thirsty for taking up new challenges. </div>
          <div class="opening-seperator" style="display:none"></div>
          </br>

          <div class="opening-tag">Note:</div>
          <div class="opening-note">

            1. Willingness to travel across India</br>
            2. Preference will be given to employees who have past experience in
            <center>(TESTING AND ASSESSMENT COMPANY)</center>

          </div>





        </div>

        <div class="col-md-6" >
          <div class="opening-right-part">
            <ul>
              <li>
                Business Analyst
                <a type="button"  href="Business_Analyst.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>

              <li>
                Sales Manager<a type="button"  href="Sales_Manager.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>
              <li>
                Business Development Officer<a type="button"  href="Business_Development_Officer.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>
              <li>
                 Customer Relation Executive<a type="button"  href="Customer_Relation_Executive.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>


              <li>
                Test Center Administrator<a type="button"  href="Test_Center_Administrator.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>
              <li>
                Test Center Manager<a type="button"  href="Test_Center_Manager.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>
              <li>
                Quality and Security Analyst<a type="button"  href="Quality_and_Security_Analyst.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>
              <li id="features">
                Senior Data Entry Operator<a type="button"  href="Senior_Data_Entry_Operator.pdf" target="_blank" class="btn download-pdf pull-right btn-lg">Download</a>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </div>



          <div class="row" style="padding-top:6%; padding-bottom:6%; display:none">

          <div class="col-md-3">
          <div >
          <div style=" color: white;
    font-size: 25px;
    font-weight: 600;
    text-align: center;">Business Developer</div>
    <hr  style="    border-top: 1px dotted #eee;"/>
    <p style="text-align: center;">Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc.</p>
          </div>
          </div>
          <div class="col-md-3">
          <div >
          <div style=" color: white;
    font-size: 25px;
    font-weight: 600;
    text-align: center;">Business Developer</div>
    <hr  style="    border-top: 1px dotted #eee;"/>
    <p style="text-align: center;">Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc.</p>
          </div>
          </div>
          <div class="col-md-3">
          <div >
          <div style=" color: white;
    font-size: 25px;
    font-weight: 600;
    text-align: center;">Business Developer</div>
    <hr  style="    border-top: 1px dotted #eee;"/>
    <p style="text-align: center;">Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc.</p>
          </div>
          </div>
          <div class="col-md-3">
          <div>
          <div style=" color: white;
    font-size: 25px;
    font-weight: 600;
    text-align: center;">Business Developer</div>
    <hr  style="    border-top: 1px dotted #eee;"/>
    <p style="text-align: center;">Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc. Desc.</p>
          </div>
          </div>
          </div>

		<div class="row" style="display:none;">
			<div class="col-md-8 col-md-offset-2">

				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>

				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="item">
                        <div class="profile-circle" ><img src="images/Profile/team_member_3.jpg" /></div>


				    	<blockquote>
                        <div class="client-name">- Riya Gupta</div>
				    		<p>Lasit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
				    <div class="item">
                        <div class="profile-circle" ><img src="images/Profile/team_member_2.jpg" /></div>
				    	<blockquote>
                        <div class="client-name">- Shubham Shrivastava</div>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
				    <div class="active item">
                        <div class="profile-circle" ><img src="images/Profile/team_member_5.jpg" /></div>
				    	<blockquote>
                        <div class="client-name">- Bhanu Sharma</div>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>

				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

            </div>
        </div>

      
        


      
      </div>

            <div class="center-heading"><span class="no-bold">Our </span> features

                     <div><img src="images/title-border.png"></div>

                  </div>


            <div class="wall-bg">
                  <div class="">
                    <div class="phpkida_testimonials_grids">
                      <section class="center slider">
                        <div class="agileits_testimonial_grid" >
                          <div class="pk_testimonial_grid"  >
                            <img src="images/features/award.PNG" />
                            <div class="basic-text">
                              <i class="fa fa-trophy"></i>&nbsp;Iso Certified
                            </div>

                            <div class="feature-text-data">

                              Our assessment services follow the standards setup by ISO 27001:2013 &amp; ISO 9001:2015.
                            </div>

                          </div>
                        </div>
                        <div class="agileits_testimonial_grid" >
                          <div class="pk_testimonial_grid">

                            <img src="images/features/secured.jpg" />
                            <div class="basic-text">
                              <i class="fa fa-shield"></i>&nbsp;Secured
                            </div>
                            <div class="feature-text-data">
                             Our system is regularly evaluated by specialised assessment auditing companies to ensure that the technology, controls and processes are upto the mark.
                            </div>

                          </div>
                        </div>
                        <div class="agileits_testimonial_grid">
                          <div class="pk_testimonial_grid">
                            <img src="images/features/customize.jpg" />

                            <div class="basic-text">
                              <i class="fa fa-refresh"></i>&nbsp;Customised & Flexible
                            </div>
                            <div style="overflow-y:scroll; height:125px;">
                            <div class="feature-text-data">
                             Personalised attention to our clients is one of our utmost priority. We work with our clients as an extension of their team to provide customised and flexible solutions.
                            </div>
                            <div class="feature-text-data" style="display:none">
                              <b class="step">Step one:-</b> Understand exactly who they are, what they need  and what are the goals of their program.
                            </div>
                            <div class="feature-text-data"  style="display:none">
                              <b class="step">Step Two:-</b>  We than create a customised testing solution just for them.
                            </div>
                            <div class="feature-text-data"  style="display:none">
                              Further our personalised attention continue long after the first examination is delivered. Our team is in frequent touch to check-in, meet and brainstorm about new and improved ways that could help increase exam volume.
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="agileits_testimonial_grid">
                          <div class="pk_testimonial_grid">
                            <img src="images/features/expert_1.jpg" />
                            <div class="basic-text">
                              <i class="fa fa-lightbulb-o"></i>&nbsp;Expert Professional
                            </div>
                            <div class="feature-text-data">
                              Our dedicated professional experts work diligently to deliver exceptional customer service through every step of the examination process.
                            </div>

                          </div>
                        </div>

                        <div class="agileits_testimonial_grid" >
                          <div class="pk_testimonial_grid"  >
                            <img src="images/features/test.jpg" />
                            <div class="basic-text">
                              <i class="fa fa-trophy"></i>&nbsp;Certified Test Centers
                            </div>

                            <div class="feature-text-data">
                             We offer Certified and Secured test centres with world class facilities across India.
                            </div>

                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                <div class="container" style="display:none">
                    <div class="row pricing-tables">

                                <div class="col-md-2 col-sm-3 col-xs-12 close-box">
                                   <div class="pricing-table">

                           <div id="menCollection" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="item">
                                            <a href="#"><img src="images/features/expert_1.jpg" class="img-responsive" alt="product 1"  ></a>


                                        </div><!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img src="images/features/expert_2.jpg" class="img-responsive" alt="product 1" ></a>


                                        </div><!-- End Item -->
                                        <div class="item active">
                                            <a href="#"><img src="images/features/expert_3.jpg" class="img-responsive" alt="product 1" ></a>


                                        </div><!-- End Item -->
                                      </div><!-- End Carousel Inner -->
                                      <!-- Controls -->
                                      <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">

                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">

                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                             <div class="basic-text"><i class="fa fa-lightbulb-o">&nbsp;</i>Expert Professionals</div>



                                     <div class="award-text">
                                   <p class="feature-description">Our dedicated professional experts work diligently to deliver exceptional customer service through every step of the examination process.
                                  </p>
                                   </div>



                    </div>
                                </div>
                                <div  class="col-md-2 col-sm-3 col-xs-12 close-box">
                                    <div class="pricing-table">

                      <img src="images/features/award.PNG" class="hover ehover2">
                        <div class="basic-text"><i class="fa fa-trophy"></i>&nbsp;</i>Iso Certified</div>

                                    <div class="small-img">

                                    </div>

                                   <div class="award-text">


                             <p class="feature-description">Our assessment services follow the standards setup by ISO 27001:2013 & ISO 9001: 2015.
                         </p>
                                   </div>



                          </div>
                                </div>

                                <div  class="col-md-4 col-sm-3 col-xs-12 close-box" style="display:none;">
                                    <div class="pricing-table">

                              <img src="images/features/current-openings.jpg">
                              <div class="basic-text"><i class="fa fa-briefcase">&nbsp;</i>Current Openings </div>



                                  <div class="award-text-2">
                                   <ul>
                                <a href="#"><li class="current-opening">CUSTOMER RELATION EXECUTIVE  </li></a>
                                 <a href="#"><li class="current-opening">CUSTOMER RELATION EXECUTIVE  </li></a>
                                  <a href="#"><li class="current-opening">CUSTOMER RELATION EXECUTIVE  </li></a>
                                   <a href="#"><li class="current-opening">CUSTOMER RELATION EXECUTIVE  </li>
                                </a></ul><a href="#">
                                 </a>
                                   </div>




                    </div>
                                </div>
                                <div  class="col-md-4 col-sm-3 col-xs-12 close-box">
                                    <div class="pricing-table">

                      <img src="images/features/current-openings.jpg">
                        <div class="basic-text"><i class="fa fa-refresh">&nbsp;</i>Customised & Flexible </div>



                                  <div class="award-text" style="overflow-y:scroll; height:226px">

                                                               <p class="feature-description">Personalised attention to our clients is one of our utmost priority. We work with our clients as an extension of their team.
                                    </p>


                                    <p class="feature-description"><b class="step">Step one:-</b> Understand exactly who they are, what they need  and what are the goals of their program. </p>
                                    <p class="feature-description"><b  class="step">Step two:-</b> We than create a customised testing solution just for them.</p>


                                    <p class="feature-description"><b>Further our personalised attention continue long after the first examination is delivered. Our team is in frequent touch to check-in, meet and brainstorm about new and improved ways that could help increase exam volume.</b></p>
                                                               </div>




                                    </div>
                                                </div>

                                                  <div class="col-md-2 col-sm-3 col-xs-12 close-box">
                                                   <div class="pricing-table">

                                        <img src="images/features/secured.jpg">
                                      <div class="basic-text"><i class="fa fa-shield">&nbsp;</i>​Secured </div>



                                                               <div class="award-text">

                                                             <p class="feature-description">Our complete system is built with a strict focus on security of our services. Our system is regularly evaluated by specialised assessment auditing companies to ensure that the technology, controls and processes are upto the mark.
                                  </p>
                                                             </div>



                                              </div>
                                                          </div>

                                                                <div  class="col-md-2 col-sm-3 col-xs-12 close-box">
                                                                    <div class="pricing-table">

                                                      <img src="images/features/customize.jpg">
                                                        <div class="basic-text"><i class="fa fa-briefcase">&nbsp;</i>Certified Test Centers</div>


                                                                    <div class="award-text">

                                                                   <p class="feature-description">We offer certified and secured centres for  CENTER BASED AND OMR BASED TESTS  across  India.
                                        </p>
                                                                   </div>





                                                    </div>
                                                                </div>




                  </div>

                </div>





                </div>



      <div id="contact" style=" margin-top: 270%;
    position: absolute;
    bottom: 0px;
    top: 0px;"></div>
       <div class="contact-tag">Get In Touch With Us</div>
        <footer>

        <div class=" section purchase-2">

      <div class="container ">

      <div class="contact-section">

     <div class="row">

     <div class="col-md-6">

     <div class="contact-heading">Contact Us
     <br /><br />
     <img src="images/title-border.png">

     </div>


     <form>

     <div class="row contact-form">

     <div class="col-md-6">
     <label>Name</label>
     <input type="text" class="form-control" placeholder="Enter Your Name"  />
     </div>
     <div class="col-md-6">

      <label>Email</label>
     <input type="text" class="form-control" placeholder="Enter Your Mail" />
     </div>


     <div class="col-md-12">
     <label class="shift-label">Send Message</label>
      <textarea class="form-control" placeholder="Write Your Message" ></textarea>
     </div>

   </div>
     <button type="button" class="btn send-button pull-right btn-lg"  >Send Message</button>
     </form>
       <p class="footer-message">
         <i class="fa fa-smile-o"></i>&nbsp;&nbsp;We look forward to meet you at your earliest convenience.</p>

     </div>
      <div class="col-md-6">



      <div class="office-info">
      <div class="office-info-heading">Contact-info</div>
      <div class="row office-info-box">

      <div class="col-md-12"><i class="fa fa-envelope"></i>&nbsp;&nbsp;novamantic@gmail.com

        <br />

        <div style="margin-top:5px;">

          <i class="fa fa-map-marker"></i>
          2/97, Daya Basti, New Rohtak Road, Karol Bagh New Delhi (110005)
        </div>
      </div>



      </div>
 <hr />



       <div class="office-info-heading">Business Hours</div>
       <br />

       <P><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Monday to Saturday:- 10 am to 6:30 pm
       </P>
        <P><i class="fa fa-calendar"></i>&nbsp;&nbsp;Sunday Closed
        </P>

        <hr />
         <div class="office-info-heading">Call Us Directly</div>
         <br />
 <p><i class="fa fa-phone"></i>&nbsp;&nbsp;+91-8860905089
 </p>
 <hr />
 <div class="social-contact pull-right" style="text-align: center;" >
  <a href="#" style="background:#3b5999"><span>Facebook</span></a>
  <a href="#" style="background:#1da1f3"><span>Twitter</span></a>
  <a href="#" style="background:#0072A4"><span>LinkedIn</span></a>
  

</div>

      </div>





      </div>

     </div>



     </div>
      </div>

      </div>
        <div class="second-footer">
     <div class="container">

     <div class="row">
      <div class="col-md-5 "><div class="copy-right-section">| Copyright&copy; 2014 <a href="# " class="copyright-company-name">Novamantic Technology  </a>  -  All Rights Reserved </div></div>
                <div class="col-md-7"><ul class="footer-nav " style="margin-top: 10px;">
                             <li><a href="#about">Who we are</a>
                                </li>
                                <li><a href="#value">Our Beliefs & Values</a>
                                </li>
                                <li><a href="#services">Services we offer</a>
                                </li>
                                <li><a href="#features">Features</a>
                                </li>
                                <li><a href="#contact">Contact Us</a>
                                </li>
                            </ul></div>


                </div>

     </div>

     </div>
            <div class="container" style="display:none;">
                <!-- .row -->



                <div class="row">
                <div class="col-md-8"><ul class="footer-nav " style="margin-top: 10px;">
                             <li><a href="#about">Who we are</a>
                                </li>
                                <li><a href="#value">Our Beliefs and Values</a>
                                </li>
                                <li><a href="#services">Services we offer</a>
                                </li>
                                <li>
                                </li><a href="#features">Features</a>
                                <li><a href="#contact">Contact Us</a>
                                </li>
                            </ul></div>
                <div class="col-md-4 "><div class="social-contact pull-right">
  <a href="#" style="background:#3b5999"><span>Facebook</span></a>
  <a href="#" style="background:#1da1f3"><span>Twitter</span></a>
  <a href="#" style="background:#d34231"><span>Google+</span></a>
  <a href="#" style="background:#527fa3"><span>instagram</span></a>

</div></div>

                </div>










                <div class="gap gap-small"></div>
                <!-- Start Copyright -->
                <div class="copyright-section">

                    <div class="row ">
                    <div class="col-md-8"> <div class="copy-right-section">| Copyright&copy; 2014 <a href="# " style="font-weight:700; text-decoration:underline; font-size:small; color:#33cc33;">Novamantic Technology  </a>  -  All Rights Reserved </div></div>
                    <div class="col-md-4 footer-contact"> <div class="pull-right"><i class="fa fa-phone"></i>&nbsp;&nbsp;91789589877 | <i class="fa fa-envelope"></i>&nbsp;&nbsp;mymail@gmail.com</div></div>

                        <!-- .col-md-6 -->
                    </div><!-- .row -->
                </div>
                <!-- End Copyright -->

            </div>
        </footer>
        <!-- End Footer Section -->


    </div>
    <!-- End Full Body Container -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- Style Switcher -->
    <script>
        // Select all links with hashes
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
      // On-page links
      if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: target.offset().top
              }, 800, function () {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                      return false;
                  } else {
                      $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                      $target.focus(); // Set focus again
                  };
              });
          }
      }
  });
</script>



<script>
    function convert() {
    document.getElementById("read").innerHTML="Read Less"
}
</script>

<script>


  $('.radio-group .radio').click(function () {
        $(this).addClass('selected');
            $(this).click(function(){
                $(this).removeClass("selected");
            });
        var val = $(this).attr('data-value');
        //alert(val);
        $(this).parent().find('input').val(val);
  });


</script>


  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function () {
    $(".center").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
    {
    breakpoint: 768,
    settings: {
    arrows: true,
    centerMode: false,
    slidesToShow: 2
    }
    },
    {
    breakpoint: 480,
    settings: {
    arrows: true,
    centerMode: false,
    centerPadding: '40px',
    slidesToShow: 1
    }
    }
    ]
    });
    });
  </script>
  <!-- //carousal -->

  <!-- start-smooth-scrolling -->
  <script type="text/javascript" src="js/move-top.js"></script>



</body>




</html>
