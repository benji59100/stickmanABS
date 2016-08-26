<?php 
    include_once ('data_views/data_shop.php');
 ?>
            <h1>Bienvenue dans le magasin <?php echo $_SESSION['pseudo'];?> !</h1>
            <div id="container" class="row">
                <h2>Item !</h2>
                <?php
                foreach ($shop->aovItemsWeed as $row){ ?>
                    <div  class="item col-md-3 col-md-offset-1">
                    <h3><?php echo $row->sName; ?></h3>
                    <img  src="../img/shop/<?php echo $row->sName?>.png" alt=<?php echo $row->sName?>>
                    <div class="box ">
                        <button class="button button--naira button--border-medium button--round-l button--text-thick button--inverted"><i class="button__icon glyphicon glyphicon-shopping-cart"><?php echo $row->iPrice ?></i><span>Acheter</span></button>
                    </div>
                </div>
                    
                <?php    
                }
                ?>
                <h2>Armes !</h2>
                <?php
                foreach ($shop->aovItemsWeapons as $row){ ?>
                    <div  class="item col-md-3 col-md-offset-1">
                    <h3><?php echo $row->sName; ?></h3>
                    <img  src="../img/shop/<?php echo $row->sName?>.png" alt=<?php echo $row->sName?>>
                    <div class="box ">
                        <button class="button button--naira button--border-medium button--round-l button--text-thick button--inverted"><i class="button__icon glyphicon glyphicon-shopping-cart"><?php echo $row->iPrice ?></i><span>Acheter</span></button> <!-- Sois on créer une fonction en ajax qui met à jour l'inventaire que l'on affiche également dans le magasin, soit on passe par un formulaire qui recharge directement la page... Ajax better mais plus long à mettre en place  !-->
                    </div>
                </div>
                    
                <?php    
                }
                ?>
            </div>