<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

  if (isset($_POST['BTN_search'])) { // START:: IF BUTTON pressed.
      // START:: IF all filters used.
      if ($_POST['filterCategory'] != "1" && $_POST['filterUser'] != "1") { 
          $i = 0;
          foreach($tasksData as $task){
            if($task['category'] == $_POST['filterCategory'] && $task['userUID'] == $_POST['filterUser'] ) {
              $_SESSION['search'][$i] = $task;
              $i++;
            } // END IF
          } // END FOREACH
  
      // End:: IF all filters used.
      // START:: if user ONLY                                                                     
      } elseif ($_POST['filterCategory'] == "1" && $_POST['filterUser'] != "1") {
          $i = 0;
          foreach($tasksData as $task){
            if($task['userUID'] == $_POST['filterUser'] ) {
              $_SESSION['search'][$i] = $task;
              $i++;
            } // END IF
          } // END FOREACH
      // START:: if category ONLY                                                                     
      } elseif ($_POST['filterCategory'] != "1" && $_POST['filterUser'] == "1") {
          $i = 0;
          foreach($tasksData as $task){
            if($task['category'] == $_POST['filterCategory']) {
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
