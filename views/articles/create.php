<p>Fill in the following form to create a new article:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Add New Article</h2>
</div>
<p>
        <input class="w3-input" type="text" name="blogger_id">
        <label>Blogger ID</label>
    </p>
<p>
        <input class="w3-input" type="text" name="headline" required >
        <label>Headline</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="tag" required>
        <label>Tag</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="tag">
        <label>Tag</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="tag" >
        <label>Tag</label>
    </p>
        <p>
        <input class="w3-input" type="text" name="text" >
        <label>Article Text</label>
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