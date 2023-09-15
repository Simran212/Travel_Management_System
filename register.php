<?php 
include './inc/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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


    </style>
</head>
<body>
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(images/bg2.jpg);">
<div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card flex-row border-0 shadow rounded-3 overflow-hidden">

          <div class="card-body p-4">
            <h5 class="card-title text-center py-3 fw-bold fs-5">Register Now</h5>
            
            <form action="regProcess.php" method="post">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" name="uName" required autofocus>
                <label for="floatingInputUsername">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInputUsernumber" placeholder="contact no." name="uNo" required autofocus>
                <label for="floatingInputUsernumber">Contact No.</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email">
                <label for="floatingEmail">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingAdd" placeholder="Address" name="add">
                <label for="floatingAdd">Address</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
              </div>

            
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-danger btn-login fw-bold text-uppercase" type="submit"> Register 
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
