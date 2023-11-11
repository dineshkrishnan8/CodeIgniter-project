<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login & Signup Form</title>
    <link rel="stylesheet" href="<?php echo base_url().'/css/front.css'; ?>" />
  </head>
  <body>
    
     <!-- Header -->

    <section class="wrapper">
   <div class="form signup">
     
        <header>Login</header>
        <form  method="post"  action="login_process" autocomplete="off" >
          <input type="text" placeholder="Name"  name="fname" value="" required />
          <input type="password" placeholder="Password" name="pass" value=""required />
          <!-- <a href="#">Forgot password?</a> -->
          <input type="submit"  name="submit" value="Submit"  />
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
          signupHeader = document.querySelector(".login header"),
          loginHeader = document.querySelector(".signup header");

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