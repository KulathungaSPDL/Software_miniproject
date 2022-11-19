<?php
session_start();

$con = mysqli_connect("localhost","root" , "" , "softwareminiproject");


$username =$_SESSION['username'];

// get user if form session
$sql = "SELECT * FROM famer WHERE username = '$username';";
$results = mysqli_query($con,$sql);
$resultsCheck= mysqli_num_rows($results);

if($resultsCheck>0) {
    while ($row = mysqli_fetch_assoc($results)) {
$famerid = $row['id'];
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">

    <title>Software Mini Project</title>
</head>
<body>
    
    <!-- ===================header section start=================== -->
    <section id="header" class="bg-dark">
      <header>
        <div class="container text-white p-2">
        <div class="d-flex justify-content-between">
          <h3>ETHEREUM-SC</h3>
          <p class="text-info" ><?php echo $username ?></p>
        </div>
      </header>
    </section>
    <!-- ===================Header section end=================== -->

    
    <!-- ===================Navigation section start=================== -->
    <section id="navigation">
      <?php include('pages/indexPageInclude/navigation.php'); ?>
    </section>
    <!-- ===================Navigation section end=================== -->

    <!-- ===================Body section start=================== -->
      <!-- ------------------Banner start------------------ -->
      <section id="content">
        <div class="container">
            <div class="row">
                <div class="col">

                <?php
                // get contract form according to login username
                    $mysqli = new mysqli('localhost','root','','softwareminiproject') or die(mysqli_error($mysqli));
                    $result = $mysqli->query("select * from contracts where id = '$famerid' ") or die($mysqli->error);
                  ?>
                    <br>
                    <h4>Contruct Form</h4>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Contact ID</th>
                          <th scope="col">Famer Name</th>
                          <th scope="col">Seed Company</th>
                          <th scope="col">Seed Qty</th>
                          <th scope="col">Seed Type</th>
                          <th scope="col">Elevator Name</th>
                          <th scope="col">Store Date</th>
                          <th scope="col"><strong>Options</strong></th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php
                          while($row = $result->fetch_assoc()):
                        ?>
                        <tr>
                          <td><?php echo $row['contractid']; ?></td>
                          <td><?php echo $username; ?></td>
                          <td><?php echo $row['seedcompid']; ?></td>
                          <td><?php echo $row['qty']; ?></td>
                          <td><?php echo $row['seedtype']; ?></td>
                          <td><?php echo $row['elevatorid']; ?></td>
                          <td><?php echo $row['date']; ?></td>
                          <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <!-- <button type="button" name="update" id="update" class="btn btn-outline-success">Update</button> -->
                            <!-- <button type="delete" name="delete" id="delete" class="btn btn-danger" href = "delete.inc.php?delete=<?php echo $row['contractid']; ?>">Delete</button> -->
                            <a href = "update.php?update=<?php echo $row['contractid']; ?>" class="btn btn-outline-success" >Update</a>
                            <a href = "delete.inc.php?delete=<?php echo $row['contractid']; ?>" class="btn btn-danger" >Delete</a>
                          </div>
                          </td>
                        </tr>
                        <?php 
                          endwhile;
                        ?>
                      </tbody>
                    </table>
                    <?php	
                      function per_r($array){
                        echo '<per>';
                        print_r($array);
                        echo '</per>';
                      }
                    
                      ?>
                </div>
            </div>
        </div>
      </section>
      <!-- ------------------Banner end------------------ -->
      
    <!-- ===================Body section end=================== -->


    <!-- ===================Footer section start=================== -->
    <section id="footer">
      <?php include('pages/indexPageInclude/footer.php'); ?>
    </section>
    
    <!-- ===================Footer section end=================== -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>