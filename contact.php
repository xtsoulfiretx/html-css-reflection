<?php 
    ob_start();
        require_once __DIR__ . "/src/includes/bootstrap.php";
        include_once __DIR__ . "/src/includes/post-form.php";
        ?>
<!DOCTYPE html>
 <html lang="en">
  <head>
   <title>Contact Us | Netmatters</title> 
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="javascript/polyfill.js"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,400;1,500&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
   <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
   <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
   <link rel="manifest" href="/site.webmanifest">
   <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
   <link href="css/style.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/2617b01a9a.js" crossorigin="anonymous"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Metatags-->
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">
   </head>


    <body>
       <?php 
        include_once __DIR__ . "/src/includes/header.php"; 
       ?>
        <div class="contact_body">
            <div class="indicator-container">
                <div class="page_indicator container">
                    <a href="/netmatters_site/" class="home">Home</a><h5>&nbsp; &sol; Our Offices</h5>
                </div>
            </div>
            <div class="main-c container">
                <h3>Contact Us</h3>
                <div class="contactform-info">
                    <div class="email_details">
                        <div class="basic-details">
                            <p><strong>Email us on&colon;</strong><br></p>
                            <p><a href="mailto:sales@netmatters.com" class="email_address">sales&commat;netmatters.com</a><br></p>
                            <p><strong>Business hours&colon;</strong><br></p>
                            <p><strong>Monday - Friday 07&colon;00 - 18&colon;00</strong><br></p>
                        </div>
                        <div>
                            <p class="accordian-question"><strong>Out of Hours IT Support <i class="fas fa-angle-down"></strong></i></span>
                            <div class="accordian_answers">
                                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                <p><strong>Monday - Friday 18&colon;00 - 22&colon;00</strong></p>
                                <p><strong>Saturday 08&colon;00 - 16&colon;00</strong></p>
                                <p><strong>Sunday 10&colon;00 - 18&colon;00</strong></p>
                                <p>To log a critical task, you will need to call our main line number and select 
                                    Option 2 to leave an Out of Hours voicemail. A technician will contact you 
                                    on the number provided within 45 minutes of your call.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="enquiry-form">
                        <form method="POST" action="contact.php" accept-charset="UTF-8" id="contact-form">
                          <input type="hidden" name="action" value="contact-form">
                            <div class="rows">
                                <div class="row-column">
                                    <div class="form-group">
                                        <label for="contact-name" class="required">Your Name</label>
                                        <input class="form-input" name="contact-name" type="text" value id="contact-name">
                                    </div>
                                </div>
                                <div class="row-column">
                                    <div class="form-group">
                                        <label for="contact-email" class="required">Your Email</label>
                                        <input class="form-input email-c" name="contact-email" type="text" value id="contact-email">
                                    </div>
                                </div>
                            </div>
                            <div class="rows">
                                <div class="row-column">
                                    <div class="form-group">
                                        <label for="contact-telephone" class="required">Your Telephone Number</label>
                                        <input class="form-input" name="contact-telephone" type="text" value id="contact-telephone">
                                    </div>
                                </div>
                                <div class="row-column">
                                    <div class="form-group">
                                        <label for="contact-subject" class="required">Subject</label>
                                        <input class="form-input" name="contact-subject" type="text" value id="contact-subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="required">Message</label>
                                <textarea class="form-input" name="contact-message" type="text" id="contact-message"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="cb">
                                    <label class="enquiry-checkbox" for="contact-cb">
                                        <input type="checkbox" name="contact-cb" id="contact-cb" value=1>
                                        <span class="media-body">
                                            Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <button name="submit-e" class="btn send-e">Send Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <?php
                require_once __DIR__ . "/src/includes/footer.php"; 
            ?>

        <?php 
        require_once __DIR__ . "/src/includes/mobile.php"; 
        ?>

    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="javascript/myscript.js"></script>

    </body>
 </html>

