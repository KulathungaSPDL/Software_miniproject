<?php
session_start();
$username =$_SESSION['username'];
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
      <section id="banner"> 
        <div
          class="banner text-center bg-image">
            <div class="bg-hover d-flex justify-content-center align-items-center">
              <div class="text-white">
                <h1 class="mb-3">SOFTWARE DEVELOPMENT</h1>
                <h4 class="mb-3">EEX 3417</h4><br>
                <h5 class="mb-3">Rajila Chaminie Kumari (615442501)</h5>
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