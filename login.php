<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/login.css">
    <title></title>
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <form action="proses_login.php" method="post">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div>
      <a href="#"><i class="icon-cog">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="login">
      
      <div class="user-box">
        <a href="tambah_user.php">tambah akun</a>
      </div>
      
    </a>
  </form>
</div>
</body>
</html>