<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by KimCreer</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Don't have an account?</h2>
        <p class="user_unregistered-text">Create now!</p>
        <button class="user_unregistered-signup" id="signup-button">Sign up</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">Already have a account!</h2>
        <p class="user_registered-text">Get started..</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } 
    } else {
?>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form" method="post" name="login">
        <fieldset class="forms_fieldset">
            <div class="forms_field">
               <input type="text" class="login-input" name="username" placeholder="Username" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
             <input type="password" class="login-input" name="password" placeholder="Password"class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="Log In" class="forms_buttons-action">
          </div>
        </form>
      </div>
      <?php
    }
?>

<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
  <div class="user_forms-signup">
        <h2 class="forms_title">Sign Up</h2>
        <form class="forms_form" action="" method="post"name="register">
          <fieldset class="forms_fieldset">
            <div class="forms_field">

              <input type="text" class="login-input" name="username" placeholder="Username" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="text" class="login-input" name="email"  placeholder="Email" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="password" class="login-input" name="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" name="submit" value="Register" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- partial -->
  <script  src="script.js"></script>
<?php
    }
?>


    


</body>
</html>
