<?php
	echo("<form method='post' rel='external' action='index.php'>");
	
	echo "<input type='hidden' name='action' value='update'/>";
	echo "<input type='hidden' name='id' value='".$contact->getNum()."'/>";
        
echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'>Numero</label>";
	echo "<input type='text' name='num' maxlength='100' id='num' value='".$contact->getNum()."' />";
	echo "</div>";
        
        echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'>Nom</label>";
	echo "<input type='text' name='nom' maxlength='100' id='nom' value='".$contact->getNom()."' />";
	echo "</div>";
        
        echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'>Prenom</label>";
	echo "<input type='text' name='prenom' maxlength='100' id='prenom' value='".$contact->getPrenom()."' />";
	echo "</div>";
        
        echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'>adresse</label>";
	echo "<input type='text' name='adresse' maxlength='100' id='adresse' value='".$contact->getAdresse()."' />";
	echo "</div>";
        
        echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'>code postal</label>";
	echo "<input type='text' name='cp' maxlength='100' id='cp' value='".$contact->getCp()."' />";
	echo "</div>";
        
        echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'>ville</label>";
	echo "<input type='text' name='ville' maxlength='100' id='ville' value='".$contact->getVille()."' />";
	echo "</div>";
        
        echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'> COeficient de notoriete</label>";
	echo "<input type='text' name='coef' maxlength='100' id='coef' value='".$contact->getCoef()."' />";
	echo "</div>";
        
        echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nom'>Type code</label>";
	echo "<input type='text' name='typeCode' maxlength='100' id='typeCode' value='".$contact->getTypeCode()."' />";
	echo "</div>";
        
        echo "<button type=\"submit\" value=\"Save\">Sauvegarder les modifications</button>";	
	echo("</form>");
?>
        