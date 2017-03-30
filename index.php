<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Le budget d'Angers</title>
    <meta name="description" content="Le budget d'Angers">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="hyblab,angers,budget">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="screen/css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- onepage scroll stylesheet-->
    <link rel="stylesheet" href="screen/css/onepage-scroll.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="screen/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="screen/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="screen/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="iamx/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Animate css -->
    <link href="iamx/assets/css/animate.css" rel="stylesheet">
    <!-- Custom styles CSS -->
    <link href="iamx/assets/css/style.css" rel="stylesheet" media="screen">
    <!-- Responsive CSS -->
    <link href="iamx/assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="screen/css/bubble.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

    <link rel="stylesheet" media="all" type="text/css" href="screen/css/style.css" />
    <link rel="stylesheet" media="all" type="text/css" href="screen/css/normalize.css" />

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>

    <style type="text/css">      
      /* ---------------------------------------------- /*
       * Scroll to top
      /* ---------------------------------------------- */

      .scroll-up {
        position: fixed;
        display: block;
        z-index: 999;
        bottom: 1.8em;
        right: 1.8em;
      }

      .scroll-up a {
        background-color: #68c3a3;
        display: block;
        width: 28px;
        height: 28px;
        text-align: center;
        color: #fff;
        font-size: 14px;
        line-height: 28px;
      }

      .scroll-up a:hover,
      .scroll-up a:active {
        background-color: rgba(235, 235, 235, .8);
        color: #222;
      }
    </style>

  </head>
  <body>
     <div class="wrapper">
      <div class="main"> 
        <?php
          // Header
          include('iamx/header.php');
          // Intro
          include('intro.php');
          // Recettes
          include('RecettesFinancements.php');
          // Dépenses
          include('DepensesFinancements.php');          
          // Map
          include('map.php');
          // Parc des sports
          include('ParcSport.php');
          // Coeur de mairie
          include('CoeurMairie.php');
          // Stade Raymond Kopa
          include('StadeKopa.php');
          // Patinoire
          include('Patinoire.php');
          // Centre des congrès
          include('CentreCongres.php');
          // Recettes sur les investissements
          include('RecettesInvestissements.php');
          // Dépenses sur les investissements
          include('DepensesInvestissements.php');
          // Dettes
          include('Dettes.php');
          // Partenaires
          include('Partenaires.php');
        ?>
      </div>
    </div>

    <!-- Scroll-up -->
    <div class="scroll-up">
      <a data-index="5" class="btnRetourMap"><i class="fa fa-globe"></i></a>
    </div>

    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="screen/js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="screen/js/jquery.cookie.js"></script>
    <script src="screen/js/jquery.onepage-scroll.js"></script>
    <script src="screen/js/front.js"></script>

    <!-- Javascript files -->
    <!-- <script src="iamx/assets/js/jquery.js"></script> -->
    <script src="iamx/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="iamx/assets/js/jquery.stellar.min.js"></script>
    <script src="iamx/assets/js/jquery.sticky.js"></script>
    <script src="iamx/assets/js/smoothscroll.js"></script>
    <script src="iamx/assets/js/wow.min.js"></script>
    <script src="iamx/assets/js/jquery.countTo.js"></script>
    <script src="iamx/assets/js/jquery.inview.min.js"></script> 
    <script src="iamx/assets/js/jquery.easypiechart.js"></script>
    <script src="iamx/assets/js/jquery.shuffle.min.js"></script>
    <script src="iamx/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script src="iamx/assets/js/jquery.fitvids.js"></script>
	<script src="iamx/assets/js/in-view.min.js"></script>
    <script src="iamx/assets/js/scripts.js"></script>
<<<<<<< HEAD
    <script src="screen/js/javascript.js"></script>
=======
	<script src="iamx/assets/js/defiltext.js"></script>
>>>>>>> origin/master

    <script type="text/javascript">
      // Pour gérer le clic sur le bouton "Commencer"
      el = $(this);

      $(".btn-default").click(function (e) {
          e.preventDefault();
          el.moveTo($(this).data("index"));
      }); 

      $(".btnRetourMap").click(function (e) {
          e.preventDefault();
          el.moveTo($(this).data("index"));
      }); 

        var mymap = L.map('mapid').setView([47.4827, -0.5448], 13);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
         maxZoom: 18,
          id: 'dimitryrobin',
          accessToken: 'pk.eyJ1IjoiZGltaXRyeXJvYmluIiwiYSI6ImNqMHZ5d2ZvMzAwMGEycHBiMXFyODE5emwifQ.MfIjFPvawy0oxrq0KrJIRQ'
      }).addTo(mymap);
    
    </script>
  </body>
</html>
