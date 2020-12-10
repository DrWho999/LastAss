<div class="col-md-4">
  <div class="well">

<?php

if(isset($_SESSION['user_role'])): ?>

  <h4>Logged in:  <?php echo $_SESSION['username'] ?></h4>
  <a href="includes/logout.php" class="btn btn-primary"></a>


<?php else: ?>


  <h4>Login</h4>
    <form action="includes/login.php" method="post">
	  <div class="form-group">
	    <input name="username" type="text" class="form-control" placeholder="Enter username">
	  </div>
	  <div class="input-group">
	    <input name="password" type="password" class="form-control" placeholder="Enter password">
		  <span class="input-group-btn">
		    <button class="btn btn-primary" name="login" type="submit">Submit
			</button>
		  </span>
      </div>
    </form>


<?php endif; ?>


  </div>
  <div class="well">


<?php

  $query = "SELECT * FROM categories";
  $select_categories_sidebar = mysqli_query($connection,$query);

?>


    <h4>Blog Categories</h4>
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled">


<?php
while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
  $cat_title = $row['cat_title'];
  $cat_id = $row['cat_id'];

  echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
  }

?>

          </ul>
        </div>
      </div>
    </div>


<?php include "widget.php"; ?>


  </div>
</div>
