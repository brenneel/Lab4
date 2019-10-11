//form checker code goes here
function validate(){
    console.log("submit worked");
    //validation stuff and things
    let isValid = true;
    if(document.getElementById("username").value == ""){
        alert("Please enter a username");
        return(false);
    }
    if(document.getElementById("password").value == ""){
        alert("Please enter a password");
        return(false);
    }
   var checker = checkboxChecker();
   if(checker == false){
       return(false);
   }

    return(true);
    
 
}

function checkboxChecker(){
    var check = document.getElementsByTagName("input");
    var isChecked = false;
    for(i=0; i<check.length; i++){
       
        if(check[i].type == 'radio' && (check[i].checked ==true)){
            isChecked = true;
        }
        
    }
    if(isChecked == false){
        alert("Please select a shipping option");
    }
    return(isChecked);
}

//resets the form to it's initial state
function refreshForm(){
    console.log("page reset");
    location.href = "./frontEnd.html";
}

/*
function validate(){
    console.log("submit worked");
    //validation stuff and things
    isValid = true;
    if(document.getElementById("username").value == ""){
        isValid = false;
        alert("Please enter a username");

    }
    else{
        document.getElementById("myForm").submit();
    }
 
  
}
*/