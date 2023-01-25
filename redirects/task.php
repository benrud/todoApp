<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

//$tasksData and $usersData are defined in functions.php.

// #1 MAKE SURE FORM DATA IS VALID
// process form IF user selected and BTN_create was clicked 
if(isset($_POST['BTN_create']) && $_POST['user'] > 0) {

// #2 REFORMAT DEADLINE DATE
//Create a deadline date using form data  
  //create date from picker
  $dateDeadline = date_create($_POST['dateDeadline']);
  //convert date from picker
  $dateDeadline = date_format($dateDeadline,"Y/m/d");

// #3 CREATE UID
//Create new largest UID based on UIDs in data.json 
  $largest_uid = 0;
  foreach ($tasksData as $item) {
      if ($item['uid'] > $largest_uid) {
          $largest_uid = $item['uid'];
          $newUID = $largest_uid+1;
      }
  }

  // #4 CREATE TASK ARRAY
  //Create array of new form data 
    $newFormData = array(
      "uid"=> $newUID,
      "userUID"=> $_POST['user'],
      "dateCreate"=> date("Y-m-d"), 
      "dateDeadline"=> $dateDeadline, 
      "dateComplete"=> NULL,
      "title"=> $_POST['title'], 
      "status"=> "created",
      "description"=> $_POST['description'], 
      "reward"=> $_POST['reward'],
      "timeNeeded"=> $_POST['timeNeeded'],
      "category"=> $_POST['category']
    );

// #5 MERGE ARRAYS
  // add new form data to existing array.
  array_push($tasksData, $newFormData);
  //turn php array back into JSON data
// #6 CONVERT TO JSON AND WRITE TO FILE
  $jsonData = json_encode($tasksData, JSON_PRETTY_PRINT);
  //send data to data.json
  file_put_contents($taskDataFile, $jsonData);

// #7 REDIREC TO HOME
  header('Location: /index.php');
  
} //end of validation if() statement






  
  // echo '<pre>';
  // var_dump($newFormData);
  // echo '</pre>';






//   header('Location: /index.php');

// foreach ($existingData as $key => $item){
//   if ($item['uid'] == $_POST["uid"]) {
//     // echo $item['fName']."<hr>";
//     $existingData[$key]['fName'] = $firstName;
//     $existingData[$key]['lName'] = $lastName;
//     $existingData[$key]['email'] = $email;
//     $existingData[$key]['phone'] = $phone;
//     $existingData[$key]['relationship'] = $relationship;
//   }
// }

//   //turn php array back into JSON data
//   $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);
//   //send data to data.json
//   file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);

//   header('Location: /index.php');
?>