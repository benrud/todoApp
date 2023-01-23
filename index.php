<?php /*1st Line on every webpage.*/ include $_SERVER['DOCUMENT_ROOT'].'/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <?php echo $styleSheetFiles;?>   
<!-- Code For Date Picker :: https://jqueryui.com/datepicker/ -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

      <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
      </script>
<!-- Code For Date Picker :: https://jqueryui.com/datepicker/ -->
      
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php echo $navBar;?>   
      <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 ">
                    <div class="m-4 m-lg-5">
          
                        <h1 class="display-5 fw-bold text-center">Creat A New Task</h1>
                          
                          <!-- Task Form-->                        
                            <form class="row g-3 fs-4" action="redirects/task.php" method="post" id="newTaskForm1" >
                              
                              <div class="col-md-6">
                                <label for="user" class="form-label">User</label>
                                <select id="user" class="form-select" name="user">
                                  <option selected>Choose One</option>
                                    <?php
                                      foreach($usersData as $user){
                                        echo '<option selected value="'.$user['uid'].'">'.$user['fName'].' '.$user['lName'].'</option>';
                                      }
                                    ?>
                                </select>
                              </div>                              
                              
                              
                              <div class="col-md-6">
                                <label for="title" class="form-label">Task Title</label>
                                <input type="text" class="form-control" name="title">
                              </div>
                              
                               <div class="col-md-6">
                                <label for="category" class="form-label">Task Category</label>
                                <select id="category" class="form-select" name="category">
                                  <option selected>Choose One</option>
                                  <option>Homework</option>
                                  <option>Chores</option>
                                  <option>Event</option>
                                </select>
                              </div> 
                              
                              <div class="col-md-6">
                                <label for="category" class="form-label">Task Due Date</label><br>
                                <input type="text" class="form-select" id="datepicker" name="dateDeadline">
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
                                <input type="submit" class="btn btn-primary btn-lg" value="Create" name="BTN_create">
                              </div>
                              
                            </form>
                        <!-- Task Form-->  

                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Total Tasks</h2>
                                <p class="mb-0">Task Count = <?php echo count($tasksData);;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Total Users</h2>
                                <p class="mb-0">User Count = <?php echo count($usersData);?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">Jumbotron hero header</h2>
                                <p class="mb-0">The heroic part of this template is the jumbotron hero header!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Feature boxes</h2>
                                <p class="mb-0">We've created some custom feature boxes using Bootstrap icons!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Simple clean code</h2>
                                <p class="mb-0">We keep our dependencies up to date and squash bugs as they come!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                                <h2 class="fs-4 fw-bold">A name you trust</h2>
                                <p class="mb-0">Start Bootstrap has been the leader in free Bootstrap templates since 2013!</p>
                            </div>
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
