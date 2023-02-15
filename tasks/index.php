<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

$result = array();
foreach ($tasksData as $task) {
  foreach ($usersData as $user) {
    if ($task["userUID"] == $user["uid"]) {
        unset($user["uid"]);  
        $result[] = array_merge($task, $user);      
    } //if
  }//foreach User
}//foreach Task

// https://stackoverflow.com/questions/10408482/how-to-get-unique-value-in-multidimensional-array
$categories = array();
foreach ($result as $cat) {
    $categories[] = $cat['category'];
}
$uniqueCats = array_unique($categories);




echo '<pre>';
var_dump($uniqueCats);
echo '</pre>';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <?php echo $styleSheetFiles;?>
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php echo $navBar;?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Filter Tasks</h1>
                        <p class="fs-4">Form GOES here</p>
                        <form action="/redirects/search.php" method="post"> 
                           
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                          
                          
                          <input type="submit" value="Search" class="btn btn-primary btn-lg" name="BTN_search">
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>
                        <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
                            
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Due Date</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($result as $key => $task) {
          echo '
                  <tr>
                    <th scope="row">'.$task['dateDeadline'].'</th>
                    <td>'.$task['fName'].' '.$task['lName'].'</td>
                    <td>'.$task['title'].'</td>
                    <td>'.$task['category'].'</td>
                    <td>'.$task['reward'].'</td>
                  </tr>
                ';
        }
    ?>
  </tbody>
</table>
                       
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <?php echo $footer;?>
        </footer>
        <?php echo $javaScriptFiles;?>
    </body>
</html>
