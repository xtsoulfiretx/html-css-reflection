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
        require __DIR__ . "/src/header.php"; 
        ?>
        <div class="contact_body">
            <div class="page_indicator">
                <h5 class="home">Home &nbsp;</h5><h5>&sol; Our Offices</h5>
            </div>
            <div class="main_container">
                <h3>Contact Us</h3>
                <div class="contactform/info">
                    <div class="email_details">
                        <div class="basic-details">
                            <span>Email us on&colon;</span>
                            <a href="mailto:sales@netmatters.com" class="email_address">sales&commat;netmatters.com</a>
                            <span>Business hours&colon;</span>
                            <span>Monday - Friday 07&colon;00 - 18&colon;00</span>
                        </div>
                        <div>
                            <span>Out of Hours IT Support <i class="fas fa-angle-down"></i></span>
                            <div class="accordian_answers">
                                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                <span><strong>Monday - Friday 18&colon;00 - 22&colon;00</strong></span>
                                <span><strong>Saturday 08&colon;00 - 16&colon;00</strong></span>
                                <span><strong>Sunday 10&colon;00 - 18&colon;00</strong></span>
                                <p>To log a critical task, you will need to call our main line number and select 
                                    Option 2 to leave an Out of Hours voicemail. A technician will contact you 
                                    on the number provided within 45 minutes of your call.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="enquiry-form">
                        <form method="POST" accept-charset="UTF-8" id="contact-form">
                            <div class="row">
                                <div class="row-column">
                                    <div class="form-group">
                                        <label for="contact-name" class="required">Your Name</label>
                                        <input class="form-input" name="contact-name" type="text" value id="contact-name">
                                    </div>
                                </div>
                                <div class="row-column">
                                    <div class="form-group">
                                        <label for="contact-email" class="required">Your Email</label>
                                        <input class="form-input" name="contact-email" type="text" value id="contact-email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                                </div>
                                <span class="media-body">
                                    Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <?php
                require __DIR__ . "/src/footer.php"; 
            ?>

        <?php 
        require __DIR__ . "/src/mobile.php"; 
        ?>

    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="javascript/myscript.js"></script>

    </body>
 </html>