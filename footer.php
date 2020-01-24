<?php


?>


<section id="footer">
    <footer class="section-bg">
      <div class="footer-top">
        <div class="container">

          <div class="row">

            <div class="col-lg-6">

              <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <!-- <h3>OJASS</h3> -->
                      <img src="../img/logo-crp.png" alt="logo" srcset="" width="250px">
                      <br><br>
                    <p>
                      The Annual Techno-Management
                      fest of NIT Jamshedpur.</p>

                  </div>


                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="./">Home</a></li>
                      <li><a href="https://www.nitjsr.ac.in/" target="_blank">NIT Jamshedpur</a></li>

                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      National Institute of Technology,
                      <br>
                      Jamshedpur, Jharkhand<br>

                    </p>
                  </div>

                  <div class="social-links">
                    <a href="https://twitter.com/ojass_nitjsr" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/Ojassnitjamshedpur" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/ojass_techfest" class="instagram"><i class="fa fa-instagram"></i></a>
                    <!-- <i href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
                  </div>

                </div>

              </div>

            </div>

            <div class="col-lg-6">

              <div class="form">
                <!-- action="" method="post" role="form" -->
                <h4>Send us a message</h4>
                <!-- <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique
                  commodi harum aut temporibus.</p> -->

                <form class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                      data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="5" data-rule="required"
                      data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>

                  <div id="sendmessage">Your message has been sent. Thank you!</div>
                  <div id="errormessage"></div>

                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
                
              </div>

            </div>

            <div id="snackbar">Your message has been sent. Thank you!</div>

          </div>

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; &nbsp;<a class="webteam" href="../Developers/" target="_blank">OJASS WEBTEAM</a>
          
        </div>
      </div>
    </footer>
  </section>