<?php
 
if(isset($_POST['create_user'])) {
	
  $user_firstname = $_POST['user_firstname'];  
  $user_lastname = $_POST['user_lastname'];  
  $user_role = $_POST['user_role'];
  $username = $_POST['username'];
  $user_email = $_POST['user_email']; 
  $user_password = $_POST['user_password'];

  $query = "INSERT INTO users(user_firstname, user_lastname, 
  user_role,username,user_email,user_password) "; 

  $query .=
  "VALUES('{$user_firstname}','{$user_lastname}',
  '{$user_role}','{$username}','{$user_email}', '{$user_password}' ) ";

  $create_user_query = mysqli_query($connection, $query);

confirmQuery($create_user_query);

}

?>


<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Firstname</label>
	<input type="text" class="form-control" name="user_firstname">
  </div>		
  <div class="form-group">
    <label for="post_status">Lastname</label>
	<input type="text" class="form-control" name="user_lastname">
  </div>
  <div class="form-group">
    <label for="post_category">"Rola"</label>
	<select name="user_role" id="">
	  <option value="subscriber">Select options</option>
	  <option value="admin">Admin</option>
	  <option value="subscriber">Subscriber</option>
	</select>
  </div>		
  <div class="form-group">
    <label for="title">Username</label>
    <input type="text" class="form-control" name="username">
  </div>					
  <div class="form-group">
    <label for="post_content">Email</label>
	<input type="email" class="form-control" name="user_email">
  </div>
  <div class="form-group">
    <label for="post_tags">Password</label>
	<input type="password" class="form-control" name="user_password">
  </div>		
  <div class="form-group">
    <input class="btn btn_primary" type="submit" name="create_user" value="Add User">
  </div>	
</form>	