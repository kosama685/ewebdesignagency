<?php include('inc/header.php');?>
    <main id="main-content" class="kg-content" aria-label="Main Content">

<div class="kg-contact-page">
  <div class="kg-contact-page__content">
    <h1 class="sr-only">Contact Us</h1>
    <div class="kg-contact-page__info">
      <section aria-label="Contact Us" class="kg-contact">
  <div class="kg-contact__content">
    <div class="kg-contact__info">
      <div class="kg-contact__info-container">
        <h2 class="kg-contact__title">
          <span>Let's work together</span> How Can We Help?
          <div class="kg-contact__title__line wow fadeInLeft" data-wow-delay="0.1s"></div>
        </h2>
        <p class="kg-contact__description">Connect to our creative team regarding an upcoming venture or transformation wishes.</p>
        <p><strong>Head Office: </strong>99 Hudson Street, 5th Floor New York, NY 10013</p>
     
      </div>
      <div class="kg-contact__form__container">
  <form method="get" id="contact-us">
    <input type="hidden" name="action" value="contact_form">
    <span class="kg-contact__form__title"><strong>Contact Us</strong></span>
    <span class="kg-contact__form__error error-message">This is an error message</span>
    <!--<div class="kg-contact__two-column">-->
      <div class="kg-contact__form__input">
        <input id="txtName" type="text" name="name" autocomplete="name" required />
        <input type="hidden" name="form-name" value="Contact Form Query"/>
        <label id="labelName" for="txtName">Name</label>
        <span class="bar"></span>
      </div>
      <!--<div class="kg-contact__form__input">-->
      <!--  <input id="txtCompany" type="text" name="Company" autocomplete="organization" required />-->
      <!--  <label id="labelCompany" for="txtCompany">Company</label>-->
      <!--  <span class="bar"></span>-->
      <!--</div>-->
    <!--</div>-->
    <div class="kg-contact__two-column">
      <div class="kg-contact__form__input">
        <input id="txtEmail" type="email" name="email" autocomplete="email" required />
        <label id="labelEmail" for="txtEmail">Email Address</label>
        <span class="bar"></span>
      </div>
      <div class="kg-contact__form__input">
        <input id="txtPhone" type="text" name="number" autocomplete="tel" required />
        <label id="labelPhone" for="txtPhone">Phone</label>
        <span class="bar"></span>
      </div>
    </div>
    <div class="kg-contact__form__input">
      <textarea id="txtMessage" name="message" rows="3" required></textarea>
      <label id="labelMessage" for="txtMessage">Message</label>
      <span class="bar"></span>
    </div>

    <button type="submit" class="kg-contact__form__submit">Send</button>
    
        <input type="hidden" name="hiddencapcha" value="">
        <input class="" type="hidden" name="cip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" id="location" name="locationURL" value="<?php echo $_SERVER['SCRIPT_URI'];?>">
        <input name="action" value="contact-form" type="hidden">

              <script type="text/javascript">document.getElementById('location').value = window.location.href;</script>

  </form>
  <div class="kg-contact__form__success success-message">
    <p>Your message has been sent</p>
  </div>
</div>
    </div>
  </div>
</section>
    </div>
  </div>
</div>


  </main>

<?php include('inc/small_footer.php');?>
