<?php
	include('../phpScripts/connect_db.php');
?>

<!doctype html>
<html class="no-js" lang="tr-TR">

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
	<link rel="stylesheet" id="default-style-css" href="../files/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" id="fontawesome-style-css" href="../files/css/font-awesome.min.css" type="text/css" media="all" />
	<link rel="stylesheet" id="ionic-icons-style-css" href="../files/css/ionicons.css" type="text/css" media="all" />
	<link rel="stylesheet" id="revolution-slider-main-css" href="../files/revolution/css/settings.css" type="text/css" media="all" />
	<link rel="stylesheet" id="revolution-slider-layer-css" href="../files/revolution/css/layers.css" type="text/css" media="all" />
	<link rel="stylesheet" id="revolution-slider-nav-css" href="../files/revolution/css/navigation.css" type="text/css" media="all" />
	<link rel="stylesheet" id="owlcarousel-css" href="../files/css/owl.carousel.css" type="text/css" media="all" />
	<link rel="stylesheet" id="lightcase-css" href="../files/css/lightcase.css" type="text/css" media="all" />
	<link rel="stylesheet" id="isotope-style-css" href="../files/css/isotope.css" type="text/css" media="all" />
	<link rel="stylesheet" id="mqueries-style-css" href="../files/css/mqueries.css" type="text/css" media="all" />

	<!-- FAVICON -->
	<link rel="shortcut icon" href="../files/iu_logo-240.png"/>

	<!-- DOCUMENT TITLE -->
	<title><?php echo $title.' | İstanbul Ultra Trail'; ?></title>

</head>

<body>

	<!-- PAGELOADER -->
	<?php require_once __DIR__.'/static-includes/page-loader.php'; ?>
	<!-- PAGELOADER -->

	<!-- PAGE CONTENT -->
	<div id="page-content">

		<!-- HEADER -->
		<?php require_once __DIR__.'/static-includes/nav.php'; ?>

		<!-- HERO  -->

		<!--MFA-->
		<section id="hero" class="hero-auto parallax-section text-light" data-parallax-image="../files/reistanbulultrawebfull/iu-detay-header.jpg">

				<div id="page-title" class="wrapper align-center">
						<h1><strong><?php echo $title; ?></strong></h1>
				</div> <!-- END #page-title -->

		</section>
		<!--MFA END-->
		<!-- HERO -->


		<!-- PAGEBODY -->
		<?php require_once __DIR__.'/page-includes/'.$include_page_name; ?>

		<!-- FOOTER -->
		<?php require_once __DIR__.'/static-includes/footer.php'; ?>
		<!-- FOOTER -->

	</div> <!-- END #page-content -->
	<!-- PAGE CONTENT -->

	<!-- SCRIPTS -->
	<script src="../files/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../files/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../files/js/jquery.visible.min.js"></script>
	<script type="text/javascript" src="../files/js/jquery.lightcase.min.js"></script>
	<script type="text/javascript" src="../files/js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="../files/js/jquery.backgroundparallax.min.js"></script>
	<script type="text/javascript" src="../files/js/script.js"></script>
	<script type="text/javascript">
		/*----------------------------------------------
							 T A B S BUTTONS
	------------------------------------------------*/
		var sira = 0;
		var menu_vars = [];
		jQuery(".tab-nav li").each(function() { //
			var m_href = jQuery(this).find("a").attr("href");
			var m_data_id = jQuery(this).find("a").attr("data-id");
			var m_text = jQuery(this).find("a").html();

			menu_vars[sira] = [m_href, m_data_id, m_text];
			sira++;
		});


		jQuery(".tab-content").each(function() {
			var this_class = jQuery(this).attr("class");
			this_class = this_class.replace('tab-content ', '');

			var result;
			for (var i = 0, len = menu_vars.length; i < len; i++) {
				if (menu_vars[i][1] == this_class) {

					if (i == 0) {
						var after_href = menu_vars[(i + 1)][0];
						var after_title = menu_vars[(i + 1)][2];
						var button_before = '';
						var button_after = '<a href="' + after_href + '" data-id="' + this_class + '" class="sr-button button-1 button-tiny rounded" style="float:right;">' + after_title + ' &raquo;</a>';
					} else if (i == menu_vars.length - 1) {
						var before_href = menu_vars[(i - 1)][0];
						var before_title = menu_vars[(i - 1)][2];

						var button_before = '<a href="' + before_href + '" data-id="' + this_class + '" class="sr-button button-1 button-tiny rounded">&laquo; ' + before_title + '</a>';
						var button_after = '';
					} else {

						var before_href = menu_vars[(i - 1)][0];
						var after_href = menu_vars[(i + 1)][0];

						var before_title = menu_vars[(i - 1)][2];
						var after_title = menu_vars[(i + 1)][2];

						var button_before = '<a href="' + before_href + '" data-id="' + this_class + '" class="sr-button button-1 button-tiny rounded">&laquo; ' + before_title + '</a>';
						var button_after = '<a href="' + after_href + '" data-id="' + this_class + '" class="sr-button button-1 button-tiny rounded" style="float:right;">' + after_title + ' &raquo;</a>';
						break;
					}
				} else {
					var after_href = menu_vars[(1)][0];
					var after_title = menu_vars[(1)][2];
					var button_before = '';
					var button_after = '<a href="' + after_href + '" class="sr-button button-1 button-tiny rounded" style="float:right;">' + after_title + ' &raquo;</a>';
				}
			}




			jQuery(this).append('<div class="prev-next-buttons">' + button_before + button_after + '</div>');

		});



		/*----------------------------------------------
									T A B S
		------------------------------------------------*/
		jQuery(".tabs").each(function() {
			var thisItem = jQuery(this);
			thisItem.find('.tab-content').removeClass('active');
			var rel = thisItem.find('.active a').attr('data-id');

			var hash = window.location.hash.substr(1);
			if (hash == "") { //hash empty
				thisItem.find('.' + rel).addClass('active');
			} else {
				jQuery(this).find(".tab-nav li").removeClass("active");
				jQuery('a[href="#' + hash + '"]').parents("li").addClass('active');


				var hash_data_id = jQuery('a[href="#' + hash + '"]').attr("data-id");

				thisItem.find('.' + hash_data_id).addClass('active');
			}



		});

		jQuery(".prev-next-buttons").on("click", "a", function() {

		});

		jQuery(window).on('hashchange', function() {
			var hashValue = location.hash;
			hashValue = hashValue.replace(/^#/, '');
			console.log(hashValue);
			jQuery(".tab-nav li").removeClass("active");
			jQuery(".tab-nav").find('a[href$="' + hashValue + '"]').parents('li').addClass("active");

			var rel = jQuery('a[href$="' + hashValue + '"]').attr("data-id");
			jQuery(".tab-container .tab-content").hide().removeClass('active');
			jQuery(".tab-container ." + rel).fadeIn(500).addClass('active');


			//scroll animate
			var topPos = 0;
			topPos = jQuery(".faruk").offset().top;
			jQuery('html,body').animate({
				scrollTop: topPos - 80
			}, 1000, 'easeInOutQuart');
		});

		jQuery("table tr:even").css("background-color", "#fff");
		jQuery("table tr:odd").css("background-color", "#f5f6f7");
		jQuery("table tr td").css("padding-left", "4px");
	</script>
	<!-- SCRIPTS -->
</body>

</html>
