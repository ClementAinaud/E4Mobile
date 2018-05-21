<?php
session_start();
require('modele/dbParametres.php');
require('modele/Praticien.php');
require('modele/Passerelle.php');
require('vue/header.php'); 
 require('vue/showPraticien.php');
?>
<div data-role="page">
    <div data-role="header">
        <h1>Listes des praticiens</h1>
    </div>
    <div data-role="content">
    <?php 
    
    Passerelle::connexion($MYSQL_HOTE,$MYSQL_DB,$MYSQL_USER,$MYSQL_PASS);
    if (isset ($_REQUEST['action'])){
            $action = $_REQUEST['action'];
    }
    else {
            $action = "";            
    }
    switch ($action) {
        
          
                                
            /* case 'checkAut'     :  $log = $_REQUEST['login'];
                                   $pass = $_REQUEST['password'];
                                    if($log=="d" &&$pass=="d"){  
                                        $_SESSION['login']=$log;
                                        $_SESSION['password']=$pass;
                                        $contacts = Passerelle::getPraticien();
                                        require('vue/showPraticien.php');
                                    } else {
                                        require('vue/authentification.php');
                                    }
                                    break;   *
             
             */ 
        
        
        
            case 'insert' 	:   $num = $_REQUEST['num'];
                                    $nom = $_REQUEST['nom'];
                                    $prenom = $_REQUEST['prenom'];
                                    $adresse = $_REQUEST['adresse'];
                                    $cp = $_REQUEST['cp'];
                                    $ville = $_REQUEST['ville'];
                                    $coef = $_REQUEST['coef'];
                                    $typeCode = $_REQUEST['typeCode'];    
                                    Passerelle::addPraticien($num,$nom,$prenom,$adresse,$cp,$ville,$coef,$typeCode);
                                    $contact = Passerelle::getPraticien();
                                    require('vue/showPraticien.php');
                                    break; 
                                
             case 'update' 	:  $num = $_REQUEST['num'];
                                    $nom = $_REQUEST['nom'];
                                    $prenom = $_REQUEST['prenom'];
                                    $adresse = $_REQUEST['adresse'];
                                    $cp = $_REQUEST['cp'];
                                    $ville = $_REQUEST['ville'];
                                    $coef = $_REQUEST['coef'];
                                    $typeCode = $_REQUEST['typeCode']; 
                                    Passerelle::updatePraticien($num,$nom,$prenom,$adresse,$cp,$ville,$coef,$typeCode); 
                                    $contact = Passerelle::getPraticien();
                                    require('vue/showPraticien.php');
                                    break;
                                
            case 'details' 	:   $num = $_REQUEST['id'];
                                    $contact = Passerelle::getOnePraticien($num);
                                    require('vue/showOnePraticien.php');
                                    break;
                                
            case 'addnew' 	:   $contact = Passerelle::getPraticien();
                                    require('vue/addPraticien.php');
                                    break;
                                
            default             :$contact = Passerelle::getPraticien();
                                 require('vue/showPraticien.php');
            
            
            
            
    }
    ?>
    </div>
    <div data-role="footer">
  firment propulsé par wordpress
    </div>
</div>
<?php 
 require('vue/footer.php'); 
?>
</body>
</html>

