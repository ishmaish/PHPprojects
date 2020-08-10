function formValidation(){ 

  var username= document.getElementById('state');
  var state =  document.getElementById('state'); 
  var package =  document.getElementById('package'); 
  var date =  document.getElementById('date'); 
  var time =  document.getElementById('time'); 

if(username.value.length == 0){
 document.getElementById('head').innerText = "* All fields are mandatory *";
//this segment displays the validation rule for all fields
 username.focus();
 return false;
}
if(inputAlphabet(username, "* For your name please use alphabets only *")){
if(trueSelection(state, "* Please Choose any one option")){
if(trueSelection(package, "* Please Choose any one option")){
if(trueSelection(date, "* Please Choose any one option")){
if(trueSelection(time, "* Please Choose any one option")){


return true;
}
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

function trueSelection(inputtext, alertMsg){  
   if(inputtext.value == "Please Choose"){      
   document.getElementById('p4').innerText = alertMsg;
   inputtext.focus();    
   return false;    
   }else{      
   return true;     
   } 
   } 

function trueSelection(inputtext, alertMsg){  
   if(inputtext.value == "Please Choose"){      
   document.getElementById('p5').innerText = alertMsg;
   inputtext.focus();    
   return false;    
   }else{      
   return true;     
   } 
   } 

function trueSelection(inputtext, alertMsg){  
   if(inputtext.value == "Please Choose"){      
   document.getElementById('p6').innerText = alertMsg;
   inputtext.focus();    
   return false;    
   }else{      
   return true;     
   } 
   } 

function trueSelection(inputtext, alertMsg){  
   if(inputtext.value == "Please Choose"){      
   document.getElementById('p7').innerText = alertMsg;
   inputtext.focus();    
   return false;    
   }else{      
   return true;     
   } 
   } 

