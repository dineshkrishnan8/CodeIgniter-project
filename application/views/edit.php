<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Updates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar navbar-dark bg-danger">
        <div class="container">
            <a href="#"> CRUD Application</a>
        </div>
    </div>
    <div class="container" >
        <h3>Update  User</h3>
        <hr>
        <div class="d-flex justify-content-center">
        <form method="post" name="createUser" action=""<?php echo base_url().'index.php/user/edit/'.$user['id']; ?> autocomplete="off">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">First Name</label>
                   <input type="text" name="fname" value="<?php echo set_value('fname',$user['fname']); ?>" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label for="name">last Name</label>
                    <input type="text" name="lname" value="<?php echo set_value('lname',$user['lname']); ?>" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="mail" value="<?php echo set_value('mail',$user['mail']); ?>" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="text" name="pass" value="<?php echo set_value('pass',$user['pass']); ?>" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label for="name">Date of birth</label>
                    <input type="date" name="dob" value="<?php echo set_value('dob',$user['dob']); ?>" class="form-control">
                   
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">update</button>
                    <a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</body>
</html>