
<head>
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({
      selector:'textarea',
      plugins: 'link autoresize',  
      menubar:false
  });</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    
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
        
        <p>
        <label for="tag">Tag</label>  
        <input data-role="tagsinput" style ="width: 42em;" class="form-control" type="text" name="tag" required>
    </p>
        <p>
        <label for="tag">Tag</label>  
        <input data-role="tagsinput" style ="width: 42em;" class="form-control" type="text" name="tag" required>
        
    </p>
     <p>
         <label for="tag">Tag</label>  
        <input data-role="tagsinput" style ="width: 42em;" class="form-control" type="text" name="tag" required>
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

  <!--Need to point to pinterest url or file location-->
  <input type="file" name="myUploader" class="w3-btn w3-pink"/>
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Article">
  </p>
</form>
</div>
</body>