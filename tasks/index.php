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
        <section class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>
                        <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>

                      <!--  https://getbootstrap.com/docs/5.0/content/tables/   -->
                      <div class="table-responsive">
                        <table class="table table-hover">
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
