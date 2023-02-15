<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 
  
  if (isset($_POST['BTN_search'])) {

      $i = 0;
      foreach($tasksData as $task){
        
        if($task['category'] == $_POST['filterCategory']) {
          $_SESSION['search'][$i] = $task;
          $i++;
        } // END IF
        
      } // END FOREACH

      header('Location: /tasks/index.php');
  } else {
   // error
  }

    // echo '<pre>';
    // var_dump($_SESSION);
    // echo '</pre>';

?>
