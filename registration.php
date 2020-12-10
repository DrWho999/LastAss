<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php

if(isset($_POST['submit'])) {

  $username = $_POST['username'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];


if(!empty($username) && !empty($first_name ) && !empty($last_name) && !empty($email ) && !empty($password )) {

  $username = mysqli_real_escape_string($connection, $username);
  $first_name = mysqli_real_escape_string($connection, $first_name);
  $last_name = mysqli_real_escape_string($connection, $last_name);
  $email = mysqli_real_escape_string($connection, $email);
  $password = mysqli_real_escape_string($connection, $password);

  $query = "SELECT randSalt FROM users";
  $select_randsalt_query = mysqli_query($connection, $query);

if(!'select_randsalt_query') {

  die("FAILED!!" . mysqli_error($connection));
  }

  $row = mysqli_fetch_array($select_randsalt_query);
  $salt = $row['randSalt'];
  $password = crypt($password, $salt);

  $query = "INSERT INTO users (username, user_firstname, user_lastname, user_email, user_password, user_role) ";
  $query .= "VALUES('{$username}', '{$first_name}', '{$last_name}', '{$email}' , '{$password}', 'subscriber' )";
  $register_user_query = mysqli_query($connection, $query);
if(!'register_user_query') {

  die("QUERY FAILED!". mysqli_error($connection) . ' ' . mysqli_error($connection));
  }

  $message = "Successfully logged in.".mysqli_error($connection);

  } else {

    $message = "Fill up all the fields.!";
    }


  } else {

    $message = "";
  }

?>


<?php  include "includes/navigation.php"; ?>


<div class="container">

<section id="login">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <div class="form-wrap">
          <h1>Register</h1>
          <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">

			<h6 class="text-center"><?php echo $message; ?></h6>
            <div class="form-group">
              <label for="username" class="sr-only">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="first_name" class="sr-only">First name: </label>
              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Your first name">
            </div>
            <div class="form-group">
              <label for="last_name" class="sr-only">Last name: </label>
              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Your last name">
            </div>
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="key" class="form-control" placeholder="Password">
            </div>

            <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

        <hr>

<?php include "includes/footer.php";?>
