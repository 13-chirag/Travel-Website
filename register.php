<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Login & Signup Form</title>-->
    <link rel="stylesheet" href="./css/register.css" />
  </head>

  <body style="background: url(./images/carousal01.jpg) no-repeat">
    <section class="wrapper">
      <div class="form login">
        <header>Login To Book</header>
        <form action="#">
          <input type="text" placeholder="Email address" required />
          <input type="password" placeholder="Password" required />
          <a href="#">Forgot password?</a>
          <a href="home.php" class="btn">Login</a>
        </form>
      </div>

      <div class="form signup">
        <header>Signup To Get Going</header>
        <form action="#">
          <input type="text" placeholder="Full name" required />
          <input type="text" placeholder="Email address" required />
          <input type="password" placeholder="Password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" value="Signup" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          loginHeader = document.querySelector(".login header");
          signupHeader = document.querySelector(".signup header"),
          

        
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
      </script>
    </section>
  </body>
</html>

 