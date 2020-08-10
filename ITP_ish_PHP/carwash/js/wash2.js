function formValidation(){

 var name = document.getElementById('name');
 var vehiclemodel = document.getElementById('vehiclemodel');
 var vehiclecolour = document.getElementById('vehiclecolour');
 var vehiclenumber = document.getElementById('vehiclenumber');


if(name.value.length == 0){
	document.getElementById('head').innerText = "* All fields are mandatory *";
  name.focus();
  return false;
}

if(inputAlphabet(name, "* For your name please use alphabets only *")){
if(textAlphanumeric(vehiclemodel, "* For vehicle model please use numbers and letters by adding the year of manufacture *")){
if(inputAlphabet(vehiclecolour, "* For your vehicle colour please use alphabets only *")){
if(textAlphanumeric(vehiclenumber, "* For vehicle number please use numbers and letters *")){

return true;


}
}
}
}

return false;
}



function inputAlphabet(inputtext, alertMsg){
 var alphaExp = /^[a-zA-Z]+$/;
 if(inputtext.value.match(alphaExp)){
 return true;
 }else{
 document.getElementById('p1').innerText = alertMsg; 
 //alert(alertMsg);
inputtext.focus();
 return false;
}
}
function inputAlphabet(inputtext, alertMsg){
 var alphaExp = /^[a-zA-Z]+$/;
 if(inputtext.value.match(alphaExp)){
 return true;
 }else{
 document.getElementById('p2').innerText = alertMsg; 
 //alert(alertMsg);
inputtext.focus();
 return false;
}
}


function inputAlphabet(inputtext, alertMsg){
 var alphaExp = /^[a-zA-Z]+$/;
 if(inputtext.value.match(alphaExp)){
 return true;
 }else{
 document.getElementById('p3').innerText = alertMsg; 
 //alert(alertMsg);
inputtext.focus();
 return false;
}
}

function textAlphanumeric(inputtext, alertMsg){
 var alphaExp = /^[a-zA-Z0-9]+$/;
 if(inputtext.value.match(alphaExp)){
 return true;
 }else{
 document.getElementById('p4').innerText = alertMsg; 

 inputtext.focus();
return false;
}
}












 