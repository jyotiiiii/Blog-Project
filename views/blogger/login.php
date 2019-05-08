
    <div class="wrapper">
        <h2 class="display-4">Entrance to the Hive</h2>
        <p>Please fill in your credentials to enter.</p>
        
        <form class="user" method="post" name="user" action="index.php?controller=blogger&action=login">
            
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="email" class="form-control" id="username" name="username" required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required/>
                </div>
            <input id="login" type="submit" value="login" />
            </form>
         
        </div>
            <p>Not a Bee? <a href="index.php?controller=blogger&action=register">Become one here</a>.</p>
        </form>
    </div>    
</body>
</html>

