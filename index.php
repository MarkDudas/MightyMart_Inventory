<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap');

  *{
    font-family: Poppins, Arial;;
    box-sizing: border-box;
  }
  label{
    font-size: 15px;
  }
  .row{
    margin-right: 20rem;
  }
  body{
    width: 100vw;
    height: 100vh;
    
  }
  .button {
      padding: 1rem 2rem;
      font-size: 1rem;
      background-color: #e74c3c;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin: 0 1rem;
      text-decoration: none;
      font-weight: bolder;
   
      /* Added to remove the underline */
    }

    .button:hover {
      background-color: #c0392b;
    }
  
</style>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1 class="text-center text-dark mt-3">Login Form</h1>
      <h2 class="text-center text-dark mt-3">Inventory Management System with POS</h2>

      <div class="card my-5">
        <form class="card-body cardbody-color p-lg-5" method="post" action="auth.php" class="clearfix">
          <div class="text-center">
            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
              width="200px" alt="profile">
          </div>
          <?php echo display_msg($msg); ?>
          <div class="mb-3">
            <label for="username" class="control-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="control-label">Password</label> 
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
          <div class="text-center"><button type="submit" class="button">Login</button></div>
        </form>
      </div>
    </div>
  </div>
</div>

    


<?php include_once('layouts/footer.php'); ?>
