
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/assets/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/styles/main.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
        <link rel='stylesheet' href='http://s.codepen.io/assets/reset/reset.css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/styles/css/main.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/styles/css/animated.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/styles/css/fade.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/styles/css/popup.css" type="text/css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="http://daneden.github.io/animate.css/animate.min.css" type="text/css"/>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      
        <div id="top">
            <div id="droite">
                <h1>
                    <div class="animated fadeInLeft">Athena</div><div class="animated fadeInRight">Chat</div>
                </h1>
                <p class="animated fadeInUp delay-1">IP-FORMATION</p>
            </div>
            <!----DÉBUT AUTORISATION----->
            <div id="gauche"><a href='index.php' class='popup-trigger'><img src='images/header.png' border='0'></a> <img src='images/fleche.png' border='0'></div>
            <div class="popup" role="alert">
                <div class="popup-container">
                    <p>bla bla bla bla bla bla bla</p>
                    <a href="#0" class="popup-close img-replace">Close</a>
                </div> <!-- cd-popup-container -->
            </div> <!-- cd-popup -->
            <!----FIN AUTORISATION----->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" method="post" action="login.php">
            <div class="form-group">
              <input type="text" placeholder="IDENTIFIANT" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="MOT DE PASSE" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">CONNEXION</button>
          </form>
        </div><!--/.navbar-collapse -->
     
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
<!--     <div class="jumbotron"> -->
<!--       <div class="container"> -->
<!--         <h1>Partie1</h1> -->
<!--         <p>bla bla bla</p> -->
<!--         <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
<!--       </div> -->
<!--     </div> -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/jquery/dist/jquery.js"></script>
    <script src="/assets/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/scripts/js/script.js"></script>
    <script src="/assets/scripts/js/jquery.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>
