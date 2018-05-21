function checkForm() {
	try {
		if ($.trim($('#num').val()) == "" ||
			$.trim($('#nom').val()) == "" ||
                        $.trim($('#prenom').val()) == "" ||
                        $.trim($('#adresse').val()) == "" ||
                        $.trim($('#cp').val()) == "" ||
                        $.trim($('#ville').val()) == "" ||
                        $.trim($('#coef').val()) == "" ||
			$.trim($('#typeCode').val()) == "") {
                    
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;
}

function deleteEntry(id) {
	try {
		var confirmString = "Supression d'un contact.  Confirmez-vous ?\n" + $.trim($('#nom').val()) + "\n" + $.trim($('#tel').val()) + "\n" + $.trim($('#description').val());
		if (window.confirm(confirmString)) {
			window.location="index.php?action=delete&id=" + id;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;

}