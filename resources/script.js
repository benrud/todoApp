var userID = 0;
var userFname = null;
document.getElementById("newTaskForm").style.display="none";
function getUID() {
  //https://stackoverflow.com/questions/1085801/get-selected-value-in-dropdown-list-using-javascript
  var e = document.getElementById("userUID");
  userID = e.options[e.selectedIndex].value;
  userFname = e.options[e.selectedIndex].text;
  



  if(userID>0){
    // hide element using ID https://stackoverflow.com/questions/11226489/show-hide-forms-using-buttons-and-javascript
    document.getElementById("newTaskForm").style.display="block";
  } else {
    document.getElementById("newTaskForm").style.display="none";
  }
  console.log(userID); 
  // alert(userID);
  // alert(userFname);
}

