

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equalv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scal=1.0">
     <title> Login </title>
    <meta name="viewport" content="widht-device-width, initial-scale=1.0">
    <meta name="author" content="Pawakharisma">
    <meta name="Description" content="Contoh Website Bootstrap">
    <link rel="stylesheet" href="login.css">
</head>

<body>
<section class="ftco-section">
  
          <!-- <h5 class="modal-title">Modal title</h5> -->
          
          
        </div>
        
  
        
        <div class="container"  >
        <form action="" class="signin-form" method="POST">
            <header>Selamat datang </header>
            <span >Silahkan login dahulu sebelum masuk ke laman website</span>
          
          
        
            <div class="form-floating mb-3">
              <label for="floatingInput">Email address</label>
              <input type="email" class="form-control rounded-3" id="floatingInput" name="email" placeholder="name@example.com">
              
            </div>
            <div class="form-floating mb-3">
              <label for="floatingPassword">Password</label>
              <input type="password" class="form-control rounded-3" id="floatingPassword" name="password" placeholder="Password">
              
            </div>
            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-danger" type="submit" name="submit">Sign up</button>
            
            <hr class="my-4">
            
            </button>
            <div class="banner-text">
            <a href="admin.php" class="btn btn-primary mb-2 mr-2">Login admin</a>
          </div>
            
          </form>
        </div>
        </div>
      </div>
    </div>
  
    
  </body>
      
</html>
</section>
<?php
    if (isset($_POST['submit'])) {
      $username = $_POST['email'];
      $password = $_POST['password'];
  
      $_SESSION['email'] = "nanda@gmail.com";
      $_SESSION['password'] = "123";
  
      if ($username == $_SESSION['email'] && $password == $_SESSION['password']) {
        header('Location:ecommerce.html');
      } else {
        echo "username atau password salah !";
      }
    }
    ?>

