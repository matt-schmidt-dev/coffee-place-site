<?php include 'header.php'; ?>
    <div id="home" class="header-section-pages parallax--bg">
      <div class="header-section-info-pages">
        <h1>RESERVE SPACE</h1>
      </div>
    </div>
  </div>
  <div id="about" class="middle-section-pages">
    <div class="page-section-wrapper">
      <div class="reserve-contact">
        <h3>Reserve a Space for an Event</h3>
        <div class="title-line">
        </div>
        <p>Fill out the form below, and we'll contact you about reserving a space for you to host an event (business meeting, bible study, etc.) at Duino.</p>
        <div class="reserve-cf-wrapper">
        
        <form id="reserve-form" class="contact-form cf-one" action="https://formspree.io/coffeeshop@email.com" method="POST">
        <input class="name-rf" type="text" name="Name" placeholder="Name" size="50" required>
        <input class="email-rf" type="email" name="Email" placeholder="Email" size="50" required>
        <div class="date-cf-div">
        Preferred Date: <input class="date" type="date" name="Date">
        </div>
        <div class="date-cf-checkboxes-div">
        <input class="single-rf" type="checkbox" name="Single"> One-Time
        <input class="weekly-rf" type="checkbox" name="Weekly"> Weekly
        <input class="monthly-rf" type="checkbox" name="Monthly"> Monthly
        </div>
        <textarea class="message-rf" type="text" name="Message" placeholder="Message" cols="51" rows="10" required></textarea>
        <div class="status"></div>
        <input class="submit btn btn-outline-dark" type="submit" value="SUBMIT FORM">
      </form>
      
      <!--
      <form id="reserve-form-mobile" class="contact-form cf-two" action="https://formspree.io/coffeeshop@email.com" method="POST">
        <input class="name-mobile" type="text" name="Name" placeholder="Name" size="35" required>
        <input class="email-mobile" type="email" name="Email" placeholder="Email" size="35" required>
        <div class="date-cf-div-mobile">
        Preferred Date: <input class="date" type="date" name="Date">
        </div>
        <div class="date-cf-checkboxes-div-mobile">
        <input class="single" type="checkbox" name="Single"> One-Time Event
        <input class="weekly" type="checkbox" name="Weekly"> Weekly Event
        <input class="monthly" type="checkbox" name="Monthly"> Monthly Event
        </div>
        <textarea class="message-mobile" type="text" name="Message" placeholder="Message" cols="36" rows="10" required></textarea>
        <div class="status-mobile"></div>
        <input class="submit-mobile btn btn-outline-dark" type="submit" value="SUBMIT FORM">
      </form>
      -->
      
      </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
