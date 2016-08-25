<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="css/profil.css">
        <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet' type='text/css'> <!-- google font font-family: 'Kalam', cursive;-->

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">StickMan ABS</a>
          
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <form id="form-deconnexion" class="navbar-form navbar-right" action="script/deconnexion.php" method="post" role="form">
                <button type="submit" class="btn btn-success">Disconnect</button>
              </form>
            </div><!--/.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <nav class="navbar navbar-inverse navbar-lower" id="navbar" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-3" style="display:inline-block;margin-top:0.5%;"><button class="btn " href="newchamp.php">New Stickman</button></div>
                <div class="col-xs-6 col-md-3" style="display:inline-block;margin-top:0.5%;"><button class="btn btn-success" href="arene.php">JOIN ARENA</button></div>
                <div class="col-xs-6 col-md-3" style="display:inline-block;margin-top:0.5%;"><button class="btn " href="profil.php">Profil</button></div>
                <div class="col-xs-6 col-md-3" style="display:inline-block;margin-top:0.5%;"><button class="btn " href="shop.php">Shop</button></div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="filler"></div>
        </div>
    </div>
        
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <div class="container">
      <!-- Example row of columns -->
      
        <div class="box-profil">
        
            <div class="stickman-picture">
                <!-- box img+pseudo !-->
                <img src="../img/profil/stickman.jpg" class="stickman">
                <div class="pseudo">
                    <!-- recherche de pseudo dans la bdd !-->
                    <?php echo $row['Name']; ?>
                </div>
            </div>
            <div class="stat">
                <div class="left-side-stat">
                    <!-- coté gauche, récuperer chaque info de la bdd !-->
                    <div id="life">
                        Life: <?php echo $row['Life']; ?>
                    </div>
                    <div id="actionpt">
                        Action Point: <?php echo $row['ActionPoint']; ?>
                    </div>
                    <div id="movept">
                        Move Point: <?php echo $row['MovePoint']; ?>
                    </div>
                </div>
                <div class="right-side-stat">
                    <!-- coté droit !-->
                    <div id="points">
                        Points: <?php echo $row['Points']; ?>
                    </div>
                    <div id="strengh">
                        Strengh: <?php echo $row['Strengh']; ?>
                    </div>
                </div>
                <div class="bot-side">
                    <!-- coté bas !-->
                    <div class="victories">
                        <!-- victories!-->
                        Victories: <?php echo $row['Victories']; ?>
                    </div>
                    <div class="defeats">
                        <!-- defeats!-->
                        Defeats: <?php echo $row['Defeats']; ?>
                    </div>
                </div>
            </div>
            <div class="inventory ">
                <div class="case case0" id="0">
                0
                
                </div>
                <div class="case case1" id="1">
                1
                
                </div>
                <div class="case case2" id="2">
                
                2
                </div>
                <div class="case case3" id="3">
                
                3
                </div>
                <div class="case case4" id="4">
                
                4
                </div>
                <div class="case case5" id="5">
                
                5
                </div>
                <div class="case case6" id="6">
                6
                
                </div>
                <div class="case case7" id="7">
                
                7
                </div>
                <div class="case case8" id="8">
                8
                
                </div>
                <div class="case case9" id="9">
                
                9
                </div>
                <div class="case case10" id="10">
                
                10
                </div>
                <div class="case case11" id="11">
                
                11
                </div>
                <div class="case case12" id="12">
                
                12
                </div>
                <div class="case case13" id="13">
                13
                
                </div>
                <div class="case case14" id="14">
                14
                
                </div>
                <div class="case case15" id="15">
                15
                
                </div>
                <div class="case case16" id="16">
                16
                
                </div>
                <div class="case case17" id="17">
                
                17
                </div>
                <div class="case case18" id="18">
                18
                
                </div>
                <div class="case case19" id="19">
                19
                
                </div>
                <div class="case case20" id="20">
                20
                
                </div>
                <div class="case case21" id="21">
                21
                
                </div>
                <div class="case case22" id="22">
                22
                
                </div>
                <div class="case case23" id="23">
                23
                
                </div>
                <div class="case case24" id="24">
                24
                
                </div>
                <div class="case case25" id="25">
                25
                
                </div>
                <div class="case case26" id="26">
                26
                
                </div>
                <div class="case case27" id="27">
                27
                
                </div>
                <div class="case case28" id="28">
                28
                
                </div>
                <div class="case case29" id="29">
                29
                
                </div>
                <div class="case case30" id="30">
                30
                
                </div>
                <div class="case case31" id="31">
                31
                
                </div> 
            </div>
        </div>
        
        
        
        
        
        
        
        
        
      <hr>
    </div>
        <div class="container">
            <footer>
                <p>&copy; StickMan Company 2016</p>
            </footer>
        </div>
      
     <!-- /container -->      
    <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
    <script src="../js/ajax.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../js/vendor/bootstrap.min.js"></script>

    <script src="../js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
    </body>
</html>
