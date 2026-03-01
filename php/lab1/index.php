
<?php 
session_start();

if(isset($_SESSION['login'])){

header("location: dashboard.php");
exit;

} else {?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>

<form action="login.php" method="post" class="container mt-5" style="max-width: 400px;">
  <div class="card shadow-sm">
    <div class="card-body">
      
      <h4 class="card-title text-center mb-4">Login</h4>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input 
          type="text" 
          class="form-control" 
          id="username" 
          name="username" 
          placeholder="Enter your username">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input 
          type="password" 
          class="form-control" 
          id="password" 
          name="password" 
          placeholder="Enter your password">
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">
          Login
        </button>
      </div>

    </div>
  </div>
</form>
    

<script src="./css/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php } ?>