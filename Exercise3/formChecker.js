//form checker code goes here

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

//resets the form to it's initial state
function refreshForm(){
    console.log("page reset");
    location.href = "./frontEnd.html";
}

function validate(){
    console.log("submit worked");
    //validation stuff and things
    isValid = true;
    if(document.getElementById("username").value == ""){
        isValid = false;
        alert("Please enter a username");
        return(false);
    }
    alert("passed");
    return(true);
 
}