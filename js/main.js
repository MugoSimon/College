//eneble parents or gurdian option
function disableOption(){
	var choice = document.getElementById("selected").value;
	var parentsSection = document.getElementById("parents");
	var guardianSection = document.getElementById("guardian");
	if(choice == "Parents"){
		if(parentsSection.style.visibility === 'hidden'){
			parentsSection.style.visibility = 'visible';
			parentsSection.style.display = 'block';
			if(guardianSection.style.visibility === 'visible'){
				guardianSection.style.visibility = 'hidden';
				guardianSection.style.display = 'none';
			}
		}
	}else if(choice == "Guardian"){
		if(guardianSection.style.visibility === 'hidden'){
			guardianSection.style.visibility = 'visible';
			guardianSection.style.display = 'block';
			if(parentsSection.style.visibility === 'visible'){
				parentsSection.style.visibility = 'hidden';
				parentsSection.style.display = 'none';
			}
		}
	}
}