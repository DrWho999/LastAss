<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<div class="container">

 <div class="row">

  <div class="col-md-8">

<?php

$query = "SELECT * FROM posts";
$select_all_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)) {
$post_id = $row['post_id'];
$post_title = $row['post_title'];
$post_author = $row['post_author'];
$post_date = $row['post_date'];
$post_image = $row['post_image'];
$post_content = substr($row['post_content'],0,80);
$post_status = $row['post_status'];

if($post_status !== 'published') {
echo "<h1 class='text-center'> SORRY,NO POSTS HERE... </h1>";
} else {


?>

<h1 class="page-header">
  <small>POSTS</small>
</h1>
<h2>
  <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a>
</h2>
<p class="lead">
  by <a href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
  <hr>
    <a href="post.php?p_id=<?php echo $post_id; ?>">
      <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
    </a>
 <hr>
<p><?php echo $post_content ?></p>
  <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More:   <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>

					<?php }	}  ?>

  </div>

<?php include "includes/sidebar.php"; ?>

 </div>
<hr>

<?php include "includes/footer.php";?>
