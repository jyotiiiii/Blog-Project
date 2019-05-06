
    <div class="wrapper">-->
        <h2 class="display-4">Login</h2>
        <p>Please fill in your credentials to login.</p>
        
        <form class="user" method="post" name="user" action="index.php?controller=blogger&action=login">
            
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
            <input id="login" type="submit" value="login" />
            </form>
         
        </div>
            <p>Don't have an account? <a href="index.php?controller=blogger&action=register">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>

