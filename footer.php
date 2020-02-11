<div id="contact" class="lower-bottom-section">
  <div class="hours-contact-location">
    <div class="hcl-div hours">
      <h3>Our Hours</h3>
      <div class="min-title-line">
      </div>
      <div class="day-line">
        <h6>Monday</h6>
        <div class="hours-spacing">
        </div>
        <h6>8AM-8PM</h6>
      </div>
      <div class="day-line">
        <h6>Tuesday</h6>
        <div class="hours-spacing">
        </div>
        <h6>8AM-8PM</h6>
      </div>
      <div class="day-line">
        <h6>Wednesday</h6>
        <div class="hours-spacing">
        </div>
        <h6>8AM-8PM</h6>
      </div>
      <div class="day-line">
        <h6>Thursday</h6>
        <div class="hours-spacing">
        </div>
        <h6>8AM-8PM</h6>
      </div>
      <div class="day-line">
        <h6>Friday</h6>
        <div class="hours-spacing">
        </div>
        <h6>8AM-8PM</h6>
      </div>
      <div class="day-line">
        <h6>Saturday</h6>
        <div class="hours-spacing">
        </div>
        <h6>8AM-8PM</h6>
      </div>
      <div class="day-line">
        <h6>Sunday</h6>
        <div class="hours-spacing">
        </div>
        <h6>8AM-8PM</h6>
      </div>
    </div>
    <div class="hcl-div contact">
      <h3>Contact</h3>
      <div class="min-title-line">
      </div>
      <div class="cont-lines">
        <p>getinfo@infoplace.com</p>
        <p>555-555-5555</p>
        <h3>Stay Connected</h3>
        <div class="min-title-line">
        </div>
        <p>Subscrice to Our Newsletter!</p>
        <form id="name-form" class="contact-form cf-one" action="https://formspree.io/myemail@myemail.com" method="POST">
          <input class="email" type="email" name="Email" placeholder="Email" size="25" required>
          <div class="status"></div>
          <input class="submit btn btn-outline-dark" type="submit" value="Send Message">
        </form>
      </div>
    </div>
    <div class="hcl-div location" id="location">
      <h3>Location</h3>
      <div class="min-title-line">
      </div>
      <p>5555 Street One Rd.</p>
      <p>Dallas, TX 77000</p>
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=7650%20West%20Stacy%20Road%20McKinney%2C%20TX%2C%2075070%2C%20United%20States&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://www.crocothemes.net"></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-section">
  <div class="social-media">
    <a class="social-link-ind-f" href="https://www.facebook.com/duinocoffee/"><img src="images/facebook.png" alt="Duino-Facebook"></a>
    <a class="social-link-ind-f" href="https://twitter.com/duinocoffee"><img src="images/twitter.png" alt="Duino-Twitter"></a>
    <a class="social-link-ind-f" href="https://www.instagram.com/duinocoffee/"><img src="images/instagram.png" alt="Duino-Instagram"></a>
    <a class="social-link-ind-f" href=""><img src="images/email.png" alt="Duino-Email"></a>
  </div>
  <div class="footer-nav">
    <ul class="nav-ul-list">
            <li class="nav-item">
              <a class="ind-nav-link-foot" href="http://coffeeplace.site">HOME</a>
            </li>
            <li class="nav-item">
              <a class="ind-nav-link-foot" href="menu.php">MENU</a>
            </li>
            <li class="nav-item">
              <a class="ind-nav-link-foot" href="events.php">EVENTS</a>
            </li>
            <li class="nav-item">
              <a class="ind-nav-link-foot" href="reserve.php">RESERVE SPACE</a>
            </li>
            <li class="nav-item">
              <a class="ind-nav-link-foot" href="#contact">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="ind-nav-link-foot" href="#location">LOCATION</a>
            </li>
          </ul>
    </div>
    <div class="copyright">
        <p>© copyright 2019, Coffee Place, LLC</p>
    </div>
    

    <div class="log-declare">
        <?php
        if (isset($_SESSION['userId'])) {
            echo '<p class="login-status">ADMIN LOGGED IN</p>';
        }
        else {
            echo '';
        }
        ?>
    </div>
    
    
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
<script src="script.js"></script>

</body>

</html>
