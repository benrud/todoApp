// document.getElementById("newTaskForm").style.display="none";

// Form Validation https://www.w3schools.com/js/js_validation.asp
function validateForm() {
  let deadline = document.forms["myForm"]["dateDeadline"].value; //""
  let user = document.forms["myForm"]["user"].value; //"0"
  let title = document.forms["myForm"]["title"].value; //""
  let category = document.forms["myForm"]["category"].value; //"0"
  
  
  
  
  if (deadline == "" || title == "" || user == "0" || category == "0") {
    alert("One or more of the required fileds is missing information.");
    return false;
  }
} 

  // //https://stackoverflow.com/questions/1085801/get-selected-value-in-dropdown-list-using-javascript
  // var e = document.getElementById("userUID");
  // userID = e.options[e.selectedIndex].value;
  // userFname = e.options[e.selectedIndex].text;
  



  // if(userID>0){
  //   // hide element using ID https://stackoverflow.com/questions/11226489/show-hide-forms-using-buttons-and-javascript
  //   document.getElementById("newTaskForm").style.display="block";
  // } else {
  //   document.getElementById("newTaskForm").style.display="none";
  // }
  // console.log(userID); 