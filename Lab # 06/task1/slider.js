
let loc="../Images/image";
let array =[];
let previous_b= document.getElementById("previous_image");
let next_b= document.getElementById("next_image");
let imageBox=document.querySelector("img");
let current_index=5;

// Store images into array
for (let i=1;i<=10;i++){
	array[i-1]=loc+i+".jpg";
}

// let dummy_array=["A","B",'C','D','E','F','G','H','I','J','K'];

// let textElement = document.createElement('p')
// document.createTextNode("hello");



next_b.addEventListener("click",function(){
	// console.log("next_b");
	// Change image to next one 
	if(incrementIndex()){
		current_index=current_index+1; 
		console.log("current_index  : ",current_index)
		imageBox.setAttribute("src",array[current_index]);


	}else{ 	
		console.log("End Reached"); 	
		window.alert("No More Entries...");
 		} 
 	})
	
	previous_b.addEventListener("click",function(){
	// console.log("previous_b");
	// Change image to previous one 
		if(decrementIndex()){
		current_index=current_index-1;
		console.log("current_index  : ",current_index);
		imageBox.setAttribute("src",array[current_index]);
		}else{
			window.alert("No More Entries...");	
				}})

function incrementIndex(){
	if(current_index<array.length-1){ 
	return true;
	}
	else {
		return false;
	}
}

function decrementIndex(){  
	if(current_index <=array.length && current_index > 0){  
	return true;
	}
	else {
		return false;
	}
}





// Apply query







