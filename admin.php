
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
    <link rel="stylesheet" href="admin.css">
</head>

<body>
<section class="ftco-section">  
  
          <!-- <h5 class="modal-title">Modal title</h5> -->
          
          
        </div>
        
  
        
        <div class="container"  >
          <form class="head"  method="POST">
            <header>Login </header>
            
            <hr class="my-4">
          
          
            <div class="form-floating mb-3">
              <label for="floatingInput">Username</label>
              <input type="text" class="form-control rounded-3" id="floatingInput" name="username" placeholder="Username">
              
            </div>
            <div class="form-floating mb-3">
              <label for="floatingPassword">Password</label>
              <input type="password" class="form-control rounded-3" id="floatingPassword" name="password" placeholder="Password">
              
            </div>
            
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-danger" type="submit" name="submit">Sign up</button>
            
            
            
            </button>
            
          </form>
        </div>
        </div>
      </div>
    </div>
</section>
    <?php
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
  
      $_SESSION['username'] = "nanda";
      $_SESSION['password'] = "123";
  
      if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
        header('Location:adminnn_asd.html');
      } else {
        echo "username atau password salah !";
      }
    }
    ?>
    
  </body>
      
</html>


