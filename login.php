<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/css/sty2.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/css/sty2.css'; ?>">
 
</head>
<body>



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
<div class="wrapper">
        <div class="text-center mt-4 name din">
            Login
        </div>
        <form method="post" name="login" action="login_process" autocomplete="off" style="color:white;">
            <div class="form-field d-flex align-items-center">
                <div>
            <lable>Username:</lable>
</div>
                <!-- <span class="far fa-user"></span> -->
               
                <input type="text" class="form-control " style="color:white;" name="fname"  >
               
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <lable>Password:</lable>
                <input type="password" class="form-control" style="color:white;" name="pass" >
               
            </div>
            <button type="submit" class="btn btn-primary" name="login_submit" value="Submit">Login</button>
         
        </form>
    </div>