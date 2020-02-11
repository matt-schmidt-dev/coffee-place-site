<?php include 'header.php'; ?>
    
    <div id="home" class="header-section-pages parallax--bg">
        <div class="header-section-info-pages">
            <h1>Admin Login</h1>
        </div>
        </div>
    </div>
    
        <div class="login-signup-sect">
            <form class="login-form" action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            
            <!--- MAY NOT NEED SIGN UP PAGE OR FORM
            
            <a href="signup.php">Sign-Up</a>
            
            --->
            
            <form class="logout-form" actions="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
            
        </div>
        
<?php include 'footer.php'; ?>