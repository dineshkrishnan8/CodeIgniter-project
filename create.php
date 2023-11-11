<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> create application... users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style=" background: url('https://as2.ftcdn.net/v2/jpg/05/85/59/15/1000_F_585591514_SgvwYrskDe9KBnN5K0BAzU8to8QJFu8h.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  color:white;">

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url().'index.php/user/login'; ?>">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url().'index.php/user/create'; ?>">Signup</a>
        </li>
        
        
          
    </div>
  </div>
  <div class="collapse navbar-collapse justify-content-end" 
             id="navbarSupportedContent"> 
          <ul class="navbar-nav"> 
           
            <li class="nav-item"> 
                <a class="navbar-brand" href="home.php"><img 
                    src= 
"https://www.hostzop.com/images/logo.png" 
                    alt="" width="130" 
                    height="40"> 
                </a> 
                </li> 
          </ul> 
        </div> 
</nav>
  
  <diV class="d-flex justify-content-center">
        

        <form method="post" name="createUser" action=""<?php echo base_url().'index.php/user/create'; ?> autocomplete="off">
        <div class="row">
            <div class="col-md-12">
                <div>
                <h3 >Create User</h3>
                </div>
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" name="fname" value="<?php echo set_value('fname'); ?>" class="form-control">
                    <?php echo form_error('fname'); ?>
                </div>
                <div class="form-group">
                    <label for="name">last Name</label>
                    <input type="text" name="lname" value="<?php echo set_value('lname'); ?>" class="form-control">
                    <?php echo form_error('lname'); ?>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="mail" value="<?php echo set_value('mail'); ?>" class="form-control">
                    <?php echo form_error('mail'); ?>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="pass" value="<?php echo set_value('pass'); ?>" class="form-control">
                    <?php echo form_error('pass'); ?>
                </div>
                <div class="form-group">
                    <label for="name">date of Birth</label>
                    <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control">
                    <?php echo form_error('dob'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </div>
        </form>
        </diV>
    </div>
</body>
</html>