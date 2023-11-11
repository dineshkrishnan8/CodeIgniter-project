<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login & Signup Form</title>
    <link rel="stylesheet" href="<?php echo base_url().'/css/front.css'; ?>". />
  </head>
  <body>
    
     <!-- Header -->

    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form method="post" name="createUser" action=""<?php echo base_url().'index.php/user/create'; ?> autocomplete="off">
          <input type="text" placeholder="Full name"  name="fname" value="<?php echo set_value('fname'); ?>"required />
          <?php echo form_error('fname'); ?>
          <input type="text" placeholder="Last name"  name="lname" value="<?php echo set_value('lname'); ?>" required />
          <?php echo form_error('lname'); ?>
          <input type="email" name="mail" value="<?php echo set_value('mail'); ?>" placeholder="Email" required />
          <?php echo form_error('mail'); ?>
          <input type="password" name="pass" value="<?php echo set_value('pass'); ?>" placeholder="password" pattern="[A-Za-z0-9]{1,16}" required />
          <?php echo form_error('pass'); ?>
          <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" placeholder="date of Birth" required />
          <?php echo form_error('dob'); ?>
          <input type="submit" value="Signup" />
        </form>
      </div>

      <div class="form login" >
        <header>Login</header>
        <form  method="post" name="login" action="login_process" autocomplete="off" >
          <input type="text" placeholder="Name"  name="fname" required />
          <input type="password" placeholder="Password" name="pass" required />
          <!-- <a href="#">Forgot password?</a> -->
          <input type="submit"  name="login_submit" value="Submit" />
        </form>
      </div>

      <script>
          
          (function () {
	window.onpageshow = function(event) {
		if (event.persisted) {
			window.location.reload();
		}
	};
})();

        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </body>
</html>