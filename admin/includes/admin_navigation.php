<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">CMS Admin</a>
  </div>
    <ul class="nav navbar-right top-nav">
      <li><a href="../index.php">HOME</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Đorđe <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li>
          <li class="divider"></li>
          <li>
            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
          </li>
        </ul>
      </li>
    </ul>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li>
        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
      </li>
	   <li>
         <a href="#" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Objave <i class="fa fa-fw fa-caret-down"></i></a>
         <ul id="posts_dropdown" class="collapse">
         <li>
           <a href="posts.php">Pregledajte objave</a>
           </li>
             <li>
               <a href="posts.php?source=add_post">Dodajte objavu </a>
             </li>
         </ul>
       </li>
       <li>
         <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> Kategorije</a>
       </li>
       <li class="">
         <a href="comments.php"><i class="fa fa-fw fa-file"></i> Komentari</a>
       </li>
         <li>
           <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Korisnici <i class="fa fa-fw fa-caret-down"></i></a>
             <ul id="users_dropdown" class="collapse">
             <li>
              <a href="users.php">Pogledajte korisnike</a>
            </li>
          <li>
            <a href="users.php?source=add_user">Dodajte korisnika</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
