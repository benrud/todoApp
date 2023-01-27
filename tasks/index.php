<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; 

//sort array by date
usort($combinedData, function($a, $b) {
    return strtotime($b['dateDeadline']) - strtotime($a['dateDeadline']);
});

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
      <div class="container px-lg-5 mt-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 ">
                    <div class="m-4 m-lg-5">
          
                        <h1 class="display-5 fw-bold text-center">Filter Tasks</h1>
                          
                          <!-- Task Form-->                        
<!--                             <form class="row g-3 fs-4" action="redirects/task.php" method="post" id="newTaskForm"  onsubmit="return validateForm()" name="myForm" > -->
                              
                              <div class="col-md-6">
                                <label for="user" class="form-label">User <span style="color:red; font-size: 10px">*required</span></label>
                                <select id="user" class="form-select" name="user">
                                  <option selected value="0">Choose One <span style="color:red; font-size: 10px">*required</span></option>
                                    <?php
                                      foreach($usersData as $user){
                                        echo '<option selected value="'.$user['uid'].'">'.$user['fName'].' '.$user['lName'].'</option>';
                                      }
                                    ?>
                                </select>
                              </div>                              
                              
                              
                              <div class="col-md-6">
                                <label for="title" class="form-label">Task Title <span style="color:red; font-size: 10px">*required</span></label>
                                <input type="text" class="form-control" name="title">
                              </div>
                              
                               <div class="col-md-6">
                                <label for="category" class="form-label">Task Category <span style="color:red; font-size: 10px">*required</span></label>
                                <select id="category" class="form-select" name="category">
                                  <option selected value="0">Choose One</option>
                                  <option value="Schoolwork">Schoolwork</option>
                                  <option value="Chore">Chores</option>
                                  <option value="Social">Social</option>
                                  <option value="Health">Health</option>
                                  <option value="Travel">Travel</option>
                                </select>
                              </div> 
                              
                              <div class="col-md-6">
                                <label for="category" class="form-label">Task Due Date <span style="color:red; font-size: 10px">*required</span></label><br>
                                <input type="text" class="form-select" id="datepicker" name="dateDeadline" >
                              </div>
                              
                              <div class="col-12">
                                <label for="description" class="form-label">Task Description</label>
                                <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                              </div>
                              
                              <div class="col-md-6">
                                <label for="reward" class="form-label">Task Value</label>
                                <!-- Number input to accept decimal -  https://stackoverflow.com/questions/34057595/allow-2-decimal-places-in-input-type-number -->
                                <input type="number" class="form-control" name="reward" step=".01">
                              </div>
                              
                              <div class="col-md-6">
                                <label for="timeNeeded" class="form-label">Minutes Needed To Complete</label>
                                <input type="number" class="form-control" name="timeNeeded">
                              </div>
                              
                              <div class="col-12">
<!--                                 <input type="submit" class="btn btn-primary btn-lg" value="Create" name="BTN_create"> -->
                                      <button type="button" onclick="hideRows(myTable, 2, "Todd Benrud")">Click Me!</button>
                              </div>
                              
<!--                             </form> -->
                        <!-- Task Form-->  

                    </div>
                </div>
            </div>  
      
      
      <section class="py-5">

            <div class="container px-lg-5">
              <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>

                      <!--  https://getbootstrap.com/docs/5.0/content/tables/   -->
                      <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                           <thead>
                            <tr>
                              <th scope="col">Created</th>
                              <th scope="col">Deadline</th>
                              <th scope="col">User</th>
                              <th scope="col">Title</th>
                              <th scope="col">Category</th>
                              <th scope="col">Status</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              foreach ($combinedData as $item){
                                 echo "<tr>";
                                  echo "<td>". $item['dateCreate']. "</td>"; 
                                  echo "<td>". $item['dateDeadline']."</td>";
                                  echo "<td>". $item['fName']." ".$item['lName']."</td>";
                                  echo "<td>". $item['title']. "</td>";
                                  echo "<td>". $item['category']. "</td>";
                                  echo "<td>". $item['status']. "</td>";
                                  echo "<td> <a href='#' target='_blank'>Update</a> </td>";
                                echo "</tr>";
                              }
                            ?>

                          </tbody>
                        </table>
                      </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <?php echo $javaScriptFiles;?>
    </body>
</html>
