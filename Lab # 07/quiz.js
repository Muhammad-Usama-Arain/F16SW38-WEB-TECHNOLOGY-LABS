// Store Question and Answers

let QuestionAnswer = [
	
	{
		question:"Who is the father of computer?",
		options: ["Charles Babbage","Bill Gates","Tim Berner Lee","Usama Arain"],
		answer:"Charles Babbage"
	},
	{
		question:"A combination of 16bit is called?",
		options:['bit',"byte","Word","None of these"],
		answer:'Word'

	},
	{
		question:['The unit that control all part of computer is called?'],
		options:['CPU',"GPU","LCD","Motherboard"],
		answer:'CPU'
	},{
		question:['MICR stands for?'],
		options:['Magnetic Ink Character Recorder',"Magnetic Ink Character Reader",
		"Magic In Copy Redo","Modern Industry Computer Research"],
		answer:'Magnetic Ink Character Reader'
	}

];

// Let's initilize variable

// Buttons

let next_btn=document.getElementById("btn_nxt");
let prev_btn=document.getElementById("btn_prev");
let f_btn=document.getElementById("btn_first");
let l_btn=document.getElementById("btn_last");
let submit=document.getElementById("submit_quiz");
let show_results=document.getElementById("Results");

// Questions and Radio Buttons

let question=document.getElementById("question");
let question_nub=document.getElementById("question_number");
let radio_f= document.getElementById("first");
let radio_s= document.getElementById("second");
let radio_t= document.getElementById("third");
let radio_fourth= document.getElementById("fourth");
let first_option= document.getElementById("f_option");
let second_option= document.getElementById("s_option");
let third_option= document.getElementById("t_option");
let fourth_option= document.getElementById("fr_option");
let countCorrect=0;

// For Iteration

let iterator=0; 
let totalQuestions=QuestionAnswer.length;

// Selected Options

let answered=[
	{
		result:""
	},
	{
		result:""
	},
	{
		result:""
	},
	{
		result:""
	}
];



question_nub.innerText=`Question ${iterator+1} of ${totalQuestions}`;
question.innerText=QuestionAnswer[iterator].question;
first_option.innerText=QuestionAnswer[iterator].options[0];
second_option.innerText=QuestionAnswer[iterator].options[1];
third_option.innerText=QuestionAnswer[iterator].options[2];
fourth_option.innerText=QuestionAnswer[iterator].options[3];

prev_btn.disabled=true;


next_btn.addEventListener("click",function(){

	if(iterator==2){
		next_btn.disabled=true;
	}

	if(validateForm()){
	prev_btn.disabled=false;
		if(iterator<totalQuestions-1){ 
			if(isExistsInDic()){
				console.log("exists in dic ");
				// No need to add again
			}else{
				console.log("Not exists in dic ");
				addToResult();
			} 
			iterator=iterator+1;
			updateForm(iterator);
			// if(iterator>answered.length-1){
			// resetRadioButtons();
			// }

		}  
	}else{
		window.alert("Kindly select an option");
	}

})

prev_btn.addEventListener("click",function(){

	if(iterator<=3){
		next_btn.disabled=false;
	}

	if(iterator==1){
		prev_btn.disabled=true;
	}
	

	if(iterator<=totalQuestions && iterator>0){  
		iterator=iterator-1;
		updateForm(iterator);

	}  
})

f_btn.addEventListener('click',function(){
	next_btn.disabled=false;
	prev_btn.disabled=true;
	if(iterator!=0){
		iterator=0;
		updateForm(iterator);
	}
})

l_btn.addEventListener('click',function(){
	prev_btn.disabled=false;
	next_btn.disabled=true;
	if(iterator!=3){
		iterator=3;
		updateForm(iterator);
	}
})


