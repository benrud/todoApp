<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

//$tasksData and $usersData are defined in functions.php.

// #1 MAKE SURE FORM DATA IS VALID
// process form IF user selected and BTN_create was clicked 
if(isset($_POST['BTN_create']) && $_POST['user'] > 0) {

  $date = date_create($_POST['dateDeadline']);
  $deadLineReformatted = date_format($date,"Y/m/d");
  
  //Create a new LARGEST UID based on existing UIDs in an array. 
  $largest_uid = 0;
  foreach ($tasksData as $item) {
    if ($item['uid'] > $largest_uid) {
        $largest_uid = $item['uid'];
        $newUID = $largest_uid+1;
    }
  } 
  
  $newFormData = array(
    "uid"=> "$newUID", 
    "userUID"=> $_POST['user'], 
    "dateCreate"=> date("Y/m/d"), 
    "dateDeadline"=> "$deadLineReformatted", 
    "dateComplete"=> NULL, 
    "title"=> $_POST['title'],
    "description"=> $_POST['description'],
    "status"=> "created", 
    "reward"=> $_POST['reward'],
    "timeNeeded"=> $_POST['timeNeeded'],
    "category"=> $_POST['category']
  );
  

  array_push($tasksData, $newFormData);
  $tasksDataAsJSON = json_encode($tasksData, JSON_PRETTY_PRINT);
  file_put_contents($taskDataFile, $tasksDataAsJSON);


  
  // echo '<pre>';
  // var_dump($newFormData);
  // echo '</pre>';

 
  
}

  header('Location: /index.php');
?>