
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
  <input type="file" name="myUploader" class="w3-btn w3-pink"/>
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Add Article">
  </p>
</form>
</div>
</body>