function updateForm(iter){

question_nub.innerText=`Question ${iter+1} of ${totalQuestions}`;

question.innerText=QuestionAnswer[iter].question;

first_option.innerText=QuestionAnswer[iter].options[0];
second_option.innerText=QuestionAnswer[iter].options[1];
third_option.innerText=QuestionAnswer[iter].options[2];
fourth_option.innerText=QuestionAnswer[iter].options[3];


if(answered[iter].result==""){
	// Not yet submitted
	resetRadioButtons();
}else{
	// Get already submitted one index
	let sub_val= answered[iter].result;
	let sub_ind= QuestionAnswer[iter].options.indexOf(sub_val);
	switch(sub_ind){
		case 0: 
			{radio_f.checked=true; break;}
		case 1: 
			{radio_s.checked=true; break;}
		case 2: 
			{radio_t.checked=true; break;}
		case 3: 
			{radio_fourth.checked=true; break;}
	}
}

}

function validateForm(){
	if(radio_f.checked || radio_s.checked || radio_t.checked || radio_fourth.checked){
		// items is selected !

		// Grab selected item

		// if(radio_f.checked){
		// 	if(! (answered.includes(QuestionAnswer[iterator].options[0]))){
		// 		answered.push(QuestionAnswer[iterator].options[0]);
		// 	}

			// New approach
		




			
		// }
		// if(radio_s.checked){
		// 	if(!answered.includes(QuestionAnswer[iterator].options[1])){
		// 	answered.push(QuestionAnswer[iterator].options[1]);	}
		// }
		// if(radio_t.checked){
		// 	if(!answered.includes(QuestionAnswer[iterator].options[2])){
		// 	answered.push(QuestionAnswer[iterator].options[2]);}
		// }
		// if(radio_fourth.checked){
		// 	if(!answered.includes(QuestionAnswer[iterator].options[3])){
		// 	answered.push(QuestionAnswer[iterator].options[3]);}
		// }

		return true;
	}else{
		// Nothing is selected
		return false;
	}
}

submit.addEventListener("click",function () {
	// body...

	addToResult();

	if(incompleteQuiz()){
		window.alert(`You left ${incompleteQuizez().length} quizzes incomplete!`);

	}else{

		answered.forEach((value,index)=>{

			if(value.result==QuestionAnswer[index].answer){
				countCorrect=countCorrect+1;
			}

		})
		// console.log("complete quizzes")
		// submit.hidden=true;
		if(show_results.getAttribute("href") == null){
			console.log("working inside")
		show_results.setAttribute("href","#ModalCenter");
		document.getElementById("correctAnswer").innerText=`Your Scored is ${countCorrect} out of ${totalQuestions} questions`;
		
		}
	}


	// if (answered.length == 4){
	// 	// Form submitted with valid arguments


	// 	window.alert(`Your Scored ${countCorrect} marks`);
	// 	// if(submit.classList.contains("btn-outline-primary")){
	// 	// 	submit.classList.remove("btn-outline-primary");
	// 	// 	submit.classList.add("btn-primary");
	// 	// }
	// 	// submit.hidden= true;


	
})




function resetRadioButtons(){
	radio_f.checked=false;
	radio_s.checked=false;
	radio_t.checked=false;
	radio_fourth.checked=false;
}



function addToResult(){

var radios = document.getElementsByName('Google');
var checked_radio;
for(var i = 0; i < radios.length; i++){
    if(radios[i].checked){
        checked_radio = parseInt(radios[i].value);
    }
}
	let checkAns= QuestionAnswer[iterator].options[checked_radio];
	// Add to the dictionary
	answered[iterator].result=checkAns;
}

function isExistsInDic(){

	let returning=false;
	var radios = document.getElementsByName('Google');
	var checked_radio;
	for(var i = 0; i < radios.length; i++){
    if(radios[i].checked){
        checked_radio = parseInt(radios[i].value);
    	}
	}
	console.log("checkedRadio ",checked_radio);
	let checkAns= QuestionAnswer[iterator].options[checked_radio];
	console.log("checkAns ",checkAns);
	
	// looping

	for(let i=0; i<answered.length;i++){
		if(checkAns==answered[i].result){
			returning= true;
		}
	}
	return returning;
}

function incompleteQuiz(){
	let result=false;
	answered.forEach((value,index)=>{
		if(value.result==""){
			result= true;
		}
	})
	return result;
}

function incompleteQuizez(){
	let quiz_incomplete=[];
		for(let i =0; i<answered.length;i++){
			if(answered[i].result==""){
				quiz_incomplete.push(i);
			}
		}
	return quiz_incomplete;
}
		// alert 
