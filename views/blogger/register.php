
<body>
    <div class="wrapper">
        <h2 class="display-4">Register</h2>
        <p>Please fill this form to create an account.</p>
        <form class="registration" method="post" action="index.php?controller=blogger&action=register">
          
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" />
                </div>  
            
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" />
                </div>
                
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
            
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
              
                <div class="form-group">
                <input id="login" type="submit" value="Submit" />
            </div>
        </form>   
                
            
            
            <p>Already have an account? <a href="index.php?controller=blogger&action=login">Login here</a>.</p>

    </div>    
</body>
</html>


             
               