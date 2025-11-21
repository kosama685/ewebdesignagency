<?php include('inc/header.php');?>
<style type="text/css">
  .thankyou img{
display: block;
    margin: 0 auto;
  }
    .thankyou p{
max-width: 100% !important;
    }
     .thankyou h2{
text-align: center;
     }
      .thankyou {
        margin-bottom: 30px;
        margin-top: 300px;
      }
</style>

 
    <main id="main-content" class="kg-content" aria-label="Main Content">


  <div class="kg-contact-page__content">
      <div class="row">
  <div class="col-md-12 thankyou">
  <img align="center" src="assets/images/thankyou.png">  
   <h2 class="kg-contact__title">We’ve Noted That Down</h2>
    <p class="kg-contact__description">Thankyou for the information that you just submitted to us! We've noted it down and will get BACK TO YOU SOON..</p>
 <a href="#_"  onclick="window.history.back();" class="kg-contact__form__submit">Go Back</a>

  </div>
</div>

  
<!--    <div class="kg-contact-page__info">
      <section aria-label="Contact Us" class="kg-contact">
  <div class="kg-contact__content">
    <div class="kg-contact__info">
      <div class="kg-contact__info-container">
        <h2 class="kg-contact__title">
          <span>Let's work together</span> How Can We Help?
          <div class="kg-contact__title__line wow fadeInLeft" data-wow-delay="0.1s"></div>
        </h2>
        <p class="kg-contact__description">Connect with our creative team regarding an upcoming project or transformation needs.</p>
        <p><strong>Head Office: </strong>1024 Iron Point Rd, Folsom, CA 95630, USA</p>
        <p><strong>Regional Office # 1:</strong>99 Hudson St, Manhattan, NY, 10013, USA</p>
      </div>
      <div class="kg-contact__form__container">
  <form action="https://websiteintels.com/webpages/bottomFormController.php" method="POST" class="kg-contact__form" name="contactForm" id="contactForm">
    <input type="hidden" name="action" value="contact_form">
    <span class="kg-contact__form__title"><strong>Contact Us</strong></span>
    <span class="kg-contact__form__error error-message">This is an error message</span>
    <div class="kg-contact__two-column">
      <div class="kg-contact__form__input">
        <input id="txtName" type="text" name="Name" autocomplete="name" required />
        <input type="hidden" name="form-name" value="Contact Form Query"/>
        <label id="labelName" for="txtName">Name</label>
        <span class="bar"></span>
      </div>
      <div class="kg-contact__form__input">
        <input id="txtCompany" type="text" name="Company" autocomplete="organization" required />
        <label id="labelCompany" for="txtCompany">Company</label>
        <span class="bar"></span>
      </div>
    </div>
    <div class="kg-contact__two-column">
      <div class="kg-contact__form__input">
        <input id="txtEmail" type="email" name="Email" autocomplete="email" required />
        <label id="labelEmail" for="txtEmail">Email Address</label>
        <span class="bar"></span>
      </div>
      <div class="kg-contact__form__input">
        <input id="txtPhone" type="text" name="Number" autocomplete="tel" required />
        <label id="labelPhone" for="txtPhone">Phone</label>
        <span class="bar"></span>
      </div>
    </div>
    <div class="kg-contact__form__input">
      <textarea id="txtMessage" name="Message" rows="3" required></textarea>
      <label id="labelMessage" for="txtMessage">Message</label>
      <span class="bar"></span>
    </div>

    <button type="submit" class="kg-contact__form__submit">Send</button>
    
        <input type="hidden" name="hiddencapcha" value="">
        <input type="hidden" name="cip" >

              <input type="hidden" id="location" name="locationURL" value="contact" />
              <script type="text/javascript">document.getElementById('location').value = window.location.href;</script>

  </form>
  <div class="kg-contact__form__success success-message">
    <p>Your message has been sent</p>
  </div>
</div>
    </div>
  </div>
</section>
    </div>  -->
  </div>
</div>


  </main>

<?php include('inc/small_footer.php');?>