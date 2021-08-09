<?php
	//------https
	if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
		$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: ' . $redirect);
		exit();
	}
	//------https
?>
<!doctype html>
<html class="no-js" lang="en-US">
<head>

    <!-- DEFAULT META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lora:400italic,700italic" rel="stylesheet" type="text/css">

    <!-- CSS -->
	
    <link rel="stylesheet" id="default-style-css"  href="../files/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="fontawesome-style-css" href="../files/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="ionic-icons-style-css" href="../files/css/ionicons.css" type="text/css" media="all" />
    <link rel="stylesheet" id="revolution-slider-main-css" href="../files/revolution/css/settings.css" type="text/css" media="all" />
    <link rel="stylesheet" id="revolution-slider-layer-css" href="../files/revolution/css/layers.css" type="text/css" media="all" />
	<link rel="stylesheet" id="revolution-slider-nav-css" href="../files/revolution/css/navigation.css" type="text/css" media="all" />
    <link rel="stylesheet" id="owlcarousel-css" href="../files/css/owl.carousel.css" type="text/css" media="all" />
    <link rel="stylesheet" id="lightcase-css" href="../files/css/lightcase.css" type="text/css" media="all" />
	<link rel="stylesheet" id="isotope-style-css"  href="../files/css/isotope.css" type="text/css" media="all" />
    <link rel="stylesheet" id="mqueries-style-css"  href="../files/css/mqueries.css" type="text/css" media="all" />
    

    <!-- FAVICON -->
    <link rel="shortcut icon" href="../files/iu_logo-240.png"/>

    <!-- DOCUMENT TITLE -->
    <title>İstanbul Ultra Trail</title>

</head>

<body>

<!-- PAGELOADER -->
<?php include('static-includes/page-loader.php') ; ?>
<!-- PAGELOADER -->

<!-- PAGE CONTENT -->
<div id="page-content">

	<!-- HEADER -->
	<?php include('static-includes/nav.php') ; ?>

<!-- HERO  -->
	<section id="hero" class="hero-auto">
    	
        <div class="revolution-slider-wrapper">
            <div id="revolutionslider1" class="revolution-slider"  data-version="5.0">
                <ul>
                    <li class="text-light" data-transition="fade" data-masterspeed="700">			
                        <!-- MAIN IMAGE -->
                        <img src="../files/slider2020-en/1.jpg"  alt=""  width="1920" height="1080">            
                    </li> <!-- END slide -->
                    <li class="text-light" data-transition="fade" data-masterspeed="700">			
                        <!-- MAIN IMAGE -->
                        <img src="../files/slider2020-en/2.jpg"  alt=""  width="1920" height="1080">            
                    </li> <!-- END slide -->
                    <li class="text-light" data-transition="fade" data-masterspeed="700">			
                        <!-- MAIN IMAGE -->
                        <img src="../files/slider2020-en/3.jpg"  alt=""  width="1920" height="1080">            
                    </li> <!-- END slide -->
                    <li class="text-light" data-transition="fade" data-masterspeed="700">			
                        <!-- MAIN IMAGE -->
                        <img src="../files/slider2020-en/4.jpg"  alt=""  width="1920" height="1080">            
                    </li> <!-- END slide -->
                    <li class="text-light" data-transition="fade" data-masterspeed="700">			
                        <!-- MAIN IMAGE -->
                        <img src="../files/slider2020-en/5.jpg"  alt=""  width="1920" height="1080">            
                    </li> <!-- END slide -->
                    <li class="text-light" data-transition="fade" data-masterspeed="700">			
                        <!-- MAIN IMAGE -->
                        <img src="../files/slider2020-en/6.jpg"  alt=""  width="1920" height="1080">            
                    </li> <!-- END slide -->
              	</ul>				
             </div><!-- END .revolution-slider -->
       	</div> <!-- END .revolution-slider-wrapper -->
         
        <a href="#" id="scroll-down" class="text-light"></a>
        
    </section>
    <!-- HERO -->

	<!-- PAGEBODY -->
	<section id="page-body">


        <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
			
          <div class="column one-fourth" style="text-align: center; min-height: 454px;background-color: #f5f6f7;"><div class="col-content" style="margin-top: 13.5px;">
          <a href="?p=iu-100K"><img src="../files/anasayfaboxes/100.png" style="width:150px;" alt="IU-100K"></a>
             <h5 style="margin-top:10px !important;"><strong>IU-100K</strong></h5>
              <p><em>From the northern forests’ green to shores of Black Sea… A hundred km long ULTRA adventure! Get ready for the first 100K ultra trail race of Istanbul! </em>
               
