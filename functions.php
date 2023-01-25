<?php session_start();
$taskDataFile = $_SERVER['DOCUMENT_ROOT']."/data/tasks.json";
$usersDataFile = $_SERVER['DOCUMENT_ROOT']."/data/users.json";

// JSON data needed for app.
    // Get data from json file.
    $jsonTasks = file_get_contents($taskDataFile); 
    $jsonUsers = file_get_contents($usersDataFile); 
    // Convert json data to PHP array.
    $tasksData =  json_decode($jsonTasks, TRUE);   
    $usersData =  json_decode($jsonUsers, TRUE);
// JSON data needed for app.





// **************** reusable DATA manipulation functions and variables below
// **************** reusable DATA manipulation functions and variables below
// **************** reusable DATA manipulation functions and variables below


// combines task data with user data. chapGPT {PHP Join Multidimensional Arrays}
        $combinedData = [];
        foreach ($tasksData as $item1) {
            foreach ($usersData as $item2) {
                if ($item1["userUID"] == $item2["uid"]) {
                    $combinedData[] = array_merge($item1, $item2);
                }
            }
        }

array_multisort(array_map('strtotime',array_column($combinedData,'dateDeadline')),
                SORT_DESC, 
                $combinedData);



  echo '<pre>';
  var_dump($combinedData);
  echo '</pre>';

// **************** reusable TEMPLATE variables below
// **************** reusable TEMPLATE variables below
// **************** reusable TEMPLATE variables below
  $styleSheetFiles = 
    ' 
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Bootstrap icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="/resources/templateFiles/css/styles.css" rel="stylesheet" />
      <link href="/resources/style.css" rel="stylesheet" />
    ';

  $javaScriptFiles = 
    ' 
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="/resources/templateFiles/js/scripts.js"></script>
      <script src="/resources/script.js"></script>
    ';


$navBar = 
  '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!">Task Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tasks/">Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tasks/new.php">New Task</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tasks/status.php">Search</a></li>
                </ul>
            </div>
        </div>
    </nav>
  ';

?>