<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

<?php

  $query = "SELECT * FROM categories";
  $select_all_categories_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_categories_query)) {
  $cat_title = $row['cat_title'];
  $cat_id = $row['cat_id'];

  echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
  }
?>

		<li>
          <a href="admin/index.php">Admin</a>
        </li>
        <li>
          <a href="registration.php">Registration</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
