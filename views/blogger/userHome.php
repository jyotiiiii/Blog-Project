<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="navbar-collapse collapse justify-content-between">
     <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="?controller=article&action=readAll">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=article&action=create">Add Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?controller=blogger&action=logout">Logout</a>
      </li>

      </ul>
</div>
</nav>


<div class="container" class="text-center">
    <div class="card-body d-flex flex-column align-items-start">
         <h3 class="mb-0">
                <a class="text-dark"> This is where you can Add, View, Edit and delete your articles.</a>
              </h3>
        <strong class="d-inline-block mb-2 text-black">Hi Bee<br> You've reached the Bee Hive!<br>You're logged in as <?php echo $_POST["username"]; ?></strong>
              </div>
</div>