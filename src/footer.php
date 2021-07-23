<?php

echo '<div class="newsletter-full-width"> <!--Start of Newsletter-->
            <div class="newsletter container">
              <form method="POST" action="/src/nmdb.php" id="sign-up" class="sign-up">
                <h2>Email Newsletter Sign-Up</h2>
                <div class="sign-up-inputs-wrapper">
                  <div class="sign-up-input">
                    <div class="form-group required">
                      <label for="NLName" class="name-label">Your Name</label>
                      <input type="text" class="form-control" name="NLName">
                    </div>
                  </div>
                  <div class="sign-up-input">
                    <div class="form-group required">
                      <label for="NLEmail" class="email-label">Your Email</label>
                      <input type="email" class="form-control" name="NLEmail">
                    </div>
                  </div>
                </div>
                <div class="cb">
                  <label class="marketing-label" for="marketing-optin">
                    <input type="checkbox" name="accept-marketing" id="marketing-optin" value=1 />
                    <span class="media-body">
                      Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.
                    </span>
                  </label>
                </div>
                <button class="newsletter-button">SUBSCRIBE</button>
              </form>
            </div>
          </div> <!--End of Newsletter-->
        </div> <!--End of middle section-->
        
        <footer> <!--Footer-->
          <div class="footer container">
            <div class="row">
              <div class="f-column contact"> <!--contact column-->
                <h4>Contact Us</h4>
                <ul>
                  <li>11 Penfold Drive</li>
                  <li>Wymondham</li>
                  <li>Norfolk</li>
                  <li>NR18 0WZ</li>
                  <li>&nbsp;</li>
                  <li>Tel: <a href="tel:01603704020" title="call 01603704020 via 3cx" target="_blank">01603 70 40 20</a></li>
                  <li>Email: <a href="mailto:support@netmatters.com" class="netmatters-email">support@netmatters.com</a></li>
                </ul>
              </div> <!--End of contact column-->
              <div class="f-column about"> <!--about column-->
                <h4>About Netmatters</h4>
                <ul>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Our Careers</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Our Office Tour</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Cookie Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">UK Domains</a></li>
                </ul>
              </div> <!--End of about column-->
              <div class="f-column website"> <!--website column-->
                <h4>Website</h4>
                <ul>
                  <li><a href="#">Sitemap</a></li>
                  <li>&copy; Copyright Netmatters Ltd. 2021</li>
                  <li>All rights reserved</li>
                </ul>
              </div> <!--End of website column-->
              <div class="f-column social"> <!--Social media column-->
                <h4>Social Media</h4>
                <div class="social-media">
                  <div class="row">
                    <div class="social-box">
                      <a class="facebook" href="#"><span class="icon facebook"><i class="fab fa-facebook-f"></i></span></a>
                    </div>
                    <div class="social-box">
                      <a class="twitter" href="#"><span class="icon twitter"><i class="fab fa-twitter"></i></span></a>
                    </div>
                    <div class="social-box">
                      <a class="linkedin" href="#"><span class="icon linkedin"><i class="fab fa-linkedin-in"></i></span></a>
                    </div>
                  </div>
                </div>
              </div> <!--End of Social media column-->
            </div>
          </div>
        </footer> <!--End of footer-->

        <div class="awards-section"> <!--Start of awards section-->
          <div class="awards container">
            <div class="awards-list">
              <div class="award-item-g badgemain"><img src="images/google-partner.png" alt="Google partner badge"></div>
              <div class="award-item smp-badge"><img src="images/silver-microsoft-partner.jpg" alt="Silver Microsoft partner badge"></div>

              <div class="award-container award-item">
                <div class="f5-badge"><img src="images/future-50-bw.jpg" alt="future 50 membership badge bw" class="grayscale"></div>
                <div class="f5-badge"><img src="images/future-50.jpg" alt="future 50 membership badge" class="colored"></div>
              </div>

              <div class="award-container award-item">
                <div class="qms-badge grayscale"><img src="images/qms-bw.jpg" alt="qms cerificate bw"></div>
                <div class="qms-badge colored"><img src="images/qms.jpg" alt="qms cerificate"></div>
              </div>

              <div class="award-container award-item">
                <div class="ncc-badge grayscale"><img src="images/norfolk-carbon-charter-bw.jpg" alt="Norfolk carbon charter badge bw"></div>
                <div class="ncc-badge colored"><img src="images/norfolk-carbon-charter.jpg" alt="Norfolk carbon charter badge"></div>
              </div>
            </div>

            <div class="awards-list-row-2">
              <div class="award-container award-item">
                <div class="ifgw-badge grayscale"><img src="images/investing-in-future-growth-bw.jpg" alt="investing in future growth award bw"></div>
                <div class="ifgw-badge colored"><img src="images/investing-in-future-growth.jpg" alt="investing in future growth award"></div>
              </div>

              <div class="award-container award-item">
                <div class="prta-badge grayscale"><img src="images/princess-royal-training-bw.jpg" alt="Princess royal training award bw"></div>
                <div class="prta-badge colored"><img src="images/princess-royal-training.jpg" alt="Princess royal training award"></div>
              </div>

              <div class="award-container award-item">
                <div class="stw-badge grayscale"><img src="images/skills-of-tomorrow-bw.jpg" alt="skills of tomorrow winner bw"></div>
                <div class="stw-badge colored"><img src="images/skills-of-tomorrow.jpg" alt="skills of tomorrow winner"></div>
              </div>
            </div>
          </div>
        </div> <!--End of awards section-->

      </div>
      </div>
    </div>
    '
?>