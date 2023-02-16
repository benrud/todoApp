<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

  //is button pressed?
  if(isset($_POST['BTN_search'])) {

        $searchResultsIndex = 0;
        //loop throught medgedData
        foreach($mergedTaskUserData as $key => $task) {

            //check to see if search value matched data value
            if($_POST['filterCategory'] == $task['category']) {
              
              //search matches data. Build a session. 
              $_SESSION['searchResults'][$searchResultsIndex] = [$task]; //remove []
              $searchResultsIndex++;

            } //if() inside foreach
          
        }//foreach

    echo '<pre>';
    var_dump($_SESSION['searchResults']);
    echo '</pre>';

  }//if() button pressed





?>
