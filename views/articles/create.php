
<body>
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
<div class="wrapper">

<p>Fill in the following form to create a new article:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add New Article</h2>
<p>
    
        <label for="blogger_id">Blogger ID</label>
        <input style ="width: 42em;" class="form-control" 
        <input class="form-control" type="text" name="blogger_id">
    </p>
<p>
            <label for="headline">Headline</label>
        <input style ="width: 42em;" class="form-control" type="text" name="headline" required >
    </p>
        
<!--        <p>
        <label for="tag">Tag</label>  
        <input data-role="tagsinput" style ="width: 42em;" class="form-control" type="text" name="tag" required>
    </p>-->
        <label for="description">Description</label>  

            <textarea style ="width: 42em;" class="form-control" type="text" name="description" ></textarea>
    </p>     
        <p>
        <label for="text">Article Body</label> 
            <textarea style ="width: 42em;" class="form-control" type="text" name="text" ></textarea>
    </p>     
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />
  <input type="file" name="myUploader" class="w3-btn w3-pink"/>
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Article">
  </p>
</form>
</div>
</body>
