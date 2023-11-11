<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> create application... view users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <a href="#"> CRUD Application</a>
            <a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary">Create</a>
        </div>
    </div>
    <?php if(!empty($users)) 
                    { 
                        foreach($users as $user)
                        { 
                            $din=$this->session->userdata('fname');
                            echo "<script>alert('welcome $din')
                            </script>"
                            ?>
  
    <div class="row">
        <div class="col-md-10">
        <?php

    ?>
        </div>
    </div>
    
        <div class="row">
            <div class="col-md-10">
             <div class="row">
             <h3 style="text-align: center;">View users</h3>
             <div class="col-6 text-right">
          
            </div>
        </div>
        <hr>
            </div>
        </div>
       
        <div class="row">
        
            <div class="col-md-6">
                <table class="table table-bordered">
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>MAIL</th>
                    <th>PASSWORD</th>
                    <th>DATA.OF.BIRTH</th>
                    <th width="60">EDIT</th>
                    <th width="100">DELETE</th>

                    
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['fname'] ?></td>
                        <td><?php echo $user['lname'] ?></td>
                        <td><?php echo $user['mail'] ?></td>
                        
                        <td><?php echo $this->encryption->decrypt($user['pass'])?></td>
                        <td><?php echo $user['dob'] ?></td>
                        <td>
                        <a href="<?php echo base_url().'index.php/user/edit/'.$user['id'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                        <a href="<?php echo base_url().'index.php/user/delete/'.$user['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }} else {
                        echo "<script>alert('login again')
                        window.location. href='login'</script>";
                        
                        } ?>
                </table>
                    </div>
                    <?php
                    $this->session->sess_destroy();
                    ?>
            </div>
        </div>
        
    </div>
</body>
</html>