<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-8">


<?php

if(isset($_GET['p_id'])){

  $the_post_id = $_GET['p_id'];
  $the_post_author = $_GET['author'];
  }

  $query = "SELECT * FROM posts WHERE post_author = '{$the_post_author}' ";
  $select_all_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)) {
  $post_title = $row['post_title'];
  $post_author = $row['post_author'];
  $post_date = $row['post_date'];
  $post_image = $row['post_image'];
  $post_content = $row['post_content'];

?>


      <h1 class="page-header">
        <small>Post</small>
      </h1>
      <h2>
        <a href="#"><?php echo $post_title ?></a>
      </h2>
      <p class="lead">
        All posts by <?php echo $post_author ?>
      </p>
      <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
      <hr>
      <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
      <hr>
      <p><?php echo $post_content ?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
	<hr>


				<?php	}  ?>


<?php

if(isset($_POST['create_comment'])) {

  $the_post_id = $_GET['p_id'];
  $comment_author = $_POST['comment_author'];
  $comment_email = $_POST['comment_email'];
  $comment_content = $_POST['comment_content'];

if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content) ) {

  $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
  $query .= "VALUES ($the_post_id , '{$comment_author}', '{$comment_email}', '{$comment_content }', 'unapproved', now())";

  $create_comment_query = mysqli_query($connection,$query);

if(!$create_comment_query ){

  die( 'Query Failed' . mysqli_error($connection));
  }

  $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
  $query .= "WHERE post_id = $the_post_id ";
  $update_comment_count = mysqli_query($connection,$query);
    } else {
	  echo "<script>alert('Empty fields!!!')</script>";
	}
  }

?>


				<?php 	?>


    </div>


<?php include "includes/sidebar.php"; ?>


  </div>
<hr>


<?php include "includes/footer.php";?>
