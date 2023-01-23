<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

//process form IF user selected and BTN_create was clicked 
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['BTN_create']) && $_POST['user'] > 0) {

//create date from picker
$dateDeadline = date_create($_POST['dateDeadline']);
//convert date from picker
$dateDeadline = date_format($dateDeadline,"Y/m/d");

  $newTask = array(
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
}

//Create a new LARGEST UID based on existing UIDs in an array. 
$largest_uid = 0;
foreach ($tasksData as $item) {
    if ($item['uid'] > $largest_uid) {
        $largest_uid = $item['uid'];
        $newUID = $largest_uid+1;
    }
}

  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';

//   // add new form data to existing array.
//   array_push($existingData, $newFormData);
//   //turn php array back into JSON data
//   $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);
//   //send data to data.json
//   file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);

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