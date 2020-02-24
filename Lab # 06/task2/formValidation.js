// Store Buttons 
let success1= document.getElementById("btn1_s");
let success2= document.getElementById("btn2_s");

let fail1= document.getElementById("btn1_d");
let fail2= document.getElementById("btn2_d");

let sub = document.getElementById("submit");

let textarea= document.querySelector("textarea");
let email_patt = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;





success1.addEventListener("click",function(){
	if(success1.classList.contains("btn-outline-success")){
	success1.classList.remove("btn-outline-success");
	success1.classList.add('btn-success');
	if(fail1.classList.contains("btn-danger")){
		fail1.classList.toggle("btn-outline-danger");
	}
	console.log(success1.classList);
	}
})

success2.addEventListener("click",function(){
	if(success2.classList.contains("btn-outline-success")){
	success2.classList.remove("btn-outline-success");
	success2.classList.add('btn-success');
	if(fail2.classList.contains("btn-danger")){
		fail2.classList.toggle("btn-outline-danger");
	}
	console.log(success2.classList);
	}
})

fail1.addEventListener("click",function(){
	if(fail1.classList.contains("btn-outline-danger")){
	fail1.classList.remove("btn-outline-danger");
	fail1.classList.add('btn-danger');
	if(success1.classList.contains("btn-success")){
		success1.classList.toggle("btn-outline-success")
	}
	
	console.log(fail1.classList);
	}
})

fail2.addEventListener("click",function(){
	if(fail2.classList.contains("btn-outline-danger")){
	fail2.classList.remove("btn-outline-danger");
	fail2.classList.add('btn-danger');
		if(success2.classList.contains("btn-success")){
		success2.classList.toggle("btn-outline-success")
	}
	console.log(fail2.classList);
	}
})


sub.addEventListener("click",function(){
	if( success1.classList.contains("btn-outline-success") &&
	 fail1.classList.contains("btn-outline-danger")){
		// first one is not yet selected
		window.alert("Select Q1's Answer");
	}else if( success2.classList.contains("btn-outline-success") &&
	 fail2.classList.contains("btn-outline-danger") ){
	 	// second one is not yet selected
	 	window.alert("Select Q2's Answer");
	}else if(! email_patt.test(document.getElementById("email").value) ){

		// Pattern is not valid
		 	window.alert("Enter Valid Email Address");
   	}
	 else if(textarea.value==""){
		window.alert("Nothing Entered in textarea");
	}
	else{
		// Form submittion 
		window.alert("Form Submitted Successfully!");
		// sub.setAttribute("data-target","#ModalCenter");
	}
})