</p>
<img src="../files/anasayfaboxes/iu100-boxgrafik.png" style="margin:20px 0;" />
<br>
<a href="?p=iu-100K" class="sr-button button-1 button-tiny rounded" title="IU-100K">more info</a>
          </div></div>
			
          <div class="column one-fourth" style="text-align: center; min-height: 454px;background-color: #edeff0;"><div class="col-content" style="margin-top: 13.5px;">
          <a href="?p=iu-60K"><img src="../files/anasayfaboxes/60.png" style="width:150px;" alt="IU-60K"></a>
             <h5 style="margin-top:10px !important;"><strong>IU-60K</strong></h5>
              <p><em>Amazing race course through Taşdelen Forests and Polonezköy’s beautiful nature will offer you a real challenge to push your limits! With it’s 60 km race course, IU-60K awaits for Ultra lovers! </em>
</p>
<img src="../files/anasayfaboxes/iu60-boxgrafik.png" style="margin:20px 0;" />
<br>
<a href="?p=iu-60K" class="sr-button button-1 button-tiny rounded" title="IU-60K">more info</a>
          </div></div>
			
          <div class="column one-fourth" style="text-align: center; min-height: 454px;background-color: #f5f6f7;"><div class="col-content" style="margin-top: 13.5px;">
          <a href="?p=iu-30K"><img src="../files/anasayfaboxes/30.png" style="width:150px;" alt="IU-30K"></a>
             <h5 style="margin-top:10px !important;"><strong>IU-30K</strong></h5>
              <p><em>A 30 km long trail in the northern forests of İstanbul! IU-30K will give you a wonderful running experience with a beautiful sceneries. </em>
</p>
<img src="../files/anasayfaboxes/iu30-boxgrafik.png" style="margin:20px 0;" />
<br>
<a href="?p=iu-30K" class="sr-button button-1 button-tiny rounded" title="IU-30K">more info</a>
          </div></div>
			
          <div class="column one-fourth" style="text-align: center; min-height: 454px;background-color: #edeff0;"><div class="col-content" style="margin-top: 13.5px;">
          <a href="?p=iu-15K"><img src="../files/anasayfaboxes/15.png" style="width:150px;" alt="IU-15K"></a>
             <h5 style="margin-top:10px !important;"><strong>IU-15K</strong></h5>
              <p><em>From beginners to proffessionals; here is IU-15K for who would like to enjoy this exciting trail experience in 15 km long race course!</em>
</p>
<img src="../files/anasayfaboxes/iu15-boxgrafik.png" style="margin:20px 0;" />
<br>
<a href="?p=iu-15K" class="sr-button button-1 button-tiny rounded" title="IU-15K">more info</a>
          </div></div>
			
			
			
			
			
			
			
			
            </div>
 	</section>
	<!-- PAGEBODY -->
<div class="spacer-small"></div>

    <!-- FOOTER -->
<?php include('static-includes/footer.php') ; ?>
    <!-- FOOTER -->

</div> <!-- END #page-content -->
<!-- PAGE CONTENT -->

<!-- SCRIPTS -->
<script src="../files/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../files/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../files/js/jquery.visible.min.js"></script>
<script type="text/javascript" src="../files/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="../files/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script type="text/javascript" src="../files/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../files/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../files/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../files/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="../files/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../files/js/tweenMax.js"></script>
<script type="text/javascript" src="../files/js/jquery.backgroundparallax.min.js"></script>
<script type="text/javascript" src="../files/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="../files/js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="../files/js/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="../files/js/jquery.lightcase.min.js"></script>
<script type="text/javascript" src="../files/js/script.js"></script>
<!-- SCRIPTS -->

</body>
</html>
