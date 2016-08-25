<?php 
    include ('data_views/data_shop.php');
 ?>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/shop.css">
        <link rel="stylesheet" href="css/buttons.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/vicons-font.css">
    </head>
    <body>
        <div id="shop">
            <h1>ICI LE MAGASIN</h1>
            <div id="container" class="row">
                <?php 
                foreach ($objetmagasin as $row){ ?>
                
                    <div  class="item col-md-3 col-md-offset-1">
                    <h3><?php echo $row['Name']; ?></h3>
                    <img  src="../img/shop/<?php echo $row['Name']?>.png" alt=<?php echo $row['Name']?>>
                    <div class="box ">
                        <button class="button button--naira button--border-medium button--round-l button--text-thick button--inverted"><i class="button__icon glyphicon glyphicon-shopping-cart"><?php echo $row['Value'] ?></i><span>Acheter</span></button>
                    </div>
                </div>
                    
                <?php    
                }
                ?>
  
                
            </div>
        </div>
    </body>
</html>