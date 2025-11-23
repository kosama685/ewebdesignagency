<?php include('inc/header.php');?>
<style>
.kg-transparent-header .kg-header--top:not(.kg-header--fill) .kg-header__wrapper, .kg-transparent-header-dark .kg-header--top:not(.kg-header--fill) .kg-header__wrapper {
background: #343a40;
}

</style>   

    <main id="" class="kg-content" aria-label="Main Content">



<section class="tphead" style="margin-top: 20px;">

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <div class="logo">

            <a href="index.html">

              <img class="img-fluid" src="assets/images/black-logo.png" alt="*" style="width: 75%;" />

            </a>

          </div>

      </div>

      <div class="col-lg-9">

        <div class="text-right">

          <a href="javascript:;" onclick="goBack()"><span class="icon-x-square"></span></a>

        </div>

      </div>

    </div>

  </div>

</section>





<div class="slider-wrapper black">

  <section class="">

    <div class="item">

      <div class="home-banner " style="background:#fff;height: 144vh;">

        <div class="container ">

          <div class="row">

            <div class=" col-lg-12 col-xl-12 text-center">

              <div class="home-banner-content">

                

                

                <div class="col-lg-8 offset-lg-2   inner-content mtpx-100 text-left">

                    <div class="form-box-main clearfix">

                      <h2>Let’s talk about your next Big thing!</h2>

                      <p>Heads up! We require that you sign up for webbuilder hub services and packages. We make all your dreams come true in a successful project.</p>

                      <form id="main-form" enctype="multipart/form-data">

                        <div class="row">

                          <div class="col-md-12">

                            <label class="field-txt">Name <span>*</span></label>

                              <input id="username" name="Name" minlength="2" type="text" placeholder="" required />

                         </div>

                          <div class="col-md-6">

                            <label class="field-txt">Email <span>*</span></label>

                            <input id="cemail" type="email" name="Email" placeholder="" required>

                         </div>

                         <div class="col-md-6">

                            <label class="field-txt">Phone Number<span>*</span></label>

                           <input id="phone-country" name="Number" type="number" placeholder="" required/>

                         </div>

                    

                         <div class="col-md-12">

                             <div class="forarrowselect">

                                <label class="field-txt">Select Package <span>*</span></label>

                    

                                                                

                                <select name="Package" id="packages" class="valid safari_only" aria-invalid="false" >

                                    <option value="" pack="0">Select Package</option>

                                    

                                    <optgroup label="Animated Logo Packages">

                                    

                                    <option value="2D Standard Logo Animation - $155.99" pack="1">2D Standard Logo Animation - $155.99</option>

                                    

                                    <option value="2D Advance Logo Package - $199.99" pack="2">2D Advance Logo Package - $199.99</option>

                                    

                                    <option value="3D Standard Logo - $245.99" pack="3">3D Standard Logo - $245.99 </option>

                                    <option value="3D Advance Logo - $299.99" pack="4">3D Advance Logo - $299.99 </option>

                                    

                                    </optgroup>

                                    

                                    <optgroup label="Website Design Packages">

                                    <option value="Economy Website Package - $249.99" pack="5">Economy Website Package - $249.99</option>

                                    <option value="Beginner Website Package - 599.99" pack="6">Beginner Website Package - 599.99</option>

                                    <option value="Professional Website Package - $999.99" pack="7"> Professional Website Package - 999.99</option>

                                    <option value="Business Website Package - 1599.99" pack="8">Business Website Package - 1599.99</option>

                                    <option value="Corporate Website Package - $2299.99" pack="9">Corporate Website Package - $2299.99</option>

                                    <option value="Enterprise Website Package - $3399.99" pack="10">Enterprise Website Package - $3399.99</option>

                                    



                                    </optgroup>



                                    <optgroup label="Branding Packages">

                                    <option value="Startup Collateral - $99.99" pack="11">Startup Collateral - $99.99</option>

                                    <option value="Collateral Classic - $200.99" pack="12">Collateral Classic - $200.99</option>

                                    <option value="Premium Collateral - $400.99" pack="13">Premium Collateral - $400.99</option>

                                     <option value="Unlimited Collateral Package - $499.99" pack="14">Unlimited Collateral Package - $499.99</option>



                                    </optgroup>



                                    <optgroup label="Logo Design Packages">

                                    <option value="Smart Logo - $39.99" pack="15">Smart Logo - $39.99</option>

                                    <option value="Basic Logo - $69.99" pack="16">Basic Logo - $69.99</option>

                                    <option value="Beginners Logo - $99.99" pack="17">Beginners Logo - $99.99</option>

                                    <option value="Advanced Logo Package - $149.99" pack="18">Advanced Logo Package - $149.99</option>

                                     <option value="Identity Logo - $199.99" pack="19">Identity Logo - $199.99</option>

                                     <option value="Corporate Logo - $299.99" pack="20">Corporate Logo - $299.99</option>

                                      <option value="Logo & Website Package - $599.99" pack="21">Logo & Website Package - $599.99</option>

                                    

                                    </optgroup>



                                    <optgroup label="E-Commerce Packages">

                                    <option value="Economy E-Commerce package - $899.99" pack="22">Economy E-Commerce package - $899.99</option>

                                    <option value="Professional E-Commerce package- $1,699.99" pack="23">Professional E-Commerce package- $1,699.99</option>

                                    <option value="Elite E-Commerce package- $3,699.99" pack="24">Elite E-Commerce package- $3,699.99</option>

                                    <option value="Corporate E-Commerce package- $7,999.99" pack="25">Corporate E-Commerce package- $7,999.99</option>                                   

                                    </optgroup>



                                    <optgroup label="SEO Packages">

                                    <option value="Startup Plan Package - $499.99" pack="26">Startup Plan Package - $499.99</option>

                                    <option value="Scaling Plan Package - $700.99" pack="27">Scaling Plan Package - $700.99</option>

                                    <option value="Venture Plan Package - $1200.99" pack="28">Venture Plan Package - $1200.99</option>

                                    

                                    </optgroup>



                                    <optgroup label="Video Animation Packages">

                                    <option value="TeaserIntro Video Package - $249.99" pack="29">TeaserIntro Video Package - $249.99</option>

                                    <option value="Startup Video - $449.99" pack="30">Startup Video - $449.99</option>

                                    <option value="Classic Video - $899.99" pack="31">Classic Video - $899.99</option>

                                     <option value="Premium Video - $1,399.99" pack="32">Premium Video - $1,399.99</option>

                                     <option value="Standard 3D Video - $1,999.99" pack="33">Standard 3D Video - $1,999.99</option>

                                     <option value="Premium 3D Video - $2,999.99" pack="34">Premium 3D Video - $2,999.99</option>

                                    

                                    </optgroup>



                                    <optgroup label="Web Content Writing Packages">

                                    <option value="Web Content Package - $70.99" pack="35">Web Content Package - $70.99</option>

                                    <option value="Article Writing Package - $149.99" pack="36">Article Writing Package - $149.99</option>

                                    <option value="Blog Writing Package - $180.99" pack="37">Blog Writing Package - $180.99</option>

                                    <option value="Web Content Professional Package - $799.99" pack="38">Web Content Professional Package - $799.99</option>
                                    

                                    <optgroup label="Landing Page Packages">

                                    <option value="Revamp Logo Package - $19.00" pack="39">Revamp Logo Package - $19.00</option>

                                    <option value="Basic Logo Package - $45.00" pack="40">Basic Logo Package - $45.00</option>

                                    <option value="Start Up Logo Package - $85.00" pack="41">Start Up Logo Package - $85.00</option>

                                    <option value="Professional Logo Package - $125.00" pack="42">Professional Logo Package - $125.00</option>
                                    
                                    <option value="Elite Logo Package - $175.00" pack="43">Elite Logo Package - $175.00</option>
                                    
                                    <option value="Business Logo Package - $245.00" pack="44">Business Logo Package - $245.00</option>
                                    
                                    <option value="Illustrative Logo Package - $395.00" pack="45">Professional Logo Package - $395.00</option>
                                    
                                    <option value="Gold Logo Package - $525.00" pack="46">Gold Logo Package - $525.00</option>

                                    

                                </select>

                             </div>

                         </div>

                         

                         

                    

                         

                    

                          

                         <div class="col-md-12">

                            <label class="field-txt">Please Attach Relevant Documents MS Word, JPG &amp; PNG Preferred </label>

                           <input type="file" name="wordfile" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple="">

                         </div>

                         

                         

                          

                        <div class="col-md-12 pb-0">

                            <label class="field-txt">Additional Comments <span>*</span></label>

                            <textarea name="Message" placeholder="" /></textarea>

                         </div>

                         

                        <div class="col-md-12">

                            <div class="check-list col-lg-12 nopaddding">

                              <input id="checkbox22" type="checkbox" name="NDA" value="Required NDA" >

                              <label for="checkbox22">Please send me a Non Disclosure Agreement for a Confidential Consultation</label>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <input type="hidden" name="hiddencapcha" value="">

                             <input name="action" value="main-form" type="hidden">

                            <input type="hidden" name="ctry" value="">

                            <input type="hidden" name="pc" value="">

                            <input class="" type="hidden" name="cip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">

            <input type="hidden" id="location" name="locationURL" value="<?php echo $_SERVER['SCRIPT_URI'];?>">

                            <input type="hidden" name="form-name" value="Order Form Query">

    



              <script type="text/javascript">document.getElementById('location').value = window.location.href;</script>

                            <input  class="submit submitBtn" type="submit" value="Submit" />

                     

                    

                         </div>

                         </div>

                      </form>

                    </div>







 

        

                </div>



                

            </div>

          </div>

        </div>

      </div>

    </div>

    

  </section>



</div>                

   



  </main>
<?php include('inc/small_footer.php');?>