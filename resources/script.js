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


// // Example usage:
// hideRows("myTable", 2, "todd");
// hide rows based on column value.
//   var tableId = "myTable";
// var columnIndex = 2;
// var stringToMatch = "todd";


function hideRows(tableId, columnIndex, stringToMatch) {
  alert("Hello World!");
  

  
  // Get the table element by its ID
  var table = document.getElementById(tableId);
  
  // Get all the rows in the table
  var rows = table.getElementsByTagName("tr");
  
  // Loop through each row
  for (var i = 0; i < rows.length; i++) {
    // Get the specific cell in the column we're checking
    var cell = rows[i].getElementsByTagName("td")[columnIndex];
    
    // Check if the cell's text content matches the string we're looking for
    if (cell.textContent.indexOf(stringToMatch) !== -1) {
      // If it does, hide the row
      rows[i].style.display = "none";
    }
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