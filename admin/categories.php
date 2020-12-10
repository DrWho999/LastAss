<?php include "includes/admin_header.php" ?>


<div id="wrapper">


<?php include "includes/admin_navigation.php" ?>


  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
		  <h1 class="page-header">
            Dobrodošli Đorđe!
		  </h1>
            <div class="col-xs-6">


<?php insert_categories(); ?>


              <form action="" method="post">
			    <div class="form-group">
				  <label for="cat_title">Add Category</label>
				  <input type="text" class="form-control" name="cat_title">
				</div>
				<div class="form-group">
				  <input class="btn btn_primary" type="submit" name="submit" value="Add Category">
				</div>
              </form>


<?php

if(isset($_GET['edit'])) {

  $cat_id = $_GET['edit'];

  include "includes/admin_update_categories.php";
  }

?>
            </div>
			<div class="col-xs-6">
			  <table class="table table-bordered">
                <thead>
				  <tr>
				    <th>Id</th>
					<th>Category title</th>
				  </tr>
                </thead>
				  <tbody>


<?php findAllCategories(); ?>

<?php deleteCategories(); ?>


                  </tbody>
		        </table>
			  </div>
            </div>
          </div>
        </div>
	  </div>


   <?php include "includes/admin_footer.php" ?>
