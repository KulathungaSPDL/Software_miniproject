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

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="./image/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action ="signup.inc.php" method = "POST">

                <!-- f_name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="firstname" name="firstname" class="form-control form-control-lg"
                    placeholder="Enter your first name" />
                  <label class="form-label" for="firstname">First Name</label>
                </div>

                <!-- l_name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                    placeholder="Enter your last name" />                  
                  <label class="form-label" for="lastname">Last Name</label>
                </div>
    
                <!-- user_name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="username" name="username" class="form-control form-control-lg"
                    placeholder="Enter your user name" />           
                  <label class="form-label" for="username">User Name</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Enter password" />   
                  <label class="form-label" for="password">Password</label>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg px-5">Register</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>