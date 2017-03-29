<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Budget d'Angers</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script type="text/javascript" src="vendors/scrolloverflow.js"></script>

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['header', 'intro', 'RecetteFinancement', 'DepenseFinancement', 'Map', 'ParcSport', 'CoeurMairie', 'StadeKopa', 'Patinoire', 'CentreCongres', 'RecetteInvestissement', 'DepenseInvestissement', 'Dettes'],
				sectionsColor: ['#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa', '#fafafa'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Header', 'Intro', 'Recettes Financements', 'Dépenses Financements', 'Map', 'Parc des sports', 'Coeur de Mairie', 'Stade Raymond Kopa', 'Patinoire', 'Centre des congrès', 'Recettes investissements', 'Dépenses investissements', 'Dettes'],
				responsiveWidth: 900,
				afterResponsive: function(isResponsive){
					
				}

			});
		});
	</script>

</head>
<body>
	<div class="progress" style="height: 10px; position: fixed; width: 100%; top: 0px; bottom: 0px">
			<div id="evolution" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
		</div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
		
<div id="fullpage">

		<div class="section fp-auto-height-responsive" id="section0">
		<!-- FullScreen -->
		    <div class="intro-header">
				<div class="col-xs-12 text-center abcen1">
					<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Flatfy</h1>
					<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Clean & minimal Theme</h3>
					<ul class="list-inline intro-social-buttons">
						<li><a href="https://twitter.com/galantiandrea" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Twitter</span></a>
						</li>
						<li id="download" ><a href="#downloadlink" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">Free Download</span></a>
						</li>
					</ul>
				</div>    
		        <!-- /.container -->
				<div class="col-xs-12 text-center abcen wow fadeIn">
					<div class="button_down "> 
						<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
					</div>
				</div>
		    </div>
	    </div>
		<?php
		// Intro
			include('public/intro.php');
			// Recettes
			include('public/recetteFinancement.php');
			// Dépenses
			include('public/depenseFinancement.php');
			// Map
			include('public/map.php');
			// Parc des sports
			include('public/ParcSport.php');
			// Coeur de mairie
			include('public/CoeurMairie.php');
			// Stade Raymond Kopa
			include('public/StadeKopa.php');
			// Patinoire
			include('public/Patinoire.php');
			// Centre des congrès
			include('public/CentreCongres.php');
			// Recettes sur les investissements
			include('public/RecettesInvestissement.php');
			// Dépenses sur les investissements
			include('public/DepensesInvestissement.php');
			// Dettes
			include('public/Dettes.php');
		?>
	</div>

		<script type="text/javascript">
		    $(document).ready(function(e) {
		        $('#test').scrollToFixed();
		        $('.res-nav_click').click(function(){
		            $('.main-nav').slideToggle();
		            return false    
		            
		        });
		        
		    });
		</script>

		  <script>
		    wow = new WOW(
		      {
		        animateClass: 'animated',
		        offset:       100
		      }
		    );
		    wow.init();
		  </script>


		<script type="text/javascript">
			$(window).load(function(){
				
				$('.main-nav li a, .servicelink').bind('click',function(event){
					var $anchor = $(this);
					
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top - 102
					}, 1500,'easeInOutExpo');
					event.preventDefault();
				});
			})
		</script>

		<script type="text/javascript">

		$(window).load(function(){
		  
		  var $container = $('.portfolioContainer'),
		      $body = $('body'),
		      colW = 375,
		      columns = null;

		  
		  $container.isotope({
		    // disable window resizing
		    resizable: true,
		    masonry: {
		      columnWidth: colW
		    }
		  });
		  
		  $(window).smartresize(function(){
		    // check if columns has changed
		    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
		    if ( currentColumns !== columns ) {
		      // set new column count
		      columns = currentColumns;
		      // apply width to container manually, then trigger relayout
		      $container.width( columns * colW )
		        .isotope('reLayout');
		    }
		    
		  }).smartresize(); // trigger resize to set container width
		  $('.portfolioFilter a').click(function(){
		        $('.portfolioFilter .current').removeClass('current');
		        $(this).addClass('current');
		 
		        var selector = $(this).attr('data-filter');
		        $container.isotope({
					
		            filter: selector,
		         });
		         return false;
		    });		  
		});

		//#to-top button appears after scrolling
	    var fixed = false;
	    $(document).scroll(function() {
	    	if ($(this).scrollTop() < 730) {
	    		$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '0%'
                    });
                });
	    	}

	        if ($(this).scrollTop() > 730) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '8.5%'
                    });
                });
	        	
	        	
	            if (!fixed) {
	                fixed = true;
	                $('#to-top').show("slow", function() {
	                    $('#to-top').css({
	                        position: 'fixed',
	                        display: 'block'
	                    });
	                });
	            }
	        } else {
	            if (fixed) {
	                fixed = false;
	                $('#to-top').hide("slow", function() {
	                    $('#to-top').css({
	                        display: 'none'
	                    });
	                });
	            }
	        }

	        if ($(this).scrollTop() > 1460) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '17%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 2190) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '25.5%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 2920) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '33.5%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 3650) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '42%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 4380) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '51.5%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 5110) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '60%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 5840) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '68.5%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 6570) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '77%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 7300) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '85.5%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 8030) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '94%'
                    });
                });
	        }

	        if ($(this).scrollTop() > 8760) {
	        	$('#evolution').show("slow", function() {
                    $('#evolution').css({
                        width: '100%'
                    });
                });
	        }
	    });

		</script>

</body>
</html>