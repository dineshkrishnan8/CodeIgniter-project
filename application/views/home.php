<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="/style/sty1.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'style/sty1.css'; ?>">
  <style>
    body{
    background-image: url("https://img.freepik.com/free-photo/rpa-concept-with-blurry-hand-touching-screen_23-2149311914.jpg");
    background-repeat: no-repeat;
    background-position: center top;
    background-size: 1600px 750px;
    font-family: 'Dancing Script', cursive!important;
}
  </style>
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
        <!-- <li class="nav-item">
          <a class="nav-link" href="">view</a>
        </li> -->
        
        
          
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
  
</body>
</html>