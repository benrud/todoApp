<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 


  $matchCategory = ($age >= 18) ? true : false;

  if (isset($_POST['BTN_search'])) { // START:: IF BUTTON pressed.

      if ($_POST['filterCategory'] != "1" && $_POST['filterUser'] != "1") { // START:: IF all filters used.
          $i = 0;
          foreach($tasksData as $task){
            if($task['category'] == $_POST['filterCategory'] && $task['userUID'] == $_POST['filterUser'] ) {
              $_SESSION['search'][$i] = $task;
              $i++;
            } // END IF
          } // END FOREACH
  
      // End:: IF all filters used.
      // if user ONLY                                                                     
      } elseif ($_POST['filterCategory'] == "1" && $_POST['filterUser'] != "1") {
          $i = 0;
          foreach($tasksData as $task){
            
            if($task['userUID'] == $_POST['filterUser']) {
              $_SESSION['search'][$i] = $task;
              $i++;
            } // END IF
            
          } // END FOREACH


        
      }
    
    
    
    
    
    
    
    header('Location: /tasks/index.php?filter=1');
  }// END:: IF BUTTON pressed. 

    // echo '<pre>';
    // var_dump($_SESSION);
    // echo '</pre>';

?>
