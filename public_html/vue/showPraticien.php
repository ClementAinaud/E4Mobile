
<a data-rel="dialog" data-transition="pop" href="index.php?action=addnew">Ajout nouveau prescripteur</a><br/><br/>
<br>
<br>

    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contact as $info){ ?>
        <li data-role="collapsible" data-iconpos="right" data-shadow="true" data-filter="true" data-corners="false">
            <h2><?php echo $info->getNom(); ?></h2>
            
             <div data-role='fieldcontain'>
                <label>Prenom</label>
                <?php echo $info->getPrenom(); ?> 
            </div>
 
            
            <div data-role='fieldcontain'>
                <label >Adresse </label>
                <?php echo $info->getAdresse(); ?> 
            </div>
            
             <div data-role='fieldcontain'>
                <label >coeficient de notoriété</label>
                <?php echo $info->getCoef(); ?> 
            </div>
          
        </li>
        <a <input type="button" class="ui-btn ui-btn-inline" data-rel="dialog" data-transition="pop"  href="index.php?action=details&id=<?php echo $info->getNum();?>">Modiffier profil de <?php echo $info->getNom(); ?> </a>
    <?php }?>
    </ul>