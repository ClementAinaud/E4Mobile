<?php
class Passerelle{
        static private $mysql_link;
        
	static function connexion($mysql_hote,$mysql_db,$mysql_user,$mysql_pass){
		Passerelle::$mysql_link = new PDO("mysql:host=$mysql_hote;dbname=$mysql_db", "$mysql_user", "$mysql_pass");
	}
        
	static function addPraticien($num,$nom,$prenom,$adresse,$cp,$ville,$coef,$typeCode){
            $sql = "insert praticien(PRA_NUM, PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE ,PRA_COEFNOTORIETE,TYP_CODE) values (NULL,'$num','$nom','$prenom','$adresse','$cp','$ville','$coef','$typeCode')";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        
        static function deletPrescripteur($id){
            $query = "delete from prescripteurs where pres_id = $id";
            $result = Passerelle::$mysql_link->exec($query);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        
        static function updatePraticien($num,$nom,$prenom,$adresse,$cp,$ville,$coef,$typeCode){
            $sql = "UPDATE `praticien` SET `PRA_NUM` = '".$num."', `PRA_NOM` = '".$nom."', `PRA_PRENOM` = '".$prenom."', `PRA_ADRESSE` = '".$adresse."',`PRA_CP` = '".$cp."', `PRA_VILLE` = '".$ville."', `PRA_COEFNOTORIETE` = '".$coef."', `TYP8CODE` = '".$typeCode."' WHERE `praticien`.`PRA_NUM` =".$num.";";
            $result = Passerelle::$mysql_link->exec($sql);           
            if ($result == 1){
                    return "SUCCESS";
            }
            else{
                    return "ERREUR";
            }
        }
        
      
        static function getPraticien(){
            $praticiens = array();
            $sql ="select * from praticien order by PRA_NUM ";
            $result = Passerelle::$mysql_link->query($sql);
            while ($row = $result->fetch()) {
                            $num = $row['PRA_NUM'];
                            $nom = $row['PRA_NOM'];
                            $prenom = $row['PRA_PRENOM'];
                            $adresse = $row['PRA_ADRESSE'];
                            $cp = $row['PRA_CP'];
                            $ville = $row['PRA_VILLE'];
                            $coef = $row['PRA_COEFNOTORIETE'];
                            $typeCode = $row['TYP_CODE'];
                            
                            
                            $praticien = new Praticien($num,$nom,$prenom,$adresse,$cp,$ville,$coef,$typeCode);
                            $praticiens[] = $praticien;
            }		
            return $praticiens;
        }
       static function getOnePraticien($num){
            $praticien = null; 
            if ($num != -1) {
                    $sql ="select * from praticien where PRA_NUM=".$num;
                    $result = Passerelle::$mysql_link->query($sql);
                    if ($result){
                            $row = $result->fetch();
                            $nom = $row['PRA_NOM'];
                            $prenom = $row['PRA_PRENOM'];
                            $adresse = $row['PRA_ADRESSE'];
                            $cp = $row['PRA_CP'];
                            $ville = $row['PRA_VILLE'];
                            $coef = $row['PRA_COEFNOTORIETE'];
                            $typeCode = $row['TYP_CODE'];
                    $praticien = new Praticien($num,$nom,$prenom,$adresse,$cp,$ville,$coef,$typeCode);			
                    }
            }
            return $praticien;
        }
    
      
        
}
?>