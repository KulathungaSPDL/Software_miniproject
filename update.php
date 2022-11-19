<?php
session_start();
$username =$_SESSION['username'];

if(isset($_GET['update'])){
$contactid = $_GET['update'];

$con = mysqli_connect("localhost","root" , "" , "softwareminiproject");

$sql="SELECT * FROM contracts WHERE contractid = '$contactid'";
$results = mysqli_query($con,$sql);
$resultsCheck= mysqli_num_rows($results);

if($resultsCheck>0) {
  while ($row = mysqli_fetch_assoc($results)) {

$compid = $row['seedcompid'];
$qty = $row['qty'];
$seedtype  = $row['seedtype'];

}

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
                    <br>
                    <h4>Contract Form Update</h4>
                    <br>
                    <form action="update.inc.php" method = "POST">
                        <div class="form-group">
                            <label for="contactid">Contact ID</label>
                            <input type="text" class="form-control" id="contactid" name="contactid" value ="<?php echo $contactid; ?>"readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="compid">Company ID</label>
                            <input type="text" class="form-control" id="compid" name="compid" value ="<?php echo $compid; ?>"readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="qty">Seed Quantity </label>
                            <input type="text" class="form-control" id="qty" name="qty" value ="<?php echo $qty; ?>"readonly>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="seedtype">Seed type</label>
                            <input type="text" class="form-control" id="seedtype" name="seedtype" value ="<?php echo $seedtype; ?>"readonly>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="elevator">Elevator</label>
                            <select class="form-control" name = "elevator">  
                              <option value="">--- Select ---</option>  
                              <?php  
                                  include 'dbConnector.inc.php';
                                  $con = mysqli_connect("localhost","root" , "" , "softwareminiproject"); 
                                  if(mysqli_connect_errno()){
                                    echo "Failed to connect:".mysqli_connect_errno();
                                  }  
                              ?>  
                              <?php  
                                  $query = "select * from elevator"; 
                                  $results=$con ->query($query);

                                  foreach ($results as $elevator){
                              ?>
                                    <option value="<?php echo $elevator["elevatorid"];?>"><?php echo $elevator["name"];?></option>
                                    <?php
                                    }
                                    ?>
                              </select>  
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="storedate">Seed type</label>
                            <input type="date" class="form-control" id="storedate" name="storedate">
                        </div>
                        <br>
                        <div class="form-group align-items-end">
                            <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <br>
                    </form>
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
<?php
}}
?>