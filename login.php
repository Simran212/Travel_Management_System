<?php 
include './inc/config.php';
$pId = $_GET['pid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="includes\css\bootstrap.min.css">
    <style>
      .card{
        width: 50% !important;
        margin-left: 240px;
      }
      .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
      }
      .register-link{
        text-decoration: none;
      }

    </style>
</head>
<body>
<!-- <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex"></div>

          <div class="card-body p-5 p-sm-5">
            <h5 class="card-title text-center mb-4 fw-bold fs-5">Login</h5>
            
            <form action="./inc/process.php?pid=<?php echo $pId; ?>" method="post">

              <div class="form-floating mb-4">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" name="uName" required autofocus>
                <label for="floatingInputUsername">Username</label>
              </div>

              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="floatingInputPwd" placeholder="password" name="password" required autofocus>
                <label for="floatingInputPwd">Password</label>
              </div>

              <p>don't have an account?<a href="./register.php" class="register-link text-danger">register now</a></p>
           
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-danger btn-login fw-bold text-uppercase" type="submit"> Login 
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
</div> -->
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(images/bg2.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">

          <div class="card-body p-5 p-sm-5">
            <h5 class="card-title text-center mb-4 fw-bold fs-5">Login</h5>
            
            <form action="./inc/process.php?pid=<?php echo $pId; ?>" method="post">

              <div class="form-floating mb-4">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" name="uName" required autofocus>
                <label for="floatingInputUsername">Username</label>
              </div>

              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="floatingInputPwd" placeholder="password" name="password" required autofocus>
                <label for="floatingInputPwd">Password</label>
              </div>

              <p>don't have an account? <a href="./register.php" class="register-link text-danger">register now</a></p>
           
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-danger btn-login fw-bold text-uppercase mt-3" type="submit"> Login 
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
