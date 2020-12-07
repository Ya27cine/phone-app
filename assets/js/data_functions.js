

 // fonction edition numéro de téléphone 
// mieux d'envoyer un niuméro de téléphone bien formaté est espacé à la fonction ;
// e.g : +33 7 12 34 56 67
function setMobileNumber(mobile) {
	// recupérer les <a avec class tel, 
	let a_tel = document.getElementsByClassName("tel");
	let i;
	for (i = 0; i < a_tel.length; i++) {
		try{
			a_tel[i].href= "tel:"+mobile.replace(/\s+/g, '');
			a_tel[i].innerHTML= mobile;

		}catch(e){

		}
	}
}