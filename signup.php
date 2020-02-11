<?php include 'header.php'; ?>

    <div id="home" class="header-section-pages parallax--bg">
      <div class="header-section-info-pages">
        <h1>Sign-Up</h1>
      </div>
    </div>
  </div>
  <div id="signup-page" class="middle-section-pages">
    <div class="page-section-wrapper">
      <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username...">
          <input type="text" name="mail" placeholder="E-mail...">
          <input type="password" name="pwd" placeholder="Password...">
          <input type="password" name="pwd-repeat" placeholder="Repeat Password...">
          <button type="submit" name="signup-submit">SignUp</button>
      </form>
    </div>
  </div>
  
  <?php include 'footer.php'; ?>